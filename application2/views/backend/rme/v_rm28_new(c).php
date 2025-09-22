<style>
    /* Sticky hanya untuk isi (td) kolom ke-2: Tanggal */
    #VisiteProgramTable tbody td:nth-child(2) {
        position: sticky;
        left: 0;
        background: white;
        z-index: 2;
    }

    /* Sticky hanya untuk isi (td) kolom ke-3: Nama Obat */
    #VisiteProgramTable tbody td:nth-child(3) {
        position: sticky;
        left: 230px;
        /* Sesuaikan dengan lebar kolom ke-2 */
        background: white;
        z-index: 2;
    }
</style>


<!-- Informasi Pasien -->
<div class="row">
    <table class="table table-responsive border-dark">
        <tr>
            <td class="col-6">
                <div class="d-flex gap-2">
                    <img src="<?= $images; ?>" alt="Logo" style="width: 120px;">
                    <div>
                        <h4><?= $site_title; ?></h4>
                        <div><?= $lokasi; ?></div>
                        <div><?= $telepon; ?></div>
                        <div><?= $email; ?></div>
                    </div>
                </div>
            </td>
            <td>

                <div class="form-group mt-2">
                    <label for="nama_pasien">Nama Pasien :</label>
                    <input type="text" class="form-control border-dark nama_pasien" name="nama_pasien" id="nama_pasien" placeholder="Masukkan Nama Pasien" value="">
                </div>

                <div class="form-group mt-2">
                    <label for="tanggal_lahir">Tanggal Lahir :</label>
                    <input type="text" class="form-control border-dark tanggal_lahir" name="tanggal_lahir" id="tanggall_lahir" placeholder="Masukkan Tanggal Lahir">
                </div>

                <div class="form-group mt-2">
                    <label for="umur">Umur :</label>
                    <input type="text" class="form-control border-dark umur" name="umur" id="umur">
                </div>

                <div class="form-group mt-2">
                    <label for="jenkel">Jenis Kelamin :</label>
                    <input type="text" class="form-control border-dark jenkel" name="jenkel" id="jenkel" placeholder="jenkel" value="">
                </div>

                <div class="form-group mt-2">
                    <label for="no_rm">Nomor Rm :</label>
                    <input type="text" class="form-control border-dark no_rm" name="no_rm" id="no_rm" placeholder="Masukkan Nomor Rm" value="">
                </div>

                <div class="form-group mt-2">
                    <label for="alamat">Alamat :</label>
                    <textarea class="form-control border-dark alamat" name="alamat" id="alamat" placeholder="" value=""></textarea>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <h6>INTRUKSI MEDIK FARMAKOLOGI DAN PEMANTAUAN PEMBERIAN OBAT PASIEN</h6>
            </td>
        </tr>
    </table>
</div>



