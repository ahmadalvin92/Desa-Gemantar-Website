@extends('dashboard.main')
@section('blog')
    @include('dashboard.pages.bloginput')
    <div class="card px-2">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h5>DATA BLOG</h5>
                </div>
                <div class="col-md-6 d-flex flex-row-reverse">
                    {{-- <a href="/bloginput"><button class="btn btn-primary">Tambah Blog Baru</button></a> --}}
                    <button data-bs-toggle="modal" data-bs-target="#contohModal" class="btn btn-primary">Tambah Blog</button>
                </div>
            </div>
        </div>
        @csrf
        <table id="example2" class="table table-sm table-bordered table-hover dataTable dtr-inline table-responsive-md"
            aria-describedby="example2_info">
            <thead>
                <tr>
                    <th rowspan="1" colspan="1">ID</th>
                    <th rowspan="1" colspan="1">Title</th>
                    <th rowspan="1" colspan="1">Conten</th>
                    <th rowspan="1" colspan="1">Image</th>
                    <th rowspan="1" colspan="1">Update</th>
                    <th rowspan="1" colspan="1">Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blog as $bl)
                    <tr>
                        {{-- @php
                        dd($blog);
                        @endphp --}}
                        <td>{{ $bl->id }}</td>
                        <td style="word-break:break-all;">{{ $bl->title }}</td>
                        <td style="word-break:break-all;">{!! Str::limit($bl->content, 100) !!}</td>
                        <td style="word-break:break-all;">
                            <img src="{{ Storage::url($bl->image) }}" alt="" class="img-fluid" style="width: 50px">
                        </td>
                        <td>
                            <a  class="edit btn btn-primary" href="{{ route('blog.update', $bl->id) }}">
                                UPDATE
                            </a>
                            <script type="text/javascript">
                                $('a.edit').click(function() {
                                    var id = $(this).attr()
                                })
                            </script>
                        </td>
                        <td>
                            <form onsubmit="return confirm('Yakin menghapus data ini ?');"
                                action="{{ route('blog.destroy', $bl->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Tidak Ada Data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Data 1 sampai 10
                    dari 567 data</div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    {{ $blog->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
