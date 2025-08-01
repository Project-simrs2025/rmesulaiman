<div id="rm12-custom-table">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td colspan="2" class="text-center">
                    <div>
                        <img src="<?= $site_favicon; ?>" alt="logo">
                    </div>
                    <h4 class="fw-bold"><?= $site_title; ?></h4>
                    <div><?= $lokasi; ?></div>
                </td>
                <td colspan="2">
                    <p>
                        No. RM :
                        <input type="text" name="no_rm" class="form-control border-dark w-100" style="width: auto; display: inline-block">
                    </p>
                    <p>
                        Nama :
                        <input type="text" name="nama_pasien" class="form-control border-dark w-100" style="width: auto; display: inline-block">
                    </p>
                    <p>
                        Tgl Lahir :
                        <input type="text" name="tanggal_lahir" class="form-control border-dark w-100" style="width: auto; display: inline-block">
                    </p>
                    <p>
                        Jenis Kelamin :
                        <input type="text" name="jenkel" class="form-control border-dark w-100" style="width: auto; display: inline-block">
                    </p>
                    <p>
                        Agama :
                        <input type="text" name="nama_agama" class="form-control border-dark w-100" style="width: auto; display: inline-block">
                    </p>
                    <p>
                        Alamat :
                        <input type="text" name="alamat" class="form-control border-dark w-100" style="width: auto; display: inline-block">
                    </p>
                    <p>
                        Suku/ Bangsa :
                        <input type="text" name="nama_suku" class="form-control border-dark w-100" style="width: auto; display: inline-block">
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex gap-2 align-item-center">
                                <label for="" class="col-4">DIAGNOSIS MEDIS :</label>
                                <select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa">
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex gap-2 align-items-center">
                                <label for="" class="col-2">PERAWAT :</label>
                                <input type="text" class="form-control border-dark border-dark" name="nama_perawat">
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <p>DIAGNOSA KEPERAWATAN</p>
                </td>
                <td>
                    <p>TUJUAN DAN KRITERIA HASIL</p>
                </td>
                <td>
                    <p>RENCANA KEPERAWATAN</p>
                </td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>
                    <div class="form-check">
                        <input type="checkbox" name="pernafasanCheck1" class="custom-checkbox-success" id="pernafasanCheck1">
                        <label class="form-check-label" for="pernafasanCheck1">Sisem pernafasan</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" name="pernafasanCheck2" class="custom-checkbox-success" id="pernafasanCheck2">
                        <label class="form-check-label col-10" for="pernafasanCheck2">Bersihan jalan tidak efektif b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="pernafasanCheck3" class="custom-checkbox-success" id="pernafasanCheck3">
                        <label class="form-check-label" for="pernafasanCheck3">peningkatan produksi sputum</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="pernafasanCheck4" class="custom-checkbox-success" id="pernafasanCheck4">
                        <label class="form-check-label" for="pernafasanCheck4">penumpukan secret</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="pernafasanCheck5" class="custom-checkbox-success" id="pernafasanCheck5">
                        <label class="form-check-label" for="pernafasanCheck5">Pola nafas tidak efektif b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="pernafasanCheck6" class="custom-checkbox-success" id="pernafasanCheck6">
                        <label class="form-check-label" for="pernafasanCheck6">penurunan expansi paru</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="pernafasanCheck7" class="custom-checkbox-success" id="pernafasanCheck7">
                        <label class="form-check-label" for="pernafasanCheck7">depresi pusat pernafasan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="pernafasanCheck8" class="custom-checkbox-success" id="pernafasanCheck8">
                        <label class="form-check-label" for="pernafasanCheck8">Gangguan pertukaran gas b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="pernafasanCheck9" class="custom-checkbox-success" id="pernafasanCheck9">
                        <label class="form-check-label" for="pernafasanCheck9">ketidakmampuan pefusi-ventilasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="pernafasanCheck10" class="custom-checkbox-success" id="pernafasanCheck10">
                        <label class="form-check-label" for="pernafasanCheck10">Hivpventilasi</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <div class="d-flex gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="bersihan_jalan_efektif_tb1" id="bersihan_jalan_efektif_tb1">
                            <label for="bersihan_jalan_efektif_tb1" class="col-10"> bersihan jalan nafas efektif setelah dilakukan asuhan keperawatan</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <input type="text" name="bersihan_jalan_nafas_efektif_1" class="form-control border-dark ">
                            x
                            <input type="text" name="bersihan_jalan_nafas_efektif_2" class="form-control border-dark ">
                            jam,KH
                        </div>

                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="nafasCheck1" class="custom-checkbox-success" id="nafasCheck1">
                        <label class="form-check-label" for="nafasCheck1">frekuensi nafas 16 - 20 x/menit</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="nafasCheck2" class="custom-checkbox-success" id="nafasCheck2">
                        <label class="form-check-label" for="nafasCheck2">menunjukan batuk efektif</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="nafasCheck3" class="custom-checkbox-success" id="nafasCheck3">
                        <label class="form-check-label" for="nafasCheck3">bebas sianosis dan sesak nafas</label>
                    </div>
                    <div class="form-check">
                        <input type="text" name="keterangan_nafas_1" class="form-control border-dark w-100">
                    </div>

                    <div class="form-check mt-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="bersihan_jalan_efektif_tb1_1" id="bersihan_jalan_efektif_tb1_1">
                            </div>
                            <label for="bersihan_jalan_efektif_tb1_1"> bersihan jalan nafas efektif setelah dilakukan asuhan keperawatan</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <input type="text" name="bersihan_jalan_nafas_efektif_1_1" class="form-control border-dark ">
                            x
                            <input type="text" name="bersihan_jalan_nafas_efektif_2_1" class="form-control border-dark ">
                            jam,KH
                        </div>
                    </div>


                    <div class="form-check">
                        <input type="checkbox" name="nafasCheck4" class="custom-checkbox-success" id="nafasCheck4">
                        <label class="form-check-label" for="nafasCheck4">frekuensi nafas 16 - 20 x/menit</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="nafasCheck5" class="custom-checkbox-success" id="nafasCheck5">
                        <label class="form-check-label" for="nafasCheck5">menunjukkan batuk efektif</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="nafasCheck6" class="custom-checkbox-success" id="nafasCheck6">
                        <label class="form-check-label" for="nafasCheck6">bebas sianosis dan sesak nafas</label>
                    </div>
                    <div class="form-check">
                        <input type="text" name="keterangan_nafas_2" class="form-control border-dark">
                    </div>


                    <div class="form-check mt-2">
                        <div class="d-flex gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="bersihan_jalan_efektif_tb1_3" id="bersihan_jalan_efektif_tb1_3">
                            </div>
                            <label for="bersihan_jalan_efektif_tb1_3"> bersihan jalan nafas efektif setelah dilakukan asuhan keperawatan</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <input type="text" name="bersihan_jalan_nafas_efektif_3_1_1" class="form-control border-dark ">
                            x
                            <input type="text" name="bersihan_jalan_nafas_efektif_3_1_2" class="form-control border-dark ">
                            jam,KH
                        </div>
                    </div>


                    <div class="form-check">
                        <input type="checkbox" name="nafasCheck7" class="custom-checkbox-success" id="nafasCheck7">
                        <label class="form-check-label" for="nafasCheck7">frekuensi nafas 16 - 20 x/menit</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="nafasCheck8" class="custom-checkbox-success" id="nafasCheck8">
                        <label class="form-check-label" for="nafasCheck8">menunjukkan batuk efektif</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="nafasCheck9" class="custom-checkbox-success" id="nafasCheck9">
                        <label class="form-check-label" for="nafasCheck9">bebas sianosis dan sesak nafas</label>
                    </div>
                    <div class="form-check">
                        <input type="text" name="keterangan_nafas_3" class="form-control border-dark">
                    </div>
                </td>
                <td>
                    <p><strong>Mandiri :</strong></p>
                    <div class="form-check">
                        <input type="checkbox" name="mandiriCheck1" class="custom-checkbox-success" id="mandiriCheck1">
                        <label class="form-check-label" for="mandiriCheck1">kaji ulang sistem pernafasan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="mandiriCheck2" class="custom-checkbox-success" id="mandiriCheck2">
                        <label class="form-check-label" for="mandiriCheck2">atur posisi tidur semifowler</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" name="mandiriCheck3" class="custom-checkbox-success" id="mandiriCheck3">
                        <label class="form-check-label col-10" for="mandiriCheck3">tingkatkan minum 2000-3000 cc, terutama air hangat</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" name="mandiriCheck4" class="custom-checkbox-success" id="mandiriCheck4">
                        <label class="form-check-label col-10" for="mandiriCheck4">observasi perubahan warna kulit, kuku, jari, cacat, adanya
                            sianosis</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" name="mandiriCheck5" class="custom-checkbox-success" id="mandiriCheck5">
                        <label class="form-check-label col-10" for="mandiriCheck5">kaji perubahan status mental dan perubahan tingkat
                            kesadaran</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" name="mandiriCheck6" class="custom-checkbox-success" id="mandiriCheck6">
                        <label class="form-check-label" for="mandiriCheck6">tekankan pentingnya cuci tangan</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" name="mandiriCheck7" class="custom-checkbox-success" id="mandiriCheck7">
                        <label class="form-check-label col-10" for="mandiriCheck7">ajarkan nafas dalam dan batuk efektif</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" name="mandiriCheck8" class="custom-checkbox-success" id="mandiriCheck8">
                        <label class="form-check-label col-10" for="mandiriCheck8">observasi karakteristik dan jumlah sputum</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" name="mandiriCheck9" class="custom-checkbox-success" id="mandiriCheck9">
                        <label class="form-check-label col-10" for="mandiriCheck9">lakukan edukasi terhadap pasien dan keluarga sesuai
                            kebutuhan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="berikan_oksigen_tb1" id="berikan_oksigen_tb1">
                        <label for="berikan_oksigen_tb1">berikan oksigen</label>
                        <input type="text" name="oksigen" class="form-control border-dark" style="width: auto; display: inline-block">
                        / menit
                    </div>

                    <div class="form-check mt-4"><strong>Kolaborasi :</strong></div>
                    <div class="form-check">
                        <input type="checkbox" name="kolaborasiCheck1" class="custom-checkbox-success" id="kolaborasiCheck1">
                        <label class="form-check-label" for="kolaborasiCheck1">periksa AGD</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kolaborasiCheck2" class="custom-checkbox-success" id="kolaborasiCheck2">
                        <label class="form-check-label" for="kolaborasiCheck2">periks rontgen thorax</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kolaborasiCheck3" class="custom-checkbox-success" id="kolaborasiCheck3">
                        <label class="form-check-label" for="kolaborasiCheck3">periksa Lab : sputum BTA, kultur</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kolaborasiCheck4" class="custom-checkbox-success" id="kolaborasiCheck4">
                        <label class="form-check-label" for="kolaborasiCheck4">konsul ke fisioterapi</label>
                    </div>
                    <div class="form-check">
                        <input type="text" name="keterangan_kolaborasi_1" class="form-control border-dark">
                    </div>
                    <div class="form-check">
                        <input type="text" name="keterangan_kolaborasi_2" class="form-control border-dark">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <div class="form-check">
                        <input type="checkbox" name="kariovaskularCheck1" class="custom-checkbox-success" id="kariovaskularCheck1">
                        <label class="form-check-label" for="kariovaskularCheck1">Sistem Kariovaskular</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" name="kariovaskularCheck2" class="custom-checkbox-success" id="kariovaskularCheck2">
                        <label class="form-check-label col-10" for="kariovaskularCheck2">Penurunan curah jantung b.d</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" name="kariovaskularCheck3" class="custom-checkbox-success" id="kariovaskularCheck3">
                        <label class="form-check-label" for="kariovaskularCheck3">peningkatan beban kerja jantung</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kariovaskularCheck4" class="custom-checkbox-success" id="kariovaskularCheck4">
                        <label class="form-check-label" for="kariovaskularCheck4">perubahan irama</label>
                    </div>
                    <div class="form-check">
                        <input type="text" name="keterangan_kariovaskular_1" class="form-control border-dark">
                    </div>
                    <div class="form-check d-flex gap-2 mt-2">
                        <input type="checkbox" name="perfusiCheck1" class="custom-checkbox-success" id="perfusiCheck1">
                        <label class="form-check-label" for="perfusiCheck1">Tidak efektif perfusi jaringan b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="perfusiCheck2" class="custom-checkbox-success" id="perfusiCheck2">
                        <label class="form-check-label" for="perfusiCheck2">penurunan curah jantung</label>
                    </div>
                    <div class="form-check">
                        <input type="text" name="keterangan_perfusi_1" class="form-control border-dark">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="aktifitasCheck1" class="custom-checkbox-success" id="aktifitasCheck1">
                        <label class="form-check-label" for="aktifitasCheck1">Intoleransi aktifitas b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="aktifitasCheck2" class="custom-checkbox-success" id="aktifitasCheck2">
                        <label class="form-check-label" for="aktifitasCheck2">Kelemahan fisik</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="aktifitasCheck1_2" class="custom-checkbox-success" id="aktifitasCheck3">
                        <label class="form-check-label" for="aktifitasCheck3">Bedrest</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="aktifitasCheck2_2" class="custom-checkbox-success" id="aktifitasCheck4">
                        <label class="form-check-label" for="aktifitasCheck4">Penurunan perfusi jaringan</label>
                    </div>
                </td>
                <td>
                    <div class="form-check d-flex gap-2">
                        <div>
                            <input type="checkbox" name="curahJantungCheck" class="custom-checkbox-success" id="curahJantungCheck">

                        </div>
                        <div>
                            <label class="form-check-label" for="curahJantungCheck">Curah jantung adekuat setelah dilakukan asuhan
                                keperawatan</label>
                            <div class="d-flex gap-2 align-items-center">
                                <input type="text" name="curahJantungJam_tb2_1" class="form-control border-dark" id="curahJantungJam_tb2_2_1"> x <input type="text" name="curahJantungJam_tb2_2" class="form-control border-dark" id="curahJantungJam_tb2_2_2">Jam,KH
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="vitalSignCheck_normals_1_1" class="custom-checkbox-success" id="vitalSignCheck">
                        <label class="form-check-label" for="vitalSignCheck">Vital Sign dalam batas normal</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="urineOutputCheck" class="custom-checkbox-success" id="urineOutputCheck">
                        <label class="form-check-label" for="urineOutputCheck">Urine output 0,5 - 1 cc/kg BB/jam</label>
                        <input type="text" name="urineOutputJam" class="form-control border-dark mb-2" id="urineOutputJam">
                    </div>

                    <div class="form-check d-flex gap-2">
                        <div>
                            <input type="checkbox" name="perfusiJaringanCheck" class="custom-checkbox-success" id="perfusiJaringanCheck">
                        </div>

                        <div>
                            <label class="form-check-label gap-2" for="perfusiJaringanCheck">Perfusi jaringan adekuat setelah dilakukan asuhan
                                keperawatan</label>

                            <div class="d-flex gap-2 align-items-center">
                                <input type="text" name="perfusiJaringan_Jam_1" class="form-control border-dark" id="perfusiJaringan_Jam_1"> x <input type="text" name="perfusiJaringan_menit_2" class="form-control border-dark" id="perfusiJaringan_menit_2">Jam,KH
                            </div>
                        </div>


                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kulitHangatCheck" class="custom-checkbox-success" id="kulitHangatCheck">
                        <label class="form-check-label" for="kulitHangatCheck">kulit hangat dan kering</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="jaringanFeriferCheck" class="custom-checkbox-success" id="jaringanFeriferCheck">
                        <label class="form-check-label" for="jaringanFeriferCheck">jaringan ferifer tidak sianosis</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="vitalSign2Check" name="vitalSign2Check">
                        <label class="form-check-label" for="vitalSign2Check">vital sign dalam batas normal</label>
                    </div>
                    <div class="form-check mb-2"><input type="text" class="form-control border-dark" name="vitalsign_input_tb2"></div>
                    <div class="form-check d-flex gap-2">
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" id="peningkatanAktifitasCheck" name="peningkatanAktifitasCheck">
                        </div>


                        <div>
                            <label class="form-check-label col-10" for="peningkatanAktifitasCheck">Peningkatan asuhan aktifitas setelah dilakukan asuhan
                                keperawatan</label>
                            <div class="d-flex gap-2">
                                <input type="text" class="form-control border-dark" id="peningkatanAktifitasJam" name="peningkatanAktifitasJam_1"> x <input type="text" name="peningkatanAktifitas_menit_1" class="form-control border-dark" id="perfusiJaringan_menit_2">Jam,KH
                            </div>

                        </div>

                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="klienBeraktifitasCheck" name="klienBeraktifitasCheck">
                        <label class="form-check-label" for="klienBeraktifitasCheck">klien dapat beraktifitas secara bertahap</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="denyutNadiCheck" name="denyutNadiCheck">
                        <label class="form-check-label" for="denyutNadiCheck">denyut nadi 60 - 100x/menit</label>
                    </div>
                </td>
                <td>
                    <p><strong>Mandiri : </strong></p>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck112" name="mandiriCheck112">
                        <label class="form-check-label" for="mandiriCheck112">kaji ulang sistem kardiovaskular</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiri2Check2" name="mandiri2Check2">
                        <label class="form-check-label" for="mandiri2Check2">monitor vital sign</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiri2Check3" name="mandiri2Check3">
                        <label class="form-check-label" for="mandiri2Check3">monitor intake dan output</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck4_tb_2" name="mandiriCheck4_2_tb2">
                        <label class="form-check-label" for="mandiriCheck4_tb_2">batas aktifitas,bedrest total</label>
                    </div>
                    <div class="form-check mb-2">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck5_tb_2" name="mandiriCheck5_tb_2">
                        <label class="form-check-label" for="mandiriCheck5_tb_2">beri oksigen</label>
                        <input type="text" class="form-control border-dark" style="width: auto; display: inline-block" id="mandiriCheck5Value" name="mandiriCheck5Value"> menit
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck6_tb_2" name="mandiriCheck6_2_tb2">
                        <label class="form-check-label" for="mandiriCheck6_tb_2">monitor EKG</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck7_tb_2" name="mandiriCheck7_tb_2">
                        <label class="form-check-label col-10" for="mandiriCheck7_tb_2">ajarkan nafas dalam dan batuk efektif</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck8_tb_2" name="mandiriCheck8_tb_2">
                        <label class="form-check-label col-10" for="mandiriCheck8_tb_2">lakukan edukasi terhaap pasien dan keluarga sesuai
                            kebutuhan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck9_tb_2" name="mandiriCheck9_tb_2">
                        <label class="form-check-label" for="mandiriCheck9_tb_2">manajemen lingkungan</label>
                    </div>
                    <p><strong>Kolaboarasi :</strong></p>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="kolaborasiCheck1_tb2_atas" name="kolaborasiCheck1_2_tb2">
                        <label class="form-check-label col-10" for="kolaborasiCheck1_tb2_atas">pasang kondom kateter / kateter urine</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="kolaborasiCheck2_tb_2" name="kolaborasiCheck2_2">
                        <label class="form-check-label" for="kolaborasiCheck2_tb_2">periksa rontgen thorax</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="kolaborasiCheck3_tb_2" name="kolaborasiCheck3_2">
                        <label class="form-check-label" for="kolaborasiCheck3_tb_2">berikan IVFD</label>
                        <input type="text" class="form-control border-dark" style="width: auto; display: inline-block" id="kolaborasiCheck3Value" name="kolaborasiCheck3Value">
                    </div>
                    <div class="form-check mt-2">
                        <input type="checkbox" class="custom-checkbox-success" id="kolaborasiCheck4_tb_3" name="kolaborasiCheck4_2">
                        <label class="form-check-label" for="kolaborasiCheck4_tb_3">transfusi darah</label>
                        <input type="text" class="form-control border-dark" name="transfusi_tb_input_1">
                        <input type="text" class="form-control border-dark" name="transfusi_tb_input_2">
                    </div>
                </td>
            </tr>







            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <p>Sistem Persarafan</p>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="sistemPersarafanCheck1" name="sistemPersarafanCheck1">
                        <label class="form-check-label col-10" for="sistemPersarafanCheck1">tidak efektif perfusi jaringan cerebral b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="sistemPersarafanCheck2" name="sistemPersarafanCheck2">
                        <label class="form-check-label" for="sistemPersarafanCheck2">infark</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="sistemPersarafanCheck3" name="sistemPersarafanCheck3">
                        <label class="form-check-label" for="sistemPersarafanCheck3">pendarahan</label>
                    </div>
                    <div class="form-check mb-2">
                        <input type="text" class="form-control border-dark" id="sistemPersarafanCheck4Value" name="sistemPersarafanCheck4Value">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="sistemPersarafanCheck5" name="sistemPersarafanCheck5">
                        <label class="form-check-label" for="sistemPersarafanCheck5">Gangguan mobilitas fisik b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="sistemPersarafanCheck6" name="sistemPersarafanCheck6">
                        <label class="form-check-label" for="sistemPersarafanCheck6">penurunan kesadaran</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="sistemPersarafanCheck7" name="sistemPersarafanCheck7">
                        <label class="form-check-label" for="sistemPersarafanCheck7">kelemahan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="sistemPersarafanCheck8" name="sistemPersarafanCheck8">
                        <label class="form-check-label" for="sistemPersarafanCheck8">kelumpuhan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="sistemPersarafanCheck9" name="sistemPersarafanCheck9">
                        <label class="form-check-label" for="sistemPersarafanCheck9">kontraktur</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="sistemPersarafanCheck10" name="sistemPersarafanCheck10">
                        <label class="form-check-label" for="sistemPersarafanCheck10">Resiko cedera b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="sistemPersarafanCheck11" name="sistemPersarafanCheck11">
                        <label class="form-check-label" for="sistemPersarafanCheck11">kejang</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="sistemPersarafanCheck12" name="sistemPersarafanCheck12">
                        <label class="form-check-label" for="sistemPersarafanCheck12">kelemahan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="immobilisasi1" name="immobilisasi1">
                        <label class="form-check-label" for="immobilisasi1">Immobilisasi</label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <label class="form-check-label" for="immobilisasi2 col-10"></label>
                        <input type="text" class="form-control border-dark" id="immobilisasi3" name="immobilisasi3" placeholder="">
                    </div>
                </td>


                <td>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="perfusiJaringanCheck_tb_11" name="perfusiJaringanCheck_tb_11_2">
                        <label class="form-check-label col-10" for="perfusiJaringanCheck_tb_11">
                            Perfusi jaringan cerebral adekuat setelah dilakukan asuhan
                            keperawatan</label>
                    </div>
                    <div class="form-check mb-2 d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" id="perfusijaringanJam_tb4" name="perfusijaringanJamJam_1"> x <input type="text" name="perfusijaringanJam_menit_1" class="form-control border-dark" id="perfusijaringanJam_menit_2">Jam,KH
                    </div>


                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="gcs_v4_e5" name="gcs_v4_e5_2">
                        <label class="form-check-label" for="gcs_v4_e5">
                            GCS : V4, E5, M6
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="vitalSignCheck_11" name="vitalSignCheck_11_2">
                        <label class="form-check-label" for="vitalSignCheck_11">
                            Vital sign dalam batas normal
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="text" class="form-control border-dark" name="vital_sign_input_1">
                    </div>

                    <div class="form-check d-flex gap-2 mt-2">
                        <input type="checkbox" class="custom-checkbox-success" id="mobilitasFisikCheck" name="mobilitasFisikCheck">
                        <label class="form-check-label col-10" for="mobilitasFisikCheck">
                            mobilitas fisik setelah dilakukan asuhan keperawatan
                        </label>
                    </div>
                    <div class="form-check mb-2 d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" id="mobilitasi_fisik_tb4" name="mobilitasi_fisikJam_1"> x <input type="text" name="mobilitasi_fisik_menit_1" class="form-control border-dark" id="mobilitasi_fisik_menit_2">Jam,KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="kekuatanOtotCheck" name="kekuatanOtotCheck">
                        <label class="form-check-label" for="kekuatanOtotCheck">
                            Kekuatan otot meningkat
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="kontrakturCheck" name="kontrakturCheck">
                        <label class="form-check-label" for="kontrakturCheck">
                            Tidak ada kontraktur
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mobilitasMenigkatCheck" name="mobilitasMenigkatCheck">
                        <label class="form-check-label" for="mobilitasMenigkatCheck">
                            Mobilitas menigkat
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="cederaTidakTerjadiCheck" name="cederaTidakTerjadiCheck">
                        <label class="form-check-label" for="cederaTidakTerjadiCheck">
                            Cedera tidak terjadi
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="tidakSukaMemarCheck" name="tidakSukaMemarCheck">
                        <label class="form-check-label" for="tidakSukaMemarCheck">
                            tidak ada suka, memar
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="tidakJatuhTempatTidurCheck" name="tidakJatuhTempatTidurCheck">
                        <label class="form-check-label" for="tidakJatuhTempatTidurCheck">
                            tidak jatuh dari tempat tidur
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mendemonstrasikanAktifitasAmanCheck" name="mendemonstrasikanAktifitasAmanCheck">
                        <label class="form-check-label" for="mendemonstrasikanAktifitasAmanCheck">
                            mendemonstrasikan aktifitas yang aman
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="partisipasiADL" name="partisipasiADL">
                        <label class="form-check-label" for="partisipasiADL">berpartisipasi dalam ADL</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="kemajuanADL" name="kemajuanADL">
                        <label class="form-check-label" for="kemajuanADL">mengalami kemajuan dalam ADL</label>
                    </div>
                    <input type="text" class="form-control border-dark" id="keteranganADL" name="keteranganADL" placeholder="">
                </td>
                <td>
                    <p><strong>Mandiri : </strong></p>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck113" name="mandiriCheck113">
                        <label class="form-check-label" for="mandiriCheck113">kaji ulang status neurologi</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiri3Check2" name="mandiri3Check2">
                        <label class="form-check-label col-10" for="mandiri3Check2">pantau aktifitas kejang, lindungi dari cedera</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiri3Check3" name="mandiri3Check3">
                        <label class="form-check-label" for="mandiri3Check3">atur posisi tidur, kepala 15-30®</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck4_tb11" name="mandiriCheck4_tb11_3">
                        <label class="form-check-label" for="mandiriCheck4_tb11">berikan posisi yang nyaman</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck5_tb11" name="mandiriCheck5_tb11_3">
                        <label class="form-check-label col-10" for="mandiriCheck5_tb11">tirah baring, ubah posisi tiap 2 jam</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck6_tb11" name="mandiriCheck6_tb11_3">
                        <label class="form-check-label" for="mandiriCheck6_tb11">mobilisasi bertahap</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck7_tb11" name="mandiriCheck7_tb11_3">
                        <label class="form-check-label col-10" for="mandiriCheck7_tb11">berikan support psikososial dan spritual</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck8_tb11" name="mandiriCheck8_tb11_3">
                        <label class="form-check-label" for="mandiriCheck8_tb11">lakukan edukasi</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck9_tb11" name="mandiriCheck9_tb11_3">
                        <label class="form-check-label col-10" for="mandiriCheck9_tb11">berikan oksigen
                            <input type="text" class="form-control border-dark" style="width: auto; display: inline-block" id="mandiriCheck9_tb11Value" name="mandiriCheck9_tb11Value">
                            1/menit</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mandiriCheck10_tb11" name="mandiriCheck10_tb11">
                        <label class="form-check-label" for="mandiriCheck10_tb11">ajarkan teknik konikasi yang efektif</label>
                    </div>
                    <div class="form-check mt-5"><strong>Kolaborasi : </strong></div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="pasangIVFDCheck" name="pasangIVFDCheck">
                        <label class="form-check-label col-10" for="pasangIVFDCheck">
                            pasang IVFD
                            <input type="text" class="form-control border-dark" style="width: auto; display: inline-block" id="pasangIVFDValue" name="pasangIVFDValue">
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="periksaCTScanCheck" name="periksaCTScanCheck">
                        <label class="form-check-label" for="periksaCTScanCheck">periksa CT Scan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="fisioterapiTerapiWicaraCheck" name="fisioterapiTerapiWicaraCheck">
                        <label class="form-check-label" for="fisioterapiTerapiWicaraCheck">fisioterapi, terapi wicara</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="transfusiDarahCheck" name="transfusiDarahCheck">
                        <label class="form-check-label" for="transfusiDarahCheck">transfusi darah</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="pasangNGTDanKateterCheck" name="pasangNGTDanKateterCheck">
                        <label class="form-check-label" for="pasangNGTDanKateterCheck">pasang NGT dan kateter</label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label" for="kolaborasi1">
                            <input type="text" class="form-control border-dark" name="kolaborasi1Value">
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="kolaborasi2">
                            <input type="text" class="form-control border-dark" name="kolaborasi2Value">
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="kolaborasi3">
                            <input type="text" class="form-control border-dark" name="kolaborasi3Value">
                        </label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="istirahatTidur" name="istirahatTidur">
                        <label class="form-check-label" for="istirahatTidur">Istirahat dan tidur</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="gangguanPolaTidur" name="gangguanPolaTidur">
                        <label class="form-check-label" for="gangguanPolaTidur">
                            Gangguan pola tidur b.d
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="perubahanLingkungan" name="perubahanLingkungan">
                        <label class="form-check-label" for="perubahanLingkungan">
                            perubahan lingkungan
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="fakturFisikologis" name="fakturFisikologis">
                        <label class="form-check-label" for="fakturFisikologis">
                            faktur fsikologis
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="inkontinesiaUrine" name="inkontinesiaUrine">
                        <label class="form-check-label" for="inkontinesiaUrine">
                            inkontinesia urine
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="kurangTidur" name="kurangTidur">
                        <label class="form-check-label" for="kurangTidur">
                            Kurang tidur b.d
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="ketidaknyamananFisik" name="ketidaknyamananFisik">
                        <label class="form-check-label" for="ketidaknyamananFisik">
                            ketidaknyamanan fisik
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="mimpiBuruk" name="mimpiBuruk">
                        <label class="form-check-label" for="mimpiBuruk">
                            mimpi buruk
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="penggunaanObat" name="penggunaanObat">
                        <label class="form-check-label" for="penggunaanObat">
                            penggunaan obat
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="perubahanLingkungan2" name="perubahanLingkungan2">
                        <label class="form-check-label" for="perubahanLingkungan2">
                            perubahan lingkungan
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark" name="perubahan_lingkungan_input">
                    </div>
                </td>
                <td>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="polaTidurOptimal" name="polaTidurOptimal">
                        <label class="form-check-label col-10" for="polaTidurOptimal">
                            Pola tidur optimal setelah dilakukan asuhan keperawatan
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="polaTidurOptimalJam">
                        x
                        <input type="text" class="form-control border-dark" name="polaTidurOptimalMenit">jam, KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="jumlahJamTidur" name="jumlahJamTidur">
                        <label class="form-check-label" for="jumlahJamTidur">
                            Jumlah jam tidur 6-8 jam/24 jam
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="klienMudahMemulaiTidur" name="klienMudahMemulaiTidur">
                        <label class="form-check-label" for="klienMudahMemulaiTidur">
                            Klien mudah memulai tidur
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="tidakSeringTerbangunSaatTidur" name="tidakSeringTerbangunSaatTidur">
                        <label class="form-check-label" for="tidakSeringTerbangunSaatTidur">
                            Tidak sering terbangun saat tidur
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="bangunTidurTerasaSegar" name="bangunTidurTerasaSegar">
                        <label class="form-check-label" for="bangunTidurTerasaSegar">
                            Bangun tidur terasa segar
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="tidurCukupSetelahDilakukanAsuhanKeperawatan" name="tidurCukupSetelahDilakukanAsuhanKeperawatan">
                        <label class="form-check-label col-10" for="tidurCukupSetelahDilakukanAsuhanKeperawatan">
                            <label class="form-check-label col-10" for="tidurCukupSetelahDilakukanAsuhanKeperawatan">
                                Tidur cukup setelah dilakukan asuhan keperawatan
                            </label>
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="tidurCukupSetelahDilakukanAsuhanKeperawatanJam">
                        x
                        <input type="text" class="form-control border-dark" name="tidurCukupSetelahDilakukanAsuhanKeperawatanMenit">
                        jam, KH
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="jumlah_jam_tidur_tb4" name="jumlah_jam_tidur_tb4">
                        <label class="form-check-label" for="jumlah_jam_tidur_tb4">
                            jumlah jam tidur 6-8 jam/24 jam
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="text" class="form-control border-dark w-100" name="jumlah_ham_tidur_input">
                    </div>
                </td>
                <td>
                    <p><strong>Mandiri : </strong></p>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="kajiUlangPolaTidur" name="kajiUlangPolaTidur">
                        <label class="form-check-label" for="kajiUlangPolaTidur">kaji ulang pola tidur klien</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="identifikasiFaktorPenyebab" name="identifikasiFaktorPenyebab">
                        <label class="form-check-label" for="identifikasiFaktorPenyebab">identifikasi faktor penyebab</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="ciptakanLinkunganYangTenangDanNyaman" name="ciptakanLinkunganYangTenangDanNyaman">
                        <label class="form-check-label col-10" for="ciptakanLinkunganYangTenangDanNyaman">ciptakan linkungan yang tenang dan nyaman</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="hindariTindakanPadaSaatIstirahat" name="hindariTindakanPadaSaatIstirahat">
                        <label class="form-check-label" for="hindariTindakanPadaSaatIstirahat">hindari tindakan pada saat istirahat</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="berikanSusuHangatSebelumTidur" name="berikanSusuHangatSebelumTidur">
                        <label class="form-check-label" for="berikanSusuHangatSebelumTidur">berikan susu hangat sebelum tidur</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="ajarkanTeknikRelaksasi" name="ajarkanTeknikRelaksasi">
                        <label class="form-check-label" for="ajarkanTeknikRelaksasi">ajarkan teknik relaksasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="pendidikanKesehatan" name="pendidikanKesehatan">
                        <label class="form-check-label" for="pendidikanKesehatan">pendidikan kesehatan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="bunyikanMusikYangLembut" name="bunyikanMusikYangLembut">
                        <label class="form-check-label" for="bunyikanMusikYangLembut">bunyikan musik yang lembut</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="anjurkanBerdoaSebelumTidur" name="anjurkanBerdoaSebelumTidur">
                        <label class="form-check-label" for="anjurkanBerdoaSebelumTidur">anjurkan berdoa sebelum tidur</label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark" name="keteranganTidur2Input">
                    </div>
                    <div class="form-check mt-3"><strong>Kolaborasi :</strong></div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark" name="keteranganTidur3Input">
                    </div>
                    <div class="form-check">

                        <input type="text" class="form-control border-dark" name="keteranganTidur4Input">
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <p>Psikososial dan spiritual</p>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="cemas" name="cemas">
                        <label class="form-check-label" for="cemas">Cemas b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="perubahanStatusKesehatan" name="perubahanStatusKesehatan">
                        <label class="form-check-label" for="perubahanStatusKesehatan">perubahan status kesehatan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="perubahanStatusEkonomi" name="perubahanStatusEkonomi">
                        <label class="form-check-label" for="perubahanStatusEkonomi">perubahan status ekonomi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="stres1" name="stres1">
                        <label class="form-check-label" for="stres1">stres</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="situasional" name="situasional">
                        <label class="form-check-label" for="situasional">situasional</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="kebutuhanYangTidakTerpenuhi" name="kebutuhanYangTidakTerpenuhi">
                        <label class="form-check-label" for="kebutuhanYangTidakTerpenuhi">kebutuhan yang tidak terpenuhi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="perubahanPeran" name="perubahanPeran">
                        <label class="form-check-label" for="perubahanPeran">perubahan peran</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="copingTidakEfektif" name="copingTidakEfektif">
                        <label class="form-check-label" for="copingTidakEfektif">Coping tidak efektif b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="situasional2" name="situasional2">
                        <label class="form-check-label" for="situasional2">situasional</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="supportSosialTidakAdekuat" name="supportSosialTidakAdekuat">
                        <label class="form-check-label" for="supportSosialTidakAdekuat">support sosial tidak adekuat</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="sumberSumberTidakAdekuat" name="sumberSumberTidakAdekuat">
                        <label class="form-check-label col-10" for="sumberSumberTidakAdekuat">sumber-sumber yang tersedia tidak adekuat</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="hargaDiriRendah" name="hargaDiriRendah">
                        <label class="form-check-label" for="hargaDiriRendah">Harga diri rendah b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="perubahanPeran2" name="perubahanPeran2">
                        <label class="form-check-label" for="perubahanPeran2">perubahan peran</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="perubahanStatusKesehatan2" name="perubahanStatusKesehatan2">
                        <label class="form-check-label" for="perubahanStatusKesehatan2">perubahan status kesehatan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="perubahanGambaranDiri" id="perubahanGambaranDiri">
                        <label class="form-check-label" for="perubahanGambaranDiri">Perubahan gambaran diri</label>
                    </div>
                    <input type="text" class="form-control border-dark" name="perubahanGambaranDiriDetail" placeholder="...">
                </td>
                <td>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="cemas_berkurang_sampai_tb5" id="cemas_berkurang_sampai_tb5">
                        <label for="cemas_berkurang_sampai_tb5" class="col-10">Cemas berkurang sampai dgn hilang dilakukan asuhan keperawatan</label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="cemasBerhasilInput">
                        x
                        <input type="text" class="form-control border-dark" name="cemasBerhasilInput2">
                        jam, KH
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="mengekspresikanPerasaan" id="mengekspresikanPerasaan">
                        <label class="form-check-label col-10" for="mengekspresikanPerasaan">mampu mengekspresikan perasaan secara verbal</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ekspresiWajah" id="ekspresiWajah">
                        <label class="form-check-label" for="ekspresiWajah">Ekspresi wajah &nbsp;</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="optimisSaatKesembuhan" id="optimisSaatKesembuhan">
                        <label class="form-check-label" for="optimisSaatKesembuhan">Optimis saat kesembuhan &nbsp;</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mampuMengontrolCemas" id="mampuMengontrolCemas">
                        <label class="form-check-label" for="mampuMengontrolCemas">Mampu mengontrol cemas &nbsp;</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="coping_efektif_setelah_tb5" id="coping_efektif_setelah_tb5">
                        <label for="coping_efektif_setelah_tb5" class="col-10">Coping efektif setelah dlakukan asuhan keparawatan</label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center mb-2">
                        <input type="text" class="form-control border-dark" name="copingBerhasilInput">
                        x
                        <input type="text" class="form-control border-dark" name="copingBerhasilInput2">
                        jam,KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mampuMengambilKeputusan" id="mampuMengambilKeputusan">
                        <label class="form-check-label" for="mampuMengambilKeputusan">Mampu mengambil keputusan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mampuMemanfaatkanSumber" id="mampuMemanfaatkanSumber">
                        <label class="form-check-label" for="mampuMemanfaatkanSumber">Mampu memanfaatkan sumber tersedia</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="harga_diri_meningkat_setelah_tb5" id="harga_diri_meningkat_setelah_tb5">
                        <label for="harga_diri_meningkat_setelah_tb5" class="col-10">Harga diri meningkat setelah dilakukan asuhan keperawatan</label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center mb-2">
                        <input type="text" class="form-control border-dark" name="hargaDiriBerhasilInput">
                        x
                        <input type="text" class="form-control border-dark" name="hargaDiriBerhasilInput2">
                        jam,KH
                    </div>
                    <div class="form-check d-flex gap-2 ">
                        <input type="checkbox" class="custom-checkbox-success" name="mampuMengungkapkanPerasaan" id="mampuMengungkapkanPerasaan">
                        <label class="form-check-label col-10" for="mampuMengungkapkanPerasaan">Mampu mengungkapkan perasaan dan reaksi perubahan hidup</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mampuMenerimaKeadaan">
                        <label class="form-check-label" for="mampuMenerimaKeadaan">Mampu menerima keadaan</label>
                    </div>
                </td>
                <td>
                    <p><strong>Mandiri : </strong></p>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="kajiUlangStatusPsikososial" id="kajiUlangStatusPsikososial">
                        <label class="form-check-label col-10" for="kajiUlangStatusPsikososial">Kaji ulang status psikososial dan spritual</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="komunikasiTerapeutik" id="komunikasiTerapeutik" placeholder="..." style="display: inline-block">
                        <label class="form-check-label" for="komunikasiTerapeutik">Komunikasiterapeutik &nbsp;</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="observasiEkspresiWajah" id="observasiEkspresiWajah" placeholder="..." style=" display: inline-block">
                        <label class="form-check-label col-10" for="observasiEkspresiWajah">Observasi expresi wajah dan tingkah laku &nbsp;</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="dorongKlienMengungkapkanPerasaan" id="dorongKlienMengungkapkanPerasaan">
                        <label class="form-check-label col-10" for="dorongKlienMengungkapkanPerasaan">Dorong klien untuk mengungkapkan perasaannya</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ajaranTeknikRelaksasi" id="ajaranTeknikRelaksasi" placeholder="..." style=" display: inline-block">
                        <label class="form-check-label" for="ajaranTeknikRelaksasi">Ajaran teknik relaksasi &nbsp;</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="bantuKlienMemecahkanMasalah" id="bantuKlienMemecahkanMasalah">
                        <label class="form-check-label col-10" for="bantuKlienMemecahkanMasalah">Bantu klien dalam memecahkan masalah</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="ciptakanLingkunganTenangAmanNyaman" id="ciptakanLingkunganTenangAmanNyaman" placeholder="..." style=" display: inline-block">
                        <label class="form-check-label col-10" for="ciptakanLingkunganTenangAmanNyaman">Ciptakan lingkungan tenang aman dan nyaman &nbsp;</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="dorongKlienBeribadah" id="dorongKlienBeribadah">
                        <label class="form-check-label col-10" for="dorongKlienBeribadah">Dorong klien untuk tetap berdoa dan beribadah</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="informasiSederhanaTentangProsedur" id="informasiSederhanaTentangProsedur" placeholder="..." style=" display: inline-block">
                        <label class="form-check-label col-10" for="informasiSederhanaTentangProsedur">Beri informasi sederhana tentang prosedur yang dilakukan
                            &nbsp;</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tunjukkanSikapEmpati" id="tunjukkanSikapEmpati">
                        <label class="form-check-label" for="tunjukkanSikapEmpati">Tunjukkan sikap empati</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="libatkanKeluargaDalamPerawatan" id="libatkanKeluargaDalamPerawatan">
                        <label class="form-check-label col-10" for="libatkanKeluargaDalamPerawatan">Libatkan keluarga dalam perawatan</label>
                    </div>
                    <div class="form-check mt-5"><strong>Kolaborasi : </strong></div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kerohanian" id="kerohanian">
                        <label class="form-check-label" for="kerohanian">Kerohanian</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="psikolog" id="psikolog">
                        <label class="form-check-label" for="psikolog">Psikolog</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="psikiater" id="psikiater">
                        <label class="form-check-label" for="psikiater">Psikiater</label>
                    </div>
                    <input type="text" class="form-control border-dark" name="psikiaterDetail" placeholder="...">
                </td>
            </tr>
            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="persepsiSensori" id="persepsiSensori">
                        <label class="form-check-label" for="persepsiSensori">Persepsi - Sensori</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="nyeriAkutKronis" id="nyeriAkutKronis">
                        <label class="form-check-label" for="nyeriAkutKronis">Nyeri Akut / kronis</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kerusakanJaringan" id="kerusakanJaringan">
                        <label class="form-check-label" for="kerusakanJaringan">Kerusakan jaringan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="prosesInflamasi" id="prosesInflamasi">
                        <label class="form-check-label" for="prosesInflamasi">Proses inflamasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="iskemikJaringan" id="iskemikJaringan">
                        <label class="form-check-label" for="iskemikJaringan">Iskemik jaringan</label>
                    </div>
                </td>
                <td>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="nyeri_akut_kronis_berkurang_tb6" id="nyeri_akut_kronis_berkurang_tb6">
                        <label for="nyeri_akut_kronis_berkurang_tb6" class="col-10">Nyeri akut/kronis berkurang sampai dengan hilang setelah dilakukan
                            asuhan keperawatan</label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="asuhanJam">
                        x
                        <input type="text" class="form-control border-dark" name="asuhanKH">
                        jam, KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ekspresiWajahRileks" id="ekspresiWajahRileks">
                        <label class="form-check-label" for="ekspresiWajahRileks">Ekspresi wajah rileks</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="nyeriBerkurang" id="nyeriBerkurang">
                        <label class="form-check-label" for="nyeriBerkurang">Menyatakan nyeri berkurang atau hilang</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="skalaNyeriBatasNormal" id="skalaNyeriBatasNormal">
                        <label class="form-check-label" for="skalaNyeriBatasNormal">Skala nyeri batas normal</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tandaVitalBatasNormal" id="tandaVitalBatasNormal">
                        <label class="form-check-label" for="tandaVitalBatasNormal">Tanda-tanda vital dalam batas normal</label>
                    </div>
                </td>
                <td>
                    <p><strong>Mandiri : </strong></p>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kajiNyeri" id="kajiNyeri">
                        <label class="form-check-label" for="kajiNyeri">Kaji nyeri</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="monitorVitalSign" id="monitorVitalSign">
                        <label class="form-check-label" for="monitorVitalSign">Monitor vital sign</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ajarkanTeknikRelaksasi_tb7" id="ajarkanTeknikRelaksasi_tb7">
                        <label class="form-check-label" for="ajarkanTeknikRelaksasi_tb7">Ajarkan teknik relaksasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="aturPosisiTidur" id="aturPosisiTidur">
                        <label class="form-check-label" for="aturPosisiTidur">Atur posisi tidur</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="batasiPengunjung" id="batasiPengunjung">
                        <label class="form-check-label" for="batasiPengunjung">Batasi pengunjung</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kompresPanasDingin" id="kompresPanasDingin">
                        <label class="form-check-label" for="kompresPanasDingin">Kompres panas dingin</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="berikanOksigen" id="berikanOksigen">
                        <label class="form-check-label" for="berikanOksigen">Berikan oksigen</label>
                        <input type="text" class="form-control border-dark" name="oksigenMenit">
                        1/menit
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="lakukanMassage_tb7" id="lakukanMassage_tb7">
                        <label class="form-check-label" for="lakukanMassage_tb7">Lakukan massage</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="berikanPendidikanKesehatan" id="berikanPendidikanKesehatan">
                        <label class="form-check-label" for="berikanPendidikanKesehatan">Berikan pendidikan kesehatan</label>
                    </div>
                    <div class="form-check mt-5"><strong>Kolaborasi : </strong></div>
                    <input type="text" class="form-control border-dark" name="kolaborasi1_2" placeholder="...">
                    <input type="text" class="form-control border-dark" name="kolaborasi2_2" placeholder="...">
                </td>
            </tr>
            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="sistemImunitas" id="sistemImunitas">
                        <label class="form-check-label" for="sistemImunitas">Sistem imunitas</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="resikoInfeksi" id="resikoInfeksi">
                        <label class="form-check-label" for="resikoInfeksi">Resiko infeksi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="sistemImmuneTidakAdekuat" id="sistemImmuneTidakAdekuat">
                        <label class="form-check-label" for="sistemImmuneTidakAdekuat">Sistem immune tidak adekuat</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="adanyaLuka" id="adanyaLuka">
                        <label class="form-check-label" for="adanyaLuka">Adanya luka</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="prosedurInvasif" id="prosedurInvasif">
                        <label class="form-check-label" for="prosedurInvasif">Prosedur invasif</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="hipertemia" id="hipertemia">
                        <label class="form-check-label" for="hipertemia">Hipertemia</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="adanyaTrauma" id="adanyaTrauma">
                        <label class="form-check-label" for="adanyaTrauma">Adanya trauma</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="adanyaDehidrasi" id="adanyaDehidrasi">
                        <label class="form-check-label" for="adanyaDehidrasi">Adanya dehidrasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="peningkatanMetabolisme" id="peningkatanMetabolisme">
                        <label class="form-check-label" for="peningkatanMetabolisme">Peningkatan metabolisme</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="hipotermia" id="hipotermia">
                        <label class="form-check-label" for="hipotermia">Hipotermia</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="terpaparLingkunganDingin" id="terpaparLingkunganDingin">
                        <label class="form-check-label" for="terpaparLingkunganDingin">Terpapar lingkungan dingin</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="malnutrisi" id="malnutrisi">
                        <label class="form-check-label" for="malnutrisi">Malnutrisi</label>
                    </div>
                </td>
                <td>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="infeksiTidakTerjadi" id="infeksiTidakTerjadi">
                        <label class="form-check-label col-10" for="infeksiTidakTerjadi">
                            Infeksi tidak terjadi setelah dilakukan asuhan keperawatan
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="asuhanJam2" placeholder="...">
                        x
                        <input type="text" class="form-control border-dark" name="asuhanKH2" placeholder="...">
                        jam, KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tidakAdaTandaTandaInfeksi" id="tidakAdaTandaTandaInfeksi">
                        <label class="form-check-label" for="tidakAdaTandaTandaInfeksi">tidak ada tanda-tanda infeksi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="vitalSignDalamBatasNormal" id="vitalSignDalamBatasNormal">
                        <label class="form-check-label" for="vitalSignDalamBatasNormal">vital sign dalam batas normal</label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark" name="vital_input_tb8">
                    </div>
                    <div class="form-check d-flex gap-2 mt-2">
                        <input type="checkbox" class="custom-checkbox-success" name="mempertahankanNormothermia" id="mempertahankanNormothermia">
                        <label class="form-check-label col-10" for="mempertahankanNormothermia">
                            Mempertahankan normothermia setelah dilakukan asuhan keperawatan
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="jamAsuhanNormothermia">
                        x
                        <input type="text" class="form-control border-dark" name="jamAsuhanNormothermiaKH">
                        jam, KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="suhu36_37" id="suhu36_37">
                        <label class="form-check-label" for="suhu36_37">suhu 36-37°C</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="vitalSignDalamBatasNormal2" id="vitalSignDalamBatasNormal2">
                        <label class="form-check-label" for="vitalSignDalamBatasNormal2">vital sign dalam batas normal</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tidakMenggigil" id="tidakMenggigil">
                        <label class="form-check-label" for="tidakMenggigil">tidak menggigil</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tidakKejang" id="tidakKejang">
                        <label class="form-check-label" for="tidakKejang">tidak kejang</label>
                    </div>
                </td>
                <td>
                    <p><strong>Mandiri : </strong></p>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kajiTandaTandaInfeksi" id="kajiTandaTandaInfeksi">
                        <label class="form-check-label" for="kajiTandaTandaInfeksi">kaji tanda-tanda infeksi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="monitorVitalSign_2" id="monitorVitalSign">
                        <label class="form-check-label" for="monitorVitalSign">monitor vitalsign</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="lakukanTeknikAseptikAntiseptik" id="lakukanTeknikAseptikAntiseptik">
                        <label class="form-check-label" for="lakukanTeknikAseptikAntiseptik">lakukan teknik aseptik - antiseptik</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="manajemenNutrisiCairanElektrolit" id="manajemenNutrisiCairanElektrolit">
                        <label class="form-check-label col-10" for="manajemenNutrisiCairanElektrolit">manajemen nutris, cairan dan elektrolit</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="jagaPersonalHygiene" id="jagaPersonalHygiene">
                        <label class="form-check-label" for="jagaPersonalHygiene">jaga personal hygiene</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="manajemenLingkungan" id="manajemenLingkungan">
                        <label class="form-check-label" for="manajemenLingkungan">manajemen lingkungan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="manajemenObat" id="manajemenObat">
                        <label class="form-check-label" for="manajemenObat">manajemen obat</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="berikanPendidikanKesehatan_2" id="berikanPendidikanKesehatan_tb8">
                        <label class="form-check-label" for="berikanPendidikanKesehatan_tb8">berikan pendidikan kesehatan</label>
                    </div>
                    <div class="form-check mt-5"><strong>Kolaborasi : </strong></div>
                    <p>
                        <input type="text" class="form-control border-dark" name="kolaborasi1_3" placeholder="....">
                    </p>
                    <p>
                        <input type="text" class="form-control border-dark" name="kolaborasi2_3" placeholder="....">
                    </p>
                    <p>
                        <input type="text" class="form-control border-dark" name="kolaborasi3_2" placeholder="....">
                    </p>
                </td>
            </tr>
        </tbody>
    </table>




    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td class="col-1">
                    <p>TANGGAL</p>
                </td>
                <td class="col-3">
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="sistemKariovaskular" id="sistemKariovaskular">
                        <label class="form-check-label" for="sistemKariovaskular">Sistem Kariovaskular</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="penurunanCurahJantung" id="penurunanCurahJantung">
                        <label class="form-check-label" for="penurunanCurahJantung">Penurunan curah jantung b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="peningkatanBebanKerjaJantung" id="peningkatanBebanKerjaJantung">
                        <label class="form-check-label" for="peningkatanBebanKerjaJantung">peningkatan beban kerja jantung</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="perubahanIrama" id="perubahanIrama">
                        <label class="form-check-label" for="perubahanIrama">perubahan irama</label>
                    </div>
                    <p>
                        <input type="text" class="form-control border-dark" name="sistemKariovaskularInput" placeholder="....">
                    </p>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tidakEfektifPerfusiJaringan" id="tidakEfektifPerfusiJaringan">
                        <label class="form-check-label" for="tidakEfektifPerfusiJaringan">Tidak efektif perfusi jaringan b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="penurunanCurahJantung2" id="penurunanCurahJantung2">
                        <label class="form-check-label" for="penurunanCurahJantung2">penurunan curah jantung</label>
                    </div>
                    <p>
                        <input type="text" class="form-control border-dark" name="perfusiJaringanInput" placeholder="....">
                    </p>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="intoleransiAktifitas" id="intoleransiAktifitas">
                        <label class="form-check-label" for="intoleransiAktifitas">Intoleransi aktifitas b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kelemahanFisik" id="kelemahanFisik">
                        <label class="form-check-label" for="kelemahanFisik">Kelemahan fisik</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="bedrest" id="bedrest">
                        <label class="form-check-label" for="bedrest">Bedrest</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="penurunanPerfusiJaringan" id="penurunanPerfusiJaringan">
                        <label class="form-check-label" for="penurunanPerfusiJaringan">Penurunan perfusi jaringan</label>
                    </div>
                </td>
                <td class="col-4">
                    <div class="form-check d-flex gap-2" style="width: 400px;">
                        <input type="checkbox" class="custom-checkbox-success" id="curahJantungAdek" name="curahJantungAdek">
                        <label class="form-check-label col-10" for="curahJantungAdek">
                            Curah jantung adekuat setelah dilakukan asuhan keperawatan
                        </label>

                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="curahJantungAdekJam">
                        x
                        <input type="text" class="form-control border-dark" name="curahJantungAdekMenit">
                        jam, KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" id="vitalSignNormal" name="vitalSignNormal">
                        <label class="form-check-label" for="vitalSignNormal">Vital Sign dalam batas normal</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="urineOutput" name="urineOutput">
                        <label class="form-check-label col-10" for="urineOutput">
                            Urine output 0,5 - 1 cc/kg BB/jam
                            <input type="text" class="form-control border-dark" name="urineOutputJam_2" placeholder="jam" style="width: auto; display: inline-block">
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="perfusiJaringanAdek" name="perfusiJaringanAdek">
                        <label class="form-check-label col-10" for="perfusiJaringanAdek">
                            Perfusi jaringan adekuat setelah dilakukan asuhan keperawatan
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2  align-items-center">
                        <input type="text" class="form-control border-dark" name="perfusiJaringanAdekJam">
                        x
                        <input type="text" class="form-control border-dark" name="perfusiJaringanAdekMenit">jam, KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kulitHangatKering" id="kulitHangatKering">
                        <label class="form-check-label" for="kulitHangatKering">kulit hangat dan kering</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="jaringanFeriferTidakSianosis" id="jaringanFeriferTidakSianosis">
                        <label class="form-check-label" for="jaringanFeriferTidakSianosis">jaringan ferifer tidak sianosis</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="vitalSignNormal1" id="vitalSignNormal1">
                        <label class="form-check-label" for="vitalSignNormal1">Vital Sign dalam batas normal</label>
                    </div>
                    <div class="form-check my-2">
                        <input type="text" class="form-control border-dark" name="vital_sign_dalam_batas_tb7">
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" name="peningkatanAsuhanAktifitas" id="peningkatanAsuhanAktifitas" class="custom-checkbox-success">
                        <label class="form-check-label col-10" for="peningkatanAsuhanAktifitas">
                            Peningkatan asuhan aktifitas setelah dilakukan asuhan
                            keperawatan
                        </label>

                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="peningkatanAsuhanAktifitasJam">
                        x
                        <input type="text" class="form-control border-dark" name="peningkatanAsuhanAktifitasMenit" placeholder="menit">
                        jam, KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="klienBeraktifitasSecaraBertahap" id="klienBeraktifitasSecaraBertahap">
                        <label class="form-check-label" for="klienBeraktifitasSecaraBertahap">klien dapat beraktifitas secara bertahap</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="klienMenyatakanTidakSesakNafas" id="klienMenyatakanTidakSesakNafas">
                        <label class="form-check-label" for="klienMenyatakanTidakSesakNafas">klien menyatakan tidak sesak nafas</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="denyutNadi" id="denyutNadi">
                        <label class="form-check-label col-10" for="denyutNadi">
                            denyut nadi
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="denyutNadiDari">
                        -
                        <input type="text" class="form-control border-dark" name="denyutNadiSampai">
                        x/menit
                    </div>
                </td>
                <td class="col-3">
                    <p><strong>Mandiri : </strong></p>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="kajiUlangSistemKardiovaskular" id="kajiUlangSistemKardiovaskular">
                        <label class="form-check-label col-10" for="kajiUlangSistemKardiovaskular">kaji ulang sistem kardiovaskular</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="monitorVitalSign_3" id="monitorVitalSign">
                        <label class="form-check-label" for="monitorVitalSign">monitor vital sign</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="monitorIntakeDanOutput" id="monitorIntakeDanOutput">
                        <label class="form-check-label" for="monitorIntakeDanOutput">monitor intake dan output</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="batasAktifitasBedrestTotal" id="batasAktifitasBedrestTotal">
                        <label class="form-check-label" for="batasAktifitasBedrestTotal">batas aktifitas,bedrest total</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="beriOksigen" id="beriOksigen">
                        <label class="form-check-label col-10" for="beriOksigen">beri oksigen
                            <input type="text" class="form-control border-dark" name="beriOksigenLpm" placeholder="l/menit" style="width: auto; display: inline-block">menit
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="monitorEKG" id="monitorEKG">
                        <label class="form-check-label" for="monitorEKG">monitor EKG</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="ajarkanNafasDalamDanBatukEfektif" id="ajarkanNafasDalamDanBatukEfektif">
                        <label class="form-check-label col-10" for="ajarkanNafasDalamDanBatukEfektif">ajarkan nafas dalam dan batuk efektif</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="lakukanEdukasiTerhaapPasienDanKeluargaSesuaiKebutuhan" id="lakukanEdukasiTerhaapPasienDanKeluargaSesuaiKebutuhan">
                        <label class="form-check-label col-10" for="lakukanEdukasiTerhaapPasienDanKeluargaSesuaiKebutuhan">lakukan edukasi terhaap pasien dan keluarga sesuai
                            kebutuhan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="manajemenLingkungan_2" id="manajemenLingkungan">
                        <label class="form-check-label" for="manajemenLingkungan">manajemen lingkungan</label>
                    </div>
                    <p><strong>Kolaboarasi :</strong></p>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="pasangKondomKateterKateterUrine" id="pasangKondomKateterKateterUrine">
                        <label class="form-check-label col-10" for="pasangKondomKateterKateterUrine">pasang kondom kateter / kateter urine</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="periksaRontgenThorax" id="periksaRontgenThorax">
                        <label class="form-check-label" for="periksaRontgenThorax">periksa rontgen thorax</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="berikanIVFD" id="berikanIVFD">
                        <label class="form-check-label col-10" for="berikanIVFD">berikan IVFD
                            <input type="text" class="form-control border-dark" name="berikanIVFDml" placeholder="ml" style="width: auto; display: inline-block">
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="transfusiDarah" id="transfusiDarah">
                        <label class="form-check-label" for="transfusiDarah">transfusi darah</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kolaborasi1_4" id="kolaborasi1">
                        <label class="form-check-label" for="kolaborasi1">
                            <input type="text" class="form-control border-dark" name="kolaborasi1Keterangan" placeholder="keterangan" style="width: auto; display: inline-block">
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kolaborasi2_4" id="kolaborasi2">
                        <label class="form-check-label" for="kolaborasi2">
                            <input type="text" class="form-control border-dark" name="kolaborasi2Keterangan" placeholder="keterangan" style="width: auto; display: inline-block">
                        </label>
                    </div>
                </td>
            </tr>










            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <p>Sistem Persarafan</p>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="tidakEfektifPerfusiJaringanCerebral" id="tidakEfektifPerfusiJaringanCerebral">
                        <label class="form-check-label col-10" for="tidakEfektifPerfusiJaringanCerebral">tidak efektif perfusi jaringan cerebral b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="infark" id="infark">
                        <label class="form-check-label" for="infark">infark</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="pendarahan" id="pendarahan">
                        <label class="form-check-label" for="pendarahan">pendarahan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="gangguanMobilitasFisik" id="gangguanMobilitasFisik">
                        <label class="form-check-label" for="gangguanMobilitasFisik">Gangguan mobilitas fisik b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="penurunanKesadaran" id="penurunanKesadaran">
                        <label class="form-check-label" for="penurunanKesadaran">penurunan kesadaran</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kelemahan" id="kelemahan">
                        <label class="form-check-label" for="kelemahan">kelemahan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kelumpuhan" id="kelumpuhan">
                        <label class="form-check-label" for="kelumpuhan">kelumpuhan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kontraktur" id="kontraktur">
                        <label class="form-check-label" for="kontraktur">kontraktur</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="resikoCedera" id="resikoCedera">
                        <label class="form-check-label" for="resikoCedera">Resiko cedera b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kejang" id="kejang">
                        <label class="form-check-label" for="kejang">kejang</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kelemahan2" id="kelemahan2">
                        <label class="form-check-label" for="kelemahan2">kelemahan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="immobilisasi" id="immobilisasi">
                        <label class="form-check-label" for="immobilisasi">Immobilisasi</label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark" name="immobilisasiDetail">
                    </div>
                </td>
                <td>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="perfusi_jaringan_ttb9" id="perfusi_jaringan_ttb9">
                        <label for="perfusi_jaringan_ttb9" class="col-10">Perfusi jaringan cerebral adekuat setelah dilakukan asuhan keperawatan</label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="perfusiJaringanCerebralAdekut">
                        x
                        <input type="text" class="form-control border-dark" name="perfusiJaringanCerebralAdekut2">
                        jam,KH
                    </div>
                    <div class="form-check mt-2">
                        <input type="checkbox" class="custom-checkbox-success" name="gcs_ttb9" id="gcs_ttb9">
                        <label for="gcs_ttb9">GCS : V4, E5, M6</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="vital_sign_dalam_ttb9" id="vital_sign_dalam_ttb9">
                        <label for="vital_sign_dalam_ttb9">Vital sign dalam batas normal</label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark" name="vitalSign_input_ttbb9">
                    </div>
                    <div class="form-check mt-2">
                        <input type="checkbox" class="custom-checkbox-success" name="mobilitas_fisik_ttbb9" id="mobilitas_fisik_ttbb9">
                        <label for="mobilitas_fisik_ttbb9">mobilitas fisik setelah dilakukan asuhan keperawatan</label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="mobilitasFisik_ttbb9">
                        x
                        <input type="text" class="form-control border-dark" name="mobilitasFisik_ttbb9_2">
                        jam,KH
                    </div>
                    <div class="form-check mt-2">
                        <input type="checkbox" class="custom-checkbox-success" name="kekuatanOtotMeningkat" id="kekuatanOtotMeningkat">
                        <label class="form-check-label" for="kekuatanOtotMeningkat">Kekuatan otot meningkat</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tidakAdaKontraktur" id="tidakAdaKontraktur">
                        <label class="form-check-label" for="tidakAdaKontraktur">Tidak ada kontraktur</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mobilitasMeningkat" id="mobilitasMeningkat">
                        <label class="form-check-label" for="mobilitasMeningkat">Mobilitas meningkat</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="cederaTidakTerjadi" id="cederaTidakTerjadi">
                        <label class="form-check-label" for="cederaTidakTerjadi">Cedera tidak terjadi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tidakAdaSukaMemar" id="tidakAdaSukaMemar">
                        <label class="form-check-label" for="tidakAdaSukaMemar">Tidak ada suka, memar</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tidakJatuhDariTempatTidur" id="tidakJatuhDariTempatTidur">
                        <label class="form-check-label" for="tidakJatuhDariTempatTidur">Tidak jatuh dari tempat tidur</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mendemonstrasikanAktifitasAman" id="mendemonstrasikanAktifitasAman">
                        <label class="form-check-label" for="mendemonstrasikanAktifitasAman">Mendemonstrasikan aktifitas yang aman</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="berpartisipasiADL" id="berpartisipasiADL">
                        <label class="form-check-label" for="berpartisipasiADL">Berpartisipasi dalam ADL</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kemajuanADL_ttb9_2" id="kemajuanADL_ttb9">
                        <label class="form-check-label" for="kemajuanADL_ttb9">Mengalami kemajuan dalam ADL</label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark" name="adlDetail">
                    </div>
                </td>
                <td>
                    <p><strong>Mandiri : </strong></p>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kajiUlangStatusNeurologi" id="kajiUlangStatusNeurologi">
                        <label class="form-check-label" for="kajiUlangStatusNeurologi">Kaji ulang status neurologi</label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="pantauAktifitasKejang" id="pantauAktifitasKejang">
                        <label class="form-check-label col-10" for="pantauAktifitasKejang">Pantau aktifitas kejang, lindungi dari cedera</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="aturPosisiTidur_2" id="aturPosisiTidur">
                        <label class="form-check-label" for="aturPosisiTidur">Atur posisi tidur, kepala 15-30°</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="berikanPosisiNyaman" id="berikanPosisiNyaman">
                        <label class="form-check-label" for="berikanPosisiNyaman">Berikan posisi yang nyaman</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tirahBaring" id="tirahBaring">
                        <label class="form-check-label" for="tirahBaring">Tirah baring, ubah posisi tiap 2 jam</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mobilisasiBertahap" id="mobilisasiBertahap">
                        <label class="form-check-label" for="mobilisasiBertahap">Mobilisasi bertahap</label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="supportPsikososialSpiritual" id="supportPsikososialSpiritual">
                        <label class="form-check-label col-10" for="supportPsikososialSpiritual">Berikan support psikososial dan spiritual</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="lakukanEdukasi" id="lakukanEdukasi">
                        <label class="form-check-label" for="lakukanEdukasi">Lakukan edukasi</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="berikanOksigen_2" id="berikanOksigen">
                        <label class="form-check-label" for="berikanOksigen">Berikan oksigen</label>
                        <input type="text" class="form-control border-dark d-inline w-auto" name="oksigenLpm" placeholder="... L/menit">
                    </div>

                    <div class="form-check mt-2 d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="ajarkanTeknikKomunikasi" id="ajarkanTeknikKomunikasi">
                        <label class="form-check-label col-10" for="ajarkanTeknikKomunikasi">Ajarkan teknik komunikasi yang efektif</label>
                    </div>

                    <p><strong>Kolaborasi:</strong></p>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="pasangIVFD" id="pasangIVFD">
                        <label class="form-check-label" for="pasangIVFD">Pasang IVFD</label>
                        <input type="text" class="form-control border-dark d-inline w-auto" name="detailIVFD" placeholder="...">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="periksaCTScan" id="periksaCTScan">
                        <label class="form-check-label" for="periksaCTScan">Periksa CT Scan</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="fisioterapiTerapiWicara" id="fisioterapiTerapiWicara">
                        <label class="form-check-label" for="fisioterapiTerapiWicara">Fisioterapi, terapi wicara</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="transfusiDarah_2" id="transfusiDarah">
                        <label class="form-check-label" for="transfusiDarah">Transfusi darah</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="pasangNGTkateter" id="pasangNGTkateter">
                        <label class="form-check-label" for="pasangNGTkateter">Pasang NGT dan kateter</label>
                    </div>
                    <p><strong>Kolaborasi:</strong></p>
                    <input type="text" class="form-control border-dark mb-2" name="kolaborasi1_5" placeholder="">
                    <input type="text" class="form-control border-dark mb-2" name="kolaborasi2_5" placeholder="">
                    <input type="text" class="form-control border-dark" name="kolaborasi3_3" placeholder="">
                </td>
            </tr>





            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label" for="istirahatTidur">Istirahat dan tidur</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="gangguanPolaTidur_ttb7_2" id="gangguanPolaTidur_ttb7">
                        <label class="form-check-label" for="gangguanPolaTidur_ttb7">Gangguan pola tidur b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="perubahanLingkungan_ttb7_2" id="perubahanLingkungan_ttb7">
                        <label class="form-check-label" for="perubahanLingkungan_ttb7">Perubahan lingkungan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="faktorPsikologis_ttb7" id="faktorPsikologis_ttb7">
                        <label class="form-check-label" for="faktorPsikologis_ttb7">Faktor psikologis</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="inkontinensiaUrine_ttb7" id="inkontinensiaUrine_ttb7">
                        <label class="form-check-label" for="inkontinensiaUrine_ttb7">Inkontinensia urine</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kurangTidur_ttb7_2" id="kurangTidur_ttb7">
                        <label class="form-check-label" for="kurangTidur_ttb7">Kurang tidur b.d</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ketidaknyamananFisik_ttb7_2" id="ketidaknyamananFisik_ttb7">
                        <label class="form-check-label" for="ketidaknyamananFisik_ttb7">Ketidaknyamanan fisik</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mimpiBuruk_ttb7_2" id="mimpiBuruk_ttb7">
                        <label class="form-check-label" for="mimpiBuruk_ttb7">Mimpi buruk</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="penggunaanObat_ttb7_2" id="penggunaanObat_ttb7">
                        <label class="form-check-label" for="penggunaanObat_ttb7">Penggunaan obat</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="perubahanLingkungan_ttb7_3" id="perubahanLingkungan_ttb7_3">
                        <label class="form-check-label" for="perubahanLingkungan_ttb7_3">Perubahan lingkungan</label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark" name="istirahatDetail">
                    </div>
                </td>
                <td>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" id="polaTidurOptimal_ttb7" name="polaTidurOptimal_ttb7_2">
                        <label class="form-check-label col-10" for="polaTidurOptimal_ttb7">
                            Pola tidur optimal setelah dilakukan asuhan keperawatan
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center mb-2">
                        <input type="text" class="form-control border-dark" name="polaTidurOptimalJam_2">
                        x
                        <input type="text" class="form-control border-dark" name="polaTidurOptimalMenit_2">
                        jam,KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="jumlahJamTidur_ttb7_2" id="jumlahJamTidur_ttb7">
                        <label class="form-check-label" for="jumlahJamTidur_ttb7">Jumlah jam tidur 6-8 jam/24 jam</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="klienMudahTidur" id="klienMudahTidur">
                        <label class="form-check-label" for="klienMudahTidur">Klien mudah memulai tidur</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tidakSeringTerbangun" id="tidakSeringTerbangun">
                        <label class="form-check-label" for="tidakSeringTerbangun">Tidak sering terbangun saat tidur</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="bangunSegar" id="bangunSegar">
                        <label class="form-check-label" for="bangunSegar">Bangun tidur terasa segar</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="tidurCukupSetelahDilakukanAsuhanKeperawatan_ttb7_2" id="tidurCukupSetelahDilakukanAsuhanKeperawatan_ttb7">
                        <label class="form-check-label col-10" for="tidurCukupSetelahDilakukanAsuhanKeperawatan_ttb7">
                            Tidur cukup setelah dilakukan asuhan keperawatan
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center col-11 mb-2">
                        <input type="text" class="form-control border-dark" name="tidurCukupSetelahDilakukanAsuhanKeperawatanJam_2">
                        x
                        <input type="text" class="form-control border-dark" name="tidurCukupSetelahDilakukanAsuhanKeperawatanMenit_2">
                        jam,KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="jumlah_tidur_8jam_ttb7" id="jumlah_tidur_8jam_ttb7">
                        <label class="form-check-label" for="jumlah_tidur_8jam_ttb7">jumlah jam tidur 6-8 jam/24 jam</label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark" name="tidurDetail">
                    </div>
                </td>
                <td>
                    <div class="form-check"><strong>Mandiri : </strong></div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kajiUlangPolaTidur_ttb7" id="kajiUlangPolaTidur_ttb7">
                        <label class="form-check-label" for="kajiUlangPolaTidur_ttb7">Kaji ulang pola tidur klien</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="identifikasiFaktor" id="identifikasiFaktor">
                        <label class="form-check-label" for="identifikasiFaktor">Identifikasi faktor penyebab</label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="lingkunganNyaman" id="lingkunganNyaman">
                        <label class="form-check-label col-10" for="lingkunganNyaman">Ciptakan lingkungan yang tenang dan nyaman</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="hindariTindakanIstirahat" id="hindariTindakanIstirahat">
                        <label class="form-check-label" for="hindariTindakanIstirahat">Hindari tindakan pada saat istirahat</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="beriSusuHangat" id="beriSusuHangat">
                        <label class="form-check-label" for="beriSusuHangat">Berikan susu hangat sebelum tidur</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ajarkanRelaksasi" id="ajarkanRelaksasi">
                        <label class="form-check-label" for="ajarkanRelaksasi">Ajarkan teknik relaksasi</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="pendidikanKesehatan_ttb7" id="pendidikanKesehatan_ttb7">
                        <label class="form-check-label" for="pendidikanKesehatan_ttb7">Pendidikan kesehatan</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="musikLembut" id="musikLembut">
                        <label class="form-check-label" for="musikLembut">Bunyikan musik yang lembut</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="anjurkanBerdoa" id="anjurkanBerdoa">
                        <label class="form-check-label" for="anjurkanBerdoa">Anjurkan berdoa sebelum tidur</label>
                    </div>

                    <div class="form-check">
                        <input type="text" class="form-control border-dark" name="tambahanTidur" placeholder="">
                    </div>

                    <div class="form-check"><strong>Kolaborasi:</strong></div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark mt-2" name="kolaborasi1_6" placeholder="">
                        <input type="text" class="form-control border-dark mt-2" name="kolaborasi2_6" placeholder="">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label" for="psikososialSpiritual"><strong>Psikososial dan spiritual</strong></label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="cemas_ttb8" id="cemas_ttb8">
                        <label class="form-check-label" for="cemas_ttb8">Cemas b.d</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="perubahanStatusKesehatan_ttb8" id="perubahanStatusKesehatan_ttb8">
                        <label class="form-check-label" for="perubahanStatusKesehatan_ttb8">Perubahan status kesehatan</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="perubahanStatusEkonomi_ttb8" id="perubahanStatusEkonomi_ttb8">
                        <label class="form-check-label" for="perubahanStatusEkonomi_ttb8">Perubahan status ekonomi</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="stres_ttb8" id="stres_ttb8">
                        <label class="form-check-label" for="stres_ttb8">Stres</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="situasional_ttb8" id="situasional_ttb8">
                        <label class="form-check-label" for="situasional_ttb8">Situasional</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kebutuhanTidakTerpenuhi_ttb8" id="kebutuhanTidakTerpenuhi_ttb8">
                        <label class="form-check-label" for="kebutuhanTidakTerpenuhi_ttb8">Kebutuhan yang tidak terpenuhi</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="perubahanPeran_ttb8" id="perubahanPeran_ttb8">
                        <label class="form-check-label" for="perubahanPeran_ttb8">Perubahan peran</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="copingTidakEfektif_ttb8" id="copingTidakEfektif_ttb8">
                        <label class="form-check-label" for="copingTidakEfektif_ttb8">Coping tidak efektif b.d</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="supportSosialTidakAdekuat_ttb8" id="supportSosialTidakAdekuat_ttb8">
                        <label class="form-check-label" for="supportSosialTidakAdekuat_ttb8">Support sosial tidak adekuat</label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="sumberTidakAdekuat_ttb8" id="sumberTidakAdekuat_ttb8">
                        <label class="form-check-label col-10" for="sumberTidakAdekuat_ttb8">Sumber-sumber yang tersedia tidak adekuat</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="hargaDiriRendah_ttb8" id="hargaDiriRendah_ttb8">
                        <label class="form-check-label" for="hargaDiriRendah_ttb8">Harga diri rendah b.d</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="perubahanPeranHargaDiri_ttb8" id="perubahanPeranHargaDiri_ttb8">
                        <label class="form-check-label" for="perubahanPeranHargaDiri_ttb8">Perubahan peran</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="perubahanStatusKesehatanHargaDiri_ttb8" id="perubahanStatusKesehatanHargaDiri_ttb8">
                        <label class="form-check-label" for="perubahanStatusKesehatanHargaDiri_ttb8">Perubahan status kesehatan</label>
                    </div>
                    <div class="form-check d-flex gap-2 mb-2">
                        <input type="checkbox" class="custom-checkbox-success" name="perubahanEliminasiInkontinensiaUriAlfi_ttb8" id="perubahanEliminasiInkontinensiaUriAlfi_ttb8">
                        <label class="form-check-label col-10" for="perubahanEliminasiInkontinensiaUriAlfi_ttb8">
                            Perubahan eliminasi inkontinensia uri/alfi
                            <input type="text" class="form-control border-dark" name="perubahanEliminasiInkontinensiaUriAlfi_ttb8Input" placeholder="....">
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kerusakanOtot_ttb8" id="kerusakanOtot_ttb8">
                        <label class="form-check-label" for="kerusakanOtot_ttb8">kerusakan otot yang dipersyarafi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="infeksiSaluranKemih_ttb8" id="infeksiSaluranKemih_ttb8">
                        <label class="form-check-label" for="infeksiSaluranKemih_ttb8">infeksi saluran kemih</label>
                        <input type="text" class="form-control border-dark" name="infeksiSaluranKemih_ttb8Input">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="retensioUrin_ttb8" id="retensioUrin_ttb8">
                        <label class="form-check-label" for="retensioUrin_ttb8">Retensio urin</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="obstruksi_ttb8" id="obstruksi_ttb8">
                        <label class="form-check-label" for="obstruksi_ttb8">obstruksi</label>
                        <input type="text" class="form-control border-dark" name="obstruksi_ttb8Input">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kelemahan_ttb8" id="kelemahan_ttb8">
                        <label class="form-check-label" for="kelemahan_ttb8">kelemahan</label>
                    </div>
                </td>
                <td>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="cemasBerkurang" id="cemasBerkurang">
                        <label class="form-check-label col-10" for="cemasBerkurang">
                            Cemas berkurang sampai dgn hilang dilakukan asuhan keperawatan
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="cemasBerkurangInput">
                        x
                        <input type="text" class="form-control border-dark" name="cemasBerkurangInput2">
                        jam, KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ekspresikanPerasaan" id="ekspresikanPerasaan">
                        <label class="form-check-label" for="ekspresikanPerasaan">Mampu mengekspresikan perasaan secara verbal</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ekspresiRileks" id="ekspresiRileks">
                        <label class="form-check-label" for="ekspresiRileks">Ekspresi wajah rileks</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="optimisKesembuhan" id="optimisKesembuhan">
                        <label class="form-check-label" for="optimisKesembuhan">Optimis saat kesembuhan</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kontrolCemas" id="kontrolCemas">
                        <label class="form-check-label" for="kontrolCemas">Mampu mengontrol cemas</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="coping_efektif_keperawatan_tb8" id="coping_efektif_keperawatan_tb8" class="custom-checkbox-success">
                        <label for="coping_efektif_keperawatan_tb8">
                            Coping efektif setelah dlakukan asuhan keparawatan
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="copingBerhasilInput_2">
                        x
                        <input type="text" class="form-control border-dark" name="copingBerhasilInput2_2">
                        jam,KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mampuMengambilKeputusan_tb8" id="mampuMengambilKeputusan_tb8">
                        <label class="form-check-label" for="mampuMengambilKeputusan_tb8">Mampu mengambil keputusan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mampuMemanfaatkanSumber_tb8" id="mampuMemanfaatkanSumber_tb8">
                        <label class="form-check-label" for="mampuMemanfaatkanSumber_tb8">Mampu memanfaatkan sumber tersedia</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="hargaDiriMeningkat" id="hargaDiriMeningkat">
                        <label class="form-check-label col-10" for="hargaDiriMeningkat">
                            Harga diri meningkat setelah dilakukan asuhan keperawatan
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="hargaDiriMeningkatInput">
                        x
                        <input type="text" class="form-control border-dark" name="hargaDiriMeningkatInput2">
                        jam,KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="copingEfektifFinal" id="copingEfektifFinal">
                        <label class="form-check-label" for="copingEfektifFinal">Coping efektif</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="inkontinensiaUriAlfiTeratasi" id="inkontinensiaUriAlfiTeratasi">
                        <label class="form-check-label col-10" for="inkontinensiaUriAlfiTeratasi">
                            inkontinensia uri/alfi teratasi setelah dilakukanasuhan
                            keperawatan
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="inkontinensiaUriAlfiTeratasiInput">
                        x
                        <input type="text" class="form-control border-dark" name="inkontinensiaUriAlfiTeratasiJam">
                        jam, KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="memilikiSensasiBAK" id="memilikiSensasiBAK">
                        <label class="form-check-label" for="memilikiSensasiBAK">
                            memiliki sensasi BAK
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="residuUrinKurang50cc" id="residuUrinKurang50cc">
                        <label class="form-check-label" for="residuUrinKurang50cc">
                            residu urin kurang 50cc
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="retensioUrinTeratasi" id="retensioUrinTeratasi">
                        <label class="form-check-label col-10" for="retensioUrinTeratasi">
                            Retensio urin teratasi setelah dilakukan asuhan keperawatan

                        </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark" name="retensioUrinTeratasiInput">
                        x
                        <input type="text" class="form-control border-dark" name="retensioUrinTeratasiJam">
                        jam, KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="berkemihSecaraVolunteer" id="berkemihSecaraVolunteer">
                        <label class="form-check-label" for="berkemihSecaraVolunteer">
                            berkemih secara volunteer
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="merasaPuasSetelahBerkemih" id="merasaPuasSetelahBerkemih">
                        <label class="form-check-label" for="merasaPuasSetelahBerkemih">
                            merasa puas setelah berkemih
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tidakTerjadiDistensiKandungKemih" id="tidakTerjadiDistensiKandungKemih">
                        <label class="form-check-label" for="tidakTerjadiDistensiKandungKemih">
                            tidak terasa distensi kandung kemih
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="residuUrinKurang50cc2" id="residuUrinKurang50cc2">
                        <label class="form-check-label" for="residuUrinKurang50cc2">
                            residu urin kurang 50 cc
                        </label>
                    </div>
                </td>
                <td>
                    <p><strong>Mandiri : </strong></p>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="kajiUlangStatusPsikososial_2" id="kajiUlangStatusPsikososial">
                        <label class="form-check-label col-10" for="kajiUlangStatusPsikososial">Kaji ulang status psikososial dan spritual</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="komunikasiTerapeutik_2" id="komunikasiTerapeutik">
                        <label class="form-check-label" for="komunikasiTerapeutik">Komunikasiterapeutik</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="observasiEkspresiWajah_2" id="observasiEkspresiWajah">
                        <label class="form-check-label col-10" for="observasiEkspresiWajah">Observasi expresi wajah dan tingkah laku</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="dorongKlienMengungkapkanPerasaan_2" id="dorongKlienMengungkapkanPerasaan">
                        <label class="form-check-label col-10" for="dorongKlienMengungkapkanPerasaan">Dorong klien untuk mengungkapkan perasaannya</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ajarTeknikRelaksasi" id="ajarTeknikRelaksasi">
                        <label class="form-check-label" for="ajarTeknikRelaksasi">Ajaran teknik relaksasi</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="bantuKlienMengatasiMasalah" id="bantuKlienMengatasiMasalah">
                        <label class="form-check-label col-10" for="bantuKlienMengatasiMasalah">Bantu klien dalam memecahkan masalah</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="ciptakanLingkunganTenang" id="ciptakanLingkunganTenang">
                        <label class="form-check-label col-10" for="ciptakanLingkunganTenang">Ciptakan lingkungan tenang aman dan nyaman</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="dorongKlienBerdoa" id="dorongKlienBerdoa">
                        <label class="form-check-label col-10" for="dorongKlienBerdoa">Dorong klien untuk tetap berdoa dan beribadah</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="informasiSederhana" id="informasiSederhana">
                        <label class="form-check-label" for="informasiSederhana">Beri informasi sederhana</label>
                        <input type="text" class="form-control border-dark" name="informasiSederhanaInput" placeholder="..." style="width: auto; display: inline-block">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tunjukkanSikapEmpati_2" id="tunjukkanSikapEmpati">
                        <label class="form-check-label" for="tunjukkanSikapEmpati">Tunjukkan sikap empati</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="libatkanKeluarga" id="libatkanKeluarga">
                        <label class="form-check-label" for="libatkanKeluarga">Libatkan keluarga dalam perawatan</label>
                    </div>
                    <div class="form-check mt-5"><strong>Kolaborasi : </strong></div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kerohanian_2" id="kerohanian">
                        <label class="form-check-label" for="kerohanian">Kerohanian</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="psikolog_2" id="psikolog">
                        <label class="form-check-label" for="psikolog">Psikolog</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="sistemIntegumentDanMuskuloskeletal" id="sistemIntegumentDanMuskuloskeletal">
                        <label class="form-check-label col-10" for="sistemIntegumentDanMuskuloskeletal">
                            Sistem integument dan muskuloskeletal b.d
                            <input type="text" class="form-control border-dark" name="sistemIntegumentDanMuskuloskeletalInput" placeholder="...." style="width: auto; display: inline-block">
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="gangguanMobilitasFisik_tb_2" id="gangguanMobilitasFisik_tb_2">
                        <label class="form-check-label col-10" for="gangguanMobilitasFisik_tb_2">
                            Gangguan mobilitas fisik b.d
                            <input type="text" class="form-control border-dark" name="gangguanMobilitasFisikInput" placeholder="...." style="width: auto; display: inline-block">
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kekuatanSendi" id="kekuatanSendi">
                        <label class="form-check-label" for="kekuatanSendi">
                            kekuatan sendi
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="immobilitasi" id="immobilitasi">
                        <label class="form-check-label" for="immobilitasi">
                            immobilitasi
                        </label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="gangguanIntegritasKulitDanJaringan" id="gangguanIntegritasKulitDanJaringan">
                        <label class="form-check-label col-10" for="gangguanIntegritasKulitDanJaringan">
                            Gangguan integritas kulit dan jaringan
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="immobilitasFisikTrauma" id="immobilitasFisikTrauma">
                        <label class="form-check-label" for="immobilitasFisikTrauma">
                            immobilitas fisik, trauma
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="trauma" id="trauma">
                        <label class="form-check-label" for="trauma"> trauma </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kontraktur_tb_2" id="kontraktur_tb_2">
                        <label class="form-check-label" for="kontraktur_tb_2">
                            kontraktur
                        </label>
                    </div>
                    <p>
                        <input type="text" class="form-control border-dark" name="keterangan" placeholder="...." style="width: auto; display: inline-block">
                    </p>
                </td>
                <td>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="mobilitasOptimal" id="mobilitasOptimal">
                        <label class="form-check-label col-10" for="mobilitasOptimal">
                            Mobilitas fisik optimal setelah dilakukan asuhan keperawatan
                            <div class="d-flex align-items-center gap-2">
                                <input type="text" class="form-control w-25 border-dark" name="jam_mobilitasi_menit_tbterakhir"> x <input type="text" class="form-control w-25 border-dark" name="jam_mobilitasi_detik_tbterakhir"> jam, KH
                            </div>
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mobilitasMeningkat_tb_2" id="mobilitasMeningkat_tb_2">
                        <label class="form-check-label" for="mobilitasMeningkat_tb_2">Kemampuan mobilitas meningkat</label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="demonstrasiAktivitas" id="demonstrasiAktivitas">
                        <label class="form-check-label col-10" for="demonstrasiAktivitas">
                            Mendemonstrasikan tindakan untuk menunjukan kemampuan aktivitas
                        </label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="integritasKulitTerjaga" id="integritasKulitTerjaga">
                        <label class="form-check-label col-10" for="integritasKulitTerjaga">
                            Integritas kulit dan jaringan tetap terjaga setelah dilakukan
                            asuhan keperawatan
                            <div class="d-flex align-items-center gap-2">
                                <input type="text" class="form-control w-25 border-dark" name="jam_asuhanKeperawatan_menit_tbterakhir"> x <input type="text" class="form-control w-25 border-dark" name="jam_asuhanKeperawatan_detik_tbterakhir"> jam, KH
                            </div>
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="bebasLukaTekan" id="bebasLukaTekan">
                        <label class="form-check-label" for="bebasLukaTekan">Bebas dari luka tekan</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="bebasIritasiKulit" id="bebasIritasiKulit">
                        <label class="form-check-label" for="bebasIritasiKulit">Bebas iritasi kulit, tidak kemerahan</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="additionalNotes" id="additionalNotes">
                        <label class="form-check-label" for="additionalNotes">
                            <input type="text" class="form-control border-dark" name="tb_terakhir3_inputlain">
                        </label>
                    </div>
                </td>
                <td>
                    <div><strong>Mandiri:</strong></div>


                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kaji_ulang_instegument" id="kaji_ulang_instegument">
                        <label class="form-check-label" for="kaji_ulang_instegument">Kaji ulang sistem instegument</label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="observasi_lesi" id="observasi_lesi">
                        <label class="form-check-label col-10" for="observasi_lesi">Observasi Lesi</label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="kaji_lekstur_kulit" id="kaji_lekstur_kulit">
                        <label class="form-check-label col-10" for="kaji_lekstur_kulit">kaji tekstur kulit dan kelembaban</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ubah_posisi_baring" id="ubah_posisi_baring">
                        <label class="form-check-label" for="ubah_posisi_baring">ubah posisi / alih baring</label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="massage_kulit_lotion" id="massage_kulit_lotion">
                        <label class="form-check-label col-10" for="massage_kulit_lotion">berikan massage kulit kalau perlu pakai lotion</label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="cegah_tekanan_daerah" id="cegah_tekanan_daerah">
                        <label class="form-check-label" for="cegah_tekanan_daerah col-10">cegah tekanan pada daerah yang menonjol</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="immobilisasi_tbterakhir3" id="immobilisasi_tbterakhir3">
                        <label class="form-check-label" for="immobilisasi_tbterakhir3">immobilisasi </label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="bantu_aktifitas_keluarga" id="bantu_aktifitas_keluarga">
                        <label class="form-check-label" for="bantu_aktifitas_keluarga">bantu aktifitas, libatkan keluarga</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="lakukan_aktif_rom" id="lakukan_aktif_rom">
                        <label class="form-check-label" for="lakukan_aktif_rom"> lakukan aktif, paif ROM</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="rawat_luka_balutan" id="rawat_luka_balutan">
                        <label class="form-check-label" for="rawat_luka_balutan"> rawat luka, ganti balutan</label>
                    </div>

                    <div class="form-check fw-bold">Kolaborasi</div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="periksa_rontgentb3" id="periksa_rontgentb3">
                        <label class="form-check-label" for="periksa_rontgentb3"> Periksa Rontgen</label>
                    </div>

                    <div class="form-check d-flex gap-2 align-items-center">
                        <input type="checkbox" class="custom-checkbox-success" name="periksa_labtb3" id="periksa_labtb3">
                        <div class="d-flex gap-2 align-items-center">
                            <label class="form-check-label" for="periksa_labtb3"> Periksa Lab</label>
                            <input type="text" class="form-control border-dark " name="input_labtb3">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kebersihanDiri" id="kebersihanDiri">
                        <label class="form-check-label" for="kebersihanDiri">Kebersihan diri dan aktifitas</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kurangPerawatanDiri" id="kurangPerawatanDiri">
                        <label class="form-check-label" for="kurangPerawatanDiri">Kurang perawatan diri</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="keterbatasanAktifitas" id="keterbatasanAktifitas">
                        <label class="form-check-label" for="keterbatasanAktifitas">Keterbatasan aktifitas</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kelemahan_3" id="kelemahan">
                        <label class="form-check-label" for="kelemahan">Kelemahan</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ketergantunganADL" id="ketergantunganADL">
                        <label class="form-check-label" for="ketergantunganADL">Ketergantungan ADL</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="penurunanKesadaran_2" id="penurunanKesadaran">
                        <label class="form-check-label" for="penurunanKesadaran">Penurunan kesadaran</label>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan:</label>
                        <input type="text" class="form-control border-dark" name="keterangan_2" id="keterangan">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="gangguanCairanDanEliminasi" id="gangguanCairanDanEliminasi">
                        <label class="form-check-label" for="gangguanCairanDanEliminasi">Gangguan cairan dan eliminasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="penurunanSistemSyarafPusat" id="penurunanSistemSyarafPusat">
                        <label class="form-check-label" for="penurunanSistemSyarafPusat">penurunan sistem syaraf pusat</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kelemahanSistemMuskuloskeletal" id="kelemahanSistemMuskuloskeletal">
                        <label class="form-check-label" for="kelemahanSistemMuskuloskeletal">kelemahan sistem muskuloskeletal</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kelumpuhan_2" id="kelumpuhan">
                        <label class="form-check-label" for="kelumpuhan">kelumpuhan</label>
                    </div>
                </td>
                <td>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="perawatanDiriOptimal" id="perawatanDiriOptimal">
                        <label class="form-check-label col-10" for="perawatanDiriOptimal">
                            Perawatan diri optimal setelah dilakukan asuhan keperawatan
                            <div class="d-flex gap-1">
                                <input type="text" class="form-control border-dark" name="perawatanDiriOptimalJam">
                                x
                                <input type="text" class="form-control border-dark" name="perawatanDiriOptimalMenit">
                                jam,KH
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="peningkatanKemampuanPerawatanDiri_tb_2" id="peningkatanKemampuanPerawatanDiri_tb_2">
                        <label class="form-check-label" for="peningkatanKemampuanPerawatanDiri_tb_2">peningkatan kemampuan perawatan diri</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="berpartisipasiDalamPerawatanDiri" id="berpartisipasiDalamPerawatanDiri">
                        <label class="form-check-label" for="berpartisipasiDalamPerawatanDiri">berpartisipasi dalam perawatan diri</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="aktifitasHidupSehariHari" id="aktifitasHidupSehariHari">
                        <label class="form-check-label col-10" for="aktifitasHidupSehariHari">
                            Dalam melakukan aktifitas hidup harian setelh dilakukan asuhan
                            keperawatan
                            <div class="d-flex gap-1 align-items-center">
                                <input type="text" class="form-control border-dark" name="aktifitasHidupSehariHariJam">
                                x
                                <input type="text" class="form-control border-dark" name="aktifitasHidupSehariHariMenit" placeholder="menit">
                                jam,KH
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <div class="d-flex gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="komunikasi_herbal" id="komunikasi_herbal">
                            <label for="komunikasi_herbal">Komunikasi herbal efektif setelah dilakukanasuhan keperawatan</label>
                        </div>
                        <div class="d-flex gap-1 align-items-center">
                            <input type="text" class="form-control border-dark" name="komunikasiHerbal"> <span>x</span>
                            <input type="text" class="form-control border-dark" name="waktuKomunikasiHerbal">
                            <span>jam,KH</span>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mampuMenyatakanKebutuhan" id="mampuMenyatakanKebutuhan">
                        <label class="form-check-label" for="mampuMenyatakanKebutuhan">mampu menyatakan kebutuhan dan pikirannya</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="mampuMenggunakanTeknikKomunikasi" id="mampuMenggunakanTeknikKomunikasi">
                        <label class="form-check-label" for="mampuMenggunakanTeknikKomunikasi">mampu menggunakan teknik komunikasi efektif</label>
                    </div>

                </td>
                <td>
                    <div><strong>Mandiri:</strong></div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kajiDerajat" id="kajiDerajat">
                        <label class="form-check-label" for="kajiDerajat">Kaji derajat kemampuan</label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="dekatkanAlat" id="dekatkanAlat">
                        <label class="form-check-label col-10" for="dekatkanAlat">Dekatkan alat-alat yang dibutuhkan pasien</label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="bantuPasien" id="bantuPasien">
                        <label class="form-check-label col-10" for="bantuPasien">Bantu pasien saat mandi, makan, berpakaian, toileting,
                            bergerak</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="alatBantu" id="alatBantu">
                        <label class="form-check-label" for="alatBantu">Gunakan alat bantu dalam ADL</label>
                    </div>

                    <div class="form-check d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="libatkanKeluarga_2" id="libatkanKeluarga">
                        <label class="form-check-label col-10" for="libatkanKeluarga">Libatkan keluarga dalam pemenuhan ADL</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="pendidikanKesehatan_3" id="pendidikanKesehatan">
                        <label class="form-check-label" for="pendidikanKesehatan">Pendidikan kesehatan</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="optimalkanKemandirian" id="optimalkanKemandirian">
                        <label class="form-check-label" for="optimalkanKemandirian">Optimalkan tingkat kemandirian klien</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="perikgas_lab_tb4" id="periksa_lab_tb4">
                        <label for="periksa_lab_tb4">Periksa Lab</label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark w-100" name="keterangan1_tb9">
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark w-100" name="keterangan2_tb9">
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark w-100" name="keterangan3_tb9">
                    </div>

                </td>
            </tr>



            <tr>
                <td>
                    <p>TANGGAL</p>
                </td>
                <td>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="nutrisiCairanDanEliminasi" id="nutrisiCairanDanEliminasi">
                        <label class="form-check-label" for="nutrisiCairanDanEliminasi">Nutrisi cairan dan eliminasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kurangVolumeCairan" id="kurangVolumeCairan">
                        <label class="form-check-label" for="kurangVolumeCairan">Kurang volume cairan dan elektrolit</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kehilanganYangBerlebih" id="kehilanganYangBerlebih">
                        <label class="form-check-label" for="kehilanganYangBerlebih">kehilanganyang berlebih</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="intakeYangKurang" id="intakeYangKurang">
                        <label class="form-check-label" for="intakeYangKurang">intake yang kurang</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kegagalanMekanismePengaturan" id="kegagalanMekanismePengaturan">
                        <label class="form-check-label" for="kegagalanMekanismePengaturan">kegagalan mekanisme pengaturan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="gangguanThermoregulasi" id="gangguanThermoregulasi">
                        <label class="form-check-label" for="gangguanThermoregulasi">Gangguan themoregulasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="dehidrasi" id="dehidrasi">
                        <label class="form-check-label" for="dehidrasi">Dehidrasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="perubahanNutrisiKurang" id="perubahanNutrisiKurang">
                        <label class="form-check-label" for="perubahanNutrisiKurang">Perubahan nutrisi kurang</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="defisiensiInsulin" id="defisiensiInsulin">
                        <label class="form-check-label" for="defisiensiInsulin">defisiensi insulin</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="statusHipermetabolik" id="statusHipermetabolik">
                        <label class="form-check-label" for="statusHipermetabolik">status hipermetabolik</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="intakeKurang" id="intakeKurang">
                        <label class="form-check-label" for="intakeKurang">intake kurang</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="pengeluaranBerlebih" id="pengeluaranBerlebih">
                        <label class="form-check-label" for="pengeluaranBerlebih">pengeluaran berlebih</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="perubahanNutrisiLebih" id="perubahanNutrisiLebih">
                        <label class="form-check-label" for="perubahanNutrisiLebih">Perubahan nutrisi lebih</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="gangguanMetabolisme" id="gangguanMetabolisme">
                        <label class="form-check-label" for="gangguanMetabolisme">Gangguan metabolisme</label>
                    </div>
                    <div class="form-check d-flex gap-2">
                        <input type="text" class="form-control border-dark" name="keterangan_tbr_input_3" placeholder="...">
                    </div>
                </td>
                <td>
                    <div class="form-check d-flex gap-2">
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" name="keseimbanganElektrolit" id="keseimbanganElektrolit">
                        </div>
                        <div>
                            <label for="keseimbanganElektrolit col-8">
                                Mempertahankan keseimbangan elektrolit dan volume cairan adekuat
                                setelah dilakukan asuhan keperawatan</label>
                        </div>
                    </div>

                    <div class="form-check my-2 d-flex gap-2 align-items-center">
                        <input type="text" class="form-control border-dark w-50" name="waktuKeseimbanganElektrolit_menit_tbr3"> x <input type="text" class="form-control border-dark w-50" name="waktuKeseimbanganElektrolit_detik_tbr3"> KH
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="vitalSignNormal_trb3" id="vitalSignNormaltrb3">
                        <label class="form-check-label" for="vitalSignNormaltrb3">vital sign dalam batas normal</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="balaneCairanSeimbang" id="balaneCairanSeimbang">
                        <label class="form-check-label" for="balaneCairanSeimbang">balane cairan seimbang</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="turgorKulitBaik" id="turgorKulitBaik">
                        <label class="form-check-label" for="turgorKulitBaik">turgor kulit baik</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="membranMukosaLembab" id="membranMukosaLembab">
                        <label class="form-check-label" for="membranMukosaLembab">membran mukosa lembab</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kaderElektrolitLembab" id="kaderElektrolitLembab">
                        <label class="form-check-label" for="kaderElektrolitLembab">kader elektrolit lembab</label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark w-100" name="keteranganKeseimbanganElektrolit">
                    </div>
                    <div class="form-check mt-3 d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="normotermiat_tb3_1" id="normotermia_tb3">
                        </input>
                        <label for="normotermia_tb3" class="col-10">Mempertahankan normotermia setelah dilakukan asuhan keperawatan </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center my-2">
                        <input type="text" class="form-control border-dark w-50" name="normotermia_jam_tb3"> x <input type="text" class="form-control border-dark w-50" name="normotermia_menit_tb3">jam,KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="suhuTubuhNormal" id="suhuTubuhNormal">
                        <label class="form-check-label" for="suhuTubuhNormal">suhu tubuh normal</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="vitalSignNormal2" id="vitalSignNormal2">
                        <label class="form-check-label" for="vitalSignNormal2">vital sign dalam batas normal</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="tidakAdaTandaHypotermia" id="tidakAdaTandaHypotermia">
                        <label class="form-check-label" for="tidakAdaTandaHypotermia">tidak ada tanda hypotermia / hypertemia</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="balanceCairanSeimbang2" id="balanceCairanSeimbang2">
                        <label class="form-check-label" for="balanceCairanSeimbang2">balance cairan seimbang</label>
                    </div>
                    <div class="form-check mt-3 d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="keteranganKebutuhanNutrisiTerpenuhi" value="_nutrisi_setelah_tb3_1" id="nutrisi_tb3">
                        </input>
                        <label for="nutrisi_tb3" class="col-10">Kebutuhan nutrisi terpenuhi setelah dilakukan asuhan keperawatan </label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center my-2">
                        <input type="text" class="form-control border-dark w-50" name="nutrisi_jam_tb3"> x <input type="text" class="form-control border-dark w-50" name="nutrisi_menit_tb3">jam,KH
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="asupanNutrisiAdekuat" id="asupanNutrisiAdekuat">
                        <label class="form-check-label" for="asupanNutrisiAdekuat">asupan nutrisi adekuat</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="beratBadanMenigkat" id="beratBadanMenigkat">
                        <label class="form-check-label" for="beratBadanMenigkat">berat badan meningkat</label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark w-100" name="keteranganKebutuhanNutrisiTerpenuhi_1">
                    </div>
                    <div class="form-check mt-3 d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success" name="menapai_status_nutrisi_tb3" id="menapai_tb3">
                        </input>
                        <label for="menapai_tb3" class="col-10">Menapai status nutrisi yang optimal setelah dilakukan asuhan keperawatan</label>
                    </div>
                    <div class="form-check d-flex gap-2 align-items-center my-2">
                        <input type="text" class="form-control border-dark w-50" name="menapai_jam_tb3"> x <input type="text" class="form-control border-dark w-50" name="menapai_menit_tb3">jam,SH
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="BBMenurun5PersenDiatasBBI" id="BBMenurun5PersenDiatasBBI">
                        <label class="form-check-label" for="BBMenurun5PersenDiatasBBI">BB menurun 5-10% diatas BBI</label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark w-100" name="keteranganStatusNutrisiOptimal">
                    </div>
                </td>
                <td>
                    <div class="form-check"><strong>Mandiri : </strong></div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="kajiUlangStatusHidrasi" id="kajiUlangStatusHidrasi">
                        <label class="form-check-label" for="kajiUlangStatusHidrasi">kaji ulang status hidrasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="lakukanManajemenNutrisi" id="lakukanManajemenNutrisi">
                        <label class="form-check-label" for="lakukanManajemenNutrisi">lakukan manajemen nutrisi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="berikanMakananSesuaiDiet" id="berikanMakananSesuaiDiet">
                        <label class="form-check-label" for="berikanMakananSesuaiDiet">berikan makanan sesuai diet</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="timbangBBHari" id="timbangBBHari">
                        <label class="form-check-label" for="timbangBBHari">timbang BB / hari</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="hindariMakananYangMerangsang" id="hindariMakananYangMerangsang">
                        <label class="form-check-label" for="hindariMakananYangMerangsang">Hindari makanan yang merangsang</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="beriMakanVorsiKecilDanSering" id="beriMakanVorsiKecilDanSering">
                        <label class="form-check-label" for="beriMakanVorsiKecilDanSering">beri makan vorsi kecil dan sering</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="lakukanOralHygiene" id="lakukanOralHygiene">
                        <label class="form-check-label" for="lakukanOralHygiene">lakukan oral hygiene</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="observasiMuntah" id="observasiMuntah">
                        <label class="form-check-label" for="observasiMuntah">observasi muntah</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="berikanCairan20003000ccHari" id="berikanCairan20003000ccHari">
                        <label class="form-check-label" for="berikanCairan20003000ccHari">berikan cairan 2000-3000cc / hari</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="hitungBalanceCairan" id="hitungBalanceCairan">
                        <label class="form-check-label" for="hitungBalanceCairan">hitung balance cairan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ajarkanToiletTraining" id="ajarkanToiletTraining">
                        <label class="form-check-label" for="ajarkanToiletTraining">ajarkan toilet training</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="berikanKompresHangatDingin" id="berikanKompresHangatDingin">
                        <label class="form-check-label" for="berikanKompresHangatDingin">berikan kompres hangat / dingin</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="monitorTetesanInfus" id="monitorTetesanInfus">
                        <label class="form-check-label" for="monitorTetesanInfus">monitor tetesan infus</label>
                    </div>
                    <div class="form-check">
                        <input type="text" class="form-control border-dark w-100" name="keteranganMandiri">
                    </div>
                    <div class="form-check mt-5"><strong>Kolaborasi : </strong></div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="pasangIVFD_2" id="pasangIVFD">
                        <label class="form-check-label" for="pasangIVFD">Pasang IVFD</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="ahliGizi" id="ahliGizi">
                        <label class="form-check-label" for="ahliGizi">Ahli Gizi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="pasangNGT" id="pasangNGT">
                        <label class="form-check-label" for="pasangNGT">Pasang NGT</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="pasangKondomKateterKateterUrin" id="pasangKondomKateterKateterUrin">
                        <label class="form-check-label" for="pasangKondomKateterKateterUrin">Pasang kondom kateter / kateter urin</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="custom-checkbox-success" name="periksa_Lab_lab_lab" id="periksa_Lab_lab_lab">
                        <label class="form-check-label" for="periksa_Lab_lab_lab">Periksa Lab</label>
                    </div>
                    <div class="form-check">
                        <textarea name="periksaLab_2" id="periksaLab_2" rows="4" class="form-control border-dark w-100"></textarea>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</div>

