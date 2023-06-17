<div class="container-fluid">
    <h1 class="my-4"><span class="fas fa-user-tie mr-2"></span>Data Pegawai</h1>
    <div class="card mb-4">
        <div class="card-header">
            <div class="float-right">
			 <?php if ($this->session->userdata('role_id') == 1) : ?>
                    <button class="btn btn-success" data-toggle="modal" data-target="#addpegawaimodal" id="pgwadduser"><span class="fas fa-user-plus mr-1"></span>Tambah Pegawai</button>
                <?php endif; ?>
				<a class="btn btn-success" href="<?= base_url('exportpegawai'); ?>"><span class="fas fa-file mr-1"></span>Export Data Pegawai</a>
                <div class="btn btn-primary" id="refresh-tabel-pegawai"><span class="fas fa-sync-alt mr-1"></span>Refresh Tabel</div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="datapegawai" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Kode Pegawai</th>
                            <th>Pas Foto</th>
                            <th>Username</th>
                            <th>Jenis Kelamin</th>
                            <th>Shift Bagian</th>
                            <th>Lokasi Tugas</th>
                            <th>Verifikasi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Kode Pegawai</th>
                            <th>Pas Foto</th>
                            <th>Username</th>
                            <th>Jenis Kelamin</th>
                            <th>Shift Bagian</th>
                            <th>Lokasi Tugas</th>
                            <th>Verifikasi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add Pegawai -->
<div class="modal fade" id="addpegawaimodal" tabindex="-1" role="dialog" aria-labelledby="addpegawaimodal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="addpegawaimodallabel"><span class="fas fa-user-plus mr-1"></span>Tambah Pegawai</h5>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('#', ['id' => 'addpegawai']) ?>
                <div class="form-group row">
                    <label for="nama_lengkap" class="col-sm-4 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-4 col-form-label">Username Pegawai</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password Pegawai</label>
                    <div class="col-sm-8">
                        <div class="input-group" id="show_hide_password">
                            <input type="password" class="form-control" id="password" name="password">
                            <div class="input-group-append">
                                <button class="input-group-text" type="button" tabindex="-1"><span class="fas fa-eye-slash" aria-hidden="false"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="instansi" class="col-sm-4 col-form-label">Instansi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="instansi" name="instansi" value="<?= $nameinstansiset = (empty($dataapp['nama_instansi'])) ? '[Nama Instansi Belum Disetting]' : $dataapp['nama_instansi']; ?>" data-toggle="tooltip" data-placement="top" title="Untuk mengubah nama instansi ini silakan buka pada bagian setting aplikasi" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="npwp" class="col-sm-4 col-form-label">NPWP</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="text" class="form-control" id="npwp" name="npwp">
                            <div class="input-group-append">
                                <div class="input-group-text">Opsional</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-4 col-form-label">Umur</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="text" class="form-control" id="umur" name="umur" maxlength="2">
                            <div class="input-group-append">
                                <div class="input-group-text">Tahun</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role_id" class="col-sm-4 col-form-label">Role Akun</label>
                    <div class="col-sm-8">
                        <?= form_dropdown('role_id', ['' => 'Select Role', 1 => 'Kepala Bagian', 2 => 'Area Manajer', 3 => 'Pegawai'], set_value('role_id'), 'class="form-control" id="role_id"'); ?>
                    </div>
                </div>
				<div class="form-group row">
                    <label for="loktugas" class="col-sm-4 col-form-label">Pilih Lokasi Tugas</label>
                    <div class="col-sm-8">
                    <?= form_dropdown('loktugas', ['' => 'Pilih Lokasi Tugas', 1 => 'BCA KCU Asemka', 2 => 'KCP Perniagaan Timur', 3 => 'KCP Pejagalan', 4 => 'KCP Angke', 5 => 'KCP Tiang Bendera', 6 => 'KCP Gedong Panjang', 7 => 'KCP Telepon Kota', 8 => 'KCP Permata Kota', 9 => 'KCP Cengkeh', 10 => 'KCP PuriDelta Mas', 11 => 'KCP Lodan Center'], set_value('loktugas'), 'class="form-control" id="loktugas"'); ?>
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <?= form_radio('jenis_kelamin', 'Laki - Laki', set_radio('jenis_kelamin[]', 'Laki - Laki'), "id='jenis_kelamin' class='form-check-input'"); ?>
                            <label class="form-check-label" for="jenis_kelamin">Laki - Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <?= form_radio('jenis_kelamin', 'Perempuan', set_radio('jenis_kelamin[]', 'Perempuan'), "class='form-check-input'"); ?>
                            <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bagian_shift" class="col-sm-4 col-form-label">Shift Bagian</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <?= form_radio('bagian_shift', 1, set_radio('bagian_shift[]', 1), "id='bagian_shift' class='form-check-input'"); ?>
                            <label class="form-check-label" for="bagian_shift">Full Time</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <?= form_radio('bagian_shift', 2, set_radio('bagian_shift[]', 2), "class='form-check-input'"); ?>
                            <label class="form-check-label" for="bagian_shift">Part Time</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <?= form_radio('bagian_shift', 3, set_radio('bagian_shift[]', 3), "class='form-check-input'"); ?>
                            <label class="form-check-label" for="bagian_shift">Shift</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="is_active" class="col-sm-4 col-form-label">Verifikasi Pegawai</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <?= form_radio('is_active', 0, set_radio('is_active[]', 0), "id='is_active' class='form-check-input'"); ?>
                            <label class="form-check-label" for="is_active">Belum Terverifikasi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <?= form_radio('is_active', 1, set_radio('is_active[]', 1), "class='form-check-input'"); ?>
                            <label class="form-check-label" for="is_active">Terverifikasi</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4">Pas Foto Pegawai</div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto_pegawai" name="foto_pegawai">
                            <label class="custom-file-label" for="foto_pegawai">Choose file. Max 2 MB</label>
                        </div>
                    </div>
                </div>
                <div class="my-2" id="info-data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-times mr-1"></span>Batal</button>
                <button type="submit" class="btn btn-primary" id="addpgw-btn"><span class="fas fa-plus mr-1"></span>Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal View Pegawai -->
<div class="modal fade" id="viewpegawaimodal" tabindex="-1" role="dialog" aria-labelledby="viewpegawaimodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="viewpegawaimodallabel"><span class="fas fa-clock mr-1"></span>Preview Pegawai</h5>
            </div>
            <div class="modal-body">
                <div id="viewdatapegawai"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="fas fa-times mr-1"></span>Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Pegawai -->
<div class="modal fade" id="editpegawaimodal" tabindex="-1" role="dialog" aria-labelledby="editpegawaimodal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="editpegawaimodallabel"><span class="fas fa-user-edit mr-1"></span>Edit Pegawai</h5>
            </div>
            <div class="modal-body">
                <div id="editdatapegawai"></div>
            </div>
            <!-- Modal Print Pegawai -->
            <div class="modal fade" id="printpgwmodal" tabindex="-1" role="dialog" aria-labelledby="printpgwmodal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="printpgwmodallabel"><span class="fas fa-print mr-1"></span>Print Data Pegawai</h5>
                        </div>
                        <div class="modal-body">
                            <div id="printdatapgw"></div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-primary btn-print-direct" title="Cetak Data Pegawai" target="_blank"><span class="fas fa-window-maximize mr-1"></span>Open In New tab</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-times mr-1"></span>Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
