<div class="row">
    <?php
    $dataPasien = [
        ['label' => 'Nama Pasien', 'value' => $nama_pasien, 'label2' => 'Agama', 'value2' => $nama_agama],
        ['label' => 'Tanggal Lahir', 'value' => $tgl_lahir, 'label2' => 'Suku/Bangsa', 'value2' => "$nama_suku / $nama_bangsa"],
        ['label' => 'Jenis Kelamin', 'value' => $jenkel, 'label2' => 'Alamat', 'value2' => $alamat],
        ['label' => 'No. RM', 'value' => $no_rm, 'label2' => 'NIK', 'value2' => $nik],
    ];
    ?>

    <div class="container-fluid">
        <?php foreach ($dataPasien as $row): ?>
            <div class="row mb-2">
                <div class="col-md-2 fw-bold"><?= $row['label'] ?></div>
                <div class="col-md-4"> <?= $row['value'] ?></div>
                <div class="col-md-2 fw-bold"><?= $row['label2'] ?></div>
                <div class="col-md-4"> <?= $row['value2'] ?></div>
            </div>
        <?php endforeach; ?>
    </div>

    <br>

    <table class="table table-bordered border-dark">
        <tr>
            <td align="center">I. Asesmen Risiko Jatuh</td>
        </tr>
        <tr>
            <td>
                <b>1. Pengkajian</b>
                <table class="table table-bordered border-dark">
                    <tr align="center">
                        <td width="5%">no</td>
                        <td width="75%">Penilai / pengkajian</td>
                        <td width="10%">Ya</td>
                        <td width="10%">Tidak</td>
                    </tr>
                    <tr>
                        <td align="center">1</td>
                        <td>
                            Cara berjalan pasien(salah satu atau lebih)
                            <br>
                            <ol>
                                1. Tidak Seimbang / sempoyongan / limbung /tampak kesakitan saat berjalan <br>
                                2. Jalan dengan mengunakan alat bantu (kruk, tripot, kursi roda, orang lain)
                            </ol>
                        </td>
                        <td align="center"><input type="checkbox" name="ya_seimbang_berjalan" id="ya_seimbang_berjalan" class="custom-checkbox-success"></td>
                        <td align="center"><input type="checkbox" name="tidak_seimbang_berjalan" id="tidak_seimbang_berjalan" class="custom-checkbox-success"></td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td>Menopang saat akan duduk : tampak memegan pinggiran kursu roda atau meja / benda lain sebagai penopang saat akan duduk</td>
                        <td align="center"><input type="checkbox" name="ya_menopang_dudukan" id="ya_menopang_dudukan" class="custom-checkbox-success"></td>
                        <td align="center"><input type="checkbox" name="tidak_menopang_dudukan" id="tidak_menopang_dudukan" class="custom-checkbox-success"></td>
                    </tr>
                </table>

                <br>
                <b>2. Hasil</b>

                <table class="table table-bordered border-dark">
                    <tr align="center">
                        <td width="5%">no</td>
                        <td width="15%">Hasil</td>
                        <td width="30%">Penilai / pengkajian</td>
                        <td width="50%">Ket</td>
                    </tr>
                    <tr>
                        <td align="center">1</td>
                        <td>Tidak Beresiko</td>
                        <td>Tidak ditemukan 1 & 2</td>
                        <td><textarea name="ket_tdk_resiko_input" id="" class="form-control border-dark" rows="1"></textarea></td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td>Resiko Rendah</td>
                        <td>Ditemukan salah satu dari 1/2</td>
                        <td><textarea name="ket_resiko_rendah_input" id="" class="form-control border-dark" rows="1"></textarea></td>
                    </tr>
                    <tr>
                        <td align="center">3</td>
                        <td>Resiko Tinggi</td>
                        <td>Ditemukan 1 & 2</td>
                        <td><textarea name="ket_resiko_tinggi_input" id="" class="form-control border-dark" rows="1"></textarea></td>
                    </tr>
                </table>

                <br>
                <b>3. Tindakan</b>

                <table class="table table-bordered border-dark">
                    <tr align="center">
                        <td width="5%">no</td>
                        <td width="15%">Hasil</td>
                        <td width="35%">Penilai / pengkajian</td>
                        <td width="8%">Ya</td>
                        <td width="8%">Tidak</td>
                        <td width="34%">TTd / Nama Petugas</td>
                    </tr>
                    <tr>
                        <td align="center">1.</td>
                        <td>Tidak Beresiko</td>
                        <td>Tidak ada tindakan</td>
                        <td align="center"><input type="checkbox" name="tindakan_ya_lakukan" id="" class="custom-checkbox-success"></td>
                        <td align="center"><input type="checkbox" name="tindakan_tidak_lakukan" id="" class="custom-checkbox-success"></td>
                        <td> <select type="select" name="perawat_1" id="perawat_1" class="form-select perawat" style="width: 100%;"></select></td>
                    </tr>
                    <tr>
                        <td align="center">2.</td>
                        <td>Resiko Rendah</td>
                        <td>Edukasi + penggunaan alat bantu (bila perlu)</td>
                        <td align="center"><input type="checkbox" name="tindakan_ya_edukasi" id="" class="custom-checkbox-success"></td>
                        <td align="center"><input type="checkbox" name="tindakan_tidak_edukasi" id="" class="custom-checkbox-success"></td>
                        <td> <select type="select" name="perawat_2" id="perawat_2" class="form-select perawat" style="width: 100%;"></select></td>
                    </tr>
                    <tr>
                        <td align="center" rowspan="2">3.</td>
                        <td rowspan="2">Resiko Tinggi</td>
                        <td>Pasang Pita Kuning</td>
                        <td align="center"><input type="checkbox" name="tindakan_ya_pita" id="" class="custom-checkbox-success"></td>
                        <td align="center"><input type="checkbox" name="tindakan_tidak_pita" id="" class="custom-checkbox-success"></td>
                        <td> <select type="select" name="perawat_3" id="perawat_3" class="form-select perawat" style="width: 100%;"></select></td>
                    </tr>
                    <tr>
                        <td>Edukasi + Penggunaan alat bantu (bila perlu)</td>
                        <td align="center"><input type="checkbox" name="tindakan_ya_pita_penggunaan" id="" class="custom-checkbox-success"></td>
                        <td align="center"><input type="checkbox" name="tindakan_tidak_pita_penggunaan" id="" class="custom-checkbox-success"></td>
                        <td> <select type="select" name="perawat_4" id="perawat_4" class="form-select perawat" style="width: 100%;"></select></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="table table-bordered border-dark">
        <tr>
            <td align="center" colspan="2">
                <h6 class="fw-bold">II. FORMULIR EDUKASI PASIEN DAN KELUARGA RAWAT JALAN</h6>
                <span>(BERI TANDA CHECKLIST (&check;) PADA KOTAK YANG SSUAI DENGAN KEBUTUHAN PASIEN DAN KELUARGA)</span>
            </td>
        </tr>
        <tr>
            <td colspan="2">Petugas menyatakan telah memberikan penejelasan secara jelas dan benar serta memberikan pendidikan kepada pasien dan keluarga tentang : <br>
                1. Penyakit yang di derita pasien <br>
                2. Rencana pelayanan <br>
                3. Pengobatan dan prosedur yang diberikan atau diperlukan <br>
                4. Hasil pelayanan, termasuk terjadinay kejadaian yang diharapkan dan tidak diharapkan
            </td>
        </tr>
        <tr>
            <td colspan="2">Persipan Edukasi / Belajar</td>
        </tr>
        <tr>
            <td>
                <div class="d-flex">
                    <div class="col-10">Bahasa</div>
                    <div>:</div>
                </div>
            </td>
            <td class="col-8">
                <div class="d-flex align-items-center">
                    <div class="col-2">
                        <input type="checkbox" name="indonesia" id="indonesia" class="custom-checkbox-success">
                        <label for="indonesia">Indonesia</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="inggris" id="inggris" class="custom-checkbox-success">
                        <label for="inggris">Inggris</label>
                    </div>
                    <div class="col d-flex align-items-center gap-2">
                        <input type="checkbox" name="daerah" id="daerah" class="custom-checkbox-success">
                        <div class="d-flex align-items-center w-100">
                            <label for="daerah" class="col-2">Daerah</label>
                            <input type="text" name="daerah_input" class="form-control border-dark">
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="d-flex">
                    <div class="col-10">Kebutuhan Penterjemah</div>
                    <div>:</div>
                </div>
            </td>
            <td class="col-8">
                <div class="d-flex align-items-center">
                    <div class="col-2">
                        <input type="checkbox" name="tidak_perlu_penerjemah" id="tidak_perlu_penerjemah" class="custom-checkbox-success">
                        <label for="tidak_perlu_penerjemah">Tidak</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="ya_perlu_penerjemah" id="ya_perlu_penerjemah" class="custom-checkbox-success">
                        <label for="ya_perlu_penerjemah">Ya</label>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="d-flex">
                    <div class="col-10">Pendidikan Pasien</div>
                    <div>:</div>
                </div>
            </td>
            <td class="col-9">
                <div class="d-flex align-items-center">
                    <div class="col-2">
                        <input type="checkbox" name="pendidikan_sd" id="pendidikan_sd" class="custom-checkbox-success">
                        <label for="pendidikan_sd">SD</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="pendidikan_sltp" id="pendidikan_sltp" class="custom-checkbox-success">
                        <label for="pendidikan_sltp">SLTP</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="pendidikan_slta" id="pendidikan_slta" class="custom-checkbox-success">
                        <label for="pendidikan_slta">SLTA</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="pendidikan_d3" id="pendidikan_d3" class="custom-checkbox-success">
                        <label for="pendidikan_d3">D3</label>
                    </div>
                    <div class="col-1">
                        <input type="checkbox" name="pendidikan_s1" id="pendidikan_s1" class="custom-checkbox-success">
                        <label for="pendidikan_s1">S1</label>
                    </div>
                    <div class="col">
                        <div class="d-flex gap-2">
                            <input type="checkbox" name="pendidikan_lain" id="pendidikan_lain" class="custom-checkbox-success">
                            <label for="pendidikan_lain">Lain-lain</label>
                        </div>
                        <div>
                            <input type="text" name="pendik-lain_input" id="" class="form-control border-dark">
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="d-flex">
                    <div class="col-10">Baca dan Tulis</div>
                    <div>:</div>
                </div>
            </td>
            <td class="col-8">
                <div class="d-flex align-items-center">
                    <div class="col-2">
                        <input type="checkbox" name="baik_perlu_pengetahuan" id="baik_perlu_pengetahuan" class="custom-checkbox-success">
                        <label for="baik_perlu_pengetahuan">Baik</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="Kurang_perlu_pengetahuan" id="Kurang_perlu_pengetahuan" class="custom-checkbox-success">
                        <label for="Kurang_perlu_pengetahuan">Kurang</label>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="d-flex">
                    <div class="col-10">Pilihan tipe pembelajaran</div>
                    <div>:</div>
                </div>
            </td>
            <td class="col-8">
                <div class="d-flex align-items-center">
                    <div class="col-2">
                        <input type="checkbox" name="verbal_pembelajaran" id="verbal_pembelajaran" class="custom-checkbox-success">
                        <label for="verbal_pembelajaran">Verbal</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="tulisan_pembelajaran" id="tulisan_pembelajaran" class="custom-checkbox-success">
                        <label for="tulisan_pembelajaran">Tulisan</label>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="d-flex">
                    <div class="col-10">Hambatan Edukasi</div>
                    <div>:</div>
                </div>
            </td>
            <td class="col-8">
                <div class="d-flex align-items-center flex-wrap">
                    <div class="col-3">
                        <input type="checkbox" name="tdk_ada_hambatan_edukasi" id="tdk_ada_hambatan_edukasi" class="custom-checkbox-success">
                        <label for="tdk_ada_hambatan_edukasi">Tidak Ada</label>
                    </div>
                    <div class="col-4">
                        <input type="checkbox" name="penglihatan_terganggu_hambatan_edukasi" id="penglihatan_terganggu_hambatan_edukasi" class="custom-checkbox-success">
                        <label for="penglihatan_terganggu_hambatan_edukasi">Penglihatan terganggu</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="bahasa_terganggu_hambatan_edukasi" id="bahasa_terganggu_hambatan_edukasi" class="custom-checkbox-success">
                        <label for="bahasa_terganggu_hambatan_edukasi">bahasa</label>
                    </div>
                    <div class="col-3">
                        <input type="checkbox" name="kognitif_hambatan_edukasi" id="kognitif_hambatan_edukasi" class="custom-checkbox-success">
                        <label for="kognitif_hambatan_edukasi">kognitif terbatas</label>
                    </div>
                    <div class="col-3">
                        <input type="checkbox" name="motivasi_hambatan_edukasi" id="motivasi_hambatan_edukasi" class="custom-checkbox-success">
                        <label for="motivasi_hambatan_edukasi">Motivasi Kurang</label>
                    </div>
                    <div class="col-4">
                        <input type="checkbox" name="budya_hambatan_edukasi" id="budya_hambatan_edukasi" class="custom-checkbox-success">
                        <label for="budya_hambatan_edukasi">Budaya/Agama/Spritual</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="emosional_hambatan_edukasi" id="emosional_hambatan_edukasi" class="custom-checkbox-success">
                        <label for="emosional_hambatan_edukasi">Emosional</label>
                    </div>
                    <div class="col-3">
                        <input type="checkbox" name="gangguan_bcara_hambatan_edukasi" id="gangguan_bcara_hambatan_edukasi" class="custom-checkbox-success">
                        <label for="gangguan_bcara_hambatan_edukasi">Gangguan Bicara</label>
                    </div>
                    <div class="col-3">
                        <input type="checkbox" name="fisik_hambatan_edukasi" id="fisik_hambatan_edukasi" class="custom-checkbox-success">
                        <label for="fisik_hambatan_edukasi">Fisik Lemah</label>
                    </div>
                    <div class="col-4">
                        <input type="checkbox" name="pendengaran_hambatan_edukasi" id="pendengaran_hambatan_edukasi" class="custom-checkbox-success">
                        <label for="pendengaran_hambatan_edukasi">Pendengaran Terganggu</label>
                    </div>
                    <div class="col d-flex align-items-center gap-2">
                        <div> <input type="checkbox" name="hambatan_edukasi_lain" id="hambatan_edukasi_lain" class="custom-checkbox-success"></div>
                        <input type="text" class="form-control border-dark" name="hambatan_edukasi_lain_input">
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>


