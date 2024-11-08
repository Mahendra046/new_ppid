<x-app title="Admin | Konten">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Konten Eksternal</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
                            <i class="fa fa-plus"></i> Tambah URL</button>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content"> <!-- Menambahkan padding -->
                                    <div class="modal-header" style="background: #3b4268">
                                        <h5 class="modal-title text-white">Tambah Konten url</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">


                                        <form action="{{ url('admin/konten-url') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <!-- Judul Menu -->
                                            <div class="row">
                                                <div class="mb-3 col-12">
                                                    <label for="id_induk" class="form-label">Menu</label>
                                                    <select class="form-control" id="id_menu" name="id_menu">
                                                        <option value="">-- Pilih Menu --</option>
                                                        @foreach ($menu as $menu)
                                                            <option value="{{ $menu->id }}"
                                                                {{ old('id_induk') == $menu->id ? 'selected' : '' }}>
                                                                {{ $menu->judul }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <small class="form-text text-muted">Pilih menu untuk konten.</small>
                                                </div>
                                                <div class="mb-3 col-8">
                                                    <label for="judul" class="form-label">Judul</label>
                                                    <input type="text" class="form-control" id="judul"
                                                        name="judul" value="{{ old('judul') }}" required>
                                                </div>

                                                <!-- URL Menu -->
                                                <div class="mb-3 col-12">
                                                    <label for="file" class="form-label">URL</label>
                                                    <input type="text" class="form-control" id="link_konten"
                                                        name="link_konten" value="{{ old('judul') }}" required>
                                                    <small class="form-text text-muted">input url Eksternal.</small>
                                                </div>

                                                <!-- Level Menu -->
                                                <input type="hidden" name="level" value="0">
                                                <div class="mb-3 col-12">
                                                    <button class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Modal Tambah -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-responsive-sm"
                                style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Judul</th>
                                        <th>URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($url as $url)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#edit{{ $url->id }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <x-button.delete id="{{ $url->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $url->judul }}</td>
                                            <td>{{ $url->link_konten ?? 'Default URL' }}</td>
                                        </tr>
                                        {{-- Modal Edit Start --}}
                                        <div class="modal fade" id="edit{{ $url->id }}">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background: #3b4268">
                                                        <h5 class="modal-title text-white">Edit Data Url</h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">


                                                        <form action="{{ url('admin/konten-url', $url->id) }}"
                                                            method="POST">
                                                            @method('put')
                                                            @csrf
                                                            <div class="row">
                                                                <div class="mb-3 col-12">
                                                                    <label for="id_induk"
                                                                        class="form-label">Menu</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $url->menu->judul }}" readonly>
                                                                    <input type="hidden" name="id_menu"
                                                                        value="{{ $url->menu->id }}">
                                                                    <small class="form-text text-muted">Pilih menu
                                                                        untuk konten.</small>
                                                                </div>
                                                                <div class="mb-3 col-8">
                                                                    <label for="judul"
                                                                        class="form-label">Judul</label>
                                                                    <input type="text" class="form-control"
                                                                        id="judul" name="judul"
                                                                        value="{{ $url->judul }}" required>
                                                                </div>
                                                                <!-- URL Menu -->
                                                                <div class="mb-3 col-12">
                                                                    <label for="file"
                                                                        class="form-label">URL</label>
                                                                    <input type="text" class="form-control"
                                                                        id="link_konten" name="link_konten"
                                                                        value="{{ $url->link_konten }}" required>
                                                                    <small class="form-text text-muted">input url
                                                                        Eksternal.</small>
                                                                </div>
                                                                <!-- Level Menu -->
                                                                <input type="hidden" name="level" value="0">
                                                                <div class="mb-3 col-12">
                                                                    <button class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Modal Edit End --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
<style>
    .img-container {
        max-width: 100%;
        /* Agar tidak melampaui lebar kolom */
        overflow: hidden;
        /* Sembunyikan bagian gambar yang melampaui */
    }

    .img-fluid {
        max-width: 100%;
        /* Membuat gambar responsif */
        height: auto;
        /* Mempertahankan rasio aspek gambar */
    }
</style>
