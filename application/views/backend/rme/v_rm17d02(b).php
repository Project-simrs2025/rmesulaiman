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

                    <th class="col-3">
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
                    </th>
                    <!----------------------------------------------------------------------------------------->

                    <th class="col-12">
                        <u><b>Obat-obatan/ Infus</b></u></br>
                        <table class="table table-borderless border-dark">
                            <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/laporan_anestesi_1.png') ?>"
                                style="width: 100%; height:450px;" data-input-name="image_drawer_state_image_lap_anestesi_1" />
                            <input type="hidden" id="image_drawer_state_image_lap_anestesi_1" name="image_drawer_state_image_lap_anestesi_1" value="" />

                            <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/laporan_anestesi_2.png') ?>"
                                style="width: 100%; height:450px;" data-input-name="image_drawer_state_image_lap_anestesi_2" />
                            <input type="hidden" id="image_drawer_state_image_lap_anestesi_2" name="image_drawer_state_image_lap_anestesi_2" value="" />

                            <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/laporan_anestesi_3.png') ?>"
                                style="width: 100%; height:450px;" data-input-name="image_drawer_state_image_lap_anestesi_3" />
                            <input type="hidden" id="image_drawer_state_image_lap_anestesi_3" name="image_drawer_state_image_lap_anestesi_3" value="" />
                        </table>
                        <table class="table table-borderless border-dark">

                            <tr>
                                <th class="col-3">Lama Pembiusan :</th>

                                <td class="col float-start">
                                    <input type="time" value="" class="w-100 form-control border-dark" name="jampembiusan">
                                </td>
                            </tr>
                            <tr>
                                <th>Lama Pembedahan :</th>

                                <td class="col float-start">
                                    <input type="time" value="" class="w-100 form-control border-dark" name="jampembedahan">
                                </td>

                            </tr>



                        </table>
                        <textarea class="form-control" placeholder="Catatan" name="catatan" id="catatan"></textarea>

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
                                <select type="select" name="penata_anestesi" id="penata_anestesi" class="form-select newperawat" style="width: 100%;"></select>
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
                selector: '.newperawat',
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>'
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
                        if (selector === '.newperawat') {
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