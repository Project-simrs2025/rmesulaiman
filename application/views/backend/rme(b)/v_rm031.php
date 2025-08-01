<div class="row">
    <table class="table table-bordered border-dark">
        <tr>
            <td>
                <div class="text-center">
                    CATATAN KEPERAWATAN RUANG PEMULIHAN
                    (RECOVERY ROOM)
                </div>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <div class="col-4"> No Rm :</div>
                    <div> <input type="text" class="form-control border-dark" name="no_rm"></div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="col-4"> Nama :</div>
                    <div> <input type="text" class="form-control border-dark" name="nama_pasien"></div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="col-4"> Tgl Lahir:</div>
                    <div> <input type="text" class="form-control border-dark" name="tanggal_lahir"></div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="col-4"> Umur:</div>
                    <div> <input type="text" class="form-control border-dark" name="umur"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div>Catatan Keperawatan Pasca Operasi</div>
                <div class="d-flex align-items-center">
                    <div class="col-2">Rawatan Pasca Operasi</div>
                    <input type="checkbox" name="rawat_pasca_opearasi" class="custom-checkbox-success">
                    Ruang Pulih
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-2">Transport</div>
                    <div class="col-2">
                        <input type="checkbox" name="stecther" class="custom-checkbox-success">
                        Strecther
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="kursi_roda_scoter" class="custom-checkbox-success">
                        Kursi Roda
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="tempat_tidur_scoter" class="custom-checkbox-success">
                        Tempat Tidur
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-2">Jam Masuk</div>
                    <input type="time" name="jam_masuk" class="form-control border-dark" style="width:140px;" value="<?= date('H:i') ?>">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div>Pengkajian Operasi</div>
                <div class="d-flex align-items-center">
                    <div class="col-2">1. Keadaan Umum</div>
                    <div class="col-2">
                        <input type="checkbox" name="Memuaskan" class="custom-checkbox-success">
                        Strecther
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="kursi_roda" class="custom-checkbox-success">
                        Kursi Roda
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="tempat_tidur" class="custom-checkbox-success">
                        Tempat Tidur
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-2">2. Tingkat Kesadaran</div>
                    <div class="col-2">
                        <input type="checkbox" name="terjaga" class="custom-checkbox-success">
                        Terjaga
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="mudah_dibangunkan" class="custom-checkbox-success">
                        Mudah Dibangunkan
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="tidak_berespon" class="custom-checkbox-success">
                        Tidak Berespon
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-2">3. Jalan Nafas</div>
                    <div class="col-2">
                        <input type="checkbox" name="tdk_ada_masalah" class="custom-checkbox-success">
                        Tidak Ada masalah
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="nafas_lain" class="custom-checkbox-success">
                        lainnya
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-2">4. Pernapasan</div>
                    <div class="col-2">
                        <input type="checkbox" name="spontan" class="custom-checkbox-success">
                        spontan
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="dibantu" class="custom-checkbox-success">
                        dibantu
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-2">5. Terapi Oksigen</div>
                    <div class="col-2">
                        <input type="checkbox" name="Tidak_terapi" class="custom-checkbox-success">
                        Tidak
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="nasal_terapi" class="custom-checkbox-success">
                        O2 Nasal
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="terapi_lain" class="custom-checkbox-success">
                        Lainnya
                    </div>
                </div>
                <div class="d-flex align-items-center flex-wrap">
                    <div class="col-2">6. Kulit Datang</div>
                    <div class="col-2">
                        <input type="checkbox" name="kering_lembab" class="custom-checkbox-success">
                        Kering/lembab
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="merah_biru" class="custom-checkbox-success">
                        merah muda/biru
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="hangat_dingin" class="custom-checkbox-success">
                        hangat/dingin
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="lain_terapi" class="custom-checkbox-success">
                        lainnya
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-2">Keluar</div>
                    <div class="d-flex align-items-center gap-2 col-2">
                        <input type="checkbox" name="keluar_kering" class="custom-checkbox-success" id="keluar_kering">
                        <label class="keluar_kering">Kering/lembab</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 col-2">
                        <input type="checkbox" name="keluar_merah_muda" class="custom-checkbox-success" id="keluar_merah_muda">
                        <label class="keluar_merah_muda">Merah Mudah Biru</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 col-2">
                        <input type="checkbox" name="keluar_hangat" class="custom-checkbox-success" id="keluar_hangat">
                        <label class="keluar_hangat">Hangat/Dingin</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 col-2">
                        <input type="checkbox" name="keluar_lainnya" class="custom-checkbox-success" id="keluar_lainnya">
                        <label class="keluar_lainnya">Lainnya</label>
                    </div>

                </div>
                <div class="d-flex align-items-center flex-wrap">
                    <div class="col-2">7. sirkulasi</div>
                    <div class="col-2">
                        <input type="checkbox" name="merah" class="custom-checkbox-success">
                        Merah Muda
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="biru" class="custom-checkbox-success">
                        kebiruan
                    </div>
                </div>
                <div class="d-flex align-items-center flex-wrap">
                    <div class="col-2">8. Posisi Pasien</div>
                    <div class="col-2">
                        <input type="checkbox" name="lateral" class="custom-checkbox-success">
                        Lateral Ka/ki
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="tersenggah" class="custom-checkbox-success">
                        Tersanggah Keatas
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="posisi-lain" class="custom-checkbox-success">
                        lainnya
                    </div>
                </div>
                <div>9. Skor Alderette</div>
            </td>
        </tr>
    </table>

    <table class="table table-bordered border-dark">
        <tr class="text-center">
            <td>Aktivitas</td>
            <td></td>
            <td>Pernapasan</td>
            <td></td>
        </tr>
        <?php
        function generateDoubleCheckboxRow($items)
        {
            $output = '';
            // Bagi array menjadi kelompok berisi 2 item
            $chunks = array_chunk($items, 2);

            foreach ($chunks as $pair) {
                $output .= "<tr>";
                foreach ($pair as $item) {
                    $output .= "
            <td>
                <div class='d-flex align-items-center gap-2'>
                    <div class='col-2'></div>
                    <input type='checkbox' onchange='calculateTotal()' name='{$item['name']}' id='{$item['name']}' class='custom-checkbox-success' data-value='{$item['value']}'>
                    <label for='{$item['name']}'>{$item['label']}</label>
                </div>
            </td>
            <td>{$item['value']}</td>";
                }
                // Jika item hanya 1 (jumlah ganjil), tambahkan kolom kosong agar tetap rapi
                if (count($pair) < 2) {
                    $output .= "<td></td><td></td>";
                }
                $output .= "</tr>";
            }

            return $output;
        }

        function generateTotalRow()
        {
            return "
    <tr>
        <td colspan='2'>Total</td>
        <td colspan='2'>
            <input type='text' name='total_gcs' id='total_gcs' class='form-control border-dark' readonly>
        </td>
    </tr>";
        }
        ?>


        <?php
        $items = [
            ['name' => 'ektremitas', 'label' => '4 ektremitas', 'value' => 2],
            ['name' => 'napas', 'label' => 'Dapat bernafas dalam dan batuk', 'value' => 2],
            ['name' => 'ektremitas_2', 'label' => '2 ektremitas', 'value' => 1],
            ['name' => 'nafas_batuk', 'label' => 'Dapat bernafas dalam dan batuk', 'value' => 1],
            ['name' => 'ektremitas_1', 'label' => '1 ektremitas', 'value' => 0],
            ['name' => 'Apnoe', 'label' => 'Apnoe', 'value' => 0],
            ['name' => 'Kesadaran', 'label' => 'Kesadaran', 'value' => ''],
            ['name' => 'Sirkulasi', 'label' => 'Sirkulasi', 'value' => ''],
            ['name' => 'Sadar_penuh', 'label' => 'Sadar penuh', 'value' => 2],
            ['name' => 'td_20', 'label' => 'TD + 20 mmHg dari nilai Pra-Anastes', 'value' => 2],
            ['name' => 'bangun_panggil', 'label' => 'Bangun bila dipanggil', 'value' => 1],
            ['name' => 'bangun_20', 'label' => 'TD + 20-50 mmHg dari nilai Pra-anastesi', 'value' => 1],
            ['name' => 'tdk_respon', 'label' => 'Tidak ada respon ', 'value' => 0],
            ['name' => 'pra_anestesi', 'label' => 'TD + 50 mmHg dari nilai Pra-anastesi ', 'value' => 0],
            ['label' => 'saturasi'],
            ['name' => 'udara_kamar', 'label' => 'Lebih Besar dari 92% dengan udara kamar ', 'value' => 2],
            ['name' => 'udara_kamar90', 'label' => 'lebih besar dari 90% dengan udara kamar ', 'value' => 1],
            ['name' => 'udara_kamar89', 'label' => '< 90% dengan udara kamar ', 'value' => 0],
        ];

        echo generateDoubleCheckboxRow($items);
        echo generateTotalRow();
        ?>

    </table>


    <table class="border border-dark">
        <tr>
            <td colspan="2">
                <div class="text-center">OBSERVASI TANDA-TANDA VITAL DUA JAM PERTAMA DIRUANG PULIH SADAR</div>
            </td>
        </tr>
        <tr>
            <td>
                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/rm031.png') ?>"
                    style="width: 500px; height:500px" data-input-name="image_drawer_state_image_11" />
                <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                    value="" />
            </td>
            <td>
                <table class="table table-bordered border-dark">
                    <tr>
                        <td>Nadi</td>
                        <td>Waktu Masuk</td>
                        <td>Waktu Keluar</td>
                    </tr>
                    <?php
                    $data = [
                        'teratur' => 'Teratur',
                        'tdk_teratur' => 'Tidak Teratur',
                        'lemah' => 'lemah',
                        'kuat' => 'kuat',
                        'normal' => 'normal',
                        'nafas' => 'nafas',
                        'teratur2' => 'teratur',
                        'tdk_teratur2' => 'Tidak teratur',
                        'Dangkal' => 'Dangkal',
                        'Dalam' => 'Dalam',
                        'Sukar' => 'Sukar',
                        'terapiO2' => 'Terapi O2',
                        'SpO2' => 'SpO2',

                    ];

                    foreach ($data as $key => $label) {
                        echo "<tr>
						<td>{$label}</td>
						<td><input type='text' name='{$key}_masuk' class='form-control border-dark'></td>
						<td><input type='text' name='{$key}_keluar' class='form-control border-dark'></td>
					</tr>";
                    }
                    ?>
                </table>
            </td>
        </tr>
    </table>
