<div class="container">
    <div class="jumbotron shadow-lg">
        <div class="text-center">
            <img src="<?= (empty($dataapp['logo_instansi'])) ? FCPATH . 'assets/img/clock-image.png' : (($dataapp['logo_instansi'] == 'default-logo.png') ? FCPATH . 'assets/img/clock-image.png' : FCPATH . 'storage/setting/' . $dataapp['logo_instansi']); ?>" style="width:20%;">
            <h3>
                <?= (empty($dataapp['nama_instansi'])) ? '[Nama Instansi Belum Disetting]' : $dataapp['nama_instansi']; ?>
            </h3>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Kode Pegawai</th>
                <th scope="col">Role</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Bagian Shift</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($datapegawai as $pegawai) : ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $pegawai->nama_lengkap; ?></td>
                    <td><?= $pegawai->kode_pegawai; ?></td>
                    <td><?= $pegawai->role_id; ?></td>
                    <td><?= $pegawai->jabatan; ?></td>
					<td><?= $pegawai->bagian_shift; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="small">
        PDF was generated on <?= date("Y-m-d H:i:s"); ?>
    </div>
</div>
