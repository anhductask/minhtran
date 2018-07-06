@extends('layouts.layout')
@section('content')
<div style="text-align:center; padding-top:100px">
    <h1 id="projectName"></h1>
    <p id="projectDescription"></p>
</div>
<div id="divImages" class="gg-box"></div>

@endsection

@section('header')
<link rel="stylesheet" href="{{URL::asset('Grid-Gallery-Lightbox/css/grid-gallery.css')}}" media="all">
@endsection

@section('scripts')
<script id="divTemplate" type="text/template">
    <div class="gg-element">
        <img src="${src}">
    </div>
</script>
<script type="text/javascript" src="{{URL::asset('Grid-Gallery-Lightbox/js/grid-gallery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/porfolio.js')}}"></script>
<script type="text/javascript">
    porfolio.init({
        projectId: {{config('app.project_id')}},
        apiKey: "{{config('app.api_key')}}"
    });
</script>
@endsection