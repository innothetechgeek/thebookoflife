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
        <div id="carbonads"><span><span class="carbon-wrap"><a href="//srv.carbonads.net/ads/click/x/GTND42QICYBI427MFTY4YKQMCKSDV237F6ADEZ3JCW7IK2JNF67I4KQKC6BIC2JWF6ADTK3EHJNCLSIZ?segment=placement:laravelcom;" class="carbon-img" target="_blank" rel="noopener"><img src="https://cdn4.buysellads.net/uu/1/8026/1533151640-board_timeline_yellow.png" alt="" border="0" height="100" width="130" style="max-width: 130px;"></a><a href="//srv.carbonads.net/ads/click/x/GTND42QICYBI427MFTY4YKQMCKSDV237F6ADEZ3JCW7IK2JNF67I4KQKC6BIC2JWF6ADTK3EHJNCLSIZ?segment=placement:laravelcom;" class="carbon-text" target="_blank" rel="noopener">The new generation of project management tools is here and it’s visual.</a></span><a href="http://carbonads.net/?utm_source=laravelcom&amp;utm_medium=ad_via_link&amp;utm_campaign=in_unit&amp;utm_term=carbon" class="carbon-poweredby" target="_blank" rel="noopener">ads via Carbon</a><img src="https://ad.doubleclick.net/ddm/trackimp/N728909.734586CARBONADS.NET/B20652854.212994676;dc_trk_aid=414618443;dc_trk_cid=104370342;ord=153650129;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?" border="0" height="1" width="1" style="display: none;"></span></div>
        <script async type="text/javascript" src="" id="_carbonads_js"></script>
        <small><a href="#" id="doc-expand" style="font-size: 11px; color: #B8B8B8;">Expand All</a></small>
        <div class = "hackerthons">
            @foreach($categories as $cat)
                <ul class ="list-unstyled">
                    <li>
                        <h2 id = "cat_{{$cat->cat_name}}" data-toggle="collapse" href="#{{str_replace(' ','',$cat->cat_name)}}">{{$cat->cat_name}}</h2>
                        <?php if($cat->cat_nr_of_posts < 1){ ?>
                          <style media="screen">
                            #cat_{{$cat->cat_name}}:after{
                              content:none;
                            }
                          </style>
                          <?php } ?>

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
           <?php if(count($post_content) > 0){ ?>
             <h1> {{ $post_content[0]->pst_title }} </h1>
             {!!  $post_content[0]->pst_content !!}
           <?php } ?>
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
<script src="url('assets/js/homepage/viewport-units-buggyfill.js')}}"></script>
<script src="{{ url('assets/custom-select/custom-select.js') }}"></script>
<script src="{{ url('assets/overlayplugin/assets/js/jquery.loading.block.js') }}"></script>
<script>

    var motivationalQuoates = ["Without planning or design," +
    " programming is the art of adding bugs to an empty text file",
        "There are two ways to write error-free programs; only the third one works",
        "A good programmer is someone who always looks both ways before crossing a one-way street.",
        "When the only tool you have is a hammer, everything you see becomes a nail.",
        "Blame doesn’t fix bugs",
        "First, solve the problem. Then, write the code",
        "Experience is the name everyone gives to their mistakes.",
        "Ruby is rubbish! PHP is phpantastic!",
        "Any fool can write code that a computer can understand. Good programmers write code that humans can understand.",
        "Code never lies; comments sometimes do.",
        "if it's taking you too long to get it to work, you're doing it wrong.",
        "Hack Hack, and hack until Jesus comes back to earth.",
        "if at first you don’t succeed; call it version 1.0",
        "If Internet Explorer is brave enough to ask to be your default browser, You are brave enough to ask that girl out.",
        "Don't go where the path may lead, go instead where there's no path and leave a trail.",
        "If Internet Explorer is brave enough to ask to be your default browser, You are brave enough to ask that girl out.",
        "If Internet Explorer is brave enough to ask to be your default browser, You are brave enough to ask that girl out."];

    $('document').ready(function(){

        var index = Math.floor((Math.random() * motivationalQuoates.length-1) + 1);
        $('.laracon-banner').hide().fadeIn(3000).html('~~ '+motivationalQuoates[index]+' ~~ ');
    });

    function displayMotivationalQuote(){

        var index = Math.floor((Math.random() * motivationalQuoates.length-1) + 1);

        $('.laracon-banner').hide().fadeIn(3000).html('~~ '+motivationalQuoates[index]+' ~~ ');
    }
    setInterval("displayMotivationalQuote();",20000);

