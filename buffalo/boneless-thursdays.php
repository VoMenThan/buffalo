




<!DOCTYPE html>
<!--[if lte IE 7]>     <html class="no-js ie ie7 lt-ie9 lt-ie10" lang="en" xmlns:og="http://ogp.me/ns#"><![endif]-->
<!--[if IE 8]>         <html class="no-js ie ie8 lt-ie9 lt-ie10" lang="en" xmlns:og="http://ogp.me/ns#"><![endif]-->
<!--[if IE 9]>         <html class="no-js ie ie9 lt-ie10" lang="en" xmlns:og="http://ogp.me/ns#">       <![endif]-->
<!--[if IE 10]>        <html class="no-js ie ie10" lang="en" xmlns:og="http://ogp.me/ns#">              <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js mobile" lang="en" xmlns:og="http://ogp.me/ns#"> <!--<![endif]-->
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info = {"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"64dc7c365d","applicationID":"43064331","transactionName":"YlVRbBQAChBVVURaVlsfcms2ThIKUUFDHElHX15XFU4UEVtbX1dcQVFaVBVPBRBETg==","queueTime":0,"applicationTime":45,"agent":"","atts":""}</script><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQIBVV9TARAEV1FUAwIEVw=="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(15),c={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,o.indexOf("dev")!==-1&&(c.dev=!0),o.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&i.on("internal-error",function(t){r(t.stack)}),c.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(c){try{i("ierr",[c,(new Date).getTime(),!0])}catch(s){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(16),c=t("ee"),s=t("loader"),f=window.onerror,u=!1,d=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(8),t(7),"addEventListener"in window&&t(5),s.xhrWrappable&&t(9),u=!0)}c.on("fn-start",function(t,e,n){u&&(d+=1)}),c.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),c.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),c.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),c=t(7),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState";t("loader").features.stn=!0,t(6);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=Date.now())}),o.on(w,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on(m,function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),this.bstType])}),c.on(m,function(){this.bstStart=Date.now()}),c.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){c.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),c=t(17)(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,e,n){var r=t("ee").get("history"),o=t(17)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,e,n){var r=t("ee").get("raf"),o=t(17)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(17)(i),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(s+u,r),i.on(c+u,o)},{}],9:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,w,"fn-",c)}function i(t){v.push(t),h&&(g=-g,b.data=g)}function a(){for(var t=0;t<v.length;t++)r([],v[t]);v.length&&(v=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t(17)(u),l=NREUM.o,p=l.XHR,h=l.MO,m="readystatechange",w=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],v=[];e.exports=u;var y=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(m,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(p,y),y.prototype=p.prototype,d.inPlace(y.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var g=1,b=document.createTextNode(g);new h(a).observe(b,{characterData:!0})}else f.on("fn-end",function(t){t[0]&&t[0].type===m||a()})},{}],10:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,f.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return h(r)}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=h(r);i&&(n.txSize=i)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}};for(var a=0;a<d;a++)e.addEventListener(u[a],this.listener,!1)}),f.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),f.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],e)}),f.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],e)}),f.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),f.on("fn-end",function(t,e){this.xhrCbStart&&f.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],11:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],12:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(15),c=t(16),s=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var u=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(u,function(t,e){f[e]=o(d+e,!0,"api")}),f.addPageAction=o(d+"addPageAction",!0),f.setCurrentRouteName=o(d+"routeName",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var p=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(s.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{s.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){p[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],13:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],14:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],15:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],16:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],17:[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",c=Object.prototype.hasOwnProperty,s=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,c,s;try{a=this,r=i(arguments),c="function"==typeof n?n(r,a):n||{}}catch(f){l([f,"",[r,a,o],c])}u(e+"start",[r,a,o],c);try{return s=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],c),d}finally{u(e+"end",[r,a,s],c)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,c,s,f="-"===o.charAt(0);for(s=0;s<e.length;s++)c=e[s],a=t[c],r(a)||(t[c]=n(a,f?c+o:o,i,c))}function u(n,r,o){if(!s||e){var i=s;s=!0;try{t.emit(n,r,o)}catch(a){l([a,n,r,o])}s=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){l([r])}for(var o in t)c.call(t,o)&&(e[o]=t[o]);return e}function l(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,c,i):i()}function n(n,r,o){if(!l.aborted){t&&t(n,r,o);for(var i=e(o),a=h(n),c=a.length,s=0;s<c;s++)a[s].apply(i,r);var f=u[y[n]];return f&&f.push([g,n,r,i]),i}}function p(t,e){v[t]=h(t).concat(e)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(n)}function w(t,e){f(t,function(t,n){e=e||"feature",y[n]=e,e in u||(u[e]=[])})}var v={},y={},g={on:p,emit:n,get:m,listeners:h,context:e,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var c="nr@context",s=t("gos"),f=t(15),u={},d={},l=e.exports=o();l.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!b++){var t=g.info=NREUM.info,e=d.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(v,function(e,n){t[e]||(t[e]=n)}),c("mark",["onload",a()],null,"api");var n=d.createElement("script");n.src="https://"+t.agent,e.parentNode.insertBefore(n,e)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var c=t("handle"),s=t(15),f=t("ee"),u=window,d=u.document,l="addEventListener",p="attachEvent",h=u.XMLHttpRequest,m=h&&h.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:h,REQ:u.Request,EV:u.Event,PR:u.Promise,MO:u.MutationObserver},t(12);var w=""+location,v={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1016.min.js"},y=h&&m&&m[l]&&!/CriOS/.test(navigator.userAgent),g=e.exports={offset:a(),origin:w,features:{},xhrWrappable:y};d[l]?(d[l]("DOMContentLoaded",i,!1),u[l]("load",r,!1)):(d[p]("onreadystatechange",o),u[p]("onload",r)),c("mark",["firstbyte",a()],null,"api");var b=0},{}]},{},["loader",2,10,4,3]);</script><meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta http-equiv="cleartype" content="on" /><meta http-equiv="P3P" content="CP=&quot;NOI ADM DEV PSAi COM NAV OUR OTR STP IND DEM&quot;" />
    <link rel="canonical" EPiNoRewrite="true" href="http://www.buffalowildwings.com/en/promos/boneless-thursdays/" />
  
    
    <title>Boneless Thursdays at B-Dubs® | Weekly Deals & Promos</title>
    <meta name="description" content="Looking for things to do on Thursday?  Stop in the nearest Dubs® for amazing specials on our Boneless Wings." EPiNoRewrite="true" />
    <meta name="keywords" content="chicken wing specials, bww specials, bww Thursday specials, bww boneless thursdays, boneless thursdays" EPiNoRewrite="true" />
    <meta name="google-site-verification" content="JWQmF7bWfT3Y_i235Vi1JPjuXFMzwzb134xVxFJDjZI" />
    <meta name="google-site-verification" content="E6qWzDMsFrydfdI3xbBi65jiceEfbQF-GIC1M1rrYcs" />
  
    
    
        <meta property="og:title" content="Boneless Thursdays at B-Dubs® | Weekly Deals &amp; Promos" EPiNoRewrite="true" />
    
       <meta property="og:url" content="http://www.buffalowildwings.com/en/promos/boneless-thursdays/" EPiNoRewrite="true" />
    
        <meta property="og:image" content="http://www.buffalowildwings.com/public/images/buffalo-wild-wings-facebook.jpg" EPiNoRewrite="true" />
    
       <meta property="og:description" content="Looking for things to do on Thursday?  Stop in the nearest Dubs® for amazing specials on our Boneless Wings." EPiNoRewrite="true" />
    <meta property="og:site_name" content="Buffalo Wild Wings" />
    

    
    
    
    <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/31c25629-735d-4771-ab38-94dc7e00f721.css" />
    <!--[if gt IE 8]><!-->
      <link rel="stylesheet" href="/public/stylesheets/global.css?v=5" type="text/css" media="screen" />
    <!--<![endif]-->

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="/public/stylesheets/ie-lt9-global_part-1.css?v=5" type="text/css" media="screen">
      <link rel="stylesheet" href="/public/stylesheets/ie-lt9-global_part-2.css?v=5" type="text/css" media="screen">
    <![endif]-->

    
    
    
    
    <script src="/cassette.axd/asset/public/javascript/libs/modernizr-2.5.3.js?hgUf8_AYwaR1FiWX2rJwee7y7Ho=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/modules/core.js?jY2R0CCrAEH26O1wWv-LLVuc1sk=" type="text/javascript"></script>

  
    
    
      <script>
        BuffaloWildWings._analyticsProfileId = 'UA-2451897-1'
        BuffaloWildWings._analyticsDomainName = 'buffalowildwings.com'
      </script>

  
  


    <script type="text/javascript">      (function () {
            window._fbds = window._fbds || {};
            _fbds.pixelId = 581905601891491;
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(["track", "PixelInitialzed", {}]);
    </script>
    <noscript><img height="1" width="1" border="0" alt="" style="display:none" src="https://www.facebook.com/tr?id=581905601891491&amp;ev=NoScript" /></noscript>

    
    
    
    <script type="text/javascript">
        // Instructions: please embed this snippet directly into every page in your website template.
        // For optimal performance, this must be embedded directly into the template, not referenced
        // as an external file.

        // Answers Cloud Services Embed Script v1.02
        // DO NOT MODIFY BELOW THIS LINE *****************************************
            ;(function (g) {
                var d = document, i, am = d.createElement('script'), h = d.head || d.getElementsByTagName("head")[0],
                        aex = {
                            "src": "//gateway.answerscloud.com/buffalowildwings/production/gateway.min.js",
                            "type": "text/javascript",
                            "async": "true",
                            "data-vendor": "acs",
                            "data-role": "gateway"
                        };
                for (var attr in aex) { am.setAttribute(attr,aex[attr]); }
                h.appendChild(am);
                g['acsReady'] = function () {var aT = '__acsReady__', args = Array.prototype.slice.call(arguments, 0),k = setInterval(function () {if (typeof g[aT] === 'function') {clearInterval(k);for (i = 0; i < args.length; i++) {g[aT].call(g, function(fn) { return function() { setTimeout(fn, 1) };}(args[i]));}}}, 50);};
            })(window);
            // DO NOT MODIFY ABOVE THIS LINE *****************************************
    </script>
<title>

</title></head>
<body>
  <img height="1" width="1" style="border-style:none; position: absolute; left: -100px;" alt="" src="//insight.adsrvr.org/track/conv/?adv=hip6dvm&amp;ct=0:gzluor6k&amp;fmt=3" />
  <img src="https://insight.adsrvr.org/track/evnt/?ct=0:arqd8e7z&amp;adv=421f3zx&amp;fmt=3" name="Quantum11 Tracking - BWW Retargeting" style="position:absolute;" />
  

  
  
  
  
  
  

<div id="fb-root"></div>
<script>
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<div class="facebook-graphic visually-hidden">
  <img src="/public/images/buffalo-wild-wings-facebook.jpg" alt="Buffalo Wild Wings Logo" />
</div>

<div class="container">

    <div class="row">
    <header class="mast-head">
        <div class="inner header-inner">
          <a class="logo home" href="/en/" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;BWW_Logo&quot;}'> 
            Buffalo Wild Wings
          </a>
          <div class="utilities">

            <div id="myBDubs" class="bww-information">
              <div class="store-img">
                <img src="/public/images/bww-head-location.png" alt="" />
              </div>
              
              <div id="storeInformation" class="store-information">
                
              </div>

            </div> 

          </div> 
        </div> 
        <div class="bww-nav">
          <div class="nav-container">
            <nav class="secondary-nav btn-group">
              <a href="/en/menu/" class="btn btn-large btn-alt">Our Menu</a>
              <a href="/en/locations/" class="btn btn-large btn-alt">Find a B-Dubs</a>
              <a href="#" id="mobileMenuToggle" class="toggle-nav btn btn-icon">Toggle Navigation</a>
            </nav>
            <nav id="mobileMenu" class="mast-nav contract">
              <a href="/en/wings/" class="btn btn-large btn-alt" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Wings&quot;}'><span class="nav-icon wings mobile-only"></span>Wings</a>
              <a href="/en/beer/" class="btn btn-large btn-alt" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Beer&quot;}'><span class="nav-icon beer mobile-only"></span>Beer</a>
              <a href="/en/sports/" class="btn btn-large btn-alt" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Sports&quot;}'><span class="nav-icon sports mobile-only"></span>Sports</a>
              <a href="/en/menu/" class="btn btn-large btn-alt" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Our_Menu&quot;}'><span class="nav-icon menu mobile-only"></span>Our Menu</a>
              
               

               <a href="/en/basketball/" class="btn btn-large btn-alt" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Promos&quot;}'><span class="nav-icon promos mobile-only"></span>Promos</a>
              
              
                  <a href="/en/gift-card/" class="last desktop-only btn btn-large btn-alt" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Gift_Cards&quot;}'><span class="nav-icon giftCards mobile-only"></span>Gift Cards</a>
              
              
              
              <a href="/en/locations/" class="btn btn-large btn-alt mobile-only" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Locations&quot;}'><span class="nav-icon locations mobile-only"></span>Locations</a>
              

                

              
                  <a href="/en/gift-card/" class="btn btn-alt secondary-item mobile-only" data-ga='{&quot;category&quot;:&quot;/en/gift-card/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Gift Cards&quot;}'>Gift Cards</a>
              
                  <a href="/en/careers/" class="btn btn-alt secondary-item mobile-only" data-ga='{&quot;category&quot;:&quot;/en/careers/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Careers&quot;}'>Careers</a>
              
                  <a href="/en/Company/giving/" class="btn btn-alt secondary-item mobile-only" data-ga='{&quot;category&quot;:&quot;/en/Company/giving/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Giving&quot;}'>Giving</a>
              
                  <a href="http://ir.buffalowildwings.com/" class="btn btn-alt secondary-item mobile-only" data-ga='{&quot;category&quot;:&quot;http://ir.buffalowildwings.com/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Investors&quot;}'>Investors</a>
              
              
              
            </nav>
            <form class="bww-locator" action="/en/locations/" method="post" id="bwwHeadLocator" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Address_Search&quot;}'>
              <label id="findABDubsLabel" class="submit-form" for="find icon" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Find_A_B-Dubs&quot;}'>Find a B-Dubs<sup>&reg;</sup></label>
              <div class="form-input">
                <input id="findABDubsZip" class="locator-zip" type="text" name="zip_code" placeholder="Enter zip or city &amp; state" />
                <button id="findABDubsSubmit" name="find" type="button" class="locator-btn submit-form svg-icon-chevron-right-black" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Header&quot;,&quot;opt_label&quot;:&quot;Address_Search&quot;}'>Find a B-Dubs</button>
              </div>
            </form>
            
          </div>
        </div> 
      </header>

      </div>

  </div>



  
  
  
  


  <section class="row promo-details allow-overflow">

    <div class="inner-hero">
      <div class="hero-bg mobile-img" data-desktop-img="/Global/bww-boneless-wings.jpg" data-mobile-img="/Global/bww-boneless-wings-mobile.jpg">
        

     <img src="/public/images/responsive-shim.png?width=1&amp;height=1" class="mobile-img" alt="" />
     
      </div>

      <div class="hero-content">
        <div class="hero-container promo-container">
          <h1>Boneless Thursdays<sup>®</sup></h1>
          <div><p>Either the greatest day of the week or the greatest day of all time.</p>
