<div class="container-fluid">
    <h1 class="my-4"><span class="fas fa-user-tie mr-2"></span>Data Shift</h1>
    <div class="card mb-4">
        <div class="card-header">
            <div class="float-right">
			 <?php if ($this->session->userdata('role_id') == 1) : ?>
                <a class="btn btn-success" href="<?= base_url('exportpegawai'); ?>"><span class="fas fa-file mr-1"></span>Export Data Shift</a>    
                <?php endif; ?>
                <div class="btn btn-primary" id="refresh-tabel-shift"><span class="fas fa-sync-alt mr-1"></span>Refresh Tabel</div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="datashift" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Kode Pegawai</th>
                            <th>Shift Bagian</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Kode Pegawai</th>
                            <th>Shift Bagian</th>
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
            <div class="modal fade" id="printshiftmodal" tabindex="-1" role="dialog" aria-labelledby="printshiftmodal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="printshiftmodallabel"><span class="fas fa-print mr-1"></span>Print Data Shift</h5>
                        </div>
                        <div class="modal-body">
                            <div id="printdatashift"></div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-primary btn-print-direct" title="Cetak Data Shift" target="_blank"><span class="fas fa-window-maximize mr-1"></span>Open In New tab</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-times mr-1"></span>Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
