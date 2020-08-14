<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home - The Book of life - The hacker's electronic jotter</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Khusela Mphokeli">
    <meta name="description" content="Hackers e-Jotter - The hacker's electronic jotter.">
    <link rel="stylesheet" href="assets/homepage/css/laravel-fb6d5c57db.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{--what you see is what you get--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
    <!-- Include Editor style. wysiswyg -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/css/froala_style.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7737514/7707592/css/fonts.css" />
    <link rel="apple-touch-icon" href="/favicon.png">

</head>-
<body class="docs language-php">
<div class="laracon-banner">
    ~~ Programming should be FUN, if it isn't fun then you're doing it wrong ~~

    <!--         Spark 6.0, the official SaaS starter-kit built on Laravel, is now available!
            <a href="https://spark.laravel.com">Get your copy today!</a> -->
</div>
<span class="overlay"></span>

<nav class="main">
    <a href="/" class="brand nav-block">
        <img src="{{ url('assets/images/logo.png') }}"  width="84.1" height="59" style="margin-top: -4px;">
        <span style="margin-left: 10px; color:#57b846" >The book of life</span>
    </a>
    <div class="search nav-block invisible">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#A1A1A1" d="M5.8 11.7c-1.6 0-3-.6-4.1-1.7S0 7.4 0 5.8s.6-3 1.7-4.1C2.8.6 4.3 0 5.8 0s3 .6 4.1 1.7c2.3 2.3 2.3 6 0 8.3-1 1.1-2.5 1.7-4.1 1.7zM5.8 1c-1.3 0-2.5.5-3.4 1.4C1.5 3.3 1 4.5 1 5.8s.5 2.5 1.4 3.4c.9.9 2.1 1.4 3.4 1.4s2.5-.5 3.4-1.4c1.9-1.9 1.9-5 0-6.9C8.4 1.5 7.1 1 5.8 1z"/><path fill="#A1A1A1" d="M15.5 16c-.1 0-.3 0-.3-.1L9.3 10c-.2-.2-.2-.5 0-.7s.5-.2.7 0l5.9 5.9c.2.2.2.5 0 .7-.1.1-.3.1-.4.1z"/></svg>
        <input placeholder="search" type="text" v-model="search" id="search-input" v-on:blur="reset" />
    </div>
    <ul class="main-nav" v-if="! search">
        <li class="nav-docs"><a href="/logout">Tapandsell docs</a></li>
        <li class="nav-laracasts"><a href="">General Notes</a></li>
        <li class="dropdown community-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Laravel notes <span class="caret"></span></a>
        </li>
    </ul>
    <div class="switcher">
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                Titanium Documentation
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation">
                    <a  href = "{{('logout')}}" role="menuitem" tabindex="-1" href="">Tapandsell Code Documentation</a>
                </li>
                <li role="presentation">
                    <a  href = "{{('logout')}}" role="menuitem" tabindex="-1" href="">General Notes</a>
                </li>
            </ul>
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
        <li class="nav-laracasts"><a href="">Laracasts</a></li>
        <li class="dropdown community-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ecosystem <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">

            </ul>
        </li>
    </ul>
    <div class="slide-docs-nav">
        <h2>Documentation</h2>
        <ul>
            <li>
                <h2>Prologue</h2>
                <ul>
                    <li><a href="/docs/5.6/releases">Release Notes</a></li>
                    <li><a href="/docs/5.6/upgrade">Upgrade Guide</a></li>
                    <li><a href="/docs/5.6/contributions">Contribution Guide</a></li>
                    <li><a href="/api/5.6">API Documentation</a></li>
                </ul>
            </li>
            <li>
                <h2>Getting Started</h2>
                <ul>
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