<div class="row">
    <div class="table table-responsive">
        <div class="my-3 float-end">
            <button type="button" class="btn btn-dark" onclick="addRow()"><span class="bi bi-plus"></span> Tambah Baris</button>
        </div>

        <div style="overflow-x: auto; width: 100%;">
            <table class="table table-bordered mt-4 border-dark" id="VisiteProgramTable">
                <thead class="table-bordered border-dark">
                    <tr>
                        <td colspan="2">Ruang Rawat Awal</td>
                        <td colspan="13">
                            <div>
                                <input type="text" name="ruang_rawat_awal" id="" class="form-control border-dark w-25">
                            </div>
                        </td>
                        <td colspan="9">
                            <div style="width: 500px;">
                                <div>Riwayat Alergi Obat :</div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="tidak_alergi" id="tidak_alergi" class="custom-checkbox-success">
                                    <label for="tidak_alergi" class="col-2">Tidak</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <div>
                                        <input type="checkbox" name="ya_alergi" id="ya_alergi" class="custom-checkbox-success">
                                    </div>
                                    <label for="ya_alergi" class="col-2">ya, sebutkan</label>
                                    <textarea name="sebutkan_alergi_apa" id="" rows="3" class="form-control border-dark"></textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr align="center">
                        <td rowspan="3">No</td>
                        <td>Order</td>
                        <td rowspan="3">
                            <div style="width: 250px;">Nama Obat</div>
                        </td>
                        <td rowspan="3">Dosis</td>
                        <td rowspan="" colspan="5">Frekuensi Pemberian</td>
                        <td rowspan="3">Rute</td>
                        <td rowspan="3">Informasi / Keterangan</td>
                        <td colspan="2">Durasi Terapi</td>
                        <td rowspan="3">Nama Dokter</td>
                        <td rowspan="3">Review Farmasi</td>
                        <td rowspan="3">Hari</td>
                        <?php for ($i = 1; $i <= 8; $i++) : ?>
                            <td rowspan="2">Tanggal</td>
                        <?php endfor; ?>
                    </tr>
                    <tr align="center">
                        <td rowspan="2">Tanggal | Jam</td>
                        <td rowspan="2">Tiap 24 jam</td>
                        <td rowspan="2">Tiap 12 jam</td>
                        <td rowspan="2">Tiap 8 jam</td>
                        <td rowspan="2">Tiap 6 jam</td>
                        <td rowspan="2">Tiap ... jam</td>
                        <td>Mulai</td>
                        <td>Stop</td>
                    </tr>
                    <tr align="center">
                        <td>Tanggal | jam</td>
                        <td>Tanggal | jam</td>
                        <?php for ($i = 1; $i <= 8; $i++) : ?>
                            <td>
                                <div class="row">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="col-3">0-6</div>
                                        <div class="col-3">04-12</div>
                                        <div class="col-3">12-18</div>
                                        <div class="col-3">18-24</div>
                                    </div>
                                </div>
                            </td>
                        <?php endfor; ?>


                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

    </div>
</div>