<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered border-dark">
            <tr class="text-center">
                <td>Poliklinik</td>
                <td>Penjelasan Edukasi Tentang</td>
                <td>Tanda Tangan Nama Petugas & profesi</td>
                <td>Sarana Edukasi (Nama & hubungan dengan pasien)</td>
                <td>Evaluasi</td>
            </tr>
            <tr>
                <td>
                    <div style="width: 150px;">
                        <input type="text" name="nama_poli" id="" class="form-control">
                    </div>
                </td>
                <td>
                    <div style="width: 350px;"><textarea rows="1" name="penjelasan_edukasi" class="form-control border-dark"></textarea></div>
                </td>
                <td>
                    <div style="width: 250px;"><select type="select" name="perawat_profesi" id="perawat_profesi" class="form-select perawat" style="width: 100%;"></select></div>
                </td>
                <td>
                    <div style="width: 250px;"><input type="text" name="nama_hub_pasien" id="nama_hub_pasien" class="form-control border-dark"></div>
                </td>
                <td>
                    <div class="d-flex flex-column" style="width: 250px;">
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="sdh_dimengerti" id="sdh_dimengerti" class="custom-checkbox-success">
                            <label for="sdh_dimengerti">Sudah dimengerti</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="re_demontrasi" id="re_demontrasi" class="custom-checkbox-success">
                            <label for="re_demontrasi">Re-demontrasi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="re_edukasi" id="re_edukasi" class="custom-checkbox-success">
                            <label for="re_edukasi">Re-edukasi</label>
                        </div>
                    </div>
                </td>
            </tr>

            <?php for ($i = 1; $i <= 2; $i++) : ?>
                <tr>
                    <td>
                        <div style="width: 150px;">
                            <input type="text" name="nama_poli_<?= $i; ?>" id="" class="form-control border-dark">
                        </div>
                    </td>
                    <td>
                        <div style="width: 350px;"><textarea rows="1" name="penjelasan_edukasi_<?= $i; ?>" class="form-control border-dark"></textarea></div>
                    </td>
                    <td>
                        <div style="width: 250px;"><select type="select" name="perawat_profesi_<?= $i; ?>" id="perawat_profesi_<?= $i; ?>" class="form-select perawat" style="width: 100%;"></select></div>
                    </td>
                    <td>
                        <div style="width: 250px;"><input type="text" name="nama_hub_pasien_<?= $i; ?>" id="nama_hub_pasien_<?= $i; ?>" class="form-control border-dark"></div>
                    </td>
                    <td>
                        <div class="d-flex flex-column" style="width: 250px;">
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="sdh_dimengerti_<?= $i; ?>" id="sdh_dimengerti_<?= $i; ?>" class="custom-checkbox-success">
                                <label for="sdh_dimengerti_<?= $i; ?>">Sudah dimengerti</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="re_demontrasi_<?= $i; ?>" id="re_demontrasi_<?= $i; ?>" class="custom-checkbox-success">
                                <label for="re_demontrasi_<?= $i; ?>">Re-demontrasi</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="re_edukasi_<?= $i; ?>" id="re_edukasi_<?= $i; ?>" class="custom-checkbox-success">
                                <label for="re_edukasi_<?= $i; ?>">Re-edukasi</label>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endfor; ?>

        </table>
    </div>
