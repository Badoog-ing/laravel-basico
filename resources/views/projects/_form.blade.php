@csrf
<div class="container">
	<div class="form-group">
	    <label for="title">Titulo del proyecto</label>
	    <input class="form-control bg-light shadow-sm @error('title') is-invalid @else border-0 @enderror"
	    id="title" type="text" name="title" value="{{ old('title', $project->title) }}">
		@error('title')
			<spam class="invalid-feedback" role="alert">
				<strong> {{ $message }} </strong>
			</spam>
		@enderror
	</div>

	<div class="form-group">
	    <label for="url">Url del proyecto</label>
		<input class="form-control bg-light shadow-sm @error('url') is-invalid @else border-0 @enderror"
		id="url" type="text" name="url" value="{{ old('url', $project->url) }}">
		@error('url')
			<spam class="invalid-feedback" role="alert">
				<strong> {{ $message }} </strong>
			</spam>
		@enderror
	</div>

	<div class="form-group">
	    <label for="description">Descripcion del proyecto</label>
		<textarea class="form-control bg-light shadow-sm @error('description') is-invalid @else border-0 @enderror"
		id="description" name="description">{{ old('description', $project->description) }}</textarea>
		@error('description')
			<spam class="invalid-feedback" role="alert">
				<strong> {{ $message }} </strong>
			</spam>
		@enderror
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-lg btn-block">
			{{ $btnText }}
		</button>
	</div>
</div>