@extends('dashboard.main')
@section('surat')
    <div class="card px-2">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h5>Surat Keluar</h5>
                </div>
                <div class="col-md-6 d-flex flex-row-reverse">
                    <div class="box-header with-border">
                        <a href='' title="Tambah Surat Keluar Baru"
                            class="btn btn-social bg-olive btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                                class="fa fa-plus"></i> Tambah Surat Keluar Baru</a>
                        <a href="#confirm-delete" title="Hapus Data" title="Hapus Data Terpilih"
                            onclick="deleteAllBox('mainform',''"
                            class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih"><i
                                class='fa fa-trash-o'></i> Hapus Data Terpilih</a>
                        <a href=""
                            class="btn btn-social  bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                            title="Cetak Agenda Surat Keluar" data-remote="false" data-toggle="modal"
                            data-target="#modalBox" data-title="Cetak Agenda Surat Keluar"><i class="fa fa-print "></i>
                            Cetak</a>
                        <a href="" title="Unduh Agenda Surat Keluar"
                            class="btn btn-social bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                            title="Unduh Agenda Surat Keluar" data-remote="false" data-toggle="modal"
                            data-target="#modalBox" data-title="Unduh Agenda Surat Keluar"><i class="fa fa-download"></i>
                            Unduh</a>
                    </div>
                </div>
            </div>
        </div>
        @csrf
        <table id="example2" class="table table-sm table-bordered table-hover dataTable dtr-inline table-responsive-md"
            aria-describedby="example2_info">
            <thead>
                <tr>
                <tr>
                    <th class="nostretch">
                        <input type="checkbox" id="checkall" />
                    </th>
                    <th class="nostretch">
                        <a href="">No. Urut <i class='fa fa-sort-asc fa-sm'></i></a>
                    </th>
                    <th class="nostretch">Aksi</th>
                    <th class="nostretch">Nomor Surat</th>
                    <th>
                        <a href="">Tanggal Surat <i class='fa fa-sort fa-sm'></i></a>
                    </th>
                    <th nowrap><a href="">Ditujukan Kepada <i class='fa fa-sort fa-sm'></i></a></th>
                    <th width="30%">Isi Singkat</th>
                </tr>
                </tr>
            </thead>
            <tbody>
                <tr>
                <tr>
                    <td>
                        <input type="checkbox" name="id_cb[]" value="" />
                    </td>
                    <td class="nostretch"></td>
                    <td class="nostretch">
                        <a href="" class="btn bg-olive btn-sm" title="Ubah Data">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href='' class="btn bg-purple btn-sm" title="Unduh Berkas Surat" target="_blank">
                            <i class="fa fa-download"></i>
                        </a>
                        <a href="#" data-bs-href="" class="btn bg-maroon btn-sm" title="Hapus Data" data-bs-toggle="modal" data-bs-target="#confirm-delete">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                    <td class="nostretch"></td>
                    <td nowrap></td>
                    <td nowrap></td>
                    <td></td>
                </tr>
                </tr>
                <tr>
                    <td colspan="3">Tidak Ada Data</td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Data 1 sampai 10
                    dari 567 data</div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">

                </div>
            </div>
        </div>
    </div>
@endsection
