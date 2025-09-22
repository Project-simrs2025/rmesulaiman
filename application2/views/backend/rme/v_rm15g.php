<div class="row">

    <table class="table table-borderless border-dark ms-3 mb-3">
        <tr>
            <td>
                <div class="d-flex gap-2 align-items-center" style="width:180px">
                    <label for="" class="col-4">No Rm</label>
                    <input type="text" class="form-control border-dark" name="no_rm">
                </div>
            </td>
            <td>
                <div class="d-flex gap-2 align-items-center">
                    <label for="" class="flex-shrink-0">Nama Ibu</label>
                    <textarea name="nama_ibu" id="" class="form-control border-dark" rows="1"></textarea>
                </div>
            </td>

            <td>
                <div class="d-flex gap-2">
                    <div class="d-flex gap-2 align-items-center" style="width:140px">
                        <label for="">Umur</label>
                        <input type="text" class="form-control border-dark" name="umur">
                    </div>
                    <div class="d-flex gap-2 align-items-center" style="width:80px">
                        <label for="">G</label>
                        <input type="text" class="form-control border-dark " name="g">
                    </div>
                    <div class="d-flex gap-2 align-items-center" style="width:80px">
                        <label for="">P</label>
                        <input type="text" class="form-control border-dark " name="P">
                    </div>
                    <div class="d-flex gap-2 align-items-center" style="width:80px">
                        <label for="">A</label>
                        <input type="text" class="form-control border-dark " name="A">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div class="d-flex gap-2 align-items-center" style="width:300px">
                    <label for="">Tanggal</label>
                    <input type="date" class="form-control border-dark w-75" name="tanggal">
                </div>
            </td>
            <td>
                <div class="d-flex gap-2 align-items-center" style="width:300px">
                    <label for="" class="col-2">Jam</label>
                    <input type="time" class="form-control border-dark w-75" name="jam">
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div class="d-flex gap-2 align-items-center" style="width:300px">
                    <label for="" class="col-3">Sejak Jam</label>
                    <input type="time" class="form-control border-dark w-75" name="sejak_jam">
                </div>
            </td>
            <td>
                <div class="d-flex gap-2 align-items-center" style="width:300px">
                    <label for="" class="col-5">Mules Sejak Jam</label>
                    <input type="time" class="form-control border-dark w-75" name="mules_jam">
                </div>
            </td>
        </tr>

    </table>
</div>



<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td>
                    <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/pastograf_denyut.png') ?>"
                        style="height:350px; width:100%;" data-input-name="image_drawer_state_image_3" />
                    <input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3" value="" />
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="row">
    <div class="d-flex gap-3 align-items-center">
        <div class="col-1">Air Ketuban</div>
        <table class="table table-bordered border-dark">
            <?php for ($row = 1; $row <= 2; $row++): ?>
                <tr>
                    <?php for ($col = 1; $col <= 8; $col++): ?>
                        <td>
                            <input
                                type="text"
                                name="air_ketuban_input_<?= (($row - 1) * 8) + $col ?>"
                                class="form-control border-dark"
                                style="width: 100px;">
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </div>
</div>

<div class="row">
    <table class="table table-bordered border-dark">

        <tbody>
            <tr>
                <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/pastograf_pembukaan.png') ?>"
                    style="height:350px; width:100%;" data-input-name="image_drawer_state_image_pembukaan" />
                <input type="hidden" id="image_drawer_state_image_pembukaan" name="image_drawer_state_image_pembukaan"
                    value="" />
            </tr>
        </tbody>
    </table>
</div>

<div class="row">
    <table class="table table-bordered border-dark">
        <tr>
            <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/pastograf_kontraksi.png') ?>"
                style="height:350px; width:100%;" data-input-name="image_drawer_state_image_kontraksi" />
            <input type="hidden" id="image_drawer_state_image_kontraksi" name="image_drawer_state_image_kontraksi"
                value="" />
        </tr>
    </table>
</div>

<div class="row">
    <div class="d-flex gap-3 align-items-center">
        <div class="flex-shrink-0">Oksitosin U/L</div>
        <table class="table table-bordered border-dark">
            <?php for ($row = 1; $row <= 2; $row++): ?>
                <tr>
                    <?php for ($col = 1; $col <= 8; $col++): ?>
                        <td>
                            <input
                                type="text"
                                name="oksitosin_<?= (($row - 1) * 8) + $col ?>"
                                class="form-control border-dark"
                                style="width: 100px;">
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </div>
</div>


<div class="row">
    <table class="table table-bordered border-dark">
        <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/pastograf_nadi.png') ?>"
            style="height:350px; width:100%;" data-input-name="image_drawer_state_image_nadi" />
        <input type="hidden" id="image_drawer_state_image_nadi" name="image_drawer_state_image_nadi"
            value="" />
    </table>
</div>





