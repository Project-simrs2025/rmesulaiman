<div class="container">
    <div class="row">


        <div class="table-responsive">


            <table class="table table-bordered border-dark mt-4">
                <tr>
                    <th class="col-3">

                    </th>
                    <td class="col-8">
                        <table class="table table-borderless border-dark">

                            <tr>
                                <th class="col-1">Nama</th>
                                <td class="col-6"><input type="text" name="nama_pasien" class="form-control border-dark">
                                </td>
                                <th class="col-1">No. RM</th>
                                <td class="col-6"><input type="text" name="no_rm" class="form-control border-dark"></td>
                            </tr>




                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="col-3">
                        <div style="width: 300px;">
                            <u><b>Infus perifer : tempat ukuran</b></u></br>
                            <table class="table table-borderless border-dark">

                                <tr>
                                    <th class="col-1">1. </th>
                                    <td class="col-10"><input type="text" name="infus1" class="form-control border-dark">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-1">2. </th>
                                    <td class="col-10"><input type="text" name="infus2" class="form-control border-dark">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-1">3. </th>
                                    <td class="col-10"><input type="text" name="infus3" class="form-control border-dark">
                                    </td>
                                </tr>
                            </table>
                            <!------------------------------------------------------------------------------->
                            <u><b>Posisi</b></u></br>
                            <?php
                            // Data checkbox yang akan ditampilkan
                            $checkboxes = [
                                ["name" => "checkterlentang", "label" => "Terlentang", "id" => "checkterlentang"],
                                ["name" => "checklithotomi", "label" => "Lithotomi", "id" => "checklithotomi"],
                                ["name" => "checkprone", "label" => "Prone", "id" => "checkprone"],
                                ["name" => "checklateral", "label" => "Lateral", "id" => "checklateral"],
                                ["name" => "checklainlain", "label" => "Lain-lain", "id" => "checklainlain"],
                                ["name" => "checkperlindunganmata", "label" => "Perlindungan Mata", "id" => "checkperlindunganmata"]
                            ];
                            ?>

                            <div class="d-flex flex-wrap justify-content-between">
                                <?php foreach ($checkboxes as $group): ?>
                                    <div class="col-12 d-flex gap-2 flex-column">
                                        <div class="checkbox-item">
                                            <input type="checkbox" class="custom-checkbox-success"
                                                name="<?php echo $group['name']; ?>" id="<?php echo $group['id']; ?>">
                                            <label for="<?php echo $group['id']; ?>"><?php echo $group['label']; ?></label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!------------------------------------------------------------------------------->
                            <u><b>Premedikasi</b></u></br>
                            <?php
                            // Data checkbox yang akan ditampilkan
                            $checkboxes = [
                                ["name" => "checkoralatas", "label" => "Oral", "id" => "checkoralatas"],

                                ["name" => "checkim", "label" => "I.M", "id" => "checkim"],
                                ["name" => "checkiv", "label" => "I.V", "id" => "checkiv"]
                            ];
                            ?>

                            <div class="d-flex flex-wrap justify-content-between">
                                <?php foreach ($checkboxes as $group): ?>
                                    <div class="col-12 d-flex gap-2 flex-column">
                                        <div class="checkbox-item">
                                            <input type="checkbox" class="custom-checkbox-success"
                                                name="<?php echo $group['name']; ?>" id="<?php echo $group['id']; ?>">
                                            <label for="<?php echo $group['id']; ?>"><?php echo $group['label']; ?></label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!------------------------------------------------------------------------------->
                            <!------------------------------------------------------------------------------->
                            <u><b>Induksi</b></u></br>
                            <?php
                            // Data checkbox yang akan ditampilkan
                            $checkboxes = [
                                ["name" => "checkintravena", "label" => "Intravena", "id" => "checkintravena"],

                                ["name" => "checkinhalasi", "label" => "Inhalasi", "id" => "checkinhalasi"]
                            ];
                            ?>

                            <div class="d-flex flex-wrap justify-content-between">
                                <?php foreach ($checkboxes as $group): ?>
                                    <div class="col-12 d-flex gap-2 flex-column">
                                        <div class="checkbox-item">
                                            <input type="checkbox" class="custom-checkbox-success"
                                                name="<?php echo $group['name']; ?>" id="<?php echo $group['id']; ?>">
                                            <label for="<?php echo $group['id']; ?>"><?php echo $group['label']; ?></label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!------------------------------------------------------------------------------->

                            <b>Jalan nafas (tulis ukuran)</b></br>
                            <table class="table table-borderless border-dark">

                                <tr>
                                    <th class="col-6">Hanya face mask : </th>
                                    <td class="col-6"><input type="text" name="facemaskform" class="form-control border-dark">
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-borderless border-dark">


                                <tr>
                                    <th class="col-1">ETT </th>
                                    <td class="col-10"><input type="text" name="ettform" class="form-control border-dark">
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-borderless border-dark">

                                <tr>
                                    <th class="col-1">Oral </th>
                                    <td class="col-10"><input type="text" name="oralform" class="form-control border-dark">
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-borderless border-dark">

                                <tr>
                                    <th class="col-1">Nasal </th>
                                    <td class="col-10"><input type="text" name="nasalform" class="form-control border-dark">
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-borderless border-dark">

                                <tr>
                                    <th class="col-1">LM </th>
                                    <td class="col-10"><input type="text" name="lmform" class="form-control border-dark">
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-borderless border-dark">

                                <tr>
                                    <th class="col-1">Trakheostomi </th>
                                    <td class="col-10"><input type="text" name="trakheostomiform" class="form-control border-dark">
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-borderless border-dark">

                                <tr>
                                    <th class="col-4">Lain-lain </th>
                                    <td class="col-8"><input type="text" name="lainlainform" class="form-control border-dark">
                                    </td>
                                </tr>
                            </table>

                            <!------------------------------------------------------------------------------->
                            <u><b>Intubasi</b></u></br>
                            <?php
                            // Data checkbox yang akan ditampilkan
                            $checkboxes = [
                                ["name" => "checksesudahtidur", "label" => "Sesudah Tidur", "id" => "checksesudahtidur"],
                                ["name" => "checkblind", "label" => "Blind", "id" => "checkblind"],
                                ["name" => "checkoral", "label" => "Oral", "id" => "checkoral"],

                                ["name" => "checknasal", "label" => "Nasal", "id" => "checknasal"],
                                ["name" => "checkka", "label" => "Ka", "id" => "checkka"],
                                ["name" => "checkki", "label" => "Ki", "id" => "checkki"],
                                ["name" => "checkfiberoptik", "label" => "Fiberoptik", "id" => "checkfiberoptik"],
                                ["name" => "checktrakheostomi", "label" => "Trakheostomi", "id" => "checktrakheostomi"],
                                ["name" => "checkpreoksigenisasi", "label" => "Preoksigenisasi", "id" => "checkpreoksigenisasi"],
                                ["name" => "checkmaskventilasi", "label" => "Mudah Mask Ventilasi", "id" => "checkmaskventilasi"],
                                ["name" => "checkmudahintubasi", "label" => "Mudah Intubasi", "id" => "checkmudahintubasi"],

                                ["name" => "checksulitintubasi", "label" => "Sulit Intubasi", "id" => "checksulitintubasi"],
                                ["name" => "checkdengansilet", "label" => "Dengan Silet", "id" => "checkdengansilet"],
                                ["name" => "checklarings", "label" => "Tekanan luar Larings", "id" => "checklarings"],
                                ["name" => "checkpack", "label" => "Pack", "id" => "checkpack"],
                            ];
                            ?>

                            <div class="d-flex flex-wrap justify-content-between">
                                <?php foreach ($checkboxes as $group): ?>
                                    <div class="col-12 d-flex gap-2 flex-column">
                                        <div class="checkbox-item">
                                            <input type="checkbox" class="custom-checkbox-success"
                                                name="<?php echo $group['name']; ?>" id="<?php echo $group['id']; ?>">
                                            <label for="<?php echo $group['id']; ?>"><?php echo $group['label']; ?></label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!------------------------------------------------------------------------------->
                            <!------------------------------------------------------------------------------->
                            <u><b>Ventilasi</b></u></br>
                            <?php
                            // Data checkbox yang akan ditampilkan
                            $checkboxes = [
                                ["name" => "checkspontan", "label" => "Spontan", "id" => "checkspontan"],
                                ["name" => "checkkendali", "label" => "Kendali", "id" => "checkkendali"],
                                ["name" => "checkventilator", "label" => "Ventilator", "id" => "checkventilator"],

                                ["name" => "checklainlainventilasi", "label" => "Lain-lain", "id" => "checklainlainventilasi"]
                            ];
                            ?>

                            <div class="d-flex flex-wrap justify-content-between">
                                <?php foreach ($checkboxes as $group): ?>
                                    <div class="col-12 d-flex gap-2 flex-column">
                                        <div class="checkbox-item">
                                            <input type="checkbox" class="custom-checkbox-success"
                                                name="<?php echo $group['name']; ?>" id="<?php echo $group['id']; ?>">
                                            <label for="<?php echo $group['id']; ?>"><?php echo $group['label']; ?></label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!------------------------------------------------------------------------------->
                            <u><b>Teknik Regional</b></u></br>
                            <table class="table table-borderless border-dark">

                                <tr>
                                    <th class="col-1">Tipe </th>
                                    <td class="col-10"><input type="text" name="tipe" class="form-control border-dark">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-1">Daerah Pemasangan </th>
                                    <td class="col-10"><input type="text" name="daerahpemasangan" class="form-control border-dark">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-1">Jarum/ No. </th>
                                    <td class="col-10"><input type="text" name="jarum" class="form-control border-dark">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-1">Kateter </th>
                                    <td class="col-10">
                                        <?php
                                        // Data checkbox yang akan ditampilkan
                                        $checkboxes = [
                                            ["name" => "checkkateterya", "label" => "Ya", "id" => "checkkateterya"],
                                            ["name" => "checkkatetertidak", "label" => "Tidak", "id" => "checkkatetertidak"]
                                        ];
                                        ?>

                                        <div class="d-flex flex-wrap justify-content-between">
                                            <?php foreach ($checkboxes as $group): ?>
                                                <div class="col-12 d-flex gap-2 flex-column">
                                                    <div class="checkbox-item">
                                                        <input type="checkbox" class="custom-checkbox-success"
                                                            name="<?php echo $group['name']; ?>" id="<?php echo $group['id']; ?>">
                                                        <label for="<?php echo $group['id']; ?>"><?php echo $group['label']; ?></label>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-1">Obat-obatan </th>
                                    <td class="col-10"><input type="text" name="obat_obatan" class="form-control border-dark">
                                    </td>
                                </tr>
                            </table>
                            <u><b>Hasil</b></u></br>
                            <?php
                            // Data checkbox yang akan ditampilkan
                            $checkboxes = [
                                ["name" => "checktotalblok", "label" => "Total Blok", "id" => "checktotalblok"],
                                ["name" => "checkpartial", "label" => "Partial", "id" => "checkpartial"],
                                ["name" => "checkgagal", "label" => "Gagal", "id" => "checkgagal"]
                            ];
                            ?>

                            <div class="d-flex flex-wrap justify-content-between">
                                <?php foreach ($checkboxes as $group): ?>
                                    <div class="col-6 d-flex gap-2 flex-column">
                                        <div class="checkbox-item">
                                            <input type="checkbox" class="custom-checkbox-success"
                                                name="<?php echo $group['name']; ?>" id="<?php echo $group['id']; ?>">
                                            <label for="<?php echo $group['id']; ?>"><?php echo $group['label']; ?></label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </td>
                    <!----------------------------------------------------------------------------------------->

                    <td class="col-12">



                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td>
                                        <div style="width: 180px;"><u><b>Obat-obatan/ Infus</b></u></br></div>
                                    </td>
                                    <?php for ($i = 1; $i <= 11; $i++) : ?>
                                        <td><input type="text" name="obat_infus_<?= $i ?>" id="" class="form-control border-dark" style="width: 180px;"></td>
                                    <?php endfor; ?>
                                </tr>

                                <tr id="scorePertama" class="scorePertama">
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div>Jam</div>
                                            <input type="time" name="waktu_pertama[]" id="" class="form-control border-dark">
                                        </div>
                                    </td>
                                    <?php for ($i = 1; $i <= 11; $i++) : ?>
                                        <td><input type="text" class="form-control border-dark" name="kolom_pertama_<?= $i ?>[]"></td>
                                    <?php endfor; ?>
                                </tr>
                            </tbody>
                        </table>
                        <input type="hidden" id="scorePertama-count" name="scorePertama-count" value="1">

                        <button type="button" class="btn btn-primary mb-5" onclick="copyPertamaRow()">Add</button>



                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>*N</th>
                                    <th>VSIs</th>
                                    <th>ADis</th>
                                    <th>+R</th>
                                    <th>▲TVS</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>TVS</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>25</td>
                                    <td>20</td>
                                    <td>15</td>
                                    <td>10</td>
                                    <td>5</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>R</td>
                                    <td>28</td>
                                    <td>20</td>
                                    <td>16</td>
                                    <td>12</td>
                                    <td>8</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>N</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>180</td>
                                    <td>160</td>
                                    <td>140</td>
                                    <td>120</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>TD</td>
                                    <td>220</td>
                                    <td>200</td>
                                    <td>180</td>
                                    <td>160</td>
                                    <td>140</td>
                                    <td>120</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>60</td>
                                    <td>40</td>
                                    <td>20</td>
                                </tr>
                                <tr id="score" class="score">
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div>Jam</div>
                                            <input type="time" name="waktu_tvs[]" id="" class="form-control border-dark">
                                        </div>
                                    </td>
                                    <?php for ($i = 1; $i <= 11; $i++) : ?>
                                        <td><input type="text" class="form-control border-dark" name="kolom_<?= $i ?>[]"></td>
                                    <?php endfor; ?>
                                </tr>
                            </tbody>
                        </table>
                        <input type="hidden" id="score-count" name="score-count" value="1">

                        <button type="button" class="btn btn-primary mb-5" onclick="copyRow()">Add</button>


                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td>
                                        <div style="width: 180px;"><u><b>Pemantauan</b></u></br></div>
                                    </td>
                                    <?php
                                    $itemsPemantauan = [
                                        'Spo2',
                                        'PE CO2',
                                        'FiO2',
                                        'Tekanan Nafas',
                                        'Cairan Infus',
                                        'Darah',
                                        'Urin',
                                        'Pendarahan'
                                    ]
                                    ?>
                                    <?php foreach ($itemsPemantauan as $label) : ?>
                                        <td><?= $label ?></td>
                                    <?php endforeach; ?>
                                </tr>

                                <tr id="scoreKedua" class="scoreKedua">
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div>Jam</div>
                                            <input type="time" name="waktu_kedua[]" id="" class="form-control border-dark">
                                        </div>
                                    </td>
                                    <?php for ($i = 1; $i <= 8; $i++) : ?>
                                        <td><input type=" text" class="form-control border-dark" name="kolom_kedua_<?= $i ?>[]"></td>
                                    <?php endfor; ?>
                                </tr>

                            </tbody>
                        </table>
                        <input type="hidden" id="scoreKedua-count" name="scoreKedua-count" value="1">

                        <button type="button" class="btn btn-primary mb-5" onclick="copyKeduaRow()">Add</button>


                        <table>
                            <tr>
                                <th class="col-3">Lama Pembiusan :</th>

                                <td class="col float-start">
                                    <input type="text" value="" class="w-100 form-control border-dark" name="jampembiusan">
                                </td>
                            </tr>
                            <tr>
                                <th>Lama Pembedahan :</th>

                                <td class="col float-start">
                                    <input type="text" value="" class="w-100 form-control border-dark" name="jampembedahan">
                                </td>

                            </tr>
                        </table>
                        <textarea class="form-control border-dark mt-2" placeholder="Catatan" name="catatan" id="catatan" style="width: 900px;"></textarea>

                        <!-- Footer Section -->
                        <div class="mt-4 d-flex flex-column gap-3 align-items-end col-12">
                            <div class="d-flex flex-row justify-content-center align-items-center gap-3">
                                <div class="col-6"><?= $city_sign ?>,</div> <input type="date" value="<?= date('Y-m-d'); ?>" class="form-control border-dark" name="tgl_city">
                            </div>
                            <div class="d-flex flex-column align-items-end gap-3">
                                <p class="text-end">Dokter Penata/ Anestesi</p>
                                <div class="text-end">
                                    <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_dpjp_anestesi" />
                                </div>
                                <select type="select" name="dpjp_anestesi" id="dpjp_anestesi" class="form-select dokter" style="width: 100%;"></select>
                            </div>

                            <div class="d-flex flex-column align-items-end gap-3">
                                <p class="text-end">Penata Anestesi</p>
                                <div class="text-end">
                                    <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_penata_anestesi" />
                                </div>
                                <select type="select" name="penata_anestesi" id="penata_anestesi" class="form-select perawat" style="width: 100%;"></select>
                            </div>

                        </div>

                        </th>
                </tr>
            </table>

        </div>


    </div>

