@extends('layouts.main')
@section('content')
@include('oldLayouts.header')

<!-- Chromecast SDK -->
<script type="text/javascript" src="//www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1"></script>

<!-- THEOplayer library and css -->
<script type="text/javascript" src="https://cdn.myth.theoplayer.com/b1a765b9-ec8f-439f-ae16-185d2be65d8f/THEOplayer.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.myth.theoplayer.com/b1a765b9-ec8f-439f-ae16-185d2be65d8f/ui.css" />
<style type="text/css">
    #player_container {
        width: 100%;
        margin: auto;
        padding-top: 5.625%; /* 16:9 Aspect Ratio 56.25 * 0.9 */
        position: relative;
    }
    @media (min-width: 75rem) {
        #player_container {
            width: 50%;
            padding-top: 2.125%; /* 16:9 Aspect Ratio 56.25 * 0.5 */
        }
    }
    h1 {
        text-align: center;
    }
    #player {
        background-color: black;
        position: absolute;
        top: 0px;
        width: 100%;
        height: 100%;
    }
    #warning {
        background-color: red;
        text-align: center;
        display: none;
    }
    #player_overlay{
        width: 100%;
        background: transparent;
        position: absolute;
        z-index: 99;
        cursor: pointer;
    }
    @if (!$overlay)
    .theoplayer-skin .vjs-big-play-button {
        filter: blur(5px);
    }
    @endif
</style>
<!-- main content -->
<section class="section-pagetop bg-gray">
    <div class="container clearfix">
        <h4 class="title-page dark b float-xl-left mb-0">{{$event->title}}</h4>

        <nav class="float-xl-right mt-2 mt-xl-0">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#" class="dark"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#events" class="dark">Events</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$event->title}}</li>
            </ol>
        </nav>
    </div>
</section>
<section>
    <div class="container">
        <div id="player_container">
            @if (!$overlay)
            <div id="player_overlay"></div>
            @endif

            <div class="theoplayer-container video-js theoplayer-skin vjs-16-9"></div>
        </div>
    </div>
