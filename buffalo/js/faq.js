/////////////////////////////////////
//
// BuffaloWildWings.Faq
// -----------------------------
//
// Module Description: 
// Basic interaction for the FAQ template.
// 
// Dependencies:
// - /public/javascript/libs/jquery-1.7.2.js
// - BWW Core
// 
// Configurations:
// See the Faq.defaults object
// 
// TODOs
// 1) Event delegation would be better for performance & dynamic apps.
// 2) Document more dependencies, I think
// 
// Initialization:
// BuffaloWildWings.Faq = new BuffaloWildWings._Modules.Faq() 
// 
/////////////////////////////////////

!function( $, app ) {
  var Faq,
  helpers,
  $win = $(window)

  /////////////////////////////////////
  // Begin Faq
  /////////////////////////////////////
 
  Faq = function( options ) {
    var options

    // Map optional configs if they exist  
    this.options = options ? 
      $.extend({}, Faq.defaults, options) : 
      Faq.defaults
    
    options = this.options

    // Faq jQuery extended elements
    this.$faqHeaders = $( options.faqHeaders )
    this.$faqSection = $( options.faqSection )

    this.$faqHeadersLinks = $( options.faqHeadersLinks )
    this.$faqSectionLinks = $( options.faqSectionLinks )
    this.$faqCloseLinks = $( options.faqCloseLinks )

    this.$backToTopLinks = $( options.backToTopLinks )

    // Set up the module
    this.init()
  }

  // Faq Methods
  Faq.prototype = {

    // handleFaqNav scrolls the user to the top of the element defined in
    // the data-link-target attribute of the element
    handleFaqNav: function(e) {
      var el, scrollTarget, scroll

      e.preventDefault()

      el = $( e.target )
      scrollTarget = $( el.data('linkTarget') )
      scroll = scrollTarget.offset().top - scrollTarget.height()

      $('html,body').animate({
        scrollTop: scroll
      }, this.options.faqNavDuration )
    },

    // handleFaqLink toggles an active class for the FAQ widgets
    handleFaqLink: function(e) {
      var faqItem
      
      e.preventDefault()

      faqItem = $( e.target ).closest('[data-faq]')
      faqContent = faqItem.find('.faq-content-wrapper')

      // Could use modernizr and $.animate for IE
      if( !faqContent.data('isOpen') ) {
        faqContent.height( faqContent.data('animateHeight') )
        faqContent.data('isOpen', 'true')
      } else {
        faqContent.height( 0 )
        faqContent.removeData('isOpen')
      }
    },

    // handleBackToTop scrolls to the top of the page
    handleBackToTop: function(e) {
      e.preventDefault()
      if( $( document ).scrollTop() > 0 ) 
        $( 'html, body' ).animate({ scrollTop: 0 }, this.options.backToTopDuration )
    },

    // Initialize Faq
    init: function() { 
      var self = this

      // DOM Ready routines. 
      $(domReady)

      // Utility function to execute on jQuery's DOM Ready 
      function domReady(){
        setupFaqHandlers()
        setupFaqContent()
      }

      // setupFaqHandlers
      function setupFaqHandlers() {
        self.$faqHeadersLinks.on('click.header-links', $.proxy( self.handleFaqNav, self ))

        self.$faqSectionLinks.on('click.faq-links', $.proxy( self.handleFaqLink, self ))

        self.$backToTopLinks.on('click.back-links', $.proxy( self.handleBackToTop, self ))

        self.$faqCloseLinks.on('click.close-links', $.proxy( self.handleFaqLink, self ))
      }

      function setupFaqContent() {

        // Don't use margins on the wrapper or you'll probably have troubles.
        $( self.options.faqSectionContent ).each(function(i, el) {
          el = $(el)
          $(el)
            .data('animateHeight', el.height())
            .height(0)
        })
      }
    },

    // Destroy Faq Events & Extras
    destroy: function() {
      // Undo everything that init does
    }
  }

  Faq.defaults = {

    faqHeaders: '#faqHeaders',
    faqSection: '#faqSection',

    faqHeadersLinks: '.faq-headings h4',
    faqSectionLinks: '.faq-items h4',
    faqSectionContent: '.faq-content-wrapper',
    faqNavDuration: 500,

    faqCloseLinks: '.close-btn',

    backToTopLinks: '.back-to-top',
    backToTopDuration: 500

  }

  // Attach the Faq constructor to our global namespace
  app._Modules.Faq = Faq
  
  // Module Helpers
  helpers = {

  }

  /////////////////////////////////////
  // End Faq
  /////////////////////////////////////

}( jQuery, BuffaloWildWings )