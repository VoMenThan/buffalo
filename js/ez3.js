/////////////////////////////////////
//
// app.EZ3
// -----------------------------
//
// Feel free to remove this entire ABOUT/GETTING STARTED/DEBUGGING section
// when you build your module
//
// ABOUT "app":
// app is the the global variable passed into the anonymous function.
// For each module in the website application,
// it is recommended you pass in the same global variable for each module
//
// The /javascript/modules/core.js file should instantiate the app variable
// in the head of the web page.
//
// The following is an example of the global app instantiation and module instantiations:
// window.BuffaloWildWings = new function() {} // Create global namespace as Class
// BuffaloWildWings._Modules = {} // Create storage object for Module Constructors
// !function( $, app ) { /* Module Source Code */ }( jQuery, BuffaloWildWings )
//
// GETTING STARTED
// 1) Find & replace "EZ3" with AwesomeUsefulEZ3
// 2) Save you module with a filename such as: awesome-useful-module-name.js in /modules
// 3) Instantiate your module after the script is loaded. Example:
//    <script>
//      !function( app ) {
//        app.AwesomeUsefulEZ3 = new app._Modulses.AwesomeUsefulEZ3()
//      }( BuffaloWildWings )
//    </script>
// 4) Open the page and check the console for your module. Example:
//    BuffaloWildWings.AwesomeUsefulEZ3
//    --> returns AwesomeUsefulEZ3 as navigable Constructor
//
// DEBUGGING
// Coming soon with skrilla and proTips
//
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
// See defaults object.
//
// TODOs:
// 1) Document any TODO tasks here.
//
// INITIALIZATION:
// app.EZ3 = new app._Modules.EZ3({ /* configuration */ })
//
/////////////////////////////////////

!function( $, app ) {
  var EZ3,
  defaults,
  helpers

  // Instantiate shared module variables here.
  // NOTE: DO NOT instantiate module properties here,
  // mostly browser lookups/references or app helpers belong here.
  // Examples:
  // $win = $(window),
  // location = window.location,
  // push = Array.prototype.push

  /////////////////////////////////////
  // Begin EZ3
  /////////////////////////////////////

  var defaults = {

    ticker: '.ticker',
    heroNBA: '.hero-bg.nba',
    heroNHL: '.hero-bg.nhl'

  } // end defaults

  EZ3 = function( options ) {

    // Map optional configs if they exist
    options = this.Options = new function Options() {
      options ? $.extend(this, defaults, options) : $.extend(this, defaults)
    }

    // EZ3 jQuery extended elements
    this.$ticker = $( options.ticker )
    this.$heroNBA = $( options.heroNBA )
    this.$heroNHL = $( options.heroNHL )

    // EZ3 properties
    this.property = false

    // Set up the module
    this.init()
  } // end EZ3 Constructor

  // EZ3 Methods
  EZ3.prototype = {

    // setup0_768 configures the slideshow for a viewport of < 768px
    // This is just an example...
    // You can create methods for any breakpoint range desired.
    setup0_768: function() {
      // Do stuff for 0-768

      // Rapid-firing events here

      if( this.init0_768 ) return

      //console.log('init 0-768')

      // One-time inits here
      this.initTicker()
      this.initHeroBg()

      this.init0_768 = true
    },

    // setup769up configures the slideshow for a viewport of 769px+
    // This is just an example...
    // You can create methods for any breakpoint range desired.
    setup769up: function() {
      // Do stuff for 769+
      //

      if ( this.init769up ) return

      //console.log('init 768-+')

      // One-time inits here
      this.initTicker()
      this.initHeroBg()

      this.init769up = true
    },
    
    // Ticker Animation
    initTicker: function() {
      var self = this;
      var speed = 6;
      var blinkDelay = 80;
      var ticker = self.$ticker;
      var items, scroller = self.$ticker.children();
      var width = 300;
      scroller.children().each(function() {
        width += $(this).outerWidth(true);
      });
      scroller.css('width', width);
      setTimeout(function() {
        scroll();
      }, 1400);
      function scroll() {
        items = scroller.children();
        var scrollWidth = items.eq(0).outerWidth();
        scroller.animate({'left' : 0 - scrollWidth}, scrollWidth * 100 / speed, 'linear', changeFirst);
      }
      function changeFirst() {
        scroller.append(items.eq(0).remove()).css('left', 0);
        scroll();
      }
      function advanceTicker() {
        scroller.stop()
        scroller.css('left', '100%');
        setTimeout(function() {
          ticker.css('background-image', 'url(/public/images/ez3/ticker-small.png)');
          setTimeout(function() {
            ticker.css('background-image', 'none');
            setTimeout(function() {
              ticker.css('background-image', 'url(/public/images/ez3/ticker-med.png)');
              setTimeout(function() {
                ticker.css('background-image', 'none');
                setTimeout(function() {
                  ticker.css('background-image', 'url(/public/images/ez3/ticker-large.png)');
                  setTimeout(function() {
                    ticker.css('background-image', 'none');
                    scroller.append(items.eq(0).remove()).css('left', '75%');
                    scroll();
                  }, blinkDelay);
                }, blinkDelay);
              }, blinkDelay);
            }, blinkDelay);
          }, blinkDelay);
        }, blinkDelay);
      }
      $('body').on('click', '.cta .btn', advanceTicker)
    },
    
    // Hero Background Animation
    initHeroBg: function() {
      var speed = 300;
      var fadeDelay = 500;
      var swapDelay = 14000;
      this.$heroNHL.fadeOut(speed)
      swapHeroDelay()
      function swapHeroDelay() {
        setTimeout(function() {
          swapHero();
        }, swapDelay);
      }
      function swapHero() {
        var activeHero = $('.hero-bg.active')
        activeHero.fadeOut(speed).removeClass('active')
        setTimeout(function() {
          activeHero.siblings('.hero-bg').addClass('active').fadeIn(speed, swapHeroDelay)
        }, fadeDelay);
      }
    },

    // Initialize EZ3
    // Note: this.init() executes before jQuery's DOM ready.
    init: function() {
      var self = this

      // DOM Ready routines.
      $(domReady)

      function trackLinkClick(event) {
        var data = $(event.target).closest('.js-track').data()
        window._gaq.push([
          '_trackEvent',
           data.gaCategory || 'category',
           data.gaAction || 'action',
           data.gaLabel || 'label'
        ])
      }

      // Utility function to execute on jQuery's DOM Ready
      function domReady(){

        // DOM Ready inits
        // Recommend calling a sequence of private functions here to kick off the app
        $('body').on('click', '.js-track', trackLinkClick)

        handleResponsive()
      }

      // handleResponsive is a utility to assign all of the breakpoint event handlers we want for this module
      function handleResponsive() {
        app.ResponsiveBreakpoints.register_event(
          '0-768',
          'ez7-0-768',
          self.setup0_768.bind(self) // using es5-shim.js
        )

        app.ResponsiveBreakpoints.register_event(
          '768-+',
          'ez7-768up',
          self.setup769up.bind(self) // using es5-shim.js
        )
      }
    },

    // Destroy EZ3 Events & Extras
    destroy: function() {
      // Undo everything that init does
    }
  } // end EZ3.prototype

  // Attach the EZ3 constructor to our global namespace
  app._Modules.EZ3 = EZ3

  // Module Helpers
  helpers = {

  }

  /////////////////////////////////////
  // End EZ3
  /////////////////////////////////////

}( jQuery, BuffaloWildWings )

