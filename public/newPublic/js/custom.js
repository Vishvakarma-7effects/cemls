

 $(document).ready(function() {
              $('#prop_slide').owlCarousel({
                margin:0,
                loop:true,
                dots:true,
                responsiveClass: true,
                autoplay: false,
                responsive: {
                 0: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: true
                  },
                  767: {
                    items: 3,
                    nav: true
                  },
                  1000: {
                    items: 5,
                    nav: true,
                  }
                }
              })
            })

 $(document).ready(function() {
              $('#feat_slide').owlCarousel({
                margin:0,
                loop:true,
                dots:true,
                responsiveClass: true,
                autoplay: false,
                responsive: {
                 0: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: true
                  },
                  767: {
                    items: 3,
                    nav: true
                  },
                  1000: {
                    items: 5,
                    nav: true,
                  }
                }
              })
            })

  $(document).ready(function() {
              $('#selling_slide').owlCarousel({
                margin:0,
                loop:true,
                dots:true,
                responsiveClass: true,
                autoplay: false,
                responsive: {
                 0: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: true
                  },
                  767: {
                    items: 3,
                    nav: true
                  },
                  1000: {
                    items: 5,
                    nav: true,
                  }
                }
              })
            })

  $(document).ready(function() {
              $('#services_slide').owlCarousel({
                margin:0,
                loop:true,
                dots:true,
                responsiveClass: true,
                autoplay: false,
                responsive: {
                 0: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: true
                  },
                  767: {
                    items: 3,
                    nav: true
                  },
                  1000: {
                    items: 5,
                    nav: true,
                  }
                }
              })
            })

  $(document).ready(function() {
              $('#bottom_slide').owlCarousel({
                margin:15,
                loop:true,
                dots:true,
                responsiveClass: true,
                autoplay: false,
                responsive: {
                 0: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: true
                  },
                  767: {
                    items: 4,
                    nav: true
                  },
                  1000: {
                    items: 6,
                    nav: true,
                  }
                }
              })
            })

  $(document).ready(function() {
              $('#agent_slide').owlCarousel({
                margin:0,
                loop:true,
                dots:true,
                responsiveClass: true,
                autoplay: false,
                responsive: {
                 0: {
                    items: 1,
                    nav: true
                  },
                  1000: {
                    items: 1,
                    nav: true,
                  }
                }
              })
            })

  $(document).ready(function() {
              $('#photo_slide').owlCarousel({
                margin:8,
                loop:true,
                dots:true,
                responsiveClass: true,
                autoplay: false,
                responsive: {
                 0: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: true
                  },
                  767: {
                    items: 3,
                    nav: true
                  },
                  1000: {
                    items: 3,
                    nav: true,
                  }
                }
              })
            })

  $(document).ready(function() {
              $('#video_slide').owlCarousel({
                margin:8,
                loop:true,
                dots:true,
                responsiveClass: true,
                autoplay: false,
                responsive: {
                 0: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: true
                  },
                  767: {
                    items: 3,
                    nav: true
                  },
                  1000: {
                    items: 3,
                    nav: true,
                  }
                }
              })
            })

   $(document).ready(function() {
              $('#prod_slide').owlCarousel({
                margin:4,
                loop:true,
                dots:true,
                responsiveClass: true,
                autoplay: false,
                responsive: {
                 0: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: true
                  },
                  767: {
                    items: 3,
                    nav: true
                  },
                  1000: {
                    items: 3,
                    nav: true,
                  }
                }
              })
            })

   $(document).ready(function() {
              $('#serva_slide').owlCarousel({
                margin:4,
                loop:true,
                dots:true,
                responsiveClass: true,
                autoplay: false,
                responsive: {
                 0: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: true
                  },
                  767: {
                    items: 3,
                    nav: true
                  },
                  1000: {
                    items: 3,
                    nav: true,
                  }
                }
              })
            })

  $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          tLoading: 'Loading image #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
              return item.el.attr('') + '<small></small>';
            }
          }
        });
      });

  $(document).ready(function() {
  $('.vid-slider .vid').on('click', function() {
  // get required DOM Elements
  var iframe_src = $(this).children('iframe').attr('src'),
        iframe = $('.video-popup'),
        iframe_video = $('.video-popup iframe'),
        close_btn = $('.close-video');
        iframe_src = iframe_src + '?autoplay=1&rel=0'; // for autoplaying the popup video
        
  // change the video source with the clicked one
  $(iframe_video).attr('src', iframe_src);
  $(iframe).fadeIn().addClass('show-video');
    
  // remove the video overlay when clicking outside the video
  $(document).on('click', function(e) {
    if($(iframe).is(e.target) || $(close_btn).is(e.target)) {
    $(iframe).removeClass('show-video');
    $(iframe_video).attr('src', '');
  }
    });
    
  });
  
});

(function($){
        $(window).on("load",function(){
            $(".content").mCustomScrollbar();
        });
    })(jQuery);

// $(document).ready(function(){
//   $(".mflistbtn").click(function(){
//     $("#mflist").addClass("mflist");
//     $(".mflistbtn").addClass("newclass");
//   });

//   $(".newclass.mflistbtn").click(function(){
//     $("#mflist").removeClass("mflist");
//   });
// });

$(document).ready(function(){
    $(".mflistbtn").click(function(){
        $("#mflist").toggleClass("mflist");   
    });
});
