/////////////////////////////////////
//
// app.GenericTemplate
// -----------------------------
// 
// DESCRIPTION: 
// Module notes go here.
// 
// DEPENDENCIES:
// - /public/javascript/libs/jquery-1.7.2.js
// - /public/javascript/modules/core.js
// - /public/javascript/modules/responsive-breakpoints.js
//
// CONFIGURATIONS:
// :)
// 
// TODOs: 
// 1.) Initiate coverflow for sports!
// 
// INITIALIZATION:
// app.Generic = new app._Modules.GenericTemplate() 
// 
/////////////////////////////////////        
!function( $, app ) {
  var GenericTemplate,
  defaults,
  ytParams,
  helpers,
  $win = $(window),

  defaults = {
    videoContainer: '.video-container'
  }
  
  ytParams = {
    allowScriptAccess: "always",
    wmode: "transparent"
  }

  GenericTemplate = function( options ) {
    var options

    this.options = options ? $.extend({}, defaults, options) : defaults
    options = this.options

    this.$viewportWidth = $win.width()
    this.$videoContainer = $( options.videoContainer )

    // Set up the module
    this.init()     
  }

  GenericTemplate.prototype = {

    // we need to cue up the videos
    cueVideos: function() {

    },

    // were going to need to ressize the video player
    // based on the aspect ratio of the video player
    setupResizer: function() {
      var self = this, 
      maxWidth = $('.video-module').width(),
      vidHeight = (maxWidth/1.78) + 30
      self.$viewportWidth = $win.width()

      $.each( this.$videoContainer, function(i,item) { 
        var el = $(this),
        currVideo = el.find('.yt-player')

        if ( maxWidth > self.$viewportWidth ) {
          currVideo.css({
            'width':self.$viewportWidth,
            'height': vidHeight
          })
        } else {
          currVideo.css({
            'width':maxWidth,
            'height': vidHeight
          })
        }
      })
    },    

    // Initialize HeroSlideshow
    init: function() { 
      var self, options
      self = this

      $(domReady)

      function domReady(){
        // DOM Ready inits
        // Recommend calling a sequence of private functions here to kick off the app
        handleResponsive()
      }

      function handleResponsive() {

        app.ResponsiveBreakpoints.register_event(
          'all',
          'generic-all',
          self.setupResizer.bind(self)
        )
      } // end handleResponsive
        
    } // end init
    
  }

  app._Modules.GenericTemplate = GenericTemplate

  // Module Helpers
  helpers = {

  }

}( jQuery, BuffaloWildWings )

