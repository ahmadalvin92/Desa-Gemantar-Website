@extends('layouts.dashboard')
@section('main')
<!-- Isi Halaman -->
@include('dashboard.partial.navbar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-5">
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">Dashboard Admin</h1>
        </div>
    </div>
    <section class="content">
        @yield('table')
        @yield('blog')
        @yield('umkm')
        @yield('surat')

    </section>

  </div>
  @include('dashboard.partial.footer')
<!-- /Isi -->
@endsection
