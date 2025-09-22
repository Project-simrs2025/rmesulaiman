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
                        <div style="width: 250px;">
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
                                    <td class="col-6 my-auto">Hanya face mask </td>
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


                        <!-- obat -->
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <!-- Baris Jam -->
                                <tr>
                                    <td>
                                        <div style="width: 250px;">Obat-obatan / Infus</div>
                                    </td>
                                    <?php for ($i = 1; $i <= 2; $i++) : ?>
                                        <td colspan="12">
                                            <input type="time" name="kolom_jam_obat_<?= $i; ?>" class="form-control border-dark w-25">
                                        </td>
                                    <?php endfor; ?>
                                </tr>

                                <?php for ($baris = 1; $baris <= 11; $baris++) : ?>
                                    <tr>
                                        <td>
                                            <input type="text" name="nama_obat_infus_<?= $baris ?>" class="form-control border-dark">
                                        </td>

                                        <!-- Kolom pertama -->
                                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                                            <td>
                                                <input type="text" class="form-control border-dark"
                                                    name="infus_baris_<?= $baris ?>_kolom_pertama_<?= $i ?>" style="width: 80px;">
                                            </td>
                                        <?php endfor; ?>

                                        <!-- Kolom kedua -->
                                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                                            <td>
                                                <input type="text" class="form-control border-dark"
                                                    name="infus_baris_<?= $baris ?>_kolom_kedua_<?= $i ?>" style="width: 80px;">
                                            </td>
                                        <?php endfor; ?>
                                    </tr>
                                <?php endfor; ?>


                            </tbody>
                        </table>


                        <!-- // garafik anestesi -->
                        <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/diastol.png') ?>"
                            style="width: 680px; height:450px;" data-input-name="image_drawer_state_image_1" />
                        <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1" value="" />



                        <?php
                        // Daftar parameter yang akan ditampilkan
                        $parameterList = [
                            'spo2' => ['label' => 'SpO2', 'satuan' => '%'],
                            'peco2' => ['label' => 'PE CO2', 'satuan' => 'mmHg'],
                            'fio2' => ['label' => 'FiO2', 'satuan' => ''],
                            'tekanan_nafas' => ['label' => 'Tekanan Nafas', 'satuan' => 'cmH2O'],
                            'cairan_infus' => ['label' => 'Cairan Infus', 'satuan' => 'ml'],
                            'darah' => ['label' => 'Darah', 'satuan' => 'ml'],
                            'urin' => ['label' => 'Urin', 'satuan' => 'ml'],
                            'pendarahan' => ['label' => 'Pendarahan', 'satuan' => 'ml'],
                        ];

                        // Baris yang akan di-loop, bisa ditambah jika kamu ingin lebih dari satu baris
                        $baris = 1;
                        ?>

                        <!-- Tabel Pemantauan -->
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <!-- Baris Jam -->
                                <tr>
                                    <td>
                                        <div style="width: 250px;">Pemantauan</div>
                                    </td>
                                    <?php for ($i = 1; $i <= 2; $i++) : ?>
                                        <td colspan="12">
                                            <input type="time" name="kolom_jam_pemantauan_<?= $i; ?>" class="form-control border-dark w-25">
                                        </td>
                                    <?php endfor; ?>
                                </tr>

                                <!-- Baris Parameter (SpO2, PE CO2, dll) -->
                                <?php foreach ($parameterList as $paramKey => $paramInfo) : ?>
                                    <tr>
                                        <td>
                                            <table border="0" style="width: 250px;">
                                                <tr>
                                                    <td align="left"><?= $paramInfo['label']; ?></td>
                                                    <td align="right"><?= $paramInfo['satuan']; ?></td>
                                                </tr>
                                            </table>
                                        </td>

                                        <!-- Kolom pertama -->
                                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                                            <td>
                                                <div style="width: 80px;">
                                                    <input type="text" class="form-control border-dark"
                                                        name="pemantauan_<?= $paramKey ?>_baris_<?= $baris ?>_kolom_pertama_<?= $i ?>">
                                                </div>
                                            </td>
                                        <?php endfor; ?>

                                        <!-- Kolom kedua -->
                                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                                            <td>
                                                <div style="width: 80px;">
                                                    <input type="text" class="form-control border-dark"
                                                        name="pemantauan_<?= $paramKey ?>_baris_<?= $baris ?>_kolom_kedua_<?= $i ?>">
                                                </div>
                                            </td>
                                        <?php endfor; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>




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
                                <p class="text-end">Dokter</p>
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
    const mode = "<?= $mode; ?>"
    let dataListPerawatNew = []
    let dataDokter = []


    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);
        $('#penata_anestesi').prop('disabled', false)
        $('#penata_anestesi').select2('open')
        $('#penata_anestesi').select2('close')
        if (mode === "lihat")
            $('#penata_anestesi').prop('disabled', true)

        setTimeout(() => {
            dataListPerawatNew?.map(v => {
                if (v.text === $('#penata_anestesi').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_penata_anestesi')
                }
            })
        }, 1000)


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
                            dataListPerawatNew = items;
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


        $('#penata_anestesi').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_penata_anestesi')
        });

        $('#dpjp_anestesi').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dpjp_anestesi')
        });


        //================ new =====================//
    });
</script>