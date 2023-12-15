<div>
	<nav class="navbar navbar-expand-lg navbar-light nav-background">
    	<div class="container-fluid d-flex">
			<a href={{ route('posts.index') }}>
				<img src="img/nav-logo.jpeg" alt="logo" class="nav-logo">
			</a>
			<div class="d-flex justify-end">
				<div class="col d-inline-block justify-content-center align-content-center" style="height: 100%;">
					<a class="service-button" href="https://queresto.com/cincoraicescerveceria?mibextid=Jwwqyc">Menu</a>
					<a class="service-button" href={{ route('products.ecommerce') }}>Tienda</a>
					@auth
						<div class="dropdown">
						<a class="service-button">Bienvenido, {{ auth()->user()->name }}</a>
							<div class="dropdown-content">
								<a href={{ route('posts.create') }}>Crear post</a>
								<a href={{ route('products.create') }}>Añadir producto</a>
								<!-- <a href={{ route('products.show') }}>Ver compras</a> -->
								<a href="#" id="logout">Cerrar sesion</a>
							</div>
						</div>					
					@else	
						<a class="btn-sm btn-log-options nav-button btn" href={{ route('register') }}>Registrarse</a>
						<a class="btn-sm btn-log-options nav-button btn" href={{ route('login') }}>Iniciar sesion</a>
					@endif
				</div>
			</div>
		</div>
	</nav>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var logoutLink = document.getElementById('logout');

			if (logoutLink) {
				logoutLink.addEventListener('click', function(event) {
					event.preventDefault();
					var logoutForm = document.createElement('form');
					logoutForm.action = "{{ route('logout') }}";
					logoutForm.method = 'POST';
					document.body.appendChild(logoutForm);

					var csrfInput = document.createElement('input');
					csrfInput.type = 'hidden';
					csrfInput.name = '_token';
					csrfInput.value = "{{ csrf_token() }}";
					logoutForm.appendChild(csrfInput);

					logoutForm.submit();
				});
			}
		});
	</script>
</div>