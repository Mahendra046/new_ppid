<x-depan title="Kontak | Fespati Ketapang">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('../../public/Up/assets/img/balikpapan-view.jpg');">
        <div class="container position-relative d-flex flex-column" data-aos="fade">

            <h2>{{ $submenu->judul }}</h2>
            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>{{ $submenu->judul }}</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 posts-list">

                @foreach ($submenu->konten as $item)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                @if ($item->jenis_file === 'pdf')
                                    <iframe src="{{ url("public/$item->file") }}" style="height:250px; width:100%;"
                                        frameborder="0"></iframe>
                                @elseif ($item->jenis_file === 'teks')
                                    <div class="text-content" style=" height:250px;">
                                        {!! nl2br($item->deskripsi) !!}
                                    </div>
                                @else
                                    <img src="{{ url("public/$item->file") }}"
                                        style="height:250px; width:100%; background-size: cover;" class="img-fluid"
                                        alt="">
                                @endif
                            </div>
                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">{{ $item->judul }}</h3>
                                <hr>
                                @php
                                    $linkUrl = filter_var($item->link_konten, FILTER_VALIDATE_URL)
                                        ? $item->link_konten
                                        : url('konten/' . $item->jenis_file . '/' . $item->id);
                                @endphp
                                <a href="{{ $linkUrl }}" class="readmore stretched-link"
                                    target="{{ $item->url ? '_blank' : '_self' }}">
                                    <span>Lihat Selengkapnya</span><i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br><br>

        </div>
    </section>
</x-depan>
