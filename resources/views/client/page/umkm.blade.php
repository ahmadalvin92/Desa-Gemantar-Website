@extends('client.main')

@section('umkm')
    <main id="main">
    <div class="benner">
        <div class="container">
            <div class="row align-items-center h-100">
                <div class="col-sm-12 col-md-4 mb-3">
                <h1 id="animation">Desa Gemantar</h1>
                   <div class="card card-default">
                    <div class="card-body">
                        <div class="village-img">
                            <img class="img-fluid rounded" src="{{ asset('assets/images/img.jpg') }}" width="100%">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam.</p>
                            <a href=""><button class="btn btn-success">Visit more</button></a>
                        </div>
                    </div>
                   </div>
                </div>
                <div class="col-sm-12 col-md-4 mb-3">
                   <div class="card card-default">
                    <div class="card-body">
                        <div class="village-img">
                            <img class="img-fluid rounded" src="{{ asset('assets/images/img.jpg') }}" width="100%">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam.</p>
                            <a href=""><button class="btn btn-success">Visit more</button></a>
                        </div>
                    </div>
                   </div>
                </div>
                <div class="col-sm-12 col-md-4 mb-3">
                   <div class="card card-default">
                    <div class="card-body">
                        <div class="village-img">
                            <img class="img-fluid rounded" src="{{ asset('assets/images/img.jpg') }}" width="100%">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam.</p>
                            <a href=""><button class="btn btn-success">Visit more</button></a>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="green"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 foto-awag">
                <img src="{{ asset('assets/images/img.jpg') }}" width="100%">
                <div class="desa">
                    <h1>Desa Gemantar</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsum perferendis consectetur nisi quod nihil dolorem enim tempora eveniet fugiat.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="umkm text-center my-4 p-5">
        <h1>UMKM Desa Gemantar</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        <div class="d-grid gap-2 col-12 mx-auto">
            <a href=""><button class="btn btn-success btn-lg " type="button"><i class="fa-solid fa-users me-2"></i> Stt. Jenggala Gora Yowana</button></a>
            <a href=""><button class="btn btn-success btn-lg " type="button"><i class="fa-solid fa-users me-2"></i> Stt. Jenggala Gora Yowana</button></a>
            <a href=""><button class="btn btn-success btn-lg " type="button"><i class="fa-solid fa-users me-2"></i> Stt. Jenggala Gora Yowana</button></a>
            <a href=""><button class="btn btn-success btn-lg " type="button"><i class="fa-solid fa-users me-2"></i> Stt. Jenggala Gora Yowana</button></a>
          </div>
    </div>
    <div class="service bg-success p-5 text-light">
      <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 mb-4">
                <img src="{{ asset('assets/images/img.jpg') }}" width="100%">
            </div>
            <div class="col-sm-12 col-md-6 mb-4">
                <p>Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, voluptatem? adipisicing elit. Error fuga iusto nemo dignissimos nihil tenetur, architecto id accusantium voluptate repellendus! Quibusdam, placeat nam? Placeat sapiente nostrum quis praesentium rem eum?</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi est mollitia sit ad odit fugiat porro nihil eligendi molestias dignissimos modi, velit explicabo iste repellendus laboriosam, corporis totam nam officiis!</p>
            </div>
            <div class="col-sm-12 col-md-6 mb-4">
                <img src="{{ asset('assets/images/img.jpg') }}" width="100%">
            </div>
            <div class="col-sm-12 col-md-6 mb-4">
                <p>Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, voluptatem? adipisicing elit. Error fuga iusto nemo dignissimos nihil tenetur, architecto id accusantium voluptate repellendus! Quibusdam, placeat nam? Placeat sapiente nostrum quis praesentium rem eum?</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi est mollitia sit ad odit fugiat porro nihil eligendi molestias dignissimos modi, velit explicabo iste repellendus laboriosam, corporis totam nam officiis!</p>
            </div>
            <div class="col-sm-12 col-md-6 mb-4">
                <img src="{{ asset('assets/images/img.jpg') }}" width="100%">
            </div>
            <div class="col-sm-12 col-md-6 mb-4">
                <p>Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, voluptatem? adipisicing elit. Error fuga iusto nemo dignissimos nihil tenetur, architecto id accusantium voluptate repellendus! Quibusdam, placeat nam? Placeat sapiente nostrum quis praesentium rem eum?</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi est mollitia sit ad odit fugiat porro nihil eligendi molestias dignissimos modi, velit explicabo iste repellendus laboriosam, corporis totam nam officiis!</p>
            </div>
        </div>
      </div>
    </div>
        <!-- <section id="umkm">
            <div class="container mt-5" style="background-color: #ff0000">
                <div class="card border-0 rad-25 shadow-none">
                    <div class="card-body mx-md-3 my-md-3">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <div class="about-img"><img src="{{ asset('assets/client/img/features-2.png') }}"
                                        alt="" class="img-fluid px-md-0 py-md-0 px-3 py-5"></div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="about-content">
                                @csrf
                                @forelse ($blog as $bl)
                                {!! $bl->content !!}
                                <img src="{{ Storage::url($bl->image) }}" alt="" class="img-fluid">
                                @empty
                                    <tr>
                                        <td colspan="3">Tidak Ada Data</td>
                                    </tr>
                                @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </main>
@endsection
