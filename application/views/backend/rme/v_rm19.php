<!-- rm 19 -->
<div class="row">
    <div class="col-12">
        <table class="table table-bordered mt-3 border border-dark">
            <tbody>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="">Nama :</label>
                            <input type="text" class="form-control border-dark" name="nama_pasien">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir :</label>
                            <input type="text" class="form-control border-dark" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Rm :</label>
                            <input type="text" class="form-control border-dark" name="no_rm">
                        </div>
                        <div class="form-group">
                            <label for="">Agama :</label>
                            <input type="text" class="form-control border-dark" name="nama_agama">
                        </div>
                        <div class="form-group">
                            <label for="">Pendidikan :</label>
                            <input type="text" class="form-control border-dark" name="pendidikan_terakhir">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="">Ruangan :</label>
                            <input type="text" class="form-control border-dark" name="nama_ruangan">
                        </div>
                        <div class="form-group">
                            <label for="">Dokter DPJP :</label>
                            <input type="text" class="form-control border-dark" name="nama_dokter">
                        </div>
                        <div class="form-group">
                            <label for="">Suku/Bangsa :</label>
                            <input type="text" class="form-control border-dark" name="nama_suku">
                        </div>
                        <div class="form-group">
                            <label for="">Nilai yang dianut:</label>
                            <input type="text" class="form-control border-dark" name="nilai_anut">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <!-- end pendidikan -->
        <div class="d-flex gap-2 my-2">
            <span>Hambatan pemberian edukasi pada pasien dan keluarga : </span>
            <input type="radio" class="custom-checkbox-success" value="hambatan_pemb_ya" id="hamb_pemb_ya" name="hamb_pemb">
            <label for="hamb_pemb_ya">Ya</label>
            <input type="radio" class="custom-checkbox-danger" name="hamb_pemb" id="hamb_pemb_tidak" value="hambatan_pemb_tidak">
            <label for="hamb_pemb_tidak">Tidak</label>
        </div>
        <!-- end hambatan -->
        <div class="d-flex gap-3 my-2">
            <span>kemampuan baca dan bicara : </span>
            <input type="radio" class="custom-checkbox-success" value="kemampuan_ya" id="kemampuan_ya" name="kemampuan">
            <label for="kemampuan_ya">Baik</label>
            <input type="radio" class="custom-checkbox-danger" value="kemampuan_tidak" id="kemampuan_tidak" name="kemampuan">
            <label for="kemampuan_tidak">Tidak</label>
        </div>
        <!-- end kemampuan -->
        <div class="d-flex gap-4 my-2 align-items-center">
            <span class="col-3">Kebutuhan penterjemah bahasa :</span>
            <div class="d-flex align-items-center gap-2">
                <input type="radio" class="custom-checkbox-success" id="bahasa_indonesia" name="bahasa" value="indonesia">
                <label for="bahasa_indonesia">Indonesia</label>
            </div>
            <div class="d-flex align-items-center gap-2">
                <input type="radio" class="custom-checkbox-success" id="bahasa_inggris" name="bahasa" value="inggris">
                <label for="bahasa_inggris">Inggris</label>
            </div>
            <div class="d-flex align-items-center gap-2">
                <input type="radio" class="custom-checkbox-success" id="bahasa_daerah" name="bahasa" value="daerah">
                <label for="bahasa_daerah">Daerah</label>
            </div>
            <div class="d-flex align-items-center gap-2 w-100">
                <input type="radio" class="custom-checkbox-success" id="bahasa_lain" name="bahasa" value="lainnya">
                <div class="d-flex align-items-center gap-2 w-100">
                    <label for="bahasa_lain">Lainnya</label>
                    <input type="text" id="bahasa" name="input_lainnya" class="form-control border-dark">
                </div>
            </div>

        </div>

    </div>
    <!-- end bahasa -->
    <div class="d-flex gap-3 my-2">
        <span>Emotional : </span>
        <input type="radio" class="custom-checkbox-success" name="emotional" id="labil" value="labil">
        <label for="labil">Labil</label>
        <input type="radio" class="custom-checkbox-success" name="emotional" id="stabil" value="stabil">
        <label for="stabil">Stabil</label>
    </div>
    <div class="d-flex gap-3 my-2">
        <span>Motivasi : </span>
        <input type="radio" class="custom-checkbox-success" name="motivasi" id="baik" value="baik">
        <label for="baik">Baik</label>
        <input type="radio" class="custom-checkbox-success" name="motivasi" id="kurang" value="kurang">
        <label for="kurang">Kurang</label>
    </div>
    <!-- end emot dan motivasi -->
    <div class="d-flex gap-4 my-2 flex-column">
        <span>Keterbatasan Fisik :</span>
        <div class="form">
            <input type="radio" class="custom-checkbox-success" name="keterbatasan_fisik" id="gangguan_bicara" value="gangguan_bicara">
            <label for="gangguan_bicara">Gangguan Bicara</label>
        </div>
        <div class="form">
            <input type="radio" class="custom-checkbox-success" name="keterbatasan_fisik" id="pendengaran_kurang" value="pendengaran_kurang">
            <label for="pendengaran_kurang">Pendengaran Kurang</label>
        </div>
        <div class="form">
            <input type="radio" class="custom-checkbox-success" name="keterbatasan_fisik" id="penglihatan_terganggu" value="penglihatan_terganggu">
            <label for="penglihatan_terganggu">Penglihatan Terganggu</label>
        </div>
        <div class="form">
            <input type="radio" class="custom-checkbox-success" name="keterbatasan_fisik" id="fisik_lemah" value="fisik_lemah">
            <label for="fisik_lemah">Fisik Lemah</label>
        </div>
        <div class="d-flex align-items-center gap-2">
            <input type="radio" class="custom-checkbox-success" name="keterbatasan_fisik" id="keterbatasan_lainnya" value="keterbatasan_lainnya">
            <div class="d-flex align-items-center gap-2 w-100">
                <label for="keterbatasan_lainnya">Lainnya</label>
                <input type="text" class="form-control border-dark" id="keterbatasan_input" name="input_keterbatasan">
            </div>
        </div>

    </div>
    <!-- end fisik -->
    <div class="d-flex gap-3 my-2">
        <span>Kognitif : </span>
        <input type="radio" class="custom-checkbox-success" name="kognitif" id="emosional" value="emosional">
        <label for="emosional">Emosional</label>
        <input type="radio" class="custom-checkbox-success" name="kognitif" id="motivasi_kurang" value="motivasi_kurang">
        <label for="motivasi_kurang">Motivasi Kurang</label>
    </div>
    <div class="d-flex gap-3 my-2">
        <span>Kesediaan Pasien / Keluarga menerima edukasi : </span>
        <input type="radio" class="custom-checkbox-success" name="kesediaan_pasien" id="ya_kesediaan" value="ya">
        <label for="ya_kesediaan">Ya</label>
        <input type="radio" class="custom-checkbox-danger" name="kesediaan_pasien" id="tidak_kesediaan" value="tidak">
        <label for="tidak_kesediaan">Tidak</label>
    </div>
