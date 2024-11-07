<x-depan>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero" style="">

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active" style="background-image: url(public/up/assets/img/banner/bg1.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(public/up/assets/img/banner/bg2.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(public/up/assets/img/banner/bg3.jpg)">
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="section-header">
                    <h2>PPID KOTA BALIKPAPAN</h2>
                    <p>LAYANAN DAN INFORMASI PUBLIK</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-3">
                        <a href="#btn1" id="btn1">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ url('public') }}/Up/assets/img/layanan/client1.png" alt=""
                                    class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="#btn2" id="btn2">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ url('public') }}/Up/assets/img/layanan/client2.png" alt=""
                                    class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="https://www.lapor.go.id/">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ url('public') }}/Up/assets/img/layanan/client3.png" alt=""
                                    class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 mb-5">
                        <a href="#">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ url('public') }}/Up/assets/img/layanan/client4.png" alt=""
                                    class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </a>
                    </div>
                </div>
                {{-- inputan --}}

                <form id="form1" action="{{ route('permohonan.store') }}" method="POST">
                    @csrf
                    <div class="section-header mt-5">
                        <h2>FORM PERMOHONAN INFORMASI</h2>
                        <p>Form untuk mengajukan permohonan Informasi kepada PPID Kota Balikpapan</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama_pemohon">Nama Pemohon:</label>
                            <input class="form-control" type="text" id="nama_pemohon" name="nama_pemohon" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tanggal_permohonan">NIK:</label>
                            <input class="form-control" type="teks" id="lampiran" name="lampiran" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="no_telepon">No Telepon:</label>
                            <input class="form-control" type="text" id="no_telepon" name="no_telepon" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email_pemohon">Email Pemohon:</label>
                            <input class="form-control" type="email" id="email_pemohon" name="email_pemohon" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="alamat_pemohon">Alamat Pemohon:</label>
                            <input class="form-control" type="text" id="alamat_pemohon" name="alamat_pemohon" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tanggal_permohonan">Tanggal Permohonan:</label>
                            <input class="form-control" type="date" id="tanggal_permohonan" name="tanggal_permohonan" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="informasi_diminta">Informasi Diminta:</label>
                            <textarea class="form-control" id="informasi_diminta" name="informasi_diminta" required></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tujuan_permohonan">Tujuan Permohonan:</label>
                            <textarea class="form-control" id="tujuan_permohonan" name="tujuan_permohonan" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <center>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary col-12">Kirim Permohonan</button>
                            </div>
                        </center>
                    </div>
                </form>

                <div id="form2" class="form" style="display: none;">
                    <h3>Form Kategori 2</h3>
                    <input type="text" placeholder="Input 1 Kategori 2">
                    <input type="text" placeholder="Input 2 Kategori 2">
                    <input type="text" placeholder="Input 3 Kategori 2">
                </div>

                <div id="form3" class="form" style="display: none;">
                    <h3>Form Kategori 3</h3>
                    <input type="text" placeholder="Input 1 Kategori 3">
                    <input type="text" placeholder="Input 2 Kategori 3">
                    <input type="text" placeholder="Input 3 Kategori 3">
                </div>
                {{-- end inputan --}}
            </div>
        </section><!-- End Contact Section -->
        <div class="section-header mt-5">
            <h2>INFO PRAKIRAAN CUACA</h2>
            <p>Sumber : Data Prakiraan Cuaca BMKG (<a href="https://bmkg.go.id/">bmkg.go.id</a>)</p>
        </div>
        <section id="stats-counter" class="stats-counter section-bg">
            <div class="container">


                <div class="row" style="">

                    <div class="col-lg-6 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            {{-- <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i> --}}
                            <div>
                                <h5>Kontak Layanan PPID</h5>
                                <p>0811 5440542 (WA/SMS)</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->
                    <div class="col-lg-6 col-md-6">
                        <a href="#">
                            <div class="stats-item d-flex align-items-center w-100 h-100">
                                <i class="fas fa-whistle color-blue flex-shrink-0"></i>
                                <div>
                                    <h5>WHISLIBLOWER</h5>
                                    <p>System</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Stats Item -->
                </div>

            </div>
        </section>


    </main><!-- End #main -->

    <style>
        .hero .carousel-item::before {
            content: "";
            background-color: rgba(0, 0, 0, 0.148);
            position: absolute;
            inset: 0;
        }
    </style>

    <script>
        document.getElementById('btn1').addEventListener('click', function() {
            toggleForm('form1');
        });

        document.getElementById('btn2').addEventListener('click', function() {
            toggleForm('form2');
        });

        document.getElementById('btn3').addEventListener('click', function() {
            toggleForm('form3');
        });

        function toggleForm(formId) {
            const formElement = document.getElementById(formId);

            if (formElement.style.display === 'none' || formElement.style.display === '') {
                // Sembunyikan semua form lain
                document.querySelectorAll('.form').forEach(function(form) {
                    form.style.display = 'none';
                });

                // Tampilkan form yang diklik
                formElement.style.display = 'block';
            } else {
                // Sembunyikan form jika sudah tampil
                formElement.style.display = 'none';
            }
        }
    </script>
</x-depan>
