<div class="container-fluid">
    <h1 class="my-4"><span class="fas fa-user-tie mr-2"></span>Data Lokasi Tugas</h1>
    <div class="card mb-4">
        <div class="card-header">
            <div class="float-right">
			 <?php if ($this->session->userdata('role_id') == 1) : ?>
                <a class="btn btn-success" href="<?= base_url('exportpegawai'); ?>"><span class="fas fa-file mr-1"></span>Export Data Lokasi Tugas</a>    
                <?php endif; ?>
                <div class="btn btn-primary" id="refresh-tabel-loktugas"><span class="fas fa-sync-alt mr-1"></span>Refresh Tabel</div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataloktugas" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Kode Pegawai</th>
                            <th>Lokasi Tugas</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Kode Pegawai</th>
                            <th>Lokasi Tugas</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

            <!-- Modal Print Pegawai -->
            <div class="modal fade" id="printloktugasmodal" tabindex="-1" role="dialog" aria-labelledby="printloktugasmodal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="printloktugasmodallabel"><span class="fas fa-print mr-1"></span>Print Data Lokasi Tugas</h5>
                        </div>
                        <div class="modal-body">
                            <div id="printdataloktugas"></div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-primary btn-print-direct" title="Cetak Data Lokasi Tugas" target="_blank"><span class="fas fa-window-maximize mr-1"></span>Open In New tab</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-times mr-1"></span>Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