<p>Why should Friday get all the love? Every Thursday our Boneless Wings are specially priced all day. That means you might want to start thinking about day #4 as your favorite day of the week. Sure, you still have to go in to work tomorrow, but being able to order our juicy, delicious all white meat Boneless Wings at a discount does make it feel like the weekend started a day early.</p>
<p><em>*Call your closest B-Dubs<sup>®</sup> for details.</em></p></div>



          
              <div class="marquee-options">

                <div class="online-price-opts">
                
                </div>

              </div>
          

      <div class="facebook-wrapper">
        <div id="facebookDetail" class="facebook-detail" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Main_Content&quot;,&quot;opt_label&quot;:&quot;Facebook_Like&quot;}' data-ga-noclick="">
          <div class="fb-like" data-href="http://www.buffalowildwings.com/en/promos/boneless-thursdays/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
        </div>
      </div>

        </div>
      </div>

    </div>
  </section>



  
  

<div class="mast-footer">
      
  

<div class="row yellow">
  <div class="inner bww-circle-module">
    <a href="http://buffalowildwings.fbmta.com/members/UpdateProfile.aspx?Action=Subscribe&amp;_Theme=34359738526" class="bww-circle-cta" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;Buffalo_Circle_Signup_Start&quot;}'>Buffalo Circle: Sign Up to Get Exclusive Deals and Promotions</a>
    <img src="/public/images/responsive-shim2.png?width=940&amp;height=124" class="responsive-shiv" />
  </div>
