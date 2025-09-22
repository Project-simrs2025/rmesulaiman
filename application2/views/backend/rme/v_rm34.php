<!-- BATAS GANTI -->
<table class="table table-bordered mt-2 border-dark">
    <tr>
        <td colspan="3" rowspan="4" class="text-center">PENGKAJIAN AWAL GERIATRI
        </td>
    </tr>
    <tr>
        <td>
            <?php
            // Daftar input field
            $dataform1 = array(
                array('nama' => "Nama Pasien", 'name' => "nama_pasien", 'values' => ""),
                array('nama' => "No.Rm", 'name' => "no_rm", 'values' => ""),
                array('nama' => "Tanggal Lahir", 'name' => "tanggal_lahir", 'values' => ""),
                array('nama' => "Jenis Kelamin", 'name' => "jenkel", 'values' => ""),
            );

            foreach ($dataform1 as $a) {

                echo "<div class='form-group'>";
                echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
                echo "<input type='text' class='form-control border-dark' name='{$a['name']}' value='{$a['values']}'>";
                echo "</div>";
            }
            ?>

        </td>

    </tr>
    <tr>
        <input type="hidden" id="no_rm" name="no_rm">
        <td colspan="1" style="font-size: 16px;">
            <label for="">Tanggal Pemeriksaan :</label>
            <input type="date" value="<?= date('Y-m-d') ?>" name="tanggal_pemeriksaan31" class="form-control border-dark mb-3">
            <label for="">Jam</label>
            <input type="time" value="<?= date('H:i') ?>" name="tanggal_pemeriksaan" class="form-control border-dark">
        </td>
    </tr>
    <tr>
        <td colspan="2" class="text-center">(tempelkan stiker identitas jika tersedia)</td>
    </tr>
</table>


