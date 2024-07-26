@extends('dashboard.main')
@section('umkm')
<div class="card">
    <div class="card-header">
        Penambahan UMKM Baru
    </div>
    <div class="card-body px-5">
        <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data">
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
            <input type="text" class="form-control" id="title" name="title" placeholder="Nama" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Deskripsi UMKM</label>
            <textarea class="form-control " id="content" name="content" placeholder="Deskripsi" required></textarea>
        </div>
        <div class="mb-3">
            <label for="cp" class="form-label">Kontak UMKM</label>
            <input type="number" class="form-control" id="cp" name="cp" placeholder="Kontak" required>
        </div>
        <div class="mb-3">
            <label for="sm" class="form-label">Social Media UMKM</label>
            <input type="text" class="form-control" id="sm" name="sm" placeholder="Social Media" required>
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link Social Media</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Link Social Media" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Link Image</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Link Image" required>
            <p><label for="image" class="form-label"><small>Preview</small></label><br><img
                id="preview-image-before-upload" src="" alt="" class="img-fluid" style="width: 200px"></p>
        </div>
        <button type="submit" class="btn btn-md btn-primary px-4">Tambahkan UMKM</button>
        <a href="/umkm" class=" btn btn-md btn-secondary px-4">Batal</a>
        </form>
    </div>
</div>
@endsection
