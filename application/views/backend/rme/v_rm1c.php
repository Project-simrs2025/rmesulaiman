<!-- batas ganti -->
<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3">
            <tr>
                <td rowspan="2" class="col-3 text-center">
                    <div class=" d-flex align-items-center flex-column mt-5">

                        <!-- gambar -->
                        <img src="<?= $images; ?>" alt="Logo" style="width: 120px;">
                        <h4><?= $site_title; ?></h4>
                        <div><?= $lokasi ?></div>
                    </div>
                </td>

                <td class="col-5" rowspan="2">
                    <div class="text-center mt-2">
                        <h4>CHECKLIST KESELAMATAN POLIKLINIK GIGI & MULUT</h4>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    // Daftar input field
                    $dataform1 = array(
                        array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "$nama_pasien", 'holder' => "Masukkan nama Pasien", 'status' => "disabled"),
                        array('nama' => "Nik", 'name' => "nik", 'tipe' => "text", 'values' => "$nik", 'holder' => "Masukkan Nama nik", 'status' => "disabled"),
                        array('nama' => "Tanggal Lahir", 'name' => "tanggal_lahir", 'tipe' => "date", 'values' => "$tgl_lahir", 'holder' => "Masukkan Nama Tanggal Lahir", 'status' => "disabled"),
                        array('nama' => "Agama", 'tipe' => "text", 'values' => "$nama_agama", 'name' => 'nama_agama', 'holder' => "Masukkan Nama agama", 'status' => "disabled"),
                        array('nama' => "No Rm", 'tipe' => "text", 'values' => "$no_rm", 'name' => 'no_rm', 'holder' => "Masukkan No Rm", 'status' => "disabled"),
                    );
                    foreach ($dataform1 as $a) {

                        echo "<div class='form-group mt-3'>";
                        echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
                        echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>";
                        echo "<span class='help-block text-danger'></span></div>";
                    }
                    ?>
                    <label for="">Diagnosa :</label>
                    <select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa">
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <span class="fw-bold">Sign in </span>( Dilakukan Sebelum tindakan, oleh perawat dan dokter gigi )</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- table 2  -->
<div class="row">
    <table class="table table-bordered border-dark mt-2">
        <tbody class="text-center">
            <th colspan="2"></th>
            <th class="col-1">Ya</th>
            <th class="col-1">Tidak</th>
        </tbody>
        <tbody>

            <?php
            $questions = [
                [
                    "no" => "1",
                    "question" => "Pasien Telah dikonfirmasikan",
                    "items" => [
                        "identitas" => "a. identitas pasien",
                        "loperasi" => "b. Lokasi operasi/tindakan",
                        "poperasi" => "c. Prosedur operasi/tindakan",
                        "fpersetujuan" => "d. Formulir persetujuan tindakan kedokteran"
                    ]
                ],
                [
                    "no" => "2",
                    "question" => "Lokasi gigi sudah di identifikasi",
                    "name" => "lgigi",
                ],
                [
                    "no" => "3",
                    "question" => "Alat dan obat-obatan sudah di cek lengkap",
                    "name" => "obat",
                ],
                [
                    "no" => "4",
                    "question" => "Apakah pasien memiliki riwayat alergi",
                    "name" => "pasienAlergi",
                ],
                [
                    "no" => "5",
                    "question" => "Kesulitan Bernafas",
                    "name" => "kbernafas",
                ],
                [
                    "no" => "6",
                    "question" => "Resiko Kehilangan darah",
                    "name" => "darah",
                ],
                [
                    "no" => "7",
                    "question" => "Hasil Rontgen",
                    "name" => "hrontgen",
                ]
            ];
            ?>

            <?php foreach ($questions as $question): ?>
                <tr>
                    <td class="text-center"><?= $question['no']; ?></td>

                    <!-- Main question cell -->
                    <?php if ($question['no'] == "1"): ?>
                        <td colspan="4"><?= $question['question']; ?></td> <!-- For question 1, colspan 4 -->
                    <?php else: ?>
                        <td><?= $question['question']; ?></td> <!-- For other questions, just regular colspan -->
                    <?php endif; ?>

                    <!-- For other questions (2, 3, 4, etc.), add the radio buttons -->
                    <?php if ($question['no'] != "1"): ?>
                        <td class="text-center">
                            <input type="radio" name="<?= $question['name']; ?>" value="ya" class="custom-checkbox-success">
                        </td>
                        <td class="text-center">
                            <input type="radio" name="<?= $question['name']; ?>" value="tidak" class="custom-checkbox-danger">
                        </td>
                    <?php endif; ?>
                </tr>

                <!-- Displaying sub-questions for question 1 (Pasien Telah dikonfirmasikan) -->
                <?php if ($question['no'] == "1" && isset($question['items'])): ?>
                    <?php foreach ($question['items'] as $name => $label): ?>
                        <tr>
                            <td></td>
                            <td>
                                <div class="mx-3">
                                    <label for="<?= $name; ?>" class="mx-2"><?= $label; ?>:</label>
                                </div>
                            </td>
                            <td class="text-center"><input type="radio" name="<?= $name; ?>" value="ya" class="custom-checkbox-success"></td>
                            <td class="text-center"><input type="radio" name="<?= $name; ?>" value="tidak" class="custom-checkbox-danger"></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>





        </tbody>
    </table>
