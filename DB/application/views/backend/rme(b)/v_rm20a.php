<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark">
            <tr>
                <td colspan="5">
                    <p>
                        <strong>PENGKAJIAN DAN INTERVENSI RESIKO JATUH PADA PASIEN DEWASA
                            (MORSE)</strong>
                    </p>
                </td>
                <td colspan="5">
                    <p>Nama : <input type="text" class="form-control border-dark" name="nama_pasien"></p>
                    <p>Jenis kelamin : <input type="text" class="form-control border-dark" name="jenkel"></p>
                    <p>Tanggal lahir : <input type="text" class="form-control border-dark" name="tanggal_lahir"></p>
                    <p>N I K : <input type="text" class="form-control border-dark" name="nik"></p>
                </td>
                <td colspan="4">
                    <p>Ruang : <input type="text" class="form-control border-dark" name="no_bad"></p>
                    <p>Kelas : <input type="text" class="form-control border-dark" name="kelas"></p>
                </td>
            </tr>
        </table>

        <input type="hidden" name="table-pengkajian-count" id="table-pengkajian-count" value="1">
        <table class="table table-bordered table-pengkajian border-dark" id="table-pengkajian">
            <tr>
                <td colspan="14">
                    <p>
                        Pengkajian resiko jatuh dilakukan saat pasien masuk, ketika terjadi
                        perubahan kondisi, ketika pindah kebangsal lain atau setelah
                        kejadian jatuh
                    </p>
                </td>
            </tr>
            <tr>
                <td rowspan="13">
                    <p>Nilai Resiko Jatuh</p>
                </td>
                <td colspan="5" rowspan="2">
                    <p>Faktor Resiko</p>
                </td>
                <td rowspan="2">
                    <p>Nilai Skor</p>
                </td>
                <td>
                    <p>Tanggal/Jam</p>
                </td>
                <td>
                    <p>Tanggal/Jam</p>
                </td>
                <td colspan="2">
                    <p>Tanggal/Jam</p>
                </td>
            </tr>
            <tr>
                <td><input type="datetime-local" class="form-control border-dark" name="tgl_jam1[]"></td>
                <td><input type="datetime-local" class="form-control border-dark" name="tgl_jam2[]"></td>
                <td colspan="2"><input type="datetime-local" class="form-control border-dark" name="tgl_jam3[]"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>Riwayat Jatuh</p>
                </td>
                <td colspan="3">
                    <p>Kurang dari 3 bulan</p>
                </td>
                <td>
                    <p>25</p>
                </td>
                <td><input type="text" class="form-control border-dark" name="riwayat_jatuh_tgl_jam[]"></td>
                <td><input type="text" class="form-control border-dark" name="riwayat_jatuh_tgl_jam[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="riwayat_jatuh_tgl_jam[]"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>Kondisi Kesehatan</p>
                </td>
                <td colspan="3">
                    <p>Lebih dari satu diagnosa</p>
                </td>
                <td>
                    <p>15</p>
                </td>
                <td><input type="text" class="form-control border-dark" name="kondisi_kesehatan_tgl_jam[]"></td>
                <td><input type="text" class="form-control border-dark" name="kondisi_kesehatan_tgl_jam[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="kondisi_kesehatan_tgl_jam[]"></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="3">
                    <p>Bantuan Ambulansi</p>
                </td>
                <td colspan="3">
                    <p>Di tempat tidur / butuh bantuan perawat / memakai kursi roda</p>
                </td>
                <td>
                    <p>0</p>
                </td>
                <td rowspan="3"><input type="text" class="form-control border-dark" name="bantuan_ambulansi_tgl_jam[]"></td>
                <td rowspan="3"><input type="text" class="form-control border-dark" name="bantuan_ambulansi_tgl_jam[]"></td>
                <td colspan="2" rowspan="3"><input type="text" class="form-control border-dark" name="bantuan_ambulansi_tgl_jam[]"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>Kruk, tongkat, walker</p>
                </td>
                <td>
                    <p>15</p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>Furniture: dinding, meja, kursi, almari</p>
                </td>
                <td>
                    <p>30</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>Terapi IV/Anti Koagulan</p>
                </td>
                <td colspan="3">
                    <p>Terapi intravena terus menerus</p>
                </td>
                <td>
                    <p>20</p>
                </td>
                <td><input type="text" class="form-control border-dark" name="terapi_iv_tgl_jam[]"></td>
                <td><input type="text" class="form-control border-dark" name="terapi_iv_tgl_jam[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="terapi_iv_tgl_jam[]"></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="3">
                    <p>Gaya Berjalan/ Berpindah</p>
                </td>
                <td colspan="3">
                    <p>Normal/di tempat tidur/ immmobilisasi</p>
                </td>
                <td>
                    <p>0</p>
                </td>
                <td rowspan="3"><input type="text" class="form-control border-dark" name="gaya_berjalan_tgl_jam[]"></td>
                <td rowspan="3"><input type="text" class="form-control border-dark" name="gaya_berjalan_tgl_jam[]"></td>
                <td colspan="2" rowspan="3"><input type="text" class="form-control border-dark" name="gaya_berjalan_tgl_jam[]"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>Lemah</p>
                </td>
                <td>
                    <p>10</p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>Terganggu</p>
                </td>
                <td>
                    <p>20</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2">
                    <p>Status Mental</p>
                </td>
                <td colspan="3">
                    <p>Orientasi dengan kemampuan sendiri</p>
                </td>
                <td>
                    <p>0</p>
                </td>
                <td rowspan="2"><input type="text" class="form-control border-dark" name="status_mental_tgl_jam[]"></td>
                <td rowspan="2"><input type="text" class="form-control border-dark" name="status_mental_tgl_jam[]"></td>
                <td colspan="2" rowspan="2"><input type="text" class="form-control border-dark" name="status_mental_tgl_jam[]"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>Lupa keterbatasan</p>
                </td>
                <td>
                    <p>15</p>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <p>Total Skor</p>
                </td>
                <td><input type="text" class="form-control border-dark" name="total_skor_tgl_jam[]"></td>
                <td><input type="text" class="form-control border-dark" name="total_skor_tgl_jam[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="total_skor_tgl_jam[]"></td>
            </tr>
        </table>
        <button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-pengkajian')">Add</button>
        <button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-pengkajian')">Delete</button>

        <input type="hidden" name="table-resiko-count" id="table-resiko-count" value="1">
        <table class="table table-bordered border-dark" id="table-resiko">
            <tr>
                <td colspan="7">
                    <p>
                        Resiko rendah (0-24), resiko sedang (25-44), resiko tinggi (≥45)
                        (Lingkari)
                    </p>
                </td>
                <td>
                    <p>RR/RS/RT</p>
                </td>
                <td>
                    <p>RR/RS/RT</p>
                </td>
                <td colspan="2">
                    <p>RR/RS/RT</p>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <p>Nama dan Paraf yang melakukan pengkajian</p>
                </td>
                <td><input type="text" class="form-control border-dark" name="pengkajian_nama[]"></td>
                <td><input type="text" class="form-control border-dark" name="pengkajian_nama[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="pengkajian_nama[]"></td>
            </tr>
            <tr>
                <td colspan="4">
                    <p>Intervensi pencegahan resiko jatuh (beritanda ƴ)</p>
                </td>
                <td colspan="3">
                    <p>Tanggal/Jam</p>
                </td>
                <td>
                    <input type="datetime-local" class="form-control border-dark" name="intervensi_tgl_jam1[]">
                </td>
                <td><input type="datetime-local" class="form-control border-dark" name="intervensi_tgl_jam2[]"></td>
                <td colspan="2"><input type="datetime-local" class="form-control border-dark" name="intervensi_tgl_jam3[]"></td>
            </tr>
            <tr>
                <td colspan="10" class="text-center">
                    <h5 class="text-center my-2">✓</h5>
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="6">
                    <p>Resiko Rendah (RR)</p>
                </td>
                <td colspan="5">
                    1. Orientasi lingkungan
                </td>
                <td>
                    <input type="text" class="form-control border-dark" name="rr_orientasi_lingkungan[]">
                </td>
                <td>
                    <input type="text" class="form-control border-dark" name="rr_orientasi_lingkungan[]">
                </td>
                <td colspan="2">
                    <input type="text" class="form-control border-dark" name="rr_orientasi_lingkungan[]">
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    2. Pastikan bel mudah dijangkau
                </td>
                <td><input type="text" class="form-control border-dark" name="rr_bel_mudah_dijangkau[]"></td>
                <td><input type="text" class="form-control border-dark" name="rr_bel_mudah_dijangkau[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rr_bel_mudah_dijangkau[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    3. Roda pada tempat tidur pada posisi terkunci
                </td>
                <td><input type="text" class="form-control border-dark" name="rr_roda_terkunci[]"></td>
                <td><input type="text" class="form-control border-dark" name="rr_roda_terkunci[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rr_roda_terkunci[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    4. Naikkan pagar pengaman tempat tidur
                </td>
                <td><input type="text" class="form-control border-dark" name="rr_pagar_pengaman[]"></td>
                <td><input type="text" class="form-control border-dark" name="rr_pagar_pengaman[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rr_pagar_pengaman[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    5. Pastikan lampu hidup saat malam hari
                </td>
                <td><input type="text" class="form-control border-dark" name="rr_lampu_hidup[]"></td>
                <td><input type="text" class="form-control border-dark" name="rr_lampu_hidup[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rr_lampu_hidup[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    6. Berikan edukasi kepada pasien
                </td>
                <td><input type="text" class="form-control border-dark" name="rr_edukasi_pasien[]"></td>
                <td><input type="text" class="form-control border-dark" name="rr_edukasi_pasien[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rr_edukasi_pasien[]"></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="3">
                    <p>Resiko Sedang (RS)</p>
                </td>
                <td colspan="5">
                    1. Lakukan semua pedoman pencegahan jatuh resiko rendah
                </td>
                <td><input type="text" class="form-control border-dark" name="rs_pencegahan_rr[]"></td>
                <td><input type="text" class="form-control border-dark" name="rs_pencegahan_rr[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rs_pencegahan_rr[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    2. Berikan stiker segitiga warna kuning pada tempat tidur pasien
                </td>
                <td><input type="text" class="form-control border-dark" name="rs_stiker_kuning[]"></td>
                <td><input type="text" class="form-control border-dark" name="rs_stiker_kuning[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rs_stiker_kuning[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    3. Pasangkan gelang kuning penanda resiko jatuh pada tangan yang dominan
                </td>
                <td><input type="text" class="form-control border-dark" name="rs_gelang_kuning[]"></td>
                <td><input type="text" class="form-control border-dark" name="rs_gelang_kuning[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rs_gelang_kuning[]"></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="5">
                    <p>ResikoTinggi (RT)</p>
                </td>
                <td colspan="5">
                    1. Lakukan semua pedoman pencegahan jatuh resiko rendah dan sedang
                </td>
                <td><input type="text" class="form-control border-dark" name="rt_pencegahan_rr_rs[]"></td>
                <td><input type="text" class="form-control border-dark" name="rt_pencegahan_rr_rs[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rt_pencegahan_rr_rs[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    2. Kunjungi dan monitor pasien setiap1 jam
                </td>
                <td><input type="text" class="form-control border-dark" name="rt_monitor_pasien[]"></td>
                <td><input type="text" class="form-control border-dark" name="rt_monitor_pasien[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rt_monitor_pasien[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    3. Penggunaan kate teruntuk BAK / pispot
                </td>
                <td><input type="text" class="form-control border-dark" name="rt_kate_bak_pispot[]"></td>
                <td><input type="text" class="form-control border-dark" name="rt_kate_bak_pispot[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rt_kate_bak_pispot[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    4. Pastikan pasien menggunakan alat bantu jalan (bilamobilisasi)
                </td>
                <td><input type="text" class="form-control border-dark" name="rt_alat_bantu_jalan[]"></td>
                <td><input type="text" class="form-control border-dark" name="rt_alat_bantu_jalan[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rt_alat_bantu_jalan[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    5. Libatkan keluarga pasien untuk selalu menunggu pasien
                </td>
                <td><input type="text" class="form-control border-dark" name="rt_libatkan_keluarga[]"></td>
                <td><input type="text" class="form-control border-dark" name="rt_libatkan_keluarga[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="rt_libatkan_keluarga[]"></td>
            </tr>
            <tr>
                <td colspan="7">
                    <p>Nama dan Paraf yang melakukan intervensi pencegahan jatuh</p>
                </td>
                <td><input type="text" class="form-control border-dark" name="intervensi_nama[]"></td>
                <td><input type="text" class="form-control border-dark" name="intervensi_nama[]"></td>
                <td colspan="2"><input type="text" class="form-control border-dark" name="intervensi_nama[]"></td>
            </tr>
            <tr>
                <td colspan="14">
                    <p>
                        Isi edukasi:1. Memberitahu pasien dan keluarga bahwa pasien beresiko
                        jatuh ringan / sedang / tinggi
                    </p>
                    <p>
                        2. Memberitahu pasien agar mengurangi aktfitas (misalnya:berjalan),
                        bila ingin kekamar mandi keluarga selalu mendampingi / menggunakan
                        pispot
                    </p>
                    <p>3. Jika membutuhkan bantuan, segera hubungi petugas</p>
                </td>
            </tr>
        </table>

        <button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-resiko')">Add</button>
        <button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-resiko')">Delete</button>
    </div>