<script>
    function cbCommon() {

    }

    $(document).ready(function() {
        let page = 1; // Track the current page
        // let searchQuery = ''; // Track the search query

        // Initialize Select2
        $('#diagnosa').select2({
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

        $('#diagnosa').on('select2:open', function() {
            $('.select2-results__options').on('scroll', function() {

            });
            const $this = $(this);
            if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                page++; // Increment page
                $('#diagnosa').select2('data', null); // Trigger new data fetch
            }
        });



    });


    // function checkAndFixDuplicateNames() {
    //     const elements = document.querySelectorAll("input, textarea");
    //     const nameCount = {};

    //     elements.forEach(element => {
    //         let name = element.name;
    //         if (name) {
    //             if (nameCount[name]) {
    //                 nameCount[name]++;
    //                 element.name = `${name}_${nameCount[name]}`;
    //             } else {
    //                 nameCount[name] = 1;
    //             }
    //         }
    //     });

    //     console.log("Duplicate names fixed:", nameCount);

    //     const tableElement = document.getElementById("rm12-custom-table");
    //     if (tableElement) {
    //         const resultDiv = document.getElementById("result") || document.createElement("div");
    //         resultDiv.id = "result";
    //         resultDiv.innerHTML = `<pre>${tableElement.outerHTML}</pre>`;

    //         // Store the updated HTML in a file and trigger download
    //         const blob = new Blob([tableElement.outerHTML], {
    //             type: "text/html"
    //         });
    //         const link = document.createElement("a");
    //         link.href = URL.createObjectURL(blob);
    //         link.download = "updated_table.html";
    //         document.body.appendChild(link);
    //         link.click();
    //         document.body.removeChild(link);
    //     }
    // }

    // // Call the function when needed
    // checkAndFixDuplicateNames();
</script>