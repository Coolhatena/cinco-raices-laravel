<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

	<h3 class="text-white font-weight-bold">Editar Post</h3>
    <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
		@method('PUT')
        <!-- Email Address -->
        <div>
            <x-input-label for="title" :value="__('Titulo')" />
            <x-text-input id="title" class="block mt-1 w-full " type="title" name="title" :value="$post->title" required autofocus />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="body" :value="__('Contenido')" />
            <textarea class="form-control" id="body" name="body" required>{{ $post->body }}</textarea>
        </div>

		<div class="m-4">
			<x-input-label for="img_name" :value="__('Selecciona una imagen')" />
			<input type="file" class="form-control" id="img_name" name="img_name" accept="image/*">
		</div>

            <x-primary-button class="ms-3">
                {{ __('Actualizar Post') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>