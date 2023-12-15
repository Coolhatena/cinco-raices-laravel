<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link	href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
				rel="stylesheet" 
				integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
				crossorigin="anonymous">
		<title>Cinco raices</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
	</head>
	<body class="index-body">
		<x-header />
		<div style="background-image: url('img/banner.jpg')" class="banner" alt="banner">
			<div class="banner-content">
				<h1 class="text-center">Cinco Raices</h1>
				<p class="text-center">Cerveceria artesanal 100% ensenadense.</p>
			</div>
		</div>
		<div class="container mt-5">
			<div class="row row-cols-1 row-cols-md-2 g-4">
					@foreach ($posts as $post)
						<x-post-card :id="$post->id" :title="$post->title" :body="$post->body" :imgName="$post->img_name" />
					@endforeach
			</div>
		</div>
	</body>
</html>