<div class="row">
    <div class="col-12 my-3">
        <?php

        $dataform1 = array(
            array('nama' => "Nama Pasien", 'tipe' => "text", 'holder' => "Masukkan Nama Pasien", 'status' => "disabled", 'name' => 'nama_pasien'),
            array('nama' => "Tanggal Lahir", 'name' => "tgl_lahir", 'tipe' => "text", 'values' => "$tgl_lahir", 'holder' => "Tanggal Lahir", 'status' => "disabled"),
            array('nama' => "Jenis Kelamin", 'name' => "jenkel", 'tipe' => "text", 'holder' => "Masukkan Jenis Kelamin", 'status' => "disabled"),
            array('nama' => "Agama", 'name' => "nama_agama", 'tipe' => "text", 'holder' => "Masukkan Nama Agama", 'status' => "disabled"),
            array('nama' => "Suku Bangsa", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Suku", 'status' => "", 'name' => 'nama_suku'),
            array('nama' => "No.Rm", 'tipe' => "text", 'values' => "$no_rm", 'holder' => "Masukkan Nama Suku", 'status' => "disabled", 'name' => 'no_rm'),
        );
        foreach ($dataform1 as $a) {
            echo "<div class='form-group mt-3'>";
            echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
            echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>";
        }
        ?>

    </div>

    <div class="row my-4">
        <table class="table-bordered border-dark">
            <thead>
                <th>
                    <h3 class="text-uppercase text-white bg-secondary text-center">penolakan pengobatan</h3>
                </th>
            </thead>
            <tbody>
                <td class="p-3">
                    <div class="main-persetujuan d-flex align-items-center flex-wrap  gap-2">

                        <label for="">Yang bertanda tangan di bawah ini, saya, nama </label><input type="text" class="form-control border-dark w-25 my-1" name="nama_pasien" disabled>
                        <label for="">umur </label>
                        <input type="text" class="form-control border-dark w-25 my-1" name="umur" disabled>
                        <label for=""><input type="text" class="form-control border-dark" name="jenkel" disabled></label>
                        <label for="" class="">alamat </label>
                        <input type="text" class="form-control border-dark w-25 my-1" name="alamat" disabled> <label for="" class="mx-1">dengan ini menyatakan PENOLAKAN PENGOBATAN </label><input type="text" class="form-control border-dark w-50 my-1" name="penolakan_pengobatan"> <label for="" class="mx-1">terhadap saya / </label>
                        <label for="" class="mx-1">saya* bernama </label><input type="text" class="form-control border-dark w-25 my-1" name="nama_pasien" disabled>, umur <input type="text" class="form-control border-dark w-25 my-1" name="umur" disabled> <input type="text" class="form-control border-dark w-25" name="jenkel" disabled>
                        <label for="">Alamat</label>
                        <input type="text" class="form-control border-dark w-25 my-1" name="alamat" disabled>
                    </div>

                    <div class="mt-3">
                        <span>Saya memahami perlunya dan manfaat pengobatan tersebut sebagaimana telah dijelaskan seperti di atas kepada saya, termasuk risiko dan komplikasi yang mungkin timbul.
                            Saya bertanggungjawab secara penuh atas segala akibat yang mungkin timbul sebagai akibat tidak dilakukannya pengobatan tersebut.
                        </span>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-2 align-items-center">
                        <label for=""><?= $city_sign ?>,</label> <input type="date" name="tanggal_2" class="form-control border-dark w-25" value="<?= date('Y-m-d'); ?>">
                    </div>


                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="">Disetujui Oleh Pasien :</label>
                                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 350px; height:200px" data-input-name="image_drawer_state_image_2" />
                                <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
                                    value="" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="">Saksi Wali/Keluarga:</label>
                                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 350px; height:200px" data-input-name="image_drawer_state_image_3" />
                                <input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3"
                                    value="" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="">Saksi Rumah Sakit:</label>
                                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 350px; height:200px" data-input-name="image_drawer_state_image_4" />
                                <input type="hidden" id="image_drawer_state_image_4" name="image_drawer_state_image_4"
                                    value="" />
                            </div>
                        </div>
                    </div>
                    <br><br>
                </td>
            </tbody>
        </table>
    </div>
    <!-- BATAS GANTI -->


    <script>
        $(document).ready(function() {

            const globalData = <?= $global_data; ?>;
            const {
                id_dokter
            } = globalData;

            QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')


        });

        $(document).delay(1000).queue(function() {
            callMarkerManager();
        });

        function cbCommon(data) {

            populateFormFields(data);
            // callMarkerManager();
            // fill image
        }
    </script>