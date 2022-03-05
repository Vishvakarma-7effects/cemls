
@extends('layouts.mainOuterApp')

@section('content')
      @include('partials.outerDetailModal')
   

<!-- WRAPPER
=====================================================================================================================-->
<div class="ts-page-wrapper ts-homepage" id="page-top">

    <!--*********************************************************************************************************-->
    <!--HEADER **************************************************************************************************-->
    <!--*********************************************************************************************************-->
    <header id="ts-header" class="fixed-top">

      
    </header>
    <!--end Header-->

    <!-- HERO MAP
    =================================================================================================================-->
    <section id="ts-hero" class=" mb-0">

        <!--Fullscreen mode-->
        <div class="ts-full-screen d-flex">

            <!-- MAP
            =========================================================================================================-->
            <div class="ts-map w-100">
                <div id="ts-map-hero" class="h-100"
                     data-ts-map-controls="1"
                     data-ts-map-zoom="13"
                     data-ts-map-center-latitude="40.702411"
                     data-ts-map-center-longitude="-73.556842"
                     data-ts-map-zoom-position="google.maps.ControlPosition.LEFT_TOP"
                     data-ts-google-map-style='[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e9e9e9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#deebd8"},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#c4e5f3"},{"visibility":"on"}]}]'
                     data-ts-locale="en-US"
                     data-ts-currency="USD"
                     data-ts-unit="m<sup>2</sup>"
                     data-ts-display-additional-info="area_Area;bedrooms_Bedrooms;bathrooms_Bathrooms"
                >
                </div>
            </div>

            <!-- RESULTS
            =========================================================================================================-->
            <div class="ts-results__vertical ts-results__grid ts-shadow__sm w-100 h-100 scrollbar-inner bg-white">

                <!-- FORM
                =====================================================================================================-->
                <section class="ts-form__grid" data-bg-color="#f6f6f6">

                    <!--Title-->
                    <h4 class="font-weight-normal ts-text-color-light">Search Filter</h4>

                    <!--Form-->
                    <form class="ts-form ts-box mb-0">
                        <div class="form-row">

                            <!--Keyword-->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Address, City or ZIP">
                                </div>
                            </div>

                            <!--Category-->
                            <div class="col-md-3">
                                <select class="custom-select mb-3" id="type" name="category">
                                    <option value="">Type</option>
                                    <option value="1">Apartment</option>
                                    <option value="2">Villa</option>
                                    <option value="3">Land</option>
                                    <option value="4">Garage</option>
                                </select>
                            </div>

                            <!--Status-->
                            <div class="col-md-3">
                                <select class="custom-select mb-3" id="status" name="status">
                                    <option value="">Status</option>
                                    <option value="1">Sale</option>
                                    <option value="2">Rent</option>
                                </select>
                            </div>

                            <!--Min Area-->
                            <div class="col-sm-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-right-0" id="min-area" placeholder="Min Area">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white border-left-0">m<sup>2</sup></span>
                                    </div>
                                </div>
                            </div>

                            <!--Max Area-->
                            <div class="col-sm-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-right-0" id="max-area" placeholder="Max Area">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white border-left-0">m<sup>2</sup></span>
                                    </div>
                                </div>
                            </div>

                            <!--Min Price-->
                            <div class="col-sm-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-right-0" id="min-price" placeholder="Min Price">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white border-left-0">$</span>
                                    </div>
                                </div>
                            </div>

                            <!--Max Price-->
                            <div class="col-sm-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-right-0" id="max-price" placeholder="Max Price">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white border-left-0">$</span>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="ts-center__vertical justify-content-between">
                            <!--More Options Button-->
                            <a href="#more-options-collapse" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="more-options-collapse">
                                <i class="fa fa-plus-circle ts-text-color-primary mr-2 ts-visible-on-collapsed"></i>
                                <i class="fa fa-minus-circle ts-text-color-primary mr-2 ts-visible-on-uncollapsed"></i>
                                More Options
                            </a>

                            <!--Submit button-->
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary w-100" id="search-btn">Search</button>
                            </div>

                        </div>

                        <!--Hidden Form-->
                        <div class="collapse" id="more-options-collapse">

                            <!--Padding-->
                            <div class="pt-4">

                                <!--Row-->
                                <div class="form-row">

                                    <!--Bedrooms-->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="bedrooms">Bedrooms</label>
                                            <input type="number" class="form-control" id="bedrooms" name="bedrooms" min="0">
                                        </div>
                                    </div>

                                    <!--Bathrooms-->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="bathrooms">Bathrooms</label>
                                            <input type="number" class="form-control" id="bathrooms" name="bathrooms" min="0">
                                        </div>
                                    </div>

                                </div>
                                <!--end row-->

                                <!--Checkboxes-->
                                <div id="features-checkboxes" class="w-100">
                                    <h6 class="mb-3">Features</h6>

                                    <div class="ts-column-count-3">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_1" name="features[]" value="ch_1">
                                            <label class="custom-control-label" for="ch_1">Air conditioning</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_2" name="features[]" value="ch_2">
                                            <label class="custom-control-label" for="ch_2">Bedding</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_3" name="features[]" value="ch_3">
                                            <label class="custom-control-label" for="ch_3">Heating</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_4" name="features[]" value="ch_4">
                                            <label class="custom-control-label" for="ch_4">Internet</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_5" name="features[]" value="ch_5">
                                            <label class="custom-control-label" for="ch_5">Microwave</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_6" name="features[]" value="ch_6">
                                            <label class="custom-control-label" for="ch_6">Smoking
                                                allowed</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_7" name="features[]" value="ch_7">
                                            <label class="custom-control-label" for="ch_7">Terrace</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_8" name="features[]" value="ch_8">
                                            <label class="custom-control-label" for="ch_8">Balcony</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_9" name="features[]" value="ch_9">
                                            <label class="custom-control-label" for="ch_9">Iron</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_10" name="features[]" value="ch_10">
                                            <label class="custom-control-label" for="ch_10">Hi-Fi</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_11" name="features[]" value="ch_11">
                                            <label class="custom-control-label" for="ch_11">Beach</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_12" name="features[]" value="ch_12">
                                            <label class="custom-control-label" for="ch_12">Parking</label>
                                        </div>

                                    </div>
                                    <!--end ts-column-count-3-->

                                </div>
                                <!--end #features-checkboxes-->

                            </div>
                            <!--end Padding-->
                        </div>
                        <!--end more-options-collapse-->
                    </form>
                    <!--end ts-form-->
                </section>
                <!--end ts-form__grid-->

                <!-- TITLE and CONTROLS
                =====================================================================================================-->

                <section class="ts-center__vertical justify-content-between px-4 pt-3 pb-0">
                    <h4 class="font-weight-normal ts-text-color-light mb-0">28 Properties Found</h4>

                    <!-- <div id="display-control" class="d-none d-md-block">

                        <a href="#" class="btn btn-outline-secondary active px-3 mr-2 mb-2 ts-btn-border-muted">
                            <i class="fa fa-th-large"></i>
                        </a>
                        <a href="#" class="btn btn-outline-secondary px-3 mb-2 ts-btn-border-muted">
                            <i class="fa fa-th-list"></i>
                        </a>
                    </div> -->

                </section>

                <!-- RESULTS
                =====================================================================================================-->
                <section id="ts-results" class="h-100">
                    <div class="ts-results-wrapper"></div>
                </section>

            </div>
            <!--end ts-results-vertical-->

        </div>
        <!--end full-screen-->

    </section>
    <!--end ts-hero-->
    <!-- Modal -->
      
      
      
      @include('partials.outerDetailModal')
    
      <footer class="adm_footer mt-5">
            <div class="container-lg">
                <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="ftabt">
                    <h2 class="ft_head">About CemLS<sup>®</sup></h2>
                    <p class="ftpara"><span>CemLS<sup>®</sup></span> is a cemetery property Listing service, enabling you to showcase all your available property from your administrative location or remotely with a smartphone or tablet.</p>
                    </div>
                </div>

                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        <h2 class="ft_head">Quick Navigation</h2>
                        <ul class="ftlinks">
                            <li><a href="{{ url('aboutUs') }}">About Us</a></li>
                            <li><a href="{{ url('contactUs') }}">Contact Us</a></li>
                            {{-- <li><a href="#">Partner With Us</a></li>
                            <li><a href="#">360 Services</a></li>
                            <li><a href="#">Business Opportunity</a></li> --}}
                        </ul>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                        <h2 class="ft_head">For Cemeteries</h2>
                        <ul class="ftlinks">
                            <li><a href="{{ url('cemeterys')}}">List Cemetery</a></li>
                            <li><a href="#">Look Leads</a></li>
                            {{-- <li><a href="#">Add Agents</a></li>
                            <li><a href="#">FAQ</a></li> --}}
                        </ul>
                        </div>

                        {{-- <div class="col-lg-4 col-md-4 col-sm-4"> --}}
                        {{-- <h2 class="ft_head">For Sellers</h2>
                        <ul class="ftlinks">
                            <li><a href="#">List Products</a></li>
                            <li><a href="#">List Services</a></li>
                            <li><a href="#">List Facilities</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Low on Commissions</a></li>
                        </ul> --}}
                        {{-- </div> --}}
                    </div>
                </div>


                </div>

                <div class="ftbbx">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                    <ul class="ft_qlink">
                        <li>© 2018 Cemetery360</li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Helpdesk</a></li>
                    </ul>
                    <ul class="ftinfo">
                        <li><i class="fa fa-phone"></i> <a href="tel:(916) 330-4126">(916) 330-4126</a></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:info@cemls.com">info@cemls.com</a></li>
                    </ul>
                    </div>

                    <div class="col-lg-3 col-md-12">
                    <ul class="ftsocial">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </footer>

    <!--end #ts-footer-->

