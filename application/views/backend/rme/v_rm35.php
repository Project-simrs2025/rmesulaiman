<div class="row">
    <table class="table table-bordered border-dark">
        <tr>
            <td align="center" class="col-6">Asesmen Awal Pasien Hemodialis</td>
            <td>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-4">Nama Pasien </div>
                    <div class="d-flex align-items-center gap-2">: <input type="text" name="nama_pasien" id="nama_pasien" class="form-control border-dark"></div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-4">NIK </div>
                    <div class="d-flex align-items-center gap-2">: <input type="text" name="nik" id="nik" class="form-control border-dark"></div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-4">Suku </div>
                    <div class="d-flex align-items-center gap-2">: <input type="text" name="nama_suku" id="suku" class="form-control border-dark"></div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-4">Pekerjaan </div>
                    <div class="d-flex align-items-center gap-2">: <input type="text" name="nama_pekerjaan" id="nama_pekerjaan" class="form-control border-dark"></div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-4">No Rm </div>
                    <div class="d-flex align-items-center gap-2">: <input type="text" name="no_rm" id="no_rm" class="form-control border-dark"></div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-4">Tanggal Lahir </div>
                    <div class="d-flex align-items-center gap-2">: <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control border-dark"></div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-4">Umur</div>
                    <div class="d-flex align-items-center gap-2">: <input type="text" name="umur" id="umur" class="form-control border-dark"></div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-4">Nama DPJP </div>
                    <div class="col-8"><select type="select" name="dpjp" id="dpjp" class="form-select dokter_umum" style="width: 100%;"></select></div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-4">Nama PPJP </div>
                    <div class="col-8"> <select type="select" name="perawat_ppjp" id="perawat_ppjp" class="form-select perawat" style="width: 100%;"></select></div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="d-flex aligm-items-center gap-2">
                    <div class="col-2">Tanggal</div>
                    : <?= $tgl_admit ?>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-2">Asal Pasien</div>
                    <div class="d-flex align-items-center col-2 gap-2">
                        <input type="checkbox" name="rawat_jalan" id="rawat_jalan" class="custom-checkbox-success">
                        <label for="rawat_jalan">Rawat Jalan</label>
                    </div>
                    <div class="d-flex align-items-center col-2 gap-2">
                        <input type="checkbox" name="rawat_inap" id="rawat_inap" class="custom-checkbox-success">
                        <label for="rawat_inap">Rawat inap</label>
                    </div>
                    <div class="d-flex align-items-center col-2 gap-2">
                        <input type="checkbox" name="rawat_darurat" id="rawat_darurat" class="custom-checkbox-success">
                        <label for="rawat_darurat">Rawat darurat</label>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <div class="col-2">Cara bayar</div>
                    <div class="d-flex align-items-center col-2 gap-2">
                        <input type="checkbox" name="bpjs" id="bpjs" class="custom-checkbox-success">
                        <label for="bpjs">BPJS Pbi</label>
                    </div>
                    <div class="d-flex align-items-center col-2 gap-2">
                        <input type="checkbox" name="bpjs_non" id="bpjs_non" class="custom-checkbox-success">
                        <label for="bpjs_non">BPJS Non Pbi</label>
                    </div>
                    <div class="d-flex align-items-center col-2 gap-2">
                        <input type="checkbox" name="umum" id="umum" class="custom-checkbox-success">
                        <label for="umum">Umum</label>
                    </div>
                    <div class="d-flex align-items-center col-2 gap-2">
                        <input type="checkbox" name="kontraktor" id="kontraktor" class="custom-checkbox-success">
                        <label for="kontraktor">Kontraktor</label>
                    </div>
                    <div class="d-flex align-items-center col-2 gap-2">
                        <input type="checkbox" name="kontraktor_lainnya" id="kontraktor_lainnya" class="custom-checkbox-success">
                        <label for="kontraktor_lainnya">Lainnya</label>
                    </div>
                </div>

                <div>
                    <b> I. Anamnesis :</b><br>
                    <textarea name="anamnesis" id="anamnesis" rows="2" class="form-conrol border-dark w-100"></textarea>
                </div>

                <div>
                    <b>II. Pemeriksaan Fisik :</b><br>
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">Keadaan Umum</div>
                            : <textarea name="keadaan_umum" id="keadaan_umum" class="form-control border-dark" rows="1"></textarea>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">Tekanan Darah</div>
                            <div class="row">
                                <div class="d-flex align-items-center gap-2 flex-wrap col-12">
                                    <div class="my-2 d-flex align-items-center gap-2 col-2">
                                        : <input type="text" class="form-control border-dark" name="tekanan_darah_1"> mmHg,
                                    </div>
                                    <div class="my-2 d-flex align-items-center gap-2 col-3">
                                        Nadi <input type="text" class="form-control border-dark" name="tekanan_nadi"> x/menit,
                                    </div>
                                    <div class="my-2 d-flex align-items-center gap-2 col-3">
                                        Respirasi <input type="text" class="form-control border-dark" name="tekanan_respirasi"> x/menit,
                                    </div>
                                    <div class="my-2 d-flex align-items-center gap-2 col-3">
                                        Suhu <input type="text" class="form-control border-dark" name="tekanan_suhu"> &deg;C,
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 my-2">
                        <div class="col-2">Kepala</div>
                        : <textarea name="kepala" id="kepala" class="form-control border-dark" rows="1"></textarea>
                    </div>
                    <div class="d-flex align-items-center gap-2 my-2">
                        <div class="col-2">Leher</div>
                        : <textarea name="Leher" id="Leher" class="form-control border-dark" rows="1"></textarea>
                    </div>
                    <div class="d-flex align-items-center gap-2 my-2">
                        <div class="col-2">Thorax</div>
                        : <textarea name="Thorax" id="Thorax" class="form-control border-dark" rows="1"></textarea>
                    </div>
                    <div class="d-flex align-items-center gap-2 my-2">
                        <div class="col-2">Abdomen</div>
                        : <textarea name="Abdomen" id="Abdomen" class="form-control border-dark" rows="1"></textarea>
                    </div>
                    <div class="d-flex align-items-center gap-2 my-2">
                        <div class="col-2">Ektremitas</div>
                        : <textarea name="Ektremitas" id="Ektremitas" class="form-control border-dark" rows="1"></textarea>
                    </div>
                    <div class="d-flex align-items-center gap-2 my-2">
                        <div class="col-2">lain-lain</div>
                        : <textarea name="lain_ektremitas" id="lain_ektremitas" class="form-control border-dark" rows="1"></textarea>
                    </div>
                </div>

                <div>
                    <b>III. Status Nutrisi :</b><br>
                    <textarea name="status_nutrisi" id="status_nutrisi" rows="2" class="form-conrol border-dark w-100"></textarea>
                </div>

                <div>
                    <b>IV. Psikologis :</b><br>
                    <ol>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-9">
                                - Adakah Keyakinan / tradisi / budaya yang berkaitan dengan pelayanan kesehatan yang akan di berikan
                            </div>
                            <div class="col">
                                <input type="checkbox" name="tidak_keyakinan" id="tidak_keyakinan" class="custom-checkbox-success">
                                <label for="tidak_keyakinan">Tidak</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" name="ya_keyakinan" id="ya_keyakinan" class="custom-checkbox-success">
                                <label for="ya_keyakinan">Ya</label>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 my-2">
                            <div class="col-3">- Kendala Komunikasi</div>
                            <div class="col-2">
                                <input type="checkbox" name="tidak_ada_kendala_komunikasi" id="tidak_ada_kendala_komunikasi" class="custom-checkbox-success">
                                <label for="tidak_ada_kendala_komunikasi">Tidak Ada</label>
                            </div>
                            <div class="col d-flex align-items-center gap-2 my-2">
                                <input type="checkbox" name="ada_kendala_komunikasi" id="ada_kendala_komunikasi" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 my-2 w-100">
                                    <label for="ada_kendala_komunikasi" class="col-3">Ada, Jelaskan</label>
                                    <input type="text" name="ada_kendala_komunikasi_input" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2 my-2">
                            <div class="col-3">- Yang Merawat Di Rumah</div>
                            <div class="col-2">
                                <input type="checkbox" name="tidak_ada_rawat" id="tidak_ada_rawat" class="custom-checkbox-success">
                                <label for="tidak_ada_rawat">Tidak Ada</label>
                            </div>
                            <div class="col d-flex align-items-center gap-2 my-2">
                                <input type="checkbox" name="ada_rawat" id="ada_rawat" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 my-2 w-100">
                                    <label for="ada_rawat" class="col-3">Ada, Jelaskan</label>
                                    <input type="text" name="ada_rawat_input" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-2 my-2">
                            <div class="col-3">- Kondisi Saat Ini</div>
                            <div class="d-flex w-100 col flex-wrap">
                                <div class="col-3">
                                    <input type="checkbox" name="kondisi_tenang" id="kondisi_tenang" class="custom-checkbox-success">
                                    <label for="kondisi_tenang">Tenang</label>
                                </div>
                                <div class="col-3">
                                    <input type="checkbox" name="kondisi_gelisah" id="kondisi_gelisah" class="custom-checkbox-success">
                                    <label for="kondisi_gelisah">Gelisah</label>
                                </div>
                                <div class="col-4">
                                    <input type="checkbox" name="kondisi_takut" id="kondisi_takut" class="custom-checkbox-success">
                                    <label for="kondisi_takut">Takut Terhadap tindakan</label>
                                </div>
                                <div class="col-3">
                                    <input type="checkbox" name="kondisi_marah" id="kondisi_marah" class="custom-checkbox-success">
                                    <label for="kondisi_marah">Marah</label>
                                </div>
                                <div class="col-3">
                                    <input type="checkbox" name="kondisi_mudah_tersinggung" id="kondisi_mudah_tersinggung" class="custom-checkbox-success">
                                    <label for="kondisi_mudah_tersinggung">Murah Tersinggung</label>
                                </div>
                            </div>
                        </div>
                    </ol>
                </div>


                <!-- V Data Penunjang -->
                <div>
                    <b>V. Data Penunjang :</b><br>
                    <ol>
                        <div class="row">
                            <?php
                            $labItems = [
                                'hbs' => '1. Hbs',
                                'ureum' => '2. Ureum',
                                'natrium' => '3. Natrium',
                                'feSerum' => '4. Serum',
                                'anti_hcv' => '5. Anti HCV',
                                'kreatinin' => '6. Kreatinin',
                                'kalsium' => '7. Kalsium',
                                'tibc' => '8. TIBC',
                                'anti_hiv' => '9. Anti Hiv',
                                'asamurat' => '10. Asam Urat',
                                'posforganik' => '11. Posforanorganik',
                                'sat_transferin' => '12. Sat. Transferin',
                                'hemoglobin' => '13. Hemoglobin',
                                'kalium' => '14. Kalium',
                                'guldarah' => '15. Gula Darah',
                                'data_penunjang_lainnya' => '16.'
                            ];

                            $count = 0;
                            echo '<div class="container-fluid"><div class="row g-2">';
                            foreach ($labItems as $name => $label) {
                                echo '<div class="col-md-3">';
                                echo '<label class="form-label">' . $label . '</label>';
                                echo '<input type="text" name="' . $name . '" class="form-control border-dark">';
                                echo '</div>';

                                // Jika sudah 4 kolom, tutup dan buka row baru
                                $count++;
                                if ($count % 4 === 0 && $count < count($labItems)) {
                                    echo '</div><div class="row g-2">';
                                }
                            }
                            echo '</div></div>';
                            ?>

                        </div>
                    </ol>
                </div>

                <!-- VI Diagnosa -->
                <div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3"><b>VI. Diagnosa</b></div>

                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3">Diagnosa Penyakit Ginjal</div>
                        <div class="w-100"> <select type="select" name="diagnosa_ginjal" id="diagnosa_ginjal" class="form-select diagnosa" style="width: 100%;"></select></div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3">Etiologi</div>
                        <div class="w-100"> <input type="text" name="etiologi" id="etiologi" class="form-control border-dark" style="width: 100%;"></input></div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3">Penyakit Penyerta</div>
                        <div class="w-100"> <input type="text" name="penyakit_penyerta" id="penyakit_penyerta" class="form-control border-dark" style="width: 100%;"></input></div>
                    </div>
                </div>

                <br>

                <!-- VII Terapi -->
                <div>
                    <div class="d-flex align-items-start gap-2">
                        <div class="col-3"><b>VII. Terapi</b></div>
                        <div class="col d-flex flex-wrap gap-2">
                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="Hemodialissa" id="Hemodialissa" class="custom-checkbox-success">
                                <label for="Hemodialissa">Hemodialissa</label>
                            </div>
                            <div class="col-5 d-flex align-items-center gap-2">
                                <div class="col-6">Akut/Kronis/lain-lain</div>
                                <input type="text" name="terapi_akut" id="" class="form-control border-dark">
                            </div>
                            <div class="col d-flex align-items-center gap-2">
                                <div class="col-4">Frekuensi</div>
                                <input type="text" name="terapi_frekuensi" id="" class="form-control border-dark">
                            </div>
                            <div class="col d-flex align-items-center gap-2">
                                <input type="checkbox" name="CAPD" id="CAPD" class="custom-checkbox-success">
                                <label for="CAPD">CAPD(continious ambuletorry peitoneal dialdysis)</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VIII -->
                <div class="d-flex flex-column">
                    <div><b>VIII. Resep Dialisis</b></div>
                    <ol>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">1. Jenis Dialisalt</div>
                            <div class="col">
                                <input type="checkbox" name="bikarbonat" id="bikarbonat" class="custom-checkbox-success">
                                <label for="bikarbonat">Bikarbonat</label>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">2. Akses Sirkulasi</div>
                            <div class="col d-flex flex-wrap">
                                <div class="col-2">
                                    <input type="checkbox" name="femoral" id="femoral" class="custom-checkbox-success">
                                    <label for="femoral">femoral</label>
                                </div>
                                <div class="col-2">
                                    <input type="checkbox" name="cilmino" id="cilmino" class="custom-checkbox-success">
                                    <label for="cilmino">cilmino</label>
                                </div>
                                <div class="col-3">
                                    <input type="checkbox" name="double_lumen" id="double_lumen" class="custom-checkbox-success">
                                    <label for="double_lumen">double lumen catheter</label>
                                </div>
                                <div class="col-2">
                                    <input type="checkbox" name="subsclanria" id="subsclanria" class="custom-checkbox-success">
                                    <label for="subsclanria">Subclanria</label>
                                </div>
                                <div class="col-2">
                                    <input type="checkbox" name="jugular" id="jugular" class="custom-checkbox-success">
                                    <label for="jugular">Jugular</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 my-2">
                            <div class="col-3">3. Time Dialysis(TD)</div>
                            <div class="col d-flex align-items-center gap-2">:
                                <input type="text" name="time_dialisis" id="" class="form-control border-dark w-25"> Jam
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 my-2">
                            <div class="col-3">4. BB Kering</div>
                            <div class="col d-flex align-items-center gap-2">:
                                <input type="text" name="bb_kering" id="" class="form-control border-dark w-25"> Kilogram
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 my-2">
                            <div class="col-3">5. Kecepatan aliran darah(Qb)</div>
                            <div class="col d-flex align-items-center gap-2">:
                                <input type="text" name="kecepatan_aliran_darah" id="" class="form-control border-dark w-25"> Mililiter per menit
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 my-2">
                            <div class="col-3">6. Kecepatan aliran dialisat(Qd)</div>
                            <div class="col d-flex align-items-center gap-2">:
                                <input type="text" name="kecepeatan_aliran_qd" id="" class="form-control border-dark w-25"> Mililiter per menit
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 my-2">
                            <div class="col-2">7. Heparinisasi</div>
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="kontinyu" id="kontinyu" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="kontinyu">kontinyu</label>
                                    <input type="text" name="kontinyu_input" class="form-control border-dark">
                                </div>
                                <div class="col-1"></div>
                            </div>
                            <div class="col-1">ha/jam</div>
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="lmwh" id="lmwh" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="lmwh">LMWH</label>
                                    <input type="text" name="lmwh_input" class="form-control border-dark">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2"></div>
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="intermiten" id="intermiten" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="intermiten">intermiten</label>
                                    <input type="text" name="intermiten_input" class="form-control border-dark">
                                </div>
                                <div class="col-1"></div>
                            </div>
                            <div class="col-1">ha/jam</div>
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="tanpa_heparin" id="tanpa_heparin" class="custom-checkbox-success">
                                <label for="tanpa_heparin">Tanpa Heparin</label>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2 my-2">
                            <div class="col-2">8. Program Polling</div>
                            <div class="col-2 d-flex align-items-center gap-2">
                                <div>Uf</div>
                                <input type="text" name="uf_input" class="form-control border-dark">
                                <div class="col-2"></div>
                            </div>
                            <div class="col-2 d-flex align-items-center gap-2">
                                <div>Na</div>
                                <input type="text" name="na_input" class="form-control border-dark">
                                <div class="col-2"></div>
                            </div>
                            <div class="col-3 d-flex align-items-center gap-2">
                                <div>Bicarbonet</div>
                                <input type="text" name="bicarbonet_input" class="form-control border-dark">
                                <div class="col-2"></div>
                            </div>
                            <div class="col-2 d-flex align-items-center gap-2">
                                <div>Suhu</div>
                                <input type="text" name="suhu_input" class="form-control border-dark">
                                <div class="col-2">&deg;C</div>
                            </div>
                        </div>
                    </ol>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <div class="col-2"><b>IX. Target Pengobatan</b></div>
                    <div class="col-5 d-flex align-items-center gap-2">
                        <input type="checkbox" name="pengobatan_kt" id="pengobatan_kt" class="custom-checkbox-success">
                        <div class="d-flex align-items-center gap-2">
                            <label for="pengobatan_kt">kt/w</label>
                            <input type="text" name="pengobatan_kt_input" id="" class="form-control border-dark">
                        </div>
                    </div>
                    <div class="col-5 d-flex align-items-center gap-2">
                        <input type="checkbox" name="pengobatan_kt_lain" id="pengobatan_kt_lain" class="custom-checkbox-success">
                        <div class="d-flex align-items-center gap-2">
                            <label for="pengobatan_kt_lain" class="col-4">lain-lain</label>
                            <input type="text" name="pengobatan_kt_lain_input" id="" class="form-control border-dark">
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <div class="col-2"><b>X. Medikamentosa</b></div>
                    <textarea name="medikamentosa" id="" class="form-control border-dark"></textarea>
                </div>

                <br>

                <div class="d-flex flex-column">
                    <div class="col-2"><b>XI. Diit</b></div>
                    <textarea name="diit" id="" class="form-control border-dark"></textarea>
                </div>

                <div align="right">
                    <div class="col-2">Dokter Penanggung Jawab</div>
                    <div>
                        <img class="img-responsive center-block mt-2" style="width:10%;" id="qr_dokter_umum" />
                    </div>
                    <select type="select" name="dokter_penanggung_jawab" id="dokter_umum" class="form-select dokter_umum" style="width: 25%;"></select>
                </div>
            </td>
        </tr>
    </table>

</div>




<script>
    let dataDokter = []
    let dataPerawat = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()
        listPerawat()


        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        const select2Configs = [{
            selector: '.diagnosa',
            url: '<?= site_url('backend/admission/getDiagnosa'); ?>'
        }, ];

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

                        // Tambahkan opsi default "--pilih--"
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

            // Reset nilai saat awal load
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

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id,
                id_original
            } = e.params.data;

            if (id === '') {
                // Kosongkan QR Code jika pilihan "--pilih--"
                $('#qr_dokter_umum').remove();
            } else {
                QRSignatureAPI(id_original, 'qr_dokter_umum');
            }
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
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
                }
            })
        }, 1000)
    }


    function listDokterUmumAPI() {
        $('.dokter_umum').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
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
        $('.dokter_umum').val(null).trigger('change');
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

                    dataPerawat = items;

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