</div>


<!-- table 2 -->
<div class="row">
    <div class="table-responsive">
        <div class="col-12">
            <table class="table table-bordered mt-3 border-dark">
                <tbody class="text-center">
                    <th style="width: 40px;">No</th>
                    <th style="width: 400px;">Materi Edukasi</th>
                    <th style="width: 250px;">Tanggal</th>
                    <th style="width: 250px;">Metode/Durasi</th>
                    <th class="col-2" style="width: 250px;">Evaluasi Pasien/Keluarga</th>
                    <th style="width: 250px;">Paraf/ Nama Penerima Edukasi</th>
                    <th style="width: 250px;">Paraf/ Nama Edukator</th>
                </tbody>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div style="width: 250px;">
                                <div class="d-block">
                                    <div>Dokter Spesialis / DPJP</div>
                                    <div class="ms-3">
                                        <div>a. Penjelasan perjalanan penyakit ( penyebab, tanda dan gejala )</div>
                                        <div>b. Hasil pemeriksaan</div>
                                        <div>c. Penjelasan tentang diagnosa</div>
                                        <div>d. Tindakan medis</div>
                                        <div>e. Perkiraan hari perawatan</div>
                                        <div>f. Penjelasan komplikasi</div>
                                        <div>g. Diagnosa saat ini (single/multi)</div>
                                        <div class="text-area ms-2">
                                            <textarea name="dokter_dpjp" id="dokter_dpjp1" rows="3" class="w-100 form-control border-dark"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="width: 250px;">
                                <input type="date" name="tanggal1" id="tanggal1" class="form-control border-dark">
                            </div>
                        </td>
                        <td>
                            <div style="width: 250px;">
                                <div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <label for="durasi1">Durasi</label>
                                        <input type="text" name="durasi1" id="durasi1" class="form-control w-50 border-dark"> mnt
                                    </div>
                                    <div><input type="radio" name="metode1" id="diskusi1" value="diskusi" class="custom-checkbox-success me-2"><label for="diskusi1">Diskusi</label></div>
                                    <div><input type="radio" name="metode1" id="demonstrasi1" value="demonstrasi" class="custom-checkbox-success me-2"><label for="demonstrasi1">Demonstrasi</label></div>
                                    <div><input type="radio" name="metode1" id="ceramah1" value="ceramah" class="custom-checkbox-success me-2"><label for="ceramah1">Ceramah</label></div>
                                    <div><input type="radio" name="metode1" id="observasi1" value="observasi" class="custom-checkbox-success me-2"><label for="observasi1">Observasi</label></div>
                                    <div><input type="radio" name="metode1" id="lain1" value="lain" class="custom-checkbox-success me-2"><label for="lain1">lain-lain</label>
                                        <input type="text" name="metode_lain1" id="metode_lain1" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="width: 250px;">
                                <div><input type="radio" name="evaluasi1" id="mampu_mengerti1" value="mampu_mengerti" class="custom-checkbox-success me-1"><label for="mampu_mengerti1">Mampu mengerti</label></div>
                                <div class="d-flex flex-start"><input type="radio" name="evaluasi1" id="mampu_memahami1" value="mampu_memahami" class="custom-checkbox-success me-1"><label for="mampu_memahami1" class="col-10">Mampu memahami</label></div>
                                <div><input type="radio" name="evaluasi1" id="lain_lain1" value="lain_lain" class="custom-checkbox-success me-1"><label for="lain_lain1">lain-lain</label>
                                    <input type="text" name="evaluasi_lain1" id="evaluasi_lain1" class="form-control border-dark">
                                </div>
                            </div>

                        </td>
                        <td>
                            <div class="my-2 text-center" style="width: 180px;">
                                <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 150px; height:100px" data-input-name="image_drawer_state_image_persetujuan_1" />
                                <input type="hidden" id="image_drawer_state_image_persetujuan_1" name="image_drawer_state_image_persetujuan_1"
                                    value="" />
                            </div>
                            <textarea name="nama_hub_pasien_ttd_1" class="form-control border-dark" rows="2"><?= $nama_hub_pasien; ?></textarea>
                        </td>
                        <td>
                            <div class="text-center my-2">
                                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_edukator_1" />
                            </div>
                            <select type="select" name="edukator_1" id="edukator_1" class="form-select perawat" style="width: 250px;"></select>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <div class="d-block">
                                <div>Admisi</div>
                                <div class="ms-3">
                                    <div>a. Informasi yang diinginkan oleh pasien dan keluarganya</div>
                                    <div class="text-area ms-2">
                                        <textarea name="admisi" id="admisi2" rows="3" class="w-100 form-control border-dark"></textarea>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><input type="date" name="tanggal2" id="tanggal2" class="form-control border-dark"></td>
                        <td>
                            <div>
                                <div class="d-flex gap-2 align-items-center">
                                    <label for="durasi2">Durasi</label>
                                    <input type="text" name="durasi2" id="durasi2" class="form-control w-50 border-dark"> mnt
                                </div>
                                <div><input type="radio" name="metode2" id="diskusi2" value="diskusi" class="custom-checkbox-success me-2"><label for="diskusi2">Diskusi</label></div>
                                <div><input type="radio" name="metode2" id="demonstrasi2" value="demonstrasi" class="custom-checkbox-success me-2"><label for="demonstrasi2">Demonstrasi</label></div>
                                <div><input type="radio" name="metode2" id="ceramah2" value="ceramah" class="custom-checkbox-success me-2"><label for="ceramah2">Ceramah</label></div>
                                <div><input type="radio" name="metode2" id="observasi2" value="observasi" class="custom-checkbox-success me-2"><label for="observasi2">Observasi</label></div>
                                <div><input type="radio" name="metode2" id="lain2" value="lain" class="custom-checkbox-success me-2"><label for="lain2">lain-lain</label>
                                    <input type="text" name="metode_lain2" id="metode_lain2" class="form-control border-dark">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div><input type="radio" name="evaluasi2" id="mampu_mengerti2" value="mampu_mengerti" class="custom-checkbox-success me-1"><label for="mampu_mengerti2">Mampu mengerti</label></div>
                            <div class="d-flex flex-start"><input type="radio" name="evaluasi2" id="mampu_memahami2" value="mampu_memahami" class="custom-checkbox-success me-1"><label for="mampu_memahami2" class="col-10">Mampu memahami</label></div>
                            <div><input type="radio" name="evaluasi2" id="lain_lain2" value="lain_lain" class="custom-checkbox-success me-1"><label for="lain_lain2">lain-lain</label>
                                <input type="text" name="evaluasi_lain2" id="evaluasi_lain2" class="form-control border-dark">
                            </div>
                        </td>
                        <td>
                            <div class="my-2 text-center" style="width: 180px;">
                                <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 150px; height:100px" data-input-name="image_drawer_state_image_persetujuan_2" />
                                <input type="hidden" id="image_drawer_state_image_persetujuan_2" name="image_drawer_state_image_persetujuan_2"
                                    value="" />
                            </div>
                            <textarea name="nama_hub_pasien_ttd_2" class="form-control border-dark" rows="2"><?= $nama_hub_pasien; ?></textarea>
                        </td>
                        <td>
                            <div class="text-center my-2">
                                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_edukator_2" />
                            </div>
                            <select type="select" name="edukator_2" id="edukator_2" class="form-select perawat" style="width: 250px;"></select>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <div class="d-block">
                                <div>Perawat</div>
                                <div class="ms-3">
                                    <div>a. Identifikasi pasien (Manfaat gelang)</div>
                                    <div>b. Orientasi ruangan</div>
                                    <div>c. Hand Hygiene dan Etika Batuk</div>
                                    <div class="text-area ms-2">
                                        <textarea name="perawat" id="perawat3" rows="3" class="w-100 form-control border-dark"></textarea>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><input type="date" name="tanggal3" id="tanggal3" class="form-control border-dark"></td>
                        <td>
                            <div>
                                <div class="d-flex gap-2 align-items-center">
                                    <label for="durasi3">Durasi</label>
                                    <input type="text" name="durasi3" id="durasi3" class="form-control w-50 border-dark"> mnt
                                </div>
                                <div><input type="radio" name="metode3" id="diskusi3" value="diskusi" class="custom-checkbox-success me-2"><label for="diskusi3">Diskusi</label></div>
                                <div><input type="radio" name="metode3" id="demonstrasi3" value="demonstrasi" class="custom-checkbox-success me-2"><label for="demonstrasi3">Demonstrasi</label></div>
                                <div><input type="radio" name="metode3" id="ceramah3" value="ceramah" class="custom-checkbox-success me-2"><label for="ceramah3">Ceramah</label></div>
                                <div><input type="radio" name="metode3" id="observasi3" value="observasi" class="custom-checkbox-success me-2"><label for="observasi3">Observasi</label></div>
                                <div><input type="radio" name="metode3" id="lain3" value="lain" class="custom-checkbox-success me-2"><label for="lain3">lain-lain</label>
                                    <input type="text" name="metode_lain3" id="metode_lain3" class="form-control border-dark">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div><input type="radio" name="evaluasi3" id="mampu_mengerti3" value="mampu_mengerti" class="custom-checkbox-success me-1"><label for="mampu_mengerti3">Mampu mengerti</label></div>
                            <div class="d-flex flex-start"><input type="radio" name="evaluasi3" id="mampu_memahami3" value="mampu_memahami" class="custom-checkbox-success me-1"><label for="mampu_memahami3" class="col-10">Mampu memahami</label></div>
                            <div><input type="radio" name="evaluasi3" id="lain_lain3" value="lain_lain" class="custom-checkbox-success me-1"><label for="lain_lain3">lain-lain</label>
                                <input type="text" name="evaluasi_lain3" id="evaluasi_lain3" class="form-control border-dark">
                            </div>
                        </td>
                        <td>
                            <div class="my-2 text-center" style="width: 180px;">
                                <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 150px; height:100px" data-input-name="image_drawer_state_image_persetujuan_3" />
                                <input type="hidden" id="image_drawer_state_image_persetujuan_3" name="image_drawer_state_image_persetujuan_3"
                                    value="" />
                            </div>
                            <textarea name="nama_hub_pasien_ttd_3" class="form-control border-dark" rows="2"><?= $nama_hub_pasien; ?></textarea>
                        </td>
                        <td>
                            <div class="text-center my-2">
                                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_edukator_3" />
                            </div>
                            <select type="select" name="edukator_3" id="edukator_3" class="form-select perawat" style="width: 250px;"></select>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>
                            <div class="d-block">
                                <div>Nutrisi</div>
                                <div class="ms-3">
                                    <div>a. Status gizi dan menjelaskan makanan RS</div>
                                    <div>b. Diit selama perawatan</div>
                                    <div>c. Diit untuk dirumah</div>
                                    <div class="text-area ms-2">
                                        <textarea name="nutrisi" id="perawat4" rows="3" class="w-100 form-control border-dark"></textarea>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><input type="date" name="tanggal4" id="tanggal4" class="form-control border-dark"></td>
                        <td>
                            <div>
                                <div class="d-flex gap-2 align-items-center">
                                    <label for="durasi4">Durasi</label>
                                    <input type="text" name="durasi4" id="durasi4" class="form-control w-50 border-dark"> mnt
                                </div>
                                <div><input type="radio" name="metode4" id="diskusi4" value="diskusi" class="custom-checkbox-success me-2"><label for="diskusi4">Diskusi</label></div>
                                <div><input type="radio" name="metode4" id="demonstrasi4" value="demonstrasi" class="custom-checkbox-success me-2"><label for="demonstrasi4">Demonstrasi</label></div>
                                <div><input type="radio" name="metode4" id="ceramah4" value="ceramah" class="custom-checkbox-success me-2"><label for="ceramah4">Ceramah</label></div>
                                <div><input type="radio" name="metode4" id="observasi4" value="observasi" class="custom-checkbox-success me-2"><label for="observasi4">Observasi</label></div>
                                <div><input type="radio" name="metode4" id="lain4" value="lain" class="custom-checkbox-success me-2"><label for="lain4">lain-lain</label>
                                    <input type="text" name="metode_lain4" id="metode_lain4" class="form-control border-dark">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div><input type="radio" name="evaluasi4" id="mampu_mengerti4" value="mampu_mengerti" class="custom-checkbox-success me-1"><label for="mampu_mengerti4">Mampu mengerti</label></div>
                            <div class="d-flex flex-start"><input type="radio" name="evaluasi4" id="mampu_memahami4" value="mampu_memahami" class="custom-checkbox-success me-1"><label for="mampu_memahami4" class="col-10">Mampu memahami</label></div>
                            <div><input type="radio" name="evaluasi4" id="lain_lain4" value="lain_lain" class="custom-checkbox-success me-1"><label for="lain_lain4">lain-lain</label>
                                <input type="text" name="evaluasi_lain4" id="evaluasi_lain4" class="form-control border-dark">
                            </div>
                        </td>
                        <td>
                            <div class="my-2 text-center" style="width: 180px;">
                                <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 150px; height:100px" data-input-name="image_drawer_state_image_persetujuan_4" />
                                <input type="hidden" id="image_drawer_state_image_persetujuan_4" name="image_drawer_state_image_persetujuan_4"
                                    value="" />
                            </div>
                            <textarea name="nama_hub_pasien_ttd_4" class="form-control border-dark" rows="2"><?= $nama_hub_pasien; ?></textarea>
                        </td>
                        <td>
                            <div class="text-center my-2">
                                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_edukator_4" />
                            </div>
                            <select type="select" name="edukator_4" id="edukator_4" class="form-select perawat" style="width: 250px;"></select>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>
                            <div class="d-block">
                                <div>Farmasi</div>
                                <div class="ms-3">
                                    <div>a. Nama obat dan kegunaannya</div>
                                    <div>b. Aturan pemakaian dan dosis obat</div>
                                    <div>c. Jumlah obat yang diberikan</div>
                                    <div>d. Cara penyimpanan obat</div>
                                    <div>e. Efek samping obat</div>
                                    <div>f. Kontra indikasi obat</div>
                                    <div class="text-area ms-2">
                                        <textarea name="farmasi" id="perawat5" rows="3" class="w-100 form-control border-dark"></textarea>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><input type="date" name="tanggal5" id="tanggal5" class="form-control border-dark"></td>
                        <td>
                            <div>
                                <div class="d-flex gap-2 align-items-center">
                                    <label for="durasi5">Durasi</label>
                                    <input type="text" name="durasi5" id="durasi5" class="form-control w-50 border-dark"> mnt
                                </div>
                                <div><input type="radio" name="metode5" id="diskusi5" value="diskusi" class="custom-checkbox-success me-2"><label for="diskusi5">Diskusi</label></div>
                                <div><input type="radio" name="metode5" id="demonstrasi5" value="demonstrasi" class="custom-checkbox-success me-2"><label for="demonstrasi5">Demonstrasi</label></div>
                                <div><input type="radio" name="metode5" id="ceramah5" value="ceramah" class="custom-checkbox-success me-2"><label for="ceramah5">Ceramah</label></div>
                                <div><input type="radio" name="metode5" id="observasi5" value="observasi" class="custom-checkbox-success me-2"><label for="observasi5">Observasi</label></div>
                                <div><input type="radio" name="metode5" id="lain5" value="lain" class="custom-checkbox-success me-2"><label for="lain5">lain-lain</label>
                                    <input type="text" name="metode_lain5" id="metode_lain5" class="form-control border-dark">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div><input type="radio" name="evaluasi5" id="mampu_mengerti5" value="mampu_mengerti" class="custom-checkbox-success me-1"><label for="mampu_mengerti5">Mampu mengerti</label></div>
                            <div class="d-flex flex-start"><input type="radio" name="evaluasi5" id="mampu_memahami5" value="mampu_memahami" class="custom-checkbox-success me-1"><label for="mampu_memahami5" class="col-10">Mampu memahami</label></div>
                            <div><input type="radio" name="evaluasi5" id="lain_lain5" value="lain_lain" class="custom-checkbox-success me-1"><label for="lain_lain5">lain-lain</label>
                                <input type="text" name="evaluasi_lain5" id="evaluasi_lain5" class="form-control border-dark">
                            </div>
                        </td>
                        <td>
                            <div class="my-2 text-center" style="width: 180px;">
                                <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 150px; height:100px" data-input-name="image_drawer_state_image_persetujuan_5" />
                                <input type="hidden" id="image_drawer_state_image_persetujuan_5" name="image_drawer_state_image_persetujuan_5"
                                    value="" />
                            </div>
                            <textarea name="nama_hub_pasien_ttd_5" class="form-control border-dark" rows="2"><?= $nama_hub_pasien; ?></textarea>
                        </td>
                        <td>
                            <div class="text-center my-2">
                                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_edukator_5" />
                            </div>
                            <select type="select" name="edukator_5" id="edukator_5" class="form-select perawat" style="width: 250px;"></select>
                        </td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>
                            <div class="d-block">
                                <div>Rehabilitasi Medik</div>
                                <div class="ms-3">
                                    <div>a. Gerak aktif dan gerak pasif</div>
                                    <div>b. Mobilitasi yang dianjurkan</div>
                                    <div>c. Exercise yang dianjurkan</div>
                                    <div class="text-area ms-2">
                                        <textarea name="rehabilitasi" id="perawat6" rows="5" class="w-100 form-control border-dark"></textarea>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><input type="date" name="tanggal6" id="tanggal6" class="form-control border-dark"></td>
                        <td>
                            <div>
                                <div class="d-flex gap-2 align-items-center">
                                    <label for="durasi6">Durasi</label>
                                    <input type="text" name="durasi6" id="durasi6" class="form-control w-60 border-dark"> mnt
                                </div>
                                <div><input type="radio" name="metode6" id="diskusi6" value="diskusi" class="custom-checkbox-success me-2"><label for="diskusi6">Diskusi</label></div>
                                <div><input type="radio" name="metode6" id="demonstrasi6" value="demonstrasi" class="custom-checkbox-success me-2"><label for="demonstrasi6">Demonstrasi</label></div>
                                <div><input type="radio" name="metode6" id="ceramah6" value="ceramah" class="custom-checkbox-success me-2"><label for="ceramah6">Ceramah</label></div>
                                <div><input type="radio" name="metode6" id="observasi6" value="observasi" class="custom-checkbox-success me-2"><label for="observasi6">Observasi</label></div>
                                <div><input type="radio" name="metode6" id="lain6" value="lain" class="custom-checkbox-success me-2"><label for="lain6">lain-lain</label>
                                    <input type="text" name="metode_lain6" id="metode_lain6" class="form-control border-dark">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div><input type="radio" name="evaluasi6" id="mampu_mengerti6" value="mampu_mengerti" class="custom-checkbox-success me-1"><label for="mampu_mengerti6">Mampu mengerti</label></div>
                            <div class="d-flex flex-start"><input type="radio" name="evaluasi6" id="mampu_memahami6" value="mampu_memahami" class="custom-checkbox-success me-1"><label for="mampu_memahami6" class="col-10">Mampu memahami</label></div>
                            <div><input type="radio" name="evaluasi6" id="lain_lain6" value="lain_lain" class="custom-checkbox-success me-1"><label for="lain_lain6">lain-lain</label>
                                <input type="text" name="evaluasi_lain6" id="evaluasi_lain6" class="form-control border-dark">
                            </div>
                        </td>
                        <td>
                            <div class="my-2 text-center" style="width: 180px;">
                                <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 150px; height:100px" data-input-name="image_drawer_state_image_persetujuan_6" />
                                <input type="hidden" id="image_drawer_state_image_persetujuan_6" name="image_drawer_state_image_persetujuan_6"
                                    value="" />
                            </div>
                            <textarea name="nama_hub_pasien_ttd_6" class="form-control border-dark" rows="2"><?= $nama_hub_pasien; ?></textarea>
                        </td>
                        <td>
                            <div class="text-center my-2">
                                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_edukator_6" />
                            </div>
                            <select type="select" name="edukator_6" id="edukator_6" class="form-select perawat" style="width: 250px;"></select>
                        </td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>
                            <div class="d-block">
                                <div>Dokter IGD</div>
                                <div class="ms-3">
                                    <div>a. Hasil Pemeriksaan</div>
                                    <div>b. Rencana Tindak Lanjut</div>
                                    <div>c. hasil yang diharapkan</div>
                                    <div class="text-area ms-2">
                                        <textarea name="dokter_igd" id="perawat7" rows="5" class="w-100 form-control border-dark"></textarea>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><input type="date" name="tanggal7" id="tanggal7" class="form-control border-dark"></td>
                        <td>
                            <div>
                                <div class="d-flex gap-2 align-items-center">
                                    <label for="durasi7">Durasi</label>
                                    <input type="text" name="durasi7" id="durasi7" class="form-control w-70 border-dark"> mnt
                                </div>
                                <div><input type="radio" name="metode7" id="diskusi7" value="diskusi" class="custom-checkbox-success me-2"><label for="diskusi7">Diskusi</label></div>
                                <div><input type="radio" name="metode7" id="demonstrasi7" value="demonstrasi" class="custom-checkbox-success me-2"><label for="demonstrasi7">Demonstrasi</label></div>
                                <div><input type="radio" name="metode7" id="ceramah7" value="ceramah" class="custom-checkbox-success me-2"><label for="ceramah7">Ceramah</label></div>
                                <div><input type="radio" name="metode7" id="observasi7" value="observasi" class="custom-checkbox-success me-2"><label for="observasi7">Observasi</label></div>
                                <div><input type="radio" name="metode7" id="lain7" value="lain" class="custom-checkbox-success me-2"><label for="lain7">lain-lain</label>
                                    <input type="text" name="metode_lain7" id="metode_lain7" class="form-control border-dark">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div><input type="radio" name="evaluasi7" id="mampu_mengerti7" value="mampu_mengerti" class="custom-checkbox-success me-1"><label for="mampu_mengerti7">Mampu mengerti</label></div>
                            <div class="d-flex flex-start"><input type="radio" name="evaluasi7" id="mampu_memahami7" value="mampu_memahami" class="custom-checkbox-success me-1"><label for="mampu_memahami7" class="col-10">Mampu memahami</label></div>
                            <div><input type="radio" name="evaluasi7" id="lain_lain7" value="lain_lain" class="custom-checkbox-success me-1"><label for="lain_lain7">lain-lain</label>
                                <input type="text" name="evaluasi_lain7" id="evaluasi_lain7" class="form-control border-dark">
                            </div>
                        </td>
                        <td>
                            <div class="my-2 text-center" style="width: 180px;">
                                <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 150px; height:100px" data-input-name="image_drawer_state_image_persetujuan_7" />
                                <input type="hidden" id="image_drawer_state_image_persetujuan_7" name="image_drawer_state_image_persetujuan_7"
                                    value="" />
                            </div>
                            <textarea name="nama_hub_pasien_ttd_7" class="form-control border-dark" rows="2"><?= $nama_hub_pasien; ?></textarea>
                        </td>
                        <td>
                            <div class="text-center my-2">
                                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_edukator_7" />
                            </div>
                            <select type="select" name="edukator_7" id="edukator_7" class="form-select perawat" style="width: 250px;"></select>
                        </td>
                    </tr>


                    <tr>
                        <td>8</td>
                        <td>
                            <div>
                                <textarea name="input_lain" rows="7" class="w-100 form-control border-dark"></textarea>

                            </div>
                        </td>
                        <td><input type="date" name="tanggal8" id="tanggal8" class="form-control border-dark"></td>
                        <td>
                            <div>
                                <div class="d-flex gap-2 align-items-center">
                                    <label for="durasi8">Durasi</label>
                                    <input type="text" name="durasi8" id="durasi8" class="form-control w-80 border-dark"> mnt
                                </div>
                                <div><input type="radio" name="metode8" id="diskusi8" value="diskusi" class="custom-checkbox-success me-2"><label for="diskusi8">Diskusi</label></div>
                                <div><input type="radio" name="metode8" id="demonstrasi8" value="demonstrasi" class="custom-checkbox-success me-2"><label for="demonstrasi8">Demonstrasi</label></div>
                                <div><input type="radio" name="metode8" id="ceramah8" value="ceramah" class="custom-checkbox-success me-2"><label for="ceramah8">Ceramah</label></div>
                                <div><input type="radio" name="metode8" id="observasi8" value="observasi" class="custom-checkbox-success me-2"><label for="observasi8">Observasi</label></div>
                                <div><input type="radio" name="metode8" id="lain8" value="lain" class="custom-checkbox-success me-2"><label for="lain8">lain-lain</label>
                                    <input type="text" name="metode_lain8" id="metode_lain8" class="form-control border-dark">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div><input type="radio" name="evaluasi8" id="mampu_mengerti8" value="mampu_mengerti" class="custom-checkbox-success me-1"><label for="mampu_mengerti8">Mampu mengerti</label></div>
                            <div class="d-flex flex-start"><input type="radio" name="evaluasi8" id="mampu_memahami8" value="mampu_memahami" class="custom-checkbox-success me-1"><label for="mampu_memahami8" class="col-10">Mampu memahami</label></div>
                            <div><input type="radio" name="evaluasi8" id="lain_lain8" value="lain_lain" class="custom-checkbox-success me-1"><label for="lain_lain8">lain-lain</label>
                                <input type="text" name="evaluasi_lain8" id="evaluasi_lain8" class="form-control border-dark">
                            </div>
                        </td>
                        <td>
                            <div class="my-2 text-center" style="width: 180px;">
                                <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 150px; height:100px" data-input-name="image_drawer_state_image_persetujuan_8" />
                                <input type="hidden" id="image_drawer_state_image_persetujuan_8" name="image_drawer_state_image_persetujuan_8"
                                    value="" />
                            </div>
                            <textarea name="nama_hub_pasien_ttd_8" class="form-control border-dark" rows="2"><?= $nama_hub_pasien; ?></textarea>
                        </td>
                        <td>
                            <div class="text-center my-2">
                                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_edukator_8" />
                            </div>
                            <select type="select" name="edukator_8" id="edukator_8" class="form-select perawat" style="width: 250px;"></select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawat = []
    let dataDokter = []

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);

        for (let i = 1; i <= 8; i++) {
            const selector = `#edukator_${i}`;

            $(selector).prop('disabled', false);
            $(selector).select2('open');
            $(selector).select2('close');

            if (mode === "lihat") {
                $(selector).prop('disabled', true);
            }

            setTimeout(() => {
                const selectedData = $(selector).select2('data');
                if (selectedData.length > 0) {
                    const selectedText = selectedData[0].text;
                    dataListPerawat?.map(v => {
                        if (v.text === selectedText) {
                            QRSignatureAPI(v.id_original, `qr_edukator_${i}`);
                        }
                    });
                }
            }, 1000);
        }


    }

    $(document).ready(function() {
        let page = 1;


        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;


        const select2Configs = [{
                selector: '.diagnosa',
                url: '<?= site_url('backend/admission/getDiagnosa'); ?>'
            },
            {
                selector: '.poli',
                url: '<?= site_url('backend/admission/getPoli'); ?>'
            },
            {
                selector: '.ruangan',
                url: '<?= site_url('backend/admission/getRuangan'); ?>'
            },
            {
                selector: '.perawat',
                url: '<?= site_url('backend/admission/getKaryawan'); ?>'
            },
            {
                selector: '.dokter',
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>'
            },
        ];

        select2Configs.forEach(({
            selector,
            url
        }) => {
            $(selector).select2({
                ajax: {
                    url: url,
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            limit: 100,
                            offset: (page - 1) * 100,
                        };
                    },
                    processResults: function(data) {
                        const {
                            items,
                            more
                        } = data.data;

                        // Assign ke variabel tertentu jika perlu
                        if (selector === '.perawat') {
                            dataListPerawat = items;
                        } else if (selector === '.dokter') {
                            dataDokter = items;
                        }

                        const defaultOption = [{
                            id: '',
                            text: '--pilih--'
                        }];
                        const combinedItems = defaultOption.concat(items);

                        return {
                            results: combinedItems,
                            pagination: {
                                more: more
                            },
                        };
                    },
                    cache: true,
                },
                placeholder: '--pilih--',
                allowClear: true,
            });

            $(selector).val(null).trigger('change');

            // Infinite scroll handler
            $(selector).on('select2:open', function() {
                $('.select2-results__options').off('scroll').on('scroll', function() {
                    const $this = $(this);
                    if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                        page++;
                        $(selector).select2('data', null); // Optional
                    }
                });
            });
        });


        for (let i = 1; i <= 8; i++) {
            $(`#edukator_${i}`).on('select2:select', function(e) {
                const {
                    id_original
                } = e.params.data;
                QRSignatureAPI(id_original, `qr_edukator_${i}`);
            });
        }



        //================ new =====================//
    });

    // Mendapatkan elemen radio button dan input teks
    const radioLainnya = document.getElementById('bahasa_lain');
    const inputBahasa = document.getElementById('bahasa');

    // Menambahkan event listener untuk fokus pada input jika radio "Lainnya" dipilih
    radioLainnya.addEventListener('change', function() {
        if (radioLainnya.checked) {
            // Fokuskan input jika radio button 'Lainnya' dipilih
            inputBahasa.focus();
        }
    });

    // Menambahkan event listener untuk mengosongkan input saat radio button lain dipilih
    const radios = document.querySelectorAll('input[name="bahasa"]');
    radios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (radio.value !== 'lainnya') {
                // Kosongkan input jika radio button selain 'Lainnya' dipilih
                inputBahasa.value = '';
            }
        });
    });

    // Mendapatkan elemen radio button "Lainnya" dan input teks
    const radioKeterbatasanLain = document.getElementById('keterbatasan_lainnya');
    const inputKeterbatasanLain = document.getElementById('keterbatasan_input');

    // Menambahkan event listener untuk fokus pada input jika radio "Lainnya" dipilih
    radioKeterbatasanLain.addEventListener('change', function() {
        if (radioKeterbatasanLain.checked) {
            // Fokuskan input jika radio button 'Lainnya' dipilih
            inputKeterbatasanLain.focus();
        }
    });

    // Menambahkan event listener untuk mengosongkan input saat radio button lain dipilih
    const radioButtons = document.querySelectorAll('input[name="keterbatasan_fisik"]');
    radioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
            if (radio.value !== 'keterbatasan_lainnya') {
                // Kosongkan input jika radio button selain 'Lainnya' dipilih
                inputKeterbatasanLain.value = '';
            }
        });
    });
</script>