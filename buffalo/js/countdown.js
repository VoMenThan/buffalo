/////////////////////////////////////
//
// app.Countdown
// -----------------------------
// DESCRIPTION: 
// This is a coutndown used for the sports page countdown,
// and coule be used on various pages throughout the BWW application 
// 
// DEPENDENCIES:
// - /public/javascript/libs/jquery-1.7.2.js
// - /public/javascript/libs/jquery.countdown.js
// - /public/javascript/modules/core.js
// - /public/javascript/modules/responsive-breakpoints.js (for now?)
//
// CONFIGURATIONS:
// Module configurations and defaults go here.
// 
// TODOs: 
// 1) Call the countdown
// 1a) The countdown will require an start date (sport X begins on March 13th 1998)
// 1b) Call the countdown based on an element on the page
// 
// Hopefully an example:
// <div id="college-football" class="sport-item">
//   <ul id="days">
//     <li class="image{d100}"></li>
//     <li class="image{d10}"></li>
//     <li class="image{d1}"></li>
//   </div>
// </div>
//
// INITIALIZATION:
// app.countdown = new app._Modules.countdown({ 
//  sport: 'college-football', 
//  countdownYear: 1998,
//  countdownDay: 03,
//  countdownMonth: 13
// })
// 
/////////////////////////////////////
!function( $, app, undefined ) {
  var Countdown,
  defaults,
  helpers,
  $win = $(window)
  // these old vars we meed to define later
  //weekYear,
  //weekMonth, 
  //weekDay

  defaults = {
    sport: 'college-football',
    countdownYear: 2025,
    countdownDay: 25,
    countdownMonth: 2
  }

  Countdown = function( options ) {
    // Map optional configs if they exist  
    options = this.options = options ? $.extend({}, defaults, options) : defaults

    // Countdown Configs
    this.$countdownTarget = $('#'+options.sport) // config calls for an ID, since there will only be one instance ea.
    this.$countdownMonth = options.countdownMonth
    this.$countdownYear = options.countdownYear
    this.$countdownDay = options.countdownDay


    // using the breakpoint API and setting both vals to false
    this.init0_768 = false
    this.init769up = false

    // Set up the module
    this.init()
  }

  // The Counter's core
  Countdown.prototype = {

    /////////////////////////////////
    // Response and Resize Handlers 
    /////////////////////////////////

    // setup0_768 configures the slideshow for a viewport of < 768px
    // This is just an example... 
    // You can create methods for any breakpoint range desired.
    setup0_768: function() {
      // Do stuff for 0-768

      // Rapid-firing events here

      if( this.init0_768 ) return
           
      // One-time inits here

      this.init0_768 = true
      this.init769up = false
    },

    // setup769up configures the slideshow for a viewport of 769px+
    // This is just an example... 
    // You can create methods for any breakpoint range desired.
    setup769up: function() {
      // Do stuff for 769+

      // Rapid-firing events here

      if( this.init769up ) return
          
      // One-time inits here

      this.init0_768 = false
      this.init769up = true
    },                                              

    /////////////////////////////////
    // Counter Initialization
    /////////////////////////////////

    initCountdown: function() {
      var countdownDate = new Date(this.$countdownYear, this.$countdownMonth, this.$countdownDay),
      countdownLayout = this.$countdownTarget.find('.days-count')

      console.log(countdownLayout)

      countdownLayout.countdown({
        until: countdownDate, 
        format: 'D',
        layout: countdownLayout.html()
      })


      // austDay = new Date();
      //austDay = new Date(weekYear, weekMonth, weekDay);
      //$('#defaultCountdown').countdown({until: austDay, format: 'D' });
      //$('#year').text(austDay.getFullYear());

      //$('#countdown').countdown({until: austDay, compact: true, format: 'YDHMS' , 
                                //layout: $('#countdown').html()});
    },

    // Initialize Counter
    // Note: this.init() executes before jQuery's DOM ready.
    init: function() { 
      var self = this

      $(domReady)

      function domReady(){
        handleResponsive()
        self.initCountdown()
      }

      function handleResponsive() {
        app.ResponsiveBreakpoints.register_event(
          '0-768',
          'countdown-0-768',
          self.setup0_768.bind(self)
        )

        app.ResponsiveBreakpoints.register_event(
          '768-+',
          'countdown-768up',
          self.setup769up.bind(self)
        )
      }
    }
  }


  // Attach the Counter constructor to the application
  app._Modules.Countdown = Countdown
  

}( jQuery, BuffaloWildWings )
  
//});

