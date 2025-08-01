<?php
include 'layout/head.php';
?>

<div class="row">
    <div class="col-12">
        <h3 class="text-center text-uppercase">Lembar Formulir Rawat Jalan <p>
                Layanan Kedokteran fisik dan rehabilitas
            </p>
        </h3>
        <div class="text-end" style="font-size: 24px;">Rm.1d</div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-bordered mt-3 border border-dark">
            <tbody>
                <tr>
                    <?php
                    $labels = [
                        ['label' => 'Nama Pasien', 'items' => 'nama'],
                        ['label' => 'NIK', 'items' => 'nik'],
                        ['label' => 'Pendidikan', 'items' => 'pendidikan'],
                        ['label' => 'Pekerjaan', 'items' => 'pekerjaan'],
                        ['label' => 'No.Rm', 'items' => 'no_rm']
                    ]
                    ?>
                    <td>
                        <?php foreach ($labels as $label) : ?>
                            <div class="d-block mb-4 mt-2">
                                <label for="<?= $label['items']; ?>"><?= $label['label'] . ' : ' ?></label>
                            </div>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php
                        $fields = [
                            "nama" => "Nama",
                            "nik" => "NIK",
                            "pendidikan" => "Pendidikan",
                            "pekerjaan" => "Pekerjaan",
                            "no_rm" => "No. RM"
                        ];
                        ?>

                        <div class="d-block my-2">
                            <?php foreach ($fields as $id => $label): ?>
                                <input type="text" class="w-100 form-control border-dark mb-2" id="<?= $id ?>" name="<?= $id ?>" placeholder="<?= $label ?>">
                            <?php endforeach; ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <?php
                    $labels2 = [
                        ['label' => 'Tgl Lahir/Umur', 'items' => 'tgl_umur'],
                        ['label' => 'Jenis Kelamin', 'items' => 'jenkel'],
                        ['label' => 'Tgl Masuk', 'items' => 'tgl_masuk'],
                        ['label' => 'Nama DPJP', 'items' => 'n_dpjp'],
                        ['label' => 'Nilai Pribadi', 'items' => 'n_pribadi']
                    ]
                    ?>
                    <td>
                        <?php foreach ($labels2 as $label) : ?>
                            <div class="d-block mb-4 mt-2">
                                <label for="<?= $label['items']; ?>"><?= $label['label'] . ' : ' ?></label>
                            </div>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <div class="d-block my-2">
                            <div class="d-flex">
                                <input type="date" class="w-50 form-control border-dark mb-2" id="tgl_umur" onclick="this.showPicker()"><input type="text" id="umur" name="umur" class="form-control mx-2 border-dark" style="height:38px">
                            </div>
                            <select name="jenkel" id="jenkel">
                                <option value="">Jenis Kelamin</option>
                                <option value="">Laki-laki</option>
                                <option value="">Perempuan</option>
                            </select>
                            <input type="text" class="w-100 form-control border-dark mb-2" id="tgl_masuk" name="tgl_masuk">
                            <input type="text" class="w-100 form-control border-dark mb-2" id="n_dpjp" name="n_dpjp">
                            <input type="text" class="w-100 form-control border-dark mb-2" id="n_pribadi" name="n_pribadi">
                        </div>
                    </td>

            </tbody>
        </table>

    </div>
</div>






<?php
include 'layout/footer.php';
?>