<div class="mb-3">
	<div class="col-sm">
        <div class="card">
            <div class="col">
				<div class="card">
				<div style="background-image: url('storage/img/posts/{{ $imgName }}')" class="card-img" alt="card img"></div>
				<!-- <img src="/img/posts/{{ $imgName }}" class="card-img-top card-img"
					alt="Hollywood Sign on The Hill" /> -->
				<div class="card-body">
					<h5 class="card-title">{{ $title }}</h5>
					<p class="card-text">{{ $body }}</p>
				</div>
				</div>
			</div>
			@auth
				<div class="card-footer">
					<div class="row">
						<div class="col-sm d-flex flex-row justify-content-between">
							<a href="{{ route('posts.edit', $id) }}" class="btn btn-primary btn-sm">Edit</a>
							<form action="{{ route('posts.destroy', $id) }}" method="post">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger btn-sm">Delete</button>
							</form>
						</div>
					</div>
				</div>
			@endif
        </div>
    </div>
</div>