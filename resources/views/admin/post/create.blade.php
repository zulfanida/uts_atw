@extends('template_backend.home')
@section('sub-judul', 'Tambah Post')
@section('content')

	@if(count($errors)>0)
		@foreach($errors->all() as $error)
		<div class="alert alert-danger" role="alert">
  			{{ $error }}
		</div>	
		@endforeach
	@endif

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
  			{{ Session('success') }}
		</div>
		
	@endif

<form action="{{ route('post.store') }}" method="POST" enctype="multipart/from-data">
@csrf
<div class="form-group">
	<label>Judul</label>
	<input type="text" name="form-control" name="judul">
</div>
<div class="form-group">
	<label>Kategori</label>
	<select class="form-control" name="category_id">
		<option value="" holder>Pilih Kategori</option>
		@foreach($category as $result)
		<option value="{{$result->id}}">{{ $result->name }}</option>
		@endforeach
	</select>
</div>
<div class="form-group">
	<label>Konten</label>
	<textarea cols="form-control" name="content"></textarea>
</div>
<div class="form-group">
	<label>Thumbnail</label>
	<input type="file" name="form-control" name="gambar">
</div>

<div class="form-group">
	<button class="btn btn-primary btn-block">Simpan Kategori</button>
</div>

</form>



@endsection