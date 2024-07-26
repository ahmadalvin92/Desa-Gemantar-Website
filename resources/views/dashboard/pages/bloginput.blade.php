{{-- @extends('dashboard.main')
@section('blog') --}}
<div class="modal fade" id="contohModal" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>
                    Penambahan Blog Baru
                </h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="title" class="form-label">Judul Blog</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Judul"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Isi Konten Blog</label>
                        <textarea class="form-control" id="summernote" name="content" placeholder="Isi Konten" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label"></label>
                        <input type="file" class="form-control" id="image" name="image"
                            required>
                        </div>
                        <p><label for="image" class="form-label"><small>Preview</small></label><br><img
                                id="preview-image-before-upload" src="" alt="" class="img-fluid"
                                style="width: 200px"></p>
                    <button type="submit" class="btn btn-md btn-primary px-4">Tambahkan Blog</button>
                    <a href="/blog" class=" btn btn-md btn-secondary px-4">Batal</a>
                </form>
            </div>
        </div>
    </div>


</div>
{{-- @endsection --}}
