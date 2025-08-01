<div class="row">
    <div class="col-12">
        <table class="table table-borderless border-dark">

            <tr>
                <td colspan="3">Yang bertanda tangan dibawah ini,</td>
            </tr>
            <tr>
                <td colspan="2">Nama Lengkap: <input type="text" name="nama_pasien" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td colspan="2">Tanggal Lahir: <input type="text" name="tanggal_lahir" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td colspan="2">Ruangan: <input type="text" name="nama_ruangan" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td colspan="3">

                    <div class="form-check">
                        1. Dengan ini menyatakan bahwa saya meminta privasi khusus kepada <?= $site_title; ?> untuk tidak memberi akses bagi pengunjung yang akan menengok /
                        menemui saya ke ruang rawat inap kecuali kerabat saya yang bernama:
                    </div>
                    <div class="ms-4">
                        <ol type="a">
                            <li class="mt-3"><input type="text" name="kerabat_1" class="form-control border-dark"></li>
                            <li class="mt-3"><input type="text" name="kerabat_2" class="form-control border-dark"></li>
                            <li class="mt-3"><input type="text" name="kerabat_3" class="form-control border-dark"></li>
                            <li class="mt-3">Dll, <input type="text" name="kerabat_lain" class="form-control border-dark"></li>
                        </ol>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="form-check">
                        2. Saya menginginkan / tidak menginginkan privasi khusus saat: *(coret yang
                        tidak perlu):
                    </div>
                    <div class="ms-4">
                        <ol type="a">
                            <li class="mt-3"><input type="text" name="privasi_1" class="form-control border-dark"></li>
                            <li class="mt-3"><input type="text" name="privasi_2" class="form-control border-dark"></li>
                            <li class="mt-3"><input type="text" name="privasi_3" class="form-control border-dark"></li>
                            <li class="mt-3">Dll, <input type="text" name="privasi_lain" class="form-control border-dark"></li>
                        </ol>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="d-flex align-items-center gap-2 justify-content-end"><?= $city_sign ?>, <input type="date" value="<?= date('Y-m-d') ?>" name="tanggal_akhir" class="form-control border-dark w-25"></div>
                </td>
            </tr>
            <tr>
                <td>Pemohon </td>
                <td></td>
                <td>Perawat </td>
            </tr>
            <tr>
                <td><img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                        style="width:350px;height:180px;" data-input-name="image_drawer_state_image_1" />
                    <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                        value="" />
                    <input type="text" name="pemohon" class="form-control border-dark mt-4 w-50">
                </td>
                <td></td>
                <td>
                    <div class="d-flex flex-column align-items-center gap-2">
                        <img class="img-responsive center-block " style="width: 20%;" id="qr_perawat" />
                        <input type="text" name="nama_perawat_form" id="nama_perawat_form" class="form-control border-dark">
                        <input type="hidden" name="id_perawat_form" id="id_perawat_form">
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>


<script>
    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);
    }

    $(document).ready(function() {
        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;

        $('#id_perawat_form').val($('#id_perawat_form').val() || id_perawat)
        $('#nama_perawat_form').val($('#nama_perawat_form').val() || nama_perawat)
        $('#nama_perawat_form').attr('disabled', true)

        QRSignatureAPI($('#id_perawat_form').val(), 'qr_perawat')
    })
</script>