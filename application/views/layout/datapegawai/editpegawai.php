<?= form_open_multipart('#', ['id' => 'editpegawai']) ?>
<input type="hidden" name="id_pegawai_edit" id="id_pegawai_edit" value="<?= $datapegawai['id_pegawai'] ?>">
<div class="form-group row">
    <label for="nama_lengkap" class="col-sm-4 col-form-label">Nama Pegawai</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $datapegawai['nama_lengkap'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="username" class="col-sm-4 col-form-label">Username Pegawai</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="username" name="username" value="<?= $datapegawai['username'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="password" class="col-sm-4 col-form-label">Password Pegawai</label>
    <div class="col-sm-8">
        <div class="input-group" id="sh_hd_pass">
            <input type="password" class="form-control" id="password" name="password">
            <div class="input-group-append">
                <button class="input-group-text" type="button" tabindex="-1"><span class="fas fa-eye-slash" aria-hidden="false"></span></button>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="kode_pegawai" class="col-sm-4 col-form-label">Kode Pegawai</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="kode_pegawai" name="kode_pegawai" value="<?= $datapegawai['kode_pegawai'] ?>" title="Kode telah otomatis digenerate secara acak pada saat penambahan pegawai" readonly>
    </div>
</div>
<div class="form-group row">
    <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $datapegawai['jabatan'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="instansi_pegawai_edit" class="col-sm-4 col-form-label">Instansi</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="instansi_pegawai_edit" name="instansi_pegawai_edit" value="<?= $nameinstansiset = (empty($dataapp['nama_instansi'])) ? '[Nama Instansi Belum Disetting]' : $dataapp['nama_instansi']; ?>" data-toggle="tooltip" data-placement="top" title="Untuk mengubah nama instansi ini silakan buka pada bagian setting aplikasi" readonly>
    </div>
</div>
<div class="form-group row">
    <label for="npwp" class="col-sm-4 col-form-label">NPWP</label>
    <div class="col-sm-8">
        <div class="input-group">
            <input type="text" class="form-control" id="npwp" name="npwp" value="<?= $datapegawai['npwp'] == 'Tidak Ada' ? '' : $datapegawai['npwp'] ?>">
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
            <input type="text" class="form-control" id="umur" name="umur" value="<?= $datapegawai['umur'] ?>" maxlength="2">
            <div class="input-group-append">
                <div class="input-group-text">Tahun</div>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $datapegawai['tempat_lahir'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-8">
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $datapegawai['tgl_lahir'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="role_id" class="col-sm-4 col-form-label">Role Akun</label>
    <div class="col-sm-8">
        <?= form_dropdown('role_id', ['' => 'Select Role', 1 => 'Kepala Bagian', 2 => 'Area Manajer', 3 => 'Pegawai'], set_value('role_id', $datapegawai['role_id']), 'class="form-control" id="role_id"'); ?>
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
            <?= form_radio('jenis_kelamin', 'Laki - Laki', set_value('jenis_kelamin[]', ($datapegawai['jenis_kelamin'] == "Laki - Laki") ? true : false), 'id="jenis_kelamin" class="form-check-input"'); ?>
            <label class="form-check-label" for="jenis_kelamin">Laki - Laki</label>
        </div>
        <div class="form-check form-check-inline">
            <?= form_radio('jenis_kelamin', 'Perempuan', set_value('jenis_kelamin[]', ($datapegawai['jenis_kelamin'] == "Perempuan") ? true : false), 'class="form-check-input"'); ?>
            <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="bagian_shift" class="col-sm-4 col-form-label">Shift Bagian</label>
    <div class="col-sm-8">
        <div class="form-check form-check-inline">
            <?= form_radio('bagian_shift', 1, set_value('bagian_shift[]', ($datapegawai['bagian_shift'] == 1) ? true : false), 'id="bagian_shift" class="form-check-input"'); ?>
            <label class="form-check-label" for="bagian_shift">Full Time</label>
        </div>
        <div class="form-check form-check-inline">
            <?= form_radio('bagian_shift', 2, set_value('bagian_shift[]', ($datapegawai['bagian_shift'] == 2) ? true : false), 'class="form-check-input"'); ?>
            <label class="form-check-label" for="bagian_shift">Part Time</label>
        </div>
        <div class="form-check form-check-inline">
            <?= form_radio('bagian_shift', 3, set_value('bagian_shift[]', ($datapegawai['bagian_shift'] == 3) ? true : false), 'class="form-check-input"'); ?>
            <label class="form-check-label" for="bagian_shift">Shift</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="is_active" class="col-sm-4 col-form-label">Verifikasi Pegawai</label>
    <div class="col-sm-8">
        <div class="form-check form-check-inline">
            <?= form_radio('is_active', 0, set_value('is_active[]', ($datapegawai['is_active'] == 0) ? true : false), 'id="is_active" class="form-check-input"'); ?>
            <label class="form-check-label" for="is_active">Belum Terverifikasi</label>
        </div>
        <div class="form-check form-check-inline">
            <?= form_radio('is_active', 1, set_value('is_active[]', ($datapegawai['is_active'] == 1) ? true : false), 'class="form-check-input"'); ?>
            <label class="form-check-label" for="is_active">Terverifikasi</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-2">Pas Foto Pegawai</div>
    <div class="col-sm-10">
        <div class="row">
            <div class="col-sm-3">
                <img src="<?= $foto_source = (empty($datapegawai['image'])) ? base_url('assets/img/default-profile.png') : (($datapegawai['image'] == 'default.png') ? base_url('assets/img/default-profile.png') : base_url('storage/profile/' . $datapegawai['image'])); ?>" class="img-thumbnail">
            </div>
            <div class="col-sm-9">
                <div class="custom-file">
                    <input type="file" class="custom-file-input edit-pas-pegawai" id="foto_pegawai_edit" name="foto_pegawai_edit">
                    <label class="custom-file-label edit-pas-pegawai-label" for="foto_pegawai_edit">Choose file. Max 2 MB</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="my-2" id="info-edit"></div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-times mr-1"></span>Batal</button>
    <button type="submit" class="btn btn-primary" id="editpgw-btn"><span class="fas fa-pen mr-1"></span>Edit</button>
</div>
</form>

<script>
    $("#sh_hd_pass button").on('click', function(event) {
        event.preventDefault();
        if ($('#sh_hd_pass input').attr("type") == "text") {
            $('#sh_hd_pass input').attr('type', 'password');
            $('#sh_hd_pass span').addClass("fa-eye-slash");
            $('#sh_hd_pass span').removeClass("fa-eye");
        } else if ($('#sh_hd_pass input').attr("type") == "password") {
            $('#sh_hd_pass input').attr('type', 'text');
            $('#sh_hd_pass span').removeClass("fa-eye-slash");
            $('#sh_hd_pass span').addClass("fa-eye");
        }
    });

    $('.edit-pas-pegawai').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.edit-pas-pegawai-label').addClass("selected").html(fileName);
    });
</script>