<div class="docs-wrapper main-container container" style="min-height: 400px; padding: 49px;">
    <div class="row">
        <div class="col-lg-12">
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" id="btn-hackerthons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hackerthons <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li data-toggle="modal" data-target="#addHackerthonModal"><a href="#">Add Hackerthon</a></li>
                </ul>
            </div>
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"  id = "btn-categories" aria-haspopup="true" aria-expanded="false">
                    Categories <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li data-toggle="modal" data-target="#addCategoryModal"><a href="#">Add Category</a></li>
                </ul>
            </div>
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" id = "btn-posts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Posts <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li data-toggle="modal"  data-target="#addPostModal"><a>Add Post</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
            <div class = "main-content col-lg-10" style="margin: 10px;">
            <table class="table table-striped" style="margin-top: 20px; table-layout: fixed; word-wrap: break-word;">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>delete</td>
                    <td>edit</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>delete</td>
                    <td>edit</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>delete</td>
                    <td>edit</td>
                </tr>
                </tbody>
            </table>
                <form class = "update-post-form" method="POST" name="update-post-form" style="display: none">
                    {{ csrf_field() }}
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="hackerthon">Hackerthon</label>
                            <select class="form-control" name="hackerthon" class = "category" id="slctPostHackerthon">
                                @foreach($hackerthons as $hackerthon)
                                    <option value="{{$hackerthon->hck_id}}">{{$hackerthon->hck_name}}</option>
                                @endforeach
                            </select>
                            <label for="category">Category</label>
                            <select class="form-control" name="category" id="slctPostCategory">
                                {{--@foreach($categories as $category)--}}
                                {{--<option value="{{$category->cat_id}}">{{$category->cat_name}}</option>--}}
                                {{--@endforeach--}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Title</label>
                            <input type="text" name="title" class="form-control" id="post_title" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Content</label>
                            <textarea class="form-control" name="content" id="postContent" rows="35"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
        </div>
    </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="editPost" tabindex="-1" role="dialog" aria-labelledby="editPost" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPostModal">Edit  Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  method="POST" name="update-post-form">
                {{ csrf_field() }}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="hackerthon">Hackerthon</label>
                        <select class="form-control" name="hackerthon" class = "category" id="slctPostHackerthon">
                            @foreach($hackerthons as $hackerthon)
                                <option value="{{$hackerthon->hck_id}}">{{$hackerthon->hck_name}}</option>
                            @endforeach
                        </select>
                        <label for="category">Category</label>
                        <select class="form-control" name="category" id="slctPostCategory">
                            {{--@foreach($categories as $category)--}}
                                {{--<option value="{{$category->cat_id}}">{{$category->cat_name}}</option>--}}
                            {{--@endforeach--}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text" name="title" class="form-control" id="post_title" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea class="form-control" name="content" id="postContentEdit" rows="35"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  action="{{ url('create-category') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" name="hackerthon" id="category">
                            @foreach($hackerthons as $hackerthon)
                                <option value="{{$hackerthon->hck_id}}">{{$hackerthon->hck_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Category</label>
                        <input type="text" name = "category" class="form-control" id="" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="type" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addHackerthonModal" tabindex="-1" role="dialog" aria-labelledby="addHackerthonModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addHackerthonModal">Add Hackerthon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('create-hackerthon') }}" method = "Post">
                {{ csrf_field() }}
                <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Hackerthon</label>
                            <input type="text" name="hackerthon" class="form-control" id="" placeholder="">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal"  id="addPostModal" tabindex="-1" role="dialog" aria-labelledby="addTextModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  action="{{ url('create-post') }}" method="POST">
                {{ csrf_field() }}
            <div class="modal-body">

                    <div class="form-group">
                        <label for="hackerthon">Hackerthon</label>
                        <select class="form-control" name="hackerthon" class = "category" id="hackerthon">
                            @foreach($hackerthons as $hackerthon)
                                <option value="{{$hackerthon->hck_id}}">{{$hackerthon->hck_name}}</option>
                            @endforeach
                        </select>
                        <label for="category">Category</label>
                        <select class="form-control" name="category" id="category">
                            {{--@foreach($categories as $category)--}}
                                {{--<option value="{{$category->cat_id}}">{{$category->cat_name}}</option>--}}
                            {{--@endforeach--}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text" name="title" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea class="form-control" name="content" id="postContent" rows="35"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/js/froala_editor.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.9.5/js/plugins/image_manager.min.js"></script>

<!-- Initialize the editor. -->
<script>
    $(function() {
      
        var base_url = "<?php echo  env('APP_URL'); ?>";
        $('textarea').froalaEditor({
            toolbarButtons: ['bold', 'italic', 'underline', 'color',
                'fontFamily', 'formatUL', 'formatOL', 'fontSize', 'insertImage',
                'image', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'html', 'outdent', 'insertLink', 'indent', '|', 'undo', 'redo'],
            // Set the image upload parameter.
            imageUploadParam: 'image_param[]',


            // Set the image upload URL.
            imageUploadURL: base_url+'upload_friola_image',

            // Additional upload params.
            imageUploadParams: {id: 'my_editor', _token: "{{ csrf_token() }}"},

            // Set request type.
            imageUploadMethod: 'POST',

            // Set max image size to 5MB.
            imageMaxSize: 5 * 1024 * 1024,

            // Allow to upload PNG and JPG.
            imageAllowedTypes: ['jpeg', 'jpg', 'png']


        }).on('froalaEditor.image.beforeUpload', function (e, editor, images) {
            // Return false if you want to stop the image upload.
            alert('Return false if you want to stop the image upload.');

        })
            .on('froalaEditor.image.uploaded', function (e, editor, response) {
                // Image was uploaded to the server.
                alert('Image was uploaded to the server.');
            })
            .on('froalaEditor.image.inserted', function (e, editor, $img, response) {
                // Image was inserted in the editor.
                alert('image was inserted in the editor.');
            })
            .on('froalaEditor.image.replaced', function (e, editor, $img, response) {
                // Image was replaced in the editor.

            })
            .on('froalaEditor.image.error', function (e, editor, error, response) {
                // Bad link.
                if (error.code == 1) {
                    alert('bad link');
                }

                // No link in upload response.
                else if (error.code == 2) {
                    alert('no link in upload resnponse');
                }

                // Error during image upload.
                else if (error.code == 3) {
                    alert('error during image upload');
                }

                // Parsing response failed.
                else if (error.code == 4) {
                    alert('parsing response failed');
                }

                // Image too text-large.
                else if (error.code == 5) {
                    alert('Image too text-large.');
                }

                // Invalid image type.
                else if (error.code == 6) {
                    alert('invalid image type');
                }

                // Image can be uploaded only to same domain in IE 8 and IE 9.
                else if (error.code == 7) {
                    alert('Image can be uploaded only to same domain in IE 8 and IE 9.');
                }



            })
    });

</script>
<script>

    $('#hackerthon').change(function(){
        var hackerthonId = $(this).val();
        var path = "{{ url('category') }}/"+hackerthonId;
        $.ajax({
            url: path,
            type: 'get',
            success:function(data){
                data = JSON.parse(data);
                var options = "";
                for(var i = 0; i < data.length; i++){
                     options += "<option value='"+data[i].cat_id+"'>"+data[i].cat_name+"</option>";
                }
                $('#addPostModal').find('#category').html(options);
            }
        });
    })

    $('#slctPostHackerthon').change(function(){
        var hackerthonId = $(this).val();
        populateCategorySelectBox(hackerthonId);
    });

    function populateCategorySelectBox(hackerthonId){
        var path = "{{ url('category') }}/"+hackerthonId;
        $.ajax({
            url: path,
            type: 'get',
            success:function(data){
                data = JSON.parse(data);
                var options = "";
                for(var i = 0; i < data.length; i++){
                    options += "<option value='"+data[i].cat_id+"'>"+data[i].cat_name+"</option>";
                }
                $('#slctPostCategory').html(options);
            }
        });
    }

    $('#btn-hackerthons').click(function(){
        var path = "{{ url('hackerthons') }}";
        $.ajax({
            url: path,
            type: 'get',
            success:function(data){
                data = JSON.parse(data);
                var tableData = "";
            var tableHeader = "<tr>"
                                +"<th scope='col'>Hackerthon</th>"
                               +"</tr>";
                for(var i = 0; i < data.length; i++){
                    tableData +=    "<tr><td>"+data[i].hck_name+"</td>"+
                                          "<td data-toggle='modal edit-post'  id = '"+data[i].pst_id+"' data-target='#editPost'>edit</td>"+
                                          "<td>delete</td>"+
                                     "</tr>";
                }
                $('.table').find('thead').html(tableHeader)
                $('.table').find('tbody').html(tableData);
            }
        });
    })

    //can't access the edit post class directly coz it's generated by ajax.
    $('.main-container').on('click', '.edit-post', function(){
        $('.table').hide();
        $('.update-post-form').fadeIn(2000).show();
        var id = $(this).attr('id');

       // alert("post id: "+ id);
        var path = "{{url('post')}}/"+id;
        $.ajax({
            url:path,
            type:'GET',
            success: function(response){

                response = JSON.parse(response);
                console.log(response);
                $('#post_title').val(response.posts[0]['pst_title']);
                $('#slctPostCategory').html(response.categories_options);
               $('#slctPostHackerthon').html(response.hackerthons_options);
                $(".fr-view").html(response.posts[0]['pst_content'])

                $('form[name="update-post-form"]').attr("action", "{{ url('update-post') }}/"+id)


               // alert(response.posts[0]['pst_content']);
                     // alert(response.posts[pst_id]);
                   // selectPostHackerthon(response[i].hck_id);
                    //teCategorySelectBox(response[i].hck_id);
                    //selectPostCategory(response[i].cat_id)


               // alert(response);
            }
        })
    });


    $('#btn-categories').click(function(){
        var path = "{{ url('categories') }}";
        $.ajax({
            url: path,
            type: 'get',
            success:function(data){
                data = JSON.parse(data);
                var tableData = "";
                var tableHeader = "<tr>"+
                    "<th scope='col'>Category Name</th>"+
                    "</tr>";
                for(var i = 0; i < data.length; i++){
                    tableData += "<tr><td>"+data[i].cat_name+"</td>"+
                        "<td data-toggle='modal' data-target='#editPost'>edit</td>"+
                        "<td>delete</td>"+
                        "</tr>";
                }
                $('.table').find('thead').html(tableHeader)
                $('.table').find('tbody').html(tableData);
            }
        });
    })

    $('#btn-categories').click(function(){
        var path = "{{ url('categories') }}";
        $.ajax({
            url: path,
            type: 'get',
            success:function(data){
                data = JSON.parse(data);
                var tableData = "";
                var tableHeader = "<tr>"+
                    "<th scope='col'>Category Name</th>"+
                    "</tr>";
                for(var i = 0; i < data.length; i++){
                    tableData += "<tr><td>"+data[i].cat_name+"</td>"+
                        "<td data-toggle='modal edit-post'  id = '"+data[i].pst_id+"' data-target='#editPost'>edit</td>"+
                        "<td>delete</td>"+
                        "</tr>";
                }
                $('.table').find('thead').html(tableHeader)
                $('.table').find('tbody').html(tableData);
            }
        });
    })

    $('#btn-posts').click(function(){
        $('.table').fadeIn(2000).show();
        $('.update-post-form').hide();
        var path = "{{ url('posts') }}";
        $.ajax({
            url: path,
            type: 'get',
            success:function(data){
                data = JSON.parse(data);
                var tableData = "";
                var tableHeader = "<tr>"+
                                    "<th scope='col'>Title</th>"+
                                    "<th scope='col'>Catent</th>"+
                                    "<th scope='col'>Hackerthon</th>"+
                                    "<th scope='col'>Category</th>"+
                                  "</tr>";
                for(var i = 0; i < data.length; i++){
                    tableData += "<tr><td>"+data[i].pst_title+"</td>"+
                                    "<td>"+data[i].hck_name+"</td>"+
                                    "<td>"+data[i].cat_name+"</td>"+
                                    "<td class= 'edit-post'  id = '"+data[i].pst_id+"'>edit</td>"+
                                    "<td>delete</td>"+
                                 "</tr>";
                }
                $('.table').find('thead').html(tableHeader)
                $('.table').find('tbody').html(tableData);
            }
        });
    })

</script>

</body>
</html>
