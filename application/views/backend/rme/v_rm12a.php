<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3">
            <tr>
                <td class="text-center">

                    <div class=" text-center">
                        <div class=" text-center">
                            <img src="<?= $site_favicon; ?>" alt="logo">
                            <div class="fw-bold"> <?= $site_title; ?></div><br>
                            <?php echo $site_deskripsi; ?>
                        </div>
                        <div class=" text-center">
                            <?php $newtext = wordwrap($alamat, 70, "<br/>", false); ?>
                            <?php echo $newtext; ?>
                        </div>
                    </div>
                </td>

                <td style="width: 500px;">
                    <div class="text-center">
                        <h1>KURVA HARIAN</h1>
                    </div>
                </td>

                <td class="col-3">
                    <div class="form-group">
                        <label for="namaPasien">Nama Pasien:</label>
                        <input type="text" class="form-control border-dark" name="nama_pasien">
                    </div>
                    <div class="form-group">
                        <label for="tanggalLahir">Tanggal Lahir :</label>
                        <input type="text" class="form-control border-dark" name="tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur :</label>
                        <input type="text" class="form-control border-dark" name="umur" onclick="this.showPicker()">
                    </div>
                    <div class="form-group">
                        <label for="jenkel">Jenkel :</label>
                        <input type="text" class="form-control border-dark" name="jenkel">
                    </div>
                    <div class="form-group">
                        <label for="noRM">NO. RM :</label>
                        <input type="text" class="form-control border-dark" name="no_rm">
                    </div>
                </td>
            </tr>

            </tbody>
        </table>

    </div>
</div>

<table class="table table-bordered border-dark" id="table-resiko">
    <tbody>
        <?php for ($i = 0; $i < 5; $i++): ?>
            <!-- Baris Tanggal -->
            <tr id="inputRowTanggal_<?= $i ?>">
                <td class="text-center" colspan="4">Tanggal</td>
                <td colspan="5">
                    <input type="datetime-local" class="form-control border-dark" name="tanggal[]">
                </td>
            </tr>

            <!-- Gambar -->
            <tr>
                <td colspan="10">
                    <div class="d-flex justify-content-end my-3">
                        <img class="marker-image" id="example-image-<?= $i ?>" src="<?= base_url('assets2/rme/img/12a.png') ?>"
                            style="width:100%; height:500px;" data-input-name="image_drawer_state_image_<?= $i + 1 ?>" />
                        <input type="hidden" id="image_drawer_state_image_<?= $i + 1 ?>" name="image_drawer_state_image_<?= $i + 1 ?>" value="" />
                    </div>
                </td>
            </tr>

            <!-- BAB Tekstur -->
            <tr class="text-center inputDerajat">
                <td colspan="2" rowspan="3">
                    <div class="fw-bold mt-5">BAB</div>
                </td>
                <td colspan="2">Tekstur</td>
                <td><input type="text" class="form-control border-dark" name="bab_tekstur<?= $i ?>_[]"></td>
                <td><input type="text" class="form-control border-dark" name="bab_tekstur<?= $i ?>_[]"></td>
                <td><input type="text" class="form-control border-dark" name="bab_tekstur<?= $i ?>_[]"></td>
                <td><input type="text" class="form-control border-dark" name="bab_tekstur<?= $i ?>_[]"></td>
                <td><input type="text" class="form-control border-dark" name="bab_tekstur<?= $i ?>_[]"></td>
            </tr>

            <!-- BAB Frekuensi -->
            <tr class="text-center inputDerajat">
                <td colspan="2">Frekuensi</td>
                <td><input type="text" class="form-control border-dark" name="bab_frekuensi<?= $i ?>[]"></td>
                <td><input type="text" class="form-control border-dark" name="bab_frekuensi<?= $i ?>[]"></td>
                <td><input type="text" class="form-control border-dark" name="bab_frekuensi<?= $i ?>[]"></td>
                <td><input type="text" class="form-control border-dark" name="bab_frekuensi<?= $i ?>[]"></td>
                <td><input type="text" class="form-control border-dark" name="bab_frekuensi<?= $i ?>[]"></td>
            </tr>

            <!-- BAB Warna -->
            <tr class="text-center inputDerajat">
                <td colspan="2">Warna</td>
                <td><input type="text" class="form-control border-dark" name="bab_warna<?= $i ?>[]"></td>
                <td><input type="text" class="form-control border-dark" name="bab_warna<?= $i ?>[]"></td>
                <td><input type="text" class="form-control border-dark" name="bab_warna<?= $i ?>[]"></td>
                <td><input type="text" class="form-control border-dark" name="bab_warna<?= $i ?>[]"></td>
                <td><input type="text" class="form-control border-dark" name="bab_warna<?= $i ?>[]"></td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>

<!-- <button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-resiko')">Add</button>
<button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-resiko')">Delete</button> -->


<script>
    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);
        // callMarkerManager();
        // fill image
    }
</script>