</div>

<br>

<div class="row">
    <div class="my-3 d-flex justify-content-end">
        <button type="button" class="btn btn-primary" onclick="addRow()">
            <span class="bi bi-plus"></span>
        </button>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered mt-4 border-dark" id="VisiteProgramTable">
            <thead>
                <tr>
                    <td colspan="10">
                        <div class="d-flex"><b class="col-5">DATA ON-HD</b> <span class="text-center fw-bold">OBSERVASI PROGRAM DIALISIS</span></div>
                    </td>
                </tr>
                <tr class="text-center">
                    <td rowspan="2">Jam</td>
                    <td colspan="2">Pasien</td>
                    <td colspan="5">Mesin</td>
                    <td rowspan="2">Masalah Tindakan</td>
                    <td rowspan="2">Petugas</td>
                </tr>
                <tr class="text-center">
                    <td>TD</td>
                    <td>N</td>
                    <td>QB</td>
                    <td>VP</td>
                    <td>UFG</td>
                    <td>UFR</td>
                    <td>UF Removed</td>
                    <!-- <td>Action</td> -->
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="fw-bold">DATA POST HD</div>
    <div>Obat yang diberikan selama HD</div>
    <textarea name="obat_diberikan_hd" id="" class="form-control border-dark" rows="4"></textarea>

    <div class="mt-2">Keluhan</div>
    <textarea name="keluhan_diberikan_hd" id="" class="form-control border-dark" rows="4"></textarea>


    <div class="row mt-4 g-3">
        <!-- Keadaan Umum -->
        <div class="col-12 col-md-2">
            <div class="d-flex align-items-center gap-2">
                <label for="ku_anonymous" class="form-label mb-0" style="min-width: 40px;">Ku:</label>
                <input type="text" name="ku_anonymous" id="ku_anonymous" class="form-control border-dark">
            </div>
        </div>

        <!-- Tekanan Darah -->
        <div class="col-12 col-md-2">
            <div class="d-flex align-items-center gap-2">
                <label for="td_anonymous" class="form-label mb-0" style="min-width: 40px;">TD:</label>
                <input type="text" name="td_anonymous" id="td_anonymous" class="form-control border-dark">
            </div>
        </div>

        <!-- Nadi -->
        <div class="col-12 col-md-3">
            <div class="d-flex align-items-center gap-2">
                <label for="n_anonymous" class="form-label mb-0" style="min-width: 25px;">N:</label>
                <input type="text" name="n_anonymous" id="n_anonymous" class="form-control border-dark">
                <span class="ms-1">X/mnt</span>
            </div>
        </div>

        <!-- Respon -->
        <div class="col-12 col-md-3">
            <div class="d-flex align-items-center gap-2">
                <label for="resp_anonymous" class="form-label mb-0 col-2">Resp:</label>
                <input type="text" name="resp_anonymous" id="n_anonymous" class="form-control border-dark">
                <span class="ms-1">X/mnt</span>
            </div>
        </div>

        <!-- Berat badan -->
        <div class="col-12 col-md">
            <div class="d-flex align-items-center gap-2">
                <label for="bb_anonymous" class="form-label mb-0 col-2">BB</label>
                <input type="text" name="bb_anonymous" id="n_anonymous" class="form-control border-dark">
            </div>
        </div>
    </div>


    <div class="col-md-6 mt-2">
        <div class="d-flex align-items-center gap-2">
            <label class="col-3">Lama HD : </label>
            <input type="text" name="lama_hd" class="form-control border-dark"> jam
        </div>
    </div>

    <div class="col-md-6 mt-2">
        <div class="d-flex align-items-center gap-2">
            <label class="col-3">UF removed : </label>
            <input type="text" name="uf_removed" class="form-control border-dark">
        </div>
    </div>

    <div class="mt-4 row">
        <div class="col-md-6">
            <div class="d-flex flex-column">
                <div class="d-flex align-items-center gap-2">
                    <label class="col-4">Sisa Priming</label>
                    : <input type="text" class="form-control border-dark" name="sisa_priming"> cc
                </div>
                <div class="d-flex align-items-center gap-2">
                    <label class="col-4">Transfusi</label>
                    : <input type="text" class="form-control border-dark" name="transfusi"> cc
                </div>
                <div class="d-flex align-items-center gap-2">
                    <label class="col-4">Wash Out</label>
                    : <input type="text" class="form-control border-dark" name="wash_out"> cc
                </div>
                <div class="d-flex align-items-center gap-2">
                    <label class="col-4">Minum</label>
                    : <input type="text" class="form-control border-dark" name="minum"> cc
                </div>
                <div class="d-flex align-items-center gap-2">
                    <label class="col-4">Jumlah</label>
                    : <input type="text" class="form-control border-dark" name="jumlah"> cc
                </div>
            </div>
            <div class="col-2"></div>
        </div>

        <div class="col-md-3">
            <div class="d-flex flex-column gap-2">
                <div class="d-flex align-items-center gap-2">
                    <div>Dializer :
                        <input type="checkbox" name="dializer_reuse" id="dializer_reuse" class="custom-checkbox-success"> Reuse
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md">
            <div class="d-flex flex-column gap-2">
                <div>
                    <input type="checkbox" name="dializer_tidak_reuse" id="dializer_tidak_reuse" class="custom-checkbox-success"> Tidak Reuse
                </div>
                <div>
                    <input type="checkbox" name="dializer_bocor" id="dializer_bocor" class="custom-checkbox-success"> Bocor/Beku
                </div>
                <div>
                    <input type="checkbox" name="dializer_single" id="dializer_single" class="custom-checkbox-success"> single Use
                </div>
                <div>
                    <input type="checkbox" name="dializer_besar_5" id="dializer_besar_5" class="custom-checkbox-success"> > 5 x pakai
                </div>
                <div>
                    <input type="checkbox" name="dializer_menular" id="dializer_menular" class="custom-checkbox-success"> Penyakit menular
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row mt-4">
    <div class="d-flex flex-column gap-2">
        <div>
            <div>Nama Petugas Yang Melakukan fungsi</div>
            <select type="select" name="perawat_melakukan_fungsi" id="perawat_melakukan_fungsi" class="form-select perawat" style="width: 60%;"></select>
        </div>

        <div>
            <div>Nama Petugas Yang mengakhiri dialisis</div>
            <select type="select" name="perawat_mengakhiri_dialisis" id="perawat_mengakhiri_dialisis" class="form-select perawat" style="width: 60%;"></select>
        </div>

        <div class="d-flex flex-column align-items-end">
            <div>Perawat Penanggung jawab pasien</div>
            <div class="text-end">
                <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_perawat_penanggung_jawab" />
            </div>
            <div style="width: 30%;">
                <select type="select" name="perawat_penanggung_jawab" id="perawat_penanggung_jawab" class="form-select perawat" style="width: 100%;"></select>
            </div>
        </div>
    </div>
