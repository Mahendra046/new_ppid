<!--**********************************
            Sidebar start
        ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first text-light">Menu Baru</li>
            <x-layout.sidebar.menu-item url="admin/dashboard" label="Dashboard" icon="icon icon-home" />
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Pengaturan Menu</span></a>
                <ul aria-expanded="false">
                    <x-layout.sidebar.menu-item url="admin/menu-induk" label="Menu Induk" icon="ti-layers" />
                    <x-layout.sidebar.menu-item url="admin/menu-tambahan" label="Menu Tambahan" icon="ti-layers-alt" />
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="ti-agenda"></i><span class="nav-text">Konten</span></a>
                <ul aria-expanded="false">
                    <x-layout.sidebar.menu-item url="admin/konten-jpg" label="Konten JPG" icon="ti-image" />
                    <x-layout.sidebar.menu-item url="admin/konten-pdf" label="Konten PDF" icon="ti-file" />
                    <x-layout.sidebar.menu-item url="admin/konten-teks" label="Konten Teks" icon="ti-write" />
                </ul>
            </li>
            <x-layout.sidebar.menu-item url="admin/user" label="Admin" icon="ti-user" />
        </ul>
    </div>
</div>

<style>
    .quixnav {
        width: 17.1875rem;
        padding-bottom: 112px;
        height: 100%;
        position: absolute;
        top: 3.5rem;
        padding-top: 0;
        z-index: 2;
        background-color: #111010;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: all .2s ease;
    }
    .quixnav .metismenu > li:hover > a, .quixnav .metismenu > li:focus > a, .quixnav .metismenu > li.mm-active > a {
        background-color: #187683;
        color: #fff; }
</style>
<!--**********************************
                    Sidebar end
                ***********************************-->
