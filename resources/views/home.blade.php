<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home - Laravel - The PHP Framework For Web Artisans</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Taylor Otwell">
    <meta name="description" content="Laravel - The PHP framework for web artisans.">
    <meta name="keywords" content="laravel, php, framework, web, artisans, taylor otwell">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/homepage/css/laravel-fb6d5c57db.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <link rel="stylesheet" type="text/css" href="assets/custom-select/custom-select.css" />
    <link rel="apple-touch-icon" href="/favicon.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
</head>
<body class="docs language-php">
<div class="laracon-banner">
    <!-- <img src="/assets/svg/laracon-logo.svg" alt=""> -->
    Join Laracon EU in Amsterdam on August 29th - 31st. Tickets are now available!
    <a href="https://laracon.eu/2018">Get your ticket today!</a>

    <!--         Spark 6.0, the official SaaS starter-kit built on Laravel, is now available!
            <a href="https://spark.laravel.com">Get your copy today!</a> -->
</div>
<span class="overlay"></span>

<nav class="main">
    <a href="/" class="brand nav-block">
        <svg xmlns="http://www.w3.org/2000/svg" width="84.1" height="57.6" viewBox="0 0 84.1 57.6"><path fill="#FB503B" d="M83.8 26.9c-.6-.6-8.3-10.3-9.6-11.9-1.4-1.6-2-1.3-2.9-1.2s-10.6 1.8-11.7 1.9c-1.1.2-1.8.6-1.1 1.6.6.9 7 9.9 8.4 12l-25.5 6.1L21.2 1.5c-.8-1.2-1-1.6-2.8-1.5C16.6.1 2.5 1.3 1.5 1.3c-1 .1-2.1.5-1.1 2.9S17.4 41 17.8 42c.4 1 1.6 2.6 4.3 2 2.8-.7 12.4-3.2 17.7-4.6 2.8 5 8.4 15.2 9.5 16.7 1.4 2 2.4 1.6 4.5 1 1.7-.5 26.2-9.3 27.3-9.8 1.1-.5 1.8-.8 1-1.9-.6-.8-7-9.5-10.4-14 2.3-.6 10.6-2.8 11.5-3.1 1-.3 1.2-.8.6-1.4zm-46.3 9.5c-.3.1-14.6 3.5-15.3 3.7-.8.2-.8.1-.8-.2-.2-.3-17-35.1-17.3-35.5-.2-.4-.2-.8 0-.8S17.6 2.4 18 2.4c.5 0 .4.1.6.4 0 0 18.7 32.3 19 32.8.4.5.2.7-.1.8zm40.2 7.5c.2.4.5.6-.3.8-.7.3-24.1 8.2-24.6 8.4-.5.2-.8.3-1.4-.6s-8.2-14-8.2-14L68.1 32c.6-.2.8-.3 1.2.3.4.7 8.2 11.3 8.4 11.6zm1.6-17.6c-.6.1-9.7 2.4-9.7 2.4l-7.5-10.2c-.2-.3-.4-.6.1-.7.5-.1 9-1.6 9.4-1.7.4-.1.7-.2 1.2.5.5.6 6.9 8.8 7.2 9.1.3.3-.1.5-.7.6z"/></svg>
        <span>Hacker's e-jotter</span>
    </a>

    <div class="search nav-block">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#A1A1A1" d="M5.8 11.7c-1.6 0-3-.6-4.1-1.7S0 7.4 0 5.8s.6-3 1.7-4.1C2.8.6 4.3 0 5.8 0s3 .6 4.1 1.7c2.3 2.3 2.3 6 0 8.3-1 1.1-2.5 1.7-4.1 1.7zM5.8 1c-1.3 0-2.5.5-3.4 1.4C1.5 3.3 1 4.5 1 5.8s.5 2.5 1.4 3.4c.9.9 2.1 1.4 3.4 1.4s2.5-.5 3.4-1.4c1.9-1.9 1.9-5 0-6.9C8.4 1.5 7.1 1 5.8 1z"></path><path fill="#A1A1A1" d="M15.5 16c-.1 0-.3 0-.3-.1L9.3 10c-.2-.2-.2-.5 0-.7s.5-.2.7 0l5.9 5.9c.2.2.2.5 0 .7-.1.1-.3.1-.4.1z"></path></svg>
        <span class="twitter-typeahead" style="position: relative; display: inline-block; direction: ltr;"><input placeholder="search" type="text" id="search-input" class="tt-input" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Whitney SSm A&quot;, &quot;Whitney SSm B&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="tt-dataset-0"></div></span></span>
    </div>

    <ul class="main-nav" v-if="! search">
        <li class="nav-docs"><a href="/docs">Tapandsell code docs</a></li>
        <li class="nav-laracasts"><a href="https://laracasts.com">General Notes</a></li>
        <li class="dropdown community-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">LE Framework notes <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="https://envoyer.io">Envoyer</a></li>
                <li><a href="https://horizon.laravel.com">Horizon</a></li>
                <li><a href="https://lumen.laravel.com">Lumen</a></li>
                <li><a href="https://spark.laravel.com">Spark</a></li>

            </ul>
        </li>
    </ul>
    <div class="switcher">
        <div class="btn-group">
            <button type="button" style="width:215px;" class="btn btn-danger dropdown-toggle btn-hackerthons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                LE Framework Notes
            </button>
            <div class="dropdown-menu">
                @foreach($hackerthons as $hackerthon)
                    <?php
                    $logout = "#";
                    $id = "";
                    $loweCaseHackthon = strtolower($hackerthon->hck_name);
                    $id = $hackerthon->hck_id;
                    if($loweCaseHackthon != strtolower("LE Framework notes") && $loweCaseHackthon != strtolower("LE Task Docs") ){
                        $logout = "/logout";
                        $id = "";
                    }
                    ?>
                    <a  href = "{{ $logout }}" class="dropdown-item hackerthon-item" id = "{{ $id }}" >{{ $hackerthon->hck_name }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="responsive-sidebar-nav">
        <a href="#" class="toggle-slide menu-link btn">&#9776;</a>
    </div>
</nav>

<nav id="slide-menu" class="slide-menu" role="navigation">

    <div class="brand">
        <a href="/">
        <a href="/">
            <img src="/assets/homepage/img/laravel-logo-white.png" height="50">
        </a>
    </div>

    <ul class="slide-main-nav">
        <li><a href="/">Home</a></li>
        <li class="nav-docs"><a href="/docs">Documentation</a></li>
        <li class="nav-laracasts"><a href="https://laracasts.com">Laracasts</a></li>
        <li class="dropdown community-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ecosystem <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">

                <li><a href="https://envoyer.io">Envoyer</a></li>
                <li><a href="https://horizon.laravel.com">Horizon</a></li>
                <li><a href="https://lumen.laravel.com">Lumen</a></li>
                <li><a href="https://spark.laravel.com">Spark</a></li>

                <li class="divider"></li>

                <li><a href="https://laracon.com.au">Laracon AU</a></li>
                <li><a href="https://laracon.eu">Laracon EU</a></li>
                <li><a href="http://laracon.us">Laracon US</a></li>
                <li><a href="https://laracon.net">Laracon Online</a></li>

                <li class="divider"></li>

                <li><a href="https://laravel.com/certification">Certification</a></li>
                <li><a href="https://laracasts.com/discuss">Forums</a></li>
                <li><a href="https://github.com/laravel/laravel">GitHub</a></li>
                <li><a href="https://larajobs.com/?partner=5#/">Jobs</a></li>
                <li><a href="http://www.laravelpodcast.com/">Podcast</a></li>
                <li><a href="https://larachat.co">Slack</a></li>
                <li><a href="https://twitter.com/laravelphp">Twitter</a></li>
            </ul>
        </li>
    </ul>

    <div class="slide-docs-nav">
        <h2>Documentation</h2>
        <ul>
            <li>
                <h2 data-toggle="collapse" href="#collapseCategories" >Getting Started</h2>
                <ul id = "">
                    <li><a href="/docs/5.6/installation">Installation</a></li>
                    <li><a href="/docs/5.6/configuration">Configuration</a></li>
                    <li><a href="/docs/5.6/structure">Directory Structure</a></li>
                    <li><a href="/docs/5.6/homestead">Homestead</a></li>
                    <li><a href="/docs/5.6/valet">Valet</a></li>
                    <li><a href="/docs/5.6/deployment">Deployment</a></li>
                </ul>
            </li>
            <li>
                <h2>Architecture Concepts</h2>
                <ul>
                    <li><a href="/docs/5.6/lifecycle">Request Lifecycle</a></li>
                    <li><a href="/docs/5.6/container">Service Container</a></li>
                    <li><a href="/docs/5.6/providers">Service Providers</a></li>
                    <li><a href="/docs/5.6/facades">Facades</a></li>
                    <li><a href="/docs/5.6/contracts">Contracts</a></li>
                </ul>
            </li>
            <li>
                <h2>The Basics</h2>
                <ul>
                    <li><a href="/docs/5.6/routing">Routing</a></li>
                    <li><a href="/docs/5.6/middleware">Middleware</a></li>
                    <li><a href="/docs/5.6/csrf">CSRF Protection</a></li>
                    <li><a href="/docs/5.6/controllers">Controllers</a></li>
                    <li><a href="/docs/5.6/requests">Requests</a></li>
                    <li><a href="/docs/5.6/responses">Responses</a></li>
                    <li><a href="/docs/5.6/views">Views</a></li>
                    <li><a href="/docs/5.6/urls">URL Generation</a></li>
                    <li><a href="/docs/5.6/session">Session</a></li>
                    <li><a href="/docs/5.6/validation">Validation</a></li>
                    <li><a href="/docs/5.6/errors">Error Handling</a></li>
                    <li><a href="/docs/5.6/logging">Logging</a></li>
                </ul>
            </li>
            <li>
                <h2>Frontend</h2>
                <ul>
                    <li><a href="/docs/5.6/blade">Blade Templates</a></li>
                    <li><a href="/docs/5.6/localization">Localization</a></li>
                    <li><a href="/docs/5.6/frontend">Frontend Scaffolding</a></li>
                    <li><a href="/docs/5.6/mix">Compiling Assets</a></li>
                </ul>
            </li>
            <li>
                <h2>Security</h2>
                <ul>
                    <li><a href="/docs/5.6/authentication">Authentication</a></li>
                    <li><a href="/docs/5.6/passport">API Authentication</a></li>
                    <li><a href="/docs/5.6/authorization">Authorization</a></li>
                    <li><a href="/docs/5.6/encryption">Encryption</a></li>
                    <li><a href="/docs/5.6/hashing">Hashing</a></li>
                    <li><a href="/docs/5.6/passwords">Password Reset</a></li>
                </ul>
            </li>
            <li>
                <h2>Digging Deeper</h2>
                <ul>
                    <li><a href="/docs/5.6/artisan">Artisan Console</a></li>
                    <li><a href="/docs/5.6/broadcasting">Broadcasting</a></li>
                    <li><a href="/docs/5.6/cache">Cache</a></li>
                    <li><a href="/docs/5.6/collections">Collections</a></li>
                    <li><a href="/docs/5.6/events">Events</a></li>
                    <li><a href="/docs/5.6/filesystem">File Storage</a></li>
                    <li><a href="/docs/5.6/helpers">Helpers</a></li>
                    <li><a href="/docs/5.6/mail">Mail</a></li>
                    <li><a href="/docs/5.6/notifications">Notifications</a></li>
                    <li><a href="/docs/5.6/packages">Package Development</a></li>
                    <li><a href="/docs/5.6/queues">Queues</a></li>
                    <li><a href="/docs/5.6/scheduling">Task Scheduling</a></li>
                </ul>
            </li>
            <li>
                <h2>Database</h2>
                <ul>
                    <li><a href="/docs/5.6/database">Getting Started</a></li>
                    <li><a href="/docs/5.6/queries">Query Builder</a></li>
                    <li><a href="/docs/5.6/pagination">Pagination</a></li>
                    <li><a href="/docs/5.6/migrations">Migrations</a></li>
                    <li><a href="/docs/5.6/seeding">Seeding</a></li>
                    <li><a href="/docs/5.6/redis">Redis</a></li>
                </ul>
            </li>
            <li>
                <h2>Eloquent ORM</h2>
                <ul>
                    <li><a href="/docs/5.6/eloquent">Getting Started</a></li>
                    <li><a href="/docs/5.6/eloquent-relationships">Relationships</a></li>
                    <li><a href="/docs/5.6/eloquent-collections">Collections</a></li>
                    <li><a href="/docs/5.6/eloquent-mutators">Mutators</a></li>
                    <li><a href="/docs/5.6/eloquent-resources">API Resources</a></li>
                    <li><a href="/docs/5.6/eloquent-serialization">Serialization</a></li>
                </ul>
            </li>
            <li>
                <h2>Testing</h2>
                <ul>
                    <li><a href="/docs/5.6/testing">Getting Started</a></li>
                    <li><a href="/docs/5.6/http-tests">HTTP Tests</a></li>
                    <li><a href="/docs/5.6/dusk">Browser Tests</a></li>
                    <li><a href="/docs/5.6/database-testing">Database</a></li>
                    <li><a href="/docs/5.6/mocking">Mocking</a></li>
                </ul>
            </li>
            <li>
                <h2>Official Packages</h2>
                <ul>
                    <li><a href="/docs/5.6/billing">Cashier</a></li>
                    <li><a href="/docs/5.6/envoy">Envoy</a></li>
                    <li><a href="/docs/5.6/horizon">Horizon</a></li>
                    <li><a href="/docs/5.6/passport">Passport</a></li>
                    <li><a href="/docs/5.6/scout">Scout</a></li>
                    <li><a href="/docs/5.6/socialite">Socialite</a></li>
                </ul>
            </li>
        </ul>
    </div>

</nav>

<div class="docs-wrapper container">

    <section class="sidebar">
        <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CKYILK3E&placement=laravelcom" id="_carbonads_js"></script>
        <small><a href="#" id="doc-expand" style="font-size: 11px; color: #B8B8B8;">Expand All</a></small>
        <div class = "hackerthons">
            <ul class ="list-unstyled">
                <li>
                    <h2 data-toggle="collapse" href="#collapseCategories">Getting Started</h2>
                    <ul  class="collapse list-unstyled" id = "collapseCategories"  style="padding-left:15px;">
                        <li><a href="/docs/5.6/installation">Installation</a></li>
                        <li><a href="/docs/5.6/configuration">Configuration</a></li>
                        <li><a href="/docs/5.6/structure">Directory Structure</a></li>
                        <li><a href="/docs/5.6/homestead">Homestead</a></li>
                        <li><a href="/docs/5.6/valet">Valet</a></li>
                        <li><a href="/docs/5.6/deployment">Deployment</a></li>
                    </ul>
                </li>
            </ul>
            @foreach($categories as $cat)
                <ul class ="list-unstyled">
                    <li>
                        <h2 data-toggle="collapse" href="#{{str_replace(' ','',$cat->cat_name)}}">{{$cat->cat_name}}</h2>
                        <ul  class="collapse list-unstyled" id = "{{str_replace(' ','',$cat->cat_name)}}"  style="padding-left:15px;">
                            @foreach($posts as $post)
                                @if($post->cat_id == $cat->cat_id)
                                    <li><a href="">{{$post->pst_title}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            @endforeach
        </div>
    </section>
    <article class = "post-content" style="padding-top:85px;">
         <div>{!!$posts[0]->pst_content !!}</div>
    </article>
    {{--<article>--}}
        {{--<div class="the-404">--}}
            {{--<div class="contain">--}}
                {{--<div class="media">--}}
                    {{--<img src="/assets/img/lamp-post.jpg">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</article>--}}
</div>

<footer class="main">
    <ul>
        <li class="nav-docs"><a href="/docs">Tapandsell Code Docs</a></li>
        <li class="nav-laracasts"><a href="https://laracasts.com">General Notes</a></li>
        <li class="nav-laravel-news"><a href="https://laravel-news.com">LE Framework notes</a></li>
        <li class="nav-partners"><a href="/partners">LE tasks docs</a></li>
        <li class="nav-forge"><a href="https://forge.laravel.com">Laravel Notes</a></li>

        <li class="dropdown community-dropdown">
            <a href="{{url(('logout'))}}">Log out<span class="caret"></span></a>
        </li>
    </ul>
    <p>Hack ! hack and hack until Jesus Comes back to earth. Copyright &copy; does it matter ?.</p>
    <p class="less-significant">
        <a href="http://jackmcdade.com">
            Designed by<br>
            <svg xmlns="http://www.w3.org/2000/svg" width="128.2" height="28" viewBox="0 0 128.2 28"><g fill="#c3c3c3"><path d="M14.2.4v1.4l-1.4-.3.3 4.5c.1 1.5 0 3-.1 4.5 0 .4-.1.8-.1 1.2-.1.4-.1.8-.3 1.2-.1.4-.3.7-.5 1.1-.2.3-.5.6-.9.9-.4.2-.9.4-1.5.6-.6.2-1.1.3-1.6.3-.6 0-1.2-.1-1.6-.3-.5-.2-.9-.6-1.1-1-.3-.5-.5-1-.6-1.6-.1-.6-.1-1.3 0-2.1 0-.2.1-.5.2-.7-.1-.2 0-.4.1-.6l.3-.6 1.1.4c.2 0 .5.1.8.2.3.1.5.1.6.2 0 .2 0 .4-.1.5-.1.2-.1.3-.2.4-.1.1-.2.3-.2.4-.1.2-.1.3-.1.5L6 10.8c-.1.3-.2.7-.2 1.1 0 .4.1.8.2 1.2.2.4.4.7.6 1 .3.3.6.4 1 .3.6 0 1.1-.3 1.4-.6.3-.4.5-.9.7-1.7.1-.7.2-1.6.2-2.8V5.4c0-.6-.1-1.3-.1-2-.1-.6-.2-1.3-.3-2H5.7c-.7 0-1.5 0-2.2.2-.3.1-.6.2-1 .4-.3.1-.6.4-.9.6-.2.3-.4.6-.5 1-.1.3-.1.7 0 1 .1.5.3.8.4.9v-.1c0-.4.1-.8.4-1 .3-.2.6-.3.9-.3.3 0 .6.1.9.3.3.2.4.6.4 1s-.1.8-.4 1c-.3.2-.6.3-1 .3-.8 0-1.4-.2-1.8-.7-.4-.4-.7-.9-.8-1.5C0 4 0 3.4.2 2.7c.2-.6.5-1.1 1-1.5.4-.3.8-.5 1.2-.7.4-.1.9-.2 1.4-.3.5-.1.9-.1 1.4-.1h2.9c.6 0 1.1 0 1.6.1.5 0 1 .1 1.5.1s1 .1 1.5.1c.4.1.9.1 1.5 0zM25.2 14.3c0 .2.1.4.1.6 0 .2.1.4.1.7-1-.1-2-.2-3-.1-1.1.1-2.1.2-3 .4 0-.2-.1-.4-.1-.5 0-.2-.1-.4-.1-.5.2 0 .5-.1.7-.1.2 0 .4-.1.6-.1-.1-1.5-.3-3.1-.5-4.6-.5.1-.9.1-1.4.2-.5.1-.9.1-1.4.2-.2.7-.3 1.3-.5 2s-.3 1.3-.5 2h.6c.1 0 .3 0 .4.1v.9c0 .1 0 .2-.1.3H14v-1.2h1c.2-.5.3-1 .4-1.5.1-.5.3-1 .4-1.5.2-.6.3-1.2.5-1.7.2-.6.3-1.2.5-1.7.2-1.1.4-2.1.6-3.2.2-1.1.3-2.1.4-3.2h-1.4c0-.2.1-.4.1-.6 0-.2 0-.4.1-.6h5.8l.2 1.2h-1c.3 2.1.7 4.3 1 6.5.3 2.2.7 4.4 1 6.5h1.6zM17.5 9c.4-.1.7-.1 1.1-.2.4-.1.8-.1 1.2-.2-.2-1-.3-2-.5-2.9-.2-1-.4-1.9-.6-2.9-.2 1-.4 2.1-.5 3.1-.3 1-.5 2.1-.7 3.1zM36.7 10.4h-.6c0 .6 0 1.2-.2 1.9-.2.6-.5 1.2-1 1.6-.5.5-1 .9-1.6 1.1-.6.3-1.3.4-2 .5-.6.1-1.1.1-1.8 0-.6-.1-1.1-.4-1.6-.7-.2-.2-.5-.4-.8-.7-.3-.3-.5-.5-.6-.8-.3-.5-.5-1-.6-1.5-.2-.5-.3-.9-.4-1.4-.1-.5-.2-1-.2-1.5s0-1 .1-1.6c.2-1 .4-2 .8-2.9.4-.9.8-1.7 1.4-2.3.5-.7 1.2-1.2 1.9-1.6.7-.3 1.4-.5 2.2-.5.3 0 .5 0 .8.1.3.1.5.2.7.4.3.3.7.7 1 1.2.3.5.6 1.2.7 1.9h.6v.6l-2.5.4c-.3.1-.5.1-.6 0-.1 0-.2-.1-.2-.2-.1-.1-.1-.2 0-.3h.4c.2-.2.3-.3.3-.6v-.7c0-.5-.2-.9-.5-1.3l-.4-.4c-.2-.1-.4-.1-.6 0-.2 0-.4.2-.6.4-.2.2-.4.5-.5.9-.3.2-.4.6-.5.9-.1.3-.2.5-.2.7-.6 2.6-.7 5.3-.2 8 .1.3.2.7.3 1s.3.6.5.9c.2.3.5.5.8.7.3.2.6.2 1 .1.6-.1 1-.4 1.4-1 .3-.5.6-1.1.7-1.8.1-.3.1-.6.1-.9v-.5c-.2 0-.4 0-.6-.1-.1-.1-.2-.2-.2-.3 0-.1 0-.2.1-.3h3.4c0 .1 0 .2-.1.3-.1.1-.1.2-.1.3z"/><path d="M48 14.2c.1.2.3.3.5.4.2.1.5.1.7 0 .1.1.1.2.1.4s-.1.3-.2.4c-.1.1-.2.2-.4.2h-1.4c-.3 0-.7 0-1-.1-.3-.1-.7-.2-1-.4-.3-.2-.5-.4-.7-.7-.2-.3-.3-.6-.3-1V9.9v-.4c0-.2-.1-.3-.2-.5s-.3-.3-.4-.4c-.2-.1-.4-.1-.7-.1-.1 0-.2 0-.5.1-.2.3-.3.5-.5.8-.2.3-.3.5-.5.7 0 .8 0 1.5-.1 2.2 0 .7-.1 1.5-.1 2.1h1.4v1.1c-.5 0-.9.1-1.3 0-.4 0-.8 0-1.2-.1-.4 0-.8-.1-1.2-.1H37.3c-.1 0-.2 0-.3-.1-.1 0-.1-.1-.1-.2s-.1-.3-.1-.4v-.4c0-.1.1-.2.1-.2.2.1.4.2.6.1s.4-.2.5-.4c0-.1.1-.3.1-.7 0-.4 0-.9.1-1.6 0-.6.1-1.3.1-2.1s0-1.6.1-2.4c0-.8 0-1.5.1-2.3 0-.7.1-1.3.1-1.8v-.7c0-.2-.1-.4-.2-.6-.1-.2-.3-.3-.5-.4-.2-.1-.4 0-.6.1 0-.2-.1-.5-.1-.7 0-.2 0-.4-.1-.7 1 0 2 .1 3 .1.9 0 1.9.1 3 .1v.3c0 .1 0 .3.1.4v.4c0 .1 0 .2-.1.2-.1.1-.2.1-.3.1-.1 0-.2 0-.4-.1-.1-.1-.3-.1-.4-.2-.1-.1-.3-.1-.3-.1-.1.9-.1 1.9-.1 2.9s-.1 2-.1 3.1c.7-1.2 1.4-2.5 2-3.8.2-.3.3-.6.4-.9.1-.3.3-.6.5-.9.2-.3.4-.5.7-.7.3.3.6.2.9.1.3-.1.7-.1 1 0 .3.1.6.2.9.5.2.3.4.6.4 1s.1.8 0 1.1v.5c0 .2-.1.3-.2.4-.1.2-.2.3-.4.4-.2.1-.4.1-.5.2-.1 0-.3.1-.4.1h-.4c-.2-.3-.4-.4-.4-.6-.1-.2-.1-.4 0-.5.1-.2.2-.3.3-.3.1 0 .2-.1.4-.1.2-.1.3-.2.3-.3.1-.2.1-.3.1-.5 0-.3-.1-.5-.1-.7-.1-.2-.2-.3-.3-.3-.2 0-.3 0-.5.1s-.3.2-.5.4-.3.4-.4.6c-.1.2-.3.5-.4.7-.1.3-.3.6-.4.8-.2.2-.3.5-.4.8-.4.9-.8 1.7-1.2 2.5.3 0 .6-.1 1 0h1c.3 0 .7.1 1 .2.3.1.6.3.8.6.3.3.4.6.5 1 .1.4.1.8.2 1.1l.2 2.1c0 .2.1.5.1.7 0 .4.1.7.3.9zM71.7 13.9c.2.2.4.4.7.5.3.1.5 0 .8-.1 0 .2.1.3.1.6.1.2.1.4.1.6h-1.1s-.8 0-1.3.1h-2.3v-.2c0-.1.1-.2.2-.3.1-.1.2-.2.4-.3.2-.1.3-.1.6-.1.1 0 .1-.2.1-.7v-1.6c0-.6 0-1.2-.1-1.9s0-1.1 0-1.5V6.4c0-.7.1-1.5.1-2.2-.6 1.3-1.1 2.7-1.6 4.1-.5 1.5-1 3-1.5 4.4 0 0 .1.1.1.2-.2 0-.4 0-.7.1-.3.1-.5.1-.7.1-.5-1.9-1.1-3.7-1.6-5.5-.5-1.8-1.1-3.6-1.6-5.5-.1 1-.1 2-.1 3 0 1.1-.1 2.1-.1 3.2s0 2.1-.1 3.2c0 1-.1 2-.1 3h1.4v1.1c-.5 0-.9.1-1.3 0-.4 0-.8 0-1.2-.1-.4 0-.8-.1-1.2-.1H58c-.1 0-.2 0-.3-.1-.1 0-.1-.1-.1-.2s-.1-.3-.1-.4v-.4c0-.1.1-.2.1-.2.2.1.4.2.6.1s.4-.2.5-.4c0-.1.1-.3.1-.7 0-.4 0-.9.1-1.6 0-.6.1-1.3.1-2.1V7.2c0-.8 0-1.5.1-2.3 0-.7.1-1.3.1-1.8v-.7c0-.2-.1-.4-.2-.6-.1-.2-.3-.3-.5-.4-.2-.1-.4 0-.6.1 0-.2-.1-.5-.1-.7 0-.2 0-.4-.1-.7 1 0 2 .1 3 .1.9 0 1.9.1 3 .1 0 .3-.1.5-.4.7.3 1.3.6 2.6 1 3.9l1.2 3.9c.2-.6.4-1.3.6-1.9l.6-1.8c.3-.5.5-1.1.8-1.7.2-.6.4-1.3.6-2-.1 0-.3 0-.4-.1-.1 0-.2 0-.4-.1-.1 0-.1-.1-.1-.3 0-.1.1-.2.1-.3.1-.1.2-.1.3-.1h4.5c.1 0 .3.1.4.2.1.1.2.2.2.4s0 .3-.2.3c-.1-.1-.2-.1-.3-.1-.1 0-.2.1-.3.1-.2.4-.3.8-.4 1.3-.1.5-.1.9-.1 1.4-.2 2.8-.2 5.6 0 8.4 0 .3 0 .5.1.7-.1.3 0 .5.2.7zM81.7 12h-.4c0 .4 0 .9-.2 1.3-.1.4-.4.8-.7 1.1-.3.3-.7.6-1.1.8-.4.2-.9.3-1.3.4-.4.1-.8 0-1.2 0-.4-.1-.8-.2-1.1-.5-.2-.1-.3-.3-.5-.5s-.3-.4-.4-.6c-.2-.4-.3-.7-.4-1-.1-.3-.2-.6-.3-1-.1-.3-.1-.6-.1-1 0-.3 0-.7.1-1.1.1-.7.3-1.4.5-2 .3-.6.6-1.1.9-1.6s.8-.8 1.3-1.1c.5-.3 1-.4 1.5-.4.2 0 .4 0 .6.1.2.1.3.1.5.3.2.2.4.4.6.8.2.4.4.8.5 1.3h.4v.4l-1.7.3c-.2.1-.3.1-.4 0-.1 0-.1-.1-.2-.2v-.2h.4c.1-.1.2-.2.2-.4v-.5c0-.3-.1-.6-.3-.9l-.3-.3c-.1-.1-.2-.1-.4 0-.1 0-.3.1-.4.3-.1.2-.3.4-.4.6l-.3.6c-.1.2-.1.4-.1.5-.4 1.8-.5 3.6-.1 5.5.1.2.1.4.2.7l.3.6c.1.2.3.3.6.5.2.1.4.1.7.1.4-.1.7-.3 1-.7.2-.4.4-.8.5-1.2 0-.2.1-.4.1-.6v-.3h-.4c-.1 0-.1-.1-.1-.2s0-.2.1-.2h2.4v.2c-.5-.1-.5 0-.6.1z"/><path d="M83.5 14.2c.2-4.3.3-8.5.2-12.8h-1.8V.9.4c.7 0 1.3 0 2-.1.7 0 1.3 0 2-.1.8-.2 1.6-.2 2.4-.1.8.1 1.6.3 2.4.5.7.3 1.4.7 1.9 1.2s.9 1.1 1.1 1.8c.3 1.3.4 2.5.3 3.8 0 1.2-.2 2.4-.3 3.6 0 .4-.1.8-.2 1.2-.1.4-.3.8-.5 1.1-.3.5-.8 1-1.3 1.3-.5.3-1.1.5-1.7.6-.5.1-.9.2-1.4.1-.5 0-.9 0-1.4-.1h-4.9c-.2-.4-.1-.8.2-1.1.2-.2.3-.2.5-.3.2.3.4.3.5.4zm5.9-12.3c-.4-.3-.8-.5-1.3-.6-.5-.1-1-.1-1.5-.1-.3 4.5-.2 9.1.4 13.6.2 0 .4 0 .5-.1.2 0 .4-.1.6-.1.3-.1.6-.2.9-.4.3-.2.6-.4.8-.7.2-.3.4-.6.5-1s.2-.7.2-1.1c.4-2.1.4-4.2.2-6.3-.1-.6-.2-1.2-.4-1.9 0-.4-.4-.9-.9-1.3zM102.4 9.7c-.6-.1-1.3-.1-2 0s-1.4.4-2 .8l-.2-1.4.9-.1c0-.4-.1-.7-.1-1 0-.2-.1-.5-.1-.9-.3 0-.6.1-.9.1-.3 0-.6.1-1 .1-.2.7-.3 1.3-.4 1.8-.1.5-.2 1.1-.4 1.6l.2-.1.7.6c-.4.2-.8.6-1.2 1.1-.4.5-.7 1-.9 1.5l-.9-.5c0-.1.1-.2.2-.4s.2-.3.2-.4c.1-.2.2-.5.3-1 .1-.4.2-.9.4-1.3.1-.5.2-.9.3-1.3.1-.4.2-.7.2-.9l.3-1.2.3-1.2c.2-.7.3-1.4.4-2.1.1-.7.2-1.4.3-2.2h-.6l.1-.8 4-.1.1.8h-.2-.2c.1.7.2 1.4.3 2l.3 1.8.3 1.8c.1.6.2 1.3.4 2h.6l.3.9zm-3.6-3.6c-.1-.7-.2-1.3-.3-2-.1-.6-.3-1.3-.4-2-.1.6-.2 1.3-.4 2.1-.1.7-.3 1.5-.5 2.2l1.6-.3z"/><path d="M124.9 20.1c0-.3.1-.6.3-.8.2-.2.4-.3.7-.4.3-.1.5 0 .8.1.3.1.5.3.6.5.3.4.6.9.7 1.4.2.5.2 1 .2 1.5s-.1 1-.3 1.5c-.2.5-.4 1-.7 1.4-.6.9-1.4 1.6-2.4 2-1 .5-2 .7-3 .7-1.5 0-2.8-.3-3.9-1s-2.1-1.4-3-2.4c-.9-1-1.8-2.1-2.5-3.2-.8-1.2-1.5-2.3-2.3-3.5-1.1 1.2-2.4 2.2-3.9 3-1.5.8-3 1.1-4.5 1-1.1 0-2.1-.1-3-.5-.9-.3-1.6-.8-2.2-1.4-.6-.6-.9-1.3-1.1-2.2-.2-.8-.1-1.7.2-2.7.3-.9.7-1.6 1.3-2.2.6-.6 1.2-1.1 2-1.5.7-.4 1.5-.6 2.4-.7.8-.1 1.7 0 2.6.2v-5-4.6h-1.8V.8.3l3.7-.1c.8-.2 1.6-.2 2.4-.1.8.1 1.6.3 2.4.5.7.3 1.4.7 1.9 1.2s.9 1.1 1.1 1.8c.3 1.2.4 2.4.3 3.6-.1 1.2-.2 2.5-.4 3.7-.1 1-.4 2-.8 3-.5 1-1 2-1.7 2.9.3.4.6.8.8 1.2.3.4.5.8.8 1.2.5.8 1.1 1.6 1.7 2.5.6.8 1.3 1.6 2 2.4.7.7 1.5 1.3 2.4 1.8s1.8.7 2.9.8c1.1 0 2.1-.2 3-.7.9-.5 1.6-1.2 2.1-2.2.2-.4.3-.8.4-1.3.1-.5 0-.9-.1-1.3-.2.1-.4.2-.6.2-.2 0-.4 0-.6-.1-.2-.1-.4-.2-.5-.4s-.4-.5-.4-.8zm-22 .9c1.5-.4 2.8-1 3.7-1.8.9-.8 1.7-1.7 2.3-2.8-.2-.2-.3-.5-.6-.7-.6-.7-1.2-1.4-1.9-1.9 0 .6.1 1.2.1 1.8 0 .6.1 1.1.2 1.6v.1h-4.3c-.1-.2-.1-.4 0-.7 0-.2.1-.3.3-.5.3-.3.7-.4 1.1-.2l.1-3.5c-.5-.2-1-.3-1.5-.3s-1.1 0-1.6.1c-.6.1-1.1.3-1.6.6s-.9.7-1.3 1.1c-.4.4-.7.9-.9 1.5-.2.5-.3 1.1-.3 1.6 0 .7.2 1.3.6 1.8.4.5.9.9 1.4 1.4.2.2.5.3.8.5.3.1.7.2 1.1.3.4.1.8.1 1.2.1.3 0 .7 0 1.1-.1zm6.4-19.1c-.4-.3-.8-.5-1.2-.6-.5-.1-.9-.1-1.4-.1-.1 1.7-.2 3.4-.3 5.3-.1 1.9-.1 3.7 0 5.6.6.4 1.2.8 1.7 1.4.5.5 1 1.1 1.5 1.6.2-.6.4-1.2.6-1.9.2-.6.3-1.2.3-1.7.2-1.1.2-2.1.3-3.1 0-1 0-2.1-.1-3.1-.1-.6-.2-1.2-.4-1.9-.2-.6-.5-1.1-1-1.5z"/><path d="M116.5 1.2h-1.8V.4c.5 0 .9 0 1.2-.1s.7 0 1.1 0h1.1s.8 0 1.3-.1c.9 0 1.8 0 2.8-.1.9 0 1.8 0 2.8-.1v3.6h-1.3c-.1 0-.1-.1 0-.1.1-.2.1-.4.1-.6s0-.4-.1-.6l-.3-.6c-.1-.2-.2-.3-.4-.4-.2-.1-.4-.2-.6-.2h-.7c-.3 0-.5.1-.8.1-.3.1-.5.2-.6.4-.1.2-.1.3-.1.3v.3c0 .7-.1 1.3-.1 2 0 .6-.1 1.3-.1 1.9v1c.6-.2 1.2-.3 1.9-.4.6-.1 1.2-.3 1.9-.4 0 .1.1.2.1.3V7c0 .2-.1.3-.1.4-.1.1-.1.2-.1.3-.1.1-.2.1-.4.2-.1 0-.3.1-.4.1-.5.1-.9.2-1.4.3-.5.1-.9.1-1.4.2 0 1-.1 2-.2 2.9-.1 1-.1 1.9-.2 2.9.8.2 1.5.3 2 .1.6-.2 1.2-.5 1.9-1 .2-.1.2-.3.2-.5v-.7c0-.2.1-.5.2-.6.1-.2.3-.3.7-.4.4 0 .6.1.7.4.1.3.2.7.2 1.1 0 .5 0 .9-.1 1.4-.1.5-.1.9 0 1.2h-1.4c-.4 0-.8 0-1.2.1-.4 0-.8 0-1.2.1h-1.3c-.9 0-1.7 0-2.5.1-.7.1-1.6.1-2.4.1-.2-.2-.2-.4-.2-.7 0-.2.1-.5.3-.6.2-.2.3-.3.6-.3.2-.1.5 0 .7.1.1-2.1.2-4.3.1-6.5-.7-2.2-.7-4.3-.5-6.5z"/></g></svg>
        </a>
    </p>
</footer>
<script>
    var algolia_app_id      = '8BB87I11DE';
    var algolia_search_key  = '8e1d446d61fce359f69cd7c8b86a50de';
    var version             = '5.6';
</script>
<script id="search_empty_template" type="text/template">
    <div class="autocomplete-wrapper empty">
        {{--<div class="h2">We didn't find any result for "{{query}}". Sorry!</div>--}}
    </div>
</script>

<script id="search_footer_template" type="text/template">
    <div class="footer">
        <a target="_blank" href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
            <img width="105" src="/assets/homepage/img/algolia-logo.svg">
            <div style="clear: both"></div>
        </a>
    </div>
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{{--<script src="/assets/homepage/js/laravel-605edd931f.js"></script>--}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="/assets/js/homepage/viewport-units-buggyfill.js"></script>
<script src="/assets/custom-select/custom-select.js"></script>
<script>

$('.hackerthon-item').click(function(){
    var hackerthonId = $(this).attr('id');


    $('btn-hackerthons').html(hackerthonId);
    var hackerthon_name  =  $("#slct-hackerthons option:selected").text();

    var url = "{{url('hackerthon-posts')}}/"+hackerthonId;
    $.ajax({
        url: url,
        type: 'GET',
        success:function(response){

            response = JSON.parse(response)
            console.log(response);
             var html = "";
            var mainContent = "";

            var j = 0;
             $(response.categories).each(function(catIdx, catObj){
                 var collapseText = catObj.cat_name.replace(/\s/g, '');
                 html += "<ul class = 'list-unstyled'>"+
                     "<li>"+
                     "<h2 data-toggle='collapse' href='#"+collapseText+"'>"+catObj.cat_name+"</h2>";

                 $(response.posts).each(function(pstIndx, pstObj){
                     if(pstObj.cat_id == catObj.cat_id){
                         html += "<ul class='collapse list-unstyled' id='"+collapseText+"'  style='padding-left:15px;'>"+
                                     "<li><a class = 'pst-title' id = '"+pstObj.pst_id+"' >"+pstObj.pst_title+"</a></li>"+
                                 "</ul>";
                     }
                     console.log(pstObj);
                     if(j== 0){
                         mainContent += pstObj.pst_content;
                     }
                    j++;
                 })
                 html += "</li>"+
                        "</ul>";


             });


            $('.post-content').html(mainContent);
            $('.hackerthons').html(html)
           // console.log(data);
        }
    })
})

</script>
</body>
</html>
