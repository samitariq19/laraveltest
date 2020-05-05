@extends('newlayout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			@foreach($articles as $article)
			<div class="title">
				<h2>{{ $article->title }}</h2>
			</div>
			<p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
			<p>{{ $article->excerpt }}</p>
			@endforeach
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
@endsection