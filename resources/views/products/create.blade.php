<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

	<h3 class="text-white font-weight-bold">Añadir Producto</h3>
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <x-input-label for="name" :value="__('Nombre del producto')" />
            <x-text-input id="name" class="block mt-1 w-full " type="text" name="name" required autofocus />
        </div>

        <div class="mt-4">
            <x-input-label for="body" :value="__('Costo unitario')" />
			<input type="number" class="form-control" id="unitary_cost" name="unitary_cost" step="0.01" required>
        </div>

		<div class="m-4">
			<x-input-label for="img_name" :value="__('Selecciona una imagen')" />
			<input type="file" class="form-control" id="img_name" name="img_name" accept="image/*">
		</div>

            <x-primary-button class="ms-3">
                {{ __('Añadir producto') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>