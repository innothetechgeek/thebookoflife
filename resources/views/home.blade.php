@extends('layouts.master')
@section('content')
<nav id="slide-menu" class="slide-menu" role="navigation">
    <div class="brand">
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

    </div>
</nav>

<div class="docs-wrapper container">
    <section class="sidebar">
        <script async type="text/javascript" src="" id="_carbonads_js"></script>
        <small><a href="#" id="doc-expand" style="font-size: 11px; color: #B8B8B8;">Expand All</a></small>
        <div class = "hackerthons">
            <ul class ="list-unstyled">
                <li>
                    <h2 data-toggle="collapse" href="#collapseCategories">Getting Started</h2>
                    <ul  class="collapse list-unstyled" id = "collapseCategories"  style="padding-left:15px;">
                        <li><a href="">Installation</a></li>
                        <li><a href="">Configuration</a></li>
                        <li><a href="">Directory Structure</a></li>
                        <li><a href="">Homestead</a></li>
                        <li><a href="">Valet</a></li>
                        <li><a href="">Deployment</a></li>
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
                                    <?php
                                     $slug = $post->pst_slug;
                                     $cat_id = $post->cat_id;
                                    ?>
                                    <li><a class="post-title" href="{{url('chapter/'.$cat_id."/".$slug)}}" id = "{{$post->pst_id}}">{{$post->pst_title}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            @endforeach
        </div>
    </section>
    <article class = "post-content">
         <div>
             <h1 style="color:#525252;font-size: 48px;font-weight:200; margin: .67em 0;"> {{ $post_content[0]->pst_title }} </h1>
             {!!  $post_content[0]->pst_content !!}
         </div>
    </article>
</div>
@endsection
@section('scripts')
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
        <a target="_blank" href="">
            <img width="105" src="/assets/homepage/img/algolia-logo.svg">
            <div style="clear: both"></div>
        </a>
    </div>
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="/assets/js/homepage/viewport-units-buggyfill.js"></script>
<script src="/assets/custom-select/custom-select.js"></script>
<script>

    var motivationalQuoates = ["Without requirements or design," +
    " programming is the art of adding bugs to an empty text file",
        "There are two ways to write error-free programs; only the third one works",
        "A good programmer is someone who always looks both ways before crossing a one-way street.",
        "When the only tool you have is a hammer, everything you see becomes a nail.",
        "Blame doesn’t fix bugs",
        "if it's taking you too long to get it to work, you're doing it wrong.",
        "Hack Hack, and hack until Jesus comes back to earth.",
        "if at first you don’t succeed; call it version 1.0",
        "If Internet Explorer is brave enough to ask to be your default browser, You are brave enough to ask that girl out.",
        "Don't go where the path may lead, go instead where there's no path and leave a trail.",
        "If Internet Explorer is brave enough to ask to be your default browser, You are brave enough to ask that girl out.",
        "If Internet Explorer is brave enough to ask to be your default browser, You are brave enough to ask that girl out."];

    $('document').ready(function(){
        var index = Math.floor((Math.random() * motivationalQuoates.length) + 1);
        $('.laracon-banner').hide().fadeIn(3000).html('~~ '+motivationalQuoates[index]+' ~~ ');
    });

    function displayMotivationalQuote(){

        var index = Math.floor((Math.random() * motivationalQuoates.length) + 1);

        $('.laracon-banner').hide().fadeIn(3000).html('~~ '+motivationalQuoates[index]+' ~~ ');
    }
    setInterval("displayMotivationalQuote();",20000);

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

                         var url = '{{ url("chapter") }}';

                         url = url+"/"+pstObj.cat_id+"/"+pstObj.pst_slug;
                         html += "<ul class='collapse list-unstyled' id='"+collapseText+"'  style='padding-left:15px;'>"+
                                     "<li><a  href='"+url+"'  class = 'post-title' id = '"+pstObj.pst_id+"' >"+pstObj.pst_title+"</a></li>"+
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

$('.post-title a').click(function(){
    alert($(this).val());
});

$("#search-input").keyup(function(){
    //alert('yes yes');
    var keyword = $(this).val();
    var url = "{{url('autocomplete')}}"+"/"+keyword;
    $.ajax({
        type: "GET",
        url: url,
        beforeSend: function(){
            $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
            $("#suggesstion-box").show();
            $("#suggesstion-box").html(data);
            $("#search-box").css("background","#FFF");
        }
    });
});

$('body').click(function () {
    //alert('hello');
    $('#suggesstion-box').hide();
})



</script>
@endsection

