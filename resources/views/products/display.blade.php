<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Cinco Raices</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
	</head>
	<body>
		<x-header />
			<div class="container mt-5">
				<div class="w-100 row row-cols-1 row-cols-md-2 g-4">
					@foreach ($products as $product)
						<x-product-card :id="$product->id" :name="$product->name" :unitaryCost="$product->unitary_cost" :imgName="$product->img_name" />
					@endforeach
				</div>
			</div>
		</div>
	</body>
</html>