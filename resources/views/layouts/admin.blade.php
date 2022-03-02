
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Cemls</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content=""/>
        <link rel="stylesheet" href="{{ asset('newPublic/css/bootstrap.min.css') }}" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('newPublic/images/favicon.ico') }}" type="image/x-icon"/>
        <link href="{{ asset('newPublic/css/adminab.css') }}" rel="stylesheet">
        @yield('styles')

        
    </head>
    <body>
    <main class="maincnt">
        @include('partials.header')
        <main class="adm_container clearfix collapse navbar-collapse" id="navbarSupportedContent">
            @include('partials.menu')
            @yield('content')

        </main>
        <footer class="adm_footer">
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

    </main>

    
    <script src="{{ asset('newPublic/js/jquery.min.js') }}"></script>
    <script src="{{ asset('newPublic/js/script.js') }}"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <script src="{{ asset('newPublic/js/bootstrap.min.js') }}"></script>

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
 <!--Code start for google map-->
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9ylALS3mSrUHPkBBFocquYzOjC9eirNo&callback=initMap&libraries=places&v=weekly&channel=2"
            async
        ></script>
        <script>

function initMap() {
    const myLatLng = { lat: 38.755971, lng: -121.283956 };
    const map = new google.maps.Map(document.getElementById("map"), {
        center: myLatLng,
        zoom:13,
        mapTypeControl: false,
        mapTypeId: 'satellite',
    });
    var marker1 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Set lat/lon values for this property',
    draggable: true
});

google.maps.event.addListener(marker1, 'dragend', function (event) {
    document.getElementById("latbox").innerHTML = this.getPosition().lat();
    document.getElementById("lngbox").innerHTML = this.getPosition().lng();
        document.getElementById("cemetery_latitude").value  = this.getPosition().lat();
    document.getElementById("cemetery_longitude").value  = this.getPosition().lng();
});

    const card = document.getElementById("pac-card");
    const input = document.getElementById("pac-input");
    const biasInputElement = document.getElementById("use-location-bias");
    const strictBoundsInputElement = document.getElementById("use-strict-bounds");
    const options = {
        fields: ["formatted_address", "geometry", "name"],
        strictBounds: false,
        types: ["establishment"],
    };

    map.controls[google.maps.ControlPosition.TOP_LEFT].push(card);

    const autocomplete = new google.maps.places.Autocomplete(input, options);

    // Bind the map's bounds (viewport) property to the autocomplete object,
    // so that the autocomplete requests use the current map bounds for the
    // bounds option in the request.
    autocomplete.bindTo("bounds", map);

    const infowindow = new google.maps.InfoWindow();
    const infowindowContent = document.getElementById("infowindow-content");

    infowindow.setContent(infowindowContent);

    const marker = new google.maps.Marker({
        map,
        anchorPoint: new google.maps.Point(0, -29),
    });

    autocomplete.addListener("place_changed", () => {
        infowindow.close();
        marker.setVisible(false);

        const place = autocomplete.getPlace();

        if (!place.geometry || !place.geometry.location) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }

        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
        infowindowContent.children["place-name"].textContent = place.name;
        infowindowContent.children["place-address"].textContent =
                place.formatted_address;
        infowindow.open(map, marker);
    });

    // Sets a listener on a radio button to change the filter type on Places
    // Autocomplete.
    function setupClickListener(id, types) {
        const radioButton = document.getElementById(id);

        radioButton.addEventListener("click", () => {
            autocomplete.setTypes(types);
            input.value = "";
        });
    }

    setupClickListener("changetype-all", []);
    setupClickListener("changetype-address", ["address"]);
    setupClickListener("changetype-establishment", ["establishment"]);
    setupClickListener("changetype-geocode", ["geocode"]);
    setupClickListener("changetype-cities", ["(cities)"]);
    setupClickListener("changetype-regions", ["(regions)"]);
    biasInputElement.addEventListener("change", () => {
        if (biasInputElement.checked) {
            autocomplete.bindTo("bounds", map);
        } else {
            // User wants to turn off location bias, so three things need to happen:
            // 1. Unbind from map
            // 2. Reset the bounds to whole world
            // 3. Uncheck the strict bounds checkbox UI (which also disables strict bounds)
            autocomplete.unbind("bounds");
            autocomplete.setBounds({east: 180, west: -180, north: 90, south: -90});
            strictBoundsInputElement.checked = biasInputElement.checked;
        }

        input.value = "";
    });
    strictBoundsInputElement.addEventListener("change", () => {
        autocomplete.setOptions({
            strictBounds: strictBoundsInputElement.checked,
        });
        if (strictBoundsInputElement.checked) {
            biasInputElement.checked = strictBoundsInputElement.checked;
            autocomplete.bindTo("bounds", map);
        }

        input.value = "";
    });
}

function codeAddress() {
    var address = document.getElementById('pac-input').value;
    
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }



        </script>

    

    
    <script type="text/javascript">
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>

    <style>
/* Import Google Font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');


.price-input{
  width: 100%;
  display: flex;
  margin: 30px 0 35px;
}
.price-input .field{
  display: flex;
  width: 100%;
  height: 45px;
  align-items: center;
}
.field input{
  width: 100%;
  height: 100%;
  outline: none;
  font-size: 19px;
  margin-left: 12px;
  border-radius: 5px;
  text-align: center;
  border: 1px solid #999;
  -moz-appearance: textfield;
}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
.price-input .separator{
  width: 130px;
  display: flex;
  font-size: 19px;
  align-items: center;
  justify-content: center;
}
.slider{
  height: 5px;
  position: relative;
  background: #ddd;
  border-radius: 5px;
}
.slider .progress{
  height: 100%;
  left: 25%;
  right: 25%;
  position: absolute;
  border-radius: 5px;
  background: #17A2B8;
}
.range-input{
  position: relative;
}
.range-input input{
  position: absolute;
  width: 100%;
  height: 5px;
  top: -5px;
  background: none;
  pointer-events: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}
input[type="range"]::-webkit-slider-thumb{
  height: 17px;
  width: 17px;
  border-radius: 50%;
  background: #17A2B8;
  pointer-events: auto;
  -webkit-appearance: none;
  box-shadow: 0 0 6px rgba(0,0,0,0.05);
}
input[type="range"]::-moz-range-thumb{
  height: 17px;
  width: 17px;
  border: none;
  border-radius: 50%;
  background: #17A2B8;
  pointer-events: auto;
  -moz-appearance: none;
  box-shadow: 0 0 6px rgba(0,0,0,0.05);
}

</style>
    @yield('scripts')


    </body>
</html>