$('.hackerthon-item').click(function(){
    var hackerthonId = $(this).attr('id');
    var hackerthon = $(this).text();
    $('.btn-hackerthons').text(hackerthon);

    $('btn-hackerthons').html(hackerthonId);
    var hackerthon_name  =  $("#slct-hackerthons option:selected").text();

    var url = "{{url('hackerthon-posts')}}/"+hackerthonId;
    $.ajax({
        url: url,
        type: 'GET',
        beforeSend:function () {
            showloadingBlock();
        },
        success:function(response){

            response = JSON.parse(response)
             var html = "";
            var mainContent = "";

            var j = 0;
             $(response.categories).each(function(catIdx, catObj){
                 var collapseText = catObj.cat_name.replace(/\s/g, '');
                 html += "<ul class = 'list-unstyled'>"+
                     "<li>"+
                     "<h2  id = 'cat_"+collapseText+"' data-toggle='collapse' href='#"+collapseText+"'>"+catObj.cat_name+"</h2>";
                     console.log(catObj.cat_nr_of_posts);
                     if(catObj.cat_nr_of_posts < 1){
                       html += "<style>"+
                           "#cat_"+collapseText+":after{"+
                           "content:none;"+
                           "}</style>"
                     }

                 $(response.posts).each(function(pstIndx, pstObj){
                     if(pstObj.cat_id == catObj.cat_id){

                         var url = '{{ url("chapter") }}';
                         console.log(pstObj.pst_content);

                         url = url+"/"+pstObj.cat_id+"/"+pstObj.pst_slug;
                         html += "<ul class='collapse list-unstyled' id='"+collapseText+"'  style='padding-left:15px;'>";
                                if(pstObj.pst_title !== null){
                                     html += "<li><a  href='"+url+"'  class = 'post-title' id = '"+pstObj.pst_id+"' >"+pstObj.pst_title+"</a></li>";
                                   }
                                  html += "</ul>";

                                 console.log(pstObj.pst_title);

                       if(pstObj.pst_title !== null && pstObj.pst_content !==  null){
                            mainContent += '<h1>'+pstObj.pst_title+'</h1><div class ="#content"><div>'+pstObj.pst_content+'<div></div>';
                       }

                     }

                    j++;

                 })
                 html += "</li>"+
                        "</ul>";


             });
            setTimeout(function () {
                $('.post-content').hide().fadeIn(3000).html(mainContent);
                $('.hackerthons').hide().fadeIn(3000).html(html)

                if($('code').get(0)){
                    hljs.highlightBlock($('code').get(0));
                }
                $.loadingBlockHide();
            }, 2000);


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

function showloadingBlock() {

        $.loadingBlockShow({
            imgPath: "{{url('assets/overlayplugin/assets/img/default.svg')}}",
            text: 'Loading ...',
            style: {
                position: 'fixed',
                width: '100%',
                height: '100%',
                background: 'rgba(251, 251, 251, 0.8)',
                left: 0,
                top: 0,
                zIndex: 10000
            }
        });

        //setTimeout($.loadingBlockHide, 5000);
}


$(window).on('load', function(){
  setTimeout(function(){
    $(".loader").fadeOut("slow");
  }, 2000);
});

</script>
@endsection
