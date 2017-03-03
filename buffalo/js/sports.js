/////////////////////////////////////
//
// app.Sports
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
// app.Sports = new app._Modules.Sports() 
// 
/////////////////////////////////////   
!function( $, app ) {
  var Sports,
  defaults,
  helpers

  defaults = {
    coverflow: '#coverflow'
  } // end Wings.defaults
                                       
  Sports = function( options ) {

    // Map optional configs if they exist  
    options = this.options = options ? $.extend({}, defaults, options) : defaults
    
    // Wings jQuery extended elements
    this.$coverflow = $( options.coverflow )

    // Set up the module
    this.init()     
  }

  // Wings Methods
  Sports.prototype = {

    // Initialize Sports
    // Note: this.init() executes before jQuery's DOM ready.
    init: function() { 
      var self = this

      // DOM Ready?
      $(window).on('load.sports', domReady)    

      // Utility function to execute on jQuery's DOM Ready 
      function domReady(){

        if ( Modernizr.touch ){
          app.SportsCountdown = new app._Modules.Coverflow({
            navigation: true,
            mouseScrolling: false
          })
        } else {
          app.SportsCountdown = new app._Modules.Coverflow({
            navigation: false
          }) 
        }

        // This hack seems to resolve the centering calculation better.
        setTimeout(function() {
          $(window).trigger('resize')
        }, 600)
        
      }
    }
  }

  // Attach the Wings constructor to our global namespace
  app._Modules.Sports = Sports
  
  // Module Helpers
  helpers = {

  }     

}( jQuery, BuffaloWildWings )
