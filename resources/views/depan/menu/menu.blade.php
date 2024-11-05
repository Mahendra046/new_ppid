<x-depan title="Kontak | Fespati Ketapang">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('../public/Up/assets/img/balikpapan-view.jpg');">
        <div class="container position-relative d-flex flex-column" data-aos="fade">

            <h2>{{ $menu->judul }}</h2>
            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>{{ $menu->judul }}</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                @foreach ($menu->submenus as $item)
                    <div class="col-lg-4 col-md-4">
                        <a href="{{ url('menu/' . $item->induk->id . '/' . $item->id) }}">
                            <h3>{{ $item->judul }}</h3>
                        </a>
                        @foreach ($item->konten as $konten)
                            <a href="{{ url('konten/' . $konten->jenis_file . '/' . $konten->id) }}">
                                <h5>{{ $konten->judul }}</h5>
                            </a>
                        @endforeach
                    </div><!-- End Info Item -->
                @endforeach
            </div>

            <style>
                a h5 {
                    color: black;
                    transition: color 0.3s ease;
                }

                a h5:hover {
                    color: #d28b28;
                    /* Ubah sesuai dengan warna hover yang diinginkan */
                    text-decoration: underline;
                }
            </style>

        </div>
    </section><!-- End Contact Section -->
</x-depan>
