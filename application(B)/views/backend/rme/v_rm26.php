<!-- rm 26 -->
<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark">
            <tr>
                <td colspan="8">
                    <p>Nama : <input type="text" class="form-control border-dark" name="nama_pasien"></p>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <p>Tgl Lahir : <input type="date" class="form-control border-dark" name="tanggal_lahir"></p>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <p>Jenis Kelamin : <input type="text" class="form-control border-dark" name="jenkel"></p>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <p>No. RM : <input type="text" class="form-control border-dark" name="no_rm"></p>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <p>Diagnosa : <select type="select" name="diagnosa" id="diagnosa" class="form-control border-dark diagnosa">
                        </select></p>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <p>DPJP : <input type="text" class="form-control border-dark" name="nama_dokter"></p>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <p>Tanggal Masuk RS : <input type="text" class="form-control border-dark" name="tgl_admit"></p>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <p>Tanggal Dilakukan Rencana Pemulangan Pasien : <input type="date" class="form-control border-dark" name="tgl_rencana_pemulangan"></p>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <p>Estimasi Tanggal Pemulangan Pasien : <input type="date" class="form-control border-dark" name="estimasi_tgl_pemulangan"></p>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <p>Usia Lanjut (≥ 65 tahun atau lebih)</p>
                </td>
                <td colspan="3">
                    <p>
                        <select class="form-control border-dark" name="usia_lanjut">
                            <option value="pilih">--Pilih--</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <p>Hambatan Mobilisasi</p>
                </td>
                <td colspan="3">
                    <p>
                        <select class="form-control border-dark" name="hambatan_mobilisasi">
                            <option value="pilih2">--Pilih--</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <p>Membutuhkan pelayanan medis dan perawatan berkelanjutan</p>
                </td>
                <td colspan="3">
                    <p>
                        <select class="form-control border-dark" name="pelayanan_medis_berkelanjutan">
                            <option value="pilih3">--Pilih--</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <p>Tergantung dengan orang lain dalam aktifitas sehari-hari</p>
                </td>
                <td colspan="3">
                    <p>
                        <select class="form-control border-dark" name="tergantung_orang_lain">
                            <option value="pilih4">--Pilih--</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <p>Pasien membawa pulang alkes</p>
                </td>
                <td colspan="3">
                    <p>
                        <select class="form-control border-dark" name="alkes">
                            <option value="pilih5">--Pilih--</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p><strong>Fase</strong></p>
                </td>
                <td colspan="3">
                    <p><strong>Kegiatan</strong></p>
                </td>
                <td>
                    <p><strong>Tanggal</strong></p>
                </td>
                <td>
                    <p><strong>Jam</strong></p>
                </td>
                <td>
                    <p><strong>Evaluasi</strong></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="4">
                    <p><strong>Tahap I Pasien Masuk</strong></p>
                </td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="tahap1_kegiatan1"></p>
                </td>
                <td colspan="2">
                    <p>Pengkajian fisik dan psikososial</p>
                </td>
                <td rowspan="4">
                    <input type="date" class="form-control border-dark" name="catatan_pulang_tanggal">
                </td>
                <td rowspan="4">
                    <input type="time" class="form-control border-dark" name="catatan_pulang_jam">
                </td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="tahap1_evaluasi1"> Terlampir di asesmen awal</p>
                    <p>Medis dan keperawatan</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="tahap1_kegiatan2"></p>
                </td>
                <td colspan="2">
                    <p>Pengkajian status fungsional</p>
                </td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="tahap1_evaluasi2"> Terlampir di asesmen awal</p>
                    <p>Medis dan keperawatan</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="tahap1_kegiatan3"></p>
                </td>
                <td colspan="2">
                    <p>Pengkajian kebutuhan mengenai pendidikan kesehatan tentang :</p>
                    <ol>
                        <li>Proses penyakit</li>
                        <li>Obat-obatan</li>
                        <li>Prosedur cara perawatan</li>
                        <li>Pencegahan factor resiko</li>
                        <li>Lingkungan yang perlu dipersiapkan</li>
                        <li>Rencana tindak lanjut</li>
                        <li>Support system</li>
                    </ol>
                </td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="tahap1_evaluasi3"> Butuh edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="tahap1_evaluasi3_detail1"></p>
                    <p><input type="text" class="form-control border-dark" name="tahap1_evaluasi3_detail2"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="tahap1_kegiatan4"></p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="tahap1_kegiatan5"></p>
                </td>
                <td colspan="2">
                    <p>Pemahaman pasien keluarga terhadap penjelasan dari</p>
                    <p>Fisioterapi</p>
                    <p>Ahli Gizi</p>
                </td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="tahap1_evaluasi4"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="tahap1_evaluasi5"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="tahap1_evaluasi5_detail"></p>
                </td>
            </tr>

            <tr>
                <td rowspan="8" colspan="2">Tahap II</td>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase2Checkbox_1"></td>
                <td colspan="2">PenKes tentang proses penyakit

                    <ol type="a">
                        <li>Pengertian, penyebab, tanda dan gejala</li>
                        <li>Faktor resiko</li>
                        <li>Komplikasi</li>
                    </ol>
                </td>
                <td><input type="date" class='form-control border-dark' name="fase2Date_2"></td>
                <td><input type="time" class='form-control border-dark' name="fase2Time_3"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi4"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi5"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase2_evaluasi5_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase2Checkbox_4"></td>
                <td colspan="2">PenKes tentang obat-obatan</td>
                <td><input type="date" class='form-control border-dark' name="fase2Date_5"></td>
                <td><input type="time" class='form-control border-dark' name="fase2Time_6"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi7"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi8"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase2_evaluasi8_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase2Checkbox_7"></td>
                <td colspan="2">PenKes tentang piranti laksanaan</td>
                <td><input type="date" class='form-control border-dark' name="fase2Date_8"></td>
                <td><input type="time" class='form-control border-dark' name="fase2Time_9"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi10"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi11"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase2_evaluasi11_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase2Checkbox_10"></td>
                <td colspan="2">PenKes tentang pemeriksaan diagnostik</td>
                <td><input type="date" class='form-control border-dark' name="fase2Date_11"></td>
                <td><input type="time" class='form-control border-dark' name="fase2Time_12"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi13"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi14"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase2_evaluasi14_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase2Checkbox_13"></td>
                <td colspan="2">PenKes tentang rehabilitasi</td>
                <td><input type="date" class='form-control border-dark' name="fase2Date_14"></td>
                <td><input type="time" class='form-control border-dark' name="fase2Time_15"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi16"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi17"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase2_evaluasi17_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase2Checkbox_16"></td>
                <td colspan="2">PenKes tentang perawatan dalam hygiene personal</td>
                <td><input type="date" class='form-control border-dark' name="fase2Date_17"></td>
                <td><input type="time" class='form-control border-dark' name="fase2Time_18"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi19"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi20"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase2_evaluasi20_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase2Checkbox_19"></td>
                <td colspan="2">PenKes tentang perubahan posisi</td>
                <td><input type="date" class='form-control border-dark' name="fase2Date_20"></td>
                <td><input type="time" class='form-control border-dark' name="fase2Time_21"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi22"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi23"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase2_evaluasi23_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase2Checkbox_22"></td>
                <td colspan="2">PenKes tentang pencegahan jatuh</td>
                <td><input type="date" class='form-control border-dark' name="fase2Date_23"></td>
                <td><input type="time" class='form-control border-dark' name="fase2Time_24"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi25"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase2_evaluasi26"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase2_evaluasi26_detail"></p>
                </td>
            </tr>


            <tr>
                <td rowspan="7" colspan="2">Tahap III<br>Fase Stabilisasi</td>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase3Checkbox_1"></td>
                <td colspan="2">Penkes tentang modifikasi gaya hidup</td>
                <td><input type="date" class="form-control border-dark" name="fase3Date_2"></td>
                <td><input type="time" class="form-control border-dark" name="fase3Time_3"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi4"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi5"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase3_evaluasi5_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase3Checkbox_5"></td>
                <td colspan="2">Diskusi tentang modifikasi lingkungan pasien setelah pulang dari rumah sakit</td>
                <td><input type="date" class="form-control border-dark" name="fase3Date_6"></td>
                <td><input type="time" class="form-control border-dark" name="fase3Time_7"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi8"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi9"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase3_evaluasi9_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase3Checkbox_10"></td>
                <td colspan="2">Penkes tentang cara perawatan luka</td>
                <td><input type="date" class="form-control border-dark" name="fase3Date_11"></td>
                <td><input type="time" class="form-control border-dark" name="fase3Time_12"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi13"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi14"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase3_evaluasi14_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase3Checkbox_15"></td>
                <td colspan="2">Diskusikan tentang cara perawatan luka</td>
                <td><input type="date" class="form-control border-dark" name="fase3Date_16"></td>
                <td><input type="time" class="form-control border-dark" name="fase3Time_17"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi18"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi19"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase3_evaluasi19_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase3Checkbox_20"></td>
                <td colspan="2">Diskusikan tentang cara perawatan lanjutan pasien</td>
                <td><input type="date" class="form-control border-dark" name="fase3Date_21"></td>
                <td><input type="time" class="form-control border-dark" name="fase3Time_22"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi23"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi24"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase3_evaluasi24_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase3Checkbox_25"></td>
                <td colspan="2">Bantuan ADL</td>
                <td><input type="date" class="form-control border-dark" name="fase3Date_26"></td>
                <td><input type="time" class="form-control border-dark" name="fase3Time_27"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi28"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi29"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase3_evaluasi29_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase3Checkbox_30"></td>
                <td colspan="2">Jadwal kontrol</td>
                <td><input type="date" class="form-control border-dark" name="fase3Date_31"></td>
                <td><input type="time" class="form-control border-dark" name="fase3Time_32"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi33"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase3_evaluasi34"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase3_evaluasi34_detail"></p>
                </td>
            </tr>

            <tr>
                <td rowspan="2" colspan="2">Tahap IV<br>Recharge</td>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase4Checkbox_1"></td>
                <td colspan="2">Diskusi tentang pengawasan pada pasien setelah pulang tentang obat, diet, aktivitas dan peningkatan status fungsional</td>
                <td><input type="date" class="form-control border-dark" name="fase4Date_2"></td>
                <td><input type="time" class="form-control border-dark" name="fase4Time_3"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase4_evaluasi4"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase4_evaluasi5"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase4_evaluasi5_detail"></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="custom-checkbox-success" name="fase4Checkbox_6"></td>
                <td colspan="2">Diskusi tentang support system keluarga, financial, dan alat transportasi yang akan digunakan pasien</td>
                <td><input type="date" class="form-control border-dark" name="fase4Date_7"></td>
                <td><input type="time" class="form-control border-dark" name="fase4Time_8"></td>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase4_evaluasi9"> Paham</p>
                    <p><input type="checkbox" class="custom-checkbox-success" name="fase4_evaluasi10"> Tidak paham, butuh re-edukasi</p>
                    <p><input type="text" class="form-control border-dark" name="fase4_evaluasi10_detail"></p>
                </td>
            </tr>

            <!-- Add more rows for other phases as needed -->
            <tr>
                <td colspan="5" rowspan="3">
                    <p><strong>Catatan Pulang</strong></p>
                </td>
                <td colspan="2">
                    <p><strong>Pelaksanaan</strong></p>
                </td>
                <td rowspan="3">
                    <p><strong>Keterangan</strong></p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p><strong>Sudah Diberikan</strong></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Tanggal</strong></p>
                </td>
                <td>
                    <p><strong>Jam</strong></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="obat_pulang"></p>
                </td>
                <td colspan="4">
                    <p>Obat-obatan pulang</p>
                </td>
                <td><input type="date" class="form-control border-dark" name="obat_pulang_tanggal"></td>
                <td><input type="time" class="form-control border-dark" name="obat_pulang_jam"></td>
                <td><input type="text" class="form-control border-dark" name="obat_pulang_keterangan"></td>
            </tr>
            <tr>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="surat_kontrol"></p>
                </td>
                <td colspan="4">
                    <p>Surat kontrol</p>
                </td>
                <td><input type="date" class="form-control border-dark" name="surat_kontrol_tanggal"></td>
                <td><input type="time" class="form-control border-dark" name="surat_kontrol_jam"></td>
                <td><input type="text" class="form-control border-dark" name="surat_kontrol_keterangan"></td>
            </tr>
            <tr>
                <td>
                    <p><input type="checkbox" class="custom-checkbox-success" name="rujukan_rehabilitasi"></p>
                </td>
                <td colspan="4">
                    <p>Rujukan rehabilitasi</p>
                </td>
                <td><input type="date" class="form-control border-dark" name="rujukan_rehabilitasi_tanggal"></td>
                <td><input type="time" class="form-control border-dark" name="rujukan_rehabilitasi_jam"></td>
                <td><input type="text" class="form-control border-dark" name="rujukan_rehabilitasi_keterangan"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">
                    <p>Discharge Planner</p>
                    <!-- <p><img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 350px; height:180px;" data-input-name="image_drawer_state_image_1" />
                        <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                            value="" />
                    </p>
                    <p><input type="text" name="discharge_planner" class="form-control border-dark d-inline w-75 mx-2"></p> -->
                    <img class="img-responsive center-block mt-2" style="width: 40%;" id="qr_perawat_discharge" />
                    <select type="select" name="perawat_discharge" id="perawat_discharge" class="form-select perawat" style="width: 100%;"></select>
                </td>
                <td colspan="3">
                    <p>Pasien/ Keluarga</p>
                    <p><img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 350px; height:180px;" data-input-name="image_drawer_state_image_2" />
                        <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
                            value="" />
                    </p>
                    <p><input type="text" name="pasien_keluarga" class="form-control border-dark d-inline w-75 mx-2"></p>
                </td>
            </tr>
        </table>
    </div>
