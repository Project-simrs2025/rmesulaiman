<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3" id="anak">
            <tbody>

                <tr>
                    <td>
                        <div class=" d-flex align-items-center flex-column mt-5">
                            <img src="img/sulaiman.jpg" alt="" style="width: 120px;">
                            <h4><?= $site_title; ?></h4>
                        </div>
                    </td>

                    <td style="width: 500px;">
                        <div style="margin-top:20%;" class="text-center">
                            <h4>FORMULIR TRIAGE DEWASA
                                <?= $site_title; ?>
                            </h4>
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="">Nama :</label>
                            <input type="text" class="form-control border-dark" name="nama_pasien">
                        </div>
                        <div class="form-group">
                            <label for="">Tgl. Lahir :</label>
                            <input type="date" class="form-control border-dark" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="">No Rm :</label>
                            <input type="text" class="form-control border-dark" name="no_rm">
                        </div>

                        <div class="form-group">
                            <label for="">NIK :</label>
                            <input type="text" class="form-control border-dark" name="nik">
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>


        <table class="table-bordered border-dark table">
            <tr>
                <td>Cara datang</td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" name="sendiri" id="metode_penanganan_dewasa_sendiri_1">
                    <label for="metode_penanganan_dewasa_sendiri_1">Sendiri</label>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" name="ambulans" id="metode_penanganan_dewasa_ambulans_1">
                    <label for="metode_penanganan_dewasa_ambulans_1">Ambulans</label>
                </td>
                <td class="col-2">
                    <input type="checkbox" class="custom-checkbox-success" name="diantar_polisi" id="metode_penanganan_dewasa_diantar_polisi_1">
                    <label for="metode_penanganan_dewasa_diantar_polisi_1">Diantar Polisi</label>
                </td>
                <td rowspan="2" colspan="2">
                    <label for="jam_penanganan_dewasa_1">Jam Penanganan</label>
                    <input type="text" class="form-control border-dark" name="jam_penanganan_dewasa_1" id="jam_penanganan_dewasa_1">
                </td>
                <td colspan="2">
                    <input type="checkbox" class="custom-checkbox-success" name="metode_penanganan_doa_1" value="doa" id="metode_penanganan_doa_1">
                    <label for="metode_penanganan_doa_1">Doa</label>
                    <input type="text" class="form-control border-dark" name="jam_doa_dewasa_1" id="jam_doa_dewasa_1">
                </td>
            </tr>

            <tr>
                <td>Jenis Kasus</td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-2">
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" name="jenis_kasus_dewasa_1" value="non_trauma" id="jenis_kasus_dewasa_non_trauma_1">
                            <label for="jenis_kasus_dewasa_non_trauma_1">Non Trauma</label>
                        </div>
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" name="jenis_kasus_dewasa_2" value="trauma" id="jenis_kasus_dewasa_trauma_1">
                            <label for="jenis_kasus_dewasa_trauma_1">Trauma</label>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" name="jenis_kasus_dewasa_3" value="kll" id="jenis_kasus_dewasa_kll_1">
                    <label for="jenis_kasus_dewasa_kll_1">KLL</label>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" name="jenis_kasus_dewasa_4" value="lain_lain" id="jenis_kasus_dewasa_lain_lain_1">
                    <label for="jenis_kasus_dewasa_lain_lain_1">Lain-lain</label>
                </td>
                <td colspan="2">
                    <label for="trage_sekunder_dewasa_1">Trage Sekunder</label>
                    <input type="text" class="form-control border-dark" name="trage_sekunder_dewasa_1" id="trage_sekunder_dewasa_1">
                </td>
            </tr>



            <tr class="text-center">
                <td>Pemeriksaan</td>
                <td>Kategori I</td>
                <td>Kategori II</td>
                <td>Kategori III</td>
                <td>Kategori IV</td>
                <td>Kategori V</td>
                <td colspan="2">Tanda Vital</td>
            </tr>

            <tr>
                <td>Jalan Nafas</td>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" name="sumbatan_total" id="sumbatan_total">
                            <label for="sumbatan_total">Sumbatan total</label>
                        </div>
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="sumbatan_sebagian_distress_berat" id="sumbatan_sebagian_distress_berat">
                            <label for="sumbatan_sebagian_distress_berat" class="col-10">Sumbatan sebagian dengan distress berat</label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column">
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" name="bebas" id="bebas_1">
                            <label for="bebas_1">Bebas</label>
                        </div>
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="sumbatan_sebagian_distress_sedang" id="sumbatan_sebagian_distress_sedang">
                            <label for="sumbatan_sebagian_distress_sedang" class="col-10">Sumbatan sebagian dengan distress sedang</label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column">
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" name="bebas_3" id="bebas_2">
                            <label for="bebas_2">Bebas</label>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <input type="checkbox" class="custom-checkbox-success" name="sumbatan_sebagian_distress_ringan" id="sumbatan_sebagian_distress_ringan">
                        <label for="sumbatan_sebagian_distress_ringan" class="col-10">Sumbatan sebagian dengan distress ringan</label>
                    </div>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" name="bebas4" id="bebas_3">
                    <label for="bebas_3">Bebas</label>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" name="bebas_5" id="bebas_4">
                    <label for="bebas_4">Bebas</label>
                </td>
                <td>
                    <label for="keadaan_umum">Keadaan Umum</label>
                    <textarea name="keadaan_umum" id="keadaan_umum" rows="4" class="form-control border-dark"></textarea>
                </td>
            </tr>

            <!-- table-2 -->
            <div class="row">
                <td class="text-center">
                    <div>Pernapasan</div>
                </td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-2 ">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="nafas_spotan_henti" id="nafas_spotan_henti">
                            </div>
                            <label for="nafas_spotan_henti" class="col-10">Berhenti nafas spontan / Hipoventilasi</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="distres_abdominal" id="distres_abdominal">
                            </div>
                            <label for="distres_abdominal">Distress pernafasan berat (pernafasan abdominal, retraksi dada berat (+), sianosisa akut) </label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="tidak_mampu_bicara" id="tidak_mampu_bicara">
                            </div>
                            <label for="tidak_mampu_bicara" class="col-10">Tidak mampu berbicara</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="frekuensi_nafas_kecil_10menit" id="frekuensi_nafas_kecil_10menit">
                            </div>
                            <label for="frekuensi_nafas_kecil_10menit" class="col-10"> Frekuensi nafas < 10 x/menit</label>
                        </div>
                    </div>
                </td>


                <td class="col-2">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="nafas_spontan_plus_1" id="nafas_spontan_plus_1">
                            </div>
                            <label for="nafas_spontan_plus_1">Nafas spontan (+)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="distress_pernafasan_moderate_1" id="distress_pernafasan_moderate_1">
                            </div>
                            <label for="distress_pernafasan_moderate_1" class="col-10">Distress pernafasan moderate (pernafasan abdominal, retraksi dada sedang (+), kulit pucat) </label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="bicara_hanya_satu_kata_1" id="bicara_hanya_satu_kata_1">
                            </div>
                            <label for="bicara_hanya_satu_kata_1" class="col-10"> Bicara hanya satu kata</label>
                        </div>
                    </div>
                </td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="nafas_spontan_plus_2" id="nafas_spontan_plus_2">
                            </div>
                            <label for="nafas_spontan_plus_2">Nafas spontan (+)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="distres_pernapasan_moderate_2" id="distres_pernapasan_moderate_2">
                            </div>
                            <label for="distres_pernapasan_moderate_2" class="col-10"> Distress pernafasan moderate (pernafasan abdominal, bicara pendek-pendek (+), kulit kemerahan) </label>
                        </div>
                    </div>
                </td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="nafas_spontan_plus_3" id="nafas_spontan_plus_3">
                            </div>
                            <label for="nafas_spontan_plus_3">Nafas spontan (+)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="distres_penapasan_mines_1" id="distres_penapasan_mines_1">
                            </div>
                            <label for="distres_penapasan_mines_1">Nafas spontan (-)</label>
                        </div>
                        <div class="d-flex align-items-start">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="dapat_berkomunikasi_baik_1" id="dapat_berkomunikasi_baik_1">
                            </div>
                            <label for="dapat_berkomunikasi_baik_1" class="col-10"> Dapat berkomunikasi baik (kalimat penuh)</label>
                        </div>
                    </div>
                </td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="nafas_spontan_plus_4" id="nafas_spontan_plus_4">
                            <label for="nafas_spontan_plus_4">Nafas spontan (+)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="distres_penapasan_mines_2" id="distres_penapasan_mines_2">
                            </div>
                            <label for="distres_penapasan_mines_2">Nafas spontan (-)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="dapat_berkomunikasi_baik_2" id="dapat_berkomunikasi_baik_2">
                            </div>
                            <label for="dapat_berkomunikasi_baik_2" class="col-10"> Dapat berkomunikasi baik (kalimat penuh)</label>
                        </div>
                    </div>
                </td>



                <td class="col-5">
                    <div class="d-flex gap-2 my-2 align-items-center">
                        <label for="suhu">Suhu</label>
                        <input type="text" class="form-control border-dark" name="suhu" id="suhu">
                        <span>&deg;C</span>
                    </div>
                    <div class="d-flex gap-2 my-2 align-items-center">
                        <label for="sa02">Sa02</label>
                        <input type="text" class="form-control border-dark" name="sa02" id="sa02">
                        <span>%</span>
                    </div>
                    <div class="d-flex gap-2 my-2 align-items-center">
                        <label for="frekuensi">Frekuensi</label>
                        <input type="text" class="form-control border-dark" name="frekuensi" id="frekuensi">
                    </div>
                    <div class="d-flex gap-2 my-2 align-items-center">
                        <label for="nadi">Nadi</label>
                        <input type="text" class="form-control border-dark" name="nadi" id="nadi">
                        <span>x/menit</span>
                    </div>
                </td>
                </tr>




                <tr>
                    <td class="text-center">
                        <div>Sirkulasi</div>
                    </td>
                    <td>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="henti_jantung_1" id="henti_jantung_1">
                                </div>
                                <label for="henti_jantung_1"> Henti jantung</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="tidak_mampu_bicara_1" id="tidak_mampu_bicara_1">
                                </div>
                                <label for="tidak_mampu_bicara_1" class="col-10">Tidak mampu berbicara</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="gangguan_hemodinamik_berat_1" id="gangguan_hemodinamik_berat_1">
                                </div>
                                <label for="gangguan_hemodinamik_berat_1" class="col-10"> Gangguan hemo dinamik berat (akral dingin, pucat, kebiruan, perfusi buruk)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="nadi_perifer_minus_1" id="nadi_perifer_minus_1">
                                </div>
                                <label for="nadi_perifer_minus_1">Nadi perifer (-)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="perdarahan_tdk_terkontrol_1" id="perdarahan_tdk_terkontrol_1">
                                </div>
                                <label for="perdarahan_tdk_terkontrol_1" class="col-10">Perdarahan berat tidak terkontrol</label>
                            </div>

                        </div>
                    </td>

                    <td>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="nadi_teraba_1" id="nadi_teraba_1">
                                </div>
                                <label for="nadi_teraba_1"> Nadi teraba</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="gangguan_hemodinamik_sedang_2" id="gangguan_hemodinamik_sedang_2">
                                </div>
                                <label for="gangguan_hemodinamik_sedang_2" class="col-10"> Gangguan hemo dinamik sedang (akral dingin, pucat, kulit basah)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="takikardi_moderate_1" id="takikardi_moderate_1">
                                </div>
                                <label for="takikardi_moderate_1" class="col-10"> Takikardi moderate</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="kehilangan_darah_1" id="kehilangan_darah_1">
                                </div>
                                <label for="kehilangan_darah_1" class="col-10">Kehilangan banyak darah</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="tanda_dehidrasi_plus_1" id="tanda_dehidrasi_plus_1">
                                </div>
                                <label for="tanda_dehidrasi_plus_1" class="col-10"> Tandadehidrasi berat (+)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="pengisian_kapiler_sedang_2" id="pengisian_kapiler_sedang_2">
                                </div>
                                <label for="pengisian_kapiler_sedang_2" class="col-10">Pengisian kapiler 2-4 detik</label>
                            </div>

                        </div>
                    </td>



                    <td>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_plus_3" id="sirkulasi_plus_3">
                                </div>
                                <label for="sirkulasi_plus_3">Sirkulasi (+)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="gangguan_ringan_3" id="gangguan_ringan_3">
                                </div>
                                <label for="gangguan_ringan_3" class="col-10">Gangguan hemo dinamik ringan (denyut nadi perifer teraba, kulit pucat, akral hangat)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="takikardi_ringan_1" id="takikardi_ringan_1">
                                </div>
                                <label for="takikardi_ringan_1" class="col-10">Takikardi ringan</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" name="tanda_dehidrasi_sedang_1" id="tanda_dehidrasi_sedang_1">
                                </div>
                                <label for="tanda_dehidrasi_sedang_1" class="col-10">Tandadehidrasi sedang (+)</label>
                            </div>
                        </div>
                    </td>


                    <td>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" id="nadi_teraba_plus_4_1" name="nadi_teraba_plus_4_1">
                                </div>
                                <label for="nadi_teraba_plus_4_1"> Nadi teraba</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" id="gangguan_hemodinamik_4_1" name="gangguan_hemodinamik_4_1">
                                </div>
                                <label class="col-10" for="gangguan_hemodinamik_4_1">Gangguan hemodinamik (-)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" id="tanpa_dinamik_teraba_4_1" name="tanpa_dinamik_4_1">
                                </div>
                                <label class="col-10" for="tanpa_dinamik_teraba_4_1"> Tanpa gangguan hemo dinamik</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" id="denyut_nadi_hangat_4_1" name="denyut_nadi_hangat_4_1">
                                </div>
                                <label class="col-10" for="denyut_nadi_hangat_4_1">Denyut nadi perifer teraba</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" id="kulit_pucat_4_1" name="kulit_pucat_4_1">
                                </div>
                                <label class="col-10" for="kulit_pucat_4_1"> Kulit pucat kemerahan, akral hangat</label>
                            </div>
                        </div>
                    </td>


                    <td>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" id="nadi_teraba_5_1" name="nadi_teraba_5_1">
                                </div>
                                <label for="nadi_teraba_5_1"> Nadi teraba</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" id="tanpa_gangguan_5_2" name="tanpa_gangguan_5_2">
                                </div>
                                <label class="col-10" for="tanpa_gangguan_5_2"> Tanpa gangguan hemo dinamik</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" id="denyut_nadi_5_3" name="denyut_nadi_5_3">
                                </div>
                                <label class="col-10" for="denyut_nadi_5_3"> Denyut nadi perifer teraba</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <input type="checkbox" class="custom-checkbox-success" id="kulit_kemerahan_akral_hangat_5_4" name="kulit_kemerahan_akral_hangat_5_4">
                                </div>
                                <label class="col-10" for="kulit_kemerahan_akral_hangat_5_4"> Kulit kemerahan, akral hangat</label>
                            </div>

                        </div>
                    </td>



                    <td>
                        <div class="d-flex gap-2 my-2 align-items-center">
                            <label for="">Nafas</label>
                            <input type="text" class="form-control border-dark" name="nafas_k">
                            <span>x/menit</span>
                        </div>
                        <div class="d-flex gap-2 my-2 align-items-center">
                            <label for="">TD</label>
                            <input type="text" class="form-control border-dark" name="td_K">
                            <span>mmHg</span>
                        </div>
                        <div class="d-flex gap-2 my-2 align-items-center flex-column">
                            <label for="">Riwayat Alergi</label>
                            <textarea name="riwayat_" id="" rows="3" class="form-control border-dark"></textarea>
                        </div>
                    </td>
                </tr>

        </table>


        <table class="table table-bordered border-dark">
            <tr>
                <td>Kesadaran</td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" id="gcs_less_9" name="gcs">
                    <label for="gcs_less_9">GCS &lt; 9</label>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" id="gcs_12" name="gcs12">
                    <label for="gcs_12">GCS 9-12</label>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" id="gcs_13" name="gcs13">
                    <label for="gcs_13">GCS &gt; 13</label>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" id="gcs_14" name="gcs14">
                    <label for="gcs_14">GCS 14</label>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" id="gcs_15" name="gcs_15">
                    <label for="gcs_15">GCS 15</label>
                </td>
                <td colspan="2">
                    <input type="checkbox" class="custom-checkbox-success" id="riwayat_alergi_dewasa" name="riwayat_alergi_dewasa">
                    <label for="riwayat_alergi_dewasa">Riwayat Alergi</label>
                </td>
            </tr>


            <tr>
                <td class="text-center">
                    <div>Tanda Lain</div>
                </td>
                <td>

                </td>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_penurunan_aktivitas" name="tanda_lain_penurunan_aktivitas">
                            </div>
                            <label for="tanda_lain_penurunan_aktivitas" class="col-10">Penurunan aktivitas berat (kontak mata (-), tegangan otot menurun)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_kontak_mata" name="tanda_lain_kontak_mata">
                            </div>
                            <label for="tanda_lain_kontak_mata" class="col-10">Kontak mata (-)
                                Nyeri hebat
                                Mengerang kesakitan
                                Gangguan neurovascular berat (nadi sukar diraba, akral dingin, sensasi rasa (-), pergerakan (-), pengisian kapiler)
                            </label>
                        </div>
                    </div>
                </td>
                <td class="col-2">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_nyeri_sedang" name="tanda_lain_nyeri_sedang">
                            </div>
                            <label for="tanda_lain_nyeri_sedang">Nyeri sedang – berat (pasien dapat menunjukkan letak nyeri, kulit tampak pucat, memohon-analgesia)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_kontak_mata_dipanggil" name="tanda_lain_kontak_mata_dipanggil">
                            </div>
                            <label for="tanda_lain_kontak_mata_dipanggil" class="col-10">Kontak mata saat dipanggil / terganggu</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_gangguan_neorovaskular" name="tanda_lain_gangguan_neorovaskular">
                            </div>
                            <label for="tanda_lain_gangguan_neorovaskular" class="col-10">Gangguan neorovaskular sedang, nadi teraba, akral dingin, sensasi rasa (+), pergerakan (+), pengisian kapiler ()</label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_nyeri_pasien" name="tanda_lain_nyeri_pasien">
                            </div>
                            <label for="tanda_lain_nyeri_pasien" class="col-10">Nyeri sedang (pasien sadar, kulit hangat kemerahan, meminta analgesia)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_tenang_kontak_mata" name="tanda_lain_tenang_kontak_mata">
                            </div>
                            <label for="tanda_lain_tenang_kontak_mata" class="col-10">Tenang, ada kontak mata</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_neurovascular_ringan" name="tanda_lain_neurovascular_ringan">
                            </div>
                            <label for="tanda_lain_neurovascular_ringan" class="col-10">Gangguan neurovascular ringan (nadi teraba, akral hangat, sensasi rasa (+), pergerakan (+), pengisian kapiler (normal))</label>
                        </div>
                    </div>
                </td>
                <td class="col-2">
                    <div class="d-flex align-items-start gap-2">
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_gejala_imunisasi" name="tanda_lain_gejala_imunisasi">
                        </div>
                        <label for="tanda_lain_gejala_imunisasi" class="col-10">Gejala klinis (-)
                            Rencana imunisasi
                            Nyeri telinga tidak demam
                            Sakit dengan gejala ringan
                            Lebam post trauma ringan
                        </label>
                    </div>
                </td>
                <td colspan="2">
                    <div class="d-flex gap-2 my-2 flex-column">
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" id="obat" name="obat_lainnya">
                            <label for="obat">Obat</label>
                        </div>
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" id="lain_lain" name="obat_lain_lain">
                            <label for="lain_lain">Lain-lain</label>
                        </div>
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" id="gcs" name="obat_gcs_lainnya">
                            <label for="gcs">Gcs</label>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="d-flex align-items-start">
                        <label for="respon_time">Respon Time</label>
                    </div>
                </td>
                <td>
                    <div class="d-flex alig-items-center gap-2">
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" id="immediate" name="immediate">
                        </div>
                        <label for="immediate">Immediate</label>
                    </div>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" id="under_10_minutes" name="10menit_under">
                    <label for="under_10_minutes">&lt; 10 menit</label>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" id="30_minutes" name="30menit_under">
                    <label for="30_minutes">30 menit</label>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" id="60_minutes" name="60menit_under">
                    <label for="60_minutes">60 menit</label>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" id="120_minutes" name="120menit_under">
                    <label for="120_minutes">120 menit</label>
                </td>
                <td></td>
            </tr>

            <tr>
                <td>Obserbasi</td>
                <td>R.Resusitasi</td>
                <td>R.Resusitasi/R.Obserbasi</td>
                <td>R.Obserbasi</td>
                <td>R.Obserbasi</td>
                <td>R.Obserbasi</td>
                <td class="col-2">Tanggal, <input type="date" name="tanggal_2" class="form-control border-dark" value="<?= date('Y-m-d'); ?>"></td>
            </tr>
        </table>

        <table class="table table-bordered border-dark">
            <tbody>
                <tr>
                    <td colspan="6">
                        <input type="checkbox" class="custom-checkbox-success" id="emergency3" name="emergency3">
                        <label for="emergency3">Emergency</label>
                    </td>
                    <td rowspan="2" class="text-center" style="width: 350px;">
                        <label for="petugas_triage">Petugas Triage</label>
                        <div>
                            <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat_pengkaji" />
                        </div>
                        <div class="mt-3">
                            <select type="select" name="perawat_pengkaji" id="perawat_pengkaji" class="form-select perawat" style="width: 100%;"></select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <input type="checkbox" class="custom-checkbox-success" id="false_emergency3" name="false_emergency3">
                        <label for="false_emergency3">False Emergency</label>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<script>
    const mode = "<?= $mode; ?>";
    let dataListPerawat = [];
    let dataDokter = [];

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);


        $('#dokter_pengkaji').prop('disabled', false)
        $('#dokter_pengkaji').select2('open')
        $('#dokter_pengkaji').select2('close')
        if (mode === "lihat")
            $('#dokter_pengkaji').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#dokter_pengkaji').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_pengkaji')
                }
            })
        }, 1000)

        $('#perawat_pengkaji').prop('disabled', false)
        $('#perawat_pengkaji').select2('open')
        $('#perawat_pengkaji').select2('close')
        if (mode === "lihat")
            $('#perawat_pengkaji').prop('disabled', true)

        setTimeout(() => {
            dataListPerawat?.map(v => {
                if (v.text === $('#perawat_pengkaji').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_pengkaji')
                }
            })
        }, 1000)

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


        $('#dokter_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_pengkaji')
        });

        $('#perawat_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_pengkaji')
        });

        //================ new =====================//
    });
</script>