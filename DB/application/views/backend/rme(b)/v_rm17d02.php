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
                                <td class="col-10"><input type="text" name="infus3" class="form-control border-dark">
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
                            <img class="marker-image" style="width:1000px;" id="example-image" src="<?= base_url('assets2/rme/img/rm17d02.png') ?>"
                                style="max-width: 350px" data-input-name="image_drawer_state_image_11" />
                            <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                                value="" />
                        </table>
                        <table class="table table-borderless border-dark">

                            <tr>
                                <th>Lama Pembiusan :</th>

                                <td class="col-6 float-start">
                                    <input type="time" value="" class="w-100 form-control border-dark" name="jampembiusan">
                                </td>
                                <td class="col-6 float-end">
                                    Jam
                                </td>
                                <th></th>
                                <td class="col-4 float-start">
                                    <input type="time" value="" class="w-100 form-control border-dark" name="menitpembiusan">
                                </td>
                                <td class="col-8 float-end">
                                    Menit
                                </td>
                            </tr>
                            <tr>
                                <th>Lama Pembedahan :</th>

                                <td class="col-6 float-start">
                                    <input type="time" value="" class="w-100 form-control border-dark" name="jampembedahan">
                                </td>
                                <td class="col-6 float-end">
                                    Jam
                                </td>
                                <th></th>
                                <td class="col-4 float-start">
                                    <input type="time" value="" class="w-100 form-control border-dark" name="menitpembedahan">
                                </td>
                                <td class="col-8 float-end">
                                    Menit
                                </td>
                            </tr>



                        </table>
                        <textarea class="form-control" placeholder="Catatan" name="catatan" id="catatan"></textarea>

                        <!-- Footer Section -->
                        <div class="mt-4 d-flex flex-column gap-3 align-items-end col-12">
                            <div class="d-flex flex-row justify-content-center align-items-center gap-3">
                                <div><?= $city_sign ?>,</div> <?= date('d-m-Y'); ?>
                            </div>
                            <div class="d-flex flex-column align-items-end gap-3">
                                <p class="text-end">Dokter Penata/ Anestesi</p>
                                <img class="img-responsive center-block mt-2" style="width: 150px" id="qr_dokter_dpjp" />
                                <textarea name="nama_dokter" class="form-control border-dark"></textarea>
                            </div>

                        </div>

                    </th>


                </tr>
                </tr>
            </table>

        </div>


    </div>

</div>

<script>
    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);
    }
</script>