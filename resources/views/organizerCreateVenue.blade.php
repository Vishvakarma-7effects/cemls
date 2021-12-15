@extends('layouts.main')

@section('content')
<section class="section-pagetop bg-gray">
    <div class="container clearfix">
        <h4 class="title-page dark b float-xl-left mb-0">Purchase Camera</h4>
        <nav class="float-xl-right mt-2 mt-xl-0">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#" class="dark"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">Purchase Camera</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section-content padding-y bg-white">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="card box">
                    <div class="card-body">
                        <div class="camera_section">
                            <div class="card card-event" style="padding: 30px;">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ asset('public/assets/img/camera.png') }}"/>
                                    </div>
                                    <div class="col-8 p-t-b-0-6em">
                                        <h2>Camera</h2>
                                        <p class="price">$3600</p>
                                        <p class="delivery-info"><span>360XStream</span> Get it in next <b>15 to 22 days</b></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <p>FREE Delivery by <span>360XStream</span></p>
                                        <br>
                                        <p class="note">Note: $3600 is one time charge for delivery of camera equipment setup of camera at your location by a professional.</p>
                                        <br>
                                        <div class="d-flex align-center justify-content-between" style="margin-top: 10px;">
                                            <div class="cart_btn">
                                                <a class="qty_inc_dec" data-type="minus" href="javascript:void(0);"><i class="fa fa-minus-circle"></i></a> <span id="qty">1</span> <a data-type="plus" class="qty_inc_dec" href="javascript:void(0);"><i class="fa fa-plus-circle"></i></a>
                                                <input type="hidden" id="qty_val" value="1"/>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" id="buy_now" class="btn btn-dark">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')
<script type="text/javascript">

    $(document).ready(function () {
        var val = 1;
        $(".qty_inc_dec").click(function () {
            var click_type = $(this).data('type');
            var last_qty = parseFloat($('#qty_val').val());
            if (click_type == 'plus') {
                val = last_qty + 1;
            } else if (click_type == 'minus') {
                if (last_qty > 1) {
                    val = last_qty - 1;
                } else {
                    alert('You must have choose one camera');
                }

            }
            $('#qty_val').val(val);
            $('#qty').html(val);
        });
    });

    $("#buy_now").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: '{{ url("set-qty") }}',
            method: "post",
            data: {
                _token: '{{ csrf_token() }}',
                qty: parseFloat($('#qty_val').val()),
            },
            success: function (data) {
                //window.location.reload();
                window.location.replace(data.url);
            }
        });
    });


    $(".select-package").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: '{{ url("set-package") }}',
            method: "post",
            data: {
                _token: '{{ csrf_token() }}',
                package_id: $(this).data('id'),
            },
            success: function (data) {
                //window.location.reload();
                window.location.replace(data.url);
            }
        });
    });
</script>
@endsection