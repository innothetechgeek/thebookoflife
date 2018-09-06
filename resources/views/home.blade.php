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
    <article class = "post-content" style="padding-top:65px;">
         <div>{!!$posts[0]->pst_content !!}</div>
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
        <a target="_blank" href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
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
@endsection