</div>  

  
  


  <div class="social-bar row">
    <div class="inner">
      <div class="social-icons">
        <h4 class="img-text nav-title">connect</h4>
        <ul class="social-list">
          <li>
            <div class="social-item facebook">
              <span class="icon">
                <a href="https://www.facebook.com/BuffaloWildWings" target="_blank" title="Visit Our Facebook Page">Buffalo Wild Wings on Facebook</a>
              </span>
              <div id="connectFacebook" class="fb-like" data-send="false" data-href="https://www.facebook.com/BuffaloWildWings" data-layout="button_count" data-width="100" data-show-faces="false" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Facebook_Click&quot;,&quot;opt_label&quot;:&quot;Footer&quot;}' data-ga-noclick=""></div>
            </div>
          </li>
          <li>
            <a href="http://twitter.com/bwwings" class="social-item btn btn-inverse twitter" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Twitter_Click&quot;,&quot;opt_label&quot;:&quot;Footer&quot;}'>
              <span class="icon"></span>
              @BWWings On Twitter 
              <span class="fwd-icon svg-icon-chevron-right-yellow"></span>
            </a>
          </li>
          <li>
            <a href="http://www.youtube.com/buffalowildwings" class="social-item btn btn-inverse youtube" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Youtube_Click&quot;,&quot;opt_label&quot;:&quot;Footer&quot;}'>
              <span class="icon"></span>
              B-Dubs® on YouTube
              <span class="fwd-icon svg-icon-chevron-right-yellow"></span>
            </a>
          </li>
          <li>
            <a href="http://instagram.com/bwwings" class="social-item btn btn-inverse instagram" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Instagram_Click&quot;,&quot;opt_label&quot;:&quot;Footer&quot;}'>
              <span class="icon"></span>
              B-Dubs® on Instagram
              <span class="fwd-icon svg-icon-chevron-right-yellow"></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  

  <div class="row inverse">
    <div class="inner">
      
    
