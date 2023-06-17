<div class="container-fluid">
    <h1 class="my-4"><span class="fas fa-file mr-2"></span>Export Data Pegawai</h1>
    <div class="row mb-4">
        <div class="col-xl-6">
            <?= $this->session->flashdata('exportpegawai'); ?>
            <div class="card mb-4">
                <div class="card-body">
                    <?= form_open('exportpegawai', ['id' => 'cetakpegawai', 'target' => '_blank']); ?>
                    <div class="form-group row">
                        <label for="nama_pegawai" class="col-sm-4 col-form-label">Nama Pegawai</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Nama Pegawai">
                            <small class="muted">*Kosongkan bagian ini jika ingin menampilkan semua</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="method_export_file" class="col-sm-4 col-form-label">Metode Export Data</label>
                        <div class="col-sm-8">
                            <?= form_dropdown('method_export_file', ['pdf' => 'Files PDF', 'excel' => 'Files Excel'], set_value('method_export_file'), 'class="form-control" id="method_export_file"'); ?>
                            <?= form_error('method_export_file'); ?>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><span class="fas fa-file mr-1"></span>Export</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
