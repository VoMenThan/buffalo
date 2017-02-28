/////////////////////////////////////
//
// app.BrandCarousel
// -----------------------------
// DESCRIPTION: 
// Module notes go here.
// 
// DEPENDENCIES:
// - /public/javascript/libs/jquery-1.7.2.js
// - /public/javascript/libs/jquery.roundabout.js
// - /public/javascript/modules/core.js
// - /public/javascript/modules/responsive-breakpoints.js
//
// CONFIGURATIONS:
// Module configurations and defaults go here.
// 
// TODOs: 
// 1) Document any TODO tasks here.
// 
// INITIALIZATION:
// app.BrandCarousel = new app._Modules.BrandCarousel() 
// 
/////////////////////////////////////

!function( $, app ) {
  var BrandCarousel,
  defaults,
  helpers,
  $win = $(window)

  // Instantiate shared module variables here.  
  var _resizeTimeout

  /////////////////////////////////////
  // Begin BrandCarousel
  /////////////////////////////////////
 
  var defaults = {

    brandCarousel: '#brandCarousel',

    roundabout: '#roundabout',
    roundaboutBgs: '#brandCarouselBgs',
    roundaboutFlexsliderWrapper: '#roundaboutFlexsliderWrapper'

  } // end BrandCarousel.defaults

  BrandCarousel = function( options ) {

    // Map optional configs if they exist  
    options = this.options = options ? $.extend({}, defaults, options) : defaults
    
    // BrandCarousel jQuery extended elements
    this.$brandCarousel = $( options.brandCarousel )
    this.$roundabout = $( options.roundabout )
    this.$$roundaboutChildren = this.$roundabout.children()
    this.$roundaboutBgs = $( options.roundaboutBgs )
    this.$$roundaboutBgsChildren = this.$roundaboutBgs.children()

    this.$roundaboutFlexsliderWrapper = $( options.roundaboutFlexsliderWrapper )

    this.$roundaboutFlexsliderHeightEls = this.$roundaboutFlexsliderWrapper
      .add( this.$roundaboutBgs )
      .add( this.$$roundaboutChildren )

    this.$roundaboutFlexsliderImage = this.$roundaboutFlexsliderWrapper.find('.carousel-image').eq(0)

    this.$roundaboutFlexsliderTitle = this.$roundaboutFlexsliderWrapper.find('.title').eq(0)

    this.init0_768 = false
    this.init769up = false

    // Set up the module
    this.init()
  } // end BrandCarousel Constructor

  // BrandCarousel Methods
  BrandCarousel.prototype = {

    // setup0_768 configures the slideshow for a viewport of < 768px
    setup0_768: function() {
      var newFlexsliderHeight, newImageTopPosition

      // Rapid-firing events here

      newFlexsliderHeight = this.$roundaboutFlexsliderImage.height()
      newImageTopPosition = this.$roundaboutFlexsliderTitle.height()

      this.$roundaboutFlexsliderHeightEls.height( newFlexsliderHeight )

      if( this.init0_768 ) return
    
      // One-time inits here

      this.$roundaboutFlexsliderWrapper.removeClass('roundabout')
      this.$brandCarousel.addClass('has-flexslider')
      this.$roundaboutFlexsliderWrapper.addClass('flexslider')

      if( this.$roundabout.data('roundabout') ) {
        this.destroyRoundabout()
      }

      this.initFlexslider()

      this.init0_768 = true
      this.init769up = false
    },

    // setup769up configures the slideshow for a viewport of 769px+
    setup769up: function() {

      // Rapid-firing events here

      clearTimeout(_resizeTimeout)
      _resizeTimeout = setTimeout(this.restartRoundabout.bind(this), 500)

      if( this.init769up ) return

      // One-time inits here

      this.$brandCarousel.removeClass('has-flexslider')
      this.$roundaboutFlexsliderWrapper.removeClass('flexslider')
      this.$roundaboutFlexsliderWrapper.addClass('roundabout')

      if( this.$roundaboutFlexsliderWrapper.data('flexslider') ) {
        this.destroyFlexslider()
      }

      this.initRoundabout()

      this.init0_768 = false
      this.init769up = true
    },

    restartRoundabout: function() {
      if( $win.width() > 767 ) {
        this.destroyRoundabout()
        this.initRoundabout()
      }
    },

    // Fades or toggles the brand carousel backgrounds, FX are determined if Android is detected.
    updateRoundaboutBgs: function( index ) {
      var $$disableChildren, $enableChildren

      $$disableChildren = this.$$roundaboutBgsChildren.not(':eq(' + index + ')')
      disableChildrenFx = app.Core.isMobile ? 'hide' : 'fadeOut'

      $enableChildren = this.$$roundaboutBgsChildren.eq( index )
      enableChildrenFx = app.Core.isMobile ? 'show' : 'fadeIn'

      // Execute animation helps on this jQuery selections
      $$disableChildren[ disableChildrenFx ]()
      $enableChildren[ enableChildrenFx ]()
    },

    initRoundabout: function() {
      var self, readyToClick

      self = this
      readyToClick = true

      // Set preliminary roundabout CSS
      if( !app.Core.isOldIE ) {
        setRoundaboutLayout()
      } else {
        setRoundaboutIELayout()
      }


      // Initialize the roundabout factory, with a callback
      this.$roundabout.roundabout({
        minScale: .2,
        duration: 1400,
        easing: 'easeOutQuad',
        responsive: app.Core.isOldIE ? false : true,
        clickToFocusCallback: clickToFocusCallback
      }, initCallback )

      this.$$roundaboutChildren.on('click.roundabout-child', handleRoundaboutClick)

      // See notes on the handleWindowFocus regarding what this is.
      $win.on('focus.brand-carousel', handleWindowFocus)

      function setRoundaboutLayout() {
        var viewportWidth, widthMax, widthMin, targetMax, adjustedWidth, targetMax, calcPercentage, idealHeightLow, idealHeightHigh, newFlexsliderHeight

        viewportWidth = $win.width()

        widthMax = 1440 // max value to achieve 100%
        widthMin = 768 // starting value of our range 
        targetMax = widthMax - widthMin // find the 100% value against a zero point
        adjustedWidth = viewportWidth - widthMin // adjust width to zero point

        calcPercentage = adjustedWidth / targetMax // calculate a true percentage value
        calcPercentage = ( calcPercentage > 1 ) ? 1 : calcPercentage // disallow > 100%

        idealHeightLow = 340
        idealHeightHigh = 580
        idealRange = idealHeightHigh - idealHeightLow
        idealHeight = ( calcPercentage * idealRange ) + idealHeightLow

        setCtaIdeaHeight = idealHeight - 70

        self.$roundaboutFlexsliderWrapper
          .add( self.$roundabout )
          .height( idealHeight )

        self.$roundabout.find('.btn-wrapper').css({
          top: setCtaIdeaHeight
        })
      }

      // Layout for IE < 9
      function setRoundaboutIELayout() {
        self.$roundaboutFlexsliderWrapper
          .add( self.$roundabout )
          .height( 540 )

        self.$roundabout.find('.btn-wrapper').css({
          top: 460
        })
      }

      // initCallback fades in the slideshow 
      function initCallback() {
        self.$roundabout.css({ opacity: 1 })
        self.$$roundaboutChildren.eq(0).addClass('transition-fx')
        self.$$roundaboutChildren.not(':eq(0)').addClass('not-active')
      } // end initCallback

      // handleRoundaboutClick toggles class names on the round about elements for style management
      function handleRoundaboutClick(e) {
        var el, index, direction
        el = $(e.delegateTarget)

        if( el.hasClass('roundabout-in-focus') || !readyToClick ) return

        readyToClick = false

        // Get the click index and direction
        index = el.index()
        direction = ( $win.width()/2 < e.pageX ) ? 'left' : 'right' 

        self.$$roundaboutChildren.removeClass('transition-fx')
        el.addClass('transition-fx').removeClass('not-active')

        self.$$roundaboutChildren.not('.transition-fx').addClass('not-active')

        // Update backgrounds
        self.updateRoundaboutBgs( index )

        // Analytics
        el.trigger('send-analytics')

      } // end handleRoundaboutClick

      // Toggle if roundabout is ready for another click event
      function clickToFocusCallback() {
        readyToClick = true
      }

      // There is a strange scenario under the following sequence:
      // 1) jQuery.flexslider plugin was initialized for a viewport width less than 768px
      // 2) The viewport is increased viewport width above 768px
      // 3) jQuery.roundabout plugin is initialized
      // 4) The browser window loses focus in the OS
      // 5) The browser window regains focus with the current tab still displayed
      // 6) jQuery.roundabout plugin fires it's resize handler
      // 7) The resize handler fires jQuery.roundabout's relayoutChildren method
      // 8) The relayoutChildren method incorrectly calculates the CSS for the feature
      // 9) A substantial layout defect occurs
      // ------------------------------------------------------------------
      // handleWindowFocus() is designed to catch the scenario and runs relayoutChildren one more time to fix the issue.
      // I believe this all happens in one paint event, so it appears to be seamless.
      function handleWindowFocus() {
        self.$roundabout.roundabout('relayoutChildren')
      }
    }, // end initRoundabout

    // updateFlexsliderBg sends the flexslider index
    // to our updateRoundaboutBgs method
    updateFlexsliderBg: function( flexslider ) {
      this.updateRoundaboutBgs( flexslider.animatingTo )
    },

    initFlexslider: function() {
      var leftAnalytics, rightAnalytics, flexsliderConfiguration
      
      leftAnalytics = '{"category":"' + app.GoogleAnalytics.options.currentPath + '","action":"Carousel","opt_label":"Left_Arrow"}'

      rightAnalytics = '{"category":"' + app.GoogleAnalytics.options.currentPath + '","action":"Carousel","opt_label":"Right_Arrow"}'

      // Use a separate configuration object for Android
      flexsliderConfiguration = app.Core.isMobile ? 
        {
          animation: "slide",
          slideshow: true,
          after: this.updateFlexsliderBg.bind(this)
        } : {
          animation: "slide",
          slideshow: true,
          before: this.updateFlexsliderBg.bind(this)
        }

      if( this.$roundabout.data('roundabout') ) {
        this.$roundabout.removeData('roundabout')
      }

      this.$roundaboutFlexsliderWrapper.flexslider( flexsliderConfiguration )

      // Add analytics to Flexslider's dynamic elements
      $('.flex-prev').attr('data-ga', leftAnalytics)
      $('.flex-next').attr('data-ga', rightAnalytics)
    },

    // destroyRoundabout does:
    // 1) Call roundabouts destroy method
    // 2) Removes a utility class
    // 3) Remove an special event handler
    destroyRoundabout: function() {
      this.$roundabout.roundabout('destroy')

      this.$roundabout
      .find('.transition-fx')
        .removeClass('transition-fx')
        .end()
      .find('.btn-wrapper').css({
        top: 'auto'
      })

      $win.off('focus.brand-carousel')
    },

    // Call flexsliders destroy method
    destroyFlexslider: function() {
      this.$roundaboutFlexsliderWrapper.flexslider('destroy')
    },

    // Initialize BrandCarousel
    // Note: this.init() executes before jQuery's DOM ready.
    init: function() { 
      var self = this

      // Image Ready routines 
      $win.on('load.carousel', imagesLoaded.bind(this) )

      function imagesLoaded() {

        // The roundabout and flexslider features are
        // handled through the breakpoints app
        handleResponsive()
      }

      // handleResponsive is a utility to assign all of the breakpoint event handlers we want for this module
      function handleResponsive() {
        app.ResponsiveBreakpoints.register_event(
          '0-768',
          'brand-carousel-0-768',
          self.setup0_768.bind(self) // using es5-shim.js
        )

        app.ResponsiveBreakpoints.register_event(
          '768-+',
          'brand-carousel-768up',
          self.setup769up.bind(self) // using es5-shim.js
        )
      }
    },

    // Destroy BrandCarousel Events & Extras
    destroy: function() {
      // Undo everything that init does
    }
  } // end BrandCarousel.prototype

  // Attach the BrandCarousel constructor to our global namespace
  app._Modules.BrandCarousel = BrandCarousel
  
  // Module Helpers
  helpers = {

  }

  /////////////////////////////////////
  // End BrandCarousel
  /////////////////////////////////////

}( jQuery, BuffaloWildWings )
