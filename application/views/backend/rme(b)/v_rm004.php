<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3" id="anak">
            <tr>
                <td class="col-5">
                    <div class=" d-flex align-items-center flex-column ">
                        <div class="d-flex gap-2">
                            <img src="<?= $images; ?>" alt="Logo">
                            <div>
                                <h4><?= $site_title; ?></h4>
                                <div><?= $lokasi; ?></div>
                                <div><?= $telepon; ?></div>
                                <div><?= $email; ?></div>
                            </div>
                        </div>
                </td>

                <td class="col-4">
                    <div class="text-center">
                        <h4>FORMULIR TRIASE</h4>
                    </div>
                </td>


                <td class="col">
                    <div class="form-group">
                        <label for="">No Rm :</label>
                        <input type="text" class="form-control border-dark" name="no_rm">
                    </div>
                    <div class="form-group">
                        <label for="">Nama :</label>
                        <input type="text" class="form-control border-dark" name="nama_pasien">
                    </div>
                    <div class="form-group">
                        <label for="">Tgl. Lahir :</label>
                        <input type="date" class="form-control border-dark" name="tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="">Umur :</label>
                        <input type="text" class="form-control border-dark" name="umur">
                    </div>
                </td>
            </tr>

            </tbody>
        </table>


        <table class="table-bordered border-dark table">
            <tr>
                <td colspan="6">
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="flex-shrink-0">Tanggal / Jam datang</label>
                        <input type="text" name="tgl_admit" id="" class="form-control border-dark">
                    </div>
                </td>
            </tr>

            <tr>
                <td>Cara datang</td>
                <td colspan="4">
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <div class="d-flex align-items-center gap-2 col-2">
                            <input type="checkbox" name="datang_sendiri" id="datang_sendiri" class="custom-checkbox-success">
                            <label for="datang_sendiri">sendiri</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4">
                            <input type="checkbox" name="datang_teman" id="datang_teman" class="custom-checkbox-success">
                            <label for="datang_teman" class="flex-shrink-0">Diantar keluarga/teman</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-3">
                            <input type="checkbox" name="datang_polisi" id="datang_polisi" class="custom-checkbox-success">
                            <label for="datang_polisi">Diantar Polisi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4">
                            <input type="checkbox" name="datang_masyarakat" id="datang_masyarakat" class="custom-checkbox-success">
                            <label for="datang_masyarakat">Diantar Masyarakat</label>
                        </div>
                    </div>
                </td>
                <td rowspan="2">
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="doa" id="doa" class="custom-checkbox-success">
                            <label for="doa">Doa (hitam)</label>
                        </div>
                        <div class="form-group border-dark">
                            <label for="jam_doa" class="flex-shrink-0">Jam doa</label>
                            <input type="time" name="jam_doa" id="jam_doa" class="form-control border-dark">
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Jenis Kasus</td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-2">
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" name="jenis_kasus_dewasa_non_trauma" value="non_trauma" id="jenis_kasus_dewasa_non_trauma_non_trauma">
                            <label for="jenis_kasus_dewasa_non_trauma_non_trauma">Non Trauma</label>
                        </div>
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" name="jenis_kasus_dewasa_2" value="trauma" id="jenis_kasus_dewasa_trauma">
                            <label for="jenis_kasus_dewasa_trauma">Trauma</label>
                        </div>
                    </div>
                </td>
                <td colspan="3">
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <div class="d-flex align-items-center gap-2 col-5">
                            <input type="checkbox" class="custom-checkbox-success" name="jenis_kasus_kecelakaan_air" id="enis_kasus_kecelakaan_air">
                            <label for="enis_kasus_kecelakaan_air">Kecelakaan air</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-5">
                            <input type="checkbox" class="custom-checkbox-success" name="jenis_kasus_kecelakaan_kerja" id="enis_kasus_kecelakaan_kerja">
                            <label for="enis_kasus_kecelakaan_kerja">Kecelakaan kerja</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-5">
                            <input type="checkbox" class="custom-checkbox-success" name="jenis_kasus_kecelakaan_lalu_lintas" id="enis_kasus_kecelakaan_lalu_lintas">
                            <label for="enis_kasus_kecelakaan_lalu_lintas">Kecelakaan lalu lintas</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 col">
                            <input type="checkbox" class="custom-checkbox-success" name="jenis_kasus_kecelakaan_rmh_tangga" id="enis_kasus_kecelakaan_rmh_tangga">
                            <label for="enis_kasus_kecelakaan_rmh_tangga">Kecelakaan Rumah Tangga</label>
                        </div>
                    </div>
                </td>

            </tr>



            <tr class="text-center">
                <td>Pemeriksaan</td>
                <td>Kategori I</td>
                <td>Kategori II</td>
                <td>Kategori III</td>
                <td>Kategori IV</td>
                <td>Kategori V</td>
            </tr>

            <tr>
                <td class="text-center">KESADARAN</td>
                <?php
                $levels = ['I', 'II', 'III', 'IV', 'V'];
                $options = ['A', 'V', 'P', 'U'];
                ?>

                <?php foreach ($levels as $level): ?>
                    <td>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <?php foreach ($options as $opt): ?>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox"
                                        name="kesadaran_<?= $level ?>_<?= $opt ?>"
                                        id="kesadaran_<?= $level ?>_<?= $opt ?>"
                                        class="custom-checkbox-success">
                                    <label for="kesadaran_<?= $level ?>_<?= $opt ?>"><?= $opt ?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </td>
                <?php endforeach; ?>

            </tr>

            <tr>
                <td class="text-center">
                    <div>Jalan Nafas</div>
                    <div>(Air Ways)</div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="sumbatan_total" id="sumbatan_total">
                            <label for="sumbatan_total">Sumbatan total</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="sumbatan_sebagian" id="sumbatan_sebagian">
                            <label for="sumbatan_sebagian">Sumbatan Sebagian</label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column">
                        <div>
                            <input type="checkbox" class="custom-checkbox-success" name="bebas" id="bebas_1">
                            <label for="bebas_1">Bebas</label>
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
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" name="bebas4" id="bebas_3">
                    <label for="bebas_3">Bebas</label>
                </td>
                <td>
                    <input type="checkbox" class="custom-checkbox-success" name="bebas_5" id="bebas_4">
                    <label for="bebas_4">Bebas</label>
                </td>

            </tr>

            <!-- table-2 -->
            <div class="row">
                <td class="text-center">
                    <div>PERNAPASAN</div>
                    <div>(breathing)</div>
                </td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-2 ">
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="nafas_hipoventilasi" id="nafas_hipoventilasi">
                            <label for="nafas_hipoventilasi" class="col-10">Berhenti napas / Hipoventilasi</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="distress_pernafasan_berat" id="distress_pernafasan_berat">
                            <label for="distress_pernafasan_berat" class="col-10">Distress pernapasan berat(pernapasan abdominal, retraksidada berat (+), sianosis akut)
                            </label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="tdk_mampu_berbicara" id="tdk_mampu_berbicara">
                            <label for="tdk_mampu_berbicara">Tidak mampu berbicara</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="fekuensi_napas_kcl_10" id="fekuensi_napas_kcl_10">
                            <label for="fekuensi_napas_kcl_10" class="col-10">Frekuensi napas < 10x / mnt</label>
                        </div>
                    </div>
                </td>


                <td class="col-2">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="nafas_spontan_plus_1" id="nafas_spontan_plus_1">
                            <label for="nafas_spontan_plus_1">Nafas spontan (+)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="distress_pernafasan_sedang_1" id="distress_pernafasan_sedang_1">
                            <label for="distress_pernafasan_sedang_1" class="col-10">Distress pernafasan sedang (otot diafragma sedang, retraksi sedang, kulit pucat)</label>
                        </div>
                    </div>
                </td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="nafas_spontan_plus_2" id="nafas_spontan_plus_2">
                            <label for="nafas_spontan_plus_2">Nafas spontan (+)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="distress_pernafasan_ringan_2" id="distress_pernafasan_ringan_2">
                            <label for="distress_pernafasan_ringan_2" class="col-10">Distress pernafasan ringan (otot diafragma ringan, retraksi ringan, kulit kemerahan)</label>
                        </div>
                    </div>
                </td>
                <td class="col-2">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="nafas_spontan_plus_3" id="nafas_spontan_plus_3">
                            <label for="nafas_spontan_plus_3">Nafas spontan (+)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="nafas_distres_minus_3" id="nafas_distres_minus_3">
                            <label for="nafas_distres_minus_3" class="col-10">Distress pernapasan (-)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="dapat_komunikasi_pernafasan_3" id="dapat_komunikasi_pernafasan_3">
                            <label for="dapat_komunikasi_pernafasan_3" class="col-10">Dapat berkomunikasi baik ( kalimat penuh )
                            </label>
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
                            <input type="checkbox" class="custom-checkbox-success" name="nafas_distres_minus_4" id="nafas_distres_minus_4">
                            <label for="nafas_distres_minus_4" class="col-10">Distress pernapasan (-)</label>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" class="custom-checkbox-success" name="dapat_komunikasi_pernafasan_4" id="dapat_komunikasi_pernafasan_4">
                            <label for="dapat_komunikasi_pernafasan_4" class="col-10">Dapat berkomunikasi baik ( kalimat penuh )
                            </label>
                        </div>
                    </div>
                </td>

                </tr>




                <tr>
                    <td class="text-center">
                        <div>SIRKULASI</div>
                        <div>(circulation)</div>
                    </td>
                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_henti_jantung" id="sirkulasi_henti_jantung">
                                <label for="sirkulasi_henti_jantung">Henti Jantung</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_tdk_mampu_bicara" id="sirkulasi_tdk_mampu_bicara">
                                <label for="sirkulasi_tdk_mampu_bicara" class="col-10">TIdak mampu berbicara</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_gangguan" id="sirkulasi_gangguan">
                                <label for="sirkulasi_gangguan" class="col-10">Gangguan hemodinamik berat(Akral dingin, pucat, kebiruan, perfusi buruk)
                                </label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_pendarahan" id="sirkulasi_pendarahan">
                                <label for="sirkulasi_pendarahan" class="col-10">Perdarahan berat tidak terkontrol</label>
                            </div>

                        </div>
                    </td>

                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_nadi_teraba" id="sirkulasi_nadi_teraba">
                                <label for="sirkulasi_nadi_teraba">Nadi Teraba</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_gangguan_haemodinamik" id="sirkulasi_gangguan_haemodinamik">
                                <label for="sirkulasi_gangguan_haemodinamik" class="col-10">Gangguan haemodinamik sedang (Akral dingin, pucat, kulit basah)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_takikardi" id="sirkulasi_takikardi">
                                <label for="sirkulasi_takikardi" class="col-10">Takikardi sedang</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_hilang_darah" id="sirkulasi_hilang_darah">
                                <label for="sirkulasi_hilang_darah" class="col-10">Kehilangan banyak darah</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_dehidrasi_berat" id="sirkulasi_dehidrasi_berat">
                                <label for="sirkulasi_dehidrasi_berat" class="col-10">Tanda dehidrasi berat (+)</label>
                            </div>

                        </div>
                    </td>



                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_hadmodinaik_2" id="sirkulasi_hadmodinaik_2">
                                <label for="sirkulasi_hadmodinaik_2" class="col-10">Gangguan haemodinamik ringan (Denyut nadi perifer teraba, kulit pucat, akral hangat)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_takikardia_ringan_2" id="sirkulasi_takikardia_ringan_2">
                                <label for="sirkulasi_takikardia_ringan_2" class="col-10">Takikardia ringan</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="sirkulasi_dehidrasi_2" id="sirkulasi_dehidrasi_2">
                                <label for="sirkulasi_dehidrasi_2" class="col-10">Tanda dehidrasi sedang (+)</label>
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" id="sirkulasi_nadi_teraba_4" name="sirkulasi_nadi_teraba_4">
                                <label for="sirkulasi_nadi_teraba_4">Nadi Teraba</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="gangguan_hemodinamik_4" name="gangguan_hemodinamik_4">
                                <label class="col-10" for="gangguan_hemodinamik_4">Tanpa gangguan haemodinamik</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="nadi_perifer_4" name="nadi_perifer_4">
                                <label class="col-10" for="nadi_perifer_4"> Denyut nadi perifer teraba</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="kulit_kemerahan_akral_hangat_4" name="kulit_kemerahan_akral_4">
                                <label class="col-10" for="kulit_kemerahan_akral_hangat_4">Kulit pucat/kemerahan </label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="akhral_hangat_4" name="akhral_hangat_4">
                                <label class="col-10" for="akhral_hangat_4">Akral Hangat</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <input type="checkbox" class="custom-checkbox-success" id="sirkulasi_nadi_teraba_5" name="sirkulasi_nadi_teraba_5">
                                <label for="sirkulasi_nadi_teraba_5">Nadi Teraba</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="gangguan_hemodinamik_5" name="gangguan_hemodinamik_5">
                                <label class="col-10" for="gangguan_hemodinamik_5">Tanpa gangguan haemodinamik</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="nadi_perifer_5" name="nadi_perifer_5">
                                <label class="col-10" for="nadi_perifer_5"> Denyut nadi perifer teraba</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="kulit_kemerahan_akral_hangat_5" name="kulit_kemerahan_akral_5">
                                <label class="col-10" for="kulit_kemerahan_akral_hangat_5">Kulit pucat/kemerahan </label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="akhral_hangat_5" name="akhral_hangat_5">
                                <label class="col-10" for="akhral_hangat_5">Akral Hangat</label>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="text-center">
                        <div>TANDA LAIN</div>
                        <div>(Disability)</div>
                    </td>
                    <td></td>
                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_penurunan_aktivitas" name="tanda_lain_penurunan_aktivitas">
                                <label for="tanda_lain_penurunan_aktivitas" class="col-10">Penurunan aktivitas berat (kontak mata (-), tegangan otot menurun)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_penurunan_nyeri_hebat" name="tanda_lain_penurunan_nyeri_hebat">
                                <label for="tanda_lain_penurunan_nyeri_hebat" class="col-10">Nyeri hebat (+)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_penurunan_mengerang_kesakitan" name="tanda_lain_penurunan_mengerang_kesakitan">
                                <label for="tanda_lain_penurunan_mengerang_kesakitan" class="col-10">Mengerang kesakitan</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_penurunan_gangguan_neurovascular" name="tanda_lain_penurunan_gangguan_neurovascular">
                                <label for="tanda_lain_penurunan_gangguan_neurovascular" class="col-10">Gangguan neurovascular berat (nadi sukar diraba, akral dingin, sensasi rasa (-), pergerakan (-), pengisian kapiler)</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_nyeri_anelgesia" name="tanda_lain_nyeri_anelgesia">
                                <label for="tanda_lain_nyeri_anelgesia" class="col-10">Nyeri sedang- berat (pasien dapat menunjukkan letak nyeri, kulit tampak pucat, memohon analgesia)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_penurunan_kontak_terganggu" name="tanda_lain_penurunan_kontak_terganggu">
                                <label for="tanda_lain_penurunan_kontak_terganggu" class="col-10">Kontak mata saat dipanggil/ terganggu</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_penurunan_kapiler_2" name="tanda_lain_penurunan_kapiler_2">
                                <label for="tanda_lain_penurunan_kapiler_2" class="col-10">Gangguan neurovascular sedang (nadi teraba, akral dingin, sensasi rasa (+), pergerakan (+), pengisian kapiler)</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_nyeri_anelgesia_cols4" name="tanda_lain_nyeri_anelgesia_cols4">
                                <label for="tanda_lain_nyeri_anelgesia_cols4" class="col-10">Nyeri sedang- berat (pasien dapat menunjukkan letak nyeri, kulit tampak pucat, memohon analgesia)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_kontak_mata" name="tanda_lain_kontak_mata">
                                <label for="tanda_lain_kontak_mata" class="col-10">Tenang, ada kontak mata</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_nadi_teraba_cols4" name="tanda_lain_nadi_teraba_cols4">
                                <label for="tanda_lain_nadi_teraba_cols4" class="col-10">Gangguan neurovascular ringan (nadi teraba, akral hangat, sensasi rasa (+), pergerakan (+), pengisian kapiler normal)</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_gejala_klinis" name="tanda_lain_gejala_klinis">
                                <label for="tanda_lain_gejala_klinis" class="col-10">Gejala Klinis (-)</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_imunisasi" name="tanda_lain_imunisasi">
                                <label for="tanda_lain_imunisasi" class="col-10">Rencana imunisasi</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_ringan_cols5" name="tanda_lain_ringan_cols5">
                                <label for="tanda_lain_ringan_cols5" class="col-10">Nyeri ringan </label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_tdk_demam_cols5" name="tanda_lain_tdk_demam_cols5">
                                <label for="tanda_lain_tdk_demam_cols5" class="col-10">Demam / Tidak Demam</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" class="custom-checkbox-success" id="tanda_lain_tdk_lkpost_cols5" name="tanda_lain_tdk_lkpost_cols5">
                                <label for="tanda_lain_tdk_lkpost_cols5" class="col-10">Luka post trauma ringan</label>
                            </div>
                            <input type="text" name="input_tanda_lain_1" id="" class="form-control border-dark">
                            <input type="text" name="input_tanda_lain_2" id="" class="form-control border-dark">
                            <input type="text" name="input_tanda_lain_3" id="" class="form-control border-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">RESPON TIME</td>
                    <td>
                        <input type="checkbox" class="custom-checkbox-success" id="Segera" name="Segera">
                        <label for="Segera">Segera</label>
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
                </tr>
                <tr>
                    <td class="text-center">LABEL WARNA</td>
                    <td>
                        <input type="checkbox" class="custom-checkbox-success" id="label_merah_1" name="label_merah_1">
                        <label for="label_merah_1">Merah</label>
                    </td>
                    <td>
                        <input type="checkbox" class="custom-checkbox-success" id="label_merah_2" name="label_merah_2">
                        <label for="label_merah_2">Merah</label>
                    </td>
                    <td>
                        <input type="checkbox" class="custom-checkbox-success" id="label_kuning_1" name="label_kuning_1">
                        <label for="label_kuning_1">Kuning</label>
                    </td>
                    <td>
                        <input type="checkbox" class="custom-checkbox-success" id="label_kuning_2" name="label_kuning_2">
                        <label for="label_kuning_2">Kuning</label>
                    </td>
                    <td>
                        <input type="checkbox" class="custom-checkbox-success" id="label_hijau_2" name="label_hijau_2">
                        <label for="label_hijau_2">hijau</label>
                    </td>
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
                        <div class="my-2 d-flex align-items-center gap-2">
                            <label for="">Tanggal</label>
                            <input type="date" name="tgl_triage" class="form-control border-dark">
                        </div>
                        <label for="petugas_triage">Petugas Triage</label>
                        <div class="text-center my-2">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat" />
                        </div>
                        <select type="select" name="petugas_perawat" id="perawat" class="form-select perawat"></select>
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
    let dataPerawat = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listPerawatAPI()

        $('#perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat')
        });
    });

    function cbCommon(data) {
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