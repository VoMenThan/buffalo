/////////////////////////////////////
//
// app.InteriorBeer
// -----------------------------
// DESCRIPTION: 
// 
// DEPENDENCIES:
// - /public/javascript/libs/jquery-1.7.2.js
// - /public/javascript/libs/jquery.flexslider.js
// - /public/javascript/modules/core.js
// - /public/javascript/modules/responsive-breakpoints.js
//
// CONFIGURATIONS:
// 
// 
// TODOs: 
// 1) Document any TODO tasks here.
// 
// INITIALIZATION:
// app.InteriorBeer = new app._Modules.InteriorBeer() 
// 
/////////////////////////////////////
!function( $, app ) {
  var InteriorBeer,
  defaults,
  helpers,
  $win = $(window)

  // Instantiate shared module variables here.
  // Such as:
  // $win = $(window),
  // location = window.location,
  // push = Array.prototype.push

  /////////////////////////////////////
  // Begin HeroSlideshow
  /////////////////////////////////////
 
  defaults = {

    // Recommend setting a wrapping element for event delegation
    beerslider: '.featured-beer-list',

    // Module configurations
    exampleConfig: true

  } // end HeroSlideshow.defaults

  InteriorBeer = function( options ) {
    
    // Map optional configs if they exist  
    options = this.options = options ? $.extend({}, defaults, options) : defaults
    
    // HeroSlideshow jQuery extended elements
    this.$beerSlider = $( options.beerslider )

    // HeroSlideshow application properties

    this.init0_768 = false
    this.init769up = false

    // Set up the module
    this.init()
  } // end HeroSlideshow Constructor

  // HeroSlideshow Methods
  InteriorBeer.prototype = {

    // setup0_768 configures the slideshow for a viewport of < 768px
    setup0_768: function() {
      var newFlexsliderHeight, flexsliderCard

      // Rapid-firing events here  
      if( this.init0_768 ) return

      // One-time inits here
      this.initFlexslider()

      this.init0_768 = true
      this.init769up = false
    },

    // setup769up configures the slideshow for a viewport of 769px+
    setup769up: function() {

      // Rapid-firing events here
                       
      if( this.init769up ) return

      // One-time inits here
      this.destroyFlexslider()
      
      this.init0_768 = false
      this.init769up = true
    },


    initFlexslider: function() {
      var leftAnalytics, rightAnalytics
      
      leftAnalytics = '{"category":"' + app.GoogleAnalytics.options.currentPath + '","action":"Beer_Marquee","opt_label":"Left_Arrow"}'

      rightAnalytics = '{"category":"' + app.GoogleAnalytics.options.currentPath + '","action":"Beer_Marquee","opt_label":"Right_Arrow"}'

      this.$beerSlider.addClass('flexslider-beer flexslider')

      $('.flexslider-beer').flexslider({
        animation: "slide",
        controlNav: false,
      })    

      // Add analytics to Flexslider's dynamic elements
      this.$beerSlider.find('.flex-prev').attr('data-ga', leftAnalytics)
      this.$beerSlider.find('.flex-next').attr('data-ga', rightAnalytics)
    },

    destroyFlexslider: function() {
      // if the slideshow even exists we need to now destroy it
      // otherwise lets close this malarkey
      if (!this.$beerSlider.hasClass('flexslider-beer')) return
      // since the slideshow must exist, lets destroy it and remove the flexslider class
      $('.flexslider-beer').flexslider('destroy')
      this.$beerSlider.removeClass('flexslider-beer flexslider')
    }, 

    // Initialize HeroSlideshow
    init: function() { 
      var self = this

      // Window Ready routines. 
      $(domReady)

      function domReady(){
        handleResponsive()

        // IE9 Issue
        // if( $('html').hasClass('ie9') ) fixIE()
      }

      // handleResponsive is a utility to assign all of the breakpoint event handlers we want for this module
      function handleResponsive() {
        app.ResponsiveBreakpoints.register_event(
          '0-768',
          'interior-beer-0-768',
          self.setup0_768.bind(self) // using es5-shim.js
        )

        app.ResponsiveBreakpoints.register_event(
          '768-+',
          'interior-beer-768up',
          self.setup769up.bind(self) // using es5-shim.js
        )
      }
    },

    // Destroy HeroSlideshow Events & Extras
    destroy: function() {
      // Undo everything that init does
    }
  } // end HeroSlideshow.prototype

  // Attach the HeroSlideshow constructor to our global namespace
  app._Modules.InteriorBeer = InteriorBeer
  
  // Module Helpers
  helpers = {

  }

  /////////////////////////////////////
  // End HeroSlideshow
  /////////////////////////////////////

}( jQuery, BuffaloWildWings )


