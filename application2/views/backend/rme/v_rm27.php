<!-- rm 27 -->

<div class="row">
    <div class="col-12 my-3">
        <span>Yang Bertanda Tangan Di bawah ini :</span>
        <div class="form-group mt-2">
            <label for="">Nama :</label>
            <input type="text" class="form-control border-dark" name="nama_pasien">
        </div>
        <div class="form-group">
            <label for="">Umur :</label>
            <input type="text" class="form-control border-dark" name="umur">
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin :</label>
            <input type="text" name="jenkel" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Hubungan dengan pasien :</label>
            <input type="text" class="form-control border-dark" name="hub_pasien">
        </div>
        <div class="form-group">
            <label for="">Alamat :</label>
            <input type="text" class="form-control border-dark" name="alamat">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <span>Menyatakan bahwa, Kami pihak keluarga pasien Menginginkan <span class="fw-bold">Pulang Atas Permintaan Sendiri (PAPS)</span> atas nama pasien :</span>
        <div class="form-group mt-2">
            <label for="">Nama :</label>
            <input type="text" class="form-control border-dark" name="nama_pasien">
        </div>
        <div class="form-group">
            <label for="">No.Rm :</label>
            <input type="text" class="form-control border-dark" name="no_rm">
        </div>
        <div class="form-group">
            <label for="">Tanggal Lahir :</label>
            <input type="text" class="form-control border-dark" name="tanggal_lahir">
        </div>
        <div class="form-group">
            <label for="">Ruangan/Kelas :</label>
            <div class="d-flex align-items-center gap-2">
                <input type="text" class="form-control border-dark w-50" name="nama_ruangan"> / <input type="text" class="form-control border-dark w-50" name="kelas">
            </div>
        </div>
        <div class="form-group">
            <label for="">Dokter yang merawat :</label>
            <input type="text" class="form-control border-dark" name="nama_dokter">
        </div>
        <div class="form-group">
            <label for="">Lama Dirawat :</label>
            <input type="text" class="form-control border-dark" name="lama" value="<?= $lama ?>" disabled>
        </div>
        <div class="form-group">
            <label for="">Alasan minta pulang </label>
            <input type="text" class="form-control border-dark" name="alasan_minta_pulang">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mt-2">
        <p>Saya mengakui telah menerima informasi dan penjelasan secara lengkap akan bahaya, risiko, dan kemungkinan lain yang bias timbul pada pasien. Kami akan menanggung segala risiko yang mungkin bisa timbul, dan tidak akan mempermasalahkan atau menuntut pihak <?= $site_title; ?> maupun dokter yang merawatnya.</p>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <p>Yang Membuat Pernyataan</p>
    </div>
    <div class="col-6 text-end">
        <div class="d-flex gap-2 align-items-center justify-content-end mb-3">
            <label for=""><?= $city_sign ?>, </label>
            <input type="date" class="form-control border-dark w-25" name="tgl_Pernyataan" value="<?= date('Y-m-d') ?>">
        </div>
        <div>
            <div class="col-4">Saksi</div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-4">
        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
            style="width:350px; height:180px;" data-input-name="image_drawer_state_image_1" />
        <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
            value="" />
        <input type="text" class="form-control w-100 border-dark" name="yg_membuat_pernyataan">
    </div>
    <div class="col-4">
        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
            style="width:350px; height:180px;" data-input-name="image_drawer_state_image_2" />
        <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
            value="" />
        <input type="text" class="form-control w-100 border-dark" name="saksi_1">
    </div>
    <div class="col-4">
        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
            style="width:350px; height:180px;" data-input-name="image_drawer_state_image_3" />
        <input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3"
            value="" />
        <input type="text" class="form-control w-100 border-dark" name="saksi_2">
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

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')
    });
</script>