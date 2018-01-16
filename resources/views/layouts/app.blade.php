<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Originales de twitter -->
    <link rel="stylesheet" href="https://abs.twimg.com/a/1515027860/css/t1/twitter_core.bundle.css" class="coreCSSBundles">
    <link rel="stylesheet" class="moreCSSBundles" href="https://abs.twimg.com/a/1515027860/css/t1/twitter_more_1.bundle.css">
    <link rel="stylesheet" class="moreCSSBundles" href="https://abs.twimg.com/a/1515027860/css/t1/twitter_more_2.bundle.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>




    <noscript>&lt;meta http-equiv="refresh" content="0; URL=https://mobile.twitter.com/i/nojs_router?path=%2F"&gt;</noscript>
    <script nonce="">
        !function(){window.initErrorstack||(window.initErrorstack=[]),window.onerror=function(r,i,n,o,t){r.indexOf("Script error.")>-1||window.initErrorstack.push({errorMsg:r,url:i,lineNumber:n,column:o,errorObj:t})}}();
      </script>
    <script id="bouncer_terminate_iframe" nonce="">
    if (window.top != window) {
  window.top.postMessage({'bouncer': true, 'event': 'complete'}, '*');
}
  </script>
  <!-- 
    <script id="resolve_inline_redirects" nonce="">
    !function(){function n(){var n=window.location.href.match(/#(.)(.*)$/);return n&&"!"==n[1]&&n[2].replace(/^\//,"")}function t(){var t=n();t&&window.location.replace("//"+window.location.host+"/"+t)}t(),window.addEventListener?window.addEventListener("hashchange",t,!1):window.attachEvent&&window.attachEvent("onhashchange",t)}();
  </script>
    <script id="ttft_boot_data" nonce="">
    window.ttftData={"transaction_id":"00cd9a1600d7aaa3.61bb772b27ee3390\u003c:0073d6a9004864c2","server_request_start_time":1515429186883,"user_id":293967812,"is_ssl":true,"rendered_on_server":true,"is_tfe":true,"client":"macaw-swift","tfe_version":"tsa_f\/1.0.1\/20180102.2153.d2726e5","ttft_browser":"chrome"};!function(){function t(t,n){window.ttftData&&!window.ttftData[t]&&(window.ttftData[t]=n)}function n(){return o?Math.round(w.now()+w.timing.navigationStart):(new Date).getTime()}var w=window.performance,o=w&&w.now;window.ttft||(window.ttft={}),window.ttft.recordMilestone||(window.ttft.recordMilestone=t),window.ttft.now||(window.ttft.now=n)}();
  </script>
    <script id="swift_action_queue" nonce="">
    !function(){function e(e){if(e||(e=window.event),!e)return!1;if(e.timestamp=(new Date).getTime(),!e.target&&e.srcElement&&(e.target=e.srcElement),document.documentElement.getAttribute("data-scribe-reduced-action-queue"))for(var t=e.target;t&&t!=document.body;){if("A"==t.tagName)return;t=t.parentNode}return i("all",o(e)),a(e)?(document.addEventListener||(e=o(e)),e.preventDefault=e.stopPropagation=e.stopImmediatePropagation=function(){},y?(v.push(e),i("captured",e)):i("ignored",e),!1):(i("direct",e),!0)}function t(e){n();for(var t,r=0;t=v[r];r++){var a=e(t.target),i=a.closest("a")[0];if("click"==t.type&&i){var o=e.data(i,"events"),u=o&&o.click,c=!i.hostname.match(g)||!i.href.match(/#$/);if(!u&&c){window.location=i.href;continue}}a.trigger(e.event.fix(t))}window.swiftActionQueue.wasFlushed=!0}function r(){for(var e in b)if("all"!=e)for(var t=b[e],r=0;r<t.length;r++)console.log("actionQueue",c(t[r]))}function n(){clearTimeout(w);for(var e,t=0;e=h[t];t++)document["on"+e]=null}function a(e){if(!e.target)return!1;var t=e.target,r=(t.tagName||"").toLowerCase();if(e.metaKey)return!1;if(e.shiftKey&&"a"==r)return!1;if(t.hostname&&!t.hostname.match(g))return!1;if(e.type.match(p)&&s(t))return!1;if("label"==r){var n=t.getAttribute("for");if(n){var a=document.getElementById(n);if(a&&f(a))return!1}else for(var i,o=0;i=t.childNodes[o];o++)if(f(i))return!1}return!0}function i(e,t){t.bucket=e,b[e].push(t)}function o(e){var t={};for(var r in e)t[r]=e[r];return t}function u(e){for(;e&&e!=document.body;){if("A"==e.tagName)return e;e=e.parentNode}}function c(e){var t=[];e.bucket&&t.push("["+e.bucket+"]"),t.push(e.type);var r,n,a=e.target,i=u(a),o="",c=e.timestamp&&e.timestamp-d;return"click"===e.type&&i?(r=i.className.trim().replace(/\s+/g,"."),n=i.id.trim(),o=/[^#]$/.test(i.href)?" ("+i.href+")":"",a='"'+i.innerText.replace(/\n+/g," ").trim()+'"'):(r=a.className.trim().replace(/\s+/g,"."),n=a.id.trim(),a=a.tagName.toLowerCase(),e.keyCode&&(a=String.fromCharCode(e.keyCode)+" : "+a)),t.push(a+o+(n&&"#"+n)+(!n&&r?"."+r:"")),c&&t.push(c),t.join(" ")}function f(e){var t=(e.tagName||"").toLowerCase();return"input"==t&&"checkbox"==e.getAttribute("type")}function s(e){var t=(e.tagName||"").toLowerCase();return"textarea"==t||"input"==t&&"text"==e.getAttribute("type")||"true"==e.getAttribute("contenteditable")}for(var m,d=(new Date).getTime(),l=1e4,g=/^([^\.]+\.)*twitter\.com$/,p=/^key/,h=["click","keydown","keypress","keyup"],v=[],w=null,y=!0,b={captured:[],ignored:[],direct:[],all:[]},k=0;m=h[k];k++)document["on"+m]=e;w=setTimeout(function(){y=!1},l),window.swiftActionQueue={buckets:b,flush:t,logActions:r,wasFlushed:!1}}();
  </script>
    <script id="composition_state" nonce="">
    !function(){function t(t){t.target.setAttribute("data-in-composition","true")}function n(t){t.target.removeAttribute("data-in-composition")}document.addEventListener&&(document.addEventListener("compositionstart",t,!1),document.addEventListener("compositionend",n,!1))}();
  </script>-->
    <link rel="stylesheet" href="https://abs.twimg.com/a/1515180670/css/t1/twitter_core.bundle.css" class="coreCSSBundles">
    <link rel="stylesheet" class="moreCSSBundles" href="https://abs.twimg.com/a/1515180670/css/t1/twitter_more_1.bundle.css">
    <link rel="stylesheet" class="moreCSSBundles" href="https://abs.twimg.com/a/1515180670/css/t1/twitter_more_2.bundle.css">
    <link rel="dns-prefetch" href="https://pbs.twimg.com">
    <link rel="dns-prefetch" href="https://t.co">
    <link rel="preload" href="https://abs.twimg.com/k/es/init.es.4d631aae1b80265fef0a.js" as="script">
    <link rel="preload" href="https://abs.twimg.com/k/es/0.commons.es.6c47136f1671211900ad.js" as="script">
    
    <link rel="preload" href="https://abs.twimg.com/k/es/8.pages_home.es.e66d857d7f1798245652.js" as="script">
    <meta name="msapplication-TileImage" content="//abs.twimg.com/favicons/win8-tile-144.png">
    <link rel="mask-icon" sizes="any" href="https://abs.twimg.com/a/1515180670/icons/favicon.svg" color="#1da1f2">

    <link rel="shortcut icon" href="//abs.twimg.com/favicons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://abs.twimg.com/icons/apple-touch-icon-192x192.png" sizes="192x192">
    <link rel="manifest" href="/manifest.json">
    <meta name="swift-page-name" id="swift-page-name" content="home">
    <meta name="swift-page-section" id="swift-section-name" content="home">
    <link rel="canonical" href="https://twitter.com/">
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Twitter">
    <link id="async-css-placeholder">
    <script type="text/javascript" charset="utf-8" async="" src="https://abs.twimg.com/k/es/0.commons.es.6c47136f1671211900ad.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="https://abs.twimg.com/k/es/8.pages_home.es.e66d857d7f1798245652.js"></script>
    <style type="text/css" id="hidden-dms"></style>
    <script type="text/javascript" charset="utf-8" async="" src="https://abs.twimg.com/k/es/14.video_player_a.es.65acfd2c79990eb83734.js"></script>
    <style id="scrollbar-width">
.compensate-for-scrollbar,
.modal-enabled,
.modal-enabled .global-nav-inner,
.profile-editing,
.profile-editing .global-nav-inner,
.overlay-enabled,
.overlay-enabled .global-nav-inner,
.grid-enabled,
.grid-enabled .global-nav-inner,
.gallery-enabled,
.gallery-enabled .global-nav-inner {
margin-right: 0px
}
</style> 

</head>
<body>
@if (Auth::guest())

<div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')

        @else
        <style>
    *{
        box-sizing: content-box;
    }
    .AppContent {
        padding: 30px 14px 15px;
        z-index: 100;
    }
    .TwitearModal{
        width: 610px;
    }

    .fijar{
        position: fixed;
        z-index: 101;
    }
</style>
<body class="three-col logged-in user-style-username western es enhanced-mini-profile no-nav-banners supports-drag-and-drop" data-fouc-class-names="swift-loading no-nav-banners" dir="ltr">
    <div id="kb-shortcuts-msg">
        <div class="route-home ">
            <!-- Barra de navegacion -->
            <div class="fijar global-nav" data-section-term="top_nav">
                <div class="global-nav-inner">
                    <div class="container"> 
                    <h1 class="Icon Icon--bird bird-topbar-etched">
                        <span class="visuallyhidden">Twitter</span>
                    </h1>
                    <!-- Parte izquierda, barra de navegacion -->
                        <div role="navigation" style="display: inline-block;">
                            <ul class="nav js-global-actions" id="global-actions">
                                <!-- Icono Home -->
                                <li id="global-nav-home" class="home active " data-global-action="home">
                                    <a class="js-nav js-tooltip js-dynamic-tooltip" data-placement="bottom" href="/" data-component-context="home_nav" data-nav="home" data-original-title="">
                                    <span class="Icon Icon--home Icon--large"></span>
                                    <span class="Icon Icon--homeFilled Icon--large u-textUserColor"></span>
                                    <span class="text" aria-hidden="true">Inicio</span>
                                    </a>
                                </li>
                                <!-- Icono Notificaciones, poner new si hya notificaciones a la class li-->
                                <li class="people notifications" data-global-action="connect">
                                    <a class="js-nav js-tooltip js-dynamic-tooltip" data-placement="bottom" href="/i/notifications" data-component-context="connect_nav" data-nav="connect" data-original-title="">
                                        <span class="Icon Icon--notifications Icon--large"></span>
                                        <span class="Icon Icon--notificationsFilled Icon--large u-textUserColor"></span>
                                        <span class="text" aria-hidden="true">Notificaciones</span>
                                    </a>
                                </li>
                                <!-- Icono Mensajes, poner new si hya notificaciones a la class li-->
                                <li class="dm-nav">
                                    <a role="button" class="js-tooltip js-dynamic-tooltip global-dm-nav" data-placement="bottom" href="{{action('MessageController@index')}}" data-original-title="" data-toggle="modal" data-target="#mensajesModal">
                                        <span class="Icon Icon--dm Icon--large"></span>
                                        <span class="text">Mensajes</span>
                                        <span class="dm-new">
                                            <span class="count-inner"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Parte derecha barra de navegacion-->
                        <div class="pull-right nav-extras">
                            <!-- Input de buscar-->
                            <div role="search">
                                <form class="t1-form form-search js-search-form" action="/search" id="global-nav-search">
                                    <input class="search-input" type="text" id="search-query" placeholder="Buscar en Twitter" name="q" autocomplete="off" spellcheck="false" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-dropdown-1" dir="ltr" style="direction: ltr; text-align: left;">
                                    <span class="search-icon js-search-action">
                                        <button type="submit" class="Icon Icon--medium Icon--search nav-search" tabindex="-1">
                                        </button>
                                    </span>
                                </form>
                            </div>
                            <!-- Desplegable opciones usuario-->
                            <ul class="nav right-actions">
                                <li class="me dropdown session js-session" data-global-action="t1me" id="user-dropdown">
                                    <a href="/settings/account" class="btn js-tooltip settings dropdown-toggle js-dropdown-toggle" id="user-dropdown-toggle" data-placement="bottom" rel="noopener" role="button" aria-haspopup="true" data-original-title="Perfil y configuración ">
                                        <img class="Avatar Avatar--size32" src="{{Auth::user()->avatar}}" alt="Perfil y configuración " data-user-id="293967812">
                                    </a>
                                    <div class="DashUserDropdown dropdown-menu dropdown-content dropdown-menu--rightAlign is-forceRight is-autoCentered">
                                        <div class="dropdown-caret">
                                            <span class="caret-outer"></span>
                                            <span class="caret-inner"></span>
                                        </div>
                                        <ul tabindex="-1" role="menu" aria-labelledby="user-dropdown-toggle" aria-hidden="true"> 
                                            <li class="DashUserDropdown-userInfo" data-name="user-info" role="presentation">
                                                <a href="/{{Auth::user()->username}}" class="DashUserDropdown-userInfoLink js-nav" data-nav="view_profile" role="menuitem">
                                                <b class="fullname">{{Auth::user()->name}}</b><span class="UserBadges"></span>
                                                <p class="name"><span class="username u-dir u-textTruncate" dir="ltr">@<b>{{Auth::user()->username}}</b></span></p>
                                                </a>
                                            </li>
                                            <li class="dropdown-divider" role="presentation"></li>
                                            <li class="current-user" data-name="profile" role="presentation">
                                                <a href="/{{Auth::user()->username}}" class="js-nav" data-nav="view_profile" role="menuitem">
                                                <span class="DashUserDropdown-linkIcon Icon Icon--medium Icon--me"></span>Perfil
                                                </a>
                                            </li>
                                            <li data-name="lists" role="presentation">
                                                <a class="js-nav" href="/{{Auth::user()->avatar}}/lists" data-nav="all_lists" role="menuitem">
                                                <span class="DashUserDropdown-linkIcon Icon Icon--medium Icon--list"></span>Listas
                                                </a>
                                            </li>
                                            <li class="dropdown-divider" role="presentation"></li>
                                            <!-- Cerrar sesion -->
                                            <li class="js-signout-button" id="signout-button" data-nav="logout" role="presentation">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Cerrar sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li role="complementary" aria-labelledby="global-new-tweet-button" class="topbar-tweet-btn">
                                    <button id="global-new-tweet-button" class="js-global-new-tweet js-tooltip EdgeButton EdgeButton--primary js-dynamic-tooltip" data-placement="bottom" data-component-context="new_tweet_button" data-original-title="" data-toggle="modal" data-target="#twitearModal" >   
                                    <span class="text">Twittear</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Barra de navegacion -->
            
                      <form>
                    <input class="json-data" id="init-data" type="hidden" value="{&quot;keyboardShortcuts&quot;:[{&quot;name&quot;:&quot;Acciones&quot;,&quot;description&quot;:&quot;Atajos para acciones comunes.&quot;,&quot;shortcuts&quot;:[{&quot;keys&quot;:[&quot;n&quot;],&quot;description&quot;:&quot;Nuevo Tweet&quot;},{&quot;keys&quot;:[&quot;l&quot;],&quot;description&quot;:&quot;Me gusta&quot;},{&quot;keys&quot;:[&quot;r&quot;],&quot;description&quot;:&quot;Responder&quot;},{&quot;keys&quot;:[&quot;t&quot;],&quot;description&quot;:&quot;Retwittear&quot;},{&quot;keys&quot;:[&quot;m&quot;],&quot;description&quot;:&quot;Mensaje directo&quot;},{&quot;keys&quot;:[&quot;u&quot;],&quot;description&quot;:&quot;Silenciar usuario&quot;},{&quot;keys&quot;:[&quot;b&quot;],&quot;description&quot;:&quot;Bloquear usuario&quot;},{&quot;keys&quot;:[&quot;Enter&quot;],&quot;description&quot;:&quot;Abrir detalles del Tweet&quot;},{&quot;keys&quot;:[&quot;o&quot;],&quot;description&quot;:&quot;Expandir foto&quot;},{&quot;keys&quot;:[&quot;\/&quot;],&quot;description&quot;:&quot;Buscar&quot;},{&quot;keys&quot;:[&quot;Cmd&quot;,&quot;Enter&quot;],&quot;description&quot;:&quot;Enviar Tweet&quot;}]},{&quot;name&quot;:&quot;Navegaci\u00f3n&quot;,&quot;description&quot;:&quot;Atajos para navegar entre elementos en las cronolog\u00edas.&quot;,&quot;shortcuts&quot;:[{&quot;keys&quot;:[&quot;?&quot;],&quot;description&quot;:&quot;Este men\u00fa&quot;},{&quot;keys&quot;:[&quot;j&quot;],&quot;description&quot;:&quot;Siguiente Tweet&quot;},{&quot;keys&quot;:[&quot;k&quot;],&quot;description&quot;:&quot;Tweet anterior&quot;},{&quot;keys&quot;:[&quot;Space&quot;],&quot;description&quot;:&quot;Desplazar hacia abajo&quot;},{&quot;keys&quot;:[&quot;.&quot;],&quot;description&quot;:&quot;Cargar Tweets nuevos&quot;}]},{&quot;name&quot;:&quot;Cronolog\u00edas&quot;,&quot;description&quot;:&quot;Atajos para navegar a diferentes cronolog\u00edas o p\u00e1ginas.&quot;,&quot;shortcuts&quot;:[{&quot;keys&quot;:[&quot;g&quot;,&quot;h&quot;],&quot;description&quot;:&quot;Inicio&quot;},{&quot;keys&quot;:[&quot;g&quot;,&quot;o&quot;],&quot;description&quot;:&quot;Momentos&quot;},{&quot;keys&quot;:[&quot;g&quot;,&quot;n&quot;],&quot;description&quot;:&quot;Notificaciones&quot;},{&quot;keys&quot;:[&quot;g&quot;,&quot;r&quot;],&quot;description&quot;:&quot;Menciones&quot;},{&quot;keys&quot;:[&quot;g&quot;,&quot;p&quot;],&quot;description&quot;:&quot;Perfil&quot;},{&quot;keys&quot;:[&quot;g&quot;,&quot;l&quot;],&quot;description&quot;:&quot;Me gusta&quot;},{&quot;keys&quot;:[&quot;g&quot;,&quot;i&quot;],&quot;description&quot;:&quot;Listas&quot;},{&quot;keys&quot;:[&quot;g&quot;,&quot;m&quot;],&quot;description&quot;:&quot;Mensajes&quot;},{&quot;keys&quot;:[&quot;g&quot;,&quot;s&quot;],&quot;description&quot;:&quot;Configuraci\u00f3n&quot;},{&quot;keys&quot;:[&quot;g&quot;,&quot;u&quot;],&quot;description&quot;:&quot;Ir al usuario\u2026&quot;}]}],&quot;baseFoucClass&quot;:&quot;swift-loading&quot;,&quot;bodyFoucClassNames&quot;:&quot;swift-loading no-nav-banners&quot;,&quot;assetsBasePath&quot;:&quot;https:\/\/abs.twimg.com\/a\/1515180670\/&quot;,&quot;assetVersionKey&quot;:&quot;b2ccf2&quot;,&quot;emojiAssetsPath&quot;:&quot;https:\/\/abs.twimg.com\/emoji\/v2\/72x72\/&quot;,&quot;environment&quot;:&quot;production&quot;,&quot;formAuthenticityToken&quot;:&quot;3663a9ee819023a1fcee83816d2bc761a2db67a0&quot;,&quot;loggedIn&quot;:true,&quot;screenName&quot;:&quot;usernamecete&quot;,&quot;fullName&quot;:&quot;Name&quot;,&quot;userId&quot;:&quot;293967812&quot;,&quot;guestId&quot;:&quot;151491450002024111&quot;,&quot;createdAt&quot;:1304672783000,&quot;needsPhoneVerification&quot;:false,&quot;allowAdsPersonalization&quot;:true,&quot;scribeBufferSize&quot;:3,&quot;pageName&quot;:&quot;home&quot;,&quot;sectionName&quot;:&quot;home&quot;,&quot;scribeParameters&quot;:{&quot;lang&quot;:&quot;es&quot;},&quot;recaptchaApiUrl&quot;:&quot;https:\/\/www.google.com\/recaptcha\/api\/js\/recaptcha_ajax.js&quot;,&quot;internalReferer&quot;:null,&quot;geoEnabled&quot;:false,&quot;typeaheadData&quot;:{&quot;accounts&quot;:{&quot;enabled&quot;:true,&quot;localQueriesEnabled&quot;:true,&quot;remoteQueriesEnabled&quot;:true,&quot;limit&quot;:6},&quot;trendLocations&quot;:{&quot;enabled&quot;:true},&quot;dmConversations&quot;:{&quot;enabled&quot;:true},&quot;followedSearches&quot;:{&quot;enabled&quot;:false},&quot;savedSearches&quot;:{&quot;enabled&quot;:true,&quot;items&quot;:[]},&quot;dmAccounts&quot;:{&quot;enabled&quot;:true,&quot;localQueriesEnabled&quot;:true,&quot;remoteQueriesEnabled&quot;:true,&quot;onlyDMable&quot;:true},&quot;mediaTagAccounts&quot;:{&quot;enabled&quot;:true,&quot;localQueriesEnabled&quot;:true,&quot;remoteQueriesEnabled&quot;:true,&quot;onlyShowUsersWithCanMediaTag&quot;:false,&quot;currentUserId&quot;:293967812},&quot;selectedUsers&quot;:{&quot;enabled&quot;:true},&quot;prefillUsers&quot;:{&quot;enabled&quot;:true},&quot;topics&quot;:{&quot;enabled&quot;:true,&quot;localQueriesEnabled&quot;:false,&quot;remoteQueriesEnabled&quot;:true,&quot;prefetchLimit&quot;:500,&quot;limit&quot;:4},&quot;concierge&quot;:{&quot;enabled&quot;:false,&quot;localQueriesEnabled&quot;:false,&quot;remoteQueriesEnabled&quot;:false,&quot;prefetchLimit&quot;:500,&quot;limit&quot;:6},&quot;recentSearches&quot;:{&quot;enabled&quot;:true},&quot;hashtags&quot;:{&quot;enabled&quot;:true,&quot;localQueriesEnabled&quot;:false,&quot;remoteQueriesEnabled&quot;:true,&quot;prefetchLimit&quot;:500},&quot;useIndexedDB&quot;:false,&quot;showSearchAccountSocialContext&quot;:true,&quot;showDebugInfo&quot;:false,&quot;useThrottle&quot;:true,&quot;accountsOnTop&quot;:false,&quot;remoteDebounceInterval&quot;:300,&quot;remoteThrottleInterval&quot;:300,&quot;tweetContextEnabled&quot;:false,&quot;fullNameMatchingInCompose&quot;:true,&quot;topicsWithFiltersEnabled&quot;:true},&quot;dm&quot;:{&quot;notifications&quot;:false,&quot;usePushForNotifications&quot;:true,&quot;participant_max&quot;:50,&quot;welcome_message_add_to_conversation_enabled&quot;:true,&quot;poll_options&quot;:{&quot;foreground_poll_interval&quot;:3000,&quot;burst_poll_interval&quot;:3000,&quot;burst_poll_duration&quot;:300000,&quot;max_poll_interval&quot;:60000},&quot;card_prefetch&quot;:true,&quot;card_prefetch_interval_in_seconds&quot;:2000,&quot;dm_quick_reply_options_panel_dismiss_in_ms&quot;:2000,&quot;open_dm_enabled&quot;:false},&quot;autoplayDisabled&quot;:false,&quot;pushStatePageLimit&quot;:500000,&quot;routes&quot;:{&quot;profile&quot;:&quot;\/usernamecete&quot;},&quot;pushState&quot;:true,&quot;viewContainer&quot;:&quot;#page-container&quot;,&quot;href&quot;:&quot;\/&quot;,&quot;searchPathWithQuery&quot;:&quot;\/search?q=query&amp;src=typd&quot;,&quot;composeAltText&quot;:false,&quot;night_mode_activated&quot;:false,&quot;user_color&quot;:&quot;038543&quot;,&quot;deciders&quot;:{&quot;geo_picker_incident_reset&quot;:true,&quot;custom_timeline_curation&quot;:false,&quot;native_notifications&quot;:true,&quot;disable_ajax_datatype_default_to_text&quot;:false,&quot;dm_polling_frequency_in_seconds&quot;:3000,&quot;dm_granular_mute_controls&quot;:true,&quot;enable_media_tag_prefetch&quot;:true,&quot;enableMacawNymizerConversionLanding&quot;:false,&quot;hqImageUploads&quot;:false,&quot;live_pipeline_consume&quot;:true,&quot;mqImageUploads&quot;:false,&quot;partnerIdSyncEnabled&quot;:true,&quot;sruMediaCategory&quot;:true,&quot;photoSruGifLimitMb&quot;:15,&quot;promoted_logging_force_post&quot;:true,&quot;promoted_video_logging_enabled&quot;:true,&quot;pushState&quot;:true,&quot;emojiNewCategory&quot;:false,&quot;contentEditablePlainTextOnly&quot;:false,&quot;web_client_api_stats&quot;:false,&quot;web_perftown_stats&quot;:true,&quot;web_perftown_ttft&quot;:false,&quot;web_client_events_ttft&quot;:true,&quot;log_push_state_ttft_metrics&quot;:true,&quot;web_sru_stats&quot;:false,&quot;web_upload_video&quot;:true,&quot;web_upload_video_advanced&quot;:false,&quot;upload_video_size&quot;:500,&quot;useVmapVariants&quot;:false,&quot;autoplayPreviewPreroll&quot;:true,&quot;moments_home_module&quot;:false,&quot;moments_lohp_enabled&quot;:true,&quot;enableNativePush&quot;:true,&quot;autoSubscribeNativePush&quot;:false,&quot;allowWebPushVapidUpgrade&quot;:true,&quot;stickersInteractivity&quot;:true,&quot;stickersInteractivityDuringLoading&quot;:true,&quot;stickersExperience&quot;:true,&quot;dynamic_video_ads_include_long_videos&quot;:true,&quot;push_state_size&quot;:1000,&quot;live_video_media_control_enabled&quot;:false,&quot;cards2_enable_periscope_card_transition&quot;:true,&quot;live_broadcast_player_clickthrough_enabled&quot;:true,&quot;use_api_for_retweet_and_unretweet&quot;:false,&quot;use_api_for_follow_and_unfollow&quot;:true,&quot;edge_probe_enabled&quot;:false,&quot;like_over_http_client&quot;:true,&quot;enable_inline_location&quot;:false,&quot;enable_tweetstorm_creation&quot;:true,&quot;enable_tweetstorm_drafts&quot;:false,&quot;enable_tweetstorm_tooltip&quot;:true,&quot;text_length_for_tweetstorm_tooltip&quot;:50,&quot;cramming_ui_enabled&quot;:true,&quot;cramming_feature_enabled&quot;:true,&quot;dm_report_webview_macaw_swift_enabled&quot;:true,&quot;page_title_unread_notification_count&quot;:false,&quot;page_title_badge_after_unread_tweets&quot;:20},&quot;experiments&quot;:{},&quot;toasts_dm&quot;:true,&quot;toasts_timeline&quot;:false,&quot;toasts_dm_poll_scale&quot;:60,&quot;defaultNotificationIcon&quot;:&quot;https:\/\/abs.twimg.com\/a\/1515180670\/img\/t1\/mobile\/wp7_app_icon.png&quot;,&quot;promptbirdData&quot;:{&quot;promptbirdEnabled&quot;:true,&quot;immediateTriggers&quot;:[&quot;PullToRefresh&quot;,&quot;Navigate&quot;],&quot;format&quot;:&quot;HomeTimeline&quot;},&quot;deviceEnabled&quot;:true,&quot;hasPushDevice&quot;:true,&quot;smsDeviceVerified&quot;:true,&quot;skipAutoSignupDialog&quot;:false,&quot;shouldReplaceSignupWithLogin&quot;:true,&quot;hashflagBaseUrl&quot;:&quot;https:\/\/abs.twimg.com\/hashflags\/&quot;,&quot;activeHashflags&quot;:{&quot;ライトサイド&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;taopen2017&quot;:&quot;TurkishAirlinesOpen2017_v2\/TurkishAirlinesOpen2017_v2.png&quot;,&quot;growtogether&quot;:&quot;GrowTogether_v4\/GrowTogether_v4.png&quot;,&quot;porg&quot;:&quot;The_Last_Jedi_Porg_emoji_v5\/The_Last_Jedi_Porg_emoji_v5.png&quot;,&quot;jurassicworldfallenkingdom&quot;:&quot;Jurassic_World_emoji_v2\/Jurassic_World_emoji_v2.png&quot;,&quot;skol&quot;:&quot;NFL_2017_MINVikings_v3\/NFL_2017_MINVikings_v3.png&quot;,&quot;sens&quot;:&quot;NHL_2017_2018_Senators\/NHL_2017_2018_Senators.png&quot;,&quot;livefromvegas&quot;:&quot;MGM_NYE_2017\/MGM_NYE_2017.png&quot;,&quot;samsungaddwash&quot;:&quot;Spain_Samsung_Addwash_Emoji_v2\/Spain_Samsung_Addwash_Emoji_v2.png&quot;,&quot;xfilesunwrapped&quot;:&quot;X-Files\/X-Files.png&quot;,&quot;mybrightside&quot;:&quot;MTN_BrightSide_Emoji\/MTN_BrightSide_Emoji.png&quot;,&quot;readyforuniversal&quot;:&quot;ReadyForUniversal\/ReadyForUniversal.png&quot;,&quot;loseonicplague&quot;:&quot;DraftKingsFFB_AftKings_v3\/DraftKingsFFB_AftKings_v3.png&quot;,&quot;saudi_aramco&quot;:&quot;Aramco_emoji\/Aramco_emoji.png&quot;,&quot;heretheycome&quot;:&quot;NBA_2017_18_PHI\/NBA_2017_18_PHI.png&quot;,&quot;jeremyclarkson&quot;:&quot;The_Grand_Tour_Clarkson_Emoji\/The_Grand_Tour_Clarkson_Emoji.png&quot;,&quot;عيدنا_حمد&quot;:&quot;Bahrain_National_Day\/Bahrain_National_Day.png&quot;,&quot;proudmarymoments&quot;:&quot;Proud_Mary_Movie_Emoji_v3\/Proud_Mary_Movie_Emoji_v3.png&quot;,&quot;twitter4me&quot;:&quot;Twitter4Me_Emoji\/Twitter4Me_Emoji.png&quot;,&quot;cocopixar&quot;:&quot;Coco_Emoji\/Coco_Emoji.png&quot;,&quot;globesredcarpet&quot;:&quot;GoldenGlobes2018\/GoldenGlobes2018.png&quot;,&quot;arieluyendyk&quot;:&quot;Bachelor_2018_v3\/Bachelor_2018_v3.png&quot;,&quot;fantasydoctor&quot;:&quot;DraftKingsFFB_AftKings_v3\/DraftKingsFFB_AftKings_v3.png&quot;,&quot;vitadaporg&quot;:&quot;The_Last_Jedi_Porg_emoji_v5\/The_Last_Jedi_Porg_emoji_v5.png&quot;,&quot;قابوس&quot;:&quot;Bank_of_Muscat_Emoji\/Bank_of_Muscat_Emoji.png&quot;,&quot;மெர்ரிகிறிஸ்துமஸ்&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;fijnekerst&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;twitterトレンド大賞&quot;:&quot;Japan_Twitter_Trend_Award_EMOJI_v2\/Japan_Twitter_Trend_Award_EMOJI_v2.png&quot;,&quot;yanohayexcusas&quot;:&quot;Spain_Samsung_Addwash_Emoji_v2\/Spain_Samsung_Addwash_Emoji_v2.png&quot;,&quot;starwarsepisodio8&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;성화봉송&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;gobolts&quot;:&quot;NHL_2017_2018_Lightning\/NHL_2017_2018_Lightning.png&quot;,&quot;オリンピック聖火リレー&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;motox4launch&quot;:&quot;Motorola_X4_launch_Emoji_v2\/Motorola_X4_launch_Emoji_v2.png&quot;,&quot;goldstandart&quot;:&quot;TurkishAirlinesOpen2017_v2\/TurkishAirlinesOpen2017_v2.png&quot;,&quot;fillyourcartwithcolour&quot;:&quot;eBay_Q4_Emoji\/eBay_Q4_Emoji.png&quot;,&quot;periscope&quot;:&quot;Periscope\/Periscope.png&quot;,&quot;roseparadeamazon&quot;:&quot;Amazon_Studios_Rose_Parade_emoji\/Amazon_Studios_Rose_Parade_emoji.png&quot;,&quot;عيدنا_قابوس&quot;:&quot;Bank_of_Muscat_Emoji\/Bank_of_Muscat_Emoji.png&quot;,&quot;gokingsgo&quot;:&quot;NHL_2017_2018_LAKings\/NHL_2017_2018_LAKings.png&quot;,&quot;canucks&quot;:&quot;NHL_2017_2018_Canucks\/NHL_2017_2018_Canucks.png&quot;,&quot;teammarcus&quot;:&quot;Amazon_Niche_Grand_Marcus_v2\/Amazon_Niche_Grand_Marcus_v2.png&quot;,&quot;btnr&quot;:&quot;Auto_expo\/Auto_expo.png&quot;,&quot;tarajiphenson&quot;:&quot;Proud_Mary_Movie_Emoji_v3\/Proud_Mary_Movie_Emoji_v3.png&quot;,&quot;breatheonamazon&quot;:&quot;Amazon_Breathe\/Amazon_Breathe.png&quot;,&quot;کریسمس&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;cc17&quot;:&quot;Corona_Capital_17_Emoji\/Corona_Capital_17_Emoji.png&quot;,&quot;titans&quot;:&quot;NFL_2017_TENTitans_v2\/NFL_2017_TENTitans_v2.png&quot;,&quot;experimentojun&quot;:&quot;Spain_Samsung_Addwash_Emoji_v2\/Spain_Samsung_Addwash_Emoji_v2.png&quot;,&quot;frozenunaaventuradeolaf&quot;:&quot;Olaf_Emoji\/Olaf_Emoji.png&quot;,&quot;teampapijuca&quot;:&quot;Amazon_Niche_Grand_Papi_v3\/Amazon_Niche_Grand_Papi_v3.png&quot;,&quot;teeofftotakeoff&quot;:&quot;TurkishAirlinesOpen2017_v2\/TurkishAirlinesOpen2017_v2.png&quot;,&quot;jul&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;크리스마스&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;fullfrontalmidterms&quot;:&quot;Full_Frontal_Emoji\/Full_Frontal_Emoji.png&quot;,&quot;thelegendcontinues&quot;:&quot;Jumanji_Emoji\/Jumanji_Emoji.png&quot;,&quot;피크리스마스&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;해피크리스마스&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;giángsinh&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;pawlidayz&quot;:&quot;Zappos_Pawlidayz_Campaign_Emoji\/Zappos_Pawlidayz_Campaign_Emoji.png&quot;,&quot;premierordre&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;godjul&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;rolltide&quot;:&quot;Alabama_CFBPlayoff_Teamv2\/Alabama_CFBPlayoff_Teamv2.png&quot;,&quot;turkeydash&quot;:&quot;Paypal_Turkey_Dash_Emoji\/Paypal_Turkey_Dash_Emoji.png&quot;,&quot;lovetwitter&quot;:&quot;LoveTwitter\/LoveTwitter.png&quot;,&quot;lovered&quot;:&quot;RED_emoji_v3\/RED_emoji_v3.png&quot;,&quot;bachelorabc&quot;:&quot;Bachelor_2018_v3\/Bachelor_2018_v3.png&quot;,&quot;flunafloridacup&quot;:&quot;Emoji_Flumiense\/Emoji_Flumiense.png&quot;,&quot;detroitbasketball&quot;:&quot;NBA_2017_18_DET\/NBA_2017_18_DET.png&quot;,&quot;carriage&quot;:&quot;TryCarriage_Emoji_v2\/TryCarriage_Emoji_v2.png&quot;,&quot;onnellistajoulua&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;اكتفاء&quot;:&quot;Aramco_emoji\/Aramco_emoji.png&quot;,&quot;cbj&quot;:&quot;NHL_2017_2018_BlueJackets\/NHL_2017_2018_BlueJackets.png&quot;,&quot;vianoce&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;breatheteaser&quot;:&quot;Amazon_Breathe\/Amazon_Breathe.png&quot;,&quot;thexfiles&quot;:&quot;X-Files\/X-Files.png&quot;,&quot;aslanuçuyor&quot;:&quot;TurkishAirlinesEmoji2017\/TurkishAirlinesEmoji2017.png&quot;,&quot;espejopublico&quot;:&quot;EspejoPublico_2017_2018\/EspejoPublico_2017_2018.png&quot;,&quot;feliznatal&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;χαρούμεναχριστούγεννα&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;звёздныевойныпоследниеджедаи&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;ersteordnung&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;latooscuro&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;biggboss&quot;:&quot;BigBoss11_India\/BigBoss11_India.png&quot;,&quot;nba&quot;:&quot;NBA_2017_18_NBA\/NBA_2017_18_NBA.png&quot;,&quot;الملك_حمد&quot;:&quot;Bahrain_National_Day\/Bahrain_National_Day.png&quot;,&quot;bigwinnings&quot;:&quot;DraftKingsFFB_Franklin_v3\/DraftKingsFFB_Franklin_v3.png&quot;,&quot;평화올림픽&quot;:&quot;Peace_Olympics_EMOJI_v3\/Peace_Olympics_EMOJI_v3.png&quot;,&quot;canadiandream&quot;:&quot;Chevrolet_Canada_Environmental_Sustainability_Emoji_v2\/Chevrolet_Canada_Environmental_Sustainability_Emoji_v2.png&quot;,&quot;breatheamazon&quot;:&quot;Amazon_Breathe\/Amazon_Breathe.png&quot;,&quot;leavventurediolaf&quot;:&quot;Olaf_Emoji\/Olaf_Emoji.png&quot;,&quot;coco&quot;:&quot;Coco_Emoji\/Coco_Emoji.png&quot;,&quot;последниеджедаи&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;shopathon&quot;:&quot;RED_emoji_v3\/RED_emoji_v3.png&quot;,&quot;yavruejderha&quot;:&quot;Doritos_Flight2_2017\/Doritos_Flight2_2017.png&quot;,&quot;리스마스&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;veselevianoce&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;heathrowbears&quot;:&quot;Heathrow_Bears_emoji_v2\/Heathrow_Bears_emoji_v2.png&quot;,&quot;goavsgo&quot;:&quot;NHL_2017_2018_COAvalanche\/NHL_2017_2018_COAvalanche.png&quot;,&quot;letsgoflyers&quot;:&quot;NHL_2017_2018_PhillyFlyers\/NHL_2017_2018_PhillyFlyers.png&quot;,&quot;jaguars&quot;:&quot;NFL_2017_JAXJaguars_v3\/NFL_2017_JAXJaguars_v3.png&quot;,&quot;amtodmbfn&quot;:&quot;BuzzFeedMorning_v3\/BuzzFeedMorning_v3.png&quot;,&quot;thebachelorabc&quot;:&quot;Bachelor_2018_v3\/Bachelor_2018_v3.png&quot;,&quot;dtwd&quot;:&quot;NFL_2017_JAXJaguars_v3\/NFL_2017_JAXJaguars_v3.png&quot;,&quot;porgs&quot;:&quot;The_Last_Jedi_Porg_emoji_v5\/The_Last_Jedi_Porg_emoji_v5.png&quot;,&quot;圣诞节&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;поргисила&quot;:&quot;The_Last_Jedi_Porg_emoji_v5\/The_Last_Jedi_Porg_emoji_v5.png&quot;,&quot;visitpandora&quot;:&quot;VisitPandoraRound2\/VisitPandoraRound2.png&quot;,&quot;richardhammond&quot;:&quot;The_Grand_Tour_Hammond_Emoji\/The_Grand_Tour_Hammond_Emoji.png&quot;,&quot;thegrandtour&quot;:&quot;The_Grand_Tour_official_show_emoji\/The_Grand_Tour_official_show_emoji.png&quot;,&quot;destiny2&quot;:&quot;destiny2\/destiny2.png&quot;,&quot;fallenkingdom&quot;:&quot;Jurassic_World_emoji_v2\/Jurassic_World_emoji_v2.png&quot;,&quot;hyvääjoulua&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;cofred&quot;:&quot;NHL_2017_2018_Flames\/NHL_2017_2018_Flames.png&quot;,&quot;nasılalevliyim&quot;:&quot;Doritos_Flight2_2017\/Doritos_Flight2_2017.png&quot;,&quot;latovegasonfox&quot;:&quot;Fox_LA_Vegas\/Fox_LA_Vegas.png&quot;,&quot;ittakeseverything&quot;:&quot;NBA_2017_18_LAC\/NBA_2017_18_LAC.png&quot;,&quot;エピソードviii&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;notdone&quot;:&quot;NFL_2017_NEPatriots_v3\/NFL_2017_NEPatriots_v3.png&quot;,&quot;gilliananderson&quot;:&quot;X-Files\/X-Files.png&quot;,&quot;weekendkavaar&quot;:&quot;BigBoss11_India\/BigBoss11_India.png&quot;,&quot;rirepouruntoit&quot;:&quot;FR_Fondation_Abbe_Pierre_EMOJI\/FR_Fondation_Abbe_Pierre_EMOJI.png&quot;,&quot;joyeuxnoël&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;askglobes&quot;:&quot;GoldenGlobes2018\/GoldenGlobes2018.png&quot;,&quot;autoexpo2018&quot;:&quot;Auto_expo\/Auto_expo.png&quot;,&quot;latovegas&quot;:&quot;Fox_LA_Vegas\/Fox_LA_Vegas.png&quot;,&quot;کریسمس‌مبارک&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;vidadeporg&quot;:&quot;The_Last_Jedi_Porg_emoji_v5\/The_Last_Jedi_Porg_emoji_v5.png&quot;,&quot;amtodm&quot;:&quot;BuzzFeedMorning_v3\/BuzzFeedMorning_v3.png&quot;,&quot;olafsfrozenadventure&quot;:&quot;Olaf_Emoji\/Olaf_Emoji.png&quot;,&quot;веселаколеда&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;artlovestory&quot;:&quot;Art_Basel_branded_emoji\/Art_Basel_branded_emoji.png&quot;,&quot;聖誕快樂&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;توصل_بالسلامة&quot;:&quot;ChevyEquinoxLaunchEmoji_v2\/ChevyEquinoxLaunchEmoji_v2.png&quot;,&quot;coupedesbonnesactions&quot;:&quot;Chevrolet_Canada_Good_Deeds_Cup\/Chevrolet_Canada_Good_Deeds_Cup.png&quot;,&quot;torchrelay&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;gohabsgo&quot;:&quot;NHL_2017_2018_Canadiens\/NHL_2017_2018_Canadiens.png&quot;,&quot;flytheflag&quot;:&quot;Air_Canada_Emoji\/Air_Canada_Emoji.png&quot;,&quot;maligayangpasko&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;aetms18&quot;:&quot;Auto_expo\/Auto_expo.png&quot;,&quot;fearthedeer&quot;:&quot;NBA_2017_18_MIL\/NBA_2017_18_MIL.png&quot;,&quot;am2dmbf&quot;:&quot;BuzzFeedMorning_v3\/BuzzFeedMorning_v3.png&quot;,&quot;côtéobscur&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;cluesareeverywhere&quot;:&quot;Murder_Orient_Express_Emoji_Magnifying_Glass\/Murder_Orient_Express_Emoji_Magnifying_Glass.png&quot;,&quot;howfarwillyougo&quot;:&quot;Amazon_Breathe\/Amazon_Breathe.png&quot;,&quot;planilimitado&quot;:&quot;Emoji_Dimitree_Entel\/Emoji_Dimitree_Entel.png&quot;,&quot;christmas&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;billiondollarlineup&quot;:&quot;DraftKingsFFB_Franklin_v3\/DraftKingsFFB_Franklin_v3.png&quot;,&quot;thefourfox&quot;:&quot;Fox_The_Four\/Fox_The_Four.png&quot;,&quot;amaximavelocidad&quot;:&quot;TelCelMaximaVelocidad_v3\/TelCelMaximaVelocidad_v3.png&quot;,&quot;sharkteam&quot;:&quot;Sharkteam\/Sharkteam.png&quot;,&quot;nissankicks&quot;:&quot;Nissan_Star_Wars_emoji\/Nissan_Star_Wars_emoji.png&quot;,&quot;mobsquad&quot;:&quot;NFL_2017_LARams_v3\/NFL_2017_LARams_v3.png&quot;,&quot;froheweihnachten&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;amazonparade&quot;:&quot;Amazon_Studios_Rose_Parade_emoji\/Amazon_Studios_Rose_Parade_emoji.png&quot;,&quot;gpmx&quot;:&quot;TelCelMaximaVelocidad_v3\/TelCelMaximaVelocidad_v3.png&quot;,&quot;kraftbearhugs&quot;:&quot;KraftPeanutButterBears\/KraftPeanutButterBears.png&quot;,&quot;jurassic&quot;:&quot;Jurassic_World_emoji_v2\/Jurassic_World_emoji_v2.png&quot;,&quot;titanup&quot;:&quot;NFL_2017_TENTitans_v2\/NFL_2017_TENTitans_v2.png&quot;,&quot;addwash&quot;:&quot;Spain_Samsung_Addwash_Emoji_v2\/Spain_Samsung_Addwash_Emoji_v2.png&quot;,&quot;newjumanji&quot;:&quot;Jumanji_Emoji\/Jumanji_Emoji.png&quot;,&quot;krismas&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;taraji&quot;:&quot;Proud_Mary_Movie_Emoji_v3\/Proud_Mary_Movie_Emoji_v3.png&quot;,&quot;圣诞节快乐&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;knicks&quot;:&quot;NBA_2017_18_NYK\/NBA_2017_18_NYK.png&quot;,&quot;kohlscash&quot;:&quot;KohlsCash\/KohlsCash.png&quot;,&quot;١٦_ديسمبر&quot;:&quot;Bahrain_National_Day\/Bahrain_National_Day.png&quot;,&quot;рождество&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;sretanbožić&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;doitbig&quot;:&quot;NBA_2017_18_NOP\/NBA_2017_18_NOP.png&quot;,&quot;كاريدج&quot;:&quot;TryCarriage_Emoji_v2\/TryCarriage_Emoji_v2.png&quot;,&quot;selamatnatal&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;nolaxrockineve&quot;:&quot;DCP-NYRE-2017\/DCP-NYRE-2017.png&quot;,&quot;حمد_بن_عيسى&quot;:&quot;Bahrain_National_Day\/Bahrain_National_Day.png&quot;,&quot;ladoluminoso&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;luce&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;eagles&quot;:&quot;NFL_2017_PHILEagles_v3\/NFL_2017_PHILEagles_v3.png&quot;,&quot;feliznavidad&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;golive&quot;:&quot;GoLive_Emoji\/GoLive_Emoji.png&quot;,&quot;fröhlicheweihnachten&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;buzzcity&quot;:&quot;NBA_2017_18_CHA\/NBA_2017_18_CHA.png&quot;,&quot;felizaño&quot;:&quot;Telcel_Navidad_v2\/Telcel_Navidad_v2.png&quot;,&quot;ladodaluz&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;crăciun&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;wpmoy&quot;:&quot;WPMOY_Emoji\/WPMOY_Emoji.png&quot;,&quot;rockets&quot;:&quot;NBA_2017_18_HOU\/NBA_2017_18_HOU.png&quot;,&quot;naciónporg&quot;:&quot;The_Last_Jedi_Porg_emoji_v5\/The_Last_Jedi_Porg_emoji_v5.png&quot;,&quot;twaweza&quot;:&quot;SafaricomTwaweza_v2\/SafaricomTwaweza_v2.png&quot;,&quot;البحرين&quot;:&quot;Bahrain_National_Day\/Bahrain_National_Day.png&quot;,&quot;shoptomakeitstop&quot;:&quot;RED_emoji_v3\/RED_emoji_v3.png&quot;,&quot;jurassicpark&quot;:&quot;Jurassic_World_emoji_v2\/Jurassic_World_emoji_v2.png&quot;,&quot;panthers&quot;:&quot;NFL_2017_CARPanthers_v4\/NFL_2017_CARPanthers_v4.png&quot;,&quot;3percentsb&quot;:&quot;3percentConf-v2\/3percentConf-v2.png&quot;,&quot;revezamentodatocha&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;ஹேப்பிகிறிஸ்துமஸ்&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;thedisasterartist&quot;:&quot;The_Disaster_Artist_v2\/The_Disaster_Artist_v2.png&quot;,&quot;эстафетаолимпийскогоогня&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;ポッキープリッツの日&quot;:&quot;PockyJPN_1111_Emoji_v3\/PockyJPN_1111_Emoji_v3.png&quot;,&quot;wethenorth&quot;:&quot;NBA_2017_18_TOR\/NBA_2017_18_TOR.png&quot;,&quot;punisher&quot;:&quot;The_Punisher_Emoji\/The_Punisher_Emoji.png&quot;,&quot;darkside&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;الخيار_الذكي&quot;:&quot;ZainKSA\/ZainKSA.png&quot;,&quot;larams&quot;:&quot;NFL_2017_LARams_v3\/NFL_2017_LARams_v3.png&quot;,&quot;スターウォーズep8&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;codwwii&quot;:&quot;CODWWII_emoji\/CODWWII_emoji.png&quot;,&quot;gospursgo&quot;:&quot;NBA_2017_18_SAS\/NBA_2017_18_SAS.png&quot;,&quot;快乐圣诞节&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;coronacapital17&quot;:&quot;Corona_Capital_17_Emoji\/Corona_Capital_17_Emoji.png&quot;,&quot;downtowndubai&quot;:&quot;Emaar_Emoji_v4\/Emaar_Emoji_v4.png&quot;,&quot;порги&quot;:&quot;The_Last_Jedi_Porg_emoji_v5\/The_Last_Jedi_Porg_emoji_v5.png&quot;,&quot;dubnation&quot;:&quot;NBA_2017_18_GSW\/NBA_2017_18_GSW.png&quot;,&quot;بطاقة_تمكين&quot;:&quot;BankAlBlad\/BankAlBlad.png&quot;,&quot;avidaéumafesta&quot;:&quot;Coco_Emoji\/Coco_Emoji.png&quot;,&quot;starwars&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;takenote&quot;:&quot;NBA_2017_18_UTA\/NBA_2017_18_UTA.png&quot;,&quot;gopats&quot;:&quot;NFL_2017_NEPatriots_v3\/NFL_2017_NEPatriots_v3.png&quot;,&quot;goknowtakecontrol&quot;:&quot;Cigna_Emoji\/Cigna_Emoji.png&quot;,&quot;frenchlab&quot;:&quot;France_BPI\/France_BPI.png&quot;,&quot;thefour&quot;:&quot;Fox_The_Four\/Fox_The_Four.png&quot;,&quot;episodio8&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;tommywiseau&quot;:&quot;The_Disaster_Artist_v2\/The_Disaster_Artist_v2.png&quot;,&quot;올림픽성화봉송&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;زين_هنا&quot;:&quot;ZainKSA\/ZainKSA.png&quot;,&quot;gowinx&quot;:&quot;Tab_Winx_Emoji_v3\/Tab_Winx_Emoji_v3.png&quot;,&quot;olaftautauf&quot;:&quot;Olaf_Emoji\/Olaf_Emoji.png&quot;,&quot;cabramacho&quot;:&quot;Old_Spice_CabraMacho\/Old_Spice_CabraMacho.png&quot;,&quot;owl2018&quot;:&quot;Overwatch_League_Launch\/Overwatch_League_Launch.png&quot;,&quot;スター・ウォーズ最後のジェダイ&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;pacers&quot;:&quot;NBA_2017_18_IND\/NBA_2017_18_IND.png&quot;,&quot;autoexpo18&quot;:&quot;Auto_expo\/Auto_expo.png&quot;,&quot;božić&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;attackeverything&quot;:&quot;NFL_2017_KCChiefs_v3\/NFL_2017_KCChiefs_v3.png&quot;,&quot;arrivesafely&quot;:&quot;ChevyEquinoxLaunchEmoji_v2\/ChevyEquinoxLaunchEmoji_v2.png&quot;,&quot;biggboss11&quot;:&quot;BigBoss11_India\/BigBoss11_India.png&quot;,&quot;aecompshow18&quot;:&quot;Auto_expo\/Auto_expo.png&quot;,&quot;911onfox&quot;:&quot;911_Fox\/911_Fox.png&quot;,&quot;mytwitteranniversary&quot;:&quot;MyTwitterAnniversary\/MyTwitterAnniversary.png&quot;,&quot;дроиды&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;thebachelorfinale&quot;:&quot;Bachelor_2018_v3\/Bachelor_2018_v3.png&quot;,&quot;losúltimosjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;superboost&quot;:&quot;SuperBoost_emoji\/SuperBoost_emoji.png&quot;,&quot;nbbnotwitter&quot;:&quot;Emoji_NBB_2017_2018\/Emoji_NBB_2017_2018.png&quot;,&quot;коледа&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;平和オリンピック&quot;:&quot;Peace_Olympics_EMOJI_v3\/Peace_Olympics_EMOJI_v3.png&quot;,&quot;mtnbrightside&quot;:&quot;MTN_BrightSide_Emoji\/MTN_BrightSide_Emoji.png&quot;,&quot;cheddarlive&quot;:&quot;Cheddar_Emoji_v4\/Cheddar_Emoji_v4.png&quot;,&quot;overwatchleague&quot;:&quot;Overwatch_League_Launch\/Overwatch_League_Launch.png&quot;,&quot;bringithome&quot;:&quot;NFL_2017_MINVikings_v3\/NFL_2017_MINVikings_v3.png&quot;,&quot;різдво&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;nadal&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;mnwild&quot;:&quot;NHL_2017_2018_MNwild\/NHL_2017_2018_MNwild.png&quot;,&quot;karácsony&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;primoordine&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;порг&quot;:&quot;The_Last_Jedi_Porg_emoji_v5\/The_Last_Jedi_Porg_emoji_v5.png&quot;,&quot;toomanystars&quot;:&quot;HBONightofTooManyStars\/HBONightofTooManyStars.png&quot;,&quot;globes2018&quot;:&quot;GoldenGlobes2018\/GoldenGlobes2018.png&quot;,&quot;olympictorchrelay&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;teampaolasascha&quot;:&quot;Amazon_Niche_Grand_Paola_v3\/Amazon_Niche_Grand_Paola_v3.png&quot;,&quot;letsgoducks&quot;:&quot;NHL_2017_2018_Ducks\/NHL_2017_2018_Ducks.png&quot;,&quot;starwarsep8&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;スターウォーズ&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;laprimeraorden&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;thelastjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;goldenglobes&quot;:&quot;GoldenGlobes2018\/GoldenGlobes2018.png&quot;,&quot;pawlidays&quot;:&quot;Zappos_Pawlidayz_Campaign_Emoji\/Zappos_Pawlidayz_Campaign_Emoji.png&quot;,&quot;nyr&quot;:&quot;NHL_2017_2018_Buff_NYRangers\/NHL_2017_2018_Buff_NYRangers.png&quot;,&quot;jumanjigame&quot;:&quot;Jumanji_Emoji\/Jumanji_Emoji.png&quot;,&quot;derniersjed&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;ultimojedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;samanthabee&quot;:&quot;Full_Frontal_Emoji\/Full_Frontal_Emoji.png&quot;,&quot;ハッピークリスマス&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;ಕ್ರಿಸ್‌ಮಸ್크&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;gooddeedscup&quot;:&quot;Chevrolet_Canada_Good_Deeds_Cup\/Chevrolet_Canada_Good_Deeds_Cup.png&quot;,&quot;super6&quot;:&quot;Super6_emoji\/Super6_emoji.png&quot;,&quot;bbnominations&quot;:&quot;BigBoss11_India\/BigBoss11_India.png&quot;,&quot;happychristmas&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;allforone&quot;:&quot;NBA_2017_18_CLE\/NBA_2017_18_CLE.png&quot;,&quot;flyeaglesfly&quot;:&quot;NFL_2017_PHILEagles_v3\/NFL_2017_PHILEagles_v3.png&quot;,&quot;playjumanji&quot;:&quot;Jumanji_Emoji\/Jumanji_Emoji.png&quot;,&quot;ladooscuro&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;teamcigna&quot;:&quot;Cigna_Emoji\/Cigna_Emoji.png&quot;,&quot;ダークサイド&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;proudmary&quot;:&quot;Proud_Mary_Movie_Emoji_v3\/Proud_Mary_Movie_Emoji_v3.png&quot;,&quot;manuelxmas&quot;:&quot;Manuel_Bartual_Emoji\/Manuel_Bartual_Emoji.png&quot;,&quot;bbhate&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;ドロイド&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;starwarsepviii&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;alltogethernowstl&quot;:&quot;NHL_2017_2018_STL_Blues\/NHL_2017_2018_STL_Blues.png&quot;,&quot;thebachelor&quot;:&quot;Bachelor_2018_v3\/Bachelor_2018_v3.png&quot;,&quot;relevodelaantorchaolímpica&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;njdevils&quot;:&quot;NHL_2017_2018_NJDevils\/NHL_2017_2018_NJDevils.png&quot;,&quot;franciscoenperu&quot;:&quot;Pope_Chile_Peru\/Pope_Chile_Peru.png&quot;,&quot;বড়দিনেরশুভেচ্ছে&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;godawgs&quot;:&quot;Georgia_CFBPlayoff_Teamv4\/Georgia_CFBPlayoff_Teamv4.png&quot;,&quot;afterthefinalrose&quot;:&quot;Bachelor_2018_v3\/Bachelor_2018_v3.png&quot;,&quot;cocoilfilm&quot;:&quot;Coco_Emoji\/Coco_Emoji.png&quot;,&quot;preparefordisaster&quot;:&quot;The_Disaster_Artist_v2\/The_Disaster_Artist_v2.png&quot;,&quot;amtodmbf&quot;:&quot;BuzzFeedMorning_v3\/BuzzFeedMorning_v3.png&quot;,&quot;helleseite&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;popbuzzpresents&quot;:&quot;PopbuzzPresents_Emoji\/PopbuzzPresents_Emoji.png&quot;,&quot;cignaruntogether&quot;:&quot;Cigna_Emoji\/Cigna_Emoji.png&quot;,&quot;selamatharinatal&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;オリンピック聖火&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;proudmarymovie&quot;:&quot;Proud_Mary_Movie_Emoji_v3\/Proud_Mary_Movie_Emoji_v3.png&quot;,&quot;vanoce&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;nitroluyorum&quot;:&quot;Doritos_Flight2_2017\/Doritos_Flight2_2017.png&quot;,&quot;chamaolimpica&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;letztenjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;meyersglobes&quot;:&quot;GoldenGlobes2018\/GoldenGlobes2018.png&quot;,&quot;sacramentoproud&quot;:&quot;NBA_2017_18_SAC\/NBA_2017_18_SAC.png&quot;,&quot;thunderup&quot;:&quot;NBA_2017_18_OKC\/NBA_2017_18_OKC.png&quot;,&quot;nbatwitter&quot;:&quot;NBATwitter_Emoji___v4\/NBATwitter_Emoji___v4.png&quot;,&quot;disneyfrozen&quot;:&quot;Olaf_Emoji\/Olaf_Emoji.png&quot;,&quot;スター・ウォーズ&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;abbepierre&quot;:&quot;FR_Fondation_Abbe_Pierre_EMOJI\/FR_Fondation_Abbe_Pierre_EMOJI.png&quot;,&quot;クリスマスもtwitter&quot;:&quot;Japan_Xmasbox_Emoji\/Japan_Xmasbox_Emoji.png&quot;,&quot;zapposforpets&quot;:&quot;Zappos_Pawlidayz_Campaign_Emoji\/Zappos_Pawlidayz_Campaign_Emoji.png&quot;,&quot;dcfamily&quot;:&quot;NBA_2017_18_WAS\/NBA_2017_18_WAS.png&quot;,&quot;starwarsepisode8&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;lastjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;ارامكو&quot;:&quot;Aramco_emoji\/Aramco_emoji.png&quot;,&quot;chúcmừnggiángsinh&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;coronacapital&quot;:&quot;Corona_Capital_17_Emoji\/Corona_Capital_17_Emoji.png&quot;,&quot;дроид&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;เมอร์รี่คริสมาสต์&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;xfiles&quot;:&quot;X-Files\/X-Files.png&quot;,&quot;アナ雪家族の思い出&quot;:&quot;Olaf_Emoji\/Olaf_Emoji.png&quot;,&quot;dieletztenjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;قابوس_بن_سعيد&quot;:&quot;Bank_of_Muscat_Emoji\/Bank_of_Muscat_Emoji.png&quot;,&quot;celtics&quot;:&quot;NBA_2017_18_BOS\/NBA_2017_18_BOS.png&quot;,&quot;聖誕節&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;nikexnba&quot;:&quot;NikeHoops_emoji\/NikeHoops_emoji.png&quot;,&quot;olympicflame&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;aramco&quot;:&quot;Aramco_emoji\/Aramco_emoji.png&quot;,&quot;newsroomapp&quot;:&quot;NewsroomApp\/NewsroomApp.png&quot;,&quot;buonnatale&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;ビービーナインイー&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;firstorder&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;natale&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;نوفمبر_المجيد&quot;:&quot;Bank_of_Muscat_Emoji\/Bank_of_Muscat_Emoji.png&quot;,&quot;lobsterfest&quot;:&quot;Red_Lobster_Next_Gen\/Red_Lobster_Next_Gen.png&quot;,&quot;和平奥运会&quot;:&quot;Peace_Olympics_EMOJI_v3\/Peace_Olympics_EMOJI_v3.png&quot;,&quot;xfilesbinge&quot;:&quot;X-Files\/X-Files.png&quot;,&quot;flunacopasp&quot;:&quot;Emoji_Flumiense\/Emoji_Flumiense.png&quot;,&quot;mffl&quot;:&quot;NBA_2017_18_DAL\/NBA_2017_18_DAL.png&quot;,&quot;freshevents&quot;:&quot;Fresh_Empire_Q1_2018_v2\/Fresh_Empire_Q1_2018_v2.png&quot;,&quot;isles&quot;:&quot;NHL_2017_2018_NYIslanders\/NHL_2017_2018_NYIslanders.png&quot;,&quot;primeraorden&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;リメンバーミー&quot;:&quot;Coco_Emoji\/Coco_Emoji.png&quot;,&quot;lightup2018&quot;:&quot;Emaar_Emoji_v4\/Emaar_Emoji_v4.png&quot;,&quot;ultimijedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;bbneuf&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;turkishairlinesopen2017&quot;:&quot;TurkishAirlinesOpen2017_v2\/TurkishAirlinesOpen2017_v2.png&quot;,&quot;starwarsgliultimijedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;am2dm&quot;:&quot;BuzzFeedMorning_v3\/BuzzFeedMorning_v3.png&quot;,&quot;lovethesaints&quot;:&quot;NFL_2017_NOLASaints_v3\/NFL_2017_NOLASaints_v3.png&quot;,&quot;porgnation&quot;:&quot;The_Last_Jedi_Porg_emoji_v5\/The_Last_Jedi_Porg_emoji_v5.png&quot;,&quot;xmasbox&quot;:&quot;Japan_Xmasbox_Emoji\/Japan_Xmasbox_Emoji.png&quot;,&quot;disasterartist&quot;:&quot;The_Disaster_Artist_v2\/The_Disaster_Artist_v2.png&quot;,&quot;čestitbožić&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;বড়দিন&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;starwarsthelastjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;تطبيق_فاذكروني&quot;:&quot;BankAlBlad\/BankAlBlad.png&quot;,&quot;ultimosjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;счастливогорождества&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;nationalchampionship&quot;:&quot;CFP_2017_NatlChampionship\/CFP_2017_NatlChampionship.png&quot;,&quot;리크리스마스&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;ubsart&quot;:&quot;Art_Basel_branded_emoji\/Art_Basel_branded_emoji.png&quot;,&quot;aetms&quot;:&quot;Auto_expo\/Auto_expo.png&quot;,&quot;şampiyonlukyolunda&quot;:&quot;TurkishAirlinesEmoji2017\/TurkishAirlinesEmoji2017.png&quot;,&quot;bonnadal&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;καλάχριστούγεννα&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;rockineve&quot;:&quot;DCP-NYRE-2017\/DCP-NYRE-2017.png&quot;,&quot;grindcity&quot;:&quot;NBA_2017_18_MEM\/NBA_2017_18_MEM.png&quot;,&quot;merrychristmas&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;iamproud&quot;:&quot;Proud_Mary_Movie_Emoji_v3\/Proud_Mary_Movie_Emoji_v3.png&quot;,&quot;draftkings&quot;:&quot;DraftKingsFFB_AftKings_v3\/DraftKingsFFB_AftKings_v3.png&quot;,&quot;コークであけおめ&quot;:&quot;Coca_Cola_Japan\/Coca_Cola_Japan.png&quot;,&quot;lgrw&quot;:&quot;NHL_2017_2018_DetroitRW\/NHL_2017_2018_DetroitRW.png&quot;,&quot;felicenatale&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;amazonroseparade&quot;:&quot;Amazon_Studios_Rose_Parade_emoji\/Amazon_Studios_Rose_Parade_emoji.png&quot;,&quot;disneysanimalkingdom&quot;:&quot;VisitPandoraRound2\/VisitPandoraRound2.png&quot;,&quot;bożenarodzenie&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;wavo&quot;:&quot;Wavo_Emoji\/Wavo_Emoji.png&quot;,&quot;crăciunfericit&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;jurassicpark25&quot;:&quot;Jurassic_World_emoji_v2\/Jurassic_World_emoji_v2.png&quot;,&quot;олимпийскийогонь&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;abbépierre&quot;:&quot;FR_Fondation_Abbe_Pierre_EMOJI\/FR_Fondation_Abbe_Pierre_EMOJI.png&quot;,&quot;veselevanoce&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;بنك_البلاد&quot;:&quot;BankAlBlad\/BankAlBlad.png&quot;,&quot;олафихолодноеприключние&quot;:&quot;Olaf_Emoji\/Olaf_Emoji.png&quot;,&quot;draftitis&quot;:&quot;DraftKingsFFB_AftKings_v3\/DraftKingsFFB_AftKings_v3.png&quot;,&quot;божић&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;mustachemeanything&quot;:&quot;MurderOrientExpress_emoji1_Mustache_v2\/MurderOrientExpress_emoji1_Mustache_v2.png&quot;,&quot;glædeligjul&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;dunkleseite&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;noël&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;vamosfluzão&quot;:&quot;Emoji_Flumiense\/Emoji_Flumiense.png&quot;,&quot;goduster&quot;:&quot;Dacia_Duster_v2\/Dacia_Duster_v2.png&quot;,&quot;最後のジェダイ&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;메리크리스마스&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;lobsterfestgoals&quot;:&quot;Red_Lobster_Next_Gen\/Red_Lobster_Next_Gen.png&quot;,&quot;navidadilimitada&quot;:&quot;Emoji_Dimitree_Entel\/Emoji_Dimitree_Entel.png&quot;,&quot;thefouronfox&quot;:&quot;Fox_The_Four\/Fox_The_Four.png&quot;,&quot;truetoatlanta&quot;:&quot;NBA_2017_18_ATL\/NBA_2017_18_ATL.png&quot;,&quot;relevodelaantorchaolimpica&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;iktva&quot;:&quot;Aramco_emoji\/Aramco_emoji.png&quot;,&quot;エピソード8&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;orientexpressmovie&quot;:&quot;Murder_Orient_Express_Emoji_Magnifying_Glass\/Murder_Orient_Express_Emoji_Magnifying_Glass.png&quot;,&quot;proudmother&quot;:&quot;Proud_Mary_Movie_Emoji_v3\/Proud_Mary_Movie_Emoji_v3.png&quot;,&quot;blackhawks&quot;:&quot;NHL_2017_2018_Blackhawks\/NHL_2017_2018_Blackhawks.png&quot;,&quot;私にとって平和とは&quot;:&quot;Peace_Olympics_EMOJI_v3\/Peace_Olympics_EMOJI_v3.png&quot;,&quot;flammeolympique&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;pazparami&quot;:&quot;Peace_Olympics_EMOJI_v3\/Peace_Olympics_EMOJI_v3.png&quot;,&quot;sjsharks&quot;:&quot;NHL_2017_2018_SJSharks\/NHL_2017_2018_SJSharks.png&quot;,&quot;зріздвомхристовим&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;ultimajedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;lightside&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;cordandtish&quot;:&quot;Amazon_Studios_Rose_Parade_emoji\/Amazon_Studios_Rose_Parade_emoji.png&quot;,&quot;shopred&quot;:&quot;RED_emoji_v3\/RED_emoji_v3.png&quot;,&quot;срећанбожић&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;jumanjijungle&quot;:&quot;Jumanji_Emoji\/Jumanji_Emoji.png&quot;,&quot;sunsat50&quot;:&quot;NBA_2017_18_PHX\/NBA_2017_18_PHX.png&quot;,&quot;زين_السعودية&quot;:&quot;ZainKSA\/ZainKSA.png&quot;,&quot;natal&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;jurassicworld&quot;:&quot;Jurassic_World_emoji_v2\/Jurassic_World_emoji_v2.png&quot;,&quot;arieluyendykjr&quot;:&quot;Bachelor_2018_v3\/Bachelor_2018_v3.png&quot;,&quot;البلاد_مبادرة&quot;:&quot;BankAlBlad\/BankAlBlad.png&quot;,&quot;olafotraaventuracongeladadefrozen&quot;:&quot;Olaf_Emoji\/Olaf_Emoji.png&quot;,&quot;pixarcoco&quot;:&quot;Coco_Emoji\/Coco_Emoji.png&quot;,&quot;gostars&quot;:&quot;NHL_2017_2018_DStars\/NHL_2017_2018_DStars.png&quot;,&quot;thepunisher&quot;:&quot;The_Punisher_Emoji\/The_Punisher_Emoji.png&quot;,&quot;nyevegasstyle&quot;:&quot;MGM_NYE_2017\/MGM_NYE_2017.png&quot;,&quot;lobsterworthy&quot;:&quot;Red_Lobster_Next_Gen\/Red_Lobster_Next_Gen.png&quot;,&quot;redvolution&quot;:&quot;NHL_2017_2018_CarolinaCanes\/NHL_2017_2018_CarolinaCanes.png&quot;,&quot;breathetrailer&quot;:&quot;Amazon_Breathe\/Amazon_Breathe.png&quot;,&quot;flapanthers&quot;:&quot;NHL_2017_2018_FlaPanthers\/NHL_2017_2018_FlaPanthers.png&quot;,&quot;hamiltonldn&quot;:&quot;Hamilton_London\/Hamilton_London.png&quot;,&quot;womentellall&quot;:&quot;Bachelor_2018_v3\/Bachelor_2018_v3.png&quot;,&quot;fondationabbépierre&quot;:&quot;FR_Fondation_Abbe_Pierre_EMOJI\/FR_Fondation_Abbe_Pierre_EMOJI.png&quot;,&quot;jamesmay&quot;:&quot;The_Grand_Tour_May_Emoji\/The_Grand_Tour_May_Emoji.png&quot;,&quot;ladodelaluz&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;osultimosjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;seasonitis&quot;:&quot;DraftKingsFFB_AftKings_v3\/DraftKingsFFB_AftKings_v3.png&quot;,&quot;freshempire&quot;:&quot;Fresh_Empire_Q1_2018_v2\/Fresh_Empire_Q1_2018_v2.png&quot;,&quot;heforshe&quot;:&quot;HeForShe_fixed\/HeForShe_fixed.png&quot;,&quot;شيّرها&quot;:&quot;ZainKSA\/ZainKSA.png&quot;,&quot;uberindia&quot;:&quot;UberIndia_Q4_17\/UberIndia_Q4_17.png&quot;,&quot;franciscoenperú&quot;:&quot;Pope_Chile_Peru\/Pope_Chile_Peru.png&quot;,&quot;equaleverywhere&quot;:&quot;RED_emoji_v3\/RED_emoji_v3.png&quot;,&quot;heatculture&quot;:&quot;NBA_2017_18_MIA\/NBA_2017_18_MIA.png&quot;,&quot;ligadia&quot;:&quot;LigaDia_Emoji_v2\/LigaDia_Emoji_v2.png&quot;,&quot;greatestshowman&quot;:&quot;Greatest_Showman_Emoji\/Greatest_Showman_Emoji.png&quot;,&quot;doctoraftkings&quot;:&quot;DraftKingsFFB_AftKings_v3\/DraftKingsFFB_AftKings_v3.png&quot;,&quot;britneyxrockineve&quot;:&quot;DCP-NYRE-2017\/DCP-NYRE-2017.png&quot;,&quot;nasılateşliyim&quot;:&quot;Doritos_Flight2_2017\/Doritos_Flight2_2017.png&quot;,&quot;letsfootball&quot;:&quot;Indian_Super_League_Emoji\/Indian_Super_League_Emoji.png&quot;,&quot;thegamethatplaysyou&quot;:&quot;Jumanji_Emoji\/Jumanji_Emoji.png&quot;,&quot;sabres&quot;:&quot;NHL_2017_2018_Buff_Sabres\/NHL_2017_2018_Buff_Sabres.png&quot;,&quot;lasuertenojuega&quot;:&quot;La_Suerte_No_Juega\/La_Suerte_No_Juega.png&quot;,&quot;jumanji&quot;:&quot;Jumanji_Emoji\/Jumanji_Emoji.png&quot;,&quot;hagamosteamback&quot;:&quot;HagamosTeamBlack_v2\/HagamosTeamBlack_v2.png&quot;,&quot;brightsummer&quot;:&quot;MTN_BrightSide_Emoji\/MTN_BrightSide_Emoji.png&quot;,&quot;inbrotherhood&quot;:&quot;NFL_2017_ATLFalcons_v3\/NFL_2017_ATLFalcons_v3.png&quot;,&quot;mutlunoeller&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;episodioviii&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;côtélumineux&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;primeiraordem&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;letsgopens&quot;:&quot;NHL_2017_2018_Penguins\/NHL_2017_2018_Penguins.png&quot;,&quot;クリスマスボックス&quot;:&quot;Japan_Xmasbox_Emoji\/Japan_Xmasbox_Emoji.png&quot;,&quot;bbvawallet&quot;:&quot;BBVAWallet_emoji\/BBVAWallet_emoji.png&quot;,&quot;experienceperfection&quot;:&quot;Motorola_X4_launch_Emoji_v2\/Motorola_X4_launch_Emoji_v2.png&quot;,&quot;radosnychświąt&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;jumanjimovie&quot;:&quot;Jumanji_Emoji\/Jumanji_Emoji.png&quot;,&quot;episodeviii&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;dodgedown&quot;:&quot;Dodge_Mexico_NFL_EMOJI\/Dodge_Mexico_NFL_EMOJI.png&quot;,&quot;nhlbruins&quot;:&quot;NHL_2017_2018_NHLBruins\/NHL_2017_2018_NHLBruins.png&quot;,&quot;blackhistorymonth&quot;:&quot;BlackHistoryMonth\/BlackHistoryMonth.png&quot;,&quot;tailegsblueroom&quot;:&quot;TurkishAirlinesEmoji2017\/TurkishAirlinesEmoji2017.png&quot;,&quot;motox4&quot;:&quot;Motorola_X4_launch_Emoji_v2\/Motorola_X4_launch_Emoji_v2.png&quot;,&quot;聖誕節快樂&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;평창올림픽성화봉송&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;starwarsbattlefrontii&quot;:&quot;EAStarWars_StarWarsBattlefrontII_Emoji\/EAStarWars_StarWarsBattlefrontII_Emoji.png&quot;,&quot;doritoshotwave&quot;:&quot;Doritos_Flight2_2017\/Doritos_Flight2_2017.png&quot;,&quot;acısıylatatlısıyla&quot;:&quot;Doritos_Flight2_2017\/Doritos_Flight2_2017.png&quot;,&quot;strongandproud&quot;:&quot;Proud_Mary_Movie_Emoji_v3\/Proud_Mary_Movie_Emoji_v3.png&quot;,&quot;wpmoychallenge&quot;:&quot;WPMOY_Emoji\/WPMOY_Emoji.png&quot;,&quot;droide&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;vegasborn&quot;:&quot;NHL_2017_2018_VegasKnights_v2\/NHL_2017_2018_VegasKnights_v2.png&quot;,&quot;amáximavelocidad&quot;:&quot;TelCelMaximaVelocidad_v3\/TelCelMaximaVelocidad_v3.png&quot;,&quot;starwarsdieletztenjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;starwarsepisodioviii&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;stastneavesele&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;rockinshawn&quot;:&quot;DCP-NYRE-2017\/DCP-NYRE-2017.png&quot;,&quot;relevodelaantorcha&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;amexcobalt&quot;:&quot;AmexCobalt_v2\/AmexCobalt_v2.png&quot;,&quot;wemetontwitter&quot;:&quot;WeMetOnt_Emoji\/WeMetOnt_Emoji.png&quot;,&quot;nbakicks&quot;:&quot;FootLocker-2018\/FootLocker-2018.png&quot;,&quot;camilaxrockineve&quot;:&quot;DCP-NYRE-2017\/DCP-NYRE-2017.png&quot;,&quot;ビービー8&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;droids&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;тайнакоко&quot;:&quot;Coco_Emoji\/Coco_Emoji.png&quot;,&quot;fondationabbepierre&quot;:&quot;FR_Fondation_Abbe_Pierre_EMOJI\/FR_Fondation_Abbe_Pierre_EMOJI.png&quot;,&quot;modopapa&quot;:&quot;Pope_Chile_Peru\/Pope_Chile_Peru.png&quot;,&quot;undisputedchristmas&quot;:&quot;UndisputedXmas_emoji_v2\/UndisputedXmas_emoji_v2.png&quot;,&quot;ponteenmodonavidad&quot;:&quot;Telcel_Navidad_v2\/Telcel_Navidad_v2.png&quot;,&quot;jw2&quot;:&quot;Jurassic_World_emoji_v2\/Jurassic_World_emoji_v2.png&quot;,&quot;dimitree&quot;:&quot;Emoji_Dimitree_Entel\/Emoji_Dimitree_Entel.png&quot;,&quot;mbcthevoicekids&quot;:&quot;MBC_The_Voice\/MBC_The_Voice.png&quot;,&quot;theroom&quot;:&quot;The_Disaster_Artist_v2\/The_Disaster_Artist_v2.png&quot;,&quot;911fox&quot;:&quot;911_Fox\/911_Fox.png&quot;,&quot;эстафетаогня&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;メリークリスマス&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;wesołychświąt&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;welcometothejungle&quot;:&quot;Jumanji_Emoji\/Jumanji_Emoji.png&quot;,&quot;latovegasfox&quot;:&quot;Fox_LA_Vegas\/Fox_LA_Vegas.png&quot;,&quot;yotes&quot;:&quot;NHL_2017_2018_Buff_Coyotes\/NHL_2017_2018_Buff_Coyotes.png&quot;,&quot;starwarslesderniersjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;ビットフライヤー&quot;:&quot;bitcoin_Emoji\/bitcoin_Emoji.png&quot;,&quot;hfpa&quot;:&quot;GoldenGlobes2018\/GoldenGlobes2018.png&quot;,&quot;wegohard&quot;:&quot;NBA_2017_18_BKLYN\/NBA_2017_18_BKLYN.png&quot;,&quot;newmenufeels&quot;:&quot;Red_Lobster_Next_Gen\/Red_Lobster_Next_Gen.png&quot;,&quot;честитаколеда&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;jp25&quot;:&quot;Jurassic_World_emoji_v2\/Jurassic_World_emoji_v2.png&quot;,&quot;weihnachten&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;тёмнаясторона&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;atfr&quot;:&quot;Bachelor_2018_v3\/Bachelor_2018_v3.png&quot;,&quot;paixpourmoi&quot;:&quot;Peace_Olympics_EMOJI_v3\/Peace_Olympics_EMOJI_v3.png&quot;,&quot;hesaloser&quot;:&quot;DraftKingsFFB_AftKings_v3\/DraftKingsFFB_AftKings_v3.png&quot;,&quot;joulu&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;droides&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;ಮೆರ್ರಿಕ್ರಿಸ್‌ಮಸ್메&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;boldogkarácsonyt&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;bb11&quot;:&quot;BigBoss11_India\/BigBoss11_India.png&quot;,&quot;クリスマス&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;bhm&quot;:&quot;BlackHistoryMonth\/BlackHistoryMonth.png&quot;,&quot;звёздныевойны&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;idontplay&quot;:&quot;Proud_Mary_Movie_Emoji_v3\/Proud_Mary_Movie_Emoji_v3.png&quot;,&quot;navidad&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;jumanji2017&quot;:&quot;Jumanji_Emoji\/Jumanji_Emoji.png&quot;,&quot;খুশিরবড়দিন&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;porglife&quot;:&quot;The_Last_Jedi_Porg_emoji_v5\/The_Last_Jedi_Porg_emoji_v5.png&quot;,&quot;gojetsgo&quot;:&quot;NHL_2017_2018_Jets\/NHL_2017_2018_Jets.png&quot;,&quot;bullsnation&quot;:&quot;NBA_2017_18_CHI\/NBA_2017_18_CHI.png&quot;,&quot;олаф&quot;:&quot;Olaf_Emoji\/Olaf_Emoji.png&quot;,&quot;나에게평화란&quot;:&quot;Peace_Olympics_EMOJI_v3\/Peace_Olympics_EMOJI_v3.png&quot;,&quot;benjamins&quot;:&quot;DraftKingsFFB_Franklin_v3\/DraftKingsFFB_Franklin_v3.png&quot;,&quot;bornconfident&quot;:&quot;VW_T-Roc_Emoji\/VW_T-Roc_Emoji.png&quot;,&quot;burjkhalifa&quot;:&quot;Emaar_Emoji_v4\/Emaar_Emoji_v4.png&quot;,&quot;nightoftoomanystars&quot;:&quot;HBONightofTooManyStars\/HBONightofTooManyStars.png&quot;,&quot;لا_يحدك_شي&quot;:&quot;ZainKSA\/ZainKSA.png&quot;,&quot;pasko&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;jurassicworld2&quot;:&quot;Jurassic_World_emoji_v2\/Jurassic_World_emoji_v2.png&quot;,&quot;blacklivesmatter&quot;:&quot;BlackHistoryMonth\/BlackHistoryMonth.png&quot;,&quot;preds&quot;:&quot;NHL_2017_2018_Preds\/NHL_2017_2018_Preds.png&quot;,&quot;эпизод8&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;bb9e&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;allcaps&quot;:&quot;NHL_2017_2018_Caps\/NHL_2017_2018_Caps.png&quot;,&quot;revezamentodatochaolimpica&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;allaboutthebenjamins&quot;:&quot;DraftKingsFFB_Franklin_v3\/DraftKingsFFB_Franklin_v3.png&quot;,&quot;globes&quot;:&quot;GoldenGlobes2018\/GoldenGlobes2018.png&quot;,&quot;chiefskingdom&quot;:&quot;NFL_2017_KCChiefs_v3\/NFL_2017_KCChiefs_v3.png&quot;,&quot;bbodio&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;goldenglobes2018&quot;:&quot;GoldenGlobes2018\/GoldenGlobes2018.png&quot;,&quot;btsxrockineve&quot;:&quot;DCP-NYRE-2017\/DCP-NYRE-2017.png&quot;,&quot;milehighbasketball&quot;:&quot;NBA_2017_18_DEN_v2\/NBA_2017_18_DEN_v2.png&quot;,&quot;hautledrapeau&quot;:&quot;Air_Canada_Emoji\/Air_Canada_Emoji.png&quot;,&quot;franciscoenchile&quot;:&quot;Pope_Chile_Peru\/Pope_Chile_Peru.png&quot;,&quot;acısısonunda&quot;:&quot;Doritos_Flight2_2017\/Doritos_Flight2_2017.png&quot;,&quot;billieve&quot;:&quot;NFL_2017_BUFBills_v3\/NFL_2017_BUFBills_v3.png&quot;,&quot;suerteono&quot;:&quot;La_Suerte_No_Juega\/La_Suerte_No_Juega.png&quot;,&quot;globes75&quot;:&quot;GoldenGlobes2018\/GoldenGlobes2018.png&quot;,&quot;aynıben&quot;:&quot;Doritos_Flight2_2017\/Doritos_Flight2_2017.png&quot;,&quot;веселогоріздва&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;starwarsepisodeviii&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;letsgooilers&quot;:&quot;NHL_2017_2018_Edmonton\/NHL_2017_2018_Edmonton.png&quot;,&quot;puremagic&quot;:&quot;NBA_2017_18_ORL\/NBA_2017_18_ORL.png&quot;,&quot;khalidxrockineve&quot;:&quot;DCP-NYRE-2017\/DCP-NYRE-2017.png&quot;,&quot;sonraacı&quot;:&quot;Doritos_Flight2_2017\/Doritos_Flight2_2017.png&quot;,&quot;starwarsosultimosjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;heretocreate&quot;:&quot;adidas_Burst_4_Emoji_v2\/adidas_Burst_4_Emoji_v2.png&quot;,&quot;χριστούγεννα&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;ripcity&quot;:&quot;NBA_2017_18_POR\/NBA_2017_18_POR.png&quot;,&quot;wantitall&quot;:&quot;NikeHoops_emoji\/NikeHoops_emoji.png&quot;,&quot;mustachemeaquestion&quot;:&quot;MurderOrientExpress_emoji1_Mustache_v2\/MurderOrientExpress_emoji1_Mustache_v2.png&quot;,&quot;lakeshow&quot;:&quot;NBA_2017_18_LAL\/NBA_2017_18_LAL.png&quot;,&quot;gosaints&quot;:&quot;NFL_2017_NOLASaints_v3\/NFL_2017_NOLASaints_v3.png&quot;,&quot;unidosporlaesperanza&quot;:&quot;Pope_Chile_Peru\/Pope_Chile_Peru.png&quot;,&quot;recordingacademy&quot;:&quot;GRAMMYs_2018_Emoji_v2\/GRAMMYs_2018_Emoji_v2.png&quot;,&quot;episode8&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;imadisasterartist&quot;:&quot;The_Disaster_Artist_v2\/The_Disaster_Artist_v2.png&quot;,&quot;கிறிஸ்துமஸ்&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;davidduchovny&quot;:&quot;X-Files\/X-Files.png&quot;,&quot;dollabills&quot;:&quot;DraftKingsFFB_Franklin_v3\/DraftKingsFFB_Franklin_v3.png&quot;,&quot;herewego&quot;:&quot;NFL_2017_PITSteelers_v2\/NFL_2017_PITSteelers_v2.png&quot;,&quot;mydubainewyear&quot;:&quot;Emaar_Emoji_v4\/Emaar_Emoji_v4.png&quot;,&quot;первыйорден&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;lifefindsaway&quot;:&quot;Jurassic_World_emoji_v2\/Jurassic_World_emoji_v2.png&quot;,&quot;falcons&quot;:&quot;NFL_2017_ATLFalcons_v3\/NFL_2017_ATLFalcons_v3.png&quot;,&quot;joyeusesfetesavecolaf&quot;:&quot;Olaf_Emoji\/Olaf_Emoji.png&quot;,&quot;聖火リレー&quot;:&quot;OlympicFlameEmoji\/OlympicFlameEmoji.png&quot;,&quot;fannfl&quot;:&quot;Fan_NFL_emoji_v2\/Fan_NFL_emoji_v2.png&quot;,&quot;tmltalk&quot;:&quot;NHL_2017_2018_MapleLeafs\/NHL_2017_2018_MapleLeafs.png&quot;,&quot;disneypixarcoco&quot;:&quot;Coco_Emoji\/Coco_Emoji.png&quot;,&quot;öncebarbekü&quot;:&quot;Doritos_Flight2_2017\/Doritos_Flight2_2017.png&quot;,&quot;droiden&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;ファーストオーダー&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;светлаясторона&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;strangerthings&quot;:&quot;StrangerThings2\/StrangerThings2.png&quot;,&quot;ashes&quot;:&quot;Ashes2017_v3\/Ashes2017_v3.png&quot;,&quot;starwarslosúltimosjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;bb8&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;droidi&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;mymtnsummer&quot;:&quot;MTN_BrightSide_Emoji\/MTN_BrightSide_Emoji.png&quot;,&quot;kerst&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;cfbplayoff&quot;:&quot;CFP_2017_Playoff\/CFP_2017_Playoff.png&quot;,&quot;звёздныевойныэпизод8&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;viedeporg&quot;:&quot;The_Last_Jedi_Porg_emoji_v5\/The_Last_Jedi_Porg_emoji_v5.png&quot;,&quot;cheddarbaybiscuits&quot;:&quot;Red_Lobster_Next_Gen\/Red_Lobster_Next_Gen.png&quot;,&quot;ladosombrio&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;peace4me&quot;:&quot;Peace_Olympics_EMOJI_v3\/Peace_Olympics_EMOJI_v3.png&quot;,&quot;nbb&quot;:&quot;Emoji_NBB_2017_2018\/Emoji_NBB_2017_2018.png&quot;,&quot;クロノジェネシス&quot;:&quot;shadowverse_emoji\/shadowverse_emoji.png&quot;,&quot;ビービーエイト&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;soyonshumains&quot;:&quot;FR_Fondation_Abbe_Pierre_EMOJI\/FR_Fondation_Abbe_Pierre_EMOJI.png&quot;,&quot;дройд&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;red&quot;:&quot;RED_emoji_v3\/RED_emoji_v3.png&quot;,&quot;olympictruce&quot;:&quot;Peace_Olympics_EMOJI_v3\/Peace_Olympics_EMOJI_v3.png&quot;,&quot;حساب_البلاد&quot;:&quot;BankAlBlad\/BankAlBlad.png&quot;,&quot;nflblitz&quot;:&quot;NFL_2017_Blitz_v2\/NFL_2017_Blitz_v2.png&quot;,&quot;スターウォーズ最後のジェダイ&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;feliçnadal&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;honorview10&quot;:&quot;Huawei_Honorglobal_Launch_Emoji_v2\/Huawei_Honorglobal_Launch_Emoji_v2.png&quot;,&quot;gliultimijedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;espejopúblico&quot;:&quot;EspejoPublico_2017_2018\/EspejoPublico_2017_2018.png&quot;,&quot;arie&quot;:&quot;Bachelor_2018_v3\/Bachelor_2018_v3.png&quot;,&quot;gobills&quot;:&quot;NFL_2017_BUFBills_v3\/NFL_2017_BUFBills_v3.png&quot;,&quot;ポーグ&quot;:&quot;The_Last_Jedi_Porg_emoji_v5\/The_Last_Jedi_Porg_emoji_v5.png&quot;,&quot;lesderniersjedi&quot;:&quot;The_Last_Jedi_BB8_emoji_v3\/The_Last_Jedi_BB8_emoji_v3.png&quot;,&quot;manuelbartual&quot;:&quot;Manuel_Bartual_Emoji\/Manuel_Bartual_Emoji.png&quot;,&quot;droid&quot;:&quot;The_Last_Jedi_BB-9E_emoji_v4\/The_Last_Jedi_BB-9E_emoji_v4.png&quot;,&quot;alleyesnorth&quot;:&quot;NBA_2017_18_MIN\/NBA_2017_18_MIN.png&quot;,&quot;noel&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;ಹ್ಯಾಪಿ‌ಕ್ರಿಸ್‌ಮಸ್해&quot;:&quot;Holidays_2017_Christmas\/Holidays_2017_Christmas.png&quot;,&quot;العيد_الوطني_47_المجيد&quot;:&quot;Bank_of_Muscat_Emoji\/Bank_of_Muscat_Emoji.png&quot;,&quot;grammys&quot;:&quot;GRAMMYs_2018_Emoji_v2\/GRAMMYs_2018_Emoji_v2.png&quot;,&quot;fillyourcartwithcolor&quot;:&quot;eBay_Q4_Emoji\/eBay_Q4_Emoji.png&quot;,&quot;keeppounding&quot;:&quot;NFL_2017_CARPanthers_v4\/NFL_2017_CARPanthers_v4.png&quot;},&quot;pollingOptions&quot;:{&quot;focusedInterval&quot;:10000,&quot;blurredInterval&quot;:100000,&quot;backoffFactor&quot;:2,&quot;backoffEmptyResponseLimit&quot;:2,&quot;pauseAfterBackoff&quot;:true,&quot;resumeItemCount&quot;:100,&quot;pauseItemCount&quot;:20},&quot;injectComposedTweets&quot;:true,&quot;timeline_url&quot;:&quot;\/i\/timeline&quot;,&quot;show_sms_confirmation_dialog&quot;:false,&quot;profileEditingCSSBundle&quot;:&quot;https:\/\/abs.twimg.com\/a\/1515180670\/css\/t1\/twitter_profile_editing.bundle.css&quot;,&quot;liveVideoContinuePlayingBehindModalsEnabled&quot;:true,&quot;timelineCacheTTLMillis&quot;:60000,&quot;trendsCacheKey&quot;:&quot;5f5c2044eb&quot;,&quot;decider_personalized_trends&quot;:true,&quot;trendsEndpoint&quot;:&quot;\/i\/trends&quot;,&quot;wtfOptions&quot;:{&quot;pc&quot;:true,&quot;connections&quot;:true,&quot;limit&quot;:3,&quot;display_location&quot;:&quot;wtf-component&quot;,&quot;dismissable&quot;:true,&quot;disabled&quot;:false},&quot;inlineTweetComposeEnabled&quot;:false,&quot;inlineTweetComposeOptions&quot;:{&quot;text&quot;:null},&quot;smartNuxEnabled&quot;:false,&quot;liveVideo&quot;:{&quot;enabled&quot;:true,&quot;pollingEnabled&quot;:true,&quot;stateRefreshIntervalInSeconds&quot;:300},&quot;videoGuide&quot;:{&quot;enabled&quot;:false,&quot;isPollingEnabled&quot;:false,&quot;isStatePollingEnabled&quot;:false,&quot;statePollingIntervalInSeconds&quot;:60,&quot;pollingIntervalInSeconds&quot;:300},&quot;anchoredSidebars&quot;:{&quot;enabled&quot;:false},&quot;initialState&quot;:{&quot;title&quot;:&quot;Twitter&quot;,&quot;section&quot;:&quot;home&quot;,&quot;module&quot;:&quot;app\/pages\/home&quot;,&quot;cache_ttl&quot;:300,&quot;body_class_names&quot;:&quot;three-col logged-in user-style-usernamecete western es enhanced-mini-profile&quot;,&quot;doc_class_names&quot;:&quot;route-home&quot;,&quot;route_name&quot;:&quot;home&quot;,&quot;page_container_class_names&quot;:&quot;AppContent wrapper wrapper-home&quot;,&quot;ttft_navigation&quot;:false}}"> <input class="swift-boot-module" type="hidden" value="app/pages/home"> <input id="swift-module-path" type="hidden" value="https://abs.twimg.com/k/swift/es"> 
<script async src="https://abs.twimg.com/k/es/init.es.4d631aae1b80265fef0a.js"> 
                               </script>
                </form>
            <!--  Espacio Principal-->
            <div id="page-outer" class="" >
                <div id="page-container" class="AppContent wrapper wrapper-home">
                                @yield('content')

                    <!--Fin derecho, usuarios  --> 
                    <script id="track-ttft-body-script" nonce="">
                    if(window.ttft){
                        window.ttft.recordMilestone('page', document.getElementById('swift-page-name').getAttribute('content'));
                        window.ttft.recordMilestone('section', document.getElementById('swift-section-name').getAttribute('content'));
                        window.ttft.recordMilestone('client_record_time', window.ttft.now());
                    }
                    </script>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Modal de twittear-->
        <!-- Modal -->
        <div class="modal fade modal-content TweetstormDialog-content  home-tweet-box tweet-box  tweet-user" id="twitearModal" tabindex="-1" role="dialog" style="top: 5%; left: 415px; position: absolute;width: 610px; height: fit-content;" aria-labelledby="myModalLabel">
    <div class="modal-header">
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="Tweetstorm-dialog-header">Redactar un nuevo Tweet </h3>
    </div>
    <div class=" modal-body">
        <img alt="Name" class="top-timeline-tweet-box-user-image avatar size32" src="{{Auth::user()->avatar}}">
        <form action="//upload.twitter.com/i/tweet/create_with_media.iframe" class="t1-form tweet-form pull-right" data-condensed-text="¿Qué está pasando?" data-poll-composer-rows="3" enctype="multipart/form-data" id="swift_tweetbox_1515235399021" method="post" name="swift_tweetbox_1515235399021" target="tweet-post-iframe" style="width: 508px;">
            <div class="reply-users"></div>
            <div class="tweet-content">
                <img alt="Name" class="inline-reply-user-image avatar size32" src="{{Auth::user()->avatar}}">
                <div class="TweetBox-photoIntent">
                </div>
                <div class="ComposerDragHelp">
                    <span class="ComposerDragHelp-text"></span>
                </div><span class="visuallyhidden" id="tweet-box-home-timeline-label">Texto del Tweet</span>
                <div class="RichEditor RichEditor--emojiPicker is-fakeFocus">
                    <div class="RichEditor-mozillaCursorWorkaround">
                        &nbsp;
                    </div>
                    <div class="RichEditor-container u-borderRadiusInherit">
                        <div class="dropdown-menu typeahead" id="typeahead-dropdown-3" role="listbox">
                            <div aria-hidden="true" class="dropdown-caret">
                                <div class="caret-outer"></div>
                                <div class="caret-inner"></div>
                            </div>
                            <div class="dropdown-inner js-typeahead-results" role="presentation">
                                <ul class="typeahead-items typeahead-accounts social-context js-typeahead-accounts block0" role="presentation" style="display: none;">
                                    <li class="js-selectable typeahead-accounts-shortcut js-shortcut" role="presentation">
                                        <a class="js-nav" data-ds="account_search" data-query-source="typeahead_click" data-search-query="" data-shortcut="true" href="" id="typeahead-item-0" role="option"></a>
                                    </li>
                                </ul>
                                <ul class="typeahead-items typeahead-topics block1" role="presentation" style="display: none;"></ul>
                            </div>
                        </div>
                        <div class="RichEditor-scrollContainer u-borderRadiusInherit">
                            <div aria-autocomplete="list" aria-expanded="false" aria-labelledby="tweet-box-home-timeline-label" aria-multiline="true" aria-owns="typeahead-dropdown-3" class="tweet-box rich-editor is-showPlaceholder" contenteditable="true" data-placeholder-default="¿Qué está pasando?"
                                data-placeholder-poll-composer-on="Haz una pregunta..." data-placeholder-reply="Twittea tu respuesta" dir="ltr" id="tweet-box-home-timeline-nav" name="tweet" role="textbox" spellcheck="true">
                                <div><br></div>
                            </div>
                            <div aria-hidden="true" class="RichEditor-pictographs"></div>
                        </div>
                        <div class="RichEditor-rightItems RichEditor-bottomItems">
                            <div class="js-character-counter">
                                <div class="js-countdown-counter tweet-counter CountdownCounter"></div><svg class="RadialCounter js-radial-counter" height="20" width="20">
                                                        <style>
                                                        /* Global svg style overrides the overflow. Added svg for specificity */ svg.RadialCounter { margin-bottom: -4px; overflow: visible; transform: rotate(-90deg); } .RadialCounter--safe { stroke: #1da1f2; } .RadialCounter--warn { stroke: #ffad1f; } .RadialCounter--danger { stroke: #e0245e; } .RadialCounter-progressUnderlay { stroke: #ccd6dd; } @keyframes  RadialCounterPulse { 0% { stroke-width:2 } 50% { stroke-width: 4; } 100% { stroke-width: 2; } } .RadialCounter--danger.RadialCounter--pulse, .RadialCounter--warn.RadialCounter--pulse { animation: RadialCounterPulse 0.3s ease-in-out; animation-iteration-count: 1; } 
                                                        </style>
                                                        <circle class="RadialCounter-progressUnderlay" cx="50%" cy="50%" fill="none" r="8" stroke-width="1"></circle>
                                                        <circle class="js-progress-circle RadialCounter--safe" cx="50%" cy="50%" fill="none" r="8" stroke-width="2" style="stroke-dashoffset: 50.2655; stroke-dasharray: 50.2655;"></circle></svg>
                            </div>
                        </div>
                    </div>
                    <div class="RichEditor-mozillaCursorWorkaround">
                        &nbsp;
                    </div>
                </div>
                <textarea aria-hidden="true" class="tweet-box-shadow hidden" name="status"></textarea>
                <div class="TweetBoxAttachments" style="z-index: 5000;">
                    <div class="thumbnail-container">
                        <div class="thumbnail-wrapper">
                            <div class="ComposerThumbnails"></div>
                        </div>
                    </div>
                    <div class="photo-tagging-container user-select-container dropdown-menu hidden" style="display: none;">
                        <div class="tagging-dropdown">
                            <div class="dropdown-caret center">
                                <div class="caret-outer"></div>
                                <div class="caret-inner"></div>
                            </div>
                            <div class="photo-tagging-controls user-select-controls">
                                <label class="t1-label"><span class="Icon Icon--search nav-search" tabindex="-1"></span> <span class="u-hiddenVisually">Usuarios en esta foto</span> <input aria-autocomplete="list" aria-expanded="true" aria-owns="typeahead-dropdown-2" class="js-initial-focus" placeholder="Busca y etiqueta hasta a 10 personas" type="text"></label>
                            </div>
                            <div class="typeahead-container">
                                <div aria-hidden="false" aria-multiselectable="true" class="dropdown-menu typeahead" id="typeahead-dropdown-2" role="listbox" style="display: none;">
                                    <div aria-hidden="true" class="dropdown-caret">
                                        <div class="caret-outer"></div>
                                        <div class="caret-inner"></div>
                                    </div>
                                    <div class="dropdown-inner js-typeahead-results" role="presentation">
                                        <div class="typeahead-user-select block0" role="presentation">
                                            <div class="typeahead-empty-suggestions" role="presentation" style="display: none;">
                                                Usuarios recomendados
                                            </div>
                                            <ul class="typeahead-items typeahead-selected js-typeahead-selected" role="presentation" style="display: none;">
                                                <li class="typeahead-selected-end" role="presentation"></li>
                                            </ul>
                                            <ul class="typeahead-items typeahead-accounts js-typeahead-accounts" role="presentation" style="display: none;">
                                                <li class="typeahead-accounts-end" role="presentation"></li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="tweet-box-overlay"></div>
                </div>
            </div>
            <div class="TweetBoxToolbar">
                <div class="TweetBoxExtras tweet-box-extras">
                    <span class="TweetBoxExtras-item TweetBox-mediaPicker"><div class="photo-selector">
                                                <button aria-hidden="true" class="btn icon-btn js-tooltip" data-original-title="Añadir fotos o video" tabindex="-1" type="button"><span class="tweet-camera Icon Icon--media"></span>
                    <span
                        class="text add-photo-label u-hiddenVisually">Añadir fotos o video</span>
                        </button>
                        <div class="image-selector">
                            <input class="file-data" name="media_data_empty" type="hidden">
                            <div class="multi-photo-data-container hidden"></div><label class="t1-label"><span class="visuallyhidden">Añadir fotos o video</span> <input accept="image/gif,image/jpeg,image/jpg,image/png,video/mp4,video/x-m4v" class="file-input js-tooltip" data-delay="150" data-original-title="Añadir fotos o video" multiple="" name="media_empty" type="file"></label>
                        </div>
                </div>
                </span>
            </div>
            <div class="TweetBoxToolbar-tweetButton tweet-button">
                <span class="add-tweet-button"><button aria-label="Agregar otro Tweet" class="js-add-tweet EdgeButton EdgeButton--secondary EdgeButton--icon EdgeButton--medium js-tooltip disabled" data-delay="150" data-original-title="Agregar otro Tweet" data-placement="top" disabled=""><span class="add-tweet-button"><span class="add-tweet-button"><span class="Icon Icon--add Icon--medium"></span></span>
                </span>
                </button>
                </span> <button class="tweet-action EdgeButton EdgeButton--primary js-tweet-btn disabled" disabled="" type="button" onclick="nuevoTweetNav()"><span class="button-text tweeting-text">Twittear</span> <span class="button-text replying-text">Responder</span></button>
            </div>
    </div>
    <div style="position: absolute; visibility: hidden;"></div>
    <div style="position: absolute; visibility: hidden;">
        <div>
            ¿Qué está pasando?
        </div>
    </div>
    <div style="position: absolute; visibility: hidden;">
        <div>
            ¿Qué está pasando?
        </div>
    </div>
    <div style="position: absolute; visibility: hidden;">
        <div><br></div>
    </div>
    </form>
        <!-- Fin Modal de twittear -->
        
              
            <div aria-live="assertive" class="visuallyhidden" id="sr-event-log"></div>
        </div>
    </div>
    
    
</body>
        @endif     
    </div>
    <!-- Modal Mensajes-->
  <div class="modal fade modal-content modal is-autoPosition" id="mensajesModal" role="dialog" style="top: 5%; left: 415px; position: absolute;width: 45vw; height: fit-content;" aria-labelledby="dm_dialog-header">
  <div class="js-first-tabstop" tabindex="0"></div>
    <div class="DMActivity DMInbox js-ariaDocument u-chromeOverflowFix DMActivity--open" role="document">
  <div class="DMActivity-header">

    <h2 class="DMActivity-title js-ariaTitle" id="dm_dialog-header">
      Mensajes directos
    </h2>

    <div class="DMActivity-toolbar">
          <button type="button" class="DMInbox-toolbar EdgeButton EdgeButton--small EdgeButton--secondary EdgeButton--icon mark-all-read js-tooltip" title="Marcar todo como leído">
      <span class="Icon Icon--markAllRead"></span>
      <span class="u-hiddenVisually">Marcar todo como leído</span>
    </button>
    <button type="button" class="DMInbox-toolbar DMComposeButton EdgeButton EdgeButton--small EdgeButton--primary dm-new-button js-initial-focus">
      <span>Mensaje nuevo</span>
    </button>

      <button type="button" class="DMActivity-close js-close u-textUserColorHover" data-dismiss="modal">
        <span class="Icon Icon--close Icon--medium"></span>
        <span class="u-hiddenVisually">Cerrar</span>
      </button>
    </div>
  </div>

  <div class="DMActivity-container">
    <div class="DMActivity-notice">
      <div class="DMNotice DMNotice--error DMErrorBar" style="display: none;">
  <div class="DMNotice-message">    <div class="DMErrorBar-text"></div>
</div>
  <div class="DMNotice-actions u-emptyHide"></div>
    <button type="button" class="DMNotice-dismiss">
      <span class="Icon Icon--close"></span>
      <span class="u-hiddenVisually">Descartar</span>
    </button>
</div>

      <div class="DMNotice DMNotice--toast " style="display: none;">
  <div class="DMNotice-message"></div>
  <div class="DMNotice-actions u-emptyHide"></div>
    <button type="button" class="DMNotice-dismiss">
      <span class="Icon Icon--close"></span>
      <span class="u-hiddenVisually">Descartar</span>
    </button>
</div>

          <div class="DMNotice DMNotice--explicitDismiss DMNotificationsPermissionRequest" style="display: none;">
  <div class="DMNotice-message">    ¿Te gustaría recibir notificaciones web de tus interacciones?
</div>
  <div class="DMNotice-actions u-emptyHide">    <button type="button" class="DMNotificationsPermissionRequest-later EdgeButton EdgeButton--tertiary js-prompt-later">Tal vez más tarde</button>
    <button type="button" class="DMNotificationsPermissionRequest-accept EdgeButton EdgeButton--secondary js-prompt-accept">Habilitar notificaciones</button>
</div>
</div>


    </div>

       <nav class="DMInbox-tab u-hidden" aria-label="Bandejas de entrada de Mensajes Directos">
  <ul class="DMInbox-tabToggle">
    <li class="DMInbox-tabToggleItem DMInbox-inboxTab is-active">
      <a role="button" href="#" class="DMInbox-tabCopy">Bandeja de entrada</a>
    </li>
    <li class="DMInbox-tabToggleItem DMInbox-requestTab">
      <a role="button" href="#" class="DMInbox-tabCopy">Solicitudes</a>
    </li>
  </ul>
</nav>



    <div class="DMActivity-body js-ariaBody ">
          <div class="DMInbox-content u-scrollY">
      <div class="DMInbox-primary">
        <ul class="DMInbox-conversations"> 
 
        <li class="DMInbox-conversationItem">
        <div class="DMInboxItem" data-thread-id="301028364-390203992" data-sort-event-id="630408429719408643" data-last-message-id="630408429719408643" data-is-oto="true" data-is-muted="false">
    <div class="DMInboxItem-avatar"><a href="/victorha_" class="js-action-profile js-user-profile-link" data-user-id="390203992">
  <div class="DMAvatar DMAvatar--1 u-chromeOverflowFix">
    <span class="DMAvatar-container">
      <img class="DMAvatar-image" src="https://pbs.twimg.com/profile_images/829361515392299009/AdXn_nbO_200x200.jpg" alt="Víctor Hernández" title="Víctor Hernández">
    </span>
</div>

</a>

</div>

    <div class="DMInboxItem-title account-group">
      <b class="fullname">Víctor Hernández</b><span class="UserBadges"></span><span class="UserNameBreak">&nbsp;</span><span class="username u-dir u-textTruncate" dir="ltr">@<b>victorha_</b></span>
    </div>
  <div class="DMInboxItem-header">
      <div class="DMInboxItem-timestamp"><span class="_timestamp" data-aria-label-part="last" data-time="1439136056" data-long-form="true" data-include-sec="true">
</span>
</div>
  </div>

  <div class="u-posRelative">

      <p class="DMInboxItem-snippet ">
      </p>

  </div>
</div>
</li>

        </ul>
        <div class="DMInbox-empty"><div class="DMEmptyState">
  <h2 class="DMEmptyState-header">
    Envía un mensaje, recibe un mensaje
  </h2>

  <div class="DMEmptyState-details">
    <p>Los Mensajes Directos son conversaciones privadas entre tú y otras personas en Twitter. Puedes compartir Tweets, contenido multimedia y mucho más.</p>
  </div>

  <div class="DMEmptyState-cta">
    <button type="button" class="EdgeButton EdgeButton--primary dm-new-button">
      Inicia una conversación
    </button>
  </div>
</div>
</div>
        <div class="DMInbox-spinner u-hidden">
          <div class="DMSpinner"></div>
        </div>
      </div>
      <div class="DMInbox-secondary u-hidden is-empty">
        <div class="DMInbox-secondaryInboxCopy">
          Aquí verás los mensajes de las personas a las que no sigues. Ellas no sabrán que los viste hasta que los aceptes.
        </div>
        <ul class="DMInbox-untrustedConversations"></ul>
        <div class="DMInbox-empty"><div class="DMEmptyState">
  <h2 class="DMEmptyState-header">
    No tienes ninguna solicitud de mensajes
  </h2>

  <div class="DMEmptyState-details">
    <p>Aquí verás los mensajes de las personas a las que no sigues. Ellas no sabrán que los viste hasta que los aceptes.</p>
  </div>
</div>
</div>
        <div class="DMInbox-spinner u-hidden">
          <div class="DMSpinner"></div>
        </div>
      </div>
    </div>

    </div>

    <div class="DMActivity-footer u-emptyHide"></div>
  </div>
</div>


    
  <div class="js-last-tabstop" tabindex="0"></div>
  </div>

        
        <!-- Fin Modal mensajes -->
    <script type="text/javascript">

$(document).ready(function() { localStorage.removeItem('__draft_tweets__:home');});
function nuevoTweetNav() {         
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $.post("/tweet", {
        mensaje: document.getElementById('tweet-box-home-timeline-nav').textContent
    });         

    window.location.reload(true);
         
 }
</script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>