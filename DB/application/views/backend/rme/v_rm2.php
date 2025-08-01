<div class="row">
    <div class="col-6">

        <?php
        // Gabungkan tanggal lahir dan umur
        $tgl_lahir = $tgl_lahir;
        $umur = $umur;
        $values = "$tgl_lahir / $umur";


        $dataform1 = array(
            array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Pasien", 'status' => "", 'name' => "nama_pasien"),
            array('nama' => "Tanggal Lahir/Umur", 'name' => "tanggall_lahir", 'tipe' => "text", 'values' => $values, 'holder' => "Masukkan Tanggal Lahir", 'status' => "disabled"),
            array('nama' => "Jenis Kelamin", 'name' => "jenkel", 'tipe' => "text", 'values' => "", 'holder' => "jenkel", 'status' => ""),
            array('nama' => "Agama", 'name' => "nama_agama", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Agama", 'status' => ""),
            array('nama' => "Nomor Rm", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nomor Rm", 'status' => "", 'name' => 'no_rm'),
        );
        foreach ($dataform1 as $a) {
            echo "<div class='form-group mt-2'>";
            echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
            echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>
        </div>";
        }
        ?>
    </div>

    <div class="col-6">

        <?php
        // Daftar input field
        $dataform2 = array(
            array('nama' => "Pendidikan", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Pendidikan", 'status' => "", 'name' => "pendidikan_terakhir"),
            array('nama' => "Pekerjaan", 'name' => "nama_pekerjaan", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Pekerjaan", 'status' => ""),
            array('nama' => "Nik", 'name' => "nik", 'tipe' => "text", 'values' => "", 'holder' => "nik", 'status' => ""),
            array('nama' => "Suku", 'name' => "nama_suku", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Suku", 'status' => ""),
            array('nama' => "Alamat", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Alamat", 'status' => "", 'name' => 'alamat'),
        );
        foreach ($dataform2 as $b) {
            echo "<div class='form-group mt-2'>";
            echo "<label for='{$b['nama']}'>{$b['nama']} :</label>";
            echo "<input type='{$b['tipe']}' class='form-control {$b['name']} border-dark' name='{$b['name']}' id='{$b['name']}' placeholder='{$b['holder']}' {$b['status']} >
        </div>";
        }
        ?>
    </div>
</div>

<div class="row">
    <div class="ps-3 pb-2"> ( Di isi oleh Perawat) </div>
    <table class="table-bordered border-dark">
        <tbody>
            <tr>
                <td>
                    <div class="d-flex gap-2 p-2 align-items-center">
                        <label for="" class="flex-shrink-0">Tanggal</label>
                        <input type="date" class="form-control border-dark" name="tanggal" value="<?= date('Y-m-d'); ?>">
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 p-2 align-items-center">
                        <label for="" class="flex-shrink-0">Waktu</label>
                        <input type="time" class="form-control border-dark me-2" name="waktu" value="<?= date('H:i'); ?>">WIB
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 p-2  align-items-center">
                        <label for="" class="flex-shrink-0">Bed IGD No</label>
                        <input type="text" class="form-control border-dark" name="bed">
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <div class="d-flex gap-3 p-2 align-items-center">
                        <span class="flex-shrink-0">Di Bawa Ke Rs Oleh :</span>
                        <div class="d-flex align-items-center gap-2">
                            <input type="radio" class="custom-checkbox-success" name="nama_rs" value="keluarga" id="keluarga"><label for="keluarga" class="flex-shrink-0">Keluarga</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="radio" class="custom-checkbox-success" name="nama_rs" value="datang_sendiri" id="datang_sendiri"><label for="datang_sendiri" class="flex-shrink-0">Datang Sendiri</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="radio" class="custom-checkbox-success" name="nama_rs" value=" polisi" id="polisi"><label for="polisi" class="flex-shrink-0">Polisi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 w-50">
                            <label for="lain-lain_rs" class="flex-shrink-0">lain - lain</label><input type="text" class="form-control border-dark" name="lain_lain" id="lain-lain_rs">
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <div class="d-flex gap-3 p-2 align-items-center">
                        <span class="flex-shrink-0">Status Fungsional :</span>
                        <input type="radio" class="custom-checkbox-success" name="status" value="jalan_tanpa_bantuan" id="jalan_tanpa_bantuan"><label for="jalan_tanpa_bantuan" class="flex-shrink-0">Jalan Tanpa Bantuan </label>
                        <input type="radio" class="custom-checkbox-success" name="status" value="kursi_roda" id="kursi_roda"><label for="kursi_roda" class="flex-shrink-0">Kursi Roda </label>
                        <input type="radio" class="custom-checkbox-success" name="status" value="tempat_tidur" id="tempat_tidur"><label for="tempat_tidur" class="flex-shrink-0">Tempat Tidur Dorong </label>
                        <input type="radio" class="custom-checkbox-success" name="status" value="jalan_bantuan" id="jalan_bantuan"><label for="jalan_bantuan" class="flex-shrink-0">Jalan Dengan Bantuan</label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<div class="row my-3">
    <div class="ps-3 pb-2"> ( Di isi oleh Dokter) </div>
    <table class="table table-bordered border-dark ">
        <tbody>
            <tr>
                <th class="p-2 text-center" colspan="6">TRIASE ( KATEGORI ATS SYSTEM )</th>
            </tr>
            <tr class="text-center">
                <th></th>
                <th class="bg-danger text-white">
                    <div>Category 1</div>
                    <div>Segera</div>
                </th>
                <th class="bg-danger text-white">
                    <div>Category 2</div>
                    <div>10 Menit</div>
                </th>
                <th class="bg-warning text-white">
                    <div>Category 3</div>
                    <div>30 Menit</div>
                </th>
                <th class="bg-success text-white">
                    <div>Category 3</div>
                    <div>60 Menit</div>
                </th>
                <th class="bg-success text-white">
                    <div>Category 3</div>
                    <div>120 Menit</div>
                </th>
            </tr>
        </tbody>

        <tbody>
            <tr>
                <td>
                    <div class="text-uppercase p-2">airway</div>
                </td>

                <!-- airway_input_1 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="value_1_1" id="airway_input_1_value_1_1" value="value_1_1">
                            </div>
                            <div>
                                <label for="airway_input_1_value_1_1">Obstruksi jalan Nafas total</label>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="value_1_2_airway" id="airway_input_1_value_1_2" value="value_1_2">
                            </div>
                            <div>
                                <label for="airway_input_1_value_1_2">Parsial</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- airway_input_2 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="value_2_1" id="airway_input_2_value_2_1" value="value_2_1">
                            </div>
                            <div>
                                <label for="airway_input_2_value_2_1">Patent</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- airway_input_3 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="airway_input_3" id="airway_input_3_value_3_1" value="value_3_1">
                            </div>
                            <div>
                                <label for="airway_input_3_value_3_1">Patent</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- airway_input_4 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="airway_input_4" id="airway_input_4_value_4_1" value="value_4_1">
                            </div>
                            <div>
                                <label for="airway_input_4_value_4_1">Patent</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- airway_input_5 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="airway_input_5" id="airway_input_5_value_5_1" value="value_5_1">
                            </div>
                            <div>
                                <label for="airway_input_5_value_5_1">Patent</label>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="text-uppercase p-2">breathing</div>
                </td>

                <!-- breathing_input_1 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="breathing_input_1" id="breathing_input_1_value_1_1" value="value_1_1">
                            </div>
                            <div>
                                <label for="breathing_input_1_value_1_1">Distress pernafasan berat (contoh : penggunaan berat beberapa otot pernafasan tambahan, retraksi iga berat, sianosis akut)</label>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="value_1_2" id="breathing_input_1_value_1_2" value="value_1_2">
                            </div>
                            <div>
                                <label for="breathing_input_1_value_1_2">Respiratory arrest</label>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="value_1_3_hipoventilasi" id="breathing_input_1_value_1_3" value="value_1_3">
                            </div>
                            <div>
                                <label for="breathing_input_1_value_1_3">Hipoventilasi</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- breathing_input_2 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="breathing_input_2" id="breathing_input_2_value_2_1" value="value_2_hipoventilasi">
                            </div>
                            <div>
                                <label for="breathing_input_2_value_2_1">Distress pernafasan sedang (contoh : penggunaan sedang beberapa otot pernafasan tambahan, retraksi iga sedang, kulit pucat)</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- breathing_input_3 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="breathing_input_3" id="breathing_input_3_value_3_1" value="value_3_1">
                            </div>
                            <div>
                                <label for="breathing_input_3_value_3_1">Distress pernafasan ringan (contoh : penggunaan sedang beberapa otot pernafasan tambahan, retraksi iga sedang, kulit merah muda)</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- breathing_input_4 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="breathing_input_4" id="breathing_input_4_value_4_1" value="value_4_1">
                            </div>
                            <div>
                                <label for="breathing_input_4_value_4_1">Tidak ada gangguan</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- breathing_input_5 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="breathing_input_5" id="breathing_input_5_value_5_1" value="value_5_1">
                            </div>
                            <div>
                                <label for="breathing_input_5_value_5_1">Tidak ada gangguan</label>
                            </div>
                        </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="text-uppercase p-2">Circulation</div>
                </td>

                <!-- Circulation_input_1 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="circulation_input_1" id="circulation_input_1_value_1_1" value="value_1_1">
                            </div>
                            <div>
                                <label for="circulation_input_1_value_1_1">
                                    Gangungan hemodinamik berat (contoh : tidak teraba nadi perifer, kulit pucat, dingin, lembab, takikardi yang signifikan, waktu pengisian kapiler 4 detik)</label>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="value_1_2_cardiac_arest" id="circulation_input_1_value_1_2" value="value_1_2">
                            </div>
                            <div>
                                <label for="circulation_input_1_value_1_2">Cardiac arrest</label>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="value_1_3_pendarahan" id="circulation_input_1_value_1_3" value="value_1_3">
                            </div>
                            <div>
                                <label for="circulation_input_1_value_1_3">Pendarahan tidak terkontrol</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- circulation_input_2 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="circulation_input_2_1" id="circulation_input_2_value_2_1" value="value_2_1">
                            </div>
                            <div>
                                <label for="circulation_input_2_value_2_1">Gangguan hemodinamik sedang (contoh : nadi perifer teraba lemah/halus, kulit pucat sejuk, takikardi sedang, waktu pengisian kapiler 2-4 detik)</label>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="circulation_input_2_2" id="circulation_input_2_value_2_2" value="value_2_2">
                            </div>
                            <div>
                                <label for="circulation_input_2_value_2_2">Dehidrasi berat</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- circulation_input_3 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="circulation_input_3" id="circulation_input_3_value_3_1" value="value_3_1">
                            </div>
                            <div>
                                <label for="circulation_input_3_value_3_1">
                                    Gangguan hemodinamik ringan (contoh : nadi perifer teraba kuat, kulit pucat hangat, takikardi ringan)</label>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="circulation_input_3_2" id="circulation_input_3_value_3_2" value="value_3_2">
                            <label for="circulation_input_3_value_3_2">
                                Dehidrasi sedang
                            </label>
                        </div>
                    </div>
                </td>

                <!-- circulation_input_4 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="circulation_input_4" id="circulation_input_4_value_4_1" value="value_4_1">
                            </div>
                            <div>
                                <label for="circulation_input_4_value_4_1">Tidak ada gangguan</label>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="circulation_input_4_2" id="circulation_input_4_value_4_2" value="value_4_2">
                            </div>
                            <div>
                                <label for="circulation_input_4_value_4_2">Dehidrasi ringan</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- circulation_input_5 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="circulation_input_5" id="circulation_input_5_value_5_1" value="value_5_1">
                            </div>
                            <div>
                                <label for="circulation_input_5_value_5_1">Tidak ada gangguan</label>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>


            <tr>
                <td>
                    <div class="text-uppercase p-2">Disability</div>
                </td>

                <!-- disability_input_1 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="disability_input_1" id="disability_input_1_value_1_1" value="value_1_1">
                            </div>
                            <div>
                                <label for="disability_input_1_value_1_1">
                                    GCS < 9</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- disability_input_2 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="disability_input_2_1" id="disability_input_2_value_2_1" value="value_2_1">
                            </div>
                            <div>
                                <label for="disability_input_2_value_2_1">
                                    GCS 9 – 12</label>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="disability_input_2_2" id="disability_input_2_value_2_2" value="value_2_2">
                            </div>
                            <div>
                                <label for="disability_input_2_value_2_2">Penurunan aktivitas berat (contoh : tidak ada kontak mata, tonus otot menurun)</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- disability_input_3 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="disability_input_3" id="disability_input_3_value_3_1" value="value_3_1">
                            </div>
                            <div>
                                <label for="disability_input_3_value_3_1">
                                    GCS 13 – 14
                                </label>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="disability_input_3_2" id="disability_input_3_value_3_2" value="value_3_2">
                            </div>
                            <div>
                                <label for="disability_input_3_value_3_2">Penurunan aktivitas sedang (contoh : letargi, kontak mata ada bila terganggu)</label>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- disability_input_4 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="disability_input_4" id="disability_input_4_value_4_1" value="value_4_1">
                            </div>
                            <div>
                                <label for="disability_input_4_value_4_1">GCS normal</label>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="disability_input_4_2" id="disability_input_4_value_4_2" value="value_4_2">
                            </div>
                            <div>
                                <label for="disability_input_4_value_4_2">Penurunan aktivitas ringan (contoh : ada kontak mata)</label>
                            </div>
                        </div>

                </td>

                <!-- disability_input_5 -->
                <td>
                    <div class="d-flex flex-column p-2 gap-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="disability_input_5" id="disability_input_5_value_5_1" value="value_5_1">
                            </div>
                            <div>
                                <label for="disability_input_5_value_5_1">GCS normal</label>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <!-- divider -->


            <tr>
                <td colspan="6">
                    <div class="p-2 fst-italic">Catatan : apabila terdapat satu atau lebih fator untuk cedera / penyakit yang serius (seperti usia beresiko tinggi, riwayat kesehatan yang buruk, mekanisme cedera yang parah, beresiko penyakit jantung,memiliki efek obat / alkohol, ruam dan perubahan suhu tubuh) harus dipertimbangkan untuk meningkatkan kategori triase pasien.</div>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    <div class="d-flex gap-2 p-2 align-items-center">
                        <div class="fw-bold col-2">Kategori Nyeri : </div>
                        <div class="col-2 d-flex gap-2 align-items-center"><input type="radio" class="custom-checkbox-success" name="kategori_nyeri" id="tidak_nyeri" value="tidak_nyeri"><label for="tidak_nyeri">Tidak Nyeri</label></div>
                        <div class="col-2 d-flex gap-2 align-items-center"><input type="radio" class="custom-checkbox-success" name="kategori_nyeri" id="nyeri_ringan" value="nyeri_ringan"><label for="nyeri_ringan">Nyeri Ringan</label></div>
                        <div class="col-2 d-flex gap-2 align-items-center"><input type="radio" class="custom-checkbox-success" name="kategori_nyeri" id="nyeri_sedang" value="nyeri_sedang"><label for="nyeri_sedang">Nyeri Sedang</label></div>
                        <div class="col-2 d-flex gap-2 align-items-center"><input type="radio" class="custom-checkbox-success" name="kategori_nyeri" id="nyeri_berat" value="nyeri_berat"><label for="nyeri_berat">Nyeri Berat</label></div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    <div class="fw-bold col-2">Gangguan Perilaku : </div>
                    <div class="d-flex gap-2 p-2 flex-wrap ms-5">
                        <div class="col-2 d-flex gap-2 align-items-center"><input type="radio" class="custom-checkbox-success" name="gangguan_perilaku" id="tidak_terganggu" value="tidak_terganggu"><label for="tidak_terganggu">Tidak Terganggu</label></div>
                        <div class="col-2 d-flex gap-2 align-items-center"><input type="radio" class="custom-checkbox-success" name="gangguan_perilaku" id="ada_gangguan" value="ada_gangguan"><label for="ada_gangguan">Ada Gangguan</label></div>
                        <div class="col-3 d-flex gap-2 align-items-center"><input type="radio" class="custom-checkbox-success" name="gangguan_perilaku" id="tidak_membahayakan" value="tidak_membahayakan"><label for="tidak_membahayakan">Tidak Membahayakan</label></div>
                        <div class="col-5 d-flex gap-2 align-items-center"><input type="radio" class="custom-checkbox-success" name="gangguan_perilaku" id="membahayakan" value="membahayakan"><label for="membahayakan">Membahayakan diri sendiri/orang lain</label></div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    <div class="d-flex gap-2 p-2">
                        <div class="fw-bold col-2">Cara Anamnesa : </div>
                        <div class="col-2 d-flex align-items-center gap-2"><input type="radio" name="cara_anamnesa" class="custom-checkbox-success" id="auto_anamnesa" value="auto_anamnesa"><label for="auto_anamnesa">Auto Anamnesa</label></div>
                        <div class="col-2 d-flex align-items-center gap-2"><input type="radio" name="cara_anamnesa" class="custom-checkbox-success" value="allo_anamnesa" id="allo_anamnesa"><label for="allo_anamnesa">Allo Anamnese</label></div>
                    </div>
                </td>
            </tr>


            <tr>
                <td colspan="6">
                    <div class="d-flex flex-column gap-2 p-2">
                        <div class="fw-bold col-2">Keluhan Utama : </div>
                        <textarea name="keluhan_utama" id="keluhan_utama" rows="5" class="form-control border-dark"></textarea>
                    </div>
                </td>
            </tr>

            <?php
            // Array data untuk label, name, dan id setiap field
            $fields = [

                ["label" => "Riwayat Penyakit Terdahulu / Riwayat Kehamilan / Riwayat Operasi / Riwayat Transfusi", "name" => "riwayat_penyakit", "type" => "text"],
                ["label" => "Riwayat Penggunaan Obat dan Diet terakhir", "name" => "riwayat_penggunaan_obat", "type" => "text"],
                ["label" => "Riwayat Pemeriksaan Penunjang", "name" => "riwayat_pemeriksaan", "type" => "text"],
                ["label" => "Riwayat alergi Obat dan Makanan", "name" => "riwayat_alergi", "type" => "text"]
            ];
            ?>

            <?php foreach ($fields as $field): ?>
                <tr>
                    <td colspan="6">
                        <div class="d-flex p-2">
                            <label for="<?= $field['name'] ?>" class="col-6"><?= $field['label'] ?> :</label>
                            <?php if ($field['type'] == "textarea"): ?>
                                <textarea name="<?= $field['name'] ?>" id="<?= $field['name'] ?>" rows="<?= $field['rows'] ?>" class="form-control border-dark"></textarea>
                            <?php else: ?>
                                <input type="<?= $field['type'] ?>" name="<?= $field['name'] ?>" id="<?= $field['name'] ?>" class="form-control border-dark">
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</div>

<div class="row">
    <!-- table 3 -->
    <table class="table-bordered border-dark">
        <tbody>
            <tr class="text-center">
                <td rowspan="4">
                    <div class="fw-bold">Primary Survey</div>
                </td>
                <td>
                    <div class="fw-bold">AIR WAY</div>
                    <div>dengan C-spine control</div>
                </td>
                <td>
                    <div class="fw-bold">BREATHING</div>
                </td>
                <td class="col-4">
                    <div class="fw-bold">Circulation</div>
                </td>
                <td colspan="2" class="col-4">
                    <div class="fw-bold">DISABILITY / NEUROLOGICAL</div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="d-flex flex-column gap-2 p-2" style="height: 420px;">
                        <div class="d-flex gap-2"><input type="radio" name="survey_airway" class="custom-checkbox-success" id="bebas_airway" value="bebas_airway"><label for="bebas_airway">Bebas</label></div>
                        <div class="d-flex gap-2"><input type="radio" name="survey_airway" class="custom-checkbox-success" value="garling_airway" id="garling_airway"><label for="garling_airway">Garling</label></div>
                        <div class="d-flex gap-2"><input type="radio" name="survey_airway" id="stridor_airway" value="stridor__airway" class="custom-checkbox-success"><label for="stridor_airway">Stridor</label></div>
                        <div class="d-flex gap-2"><input type="radio" name="survey_airway" class="custom-checkbox-success" id="whezing_airway" value="whezing_airway"><label for="whezing__airway">Whezing</label></div>
                        <div class="d-flex gap-2"><input type="radio" name="survey_airway" class="custom-checkbox-success" value="ronchi_airway" id="ronchi_airway"><label for="ronchi_airway">Ronchi</label></div>
                        <div class="d-flex gap-2"><input type="radio" name="survey_airway" id="teritunbasi_airway" value="teritunbasi_airway" class="custom-checkbox-success"><label for="">Teritunbasi</label></div>
                        <div><input type="text" class="form-control border-dark" name="input_lain_teritunbasi_1"></div>
                        <div><input type="text" class="form-control border-dark" name="input_lain_teritunbasi_2"></div>
                        <div><input type="text" class="form-control border-dark" name="input_lain_teritunbasi_3"></div>
                        <div><input type="text" class="form-control border-dark" name="input_lain_teritunbasi_4"></div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2 p-2" style="height: 420px;">
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" id="spontan" name="survey_respiratory" value="spontan">
                            <label for="spontan">Spontan</label>
                        </div>
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" id="tachipneu" name="survey_respiratory" value="tachipneu">
                            <label for="tachipneu">Tachipneu</label>
                        </div>
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" id="dispneu" name="survey_respiratory" value="dispneu">
                            <label for="dispneu">Dispneu</label>
                        </div>
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" id="apneu" name="survey_respiratory" value="apneu">
                            <label for="apneu">Apneu</label>
                        </div>
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" id="ventilasi_mekanik" name="survey_respiratory" value="ventilasi_mekanik">
                            <label for="ventilasi_mekanik">Ventilasi Mekanik</label>
                        </div>
                        <div><input type="text" class="form-control border-dark" name="input_lain_ventilasi_1"></div>
                        <div><input type="text" class="form-control border-dark" name="input_lain_ventilasi_2"></div>
                        <div><input type="text" class="form-control border-dark" name="input_lain_ventilasi_3"></div>
                        <div><input type="text" class="form-control border-dark" name="input_lain_ventilasi_4"></div>
                        <div><input type="text" class="form-control border-dark" name="input_lain_ventilasi_5"></div>
                    </div>

                </td>
                <td>
                    <div class="d-flex flex-column gap-2 p-2" style="height: 420px;">
                        <!-- Nadi -->
                        <div class="d-flex gap-2 align-items-center">
                            <label for="nadi_kuat" class="fw-bold col-3">Nadi :</label>
                            <input type="radio" class="custom-checkbox-success" id="nadi_kuat" name="nadi" value="kuat">
                            <label for="nadi_kuat">Kuat</label>
                            <input type="radio" class="custom-checkbox-success" id="nadi_lemah" name="nadi" value="lemah">
                            <label for="nadi_lemah">Lemah</label>
                        </div>

                        <!-- CRT -->
                        <div class="d-flex gap-2 align-items-center">
                            <label for="crt" class="fw-bold col-3">CRT :</label>
                            <input type="radio" class="custom-checkbox-success" id="crt_kurang_2" name="crt" value="< 2">
                            <label for="crt_kurang_2">
                                < 2"</label>
                                    <input type="radio" class="custom-checkbox-success" id="crt_lebih_2" name="crt" value="> 2">
                                    <label for="crt_lebih_2"> >2" </label>
                        </div>

                        <!-- Warna Kulit -->
                        <div class="d-flex gap-2 align-items-center">
                            <label for="warna_kulit" class="fw-bold col-3">Warna Kulit :</label>
                            <div class="d-flex align-items-center gap-1">
                                <input type="radio" class="custom-checkbox-success" id="warna_normal" name="warna_kulit" value="normal">
                                <label for="warna_normal">Normal</label>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <input type="radio" class="custom-checkbox-success" id="warna_pucat" name="warna_kulit" value="pucat">
                                <label for="warna_pucat">Pucat</label>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <input type="radio" class="custom-checkbox-success" id="warna_kuning" name="warna_kulit" value="kuning">
                                <label for="warna_kuning">Kuning</label>
                            </div>
                        </div>

                        <!-- Pendarahan -->
                        <div class="d-flex gap-2">
                            <label for="pendarahan" class="fw-bold col-4">Pendarahan :</label>
                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex gap-2">
                                    <input type="radio" class="custom-checkbox-success" id="pendarahan_tidak_ada" name="pendarahan" value="tidak_ada">
                                    <label for="pendarahan_tidak_ada">Tidak ada</label>
                                </div>
                                <div class="d-flex gap-2">
                                    <input type="radio" class="custom-checkbox-success" id="pendarahan_terkontrol" name="pendarahan" value="terkontrol">
                                    <label for="pendarahan_terkontrol">Terkontrol</label>
                                </div>
                                <div class="d-flex gap-2">
                                    <input type="radio" class="custom-checkbox-success" id="pendarahan_tidak_terkontrol" name="pendarahan" value="tidak_terkontrol">
                                    <label for="pendarahan_tidak_terkontrol">Tidak terkontrol</label>
                                </div>
                            </div>
                        </div>

                        <!-- Turgor Kulit -->
                        <div class="d-flex gap-2 align-items-center">
                            <label for="turgor_kulit" class="fw-bold col-4">Turgor Kulit :</label>
                            <input type="radio" class="custom-checkbox-success" id="turgor_baik" name="turgor_kulit" value="baik">
                            <label for="turgor_baik">Baik</label>
                            <input type="radio" class="custom-checkbox-danger" id="turgor_buruk" name="turgor_kulit" value="buruk">
                            <label for="turgor_buruk">Buruk</label>
                        </div>

                        <!-- Lain-lain -->
                        <div class="d-flex gap-2 align-items-center">
                            <label for="lain_lain" class="fw-bold col-3">Lain-lain :</label>
                            <input type="text" class="form-control border-dark" id="lain_lain" name="lain_circulation">
                        </div>
                    </div>

                </td>

                <td colspan="2">
                    <div class="d-flex flex-column gap-2 p-2">
                        <!-- Respon -->
                        <div class="d-flex gap-2">
                            <label for="respon" class="fw-bold col-4">Respon :</label>
                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex gap-2">
                                    <input type="radio" class="custom-checkbox-success" id="respon_alert" name="respon" value="alert">
                                    <label for="respon_alert">Alert</label>
                                </div>
                                <div class="d-flex gap-2">
                                    <input type="radio" class="custom-checkbox-success" id="respon_pain" name="respon" value="pain">
                                    <label for="respon_pain">Pain</label>
                                </div>
                                <div class="d-flex gap-2">
                                    <input type="radio" class="custom-checkbox-success" id="respon_verbal" name="respon" value="verbal">
                                    <label for="respon_verbal">Verbal</label>
                                </div>
                                <div class="d-flex gap-2">
                                    <input type="radio" class="custom-checkbox-success" id="respon_unrespon" name="respon" value="unrespon">
                                    <label for="respon_unrespon">Unrespon</label>
                                </div>
                            </div>
                        </div>

                        <!-- Pupil -->
                        <div class="d-flex gap-2 align-items-center">
                            <label for="pupil" class="fw-bold col-4">Pupil :</label>
                            <input type="text" id="pupil_left" class="form-control border-dark h-25 w-25" placeholder="Left" name="l_pupil">
                            /
                            <input type="text" id="pupil_right" class="form-control border-dark h-25 w-25" placeholder="Right" name="r_pupil"> mm
                        </div>

                        <!-- Isokor / Anisokor -->
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex gap-2">
                                <div class="col-4 d-flex gap-2">
                                    <input type="radio" class="custom-checkbox-success" id="isokor" name="pupil_type" value="isokor">
                                    <label for="isokor">Isokor</label>
                                </div>
                                <div class="col-4 d-flex gap-2">
                                    <input type="radio" class="custom-checkbox-success" id="anisokor" name="pupil_type" value="anisokor">
                                    <label for="anisokor">Anisokor</label>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <input type="radio" class="custom-checkbox-success" id="pin_point" name="pupil_type" value="pin_point">
                                <label for="pin_point">Pin Point</label>
                            </div>
                            <div class="d-flex gap-2">
                                <input type="radio" class="custom-checkbox-success" id="midriasis" name="pupil_type" value="midriasis">
                                <label for="midriasis">Midriasis</label>
                            </div>
                        </div>

                        <!-- Reflek Cahaya -->
                        <div class="d-flex gap-2 align-items-center">
                            <label for="reflek_cahaya" class="fw-bold col-4">Reflek Cahaya :</label>
                            <input type="text" id="reflek_cahaya_left" class="form-control border-dark h-25 w-25" placeholder="Left" name="l_reflek">
                            /
                            <input type="text" id="reflek_cahaya_right" class="form-control border-dark h-25 w-25" placeholder="Right" name="r_reflek">
                        </div>

                        <!-- GCS -->
                        <div class="d-flex gap-2 align-items-center">
                            <label for="gcs" class="fw-bold col-2">GCS :</label>
                            <label for="gcs_e">E</label>
                            <input type="text" id="gcs_e" class="form-control border-dark h-25 w-25" placeholder="Eye" name="eye_gcs">
                            <label for="gcs_v">V</label>
                            <input type="text" id="gcs_v" class="form-control border-dark h-25 w-25" placeholder="Verbal" name="verbal_gcs">
                            <label for="gcs_m">M</label>
                            <input type="text" id="gcs_m" class="form-control border-dark h-25 w-25" placeholder="Motor" name="motor_gcs">
                        </div>

                        <!-- Lain-lain -->
                        <div class="d-flex gap-2 align-items-center">
                            <label for="lain_lain" class="fw-bold col-3">Lain-lain :</label>
                            <input type="text" id="lain_lain" class="form-control border-dark" name="lain_disability">
                        </div>
                    </div>

                </td>

            </tr>

            <tr>
                <td>
                    <div class="p-2 text-center">
                        <div class="fw-bold">Tindakan Resusitasi(*bila ada)</div>
                        <textarea name="rsusitasi1" id="resusitasi" rows="5" class="form-control border-dark"></textarea>
                    </div>
                </td>
                <td>
                    <div class="p-2 text-center">
                        <div class="fw-bold">Tindakan Resusitasi(*bila ada)</div>
                        <textarea name="rsusitasi2" id="resusitasi" rows="5" class="form-control border-dark"></textarea>
                    </div>
                </td>
                <td rowspan="2">
                    <div class="p-2 text-center">
                        <div class="fw-bold">Tindakan Resusitasi(*bila ada)</div>
                        <textarea name="rsusitasi" id="resusitasi3" rows="5" class="form-control border-dark"></textarea>
                    </div>
                </td>
                <td rowspan="2" colspan="2">
                    <div class="p-2">
                        <div class="fw-bold text-center">Exposure</div>
                        <div class="d-flex flex-column gap-2">
                            <div>
                                <label for="">Luka di :</label>
                                <input type="text" class="form-control border-dark mb-4" name="luka_exposure">
                            </div>
                            <div>
                                <label for="">Lain-lain :</label>
                                <input type="text" class="form-control border-dark" name="lain-exposure">
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <div class="d-flex gap-2 p-2">
                        <div class="d-flex align-items-center gap-2">
                            <label for="">BB</label>
                            <input type="text" class="form-control border-dark" name="bb_exposure"> kg
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <label for="">TB/PB </label>
                            <input type="text" class="form-control border-dark" name="tb_exposure"> cm
                        </div>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>

</div>


<!-- table 3 -->
<div class="row">
    <table class="table-bordered border-dark">

        <tr>
            <td class="p-2" rowspan="15" class="col-1">
                <div style="font-weight: bold; font-size: 24px; writing-mode: vertical-lr; text-align: center;">SECONDARY SURVEY</div>
            </td>
            <?php
            $fields = [
                "TD" => "mmHg",
                "Nadi" => "X/menit",
                "Bernapas" => "X/menit",
                "SpO2" => "%",
                "Suhu" => "&deg;C"
            ];

            foreach ($fields as $name => $unit) { ?>
                <td class="p-2 col-2" style="width: 280px;">
                    <div class="d-flex align-items-center gap-1">
                        <label for="<?= strtolower($name) ?>"><?= $name ?></label>
                        <input type="text" class="form-control border-dark" name="<?= strtolower($name) ?>_secondary" id="<?= strtolower($name) ?>"> <?= $unit ?>
                    </div>
                </td>
            <?php } ?>
        </tr>

        <tr>
            <td colspan="3" class="p-2">
                <div class="fw-bold text-center">PEMERIKSAAN FISIK</div>
            </td>
            <td colspan="2" rowspan="15" class="p-2">
                <div class="fw-bold text-center">Status Lokalisata</div>
                <div class="text-center">(*berikan petunjuk dan serta jelaskan sifat, jenis, ukuran, lokasi, dan tindakan yang dilakukan )</div>

                <div class="form-img">
                    <img class="marker-image" id="example-image" src="<?php echo base_url('assets2/rme/img/ss.png') ?>" data-input-name="image_drawer_state_image_1" />
                    <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                        value="" />
                </div>

            </td>
        </tr>

        <tr class="text-center">
            <td>
                <div class="fw-bold">Anggota Tubuh</div>
            </td>
            <td>
                <div class="fw-bold">Normal (*beri tanda benar) </div>
            </td>
            <td>
                <div class="fw-bold">Abnormal(jelaskan) </div>
            </td>
        </tr>


        <?php
        $parts = [
            ["name" => "kepala", "label" => "Kepala", "value" => ""],
            ["name" => "mata", "label" => "Mata", "value" => ""],
            ["name" => "leher", "label" => "Leher", "value" => ""],
            ["name" => "tht", "label" => "tht", "value" => ""],
            ["name" => "mulut", "label" => "mulut", "value" => ""],
            ["name" => "thoraks", "label" => "thoraks", "value" => ""],
            ["name" => "abdomen", "label" => "abdomen", "value" => ""],
            ["name" => "genitalia", "label" => "genitalia", "value" => ""],
            ["name" => "extremitas", "label" => "extremitas", "value" => ""],

        ];

        foreach ($parts as $part) { ?>
            <tr class="text-center p-2">
                <td>
                    <div class="fw-bold"><?= $part["label"] ?></div>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" name="cek_<?= $part["name"] ?>">
                </td>
                <td class="p-2">
                    <input type="text" class="form-control border-dark" name="ket_<?= $part["name"] ?>" value="<?= $part["value"] ?>">
                </td>
            </tr>
        <?php } ?>


    </table>
</div>


<div class="row">
    <table class="table-bordered border-dark">
        <tr>
            <td class="p-2" colspan="2">
                <div class="fw-bold my-2">Pemeriksaaan Penunjang</div>
                <div class="d-flex flex-column gap-2">
                    <div>
                        <label for="">Laboratorium :</label>
                        <input type="text" class="form-control border-dark" name="lab_pemeriksaan_penunjang2">
                    </div>
                    <div>
                        <label for="">Radiologi :</label>
                        <input type="text" class="form-control border-dark" name="radiologi_penunjang2">
                    </div>
                    <div>
                        <label for="">Lain-lain :</label>
                        <input type="text" class="form-control border-dark" name="lain_penunjang2">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="p-2">
                <div class="fw-bold">Diagnosa Kerja</div>
                <div class="d-flex flex-column gap-2">
                    <div class="mb-5">
                        <label for="">Diagnosa Utama :</label>
                        <select type="select" name="diagnosa1" class="form-select diagnosa">
                        </select>
                    </div>
                    <div>
                        <label for="">Diagnosa Tambahan :</label>
                        <select type="select" name="diagnosa2" class="form-select diagnosa">
                    </div>
                </div>
            </td>

            <td class="p-2">
                <div class="d-flex flex-column gap-2">
                    <div class="mb-5">
                        <label for="">Diagnosa Utama :</label>
                        <select type="select" name="diagnosa3" class="form-select diagnosa w-75">
                        </select>
                    </div>
                    <div>
                        <label for="prognosis">prognosis :</label>
                        <input type="text" class="form-control border-dark" name="prognosis" id="prognosis">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="p-2" colspan="2">
                <div class="fw-bold">Identifikasi Pasien Masuk</div>
                <div class="d-flex gap-2">
                    <div class="col-2 d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" name="identifikasi_pasien_masuk" id="preventif_p_masuk" value="preventif_p_masuk"><label for="preventif_p_masuk">Preventif</label>
                    </div>
                    <div class="col-2 d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" name="identifikasi_pasien_masuk" id="kuratif_p_masuk" value="kuratif_p_masuk"><label for="kuratif_p_masuk">Kuratif</label>
                    </div>
                    <div class="col-2 d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" name="identifikasi_pasien_masuk" id="palatif_p_masuk" value="palatif_p_masuk"><label for="palatif_p_masuk">Paliatif</label>
                    </div>
                    <div class="col-2 d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" name="identifikasi_pasien_masuk" id="rehab_p_masuk" value="rehab_p_masuk"><label for="rehab_p_masuk">Rehabilitatif</label>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="p-2" colspan="2">
                <label for="" class="fw-bold">Intruksi Tindak Lanjut</label>
                <div class="d-flex align-items-center gap-2 my-4">
                    <div class="d-flex align-items-center gap-2 col-2">
                        <input type="checkbox" name="tatalaksana" id="tatalaksana" class="custom-checkbox-success">
                        <label for="tatalaksana">Tata Lakasana</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 col-2">
                        <input type="checkbox" name="pengobatan" id="pengobatan" class="custom-checkbox-success">
                        <label for="pengobatan">Pengobatan</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 col-2">
                        <input type="checkbox" name="Tindakan" id="Tindakan" class="custom-checkbox-success">
                        <label for="Tindakan">Tindakan</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 col-2">
                        <input type="checkbox" name="Konsul" id="Konsul" class="custom-checkbox-success">
                        <label for="Konsul">Konsul</label>
                    </div>
                </div>
                <textarea name="intruksi_tindakan_lanjut" id="" rows="4" class="form-control border-dark"></textarea>
            </td>
        </tr>


        <tr>
            <td>
                <div class="fw-bold p-2">Edukasi Pasien</div>
            </td>
            <td class="col-6 p-2">
                <div>Edukasi awal, disampaikan diagnosis, rencana dan tujuan terapi kepada : </div>
                <div class="d-flex flex-column">
                    <div class="d-flex gap-1">
                        <input type="radio" class="custom-checkbox-success" name="edukasi_awal_dd" id="pasien_dd" value="pasien_dd" onclick="toggleInputFields()">
                        <label for="pasien_dd">Pasien</label>
                    </div>
                    <div class="d-flex gap-1 align-items-center">
                        <input type="radio" class="custom-checkbox-success" name="edukasi_awal_dd" id="keluarga_dd" value="keluarga_dd" onclick="toggleInputFields()">
                        <div class="d-flex align-items-center gap-2">
                            <label for="keluarga_dd" class="flex-shrink-0">Keluarga Pasien, Nama</label>
                            <input type="text" class="form-control border-dark" id="keluarga_name" name="input_kk_dd">
                        </div>
                    </div>
                    <div class="d-flex gap-1 align-items-center mt-3 flex-wrap">
                        <input type="radio" class="custom-checkbox-success" name="edukasi_awal_dd" id="tidak_dd" value="tidak_dd" onclick="toggleInputFields()">
                        <label for="tidak_dd">Tidak dapat memberikan edukasi kepada pasien atau keluarga, karena</label>
                        <input type="text" class="form-control border-dark" id="alasan" name="input_td_dd">
                    </div>

                </div>
            </td>
        </tr>

        <tr>
            <td class="p-2" colspan="2">
                <div class="mb-2"><label for="" class="fw-bold">CATATAN RINGKAS (*hanya diisi apabila pasien membutuhkan operasi segera / emergency)</label></div>
                <textarea name="catatan_ringkas" id="catatan_ringkas" rows="5" class="form-control border-dark mb-4"></textarea>

                <div><label for="" class="fw-bold">Indikasi Operasi</label></div>
                <textarea name="indikasi_op" id="catatan_ringkas" rows="5" class="form-control border-dark mb-4"></textarea>
            </td>
        </tr>
    </table>
</div>

<div class="row mt-2" style="margin-left: -20px;">
    <table class="table-bordered border-dark">
        <tbody>
            <tr>
                <td>
                    <div class="p-2">
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex gap-2 align-items-center">
                                <label for="" class="col-3">Nyeri :</label>
                                <input type="radio" name="nyeri_op" class="custom-checkbox-success" id="op_ya" value="op_ya"><label for="op_ya" class="col-2">Ya</label>
                                <input type="radio" name="nyeri_op" class="custom-checkbox-danger" id="op_tidak" value="op_tidak"><label for="op_tidak" class="col-2">Tidak</label>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <label for="" class="col-3">Faktor - Faktor Pemicu</label>
                                <input type="text" class="form-control border-dark" name="faktor_op">
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <label for="" class="col-3">Faktor - faktor mengurangi nyeri</label>
                                <input type="text" class="form-control border-dark" name="fakto_kurang_op">
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <label for="" class="col-3">Frekuensi</label>
                                <input type="text" class="form-control border-dark w-75" name="frekuensi_op"><span class="col-1">x/hari</span>
                            </div>
                        </div>
                    </div>
                </td>

                <td class="p-2 col-6">
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex gap-2 align-items-center">
                            <label for="" class="col-3">Lokasi</label>
                            <input type="text" class="form-control border-dark" name="lokasi_op">
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <label for="" class="col-3">Menjalar</label>
                            <input type="text" class="form-control border-dark" name="menajalar_op">
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <label for="" class="col-3">Lama Nyeri</label>
                            <input type="text" class="form-control border-dark" name="lama_nyeri_op">
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <div class="text-center fw-bold p-2">TOOLS YANG DIGUNAKAN (*pilih dan kaji sesuai keadaan pasien)</div>
                </td>
            </tr>

            <tr>
                <td class="p-2">
                    <div class="d-flex">
                        <div class="col-6 d-flex align-items-center">
                            <input type="checkbox" class="custom-checkbox-success" name="chries" id="chries" onclick="toggleInput()">
                            <label for="chries"><span class="fw-bold mx-2">CRIES</span>( usia < 2 bulan)</label>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <label for="" class="col-4">Skala Nyeri :</label>
                            <input type="text" class="form-control border-dark" name="skala_cries" id="skala_cries">
                        </div>
                    </div>

                    <!-- table di dalam table -->
                    <table class="table-bordered border-dark w-100 my-2 ">
                        <thead class="text-center">
                            <th>Ketegori</th>
                            <th>0</th>
                            <th>1</th>
                            <th>2</th>
                        </thead>
                        <tbody>
                            <?php
                            // Data untuk tabel
                            $data = [
                                ["Crying (Menangis)", "Tidak ada", "Menangis kuat dapat dihibur", "Menangis kuat tidak dapat dihibur"],
                                ["Requires O<sub>2</sub> for oxygen saturation > 95% (Membutuhkan O<sub>2</sub> untuk saturasi oksigen > 95%)", "Tidak ada", "< 30%", "> 30%"],
                                ["Increases Vital Sign (Tanda Vital Meningkat)", "Nadi dan tekanan darah < 20% nilai dasar", "Nadi dan tekanan darah < 20% nilai dasar", "Nadi dan tekanan darah > 20% nilai dasar"],
                                ["Expression (Ekspresi)", "Tidak ada", "Meringis/mengeriyai", "Meringis/mengeriyai mendengkur/mengorok"],
                                ["Sleeplessness (Sulit Tidur)", "Tidak ada", "Bayi terbangun pada setiap saat", "Bayi terjaga terus menerus"]
                            ];

                            ?>

                            <?php foreach ($data as $row): ?>
                                <tr>
                                    <?php foreach ($row as $cell): ?>
                                        <td class="p-2"><?= $cell ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </td>

                <td class="p-2">
                    <div class="d-flex">
                        <div class="col-6 d-flex align-items-center">
                            <input type="checkbox" class="custom-checkbox-success" name="flacc" id="flacc" onclick="toggleFlaccInput()">
                            <label for="flacc"><span class="fw-bold mx-2">FLACC</span>( usia 2 bulan - 3 Tahun)</label>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <label for="" class="col-4">Skala Nyeri :</label>
                            <input type="text" class="form-control border-dark" name="skala_flacc" id="skala_flacc">
                        </div>
                    </div>

                    <!-- table di dalam table -->
                    <table class="table-bordered border-dark w-100 my-2">
                        <thead class="text-center">
                            <th>Ketegori</th>
                            <th>0</th>
                            <th>1</th>
                            <th>2</th>
                        </thead>
                        <tbody>
                            <?php
                            // Data untuk tabel
                            $flacc = [
                                ["Face (Wajah)", "Tidak ada ekspresi tertentu atau senyum", "Sesekali meringis atau mengerutkan kening, menarik diri, tidak tertarik", "Sering/selalu mengerutkan kening, rahang mengatup, dagu gemetaran"],
                                ["Legs (Kaki)", "Posisi normal & rileks", "Cemas, gelisah, tegang", "Menendang/menarik kaki"],
                                ["Activities (Kegiatan)", "Berbaring tenang, posisi bergerak dengan mudah", "Mengeliat, mondar-mandir, tegang", "Meringkuk, kaku, atau menyentak"],
                                ["Cry (Menangis)", "Tidak menangis (bangun atau tidur)", "Merengek/merintih, sesekali mengeluh", "Menangis terus-menerus, berteriak/terisak sering mengeluh"],
                                ["Consolability (Penghiburan)", "Santai/rileks", "Sesekali diyakinkan dengan sentuhan", "Sulit untuk dihibur atau dibuat nyaman"]
                            ];

                            ?>

                            <?php foreach ($flacc as $row): ?>
                                <tr>
                                    <?php foreach ($row as $cell): ?>
                                        <td class="p-2"><?= $cell ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td class="p-2">
                    <div class="d-flex">
                        <div class="col-6 d-flex align-items-center gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="wong" id="wong">
                            <label for="wong"><span class="fw-bold mx-2">WONG BAKER (USIA 3 SAMPAI < 10 TAHUN)</span></label>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <label for="" class="col-4">skala nyeri :</label>
                            <input type="text" class="form-control border-dark" id="skala_wong" name="skala_wong">
                        </div>
                    </div>
                    <div class="emoji my-3 text-center">
                        <img src="<?php echo base_url('assets2/rme/img/emoji1.png') ?>" alt="Heart Diagram" class="img-fluid">
                    </div>
                </td>


                <td class="p-2">
                    <div class="d-flex">
                        <div class="col-6 d-flex align-items-center gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="numerik" id="numerik">
                            <label for="numerik"><span class="fw-bold mx-2">NUMERIK ( USIA 10 TAHUN KE ATAS)</span></label>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <label for="" class="col-4">skala nyeri :</label>
                            <input type="text" class="form-control border-dark" id="skala_numerik" name="skala_numerik">
                        </div>

                    </div>
                    <div class="emoji my-3 text-center">
                        <img src="<?php echo base_url('assets2/rme/img/emoji2.png') ?>" alt="Heart Diagram" class="img-fluid">
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="p-2">
                    <div class="d-flex gap-2 justify-content-center">
                        <div class="col-4 d-flex align-items-center">
                            <input type="checkbox" class="custom-checkbox-success" name="cpot" id="cpot">
                            <label for="cpot"><span class="fw-bold mx-1">CPOT</span>( Pasien Tidak Sadar )</label>
                        </div>

                        <div class="d-flex align-items-center col-4">
                            <label for="" class="col-4">Skala Nyeri :</label>
                            <input type="text" class="form-control border-dark" id="skala_cpot" name="skala_cpot">
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td class="p-2">
                    <table class="table-bordered border-dark w-100">
                        <thead class="text-center">
                            <th>Indikator</th>
                            <th>Kondisi </th>
                            <th>Skor</th>
                            <th>Keterangan</th>
                        <tbody>
                            <?php
                            $cpot1 = [
                                ["Ekspresi Wajah", "Rilek", 0, "Tidak ada keterangan otot yang terlihat"],
                                ["", "Kaku", 1, "Merengut, alis menurun, orbit menegang, terdapat kerutan levator atau perubahan lainnya ( misalnya membuka mata atau menangis selama porses nosiseptif )"],
                                ["", "Meringis", 2, "Semua gerakan wajah sebelumnya ditambah kelopak mata tertutup rapat atau membuka mata menggigit tabung endotrakeal"],
                                ["Gerakan Tubuh", "Tidak ada gerakan abnormal", 0, "Tidak bergerak sama sekali tidak berarti tidak adanya rasa sakit atau posisi normal (gerakan tidak dilakukan terhadap bagian yang terasa nyeri atau tidak dilakukan untuk tujuan perlindungan)"],
                                ["", "Lokalisasi Nyeri", 1, "Lambat, terarah hati-hati, menyentuh atau menggenggam bagian yang nyeri, mencari perhatian melalui gerakan"],
                                ["", "Gelisah", 2, "Menarik tabung, mencoba untuk duduk, menggerakkan tungkai / meronta-ronta, tidak mengikuti perintah, menahan staf, mencoba turun dari tempat tidur"]
                            ];

                            ?>
                            <?php foreach ($cpot1 as $row): ?>
                                <tr>
                                    <?php foreach ($row as $cell): ?>
                                        <td class="p-2"><?= $cell ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </td>

                <td class="p-2">
                    <table class="table-bordered border-dark w-100">
                        <thead class="text-center">
                            <th>Indikator</th>
                            <th>Kondisi </th>
                            <th>Skor</th>
                            <th>Keterangan</th>
                        <tbody>
                            <?php
                            $cpot2 = [
                                ["Aktivasi Alarm Ventilator Mekanik", "Pasien kooperatif terhadap kerja ventilator mekanik", 0, "Alarm tidak berbunyi, ventilasi mudah"],
                                ["", "Alarm aktif tapi berhenti spontan", 1, "Batuk, alarm berbunyi tetapi berhenti secara spontan"],
                                ["", "Alarm selalu aktif", 2, "Alarm sering berbunyi"],
                                ["Berbicara jika pasien ekstubasi", "Berbicara dalam nada normal atau tidak ada suara", 0, "Berbicara dengan nada pelan"],
                                ["", "Mendesah, mengerang", 1, "Mendesah, mengerang"],
                                ["", "Menangis, berteriak", 2, "Menangis, berteriak"],
                                ["Ketegangan Otot", "Tidak ada ketegangan otot", 0, "Tidak ada ketegangan otot"],
                                ["", "Tegang, kaku", 1, "Gerakan otot pasif"]
                            ];

                            ?>
                            <?php foreach ($cpot2 as $row): ?>
                                <tr>
                                    <?php foreach ($row as $cell): ?>
                                        <td class="p-2"><?= $cell ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<!-- table selanjutnya -->
<div class="row">
    <table class="border-dark table-bordered">
        <tbody>
            <tr>
                <td colspan="4">
                    <div class="p-2 d-flex align-items-center">
                        <label for="" class="fw-bold col-3">Penilaian Resiko Jatuh</label>
                        <input type="text" class="form-control border-dark" name="penilaian_resiko_jatuh">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="p-2 d-flex align-items-center">
                        <label for="" class="fw-bold col-3">Tools</label>
                        <div class="p-2 d-flex">
                            <div class="col-5 d-flex gap-2">
                                <input type="radio" class="custom-checkbox-success" name="tools" id="humpty" value="humpty"><label for="humpty">Humpty Dumpty</label>
                            </div>
                            <div class="col-3 d-flex gap-2">
                                <input type="radio" class="custom-checkbox-success" name="tools" id="morse" value="morse"><label for="morse">Morse</label>
                            </div>
                            <div class="col-3 d-flex gap-2">
                                <input type="radio" class="custom-checkbox-success" name="tools" id="sidney" value="sidney"><label for="sidney">Sidney</label>
                            </div>
                            <div class="col-5 d-flex gap-2">
                                <input type="radio" class="custom-checkbox-success" name="tools" id="get_up" value="get_up"><label for="get_up">Get Up and Go</label>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <div class="p-2 d-flex align-items-center">
                        <label for="" class="fw-bold col-3">Resiko Jatuh</label>
                        <div class="p-2 d-flex">
                            <div class="d-flex gap-2 me-4">
                                <input type="radio" class="custom-checkbox-success" name="ya_rsiko_jatuh" id="ya_rsiko_jatuh"><label for="ya_rsiko_jatuh">Ya</label>
                            </div>
                        </div>
                        <div class="d-flex gap-3 me-4">
                            <label for="" class="fw-bold">Tingkat Resiko :</label>
                            <div class="d-flex gap-2 align-items-center">
                                <input type="radio" class="custom-checkbox-success" name="tingkat_resiko" id="tinggi" value="tinggi"><label for="tinggi">Tinggi</label>
                                <input type="radio" class="custom-checkbox-success" name="tingkat_resiko" id="sedang" value="sedang"><label for="sedang">Sedang</label>
                                <input type="radio" class="custom-checkbox-success" name="tingkat_resiko" id="rendah" value="rendah"><label for="rendah">Rendah</label>
                            </div>
                        </div>
                        <div>
                            <input type="radio" class="custom-checkbox-success" name="tingkat_resiko" id="tidak_rsiko_jatuh" value="tidak_rsiko_jatuh"><label for="tidak_rsiko_jatuh">Tidak</label>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="p-2" colspan="4"><label for="" class="fw-bold">Skrinning Gizi</label></td>
            </tr>
            <tr>
                <td class="col-1">
                    <div class="fw-bold text-center">USIA</div>
                </td>
                <td class="p-2">
                    <div class="d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" name="usia_skrinning_1" id="usia_k_tahun" value="usia_k_tahun"><label for="usia_k_tahun">Usia < 1 tahun STRONG-kids</label>
                    </div>
                </td>
                <td class="p-2">
                    <div class="d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success " name="usia_skrinning_2" id="usia_l_tahun" value="usia_l_tahun"><label for="usia_l_tahun" class="col-11">Usia 1 sampai < 18 tahun PEDIATRIC YORKHILL MALNUTRITION SCORE (PYMS)</label>
                    </div>
                </td>
                <td class="p-2">
                    <div class="d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" name="usia_skrinning_3" id="usia_j_tahun" value="usia_j_tahun"><label for="usia_j_tahun" class="col-10">Usia > 18 tahun MALNUTRITION UNIVERSAL SCREENING TOOL (MUST)</label>

                    </div>
                </td>
            </tr>


            <tr>
                <td class="col-1">
                    <div class="fw-bold text-center">TOTAL SCORE</div>
                </td>
                <td class="p-2">
                    <div class="d-flex gap-2 flex-column">
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" name="score_1" id="score_1_1" value="≥ 2 (beresiko malnutrisi)">
                            <label for="score_1_1">≥ 2 (beresiko malnutrisi)</label>
                        </div>
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" name="score_1" id="score_1_2" value="< 2 (tidak beresiko)">
                            <label for="score_1_2">
                                < 2 (tidak beresiko)</label>
                        </div>
                    </div>
                </td>
                <td class="p-2">
                    <div class="d-flex gap-2 flex-column">
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" name="score_2" id="score_2_1" value="≥ 2 (beresiko malnutrisi)">
                            <label for="score_2_1">≥ 2 (beresiko malnutrisi)</label>
                        </div>
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" name="score_2" id="score_2_2" value="< 2 (tidak beresiko malnutrisi)">
                            <label for="score_2_2">
                                < 2 (tidak beresiko malnutrisi)</label>
                        </div>
                    </div>
                </td>
                <td class="p-2">
                    <div class="d-flex gap-2 flex-column">
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" name="score_3" id="score_3_1" value="≥ 2 (resiko tinggi)">
                            <label for="score_3_1">≥ 2 (resiko tinggi)</label>
                        </div>
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" name="score_3" id="score_3_2" value="1 (resiko sedang)">
                            <label for="score_3_2">1 (resiko sedang)</label>
                        </div>
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" name="score_3" id="score_3_3" value="0 (resiko rendah)">
                            <label for="score_3_3">0 (resiko rendah)</label>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="p-2 col-4" colspan="2">
                    <div class="d-flex flex-column gap-2 ">
                        <div class="fw-bold mb-4">RUMUS IMT</div>
                        <div class="d-flex gap-2 align-items-center">
                            <label for="" class="fw-bold">IMT</label>
                            <input type="text" class="form-control border-dark" name="rumur_imt">
                            <div class="d-flex flex-column">
                                <div class="text-decoration-underline">BB(Kg)</div>
                                <div>TB(m)</div>
                            </div>
                        </div>
                    </div>
                </td>

                <td colspan="2" class="p-2 col-6">
                    <div class="d-flex flex-column gap-2 ">
                        <div class="fw-bold mb-2">Bila beresiko Malnutrisi : Sudah konsul dengan Ahli Gizi</div>
                        <div class="d-flex gap-2 align-items-center"><label for="" class="col-2">Nama :</label><input type="text" class="form-control border-dark" name="nama_ahli_gizi"></div>
                        <div class="d-flex gap-2 align-items-center"><label for="" class="col-2">Tanggal :</label><input type="date" class="form-control border-dark" value="<?= date('Y-m-d'); ?>" name="tangga_malnutrisi"></div>
                        <div class="d-flex gap-2 align-items-center"><label for="" class="col-2">Jam :</label><input type="time" class="form-control border-dark" value="<?= date('H:i'); ?>" name="jam_malnutrisi"></div>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="p-2" colspan="4">
                    <div class="fw-bold">KEBUTUHAN EDUKASI</div>
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex gap-2">
                            <div class="col-3 d-flex gap-2 align-items-center">Apakah dibutuhkan penerjemah :</div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="radio" class="custom-checkbox-danger" value="t_penerjemah" id="t_penerjemah" name="penerjemah_dtb" onclick="toggleInput(false)">
                                <label for="t_penerjemah">Tidak</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 w-100">
                                <input type="radio" name="penerjemah_dtb" id="y_penerjemah" value="y_penerjemah" class="custom-checkbox-success" onclick="toggleInput(true)">
                                <div class="d-flex gap-2 align-items-center w-100">
                                    <label for="y_penerjemah" class="flex-shrink-0">Ya( sebutkan )</label>
                                    <input type="text" class="form-control border-dark" id="penerjemahInput_dtb" name="penerjemahInput_dtb">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="col-3 d-flex gap-2 align-items-center">Apakah memerlukan edukasi :</div>
                        <div class="d-flex align-items-center gap-2"><input type="radio" name="perlu_edukasi" id="t_p_edu" value="t_p_edu" class="custom-checkbox-danger"><label for="t_p_edu">Tidak</label></div>
                        <div class="d-flex align-items-center gap-2 w-100"><input type="radio" name="perlu_edukasi" id="y_p_edu" value="y_p_edu" class="custom-checkbox-success"><label for="y_p_edu" class="col-2">Ya</div>
                    </div>
                    <div class="d-flex gap-2 flex-column mt-2">
                        Jika Ya, kebutuhan edukasi yang diperlukan :
                        <div class="d-flex flex-wrap gap-2">
                            <div class="col-3 d-flex gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="k_edukasi" id="d_mjm" value="d_mjm">
                                <label for="d_mjm">Diagnosa dan manajemen</label>
                            </div>
                            <div class="col-2 d-flex gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="d_obat" id="d_obat" value="d_obat">
                                <label for="d_obat">Obat-obatan</label>
                            </div>
                            <div class="col-2 d-flex gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="p_luka" id="p_luka" value="p_luka">
                                <label for="p_luka">Perawatan luka</label>
                            </div>
                            <div class="col-2 d-flex gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="p_rehab" id="p_rehab" value="p_rehab">
                                <label for="p_rehab">Rehabilitasi</label>
                            </div>
                            <div class="col-2 d-flex gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="mjm_nyeri" id="mjm_nyeri" value="mjm_nyeri">
                                <label for="mjm_nyeri">Manajemen nyeri</label>
                            </div>
                            <div class="col-2 d-flex gap-2 align-items-center">
                                <input type="checkbox" class="custom-checkbox-success" name="d_nutrisi" id="d_nutrisi" value="d_nutrisi">
                                <label for="d_nutrisi">Diet dan nutrisi</label>
                            </div>
                            <div class="col-4 d-flex gap-2 align-items-center w-75">
                                <input type="checkbox" class="custom-checkbox-success" name="d_lain2" id="d_lain2" value="d_lain2" onclick="toggleOtherInput(true)">
                                <div class="d-flex gap-2 align-items-center w-100">
                                    <label for="d_lain2" class="col-2">Lain-lain</label>
                                    <input type="text" class="form-control border-dark" id="lain2Input" name="lain2Input">
                                </div>
                            </div>

                        </div>


                </td>
            </tr>

            <tr>
                <td class="text-center fw-bold col-6" colspan="2">DIAGNOSA KEPERAWATAN GAWAT DARURAT</td>
                <td class="text-center fw-bold" colspan="2">RENCANA KEPERAWATAN GAWAT DARURAT</td>
            </tr>

            <tr>
                <td class="p-2 col-6" colspan="2">
                    <div class="d-flex flex-column gap-2">
                        <?php
                        $options = [
                            ["name" => "ketidakefektifan_bersihan", "value" => "Ketidakefektifan bersihan jalan nafas b.d. obstruksi trakeobronkial adanya benda asing pada jalan nafas, secret tertahan di saluran nafas."],
                            ["name" => "resiko_aspirasi", "value" => "Resiko aspirasi b.d. trauma wajah, mulut atau leher, penurunan tingkat kesadaran, peningkatan tekanan intragastrik."],
                            ["name" => "ketidakefektifan_pola_nafas", "value" => "Ketidakefektifan pola nafas b.d. nyeri, cedera pada spinal, kelelahan otot pernafasan, kerusakan otot rangka."],
                            ["name" => "gangguan_pertukaran_gas", "value" => "Gangguan pertukaran gas b.d. perubahan kapasitas darah membawa oksigen, ketidakseimbangan membran pertukaran kapiler dan alveolus."],
                            ["name" => "penurunan_curah_jantung", "value" => "Penurunan curah jantung b.d. perubahan kekuatan jantung, dalam melawan kontraksi otot jantung, menurunnya keluaran jantung, penurunan isi sekuncup yang disebabkan oleh masalah elektrofisiologis."],
                            ["name" => "ketidakefektifan_perfusi", "value" => "Ketidakefektifan perfusi jaringan (cerebral, cardiopulmonary, renal, gastrointestinal, peripheral) b.d. penurunan pertukaran sel, hipovolemia, penurunan aliran darah arteri."],
                            ["name" => "kekurangan_cairan", "value" => "Kekurangan / resiko kekurangan cairan b.d. kehilangan cairan aktif, kerusakan mekanisme regulasi."],
                            ["name" => "kelebihan_volume_cairan", "value" => "Kelebihan volume cairan b.d. mekanisme yang terganggu."],
                            ["name" => "retensi_urin", "value" => "Retensi urin b.d. obstruksi traktus urinarius, gangguan neurovaskuler, trauma, hipertrofi blader prostat."],
                            ["name" => "nyeri_akut_kronis", "value" => "Nyeri akut, kronis b.d. spasme otot dan jaringan, trauma jaringan, ketidakmampuan fisik kronik."],
                            ["name" => "hipertermia", "value" => "Hipertermia b.d. dehidrasi, peningkatan metabolisme tubuh, gangguan proses perjalanan penyakit."],
                            ["name" => "kerusakan_mobilitas", "value" => "Kerusakan mobilitas fisik b.d. kerusakan muskuloskeletal dan neuromuskuler, kehilangan integritas jaringan, nyeri, penurunan kekuatan dan ketahanan tubuh."],
                            ["name" => "resiko_infeksi", "value" => "Resiko infeksi b.d. prosedur invasif, kerusakan kulit dan jaringan trauma, imuno supresi."],
                            ["name" => "konstipasi", "value" => "Konstipasi b.d. diet, asupan cairan, tingkat aktifitas, kebiasaan defekasi."],
                            ["name" => "resiko_jatuh", "value" => "Resiko jatuh b.d. penyakit, gangguan keseimbangan, penurunan status mental, penggunaan obat, penggunaan alkohol."],
                            ["name" => "resiko_mencederai", "value" => "Resiko mencederai diri dan orang lain berhubungan dengan agresif."]
                        ];

                        foreach ($options as $option) {
                            $id = "radio_" . $option['name']; // Generate unique id for each radio button
                            echo '<div class="d-flex gap-2 align-items-start">
                                <input type="checkbox" name="' . $option['name'] . '" id="' . $id . '" class="custom-checkbox-success">
                                <label for="' . $id . '" class="col-11">' . $option['value'] . '</label>
                            </div>';
                        }
                        ?>
                        <input type="text" class="form-control border-dark" name="resiko_mencederai_lain_1">
                        <input type="text" class="form-control border-dark" name="resiko_mencederai_lain_2">
                        <input type="text" class="form-control border-dark" name="resiko_mencederai_lain_3">
                        <input type="text" class="form-control border-dark" name="resiko_mencederai_lain_4">


                    </div>
                </td>


                <td class="p-2" colspan="2">
                    <div class="d-flex flex-column gap-2">
                        <?php
                        $care_plan = [
                            ["name" => "manuver_jaw_trust", "value" => "Lakukan manuver jaw trust, head tilt dan chin lift."],
                            ["name" => "keluarkan_benda_asing", "value" => "Keluarkan benda asing, lakukan suction, cricothyroidectomy."],
                            ["name" => "pasang_opa_npa_ett", "value" => "Pasang OPA, NPA, ETT, stabilisasi cervical (collar brace)."],
                            ["name" => "berikan_bantuan_nafas", "value" => "Berikan bantuan nafas buatan, ventilasi mekanik, ventilasi dengan ventilator."],
                            ["name" => "berikan_oksigen", "value" => "Berikan O2 sesuai kebutuhan melalui nasal cannula masker."],
                            ["name" => "monitor_saturasi_o2", "value" => "Monitor Sa O2."],
                            ["name" => "monitor_tanda_vital", "value" => "Monitor tanda-tanda vital secara periodik."],
                            ["name" => "monitor_kesadaran", "value" => "Monitor tingkat kesadaran secara periodik."],
                            ["name" => "monitor_ekg", "value" => "Monitor EKG."],
                            ["name" => "monitor_cairan", "value" => "Pasang infus, sampel darah, cek AGD."],
                            ["name" => "hentikan_pendarahan", "value" => "Hentikan pendarahan, KIE banyak minum."],
                            ["name" => "posisi_semi_fowler", "value" => "Berikan posisi semi fowler."],
                            ["name" => "pasang_kateter", "value" => "Pasang kateter untuk monitor cairan keluar."],
                            ["name" => "berikan_cairan", "value" => "Berikan cairan intravena, cairan koloid, darah atau produk darah, ekspander plasma."],
                            ["name" => "kajiturgor_kulit", "value" => "Kaji turgor kulit dan memeriksa mukosa mulut."],
                            ["name" => "evaluasi_tes_cairan", "value" => "Evaluasi tes cairan, berikan sesuai kebutuhan."],
                            ["name" => "pasang_ngt", "value" => "Pasang NGT."],
                            ["name" => "atasi_nyeri", "value" => "Atasi nyeri, delegatif pemberian analgetika, teknik distraksi, relaksasi."],
                            ["name" => "lakukan_perawatan_luka", "value" => "Lakukan perawatan luka dengan teknik septic aseptik."],
                            ["name" => "berikan_kompres_hangat", "value" => "Berikan kompres hangat."],
                            ["name" => "posisi_semifowler", "value" => "Berikan posisi semifowler bila tidak ada kontra indikasi."],
                            ["name" => "delegatif_pemberian_antipiretik", "value" => "Delegatif pemberian antipiretik."],
                            ["name" => "monitor_intake_dan_output", "value" => "Monitor intake dan output cairan."],
                            ["name" => "pasang_pengaman", "value" => "Pasang pengaman, spalk, lakukan imobilisasi."],
                            ["name" => "kaji_kompartemen", "value" => "Kaji tanda-tanda kompartemen pada daerah distal dan fraktur."],
                            ["name" => "pastikan_rem_terkunci", "value" => "Pastikan tempat tidur dan rem tempat tidur terkunci dengan baik."],
                            ["name" => "pasang_gelang_pengawas", "value" => "Pasang gelang kuning pada pasien sebagai penanda pasien perlu pengawasan."],
                            ["name" => "lakukan_pengikatan_pasien", "value" => "Lakukan pengikatan pasien, kolaborasi obat penenang."]
                        ];

                        foreach ($care_plan as $care) {
                            $id = "radio_" . $care['name']; // Generate unique id for each radio button
                            echo '<div class="d-flex gap-2">
                            <input type="checkbox" name="' . $care['name'] . '" id="' . $id . '" class="custom-checkbox-success">
                            <label for="' . $id . '">' . $care['value'] . '</label>
                        </div>';
                        }
                        ?>
                        <input type="text" class="form-control border-dark" name="resiko_pengikatan_pasien_lain_1">
                        <input type="text" class="form-control border-dark" name="resiko_pengikatan_pasien_lain_2">
                        <input type="text" class="form-control border-dark" name="resiko_pengikatan_pasien_lain_3">
                        <input type="text" class="form-control border-dark" name="resiko_pengikatan_pasien_lain_4">
                        <input type="text" class="form-control border-dark" name="resiko_pengikatan_pasien_lain_5">
                    </div>
                </td>


            </tr>
        </tbody>
    </table>
</div>


<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered border-dark">
            <tbody>
                <tr>
                    <td class="fw-bold" rowspan="3">
                        <div style="width:130px">Kondisi Pasien</div>
                    </td>
                    <td class="text-center" colspan="7">MONITORING OBSERVASI PASIEN DI INSTALASI GAWAT DARURAT</td>
                </tr>
                <tr>
                    <td class="text-center" colspan="6">Jam Pemeriksaan</td>
                </tr>
                <tr>
                    <?php
                    for ($i = 1; $i <= 6; $i++) {
                    ?>
                        <td><input type="time" class="form-control border-dark" name="input_<?= $i; ?>_jam"></td>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td class="fw-bold">Kondisi Umum</td>
                    <?php
                    for ($i = 1; $i <= 6; $i++) {
                    ?>
                        <td><input type="text" class="form-control border-dark" name="input_<?= $i; ?>_tanda_vital"></td>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td class="fw-bold">Kesadaran</td>
                    <?php
                    for ($i = 1; $i <= 6; $i++) {
                    ?>
                        <td><input type="text" class="form-control border-dark" name="input_<?= $i; ?>_kesadaran"></td>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td class="fw-bold">Tanda Vital</td>
                    <?php
                    for ($i = 1; $i <= 6; $i++) {
                    ?>
                        <td><input type="text" class="form-control border-dark" name="input_<?= $i; ?>_tanda_vital"></td>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex flex-column">
                            <div>TD</div>
                            <div>Denyut</div>
                            <div>Nadi</div>
                            <div>RR</div>
                            <div>Temp</div>
                        </div>
                    </td>
                    <?php
                    for ($i = 1; $i <= 6; $i++) {
                    ?>
                        <td><textarea name="td_denyut" id="td_denyut" class="form-control border-dark" rows="4"></textarea></td>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td class="fw-bold">Nyeri</td>
                    <?php
                    for ($i = 1; $i <= 6; $i++) {
                    ?>
                        <td><input type="text" class="form-control border-dark" name="input_<?= $i; ?>_nyeri"></td>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td class="fw-bold">Catatan Hal Penting</td>
                    <?php
                    for ($i = 1; $i <= 6; $i++) {
                    ?>
                        <td><textarea name="catatan_penting" id="" class="form-control border-dark" rows="4"></textarea></td>
                    <?php
                    }
                    ?>
                </tr>

                <tr>
                    <td>Petugas</td>
                    <!-- Menambah data input untuk dokter umum dalam kolom -->
                    <?php
                    for ($i = 1; $i <= 6; $i++) {
                    ?>
                        <td>
                            <div style="width: 300px;">
                                <div class="d-flex align-items-center justify-content-center my-2">
                                    <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat<?= $i; ?>" />
                                </div>
                                <select type="select" name="perawat<?= $i; ?>" id="perawat<?= $i; ?>" class="form-select perawat" style="width: 100%;"></select>
                            </div>
                        </td>
                    <?php
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>



<!-- table selanjutnya -->
<div class="row">
    <table class="table-bordered border-dark">
        <thead>
            <th class="fw-bold text-center p-2">KONDISI PASIEN SAAT PINDAH/KELUAR DARI IGD</th>
        </thead>
        <tbody>
            <tr>
                <td class="p-2">
                    <div class="d-flex align-items-center">
                        <label for="" class="col-2">Pukul</label><input type="time" class="form-control border-dark w-25" value="<?= date('H:i') ?>" name="kondisi_pukul">
                    </div>
                </td>
            </tr>
            <tr>
                <td class="p-2">
                    <div class="mb-2">Metode Pemindahan Pasien</div>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <input type="radio" class="custom-checkbox-success" name="metode_pemindahan2" id="kursi_roda2" value="kursi_roda2"><label for="kursi_roda2" class="col-4">Kursi Roda</label>
                        <input type="radio" class="custom-checkbox-success" name="metode_pemindahan2" id="tempat_tidur2" value="tempat_tidur2"><label for="tempat_tidur2" class="col-2">Tempat Tidur</label>
                    </div>

                    <div class="mb-2">Peralatan yang menyertai saat pindah</div>
                    <div class="row">

                        <div class="col-6">

                            <div class="d-flex flex-column gap-3">
                                <!-- O2 Portabel, Kebutuhan -->
                                <div class="d-flex gap-2 align-items-center w-100">
                                    <input type="radio" class="custom-checkbox-success" name="peralatan_pindah" id="o2Portabel" value="o2Portabel" onclick="toggleInput('o2Portabel')">
                                    <div class="d-flex align-items-center w-100">
                                        <label for="o2Portabel" class="col-4">O2 Portabel, Kebutuhan :</label>
                                        <input type="text" class="form-control border-dark" id="o2Input" name="o2_kebutuhan" readonly> L/menit
                                    </div>
                                </div>

                                <!-- NGT -->
                                <div class="d-flex gap-2 align-items-center">
                                    <input type="radio" class="custom-checkbox-success" name="peralatan_pindah" id="ngt" value="ngt" onclick="toggleInput('ngt')">
                                    <label for="ngt" class="col-4">NGT</label>
                                </div>

                                <!-- Ventilator -->
                                <div class="d-flex gap-2 align-items-center">
                                    <input type="radio" class="custom-checkbox-success" name="peralatan_pindah" id="ventilator" value="ventilator" onclick="toggleInput('ventilator')">
                                    <label for="ventilator" class="col-4">Ventilator</label>
                                </div>

                                <!-- DLL -->
                                <div class="d-flex gap-2 align-items-center w-100">
                                    <input type="radio" class="custom-checkbox-success" name="peralatan_pindah" id="dll" value="dll" onclick="toggleInput('dll')">
                                    <div class="d-flex align-items-center w-100">
                                        <label for="dll" class="col-4">DLL</label>
                                        <input type="text" class="form-control border-dark" id="dllInput" name="dll_kebutuhan" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">

                            <div class="d-flex flex-column gap-3">

                                <!-- Suction -->
                                <div class="d-flex gap-2 align-items-center">
                                    <input type="radio" class="custom-checkbox-success" name="peralatan_pindah" id="suction" value="suction">
                                    <label for="suction" class="col-4">Suction</label>
                                </div>

                                <!-- Infus -->
                                <div class="d-flex gap-2 align-items-center">
                                    <input type="radio" class="custom-checkbox-success" name="peralatan_pindah" id="infus" value="infus">
                                    <label for="infus" class="col-4">Infus</label>
                                </div>

                                <!-- Kateter Urine -->
                                <div class="d-flex gap-2 align-items-center">
                                    <input type="radio" class="custom-checkbox-success" name="peralatan_pindah" id="kateterUrine" value="kateterUrine">
                                    <label for="kateterUrine" class="col-4">Keteter Urine</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>


            <tr>
                <td class="p-2">
                    <div class="">Keadaan Pasien Saat Pindah</div>
                    <div class="mb-2">Tanda-tanda Vital</div>
                    <div class="row">

                        <div class="col-6">

                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex gap-2 align-items-center"><label for="" class="col-3">GCS</label><input type="text" class="form-control border-dark" name="vital_gcs"></div>
                                <div class="d-flex gap-2 align-items-center"><label for="" class="col-3">Nadi</label><input type="text" class="form-control border-dark" name="vital_nadi">x/menit, reguler/ireguler</div>
                                <div class="d-flex gap-2 align-items-center"><label for="" class="col-3">Pernapasan</label><input type="text" class="form-control border-dark" name="vital_pernapasan">x/menit</div>
                            </div>
                        </div>

                        <div class="col-5 ms-3">
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex gap-2 align-items-center"><label for="" class="col-3">TD</label><input type="text" class="form-control border-dark w-25" name="vital_td_l"> / <input type="text" class="form-control border-dark w-25" name="vital_td_2">mmHg</div>
                                <div class="d-flex gap-2 align-items-center"><label for="" class="col-3">Suhu</label><input type="text" class="form-control border-dark" name="vital_suhu"></div>
                                <div class="d-flex gap-2 align-items-center"><label for="" class="col-3">SpO2</label><input type="text" class="form-control border-dark" name="vital_sp02"></div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="p-2">
                    <div>Pasien Di transfer Ke</div>
                    <div class="d-flex align-items-center"><label for="" class="col-3">Instalasi rawat inap di ruang</label><input type="text" class="form-control border-dark" name="instalasi_rawat_i"></div>
                </td>
            </tr>

            <tr>
                <td class="p-2">
                    <div class="row">
                        <div class="col-4">
                            <div>Tindakan Lanjutan Di</div>
                        </div>
                        <div class="col-8">
                            <div class="d-flex gap-3 align-items-center">
                                <input type="radio" class="custom-checkbox-success" name="tindakan_lanjutan" value="k_operasi" id="k_operasi" onclick="toggleInputTindakan()">
                                <div class="d-flex gap-2">
                                    <label for="k_operasi">Kamar Operasi</label>
                                    <input type="radio" class="custom-checkbox-success" name="tindakan_lanjutan" value="k_bersalin" id="k_bersalin" onclick="toggleInputTindakan()">
                                </div>
                                <div class="d-flex align-items-center gap-2 ">
                                    <label for="k_bersalin" class="col-3">Kamar Bersalin</label>
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <input type="radio" class="custom-checkbox-success" name="tindakan_lanjutan" value="k_lain" id="k_lain" onclick="toggleInputTindakan(true)">
                                        <div class="d-flex align-items-center gap-2 w-100">
                                            <label for="k_lain" class="col-4">Lain-lain</label>
                                            <input type="text" class="form-control border-dark" style="width: 300px;" name="lain_bersalin" id="lain_bersalin" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="p-2">
                    <div class="d-flex align-items-center gap-2">
                        <input type="radio" class="custom-checkbox-success" name="tindak_rujuk_rs" value="rujuk_rumah_sakit" id="rujuk_rumah_sakit">
                        <div class="d-flex align-items-center w-100">
                            <label for="rujuk_rumah_sakit" class="col-3">Di Rujuk Ke Rumah Sakit :</label>
                            <input type="text" class="form-control border-dark" id="rumah_sakit_input" name="rumah_sakit_nama">
                        </div>
                    </div>

            <tr>
                <td class="p-2">
                    <div class="d-flex align-items-center gap-2">
                        <input type="radio" class="custom-checkbox-success" name="tindak_rujuk_rs" value="dipulangkan" id="dipulangkan">
                        <label for="dipulangkan" class="col-3">Dipulangkan</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="p-2">
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2">
                                <input type="radio" class="custom-checkbox-success" name="tindak_rujuk_rs" value="meninggal_dunia" id="meninggal_dunia">
                                <label for="meninggal_dunia" class="col-3">Meninggal Dunia</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2">
                                <input type="radio" class="custom-checkbox-success" name="tindak_rujuk_rs" value="doa" id="doa">
                                <label for="doa" class="col-3">Doa</label>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            </td>
            </tr>

            <tr>
                <td class="p-2">
                    <div>Transportasi Saat Keluar IGD</div>
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex align-items-center gap-2">
                                <input type="radio" class="custom-checkbox-success" name="transportasi" value="kendaraan_pribadi" id="kendaraan_pribadi">
                                <label for="kendaraan_pribadi" class="col-5">Kendaraan Pribadi</label>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="d-flex align-items-center gap-2">
                                <input type="radio" class="custom-checkbox-success" name="transportasi" value="ambulans" id="ambulans">
                                <label for="ambulans" class="col-3">Ambulans</label>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="d-flex align-items-center gap-2">
                                <input type="radio" class="custom-checkbox-success" name="transportasi" value="kendaraan_jenazah" id="kendaraan_jenazah">
                                <label for="kendaraan_jenazah" class="col-5">Kendaraan Jenazah</label>
                            </div>
                        </div>

                    </div>
                </td>
            </tr>

        </tbody>
    </table>
</div>

<!-- table selanjutnya -->
<div class="row">
    <table class="table-bordered border-dark">
        <tbody>
            <tr>
                <td class="p-2">
                    <div class="fw-bold">Follow Up</div>
                    <div class="d-flex gap-3">
                        <div class="col-4">
                            <div class="d-flex align-items-center">
                                <label for="ya_tanggal" class="col-3">Ya, Tanggal</label>
                                <input type="date" class="form-control border-dark" id="tanggal_input" name="tgl_follow_up">
                            </div>
                        </div>
                        <div class="col-3 d-flex align-items-center gap-2">
                            <input type="radio" class="custom-checkbox-success" name="follow_up" value="tidak" id="tidak">
                            <label for="tidak">Tidak</label>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td class="p-2">
                    <label for="">Catatan lain</label>
                    <textarea name="catatan_lain_0" id="catatan_lain" rows="5" class="form-control border-dark w-100"></textarea>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="row my-3">
    <div class="d-flex justify-content-end align-items-center">
        <span class="me-2"><?= $city_sign ?>, </span> <input type="date" name="tanggal_2" class="form-control border-dark w-25" value="<?= date('Y-m-d'); ?>">
    </div>
</div>

<div class="row mt-4">
    <div class="col-6 text-center">
        <div>Dokter Yang Melakukan Pengkajian</div>
        <div class="text-center">
            <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum" />
        </div>
        <div class="mt-2 d-flex gap-2 align-items-center">
            <label for="" class="flex-shrink-0">Nama :</label>
            <select type="select" name="dokter_umum" id="dokter_umum" class="form-select dokter_umum" style="width: 70%;"></select>
        </div>
    </div>
    <div class="col-6 text-center">
        <div class="">Perawat Yang Melakukan Pengkajian</div>
        <div class="text-center my-2">
            <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat_kaji" />
        </div>
        <div class="d-flex flex-column align-items-center gap-2">
            <select type="select" name="perawat_kaji" id="perawat_kaji" class="form-select perawat" style="width: 70%;"></select>
        </div>
    </div>
</div>


<script>
    let dataDokter = []
    let dataperawat = []
    const mode = "<?= $mode; ?>"
    $(document).ready(function() {
        let page = 1;

        // mulai aktif jumlah dokter
        const jumlahperawat = 10;

        for (let i = 1; i <= jumlahperawat; i++) {
            $(`#perawat${i}`).on('select2:select', function(e) {
                const {
                    id_original
                } = e.params.data;
                QRSignatureAPI(id_original, `qr_perawat${i}`);
            });
        }


        listDokterUmumAPI()
        listperawat()

        // Initialize Select2
        $('.diagnosa').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
                dataType: 'json',
                delay: 250, // Delay in ms while typing
                data: function(params) {
                    console.log("params", params)
                    return {
                        q: params.term, // Search query
                        limit: 100, // Number of items per page
                        offset: (page - 1) * 100, // Calculate offset
                    };
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data
                    console.log(items, more)
                    return {
                        results: items, // Data from PHP
                        pagination: {
                            more: more, // Check if more data is available
                        },
                    };
                },
                cache: true,
            },
            placeholder: 'Search for items...',

        });

        $('.diagnosa').on('select2:open', function() {
            $('.select2-results__options').on('scroll', function() {
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    page++; // Increment page
                    $('.diagnosa').select2('data', null); // Trigger new data fetch
                }
            });
        });

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;

        $('#id_perawat_form').val($('#id_perawat_form').val() || id_perawat)
        $('#nama_perawat_form').val($('#nama_perawat_form').val() || nama_perawat)
        $('#nama_perawat_form').attr('disabled', true)

        QRSignatureAPI($('#id_perawat_form').val(), 'qr_perawat')

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });

        $('#perawat_kaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_kaji')
        });

    });

    function toggleInputFields() {
        const keluargaRadio = document.getElementById('keluarga_dd');
        const tidakRadio = document.getElementById('tidak_dd');

        const keluargaInput = document.getElementById('keluarga_name');
        const alasanInput = document.getElementById('alasan');

        // Kosongkan input dan hilangkan fokus jika pilihan lain dipilih
        keluargaInput.value = '';
        alasanInput.value = '';


        if (keluargaRadio.checked) {

            keluargaInput.focus();
        }

        if (tidakRadio.checked) {

            alasanInput.focus();
        }
    }
    document.addEventListener("DOMContentLoaded", function() {
        // Fungsi umum untuk menangani checkbox dan input terkait
        function toggleInput(checkboxId, inputId) {
            const checkbox = document.getElementById(checkboxId);
            const input = document.getElementById(inputId);

            checkbox.addEventListener('change', function() {
                if (checkbox.checked) {
                    input.focus();
                } else {
                    input.value = '';
                }
            });
        }

        // Panggil fungsi untuk setiap checkbox dan input terkait
        toggleInput('chries', 'skala_cries');
        toggleInput('flacc', 'skala_flacc');
        toggleInput('wong', 'skala_wong');
        toggleInput('numerik', 'skala_numerik');
        toggleInput('cpot', 'skala_cpot');

        // Fungsi untuk menangani pilihan radio untuk edukasi
        function toggleRadioInput() {
            const keluargaRadio = document.getElementById('keluarga_dd');
            const tidakRadio = document.getElementById('tidak_dd');
            const keluargaInput = document.getElementById('keluarga_name');
            const alasanInput = document.getElementById('alasan');

            // Kosongkan input dan hilangkan fokus jika pilihan lain dipilih
            keluargaInput.value = '';
            alasanInput.value = '';

            if (keluargaRadio.checked) {
                keluargaInput.focus();
            }
            if (tidakRadio.checked) {
                alasanInput.focus();
            }
        }

        // Panggil fungsi untuk menangani radio input edukasi
        toggleRadioInput();
    });
    // Function to toggle the input field focus and clear the input
    function toggleInput(isYaClicked) {
        const inputField = document.getElementById('penerjemahInput_dtb');

        if (isYaClicked) {
            // Focus the input field if "Ya" is clicked
            inputField.focus();
        } else {
            // Clear the input field if "Tidak" is clicked
            inputField.value = '';
        }
    }

    // Function to handle the focus and clearing of input field for "Lain-lain"
    function toggleOtherInput(isLainClicked) {
        const inputField = document.getElementById('lain2Input');

        if (isLainClicked) {
            // Focus the input field when "Lain-lain" is selected
            inputField.focus();
        } else {
            // Clear the input field when another radio button is selected
            inputField.value = '';
        }
    }

    // Optional: Add event listeners to other radio buttons to clear the input field when they're clicked
    const radioButtons = document.querySelectorAll('input[name="k_edukasi"]');
    radioButtons.forEach(radio => {
        radio.addEventListener('click', function() {
            if (this.id !== 'd_lain2') {
                // Clear the "Lain-lain" input if other radio buttons are clicked
                document.getElementById('lain2Input').value = '';
            }
        });
    });

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);

        // dokter img
        const jumlahperawat = 10;

        for (let i = 1; i <= jumlahperawat; i++) {
            const perawatSelect = `#perawat${i}`;
            const qrId = `qr_perawat${i}`;

            $(perawatSelect).prop('disabled', false).select2('open').select2('close');

            if (mode === "lihat") {
                $(perawatSelect).prop('disabled', true);
            }

            setTimeout(() => {
                console.log(dataperawat);
                dataperawat?.forEach(v => {
                    if (v.text === $(perawatSelect).select2('data')[0]?.text) {
                        QRSignatureAPI(v.id_original, qrId);
                    }
                });
            }, 500);
        }

        $('#dokter_umum').prop('disabled', false)
        $('#dokter_umum').select2('open')
        $('#dokter_umum').select2('close')
        if (mode === "lihat")
            $('#dokter_umum').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
                }
            })
        }, 1000)

        $('#perawat_kaji').prop('disabled', false)
        $('#perawat_kaji').select2('open')
        $('#perawat_kaji').select2('close')
        if (mode === "lihat")
            $('#perawat_kaji').prop('disabled', true)

        setTimeout(() => {
            // console.log(dataDokter)
            dataperawat?.map(v => {
                if (v.text === $('#perawat_kaji').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_kaji')
                }
            })
        }, 1000)
    }


    function listDokterUmumAPI() {
        $('.dokter_umum').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                    }
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data;
                    dataDokter = items
                    return {
                        results: items, // Data from PHP
                        pagination: {
                            more: more, // Check if more data is available
                        },
                    };
                },
                cache: true,

            },
            placeholder: 'Search for items...',
        })
    }

    function listperawat() {
        $('.perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                    }
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data;
                    dataperawat = items
                    return {
                        results: items, // Data from PHP
                        pagination: {
                            more: more, // Check if more data is available
                        },
                    };
                },
                cache: true,

            },
            placeholder: 'Search for items...',
        })
    }


    // Fungsi untuk mengaktifkan dan menonaktifkan input berdasarkan pilihan radio button
    function toggleInput(selectedRadio) {
        // Mendapatkan semua input text yang terlibat
        const o2Input = document.getElementById('o2Input');
        const dllInput = document.getElementById('dllInput');

        // Menonaktifkan semua inputan dan menghapus fokus
        o2Input.readOnly = true;
        dllInput.readOnly = true;
        o2Input.blur();
        dllInput.blur();

        // Mengosongkan nilai input ketika radio button lain dipilih
        if (selectedRadio !== 'o2Portabel') {
            o2Input.value = ''; // Mengosongkan nilai input O2 jika radio button lain dipilih
        }
        if (selectedRadio !== 'dll') {
            dllInput.value = ''; // Mengosongkan nilai input DLL jika radio button lain dipilih
        }

        // Memeriksa apakah radio button yang dipilih adalah "DLL" atau "O2 Portabel"
        if (selectedRadio === 'dll') {
            dllInput.readOnly = false; // Mengaktifkan input untuk DLL
            dllInput.focus(); // Memberikan fokus pada input DLL
        } else if (selectedRadio === 'o2Portabel') {
            o2Input.readOnly = false; // Mengaktifkan input untuk O2 Portabel
            o2Input.focus(); // Memberikan fokus pada input O2
        }
    }

    function toggleInputTindakan(enable = false) {
        const lainInput = document.getElementById('lain_bersalin');
        if (enable) {
            lainInput.readOnly = false; // Enable the input for "Lain-lain"
            lainInput.focus(); // Focus on the input
        } else {
            lainInput.readOnly = true; // Disable the input if any other radio is selected
            lainInput.value = ''; // Clear the value if another option is selected
            lainInput.blur(); // Remove focus from the input
        }
    }
</script>