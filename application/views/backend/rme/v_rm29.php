<!-- rm 29 -->
<table class="table table-bordered border-dark">
    <tr>
        <td colspan="3">
            <p class="text-center"><strong>PENILAIAN NYERI</strong></p>
        </td>
        <td colspan="7">
            <p>Nama : <input type="text" class="form-control border-dark" name="nama_pasien"></p>
            <p>Tgl. Lahir : <input type="date" class="form-control border-dark" name="tanggal_lahir"> </p>
            <p>jenis kelamin :<input type="text" class="form-control border-dark" name="jenkel"></p>
            <p>No. RM : <input type="text" class="form-control border-dark" name="no_rm"></p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p><strong>Tools Penilaian Nyeri :</strong></p>
        </td>
        <td colspan="8">
            <div class="form-check">
                <input class="custom-checkbox-success" type="checkbox" name="flacc" value="FLACC">
                <label class="form-check-label"><strong>FLACC</strong></label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="checkbox" name="wong_baker" value="WONG BAKER">
                <label class="form-check-label"><strong>WONG BAKER</strong></label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="checkbox" name="numeric" value="NUMERIC">
                <label class="form-check-label"><strong>NUMERIC</strong></label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="checkbox" name="cpot" value="CPOT">
                <label class="form-check-label"><strong>CPOT</strong></label>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" rowspan="4">
            <p>Parameter Nyeri</p>
        </td>
        <td colspan="8">
            <p><strong>Penilaian</strong></p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p><strong>Pelaksanaan – I</strong></p>
        </td>
        <td colspan="2">
            <p><strong>Pelaksanaan – II</strong></p>
        </td>
        <td colspan="2">
            <p><strong>Pelaksanaan – III</strong></p>
        </td>
        <td colspan="2">
            <p><strong>Pelaksanaan - IV</strong></p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p><strong>Tgl: <input type="date" class="form-control border-dark" name="tgl_pelaksanaan[]"></strong></p>
        </td>
        <td colspan="2">
            <p><strong>Tgl: <input type="date" class="form-control border-dark" name="tgl_pelaksanaan[]"></strong></p>
        </td>
        <td colspan="2">
            <p><strong>Tgl: <input type="date" class="form-control border-dark" name="tgl_pelaksanaan[]"></strong></p>
        </td>
        <td colspan="2">
            <p><strong>Tgl: <input type="date" class="form-control border-dark" name="tgl_pelaksanaan[]"></strong></p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p><strong>Jam : <input type="time" class="form-control border-dark" name="jam_pelaksanaan[]"></strong></p>
        </td>
        <td colspan="2">
            <p><strong>Jam : <input type="time" class="form-control border-dark" name="jam_pelaksanaan[]"></strong></p>
        </td>
        <td colspan="2">
            <p><strong>Jam : <input type="time" class="form-control border-dark" name="jam_pelaksanaan[]"></strong></p>
        </td>
        <td colspan="2">
            <p><strong>Jam : <input type="time" class="form-control border-dark" name="jam_pelaksanaan[]"></strong></p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p><strong>Paraliatif / Provokotif (p)</strong></p>
            <p>
                (kaji penyebab primer / sekunder nyeri, factor-faktor yang mempengaruhi
                peningkatan atau pengurangan nyeri)
            </p>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="paraliatif[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="paraliatif[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="paraliatif[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="paraliatif[]"></td>
    </tr>
    <tr>
        <td colspan="2">
            <p><strong>Quality/Quantity (Q)</strong></p>
            <p>
                (kaji karakteristik nyeri secara komprehensif meliputi bagaimana nyeri
                dirasakan (tajam/tumpul/terbakar) dan frekuensinya, tentukan jenis nyeri
                (akut/kronis) dan mekanismenya)
            </p>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="quality[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="quality[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="quality[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="quality[]"></td>
    </tr>
    <tr>
        <td colspan="2">
            <p><strong>Region (R)</strong></p>
            <p>
                (kaji lokasi /daerah nyeri dirasakan, kaji jika nyeri dirasakan di
                daerah lain atau nyeri menyebar)
            </p>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="region[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="region[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="region[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="region[]"></td>
    </tr>
    <tr>
        <td colspan="2">
            <p><strong>Severity/Scale (S)</strong></p>
            <p>(kaji skala nyeri)</p>
        </td>
        <td colspan="2">
            <p>Nilai:
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_1" value="tidak_nyeri">
                <label class="form-check-label">Tidak Nyeri</label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_1" value="nyeri_ringan">
                <label class="form-check-label">Nyeri Ringan</label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_1" value="nyeri_sedang">
                <label class="form-check-label">Nyeri Sedang</label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_1" value="nyeri_berat">
                <label class="form-check-label">Nyeri Berat</label>
            </div>
        </td>
        <td colspan="2">
            <p>Nilai:
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_2" value="Tidak Nyeri">
                <label class="form-check-label">Tidak Nyeri</label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_2" value="Nyeri Ringan">
                <label class="form-check-label">Nyeri Ringan</label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_2" value="Nyeri Sedang">
                <label class="form-check-label">Nyeri Sedang</label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_2" value="Nyeri Berat">
                <label class="form-check-label">Nyeri Berat</label>
            </div>
        </td>
        <td colspan="2">
            <p>Nilai:
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_3" value="Tidak Nyeri">
                <label class="form-check-label">Tidak Nyeri</label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_3" value="Nyeri Ringan">
                <label class="form-check-label">Nyeri Ringan</label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_3" value="Nyeri Sedang">
                <label class="form-check-label">Nyeri Sedang</label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_3" value="Nyeri Berat">
                <label class="form-check-label">Nyeri Berat</label>
            </div>
        </td>
        <td colspan="2">
            <p>Nilai:
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_4" value="Tidak Nyeri">
                <label class="form-check-label">Tidak Nyeri</label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_4" value="Nyeri Ringan">
                <label class="form-check-label">Nyeri Ringan</label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_4" value="Nyeri Sedang">
                <label class="form-check-label">Nyeri Sedang</label>
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="severity_4" value="Nyeri Berat">
                <label class="form-check-label">Nyeri Berat</label>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p><strong>Time (T)</strong></p>
            <p>(kaji kapan saja nyeri dirasakan dan durasi / lama nyeri)</p>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="time[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="time[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="time[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="time[]"></td>
    </tr>
    <tr>
        <td colspan="2" rowspan="2">
            <p><strong>Nama dan Paraf yang Melakukan Penilaian (Unit)</strong></p>
        </td>
        <td colspan="3">
            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width:350px; height:200px;" data-input-name="image_drawer_state_image_1" />
            <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1" value="" />
            <input type="text" name="pemohon_1" class="form-control border-dark mt-4">
        </td>
        <td colspan="4">
            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width:350px; height:200px;" data-input-name="image_drawer_state_image_2" />
            <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2" value="" />
            <input type="text" name="pemohon_2" class="form-control border-dark mt-4">
        </td>
    </tr>
    <tr>

        <td colspan="3">
            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width:350px; height:200px;" data-input-name="image_drawer_state_image_3" />
            <input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3" value="" />
            <input type="text" name="pemohon_3" class="form-control border-dark mt-4">
        </td>
        <td colspan="4">
            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width:350px; height:200px;" data-input-name="image_drawer_state_image_4" />
            <input type="hidden" id="image_drawer_state_image_4" name="image_drawer_state_image_4" value="" />
            <input type="text" name="pemohon_4" class="form-control border-dark mt-4">
        </td>
    </tr>
    <tr>
        <td colspan="10">
            <h3 class="text-center"><strong>PENATALAKSANAAN NYERI</strong></h3>
        </td>
    </tr>
    <tr>
        <td colspan="2" rowspan="4">
            <p><strong>Tata Laksana Nyeri</strong></p>
        </td>
        <td colspan="8">
            <p><strong>Penatalaksanaan</strong></p>
        </td>
    </tr>
    <tr>
        <td>
            <p><strong>Penatalaksanaan – I</strong></p>
        </td>
        <td colspan="2">
            <p><strong>Penatalaksanaan – II</strong></p>
        </td>
        <td colspan="2">
            <p><strong>Penata laksanaan – III</strong></p>
        </td>
        <td colspan="3">
            <p><strong>Penatalaksaan - IV</strong></p>
        </td>
    </tr>
    <tr>
        <td>
            <p><strong>Tgl: <input type="date" class="form-control border-dark" name="tgl_tatalaksana[]"></strong></p>
        </td>
        <td colspan="2">
            <p><strong>Tgl: <input type="date" class="form-control border-dark" name="tgl_tatalaksana[]"></strong></p>
        </td>
        <td colspan="2">
            <p><strong>Tgl: <input type="date" class="form-control border-dark" name="tgl_tatalaksana[]"></strong></p>
        </td>
        <td colspan="3">
            <p><strong>Tgl: <input type="date" class="form-control border-dark" name="tgl_tatalaksana[]"></strong></p>
        </td>
    </tr>
    <tr>
        <td>
            <p><strong>Jam : <input type="time" class="form-control border-dark" name="jam_tatalaksana[]"></strong></p>
        </td>
        <td colspan="2">
            <p><strong>Jam : <input type="time" class="form-control border-dark" name="jam_tatalaksana[]"></strong></p>
        </td>
        <td colspan="2">
            <p><strong>Jam : <input type="time" class="form-control border-dark" name="jam_tatalaksana[]"></strong></p>
        </td>
        <td colspan="3">
            <p><strong>Jam : <input type="time" class="form-control border-dark" name="jam_tatalaksana[]"></strong></p>
        </td>
    </tr>
    <tr>
        <td rowspan="5">
            <p><strong>NON</strong></p>
            <p><strong> FARMAKOLOGI</strong></p>
        </td>
        <td>
            <p>Relaksasi</p>
        </td>
        <td><input type="text" class="form-control border-dark" name="relaksasi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="relaksasi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="relaksasi[]"></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="relaksasi[]"></td>
    </tr>
    <tr>
        <td>
            <p>Teknik nafas dalam</p>
        </td>
        <td><input type="text" class="form-control border-dark" name="nafas[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="nafas[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="nafas[]"></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="nafas[]"></td>
    </tr>
    <tr>
        <td>
            <p>Distraksi</p>
        </td>
        <td><input type="text" class="form-control border-dark" name="distraksi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="distraksi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="distraksi[]"></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="distraksi[]"></td>
    </tr>
    <tr>
        <td>
            <p>Pijat (massage)</p>
        </td>
        <td><input type="text" class="form-control border-dark" name="pijat[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="pijat[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="pijat[]"></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="pijat[]"></td>
    </tr>
    <tr>
        <td>
            <p>Dll : <input type="text" class="form-control border-dark" name="lainnya[]"></p>
        </td>
        <td><input type="text" class="form-control border-dark" name="lainnya[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="lainnya[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="lainnya[]"></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="lainnya[]"></td>
    </tr>
    <tr>
        <td colspan="2" rowspan="5">
            <p><strong>FARMAKOLOGI</strong></p>
        </td>
        <td><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
    </tr>
    <tr>
        <td><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
    </tr>
    <tr>
        <td><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
    </tr>
    <tr>
        <td><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
    </tr>
    <tr>
        <td><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="farmakologi[]"></td>
    </tr>
    <tr>
        <td colspan="2" rowspan="2">
            <p><strong>Nama dan Paraf Melakukan Penilaian (Unit)</strong></p>
        </td>
        <td colspan="3">
            <img class="marker-image" id="example-image<?= $i++ ?>" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width:350px; height:200px;" data-input-name="image_drawer_state_image_5" />
            <input type="hidden" id="image_drawer_state_image_5" name="image_drawer_state_image_5" value="" />
            <input type="text" name="pemohon[]" class="form-control border-dark mt-4" />
        </td>
        <td colspan="4">
            <img class="marker-image" id="example-image<?= $i++ ?>" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width:350px; height:200px;" data-input-name="image_drawer_state_image_6" />
            <input type="hidden" id="image_drawer_state_image_6" name="image_drawer_state_image_6" value="" />
            <input type="text" name="pemohon[]" class="form-control border-dark mt-4" />
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <img class="marker-image" id="example-image<?= $i++ ?>" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width:350px; height:200px;" data-input-name="image_drawer_state_image_7" />
            <input type="hidden" id="image_drawer_state_image_7" name="image_drawer_state_image_7" value="" />
            <input type="text" name="pemohon[]" class="form-control border-dark mt-4" />
        </td>
        <td colspan="4">
            <img class="marker-image" id="example-image<?= $i++ ?>" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width:350px; height:200px;" data-input-name="image_drawer_state_image_8" />
            <input type="hidden" id="image_drawer_state_image_8" name="image_drawer_state_image_8" value="" />
            <input type="text" name="pemohon[]" class="form-control border-dark mt-4" />
        </td>
    </tr>
    <tr>
        <td colspan="2" rowspan="2">
            <p><strong>Nama dan Paraf Keluarga</strong></p>
        </td>
        <td colspan="3">
            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width:350px; height:200px;" data-input-name="image_drawer_state_image_11" />
            <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11" value="" />
            <input type="text" name="keluarga[]" class="form-control border-dark mt-4">
        </td>
        <td colspan="4">
            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width:350px; height:200px;" data-input-name="image_drawer_state_image_21" />
            <input type="hidden" id="image_drawer_state_image_21" name="image_drawer_state_image_21" value="" />
            <input type="text" name="keluarga[]" class="form-control border-dark mt-4">
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width:350px; height:200px;" data-input-name="image_drawer_state_image_31" />
            <input type="hidden" id="image_drawer_state_image_31" name="image_drawer_state_image_31" value="" />
            <input type="text" name="keluarga[]" class="form-control border-dark mt-4">
        </td>
        <td colspan="4">
            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width:350px; height:200px;" data-input-name="image_drawer_state_image_41" />
            <input type="hidden" id="image_drawer_state_image_41" name="image_drawer_state_image_41" value="" />
            <input type="text" name="keluarga[]" class="form-control border-dark mt-4">
        </td>
    </tr>
</table>
<script>
    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);

        // fill image
    }
</script>