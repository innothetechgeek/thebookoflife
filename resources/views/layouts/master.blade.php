<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home - The Book of life - The hacker's electronic jotter</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Khusela Mphokeli">
    <meta name="description" content="Hackers e-Jotter - The hacker's electronic jotter.">
    <meta name="keywords" content="jotter, programming notes, php, code snippets">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{url('assets/homepage/css/laravel-fb6d5c57db.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets/custom-select/custom-select.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/style.cs')}}s"/>
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="icon" type="image/png" href="assets/images/fav_icons/favicon.png"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
    <script src="{{url('assets/bootstrap/js/popper.min.js')}}"></script>
    <link rel="stylesheet" href="{{url('assets/highlight/styles/atelier-forest-light.css')}}">
    <script src="{{url('assets/highlight/highlight.pack.js')}}"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>

</head>
<body class="docs language-php">
<div class="cloud" style="height:10px;background: url({{url('/assets/images/cloud.jpg')}}) repeat-x #fff;">

</div>
<div class="laracon-banner" style="position:sticky;top: 0; z-index: 2000">

</div>
<span class="overlay"></span>
<nav class="main">
    <a href=""  style="text-decoration: none;" class="brand nav-block">
        <img src="{{ url('assets/images/logo.png') }}"  width="84.1" height="59" style="margin-top: -4px;">
        <span style="margin-left: 10px; color:#57b846" >The book of life</span>
    </a>
    <div class="search nav-block">
        <span  style="position: relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#A1A1A1" d="M5.8 11.7c-1.6 0-3-.6-4.1-1.7S0 7.4 0 5.8s.6-3 1.7-4.1C2.8.6 4.3 0 5.8 0s3 .6 4.1 1.7c2.3 2.3 2.3 6 0 8.3-1 1.1-2.5 1.7-4.1 1.7zM5.8 1c-1.3 0-2.5.5-3.4 1.4C1.5 3.3 1 4.5 1 5.8s.5 2.5 1.4 3.4c.9.9 2.1 1.4 3.4 1.4s2.5-.5 3.4-1.4c1.9-1.9 1.9-5 0-6.9C8.4 1.5 7.1 1 5.8 1z"></path><path fill="#A1A1A1" d="M15.5 16c-.1 0-.3 0-.3-.1L9.3 10c-.2-.2-.2-.5 0-.7s.5-.2.7 0l5.9 5.9c.2.2.2.5 0 .7-.1.1-.3.1-.4.1z"></path></svg>
            <input placeholder="search" style="border:none" type="text" id="search-input" class="tt-input" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;">
            <span id="suggesstion-box" style="position: absolute;display: none;">
            </span>
        </span>
    </div>
    <ul class="main-nav" v-if="! search">
        <li class="nav-docs"><a href="/logout">Tapandsell docs</a></li>
        <li class="nav-laracasts"><a href="">General Notes</a></li>
        <li class="dropdown community-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Laravel notes <span class="caret"></span></a>
        </li>
    </ul>
    <div class="switcher">
        <div class="btn-group">
            <button type="button" style="width:215px;" class="btn dropdown-toggle btn-hackerthons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        if(!Auth::user()->is_admin){
                            $logout = "/logout";
                            $id = "";
                        }
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
@yield('content')
<footer class="main">
    <ul>
        <li class="nav-docs"><a href="/logout">Tapandsell Code Docs</a></li>
        <li class="nav-laracasts"><a href="">General Notes</a></li>
        <li class="nav-laravel-news"><a href="">LE Framework notes</a></li>
        <li class="nav-partners"><a href="">LE tasks docs</a></li>
        <li class="nav-forge"><a href="">Laravel Notes</a></li>

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
@yield('scripts')
</body>
</html>
