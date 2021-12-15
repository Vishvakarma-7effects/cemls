@extends('layouts.mainFront')
@section('content')
<!-- main content -->
<div role="main" class="main">
    <section class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>
	
	<div id="googlemaps" class="google-map"></div>

    <div class="region region-before-content">
        <div id="block-views-contact-us-block-1" class="block block-views">
            <div class="content">
                <div class="view view-contact-us view-id-contact_us view-display-id-block_1 view-dom-id-e7d5eff9ec4c04013a18091de81529e1">
                    <div class="view-content">
                        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
                            <div id="contact-us" class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form class="user-info-from-cookie contact-form" action="/contact-us" method="post" id="contact-site-form" accept-charset="UTF-8">
                                            <div>
                                                <div class="form-item form-type-textfield form-item-name">
                                                    <label for="edit-name">Your name <span class="form-required" title="This field is required.">*</span></label>
                                                    <input type="text" id="edit-name" name="name" value="" size="60" maxlength="255" class="form-text required" />
                                                </div>
                                                <div class="form-item form-type-textfield form-item-mail">
                                                    <label for="edit-mail">Your e-mail address <span class="form-required" title="This field is required.">*</span></label>
                                                    <input type="text" id="edit-mail" name="mail" value="" size="60" maxlength="255" class="form-text required" />
                                                </div>
                                                <div class="form-item form-type-textfield form-item-subject">
                                                    <label for="edit-subject">Subject <span class="form-required" title="This field is required.">*</span></label>
                                                    <input type="text" id="edit-subject" name="subject" value="" size="60" maxlength="255" class="form-text required" />
                                                </div>
                                                <div class="form-item form-type-textarea form-item-message">
                                                    <label for="edit-message">Message <span class="form-required" title="This field is required.">*</span></label>
                                                    <div class="form-textarea-wrapper resizable"><textarea id="edit-message" name="message" cols="60" rows="5" class="form-textarea required"></textarea></div>
                                                </div>
                                                <input type="hidden" name="form_build_id" value="form-r6ylcEph44-cNTofDi2p1r8fgkBORvwh7BLrDMn-Dp0" />
                                                <input type="hidden" name="form_id" value="contact_site_form" />
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                                            <div class="field-items">
                                                <div class="field-item even" property="content:encoded">
                                                    <h4 class="push-top">Get in <strong>touch</strong></h4>
                                                    <p>Have questions or just want to chat? Connect with us!</p>

                                                    <hr />

                                                    <h4>Mailing <strong>Address</strong></h4>
                                                    <ul class="list-unstyled">
                                                        <li><i class="icon icon-map-marker"></i> <strong>Address:</strong> 1900 Danbrook Drive Suite 623, Sacramento CA, United States</li>
                                                        <li><i class="icon icon-phone"></i> <strong>Toll Free Phone:</strong> (800) 501-3787</li>
                                                        <li><i class="icon icon-phone"></i> <strong>Phone:</strong> (916) 330-4126</li>
                                                        <li><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:info@cemls.com">info@cemls.com</a></li>
                                                    </ul>

                                                    <hr />

                                                    <h4>Business <strong>Hours</strong></h4>
                                                    <ul class="list-unstyled">
                                                        <li><i class="icon icon-time"></i> Monday - Friday 8am to 6pm PST</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCl0Yy0bQfeDRw8bgVnGtzBTqBoon5ggR4"></script>

                            <script>
                                jQuery(document).ready(function ($) {
                                    /*
                                     Map Settings

                                     Find the Latitude and Longitude of your address:
                                     - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
                                     - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

                                     */

                                    // Map Markers
                                    var mapMarkers = [
                                        {
                                            address: "1029 H St, Sacramento, CA 95814",
                                            html: "<strong>CA Corporate Office</strong><br />Sacramento CA, United States",
                                            icon: {
                                                image: "/sites/all/themes/Porto/img/pin.png",
                                                iconsize: [26, 46],
                                                iconanchor: [12, 46],
                                            },
                                            popup: true,
                                        },
                                    ];

                                    // Map Initial Location
                                    var initLatitude = 38.582518;
                                    var initLongitude = -121.49133;

                                    // Map Extended Settings
                                    var mapSettings = {
                                        controls: {
                                            panControl: true,
                                            zoomControl: true,
                                            mapTypeControl: true,
                                            scaleControl: true,
                                            streetViewControl: true,
                                            draggable: false,
                                            overviewMapControl: true,
                                        },
                                        scrollwheel: false,
                                        markers: mapMarkers,
                                        latitude: initLatitude,
                                        longitude: initLongitude,
                                        zoom: 16,
                                    };

                                    var map = $("#googlemaps").gMap(mapSettings);

                                    // Map Center At
                                    var mapCenterAt = function (options, e) {
                                        e.preventDefault();
                                        $("#googlemaps").gMap("centerAt", options);
                                    };
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <div class="col-md-12"></div>

                <div class="col-md-12">
                    <div class="region region-content">
                        <div id="node-28166" class="node node-page clearfix" about="/contact-us" typeof="foaf:Document">
                            <span property="dc:title" content="Contact Us" class="rdf-meta element-hidden"></span>

                            <div class="content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end main content-->
@endsection
@section('scripts')
<script>

</script>
@endsection