</div>


<table class="table table-bordered border-dark">
    <tr class="text-center">
        <td>Infus</td>
        <td>Jam</td>
        <td>Jam</td>
    </tr>
    <tr>
        <td>
            <input type="text" class="form-control border-dark" name="infus_input">
        </td>
        <td>
            <input type="text" class="form-control border-dark" name="jam_input1">
        </td>
        <td>
            <input type="text" class="form-control border-dark" name="jam_input2">
        </td>
    </tr>
    <tr class="text-center">
        <td>Obat</td>
        <td>Jam</td>
        <td>Jam</td>
    </tr>
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <tr>
            <td><input type="text" class="form-control border-dark" name="obat_<?= $i; ?>"></td>
            <td><input type="text" class="form-control border-dark" name="jam_1_<?= $i; ?>"></td>
            <td><input type="text" class="form-control border-dark" name="jam_2_<?= $i; ?>"></td>
        </tr>
    <?php endfor; ?>
</table>

<div class="d-flex justify-content-end align-items-center gap-2"><?= $city_sign; ?> <input type="text" name="tgl_admit" class="form-control border-dark w-25"> </div>

<div class="row">
    <div class="d-flex justify-content-between">
        <div class="d-flex flex-column gap-2">
            <div>Perawat Ruangan</div>
            <div>
                <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_perawat_ruangan" />
            </div>
            <select type="select" name="perawat_ruangan" id="perawat_ruangan" class="form-select perawat" style="width: 100%;"></select>
        </div>

        <div class="d-flex flex-column gap-2">
            <div class="text-end">Perawat pemulihan</div>
            <div class="text-end">
                <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_perawat_pemulihan" />
            </div>
            <select type="select" name="perawat_pemulihan" id="perawat_pemulihan" class="form-select perawat" style="width: 100%;"></select>
        </div>
    </div>
