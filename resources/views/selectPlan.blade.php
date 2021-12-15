@extends('layouts.main')
@section('content')
<section class="section-pagetop bg-gray">
    <div class="container clearfix">
        <h4 class="title-page dark b float-xl-left mb-0">Organizer Registration</h4>
        <nav class="float-xl-right mt-2 mt-xl-0">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#" class="dark"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">Organizer Registration</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section-content padding-y bg-white">
    <div class="container">
        <div class="row">
            <main class="col-lg-12 order-1 order-lg-0 mt-4 mt-lg-0">

                <div>
                    <div class="stepper-wrapper">
                        <div class="stepper-item completed">
                            <div class="step-counter">1</div>
                            <div class="step-name">Registration</div>
                        </div>
                        <div class="stepper-item completed">
                            <div class="step-counter">2</div>
                            <div class="step-name">Plans</div>
                        </div>
                        <div class="stepper-item">
                            <div class="step-counter">3</div>
                            <div class="step-name">Payment</div>
                        </div>
                        <div class="stepper-item">
                            <div class="step-counter">4</div>
                            <div class="step-name">Thank You</div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="pricing-container">
                        <div class="camera_section">
                            <div class="card card-event" style="padding: 30px;">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ asset('public/assets/img/camera.png') }}"/>
                                    </div>
                                    <div class="col-8 p-t-b-5em">
                                        <h2>Camera  1</h2>
                                        <p class="price">$3600</p>
                                        <p class="delivery-info"><span>360XStream</span> Get it in next <b>15 to 22 days</b></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <p>FREE Delivery by <span>360XStream</span></p>
                                        <br>
                                        <p class="note">Note: $3600 is one time charge for delivery of camera equipment setup of camera at your location by a professional.</p>
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
                        <div class="pricing-switcher">
                            <p class="fieldset">
                                <input type="radio" name="duration-1" value="monthly" id="monthly-1" checked="" />
                                <label for="monthly-1">Credit Card</label>
                                <input type="radio" name="duration-1" value="yearly" id="yearly-1" />
                                <label for="yearly-1">Cheque</label>
                                <span class="switch"></span>
                            </p>
                        </div>
                        <ul class="pricing-list bounce-invert">

                            @foreach($packages as $key => $package)

                            <li>
                                <ul class="pricing-wrapper">
                                    <li data-type="monthly" class="is-visible is-ended">
                                        <header class="pricing-header">
                                            <h2>{{$package->name}}</h2>
                                            <div class="price">
                                                <span class="currency">$</span>
                                                <span class="value">{{round($package->mPrice)}}</span>
                                                <span class="duration">mo</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                @foreach($package->features as  $feature)
                                                <li>{{$feature}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!--                                        <footer class="pricing-footer">
                                                                                    <a data-id="{{$package->mPriceId}}" class="select" href="javascript:void(0);">Select</a>
                                                                                </footer>-->
                                    </li>
                                    <li data-type="yearly" class="is-hidden is-ended">
                                        <header class="pricing-header">
                                            <h2>{{$package->name}}</h2>
                                            <div class="price">
                                                <span class="currency">$</span>
                                                <span class="value">{{round($package->aPrice)}}</span>
                                                <span class="duration">yr</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                @foreach($package->features as  $feature)
                                                <li>{{$feature}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!--                                        <footer class="pricing-footer">
                                                                                    <a data-id="{{$package->aPriceId}}" class="select">Select</a>
                                                                                </footer>-->
                                    </li>
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </main>
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
<script>
    jQuery(document).ready(function ($) {
        //hide the subtle gradient layer (.pricing-list > li::after) when pricing table has been scrolled to the end (mobile version only)
        checkScrolling($(".pricing-body"));
        $(window).on("resize", function () {
            window.requestAnimationFrame(function () {
                checkScrolling($(".pricing-body"));
            });
        });
        $(".pricing-body").on("scroll", function () {
            var selected = $(this);
            window.requestAnimationFrame(function () {
                checkScrolling(selected);
            });
        });

        function checkScrolling(tables) {
            tables.each(function () {
                var table = $(this),
                        totalTableWidth = parseInt(table.children(".pricing-features").width()),
                        tableViewport = parseInt(table.width());
                if (table.scrollLeft() >= totalTableWidth - tableViewport - 1) {
                    table.parent("li").addClass("is-ended");
                } else {
                    table.parent("li").removeClass("is-ended");
                }
            });
        }

        //switch from monthly to annual pricing tables
        bouncy_filter($(".pricing-container"));

        function bouncy_filter(container) {
            container.each(function () {
                var pricing_table = $(this);
                var filter_list_container = pricing_table.children(".pricing-switcher"),
                        filter_radios = filter_list_container.find('input[type="radio"]'),
                        pricing_table_wrapper = pricing_table.find(".pricing-wrapper");

                //store pricing table items
                var table_elements = {};
                filter_radios.each(function () {
                    var filter_type = $(this).val();
                    table_elements[filter_type] = pricing_table_wrapper.find('li[data-type="' + filter_type + '"]');
                });

                //detect input change event
                filter_radios.on("change", function (event) {
                    event.preventDefault();
                    //detect which radio input item was checked
                    var selected_filter = $(event.target).val();

                    //give higher z-index to the pricing table items selected by the radio input
                    show_selected_items(table_elements[selected_filter]);

                    //rotate each pricing-wrapper
                    //at the end of the animation hide the not-selected pricing tables and rotate back the .pricing-wrapper

                    if (!Modernizr.cssanimations) {
                        hide_not_selected_items(table_elements, selected_filter);
                        pricing_table_wrapper.removeClass("is-switched");
                    } else {
                        pricing_table_wrapper
                                .addClass("is-switched")
                                .eq(0)
                                .one("webkitAnimationEnd oanimationend msAnimationEnd animationend", function () {
                                    hide_not_selected_items(table_elements, selected_filter);
                                    pricing_table_wrapper.removeClass("is-switched");
                                    //change rotation direction if .pricing-list has the .bounce-invert class
                                    if (pricing_table.find(".pricing-list").hasClass("bounce-invert"))
                                        pricing_table_wrapper.toggleClass("reverse-animation");
                                });
                    }
                });
            });
        }
        function show_selected_items(selected_elements) {
            selected_elements.addClass("is-selected");
        }

        function hide_not_selected_items(table_containers, filter) {
            $.each(table_containers, function (key, value) {
                if (key != filter) {
                    $(this).removeClass("is-visible is-selected").addClass("is-hidden");
                } else {
                    $(this).addClass("is-visible").removeClass("is-hidden is-selected");
                }
            });
        }
    });
</script>
@endsection
