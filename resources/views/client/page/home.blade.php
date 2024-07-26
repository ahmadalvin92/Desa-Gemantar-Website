@extends('client.main')

@section('home')
    <main id="main">
        <section id="about" class="about">
            <div>
                <hr>
            </div>
            <div class="about-wrap container-fluid py-5" id="about">
                <div class="container">
                    <div class="row">
                        <div class=" col-lg-5 col-md-6 order-1 order-md-2">
                            <div class=" card gambar-about">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6812562332287!2d110.9103054!3d-7.2917079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a07938e0bcb55%3A0x5027a76e355aee0!2sGemantar%2C%20Kec.%20Mondokan%2C%20Kabupaten%20Sragen%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1664631528155!5m2!1sid!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <!-- <img src="assets/images/photo.jpg" alt="" /> -->
                        </div>
                        <div class="text-about col-lg-7 col-md-6 order-2 order-md-1">
                            <div class="text-about">
                                <h1 class="fw-bold"> Desa Gemantar</h1>
                                <p>
                                    Desa Gemantar terletak di Kecamatan Mondokan, Kabupaten Sragen, Jawa Tengah. Desa ini memiliki sejarah yang kaya dan berhubungan erat dengan kebudayaan Jawa. Salah satu aspek penting dari sejarah desa ini adalah Punden Pucanganom yang berada di wilayah Kebayanan Guli. Punden ini dianggap sebagai tempat sakral yang dihormati oleh warga setempat dan digunakan untuk berbagai kegiatan budaya seperti Nyadranan dan Sedekah Desa. Punden ini diyakini sebagai makam leluhur yang menjadi cikal bakal masyarakat Desa Gemantar​.
                                </p>
                                <p>
                                    Sejarah desa ini juga dieksplorasi melalui berbagai sarasehan yang diadakan oleh warga untuk menggali potensi desa dan mengenali cerita-cerita lisan yang berkembang di masyarakat. Acara seperti ini membantu meningkatkan kesadaran kolektif tentang pentingnya pemajuan kebudayaan dan potensi desa untuk kesejahteraan masyarakat​.
                                </p>
                                <p>
                                    Secara geografis, Desa Gemantar berada di ujung utara Kecamatan Mondokan, Kabupaten Sragen. Di sebelah utara berbatasan dengan wilayah Kabupaten Grobogan, sebelah barat berbatasan dengan Desa Sumberejo, sebelah selatan dengan Desa Pare dan Desa Kedawung, dan di sebelah timur berbatasan dengan Desa Jambangan.
                                </p>
                                <p>
                                    Luas wilayah Gemantar mencapai 7,55 km persegi atau 15,30% dari total wilayah Kecamatan Mondokan, yaitu 49,36 km persegi. Wilayah Gemantar adalah yang paling luas se-Kecamatan Mondokan. Akses ke desa ini sekitar 4 km dari Kota Kecamatan Mondokan atau 20 km dari pusat Kota Sragen. Luas wilayah Gemantar berbanding lurus dengan jumlah rukun tetangga (RT) yang mencapai 35 RT.
                                </p>
                                <p>
                                    Jumlah penduduknya pun terbanyak bila dibandingkan dengan delapan desa lainnya di Mondokan. Berdasarkan data Badan Pusat Statistik (BPS) pada 2021, jumlah penduduk Gemantar sebanyak 6.329 jiwa yang terdiri atas 3.173 jiwa laki-laki dan 3.156 jiwa perempuan. Jumlah penduduk di Gemantar ini mencapai 15,59% dari total penduduk di Mondokan dengan kepadatan penduduk 838,28 jiwa per km persegi. Di salah satu dukuh di Gemantar, yaitu Dukuh Gajihan, ternyata hanya dihuni oleh enam orang.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <div class="bgimg">
        </div>
        {{-- Blog --}}
        <section>
            <div class="blog" id="blog">
                <div class="container">
                    <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                        <p>Blog Desa</p>
                        <h2>Artikel Terbaru</h2>
                    </div>
                    <div class="row">
                        @foreach ($blog as $bl)
                        <div class="col-md-4 mb-5 mt-3">
                            <div class="card box pt-0 wow fadeInUp" data-wow-delay="0.1s">
                                <img class="blog-img" src="{{ Storage::url($bl->image) }}" alt="Blog">
                                <div class="blog-text card-header">
                                    <h4 style="font-weight: bold; text-align: center;">{{ $bl->title }}</h4>
                                    <div class="blog-meta">
                                        <p><i class="far fa-user"></i> Admin</p>
                                        <p><i class="far fa-list-alt"></i> {{ $bl->category }}</p>
                                        <p><i class="far fa-calendar-alt"></i> {{ date('d M Y', $bl->created_at->timestamp) }}</p>
                                        <p><i class="far fa-comments"></i> {{ $bl->comments_count }}</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        {!! $bl->content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        
        {{-- Gallery --}}
        <section>
            <div id="galery">
                <hr>
            </div>
            <div class="galeri-kecil-wrap container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="text-galeri-k col-lg-5 col-md-5 text-white p-5">
                            <h1>Galeri Desa Gemantar</h1>
                        </div>
                        <div class="col-lg-7 col-md-7 p-3">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <div class="gallery">
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/1.jpg" alt="Gallery Image 1" />
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/4.jpg" alt="Gallery Image 4" />
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/7.jpg" alt="Gallery Image 7" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <div class="gallery">
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/2.jpg" alt="Gallery Image 2" />
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/5.jpg" alt="Gallery Image 5" />
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/8.jpg" alt="Gallery Image 8" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                    <div class="gallery">
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/3.jpg" alt="Gallery Image 3" />
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/6.jpg" alt="Gallery Image 6" />
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/9.jpg" alt="Gallery Image 9" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         {{-- Peta Desa Gemantar --}}
         <section id="peta-gemantar" class="peta-gemantar py-5">
            <div class="container text-center">
                <h2 class="fw-bold">Peta Desa Gemantar</h2>
                <img src="assets/images/peta gemantar.jpg" class="img-fluid mt-4" alt="Peta Desa Gemantar">
            </div>
        </section>

        <!-- Kontak Kami -->
<section id="kontak-kami" class="kontak-kami py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold">Kontak Kami</h2>
        <p>Untuk informasi lebih lanjut, Anda dapat menghubungi kami melalui:</p>
        <ul class="list-unstyled">
            <li>Email: gemantarpemdes@gmail.com</li>
            <li>Telepon: +62 856 4203 9384</li>
            <li>Dusun Kenteng, Gemantar, Kec. Mondokan, Kabupaten Sragen, Jawa Tengah 57271</li>
        </ul>
    </div>
</section>
        
    </main>
@endsection
