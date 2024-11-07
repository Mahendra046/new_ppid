<x-app title="Admin | permohonan">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Permohonan Informasi</h4>
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
                                        <th>Tanggal Permohonan</th>
                                        <th>Tujuan Permohonan</th>
                                        <th>Tracking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_permohonan as $permohonan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/permohonan-informasi',$permohonan) }}/edit" class=" btn btn-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>{{ $permohonan->nama_pemohon}}</td>
                                            <td>{{ $permohonan->tanggal_permohonan }}</td>
                                            <td>{{ $permohonan->tujuan_permohonan}}</td>
                                            <td>{{ $permohonan->tracking_code }}</td>
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
