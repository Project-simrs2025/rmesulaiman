<div class="row">
    <table class="table table-bordered border-dark">
        <tr>
            <td class="text-center">PENGKAJIAN PASIEN TAHAP TERMINAL</td>
            <td class="col-6">
                <div class="d-flex align-items-center">
                    <div class="col-3">No. Rm</div>
                    <input type="text" name="no_rm" id="" class="form-control border-dark">
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-3">Nama</div>
                    <input type="text" name="nama_pasien" id="" class="form-control border-dark">
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-3">Tanggal Lahir</div>
                    <input type="text" name="tanggal_lahir" id="" class="form-control border-dark">
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-3">Umur</div>
                    <input type="text" name="umur" id="" class="form-control border-dark">
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-3">Jenis Kelamin</div>
                    <input type="text" name="jenkel" id="" class="form-control border-dark">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="d-flex align-items-center gap-2">
                    <b>Pengkajian Awal / Ulang :</b>
                    Tanggal : <input type="datetime-local" class="form-control border-dark w-25" name="tgl_pengkajian"> wib
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>1. Gejala kesulitan bernafas</b>
                <ol type="1">
                    <li>1 Kegawatan Pernapasan :
                        <ol>
                            <?php
                            $checkboxes = [
                                ['id' => 'Dispnea', 'label' => 'Dispnea', 'col' => 'col-3'],
                                ['id' => 'napas_cepat', 'label' => 'Napas cepat dan dangkal', 'col' => 'col-4'],
                                ['id' => 'napas_lambat', 'label' => 'Napas lambat', 'col' => 'col-3'],
                                ['id' => 'napas_tidak_teratur', 'label' => 'Napas tidak teratur', 'col' => 'col-3'],
                                ['id' => 'napas_mulut', 'label' => 'Napas melalui mulut', 'col' => 'col-4'],
                                ['id' => 'mukosa_oral', 'label' => 'Mukosa oral kering', 'col' => 'col-3'],
                                ['id' => 'ada_secret', 'label' => 'Ada secret', 'col' => 'col-3'],
                                ['id' => 'SpO2', 'label' => 'SpO2. %', 'col' => 'col-4'],
                                ['id' => 'tidak_ada_kelainan', 'label' => 'Tidak ada kelainan', 'col' => 'col-3'],
                            ];
                            ?>

                            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                                <?php foreach ($checkboxes as $box): ?>
                                    <div class="<?= $box['col'] ?>">
                                        <input type="checkbox" id="<?= $box['id'] ?>" name="<?= $box['id'] ?>" class="custom-checkbox-success">
                                        <label for="<?= $box['id'] ?>"><?= $box['label'] ?></label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </ol>
                    </li>
                </ol>
                <ol>
                    <li>2. Kehilangan tonus otot :
                        <ol>
                            <?php
                            $checkboxes = [
                                ['id' => 'penurunan_pergerakan', 'label' => 'Penurunan pergerakan tubuh ', 'col' => 'col-4'],
                                ['id' => 'sulit_bicara', 'label' => 'Sulit berbicara ', 'col' => 'col-4'],
                                ['id' => 'sulit_menelan', 'label' => 'Sulit menelan ', 'col' => 'col-4'],
                                ['id' => 'inkontinensia_urine', 'label' => 'Inkontinensia urine ', 'col' => 'col-4'],
                                ['id' => 'inkontinensia_fases', 'label' => 'Inkontinensia Fases', 'col' => 'col-4'],
                                ['id' => 'tdk_ada_kelainan_tonus', 'label' => 'Tidak ada kelainan', 'col' => 'col-4'],
                            ];
                            ?>

                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <?php foreach ($checkboxes as $box): ?>
                                    <div class="<?= $box['col'] ?>">
                                        <input type="checkbox" id="<?= $box['id'] ?>" name="<?= $box['id'] ?>" class="custom-checkbox-success">
                                        <label for="<?= $box['id'] ?>"><?= $box['label'] ?></label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </ol>
                    </li>
                </ol>

                <ol>
                    <li>3. Nyeri
                        <ol>
                            <div class="d-flex align-items-start flex-wrap gap-2 justify-content-between">
                                <div class="col-3">
                                    <input type="checkbox" id="Tidak_nyeri" name="Tidak_nyeri" class="custom-checkbox-success">
                                    <label for="Tidak_nyeri">Tidak</label>
                                </div>
                                <div class="col-4">
                                    <input type="checkbox" id="ya_lokasi" name="ya_lokasi" class="custom-checkbox-success">
                                    <label for="ya_lokasi">Ya, lokasi </label>
                                    <input type="text" name="lokasi_nyeri" class="form-control border-dark">
                                </div>
                                <div class="col-3">
                                    <input type="checkbox" id="skala_nyeri" name="skala_nyeri" class="custom-checkbox-success">
                                    <label for="skala_nyeri">Skala Nyeri</label>
                                    <input type="text" name="input_skala" class="form-control border-dark" placeholder="0 - 10">
                                </div>
                            </div>
                        </ol>
                    </li>
                </ol>

                <ol>
                    <li>4. Perlambatan Sirkulasi :
                        <ol>
                            <?php
                            $checkboxes = [
                                ['id' => 'bercak_sianosis', 'label' => 'Bercak dan sianosis pada ekstremitas  ', 'col' => 'col-4'],
                                ['id' => 'kulit_dingin', 'label' => 'Kulit dingin dan berkeringat   ', 'col' => 'col-4'],
                                ['id' => 'tekanan_menurun', 'label' => 'Tekanan darah menurun ', 'col' => 'col-4'],
                                ['id' => 'gelisah', 'label' => 'Gelisah ', 'col' => 'col-4'],
                                ['id' => 'nadi_lambat', 'label' => 'Nadi lambat dan lemah ', 'col' => 'col-4'],
                                ['id' => 'lemas', 'label' => 'Lemas', 'col' => 'col-4'],
                                ['id' => 'tdk_ada_kelainan_sirkulasi', 'label' => 'Tidak ada kelainan', 'col' => 'col-4'],
                            ];
                            ?>

                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <?php foreach ($checkboxes as $box): ?>
                                    <div class="<?= $box['col'] ?>">
                                        <input type="checkbox" id="<?= $box['id'] ?>" name="<?= $box['id'] ?>" class="custom-checkbox-success">
                                        <label for="<?= $box['id'] ?>"><?= $box['label'] ?></label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </ol>
                    </li>
                </ol>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <b>2. Faktor - Faktor yang meningkatkan dan membangkitkan gejala fisik :</b><br>
                <ol>
                    <ol>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="aktifitas_fisik" id="aktifitas_fisik" class="custom-checkbox-success">
                                <label for="aktifitas_fisik">Melakukan aktifitas fisik</label>
                            </div>

                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="pindah_posisi" id="pindah_posisi" class="custom-checkbox-success">
                                <label for="pindah_posisi">Pindah Posisi</label>
                            </div>
                        </div>
                    </ol>
                </ol>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>3. Manajemen gejala saat ini dan respon pasien : Masalah Keparawatan</b><br>
                <ol>

                    <ol>
                        <?php
                        $checkboxes = [
                            ['id' => 'perubahan_sensoris', 'label' => 'Perubahan persepsi sensori   ', 'col' => 'col-4'],
                            ['id' => 'konstipasi', 'label' => 'Konstipasi ', 'col' => 'col-4'],
                            ['id' => 'bersihkan_jalan', 'label' => 'Bersihan jalan nafas tidak efektif  ', 'col' => 'col-4'],
                            ['id' => 'defisit', 'label' => 'Defisit perawatan iri ', 'col' => 'col-4'],
                            ['id' => 'pola_nafas_tdk', 'label' => 'Pola nafas tidak efektif ', 'col' => 'col-4'],
                            ['id' => 'nyeri_gejala', 'label' => 'nyeri', 'col' => 'col-4']
                        ];
                        ?>

                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <?php foreach ($checkboxes as $box): ?>
                                <div class="<?= $box['col'] ?>">
                                    <input type="checkbox" id="<?= $box['id'] ?>" name="<?= $box['id'] ?>" class="custom-checkbox-success">
                                    <label for="<?= $box['id'] ?>"><?= $box['label'] ?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </ol>
                </ol>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>4. Orientasi spiritual pasien dan keluarga :</b><br>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-3">Apakah perlu pelayanan spritual</div>
                    <div class="col-3 d-flex align-items-center gap-2">
                        <input type="checkbox" name="tidak_spritual" id="tidak_spritual" class="custom-checkbox-success">
                        <label for="tidak_spritual">Tidak</label>
                    </div>
                    <div class="col d-flex align-items-center gap-2">
                        <input type="checkbox" name="ya_spritual" id="ya_spritual" class="custom-checkbox-success">
                        <label for="ya_spritual" class="flex-shrink-0">ya, oleh</label>
                        <input type="text" name="spritual_input" class="form-control border-dark">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b> 5. Urusan dan kebutuhan spiritual pasien dan keluarga seperti putus asa, penderitaan, rasa bersalah atau pengampunan :</b>
                <ol>
                    <ol>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="perlu_didoakan" id="perlu_didoakan" class="custom-checkbox-success">
                                <label for="perlu_didoakan">perlu didoakan</label>
                            </div>
                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="tdk_perlu_didoakan" id="tdk_perlu_didoakan" class="custom-checkbox-success">
                                <label for="tdk_perlu_didoakan">Tidak</label>
                            </div>
                            <div class="col d-flex align-items-center gap-2">
                                <input type="checkbox" name="ya_agamis" id="ya_agamis" class="custom-checkbox-success">
                                <label for="ya_agamis" class="flex-shrink-0">Ya, oleh</label>
                                <input type="text" class="form-control border-dark" name="ya_agamis_input">
                            </div>
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="perlu_bimbingan" id="perlu_bimbingan" class="custom-checkbox-success">
                                <label for="perlu_bimbingan">Perlu bimbingan rohani</label>
                            </div>
                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="tdk_perlu_bimbingan" id="tdk_perlu_bimbingan" class="custom-checkbox-success">
                                <label for="tdk_perlu_bimbingan">Tidak</label>
                            </div>
                            <div class="col d-flex align-items-center gap-2">
                                <input type="checkbox" name="ya_bimbingan" id="ya_bimbingan" class="custom-checkbox-success">
                                <label for="ya_bimbingan" class="flex-shrink-0">Ya, oleh</label>
                                <input type="text" class="form-control border-dark" name="ya_bimbingan_input">
                            </div>
                        </div>
                    </ol>
                </ol>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>6. Status Psikologis Pasien dan Keluarga :</b><br>
                <ol>
                    <div class="fw-bold">6.1 Apakah ada orang yang ingin dihubungi saat ini :</div>
                    <ol>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="col-5 d-flex align-items-center gap-2">
                                <input type="checkbox" name="ya_siapa" id="ya_siapa" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="ya_siapa" class="flex-shrink-0 border-dark">Ya, Siapa </label>
                                    <input type="text" class="form-control border-dark" name="ya_siapa_input">
                                </div>
                            </div>
                            <div class="col-5 d-flex align-items-center gap-2">
                                <input type="checkbox" name="hub_dengan_pasien_check" id="hub_dengan_pasien_check" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="hub_dengan_pasien_check" class="flex-shrink-0 border-dark">Hubungan dengan pasien </label>
                                    <input type="text" class="form-control border-dark" name="hub_dengan_pasien">
                                </div>
                            </div>

                            <div class="col-5 d-flex align-items-center gap-2">
                                <input type="checkbox" name="dimana_dihubungi" id="dimana_dihubungi" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="dimana_dihubungi" class="flex-shrink-0 border-dark">Dimana</label>
                                    <input type="text" class="form-control border-dark" name="dimana_dihubungi_input">
                                </div>
                            </div>
                            <div class="col-5 d-flex align-items-center gap-2">
                                <input type="checkbox" name="no_telp_check" id="no_telp_check" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="no_telp_check" class="flex-shrink-0 border-dark">No. Telepon / HP :</label>
                                    <input type="text" class="form-control border-dark" name="no_telp">
                                </div>
                            </div>
                    </ol>
                </ol>

                <ol>
                    <b>6.2 Bagaimana rencana perawatan selanjutnya ?</b>
                    <ol>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="rencana_perawatan_dirs" id="rencana_perawatan_dirs" class="custom-checkbox-success">
                            <label for="rencana_perawatan_dirs">Tetap dirawat di Rumah Sakit </label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="dirawat_di_rs_rcperawat" id="dirawat_di_rs_rcperawat" class="custom-checkbox-success">
                            <label for="dirawat_di_rs_rcperawat">Dirawat di rumah </label>
                        </div>
                        <ol>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-6">Apakah lingkungan rumah sudah disiapkan ?</div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="ya_sudah_disiapin" id="ya_sudah_disiapin" class="custom-checkbox-success">
                                    <label for="ya_sudah_disiapin">Ya</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="tidak_disiapin" id="tidak_disiapin" class="custom-checkbox-success">
                                    <label for="tidak_disiapin">Tidak</label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-6">Jika Ya, apakahada yang mempu merawat pasien di rumah ?</div>
                                <div class="d-flex align-items-center gap-2 ">
                                    <input type="checkbox" name="ya_mempu_dirawat" id="ya_mempu_dirawat" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2">
                                        <label for="ya_mempu_dirawat" class="flex-shrink-0">Ya, oleh </label>
                                        <input type="text" name="mampu_dirawat_oleh" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-6">Jika Tidak, apakah perlu difasilitasi oleh Rumah Sakit</div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="ya_sudah_difasilitasi" id="ya_sudah_difasilitasi" class="custom-checkbox-success">
                                    <label for="ya_sudah_difasilitasi">Ya</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="tidak_difasilitasi" id="tidak_difasilitasi" class="custom-checkbox-success">
                                    <label for="tidak_difasilitasi">Tidak</label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Reaksi Pasien atas penyakitnya : </div>
                                <!-- <input type="text" name="reaksi_pasien_ats_penyakit" id="" class="form-control border-dark"> -->
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3"><b>Asesmen Informasi :</b></div>
                                <input type="text" name="asesmen_informasi" id="" class="form-control border-dark">
                            </div>
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <div class="col-3">
                                    <input type="checkbox" name="menangkal" id="menangkal" class="custom-checkbox-success">
                                    <label for="menangkal">Menangkal</label>
                                </div>
                                <div class="col-3">
                                    <input type="checkbox" name="takut" id="takut" class="custom-checkbox-success">
                                    <label for="takut">Takut</label>
                                </div>
                                <div class="col-3">
                                    <input type="checkbox" name="rsa_bersalah" id="rsa_bersalah" class="custom-checkbox-success">
                                    <label for="rsa_bersalah">Rasa Bersalah</label>
                                </div>
                                <div class="col-3">
                                    <input type="checkbox" name="marah" id="marah" class="custom-checkbox-success">
                                    <label for="marah">Marah</label>
                                </div>
                                <div class="col-3">
                                    <input type="checkbox" name="sedih_menangis" id="sedih_menangis" class="custom-checkbox-success">
                                    <label for="sedih_menangis">Sedih / Menangis</label>
                                </div>
                                <div class="col-3">
                                    <input type="checkbox" name="ketidakberdayaan" id="ketidakberdayaan" class="custom-checkbox-success">
                                    <label for="ketidakberdayaan">ketidakberdayaan</label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3"><b>Masalah Keperawatan :</b></div>
                                <!-- <input type="text" name="masalah_keperawatan" id="" class="form-control border-dark"> -->
                            </div>
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <div class="col-3">
                                    <input type="checkbox" name="ansietas_meninggal" id="ansietas_meninggal" class="custom-checkbox-success">
                                    <label for="ansietas_meninggal">Ansietas, kematian</label>
                                </div>
                                <div class="col-3">
                                    <input type="checkbox" name="distres_check" id="distres_check" class="custom-checkbox-success">
                                    <label for="distres_check">Distres spiritual</label>
                                </div>
                                <div class="col d-flex align-items-center gap-2 w-100">
                                    <input type="checkbox" name="distres_lain_check" id="distres_lain_check" class="custom-checkbox-success">
                                    <div class="w-100">
                                        <input type="text" name="distres_lain_input" id="distres_lain_check" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                        </ol>
                    </ol>
                </ol>

                <ol>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4"> <b>6.3 Reaksi keluarga atas penyakit pasien :</b></div>
                        <!-- <input type="text" name="reaksi_penyakit_ats_pasien" id="" class="form-control border-dark"> -->
                    </div>
                    <ol>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-4"> <b>Asesment informasi</b></div>
                            <!-- <input type="text" name="asesment_informasi" id="" class="form-control border-dark"> -->
                        </div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="col-5">
                                <input type="checkbox" name="problem_komunikasi_check" id="problem_komunikasi_check" class="custom-checkbox-success">
                                <label for="problem_komunikasi_check">Problem kebiasaan pola komunikasi </label>
                            </div>
                            <div class="col-5">
                                <input type="checkbox" name="asesmen_info_sedih_check" id="asesmen_info_sedih_check" class="custom-checkbox-success">
                                <label for="asesmen_info_sedih_check">Sedih / menangis </label>
                            </div>
                            <div class="col-5">
                                <input type="checkbox" name="penurunan_konsentrasi_check" id="penurunan_konsentrasi_check" class="custom-checkbox-success">
                                <label for="penurunan_konsentrasi_check">Penurunan konsentrasi</label>
                            </div>
                            <div class="col-5">
                                <input type="checkbox" name="Rasa_bersalah" id="Rasa_bersalah" class="custom-checkbox-success">
                                <label for="Rasa_bersalah">Rasa bersalah </label>
                            </div>

                            <div class="col-5">
                                <input type="checkbox" name="ketidakmampuan_peran_check" id="ketidakmampuan_peran_check" class="custom-checkbox-success">
                                <label for="ketidakmampuan_peran_check">Ketidakmampuan memenuhi peran yang diharapkan</label>
                            </div>
                            <div class="col-5">
                                <input type="checkbox" name="letih_lelah" id="letih_lelah" class="custom-checkbox-success">
                                <label for="letih_lelah">Letih / lelah </label>
                            </div>


                            <div class="col-5">
                                <input type="checkbox" name="keluarga_kurang_check" id="keluarga_kurang_check" class="custom-checkbox-success">
                                <label for="keluarga_kurang_check">Keluarga kurang berkomunikasi dengan pasien </label>
                            </div>
                            <div class="col-5">
                                <input type="checkbox" name="Marah_asesment" id="Marah_asesment" class="custom-checkbox-success">
                                <label for="Marah_asesment">Marah </label>
                            </div>

                            <div class="col-5">
                                <input type="checkbox" name="kurang_partisipasi_check" id="kurang_partisipasi_check" class="custom-checkbox-success">
                                <label for="kurang_partisipasi_check">Keluarga kurang berpartisipasi membuat keputusan </label>
                            </div>
                            <div class="col-5">
                                <input type="checkbox" name="gangguan_tdr" id="gangguan_tdr" class="custom-checkbox-success">
                                <label for="gangguan_tdr">Gangguan tidur </label>
                            </div>
                        </div>
                    </ol>
                    <ol>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-3"><b>Masalah Keperawatan :</b></div>
                            <!-- <input type="text" name="masalah_keperawatan_asesment" id="" class="form-control border-dark"> -->
                        </div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="col-3">
                                <input type="checkbox" name="koping_individu" id="koping_individu" class="custom-checkbox-success">
                                <label for="koping_individu">Koping individu tidak efektif</label>
                            </div>
                            <div class="col-3">
                                <input type="checkbox" name="distres_check_asesment" id="distres_check_asesment" class="custom-checkbox-success">
                                <label for="distres_check_asesment">Distres spiritual</label>
                            </div>
                            <div class="col-3">
                                <input type="checkbox" name="perubahan_proseses_asessment_asesment" id="perubahan_proseses_asessment_asesment" class="custom-checkbox-success">
                                <label for="perubahan_proseses_asessment_asesment">Perubahan proses keluarga</label>
                            </div>
                        </div>
                    </ol>
                </ol>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <b>7. Kebutuhan dukungan atau kelonggaran pelayanan bagi pasien, keluarga dan pemberi pelayanan lain :</b>
                <ol>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="pasien_dampingi_keluarga" id="pasien_dampingi_keluarga" class="custom-checkbox-success">
                            <label for="pasien_dampingi_keluarga">Pasien di dampingi Keluarga</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="keluarga_dpt_mengunjung" id="keluarga_dpt_mengunjung" class="custom-checkbox-success">
                            <label for="keluarga_dpt_mengunjung">Keluarga dapat mengunjungi pasien diluar waktu berkunjung </label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="sahabat_dpt_mengunjung" id="sahabat_dpt_mengunjung" class="custom-checkbox-success">
                            <label for="sahabat_dpt_mengunjung">Sahabat dapat mengunjungi pasien diluar waktu berkunjung </label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="lain_dpt_mengunjung" id="lain_dpt_mengunjung" class="custom-checkbox-success">
                            <input type="text" name="lain_dpt_mengunjung_input" class="form-control border-dark">
                        </div>
                    </div>
                </ol>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <b>8. Apakah ada kebutuhan akan alternatif atau tingkat pelayanan lain :</b>
                <ol>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="tidak_ada_kebutuhan" id="tidak_ada_kebutuhan" class="custom-checkbox-success">
                            <label for="tidak_ada_kebutuhan">Tidak</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="donasi_organ" id="donasi_organ" class="custom-checkbox-success">
                            <label for="donasi_organ">Donasi organ </label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="lain_kebutuhan" id="lain_kebutuhan" class="custom-checkbox-success">
                            <input type="text" name="lain_kebutuhan_input" class="form-control border-dark">
                        </div>

                    </div>
                </ol>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>9. Faktor resiko bagi keluarga yang ditinggalkan : </b>
                <ol>
                    <b>Asesmen Informasi</b>
                    <ol>
                        <?php
                        $checkboxes = [
                            ['id' => 'resiko_marah', 'label' => 'marah   ', 'col' => 'col-4'],
                            ['id' => 'resiko_sedih', 'label' => 'Sedih/menangis ', 'col' => 'col-4'],
                            ['id' => 'resiko_depresi', 'label' => 'Depresi', 'col' => 'col-4'],
                            ['id' => 'resiko_gangguan', 'label' => 'Gangguan Tidur', 'col' => 'col-4'],
                            ['id' => 'resiko_bersalah', 'label' => 'Rasa Bersalah', 'col' => 'col-4'],
                            ['id' => 'resiko_letih', 'label' => 'Letih/lelah', 'col' => 'col-4'],
                            ['id' => 'resiko_perubahan', 'label' => 'Perubahan kebiasaan pola komunikasi ', 'col' => 'col-4'],
                            ['id' => 'resiko_penurunan', 'label' => 'Penurunan konsentrasi ', 'col' => 'col-4'],
                            ['id' => 'resiko_ketidakmampuan', 'label' => 'Ketidakmampuan memenuhi peran yang diharapkan', 'col' => 'col-12'],
                        ];
                        ?>

                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <?php foreach ($checkboxes as $box): ?>
                                <div class="<?= $box['col'] ?>">
                                    <input type="checkbox" id="<?= $box['id'] ?>" name="<?= $box['id'] ?>" class="custom-checkbox-success">
                                    <label for="<?= $box['id'] ?>"><?= $box['label'] ?></label>
                                </div>
                            <?php endforeach; ?>
                            <div class="d-flex align-items-center gap-2 w-100">
                                <input type="checkbox" class="custom-checkbox-success" name="resiko_lain_check">
                                <input type="text" class="form-control border-dark" name="resiko_lain_input">
                            </div>
                        </div>
                    </ol>
                    <ol>
                        <b>Masalah Keperawatan</b><br>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-6">
                                <input type="checkbox" name="keperawtan_koping" id="keperawtan_koping" class="custom-checkbox-success">
                                <label for="keperawtan_koping">Koping individu tidak efektif</label>
                            </div>
                            <div class="col-6">
                                <input type="checkbox" name="keperawtan_distres" id="keperawtan_distres" class="custom-checkbox-success">
                                <label for="keperawtan_distres">Distres spiritual</label>
                            </div>
                        </div>
                    </ol>
                </ol>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="d-flex align-items-center gap-2">
                    <div class="col-2"><b>Selesai pengkajian : </b></div>
                    <input type="datetime-local" class="form-control border-dark w-25" name="selesai_pengkajian">Wib
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="d-flex align-items-center gap-2">
                    <div class="text-center col-6">
                        <div>Perawat / Bidan</div>
                        <div class="text-center">
                            <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_perawat" />
                        </div>
                        <select type="select" name="perawat" id="perawat" class="form-select perawat" style="width: 100%;"></select>
                        <div>nama dan tanda tangan</div>
                    </div>
                    <div class="text-center col-6">
                        <div>Diketahui oleh,</div>
                        <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 150px; height:80px" data-input-name="image_drawer_state_image_11" />
                        <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                            value="" />
                        <input type="text" class="form-control border-dark mt-2" name="nama_hub_pasien">
                        <div>nama dan tanda tangan</div>
                    </div>
                </div>
            </td>
        </tr>
    </table>

</div>


<script>
    let dataPerawat = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI();

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

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

        $('#perawat').prop('disabled', false)
        $('#perawat').select2('open')
        $('#perawat').select2('close')
        if (mode === "lihat")
            $('#perawat').prop('disabled', true)

        setTimeout(() => {
            console.log(dataPerawat)
            dataPerawat?.map(v => {
                if (v.text === $('#perawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat')
                }
            })
        }, 1000)
    }


    function listDokterUmumAPI() {
        $('.perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan'); ?>',
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