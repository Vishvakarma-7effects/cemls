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
                <div class="stepper-item completed">
                    <div class="step-counter">3</div>
                    <div class="step-name">Payment</div>
                </div>
                <div class="stepper-item">
                    <div class="step-counter">4</div>
                    <div class="step-name">Thank You</div>
                </div>
            </div>
        </div>
        <div class="row">
            <main class="col-lg-6 order-1 order-lg-0 mt-4 mt-lg-0">
                <div class="card">
                    <div class="card-header">
                        <h6 class="b mb-0">Order summary</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover shopping-cart-wrap">
                                <thead class="text-muted">
                                    <tr>
                                        <th style="width:55%;" scope="col">Product</th>
                                        <th style="width:15%;" scope="col" width="100">Price</th>
                                        <th style="width:15%;" scope="col" width="100">Quantity</th>
                                        <th style="width:15%;" scope="col" class="text-right" width="100">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="55%">
                                            <figure class="media h-100">
                                                <figcaption class="media-body my-auto ">
                                                    <!--<a href="">-->
                                                    <h6 class="title mb-2">Camera 1</h6>
                                                    <!--</a>-->
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td width="15%">
                                            <div class="price-wrap">
                                                <span class="price-new">$3600</span>
                                            </div>
                                        </td>
                                        <td width="15%">
                                            {{$qty}}
                                        </td>
                                        <td width="15%" class="text-right">
                                            <div class="price-wrap">
                                                <var class="price">${{$price}}</var>
                                            </div>
                                        </td>
                                    </tr>
<!--                                    <tr>
                                        <td width="55%">
                                            <figure class="media h-100">
                                                <figcaption class="media-body my-auto ">
                                                    <a href="">
                                                    <h6 class="title mb-2"></h6>
                                                    </a>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td width="15%">
                                            <div class="price-wrap">
                                                <span class="price-new"><strike></strike></span>
                                            </div>
                                        </td>
                                        <td width="15%">
                                            1
                                        </td>
                                        <td width="15%" class="text-right">
                                            <div class="price-wrap">
                                                <var class="price"><strike></strike></var>
                                            </div>
                                        </td>
                                    </tr>-->
                                    <tr>
                                        <td colspan="4">
                                            Package Charge will automatically charged every last day of month
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Sub Total</th>
                                        <td></td>
                                        <td></td>
                                        <th>${{$price}}</th>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td></td>
                                        <td></td>
                                        <th>${{$price}}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <main class="col-lg-6 order-1 order-lg-0 mt-4 mt-lg-0">
                <div class="card">
                    <div class="card-header">
                        <h6 class="b mb-0">Credit Card</h6>
                    </div>
                    <div class="card-body">
                        <form
                            role="form"
                            action="{{ url('organizer-registration/4') }}"
                            method="post"
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                            @csrf

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input
                                        class='form-control' size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Card Number</label> <input
                                        autocomplete='off' class='form-control card-number' maxlength="16" size='16'
                                        type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label>
                                    <input autocomplete='off'
                                           class='form-control card-cvc' placeholder='ex. 311' maxlength="3" size='3'
                                           type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' maxlength="2" size='2'
                                        type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' maxlength="4" size='4'
                                        type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>Please correct the errors and try
                                        again.</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit"><i class="fas fa-money-check"></i> Pay Now (${{$price}})</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>

@endsection
@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
$(function () {

    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function (e) {
        var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
        $errorMessage.addClass('hide');

        $('.has-error').removeClass('has-error');
        $inputs.each(function (i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });

        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }

    });

    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];

            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }

});
</script>
@endsection