@extends('dashboard.main')
@section('umkm')
    <div class="card px-2">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h5>DATA UMKM</h5>
                </div>
                <div class="col-md-6 d-flex flex-row-reverse">
                    <a href="/umkminput"><button class="btn btn-primary">Tambah UMKM Baru</button></a>
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
                    <th rowspan="1" colspan="1">Contact</th>
                    <th rowspan="1" colspan="1">Social Media</th>
                    <th rowspan="1" colspan="1">Image</th>
                    <th rowspan="1" colspan="1">Update</th>
                    <th rowspan="1" colspan="1">Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($umkm as $um)
                    <tr>
                        <td>{{ $um->id }}</td>
                        <td style="word-break:break-all;">{{ $um->title }}</td>
                        <td style="word-break:break-all;">{!! $um->content !!}</td>
                        <td style="word-break:break-all;">{{ $um->cp}}</td>
                        <td style="word-break:break-all;">
                           <a href="{{ $um->link}}">{{ $um->sm}}</a>
                        </td>
                        {{-- <td style="word-break:break-all;">{{ $um->link}}</td> --}}
                        <td style="word-break:break-all;">
                            <img src="{{ Storage::url($um->image) }}" alt="" class="img-fluid" style="width: 50px">
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('umkm.update', $um->id) }}">
                                UPDATE
                            </a>
                        </td>
                        <td>
                            <form onsubmit="return confirm('Yakin menghapus data ini ?');"
                                action="{{ route('umkm.destroy', $um->id) }}" method="POST">
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
                    {{ $umkm->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
