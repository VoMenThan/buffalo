/////////////////////////////////////
//
// app.HeroSlideshow
// -----------------------------
// DESCRIPTION: 
// This module controls the interaction for the common 
// slideshows which are at the top of many BWW templates.
// 
// DEPENDENCIES:
// - /public/javascript/libs/jquery-1.7.2.js
// - /public/javascript/libs/jquery.flexslider.js
// - /public/javascript/libs/jquery.selector.inline-styles.js
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
// app.HeroSlideshow = new app._Modules.HeroSlideshow() 
// 
/////////////////////////////////////

!function( $, app ) {
  var HeroSlideshow,
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
 
  var bradI = 0

  var defaults = {

    heroCardSlideshow: '#heroCardSlideshow',
    flexslider: '#flexslider',
    flexContainerBg: '#flexContainerBg',
    flexsliderSlides: '.marquee .slide',
    flexsliderCard: '.marquee .slide-card'

  } // end HeroSlideshow.defaults

  HeroSlideshow = function( options ) {
    
    // Map optional configs if they exist  
    options = this.options = options ? $.extend({}, defaults, options) : defaults
    
    // HeroSlideshow jQuery extended elements
    this.$heroCardSlideshow = $( options.heroCardSlideshow )
    this.$flexslider = $( options.flexslider )
    this.$flexContainerBg = $( options.flexContainerBg )
    this.$flexsliderSlides = $( options.flexsliderSlides )
    this.$flexsliderCard = $( options.flexsliderCard )

    this.$flexContainerBgImg = this.$flexContainerBg.find('img')

    this.$flexsliderHeightElements = this.$flexslider
      .add( this.$flexContainerBg )
      .add( this.$flexsliderSlides )

    // HeroSlideshow application properties
    this._flexslider = null
    this.slidesLength = this.$flexsliderSlides.length
    this.firstInit = false

    this.init0_768 = false
    this.init769up = false

    // Set up the module
    this.init()
  } // end HeroSlideshow Constructor

  // HeroSlideshow Methods
  HeroSlideshow.prototype = {

    // setup0_768 configures the slideshow for a viewport of < 768px
    setup0_768: function() {
      var newFlexsliderHeight, flexsliderCard

      // Rapid-firing events here  

      // we need to get the new height on the marquee modules since the card was removed
      // math is based on the original card dimensions (48%)
      newFlexsliderHeight = (($win.width() * .48) * 1.254)
      
      this.$flexsliderHeightElements
        .add( this.$flexslider.find('.clone') )
        .height( newFlexsliderHeight )
      
      if( this.init0_768 ) return

      // One-time inits here

      if ( this.firstInit ) this.restartFlexslider()

      $('.flex-direction-nav a').removeClass('dark-bg')

      this.init0_768 = true
      this.init769up = false
    },

    // setup769up configures the slideshow for a viewport of 769px+
    setup769up: function() {

      // Rapid-firing events here

      if( this.init769up ) return

      // One-time inits here

      if ( this.firstInit ) this.restartFlexslider()

      if( !app.Core.isOldIE ) {
        $('.flex-direction-nav a').addClass('dark-bg')
      }
      
      this.$flexsliderHeightElements.css({
        height: ''
      })

      this.init0_768 = false
      this.init769up = true
    },

    // parallaxBackground: function( flexslider ) {
    //   var currentSlide, nextSlide, totalSlides, isFirstSlide, isLastSlide, imgWidth, windowWidth, animationRange, animationDistance, distancePercentage

    //   currentSlide = flexslider.currentSlide + 1
    //   nextSlide = flexslider.animatingTo + 1
    //   totalSlides = this.slidesLength
    //   isFirstSlide = ( nextSlide == 1 )
    //   isLastSlide = ( nextSlide == totalSlides )

    //   imgWidth = this.$flexContainerBgImg.width()
    //   windowWidth = $win.width()
    //   animationRange = ( imgWidth - windowWidth )

    //   // Assign animation values for first & last slides
    //   if( isFirstSlide || isLastSlide ) {
    //     animationDistance = isFirstSlide ? 0 : animationRange

    //   // Otherwise, calculate distance to animate for intermediate slides
    //   } else {
    //     distancePercentage = ( nextSlide - 1 ) / ( totalSlides - 1 )
    //     animationDistance = animationRange * distancePercentage
    //   }

    //   // Animate.
    //   // Use transitions if availables
    //   if( Modernizr.csstransitions ) {
    //     this.$flexContainerBgImg.css({
    //       'marginLeft': -animationDistance + 'px'
    //     })
    //   } else {
    //     this.$flexContainerBgImg.animate({
    //       'marginLeft' : -animationDistance + 'px'
    //     }, 800)
    //   }
    // },

    // handleFlexslider
    // A method to handle resize events and the flexslider feature.
    // This updates the image margins in the slideshow.
    handleFlexslider: function() {
      var self, resetFlexsliderTimeout

      self = this

      $win.on("debouncedresize", function(e) {
        clearTimeout( resetFlexsliderTimeout )
        resetFlexsliderTimeout = setTimeout(self.updateFlexsliderImageMargins.bind(self), 500)
      })
    },

    // Updates flexslider images to be centered
    updateFlexsliderImageMargins: function() {
      var self, flexImages, winWidth

      self = this

      flexImages = this._flexslider.find('.slide-background img')

      flexImages.each(function(i, el) {
        var $el, newMargin

        $el = $(el)

        winWidth = ( !app.Core.isOldIE ) ? $win.width() : '1200'
        newMargin = ( $el.width() - winWidth ) / 2

        // There's an unusual bug in IE8 when negating the newMargin variable.
        // String concat is a workaround..
        newMargin = '-' + newMargin + 'px'

        $el.css('marginLeft', newMargin)
      })
    },

    initFlexslider: function() {
      var self = this
      
      this._flexslider = this.$flexslider.flexslider({
        animation: "slide",
        selector: '.marquee-slides > li',
        slideshow: true
        // before: this.parallaxBackground.bind(this)
      })

      self.$flexslider.find('.flex-prev').attr('data-ga', '{"category":"' + app.GoogleAnalytics.options.currentPath + '","action":"Marquee","opt_label":"Left_Arrow"}')
      self.$flexslider.find('.flex-next').attr('data-ga', '{"category":"' + app.GoogleAnalytics.options.currentPath + '","action":"Marquee","opt_label":"Right_Arrow"}')
      self.$flexslider.find('.flex-control-nav').find('a').attr('data-ga', '{"category":"' + app.GoogleAnalytics.options.currentPath + '","action":"Marquee","opt_label":"Slide_Radio_Button"}')

      setTimeout(function() {
        self.updateFlexsliderImageMargins()
        self.$flexslider.animate({
          opacity: 1
        }, 500)
      }, 1000 )
    },

    destroyFlexslider: function() {
      this._flexslider.flexslider('destroy')
    },

    restartFlexslider: function() {
      this.destroyFlexslider()
      this.initFlexslider()
    },

    // Initialize HeroSlideshow
    init: function() { 
      var self = this

      // Window Ready routines. 
      $win.on('load.slideshow', imagesLoaded)

      function imagesLoaded(){
        self.initFlexslider()
        handleResponsive()
        app.ResponsiveBreakpoints.trigger_event() 
        self.firstInit = true
      } // end imagesLoaded

      // handleResponsive is a utility to assign all of the breakpoint event handlers we want for this module
      function handleResponsive() {
        app.ResponsiveBreakpoints.register_event(
          '0-768',
          'hero-slideshow-0-768',
          self.setup0_768.bind(self) // using es5-shim.js
        )

        app.ResponsiveBreakpoints.register_event(
          '768-+',
          'hero-slideshow-768up',
          self.setup769up.bind(self) // using es5-shim.js
        )

        app.ResponsiveBreakpoints.register_event(
          'all',
          'hero-image-flexslider-all',
          self.handleFlexslider.bind(self) // using es5-shim.js
        )
      } // end handleResponsive
    }
  } // end HeroSlideshow.prototype

  // Attach the HeroSlideshow constructor to our global namespace
  app._Modules.HeroSlideshow = HeroSlideshow

  /////////////////////////////////////
  // End HeroSlideshow
  /////////////////////////////////////

}( jQuery, BuffaloWildWings )
