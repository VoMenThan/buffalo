/////////////////////////////////////
//
// app.Wings
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
// Module configurations and defaults go here.
// 
// TODOs: 
// 1) This template module should be initializing the other modules for the template
// 
// INITIALIZATION:
// app.Wings = new app._Modules.Wings() 
// 
/////////////////////////////////////

!function( $, app ) {
  var Wings,
  defaults

  // Instantiate shared module variables here.
  // NOTE: DO NOT instantiate module properties here, 
  // mostly browser lookups/references or app helpers belong here.
  // Examples:
  // $win = $(window),
  // location = window.location,
  // push = Array.prototype.push

  /////////////////////////////////////
  // Begin Wings
  /////////////////////////////////////
 
  defaults = {

    coverflow: '#coverflow'

  } // end Wings.defaults

  Wings = function( options ) {

    // Map optional configs if they exist  
    options = this.options = options ? $.extend({}, defaults, options) : defaults
    
    // Wings jQuery extended elements
    this.$coverflow = $( options.coverflow )
    

    // Set up the module
    this.init()
  } // end Wings Constructor

  // Wings Methods
  Wings.prototype = {

    // Initialize Wings
    // Note: this.init() executes before jQuery's DOM ready.
    init: function() { 
      var self = this
      
      // DOM Ready routines. 
      $(domReady)

      // Utility function to execute on jQuery's DOM Ready 
      function domReady(){

        if ( Modernizr.touch ){
          app.SaucySlider = new app._Modules.Coverflow({
            navigation: true,
            mouseScrolling: false
          })
        } else {
          app.SaucySlider = new app._Modules.Coverflow({
            navigation: false
          }) 
        }
      }
    }
  } // end Wings.prototype

  // Attach the Wings constructor to our global namespace
  app._Modules.Wings = Wings

  /////////////////////////////////////
  // End Wings
  /////////////////////////////////////

}( jQuery, BuffaloWildWings )
