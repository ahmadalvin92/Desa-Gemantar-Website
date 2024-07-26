@extends('dashboard.main')
@section('blog')
<div class="card">
    <div class="card-header">
        Update Data Blog
    </div>
    <div class="card-body px-5">
        <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
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
            <label for="title" class="form-label">Judul Blog</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Judul" required  value="{{ $blog->title }}">
        </div>
        <div class="mb-3">
            <label for="conten" class="form-label">Isi Konten Blog</label>
            <textarea type="text"  id="summernote" name="content" placeholder="Isi Konten" required>{{ $blog->content }}</textarea>
            <!-- <div id="summernote"></div> -->
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Link Image</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Link Image" required value="{{ $blog->image }}">
            <p><label for="image" class="form-label"><small>Preview</small></label><br><img
                src="{{Storage::url($blog->image)}}" alt="" class="img-fluid" style="width: 200px"></p>
        </div>
        <button type="submit" class="btn btn-md btn-primary px-4">Update Blog</button>
        <a href="/blog" class=" btn btn-md btn-secondary px-4">Batal</a>
        </form>
    </div>
</div>
@endsection