</section>
<section class="section-content padding-y bg-white">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-12 col-lg-8 border-right order-1 order-lg-0">
                    <div class="card-body">
                        <h1 class="card-title b d-none d-lg-block">{{$event->title}}</h1>
                        <div class="rating-wrap d-none d-lg-block">
                            <ul class="rating-stars d-none">
                                <li style="width:60%" class="stars-active">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="label-rating d-none">2 review(s)</div>
                        </div>
                        <dl class="mt-5 event-description">
                            <dt class="text-muted">Description</dt>
                            <dd class="line-height-2 readmore" data-collapsed-height="500" data-height-margin="20">
                                <p><span style="font-size:12.88px;">{{$event->description}}</span></p><p><br /></p>
                            </dd>
                        </dl>
                        <ul class="list-group list-group-flush mt-5 mb-5 p-0 d-none">
                            <li class="list-group-item pl-0 pr-0">
                                <dl class="dlist-align">
                                    <dt class="text-muted">Category</dt>
                                    <dd class="text-right">{{$event->category}}</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt class="text-muted">Country</dt>
                                    <dd class="text-right"><span class="flag flag-fr"></span> {{$event->location}}</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt class="text-muted">Year</dt>
                                    <dd class="text-right">2021</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt class="text-muted">Audience</dt>
                                    <dd class="text-right">
                                        <ul class="list-inline">
                                            <li class="list-inline-item" data-toggle="tooltip" title="Adults"><img src="https://eventic.mtrsolution.com/uploads/audiences/5d641402c4cf9162849552.png" class="img-xxs" alt="Adults" /></li>
                                            <li class="list-inline-item" data-toggle="tooltip" title="Children"><img src="https://eventic.mtrsolution.com/uploads/audiences/5d641451ca81e833369961.png" class="img-xxs" alt="Children" /></li>
                                            <li class="list-inline-item" data-toggle="tooltip" title="Family"><img src="https://eventic.mtrsolution.com/uploads/audiences/5d2e2503df8b7852878320.png" class="img-xxs" alt="Family" /></li>
                                            <li class="list-inline-item" data-toggle="tooltip" title="Group"><img src="https://eventic.mtrsolution.com/uploads/audiences/5d2e2527b07e2010325395.png" class="img-xxs" alt="Group" /></li>
                                            <li class="list-inline-item" data-toggle="tooltip" title="Youth"><img src="https://eventic.mtrsolution.com/uploads/audiences/5d2e254d3af82934317748.png" class="img-xxs" alt="Youth" /></li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                        <dl class="mt-5">
                            <dt class="text-muted">Contact &amp; Social media</dt>
                            <dd class="mr-0">
                                <ul class="list-icon row no-gutters">
                                    <li class="col-md-6"><a href="{{$venue->website}}" class="pl-4" target="_blank"><i class="icon fas fa-globe fa-fw"></i><span>{{$venue->website}}</span></a></li>
                                    <li class="col-md-6"><a href="mailto:{{$organizer->email}}" class="pl-4"><i class="icon fas fa-at fa-fw"></i><span>{{$organizer->email}}</span></a></li>
                                    <!--<li class="col-md-6"><a href="tel:+33 (0)2 53 44 54 56" class="pl-4"><i class="icon fas fa-phone fa-fw"></i><span>+33 (0)2 53 44 54 56</span></a></li>-->
                                    <li class="col-md-6"><a href="{{$venue->fb}}" class="pl-4" target="_blank"><i class="icon fab fa-facebook-f fa-fw"></i><span>{{$venue->fb}}</span></a></li>
                                    <li class="col-md-6"><a href="{{$venue->instagram}}" class="pl-4" target="_blank"><i class="icon fab fa-instagram fa-fw"></i><span>{{$venue->instagram}}</span></a></li>
                                    <li class="col-md-6"><a href="{{$venue->youtube}}" class="pl-4" target="_blank"><i class="icon fab fa-youtube fa-fw"></i><span>{{$venue->youtube}}</span></a></li>
                                </ul>
                            </dd>
                        </dl>
                        <dl class="mt-5">
                            <dt class="text-muted">Share</dt>
                            <div class="btn-group white">
                                <a class="btn btn-facebook" title="Facebook" target="_blank" href="{{$venue->fb}}"><i class="fab fa-facebook-f fa-fw"></i></a>
                                <a class="btn btn-instagram" title="Instagram" target="_blank" href="{{$venue->instagram}}"><i class="fab fa-instagram fa-fw"></i></a>

                                <a class="btn btn-youtube" title="Youtube" target="_blank" href="{{$venue->youtube}}"><i class="fab fa-youtube fa-fw"></i></a>
                            </div>
                        </dl>
                        <hr class="mt-5 d-none">
                        <div class="row">
                            <div class="col d-none">
                                <a href="#events?keyword=camping" class="btn btn-sm btn-default mr-3 mb-3 mt-3">camping</a>
                                <a href="#events?keyword=nature" class="btn btn-sm btn-default mr-3 mb-3 mt-3">nature</a>
                                <a href="#events?keyword=beach" class="btn btn-sm btn-default mr-3 mb-3 mt-3">beach</a>
                                <a href="#events?keyword=relax" class="btn btn-sm btn-default mr-3 mb-3 mt-3">relax</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 order-0 order-lg-1 ">
                    <div class="card-body">
                        <div id="eventDate-9bfe5bac47-wrapper" class="event-eventDate-wrapper">
                            <dl>
                                <dt class="text-muted">
                                    <span>Dates</span>
                                </dt>
                                <dd>
                                    <?php
                                    $date1 = date('d-M-Y', strtotime($event->startDate));
                                    $date2 = date('d-M-Y', strtotime($event->endDate));
                                    $startDate = explode("-", $date1);
                                    $endDate = explode("-", $date2);
                                    ?>
                                    <div class="text-center">
                                        <div class="display-inline-block">
                                            <div class="display-inline-block">
                                                <span class="font-size-3rem">{{$startDate[0]}}</span>
                                            </div>
                                            <div class="display-inline-block mr-3">
                                                <div><span class="font-size-1rem">{{$startDate[1]}}</span></div>
                                                <div><span>{{$startDate[2]}}</span></div>
                                            </div>
                                            <div class="mb-2">
                                                <span class="text-muted b">
                                                    {{$event->startTime}}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="display-inline-block">
                                            <div class="display-inline-block">
                                                <span class="font-size-3rem">{{$endDate[0]}}</span>
                                            </div>
                                            <div class="display-inline-block">
                                                <div><span class="font-size-1rem">{{$endDate[1]}}</span></div>
                                                <div><span>{{$endDate[2]}}</span></div>
                                            </div>
                                            <div class="mb-2"><span class="text-muted b">{{$event->endtTime}}</span></div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <a id="add-to-calendar-link" data-toggle="modal" data-target="#add-to-calendar-modal" href="javascript:void(0)" data-title="Camping Trip" data-start="October 03, 2021 13:00" data-end="" data-address="ATLANTIQUE PARC: ATLANTIQUE PARC17570 Les Mathes, Charente-Maritime, France" data-description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It h"><i class="fas fa-calendar-plus"></i> Add to calendar</a>
                                        <div class="modal fade" id="add-to-calendar-modal">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"><i class="fas fa-calendar-plus"></i> Add to calendar</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div id="add-to-calendar" class="modal-body">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </dd>
                            </dl>
                            <hr class="hr-md">
                            <dl>
                                <dt class="text-muted">
                                    <span class="float-left">Venue</span>
                                    <!--<a href="#venue/atlantique-parc" class="float-right text-sm"><i class="far fa-building"></i> Details</a>-->
                                    <div class="clearfix"></div>
                                </dt>
                                <dd class="mr-0">
                                    <h4 class="text-center">{{$event->location}}</h4>
                                    <!--<p>ATLANTIQUE PARC17570 Les Mathes, Charente-Maritime, France</p>-->
                                    <iframe class="w-100 border-0 venue-map" height="300" src="https://maps.google.com/maps?q=ATLANTIQUE%20PARC%20ATLANTIQUE%20PARC17570%20Les%20Mathes%2C%20Charente-Maritime%2C%20France&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                                </dd>
                            </dl>
                        </div>
                        <dl class="mt-5 mb-5 d-none">
                            <dt class="text-muted">
                                <span class="float-left">Organizer</span>
                                <a href="#organizer/best-caming-trips" class="float-right text-sm"><i class="far fa-id-card"></i> Details</a>
                                <div class="clearfix"></div>
                            </dt>
                            <dd class="mr-0">
                                <div class="card-banner " style="height:250px;background-image: url('https://eventic.mtrsolution.com/uploads/organizers/covers/5f9ebae33a5e4709621422.jpg');" >
                                    <article class="overlay bottom text-center">
                                        <h4 class="card-title"><a href="#organizer/best-caming-trips">Best Caming Trips</a></h4>
                                        <img src="https://eventic.mtrsolution.com/uploads/organizers/5f9ebae339548932833873.png" class="img-100-100 d-block mx-auto mb-3 img-thumbnail" alt="Best Caming Trips" />
                                        <a href="#signin?_target_path=/en/event/camping-trip" class="btn btn-primary btn-sm"><i class="fas fa-folder-plus"></i> Follow</a>
                                    </article>
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="section-footer border-top-gray">
    <div class="container">
        <section class="footer-top padding-top">
            <div class="row">
                <aside class="col-sm-6 col-lg-3">
                    <h5 class="title text-dark">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-1">
                            <a href="#">
                                About us
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#">
                                Help center
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#">
                                Blog
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#">
                                Venues
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#">
                                Send us an email
                            </a>
                        </li>
                    </ul>
                </aside>
                <aside class="col-sm-6 col-lg-3">
                    <h5 class="title text-dark">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-1">
                            <a href="#">
                                About us
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#">
                                Help center
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#">
                                Blog
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#">
                                Venues
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#">
                                Send us an email
                            </a>
                        </li>
                    </ul>
                </aside>
                <aside class="col-sm-6 col-lg-3">
                    <h5 class="title text-dark">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-1">
                            <a href="#">
                                About us
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#">
                                Help center
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#">
                                Blog
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#">
                                Venues
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#">
                                Send us an email
                            </a>
                        </li>
                    </ul>
                </aside>
                <aside class="col-sm-6 col-lg-3">
                    <article>
                        <h5 class="title text-dark">Contact Us</h5>

                        <p>
                            <strong>Phone: </strong> +1888888 <br>
                            <strong>Fax:</strong> +1888888
                        </p>

                        <div class="btn-group white">
                            <a class="btn btn-facebook" title="Facebook" target="_blank" href="https://www.facebook.com"><i class="fab fa-facebook-f fa-fw"></i></a>
                            <a class="btn btn-instagram" title="Instagram" target="_blank" href="https://www.instagram.com"><i class="fab fa-instagram fa-fw"></i></a>

                            <a class="btn btn-youtube" title="Youtube" target="_blank" href="https://www.youtube.com"><i class="fab fa-youtube fa-fw"></i></a>

                            <a class="btn btn-twitter" title="Twitter" target="_blank" href="https://www.twitter.com"><i class="fab fa-twitter fa-fw"></i></a>
                        </div>

                        <div class="clearfix"></div>
                    </article>
                </aside>
            </div>
            <br>
        </section>
        <section class="footer-bottom row">
            <div class="col-sm-12">
                <p class="text-dark-50 text-center">
                    Copyright &copy;  2021
                </p>
            </div>
        </section>
    </div>
