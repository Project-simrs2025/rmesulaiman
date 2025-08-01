<!-- rm 21 -->
<div class="row">
    <div class="col-12">

        <table class="table table-bordered border-dark">
            <tbody>
                <tr>
                    <td colspan="3">Yang bertanda tangan dibawah ini,</td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="nama_pasien"></td>
                </tr>
                <tr>
                    <td>Umur :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="umur"></td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Hubungan dengan pasien :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="hubungan"></td>
                </tr>
                <tr>
                    <td colspan="3">Dengan ini menyatakan permintaan pendampingan pelayanan kerohanian agama/ kepercayaan
                        <input class="form-control border-dark d-inline w-25 mx-2" type="text" name="nama_agama">
                        kepada <?= $site_title; ?> terhadap pasien;
                    </td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="nama_pasien"></td>
                </tr>
                <tr>
                    <td>No. RM :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="no_rm"></td>
                </tr>
                <tr>
                    <td>Tempat/ Tanggal Lahir :</td>
                    <td colspan="2">
                        <div class="d-flex align-items-center gap-2">
                            <input class="form-control border-dark w-50" type="text" name="alamat"> / <input type="text" class="form-control border-dark w-50" name="tanggal_lahir">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Ruangan :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="nama_ruangan"></td>
                </tr>
                <tr>
                    <td colspan="3">Demikian surat permohonan permintaan pelayanan kerohanian ini saya buat, atas perhatiannya saya ucapkan terima kasih.</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="d-flex gap-2 justify-content-end align-items-center"><?= $city_sign ?>, <input type="date" name="tgl1" value="<?= date('Y-m-d') ?>" class="form-control border-dark w-25"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="1">Pemohon</td>
                    <td></td>
                    <td colspan="1">Perawat</td>
                </tr>
                <tr>
                    <td colspan="1">
                        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 300px; height:180px;" data-input-name="image_drawer_state_image_1" />
                        <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                            value="" />
                        <input type="text" name="ttd_pemohon" class="form-control border-dark mt-4" id="">
                    </td>
                    <td></td>
                    <td colspan="1">
                        <div class="d-flex flex-column align-items-center gap-2">
                            <img class="img-responsive center-block " style="width: 20%;" id="qr_perawat_1" />
                            <input type="text" name="nama_perawat_form_1" id="nama_perawat_form_1" class="form-control border-dark border-dark">
                            <input type="hidden" name="id_perawat_form_1" id="id_perawat_form_1">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div>
                            <p class="text-center"><strong>BUKTI TELAH MENDAPATKAN PELAYANAN KEROHANIAN</strong></p>
                            <p>Dengan ini menyatakan telah mendapatkan pendampingan pelayanan kerohanian agama/ kepercayaan
                                <input class="form-control border-dark d-inline w-25 mx-2" type="text" name="agama_pelayanan">
                                di <?= $site_title; ?> oleh:
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nama Rohaniawan :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="nama_rohaniawan"></td>
                </tr>
                <tr>
                    <td>Waktu pelayanan :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="waktu_pelayanan"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="d-flex gap-2 justify-content-end align-items-center"><?= $city_sign ?>, <input type="date" name="tgl2" value="<?= date('Y-m-d') ?>" class="form-control border-dark w-25"></div>
                    </td>
                </tr>
                <tr>
                    <td>Pasien / Keluarga</td>
                    <td>Rohaniawan</td>
                    <td>Saksi: Perawat</td>
                </tr>
                <tr>
                    <td><img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 300px; height:180px;" data-input-name="image_drawer_state_image_3" />
                        <input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3"
                            value="" />
                        <input type="text" name="ttd_pasien" class="form-control border-dark mt-4" id="">
                    </td>
                    <td><img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 300px; height:180px;" data-input-name="image_drawer_state_image_4" />
                        <input type="hidden" id="image_drawer_state_image_4" name="image_drawer_state_image_4"
                            value="" />
                        <input type="text" name="ttd_rohaniawan" class="form-control border-dark mt-4" id="">
                    </td>
                    <td>
                        <div class="d-flex flex-column align-items-center gap-2">
                            <img class="img-responsive center-block " style="width: 20%;" id="qr_perawat_2" />
                            <input type="text" name="nama_perawat_form_2" id="nama_perawat_form_2" class="form-control border-dark border-dark">
                            <input type="hidden" name="id_perawat_form_2" id="id_perawat_form_2">
                        </div>
                    </td>
                </tr>
            </tbody>
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
            id_perawat,
            nama_perawat
        } = globalData;


        $('#id_perawat_form_1').val($('#id_perawat_form_1').val() || id_perawat)
        $('#nama_perawat_form_1').val($('#nama_perawat_form_1').val() || nama_perawat)
        $('#nama_perawat_form_1').attr('disabled', true)

        $('#id_perawat_form_2').val($('#id_perawat_form_2').val() || id_perawat)
        $('#nama_perawat_form_2').val($('#nama_perawat_form_2').val() || nama_perawat)
        $('#nama_perawat_form_2').attr('disabled', true)

        QRSignatureAPI($('#id_perawat_form_1').val(), 'qr_perawat_1')
        QRSignatureAPI($('#id_perawat_form_2').val(), 'qr_perawat_2')

    })
</script>