</div>


<!--end page-->
<link rel="stylesheet" href="{{ asset('newPublic/assets/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('newPublic/assets/font-awesome/css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('newPublic/assets/css/jquery.scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('newPublic/assets/css/style.css') }}">
<script src="{{ asset('newPublic/assets/js/jquery-3.3.1.min.js') }}"></script>


<script src="{{ asset('newPublic/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('newPublic/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyA9ylALS3mSrUHPkBBFocquYzOjC9eirNo"></script>
<script src="{{ asset('newPublic/assets/js/richmarker-compiled.js') }}"></script>
<script src="{{ asset('newPublic/assets/js/markerclusterer_packed.js') }}"></script>
<script src="{{ asset('newPublic/assets/js/infobox.js') }}"></script>
<script src="{{ asset('newPublic/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('newPublic/assets/js/sly.min.js') }}"></script>
<script src="{{ asset('newPublic/assets/js/dragscroll.js') }}"></script>
<script src="{{ asset('newPublic/assets/js/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('newPublic/assets/js/custom.js') }}"></script>
<script src="{{ asset('newPublic/assets/js/map-google.js') }}"></script>
<script>
    
$(document).ready(function($) {

    loadData();
    /*setInterval(function(){
      loadData() // this will run after every 5 seconds
    }, 5000);*/

    "use strict";

    //==================================================================================================================
    // VARIABLES
    // =================================================================================================================
    var mapId = "ts-map-hero";
    var newMarkers = [];
    var loadedMarkersData = [];
    var allMarkersData;
    var lastInfobox;
    var lastMarker;
    var map;
    var markerCluster;

    if( $("#"+mapId).length ) {

        var mapElement = $(document.getElementById(mapId));
        var mapDefaultZoom = parseInt(mapElement.attr("data-ts-map-zoom"), 10);
        var centerLatitude = mapElement.attr("data-ts-map-center-latitude");
        var centerLongitude = mapElement.attr("data-ts-map-center-longitude");
        var zoomPosition = mapElement.attr("data-ts-map-zoom-position");
        var controls = parseInt(mapElement.attr("data-ts-map-controls"), 10);
        ( controls === 0 ) ? controls = true : controls = false;
        var locale = mapElement.attr("data-ts-locale");
        var currency = mapElement.attr("data-ts-currency");
        var unit = mapElement.attr("data-ts-unit");
        var scrollWheel = mapElement.attr("data-ts-map-scroll-wheel");
        var mapStyle = mapElement.attr("data-ts-google-map-style");

        if (mapElement.attr("data-ts-display-additional-info")) {
            var displayAdditionalInfoTemp = mapElement.attr("data-ts-display-additional-info").split(";");
            var displayAdditionalInfo = [];
            for (var i = 0; i < displayAdditionalInfoTemp.length; i++) {
                displayAdditionalInfo.push(displayAdditionalInfoTemp[i].split("_"));
            }
        }

        // Default map zoom
        if (!mapDefaultZoom) {
            mapDefaultZoom = 14;
        }


        if( controls !== 0 && zoomPosition ){
            zoomPosition = eval(zoomPosition);
        }

        //==============================================================================================================
        // MAP ELEMENT
        // =============================================================================================================
        map = new google.maps.Map(document.getElementById("ts-map-hero"), {
            zoom: mapDefaultZoom,
            scrollwheel: scrollWheel,
            center: new google.maps.LatLng(centerLatitude, centerLongitude),
            mapTypeId: "satellite",
            disableDefaultUI: controls,
            zoomControlOptions: {
                position: eval(zoomPosition)
            },
            styles: eval(mapStyle)
        });


        //==============================================================================================================
        // LOAD DATA
        // =============================================================================================================
        loadData();

    }

    function loadData(parameters) {
        $.ajax({
            url: "http://127.0.0.1:8000/getallcemeteries",
            dataType: "json",
            method: "GET",
            cache: false,
            success: function(results){

                if( typeof parameters !== "undefined" && parameters["formData"] ){

                }
                else {
                    allMarkersData = results;
                    loadedMarkersData = allMarkersData;
                }

                createMarkers(); // call function to create markers
            },
            error : function (e) {
                console.log(e);
            }
        });
    }

    /*
    $("#search-btn").on("click", function (e) {
        e.preventDefault();
        var formData = $(this).closest("form").serializeArray();
        loadData({"formData": formData})
    });
    */

    //==================================================================================================================
    // Create DIV with the markers data
    // =================================================================================================================
    function createMarkers(){

        for (var i = 0; i < loadedMarkersData.length; i++) {

            var markerContent = document.createElement('div');

            markerContent.innerHTML =
            '<a href="#" class="ts-marker" data-ts-id="'+ loadedMarkersData[i]["id"] +'">' +
                ( ( loadedMarkersData[i]["ribbon"] !== undefined ) ? '<div class="ts-marker__feature">'+ loadedMarkersData[i]["ribbon"] +'</div>' : "" ) +
                ( ( loadedMarkersData[i]["title"] !== undefined ) ? '<div class="ts-marker__title">'+ loadedMarkersData[i]["title"] +'</div>' : "" ) +
                //( ( loadedMarkersData[i]["price"] !== undefined && loadedMarkersData[i]["price"] > 0 ) ? '<div class="ts-marker__info">'+ currency  + loadedMarkersData[i]["price"] +'</div>' : "" ) +
                ( ( loadedMarkersData[i]["price"] !== undefined && loadedMarkersData[i]["price"] > 0 ) ? '<div class="ts-marker__info">'+ formatPrice(loadedMarkersData[i]["price"]) +'</div>' : "" ) +
                ( ( loadedMarkersData[i]["marker_image"] !== undefined ) ? '<div class="ts-marker__image ts-black-gradient" style="background-image: url('+ loadedMarkersData[i]["marker_image"] +')"></div>' : '<div class="ts-marker__image ts-black-gradient" style="background-image: url(assets/img/marker-default-img.png)"></div>' ) +
            '</a>';

            placeRichMarker({"i": i, "markerContent": markerContent, "method": "latitudeLongitude"});

        }

        // After the markers are created, do the rest

        markersDone();
    }

    //==================================================================================================================
    // When markers are placed, do the rest
    // =================================================================================================================
    function markersDone(){

        //==================================================================================================================
        // GOOGLE MAPS MARKER CLUSTERER
        // =============================================================================================================
        var clusterStyles = [
            {
                url: 'assets/img/cluster.png',
                height: 48,
                width: 48
            }
        ];
        markerCluster = new MarkerClusterer(map, newMarkers, { styles: clusterStyles, maxZoom: 13, ignoreHidden: true });

        google.maps.event.trigger(map, 'idle');

        google.maps.event.addListener(map, 'idle', function(){
            createSideBarResult();
        });

    }

    //==================================================================================================================
    // Google Rich Marker plugin
    // =================================================================================================================
    function placeRichMarker(parameters){

        var i = parameters["i"];

        marker = new RichMarker({
            position: new google.maps.LatLng( loadedMarkersData[i]["latitude"], loadedMarkersData[i]["longitude"] ),
            map: map,
            draggable: false,
            content: parameters["markerContent"],
            flat: true,
            id: loadedMarkersData[i]["id"]
        });

        marker.content.className = "ts-marker-wrapper";
        marker.loopNumber = i;

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                if( lastMarker ){
                    $(lastMarker.content).removeClass("ts-hide-marker");
                }

                openInfobox({"id": $(this.content.firstChild).attr("data-ts-id"), "parentMarker": this, "i": i, "url": "http://127.0.0.1:8000/getallcemeteries" });

                /*
                if( markerTarget == "sidebar"){
                    openSidebarDetail( $(this.content.firstChild).attr("data-id") );
                }
                else if( markerTarget == "infobox" ){
                    openInfobox( $(this.content.firstChild).attr("data-id"), this, i );
                }
                else if( markerTarget == "modal" ){
                    openModal($(this.content.firstChild).attr("data-id"), "modal_item.php", false, isFullScreen);
                }
                */
            }
        })(marker, parameters["i"]));

        newMarkers.push(marker);

    }

    //==================================================================================================================
    // Open InfoBox on marker click
    // =================================================================================================================
    function openInfobox(parameters){

        var i = parameters["i"];
        var parentMarker = parameters["parentMarker"];
        var id = parameters["id"];
        var infoboxHtml = document.createElement('div');

        // First create and HTML for infobox
        createInfoBoxHTML({"i": i, "infoboxHtml": infoboxHtml});

        //==============================================================================================================
        // Set InfoBox options
        //==============================================================================================================
        var infoboxOptions = {
            content: infoboxHtml,
            disableAutoPan: false,
            pixelOffset: new google.maps.Size(-21, -13),
            zIndex: null,
            alignBottom: true,
            boxClass: "infobox-wrapper",
            enableEventPropagation: true,
            infoBoxClearance: new google.maps.Size(1, 1)
        };

        //==============================================================================================================
        // Before showing new InfoBox, close the last one
        //==============================================================================================================

        // Check if the last InfoBox exists and hide it
        if( lastInfobox !== undefined ){
            $(lastInfobox.content_).closest(".infobox-wrapper").removeClass("ts-show");
        }

        // Wait for the hiding animation and remove InfoBox from the map
        setTimeout(function(){
            if( lastInfobox !== undefined ){
                lastInfobox.close();
            }
            // Set new "Last" opened InfoBox
            lastInfobox = newMarkers[i].infobox;
        }, 200);

        // Hide the current marker, so only InfoBox is visible
        $(parentMarker.content).addClass("ts-hide-marker");

        // Set the new "Last" opened marker
        lastMarker = parentMarker;

        // Open new InfoBox
        newMarkers[i].infobox = new InfoBox(infoboxOptions);
        newMarkers[i].infobox.open(map, parentMarker);

        setTimeout(function(){
            $(".ts-infobox[data-ts-id='"+ id +"']").closest(".infobox-wrapper").addClass("ts-show");

            $(".ts-infobox[data-ts-id='"+ id +"'] .ts-close").on("click", function () {
                $(".ts-infobox[data-ts-id='"+ id +"']").closest(".infobox-wrapper").removeClass("ts-show");
                $(parentMarker.content).removeClass("ts-hide-marker");
                setTimeout(function(){
                    newMarkers[i].infobox.close();
                }, 200);
            });
        }, 50);
    }

    //==================================================================================================================
    // Create Infobox HTML element
    //==================================================================================================================

    function createInfoBoxHTML(parameters){

        var i = parameters["i"];
        var infoboxHtml = parameters["infoboxHtml"];
        //var additionalInfoHtml = "";
        //var key = Object.keys(obj)[0];
        //console.log( Object.keys(loadedMarkersData[0]).length );
        //console.log( loadedMarkersData[0]["name"] );
        /*
        if( loadedMarkersData[i]["additional_info"] ){
            for( var a = 0; a < loadedMarkersData[i]["additional_info"].length; a++ ){
                additionalInfoHtml +=
                '<dl>' +
                    '<dt>' + loadedMarkersData[i]["additional_info"][a]["title"] + '</dt>' +
                    '<dd>' + loadedMarkersData[i]["additional_info"][a]["value"] + '</dd>' +
                '</dl>';
            }
        }
        */
        infoboxHtml.innerHTML =
        '<div class="ts-infobox" data-ts-id="'+ loadedMarkersData[i]["id"] +'">' +
            '<img src="assets/img/infobox-close.svg" class="ts-close">' +

            ( ( loadedMarkersData[i]["ribbon"] !== undefined ) ? '<div class="ts-ribbon">'+ loadedMarkersData[i]["ribbon"] +'</div>' : "" ) +
            ( ( loadedMarkersData[i]["ribbon_corner"] !== undefined ) ? '<div class="ts-ribbon-corner"><span>'+ loadedMarkersData[i]["ribbon_corner"] +'</span></div>' : "" ) +

            '<a href="'+ loadedMarkersData[i]["url"] +'" class="ts-infobox__wrapper ts-black-gradient">' +
                ( ( loadedMarkersData[i]["badge"] !== undefined && loadedMarkersData[i]["badge"].length > 0 ) ? '<div class="badge badge-dark">'+ loadedMarkersData[i]["badge"] +'</div>' : "" ) +
                '<div class="ts-infobox__content">' +
                    '<figure class="ts-item__info">' +
                        ( ( loadedMarkersData[i]["price"] !== undefined && loadedMarkersData[i]["price"] > 0 ) ? '<div class="ts-item__info-badge">'+ formatPrice(loadedMarkersData[i]["price"]) +'</div>' : "" ) +
                        ( ( loadedMarkersData[i]["title"] !== undefined && loadedMarkersData[i]["title"].length > 0 ) ? '<h4>'+ loadedMarkersData[i]["title"] +'</h4>' : "" ) +
                        ( ( loadedMarkersData[i]["address"] !== undefined && loadedMarkersData[i]["address"].length > 0 ) ? '<aside><i class="fa fa-map-marker mr-2"></i>'+ loadedMarkersData[i]["address"] +'</aside>' : "" ) +
                    '</figure>' +
                        additionalInfoHTML({display: displayAdditionalInfo, i: i}) +
                    //( ( loadedMarkersData[i]["additional_info"] !== undefined && loadedMarkersData[i]["additional_info"].length > 0 ) ? '<div class="ts-description-lists">'+ additionalInfoHtml +'</div>' : "" ) +
                '</div>' +
                '<div class="ts-infobox_image" style="background-image: url('+ loadedMarkersData[i]["marker_image"] +')"></div>' +
            '</a>' +
        '</div>';
    }

    //==================================================================================================================
    // Create Additional Info HTML element
    //==================================================================================================================

    function additionalInfoHTML(parameters){
        var i = parameters["i"];
        var displayParameter;


        /*
        var additionalInfoHtml = "";
        for( var a = 0; a < parameters["display"].length; a++ ){
            displayParameter = parameters["display"][a];
            if( loadedMarkersData[i][ displayParameter ] !== undefined ) {
                additionalInfoHtml +=
                '<dl>' +
                    '<dt>' + loadedMarkersData[i][ displayParameter ]["title"] + '</dt>' +
                    '<dd>' + loadedMarkersData[i][ displayParameter ]["value"] + ((displayParameter === "area") ? unit : "") + '</dd>' +
                '</dl>';
            }
        }
        if( additionalInfoHtml ){
            return '<div class="ts-description-lists">' + additionalInfoHtml +'</div>';
        }
        else {
            return "";
        }
        */
        //var temp = parameters["display"].split("_");

        var additionalInfoHtml = "";
        for( var a = 0; a < parameters["display"].length; a++ ){
            displayParameter = parameters["display"][a];
            if( loadedMarkersData[i][ displayParameter[0] ] !== undefined ) {
                additionalInfoHtml +=
                '<dl>' +
                    '<dt>' + displayParameter[1] + '</dt>' +
                    '<dd>' + loadedMarkersData[i][ displayParameter[0] ] + ((displayParameter[a] === "area") ? unit : "") + '</dd>' +
                '</dl>';
            }
        }
        if( additionalInfoHtml ){
            return '<div class="ts-description-lists">' + additionalInfoHtml +'</div>';
        }
        else {
            return "";
        }
    }

    //==================================================================================================================
    // Create SideBar HTML Results
    //==================================================================================================================
    function createSideBarResult(){

        //var visibleMarkersId = [];
        var visibleMarkersOnMap = [];
        var resultsHtml = [];

        for( var i = 0; i < loadedMarkersData.length; i++ ){
            if ( map.getBounds().contains( newMarkers[i].getPosition()) ){
                visibleMarkersOnMap.push( newMarkers[i] );
                newMarkers[i].setVisible(true);
            }
            else {
                newMarkers[i].setVisible(false);
            }
        }

        markerCluster.repaint();

        for( i = 0; i < visibleMarkersOnMap.length; i++ ){
            var id = visibleMarkersOnMap[i].loopNumber;
            var additionalInfoHtml = "";

            if( loadedMarkersData[id]["additional_info"] ){
                for( var a = 0; a < loadedMarkersData[id]["additional_info"].length; a++ ){
                    additionalInfoHtml +=
                    '<dl>' +
                        '<dt>' + loadedMarkersData[id]["additional_info"][a]["title"] + '</dt>' +
                        '<dd>' + loadedMarkersData[id]["additional_info"][a]["value"] + '</dd>' +
                    '</dl>';
                }
            }

            resultsHtml.push(
                '<div class="ts-result-link" data-ts-id="' + loadedMarkersData[id]["id"] + '" data-ts-ln="' + newMarkers[id].loopNumber + '">' +
                    '<span class="ts-center-marker"><img src="assets/img/result-center.svg"></span>' +
                    '<a href="'+document.location.origin+'/cemetery/cemeteryDetailPage" class="card ts-item ts-card ts-result">' +
                        ( ( loadedMarkersData[i]["ribbon"] !== undefined ) ? '<div class="ts-ribbon">'+ loadedMarkersData[i]["ribbon"] +'</div>' : "" ) +
                        ( ( loadedMarkersData[i]["ribbon_corner"] !== undefined ) ? '<div class="ts-ribbon-corner"><span>'+ loadedMarkersData[i]["ribbon_corner"] +'</span></div>' : "" ) +
                        '<div href="detail-01.html" class="card-img ts-item__image" style="background-image: url('+document.location.origin+'/newPublic/images/cemlist-img1.jpg)"></div>' +
                        '<div class="card-body">' +
                            '<div class="ts-item__info-badge">'+ loadedMarkersData[id]["address"] +'</div>' +
                            '<figure class="ts-item__info">' +
                                '<h4>'+ loadedMarkersData[id]["cemetery_name"] +'</h4>' +
                                '<aside>' +
                                    '<i class="fa fa-map-marker mr-2"></i>'+ loadedMarkersData[id]["address"] +'</aside>' +
                            '</figure>' +
                            additionalInfoHTML({display: displayAdditionalInfo, i: i}) +
                        '</div>' +
                        '<div class="card-footer">' +
                            '<span class="ts-btn-arrow">Detail</span>' +
                        '</div>' +
                    '</a>' +
                '</div>'
            );
        }


        $(".ts-results-wrapper").html(resultsHtml);

        if( $("#ts-results .ts-sly-frame").hasClass("ts-loaded") ){
            $("#ts-results .ts-sly-frame").sly("reload");
        }
        else {
            initializeSly();
        }

        var resultsBar = $(".scroll-wrapper.ts-results__vertical-list, .scroll-wrapper.ts-results__grid");
        if ($(window).width() < 575) {
            resultsBar.find(".ts-results__vertical").css("pointer-events", "none");
            resultsBar.on("click", function () {
                $(this).addClass("ts-expanded");
                $(this).find(".ts-results__vertical").css("pointer-events", "auto");
                $("#ts-map-hero").addClass("ts-dim-map");
            });

            $("#ts-map-hero").on("click", function(){
                if (resultsBar.hasClass("ts-expanded")) {
                    resultsBar.removeClass("ts-expanded");
                    $("#ts-map-hero").removeClass("ts-dim-map");
                    resultsBar.find(".ts-results__vertical").css("pointer-events", "none");
                }
            });
        }
        else {
            resultsBar.removeClass("ts-expanded");
            resultsBar.find(".ts-results__vertical").css("pointer-events", "auto");
            $("#ts-map-hero").removeClass("ts-dim-map");
        }

    }

    // Highlight marker on result hover
    //==============================================================================================================

    var timer;
    $(document).on({
        mouseenter: function () {
            var id = $(this).parent().attr("data-ts-id");
            timer = setTimeout(function(){
                $(".ts-marker").parent().addClass("ts-marker-hide");
                $(".ts-marker[data-ts-id='" + id + "']").parent().addClass("ts-active-marker");
            }, 500);
        },
        mouseleave: function () {
            clearTimeout(timer);
            $(".ts-marker").parent().removeClass("ts-active-marker").removeClass("ts-marker-hide");
        }
    }, ".ts-result");

    function formatPrice(price){
        return Number(price).toLocaleString(locale, { style: 'currency', currency: currency }).replace(/\D\d\d$/, '');
    }

    var simpleMapId = "ts-map-simple";
    if( $("#"+simpleMapId).length ){

        mapElement = $(document.getElementById(simpleMapId));
        mapDefaultZoom = parseInt( mapElement.attr("data-ts-map-zoom"), 10 );
        centerLatitude = mapElement.attr("data-ts-map-center-latitude");
        centerLongitude = mapElement.attr("data-ts-map-center-longitude");
        scrollWheel = parseInt( mapElement.attr("data-ts-map-scroll-wheel"), 10 );
        var markerDrag = parseInt( mapElement.attr("data-ts-map-marker-drag"), 10 );
        ( markerDrag === 1 ) ? markerDrag = true : markerDrag = false;
        controls =  parseInt( mapElement.attr("data-ts-map-controls"), 10 );
        ( controls === 1 ) ? controls = false : controls = true ;
        mapStyle = mapElement.attr("data-ts-google-map-style");

        if( !mapDefaultZoom ){
            mapDefaultZoom = 14;
        }

        var mapCenter = new google.maps.LatLng(centerLatitude,centerLongitude);
        var mapOptions = {
            zoom: mapDefaultZoom,
            center: mapCenter,
            disableDefaultUI: controls,
            scrollwheel: scrollWheel,
            styles: mapStyle
        };
        var element = document.getElementById(simpleMapId);
        map = new google.maps.Map(element, mapOptions);
        var marker = new google.maps.Marker({
            position: mapCenter,
            map: map,
            icon: "assets/img/marker-small.png",
            draggable: markerDrag
        });
    }

});




    
</script>

@endsection