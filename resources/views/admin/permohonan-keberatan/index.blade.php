<x-app title="Admin | Keberatan">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Keberatan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-responsive-sm"
                                style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nama Pemohon</th>
                                        <th>Tanggal Keberatan</th>
                                        <th>Tanggapan PPID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_permohonan as $permohonan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/permohonan-keberatan',$permohonan) }}/edit" class=" btn btn-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>{{ $permohonan->nama_pemohon}}</td>
                                            <td>{{ $permohonan->tanggal_keberatan }}</td>
                                            <td>{{ $permohonan->tanggapan_ppid}}</td>
                                        </tr>
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