</div>



<script>
    function cbCommon(data) {
        initScoreRows();
        initScorePertamaRows();
        initScoreKeduaRows();

        populateFormFields(data);


        $('#dpjp_anestesi').prop('disabled', false)
        $('#dpjp_anestesi').select2('open')
        $('#dpjp_anestesi').select2('close')
        if (mode === "lihat")
            $('#dpjp_anestesi').prop('disabled', true)
        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#dpjp_anestesi').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dpjp_anestesi')
                }
            })
        }, 500)

        $('#penata_anestesi').prop('disabled', false)
        $('#penata_anestesi').select2('open')
        $('#penata_anestesi').select2('close')
        if (mode === "lihat")
            $('#penata_anestesi').prop('disabled', true)
        setTimeout(() => {
            dataListPerawat?.map(v => {
                if (v.text === $('#penata_anestesi').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_penata_anestesi')
                }
            })
        }, 500)
    }

    let dataDokter = []
    let dataListPerawat = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
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

        $('#dpjp_anestesi').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dpjp_anestesi')
        });

        $('#penata_anestesi').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_penata_anestesi')
        });

    })


    // pertama
    function initScorePertamaRows() {
        let countInput = document.getElementById("scorePertama-count");
        let count = +(countInput.value ?? "0"); // Default to 1 row if empty

        let scorePertamaRow = document.getElementById("scorePertama");
        let parent = scorePertamaRow.parentNode;

        for (let i = 1; i < count; i++) { // Generate rows based on count
            let newRow = scorePertamaRow.cloneNode(true);
            newRow.id = "scorePertama-copy-" + (i + 1);
            parent.appendChild(newRow);
        }
    }

    function updateScorePertamaCount() {
        let countInput = document.getElementById("scorePertama-count");
        countInput.value = +(countInput.value) + 1; // Update count
    }

    function copyPertamaRow() {
        let scorePertamaRow = document.getElementById("scorePertama"); // Get the original row
        let parent = scorePertamaRow.parentNode; // Get parent (tbody)

        let newRow = scorePertamaRow.cloneNode(true); // Clone row
        newRow.id = "scorePertama-copy-" + (parent.children.length + 1); // Unique ID

        // Clear input values in cloned row
        newRow.querySelectorAll("input").forEach(input => input.value = "");

        parent.appendChild(newRow); // Append cloned row to parent (tbody)

        updateScorePertamaCount(); // Update count
    }
    // batas




    // Kedua
    function initScoreKeduaRows() {
        let countInput = document.getElementById("scoreKedua-count");
        let count = +(countInput.value ?? "0"); // Default to 1 row if empty

        let scoreKeduaRow = document.getElementById("scoreKedua");
        let parent = scoreKeduaRow.parentNode;

        for (let i = 1; i < count; i++) { // Generate rows based on count
            let newRow = scoreKeduaRow.cloneNode(true);
            newRow.id = "scoreKedua-copy-" + (i + 1);
            parent.appendChild(newRow);
        }
    }

    function updateScoreKeduaCount() {
        let countInput = document.getElementById("scoreKedua-count");
        countInput.value = +(countInput.value) + 1; // Update count
    }

    function copyKeduaRow() {
        let scoreKeduaRow = document.getElementById("scoreKedua"); // Get the original row
        let parent = scoreKeduaRow.parentNode; // Get parent (tbody)

        let newRow = scoreKeduaRow.cloneNode(true); // Clone row
        newRow.id = "scoreKedua-copy-" + (parent.children.length + 1); // Unique ID

        // Clear input values in cloned row
        newRow.querySelectorAll("input").forEach(input => input.value = "");

        parent.appendChild(newRow); // Append cloned row to parent (tbody)

        updateScoreKeduaCount(); // Update count
    }
    // batas







    // Kedua
    function initScoreRows() {
        let countInput = document.getElementById("score-count");
        let count = +(countInput.value ?? "0"); // Default to 1 row if empty

        let scoreRow = document.getElementById("score");
        let parent = scoreRow.parentNode;

        for (let i = 1; i < count; i++) { // Generate rows based on count
            let newRow = scoreRow.cloneNode(true);
            newRow.id = "score-copy-" + (i + 1);
            parent.appendChild(newRow);
        }
    }


    function updateScoreCount() {
        let countInput = document.getElementById("score-count");
        countInput.value = +(countInput.value) + 1; // Update count
    }

    function copyRow() {
        let scoreRow = document.getElementById("score"); // Get the original row
        let parent = scoreRow.parentNode; // Get parent (tbody)

        let newRow = scoreRow.cloneNode(true); // Clone row
        newRow.id = "score-copy-" + (parent.children.length + 1); // Unique ID

        // Clear input values in cloned row
        newRow.querySelectorAll("input").forEach(input => input.value = "");

        parent.appendChild(newRow); // Append cloned row to parent (tbody)

        updateScoreCount(); // Update count
    }
</script>