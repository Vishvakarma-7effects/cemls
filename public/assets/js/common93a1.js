var gl_lookup_plot_fields;

(function ($) {
	$(document).ready(function() { 

        $('.mean-container a.meanmenu-reveal').click(function(){
            if($(this).hasClass('meanclose')) {
                $('.mean-container .mean-bar').removeClass('autowidth').addClass('fullwidth');
            }
            else {
                setTimeout(function(){
                $('.mean-container .mean-bar').addClass('autowidth').removeClass('fullwidth');
                }, 200);
            }
        });
        if($('#edit-cemetery-id-wrapper .views-widget select[name="cemetery_id"]').length > 0) {
            //lookup_plot_fields($('#edit-cemetery-id-wrapper .views-widget select[name="cemetery_id"] option:selected').val());
        }
        $('#edit-cemetery-id-wrapper .views-widget select[name="cemetery_id"]').change(function() {
            lookup_plot_fields($(this).val());
        });
        
        function lookup_plot_fields(cem_id) {
            $.ajax({
                type: 'POST',
                cache: false,
                url: '/cemetery/lookup/' + cem_id, 
                dataType: 'json',
                success: function(data) {
                    if (data) {
                        $.each(data.address, function(key, value){
                            if(value != '' && value != null) {
                                $('.views-widget-filter-field_' + key + '_value').addClass('show').removeClass('hide');
                                $('.views-widget-filter-field_' + key + '_value label').text(value);
                                $('div.view-content table.views-table th.views-field-field-' + key).text(value);
                                $('div.view-content table.views-table th.views-field-field-' + key).removeClass('hide');
                                $('div.view-content table.views-table td.views-field-field-' + key).removeClass('hide');
                            }
                            else {
                                $('.views-widget-filter-field_' + key + '_value').addClass('hide');
                                $('div.view-content table.views-table th.views-field-field-' + key).addClass('hide');
                                $('div.view-content table.views-table td.views-field-field-' + key).addClass('hide');
                            }
                        });
                        
                    }
                    else {
                        $('.views-widget-filter-field_level1_value').addClass('hide').removeClass('show');
                        $('.views-widget-filter-field_level2_value').addClass('hide').removeClass('show');
                        $('.views-widget-filter-field_level3_value').addClass('hide').removeClass('show');
                        $('.views-widget-filter-field_level4_value').addClass('hide').removeClass('show');
                        $('.views-widget-filter-field_level5_value').addClass('hide').removeClass('show');
                        $('.views-widget-filter-field_level6_value').addClass('hide').removeClass('show');
                        // table header
                        $('div.view-content table.views-table th.views-field-field-level1').addClass('hide');
                        $('div.view-content table.views-table th.views-field-field-level2').addClass('hide');
                        $('div.view-content table.views-table th.views-field-field-level3').addClass('hide');
                        $('div.view-content table.views-table th.views-field-field-level4').addClass('hide');
                        $('div.view-content table.views-table th.views-field-field-level5-1').addClass('hide');
                        $('div.view-content table.views-table th.views-field-field-level6').addClass('hide');
                        //table content
                        $('div.view-content table.views-table td.views-field-field-level1').addClass('hide');
                        $('div.view-content table.views-table td.views-field-field-level2').addClass('hide');
                        $('div.view-content table.views-table td.views-field-field-level3').addClass('hide');
                        $('div.view-content table.views-table td.views-field-field-level4').addClass('hide');
                        $('div.view-content table.views-table td.views-field-field-level5-1').addClass('hide');
                        $('div.view-content table.views-table td.views-field-field-level6').addClass('hide');
                    }
                }
            });
        }
        gl_lookup_plot_fields = lookup_plot_fields;
	});
//     $(window).resize(function() {
// 		// do whatever
//         var bodyWidth = jQuery('.galleryformatter').width();
//         if (bodyWidth <= 650) {
//             $('.galleryformatter .gallery-slides').css('max-width', bodyWidth);
//             $('.galleryformatter .gallery-slides').css('width', '100%');
//             $('.galleryformatter .gallery-slides').css('height', '100%');
//             $('.galleryformatter .gallery-slides .gallery-slide').css('position', 'inherit');
//             $('.galleryformatter .gallery-slides .gallery-slide img').removeAttr('width');
//             $('.galleryformatter .gallery-slides .gallery-slide img').removeAttr('height');
//             $('.galleryformatter .gallery-slides img').css('max-width', bodyWidth);
//             $('.galleryformatter .gallery-slides img').css('width', '100%');
//             $('.galleryformatter .gallery-slides img').css('height', '100%');
//             $('.galleryformatter .gallery-thumbs').css('max-width', bodyWidth);
//             $('.galleryformatter .gallery-thumbs').css('width', '100%');
//         }
//         else {
//             $('.galleryformatter .gallery-slides').css('max-width', '100%');
//             $('.galleryformatter .gallery-slides').css('width', '650px');
//             $('.galleryformatter .gallery-slides').css('height', '300px');
//             $('.galleryformatter .gallery-slides .gallery-slide').css('position', 'absolute');
//             $('.galleryformatter .gallery-slides img').css('max-width', '100%');
//             $('.galleryformatter .gallery-slide img').css('width', '650px');
//             $('.galleryformatter .gallery-slide img').css('height', '300px');
//             $('.galleryformatter .gallery-thumbs').css('max-width', '100%');
//             $('.galleryformatter .gallery-thumbs').css('width', '650px');
//         }
        
// 	});
//     $(window).trigger('resize');
})(jQuery);