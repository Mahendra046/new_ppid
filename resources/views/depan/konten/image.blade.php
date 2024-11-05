<x-depan>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('../../public/Up/assets/img/balikpapan-view.jpg');">
        <div class="container position-relative d-flex flex-column" data-aos="fade">

            <h2>Berita</h2>
            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>Berita Detail</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">

                <div class="col-lg-12">

                    <article class="blog-details">

                        <h2 class="title">
                            <center>
                                {{$konten->judul}}
                            </center>
                        </h2>

                        <div class="content">
                            <img src="{{url("public/$konten->file")}}" style="width:100%; height: 100%;" alt="" class="img-fluid">
                        </div><!-- End post content -->

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="{{url('#')}}">Konten</a></li>
                            </ul>
                        </div><!-- End meta bottom -->

                    </article><!-- End blog post -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->
</x-depan>
