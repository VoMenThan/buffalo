/////////////////////////////////////
//
// app.Coverflow
// -----------------------------
// DESCRIPTION: 
// A cover flow style module inspired by
// http://osvaldas.info/incoming/examples/gestures-sensitive-slideshow-responsive-and-touch-friendly/
// 
// DEPENDENCIES:
// - /public/javascript/libs/jquery-1.7.2.js
// - /public/javascript/modules/core.js
// - /public/javascript/modules/responsive-breakpoints.js
// - public/javascript/libs/hammer.js
// - public/javascript/libs/jquery.hammer.js

// CONFIGURATIONS:
// Module configurations and defaults go here.
// 
// TODOs: 
// 1) Need to update a window width var on orientation change. (No longer sure where this is...)
// 2) Should consolidate slideFoward / slideBackward into one slide function.
// 3) slideLeft / slideRight vars are now serving their reverse purposes ;). 
// 4) Get rid of hammer js and get inspiration from flexslider js.
// 5) slideBack function is holding some un-necessary functionality
// 
// INITIALIZATION:
// app.Coverflow = new app._Modules.Coverflow() 
// 
/////////////////////////////////////

!function ($, app, undefined) {
  var Coverflow,
  defaults,
  helpers,
  $win = $(window)

  // Instantiate shared module variables here.
  // Such as:
  // $win = $(window),
  // location = window.location,
  // push = Array.prototype.push

  // Private Application Variables
  var _slideWidthHalf,
  _coverflowSliderIconRightBound,
  _coverflowSliderIconLeftBound


  /////////////////////////////////////
  // Begin Coverflow
  /////////////////////////////////////

  var defaults = {

    navigation: true,
    mouseScrolling: true,
    minResolutionForTouchScrolling: 481,

    slideForwardCallback: $.noop,
    slideBackCallback: $.noop,

    slideSpeed: 500,

    // Coverflow element selections
    coverflow: '#coverflow',
    coverflowSlideWrapper: '#coverflowSlideWrapper',
    coverflowSlides: 'li',

    hoverClass: 'active',
    hoverPrevClass: 'active-prev',
    hoverNextClass: 'active-next',

    coverflowSlider: '#coverflowSlider',
    coverflowSliderIcon: '#coverflowSliderIcon',
    coverflowSliderIconBackground: '#coverflowSliderIconBackground',

    coverflowNavigation: '#coverflowNavigation',

    // These got reversed, but the elements work as intended
    slideLeft: '.slide-right',
    slideRight: '.slide-left'

  } // end defaults

  Coverflow = function (options) {

    // Map optional configs if they exist  
    options = this.options = options ? $.extend({}, defaults, options) : defaults

    // Behavioral Configurations
    this.mouseScrolling = options.mouseScrolling
    this.navigation = options.navigation
    this.minResolutionForTouchScrolling = options.minResolutionForTouchScrolling

    // Coverflow jQuery extended elements
    this.$coverflow = $(options.coverflow)
    this.$coverflowSlideWrapper = $(options.coverflowSlideWrapper)
    this.$$coverflowSlides = this.$coverflow.find(options.coverflowSlides)
    this.$coverflowNavigation = $(options.coverflowNavigation)

    this.$coverflowSlider = $(options.coverflowSlider)
    this.$coverflowSliderIcon = $(options.coverflowSliderIcon)
    this.$coverflowSliderIconBackground = $(options.coverflowSliderIconBackground)

    // This stuff is a bit overkill but useful for custom slider icons
    _coverflowSliderIconLeftBound = this.$coverflowSliderIconBackground.data('leftoffset')
    _coverflowSliderIconRightBound = this.$coverflowSliderIconBackground.data('rightoffset')

    // Coverflow properties
    this._coverflow = null // placeholder for the jQuery plugin

    this.coverflowTotalWidth = 0

    // Slide Properties
    this.slideCount = this.$$coverflowSlides.length

    _slideWidth = this.$$coverflowSlides.eq(0).outerWidth(true)
    _slideWidthHalf = _slideWidth / 2

    this.activeSlide = this.activeSlideInit = (Math.floor(this.slideCount / 2) - 1)

    this.$middleSlide = this.$$coverflowSlides.eq(this.activeSlide)

    this.slideForwardCallback = options.slideForwardCallback
    this.slideBackCallback = options.slideBackCallback

    this.slideSpeed = options.slideSpeed

    this.hoverClass = options.hoverClass
    this.hoverPrevClass = options.hoverPrevClass
    this.hoverNextClass = options.hoverNextClass

    this.hoverClasses = this.hoverClass + ' ' +
                         this.hoverPrevClass + ' ' +
                         this.hoverNextClass

    this.scrollbarWidth = helpers.getScrollBarWidth()

    if (options.navigation) {
      this.$coverflowNavigation = $(options.coverflowNavigation)
      this.$slideLeft = $(options.slideLeft)
      this.$slideRight = $(options.slideRight)
    }

    this.init0_768 = false
    this.init769up = false

    // Set up the module
    this.init()
  } // end Coverflow Constructor

  // Coverflow Methods
  Coverflow.prototype = {

    /////////////////////////////////
    // Response and Resize Handlers 
    /////////////////////////////////

    // setupResizer handles all window resize events 
    // via the ResponsiveBreakpoints module
    setupResizer: function () {
      var relativePosition = ((this.activeSlide + 1) / this.slideCount)
      this.positionSlider(relativePosition)
      this.centerCoverflow()
    },

    /////////////////////////////////
    // Coverflow Event Management
    /////////////////////////////////

    setupCoverFlowEvents: function () {
      var self, options,

      relativePosition,

      // Touch vars
      startX,
      offset,
      cwidth,
      dx,
      scrolling = false,
      relativePosition;

      self = this
      options = this.options

      // Events for the mouse scrolling experience
      if (options.mouseScrolling) {

        this.$coverflow
          .on('mousemove.coverflow', function (e) {
            self.mouseScrollSlides(e.pageX);
          })
          .on('hover.coverflow', this.options.coverflowSlides, this.slideHoverHandler.bind(this))
      }

      if (options.navigation) {
        this.$slideLeft.on('click.coverflow', this.slideForward.bind(this))
        this.$slideRight.on('click.coverflow', this.slideBack.bind(this))
      } else {
        this.removeNavigation()
      }

      if (Modernizr.touch) {

        // This is just for desktop testing
        // this.$coverflow.find('img').bind("dragstart", function() { 
        //   return false
        // })

        this.$coverflow.hammer({
          drag_min_distance: 5,
          drag_vertical: false
        })
        .bind('dragstart', function (e) {

          if (e.touches.length === 1) {
            cwidth = _slideWidth

            offset = parseInt(
              self.getTranslate3dProps(
                self.$coverflowSlideWrapper.css('transform')
              ).x.replace(/px/, '')
            , 10)

            startX = e.touches[0].x
          }

          self.$coverflow
            .bind('drag', function (e) {

              dx = startX - e.touches[0].x
              dx = (offset + -dx)

              self.$coverflowSlideWrapper.css({
                transform: 'translate(' + dx + 'px, 0)'
              })
            })
            .bind('dragend', function (e) {
              var distance, direction, destination, activeIndexNew

              distance = e.distance
              direction = e.direction
              directionRight = (direction == "right")

              if (distance > 40) {

                // Return the coverflow to the previous position if we slide 
                // past the end of the show
                if (
                  directionRight && self.activeSlide == 0 ||
                  !directionRight && self.activeSlide == (self.slideCount - 1)
                ) {

                  destination = offset

                } else {

                  destination = directionRight ? (offset + cwidth) : (offset - cwidth)
                  activeIndexNew = self.activeSlide = directionRight ? self.activeSlide - 1 : self.activeSlide + 1
                  self.updateClasses(activeIndexNew)
                  self.updateSlideNav()

                }

                self.$coverflowSlideWrapper.css({
                  transform: 'translate(' + destination + 'px, 0)'
                })

                // Otherwise restore the original position
              } else {

                self.$coverflowSlideWrapper.css({
                  transform: 'translate(' + offset + 'px, 0)'
                })
              }

              relativePosition = ((activeIndexNew + 1) / self.slideCount)
              self.positionSlider(relativePosition)

              self.$coverflow.unbind('drag')
              self.$coverflow.unbind('dragend')

              startX = null
              startY = null
              dx = null
              offset = null
            })
        })
      } // end if.touch
    },

    /////////////////////////////////
    // Coverflow Callbacks (coming soon)
    /////////////////////////////////

    /////////////////////////////////
    // Coverflow Utilities
    /////////////////////////////////

    slideHoverHandler: function (e) {
      var el, slide, activeIndex

      el = $(e.target)

      slide = el.closest(this.options.coverflowSlides)
      activeIndex = slide.index()

      this.updateClasses(activeIndex)
    },

    // updateClasses is a utility to toggle the hover classes
    // on and surrounding the currently hovered slide element
    updateClasses: function (activeIndex) {
      var options, slide

      options = this.options
      slide = this.$$coverflowSlides.eq(activeIndex)

      // Do nothing if we're still on the active element
      if (slide.hasClass('active')) return

      // Otherwise update all the classes
      this.$$coverflowSlides.removeClass(this.hoverClasses)

      slide.addClass(options.hoverClass)
      slide.prev().addClass(options.hoverPrevClass)
      slide.next().addClass(options.hoverNextClass)
    },

    // centerCoverflow centers the entire slideshow to the middle slide
    centerCoverflow: function () {
      var self = this

      this.$coverflowSlideWrapper.each(function (i, el) {
        var el, wrapperWidth, slideWidth, slideWidthAdjust, leftPosition, relativePosition, animation, animationX, duration

        el = $(el)
        animation = {}
        duration = "1000"

        // End any current animations before we animate
        if (el.is(':animated')) el.stop(true, true)

        self.coverflowTotalWidth = 0
        wrapperWidth = self.$coverflow.outerWidth()
        slideWidth = self.$$coverflowSlides.eq(0).outerWidth()

        // Active the "center" slide
        self.updateClasses(self.$middleSlide.index())

        // Calculate the visual center of the slideshow
        self.$$coverflowSlides.each(function () {
          self.coverflowTotalWidth += $(this).outerWidth()
        })

        slideWidthAdjust = self.options.leftAdjust || (slideWidth / 2)
        leftPosition = (wrapperWidth - self.coverflowTotalWidth) / 2
        leftPosition = leftPosition + slideWidthAdjust

        self.activeSlide = self.activeSlideInit // + 1 // Seems sketchy

        // Animate to the halfway point of the slideshow
        // el.width( self.coverflowTotalWidth )

        animationX = self.translateX(leftPosition, duration)
        animation = $.extend({}, animation, animationX)

        if (!self.options.mouseScrolling) {
          el.animate(animation, duration, function () { })
        } else {
          el.css({ 'left': leftPosition })
        }

        // Set the calculated width on the slide wrapper for scrolling features
        self.$coverflowSlideWrapper.width(self.coverflowTotalWidth)

        // console.log('wrapper width: %s, slideshow width: %s, left: %s', wrapperWidth, self.coverflowTotalWidth, leftPosition )
      }) // .each()
    },

    // mouseScrollSlides scrolls the slideshow left and right based
    // on the users touch and mouse positions.
    // Also move the slider... because they were married in Vegas
    mouseScrollSlides: function (position) {
      var self, wrapperWidth, relativePosition, scrollDistance, newLeftPosition, iconNewLeftPosition

      wrapperWidth = this.getWrapperWidth()

      if (wrapperWidth > this.coverflowTotalWidth) return

      // Do some calculations for the slideshow
      scrollDistance = this.coverflowTotalWidth - wrapperWidth
      relativePosition = (position / wrapperWidth)
      newLeftPosition = -(relativePosition * scrollDistance)

      iconNewLeftPosition = this.getSlideIconLeftPosition(relativePosition)

      // Slide the slides
      this.$coverflowSlideWrapper.css({
        left: newLeftPosition
      })

      // Slide the slider
      this.$coverflowSliderIconBackground.add(this.$coverflowSliderIcon).css({
        left: iconNewLeftPosition
      })
    },

    updateSlideNav: function () {
      $('.slide-left').toggle(this.activeSlide != 0)
      $('.slide-right').toggle(this.activeSlide != (this.slideCount - 1))
    },

    // slideForward does exactly that
    slideForward: function (e) {
      var animate, iconNewLeftPosition, activeIndexNew

      // Conditions to prevent the animation
      if (
        (this.activeSlide == this.slideCount - 1) ||
        this.$coverflowSlideWrapper.is(':animated')
      ) return

      activeIndexNew = this.activeSlide + 1
      this.activeSlide = activeIndexNew
      relativePosition = ((activeIndexNew + 1) / this.slideCount)

      if (Modernizr.csstransitions) {
        currentTransform = this.getTranslate3dProps(this.$coverflowSlideWrapper.css('transform'))
        currentTransformX = parseInt(currentTransform.x.replace(/px$/, ''), 10)

      } else {
        currentTransformX = parseInt(this.$coverflowSlideWrapper.css('left').replace(/px$/, ''), 10)
      }

      distance = currentTransformX - _slideWidth

      this.slideDistance(distance)
      this.updateClasses(activeIndexNew)

      this.positionSlider(relativePosition)
      this.updateSlideNav()
    },

    // slideBack does exactly that
    slideBack: function (e) {
      var animation, self, distance, currentTransform

      if (
        this.activeSlide == 0 ||
        this.$coverflowSlideWrapper.is(':animated')
      ) return

      activeIndexNew = this.activeSlide - 1
      this.activeSlide = activeIndexNew
      relativePosition = (activeIndexNew / this.slideCount)

      if (Modernizr.csstransitions) {
        currentTransform = this.getTranslate3dProps(this.$coverflowSlideWrapper.css('transform'))
        currentTransformX = parseInt(currentTransform.x.replace(/px$/, ''))

      } else {
        currentTransformX = parseInt(this.$coverflowSlideWrapper.css('left').replace(/px$/, ''), 10)
      }

      distance = currentTransformX + _slideWidth

      this.slideDistance(distance)
      this.updateClasses(activeIndexNew)
      this.positionSlider(relativePosition)
      this.updateSlideNav()
    },

    slideTo: function (index) {

    },

    slideDistance: function (distance) {
      var animation, animationX

      // Using some 
      animation = this.translateX(distance)

      // Animate the show, update classes, position slider
      this.$coverflowSlideWrapper.animate(
        animation,
        {
          duration: this.slideSpeed
        })
        .promise()
        .done(this.animationComplete.bind(this))
    },

    // A future callback API
    animationComplete: function () {

      this.slideBackCallback.bind(this)
    },

    removeNavigation: function () {
      return this.$coverflowNavigation.remove()
    },

    translateX: function (distance) {
      var animation, direction

      direction = (distance > 0) ? "+=" : "-="

      if (Modernizr.csstransitions) {
        animation = {
          transform: "translateX(" + distance + "px)"
        }
      } else {
        animation = {
          left: distance + "px"
        }
      }

      return animation
    },

    getWrapperWidth: function () {
      return this.$coverflow.outerWidth(true)
    },

    getSlideIconLeftPosition: function (relativePosition) {
      var wrapperWidth, iconVariance, iconScrollDistance, iconNewLeftPosition

      wrapperWidth = this.getWrapperWidth()

      // Do some calculations for the slider icon
      // This is pure voodoo.
      iconVariance = -(_coverflowSliderIconRightBound - _coverflowSliderIconLeftBound)

      iconScrollDistance = wrapperWidth + iconVariance

      iconNewLeftPosition = (relativePosition * iconScrollDistance) - _coverflowSliderIconLeftBound

      return iconNewLeftPosition
    },

    positionSlider: function (relativePosition) {
      var iconNewLeftPosition

      if (this.$coverflowSliderIconBackground.is(':animated')) this.$coverflowSliderIconBackground.add(this.$coverflowSliderIcon).stop()

      iconNewLeftPosition = this.getSlideIconLeftPosition(relativePosition)

      this.$coverflowSliderIconBackground.add(this.$coverflowSliderIcon).animate({
        left: iconNewLeftPosition
      })
    },

    getTranslate3dProps: function (prop) {
      var translateString, props

      translateString = prop.match(/translate\([^\)]+\)/i)
      
      try {
        props = translateString[0].match(/\-?\d+px/gi)
      } catch (e) {
        props = [prop.match(/([\-0-9]+), 0\)/)[1]];
      }

      return {
        original: translateString,
        x: props[0] || '',
        y: props[1] || ''
      }
    },

    /////////////////////////////////
    // Coverflow Initialization
    /////////////////////////////////

    // Initialize Coverflow
    // Note: this.init() executes before jQuery's DOM ready.
    init: function () {
      var self = this

      // DOM Ready routines. 
      // $(domReady)

      // Utility function to execute on jQuery's DOM Ready 
      // function domReady(){
      self.setupCoverFlowEvents()
      handleResponsiveEvents()
      // }

      // handleResponsiveEvents is a utility to assign all of the breakpoint event handlers we want for this module
      function handleResponsiveEvents() {
        app.ResponsiveBreakpoints.register_event(
          'all',
          'coverflow-all',
          self.setupResizer.bind(self)
        )
      }
    },

    // Destroy Coverflow Events & Extras
    destroy: function () {
      // Undo everything that init does
    }
  } // end Coverflow.prototype

  // Attach the Coverflow constructor to our global namespace
  app._Modules.Coverflow = Coverflow

  // Module Helpers
  helpers = {

    // http://davidwalsh.name/detect-scrollbar-width
    getScrollBarWidth: function () {
      var scrollDiv, scrollbarWidth

      // Create the measurement node
      scrollDiv = document.createElement("div")
      scrollDiv.className = "scrollbar-measure"
      document.body.appendChild(scrollDiv)

      // Get the scrollbar width
      scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth

      // Delete the DIV 
      document.body.removeChild(scrollDiv);

      // gimme!!
      return scrollbarWidth
    }
  }

  /////////////////////////////////////
  // End Coverflow
  /////////////////////////////////////

} (jQuery, BuffaloWildWings)



