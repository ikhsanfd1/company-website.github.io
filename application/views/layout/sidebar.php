<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <?php if ($this->session->userdata('role_id') == 1) : ?>
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Home</div>
                        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-tachometer-alt"></span></div>
                            Halaman Utama
                        </a>
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="<?= base_url('assesment'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-user-check"></span></div>
                            Isi Self-Assesment
                        </a>
						<a class="nav-link" href="<?= base_url('formkpi'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-user-check"></span></div>
                            Form KPI
                        </a>
						<ul class="nav nav-pills">
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Laporan</a> 
						<div class="dropdown-menu">
						<a class="dropdown-item" href="<?= base_url('exportpegawai'); ?>">Laporan Data Pegawai</a>
						<a class="dropdown-item" href="<?= base_url('dataassesment'); ?>">Laporan Data Self-Assesment</a>
						<a class="dropdown-item" href="<?= base_url('export'); ?>">Laporan Data Absensi</a>
						<a class="dropdown-item" href="<?= base_url('exportpegawai'); ?>">Laporan Data Lokasi Tugas</a>
						<a class="dropdown-item" href="<?= base_url('exportpegawai'); ?>">Laporan Data Shift</a>
						<a class="dropdown-item" href="<?= base_url('datakpi'); ?>">Laporan Data KPI</a>
						<a class="dropdown-item" href="<?= base_url('datainsentif'); ?>">Laporan Data Insentif</a>
						<div class="dropdown-divider"></div>
						</li>
					</ul>
                        <div class="sb-sidenav-menu-heading">Kepala Bagian</div>
                        <a class="nav-link" href="<?= base_url('datapegawai'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Pegawai
                        </a>
						<a class="nav-link" href="<?= base_url('absensi'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Absensi
                        </a>
						<a class="nav-link" href="<?= base_url('dataassesment'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Self-Assesment
                        </a>
						<a class="nav-link" href="<?= base_url('dataloktugas'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Lokasi Tugas
                        </a>
						<a class="nav-link" href="<?= base_url('datashift'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Shift
                        </a>
						<a class="nav-link" href="<?= base_url('datakpi'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-chart-area"></span></div>
                            Data KPI
                        </a>
						<a class="nav-link" href="<?= base_url('datainsentif'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Insentif
                        </a>
                        </a><a class="nav-link" href="<?= base_url('settingapp'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-cog"></span></div>
                            Settings Aplikasi
                        </a>
                    </div>
                </div>
            <?php elseif ($this->session->userdata('role_id') == 2) : ?>
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Home</div>
                        <a class="nav-link" href="<?= base_url(''); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-tachometer-alt"></span></div>
                            Halaman Utama
                        </a>
                        <div class="sb-sidenav-menu-heading">Menu</div>
						<a class="nav-link" href="<?= base_url('formkpi'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-user-check"></span></div>
                            Form KPI
                        </a>
						<ul class="nav nav-pills">
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Laporan</a> 
						<div class="dropdown-menu">
						<a class="dropdown-item" href="<?= base_url('exportpegawai'); ?>">Laporan Data Pegawai</a>
						<a class="dropdown-item" href="<?= base_url('dataassesment'); ?>">Laporan Data Self-Assesment</a>
						<a class="dropdown-item" href="<?= base_url('export'); ?>">Laporan Data Absensi</a>
						<a class="dropdown-item" href="<?= base_url('dataloktugas'); ?>">Laporan Data Lokasi Tugas</a>
						<a class="dropdown-item" href="<?= base_url('datashift'); ?>">Laporan Data Shift</a>
						<a class="dropdown-item" href="<?= base_url('datakpi'); ?>">Laporan Data KPI</a>
						<a class="dropdown-item" href="<?= base_url('datainsentif'); ?>">Laporan Data Insentif</a>
						<div class="dropdown-divider"></div>
						</li>
					</ul>
                        <div class="sb-sidenav-menu-heading">Area Manajer</div>
                        </a>
						<a class="nav-link" href="<?= base_url('datapegawai'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Pegawai
                        </a>
						<div class="sb-sidenav-menu-heading">Menu</div>
						<a class="nav-link" href="<?= base_url('absensi'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Absensi
                        </a>
						<a class="nav-link" href="<?= base_url('dataassesment'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Self-Assesment
                        </a>
						<a class="nav-link" href="<?= base_url('dataloktugas'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Lokasi Tugas
                        </a>
						<a class="nav-link" href="<?= base_url('datashift'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Shift
                        </a>
						<a class="nav-link" href="<?= base_url('datakpi'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-chart-area"></span></div>
                            Data KPI
                        </a>
						<a class="nav-link" href="<?= base_url('datainsentif'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Insentif </a>
                    </div>
                </div>
            <?php elseif ($this->session->userdata('role_id') == 3) : ?>
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Home</div>
                        <a class="nav-link" href="<?= base_url(''); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-tachometer-alt"></span></div>
                            Halaman Utama
                        </a>
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="<?= base_url('absensiku'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-chart-area"></span></div>
                            Data Absensi
                        </a>
						<a class="nav-link" href="<?= base_url('assesment'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-chart-area"></span></div>
                            Isi Self-Assesment
                        </a>
						<a class="nav-link" href="<?= base_url('datainsentif'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Insentif </a>
                    </div>
                </div>
            <?php endif; ?>
            <div class="sb-sidenav-footer">
                <div class="small">Selamat Datang:</div>
                <?= $user['nama_lengkap'] ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
