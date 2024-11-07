<x-app title="Admin | Permohonan Informasi">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Data Pemohon Informasi</h2>
                <a href="#" class="btn btn-warning float-right" data-toggle="modal" data-target="#ubahStatusModal">Ubah Status</a>
            </div>
            <div class="card-body">
                <p><strong>Nama Pemohon:</strong> {{ $permohonan->nama_pemohon }}</p>
                <p><strong>Nik:</strong> {{ $permohonan->lampiran }}</p>
                <p><strong>Alamat Pemohon:</strong> {{ $permohonan->alamat_pemohon }}</p>
                <p><strong>No Telepon:</strong> {{ $permohonan->no_telepon }}</p>
                <p><strong>Email Pemohon:</strong> {{ $permohonan->email_pemohon }}</p>
                <p><strong>Informasi Diminta:</strong> {{ $permohonan->informasi_diminta }}</p>
                <p><strong>Tujuan Permohonan:</strong> {{ $permohonan->tujuan_permohonan }}</p>
                <p><strong>Tanggal Permohonan:</strong> {{ $permohonan->tanggal_permohonan }}</p>
                <p><strong>Status Permohonan:</strong> {{ $permohonan->status_permohonan }}</p>

            </div>
            <div class="card-footer">
                <a href="{{ url('admin/permohonan-informasi') }}" class="btn btn-secondary">Kembali ke Daftar
                    Permohonan</a>
            </div>
        </div>
    </div>
    <!-- Modal Ubah Status -->
<div class="modal fade" id="ubahStatusModal" tabindex="-1" role="dialog" aria-labelledby="ubahStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubahStatusModalLabel">Ubah Status Permohonan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/permohonan-informasi',$permohonan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="status_permohonan">Status Permohonan</label>
                        <select class="form-control" id="status_permohonan" name="status_permohonan" required>
                            <option value="Diproses" {{ $permohonan->status_permohonan == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                            <option value="Diterima" {{ $permohonan->status_permohonan == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                            <option value="Ditolak" {{ $permohonan->status_permohonan == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app>
