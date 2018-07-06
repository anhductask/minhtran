<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<title>Soul RGB Studio</title>
		<meta name="Description" content="We are creatives. Artists with an obsession for details and a great passion for our craft. We challenge the industry by delivering photorealistic 3D visualisations of the highest grade. For us, it's all about your image." />

		<link rel="apple-touch-icon" sizes="180x180" href="http://illusiveimages.com/content/templates/ii_illusive_images/css/images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="http://soulrgb.com/wp-content/themes/Divi/images/favicon.png">
		<link rel="icon" type="image/png" sizes="16x16" href="http://soulrgb.com/wp-content/themes/Divi/images/favicon.png">
		<link rel="manifest" href="http://illusiveimages.com/content/templates/ii_illusive_images/css/images/favicon/site.webmanifest">
		<link rel="mask-icon" href="http://soulrgb.com/wp-content/themes/Divi/images/favicon.png" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
		<![endif]-->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117910663-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-117910663-1');
		</script> 
		<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" media="all">
		<link rel="stylesheet" href="{{URL::asset('css/site.css')}}" media="all">

		@yield('header')
    </head>
    <body id="vanlig-sida" class="start temp-vanlig-sida aurel_drag_protection">
			@include('layouts.header')
			<div id="wrap">
				<main>
					@yield('content')
				</main>
			</div>
      

		<article id="wa-ajax-slider">
			<div id="wa-ajax-slider-flow">
				<div id="wa-ajax-slider-content"></div>
			</div>
			<div id="wa-ajax-slider-bg"></div>
		</article>

		<script>
			var root_url = "http://illusiveimages.com/";
			var template_url2 = "http://illusiveimages.com/content/templates/ii_illusive_images/";
		</script>
		<script async src="http://cdn.rawgit.com/scottjehl/picturefill/3.0.2/dist/picturefill.min.js"></script>
		<script type="text/javascript" src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
		<script>window.jQuery || document.write('<script src="http://illusiveimages.com/content/templates/ii_illusive_images/js/jquery.js"><\/script>')</script>


		<script type="text/javascript" src="{{URL::asset('js/functions.180425.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('js/jquery.tmpl.min.js')}}"></script>

		@yield('scripts')
    </body>
</html>