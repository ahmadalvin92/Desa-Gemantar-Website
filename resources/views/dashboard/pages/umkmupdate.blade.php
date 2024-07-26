@extends('dashboard.main')
@section('umkm')
<div class="card">
    <div class="card-header">
        Update Data UMKM
    </div>
    <div class="card-body px-5">
        <form action="{{ route('umkm.update',$umkm->id) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="mb-3">
            <label for="title" class="form-label">Nama UMKM</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nama" required  value="{{ $umkm->title }}">
        </div>
        <div class="mb-3">
            <label for="conten" class="form-label">Deskripsi UMKM</label>
            <textarea type="text"  id="summernote" name="content" placeholder="Deskripsi" required>{{ $umkm->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="cp" class="form-label">Kontak UMKM</label>
            <input type="text" class="form-control" id="cp" name="cp" placeholder="Kontak" required  value="{{ $umkm->cp }}">
        </div>
        <div class="mb-3">
            <label for="sm" class="form-label">Social Media UMKM</label>
            <input type="text" class="form-control" id="sm" name="sm" placeholder="Social Media" required  value="{{ $umkm->sm }}">
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link Social Media</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Kontak" required  value="{{ $umkm->link }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Link Image</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Link Image" required value="{{ $umkm->image }}">
            <p><label for="image" class="form-label"><small>Preview</small></label><br><img
                src="{{Storage::url($umkm->image)}}" alt="" class="img-fluid" style="width: 200px"></p>
        </div>
        <button type="submit" class="btn btn-md btn-primary px-4">Update UMKM</button>
        <a href="/umkm" class=" btn btn-md btn-secondary px-4">Batal</a>
        </form>
    </div>
</div>
@endsection
