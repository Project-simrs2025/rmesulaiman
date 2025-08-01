<div class="row">
    <table class="table table-bordered border-dark">
        <tr>
            <td align="center">
                PENILAIAN PRA
                ANESTESI DAN SEDASI
            </td>
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
    </table>
</div>

<div class="row">
    <table class="table table-borderless">
        <tr>
            <td colspan="2">
                <div class="row">
                    <b class="text-decoration-underline">SOSIAL </b>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-md-1">Menikah</div> :
                        <div class="col-md-5 align-items-center d-flex gap-2">
                            <input type="checkbox" name="ya_menikah" id="ya_menikah" class="custom-checkbox-success">
                            <label for="ya_menikah">Y</label>
                            <input type="checkbox" name="tidak_menikah" id="tidak_menikah" class="custom-checkbox-success">
                            <label for="tidak_menikah">T</label>
                        </div>
                        <div>Pekerjaan : <?= $nama_pekerjaan; ?></div>
                    </div>
                </div>

                <div class="row my-2">
                    <b class="text-decoration-underline">KEBIASAAN</b>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-md-1">Merokok</div> :
                        <div class="col-md-5 align-items-center d-flex gap-2">
                            <input type="checkbox" name="ya_Merokok" id="ya_Merokok" class="custom-checkbox-success">
                            <label for="ya_Merokok">Y</label>
                            <input type="checkbox" name="tidak_Merokok" id="tidak_Merokok" class="custom-checkbox-success">
                            <label for="tidak_Merokok">T</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-4">Sebanyak :</label>
                            <input type="text" name="banyak_rokok" id="banyak_rokok" class="form-control border-dark">
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-md-1">Alkohol</div> :
                        <div class="col-md-5 align-items-center d-flex gap-2">
                            <input type="checkbox" name="ya_Alkohol" id="ya_Alkohol" class="custom-checkbox-success">
                            <label for="ya_Alkohol">Y</label>
                            <input type="checkbox" name="tidak_Alkohol" id="tidak_Alkohol" class="custom-checkbox-success">
                            <label for="tidak_Alkohol">T</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-4">Sebanyak :</label>
                            <input type="text" name="banyak_alkohol" id="banyak_alkohol" class="form-control border-dark">
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="d-flex">
                        <b class="text-decoration-underline">PENGOBATAN</b>
                        <span>(Sebutkan dosis atau jumlah pil perhari)</span>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center gap-2">
                            <label for="obat_diminum" class="col-3">Obat yang biasa diminum:</label>
                            <input type="text" name="obat_diminum" id="obat_diminum" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <label for="" class="col-5">Penggunaan Aspirin Rutin</label> <span class="mx-2">:</span>
                        <div class="col-md-5 align-items-center d-flex gap-2">
                            <input type="checkbox" name="ya_Aspirin" id="ya_Aspirin" class="custom-checkbox-success">
                            <label for="ya_Aspirin">Y</label>
                            <input type="checkbox" name="tidak_Aspirin" id="tidak_Aspirin" class="custom-checkbox-success">
                            <label for="tidak_Aspirin">T</label>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <label for="" class="col-3">Alergi Plester</label> <span class="mx-2">:</span>
                        <div class="col-md-5 align-items-center d-flex gap-2">
                            <input type="checkbox" name="ya_Plester" id="ya_Plester" class="custom-checkbox-success">
                            <label for="ya_Plester">Y</label>
                            <input type="checkbox" name="tidak_Plester" id="tidak_Plester" class="custom-checkbox-success">
                            <label for="tidak_Plester">T</label>
                        </div>
                    </div>

                    <!-- rows 2 -->
                    <div class="col-md-6 d-flex align-items-center">
                        <label for="" class="col-5">Alergi Obat</label> <span class="mx-2">:</span>
                        <div class="col-md-5 align-items-center d-flex gap-2">
                            <input type="checkbox" name="ya_alergi_obat" id="ya_alergi_obat" class="custom-checkbox-success">
                            <label for="ya_alergi_obat">Y</label>
                            <input type="checkbox" name="tidak_alergi_obat" id="tidak_alergi_obat" class="custom-checkbox-success">
                            <label for="tidak_alergi_obat">T</label>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <label for="" class="col-3">Alergi Makanan</label> <span class="mx-2">:</span>
                        <div class="col-md-5 align-items-center d-flex gap-2">
                            <input type="checkbox" name="ya_alergi_makanan" id="ya_alergi_makanan" class="custom-checkbox-success">
                            <label for="ya_alergi_makanan">Y</label>
                            <input type="checkbox" name="tidak_alergi_makanan" id="tidak_alergi_makanan" class="custom-checkbox-success">
                            <label for="tidak_alergi_makanan">T</label>
                        </div>
                    </div>

                    <!-- rows 3 -->
                    <div class="col-md-6 d-flex align-items-center">
                        <label for="" class="col-5">Alergi Lateks</label> <span class="mx-2">:</span>
                        <div class="col-md-5 align-items-center d-flex gap-2">
                            <input type="checkbox" name="ya_alergi_lateks" id="ya_alergi_lateks" class="custom-checkbox-success">
                            <label for="ya_alergi_lateks">Y</label>
                            <input type="checkbox" name="tidak_alergi_lateks" id="tidak_alergi_lateks" class="custom-checkbox-success">
                            <label for="tidak_alergi_lateks">T</label>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="d-flex">
                        <b class="text-decoration-underline">RIWAYAT KELUARGA </b>
                        <span class="mx-1">Apakah keluarga pernah mendapat permasalahan seperti dibawah ini?</span>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Pendarahan yang tidak normal </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_pendarahan_tidak_normal" id="ya_pendarahan_tidak_normal" class="custom-checkbox-success">
                                <label for="ya_pendarahan_tidak_normal">Y</label>
                                <input type="checkbox" name="tidak_pendarahan_tidak_normal" id="tidak_pendarahan_tidak_normal" class="custom-checkbox-success">
                                <label for="tidak_pendarahan_tidak_normal">T</label>
                            </div>
                        </div>

                        <!-- rows 2 riwayat keluarga -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Permasalahan dalam pembiusan </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_permasalahan_dalam_bius" id="ya_permasalahan_dalam_bius" class="custom-checkbox-success">
                                <label for="ya_permasalahan_dalam_bius">Y</label>
                                <input type="checkbox" name="tidak_permasalahan_dalam_bius" id="tidak_permasalahan_dalam_bius" class="custom-checkbox-success">
                                <label for="tidak_permasalahan_dalam_bius">T</label>
                            </div>
                        </div>

                        <!-- rows 3 riwayat keluarga -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Diabetes </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_diabetes" id="ya_diabetes" class="custom-checkbox-success">
                                <label for="ya_diabetes">Y</label>
                                <input type="checkbox" name="tidak_diabetes" id="tidak_diabetes" class="custom-checkbox-success">
                                <label for="tidak_diabetes">T</label>
                            </div>
                        </div>

                        <!-- rows 4 riwayat keluarga -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Asma </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_Asma" id="ya_Asma" class="custom-checkbox-success">
                                <label for="ya_Asma">Y</label>
                                <input type="checkbox" name="tidak_Asma" id="tidak_Asma" class="custom-checkbox-success">
                                <label for="tidak_Asma">T</label>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <div class="d-flex">
                        <b class="text-decoration-underline">RIWAYAT PENYAKIT PASIEN </b>
                        <span class="mx-1">Apakah pasien pernah menderita penyakit dibawah ini?</span>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Pendarahan yang tidak normal </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_pendarahan_tidak_normal_pasien" id="ya_pendarahan_tidak_normal_pasien" class="custom-checkbox-success">
                                <label for="ya_pendarahan_tidak_normal_pasien">Y</label>
                                <input type="checkbox" name="tidak_pendarahan_tidak_normal_pasien" id="tidak_pendarahan_tidak_normal_pasien" class="custom-checkbox-success">
                                <label for="tidak_pendarahan_tidak_normal_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 2 riwayat pasien -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Hepatitis/sakit kuning </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_hepatitis_pasien" id="ya_hepatitis_pasien" class="custom-checkbox-success">
                                <label for="ya_hepatitis_pasien">Y</label>
                                <input type="checkbox" name="tidak_hepatitis_pasien" id="tidak_hepatitis_pasien" class="custom-checkbox-success">
                                <label for="tidak_hepatitis_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 3 riwayat pasien -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Regurgitas asam lambung / maag </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_regurgitas_pasien" id="ya_regurgitas_pasien" class="custom-checkbox-success">
                                <label for="ya_regurgitas_pasien">Y</label>
                                <input type="checkbox" name="tidak_regurgitas_pasien" id="tidak_regurgitas_pasien" class="custom-checkbox-success">
                                <label for="tidak_regurgitas_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 4 riwayat pasien -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Anemia/kekurangan darah </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_Anemia_pasien" id="ya_Anemia_pasien" class="custom-checkbox-success">
                                <label for="ya_Anemia_pasien">Y</label>
                                <input type="checkbox" name="tidak_Anemia_pasien" id="tidak_Anemia_pasien" class="custom-checkbox-success">
                                <label for="tidak_Anemia_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 5 riwayat pasien -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Nyeri dada </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_nyeri_pasien" id="ya_nyeri_pasien" class="custom-checkbox-success">
                                <label for="ya_nyeri_pasien">Y</label>
                                <input type="checkbox" name="tidak_nyeri_pasien" id="tidak_nyeri_pasien" class="custom-checkbox-success">
                                <label for="tidak_nyeri_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 6 riwayat pasien -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Asma </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_asma_pasien" id="ya_asma_pasien" class="custom-checkbox-success">
                                <label for="ya_asma_pasien">Y</label>
                                <input type="checkbox" name="tidak_asma_pasien" id="tidak_asma_pasien" class="custom-checkbox-success">
                                <label for="tidak_asma_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 7 riwayat pasien -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Diabetes/sakit gula </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_diabetes_pasien" id="ya_diabetes_pasien" class="custom-checkbox-success">
                                <label for="ya_diabetes_pasien">Y</label>
                                <input type="checkbox" name="tidak_diabetes_pasien" id="tidak_diabetes_pasien" class="custom-checkbox-success">
                                <label for="tidak_diabetes_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 8 riwayat pasien -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Pingsan </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_pingsan_pasien" id="ya_pingsan_pasien" class="custom-checkbox-success">
                                <label for="ya_pingsan_pasien">Y</label>
                                <input type="checkbox" name="tidak_pingsan_pasien" id="tidak_pingsan_pasien" class="custom-checkbox-success">
                                <label for="tidak_pingsan_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 9 riwayat pasien -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Serangan Jantung </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_jantung_pasien" id="ya_jantung_pasien" class="custom-checkbox-success">
                                <label for="ya_jantung_pasien">Y</label>
                                <input type="checkbox" name="tidak_jantung_pasien" id="tidak_jantung_pasien" class="custom-checkbox-success">
                                <label for="tidak_jantung_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 10 riwayat pasien -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Mengorok </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_mengorok_pasien" id="ya_mengorok_pasien" class="custom-checkbox-success">
                                <label for="ya_mengorok_pasien">Y</label>
                                <input type="checkbox" name="tidak_mengorok_pasien" id="tidak_mengorok_pasien" class="custom-checkbox-success">
                                <label for="tidak_mengorok_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 11 riwayat pasien -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Hipertensi </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_hipertensi_pasien" id="ya_hipertensi_pasien" class="custom-checkbox-success">
                                <label for="ya_hipertensi_pasien">Y</label>
                                <input type="checkbox" name="tidak_hipertensi_pasien" id="tidak_hipertensi_pasien" class="custom-checkbox-success">
                                <label for="tidak_hipertensi_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 12 riwayat pasien -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Sumbatan jalan nafas </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_jalan_nafas_pasien" id="ya_jalan_nafas_pasien" class="custom-checkbox-success">
                                <label for="ya_jalan_nafas_pasien">Y</label>
                                <input type="checkbox" name="tidak_jalan_nafas_pasien" id="tidak_jalan_nafas_pasien" class="custom-checkbox-success">
                                <label for="tidak_jalan_nafas_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 13 riwayat pasien -->
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="" class="col-6">Tidur/sleep apnea </label> <span class="mx-2">:</span>
                            <div class="col-md-5 align-items-center d-flex gap-2">
                                <input type="checkbox" name="ya_apnea_pasien" id="ya_apnea_pasien" class="custom-checkbox-success">
                                <label for="ya_apnea_pasien">Y</label>
                                <input type="checkbox" name="tidak_apnea_pasien" id="tidak_apnea_pasien" class="custom-checkbox-success">
                                <label for="tidak_apnea_pasien">T</label>
                            </div>
                        </div>

                        <!-- rows 14 riwayat pasien -->
                        <div>Apakah pasien pernah mendapatkan transfusi darah?</div>
                        <div class="d-flex align-items-center gap-2">
                            <div>Bila Ya, Tahun berapa</div>
                            <input type="text" name="transfusi_tahun" id="" class="">
                            <input type="checkbox" name="transfusi_tahun_ya" id="transfusi_tahun_ya" class="custom-checkbox-success">Y
                            <input type="checkbox" name="transfusi_tahun_tidak" id="transfusi_tahun_tidak" class="custom-checkbox-success">T
                        </div>

                        <!-- rows 15 riwayat pasien -->
                        <div>Apakah pasien pernah diperiksa untuk diagnosa HIV?</div>
                        <div class="d-flex align-items-center gap-2">
                            <div>Bila Ya, Tahun berapa</div>
                            <input type="text" name="hiv_tahun" id="" class="">
                            <input type="checkbox" name="hiv_tahun_ya" id="hiv_tahun_ya" class="custom-checkbox-success">Y
                            <input type="checkbox" name="hiv_tahun_tidak" id="hiv_tahun_tidak" class="custom-checkbox-success">T
                        </div>

                        <!-- rows 16 riwayat pasien -->
                        <div class="d-flex align-items-center gap-2">
                            <div>Hasil pemeriksaan Hiv :</div>
                            <input type="checkbox" name="hiv_positif" id="hiv_positif" class="custom-checkbox-success">Positif
                            <input type="checkbox" name="hiv_Negatif" id="hiv_Negatif" class="custom-checkbox-success">Negatif
                        </div>

                        <!-- rows 17 riwayat pasien -->
                        <div>Apakah pasien memakai :</div>
                        <div class="row">
                            <div class="col-md-4 d-flex align-items-center gap-2">
                                <div>Kacamata </div>
                                <input type="checkbox" name="ya_kacamata" id="ya_kacamata" class="custom-checkbox-success">Y
                                <input type="checkbox" name="tidak_kacamata" id="tidak_kacamata" class="custom-checkbox-success">T
                            </div>
                            <div class="col-md-4 d-flex align-items-center gap-2">
                                <div>Alat bantu dengar </div>
                                <input type="checkbox" name="ya_alat_bantu" id="ya_alat_bantu" class="custom-checkbox-success">Y
                                <input type="checkbox" name="tidak_alat_bantu" id="tidak_alat_bantu" class="custom-checkbox-success">T
                            </div>
                            <div class="col-md-4 d-flex align-items-center gap-2">
                                <div>Gigi Palsu </div>
                                <input type="checkbox" name="ya_gigi_palsu" id="ya_gigi_palsu" class="custom-checkbox-success">Y
                                <input type="checkbox" name="tidak_gigi_palsu" id="tidak_gigi_palsu" class="custom-checkbox-success">T
                            </div>
                        </div>

                        <!-- rows 18 riwayat pasien -->
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-md-2">Riwayat operasi </div> :
                            <input type="checkbox" name="rw_operasi_blm_pernah" id="rw_operasi_blm_pernah" class="custom-checkbox-success">Belum Pernah
                            <input type="checkbox" name="rw_operasi_sdh_pernah" id="rw_operasi_sdh_pernah" class="custom-checkbox-success">Sudah Pernah
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-md-2">Tahun</div> :
                            <input type="text" name="operasi_tahun" id="" class="w-75">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-md-2">jenis Operasi</div> :
                            <input type="text" name="operasi_jenis" id="" class="w-75">
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div class="col-md-2">jenis Anestesi</div> :
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="anestesi_lokal" id="" class="custom-checkbox-success">
                                    Anestesia lokal-komplikasi / reaksi
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="anestesi_regional" id="" class="custom-checkbox-success">
                                    Anestesia regional-komplikasi/reaksi
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="anestesi_umum" id="" class="custom-checkbox-success">
                                    Anestesia umum-komplikasi/reaksi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <b class="text-decoration-underline">PENGKAJIAN SISTEM</b>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-5">Hilangnya gigi</div> :
                            <input type="checkbox" name="pengkajian_hilang_gigi_Ya" id="pengkajian_hilang_gigi_Ya" class="custom-checkbox-success"> Ya
                            <input type="checkbox" name="pengkajian_hilang_gigi_Tidak" id="pengkajian_hilang_gigi_Tidak" class="custom-checkbox-success"> Tidak
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-5">Masalah mobilisasi leher</div> :
                            <input type="checkbox" name="pengkajian_masalah_mobilitas_Ya" id="pengkajian_masalah_mobilitas_Ya" class="custom-checkbox-success"> Ya
                            <input type="checkbox" name="pengkajian_masalah_mobilitas_Tidak" id="pengkajian_masalah_mobilitas_Tidak" class="custom-checkbox-success"> Tidak
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-5">Leher pendek</div> :
                            <input type="checkbox" name="pengkajian_leher_Ya" id="pengkajian_leher_Ya" class="custom-checkbox-success"> Ya
                            <input type="checkbox" name="pengkajian_leher_Tidak" id="pengkajian_leher_Tidak" class="custom-checkbox-success"> Tidak
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-5">Stroke</div> :
                            <input type="checkbox" name="pengkajian_stroke_Ya" id="pengkajian_stroke_Ya" class="custom-checkbox-success"> Ya
                            <input type="checkbox" name="pengkajian_stroke_Tidak" id="pengkajian_stroke_Tidak" class="custom-checkbox-success"> Tidak
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-5">Sesak Napas</div> :
                            <input type="checkbox" name="pengkajian_sesak_Ya" id="pengkajian_sesak_Ya" class="custom-checkbox-success"> Ya
                            <input type="checkbox" name="pengkajian_sesak_Tidak" id="pengkajian_sesak_Tidak" class="custom-checkbox-success"> Tidak
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-5">Sakit Dada</div> :
                            <input type="checkbox" name="pengkajian_sakit_dada_Ya" id="pengkajian_sakit_dada_Ya" class="custom-checkbox-success"> Ya
                            <input type="checkbox" name="pengkajian_sakit_dada_Tidak" id="pengkajian_sakit_dada_Tidak" class="custom-checkbox-success"> Tidak
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-5">Denyut jantung tidak normal</div> :
                            <input type="checkbox" name="pengkajian_denyut_jantung_Ya" id="pengkajian_denyut_jantung_Ya" class="custom-checkbox-success"> Ya
                            <input type="checkbox" name="pengkajian_denyut_jantung_Tidak" id="pengkajian_denyut_jantung_Tidak" class="custom-checkbox-success"> Tidak
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-5">Sedang Hamil</div> :
                            <input type="checkbox" name="pengkajian_sedang_hamil_Ya" id="pengkajian_sedang_hamil_Ya" class="custom-checkbox-success"> Ya
                            <input type="checkbox" name="pengkajian_sedang_hamil_Tidak" id="pengkajian_sedang_hamil_Tidak" class="custom-checkbox-success"> Tidak
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-5">Kejang</div> :
                            <input type="checkbox" name="pengkajian_kejang_Ya" id="pengkajian_kejang_Ya" class="custom-checkbox-success"> Ya
                            <input type="checkbox" name="pengkajian_kejang_Tidak" id="pengkajian_kejang_Tidak" class="custom-checkbox-success"> Tidak
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-5">Obesitas</div> :
                            <input type="checkbox" name="pengkajian_obesitas_Ya" id="pengkajian_obesitas_Ya" class="custom-checkbox-success"> Ya
                            <input type="checkbox" name="pengkajian_obesitas_Tidak" id="pengkajian_obesitas_Tidak" class="custom-checkbox-success"> Tidak
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <b class="text-decoration-underline">PEMERIKSAAN FISIK</b>
                    <div class="col-md-6">
                        <div>Gcs</div>
                        <input type="text" name="pemeriksaan_gcs" id="" class="w-100">
                    </div>
                    <div class="col-md-6">
                        <div>Tekanan darah</div>
                        <input type="text" name="pemeriksaan_tekanan_darah" id="" class="w-100">
                    </div>

                    <!-- rows 2 pemeriksaan fisik -->
                    <div class="col-md-6">
                        <div>Nadi</div>
                        <input type="text" name="pemeriksaan_Nadi" id="" class="w-100">
                    </div>
                    <div class="col-md-6">
                        <div>Suhu</div>
                        <input type="text" name="pemeriksaan_suhu" id="" class="w-100">
                    </div>

                    <!-- rows 3 pemeriksaan fisik -->
                    <div class="col-md-6">
                        <div>Tinggi</div>
                        <input type="text" name="pemeriksaan_Tinggi" id="" class="w-100">
                    </div>
                    <div class="col-md-6">
                        <div>Berat</div>
                        <input type="text" name="pemeriksaan_Berat" id="" class="w-100">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <b class="text-decoration-underline">KEADAAN UMUM</b>
                    <div>Keterangan</div>
                    <textarea name="keadaan_umum_keterangna" id="" class="form-control border-dark" rows="3"></textarea>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <b class="text-decoration-underline">LABORATORIUM</b>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="lab_hb_ht" id="" class="custom-checkbox-success">
                                    <label for="" class="col-3">Hb/Ht</label>
                                    <span>:</span>
                                    <input type="text" name="hb_ht_input">
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="lab_pi" id="" class="custom-checkbox-success">
                                    <label for="" class="col-3">Pi</label>
                                    <span>:</span>
                                    <input type="text" name="pi_input">
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="lab_tes_kehamilan" id="" class="custom-checkbox-success">
                                    <label for="" class="col-3">Tes Kehamilan</label>
                                    <span>:</span>
                                    <input type="text" name="tes_kehamilan_input">
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="lab_rontgen_dada" id="" class="custom-checkbox-success">
                                    <label for="" class="col-3">Rontgen dada</label>
                                    <span>:</span>
                                    <input type="text" name="rontgen_dada_input">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="lab_leukosit" id="" class="custom-checkbox-success">
                                    <label for="" class="col-4">Leukosit</label>
                                    <span>:</span>
                                    <input type="text" name="leukosit_input">
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="lab_Trombosit" id="" class="custom-checkbox-success">
                                    <label for="" class="col-4">Trombosit</label>
                                    <span>:</span>
                                    <input type="text" name="Trombosit_input">
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="lab_ekg" id="" class="custom-checkbox-success">
                                    <label for="" class="col-4">EKG(40 tahun ke atas)</label>
                                    <span>:</span>
                                    <input type="text" name="ekg_input">
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="lab_lain" id="" class="custom-checkbox-success">
                                    <label for="" class="col-4">lain-lain</label>
                                    <span>:</span>
                                    <input type="text" name="lain_lab_input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <b class="text-decoration-underline">DIAGNOSIS</b>
                    <div class="col-md-6">
                        <?php for ($i = 1; $i <= 3; $i++) : ?>
                            <select type="select" name="diagnosa_<?= $i; ?>" id="diagnosa_<?= $i; ?>" class="form-control w-100 diagnosa">
                            </select>
                        <?php endfor; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="asa_1" id="" class="custom-checkbox-success">ASA 1 pasien normal yang sehat
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="asa_2" id="" class="custom-checkbox-success">ASA 2 Pasien dengan penyakit sistemik ringan
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="asa_3" id="" class="custom-checkbox-success">ASA 3 pasien dengan penyakit sistemik berat
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" name="asa_4" id="" class="custom-checkbox-success">ASA 4 pasien dengan penyakit sistemik berat yang mengancam nyawa
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" name="emergency" id="" class="custom-checkbox-success">EMERGENCY
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <b class="">PERENCANAAN ANESTESIA</b>
                <div class="d-flex align-items-start gap-2">
                    <div class="col-3">Teknik Anestesi dan Sedasi </div>
                    <div class="col d-flex flex-column gap-2">
                        <div>: <input type="text" name="anestesi_input" id="anestesi_input" class="" placeholder="sedasi"></div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="anestesi_GA" id="" class="custom-checkbox-success">
                            <label for="" class="col-1">GA</label>
                            <input type="text" name="ga_input">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="anestesi_regional_sedasi" id="" class="custom-checkbox-success">Regional

                            <input type="checkbox" name="anestesi_Spinal" id="" class="custom-checkbox-success">Spinal

                            <input type="checkbox" name="anestesi_Epidural" id="" class="custom-checkbox-success">Epidural

                            <input type="checkbox" name="anestesi_kaudal" id="" class="custom-checkbox-success">Kaudal Blok

                            <input type="checkbox" name="anestesi_Perifer" id="" class="custom-checkbox-success">Perifer

                            <input type="checkbox" name="anestesi_SpO2" id="" class="custom-checkbox-success">SpO2

                            <input type="checkbox" name="anestesi_lain-lain" id="" class="custom-checkbox-success">lain-lain

                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <div class="col-3">Perawatan Pasca Anestesia</div>
                    <div class="col-3 d-flex align-items-center gap-2">
                        <input type="checkbox" name="rawat_inap" id="rawat_inap" class="custom-checkbox-success">
                        <label for="rawat_inap">Rawat Inap</label>
                    </div>

                    <div class="col-3 d-flex align-items-center gap-2">
                        <input type="checkbox" name="rawat_khusus" id="rawat_khusus" class="custom-checkbox-success">
                        <label for="rawat_khusus">Rawat Khusus</label>
                    </div>

                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row">
                    <b>PERSIAPAN PRA ANESTESIA</b>
                    <div class="d-flex gap-2">
                        <div class="col-2">Puasa mulai</div> :
                        <input type="datetime-local" name="mulai_puasa" id="" class="w-25" value="<?= date('Y-m-d H:i') ?>">
                    </div>

                    <div class="d-flex gap-2">
                        <div class="col-2">Rencana Operasi</div> :
                        <input type="datetime-local" name="rencana_puasa" id="" class="w-25">
                    </div>

                    <div>Catatan</div>
                    <textarea name="catatan_operasi" id="" rows="4"></textarea>
                </div>
            </td>
        </tr>
    </table>