</div>

<!-- table 2 -->
<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-2">
            <tbody>
                <tr>
                    <td colspan="4"><span class="fw-bold">TIME OUT</span></td>
                </tr>
                <tr class="text-center">
                    <td colspan="2"></td>
                    <td class="col-1">Ya</td>
                    <td class="col-1">Tidak</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><label for="">Konfirmasi seluruh anggota tim telah mengenal nama dan perannya</label></td>
                    <td class="text-center"><input type="radio" value="ya" class="custom-checkbox-success" name="konfirmasi_anggota"></td>
                    <td class="text-center"><input type="radio" value="tidak" name="konfirmasi_anggota" class="custom-checkbox-danger"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <div class="d-block">
                            <span>Dokter gigi dan perawat melakukan konfirmasi secara verbal</span>
                            <div class="ms-3 my-2">a. Nama :</div>
                            <div class="ms-3 my-2">b. Prosedur :</div>
                            <div class="ms-3 my-2">c. Lokasi :</div>
                        </div>
                    </td>
                    <td>
                        <div class="d-block text-center">
                            <br>
                            <div><input type="radio" class="my-2 custom-checkbox-success" name="Nama_pgigi" value="ya"></div>
                            <div><input type="radio" class="my-2 custom-checkbox-success" name="prosedur" value="ya"></div>
                            <div><input type="radio" class="my-2 custom-checkbox-success" name="lokasi" value="ya"></div>
                        </div>
                    </td>
                    <td>
                        <div class="d-block text-center">
                            <br>
                            <div><input type="radio" class="my-2 custom-checkbox-danger" name="Nama_pgigi" value="tidak"></div>
                            <div><input type="radio" class="my-2 custom-checkbox-danger" name="prosedur" value="tidak"></div>
                            <div><input type="radio" class="my-2 custom-checkbox-danger" name="lokasi" value="tidak"></div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<!-- table 3 -->
<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-2">
            <tbody>
                <tr>
                    <td colspan="4"><span class="fw-bold">SIGN IN</span></td>
                </tr>
                <tr class="text-center">
                    <td colspan="2"></td>
                    <td class="col-1">Ya</td>
                    <td class="col-1">Tidak</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <div class="d-block">
                            <span>Perawat melakukan konfirmasi verbal dengan tim:</span>
                            <div class="ms-3 my-2">a. Nama prosedur tindakan sudah dicatat</div>
                            <div class="ms-3 my-2">b. Spesimen telah diberi label (nama pasien dan lokasi asal jaringan)</div>
                            <div class="ms-3 my-2">c. Adakah masalah selama operasi</div>
                        </div>
                    </td>
                    <td>
                        <div class="d-block text-center">
                            <br>
                            <div><input type="radio" class="my-2 custom-checkbox-success" name="nama_prosedur" value="ya"></div>
                            <div><input type="radio" class="my-2 custom-checkbox-success" name="spesimen" value="ya"></div>
                            <div><input type="radio" class="my-2 custom-checkbox-success" name="mOperasi" value="ya"></div>
                        </div>
                    </td>
                    <td>
                        <div class="d-block text-center">
                            <br>
                            <div><input type="radio" class="my-2 custom-checkbox-danger" name="nama_prosedur" value="tidak"></div>
                            <div><input type="radio" class="my-2 custom-checkbox-danger" name="spesimen" value="tidak"></div>
                            <div><input type="radio" class="my-2 custom-checkbox-danger" name="mOperasi" value="tidak"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><label for="">Dokter gigi dan perawat melakukan review masalah utama yang harus diperhatikan untuk penyembuhan dan manajemen pasien selanjutnya.</label></td>
                    <td class="text-center"><input type="radio" name="review" value="ya" class="custom-checkbox-success"></td>
                    <td class="text-center"><input type="radio" name="review" value="tidak" class="custom-checkbox-danger"></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <table class="w-100">
                            <tr>
                                <td class="text-center"><b>Dokter Gigi</b></td>
                                <td class="text-center"><b>Perawat</b></td>
                            </tr>
                            <tr>
                                <td class="text-center col-6">
                                    <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum" />

                                    <div class="d-flex justify-content-center my-3">
                                        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select dokter" style="width: 70%;"></select>
                                    </div>
                                </td>
                                <td class="text-center col-6">
                                    <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat_pengkaji" />

                                    <div class="d-flex justify-content-center my-3">
                                        <select type="select" name="perawat_pengkaji" id="perawat_pengkaji" class="form-select perawat" style="width: 70%;"></select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- BATAS GANTI -->

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


        $('#dokter_umum').prop('disabled', false)
        $('#dokter_umum').select2('open')
        $('#dokter_umum').select2('close')
        if (mode === "lihat")
            $('#dokter_umum').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
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


        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
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