</footer>
@if (!$overlay)
<!-- The Modal -->
<div class="modal" id="attendeeModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Register for event</h4>
                <button type="button" class="close close_modal" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <dd class="mr-0">
                    <div class="card-body">
                        <div id="ajax_loader" style="display: none">
                            <img src="{{ asset('public/assets/img/loder.svg') }}">
                        </div>
                        <form action="{{ url('saveAttendee') }}" id="saveAttendee" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('layouts.flashMessge')
                            <!--<input type="hidden" name="event_id" value="{{$event->id}}">-->
                            <div class="row mb-3 pl-2 pr-2">
                                <input type="hidden" name="event_id" value="{{$event->id}}">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Name</label>
                                        <input type="text" name="name" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary btn">Save</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </dd>
            </div>
        </div>
    </div>
</div>
@endif
<script>
var element = document.querySelector(".theoplayer-container");
var player = new THEOplayer.Player(element, {
    libraryLocation: "https://cdn.myth.theoplayer.com/b1a765b9-ec8f-439f-ae16-185d2be65d8f",
    license: "sZP7IYe6T6fiClU63o4K0Oke3u46FSac0LB-Tu0zIOklIu3lIQ41CleoTSf6FOPlUY3zWokgbgjNIOf9flx63oC_IuCZFDftCLb-3uBZIOk6CSCtFDCtCLXlISUl3SatTmfVfK4_bQgZCYxNWoryIQXzImf90SCZ0S0L0l5i0u5i0Oi6Io4pIYP1UQgqWgjeCYxgflEc3lBo0ueL3l5Z3LhoFOPeWok1dDrLYtA1Ioh6TgV6UQ1gWtAVCYggb6rlWoz6FOPVWo31WQ1qbta6FOfJfgzVfKxqWDXNWG3ybojkbK3gflNWfGxEIDjiWQXrIYfpCoj-f6i6WQjlCDcEWt3zf6i6v6PUFOPLIQ-LflNWfK1zWDikfgzVfG3gWKxydDkibK4LbogqW6f9UwPkIYz"

});

