<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td class="col-6">
                    <div class="d-flex gap-2">
                        <img src="<?= $images; ?>" alt="Logo" style="width: 120px;">
                        <div>
                            <h4><?= $site_title; ?></h4>
                            <div><?= $lokasi; ?></div>
                            <div><?= $telepon; ?></div>
                            <div><?= $email; ?></div>
                        </div>
                    </div>
                </td>
                <td>

                    <?php
                    // Gabungkan tanggal lahir dan umur
                    $tgl_lahir = $tgl_lahir;
                    $umur = $umur;
                    $values = "$tgl_lahir / $umur";

                    $dataform1 = array(
                        array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Pasien", 'status' => "", 'name' => "nama_pasien"),
                        array('nama' => "Tanggal Lahir/Umur", 'name' => "tanggall_lahir", 'tipe' => "text", 'values' => $values, 'holder' => "Masukkan Tanggal Lahir", 'status' => "disabled"),
                        array('nama' => "Jenis Kelamin", 'name' => "jenkel", 'tipe' => "text", 'values' => "", 'holder' => "jenkel", 'status' => ""),
                        array('nama' => "Nomor Rm", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nomor Rm", 'status' => "", 'name' => 'no_rm'),
                    );
                    foreach ($dataform1 as $a) {
                        echo "<div class='form-group mt-2'>";
                        echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
                        echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>
                    </div>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h5 class="text-center fw-bold">ASESMEN KEBUTUHAN EDUKASI TERINTEGRASI</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <div>Kemampuan Berbahasa</div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="bahasa_baik" class="custom-checkbox-success" id="bahasa_baik">
                            <label for="bahasa_baik">Baik</label>
                        </div>
                        <div class="col-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="bahasa_cukup" class="custom-checkbox-success" id="bahasa_cukup">
                            <label for="bahasa_cukup">Cukup</label>
                        </div>
                        <div class="col-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="bahasa_Kurang" class="custom-checkbox-success" id="bahasa_Kurang">
                            <label for="bahasa_Kurang">Kurang</label>
                        </div>
                    </div>
                    <div class="mt-4">Kemampuan Membaca</div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="membaca_ya" class="custom-checkbox-success" id="membaca_ya">
                            <label for="membaca_ya">Ya</label>
                        </div>
                        <div class="col-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="membaca_tidak" class="custom-checkbox-danger" id="membaca_tidak">
                            <label for="membaca_tidak">Tidak</label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="">Bahasa yang digunakan</label>
                        <input type="text" name="bahasa_digunakan" class="form-control border-dark">
                    </div>
                </td>
                <td>
                    <div style="margin-top: -80px;">
                        <div>Pendidikan :</div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="belum_sekolah" id="belum_sekolah" class="custom-checkbox-success">
                                <label for="belum_sekolah">Belum Sekolah</label>
                            </div>
                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="tk" id="tk" class="custom-checkbox-success">
                                <label for="tk">TK</label>
                            </div>
                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="smp" id="smp" class="custom-checkbox-success">
                                <label for="smp">SMP</label>
                            </div>
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="Tidak_sekolah" id="Tidak_sekolah" class="custom-checkbox-success">
                                <label for="Tidak_sekolah">Tidak Sekolah</label>
                            </div>
                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="SD" id="SD" class="custom-checkbox-success">
                                <label for="SD">SD</label>
                            </div>
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="Sma" id="Sma" class="custom-checkbox-success">
                                <label for="Sma">SMA Sederajat</label>
                            </div>
                            <div class="col d-flex align-items-center gap-2">
                                <input type="checkbox" name="lain-lain_derajat" id="lain-lain_derajat" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="lain-lain_derajat" class="flex-shrink-0">Lain-lain</label>
                                    <input type="text" name="lain_derajat" id="lain_derajat" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <div>Hambatan dalam pemberian edukasi :</div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="tidak_a_hambatan" id="tidak_a_hambatan" class="custom-checkbox-success">
                            <label for="tidak_a_hambatan">Tidak Ada Hambatan</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="bahasa" id="bahasa" class="custom-checkbox-success">
                            <label for="bahasa">Bahasa</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="keterbatasan" id="keterbatasan" class="custom-checkbox-success">
                            <label for="keterbatasan">Keterbatasan pengetahuan kognitif</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="pendengaran" id="pendengaran" class="custom-checkbox-success">
                            <label for="pendengaran">Pendengaran</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Penglihatan" id="Penglihatan" class="custom-checkbox-success">
                            <label for="Penglihatan">Penglihatan</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="keterbatasan_fisik" id="keterbatasan_fisik" class="custom-checkbox-success">
                            <label for="keterbatasan_fisik">Keterbatasan fisik</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="berkomunikasi" id="berkomunikasi" class="custom-checkbox-success">
                            <label for="berkomunikasi">Berkomunikasi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Pendidikan" id="Pendidikan" class="custom-checkbox-success">
                            <label for="Pendidikan">Pendidikan</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Usia" id="Usia" class="custom-checkbox-success">
                            <label for="Usia">Usia</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Motivasi" id="Motivasi" class="custom-checkbox-success">
                            <label for="Motivasi">Motivasi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Emosi" id="Emosi" class="custom-checkbox-success">
                            <label for="Emosi">Emosi</label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2" style="margin-top: -170px;">
                        <div>Intervensi terhadap hambatan: </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="penerjemah" id="penerjemah" class="custom-checkbox-success">
                            <label for="penerjemah">Menggunakan penerjemah</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="materi" id="materi" class="custom-checkbox-success">
                            <label for="materi">Membatasi Materi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="edukasi_keluarga" id="edukasi_keluarga" class="custom-checkbox-success">
                            <label for="edukasi_keluarga">Memberikan edukasi kepada keluarga</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="alat_bantu" id="alat_bantu" class="custom-checkbox-success">
                            <label for="alat_bantu">Menggunakan Alat Bantu</label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2 my-4">
                        <div>metode</div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="individual" id="individual" class="custom-checkbox-success">
                            <label for="individual">Individual</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Kelompok" id="Kelompok" class="custom-checkbox-success">
                            <label for="Kelompok">Kelompok</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Demontrasi" id="Demontrasi" class="custom-checkbox-success">
                            <label for="Demontrasi">Demontrasi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Diskusi" id="Diskusi" class="custom-checkbox-success">
                            <label for="Diskusi">Diskusi/ Tanya Jawab</label>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-2 my-4">
                        <div>Media :</div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="leaflet" id="leaflet" class="custom-checkbox-success">
                            <label for="leaflet">Leaflet</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Audio" id="Audio" class="custom-checkbox-success">
                            <label for="Audio">Audio</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Visual" id="Visual" class="custom-checkbox-success">
                            <label for="Visual">Visual</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Audiovisual" id="Audiovisual" class="custom-checkbox-success">
                            <label for="Audiovisual">Audiovisual</label>
                        </div>
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
                <tr class="text-center">
                    <td>Tanggal / Jam</td>
                    <td>Edukator</td>
                    <td class="col-3">Kebutuhan Edukasi</td>
                    <td>Hambatan</td>
                    <td>Intervensi terhadap hambatan</td>
                    <td>Metode</td>
                    <td>Media</td>
                    <td>Nama & T.Tangan</td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_admisi" class="form-control border-dark" style="width: 180px;"></td>
                    <td>
                        <div style="width: 80px;" class="text-center">Admisi</div>
                    </td>
                    <td>
                        <div style="width: 250px;">1.General concenct</div>
                        <ul>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="hak_kewajiban">
                                <label for="hak_kewajiban"> Hak dan kewajiban Pasien</label>
                            </div>
                            <li>Peraturan dan tata tertib RS</li>
                            <li>Informasi rawat inap</li>
                            <li>Perkiraan Biaya</li>
                        </ul>
                    </td>
                    <td>
                        <textarea name="hambatan_admisi" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_admisi" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_admisi" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_admisi" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <div class="text-center my-1">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_admisi" />
                        </div>
                        <select type="select" name="admisi" id="admisi" class="form-select"
                            style="width: 250px;"></select>
                    </td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_dpjp" class="form-control border-dark" style="width: 180px;"></td>
                    <td>
                        <div style="width: 80px;" class="text-center">
                            <div>Dokter/</div>
                            <div>DPJP</div>
                        </div>
                    </td>
                    <td>
                        <ol>
                            <li>Kebutuhan pelayanan asuhan pasien(Preventif, Kuratif, Paliatif, Rehabilitasi)</li>
                            <li> Penjelasan tentang hasil asesmen, diagnosa termasuk penatalaksanaan dan rencana asuhan yang diberikan</li>
                            <li>Hasil asuhan dan pengobatan yang diharapkan dan yang tidak diharapkan</li>
                            <li>Risiko dan komplikasi tindakan medik yang akan dilakukan</li>
                            <li>Keamanan dan efektifitas penggunaan peralatan medis</li>
                        </ol>
                    </td>
                    <td>
                        <textarea name="hambatan_dpjp" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_dpjp" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_dpjp" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_dpjp" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <div class="text-center my-1">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_dokter" />
                        </div>
                        <select type="select" name="dokter" id="dokter" class="form-select dokter"
                            style="width: 100%;"></select>
                    </td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_perawat" class="form-control border-dark" style="width: 180px;"></td>
                    <td>
                        <div style="width: 80px;" class="text-center">
                            <div>Perawat /</div>
                            <div>Bidan</div>
                        </div>
                    </td>
                    <td>
                        <ol>
                            <li>Perawatan diri</li>
                            <li> Prosedur tindakan yang dilakukan</li>
                            <li>Transfer pasien</li>
                            <li> Assesmen nyeri dan manajemen nyeri</li>
                            <li>Cara Cuci tangan</li>
                            <li>Cara Pencegahan infeksi</li>
                            <li>Orietasi ruangan</li>
                            <li> Mobilisasi dan ambulansi</li>
                        </ol>
                    </td>
                    <td>
                        <textarea name="hambatan_perawat" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_perawat" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_perawat" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_perawat" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <div class="text-center my-1">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat" />
                        </div>
                        <select type="select" name="perawat" id="perawat" class="form-select perawat"
                            style="width: 250px;"></select>
                    </td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_DBP" class="form-control border-dark" style="width: 180px;"></td>
                    <td>
                        <div style="width: 80px;" class="text-center">
                            <div>Dokter/</div>
                            <div>Perawat /</div>
                            <div>Bidan</div>
                        </div>
                    </td>
                    <td>
                        <ol>
                            <li>Asuhan lanjutan di rumah</li>
                            <li> Pelaksanaan rujukan</li>
                            <li>Perncanaan pemulangan pasien (rencana pemulangan kompleks/ Dircharge planning)</li>
                        </ol>
                    </td>
                    <td>
                        <textarea name="hambatan_DBP" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_DBP" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_DBP" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_DBP" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <div class="text-center">Dokter</div>
                        <div class="text-center my-1">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_dokter" />
                        </div>
                        <select type="select" name="perawat_dokter" id="perawat_dokter" class="form-select dokter"
                            style="width: 250px;"></select>


                        <div class="text-center mt-5">Perawat / Bidan</div>
                        <div class="text-center my-1">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_bidan" />
                        </div>
                        <select type="select" name="perawat_bidan" id="perawat_bidan" class="form-select perawat"
                            style="width: 250px;"></select>
                    </td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_fisioterapi" class="form-control border-dark" style="width: 180px;"></td>
                    <td>
                        <div style="width: 80px;" class="text-center">
                            <div>Fisioterapi</div>
                        </div>
                    </td>
                    <td>
                        <div>Teknik Rehabilitasi</div>
                    </td>
                    <td>
                        <textarea name="hambatan_fisioterapi" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_fisioterapi" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_fisioterapi" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_fisioterapi" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png'); ?>" style="width: 250px; height:200px" data-input-name="image_drawer_state_image_fisioterapi" />
                        <input type="hidden" id="image_drawer_state_image_fisioterapi" name="image_drawer_state_image_fisioterapi" value="" />
                        <input type="text" name="fisioterapi" class="form-control border-dark">
                    </td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_apoteker" class="form-control border-dark" style="width: 180px;"></td>
                    <td>
                        <div style="width: 180px;">
                            <div>Apoteker</div>
                        </div>
                    </td>
                    <td>
                        <ol>
                            <li>Penggunaan obat- obatan secara efektif dan aman</li>
                            <li> Potensi efek samping obat</li>
                            <li> Potensi interaksi obat antar obat konvensional, obat bebas, serta suplemen atau makanan.</li>
                        </ol>
                    </td>
                    <td>
                        <textarea name="hambatan_apoteker" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_apoteker" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_apoteker" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_apoteker" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png'); ?>" style="width: 250px; height:200px" data-input-name="image_drawer_state_image_apoteker" />
                        <input type="hidden" id="image_drawer_state_image_apoteker" name="image_drawer_state_image_apoteker" value="" />
                        <input type="text" name="apoteker_name" class="form-control border-dark">
                    </td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_dietisien" class="form-control border-dark" style="width: 180px;"></td>
                    <td>
                        <div style="width: 80px;" class="text-center">
                            <div>Dietesien</div>
                        </div>
                    </td>
                    <td>
                        <ol>
                            <li> Diet dan nutrisi yang memadai</li>
                            <li> Alergi makanan</li>
                            <li> Program diet</li>
                            <li> Makanan yang harus dihindari</li>
                            <li> Kebutuhan kalori</li>
                            <li> Jenis makanan yang dibutuhkan pasien</li>
                            <li> Ajarkan cara melaksanakan diet sesuai program</li>
                        </ol>
                    </td>
                    <td>
                        <textarea name="hambatan_dietisien" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_dietisien" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_dietisien" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_dietisien" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                    </td>
                    <td>
                        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png'); ?>" style="width: 250px; height:200px" data-input-name="image_drawer_state_image_dietesien" />
                        <input type="hidden" id="image_drawer_state_image_dietesien" name="image_drawer_state_image_dietesien" value="" />

                        <input type="text" name="dietesien_name" class="form-control border-dark">
                    </td>
                </tr>
                <?php
                $programCount = 7;
                $base_url = base_url('assets2/rme/img/testttd.png');
                ?>

                <?php
                for ($i = 1; $i <= $programCount; $i++) {
                ?>

                    <tr>
                        <td><input type="datetime-local" name="tgl_jam_td_lain_<?= $i; ?>" class="form-control border-dark" style="width: 180px;"></td>
                        <td>
                            <textarea name="edukator_lain_<?= $i; ?>" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                        </td>
                        <td>
                            <textarea name="kbtuhan_lain_<?= $i; ?>" rows="4" id="" class="form-control border-dark" style="width: 250px;"></textarea>
                        </td>
                        <td>
                            <textarea name="hambatan_lain_<?= $i; ?>" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                        </td>
                        <td>
                            <textarea name="intervensi_lain_<?= $i; ?>" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                        </td>
                        <td>
                            <textarea name="metode_lain_<?= $i; ?>" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                        </td>
                        <td>
                            <textarea name="media_lain_<?= $i; ?>" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                        </td>
                        <td>
                            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png'); ?>" style="width: 250px; height:200px" data-input-name="image_drawer_state_image_lain_<?= $i; ?>" />
                            <input type="hidden" id="image_drawer_state_image_lain_<?= $i; ?>" name="image_drawer_state_image_lain_<?= $i; ?>" value="" />
                        </td>
                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
    </div>
</div>




<script>
    const mode = "<?= $mode; ?>"
    let dataDokter = []
    let dataAdmisi = []
    let dataListPerawatMenerima = []


    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });


    function cbCommon(data) {
        populateFormFields(data);

        $('#admisi').prop('disabled', false)
        $('#admisi').select2('open')
        $('#admisi').select2('close')
        $('#dokter').prop('disabled', false)
        $('#dokter').select2('open')
        $('#dokter').select2('close')
        $('#perawat').prop('disabled', false)
        $('#perawat').select2('open')
        $('#perawat').select2('close')
        $('#perawat_dokter').prop('disabled', false)
        $('#perawat_dokter').select2('open')
        $('#perawat_dokter').select2('close')
        $('#perawat_bidan').prop('disabled', false)
        $('#perawat_bidan').select2('open')
        $('#perawat_bidan').select2('close')
        if (mode === "lihat") {
            $('#admisi').prop('disabled', true)
            $('#dokter').prop('disabled', true)
            $('#perawat').prop('disabled', true)
            $('#perawat_dokter').prop('disabled', true)
            $('#perawat_bidan').prop('disabled', true)

        }

        setTimeout(() => {
            dataAdmisi?.map(v => {
                if (v.text === $('#admisi').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_admisi')
                }
            })
            dataDokter?.map(v => {
                if (v.text === $('#dokter').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter')
                }
            })
            dataDokter?.map(v => {
                if (v.text === $('#perawat_dokter').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_dokter')
                }
            })
            dataListPerawatMenerima?.map(v => {
                if (v.text === $('#perawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat')
                }
            })
            dataListPerawatMenerima?.map(v => {
                if (v.text === $('#perawat_bidan').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_bidan')
                }
            })
        }, 1000)
    }

    $(document).ready(function() {
        let page = 1;

        listEdukatorAPI()


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
            // minimumInputLength: 0,
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

        $('#admisi').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_admisi')
        });
        $('#dokter').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter')
        });
        $('#perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat')
        });
        $('#perawat_dokter').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_dokter')
        });
        $('#perawat_bidan').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_bidan')
        });
    });

    function listEdukatorAPI() {
        $('#admisi').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/3'); ?>',
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
                    dataAdmisi = items
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

        $('.dokter').select2({
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
                    dataListPerawatMenerima = items
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
</script>