<!-- table 2 -->
<table class="table-bordered border-dark">
    <thead>
        <th class="fw-bold p-2" colspan="2">I. DATA AWAL (Diisi oleh Perawat)</th>
    </thead>
    <tbody>
        <tr>
            <td class="p-3" colspan="2">
                <div class="container">
                    <div class="row">
                        <!-- Kolom 1 -->
                        <div class="col-md-3 d-flex gap-2 align-items-center">
                            <span class="flex-shrink-0">TD :</span>
                            <input type="text" name="td_systolic" class="form-control border-dark h-75 w-50"> /
                            <input type="text" name="td_diastolic" class="form-control border-dark h-75 w-50">
                            <span>mmHg</span>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="col-md-3 d-flex gap-2 align-items-center">
                            <span class="flex-shrink-0">Nadi :</span>
                            <input type="text" name="nadi" class="form-control border-dark h-75 w-50">
                            <span>X/menit</span>
                        </div>

                        <!-- Kolom 3 -->
                        <div class="col-md-3 d-flex gap-2 align-items-center">
                            <span class="flex-shrink-0">RR :</span>
                            <input type="text" name="rr" class="form-control border-dark h-75 w-50">
                            <span>X/menit</span>
                        </div>

                        <!-- Kolom 4 -->
                        <div class="col-md-3 d-flex gap-2 align-items-center">
                            <span class="flex-shrink-0">Suhu :</span>
                            <input type="text" name="suhu" class="form-control border-dark h-75 w-50">
                            <span>&deg;C</span>
                        </div>
                    </div>

                    <!-- Elemen berikutnya akan turun ke bawah -->
                    <div class="row mt-3">
                        <!-- Kolom 5 -->
                        <div class="col-md-6 d-flex gap-2 align-items-center">
                            <span class="flex-shrink-0">GCS :</span>
                            <label for="gcs_e">E</label>
                            <input type="text" name="gcs_e" class="form-control border-dark h-75 w-100" id="gcs_e">
                            <label for="gcs_v">V</label>
                            <input type="text" name="gcs_v" class="form-control border-dark h-75 w-100" id="gcs_v">
                            <label for="gcs_m">M</label>
                            <input type="text" name="gcs_m" class="form-control border-dark h-75 w-100" id="gcs_m">
                        </div>
                    </div>

                </div>

            </td>
        </tr>

        <tr>
            <td>
                <div class="fw-bold text-uppercase ps-2 mb-4 ">psikologi</div>
                <div class="d-flex gap-4 flex-column ps-2">
                    <div>Mengalami kekerasan fisik :</div>
                    <div>Gengguan tidur :</div>
                    <div>Konsultasi dengan psikologi/ psikiater </div>
                </div>
            </td>
            <td>
                <div class="d-flex gap-4 px-2 mt-5 align-items-center">
                    <div class="d-flex gap-2 align-items-center">
                        : <input type="radio" class="custom-checkbox-danger" name="option_1" id="option_1_no" value="Tidak Ada" onclick="clearInput('reason_1')">
                        <label for="option_1_no" class="col-6 flex-shrink-0">Tidak Ada</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" name="option_1" id="option_1_yes" value="Ada" onclick="focusInput('reason_1')">
                        <label for="option_1_yes" class="flex-shrink-0">Ada, Alasan</label>
                        <input type="text" class="form-control border-dark" name="reason_1" id="reason_1">
                    </div>
                </div>

                <div class="d-flex gap-4 px-2 mt-2 align-items-center">
                    <div class="d-flex gap-2 align-items-center">
                        : <input type="radio" class="custom-checkbox-danger" name="option_2" id="option_2_no" value="Tidak Ada" onclick="clearInput('reason_2')">
                        <label for="option_2_no" class="col-6 flex-shrink-0">Tidak Ada</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" name="option_2" id="option_2_yes" value="Ada" onclick="focusInput('reason_2')">
                        <label for="option_2_yes" class="flex-shrink-0">Ada, Alasan</label>
                        <input type="text" class="form-control border-dark" name="reason_2" id="reason_2">
                    </div>
                </div>

                <div class="d-flex gap-4 px-2 my-2 align-items-center">
                    <div class="d-flex gap-2 align-items-center">
                        : <input type="radio" class="custom-checkbox-danger" name="option_3" id="option_3_no" value="Tidak Ada" onclick="clearInput('reason_3')">
                        <label for="option_3_no" class="col-6 flex-shrink-0">Tidak Ada</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" name="option_3" id="option_3_yes" value="Ada" onclick="focusInput('reason_3')">
                        <label for="option_3_yes" class="flex-shrink-0">Ada, Alasan</label>
                        <input type="text" class="form-control border-dark" name="reason_3" id="reason_3">
                    </div>
                </div>

                </div>

            </td>
        </tr>

        <tr>
            <td>
                <div class="fw-bold text-uppercase ps-2 mb-2">Sosial</div>
                <div class="d-flex gap-4 flex-column ps-2 my-4">
                    <div>Status pernikahan :</div>
                    <div>Anak :</div>
                    <div>Pendidikan terakhir :</div>
                    <div>Kewarganegaraan :</div>
                    <div>Pekerjaan :</div>
                    <div>Tinggal dengan :</div>
                    <div>Kebiasaan :</div>
                    <div>Agama :</div>
                    <div>Suku :</div>
                </div>
            </td>
            <td>
                <div class="d-flex gap-2 px-4 my-3 align-items-center ">
                    <div class="d-flex gap-2 col-2">
                        <input type="radio" class="custom-checkbox-success" name="status" id="kawin">
                        <label for="kawin">Kawin</label>
                    </div>
                    <div class="d-flex gap-2 col-2">
                        <input type="radio" class="custom-checkbox-success" name="status" id="cerai_mati">
                        <label for="cerai_mati">Cerai Mati</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" name="status" id="cerai_hidup">
                        <div class="d-flex align-items-center gap-2 w-100">
                            <label for="cerai_hidup" class="col-4">Cerai hidup, Alasan:</label>
                            <input type="text" class="form-control border-dark" id="cerai_hidup_alasan" name="cerai_hidup_alasan">
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2 px-4 my-2 align-items-center">
                    <div class="col-2">
                        <input type="radio" class="custom-checkbox-success" name="anak" id="tidak_ada_anak">
                        <label for="tidak_ada_anak">Tidak Ada</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" name="anak" id="ada_anak">
                        <div class="d-flex gap-2 align-items-center w-100">
                            <label for="ada_anak" class="flex-shrink-0">Ada, jumlah:</label>
                            <input type="text" class="form-control border-dark" id="jumlah_anak" name="jumlah_anak">Anak
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-5 px-4 my-2 align-items-center">
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" class="custom-checkbox-success" name="pendidikan" id="sd">
                        <label for="sd">SD</label>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" class="custom-checkbox-success" name="pendidikan" id="smp">
                        <label for="smp">SMP</label>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" class="custom-checkbox-success" name="pendidikan" id="sma">
                        <label for="sma">SMA</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" name="pendidikan" id="lainnya_pendidikan">
                        <div class="d-flex align-items-center gap-2 w-100">
                            <label for="lainnya_pendidikan" class="flex-shrink-0">Lainnya</label>
                            <input type="text" class="form-control border-dark" id="lainnya_pendidikan_input" name="lainnya_pendidikan_input">
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-5 px-3 my-2 align-items-center">
                    <div class="d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" name="warga_negara" id="wni">
                        <label for="wni">WNI</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" name="warga_negara" id="wna">
                        <div class="d-flex align-items-center w-100 gap-2">
                            <label for="wna" class="flex-shrink-0">WNA, sebutkan:</label>
                            <input type="text" class="form-control border-dark" id="wna_sebutkan" name="wna_sebutkan">
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-5 px-3 my-2 align-items-center">
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" class="custom-checkbox-success" name="pekerjaan" id="tni_polri">
                        <label for="tni_polri" class="flex-shrink-0">TNI/POLRI</label>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" class="custom-checkbox-success" name="pekerjaan" id="asn">
                        <label for="asn">ASN</label>
                    </div>
                    <div class="d-flex gap-2 align-items-center col-3">
                        <input type="radio" class="custom-checkbox-success" name="pekerjaan" id="pegawai_swasta">
                        <label for="pegawai_swasta" class="flex-shrink-0">Pegawai Swasta</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" name="pekerjaan" id="lainnya_pekerjaan">
                        <div class="d-flex align-items-center gap-2">
                            <label for="lainnya_pekerjaan">Lainnya</label>
                            <input type="text" class="form-control border-dark" id="lainnya_pekerjaan_input" name="lainnya_pekerjaan_input">
                        </div>
                    </div>
                </div>

                <div class="px-3 d-flex align-items-center gap-2">
                    <label for="pekerjaan_lainnya">:</label>
                    <input type="text" class="form-control border-dark" id="pekerjaan_lainnya" name="pekerjaan_lainnya">
                </div>

                <div class="d-flex gap-2 px-3 my-2 align-items-center">
                    <div class="d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" name="kebiasaan" id="merokok">
                        <label for="merokok" class="flex-shrink-0">Merokok</label>
                    </div>
                    <div class="d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" name="kebiasaan" id="alkohol">
                        <label for="alkohol" class="flex-shrink-0">Alkohol</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" name="kebiasaan" id="lainnya_kebiasaan">
                        <div class="d-flex gap-2 align-items-center w-100">
                            <label for="lainnya_kebiasaan" class="flex-shrink-0">lainnya, alasan :</label>
                            <input type="text" class="form-control border-dark" id="lainnya_kebiasaan_alasan" name="lainnya_kebiasaan_alasan">
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-5 px-3 my-2 align-items-center">
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" class="custom-checkbox-success" name="agama" id="islam">
                        <label for="islam">Islam</label>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" class="custom-checkbox-success" name="agama" id="kristen">
                        <label for="kristen">Kristen</label>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" class="custom-checkbox-success" name="agama" id="katolik">
                        <label for="katolik">Katolik</label>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" class="custom-checkbox-success" name="agama" id="budha">
                        <label for="budha">Budha</label>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" class="custom-checkbox-success" name="agama" id="konghucu">
                        <label for="konghucu">Konghucu</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">

                        <input type="text" class="form-control border-dark" id="lainnya_agama_input" name="lainnya_agama_input" hidden>
                    </div>
                </div>

                <div class="px-3 d-flex align-items-center gap-2">
                    <label for="agama_lainnya">:</label>
                    <input type="text" class="form-control border-dark" id="agama_lainnya" name="agama_lainnya">
                </div>

            </td>
        </tr>

        <!-- nutrisi -->
        <tr>
            <td>
                <div class="fw-bold text-uppercase ps-2 mb-4">Nutrisi</div>
                <div class="d-flex gap-4 flex-column ps-2">
                    <div>Diet saat ini</div>
                    <div>Penurunan / Kenaikan BB 6 bulan terakhir</div>
                    <div>Tinggi Badan</div>
                    <div>Riwayat Alergi</div>
                </div>
            </td>
            <td>
                <div class="d-flex gap-2 px-2 mt-5 align-items-center">
                    <label for="input_height">:</label>
                    <input type="text" class="form-control border-dark" id="input_height" name="input_height">
                </div>

                <div class="d-flex gap-2 px-2 mt-2 align-items-center">
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" class="custom-checkbox-danger" name="previous_blood_pressure" id="previous_blood_pressure_no" value="no">
                        <label for="previous_blood_pressure_no" class="flex-shrink-0">Tidak</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" name="previous_blood_pressure" id="previous_blood_pressure_yes" value="yes">
                        <label for="previous_blood_pressure_yes" class="flex-shrink-0">Ya, BB sebelumnya</label>
                        <input type="text" class="form-control border-dark" id="previous_blood_pressure_weight" name="previous_blood_pressure_weight"> kg
                    </div>
                </div>

                <div class="d-flex gap-2 px-2 mt-2 align-items-center">
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" name="current_blood_pressure" id="current_blood_pressure" value="yes">
                        <label for="current_blood_pressure" class="flex-shrink-0">BB saat ini</label>
                        <input type="text" class="form-control border-dark" id="current_blood_pressure_weight" name="current_blood_pressure_weight"> kg
                    </div>
                </div>

                <div class="d-flex gap-2 px-2 mt-2 align-items-center">
                    <label for="input_height_cm">:</label>
                    <input type="text" class="form-control border-dark" id="input_height_cm" name="input_height_cm"> cm
                </div>

                <div class="d-flex gap-2 px-2 mt-2 align-items-center mb-3">
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" class="custom-checkbox-danger" name="health_issue" id="health_issue_no" value="no">
                        <label for="health_issue_no" class="flex-shrink-0">Tidak</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" name="health_issue" id="health_issue_yes" value="yes">
                        <label for="health_issue_yes" class="flex-shrink-0">Ya, sebutkan</label>
                        <input type="text" class="form-control border-dark" id="health_issue_description" name="health_issue_description">
                    </div>
                </div>

            </td>
        </tr>

        <!-- penilaian nyeri -->
        <div class="row">
            <table class="table-bordered border-dark">
                <tr>
                    <td colspan="2">
                        <div class="fw-bold text-uppercase p-2">Penilaian Nyeri</div>
                    </td>
                </tr>

                <tr class="border-top-0 border-bottom-0">
                    <td class="border-bottom-0">
                        <div class="p-2">Apakah ada keluhan nyeri</div>
                    </td>
                    <td class="border-bottom-0 p-2">
                        <div class="d-flex gap-2">
                            <input type="radio" class="custom-checkbox-success" id="keluhan_nyeri_ya" name="keluhan_nyeri" value="ya">
                            <label for="keluhan_nyeri_ya" class="mx-1">Ya</label>
                            <input type="radio" class="custom-checkbox-danger" id="keluhan_nyeri_tidak" name="keluhan_nyeri" value="tidak">
                            <label for="keluhan_nyeri_tidak" class="mx-1">Tidak</label>
                        </div>
                    </td>
                </tr>
                <tr class="border-top-0 border-bottom-0">
                    <td class="border-top-0 border-bottom-0">
                        <div class="p-2">Pengkajian nyeri (jika ada nyeri)</div>
                    </td>
                    <td class="border-top-0 border-bottom-0"></td>
                </tr>

                <tr class="border-top-0 border-bottom-0">
                    <td class="border-top-0 border-bottom-0">
                        <div class="ps-5 d-flex flex-column gap-3 justify-content-center">
                            <label for="pemicu_nyeri">Pemicu</label>
                            <label for="kualitas_nyeri">Kualitas</label>
                            <label for="lokasi_nyeri">Lokasi</label>
                            <label for="skala_nyeri">Skala Numerik</label>
                            <label for="durasi_nyeri">Durasi muncul nyeri</label>
                        </div>
                    </td>
                    <td class="border-top-0 border-bottom-0">
                        <div class="p-2 d-flex flex-column gap-3">
                            <input type="text" class="form-control border-dark" id="pemicu_nyeri" name="pemicu_nyeri">
                            <input type="text" class="form-control border-dark" id="kualitas_nyeri" name="kualitas_nyeri">
                            <input type="text" class="form-control border-dark" id="lokasi_nyeri" name="lokasi_nyeri">
                            <input type="text" class="form-control border-dark" id="skala_nyeri" name="skala_nyeri">
                            <input type="text" class="form-control border-dark" id="durasi_nyeri" name="durasi_nyeri">
                        </div>
                    </td>
                </tr>


                <tr class="border-top-0 border-bottom-0">
                    <td class="border-top-0 border-bottom-0 p-2">
                        <div>THT</div>
                    </td>
                    <td class="border-top-0 border-bottom-0">
                        <div class="d-flex gap-2 ps-2">
                            <input type="radio" class="custom-checkbox-success"> <label for="">Tonsil</label>
                            <input type="radio" class="custom-checkbox-success"> <label for="">Pharing</label>
                            <input type="radio" class="custom-checkbox-success"> <label for="">Lidah </label>
                            <input type="radio" class="custom-checkbox-success"> <label for="">Bibir </label>
                        </div>
                    </td>
                </tr>

                <tr class="border-top-0 border-bottom-0">
                    <td class="border-top-0 border-bottom-0 p-2">
                        <div>Leher</div>
                    </td>
                    <td class="border-top-0 border-bottom-0">
                        <div class="d-flex gap-2 ps-2">
                            <input type="radio" class="custom-checkbox-success"> <label for="">JVP</label>
                            <input type="radio" class="custom-checkbox-success"> <label for="">Pembesaran Kelenjar</label>
                            <input type="radio" class="custom-checkbox-success"> <label for="">Kaku kuduk +/- </label>
                        </div>
                    </td>
                </tr>

                <!-- thorax -->
                <tr class="border-top-0 border-bottom-0">
                    <td class="border-top-0 border-bottom-0 p-2">
                        <div>Thorax</div>
                    </td>
                    <td class="border-top-0 border-bottom-0">
                        <div class="d-flex gap-2 ps-2">
                            <input type="radio" class="custom-checkbox-success"> <label for="">Simetris</label>
                            <input type="radio" class="custom-checkbox-success"> <label for="">Asimetris</label>
                        </div>
                    </td>
                </tr>


                <tr class="border-top-0 border-bottom-0">
                    <td class="border-top-0 border-bottom-0 ps-5">
                        <div>Cor</div>
                        <div class="mt-2">Pulmo</div>
                    </td>
                    <td class="border-top-0 border-bottom-0">
                        <div class="d-flex gap-2 px-2 align-items-center gap-2">
                            <div class="d-flex gap-2 col-1">
                                <div class="d-flex gap-2">
                                    <input type="radio" class="custom-checkbox-success" id="s1_s2" name="heartbeat">
                                    <label for="s1_s2" class="form-check-label">S1/S2</label>
                                </div>
                            </div>

                            <div class="d-flex gap-2 col-3">
                                <div class="d-flex gap-2">
                                    <input type="radio" class="custom-checkbox-success" id="reguler_ireguler" name="heartbeat">
                                    <label for="reguler_ireguler" class="form-check-label">Reguler / Ireguler</label>
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <div class="d-flex gap-2">
                                    <input type="radio" class="custom-checkbox-success" id="murmur" name="heartbeat">
                                    <label for="murmur" class="form-check-label">Murmur</label>
                                </div>
                            </div>

                            <div class="d-flex gap-2 align-items-center gap-2 w-100">
                                <div class="d-flex gap-2 align-items-center gap-2 w-100">
                                    <label for="lainnya_input">Lainnya</label>
                                    <input type="text" class="form-control border-dark" id="lainnya_input" name="lainnya_input">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2 gap-3 px-2 align-items-center mt-2">
                            <div class="d-flex gap-2 col-2">
                                <input type="radio" class="custom-checkbox-success" id="suara_nafas" name="breathing">
                                <label for="suara_nafas" class="form-check-label">Suara nafas</label>
                            </div>

                            <div class="d-flex gap-2">
                                <input type="radio" class="custom-checkbox-success" id="ronchi" name="breathing">
                                <label for="ronchi" class="form-check-label">Ronchi</label>
                            </div>

                            <div class="d-flex gap-2">
                                <input type="radio" class="custom-checkbox-success" id="wheezing" name="breathing">
                                <label for="wheezing" class="form-check-label">Wheezing</label>
                            </div>

                            <div class="d-flex align-items-center gap-2 w-100">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="lainnya_suara_input" class="form-check-label">Lainnya</label>
                                    <input type="text" class="form-control border-dark" id="lainnya_suara_input" name="lainnya_suara_input">
                                </div>
                            </div>
                        </div>

        </div>

        <!-- Abdomen -->
        <tr class="border-top-0 border-bottom-0">
            <td class="border-top-0 border-bottom-0 p-2">
                <div>Abdomen</div>
            </td>
            <td class="border-top-0 border-bottom-0">
                <div class="d-flex gap-2 px-2 align-items-center my-2">
                    <div class="d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" id="distensi" name="abdomen_condition">
                        <label for="distensi" class="form-check-label">Distensi</label>
                    </div>

                    <div class="d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" id="asites" name="abdomen_condition">
                        <label for="asites" class="form-check-label">Asites</label>
                    </div>

                    <div class="d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" id="meteorismus" name="abdomen_condition">
                        <label for="meteorismus" class="form-check-label">Meteorismus</label>
                    </div>

                    <div class="d-flex gap-2 w-100">
                        <input type="radio" class="custom-checkbox-success" id="nyeri_tekan" name="abdomen_condition">
                        <div class="d-flex gap-2 w-100">
                            <label for="nyeri_tekan" class="form-check-label">Nyeri Tekan, lokasi</label>
                            <input type="text" class="form-control border-dark" id="nyeri_tekan_lokasi" name="nyeri_tekan_lokasi">
                        </div>
                    </div>
                </div>
            </td>
        </tr>


        <!-- perialistik -->
        <tr class="border-top-0 border-bottom-0">
            <td class="border-top-0 border-bottom-0 ps-5">
                <div>Perialistik</div>
                <label for="lainnya-1">Hepar</label>
            </td>
            <td class="border-top-0 border-bottom-0">
                <div class="d-flex gap-3 px-2 align-items-center">
                    <input type="radio" class="custom-checkbox-success" name="status" id="normal">
                    <label for="normal" class="flex-shrink-0">Normal</label>

                    <input type="radio" class="custom-checkbox-success" name="status" id="meningkat">
                    <label for="meningkat" class="flex-shrink-0">Meningkat</label>

                    <input type="radio" class="custom-checkbox-success" name="status" id="menurun">
                    <label for="menurun" class="flex-shrink-0">Menurun</label>
                </div>

                <div class="d-flex gap-3 px-2 align-items-center mt-2">
                    <input type="text" class="form-control border-dark w-50" name="lainnya-1" id="lainnya-1">
                    <label for="lainnya-2" class="flex-shrink-0">Lainnya</label>
                    <input type="text" class="form-control border-dark" name="lainnya-2" id="lainnya-2">
                </div>

                <!-- ekremitas -->
        <tr class="border-top-0 border-bottom-0">
            <td class="border-top-0 border-bottom-0 p-2">
                <div>Eksremitas</div>
            </td>
            <td class="border-top-0 border-bottom-0">
                <div class="d-flex gap-3 px-2 align-items-center my-2">
                    <div>
                        <input type="radio" class="custom-checkbox-success" name="ekstremitas" id="hangat">
                        <label for="hangat" class="flex-shrink-0">Hangat</label>
                    </div>

                    <div>
                        <input type="radio" class="custom-checkbox-success" name="ekstremitas" id="dingin">
                        <label for="dingin" class="flex-shrink-0">Dingin</label>
                    </div>

                    <div>
                        <input type="radio" class="custom-checkbox-success" name="ekstremitas" id="odema">
                        <label for="odema" class="flex-shrink-0">Odema</label>
                    </div>

                    <div class="d-flex align-items-center w-100 gap-2">
                        <label for="lainnya-ekstremitas" class="flex-shrink-0">Lainnya</label>
                        <input type="text" class="form-control border-dark" name="lainnya-ekstremitas" id="lainnya-ekstremitas">
                    </div>

                </div>
            </td>
        </tr>



        <tr class="border-bottom-0">
            <td class="border-top-0 border-bottom-0" colspan="2">
                <div class="fw-bold py-2 ps-2">ASESMEN SINDROM GERIATRI</div>
                <div class="ps-4">
                    <!-- col-1 -->
                    <div class="d-flex flex-column gap-2 mb-3">
                        <span>1. Penapisan status fungsional</span>
                        <span class="ms-3">Activity Daily Living (ADL) Barthel</span>
                        <div class="d-flex gap-3 ms-3">
                            <input type="radio" class="custom-checkbox-success" name="adl-status" id="mandiri">
                            <label for="mandiri">Mandiri</label>

                            <input type="radio" class="custom-checkbox-success" name="adl-status" id="ketergantungan-ringan">
                            <label for="ketergantungan-ringan">Ketergantungan ringan</label>

                            <input type="radio" class="custom-checkbox-success" name="adl-status" id="ketergantungan-sedang">
                            <label for="ketergantungan-sedang">Ketergantungan Sedang</label>

                            <input type="radio" class="custom-checkbox-success" name="adl-status" id="ketergantungan-berat">
                            <label for="ketergantungan-berat">Ketergantungan Berat</label>

                            <input type="radio" class="custom-checkbox-success" name="adl-status" id="ketergantungan-total">
                            <label for="ketergantungan-total">Ketergantungan Total</label>
                        </div>
                    </div>

                    <!-- col 2 -->
                    <div class="d-flex flex-column gap-2 my-3">
                        <span>2. Penapisan ACS (Acute Confusional State)/ Sindrom Delirium Akut</span>
                        <div class="d-flex gap-3 ms-3">
                            <input type="radio" class="custom-checkbox-success" name="acs-status" id="acs-ya">
                            <label for="acs-ya">Ya</label>

                            <input type="radio" class="custom-checkbox-success" name="acs-status" id="acs-tidak">
                            <label for="acs-tidak">Tidak</label>
                        </div>
                    </div>

                    <!-- col 3 -->
                    <div class="d-flex flex-column gap-2 my-3">
                        <span>3. Penilaian Status Nutrisi</span>
                        <div class="d-flex gap-3 ms-3">
                            <input type="radio" class="custom-checkbox-success" name="status-nutrisi" id="nutrisi-normal">
                            <label for="nutrisi-normal">Normal</label>

                            <input type="radio" class="custom-checkbox-success" name="status-nutrisi" id="nutrisi-manultrisi">
                            <label for="nutrisi-manultrisi">Manultrisi</label>
                        </div>
                    </div>

                    <!-- col 4 -->
                    <div class="d-flex flex-column gap-2 my-3">
                        <span>4. Penapisan Kognitif</span>
                        <div class="d-flex gap-3 ms-3">
                            <input type="radio" class="custom-checkbox-success" name="kognitif-status" id="kognitif-normal">
                            <label for="kognitif-normal">Normal</label>

                            <input type="radio" class="custom-checkbox-success" name="kognitif-status" id="kognitif-ringan">
                            <label for="kognitif-ringan">Gangguan Kognitif Ringan</label>

                            <input type="radio" class="custom-checkbox-success" name="kognitif-status" id="kognitif-pasti">
                            <label for="kognitif-pasti">Gangguan Kognitif Pasti</label>

                            <input type="radio" class="custom-checkbox-success" name="kognitif-status" id="kognitif-dievaluasi">
                            <label for="kognitif-dievaluasi">Gangguan Kognitif Dievaluasi</label>
                        </div>
                    </div>

                    <!-- col 5 -->
                    <div class="d-flex flex-column gap-2 my-3">
                        <span>5. Penapisan Depresi GDS (Geriatri Depression Scale)</span>
                        <div class="d-flex gap-3 ms-3">
                            <input type="radio" class="custom-checkbox-success" name="depresi-gds" id="depresi-normal">
                            <label for="depresi-normal">Normal (0-5)</label>

                            <input type="radio" class="custom-checkbox-success" name="depresi-gds" id="depresi-risiko">
                            <label for="depresi-risiko">Resiko Depresi (6-10)</label>

                            <input type="radio" class="custom-checkbox-success" name="depresi-gds" id="depresi-depresi">
                            <label for="depresi-depresi">Depresi (>10)</label>

                            <input type="radio" class="custom-checkbox-success" name="depresi-gds" id="depresi-belum-dievaluasi">
                            <label for="depresi-belum-dievaluasi">Belum Dapat Dievaluasi</label>
                        </div>
                    </div>

                    <!-- col 6 -->
                    <div class="d-flex flex-column gap-2 my-3">
                        <span>6. Penapisan Inkontinensia</span>
                        <div class="d-flex gap-3 ms-3 align-items-center">
                            <div class="d-flex align-items-center gap-2 me-3 col-3">
                                <input type="radio" class="custom-checkbox-success" name="inkontinensia" id="inkontinensia-tidak-ada">
                                <label for="inkontinensia-tidak-ada" class="flex-shrink-0">Tidak Ada Inkontinensia </label>
                            </div>
                            <div class="d-flex align-items-center gap-2 w-100">
                                <input type="radio" class="custom-checkbox-success" name="inkontinensia" id="inkontinensia-ada">
                                <div class="d-flex align-items-center w-100 gap-2">
                                    <label for="inkontinensia-ada" class="flex-shrink-0">Ada Inkontinensia: Akut / Kronik, Jenis: </label>
                                    <input type="text" class="form-control border-dark me-3" name="inkontinensia-jenis" id="inkontinensia-jenis">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- col 7 -->
                    <div class="d-flex flex-column gap-2 my-3">
                        <span>7. Penapisan Tromboemboli Vena (DVT dan Emboli Paru) pada imobilisasi (Prediksi Klinis Wells)</span>
                        <div class="d-flex gap-3 ms-3">
                            <input type="radio" class="custom-checkbox-success" name="tromboemboli-status" id="tromboemboli-rendah">
                            <label for="tromboemboli-rendah">Resiko Rendah ( < 1)</label>

                                    <input type="radio" class="custom-checkbox-success" name="tromboemboli-status" id="tromboemboli-sedang">
                                    <label for="tromboemboli-sedang">Resiko Sedang ( 1-2 )</label>

                                    <input type="radio" class="custom-checkbox-success" name="tromboemboli-status" id="tromboemboli-tinggi">
                                    <label for="tromboemboli-tinggi">Resiko Tinggi(> 3)</label>
                        </div>
                    </div>

                    <!-- col 8 -->
                    <div class="d-flex flex-column gap-2 my-3">
                        <span>8. Penapisan Ulkus Dekubitus pada Imobilisasi (Skala Norton)</span>
                        <div class="d-flex gap-3 ms-3 align-items-center">
                            <input type="radio" class="custom-checkbox-success" name="ulkus-dekubitus" id="ulkus-rendah">
                            <label for="ulkus-rendah" class="flex-shrink-0">Resiko Rendah( > 14) </label>

                            <input type="radio" class="custom-checkbox-success" name="ulkus-dekubitus" id="ulkus-sedang">
                            <label for="ulkus-sedang" class="flex-shrink-0">Resiko Sedang (12-13) </label>

                            <input type="radio" class="custom-checkbox-success" name="ulkus-dekubitus" id="ulkus-tinggi">
                            <label for="ulkus-tinggi" class="flex-shrink-0">Resiko Tinggi ( < 12) </label>
                        </div>
                    </div>

                    <!-- col 9 -->
                    <div class="d-flex flex-column gap-2 mb-3">
                        <span>9. Penapisan Insomnia</span>
                        <div class="d-flex gap-3 ms-3">
                            <input type="radio" class="custom-checkbox-success" name="insomnia-status" id="insomnia-tidak-ada">
                            <label for="insomnia-tidak-ada">Tidak Ada</label>

                            <input type="radio" class="custom-checkbox-success" name="insomnia-status" id="insomnia-general">
                            <label for="insomnia-general">General Insomnia</label>

                            <input type="radio" class="custom-checkbox-success" name="insomnia-status" id="insomnia-initial">
                            <label for="insomnia-initial">Initial Insomnia</label>

                            <input type="radio" class="custom-checkbox-success" name="insomnia-status" id="insomnia-middle">
                            <label for="insomnia-middle">Middle Insomnia</label>

                            <input type="radio" class="custom-checkbox-success" name="insomnia-status" id="insomnia-late">
                            <label for="insomnia-late">Late Insomnia</label>
                        </div>
                    </div>

                    <!-- col 10 -->
                    <div class="d-flex gap-2 mb-3 align-items-center me-3">
                        <label for="lain-lain" class="flex-shrink-0">10. Lain-lain</label>
                        <input type="text" class="form-control border-dark" name="lain-lain" id="lain-lain">
                    </div>


                </div>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div class="p-2">
                    <div class="text-uppercase fw-bold">HASIL PEMERIKSAAN PENUNJANG</div>
                    <textarea name="pemeriksa_penunjang1" id="pemeriksa_penunjang" rows="6" class="form-control border-dark"></textarea>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div class="p-2">
                    <div class="text-uppercase fw-bold">DIAGNOSIS (NO. ICD X)</div>
                    <textarea name="pemeriksa_penunjang2" id="pemeriksa_penunjang" rows="6" class="form-control border-dark"></textarea>
                </div>

                <!-- sindrom Geriatri -->
                <div class="p-2 my-2">
                    <div class="fw-bold my-2">SINDROM GERIATRI</div>
                    <div class="d-flex flex-wrap">
                        <div class="d-flex align-items-center col-2 mb-2 gap-1">
                            <input type="radio" class="custom-checkbox-success" name="condition" id="delirium" value="delirium">
                            <label for="delirium">Delirium</label>
                        </div>

                        <div class="d-flex align-items-center col-2 mb-2 gap-1">
                            <input type="radio" class="custom-checkbox-success" name="condition" id="instabilitas-fall" value="instabilitas-fall">
                            <label for="instabilitas-fall">Instabilitas/ Fall</label>
                        </div>

                        <div class="d-flex align-items-center col-2 mb-2 gap-1">
                            <input type="radio" class="custom-checkbox-success" name="condition" id="immobilisasi" value="immobilisasi">
                            <label for="immobilisasi">Immobilisasi</label>
                        </div>

                        <div class="d-flex align-items-center col-2 mb-2 gap-1">
                            <input type="radio" class="custom-checkbox-success" name="condition" id="inkontinensia" value="inkontinensia">
                            <label for="inkontinensia">Inkontinensia</label>
                        </div>

                        <div class="d-flex align-items-center col-2 mb-2 gap-1">
                            <input type="radio" class="custom-checkbox-success" name="condition" id="demensia" value="demensia">
                            <label for="demensia">Demensia</label>
                        </div>

                        <div class="d-flex align-items-center col-2 mb-2 gap-1">
                            <input type="radio" class="custom-checkbox-success" name="condition" id="ulkus-dekubitus" value="ulkus-dekubitus">
                            <label for="ulkus-dekubitus">Ulkus Dekubitus</label>
                        </div>

                        <div class="d-flex align-items-center col-2 mb-2 gap-1">
                            <input type="radio" class="custom-checkbox-success" name="condition" id="depresi" value="depresi">
                            <label for="depresi">Depresi</label>
                        </div>

                        <div class="d-flex align-items-center col-2 mb-2 gap-1">
                            <input type="radio" class="custom-checkbox-success" name="condition" id="malnutrisi" value="malnutrisi">
                            <label for="malnutrisi">Malnutrisi</label>
                        </div>

                        <div class="d-flex align-items-center col-2 mb-2 gap-1">
                            <input type="radio" class="custom-checkbox-success" name="condition" id="insomnia" value="insomnia">
                            <label for="insomnia">Insomnia</label>
                        </div>

                        <div class="d-flex align-items-center col-3 mb-2 gap-1 w-100">
                            <input type="radio" class="custom-checkbox-success" name="condition" id="lain_insomnia" value="lainnya" onclick="handleLainnyaSelection()">
                            <div class="d-flex align-items-center gap-2 w-100">
                                <label for="lain_insomnia">Lainnya</label>
                                <input type="text" class="form-control border-dark" name="lainnya" id="lainnya">
                            </div>
                        </div>
                    </div>
                </div>

                </div>
                <!-- batas sindrom -->

                <div class="p-2">
                    <div class="text-uppercase fw-bold">IMPAIRMENT (ICF)/ DISABILITY/ HANDICAP</div>
                    <textarea name="pemeriksa_penunjang" id="pemeriksa_penunjang" rows="6" class="form-control border-dark"></textarea>
                </div>

            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div class="p-2">
                    <div class="text-uppercase fw-bold">REKOMENDASI</div>
                    <textarea name="rekomendasi" id="pemeriksa_penunjang" rows="6" class="form-control border-dark"></textarea>
                </div>

                <div class="p-2">
                    <div class="text-uppercase fw-bold">REKOMENDASI</div>
                    <div class="d-flex flex-column gap-2 my-3">
                        <div class="d-flex gap-2 align-items-center">
                            <label for="" class="col-3">Medis</label>
                            :<input type="text" class="form-control border-dark" name="medis">
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <label for="" class="col-3">KEPERAWATAN/ PROFESI LAIN </label>
                            :<input type="text" class="form-control border-dark" name="keperawatan">
                        </div>
                    </div>
                </div>

                <div class="p-2">
                    <div class="text-uppercase fw-bold my-2">DISPOSISI</div>

                    <div class="d-flex gap-3">
                        <div class="d-flex align-items-center col-2 mb-2 gap-1"><input type="radio" class="custom-checkbox-success" name="disposisi" value="boleh_pulang" id="boleh_pulang"><label for="boleh_pulang">Boleh Pulang</label></div>
                        <div class="d-flex align-items-center col-2 mb-2 gap-1"><input type="radio" class="custom-checkbox-success" name="disposisi" value="boleh_pulang" id="boleh_pulang"><label for="">Rujuk</label></div>
                        <div class="d-flex align-items-center col-2 mb-2 gap-1"><input type="radio" class="custom-checkbox-success" name="disposisi" value="kontrol_ulang" id="kontrol_ulang"><label for="kontrol_ulang">Kontrol Ulang</label></div>
                    </div>
                </div>

            </td>
        </tr>