// OPTIONAL CONFIGURATION

// Customized video player parameters
player.source = {
    sources: [{
            "src": "{{$event->videoUrl}}",
            "type": "application/x-mpegurl"
        }],
    // VR configuration
    vr: {
        360: true
    }
};

player.preload = 'auto';

// Related content configuration

// Up next configuration

// Social configuration
player.social.url = "http://demo.theoplayer.com/social-sharing";
player.social.items = [];
</script>
<!--end main content-->
@endsection
@section('scripts')

@if (!$overlay)
<script type="text/javascript">
    $(document).ready(function () {
        var player_container = $("#player_container").height();
        $("#player_overlay").css("height", player_container + "px");
        $('body').on('click', '#player_overlay', function () {
            $('#attendeeModal').modal('show');
        });
        $('body').on('click', '.close_modal', function () {
            $('#attendeeModal').modal('hide');
        });

        $("#saveAttendee").submit(function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $(this);
            var url = form.attr('action');
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: url,
                dataType: "JSON",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $('#ajax_loader').show();
                },
                success: function (data) {
                    $('#ajax_loader').hide();
                    $('#attendeeModal').modal('hide');
                    $("#player_overlay").hide();
                    $(".vjs-big-play-button").css("filter", "none");
                },
                complete: function () {
                    $('#ajax_loader').hide();
                }
            });
        });
    });
</script>
@endif
@endsection
