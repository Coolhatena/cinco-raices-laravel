<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

	<h3 class="text-white font-weight-bold">Editar Producto</h3>
    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
		@method('PUT')
        <div>
            <x-input-label for="name" :value="__('Nombre del producto')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$product->name" required autofocus />
        </div>

        <div class="mt-4">
            <x-input-label for="body" :value="__('Costo unitario')" />
			<input type="number" class="form-control" id="unitary_cost" name="unitary_cost" step="0.01" value={{ $product->unitary_cost }} required>
        </div>

		<div class="m-4">
			<x-input-label for="img_name" :value="__('Selecciona una imagen')" />
			<input type="file" class="form-control" id="img_name" name="img_name" accept="image/*">
		</div>

            <x-primary-button class="ms-3">
                {{ __('Editar producto') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>