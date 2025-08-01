<!-- rm 23 -->
<div class="row">
    <div class="col-12">

        <p>Yang bertanda tangan di bawah ini saya,</p>
        <table class="table table-bordered border-dark">
            <tr>
                <td>Nama :</td>
                <td colspan="2"><input type="text" name="nama_pasien" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>Tgl lahir :</td>
                <td colspan="2"><input type="date" name="tanggal_lahir" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td colspan="2"><input type="text" name="alamat" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>
                        dengan ini menyatakan permintaan untuk mendapat <em>second opinion </em>atas:
                        <textarea type="text" name="second_opinion" class="form-control border-dark"></textarea>
                    </p>
                    <ul>
                        <li>
                            Saya memahami perlunya dan manfaat <em>second opinion </em>tersebut
                            sebagaimana telah dijelaskan kepada saya
                        </li>
                        <li>
                            Saya telah mendapat kesempatan untuk bertanya dan telah mendapat jawaban
                            yang memuaskan
                        </li>
                        <li>
                            Saya juga menyadari bahwa oleh karena ilmu kedokteran bukanlah ilmu pasti
                            dan selalu berkembang, maka perbedaan pendapat ahli adalah biasa terjadi
                            dalam dunia kedokteran
                        </li>
                        <li>
                            Saya menyadari beban biaya <em>second opinion</em> menjadi tanggung jawab
                            saya
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="d-flex gap-2 align-items-center justify-content-end"><label for="" class="flex-shrink-0"><?= $city_sign ?></label>, <input type="date" class="form-control border-dark w-25" value="<?= date('Y-m-d') ?>"></div>
                </td>
            </tr>
            <tr>
                <td>Petugas</td>
                <td></td>
                <td align="right">(Pasien/Wali*)</td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex flex-column align-items-center gap-2">
                        <img class="img-responsive center-block " style="width: 20%;" id="qr_perawat" />
                        <input type="text" name="nama_perawat_form" id="nama_perawat_form" class="form-control border-dark">
                        <input type="hidden" name="id_perawat_form" id="id_perawat_form">
                    </div>
                </td>
                <td></td>
                <td align="right"><img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                        style="width:350px;height:180px" data-input-name="image_drawer_state_image_2" />
                    <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
                        value="" />
                </td>
            </tr>
        </table>
        <p>
            * Bila pasien tidak kompeten atau tidak mau menerima informasi, maka wali
            atau seseorang yang diberi hak untuk menyetujui.
        </p>
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