<div class="row">
    <div class="d-flex gap-3 align-items-center">
        <div class="flex-shrink-0">
            <div class="d-flex gap-3 align-items-center">
                <div>Urin</div>
                <div>
                    <div class="d-flex flex-column gap-2">
                        <div>Protein</div>
                        <div>Aseton</div>
                        <div>Volume</div>
                    </div>
                </div>
            </div>

        </div>
        <table class="table table-bordered border-dark">
            <?php for ($row = 1; $row <= 3; $row++): ?>
                <tr>
                    <?php for ($col = 1; $col <= 8; $col++): ?>
                        <td>
                            <input
                                type="text"
                                name="oksitosin_<?= (($row - 1) * 8) + $col ?>"
                                class="form-control border-dark"
                                style="width: 100px;">
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </div>
</div>

<div class="row mt-3">
    <table class="table table-bordered border-dark">
        <tbody>
            <th>Catatan Persalinan</th>
            <th></th>
        </tbody>
        <tbody>
            <tr>
                <td class="col-5">
                    <div class="d-flex gap-2 align-items-center">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control border-dark" name="tanggal" id="tanggal">
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center gap-3">
                        <label for="" class="flex-shirnk-0 col-3">Masase Fundus Uteri</label>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="radio" class="custom-checkbox-success" name="masase" value="ya" id="ya_masase"><label for=""><label for="ya_masase">Ya</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center w-100">
                            <input type="radio" class="custom-checkbox-danger" name="masase" value="tidak" id="tidak_masase">
                            <div class="d-flex gap-2 w-100 align-items-center">
                                <label for="tidak_masase" class="flex-shrink-0">Tidak, alasan</label>
                                <input type="text" class="form-control border-dark">

                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="col-5">
                    <div class="d-flex gap-2 align-items-center">
                        <label for="bidan" class="flex-shrink-0">Nama Bidan</label>
                        <input type="text" class="form-control border-dark" name="bidan" id="bidan">
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center gap-3">
                        <label for="" class="flex-shirnk-0 col-3">Plasenta Lahir Lengkap</label>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="radio" class="custom-checkbox-success" name="plasenta" value="ya" id="ya_plasenta"><label for=""><label for="ya_plasenta">Ya</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center w-100">
                            <input type="radio" class="custom-checkbox-danger" name="plasenta" value="tidak" id="tidak_plasenta">
                            <div class="d-flex gap-2 w-100  flex-column">
                                <label for="tidak_plasenta" class="flex-shrink-0">Tidak, jika tidak lengkap alasan</label>
                                <input type="text" class="form-control border-dark">

                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>Tempat Persalinan</div>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex gap-2 ">
                                <input type="radio" class="custom-checkbox-success" name="persalinan" value="rumah_ibu" id="rumah_ibu">
                                <label for="rumah_ibu" class="flex-shrink-0">Rumah Ibu</label>
                            </div>
                            <div class="d-flex gap-2 ">
                                <input type="radio" class="custom-checkbox-success" name="persalinan" value="polindes" id="polindes">
                                <label for="polindes" class="flex-shrink-0">Polindes</label>
                            </div>
                            <div class="d-flex gap-2 ">
                                <input type="radio" class="custom-checkbox-success" name="persalinan" value="klinik" id="klinik">
                                <label for="klinik" class="flex-shrink-0">Klinik Swasta</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex gap-2 ">
                                <input type="radio" class="custom-checkbox-success" name="persalinan" value="puskesmas" id="puskesmas">
                                <label for="puskesmas" class="flex-shrink-0">Puskesmas</label>
                            </div>
                            <div class="d-flex gap-2 ">
                                <input type="radio" class="custom-checkbox-success" name="persalinan" value="rumah_sakit" id="rumah_sakit">
                                <label for="rumah_sakit" class="flex-shrink-0">Rumah sakit</label>
                            </div>
                            <div class="d-flex gap-2 w-100">
                                <input type="radio" class="custom-checkbox-success" name="persalinan" value="lainnya" id="lainnya">
                                <div>
                                    <label for="lainnya" class="flex-shrink-0">Lainnya</label>
                                    <input type="text" class="form-control border-dark">
                                </div>

                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center gap-3">
                        <label for="" class="flex-shirnk-0 col-5">Plasenta tidak lahir > 30 menit</label>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="radio" class="custom-checkbox-success" name="tidak_lahir" value="ya" id="ya_tidak_lahir"><label for=""><label for="ya_tidak_lahir">Ya</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center w-100">
                            <input type="radio" class="custom-checkbox-danger" name="tidak_lahir" value="tidak" id="tidak_tidak_lahir">
                            <label for="tidak_tidak_lahir">Tidak</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="alamat">Alamat tempat Persalinan</label>
                    <input type="text" class="form-control border-dark" name="alamat_tempat_persalinan">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="d-flex align-items-center gap-3">
                        <label for="" class="flex-shirnk-0 col-2">catatan</label>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="radio" class="custom-checkbox-success" name="catatan" value="ya" id="ya_catatan"><label for="ya_catatan">Rujuk</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center w-100">
                            <input type="radio" class="custom-checkbox-success" name="catatan" value="tidak" id="tidak_catatan">
                            <label for="tidak_catatan">kala I/II/III/IV</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="">Alasan Merujuk</label>
                    <input type="text" class="form-control border-dark" name="alasan">
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);

    }
    console.log("MarkerJS3 loaded", MarkerArea);
</script>