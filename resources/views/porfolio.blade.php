@extends('layouts.layout')
@section('content')

<div id="divImages" class="gg-box" style="margin-top:100px"></div>

@endsection

@section('header')
<link rel="stylesheet" href="{{URL::asset('Grid-Gallery-Lightbox/css/grid-gallery.css')}}" media="all">
<style type="text/css">
    .img-caption{
        position:absolute; 
        width:100%;
        text-align:center;
        font-size; 
        z-index:9999;
        font-size:42px;
        font-weight:strong;
        padding-top:10px;
        background-color:grey;
        background: rgba(241, 241, 241, 0.3);
        height:42px;
    }
   
    .gg-element{
        position:relative
    }
</style>
@endsection

@section('scripts')
<script id="divTemplate" type="text/template">
    <div class="gg-element">
        <div class="img-caption">
            <span>${name}</span>
        </div>
        <a href="${short_url}"><img src="${covers.original}"></a>
    </div>
</script>
<script type="text/javascript" src="{{URL::asset('js/be.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('Grid-Gallery-Lightbox/js/grid-gallery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/porfolio.js?v=1.0')}}"></script>
<script type="text/javascript">
    porfolio.init({
        projectId: {{config('app.project_id')}},
        apiKey: "{{config('app.api_key')}}"
    });
</script>
@endsection