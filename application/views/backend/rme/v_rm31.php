<!-- RM 31 Formulir PENYIMPANAN -->

<div class="row">

    <div class="col-12">
        <div class="form-group d-flex align-items-center">
            <label for="" class="col-2">Nama Pasien :</label>
            <input type="text" class="form-control border-dark" name="nama_pasien">
        </div>
        <div class="form-group d-flex align-items-center">
            <label for="" class="col-2">No. Rm :</label>
            <input type="text" class="form-control border-dark" name="no_rm">
        </div>
        <div class="form-group d-flex align-items-center">
            <label for="" class="col-2">Ruangan :</label>
            <input type="text" class="form-control border-dark" name="nama_ruangan">
        </div>
    </div>

</div>

<div class="col-12">
    <table class="table table-bordered" style="border: 1px solid black;">
        <tr class="text-center">
            <th rowspan="2">No</th>
            <th rowspan="2" class="text-center">Jenis Harta / Benda</th>
            <th rowspan="2">Jumlah</th>
            <th colspan="4" class="text-center">kondisi barang</th>
        </tr>
        <tr>
            <th colspan="2">
                <div class="text-center">
                    <span>Saat dititipkan</span>
                    <div>
                        <label for="">Tanggal :</label>
                        <input type="date" class="form-control border-dark" value="<?= date('Y-m-d') ?>" name="tgl_titip">
                    </div>
                </div>
            </th>
            <th colspan="2">
                <div class="text-center">
                    <span>Saat serahkan</span>
                    <div>
                        <label for="">Tanggal :</label>
                        <input type="date" value="<?= date('Y-m-d') ?>" name="tgl_diserahkan" class="form-control border-dark">
                    </div>
                </div>
            </th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th class="text-center">Baik</th>
            <th class="text-center">Buruk</th>
            <th class="text-center">Baik</th>
            <th class="text-center">Buruk</th>
        </tr>
        </thead>
        <tbody>
            <!-- Contoh baris data -->
            <tr>
                <td>1</td>
                <td><input type="text" class="form-control border-dark" name="j_harta_1"></td>
                <td><input type="text" class="form-control border-dark" name="jumlah_1"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_dititipkan" value="baik" id="baik_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_dititipkan" value="buruk" id="buruk_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_diserahkan" value="baik" id="baik_diserahkan"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_diserahkan" value="buruk" id="buruk_diserahkan"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="text" class="form-control border-dark" name="j_harta_2"></td>
                <td><input type="text" class="form-control border-dark" name="jumlah_2"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_dititipkan2" value="baik" id="baik_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_dititipkan2" value="buruk" id="buruk_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_diserahkan2" value="baik" id="baik_diserahkan"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_diserahkan2" value="buruk" id="buruk_diserahkan"></td>
            </tr>
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            <tr>
                <td>3</td>
                <td><input type="text" class="form-control border-dark" name="j_harta_3"></td>
                <td><input type="text" class="form-control border-dark" name="jumlah_3"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_dititipkan3" value="baik" id="baik_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_dititipkan3" value="buruk" id="buruk_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_diserahkan3" value="baik" id="baik_diserahkan"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_diserahkan3" value="buruk" id="buruk_diserahkan"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="text" class="form-control border-dark" name="j_harta_4"></td>
                <td><input type="text" class="form-control border-dark" name="jumlah_4"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_dititipkan4" value="baik" id="baik_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_dititipkan4" value="buruk" id="buruk_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_diserahkan4" value="baik" id="baik_diserahkan"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_diserahkan4" value="buruk" id="buruk_diserahkan"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="text" class="form-control border-dark" name="j_harta_5"></td>
                <td><input type="text" class="form-control border-dark" name="jumlah_5"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_dititipkan5" value="baik" id="baik_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_dititipkan5" value="buruk" id="buruk_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_diserahkan5" value="baik" id="baik_diserahkan"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_diserahkan5" value="buruk" id="buruk_diserahkan"></td>
            </tr>
            <tr>
                <td>6</td>
                <td><input type="text" class="form-control border-dark" name="j_harta_6"></td>
                <td><input type="text" class="form-control border-dark" name="jumlah_6"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_dititipkan6" value="baik" id="baik_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_dititipkan6" value="buruk" id="buruk_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_diserahkan6" value="baik" id="baik_diserahkan"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_diserahkan6" value="buruk" id="buruk_diserahkan"></td>
            </tr>
            <tr>
                <td>7</td>
                <td><input type="text" class="form-control border-dark" name="j_harta_7"></td>
                <td><input type="text" class="form-control border-dark" name="jumlah_7"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_dititipkan7" value="baik" id="baik_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_dititipkan7" value="buruk" id="buruk_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_diserahkan7" value="baik" id="baik_diserahkan"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_diserahkan7" value="buruk" id="buruk_diserahkan"></td>
            </tr>

            <tr>
                <td>8</td>
                <td><input type="text" class="form-control border-dark" name="j_harta_8"></td>
                <td><input type="text" class="form-control border-dark" name="jumlah_8"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_dititipkan8" value="baik" id="baik_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_dititipkan8" value="buruk" id="buruk_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_diserahkan8" value="baik" id="baik_diserahkan"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_diserahkan8" value="buruk" id="buruk_diserahkan"></td>
            </tr>
            <tr>
                <td>9</td>
                <td><input type="text" class="form-control border-dark" name="j_harta_9"></td>
                <td><input type="text" class="form-control border-dark" name="jumlah_9"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_dititipkan9" value="baik" id="baik_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_dititipkan9" value="buruk" id="buruk_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_diserahkan9" value="baik" id="baik_diserahkan"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_diserahkan9" value="buruk" id="buruk_diserahkan"></td>
            </tr>
            <tr>
                <td>10</td>
                <td><input type="text" class="form-control border-dark" name="j_harta_10"></td>
                <td><input type="text" class="form-control border-dark" name="jumlah_10"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_dititipkan10" value="baik" id="baik_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_dititipkan10" value="buruk" id="buruk_titip"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="saat_diserahkan10" value="baik" id="baik_diserahkan"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="saat_diserahkan10" value="buruk" id="buruk_diserahkan"></td>
            </tr>
        </tbody>
    </table>

    <div class="row">
        <div class="col-12">
            <span>Dengan ini saya juga menyatakan memberi ijin kepada keluarga saya apabila ingin mengambil barang-barang tersebut, yaitu kepada :</span>
            <div class="">
                <div class="d-flex align-items-center gap-2 my-3">
                    <label for="">1</label>
                    <input type="text" class="form-control border-dark" name="ijin_keluarga1">
                </div>
                <div class="d-flex align-items-center gap-2 my-3">
                    <label for="">2</label>
                    <input type="text" class="form-control border-dark" name="ijin_keluarga2">
                </div>
                <div class="d-flex align-items-center gap-2 my-3">
                    <label for="">3</label>
                    <input type="text" class="form-control border-dark" name="keluarga_3">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-end mb-3">
            <div class="d-flex gap-2 align-items-center justify-content-end">
                <label for="" class="flex-shirnk-0 col-6"><?= $city_sign; ?>, </label>
                <input type="date" class="form-control border-dark w-25" name="tanggal_tdd" value="<?= date('Y-m-d'); ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4 text-center">
            <label for="">Petugas Penerima,<p>Satpam
                </p></label>
            <div>
                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                    style="width: 350px;height:180px;" data-input-name="image_drawer_state_image_1" />
                <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                    value="" />
                <div class="mt-2">
                    <input type="text" class="form-control" style="border: 1px solid black;" name="petugas_satpam_1">
                </div>

            </div>
        </div>
        <div class="col-4 text-center">
            <label for="">Pemohon,<p>Pasien/Keluarga Pasien
                </p></label>
            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                style="width: 350px;height:180px;" data-input-name="image_drawer_state_image_2" />
            <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
                value="" />
            <div class="mt-2">
                <input type="text" class="form-control" style="border: 1px solid black;" name="pemohon_keluarga_1">
            </div>
        </div>
        <div class="col-4 text-center">
            <label for="">Saksi,<p>Perawat
                </p></label>
            <div class="my-2">
                <div class="my-2">
                    <img class="img-responsive center-block " style="width: 32%;" id="qr_perawat_1" />
                </div>
                <input type="text" name="nama_perawat_form" id="nama_perawat_form" class="form-control border-dark">
                <input type="hidden" name="id_perawat_form" id="id_perawat_form">
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-3 text-center">
            <span>Catatan: Dalam keadaan khusus pasien tidak sadar, saksi dapat 2 orang dari pihak pengantar dan dari RS
            </span>
            <hr>
            <h4 class="fw-bold mb-4">Penyerahan Benda Milik Pasien</h4>
        </div>

        <div class="row mb-2">
            <div class="d-flex gap-2 align-items-center justify-content-end">
                <label for="" class="flex-shirnk-0 "><?= $city_sign; ?>, </label>
                <input type="date" class="form-control border-dark w-25" name="tanggal_tdd_2" value="<?= date('Y-m-d'); ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-4 text-center">
                <label for="">Petugas Penerima,<p>Satpam
                    </p></label>
                <div>
                    <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                        style="width: 350px;height:180px;" data-input-name="image_drawer_state_image_1" />
                    <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                        value="" />
                    <div class="mt-2">
                        <input type="text" class="form-control" style="border: 1px solid black;" name="petugas_satpam_2">
                    </div>
                </div>
            </div>
            <div class="col-4 text-center">
                <label for="">Pemohon,<p>Pasien/Keluarga Pasien
                    </p></label>
                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                    style="width: 350px;height:180px;" data-input-name="image_drawer_state_image_2" />
                <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
                    value="" />
                <div class="mt-2">
                    <input type="text" class="form-control" style="border: 1px solid black;" name="pemohon_keluarga_2">
                </div>
            </div>
            <div class="col-4 text-center">
                <label for="">Saksi,<p>Perawat
                    </p></label>
                <div class="my-2">
                    <img class="img-responsive center-block " style="width: 32%;" id="qr_perawat_2" />
                </div>
                <input type="text" name="nama_perawat_form" id="nama_perawat_form_2" class="form-control border-dark">
                <input type="hidden" name="id_perawat_form" id="id_perawat_form_2">
            </div>
        </div>

    </div>

    <script>
        $(document).delay(1000).queue(function() {
            callMarkerManager();
        });

        function cbCommon(data) {
            populateFormFields(data);
        }

        $(document).ready(function() {
            const globalData = <?= $global_data; ?>;
            const {
                id_perawat,
                nama_perawat
            } = globalData;

            $('#id_perawat_form').val($('#id_perawat_form').val() || id_perawat);
            $('#nama_perawat_form').val($('#nama_perawat_form').val() || nama_perawat);
            $('#nama_perawat_form').attr('disabled', true);

            $('#id_perawat_form_2').val($('#id_perawat_form_2').val() || id_perawat);
            $('#nama_perawat_form_2').val($('#nama_perawat_form_2').val() || nama_perawat);
            $('#nama_perawat_form_2').attr('disabled', true);

            QRSignatureAPI($('#id_perawat_form').val(), 'qr_perawat_1');
            QRSignatureAPI($('#id_perawat_form_2').val(), 'qr_perawat_2');
        });
    </script>