</table>
</div>
<table class="table table-bordered border-dark">
    <tr>
        <td class="col-6">
            <div class="text-center ">
                <span> Dokter DPJP</span>
            </div>
             <div>
                <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_pengkaji" />
            </div>
            <select type="select" name="dokter_pengkaji" id="dokter_pengkaji" class="form-select dokter" style="width: 100%;"></select>
        </td>
        <td>
            <div class="text-center">
                <span>Perawat Yang Mengkaji</span>
            </div>
            <div>
                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_saksi_pengkaji" />
            </div>
            <div class="mt-3">
                <select type="select" name="saksi_pengkaji" id="saksi_pengkaji" class="form-select perawat" style="width: 100%;"></select>
            </div>
        </td>
    </tr>
</table>
</tbody>

</table>




<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawat = []
    let dataDokter = []

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

        $('#saksi_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_saksi_pengkaji')
        });

        //================ new =====================//
    });



    function cbCommon(data) {
        
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

        $('#saksi_pengkaji').prop('disabled', false)
        $('#saksi_pengkaji').select2('open')
        $('#saksi_pengkaji').select2('close')
        if (mode === "lihat")
            $('#saksi_pengkaji').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#saksi_pengkaji').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_saksi_pengkaji')
                }
            })
        }, 1000)



        function focusInput(inputId) {
            // Focus the input field when the corresponding radio button is clicked
            document.getElementById(inputId).focus();
        }

        function clearInput(inputId) {
            // Clear the value of the input field when the corresponding "Tidak Ada" radio button is selected
            document.getElementById(inputId).value = "";
        }

        // Clear the value of the input when any radio button is clicked
        document.querySelectorAll('input[name="condition"]').forEach(function(radio) {
            radio.addEventListener('click', function() {
                // If another radio button is selected, clear the input field
                if (this.id !== 'lain_insomnia') {
                    document.getElementById('lainnya').value = '';
                }
            });
        });

        function handleLainnyaSelection() {
            var lainnyaRadio = document.getElementById('lain_insomnia');
            var lainnyaInput = document.getElementById('lainnya');

            // If "Lainnya" radio button is selected, focus on the input
            if (lainnyaRadio.checked) {
                lainnyaInput.focus();
            }
        }

        // Event listeners for radio buttons to focus/clear inputs
        document.getElementById('previous_blood_pressure_yes').addEventListener('click', function() {
            focusInput('previous_blood_pressure_weight');
        });

        document.getElementById('previous_blood_pressure_no').addEventListener('click', function() {
            clearInput('previous_blood_pressure_weight');
        });


        // Focus or clear the "Cerai Hidup Alasan" input based on the radio button selection
        document.getElementById("cerai_hidup").addEventListener("click", function() {
            focusInput("cerai_hidup_alasan");
        });
        document.getElementById("cerai_mati").addEventListener("click", function() {
            clearInput("cerai_hidup_alasan");
        });
        document.getElementById("kawin").addEventListener("click", function() {
            clearInput("cerai_hidup_alasan");
        });

        // Focus or clear the "Jumlah Anak" input based on the radio button selection
        document.getElementById("ada_anak").addEventListener("click", function() {
            focusInput("jumlah_anak");
        });
        document.getElementById("tidak_ada_anak").addEventListener("click", function() {
            clearInput("jumlah_anak");
        });

        // Focus or clear the "Lainnya Pendidikan" input based on the radio button selection
        document.getElementById("lainnya_pendidikan").addEventListener("click", function() {
            focusInput("lainnya_pendidikan_input");
        });
        document.getElementById("sd").addEventListener("click", function() {
            clearInput("lainnya_pendidikan_input");
        });
        document.getElementById("smp").addEventListener("click", function() {
            clearInput("lainnya_pendidikan_input");
        });
        document.getElementById("sma").addEventListener("click", function() {
            clearInput("lainnya_pendidikan_input");
        });

        // Focus or clear the "Lainnya Pekerjaan" input based on the radio button selection
        document.getElementById("lainnya_pekerjaan").addEventListener("click", function() {
            focusInput("lainnya_pekerjaan_input");
        });
        document.getElementById("tni_polri").addEventListener("click", function() {
            clearInput("lainnya_pekerjaan_input");
        });
        document.getElementById("asn").addEventListener("click", function() {
            clearInput("lainnya_pekerjaan_input");
        });
        document.getElementById("pegawai_swasta").addEventListener("click", function() {
            clearInput("lainnya_pekerjaan_input");
        });

        // Focus or clear the "Lainnya Kebiasaan" input based on the radio button selection
        document.getElementById("lainnya_kebiasaan").addEventListener("click", function() {
            focusInput("lainnya_kebiasaan_alasan");
        });
        document.getElementById("merokok").addEventListener("click", function() {
            clearInput("lainnya_kebiasaan_alasan");
        });
        document.getElementById("alkohol").addEventListener("click", function() {
            clearInput("lainnya_kebiasaan_alasan");
        });

        // Focus or clear the "Lainnya Agama" input based on the radio button selection
        document.getElementById("lainnya_agama").addEventListener("click", function() {
            focusInput("lainnya_agama_input");
        });
        document.getElementById("islam").addEventListener("click", function() {
            clearInput("lainnya_agama_input");
        });
        document.getElementById("kristen").addEventListener("click", function() {
            clearInput("lainnya_agama_input");
        });
        document.getElementById("katolik").addEventListener("click", function() {
            clearInput("lainnya_agama_input");
        });
        document.getElementById("budha").addEventListener("click", function() {
            clearInput("lainnya_agama_input");
        });
    }
</script>