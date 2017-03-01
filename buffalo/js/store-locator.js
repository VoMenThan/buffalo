/////////////////////////////////////
//
// app.StoreLocator
// -----------------------------
//
// DESCRIPTION:
// The module handles the interaction for the Store Locator Page
//
// DEPENDENCIES:
// - /public/javascript/libs/modernizr-2.5.3.js
// - /public/javascript/libs/jquery-1.7.2.js
// - /public/javascript/libs/jquery.paginate.js
// - /public/javascript/libs/mustache.js
// - /public/javascript/libs/jquery.mustache.js
// - /public/javascript/libs/jquery.uniform.js
// - /public/javascript/libs/gmaps.js (custom build)
// - /public/javascript/libs/spin.js
// - /public/javascript/modules/core.js
// - /public/javascript/modules/responsive-breakpoints.js
// - /public/javascript/modules/google-maps.js
//
// NOTE: Some dependencies have additional dependencies.
//
// CONFIGURATIONS:
// See defaults.
//
// TODOs:
//
// INITIALIZATION:
// app.StoreLocator = new app._Modules.StoreLocator()
//
/////////////////////////////////////

!function ($, app) {
  var StoreLocator,
  defaults,
  jqMustache = $.Mustache

  // Instantiate shared/private module variables here.
  // NOTE: DO NOT instantiate module properties here,
  // mostly browser lookups/references or app helpers belong here.
  // Examples:
  // $win = $(window),
  // location = window.location,
  // push = Array.prototype.push
  // referenceValue = 20

  var _locatorSearchHeight,
      _locatorMapTop = 158, // left as static because header won't calculate height correctly until template renders
      _locatorMapTopOffset,
      _locatorLayerOffset = 30,

  // This lookup object helps shift the map an estimated
  // 50px based on the current zoom level.
  // This could be created mathematically.
  // The trick would be to be to determine the latitude offset ratio
  // for the desired pixel range at zoom 21, then multiply by 2
  // all the way up. EXCEPT for zoom 1 and lower - those should be the same as 2...
      _zoomLayerOffsetLookup = {
        0: 19.2,
        1: 19.2,
        2: 19.2,
        3: 9.6,
        4: 4.8,
        5: 2.4,
        6: 1.2,
        7: .6,
        8: .3,
        9: .15,
        10: .08,
        11: .04,
        12: .02,
        13: .01,
        14: .005,
        15: .0025,
        16: .00125,
        17: .000625,
        18: .0003125,
        19: .00015625,
        20: .000078125,
        21: .0000390625
      }

  /////////////////////////////////////
  // Begin StoreLocator
  /////////////////////////////////////

  var defaults = {

    storeLocatorSearch: '#storeLocatorSearch',
    storeLocatorZip: '#storeLocatorZip',
    storeLocatorRadius: '#storeLocatorRadius',

    storeLocatorSubmit: '.submit-form',

    searchResultsList: '#searchResultsList',
    searchResultsPaginationWrapper: '#searchResultsPaginationWrapper',
    searchResultsPagination: '#searchResultsPagination',
    resultsCount: '#resultsCount',

    googleMaps: '#googleMaps',

    googleMapsZoomIn: '#googleMapsZoomIn',
    googleMapsZoomOut: '#googleMapsZoomOut',

    useCurrentLocationBtn: '#useCurrentLocationBtn',

    uniformJsSetLocation: 'input.uniform',

    searchRadius: 20,
    resultsListPagination: 4,

    mustacheTemplates: '/public/javascript/javascript-templates-locator.html'

  } // end defaults

  StoreLocator = function (options) {

    // Map optional configs if they exist
    options = this.options = options ? $.extend({}, defaults, options) : defaults

    // StoreLocator jQuery extended elements
    this.$storeLocatorSearch = $(options.storeLocatorSearch)
    this.$storeLocatorZip = $(options.storeLocatorZip)
    this.$storeLocatorRadius = $(options.storeLocatorRadius)
    this.$$storeLocatorSubmit = $(options.storeLocatorSubmit)

    this.$searchResultsList = $(options.searchResultsList)
    this.$searchResultsPaginationWrapper = $(options.searchResultsPaginationWrapper)
    this.$searchResultsPagination = $(options.searchResultsPagination)
    this.$resultsCount = $(options.resultsCount)

    this.$googleMaps = $(options.googleMaps)

    this.$googleMapsZoomIn = null // loaded via gmaps/google maps
    this.$googleMapsZoomOut = null // loaded via gmaps/google maps

    this.$useCurrentLocationBtn = $(options.useCurrentLocationBtn)

    this.ajax = {
      storeLocator: null,
      renderTemplates: options.mustacheTemplates
    }

    this.storeLocatorJSON = []
    this.renderTemplates = []
    this.mapControlsEnabled = false

    this._gmapsGoogleMap = null // placeholder for the gmaps.js object

    this.searchZip = null

    this.init0_768 = false
    this.init769up = false

    // Set up the module
    this.init()
  } // end StoreLocator Constructor

  // StoreLocator Methods
  StoreLocator.prototype = {

    /////////////////////////////////
    // Responsive Breakpoint Handlers
    /////////////////////////////////

    // setup0_768 configures the slideshow for a viewport of < 768px
    // This is just an example...
    // You can create methods for any breakpoint range desired.
    setup0_768: function () {
      // Do stuff for 0-768

      // Rapid-firing events here

      if (this.init0_768) return

      // One-time inits here

      this.mapControlsEnabled = false
      var wrapper = $('.google-maps-controls')

      console.log($('.google-maps-controls'))
      wrapper.css({
        display: 'none'
      })

      // this.$storeLocatorSearch.addClass('store-locator-page')

      this.init0_768 = true
      this.init769up = false
    },

    // setup769up configures the slideshow for a viewport of 769px+
    // This is just an example...
    // You can create methods for any breakpoint range desired.
    setup769up: function () {
      // Do stuff for 769+

      // Rapid-firing events here

      if (this.init769up) return

      // One-time inits here

      var wrapper = $('.google-maps-controls')
      wrapper.css({
        display: 'block'
      })

      this.mapControlsEnabled = true
      // console.log(this.mapControlsEnabled)

      // If we have store results but have not rendered the map, do it.
      // This is a responsive edge-case...
      if (this.storeLocatorJSON.length && !this._gmapsGoogleMap) {
        this.renderGoogleMaps()
      }

      this.init0_768 = false
      this.init769up = true
    },

    /////////////////////////////////
    // Geolocation Features
    /////////////////////////////////

    handleGeolocation: function () {
      var self = this
      // var spinJsSpinner

      // spinJsSpinner = new Spinner( helpers.spinJsOpts ).spin()

      // this.$locatorForm
      //   .append( spinJsSpinner.el )

      // this.$locatorForm.data('Spinner', spinJsSpinner)

      GMaps.geolocate({
        success: geolocateSuccess,
        error: geolocateError,
        not_supported: geolocateNot_supported
      })

      function geolocateSuccess(position) {
        // console.log('getLocation', position)

        app.GoogleMaps.latLongReverseGeolocation(position.coords.latitude, position.coords.longitude, reverseGeolocationCallback)

        self._gmapsGoogleMap.setCenter(position.coords.latitude, position.coords.longitude)
      }

      function geolocateError(error) {

        if (error.PERMISSION_DENIED) {
          alert('Geolocation permission denied.')
          return
        }

        alert('Geolocation failed: ' + error)
      }

      function geolocateNot_supported() {
        alert("Your browser does not support geolocation")
      }

      function reverseGeolocationCallback(response) {
        // console.log('reverseGeolocationCallback', response )

        var 
          firstLocation = response[0],
          _i = 0,
          _iLimit = firstLocation.address_components.length,
          zipCode

        try {
          for (; _i < _iLimit; _i++) {
            if (firstLocation.address_components[_i].types[0] == "postal_code") {
              zipCode = firstLocation.address_components[_i].short_name;
            }
          }
        } catch (e) {
          console.log('There was a problem parsing the geolocation response.', e)
        }

        self.$storeLocatorZip.val(zipCode)
        self.$storeLocatorSearch.submit()
      }
    },

    /////////////////////////////////
    // Render Utilities
    /////////////////////////////////

    // getRenderTemplates uses jQuery Mustache to load our external
    // template file, which contains all the templates we'll use.
    // Currently getRenderTemplates renders the store, this should
    // be abstracted into a callback
    getRenderTemplates: function (callback) {
      var self = this

      // console.log('getRenderTemplates')

      callback = callback || $.noop

      jqMustache.load(self.ajax.renderTemplates)
        .done(success)
        .fail(fail)

      function success(response) {
        // console.log('getRenderTemplates success')

        self.renderTemplates = jqMustache.templates()
        callback(self.renderTemplates)
      }

      function fail(response) {
        console.error('Failed to load Mustache templates.')
      }
    },

    // renderStoreData does the following:
    // 1) Renders and error state if there were no results.
    // 2) Formats the json for the mustache template
    // 3) Calls jQuery mustache & renders to the DOM
    // 4) Calls to initialize pagination when needed
    // 5) Sets up custom inputs via jquery.uniform.js and checks preferred location
    // 6) Renders Google Maps for desktop
    renderStoreData: function (data) {
      var _i, _z, resultsLength, currentStore

      // console.log('renderStoreData', data.Markers)

      // 1)
      if (!data.success) {
        this.$googleMaps.html('<p class="map-error">' + data.error + '</p>')
        this.$resultsCount.text(0)
        return
      }

      // 2)
      this.storeLocatorJSON = data.Markers
      resultsLength = this.storeLocatorJSON.length

      _i = 0

      for (; _i < resultsLength; ) {
        currentStore = this.storeLocatorJSON[_i]

        currentStore.Store_Data['PhoneNumberClean'] = currentStore.Store_Data.PhoneNumber.replace(/-/g, '')
        currentStore['detailSlug'] = this._serverData.storeDetailSlug
        currentStore['index'] = _i
        currentStore['increment'] = ++_i // ++ pre-increment passes the next value and increments _i :)
        currentStore['currentPath'] = app.GoogleAnalytics.options.currentPath
      }

      // 3)
      this.$searchResultsList.empty()
        .mustache('storeListings', this.storeLocatorJSON)

      this.$resultsCount.text(resultsLength)

      // 4)
      if (resultsLength > this.options.resultsListPagination) {
        this.$searchResultsPaginationWrapper.show()
        this.initPagination()
      } else {
        this.$searchResultsPaginationWrapper.hide()
      }

      // 5)
      $(this.options.searchResultsList + ' .uniform').uniform()

      if (app.MyBDubs.currentStorePreferred) {
        this.$searchResultsList
          .find('input[data-store-id="' + app.MyBDubs.storeData.store_id + '"]')
          .prop('checked', true)
          .data('isChecked', 'true')

        $.uniform.update()
      }

      if (this.init0_768) return

      // 6)
      // We're not using Google Maps on mobile
      // Also, by default we're not using breakpoints because
      // This is an asynchronous activity
      this.renderGoogleMaps()

    }, // end renderStoreData()

    // renderGoogleMaps ...
    renderGoogleMaps: function () {
      var startLatitude, startLongitude

      // console.log('renderGoogleMaps', this.storeLocatorJSON )

      // We're using the first result as the center of the map
      startLatitude = this.storeLocatorJSON[0].Lat
      startLongitude = this.storeLocatorJSON[0].Lng

      var $maps = $(this.options.googleMaps);
      if ($maps.length <= 0) {
        return;
      }

      this._gmapsGoogleMap = new GMaps({
        div: this.options.googleMaps,
        lat: startLatitude,
        lng: startLongitude,

        panControl: false,
        zoomControl: false,
        mapTypeControl: false,
        streetViewControl: false,
        scrollwheel: false
        // width: 960,
        // height: 420,
        // zoom: 15

        // Keep in mind we have access to the events API
        // https://developers.google.com/maps/documentation/javascript/reference?hl=en#Map
        // dragend: function(e) {
        // }
      })

      this.renderGoogleMapsMarkers()
    },

    getLastSearch: function (address) {
      var self = this, address

      if (!address) return false

      // we need to store the previous search
      self.prevSearch = address

    },

    // renderGoogleMapsMarkers....
    renderGoogleMapsMarkers: function () {
      var self, _i, _z, _iLimit, json, map, store, currentLayerId

      self = this
      _i = 0
      _z = 1
      _iLimit = this.storeLocatorJSON.length
      json = this.storeLocatorJSON
      map = this._gmapsGoogleMap


      for (; _i < _iLimit; _i++, _z++) {
        store = json[_i]

        map.addMarker({
          lat: store.Lat,
          lng: store.Lng,
          icon: '/public/images/google-map-icons/google-map-icon-' + _z + '.png',
          click: function (e) {

            // Pull the element ID to reference in the infoWindow domready event handler
            currentLayerId = e.infoWindow.content.match(/ id="([^"]*)"/)[1]

            // Manually track the map layer event
            app.GoogleAnalytics.trackEvent([
              app.GoogleAnalytics.options.currentPath,
              'Map_Locator',
              currentLayerId + '_Pin'
            ])
          },
          infoWindow: {
            content: $.Mustache.render('googleMapStoreLayer', store),

            // The domready event handler ensures the layer remains visible below the locator search bar
            domready: fixLayerPosition.bind(self)

          }
        }) // end map.addMarker()
      } // end for()

      // Zoom out to show all markers and render controls
      map.fitZoom()
      this.renderGoogleMapsControls()

      function fixLayerPosition() {
        var $currentLayer, currentLayerTop, currentLatitude, currentLongitude, newLatitude, currentZoom

        $currentLayer = $('#' + currentLayerId)
        currentLayerTop = $currentLayer.offset().top - _locatorLayerOffset

        // console.log( 'infoWindow', currentLayerId, $( '#' + currentLayerId ), currentLayerTop, _locatorMapTopOffset )

        // If we appear to have rendered the layer behind the locator search bar...
        if (currentLayerTop < _locatorMapTopOffset) {
          currentLatitude = this._gmapsGoogleMap.getCenter().lat()
          currentLongitude = this._gmapsGoogleMap.getCenter().lng()
          currentZoom = this._gmapsGoogleMap.getZoom()
          newLatitude = currentLatitude + _zoomLayerOffsetLookup[currentZoom]

          this._gmapsGoogleMap.setCenter(newLatitude, currentLongitude)
        }
      } // end fixLayerPosition()
    }, // end renderGoogleMapsMarkers()

    // renderGoogleMapsControls builds and positions the + and - zoom controls
    renderGoogleMapsControls: function () {
      var self, map

      self = this
      map = this._gmapsGoogleMap

      map.addControl({
        position: 'top_right',
        text: '+',
        style: {
          opacity: '0'
        },
        id: self.options.googleMapsZoomIn.replace(/^#/, ''),
        classes: 'maps-nav maps-nav-zoom-in',
        events: {
          click: function (e) {
            self._gmapsGoogleMap.zoomIn(1)
          }
        }
      })

      map.addControl({
        position: 'top_right',
        text: '–',
        style: {
          opacity: '0'
        },
        id: self.options.googleMapsZoomOut.replace(/^#/, ''),
        classes: 'maps-nav maps-nav-zoom-out',
        events: {
          click: function (e) {
            self._gmapsGoogleMap.zoomOut(1)
          }
        }
      })

      // There does not appears to be a callback API for the creation
      // of controls DOM elements, so we'll recurse until they show up.
      // The reason for this is we want to use the gmaps.js API to generate
      // the controls, yet move them elsewhere in the DOM. Pretty deec.
      waitForControls()

      function waitForControls() {
        var wrapper, controls

        if (!$(self.options.googleMapsZoomIn).length && !$(self.options.googleMapsZoomOut).length) {
          setTimeout(waitForControls, 200)
          return
        }

        self.$googleMapsZoomIn = $(self.options.googleMapsZoomIn)
        self.$googleMapsZoomOut = $(self.options.googleMapsZoomOut)

        controls = self.$googleMapsZoomIn.add(self.$googleMapsZoomOut).detach()

        wrapper = $('<div id="googleMapsControls" class="google-maps-controls"/>')
        wrapper.append(controls)
        wrapper.appendTo(self.options.storeLocatorSearch)

        // if the controls are enabled we need to show them
        if (self.mapControlsEnabled) {
          wrapper.add(controls).css({
            display: 'block'
          }).animate({
            opacity: 1
          }, 1000)
        }

        // Add analytics handlers... this should be moved up to addControl
        // where it would be nice to be able to add any attributes desired.
        self.$googleMapsZoomIn.attr('data-ga', '{"category":"' + app.GoogleAnalytics.options.currentPath + '","action":"Map_Locator","opt_label":"Zoom_In"}')
        self.$googleMapsZoomOut.attr('data-ga', '{"category":"' + app.GoogleAnalytics.options.currentPath + '","action":"Map_Locator","opt_label":"Zoom_Out"}')

      } // end waitForControls()
    }, // end renderGoogleMapsControls()





    /////////////////////////////////
    // Data API / Ajax Utilities
    /////////////////////////////////
    getLatLng: function (locationData, onCompleteFunct) {
      var self = this

      var geocoder = new google.maps.Geocoder();
      var address = locationData;

      if (geocoder) {
        geocoder.geocode({ 'address': address }, function (results, status) {
          if (status == google.maps.GeocoderStatus.OK) {

            var lat = results[0].geometry.location.lat();
            var lng = results[0].geometry.location.lng();
            var latLng = [lat, lng];

            return onCompleteFunct(latLng);
          }
        });
      }

    },



    getStores: function (zip, radius) {
      var self, data, jqxhr, locationQuery, latLng, requestLocations

      self = this
      radius = radius || this.options.searchRadius

      self.getLastSearch(zip) // just store the previous search

      locationQuery = zip || self.prevSearch

      self.getLatLng(locationQuery, requestLocations);


      function requestLocations(latLng) {
        data = {
          zip: locationQuery,
          latLng: latLng,
          lat: latLng[0],
          lng: latLng[1],
          radius: radius
        }

        jqxhr = $.ajax({
          url: self.ajax.storeLocator,
          type: "get",
          data: data
        })
        .done(success)
        .fail(fail)

        function success(data, errorString, jqxhr) {
          // console.log('getStoresCallback success')

          if (data.Error) {
            // alert( data.Error + '. Results for your current location will be shown.')
            $(".js-no-results").addClass('is-visible').delay(4000).queue(function (next) {
              $(this).removeClass('is-visible');
              next();
            });

            self.getStores(app.MyBDubs.storeData.store_zip, self.options.searchRadius)
            return
          }

          self.renderStoreData(data)
        }

        function fail(jqxhr, errorString, error) {
          // console.log('getStoresCallback failed', jqxhr, errorString, error )
        }

      } // end requestLocations()


    }, // end getStores()













    /////////////////////////////////
    // Event Handlers & Misc Utilities
    /////////////////////////////////

    handleLocatorSubmit: function (e) {
      var address/*, validZip*/

      e.preventDefault()

      address = this.$storeLocatorZip.val()
      // validZip = this.testPostalCode( zip )
      radius = this.$storeLocatorRadius.val()

      // console.log('handleLocatorSubmit', address, /*validZip, */radius)

      // if( !validZip ) return

      this.$storeLocatorSearch.trigger('send-analytics')

      this.getStores(address, radius)
    },

    // submitLocator
    submitLocator: function () {
      this.$storeLocatorSearch.submit()
    },

    // updatePreferedLocation
    updatePreferedLocation: function (e) {
      var MyBDubs, el, wrapper, input, uniformCheckIndicator, id

      MyBDubs = app.MyBDubs
      el = $(e.currentTarget)
      wrapper = el.closest('.set-location')
      input = wrapper.find('input')
      uniformCheckIndicator = wrapper.find('.checker > span')
      id = input.attr('data-store-id')

      // We're using data to determine the checked state because
      // the DOM is very unreliable in conjunction with Uniform JS
      if (el.data('isChecked')) {
        input.prop('checked', false)
        MyBDubs.setCookie(MyBDubs.lastCookieStoreID, false)
        MyBDubs.currentStorePreferred = false
        id = MyBDubs.lastCookieStoreID
        el.removeData('isChecked')

      } else {
        MyBDubs.currentStorePreferred = true
        MyBDubs.setCookie(id, true)
        this.$searchResultsList
          .find('[type=checkbox]')
          .not(input)
          .prop('checked', false)
        el.data('isChecked', 'true')
        window.location = '?EditFavorite=true'; // TODO: Redirect to locator page of correct language
      }

      $.uniform.update()

      MyBDubs.updatePreferedStore(id)
      // WHERE IT USED TO BE
    },

    // testPostalCode supports US & Canada
    testPostalCode: function (postalCode) {
      var valid

      valid =
        app.Regex.postalCodes['US'].test($.trim(postalCode)) ||
        app.Regex.postalCodes['CA'].test($.trim(postalCode))

      return valid
    }, // end testPostalCode()

    // initPagination builds the pagination feature for the store listings.
    // It uses jquery.paginate.js
    initPagination: function () {
      var options

      options = {
        page_items: 'li',
        items_per_page: this.options.resultsListPagination,
        nav_container: '#searchResultsPagination',
        build_nav_callback: updatePagerAnalytics
      }

      this.$searchResultsList.paginate(options)

      // Add tracking to pagination
      function updatePagerAnalytics() {
        $(options.nav_container).find('a').attr('data-ga', '{"category":"' + app.GoogleAnalytics.options.currentPath + '","action":"List_Locator","opt_label":"More_Results"}')
      }

    }, // end initPagination()

    // Initialize StoreLocator
    // Note: this.init() executes before jQuery's DOM ready.
    init: function () {
      var self

      self = this

      // DOM Ready routines.
      $(domReady)

      // Utility function to execute on jQuery's DOM Ready
      function domReady() {
        initApp()
        initEvents()
        initUniform()
        handleResponsive()
        initPrivateVars()
      }

      function initApp() {
        var storeDetails, zip

        self.$storeLocatorSearch[0].reset()

        storeDetails = app.MyBDubs._serverData.storeDetails

        self.searchZip = getZip()

        // console.log('initApp store-locator.js', storeDetails, self.searchZip)

        // If we have a zip, load some stores
        if (self.searchZip) {

          // Get the Mustache js templates and initialize the app on callback
          self.getRenderTemplates(loadFirstResults)

          if (self._serverData.storeLocatorZipCode) {
            self.$storeLocatorZip.val(self.searchZip)
          }

          // If we don't have a zip yet, we need to
          // wait for the MyBDubs module to load some stores
        } else {
          waitForMyBDubsModule()
        }

        function getZip() {
          if (self._serverData.storeLocatorZipCode) {
            return self._serverData.storeLocatorZipCode
          } else {
            if (storeDetails && storeDetails.store_zip) {
              return storeDetails.store_zip
            } else {
              return false
            }
          }
        }
      }

      // Event handlers for the locator
      function initEvents() {
        var isIElt10

        isIElt10 = ($('html').hasClass('ie9') || $('html').hasClass('lt-ie9'))

        // if( !Modernizr.touch ) self.$storeLocatorZip.on('keypress.locator', submitLocator.bind(self))

        // self.$searchResultsList.on('click.locator', 'label[data-store-id]', self.toggleUniformCheckbox.bind(self))
        self.$searchResultsList.on('change.locator', self.options.uniformJsSetLocation, self.updatePreferedLocation.bind(self))

        self.$$storeLocatorSubmit.on('click.locator', submitLocator.bind(self))
        self.$storeLocatorSearch.on('submit.locator', self.handleLocatorSubmit.bind(self))

        if (Modernizr.geolocation && !isIElt10) {
          self.$storeLocatorSearch.addClass('use-location-active')
          self.$useCurrentLocationBtn.on('click.locator', self.handleGeolocation.bind(self))
        }

        function submitLocator() {

          // Need to move this method out a tick for the
          // zip code DOM value to be up to date
          setTimeout(function () {
            self.submitLocator()
          }, 0)
        } // end submitLocator()
      } // end initEvents()

      function initUniform() {
        $('select.uniform').uniform()
      }

      function loadFirstResults() {
        self.ajax.storeLocator = self._serverData.storeLocatorEndpoint
        self.getStores(self.searchZip, self.options.searchRadius)
      }

      function waitForMyBDubsModule() {
        var storeData = app.MyBDubs.storeData

        if (!storeData.store_zip) {
          setTimeout(waitForMyBDubsModule, 200)
          return
        }

        console.log('No server/cookie data, store data loaded in MyBDubs module: ', app.MyBDubs.storeData)

        // app.MyBDubs.lastCookieStoreID = storeData.store_id

        self.searchZip = app.MyBDubs.storeData.store_zip

        // Get the Mustache js templates and initialize the app on callback
        self.getRenderTemplates(loadFirstResults)
      }

      // handleResponsive is a utility to assign all of the breakpoint event handlers we want for this module
      function handleResponsive() {

        // Not attaching 0-768, it's not being used...

        app.ResponsiveBreakpoints.register_event(
           '0-768',
           'module-0-768',
           self.setup0_768.bind(self) // using es5-shim.js
         )

        app.ResponsiveBreakpoints.register_event(
          '768-+',
          'module-768up',
          self.setup769up.bind(self) // using es5-shim.js
        )
      }

      function initPrivateVars() {
        _locatorSearchHeight = self.$storeLocatorSearch.height()
        _locatorMapTopOffset = _locatorMapTop + _locatorSearchHeight
      }

    },

    // Destroy StoreLocator Events & Extras
    destroy: function () {
      // Undo everything that init does
    }
  } // end StoreLocator.prototype

  // Attach the StoreLocator constructor to our global namespace
  app._Modules.StoreLocator = StoreLocator

  /////////////////////////////////////
  // End StoreLocator
  /////////////////////////////////////

} (jQuery, BuffaloWildWings)