</div>

<div class="row">
    <div class="col-6">
        <div>Penata Anestesi Sebagai Penanggung Jawab </div>
        <div class="text-center">
            <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_perawat_penanggung_jawab" />
        </div>
        <select type="select" name="perawat_penanggung_jawab" id="perawat_penanggung_jawab" class="form-select newperawat" style="width: 100%;"></select>
    </div>
    <div class="col-6">
        <div>Dokter Anestesi Sebagai Penanggung Jawab </div>
        <div class="text-center">
            <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_dokter_penanggung_jawab" />
        </div>
        <select type="select" name="dokter_penanggung_jawab" id="dokter_penanggung_jawab" class="form-select dokter" style="width: 100%;"></select>
    </div>
</div>



<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawatNew = []
    let dataDokter = []

    function cbCommon() {
        $('#perawat_penanggung_jawab').prop('disabled', false)
        $('#perawat_penanggung_jawab').select2('open')
        $('#perawat_penanggung_jawab').select2('close')
        if (mode === "lihat")
            $('#perawat_penanggung_jawab').prop('disabled', true)

        setTimeout(() => {
            dataListPerawatNew?.map(v => {
                if (v.text === $('#perawat_penanggung_jawab').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_penanggung_jawab')
                }
            })
        }, 1000)


        $('#dokter_penanggung_jawab').prop('disabled', false)
        $('#dokter_penanggung_jawab').select2('open')
        $('#dokter_penanggung_jawab').select2('close')
        if (mode === "lihat")
            $('#dokter_penanggung_jawab').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#dokter_penanggung_jawab').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_penanggung_jawab')
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
                selector: '.newperawat',
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
                        if (selector === '.newperawat') {
                            dataListPerawatNew = items;
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


        $('#perawat_penanggung_jawab').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_penanggung_jawab')
        });

        $('#dokter_penanggung_jawab').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_penanggung_jawab')
        });


        //================ new =====================//
    });
</script>