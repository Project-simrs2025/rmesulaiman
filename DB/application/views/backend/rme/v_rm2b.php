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
                <td>Metode Penanganan</td>
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
                <td>JalanNafas</td>
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
                    <div>P</div>
                    <div>E</div>
                    <div>R</div>
                    <div>N</div>
                    <div>A</div>
                    <div>P</div>
                    <div>A</div>
                    <div>S</div>
                    <div>A</div>
                    <div>N</div>
                </td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-2 ">
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="nafas_spontan_minus" id="nafas_spontan_minus">
                            <label for="nafas_spontan_minus" class="col-10">Nafas spontan (-)</label>
                        </div>
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="hipoventilasi" id="hipoventilasi">
                            <label for="hipoventilasi">Hipoventilasi</label>
                        </div>
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="distress_pernafasan_berat" id="distress_pernafasan_berat">
                            <label for="distress_pernafasan_berat" class="col-10">Distress pernafasan berat (otot diafragma berat, retraksi berat, sianosis akut)</label>
                        </div>
                    </div>
                </td>


                <td class="col-2">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="nafas_spontan_plus_1" id="nafas_spontan_plus_1">
                            <label for="nafas_spontan_plus_1">Nafas spontan (+)</label>
                        </div>
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="distress_pernafasan_sedang_1" id="distress_pernafasan_sedang_1">
                            <label for="distress_pernafasan_sedang_1" class="col-10">Distress pernafasan sedang (otot diafragma sedang, retraksi sedang, kulit pucat)</label>
                        </div>
                    </div>
                </td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="nafas_spontan_plus_2" id="nafas_spontan_plus_2">
                            <label for="nafas_spontan_plus_2">Nafas spontan (+)</label>
                        </div>
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="distress_pernafasan_ringan_2" id="distress_pernafasan_ringan_2">
                            <label for="distress_pernafasan_ringan_2" class="col-10">Distress pernafasan ringan (otot diafragma ringan, retraksi ringan, kulit kemerahan)</label>
                        </div>
                    </div>
                </td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="nafas_spontan_plus_3" id="nafas_spontan_plus_3">
                            <label for="nafas_spontan_plus_3">Nafas spontan (+)</label>
                        </div>
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="tidak_ada_distress_pernafasan_3" id="tidak_ada_distress_pernafasan_3">
                            <label for="tidak_ada_distress_pernafasan_3" class="col-10">Tidak ada distress pernafasan (otot diafragma normal, retraksi tidak ada)</label>
                        </div>
                    </div>
                </td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="nafas_spontan_plus_4" id="nafas_spontan_plus_4">
                            <label for="nafas_spontan_plus_4">Nafas spontan (+)</label>
                        </div>
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" name="tidak_ada_distress_pernafasan_4" id="tidak_ada_distress_pernafasan_4">
                            <label for="tidak_ada_distress_pernafasan_4" class="col-10">Tidak ada distress pernafasan (retraksi tidak ada, otot diafragma normal)</label>
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
                        <div>S</div>
                        <div>I</div>
                        <div>R</div>
                        <div>K</div>
                        <div>U</div>
                        <div>L</div>
                        <div>A</div>
                        <div>S</div>
                        <div>I</div>
                    </td>
                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="absen_sirkulasi_1" id="absen_sirkulasi_1">
                                <label for="absen_sirkulasi_1">Absen sirkulasi</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="signifikan_bradikardia_1" id="signifikan_bradikardia_1">
                                <label for="signifikan_bradikardia_1" class="col-10">Signifikan bradikardia Ch. < 60 padabayi</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="gangguan_hemodinamik_berat_1" id="gangguan_hemodinamik_berat_1">
                                <label for="gangguan_hemodinamik_berat_1" class="col-10">Gangguan hemodinamik berat</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="nadi_perifer_minus_1" id="nadi_perifer_minus_1">
                                <label for="nadi_perifer_minus_1">Nadi perifer (-)</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="kulit_pucat_akral_dingin_1" id="kulit_pucat_akral_dingin_1">
                                <label for="kulit_pucat_akral_dingin_1" class="col-10">Kulit pucat, akral dingin, bintik-bintik merah pada ekstremitas</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="takikardia_berat_1" id="takikardia_berat_1">
                                <label for="takikardia_berat_1" class="col-10">Takikardia berat</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="pengisian_kapiler_1" id="pengisian_kapiler_1">
                                <label for="pengisian_kapiler_1" class="col-10">Pengisian kapiler>4 detik perdarahan tidak terkontrol</label>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_sirkulasi_2" id="sirkulasi_sirkulasi_2">
                                <label for="sirkulasi_sirkulasi_2">Sirkulasi (+)</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="gangguan_hemodinamik_sedang_2" id="gangguan_hemodinamik_sedang_2">
                                <label for="gangguan_hemodinamik_sedang_2" class="col-10">Gangguan hemodinamik sedang</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="nadi_sirkulasi_lemah_2" id="nadi_sirkulasi_lemah_2">
                                <label for="nadi_sirkulasi_lemah_2" class="col-10">Nadi brachii lemah</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="kulit_pucat_sirkulasi_dingin_2" id="kulit_pucat_sirkulasi_dingin_2">
                                <label for="kulit_pucat_sirkulasi_dingin_2" class="col-10">Kulit pucat, akral dingin</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="takikardia_sedang_2" id="takikardia_sedang_2">
                                <label for="takikardia_sedang_2" class="col-10">Takikardia sedang</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="pengisian_kapiler_sedang_2" id="pengisian_kapiler_sedang_2">
                                <label for="pengisian_kapiler_sedang_2" class="col-10">Pengisian kapiler 2-4 detik</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="tanda_dehidrasi_6_2" id="tanda_dehidrasi_6_2">
                                <label for="tanda_dehidrasi_6_2" class="col-10">>6 tanda dehidrasi</label>
                            </div>
                        </div>
                    </td>



                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_plus_3" id="sirkulasi_plus_3">
                                <label for="sirkulasi_plus_3">Sirkulasi (+)</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="gangguan_ringan_3" id="gangguan_ringan_3">
                                <label for="gangguan_ringan_3" class="col-10">Gangguan hemodinamik ringan</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="nadi_teraba_3" id="nadi_teraba_3">
                                <label for="nadi_teraba_3" class="col-10">Nadi perifer teraba</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="kulit_pucat_hangat_3" id="kulit_pucat_hangat_3">
                                <label for="kulit_pucat_hangat_3" class="col-10">Kulit pucat, akral hangat</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="takikardia_ringan_3" id="takikardia_ringan_3">
                                <label for="takikardia_ringan_3" class="col-10">Takikardia ringan</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="tanda_dehidrasi_3_6" id="tanda_dehidrasi_3_6">
                                <label for="tanda_dehidrasi_3_6" class="col-10">3-6 tanda dehidrasi</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" name="tanda_dehidrasi_lebih_6" id="tanda_dehidrasi_lebih_6">
                                <label for="tanda_dehidrasi_lebih_6" class="col-10">>6 tanda dehidrasi</label>
                            </div>
                        </div>
                    </td>


                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" id="sirkulasi_plus_4_1" name="sirkulasi_plus_4_1">
                                <label for="sirkulasi_plus_4_1">Sirkulasi (+)</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" id="gangguan_hemodinamik_4_1" name="gangguan_hemodinamik_4_1">
                                <label class="col-10" for="gangguan_hemodinamik_4_1">Gangguan hemodinamik (-)</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" id="nadi_perifer_teraba_4_1" name="nadi_perifer_4_1">
                                <label class="col-10" for="nadi_perifer_teraba_4_1">Nadi perifer teraba</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" id="kulit_kemerahan_akral_hangat_4_1" name="kulit_kemerahan_akral_4_1">
                                <label class="col-10" for="kulit_kemerahan_akral_hangat_4_1">Kulit kemerahan, akral hangat</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_dehidrasi_4_1" name="tanda_dehidrasi_4_1">
                                <label class="col-10" for="tanda_dehidrasi_4_1">&lt; 3 tanda dehidrasi</label>
                            </div>
                        </div>
                    </td>


                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" id="sirkulasi_plus_10_1" name="sirkulasi_sirkulasi_10_1">
                                <label for="sirkulasi_plus_10_1">Sirkulasi (+)</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" id="gangguan_hemodinamik_10_1" name="gangguan_sirkulasi_10_1">
                                <label class="col-10" for="gangguan_hemodinamik_10_1">Gangguan hemodinamik (-)</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" id="nadi_perifer_teraba_10_1" name="nadi_sirkulasi_10_1">
                                <label class="col-10" for="nadi_perifer_teraba_10_1">Nadi perifer teraba</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" id="kulit_kemerahan_akral_hangat_10_1" name="kulit_sirkulasi_10_1">
                                <label class="col-10" for="kulit_kemerahan_akral_hangat_10_1">Kulit kemerahan, akral hangat</label>
                            </div>
                            <div class="d-flex align-items-start">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_dehidrasi_10_1" name="tanda_sirkulasi_10_1">
                                <label class="col-10" for="tanda_dehidrasi_10_1">Tanda dehidrasi (-)</label>
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
                    <input type="checkbox" class="custom-checkbox-success" id="mak" name="gcmakan">
                    <label for="mak">Makanan</label>
                </td>
            </tr>


            <tr>
                <td class="text-center">
                    <div>T</div>
                    <div>A</div>
                    <div>N</div>
                    <div>D</div>
                    <div class="mb-2">A</div>
                    <div>L</div>
                    <div>A</div>
                    <div>I</div>
                    <div>N</div>
                </td>
                <td>
                    <div class="d-flex align-items-start">
                        <input type="checkbox" class="custom-checkbox-success" id="kejag_sedang_berlangsung" name="kejang_sedang">
                        <label for="kejag_sedang_berlangsung" class="col-10">Kejang sedang berlangsung respon nyeri (+) Trauma kepala berat</label>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-start">
                        <input type="checkbox" class="custom-checkbox-success" id="gelisah_irritable" name="kondisi2">
                        <label for="gelisah_irritable" class="col-10">Gelisah Irritable Demam dengan tanda-tanda kejang sakit kepala kaku leher Bayi usia &lt; 28 hari</label>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column">
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" id="apatis" name="kondisi3">
                            <label for="apatis">Apatis</label>
                        </div>
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="custom-checkbox-success" id="somnolen_nyeri_perut" name="somnolen">
                            <label for="somnolen_nyeri_perut" class="col-10">Somnolen Nyeri perut hebat Fraktur ekstremitas Laserasi kulit Luka kotor</label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-start">
                        <input type="checkbox" class="custom-checkbox-success" id="cedera_tanpa_penurunan_kesadaran" name="kondisi4">
                        <label for="cedera_tanpa_penurunan_kesadaran" class="col-10">Cedera tanpa penurunan kesadaran Nyeri abdomen tidak hebat Nyeri sedang Dislokasi sendi Inflamasi / benda asing pada mata Infeksi paru demam subfebris</label>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-start">
                        <input type="checkbox" class="custom-checkbox-success" id="gejala_klinim_negatif" name="kondisi5">
                        <label for="gejala_klinim_negatif" class="col-10">Gejala klinis (-) Rencana imunisasi Nyeri telinga tidak demam Sakit dengan gejala ringan Lebam post trauma ringan</label>
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
                    <input type="checkbox" class="custom-checkbox-success" id="immediate" name="immediate">
                    <label for="immediate">Immediate</label>
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
                        <div class="mt-5">
                            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                style="width: 350px; height:200px" data-input-name="image_drawer_state_image_1" />
                            <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                                value="" />
                            <div>Nama dan Tanda Tangan</div>
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

        <script>
            $(document).delay(1000).queue(function() {
                callMarkerManager();
            });

            function cbCommon(data) {
                populateFormFields(data);
            }
        </script>