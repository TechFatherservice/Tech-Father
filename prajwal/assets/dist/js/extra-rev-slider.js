(function($) {
    "use strict";

        if(typeof revslider_showDoubleJqueryError === "undefined") {
          function revslider_showDoubleJqueryError(sliderID) {
            var err = "<div class='rs_error_message_box'>";
            err += "<div class='rs_error_message_oops'>Oops...</div>";
            err += "<div class='rs_error_message_content'>";
            err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
            err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' ->  'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
            err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
            err += "</div>";
          err += "</div>";
            jQuery(sliderID).show().html(err);
          }
        }



        var revapi1,
          tpj;
        jQuery(function() {
          tpj = jQuery;
          if(tpj("#rev_slider_1_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_1_1");
          }else{
            revapi1 = tpj("#rev_slider_1_1").show().revolution({
              jsFileLocation:"js/",
              sliderLayout:"fullwidth",
              visibilityLevels:"1240,1024,778,480",
              gridwidth:"1340,1024,778,480",
              gridheight:"800,768,640,600",
              minHeight:"",
              spinner:"spinner0",
              editorheight:"800,768,640,600",
              responsiveLevels:"1240,1024,778,480",
              stopAtSlide:1,
              stopAfterLoops:0,
              stopLoop:true,
              navigation: {
                onHoverStop:false,
                arrows: {
                  enable:true,
                  tmp:"<div class=\"tp-title-wrap\">    <div class=\"tp-arr-imgholder\"></div> </div>",
                  style:"zeus",
                  hide_onmobile:true,
                  hide_under:"778px",
                  left: {
                    h_offset:30
                  },
                  right: {
                    h_offset:30
                  }
                },
                bullets: {
                  enable:true,
                  tmp:"",
                  style:"hermes"
                }
              },
              parallax: {
                levels:[2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,30],
                type:"mouse",
                origo:"slidercenter",
                speed:"300ms",
                speedbg:"3000ms",
                speedls:"3000ms"
              },
              scrolleffect: {
                set:true,
                multiplicator:1.3,
                multiplicator_layers:1.3,
                mobile:true
              },
              sbtimeline: {
                set:true
              },
              fallbacks: {
                allowHTML5AutoPlayOnAndroid:true
              },
            });
          }
          
        });

})(jQuery);