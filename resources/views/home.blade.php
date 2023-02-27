<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            height: 100%;
        }

        .column {
            float: left;
            width: 20%;
            padding: 5px;
        }

        .column2 {
            float: left;
            width: 60%;
            padding: 5px;
            margin: auto;
        }

        .modalColumn {
            float: left;
            width: 40%;
            padding: 5px;
        }

        .modalColumn2 {
            float: left;
            width: 60%;
            padding: 5px;
        }

        .checkoutColumn {
            float: left;
            width: 20%;
            padding: 5px;
        }

        .checkoutColumn2 {
            float: left;
            width: 80%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        /*Background color*/
        #grad1 {
            background-color: #9C27B0;
            background-image: linear-gradient(120deg, #FF4081, #81D4FA);
        }

        /*form styles*/
        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
        }

        #msform fieldset .form-card {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E;
        }

        #msform input,
        #msform textarea {
            padding: 0px 8px 4px 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 16px;
            letter-spacing: 1px;
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid skyblue;
            outline-width: 0;
        }

        /*Blue Buttons*/
        #msform .action-button {
            width: 100px;
            background: #0d6efd;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
        }

        /*Previous Buttons*/
        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
        }

        /*Dropdown List Exp Date*/
        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px;
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue;
        }

        /*The background card*/
        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative;
        }

        /*FieldSet headings*/
        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
        }

        #progressbar .active {
            color: #000000;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 33%;
            float: left;
            position: relative;
        }

        /*Icons in the ProgressBar*/
        /* #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f023";
        } */

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f07a";
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f09d";
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c";
        }

        /*ProgressBar before any progress*/
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #0d6efd;
        }

        /*Imaged Radio Buttons*/
        .radio-group {
            position: relative;
            margin-bottom: 25px;
        }

        .radio {
            display: inline-block;
            width: 204;
            height: 104;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px;
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
        }

        /*Fit image in bootstrap div*/
        .fit-image {
            width: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">PENJUALAN
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('laporan') }}">Laporan Penjualan</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        @foreach ($products as $product)
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter{{ $product->id }}Title" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h4 style="text-align: center;">PRODUCT DETAIL</h4>
                                        <div class="row">
                                            <div class="modalColumn">
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="Snow" style="width:100%" data-toggle="modal" data-target="#exampleModalCenter{{ $product->id }}">
                                            </div>
                                            <div class="modalColumn2 text-dark">
                                                <div style="margin-bottom: 3px;" data-toggle="modal" data-target="#exampleModalCenter{{ $product->id }}">{{ $product->product_name }}</div>
                                                @if ($product->discount > 0)
                                                <div style="font-size: 10px; margin-top: 3px; margin-bottom: 3px;"><s>{{ $product->currency }}. {{ number_format($product->price, 0, ",", ".") }}</s></div>
                                                @endif
                                                {{-- <div style="font-size: 10px; margin-top: 3px; margin-bottom: 3px;"><s>Rp 15.000</s></div> --}}
                                                <div style="margin-top: 3px; margin-bottom: 3px;">{{ $product->currency }}. {{ number_format($product->price - (((int)$product->discount / 100) * $product->price), 0, ",", ".") }}</div>
                                                {{-- <div style="margin-top: 3px; margin-bottom: 3px;">Rp 12.000</div> --}}
                                                <div style="margin-top: 3px; margin-bottom: 3px;">Dimension: {{ $product->dimension }}</div>
                                                <div style="margin-top: 3px; margin-bottom: 3px;">Price Unit: {{ $product->unit }}</div>
                                                <button type="button" onclick="buyFunction({{ $product->id }})" class="btn btn-primary btn-sm btn-block rounded-pill buy_btn_{{ $product->id }}" style="width: 150px; margin-top: 20px;">BUY</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- MultiStep Form -->
                        <div class="row justify-content-center mt-0">
                            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0
                                    mt-3 mb-2">
                                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                    <div class="row">
                                        <div class="col-md-12 mx-0">
                                            <form id="msform">
                                                <!-- progressbar -->
                                                <ul id="progressbar">
                                                    <li class="active" id="personal"><strong>Product List</strong></li>
                                                    <li id="payment"><strong>Checkout Page</strong></li>
                                                    <li id="confirm"><strong>Finish</strong></li>
                                                </ul>
                                                <!-- fieldsets -->
                                                <fieldset>
                                                    <div class="form-card">
                                                        <p id="alertBuy" class="text-danger text-center" style="display: none;"><strong>Pilih minimal 1 produk!</strong></p>
                                                        @foreach ($products as $product)
                                                        <div class="row">
                                                            <div class="column">
                                                                <img src="{{ asset('storage/' . $product->image) }}" alt="Snow" style="width:100%" data-toggle="modal" data-target="#exampleModalCenter{{ $product->id }}">
                                                            </div>
                                                            <div class="column2 text-dark">
                                                                <div data-toggle="modal" data-target="#exampleModalCenter{{ $product->id }}">{{ $product->product_name }}</div>
                                                                @if ($product->discount > 0)
                                                                <div data-toggle="modal" data-target="#exampleModalCenter{{ $product->id }}" style="font-size: 10px;"><s>{{ $product->currency }}. {{ number_format($product->price, 0, ",", ".") }}</s></div>
                                                                @endif
                                                                <div data-toggle="modal" data-target="#exampleModalCenter{{ $product->id }}">{{ $product->currency }}. {{ number_format($product->price - (((int)$product->discount / 100) * $product->price), 0, ",", ".") }}</div>
                                                            </div>
                                                            <div class="column" style="margin: auto;">
                                                                <button type="button" onclick="buyFunction({{ $product->id }})" class="btn btn-primary rounded buy_btn_{{ $product->id }}">BUY</button>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <input type="button" name="next" class="next action-button btn btn-primary btn-sm btn-block rounded-pill" style="width: 150px;" value="CHECKOUT" />
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-card" id="checkoutPage">
                                                    </div>
                                                    <input type="button" name="next" class="next2 action-button btn btn-primary btn-sm btn-block rounded-pill" style="width: 150px;" value="CONFIRM" />
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-card">
                                                        <h2 class="fs-title text-center">Success
                                                            !</h2>
                                                        <br><br>
                                                        <div class="row
                                                                justify-content-center">
                                                            <div class="col-3">
                                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                                    class="fit-image">
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row
                                                                justify-content-center">
                                                            <div class="col-7 text-center">
                                                                <h5>Your order is processed</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'>
        var arrayProduct = [];
        var idProduct = 0;
        var total_price = 0;

        $(document).ready(function () {
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function () {
                if (arrayProduct.length == 0) {
                    $("#alertBuy").show();
                    return false;
                } else {
                    $("#alertBuy").hide();
                }

                $.ajax({
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "arrayProduct": arrayProduct
                    },
                    url: "{{ route('checkout') }}",
                    dataType: 'json',
                    success: function (result) {
                        var pageCheckout = "";
                        var list_id = [];
                        result.forEach((element, index, array) => {
                            list_id.push(element.id);
                            let priceProduct = element.price - ((element.discount / 100) * element.price);
                            total_price += priceProduct;
                            pageCheckout += `
                            <div class="row py-4">
                                <div class="checkoutColumn">
                                    <img src="{{ asset('storage') }}/`+element.image+`" alt="Snow" style="width:100%">
                                </div>
                                <div class="checkoutColumn2 text-dark">
                                    <div>`+element.product_name+`</div>
                                    <input type="number" min="1" onchange="changeQty(this.value,`+element.price+`,`+element.id+`)" value="1" id="qty_`+element.id+`" style="width: 80px;"> `+element.unit+`
                                    <input type="hidden" id="subtotal_hidden_`+element.id+`" value="`+priceProduct+`">
                                    <div>Subtotal: <span id="subtotal_`+element.id+`">`+formatRupiah(priceProduct.toString(), element.currency)+`</span></div>
                                </div>
                            </div>
                            `;
                        });

                        pageCheckout += `
                        <input type="hidden" id="listId" value="`+list_id+`">
                        <div class="text-center mt-5">
                            <span class="border border-dark p-3 text-dark"><strong>TOTAL : <span id="total_price">`+formatRupiah(total_price.toString(), "Rp")+`</span></strong></span>
                        </div>
                        `;

                        $("#checkoutPage").html(pageCheckout);
                    },
                    error: function (data) {

                    }
                });


                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });


            $(".next2").click(function () {
                var arrayProductConfirm = [];

                arrayProduct.forEach((element, index, array) => {
                    var qtyValue = document.getElementById("qty_"+element).value;
                    let sub_total = document.getElementById("subtotal_hidden_"+element).value;
                    arrayProductConfirm.push({id: element,qty: qtyValue, sub_total: sub_total});
                });

                $.ajax({
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "arrayProductConfirm": arrayProductConfirm,
                        "listIdProduct": arrayProduct,
                        "total_price": total_price
                    },
                    url: "{{ route('confirm') }}",
                    dataType: 'json',
                    success: function (result) {
                        //
                    },
                    error: function (data) {
                        //
                    }
                });

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });


            $(".previous").click(function () {
                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function () {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function () {
                return false;
            })

        });
    </script>
    <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function (e) {
            e.preventDefault();
        });

        function buyFunction(id) {
            idProduct = id;
            $(".buy_btn_"+id).toggleClass("btn-secondary");

            result = arrayProduct.includes(id)

            if (result) {
                arrayProduct = arrayProduct.filter(checkAdult)
            } else {
                arrayProduct.push(id);
            }
        }

        function checkAdult(lisyProduct) {
            return lisyProduct != idProduct;
        }

        function changeQty(qty, price, id) {
            var listId = document.getElementById("listId").value;
            var listIdArr = listId.split(',');
            var subtotalChanged = 0;
            var priceUpdate = qty * price;
            var priceUpdate2 = formatRupiah(priceUpdate.toString(), "Rp")

            $("#subtotal_hidden_"+id).val(priceUpdate);
            $("#subtotal_"+id).text(priceUpdate2);

            listIdArr.forEach((element, index, array) => {
                var value = document.getElementById("subtotal_hidden_"+element).value;
                subtotalChanged += parseInt(value);
            });
            $("#total_price").text(formatRupiah(subtotalChanged.toString(), "Rp"));
            total_price = subtotalChanged
        }

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix){
            var number_string = angka.replace(/[^,\d]/g, '').toString();
            split   		= number_string.split(',');
            sisa     		= split[0].length % 3;
            rupiah     		= split[0].substr(0, sisa);
            ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if(ribuan){
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
</body>
</html>
