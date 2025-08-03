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
    left: 260px; /* Sesuaikan dengan lebar kolom ke-2 */
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
                    <label for="tanggall_lahir">Tanggal Lahir/Umur :</label>
                    <input type="text" class="form-control border-dark tanggall_lahir" name="tanggall_lahir" id="tanggall_lahir" placeholder="Masukkan Tanggal Lahir" value="01-01-1990 / 35 tahun" disabled>
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

        <table class="table table-bordered mt-4 border-dark" id="VisiteProgramTable">
            <thead class="table-bordered border-dark">
                <tr>
                    <td colspan="2">Ruang Rawat Awal</td>
                    <td colspan="13">
                        <div>
                            <input type="text" name="ruang_rawat_awal" id="" class="form-control border-dark w-25">
                        </div>
                    </td>
                    <td colspan="2">
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
                    <td rowspan="2" colspan="3">Tanggal</td>
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
                </tr>
            </thead>
            <tbody></tbody>
        </table>
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

    function addRow() {
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        const rowCount = table.rows.length / 1;
        const baseIndex = rowCount * 1;

        // === ROW 1 ===
        const row1 = table.insertRow(baseIndex);
        row1.classList.add("text-center");

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
                    <label><input type="checkbox" class="form-check-input" data-role="perawatPertama"></label>
                    <input type="hidden" name="perawatPertama[]" class="asesmen_hidden" data-role="perawatPertama" value="">
                    <input type="hidden" name="perawatPertama[]" class="perawatPertama"><br />
                </div>
            </td>
            <td colspan="">
                <div class="">
                    <label><input type="checkbox" class="form-check-input" data-role="perawatKedua"> </label>
                    <input type="hidden" name="perawatKedua[]" class="edukasi_hidden" data-role="perawatKedua" value="">
                    <input type="hidden" name="perawat_kedua[]" class="perawat_kedua"><br />
                </div>
            </td>
            <td>
                <label><input type="checkbox" class="form-check-input" data-role="perawatKetiga"> </label>
                <input type="hidden" name="perawatKetiga[]" class="evaluasi_hidden" data-role="perawatKetiga" value="">
                <input type="hidden" name="perawatKetiga[]" class="perawatKetiga">
            </td>
            <td>
                <label><input type="checkbox" class="form-check-input" data-role="perawatKeempat"> </label>
                <input type="hidden" name="perawatKeempat[]" class="evaluasi_hidden" data-role="perawatKeempat" value="">
                <input type="hidden" name="perawatKeempat[]" class="perawatKeempat">
            </td>
            <td>
                <label><input type="checkbox" class="form-check-input" data-role="perawatKelima"> </label>
                <input type="hidden" name="perawatKelima[]" class="evaluasi_hidden" data-role="perawatKelima" value="">
                <input type="hidden" name="perawatKelima[]" class="perawatKelima">
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
            <td colspan="3">


                <div class="my-2"><input type="text" name="ruang_rawatan[]" class="form-control border-dark" placeholder="ruangan..."></div>

                <div class="my-2"><input type="date" name="ket_tanggal_pertama[]" class="form-control border-dark"></div>

                <div class="d-flex gap-2 justify-content-center">
                    <div class="col-3">
                        <input type="time" name="ket_jam_pertama[]" class="form-control border-dark" style="width:180px">
                    </div>

                    <div class="col-3">
                        <input type="time" name="ket_jam_kedua[]" class="form-control border-dark" style="width:180px">
                    </div>

                    <div class="col-3">
                        <input type="time" name="ket_jam_ketiga[]" class="form-control border-dark" style="width:180px">
                    </div>

                    <div class="col-3">
                        <input type="time" name="ket_jam_keempat[]" class="form-control border-dark" style="width:180px">
                    </div>
                </div>
            </td>

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


            const perawat_nama = dataObj['perawat_nama']?.[i] || '';
            const perawat_id = dataObj['perawat']?.[i] || '';








            const namaPemeriksa = dataObj['nama_pemeriksa']?.[i] || '';

            //===Row 1===rows[0].querySelector('input[name="tanggal_jam[]" ]').value=tanggal_jam;
            rows[0].querySelector('input[name="tanggal_jam_kedua[]" ]').value = tanggalJamKedua;
            rows[0].querySelector('input[name="tanggal_jam_order[]" ]').value = tanggalJamOrder;
            rows[0].querySelector('input[name="ket_tanggal_pertama[]" ]').value = kettanggalpertamaObat;
            rows[0].querySelector('input[name="ruang_rawatan[]" ]').value = ruangRawatan;
            rows[0].querySelector('input[name="ket_jam_pertama[]" ]').value = ketjampertamaObat;
            rows[0].querySelector('input[name="ket_jam_kedua[]" ]').value = ketjamkeduaObat;
            rows[0].querySelector('input[name="ket_jam_ketiga[]" ]').value = ketjamketigaObat;
            rows[0].querySelector('input[name="ket_jam_keempat[]" ]').value = ketjamkeempatObat;
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