<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();

        return view('home', [
            'products' => $products
        ]);
    }

    public function checkout(Request $request)
    {
        $products = Product::whereIn('id', $request->input('arrayProduct'))->get();
        return $products;

    }

    public function confirm(Request $request)
    {
        DB::beginTransaction();

        $products = Product::whereIn('id', $request->input('listIdProduct'))->get();
        $arrProductConfirm = $request->input('arrayProductConfirm');

        $document_code = Str::random(3);
        $document_number = random_int(1000000000, 9999999999);
        $user = Auth::user();

        try {
            $insertProdcuct = new TransactionHeader();
            $insertProdcuct->document_code = strtoupper($document_code);
            $insertProdcuct->document_number = $document_number;
            $insertProdcuct->user = $user->email;
            $insertProdcuct->total = $request->input('total_price');
            $insertProdcuct->date = date('Y-m-d');
            $insertProdcuct->save();

            foreach ($products as $product) {
                $insertProdcuct2 = new TransactionDetail();
                $insertProdcuct2->document_code = strtoupper($document_code);
                $insertProdcuct2->document_number = $document_number;
                $insertProdcuct2->product_code = $product->product_code;
                $insertProdcuct2->price = $product->price - (((int)$product->discount / 100) * $product->price);
                foreach ($arrProductConfirm as $productConfirm) {
                    if ($productConfirm['id'] == $product->id) {
                        $insertProdcuct2->quantity = $productConfirm['qty'];
                        $insertProdcuct2->sub_total = $productConfirm['sub_total'];
                    }
                }
                $insertProdcuct2->unit = $product->unit;
                $insertProdcuct2->currency = $product->currency;
                $insertProdcuct2->save();
                DB::commit();
            }
        } catch (Exception $e) {
            DB::rollBack();
            return $e->getMessage();

        }

        return true;
    }
    public function laporan()
    {
        $transactions = TransactionHeader::with(['transactionDetails.product'])->orderBy('id', 'desc')->get();

        return view('laporan', [
            'transactions' => $transactions
        ]);
    }
}
