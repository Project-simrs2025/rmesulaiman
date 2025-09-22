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
                        <?php for ($i = 1; $i <= 16; $i++) : ?>
                            <td rowspan="2">
                                <div class="d-flex align-items-center gap-2">
                                    <div>Tanggal</div>
                                    <input type="date" name="tanggal_farmasi_<?= $i ?>" id="tanggal_farmasi" class="form-control border-dark">
                                </div>
                            </td>
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
                        <?php for ($i = 1; $i <= 16; $i++) : ?>
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



      <div class="d-flex gap-2 justify-content-center ms-2">
        <div class="col-3">
          <input type="time" name="ket_jam_pertama_kolom${index}[]" class="form-control border-dark" style="width:100px">
          <div class="">
                <label><input type="checkbox" class="form-check-input" data-role="checkjamKolom${index}Pertama"> </label>
                <input type="hidden" name="checkjamKolom${index}Pertama[]" class="24jam_hidden" data-role="checkjamKolom${index}Pertama" value="">
                <input type="hidden" name="check_jamkolom${index}Pertama[]" class="check_jamkolom${index}Pertama"><br/>
            </div>
            
            <div class="my-2">
                <select name="perawat_mengecek_pertama_${index}[]" class="form-select select2-init" data-role="perawat_mengecek_pertama" style="width:120px"></select>
                <input type="hidden" class="perawat_nama_mengecek_pertama" name="perawat_nama_mengecek_pertama_${index}[]">
            </div>

             <div class="my-2">
                <select name="perawat_mengecek_kedua_${index}[]" class="form-select select2-init" data-role="perawat_mengecek_kedua" style="width:120px"></select>
                <input type="hidden" class="perawat_nama_mengecek_kedua" name="perawat_nama_mengecek_kedua_${index}[]">
            </div>
            
        </div>
        <div class="col-3">
          <input type="time" name="ket_jam_kedua_kolom${index}[]" class="form-control border-dark" style="width:100px">
          <div class="">
                <label><input type="checkbox" class="form-check-input" data-role="checkjamKolom${index}Kedua"> </label>
                <input type="hidden" name="checkjamKolom${index}Kedua[]" class="24jam_hidden" data-role="checkjamKolom${index}Kedua" value="">
                <input type="hidden" name="check_jamkolom${index}Kedua[]" class="check_jamkolom${index}Kedua"><br/>
            </div>

              <div class="my-2">
                <select name="perawat_mengecek_xq_pertama_${index}[]" class="form-select select2-init" data-role="perawat_mengecek_xq_pertama" style="width:120px"></select>
                <input type="hidden" class="perawat_nama_mengecek_xq_pertama" name="perawat_nama_mengecek_xq_pertama_${index}[]">
            </div>

             <div class="my-2">
                <select name="perawat_mengecek_xq_kedua_${index}[]" class="form-select select2-init" data-role="perawat_mengecek_xq_kedua" style="width:120px"></select>
                <input type="hidden" class="perawat_nama_mengecek_xq_kedua" name="perawat_nama_mengecek_xq_kedua_${index}[]">
            </div>
        </div>
        <div class="col-3">
          <input type="time" name="ket_jam_ketiga_kolom${index}[]" class="form-control border-dark" style="width:100px">
           <div class="">
                <label><input type="checkbox" class="form-check-input" data-role="checkjamKolom${index}Ketiga"> </label>
                <input type="hidden" name="checkjamKolom${index}Ketiga[]" class="24jam_hidden" data-role="checkjamKolom${index}Ketiga" value="">
                <input type="hidden" name="check_jamkolom${index}Ketiga[]" class="check_jamkolom${index}Ketiga"><br/>
            </div>

             <div class="my-2">
                <select name="perawat_mengecek_xw_pertama_${index}[]" class="form-select select2-init" data-role="perawat_mengecek_xw_pertama" style="width:120px"></select>
                <input type="hidden" class="perawat_nama_mengecek_xw_pertama" name="perawat_nama_mengecek_xw_pertama_${index}[]">
            </div>

             <div class="my-2">
                <select name="perawat_mengecek_xw_kedua_${index}[]" class="form-select select2-init" data-role="perawat_mengecek_xw_kedua" style="width:120px"></select>
                <input type="hidden" class="perawat_nama_mengecek_xw_kedua" name="perawat_nama_mengecek_xw_kedua_${index}[]">
            </div>

        </div>
        <div class="col-3">
          <input type="time" name="ket_jam_keempat_kolom${index}[]" class="form-control border-dark" style="width:100px">
          <div class="">
                <label><input type="checkbox" class="form-check-input" data-role="checkjamKolom${index}Keempat"> </label>
                <input type="hidden" name="checkjamKolom${index}Keempat[]" class="24jam_hidden" data-role="checkjamKolom${index}Keempat" value="">
                <input type="hidden" name="check_jamkolom${index}Keempat[]" class="check_jamkolom${index}Keempat"><br/>
            </div>

             <div class="my-2">
                <select name="perawat_mengecek_xe_pertama_${index}[]" class="form-select select2-init" data-role="perawat_mengecek_xe_pertama" style="width:120px"></select>
                <input type="hidden" class="perawat_nama_mengecek_xe_pertama" name="perawat_nama_mengecek_xe_pertama_${index}[]">
            </div>

             <div class="my-2">
                <select name="perawat_mengecek_xe_kedua_${index}[]" class="form-select select2-init" data-role="perawat_mengecek_xe_kedua" style="width:120px"></select>
                <input type="hidden" class="perawat_nama_mengecek_xe_kedua" name="perawat_nama_mengecek_xe_kedua_${index}[]">
            </div>
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
        for (let i = 2; i <= 16; i++) {
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
                    <input type="hidden" name="perawat_pertama[]" class="perawat_pertama"><br/>
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
                <input type="hidden" name="perawat_ketiga[]" class="perawat_ketiga"><br />
            </td>
            <td>
                <label><input type="checkbox" class="form-check-input" data-role="perawatKeempat"> </label>
                <input type="hidden" name="perawatKeempat[]" class="6jam_hidden" data-role="perawatKeempat" value="">
                <input type="hidden" name="perawat_keempat[]" class="perawat_keempat"><br />
            </td>
            <td>
                <label><input type="checkbox" class="form-check-input" data-role="perawatKelima"> </label>
                <input type="hidden" name="perawatKelima[]" class="3jam_hidden" data-role="perawatKelima" value="">
                <input type="hidden" name="perawat_kelima[]" class="perawat_kelima"><br />
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
                <select name="perawat[]" id="perawat${rowCount}" class="form-select perawat" style="width:120px"></select>
                <input type="hidden" name="perawat_nama[]" class="perawat_nama">
            </td>

            <td>
                <label><input type="checkbox" class="form-check-input" data-role="reviewFarmasi"> </label>
                <input type="hidden" name="reviewFarmasi[]" class="evaluasi_hidden" data-role="reviewFarmasi" value="">
                <input type="hidden" name="review_Farmasi[]" class="review_Farmasi">
            </td>
            <td>waktu</td>
            <td colspan="">
                <div class="my-2"><input type="text" name="ruang_rawatan[]" class="form-control border-dark" placeholder="ruangan..."></div>


                <div class="d-flex gap-2 justify-content-center ms-2">
                    <div class="col-3">
                        <input type="time" name="ket_jam_pertama[]" class="form-control border-dark" style="width:120px">
                        <div class="">
                            <label><input type="checkbox" class="form-check-input" data-role="checkjamKolom1Pertama"> </label>
                            <input type="hidden" name="checkjamKolom1Pertama[]" class="24jam_hidden" data-role="checkjamKolom1Pertama" value="">
                            <input type="hidden" name="check_jamkolom1Pertama[]" class="check_jamkolom1Pertama"><br/>
                        </div>

                        <div class="my-2">
                           <select name="perawat_mengecek_pertama[]" id="perawat_mengecek_pertama${rowCount}" class="form-select perawat_mengecek_pertama" style="width:120px"></select>
                            <input type="hidden" name="perawat_nama_mengecek_pertama[]" class="perawat_nama_mengecek_pertama">
                        </div>


                        <div class="my-2">
                           <select name="perawat_mengecek_kedua[]" id="perawat_mengecek_kedua${rowCount}" class="form-select perawat_mengecek_kedua" style="width:120px"></select>
                            <input type="hidden" name="perawat_nama_mengecek_kedua[]" class="perawat_nama_mengecek_kedua">
                        </div>


                        
                    </div>

                    <div class="col-3">
                        <input type="time" name="ket_jam_kedua[]" class="form-control border-dark" style="width:120px">
                        <div class="">
                            <label><input type="checkbox" class="form-check-input" data-role="checkjamKolom1Kedua"> </label>
                            <input type="hidden" name="checkjamKolom1Kedua[]" class="24jam_hidden" data-role="checkjamKolom1Kedua" value="">
                            <input type="hidden" name="check_jamkolom1Kedua[]" class="check_jamkolom1Kedua"><br/>
                        </div>

                         <div class="my-2">
                           <select name="perawat_mengecek_xq_pertama[]" id="perawat_mengecek_xq_pertama${rowCount}" class="form-select perawat_mengecek_xq_pertama" style="width:120px"></select>
                            <input type="hidden" name="perawat_nama_mengecek_xq_pertama[]" class="perawat_nama_mengecek_xq_pertama">
                        </div>


                        <div class="my-2">
                           <select name="perawat_mengecek_xq_kedua[]" id="perawat_mengecek_xq_kedua${rowCount}" class="form-select perawat_mengecek_xq_kedua" style="width:120px"></select>
                            <input type="hidden" name="perawat_nama_mengecek_xq_kedua[]" class="perawat_nama_mengecek_xq_kedua">
                        </div>
                    </div>

                    <div class="col-3">
                        <input type="time" name="ket_jam_ketiga[]" class="form-control border-dark" style="width:120px">
                         <div class="">
                            <label><input type="checkbox" class="form-check-input" data-role="checkjamKolom1Ketiga"> </label>
                            <input type="hidden" name="checkjamKolom1Ketiga[]" class="24jam_hidden" data-role="checkjamKolom1Ketiga" value="">
                            <input type="hidden" name="check_jamkolom1Ketiga[]" class="check_jamkolom1Ketiga"><br/>
                        </div>


                        <div class="my-2">
                           <select name="perawat_mengecek_xw_pertama[]" id="perawat_mengecek_xw_pertama${rowCount}" class="form-select perawat_mengecek_xw_pertama" style="width:120px"></select>
                            <input type="hidden" name="perawat_nama_mengecek_xw_pertama[]" class="perawat_nama_mengecek_xw_pertama">
                        </div>


                        <div class="my-2">
                           <select name="perawat_mengecek_xw_kedua[]" id="perawat_mengecek_xw_kedua${rowCount}" class="form-select perawat_mengecek_xw_kedua" style="width:120px"></select>
                            <input type="hidden" name="perawat_nama_mengecek_xw_kedua[]" class="perawat_nama_mengecek_xw_kedua">
                        </div>

                    </div>

                    <div class="col-3">
                        <input type="time" name="ket_jam_keempat[]" class="form-control border-dark" style="width:120px">
                        <div class="">
                            <label><input type="checkbox" class="form-check-input" data-role="checkjamKolom1Keempat"> </label>
                            <input type="hidden" name="checkjamKolom1Keempat[]" class="24jam_hidden" data-role="checkjamKolom1Keempat" value="">
                            <input type="hidden" name="check_jamkolom1Keempat[]" class="check_jamkolom1Keempat"><br/>
                        </div>

                        <div class="my-2">
                           <select name="perawat_mengecek_xe_pertama[]" id="perawat_mengecek_xe_pertama${rowCount}" class="form-select perawat_mengecek_xe_pertama" style="width:120px"></select>
                            <input type="hidden" name="perawat_nama_mengecek_xe_pertama[]" class="perawat_nama_mengecek_xe_pertama">
                        </div>


                        <div class="my-2">
                           <select name="perawat_mengecek_xe_kedua[]" id="perawat_mengecek_xe_kedua${rowCount}" class="form-select perawat_mengecek_xe_kedua" style="width:120px"></select>
                            <input type="hidden" name="perawat_nama_mengecek_xe_kedua[]" class="perawat_nama_mengecek_xe_kedua">
                        </div>
                    </div>
                </div>
            </td>


           ${ruangRawatanHTML}

            `;





        // Init Select2 dokters
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

        function initPerawatSelect2(container) {
            $(container).find('.select2-init').each(function() {
                const $select = $(this);
                if ($select.hasClass('select2-hidden-accessible')) return;

                $select.select2({
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
                    placeholder: 'Cari perawat...'
                }).on('select2:select', function(e) {
                    const text = e.params.data.text;
                    const $hidden = $(this).closest('div').find('input[type=hidden]');
                    if ($hidden.length) $hidden.val(text);
                });
            });
        }




        // Fungsi inisialisasi Select2 untuk elemen perawat
        function initPerawatSelect(selectorId, hiddenClass) {
            $(`#${selectorId}${rowCount}`).select2({
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
                placeholder: 'Cari perawat...'
            }).on('select2:select', function(e) {
                $(this).closest('td').find(`.${hiddenClass}`).val(e.params.data.text);
            });
        }

        // Inisialisasi untuk perawat pertama dan kedua
        initPerawatSelect('perawat_mengecek_pertama', 'perawat_nama_mengecek_pertama');
        initPerawatSelect('perawat_mengecek_kedua', 'perawat_nama_mengecek_kedua');
        initPerawatSelect('perawat_mengecek_xq_pertama', 'perawat_nama_mengecek_xq_pertama');
        initPerawatSelect('perawat_mengecek_xq_kedua', 'perawat_nama_mengecek_xq_kedua');
        initPerawatSelect('perawat_mengecek_xw_pertama', 'perawat_nama_mengecek_xw_pertama');
        initPerawatSelect('perawat_mengecek_xw_kedua', 'perawat_nama_mengecek_xw_kedua');
        initPerawatSelect('perawat_mengecek_xe_pertama', 'perawat_nama_mengecek_xe_pertama');
        initPerawatSelect('perawat_mengecek_xe_kedua', 'perawat_nama_mengecek_xe_kedua');







        // === AUTO SCROLL KE TABLE YANG DITAMBAHKAN ===
        row1.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });



        initPerawatSelect2(row1);

        return row1;
    }

    function ambilPerawatKolom(dataObj, i, kolom, subrole) {
        return {
            id: dataObj[`perawat_mengecek_${subrole}_${kolom}`]?.[i] || '',
            nama: dataObj[`perawat_nama_mengecek_${subrole}_${kolom}`]?.[i] || ''
        };
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
            // const kettanggalpertamaObat = dataObj['ket_tanggal_pertama']?.[i] || '';
            const ruangRawatan = dataObj['ruang_rawatan']?.[i] || '';
            const ketjampertamaObat = dataObj['ket_jam_pertama']?.[i] || '';
            const ketjamkeduaObat = dataObj['ket_jam_kedua']?.[i] || '';
            const ketjamketigaObat = dataObj['ket_jam_ketiga']?.[i] || '';
            const ketjamkeempatObat = dataObj['ket_jam_keempat']?.[i] || '';

            function ambilDataKolom(dataObj, i, kolom) {
                return {
                    // kettanggalpertama: dataObj[`ket_tanggal_pertama_kolom${kolom}`]?.[i] || '',
                    ruangRawatan: dataObj[`ruang_rawatan_kolom${kolom}`]?.[i] || '',
                    ketjampertama: dataObj[`ket_jam_pertama_kolom${kolom}`]?.[i] || '',
                    ketjamkedua: dataObj[`ket_jam_kedua_kolom${kolom}`]?.[i] || '',
                    ketjamketiga: dataObj[`ket_jam_ketiga_kolom${kolom}`]?.[i] || '',
                    ketjamkeempat: dataObj[`ket_jam_keempat_kolom${kolom}`]?.[i] || ''
                };
            }

            function ambilDataKolomDanAssign(kolom) {
                const {
                    ruangRawatan,
                    ketjampertama,
                    ketjamkedua,
                    ketjamketiga,
                    ketjamkeempat
                } = ambilDataKolom(dataObj, i, kolom);

                return {
                    [`ruangRawatanKolom${kolom}`]: ruangRawatan,
                    [`ketjampertamaObatKolom${kolom}`]: ketjampertama,
                    [`ketjamkeduaObatKolom${kolom}`]: ketjamkedua,
                    [`ketjamketigaObatKolom${kolom}`]: ketjamketiga,
                    [`ketjamkeempatObatKolom${kolom}`]: ketjamkeempat
                };
            }

            // Gabungkan semua hasil ke dalam scope
            const allKolomData = [
                ambilDataKolomDanAssign(2),
                ambilDataKolomDanAssign(3),
                ambilDataKolomDanAssign(4),
                ambilDataKolomDanAssign(5),
                ambilDataKolomDanAssign(6),
                ambilDataKolomDanAssign(7),
                ambilDataKolomDanAssign(8),
                ambilDataKolomDanAssign(9),
                ambilDataKolomDanAssign(10),
                ambilDataKolomDanAssign(11),
                ambilDataKolomDanAssign(12),
                ambilDataKolomDanAssign(13),
                ambilDataKolomDanAssign(14),
                ambilDataKolomDanAssign(15),
                ambilDataKolomDanAssign(16),
            ];

            // Spread hasil ke dalam variabel di scope ini
            const {
                ruangRawatanKolom2,
                ketjampertamaObatKolom2,
                ketjamkeduaObatKolom2,
                ketjamketigaObatKolom2,
                ketjamkeempatObatKolom2,
                ruangRawatanKolom3,
                ketjampertamaObatKolom3,
                ketjamkeduaObatKolom3,
                ketjamketigaObatKolom3,
                ketjamkeempatObatKolom3,
                ruangRawatanKolom4,
                ketjampertamaObatKolom4,
                ketjamkeduaObatKolom4,
                ketjamketigaObatKolom4,
                ketjamkeempatObatKolom4,
                ruangRawatanKolom5,
                ketjampertamaObatKolom5,
                ketjamkeduaObatKolom5,
                ketjamketigaObatKolom5,
                ketjamkeempatObatKolom5,
                ruangRawatanKolom6,
                ketjampertamaObatKolom6,
                ketjamkeduaObatKolom6,
                ketjamketigaObatKolom6,
                ketjamkeempatObatKolom6,
                ruangRawatanKolom7,
                ketjampertamaObatKolom7,
                ketjamkeduaObatKolom7,
                ketjamketigaObatKolom7,
                ketjamkeempatObatKolom7,
                ruangRawatanKolom8,
                ketjampertamaObatKolom8,
                ketjamkeduaObatKolom8,
                ketjamketigaObatKolom8,
                ketjamkeempatObatKolom8,
                ruangRawatanKolom9,
                ketjampertamaObatKolom9,
                ketjamkeduaObatKolom9,
                ketjamketigaObatKolom9,
                ketjamkeempatObatKolom9,

                ruangRawatanKolom10,
                ketjampertamaObatKolom10,
                ketjamkeduaObatKolom10,
                ketjamketigaObatKolom10,
                ketjamkeempatObatKolom10,
                ruangRawatanKolom11,
                ketjampertamaObatKolom11,
                ketjamkeduaObatKolom11,
                ketjamketigaObatKolom11,
                ketjamkeempatObatKolom11,
                ruangRawatanKolom12,
                ketjampertamaObatKolom12,
                ketjamkeduaObatKolom12,
                ketjamketigaObatKolom12,
                ketjamkeempatObatKolom12,
                ruangRawatanKolom13,
                ketjampertamaObatKolom13,
                ketjamkeduaObatKolom13,
                ketjamketigaObatKolom13,
                ketjamkeempatObatKolom13,
                ruangRawatanKolom14,
                ketjampertamaObatKolom14,
                ketjamkeduaObatKolom14,
                ketjamketigaObatKolom14,
                ketjamkeempatObatKolom14,
                ruangRawatanKolom15,
                ketjampertamaObatKolom15,
                ketjamkeduaObatKolom15,
                ketjamketigaObatKolom15,
                ketjamkeempatObatKolom15,
                ruangRawatanKolom16,
                ketjampertamaObatKolom16,
                ketjamkeduaObatKolom16,
                ketjamketigaObatKolom16,
                ketjamkeempatObatKolom16,

            } = Object.assign({}, ...allKolomData);


            const subroles = ['pertama', 'kedua', 'xq_pertama', 'xq_kedua', 'xw_pertama', 'xw_kedua', 'xe_pertama', 'xe_kedua'];

            for (let kolom = 2; kolom <= 16; kolom++) {
                subroles.forEach(subrole => {
                    const {
                        id,
                        nama
                    } = ambilPerawatKolom(dataObj, i, kolom, subrole);

                    const selectEl = $(rows[0]).find(`select[name="perawat_mengecek_${subrole}_${kolom}[]"]`);
                    const hiddenEl = rows[0].querySelector(`input[name="perawat_nama_mengecek_${subrole}_${kolom}[]"]`);

                    if (!selectEl.length) return;

                    selectEl.select2({
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
                        placeholder: 'Cari perawat...'
                    });

                    if (nama) {
                        const opt = new Option(nama, id || nama, true, true);
                        selectEl.append(opt).trigger('change');
                        if (hiddenEl) hiddenEl.value = nama;
                    }
                });
            }






            // dokters
            const perawat_nama = dataObj['perawat_nama']?.[i] || '';
            const perawat_id = dataObj['perawat']?.[i] || '';


            //////// baris perawats pertama ///////
            const perawat_nama_mengecek_pertama = dataObj['perawat_nama_mengecek_pertama']?.[i] || '';
            const perawat_mengecek_id_pertama = dataObj['perawat_mengecek_pertama']?.[i] || '';

            const perawat_nama_mengecek_kedua = dataObj['perawat_nama_mengecek_kedua']?.[i] || '';
            const perawat_mengecek_id_kedua = dataObj['perawat_mengecek_kedua']?.[i] || '';
            //// batas ////////////////

            //////// baris perawats kedua xq ///////
            const perawat_nama_mengecek_xq_pertama = dataObj['perawat_nama_mengecek_xq_pertama']?.[i] || '';
            const perawat_mengecek_xq_id_pertama = dataObj['perawat_mengecek_xq_pertama']?.[i] || '';

            const perawat_nama_mengecek_xq_kedua = dataObj['perawat_nama_mengecek_xq_kedua']?.[i] || '';
            const perawat_mengecek_xq_id_kedua = dataObj['perawat_mengecek_xq_kedua']?.[i] || '';
            //// batas ////////////////

            //////// baris perawats kedua xw ///////
            const perawat_nama_mengecek_xw_pertama = dataObj['perawat_nama_mengecek_xw_pertama']?.[i] || '';
            const perawat_mengecek_xw_id_pertama = dataObj['perawat_mengecek_xw_pertama']?.[i] || '';

            const perawat_nama_mengecek_xw_kedua = dataObj['perawat_nama_mengecek_xw_kedua']?.[i] || '';
            const perawat_mengecek_xw_id_kedua = dataObj['perawat_mengecek_xw_kedua']?.[i] || '';
            //// batas ////////////////

            //////// baris perawats kedua xe ///////
            const perawat_nama_mengecek_xe_pertama = dataObj['perawat_nama_mengecek_xe_pertama']?.[i] || '';
            const perawat_mengecek_xe_id_pertama = dataObj['perawat_mengecek_xe_pertama']?.[i] || '';

            const perawat_nama_mengecek_xe_kedua = dataObj['perawat_nama_mengecek_xe_kedua']?.[i] || '';
            const perawat_mengecek_xe_id_kedua = dataObj['perawat_mengecek_xe_kedua']?.[i] || '';
            //// batas ////////////////

            //////// baris perawats tambahnews ///////
            const perawat_nama_mengecek_pertama_2 = dataObj['perawat_nama_mengecek_pertama_2']?.[i] || '';
            const perawat_mengecek_id_pertama_2 = dataObj['perawat_mengecek_pertama_2']?.[i] || '';

            //// batas ////////////////







            const namaPemeriksa = dataObj['nama_pemeriksa']?.[i] || '';

            //===Row 1===
            rows[0].querySelector('input[name="tanggal_jam[]" ]').value = tanggal_jam;
            rows[0].querySelector('input[name="tanggal_jam_kedua[]" ]').value = tanggalJamKedua;
            rows[0].querySelector('input[name="tanggal_jam_order[]" ]').value = tanggalJamOrder;
            // rows[0].querySelector('input[name="ket_tanggal_pertama[]" ]').value = kettanggalpertamaObat;

            //kolom 1
            // rows[0].querySelector('input[name="ket_tanggal_pertama_kolom2[]" ]').value = kettanggalpertamaObatKolom2;
            // rows[0].querySelector('input[name="ket_tanggal_pertama_kolom3[]" ]').value = kettanggalpertamaObatKolom3;
            // rows[0].querySelector('input[name="ket_tanggal_pertama_kolom4[]" ]').value = kettanggalpertamaObatKolom4;
            // rows[0].querySelector('input[name="ket_tanggal_pertama_kolom5[]" ]').value = kettanggalpertamaObatKolom5;
            // rows[0].querySelector('input[name="ket_tanggal_pertama_kolom6[]" ]').value = kettanggalpertamaObatKolom6;
            // rows[0].querySelector('input[name="ket_tanggal_pertama_kolom7[]" ]').value = kettanggalpertamaObatKolom7;
            // rows[0].querySelector('input[name="ket_tanggal_pertama_kolom8[]" ]').value = kettanggalpertamaObatKolom8;
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
            setValue(9, ruangRawatanKolom9, ketjampertamaObatKolom9, ketjamkeduaObatKolom9, ketjamketigaObatKolom9, ketjamkeempatObatKolom9);
            setValue(10, ruangRawatanKolom10, ketjampertamaObatKolom10, ketjamkeduaObatKolom10, ketjamketigaObatKolom10, ketjamkeempatObatKolom10);
            setValue(11, ruangRawatanKolom11, ketjampertamaObatKolom11, ketjamkeduaObatKolom11, ketjamketigaObatKolom11, ketjamkeempatObatKolom11);
            setValue(12, ruangRawatanKolom12, ketjampertamaObatKolom12, ketjamkeduaObatKolom12, ketjamketigaObatKolom12, ketjamkeempatObatKolom12);
            setValue(13, ruangRawatanKolom13, ketjampertamaObatKolom13, ketjamkeduaObatKolom13, ketjamketigaObatKolom13, ketjamkeempatObatKolom13);
            setValue(14, ruangRawatanKolom14, ketjampertamaObatKolom14, ketjamkeduaObatKolom14, ketjamketigaObatKolom14, ketjamkeempatObatKolom14);
            setValue(15, ruangRawatanKolom15, ketjampertamaObatKolom15, ketjamkeduaObatKolom15, ketjamketigaObatKolom15, ketjamkeempatObatKolom15);
            setValue(16, ruangRawatanKolom16, ketjampertamaObatKolom16, ketjamkeduaObatKolom16, ketjamketigaObatKolom16, ketjamkeempatObatKolom16);


            // batas
            rows[0].querySelector('textarea[name="nama_obat[]" ]').value = namaObat;

            rows[0].querySelector('textarea[name="dosis_obat[]" ]').value = dosisObat;
            rows[0].querySelector('textarea[name="cara_obat[]" ]').value = caraObat;
            rows[0].querySelector('textarea[name="ket_obat[]" ]').value = ketObat;



            const row1 = rows[0];
            // Checkbox roles
            const baseRoles = [
                'perawatPertama', 'perawatKedua', 'perawatKetiga', 'perawatKeempat', 'perawatKelima', 'reviewFarmasi'
            ];

            // Tambahkan role checkjamKolomX
            for (let kolom = 1; kolom <= 4; kolom++) {
                ['Pertama', 'Kedua', 'Ketiga', 'Keempat'].forEach(posisi => {
                    baseRoles.push(`checkjamKolom${kolom}${posisi}`);
                });
            }

            baseRoles.forEach(role => {
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




            // === Row 1: dokter
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




            // perawats mengecek
            [{
                    selectClass: '.perawat_mengecek_pertama',
                    hiddenClass: '.perawat_nama_mengecek_pertama',
                    nama: perawat_nama_mengecek_pertama,
                    id: perawat_mengecek_id_pertama
                },
                {
                    selectClass: '.perawat_mengecek_kedua',
                    hiddenClass: '.perawat_nama_mengecek_kedua',
                    nama: perawat_nama_mengecek_kedua,
                    id: perawat_mengecek_id_kedua
                },
                {
                    selectClass: '.perawat_mengecek_xq_pertama',
                    hiddenClass: '.perawat_nama_mengecek_xq_pertama',
                    nama: perawat_nama_mengecek_xq_pertama,
                    id: perawat_mengecek_xq_id_pertama
                },
                {
                    selectClass: '.perawat_mengecek_xq_kedua',
                    hiddenClass: '.perawat_nama_mengecek_xq_kedua',
                    nama: perawat_nama_mengecek_xq_kedua,
                    id: perawat_mengecek_xq_id_kedua
                },
                {
                    selectClass: '.perawat_mengecek_xw_pertama',
                    hiddenClass: '.perawat_nama_mengecek_xw_pertama',
                    nama: perawat_nama_mengecek_xw_pertama,
                    id: perawat_mengecek_xw_id_pertama
                },
                {
                    selectClass: '.perawat_mengecek_xw_kedua',
                    hiddenClass: '.perawat_nama_mengecek_xw_kedua',
                    nama: perawat_nama_mengecek_xw_kedua,
                    id: perawat_mengecek_xw_id_kedua
                },
                {
                    selectClass: '.perawat_mengecek_xe_pertama',
                    hiddenClass: '.perawat_nama_mengecek_xe_pertama',
                    nama: perawat_nama_mengecek_xe_pertama,
                    id: perawat_mengecek_xe_id_pertama
                },
                {
                    selectClass: '.perawat_mengecek_xe_kedua',
                    hiddenClass: '.perawat_nama_mengecek_xe_kedua',
                    nama: perawat_nama_mengecek_xe_kedua,
                    id: perawat_mengecek_xe_id_kedua
                },

            ].forEach(({
                selectClass,
                hiddenClass,
                nama,
                id
            }) => {
                const selectEl = $(rows[0]).find(selectClass);
                const hiddenEl = rows[0].querySelector(hiddenClass);

                selectEl.select2({
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
                    placeholder: 'Cari perawat...'
                });

                if (nama) {
                    const opt = new Option(nama, id || nama, true, true);
                    selectEl.append(opt).trigger('change');
                    if (hiddenEl) hiddenEl.value = nama;
                }
            });


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