<ul class="breadcrumbs">

  
      
           
     
    
           
     
    
      <li><a class="breadcrumb-link active" href='/en/promos/boneless-thursdays/' title='Boneless Thursdays' data-event='Boneless Thursdays'>Boneless Thursdays</a></li>     
     
    
    

</ul>
    </div>
  </div>
  
  <div class="row inverse">
    <div class="inner">
      <div class="list-nav">
        <h4 class="nav-title">Buffalo Wild Wings<sup>®</sup> Company</h4>
        
           
           
           

           <ul class="list-nav">
           

           <li>

          

             <a href="/en/gift-card/" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;Gift Cards&quot;}'>Gift Cards</a> 
            
          

          </li>

          

           <li>

          

             <a href="/en/careers/" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;Careers&quot;}'>Careers</a> 
            
          

          </li>

          

           <li>

          

             <a href="/en/Company/giving/" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;Giving&quot;}'>Giving</a> 
            
          

          </li>

          

           <li>

          

             <a href="http://ir.buffalowildwings.com/" target="_blank" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;Investors&quot;}'>Investors</a> 

          

          </li>

          
          </ul>
          
           
           
           

           <ul class="list-nav">
           

           <li>

          

             <a href="/en/about/" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;About Us&quot;}'>About Us</a> 
            
          

          </li>

          

           <li>

          

             <a href="/en/press-room/" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;Press Room&quot;}'>Press Room</a> 
            
          

          </li>

          

           <li>

          

             <a href="/en/Franchise/" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;Franchise&quot;}'>Franchise</a> 
            
          

          </li>

          

           <li>

          

             <a href="/en/faq/" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;FAQ&quot;}'>FAQ</a> 
            
          

          </li>

          
          </ul>
          
           
           
           

           <ul class="list-nav">
           

           <li>

          

             <a href="/en/contact-us/" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;Contact Us&quot;}'>Contact Us</a> 
            
          

          </li>

          

           <li>

          

             <a href="/en/buffalo-circle/" data-ga='{&quot;category&quot;:&quot;/en/promos/boneless-thursdays/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;Buffalo Circle&quot;}'>Buffalo Circle</a> 
            
          

          </li>

          
          </ul>
          

      </div>

    </div>
  </div>
  <div class="row fine-print">
    <div class="inner">

    
      <p class="region"><a href="/en/Choose-a-country/"><i><img src="/public/images/icons/us.png" /></i>Change Region &raquo;&nbsp;&nbsp;|&nbsp;&nbsp;English</a></p>
    

      <p class="copyright">
        Copyright ©2017 Buffalo Wild Wings, Inc.
      </p>
        <a href="/en/privacy-policy-terms/">Privacy Policy and Terms and Conditions</a>
        <a href="/en/California-Transparency-in-Supply-Chain-Act/">California&nbsp;Transparency&nbsp;in&nbsp;Supply&nbsp;Chains&nbsp;Act</a>
      
      
        <p class="copyright legal">
        NCAA and March Madness are trademarks of the National Collegiate Athletic Association. Drink Responsibly.
      </p>
        
    </div>
  </div>