<!-- JavaScript -->
<script>
    const mode = "<?= $mode; ?>";
    let dataDokter = [];


    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    $(document).ready(function() {
        listDokterUmumAPI();
        listPerawatAPI();
    });

    function listPerawatAPI() {
        $('.perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
                dataType: 'json',
                delay: 250,
                data: params => ({
                    q: params.term
                }),
                processResults: data => ({
                    results: data.data.items,
                    pagination: {
                        more: data.data.more
                    }
                }),
                cache: true
            },
            placeholder: 'Cari dokter...',
        });
    }

    function listDokterUmumAPI() {
        $('.dokter_perawat_pertama').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan'); ?>',
                dataType: 'json',
                delay: 250,
                data: params => ({
                    q: params.term
                }),
                processResults: data => ({
                    results: data.data.items,
                    pagination: {
                        more: data.data.more
                    }
                }),
                cache: true
            },
            placeholder: 'Cari dokter...',
        });
    }

    function createRuangRawatanColumn(index) {
        return `
    <td colspan="">
      <div class="my-2">
        <input type="text" name="ruang_rawatan_kolom${index}[]" class="form-control border-dark" placeholder="ruangan...">
      </div>

      <div class="my-2">
        <input type="date" name="ket_tanggal_pertama_kolom${index}[]" class="form-control border-dark">
      </div>

      <div class="d-flex gap-2 justify-content-center ms-2">
        <div class="col-3">
          <input type="time" name="ket_jam_pertama_kolom${index}[]" class="form-control border-dark" style="width:100px">
        </div>
        <div class="col-3">
          <input type="time" name="ket_jam_kedua_kolom${index}[]" class="form-control border-dark" style="width:100px">
        </div>
        <div class="col-3">
          <input type="time" name="ket_jam_ketiga_kolom${index}[]" class="form-control border-dark" style="width:100px">
        </div>
        <div class="col-3">
          <input type="time" name="ket_jam_keempat_kolom${index}[]" class="form-control border-dark" style="width:100px">
        </div>
      </div>
    </td>
  `;
    }

    function addRow() {
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        const rowCount = table.rows.length / 1;
        const baseIndex = rowCount * 1;

        // === ROW 1 ===
        const row1 = table.insertRow(baseIndex);
        row1.classList.add("text-center");


        let ruangRawatanHTML = '';
        for (let i = 2; i <= 8; i++) {
            ruangRawatanHTML += createRuangRawatanColumn(i);
        }

        row1.innerHTML = `
            <td><p>${rowCount + 1}</p></td>
            <td><input type="datetime-local" name="tanggal_jam_order[]" class="form-control border-dark"></td>
            <td><textarea name="nama_obat[]" rows="4" class="form-control border-dark"></textarea>
            </td>
            <td>
                <div style="width:180px;"><textarea name="dosis_obat[]" rows="1" class="form-control border-dark"></textarea></div>
            </td>
            <td colspan="">
                <div class="">
                    <label><input type="checkbox" class="form-check-input" data-role="perawatPertama"> </label>
                    <input type="hidden" name="perawatPertama[]" class="24jam_hidden" data-role="perawatPertama" value="">
                    <input type="hidden" name="perawat_kedua[]" class="perawat_kedua"><br />
                </div>
            </td>
            <td colspan="">
                <div class="">
                    <label><input type="checkbox" class="form-check-input" data-role="perawatKedua"> </label>
                    <input type="hidden" name="perawatKedua[]" class="12jam_hidden" data-role="perawatKedua" value="">
                    <input type="hidden" name="perawat_kedua[]" class="perawat_kedua"><br />
                </div>
            </td>
            <td>
                <label><input type="checkbox" class="form-check-input" data-role="perawatKetiga"> </label>
                <input type="hidden" name="perawatKetiga[]" class="8jam_hidden" data-role="perawatKetiga" value="">
                <input type="hidden" name="perawat_kedua[]" class="perawat_kedua"><br />
            </td>
            <td>
                <label><input type="checkbox" class="form-check-input" data-role="perawatKeempat"> </label>
                <input type="hidden" name="perawatKeempat[]" class="6jam_hidden" data-role="perawatKeempat" value="">
                <input type="hidden" name="perawat_kedua[]" class="perawat_kedua"><br />
            </td>
            <td>
                <label><input type="checkbox" class="form-check-input" data-role="perawatKelima"> </label>
                <input type="hidden" name="perawatKelima[]" class="3jam_hidden" data-role="perawatKelima" value="">
                <input type="hidden" name="perawat_kedua[]" class="perawat_kedua"><br />
            </td>
            <td rowspan="">
                <div style="width:180px;"><textarea name="cara_obat[]" rows="1" class="form-control border-dark"></textarea></div>
            </td>
            <td>
                <div style="width:180px;"><textarea name="ket_obat[]" rows="1" class="form-control border-dark"></textarea></div>
            </td>
            <td rowspan=""><input type="date" name="tanggal_jam[]" class="form-control border-dark"></td>
            <td rowspan=""><input type="date" name="tanggal_jam_kedua[]" class="form-control border-dark"></td>

            <td>
                <select name="perawat[]" id="perawat${rowCount}" class="form-select perawat" style="width:250px"></select>
                <input type="hidden" name="perawat_nama[]" class="perawat_nama">
            </td>
            <td>
                <label><input type="checkbox" class="form-check-input" data-role="reviewFarmasi"> </label>
                <input type="hidden" name="reviewFarmasi[]" class="evaluasi_hidden" data-role="reviewFarmasi" value="">
                <input type="hidden" name="reviewFarmasi[]" class="reviewFarmasi">
            </td>
            <td>waktu</td>
            <td colspan="">
                <div class="my-2"><input type="text" name="ruang_rawatan[]" class="form-control border-dark" placeholder="ruangan..."></div>

                <div class="my-2"><input type="date" name="ket_tanggal_pertama[]" class="form-control border-dark"></div>

                <div class="d-flex gap-2 justify-content-center ms-2">
                    <div class="col-3">
                        <input type="time" name="ket_jam_pertama[]" class="form-control border-dark" style="width:100px">
                    </div>

                    <div class="col-3">
                        <input type="time" name="ket_jam_kedua[]" class="form-control border-dark" style="width:100px">
                    </div>

                    <div class="col-3">
                        <input type="time" name="ket_jam_ketiga[]" class="form-control border-dark" style="width:100px">
                    </div>

                    <div class="col-3">
                        <input type="time" name="ket_jam_keempat[]" class="form-control border-dark" style="width:100px">
                    </div>
                </div>
            </td>


           ${ruangRawatanHTML}

            `;





        // Init Select2 perawat
        $(`#perawat${rowCount}`).select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
                dataType: 'json',
                delay: 250,
                data: params => ({
                    q: params.term
                }),
                processResults: data => ({
                    results: data.data.items,
                    pagination: {
                        more: data.data.more
                    }
                }),
                cache: true
            },
            placeholder: 'Cari dokter...'
        }).on('select2:select', function(e) {
            $(this).closest('td').find('.perawat_nama').val(e.params.data.text);
        });






        // === AUTO SCROLL KE TABLE YANG DITAMBAHKAN ===
        row1.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });




        return row1;
    }

    function cbCommon(data) {
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        table.innerHTML = "";

        const dataObj = Object.fromEntries(data.entries());
        const rowCount = dataObj["tanggal_jam"]?.length || 0;

        for (let i = 0; i < rowCount; i++) {
            const tr = addRow(); // baris utama pertama dari 4 baris
            const baseIndex = i * 1;
            const rows = Array.from(table.rows).slice(baseIndex, baseIndex + 1);

            const tanggal_jam = dataObj['tanggal_jam']?.[i] || '';
            const tanggalJamKedua = dataObj['tanggal_jam_kedua']?.[i] || '';
            const tanggalJamOrder = dataObj['tanggal_jam_order']?.[i] || '';
            const namaObat = dataObj['nama_obat']?.[i] || '';
            const dosisObat = dataObj['dosis_obat']?.[i] || '';
            const caraObat = dataObj['cara_obat']?.[i] || '';
            const ketObat = dataObj['ket_obat']?.[i] || '';
            const kettanggalpertamaObat = dataObj['ket_tanggal_pertama']?.[i] || '';
            const ruangRawatan = dataObj['ruang_rawatan']?.[i] || '';
            const ketjampertamaObat = dataObj['ket_jam_pertama']?.[i] || '';
            const ketjamkeduaObat = dataObj['ket_jam_kedua']?.[i] || '';
            const ketjamketigaObat = dataObj['ket_jam_ketiga']?.[i] || '';
            const ketjamkeempatObat = dataObj['ket_jam_keempat']?.[i] || '';

            function ambilDataKolom(dataObj, i, kolom) {
                return {
                    kettanggalpertama: dataObj[`ket_tanggal_pertama_kolom${kolom}`]?.[i] || '',
                    ruangRawatan: dataObj[`ruang_rawatan_kolom${kolom}`]?.[i] || '',
                    ketjampertama: dataObj[`ket_jam_pertama_kolom${kolom}`]?.[i] || '',
                    ketjamkedua: dataObj[`ket_jam_kedua_kolom${kolom}`]?.[i] || '',
                    ketjamketiga: dataObj[`ket_jam_ketiga_kolom${kolom}`]?.[i] || '',
                    ketjamkeempat: dataObj[`ket_jam_keempat_kolom${kolom}`]?.[i] || ''
                };
            }

            // Ambil data untuk masing-masing kolom
            const {
                kettanggalpertama: kettanggalpertamaObatKolom2,
                ruangRawatan: ruangRawatanKolom2,
                ketjampertama: ketjampertamaObatKolom2,
                ketjamkedua: ketjamkeduaObatKolom2,
                ketjamketiga: ketjamketigaObatKolom2,
                ketjamkeempat: ketjamkeempatObatKolom2
            } = ambilDataKolom(dataObj, i, 2);

            const {
                kettanggalpertama: kettanggalpertamaObatKolom3,
                ruangRawatan: ruangRawatanKolom3,
                ketjampertama: ketjampertamaObatKolom3,
                ketjamkedua: ketjamkeduaObatKolom3,
                ketjamketiga: ketjamketigaObatKolom3,
                ketjamkeempat: ketjamkeempatObatKolom3
            } = ambilDataKolom(dataObj, i, 3);

            const {
                kettanggalpertama: kettanggalpertamaObatKolom4,
                ruangRawatan: ruangRawatanKolom4,
                ketjampertama: ketjampertamaObatKolom4,
                ketjamkedua: ketjamkeduaObatKolom4,
                ketjamketiga: ketjamketigaObatKolom4,
                ketjamkeempat: ketjamkeempatObatKolom4
            } = ambilDataKolom(dataObj, i, 4);

            const {
                kettanggalpertama: kettanggalpertamaObatKolom5,
                ruangRawatan: ruangRawatanKolom5,
                ketjampertama: ketjampertamaObatKolom5,
                ketjamkedua: ketjamkeduaObatKolom5,
                ketjamketiga: ketjamketigaObatKolom5,
                ketjamkeempat: ketjamkeempatObatKolom5
            } = ambilDataKolom(dataObj, i, 5);

            const {
                kettanggalpertama: kettanggalpertamaObatKolom6,
                ruangRawatan: ruangRawatanKolom6,
                ketjampertama: ketjampertamaObatKolom6,
                ketjamkedua: ketjamkeduaObatKolom6,
                ketjamketiga: ketjamketigaObatKolom6,
                ketjamkeempat: ketjamkeempatObatKolom6
            } = ambilDataKolom(dataObj, i, 6);

            const {
                kettanggalpertama: kettanggalpertamaObatKolom7,
                ruangRawatan: ruangRawatanKolom7,
                ketjampertama: ketjampertamaObatKolom7,
                ketjamkedua: ketjamkeduaObatKolom7,
                ketjamketiga: ketjamketigaObatKolom7,
                ketjamkeempat: ketjamkeempatObatKolom7
            } = ambilDataKolom(dataObj, i, 7);

            const {
                kettanggalpertama: kettanggalpertamaObatKolom8,
                ruangRawatan: ruangRawatanKolom8,
                ketjampertama: ketjampertamaObatKolom8,
                ketjamkedua: ketjamkeduaObatKolom8,
                ketjamketiga: ketjamketigaObatKolom8,
                ketjamkeempat: ketjamkeempatObatKolom8
            } = ambilDataKolom(dataObj, i, 8);



            const perawat_nama = dataObj['perawat_nama']?.[i] || '';
            const perawat_id = dataObj['perawat']?.[i] || '';








            const namaPemeriksa = dataObj['nama_pemeriksa']?.[i] || '';

            //===Row 1===rows[0].querySelector('input[name="tanggal_jam[]" ]').value=tanggal_jam;
            rows[0].querySelector('input[name="tanggal_jam_kedua[]" ]').value = tanggalJamKedua;
            rows[0].querySelector('input[name="tanggal_jam_order[]" ]').value = tanggalJamOrder;
            rows[0].querySelector('input[name="ket_tanggal_pertama[]" ]').value = kettanggalpertamaObat;

            //kolom 1
            rows[0].querySelector('input[name="ket_tanggal_pertama_kolom2[]" ]').value = kettanggalpertamaObatKolom2;
            rows[0].querySelector('input[name="ket_tanggal_pertama_kolom3[]" ]').value = kettanggalpertamaObatKolom3;
            rows[0].querySelector('input[name="ket_tanggal_pertama_kolom4[]" ]').value = kettanggalpertamaObatKolom4;
            rows[0].querySelector('input[name="ket_tanggal_pertama_kolom5[]" ]').value = kettanggalpertamaObatKolom5;
            rows[0].querySelector('input[name="ket_tanggal_pertama_kolom6[]" ]').value = kettanggalpertamaObatKolom6;
            rows[0].querySelector('input[name="ket_tanggal_pertama_kolom7[]" ]').value = kettanggalpertamaObatKolom7;
            rows[0].querySelector('input[name="ket_tanggal_pertama_kolom8[]" ]').value = kettanggalpertamaObatKolom8;
            //batas

            rows[0].querySelector('input[name="ruang_rawatan[]" ]').value = ruangRawatan;
            rows[0].querySelector('input[name="ket_jam_pertama[]" ]').value = ketjampertamaObat;
            rows[0].querySelector('input[name="ket_jam_kedua[]" ]').value = ketjamkeduaObat;
            rows[0].querySelector('input[name="ket_jam_ketiga[]" ]').value = ketjamketigaObat;
            rows[0].querySelector('input[name="ket_jam_keempat[]" ]').value = ketjamkeempatObat;

            function setValue(kolom, ruangRawatan, jam1, jam2, jam3, jam4) {
                rows[0].querySelector(`input[name="ruang_rawatan_kolom${kolom}[]"]`).value = ruangRawatan;
                rows[0].querySelector(`input[name="ket_jam_pertama_kolom${kolom}[]"]`).value = jam1;
                rows[0].querySelector(`input[name="ket_jam_kedua_kolom${kolom}[]"]`).value = jam2;
                rows[0].querySelector(`input[name="ket_jam_ketiga_kolom${kolom}[]"]`).value = jam3;
                rows[0].querySelector(`input[name="ket_jam_keempat_kolom${kolom}[]"]`).value = jam4;
            }

            // Tetap gunakan variabelmu tanpa mengubah nama
            setValue(2, ruangRawatanKolom2, ketjampertamaObatKolom2, ketjamkeduaObatKolom2, ketjamketigaObatKolom2, ketjamkeempatObatKolom2);
            setValue(3, ruangRawatanKolom3, ketjampertamaObatKolom3, ketjamkeduaObatKolom3, ketjamketigaObatKolom3, ketjamkeempatObatKolom3);
            setValue(4, ruangRawatanKolom4, ketjampertamaObatKolom4, ketjamkeduaObatKolom4, ketjamketigaObatKolom4, ketjamkeempatObatKolom4);
            setValue(5, ruangRawatanKolom5, ketjampertamaObatKolom5, ketjamkeduaObatKolom5, ketjamketigaObatKolom5, ketjamkeempatObatKolom5);
            setValue(6, ruangRawatanKolom6, ketjampertamaObatKolom6, ketjamkeduaObatKolom6, ketjamketigaObatKolom6, ketjamkeempatObatKolom6);
            setValue(7, ruangRawatanKolom7, ketjampertamaObatKolom7, ketjamkeduaObatKolom7, ketjamketigaObatKolom7, ketjamkeempatObatKolom7);
            setValue(8, ruangRawatanKolom8, ketjampertamaObatKolom8, ketjamkeduaObatKolom8, ketjamketigaObatKolom8, ketjamkeempatObatKolom8);


            // batas
            rows[0].querySelector('textarea[name="nama_obat[]" ]').value = namaObat;

            rows[0].querySelector('textarea[name="dosis_obat[]" ]').value = dosisObat;
            rows[0].querySelector('textarea[name="cara_obat[]" ]').value = caraObat;
            rows[0].querySelector('textarea[name="ket_obat[]" ]').value = ketObat;



            const row1 = rows[0];
            // Checkbox roles
            ['perawatPertama', 'perawatKedua', 'perawatKetiga', 'perawatKeempat', 'perawatKelima', 'reviewFarmasi'].forEach(role => {
                const checkbox = row1.querySelector(`input.form-check-input[data-role="${role}"]`);
                const hidden = row1.querySelector(`input[type="hidden"][data-role="${role}"]`);
                if (checkbox && hidden) {
                    const val = dataObj[role]?.[i] || '';
                    hidden.value = val;
                    checkbox.checked = !!val;
                }
                const namaHidden = row1.querySelector(`.${role}_nama`);
                if (namaHidden) {
                    namaHidden.value = dataObj[`${role}_nama`]?.[i] || '';
                }
            });



            // === Row 1: Perawat
            const perawatSelect = $(rows[0]).find('.perawat');
            const perawatHidden = rows[0].querySelector('.perawat_nama');

            perawatSelect.select2({
                ajax: {
                    url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
                    dataType: 'json',
                    delay: 250,
                    data: params => ({
                        q: params.term
                    }),
                    processResults: data => ({
                        results: data.data.items,
                        pagination: {
                            more: data.data.more
                        }
                    }),
                    cache: true
                },
                placeholder: 'Cari dokter...'
            });

            if (perawat_nama) {
                const opt = new Option(perawat_nama, perawat_id || perawat_nama, true, true);
                perawatSelect.append(opt).trigger('change');
                if (perawatHidden) perawatHidden.value = perawat_nama;
            }
        }
    }


    // Update hidden field saat checkbox berubah
    document.addEventListener('change', function(e) {
        if (e.target.classList.contains('form-check-input')) {
            const role = e.target.getAttribute('data-role');
            const container = e.target.closest('div.bg-light') || e.target.closest('tr');
            if (!container) return;
            const hiddenInput = container.querySelector(`input[type="hidden"][data-role="${role}"]`);
            if (hiddenInput) {
                hiddenInput.value = e.target.checked ? "on" : "";
            }
        }
    });
</script>