</div>


<script>
    function cbCommon(data) {

        // on init generate table based on table-{name}-count
        let resikoCountInput = document.getElementById("table-resiko-count");
        if (resikoCountInput) {
            let count = +(resikoCountInput.value ?? "0");
            if (count > 0) {
                for (let i = 1; i < count; i++) {
                    let tableId = 'table-resiko';
                    let table = document.getElementById(tableId);
                    let newTable = table.cloneNode(true);

                    newTable.id = tableId + "-copy-" + `${i + 1}`;

                    table.parentNode.insertBefore(newTable, table.nextSibling);
                }
            }
        }

        let pengkajianCountInput = document.getElementById("table-pengkajian-count");
        if (pengkajianCountInput) {
            let count = +(pengkajianCountInput.value ?? "0");
            if (count > 0) {
                for (let i = 1; i < count; i++) {

                    let tableId = 'table-pengkajian';
                    let table = document.getElementById(tableId);
                    let newTable = table.cloneNode(true);

                    newTable.id = tableId + "-copy-" + `${i + 1}`;

                    table.parentNode.insertBefore(newTable, table.nextSibling);
                }
            }
        }


        populateFormFields(data);
        // callMarkerManager();
        // fill image
    }

    // ready
    function copyTable(tableId) {
        let table = document.getElementById(tableId);
        let newTable = table.cloneNode(true);

        let countInput = document.querySelector("input[name='" + tableId + "-count']");
        let count = +(countInput.value ?? "1") + 1;

        countInput.value = count;

        newTable.id = tableId + "-copy-" + count;
        // reset all input in newTable
        let inputs = newTable.querySelectorAll("input");
        inputs.forEach(input => {
            input.value = "";
        })
        table.parentNode.insertBefore(newTable, table.nextSibling);
    }

    function deleteTable(tableId) {
        let countInput = document.getElementById(tableId + "-count");
        if (countInput) {
            let count = +(countInput.value);
            if (count > 0) {
                let lastCopiedTable = document.getElementById(tableId + "-copy-" + count);
                if (lastCopiedTable) {
                    lastCopiedTable.remove();
                    countInput.value = count - 1;
                }
            }
        }
    }
</script>