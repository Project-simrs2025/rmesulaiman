<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td class="col-4">
                    <h5 class="text-center">
                        PENGKAJIAN IGD
                    </h5>
                </td>
                <td colspan="2">

                    <?php
                    // Gabungkan tanggal lahir dan umur
                    $tgl_lahir = $tgl_lahir;
                    $umur = $umur;
                    $values = "$tgl_lahir / $umur";

                    $dataform1 = array(
                        array('nama' => "Nomor Rm", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nomor Rm", 'status' => "", 'name' => 'no_rm'),
                        array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Pasien", 'status' => "", 'name' => "nama_pasien"),
                        array('nama' => "Tanggal Lahir/Umur", 'name' => "tanggall_lahir", 'tipe' => "text", 'values' => $values, 'holder' => "Masukkan Tanggal Lahir", 'status' => "disabled"),
                        array('nama' => "Jenis Kelamin", 'name' => "jenkel", 'tipe' => "text", 'values' => "", 'holder' => "jenkel", 'status' => ""),
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
                <td colspan="3">
                    <div class="fw-bold">1. Triase Sekunder</div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="d-flex flex-column gap-2">
                        <!-- keadaan umum -->
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">Keadaan Umum :</div>
                            <div class="d-flex align-items-center gap-2 col-3">
                                <input type="checkbox" name="keadaan_baik" id="keadaan_baik" class="custom-checkbox-success">
                                <label for="keadaan_baik"> Baik</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="keadaan_Sedang" id="keadaan_Sedang" class="custom-checkbox-success">
                                <label for="keadaan_Sedang">Sedang</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-3">
                                <input type="checkbox" name="keadaan_Buruk" id="keadaan_Buruk" class="custom-checkbox-success">
                                <label for="keadaan_Buruk">Buruk</label>
                            </div>

                        </div>
                        <!-- batas -->

                        <!-- kesadaran -->
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="col-2">Kesadaran :</div>
                            <!-- compos mentis -->
                            <div class="d-flex align-items-center gap-2 col-3">
                                <input type="checkbox" name="compos" id="compos" class="custom-checkbox-success">
                                <label for="compos">Compos Mentis</label>
                            </div>
                            <!-- batas -->

                            <!-- Apatis -->
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="apatis" id="apatis" class="custom-checkbox-success">
                                <label for="apatis">Apatis</label>
                            </div>
                            <!-- batas -->

                            <!-- Delirium -->
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="Delirium" id="Delirium" class="custom-checkbox-success">
                                <label for="Delirium">Delirium</label>
                            </div>
                            <!-- batas -->

                            <!-- Somnolen -->
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="Somnolen" id="Somnolen" class="custom-checkbox-success">
                                <label for="Somnolen">Somnolen</label>
                            </div>
                            <!-- batas -->

                            <!-- rows -->
                            <div class="col-2"></div>
                            <!-- batas -->

                            <!-- Sopor -->
                            <div class="d-flex align-items-center gap-2 col-3">
                                <input type="checkbox" name="Sopor" id="Sopor" class="custom-checkbox-success">
                                <label for="Sopor">Sopor</label>
                            </div>
                            <!-- batas -->

                            <!-- Koma -->
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="Koma" id="Koma" class="custom-checkbox-success">
                                <label for="Koma">Koma</label>
                            </div>
                            <!-- batas -->

                        </div>
                        <!-- batas -->
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="text-center">
                        <table class="table table-bordered border-dark">
                            <tr>
                                <td colspan="3" class="text-center">GCS</td>
                            </tr>
                            <tr class="text-center">
                                <td>Eye Response</td>
                                <td>Verbal Response</td>
                                <td>Motoric Response</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2 ">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="spontan" id="spontan" class="custom-checkbox-success" data-value="4">
                                        <label for="spontan">4 Spontan</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="kalimat_nyambung" id="kalimat_nyambung" class="custom-checkbox-success" data-value="5">
                                        <label for="kalimat_nyambung">5 Kalimat nyambung</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="normal" id="normal" class="custom-checkbox-success" data-value="6">
                                        <label for="normal">6 normal</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="Suara" id="Suara" class="custom-checkbox-success" data-value="3">
                                        <label for="Suara">3 Suara</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 ">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="bingung" id="bingung" class="custom-checkbox-success" data-value="4">
                                        <label for="bingung">4 bingung</label>
                                    </div>
                                </td>
                                <!-- Kolom kosong agar sejajar -->
                                <td>
                                    <div class="d-flex align-items-center gap-2 ">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="Melokalisir" id="Melokalisir" class="custom-checkbox-success" data-value="5">
                                        <label for="Melokalisir">5 Melokalisir Nyeri</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2 ">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="Nyeri" id="Nyeri" class="custom-checkbox-success" data-value="2">
                                        <label for="Nyeri">2 Nyeri</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 ">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="bcr_tdk_jelas" id="bcr_tdk_jelas" class="custom-checkbox-success" data-value="3">
                                        <label for="bcr_tdk_jelas">3 Bicara Tidak Jelas</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 ">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="fleksi_normal" id="fleksi_normal" class="custom-checkbox-success" data-value="4">
                                        <label for="fleksi_normal">4 Fleksi Normal</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2 ">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="tdk_merespon" id="tdk_merespon" class="custom-checkbox-success" data-value="1">
                                        <label for="tdk_merespon">1 Tidak Merespon</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 ">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="Mengerang" id="Mengerang" class="custom-checkbox-success" data-value="2">
                                        <label for="Mengerang">2 Mengerang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 ">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="fleksi_abonormal" id="fleksi_abonormal" class="custom-checkbox-success" data-value="3">
                                        <label for="fleksi_abonormal">3 Fleksi Abnormal</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 ">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="Tidak_merespon" id="Tidak_merespon" class="custom-checkbox-success" data-value="1">
                                        <label for="Tidak_merespon">1 Fleksi Abnormal</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 ">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="Ekstensi_abnormal" id="Ekstensi_abnormal" class="custom-checkbox-success" data-value="2">
                                        <label for="Ekstensi_abnormal">2 Ekstensi Abnormal</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 ">
                                        <div class="col-2"></div>
                                        <input type="checkbox" onchange="calculateTotal()" name="Tidak_merespon_abnormal" id="Tidak_merespon_abnormal" class="custom-checkbox-success" data-value="1">
                                        <label for="Tidak_merespon_abnormal">1 Tidak Merespon</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Total</td>
                                <td><input type="text" name="total_gcs" id="total_gcs" class="form-control border-dark" readonly>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="fw-bold">2. Vital sign</div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="row">
                        <div class="d-flex flex-column gap-2">
                            <div class="row">
                                <!-- rows 1 vital sign -->
                                <div class="col-4 d-flex align-items-center gap-2">
                                    <label for="">TD</label>
                                    <input type="text" name="TD" id="TD" class="form-control border-dark">
                                    <span>mmHg</span>
                                </div>
                                <div class="col-4 d-flex align-items-center gap-2">
                                    <label for="">Nadi</label>
                                    <input type="text" name="Nadi" id="Nadi" class="form-control border-dark">
                                    <span>x/mnt</span>
                                </div>
                                <div class="col-4 d-flex align-items-center gap-2">
                                    <label for="">RR</label>
                                    <input type="text" name="RR" id="RR" class="form-control border-dark">
                                    <span>x/mnt</span>
                                </div>
                                <!-- batas -->
                            </div>

                            <!-- rows 2 vital sign -->
                            <div class="row">
                                <div class="col-4 d-flex align-items-center gap-2">
                                    <label for="">T</label>
                                    <input type="text" name="T" id="T" class="form-control border-dark">
                                    <span>&deg;C</span>
                                </div>
                                <div class="col-4 d-flex align-items-center gap-2">
                                    <label for="">SaO<sub>2</sub></label>
                                    <input type="text" name="SaO" id="SaO" class="form-control border-dark">
                                    <span>%</span>
                                </div>
                                <div class="col-4 d-flex align-items-center gap-2">
                                    <label for="" class="col-6">Skala nyeri vital sign</label>
                                    <input type="text" name="Skala_nyeri_vital_sign" id="Skala_nyeri_vital_sign" class="form-control border-dark">
                                    <span></span>
                                </div>
                            </div>
                            <!-- batas -->

                            <div class="d-flex align-items-center gap-2">
                                <div>Kadar Gula Darah Sewaktu :</div>
                                <div class="col-3 d-flex align-items-center gap-2">
                                    <input type="text" name="kadar_guka_sewaktu" id="" class="form-control border-dark w-50">
                                    <div>mg / dl</div>
                                </div>
                                <div class="col d-flex align-items-center gap-2">
                                    <div>pukul</div>
                                    <input type="time" name="kadar_guka_time" id="" class="form-control border-dark w-25">
                                    <span class="mx-3">(Di isi bila ada pemeriksaan)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="fw-bold">3. Riwayat Alergi</td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center gap-2">
                        <input type="checkbox" name="rw_alergi_makanan" id="rw_alergi_makanan" class="custom-checkbox-success">
                        <div class="d-flex gap-2 align-items-center w-100">
                            <label for="rw_alergi_makanan">Makanan</label>
                            <input type="text" name="makanan_input" id="" class="form-control border-dark">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                        <input type="checkbox" name="rw_alergi_Obat" id="rw_alergi_Obat" class="custom-checkbox-success">
                        <div class="d-flex gap-2 align-items-center w-100">
                            <label for="rw_alergi_Obat">Obat</label>
                            <input type="text" name="Obat_input" id="" class="form-control border-dark">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                        <input type="checkbox" name="rw_alergi_Lain-Lain" id="rw_alergi_Lain-Lain" class="custom-checkbox-success">
                        <div class="d-flex gap-2 align-items-center w-100">
                            <label for="rw_alergi_Lain-Lain" class="flex-shrink-0">Lain-Lain</label>
                            <input type="text" name="Lain-Lain_input" id="" class="form-control border-dark">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="d-flex flex-column gap-2">
                        <div>Skala Nyeri / Pain Score : (Tidak ada nyeri - nyeri sangat berat)</div>
                        <div>
                            <img class="marker-image" id="setting_img" src="<?= base_url() . 'assets2/rme/img/pain_score.png' ?>"
                                data-input-name="image_drawer_state_image_1"
                                alt="" style="max-height:200px;">
                            <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1" value="" />
                        </div>
                        <div>
                            <img class="marker-image" id="setting-img" src="<?= base_url() . 'assets2/rme/img/nyeri.png' ?>"
                                data-input-name="image_drawer_state_image_2"
                                alt="" style="max-height:200px;">
                            <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2" value="" />
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <h6 class="fw-bold text-center">SKALA FLACC UNTUK ANAK <= 6 tahun</h6>
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr class="text-center fw-bold">
                                        <td>PENGKAJIAN</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>NILAI</td>
                                    </tr>
                                    <tr>
                                        <td>Wajah</td>
                                        <td>Tersenyum tidak ada depresi khusus</td>
                                        <td>Terkadang meringis / menarik diri</td>
                                        <td>Sering Menggetarkan dagu dan mengatupkan rahang</td>
                                        <td><input type="number" name="score_face" class="form-control border-dark" oninput="updateTotalScoreInputs()"></td>
                                    </tr>
                                    <tr>
                                        <td>Kaki</td>
                                        <td>Gerakan normal / relaksasi</td>
                                        <td>Tidak tenang tegang</td>
                                        <td>Kaki dibuat menendang / menarik diri</td>
                                        <td><input type="number" name="score_fat" class="form-control border-dark" oninput="updateTotalScoreInputs()"></td>
                                    </tr>
                                    <tr>
                                        <td>Aktivitas</td>
                                        <td>Tidur posisi normal, mudah bergerak</td>
                                        <td>Gerakan menggeliat, berguling, kaku</td>
                                        <td>Melengkungkan punggung/kaku/menghentak</td>
                                        <td><input type="number" name="score_Activity" class="form-control border-dark" oninput="updateTotalScoreInputs()"></td>
                                    </tr>
                                    <tr>
                                        <td>Menangis</td>
                                        <td>Tidak nangis (bangun / tidur)</td>
                                        <td>Mengerang, merengek-rengek</td>
                                        <td>Menangis terus-menerus terisak, menjerit</td>
                                        <td><input type="number" name="score_cry" class="form-control border-dark" oninput="updateTotalScoreInputs()"></td>
                                    </tr>
                                    <tr>
                                        <td>Bersuara</td>
                                        <td>Bersuara Normal, tenang</td>
                                        <td>Tenang bila dipeluk, digendong atau diajak bicara</td>
                                        <td>Sulit untuk menenangkan</td>
                                        <td><input type="number" name="score_speakup" class="form-control border-dark" oninput="updateTotalScoreInputs()"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-end">Total</td>
                                        <td><input type="text" name="caclt_score" class="form-control border-dark" readonly></td>
                                    </tr> 
                                </tbody>
                            </table>

                            <div class="row">
                                <div class="col-6 d-flex gap-2">
                                    <div class="col-2">Skala </div>
                                    <div>0 : Nyaman</div>
                                </div>
                                <div class="col-6 d-flex gap-2">
                                    <div>4 - 6</div>
                                    <div>Nyeri Sedang</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 d-flex gap-2">
                                    <div class="col-2"> </div>
                                    <div>1 - 3 : Kurang Nyaman</div>
                                </div>
                                <div class="col-6 d-flex gap-2">
                                    <div>7 - 10</div>
                                    <div>Nyeri Berat</div>
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
                <td colspan="3">
                    <!-- rows-1 nyeri -->
                    <div class="row my-2">
                        <div class="col-6 my-1">
                            <div>Nyeri</div>
                        </div>
                        <div class="col-6 my-1">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <span>:</span>
                                    <input type="checkbox" name="nyeri_ya_tb2" id="" class="custom-checkbox-success">
                                    <label for="nyeri_ya_tb2" class="">Ya</label>
                                </div>

                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="nyeri_Tidak_tb2" id="" class="custom-checkbox-success">
                                    <label for="nyeri_Tidak_tb2" class="">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <!-- restore -->


                        <!-- rows 2 Provocating (penyebab/pemicu)-->
                        <div class="col-6 my-1">
                            <div>Provocating (penyebab/pemicu)</div>
                        </div>
                        <div class="col-6 my-1">
                            <div class="d-flex gap-2 align-items-center">
                                <span>:</span>
                                <input type="text" name="provocating_tb2" id="" class="form-control border-dark">
                            </div>
                        </div>
                        <!-- restore -->

                        <!-- rows 2 Quality (kualitas nyeri)-->
                        <div class="col-6 my-1">
                            <div>Quality (kualitas nyeri)</div>
                        </div>
                        <div class="col-6 my-1">
                            <div class="d-flex gap-2 align-items-center">
                                <span>:</span>
                                <input type="text" name="quality_tb2" id="" class="form-control border-dark">
                            </div>
                        </div>
                        <!-- restore -->

                        <!-- rows 3 Region (lokasi)-->
                        <div class="col-6 my-1">
                            <div>Region (lokasi)</div>
                        </div>
                        <div class="col-6 my-1">
                            <div class="d-flex gap-2 align-items-center">
                                <span>:</span>
                                <input type="text" name="region_tb2" id="" class="form-control border-dark">
                            </div>
                        </div>
                        <!-- restore -->

                        <!-- rows 4 Severity (skala nyeri)-->
                        <div class="col-6 my-1">
                            <div>Severity (skala nyeri)</div>
                        </div>
                        <div class="col-6 my-1">
                            <div class="d-flex gap-2 align-items-center">
                                <span>:</span>
                                <input type="text" name="sk_nyeri_tb2" id="" class="form-control border-dark">
                            </div>
                        </div>
                        <!-- restore -->

                        <!-- rows 5 Time(durasi, frekuensi)-->
                        <div class="col-6 my-1">
                            <div>Time(durasi, frekuensi)</div>
                        </div>
                        <div class="col-6 my-1">
                            <div class="d-flex gap-2 align-items-center">
                                <span>:</span>
                                <input type="text" name="time_rows5_tb2" id="" class="form-control border-dark">
                            </div>
                        </div>
                        <!-- restore -->

                        <!-- rows-6 Respon Emosional -->
                        <div class="col-6 my-1">
                            <div>Respon Emosional</div>
                        </div>
                        <div class="col-6 my-1">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <span>:</span>
                                    <input type="checkbox" name="respon_mual_tb2" id="" class="custom-checkbox-success">
                                    <label for="respon_mual_tb2" class="">Mual</label>
                                </div>

                                <div class="d-flex align-items-center gap-2 col-2">

                                    <input type="checkbox" name="respon_Cemas_tb2" id="" class="custom-checkbox-success">
                                    <label for="respon_Cemas_tb2" class="">Cemas</label>
                                </div>

                                <div class="d-flex align-items-center gap-2 col-2">

                                    <input type="checkbox" name="respon_Marah_tb2" id="" class="custom-checkbox-success">
                                    <label for="respon_Marah_tb2" class="">Marah</label>
                                </div>

                            </div>
                        </div>
                        <!-- restore -->

                        <!-- rows-7 Cara Mengatasi Nyeri -->
                        <div class="col-6 my-1">
                            <div>Cara Mengatasi Nyeri</div>
                        </div>
                        <div class="col-6 my-1">
                            <div class="d-flex gap-2 align-items-center flex-wrap">
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <span>:</span>
                                    <input type="checkbox" name="mengatasi_Obat_tb2" id="" class="custom-checkbox-success">
                                    <label for="mengatasi_Obat_tb2" class="">Obat</label>
                                </div>

                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="mengatasi_Istirahat_tb2" id="" class="custom-checkbox-success">
                                    <label for="mengatasi_Istirahat_tb2" class="">Istirahat</label>
                                </div>

                                <div class="d-flex align-items-center gap-2 col-3">
                                    <input type="checkbox" name="mengatasi_Relaksasi_tb2" id="" class="custom-checkbox-success">
                                    <label for="mengatasi_Relaksasi_tb2" class="">Relaksasi</label>
                                </div>

                                <div class="col-2"></div>
                                <div class="d-flex align-items-center gap-2 col-3">
                                    <input type="checkbox" name="mengatasi_ub_posisi_tb2" id="" class="custom-checkbox-success">
                                    <label for="mengatasi_ub_posisi_tb2" class="">ubah posisi</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-3">
                                    <input type="checkbox" name="mengatasi_ub_lain_tb2" id="" class="custom-checkbox-success">
                                    <label for="mengatasi_lain_posisi_tb2" class="">Lain-lain</label>
                                </div>

                            </div>
                        </div>
                        <!-- restore -->

                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="fw-bold">4. Pengkajian Keperawatan</div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="fw-bold my-2">1. A. Informasi Kedatangan pasien</div>
                    <textarea name="info_kedatangan_pasien" id="" rows="3" class="form-control border-dark"></textarea>

                    <div class="row">
                        <div class="fw-bold my-2 ms-3"> B. Informasi di dapat dari :</div>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="info_Allo" id="info_auto" class="custom-checkbox-success">
                                <label for="info_auto">Auto anamnesa</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-3">
                                    <input type="checkbox" name="info_Allo" id="info_Allo" class="custom-checkbox-success">
                                    <label for="info_Allo">Allo anamnesa</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-4">
                                    <label for="info_Nama" class="col-2">Nama :</label>
                                    <input type="text" name="info_nama" id="info_nama" class="form-control border-dark">
                                </div>
                                <div class="d-flex align-items-center gap-2 col-4">
                                    <label for="info_Hubungan" class="col-3">Hubungan :</label>
                                    <input type="text" name="info_Hubungan" id="info_Hubungan" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- history of illness -->
                    <div class="row mt-3">
                        <div class="d-flex align-items-center gap-2">
                            <div class="fw-bold col-3">2. Riwayat penyakit dahulu</div>

                            <input type="text" name="input_penyakit_dahulu" id="" class="form-control border-dark">
                        </div>
                    </div>
                    <!-- restore -->

                    <!-- treatmen hitory-->
                    <div class="row mt-3">
                        <div class="form-group">
                            <div class="fw-bold col-3">3.Riwayat pengobatan sebelumnya</div>

                            <textarea name="rw_pengobatan" id="" class="form-control border-dark" rows="2"></textarea>
                        </div>
                    </div>
                    <!-- restore -->

                    <!-- pengkajian fungsi -->
                    <div class="row mt-2">
                        <div class="d-flex flex-column gap-2">
                            <div class="fw-bold col-3">4. Pengkajian fungsi</div>

                            <div class="d-flex align-items-center gap-2">
                                <div class="col-2">Aktifitas Sehari-hari</div>
                                <div class="d-flex align-items-center gap-2 col-1">
                                    <input type="checkbox" name="mandiri" id="mandiri" class="custom-checkbox-success">
                                    <label for="mandiri">Mandiri</label>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="dengan_bantuan" id="dengan_bantuan" class="custom-checkbox-success">
                                    <label for="dengan_bantuan">Dengan Bantuan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- restore -->

                    <!-- penilai resiko jatuh -->
                    <div class="row mt-3">
                        <div class="d-flex flex-column gap-2">
                            <div>5. Penilaian risiko jatuh <span class="fw-bold fst-italic">(jika risiko jatuh "ya" lanjutkan penghiasan formulir risiko jatuh)</span></div>

                            <!-- risk of falling -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-2">Risiko jatuh</div>
                                <div class="d-flex align-items-center gap-2 col-1">
                                    <input type="checkbox" name="ya_risiko_jatuh" id="ya_risiko_jatuh" class="custom-checkbox-success">
                                    <label for="ya_risiko_jatuh">Ya</label>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="Tidak_risiko_jatuh" id="Tidak_risiko_jatuh" class="custom-checkbox-success">
                                    <label for="Tidak_risiko_jatuh">Tidak</label>
                                </div>
                            </div>
                            <!-- divider -->

                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="ibu_hamil" id="ibu_hamil">
                                    <label for="ibu_hamil">Ibu Hamil</label>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="penggunaan_obat" id="penggunaan_obat">
                                    <label for="penggunaan_obat">Penggunaaan obat-obatan jangka lama</label>
                                </div>

                                <div class="d-flex align-items-center gap-2 ms-4">
                                    <input type="checkbox" class="custom-checkbox-success" name="lain_input_pengkajian_keperawatan" id="lain_input_pengkajian_keperawatan">
                                    <label for="lain_input_pengkajian_keperawatan">lain-lain</label>
                                </div>
                            </div>
                            <!-- divider -->

                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="lanjut_usia" id="lanjut_usia">
                                    <label for="lanjut_usia">Lanjut Usia</label>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="alat_bantu" id="alat_bantu">
                                    <label for="alat_bantu">Alat bantu : kursi roda, tongkat, kacamata</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- restore -->

                    <!-- status kehamilan -->
                    <div class="row mt-3">
                        <div class="fw-bold my-2">6. Status Kehamilan</div>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="tdk_hamil" id="tdk_hamil" class="custom-checkbox-success">
                                <label for="tdk_hamil">Tidak hamil</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-1">
                                    <input type="checkbox" name="hamil_sts_hamil" id="hamil_sts_hamil" class="custom-checkbox-success">
                                    <label for="hamil_sts_hamil">hamil</label>
                                </div>
                                <div class="col-2 d-flex align-items-center gap-2">
                                    <label for="">Gravida</label>
                                    <input type="text" name="gravida" id="gravida" class="form-control border-dark">
                                </div>
                                <div class="col-2 d-flex align-items-center gap-2">
                                    <label for="">Para</label>
                                    <input type="text" name="Para" id="Para" class="form-control border-dark">
                                </div>
                                <div class="col-2 d-flex align-items-center gap-2">
                                    <label for="">Abortus</label>
                                    <input type="text" name="Abortus" id="Abortus" class="form-control border-dark">
                                </div>
                                <div class="col-2 d-flex align-items-center gap-2">
                                    <label for="">HPHT</label>
                                    <input type="text" name="HPHT" id="HPHT" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- divider -->
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="fw-bold">5. Nutrisi</div>
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-6 d-flex align-item-center gap-2">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="" class="flex-shrink-0">Tinggi Badan</label>
                                    <input type="text" name="height_nutrisi" id="height_nutrisi" class="form-control border-dark w-50">
                                </div>
                            </div>
                            <div class="col-6 d-flex align-item-center gap-2">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="" class="flex-shrink-0">Berat Badan</label>
                                    <input type="text" name="weight_nutrisi" id="weight_nutrisi" class="form-control border-dark w-50">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fw-bold">Skrinngin Gizi (berdasarkan malnutrition screnning tool/MST)</div>
                    <div class="my-2">(lingkari skor sesuai dengan jawaban, total skor adalah jumlah skor yang dilingkari)</div>

                    <table class="table table-bordered border-dark">
                        <tbody>
                            <tr class="text-center">
                                <td>no</td>
                                <td>Parameter</td>
                                <td>Skor</td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td colspan="2">Apakah pasien mengalami penurunan badan yang tidak di inginkan dalam 6 bulan terakhir?</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="checkbox" class="custom-checkbox-success" name="tidak_penurunan" id="tidak_penurunan" data-score="0">
                                        <label for="tidak_penurunan">Tidak Ada penurunan berat badan</label>
                                    </div>
                                </td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="checkbox" class="custom-checkbox-success" name="tidak_yakin" id="tidak_yakin" data-score="2">
                                        <label for="tidak_yakin">Ada penurunan berat badan</label>
                                    </div>
                                </td>
                                <td class="text-center">2</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <label for="berapa_penurunan">Jika ya, berapa penurunan berat badan tersebut</label>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="form-check">
                                        <div class="d-flex align-items-center gap-2">
                                            <input type="checkbox" class="custom-checkbox-success" name="1_until_5" id="1_until_5" data-score="1">
                                            <label for="1_until_5">1 - 5 kg</label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">1</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="form-check">
                                        <div class="d-flex align-items-center gap-2">
                                            <input type="checkbox" class="custom-checkbox-success" name="6_until_10" id="6_until_10" data-score="2">
                                            <label for="6_until_10">6 - 10 kg</label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">2</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="form-check">
                                        <div class="d-flex align-items-center gap-2">
                                            <input type="checkbox" class="custom-checkbox-success" name="11_until_15" id="11_until_15" data-score="3">
                                            <label for="11_until_15">11 - 15 kg</label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="form-check">
                                        <div class="d-flex align-items-center gap-2">
                                            <input type="checkbox" class="custom-checkbox-success" name="max_until_15" id="max_until_15" data-score="4">
                                            <label for="max_until_15">> 15 kg</label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">4</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="form-check">
                                        <div class="d-flex align-items-center gap-2">
                                            <input type="checkbox" class="custom-checkbox-success" name="tidak_yakin_penurunan" id="tidak_yakin_penurunan" data-score="2">
                                            <label for="tidak_yakin_penurunan"> Tidak yakin penurunannya</label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">2</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td colspan="2">Apakah asupan makan berkurang karena berkurangnya nafsu makan ? </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="form-check">
                                        <div class="d-flex align-items-center gap-2">
                                            <input type="checkbox" class="custom-checkbox-success" name="tidak_asupan_berkurang" id="tidak_asupan_berkurang" data-score="0">
                                            <label for="tidak_asupan_berkurang"> Tidak</label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="form-check">
                                        <div class="d-flex align-items-center gap-2">
                                            <input type="checkbox" class="custom-checkbox-success" name="Ya_asupan_berkurang" id="Ya_asupan_berkurang" data-score="1">
                                            <label for="Ya_asupan_berkurang"> Ya</label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">1</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total Skor</td>
                                <td><input type="text" name="total_nutrisi" id="" class="form-control border-dark"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">
                                    <div class="form-group border-dark">
                                        <label for="">Pasien dengan diagnosa khusus :</label>
                                        <input type="text" name="psien_diagnosa" id="" class="form-control border-dark" placeholder="DM / ginjal / hati / jantung / paru / stroke / kanker">
                                    </div>
                                    <div class="my-2 d-flex align-items-center gap-2">
                                        <label for="" class="col-5">Penurunan imunitas geriatri, lain-lain (sebutkan)</label>
                                        <input type="text" name="penu_imun" id="" class="form-control border-dark">
                                    </div>

                                    <div class="my-2 d-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center gap-2 col-1">
                                            <input type="checkbox" name="penu_imun_ya" id="penu_imun_ya" class="custom-checkbox-success">
                                            <label for="penu_imun_ya">Ya</label>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 col-1">
                                            <input type="checkbox" name="penu_imun_Tidak" id="penu_imun_Tidak" class="custom-checkbox-success">
                                            <label for="penu_imun_Tidak">Tidak</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div>Bila skor >= 2 dan atau pasien dengan diagnosis / kondisi khusus dilakukan pengkajian lanjut oleh ahli gizi</div>
                    <div class="my-2 d-flex align-items-center gap-2">
                        <div class="col-6 d-flex align-items-center gap-2">
                            <input type="checkbox" name="ya_gizi_input" id="ya_gizi_input" class="custom-checkbox-success">
                            <div class="d-flex align-items-center gap-2">
                                <label for="ya_gizi_input" class="flex-shrink-0">Ya, tanggal & jam</label>
                                <input type="date" name="time-gizi" id="time-gizi" class="form-control border-dark">
                            </div>
                        </div>
                        <!-- divider -->
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="tidak_gizi_input" id="tidak_gizi_input" class="custom-checkbox-success">
                            <label for="tidak_gizi_input">Tidak</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="fw-bold">6.Rencana Tidak Lanjut</div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="rencana_tdk_lanjut_pindah" id="rencana_tdk_lanjut_pindah" class="custom-checkbox-success">
                            <div class="d-flex align-items-center gap-2 w-100">
                                <label for="rencana_tdk_lanjut_pindah" class="flex-shrink-0">Pindah Ke Ruang Rawat</label>
                                <input type="text" name="pindah_input" id="" class="form-control border-dark">
                                <span class="flex-shrink-0">(isi formulir transfer pasien intra rumah sakit)</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="rencana_tdk_lanjut_dirujuk" id="rencana_tdk_lanjut_dirujuk" class="custom-checkbox-success">
                            <div class="d-flex align-items-center gap-2 w-100">
                                <label for="rencana_tdk_lanjut_dirujuk" class="col-3">Dirujuk Ke Rumah Sakit, pukul</label>
                                <input type="time" name="dirujuk_input" id="" class="form-control border-dark w-25">
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="rencana_tdk_lanjut_meninggal" id="rencana_tdk_lanjut_meninggal" class="custom-checkbox-success">
                            <div class="d-flex align-items-center gap-2 w-100">
                                <label for="rencana_tdk_lanjut_meninggal" class="col-3">Meninggal, pukul</label>
                                <input type="time" name="meninggal_input" id="" class="form-control border-dark w-25">
                            </div>
                        </div>
                        <!-- start dipulangkan -->
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="rencana_tdk_lanjut_Dipulangkan" id="rencana_tdk_lanjut_Dipulangkan" class="custom-checkbox-success">
                            <div class="d-flex align-items-center gap-2 w-100">
                                <div class="col-3 d-flex align-items-center gap-2">
                                    <label for="rencana_tdk_lanjut_Dipulangkan" class="col-7">Dipulangkan, pukul</label>
                                    <input type="time" name="Dipulangkan_input" id="" class="form-control border-dark ">
                                </div>
                                <div class="col-2 d-flex align-items-center gap-2">
                                    <label for="td" class="col-2">TD</label>
                                    <input type="text" name="Dipulangkan_TD_input" id="" class="form-control border-dark">
                                </div>
                                <div class="col-2 d-flex align-items-center gap-2">
                                    <label for="Suhu" class="flex-shrink-0">Suhu</label>
                                    <input type="text" name="Dipulangkan_Suhu_input" id="" class="form-control border-dark">
                                </div>
                                <div class="col-2 d-flex align-items-center gap-2">
                                    <label for="RR" class="flex-shrink-0">RR</label>
                                    <input type="text" name="Dipulangkan_RR_input" id="" class="form-control border-dark">
                                </div>
                                <div class="col-2 d-flex align-items-center gap-2">
                                    <label for="Spo2" class="flex-shrink-0">SpO<sub>2</sub></label>
                                    <input type="text" name="Dipulangkan_Spo2_input" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <!-- divider dipulangkan -->

                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">Transportasi pulang :</div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="kend_pribadi" id="kend_pribadi" class="custom-checkbox-success">
                                <label for="kend_pribadi">Kendaraan Pribadi</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="kend_Ambulance" id="kend_Ambulance" class="custom-checkbox-success">
                                <label for="kend_Ambulance">Ambulance</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="kend_Jenazah" id="kend_Jenazah" class="custom-checkbox-success">
                                <label for="kend_Jenazah">Jenazah</label>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <div class="flex-shrink-0">Pendidikan kesehatan pasien pulang :</div>
                            <input type="text" name="pendik_input" id="" class="form-control border-dark">
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="makan_kes" id="makan_kes" class="custom-checkbox-success">
                            <label for="makan_kes">makan / minum obat teratur</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4">
                            <input type="checkbox" name="Diet_kes" id="Diet_kes" class="custom-checkbox-success">
                            <div class="d-flex align-items-center gap-2 w-100">
                                <label for="Diet_kes" class="col-3">Diet</label>
                                <input type="text" name="diet_kes_input" id="" class="form-control border-dark">
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Jaga_kebersihan_kes" id="Jaga_kebersihan_kes" class="custom-checkbox-success">
                            <label for="Jaga_kebersihan_kes">Jaga Kebersihan Luka</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4">
                            <input type="checkbox" name="lain_luka_kes" id="lain_luka_kes" class="custom-checkbox-success">
                            <div class="d-flex align-items-center gap-2 w-100">
                                <label for="lain_luka_kes" class="col-3">lain-lain</label>
                                <input type="text" name="lain_luka_kes_input" id="" class="form-control border-dark">
                            </div>
                        </div>

                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">7. Diagnosa Keperawatan Dan Rencana Keperawatan</td>
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
                            ["name" => "pola_nafas", "value" => "Pola nafas tidak efektif b.d penurunana ekspansi paru"],
                            ["name" => "ketidakefektifan_bersihan", "value" => "ketidakefektifan bersihan jalan nafas b.d secret tertahan disaluran nafas, obstruksi trakeobronkial"],
                            ["name" => "risiko_tkt_kesadaran", "value" => "risiko aspirasi b.d penurunan tingkat kesadaran"],
                            ["name" => "penururnan_curah_jantung", "value" => "Penurunan curah jantung b.d perubahan irama"],
                            ["name" => "gangguan_pertukaran", "value" => "Gangguan pertukaran gas b.d perubahan kapasitas darah"],
                            ["name" => "ketidakefektifan_perfusi", "value" => "Ketidakefektifan perfusi jaringan jantung / paru / jaringan otak perifer b.d penurunan pertukaran sel"],
                            ["name" => "kekurangan_cairan", "value" => "Kekurangan volume cairan b.d kehilangan volume cairan aktif, kerusakan mekanisme regulasi"],
                            ["name" => "kelebihan_volume_cairan", "value" => "Kelebihan volume cairan b.d. mekanisme yang terganggu."],
                            ["name" => "diare_infeksi", "value" => "Diare b.d proses infeksi, malabsorbsi"],
                            ["name" => "retensi", "value" => "Retensi Urin b.d obstruksi traktus urnarius"],
                            ["name" => "hipertermia", "value" => "Hipertermia b.d. dehidrasi, peningkatan metabolisme tubuh, gangguan proses perjalanan penyakit."],
                            ["name" => "kerusakan_mobilitas", "value" => "Gangguan mobilitas fisik b.d kerusakan muskuloskletal"],
                            ["name" => "resiko_infeksi", "value" => "Resiko infeksi b.d. prosedur invasif, kerusakan kulit dan jaringan trauma, imuno supresi."],
                            ["name" => "konstipasi", "value" => "Konstipasi b.d. diet, asupan cairan, tingkat aktifitas, kebiasaan defekasi."],
                            ["name" => "nyeri_trauma_jaringan", "value" => "Nyeri b.d trauma jaringan, spasme otot dan jaringan"],
                            ["name" => "resiko_infeksi_prosedur", "value" => "Risiko infeksi b.d prosedur invasif, kerusakan jaringan, imunosupresi, trauma"],
                            ["name" => "resiko_jatuh_prosedur", "value" => "Risiko jatuh b.d gangguan keseimbangan"],
                            ["name" => "resiko_cederai_prosedur", "value" => "Risiko mencederai diri dan orang lain b.d agresif"],

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
                    <div class="d-flex flex-column gap-2" style="margin-top:-35%;">
                        <?php
                        $care_plan = [
                            ["name" => "o2_kebutuhan", "value" => "Berikan O₂ sesuai kebutuhan"],
                            ["name" => "manuver_jawtrust", "value" => "Lakukan manuver jawtrust, head thilt dan chin lift lakukan suction"],
                            ["name" => "monitor_saturasi_O", "value" => "Monitor saturasi oksigen"],
                            ["name" => "monitor_tnda_vital", "value" => "Monitor tanda-tanda vital"],
                            ["name" => "Monitor_tkt_ksdaran", "value" => "Monitor tingkat kesadaran secara periodik"],
                            ["name" => "brkn_cairan_intravena", "value" => "Berikan cairan intravena"],
                            ["name" => "kaji_turgor", "value" => "Kaji turgor kulit dan membran mukosa mulut"],
                            ["name" => "awas_cairan_tetesan", "value" => "Awasi tetesan cairan, berikan sesuai kebutuhan"],
                            ["name" => "KIE", "value" => "KIE banyak minum"],
                            ["name" => "deleglatif", "value" => "Atasi nyeri, deleglatif pemberuan analgetik, relaksasi"],
                            ["name" => "kompres_hngt", "value" => "berikan kompres hangat"],
                            ["name" => "monitor_intake_cairan", "value" => "Monitor intake dan output cairan"],
                            ["name" => "psng_pengaman", "value" => "Pasang pengaman, lakukan imobilisasi, spalt"],
                            ["name" => "gelang_kuning", "value" => "Pasang gelang kuning pada pasien sebagai penanda pasien perlu pengawasan"],
                            ["name" => "pengaman_rem", "value" => "Pastikan pengaman terpasang dan rem tempat tidur terkunci dengan baik"],
                            ["name" => "ikat_pasien", "value" => "Lakukan pengikatan pasien, kolaborasi obat penenang"],
                            ["name" => "teknik_septik", "value" => "Lakukan perawatan luka dengan teknik spetik-aseptik"]
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
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">8. Follow Up</td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="d-flex align-items-center gap-2 col-2">
                            <input type="checkbox" name="tidak_follow_up" id="tidak_follow_up" class="custom-checkbox-success">
                            <label for="tidak_follow_up">Tidak</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 col">
                            <input type="checkbox" name="Ya_follow_up" id="Ya_follow_up" class="custom-checkbox-success">
                            <div class="d-flex align-items-center gap-2 w-100">
                                <label for="Ya_follow_up" class="flex-shrink-0">Ya, Tanggal</label>
                                <input type="date" name="ya_tanggal_input_follow" id="" class="form-control border-dark w-25">
                            </div>
                        </div>
                    </div>
                    <div class="my-2">
                        <div class="my-2">Hasil</div>
                        <textarea name="hasil_follow_up" id="" rows="3" class="form-control border-dark w-100"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-4">Tanggal/jam :</label>
                            <input type="text" name="tgl_admit" class="form-control border-dark">
                        </div>
                    </div>
                </td>
                <td>
                    <div>Nama Perawat</div>
                    <div>
                        <select type="select" name="perawat" id="perawat" class="form-select perawat" style="width: 100%;"></select>
                    </div>
                </td>
                <td>
                    <div class="text-center">Tanda Tangan</div>
                    <div class="text-center">
                        <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_perawat" />
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">11. Pemeriksaan FIsik (oleh dokter)</td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>Subjektif(di isi dengan keluhan pasien)</div>
                    <textarea name="subjek_input" id="" rows="15" class="form-control border-dark"></textarea>
                </td>
                <td>
                    <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/rm005.png') ?>"
                        data-input-name="image_drawer_state_asesmen_awal_1" style="height:400px;" />
                    <input type="hidden" id="image_drawer_state_asesmen_awal_1" name="image_drawer_state_asesmen_awal_1"
                        value="" />
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div>Objektif (di isi dnengan tandavita dan hasil pemeriksaan fisik)</div>
                    <textarea name="objektif_input" id="" class="form-control border-dark" rows="3"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div>Pemeriksaan Penunjang</div>
                    <textarea name="pemeriksaan_penunjang_input" id="" class="form-control border-dark" rows="3"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div>Assement (diisi dengan diagnosa teta/sementara/banding)</div>
                    <textarea name="Asesment_diagnosa_input" id="" class="form-control border-dark" rows="3"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div>Planning(di isi dengan penatalaksanaan / pengobatan / rencana tindakan / konsultasi)</div>
                    <textarea name="planning_input" id="" class="form-control border-dark" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div>Tindak lanjut / follow up</div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-2 d-flex align-items-center gap-2">
                            <input type="checkbox" name="pulang_lanjut_flow" id="pulang_lanjut_flow" class="custom-checkbox-success">
                            <label for="pulang_lanjut_flow">Pulang</label>
                        </div>
                        <div class="col-2 d-flex align-items-center gap-2">
                            <input type="checkbox" name="Rawat_lanjut_flow" id="Rawat_lanjut_flow" class="custom-checkbox-success">
                            <label for="Rawat_lanjut_flow">Rawat</label>
                        </div>
                        <div class="col-2 d-flex align-items-center gap-2">
                            <input type="checkbox" name="Paksa_lanjut_flow" id="Paksa_lanjut_flow" class="custom-checkbox-success">
                            <label for="Paksa_lanjut_flow">Pulang Paksa</label>
                        </div>
                        <div class="col-2 d-flex align-items-center gap-2">
                            <input type="checkbox" name="Rujuk_lanjut_flow" id="Rujuk_lanjut_flow" class="custom-checkbox-success">
                            <label for="Rujuk_lanjut_flow">Rujuk</label>
                        </div>
                        <div class="col-2 d-flex align-items-center gap-2">
                            <input type="checkbox" name="Meninggal_lanjut_flow" id="Meninggal_lanjut_flow" class="custom-checkbox-success">
                            <label for="Meninggal_lanjut_flow">Meninggal</label>
                        </div>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <td class="col-4">
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-4">Tanggal/jam :</label>
                            <input type="text" name="tgl_admit" class="form-control border-dark">
                    </div>
                </td>
                <td>
                    <div>Nama Dokter</div>
                    <div>
                        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select dokter" style="width: 100%;"></select>

                    </div>
                </td>
                <td>
                    <div class="text-center">Tanda Tangan</div>
                    <div class="text-center">
                        <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_dokter_umum" />
                    </div>
            </tr>
        </tbody>
    </table>
</div>


<script>
    // Fungsi umum untuk menghitung total dari checkbox berdasarkan atribut data
    function calculateCheckboxTotal(selector, resultSelector, dataAttr = "data-score") {
        const total = [...document.querySelectorAll(selector)]
            .filter(cb => cb.checked)
            .reduce((sum, cb) => sum + parseInt(cb.getAttribute(dataAttr) || 0), 0);

        const resultField = document.querySelector(resultSelector);
        if (resultField) resultField.value = total;
    }

    // Fungsi untuk menghitung total dari input text field berdasarkan name
    function calculateInputTotal(fieldNames, resultName) {
        const total = fieldNames.reduce((sum, name) => {
            const input = document.getElementsByName(name)[0];
            return sum + (parseInt(input?.value) || 0);
        }, 0);

        const resultField = document.getElementsByName(resultName)[0];
        if (resultField) resultField.value = total;
    }

    // Event listener untuk checkbox nutrisi
    document.querySelectorAll('input[type="checkbox"][data-score]')
        .forEach(cb => cb.addEventListener('change', () => {
            calculateCheckboxTotal('input[type="checkbox"][data-score]', 'input[name="total_nutrisi"]');
        }));

    // Contoh pemakaian fungsi lainnya:
    // Untuk GCS (gunakan data-value sebagai atribut penilaian)
    document.querySelectorAll('input[type="checkbox"][data-value]')
        .forEach(cb => cb.addEventListener('change', () => {
            calculateCheckboxTotal('input[type="checkbox"][data-value]', '#total_gcs', 'data-value');
        }));

    // Untuk skor dari input fields
    function updateTotalScoreInputs() {
        calculateInputTotal(
            ["score_face", "score_fat", "score_Activity", "score_cry", "score_speakup"],
            "caclt_score"
        );
    }
    // divider calculating


    // start cbcommon
    let dataDokter = []
    let dataPerawat = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI();
        listPerawatAPI();

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat
        } = globalData;


        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });

        $('#perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat')
        });

    });

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);

        $('#dokter_umum').prop('disabled', false)
        $('#dokter_umum').select2('open')
        $('#dokter_umum').select2('close')
        if (mode === "lihat")
            $('#dokter_umum').prop('disabled', true)

        setTimeout(() => {
            // console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
                }
            })
        }, 1000)

        $('#perawat').prop('disabled', false)
        $('#perawat').select2('open')
        $('#perawat').select2('close')
        if (mode === "lihat")
            $('#perawat').prop('disabled', true)

        setTimeout(() => {
            // console.log(dataDokter)
            dataPerawat?.map(v => {
                if (v.text === $('#perawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat')
                }
            })
        }, 1000)
    }


    function listDokterUmumAPI() {
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
    }

    function listPerawatAPI() {
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
                    dataPerawat = items
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