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

<input type="hidden" name="table-resiko-count" id="table-resiko-count" value="1">
<table class="table table-bordered border-dark" id="table-resiko">
    <tbody>
        <!-- Baris Tanggal -->
        <tr id="inputRowTanggal">
            <td class="text-center" colspan="4">Tanggal</td>
            <td colspan="3">
                <input type="date" class="form-control border-dark" name="tanggal[]">
            </td>
        </tr>

        <tr>
            <td colspan="10">
                <div class="d-flex justify-content-end my-3">
                    <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/12a.png') ?>"
                        style="width:100%; height:500px;" data-input-name="image_drawer_state_image_11" />
                    <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                        value="" />
                </div>
            </td>
        </tr>

        <tr class="text-center inputDerajat">
            <td colspan="2" rowspan="3">
                <div class="fw-bold mt-5">BAB</div>
            </td>
            <td colspan="2">Tekstur</td>
            <td><input type="text" class="form-control border-dark" name="bab_tekstur[]"></td>
            <td><input type="text" class="form-control border-dark" name="bab_tekstur[]"></td>
            <td><input type="text" class="form-control border-dark" name="bab_tekstur[]"></td>
        </tr>

        <tr class="text-center inputDerajat">
            <td colspan="2">Frekuensi</td>
            <td><input type="text" class="form-control border-dark" name="bab_frekuensi[]"></td>
            <td><input type="text" class="form-control border-dark" name="bab_frekuensi[]"></td>
            <td><input type="text" class="form-control border-dark" name="bab_frekuensi[]"></td>
        </tr>

        <tr class="text-center inputDerajat">
            <td colspan="2">Warna</td>
            <td><input type="text" class="form-control border-dark" name="bab_warna[]"></td>
            <td><input type="text" class="form-control border-dark" name="bab_warna[]"></td>
            <td><input type="text" class="form-control border-dark" name="bab_warna[]"></td>
        </tr>


    </tbody>
</table>
<button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-resiko')">Add</button>
<button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-resiko')">Delete</button>


<script>
    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);

        // Dapatkan jumlah tabel yang disimpan
        const resikoCountInput = document.getElementById("table-resiko-count");
        const baseTable = document.getElementById("table-resiko");

        if (resikoCountInput && baseTable) {
            const count = parseInt(resikoCountInput.value || "1");

            // Hapus semua table-copy yang mungkin sudah ada
            for (let i = 2; i <= count; i++) {
                const oldTable = document.getElementById(`table-resiko-copy-${i}`);
                if (oldTable) oldTable.remove();
            }

            let lastTable = baseTable;

            // Buat ulang semua table copy dari count (mulai dari 2)
            for (let i = 2; i <= count; i++) {
                const newTable = baseTable.cloneNode(true);
                newTable.id = `table-resiko-copy-${i}`;

                // Bersihkan semua input di table clone
                const inputs = newTable.querySelectorAll("input");
                inputs.forEach(input => {
                    if (input.type !== 'hidden') input.value = '';
                });

                lastTable.insertAdjacentElement('afterend', newTable);
                lastTable = newTable;
            }
        }
    }



    // ready
    function copyTable(tableId) {
        const countInput = document.getElementById(tableId + "-count");
        let count = parseInt(countInput.value || "1");
        const newCount = count + 1;

        const baseTable = document.getElementById(tableId);
        const newTable = baseTable.cloneNode(true);
        const newId = `${tableId}-copy-${newCount}`;
        newTable.id = newId;

        // Bersihkan semua input di tabel clone
        const inputs = newTable.querySelectorAll('input');
        inputs.forEach(input => {
            if (input.type !== 'hidden') input.value = '';
        });

        // Update hidden count
        countInput.value = newCount;

        // Sisipkan setelah tabel terakhir
        let lastTable = baseTable;
        for (let i = 2; i <= count; i++) {
            const t = document.getElementById(`${tableId}-copy-${i}`);
            if (t) lastTable = t;
        }

        lastTable.insertAdjacentElement('afterend', newTable);
    }

    function deleteTable(tableId) {
        const countInput = document.getElementById(tableId + "-count");
        let count = parseInt(countInput.value || "1");

        if (count > 1) {
            const lastCopiedTable = document.getElementById(`${tableId}-copy-${count}`);
            if (lastCopiedTable) {
                lastCopiedTable.remove();
                countInput.value = count - 1;
            }
        }
    }




    function deleteTable(tableId) {
        let countInput = document.getElementById(tableId + "-count");
        if (countInput) {
            let count = +(countInput.value);
            if (count > 0) {
                let lastCopiedTable = document.getElementById(tableId + "-copy-" + count);
                if (lastCopiedTable) {
                    lastCopiedTable.remove();
                    countInput.value = count - 1;
                }
            }
        }
    }
</script>