</div>




<script>
    let dataDokter = [];
    const mode = "<?= $mode; ?>";

    // 🔒 Fungsi sanitasi input
    function sanitizeInput(text) {
        return text
            .replace(/\\n/g, '\n')
            .replace(/\\t/g, '\t')
            .replace(/\\\//g, '/')
            .replace(/\\u2013/g, '–')
            .replace(/[^\w\s.,()*?%\/+=':><\-\n\t]/g, ''); // Hapus karakter aneh tapi pertahankan karakter penting
    }

    // 🔐 Sanitize sebelum form submit
    $('form').on('submit', function() {
        $('textarea[name="masalah_tindakan[]"]').each(function() {
            $(this).val(sanitizeInput($(this).val()));
        });

        $('input[type="text"]').each(function() {
            $(this).val(sanitizeInput($(this).val()));
        });
    });

    // 🔁 Inisialisasi dokters
    function listDokterUmumAPI() {
        $('.dokter_umum').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term
                    };
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data;
                    dataDokter = items;
                    return {
                        results: items,
                        pagination: {
                            more: more
                        }
                    };
                },
                cache: true
            },
            placeholder: 'Search for items...',
        });
    }

    // 📦 Buat QR dokter
    function QRSignatureAPI(id, imgElementId) {
        const imgElement = document.getElementById(imgElementId);
        if (!imgElement) return;
        const qrUrl = `https://api.qrserver.com/v1/create-qr-code/?data=${id}&size=100x100`;
        imgElement.src = qrUrl;
        const hiddenInput = imgElement.closest('td')?.querySelector('input.dokter_umum_qr');
        if (hiddenInput) hiddenInput.value = qrUrl;
    }

    $(document).ready(function() {
        listDokterUmumAPI();
        listPerawat();

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;

        // QRSignatureAPI(id_dokter, 'qr_dokter_dpjp');

        $('#perawat_penanggung_jawab').on('select2:select', function(e) {
            const {
                id,
                id_original
            } = e.params.data;

            if (id === '') {
                // Kosongkan QR Code jika pilihan "--pilih--"
                $('#qr_perawat_penanggung_jawab').remove();
            } else {
                QRSignatureAPI(id_original, 'qr_perawat_penanggung_jawab');
            }
        });
    });

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    // ➕ Fungsi tambah baris
    function addRow() {
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        const rowCount = table.rows.length;
        const newRow = table.insertRow(rowCount);
        newRow.classList.add("text-center");

        const qrId = `qr_dokter_umum_${rowCount}`;
        const selectId = `dokter_umum${rowCount}`;

        const cells = [
            `<div style="width:110px;">
                <input type="time" name="waktu_observasi[]" class="form-control border-dark">
            </div>`,
            `<div style="width:80px;">
                <input type="text" class="form-control border-dark" name="td_pasien[]">
            </div>`,
            `<div style="width:80px;">
                <input type="text" class="form-control border-dark" name="N_pasien[]">
            </div>`,
            `<div style="width:80px;">
                <input type="text" class="form-control border-dark" name="QB_pasien[]">
            </div>`,
            `<div style="width:80px;">
                <input type="text" class="form-control border-dark" name="VP_pasien[]">
            </div>`,
            `<div style="width:80px;">
                <input type="text" class="form-control border-dark" name="UFG_pasien[]">
            </div>`,
            `<div style="width:80px;">
              <input type="text" class="form-control border-dark" name="UFR_pasien[]">
            </div>`,
            `<div style="width:80px;">
                <input type="text" class="form-control border-dark" name="UF_removed[]">
            </div>`,
            `<div style="width:250px;">
                <textarea name="masalah_tindakan[]" rows="4" class="form-control border-dark"></textarea>
            </div>`,
            `
            <div style="width:250px">
                <div>
                    <img class="img-responsive center-block mt-2" style="width: 30%;" id="${qrId}" />
                    <select name="dokter_umum[]" id="${selectId}" class="form-select dokter_umum" style="width: 100%;"></select>
                    <input type="hidden" name="dokter_umum_nama[]" class="dokter_umum_nama" value="">
                </div>
            </div>
            `,
            // `<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(this)" id="btn_delete"><span class="bi bi-trash"></span></button>`
        ];

        cells.forEach((cell, index) => {
            const newCell = newRow.insertCell(index);
            newCell.innerHTML = cell;
        });

        // 🔽 Inisialisasi select2 baru
        $(`#${selectId}`).select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term
                    };
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data;
                    return {
                        results: items,
                        pagination: {
                            more: more
                        }
                    };
                },
                cache: true
            },
            placeholder: 'Search for items...'
        });

        // 🔄 QR saat pilih dokter
        $(`#${selectId}`).on('select2:select', function(e) {
            const selectedData = e.params.data;
            const selectedText = selectedData.text;
            const id_original = selectedData.id_original || selectedData.id;
            const hiddenInput = $(this).closest('div').find('.dokter_umum_nama');
            hiddenInput.val(selectedText);
            QRSignatureAPI(id_original, qrId);
        });

        // 🔐 Sanitize saat blur
        const textarea = newRow.querySelector('textarea');
        if (textarea) {
            textarea.addEventListener('blur', function() {
                this.value = sanitizeInput(this.value);
            });
        }

        const inputs = newRow.querySelectorAll('input[type="text"]');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                this.value = sanitizeInput(this.value);
            });
        });

        return newRow;
    }

    // 🗑️ Fungsi hapus baris
    function deleteRow(button) {
        const row = button.parentElement.parentElement;
        row.remove();
    }

    // 🔁 Fungsi render ulang dari data backend
    function cbCommon(data) {

        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        table.innerHTML = "";

        const dataLength = data.values().next().value.length;

        const params = Array.from({
                length: dataLength
            }, (_, rowIndex) =>
            Array.from(data.keys(), (key) => data.get(key)[rowIndex])
        );

        for (let i = 0; i < params.length; i++) {
            const [waktu_observasi, td_pasien, N_pasien, QB_pasien, VP_pasien, UFG_pasien, UFR_pasien, UF_pasien, masalah_tindakan, id_dokter, nama_dokter] = params[i];
            const tr = addRow();

            const inputs = tr.getElementsByTagName("input");
            const textarea = tr.querySelector("textarea");
            const select = tr.querySelector("select.dokter_umum");
            const qrImg = tr.querySelector("img");

            if (inputs.length >= 7) {
                inputs[0].value = waktu_observasi;
                inputs[1].value = td_pasien;
                inputs[2].value = N_pasien;
                inputs[3].value = QB_pasien;
                inputs[4].value = VP_pasien;
                inputs[5].value = UFG_pasien;
                inputs[6].value = UFR_pasien;
                inputs[7].value = UF_pasien;
            }

            if (textarea) {
                textarea.value = masalah_tindakan;
            }

            const optionInterval = setInterval(() => {
                if ($(select).hasClass("select2-hidden-accessible")) {
                    clearInterval(optionInterval);
                    const newOption = new Option(nama_dokter, id_dokter, true, true);
                    $(select).append(newOption).trigger('change');

                    const hidden = tr.querySelector("input.dokter_umum_nama");
                    if (hidden) hidden.value = nama_dokter;

                    if (qrImg) {
                        const qrUrl = `https://api.qrserver.com/v1/create-qr-code/?data=${id_dokter}&size=100x100`;
                        qrImg.src = qrUrl;
                        const hiddenQR = tr.querySelector("input.dokter_umum_qr");
                        if (hiddenQR) hiddenQR.value = qrUrl;
                    }
                }
            }, 100);
        }

        $('#perawat_penanggung_jawab').prop('disabled', false)
        $('#perawat_penanggung_jawab').select2('open')
        $('#perawat_penanggung_jawab').select2('close')
        if (mode === "lihat")
            $('#perawat_penanggung_jawab').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#perawat_penanggung_jawab').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_penanggung_jawab')
                }
            })
        }, 1000)
    }



    function listPerawat() {
        $('.perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                        limit: 100,
                        offset: 0, // Optional, jika backend mendukung pagination
                    };
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data;

                    // Sisipkan pilihan "--pilih--" di awal
                    const defaultOption = [{
                        id: '',
                        text: '--pilih--'
                    }];
                    const combinedItems = defaultOption.concat(items);

                    dataDokter = items;

                    return {
                        results: combinedItems,
                        pagination: {
                            more: more
                        }
                    };
                },
                cache: true,
            },
            placeholder: '--pilih--',
            allowClear: true, // ⬅️ Ini yang munculkan simbol "×"
        });

        // Reset nilai saat awal load
        $('.perawat').val(null).trigger('change');
    }
</script>