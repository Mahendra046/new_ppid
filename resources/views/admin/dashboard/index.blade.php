<x-app title="Admin | Dashboard">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <p class="mb-0">Your business dashboard template</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-pie-chart text-success"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Konten Teks</div>
                        <div class="stat-digit">{{$konten_teks}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-user text-primary border-primary"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Konten Image</div>
                        <div class="stat-digit">{{$konten_image}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-layout-grid2 text-pink border-pink"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Konten PDF</div>
                        <div class="stat-digit">{{$konten_pdf}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="year-calendar"></div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        
    </div>
</x-app>