</div>


  
  
  

  
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBtsqXFhj693h0uXNOQpQGa1uxUORaQhL8&amp;sensor=false"></script>
    <script src="/cassette.axd/asset/public/javascript/libs/jquery-1.7.2.js?DXiW4rsj-I4m5SsioHU1CzVN9Ec=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/jquery.easing.1.3.js?xvdACalbLW-ceznsEhpMpTpJCgQ=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/jquery.debouncedresize.js?LmciWkksc0F8-xtn-dzBR2doxMw=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/jquery.placeholder.js?cuocDsOra6Eif48Y599TSvzqwhs=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/jquery.css3finalize.js?8AwWI0bqu03eeqTv8SC4Efqx0qU=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/jquery.transform2d.js?idbj_a_LAWQVX8V7CdVCjuETt0Y=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/jquery.transform3d.js?sJHPFmW2qLanfGNuPEo5sY0E5Q4=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/jquery.cookie.js?c5fVsZSX69nD5XkiOH8NdxYEZvA=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/jquery.appender.js?rvOSYnnnGso3KXkS2xLfjth3Zi4=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/jquery.fakeTextShadows.js?3-hjqXLLubhKDf1jsHIhI-OzXIA=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/spin.js?j-mrU8XCy0OyMeLUeskaN0KyiV0=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/ios-orientationchange-fix.js?jVAwbgupbnvnaXw3DLsexzuIYlk=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/mustache.js?87LQ8_Wr7d6t4qn5vR-iomJKjVk=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/libs/jquery.mustache.js?0h1ZIkipRhjyqgDqFRujRfboEfk=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/modules/errors.js?ryD_-Z8B9nvcTbb7tDSH7YO2hDg=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/modules/google-maps.js?1WYeqSdlwvyhWSm1YSeZo8Xcvbk=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/modules/responsive-breakpoints.js?W46kxU5o3aIyvDkY7LVU0gBqrGw=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/modules/main-menu.js?VD-Oj_YTYqaRL3qnAvT0fkzXGaM=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/modules/my-bdubs.js?6n4P4e-wTfyggA_m-DhTPvebub0=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/modules/hero-image.js?qX1rnFiEFXlVuEOWUKPKVA-P_F0=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/modules/bww-survey-dropdown.js?bvSiblC1XXikHllBGFaCl64EGF8=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/modules/bww-canadian-banner.js?LIsdgXyya2MPdkqrnh1u0aoyCvU=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/modules/coupon.js?UfY3tx6_a1AJ_ncNN6raJMW61mI=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/global.js?9iCk5pBdJIQmQN9l0NKHqAV1Jbk=" type="text/javascript"></script>
    


  
  
  
  
  
  
  
  <script src="/cassette.axd/asset/public/javascript/modules/image-swap.js?7J-zMAYCEE8qp7z3Pl2-19SYxag=" type="text/javascript"></script>

  <script>

    /////////////////////////////////
    // Wings Template Modules
    /////////////////////////////////
    !function( $, app ) {

      app.ImageSwap = new app._Modules.ImageSwap()

      // waitForFB()

      // function waitForFB() {
      //   if( typeof FB == 'undefined' ) setTimeout(function() { waitForFB() }, 250)
      //   else trackFacebook()
      // }

      // function trackFacebook() {
      //   FB.Event.subscribe('edge.create',
      //     function(response) {
      //       $('#facebookDetail').trigger('send-analytics')
      //     }
      //   )
      // }

    }( jQuery, BuffaloWildWings )
      
  </script> 

  
        <script type="text/javascript"> 
        var axel = Math.random() + ""; 
        var a = axel * 10000000000000; 
        document.write('<iframe src="http://3300547.fls.doubleclick.net/activityi;src=3300547;type=promo789;cat=bonel439;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>'); 
        </script> 
        <noscript> 
        <iframe src="http://3300547.fls.doubleclick.net/activityi;src=3300547;type=promo789;cat=bonel439;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe> 
        </noscript> 
    


  
  
  

  
  <script src="/cassette.axd/asset/public/javascript/modules/google-analytics.js?8lT9IW_MHr_NsjF-z3OknWFpw-A=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/global-footer.js?cNCBb3TSBmD0kgjlEs-T2Tjc7t0=" type="text/javascript"></script>

  
    <script>
      !function ($, app) {
        app.MyBDubs = new app._Modules.MyBDubs();
      } (jQuery, BuffaloWildWings);
    </script>
  

  <script>
    !function ( $, app ) {

      /////////////////////////////////////
      // Begin Google Analytics Module Data
      /////////////////////////////////////

      app.GoogleAnalytics = new app._Modules.GoogleAnalytics({
        profileId: app._analyticsProfileId,
        domainName: app._analyticsDomainName,
        currentPath: '/en/promos/boneless-thursdays/',
        pageview: app._analyticsPageview
      })

      /////////////////////////////////////
      // Begin My BDubs Module Data
      /////////////////////////////////////

      app.MyBDubs._serverData = {
        latitude: 10.8141937255859,
        longitude: 106.643798828125,
        storeDetails: {},
        closestStoreEndpoint: '/services/FetchClosestStoreByLatLng.aspx',
        fetchStoreById: '/services/FetchStoreById.aspx',
        storeDetailsCookie: 'BwwLocatorId'
      }

    }( jQuery, BuffaloWildWings )
  </script>

    

  
  
  

  <!--[if lt IE 9]>
    <script src="/cassette.axd/asset/public/javascript/libs/es5-shim.js?8GHWxOCGhZxNxzvc3hhFQI4aqjY=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/tourney-tracker/es5-sham.js?umtlEBr45aiZPn1VcjXaYAWOVrw=" type="text/javascript"></script>
<script src="/cassette.axd/asset/public/javascript/modules/oldie.js?j1VEyJ9ggRFGlRAn8oDNCNPikf4=" type="text/javascript"></script>
    <script>
      !function( app ) {

        // Begin IE Modules
        app.OldIE = new app._Modules.OldIE()
      }( BuffaloWildWings )
    </script>
  <![endif]-->

  <!-- Google Tag Manager -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WTBPP2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script>    (function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({ 'gtm.start':
  new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
  j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
  '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WTBPP2');</script>
  <!-- End Google Tag Manager -->
  <!-- Twitter universal website tag code -->
<script>
  !function (e, t, n, s, u, a) {
    e.twq || (s = e.twq = function () {
      s.exe ? s.exe.apply(s, arguments) : s.queue.push(arguments);
    }, s.version = '1.1', s.queue = [], u = t.createElement(n), u.async = !0, u.src = '//static.ads-twitter.com/uwt.js',
a = t.getElementsByTagName(n)[0], a.parentNode.insertBefore(u, a))
  } (window, document, 'script');
  // Insert Twitter Pixel ID and Standard Event data below
  twq('init', 'nw1pr');
  twq('track', 'PageView');
</script>
<!-- End Twitter universal website tag code -->

</body>
</html>