</div>


<!-- <script>
    const mode = "<?= $mode; ?>"
    let dataListPerawatMenyerahkan = []
    let dataListPerawatMenerima = []

    function cbCommon() {
        $('#perawat_menyerahkan').prop('disabled', false)
        $('#perawat_menyerahkan').select2('open')
        $('#perawat_menyerahkan').select2('close')
        $('#perawat_menerima').prop('disabled', false)
        $('#perawat_menerima').select2('open')
        $('#perawat_menerima').select2('close')
        if (mode === "lihat") {
            $('#perawat_menyerahkan').prop('disabled', true)
            $('#perawat_menerima').prop('disabled', true)

        }

        setTimeout(() => {
            dataListPerawatMenyerahkan?.map(v => {
                if (v.text === $('#perawat_menyerahkan').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_menyerahkan')
                }
            })
            dataListPerawatMenerima?.map(v => {
                if (v.text === $('#perawat_menerima').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_menerima')
                }
            })
        }, 1000)
    }

    $(document).ready(function() {
        let page = 1;


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
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    page++; // Increment page
                    $('#diagnosa').select2('data', null); // Trigger new data fetch
                }
            });
        });

    });


    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);
    }
</script> -->

<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawat = []
    let dataDokter = []

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);
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


        $('#perawat_discharge').prop('disabled', false)
        $('#perawat_discharge').select2('open')
        $('#perawat_discharge').select2('close')
        if (mode === "lihat")
            $('#perawat_discharge').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#perawat_discharge').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_discharge')
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


        $('#perawat_discharge').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_discharge')
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