</div>





<script>
    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });


    // Fungsi umum untuk menghitung total dari checkbox berdasarkan atribut data
    function calculateCheckboxTotal(selector, resultSelector, dataAttr = "data-score") {
        const total = [...document.querySelectorAll(selector)]
            .filter(cb => cb.checked)
            .reduce((sum, cb) => sum + parseInt(cb.getAttribute(dataAttr) || 0), 0);

        const resultField = document.querySelector(resultSelector);
        if (resultField) resultField.value = total;
    }

    // Fungsi untuk menghitung total dari input text field berdasarkan name
    function calculateInputTotal(fieldNames, resultName) {
        const total = fieldNames.reduce((sum, name) => {
            const input = document.getElementsByName(name)[0];
            return sum + (parseInt(input?.value) || 0);
        }, 0);

        const resultField = document.getElementsByName(resultName)[0];
        if (resultField) resultField.value = total;
    }

    // Event listener untuk checkbox nutrisi
    document.querySelectorAll('input[type="checkbox"][data-score]')
        .forEach(cb => cb.addEventListener('change', () => {
            calculateCheckboxTotal('input[type="checkbox"][data-score]', 'input[name="total_nutrisi"]');
        }));

    // Contoh pemakaian fungsi lainnya:
    // Untuk GCS (gunakan data-value sebagai atribut penilaian)
    document.querySelectorAll('input[type="checkbox"][data-value]')
        .forEach(cb => cb.addEventListener('change', () => {
            calculateCheckboxTotal('input[type="checkbox"][data-value]', '#total_gcs', 'data-value');
        }));

    // Untuk skor dari input fields
    function updateTotalScoreInputs() {
        calculateInputTotal(
            ["score_face", "score_fat", "score_Activity", "score_cry", "score_speakup"],
            "caclt_score"
        );
    }
    // divider calculating


    // start cbcommon
    let dataDokter = []
    let dataPerawat = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI();
        listPerawatAPI();

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat
        } = globalData;


        $('#perawat_ruangan').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_ruangan')
        });

        $('#perawat_pemulihan').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_pemulihan')
        });

    });

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);


        $('#perawat_ruangan').prop('disabled', false)
        $('#perawat_ruangan').select2('open')
        $('#perawat_ruangan').select2('close')
        if (mode === "lihat")
            $('#perawat_ruangan').prop('disabled', true)

        setTimeout(() => {
            // console.log(dataDokter)
            dataPerawat?.map(v => {
                if (v.text === $('#perawat_ruangan').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_ruangan')
                }
            })
        }, 1000)

        $('#perawat_pemulihan').prop('disabled', false)
        $('#perawat_pemulihan').select2('open')
        $('#perawat_pemulihan').select2('close')
        if (mode === "lihat")
            $('#perawat_pemulihan').prop('disabled', true)

        setTimeout(() => {
            // console.log(dataDokter)
            dataPerawat?.map(v => {
                if (v.text === $('#perawat_pemulihan').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_pemulihan')
                }
            })
        }, 1000)
    }


    function listDokterUmumAPI() {
        $('.dokter').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
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
                    dataDokter = items
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

    function listPerawatAPI() {
        $('.perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/'); ?>',
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