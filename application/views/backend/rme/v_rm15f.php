<div class="row">
    <input type="hidden" name="table-pengkajian-count" id="table-pengkajian-count" value="1">
    <table class="table table-bordered border-dark table-pengkajian" id="table-pengkajian">
        <tbody>
            <tr>
                <th class="col-1 text-center">Jam</th>
                <th class="col-3 text-center">Nadi</th>
                <th class="col-2 text-center">Tekanan Darah</th>
                <th class="col-2 text-center">Pernafasan</th>
                <th class="col-2 text-center">Kontraksi Uterus</th>
                <th class="col-1 text-center">Pendarahan</th>
                <th class="col-1 text-center">Terapi</th>
            </tr>
        </tbody>
        <tbody>
            <!-- Initial Row -->
            <tr class="text-center">
                <td><input type="time" name="jam[]" class="form-control border-dark"></td>
                <td><input type="text" name="nadi[]" class="form-control border-dark"></td>
                <td><input type="text" name="tekanan_darah[]" class="form-control border-dark"></td>
                <td><input type="text" name="pernafasan[]" class="form-control border-dark"></td>
                <td><input type="text" name="kontraksi_uterus[]" class="form-control border-dark"></td>
                <td>
                    <div class="d-flex gap-2">
                        <input type="text" name="pendarahan[]" class="form-control border-dark"><span>cc</span>
                    </div>
                </td>
                <td><input type="text" name="terapi[]" class="form-control border-dark"></td>
            </tr>
        </tbody>
    </table>
</div>
<button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-pengkajian')">Add</button>
<button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-pengkajian')">Delete</button>


<div class="row">
    <input type="hidden" name="table-resiko-count" id="table-resiko-count" value="1">
    <table class="table table-bordered border-dark" id="table-resiko">
        <tbody>
            <tr>
                <th class="text-center">Kategori</th>
                <th class="text-center">Data</th>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>NIFAS</td>
                <td><input type="text" name="nifas[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>TERAPI</td>
                <td><input type="text" name="terapi[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>KETERANGAN</td>
                <td><input type="text" name="keterangan[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>CAK</td>
                <td><input type="text" name="cak[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>BAB</td>
                <td><input type="text" name="bab[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>FLATUS</td>
                <td><input type="text" name="flatus[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>LUKA OPERASI / EPISTOMI / ROBEKAN PERINEUM</td>
                <td><input type="text" name="luka_operasi[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>MAMMA</td>
                <td><input type="text" name="mamma[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>COR / PULMO</td>
                <td><input type="text" name="cor_pulmo[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>TEK. DARAH</td>
                <td><input type="text" name="tek_darah[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>PERNAFASAN</td>
                <td><input type="text" name="pernafasan_tb2[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>SUHU</td>
                <td><input type="text" name="suhu_tb2[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>NADI</td>
                <td><input type="text" name="nadi_tb2[]" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>HARI KE</td>
                <td><input type="text" name="hari_ke[]" class="form-control border-dark"></td>
            </tr>
        </tbody>
    </table>
</div>


<button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-resiko')">Add</button>
<button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-resiko')">Delete</button>



<script>
    function cbCommon(data) {

        // on init generate table based on table-{name}-count
        let resikoCountInput = document.getElementById("table-resiko-count");
        if (resikoCountInput) {
            let count = +(resikoCountInput.value ?? "0");
            if (count > 0) {
                for (let i = 0; i < count - 1; i++) {
                    let tableId = 'table-resiko';
                    let table = document.getElementById(tableId);
                    let newTable = table.cloneNode(true);

                    newTable.id = tableId + "-copy-" + `${i + 1}`;

                    table.parentNode.insertBefore(newTable, table.nextSibling);
                }
            }
        }

        let pengkajianCountInput = document.getElementById("table-pengkajian-count");
        if (pengkajianCountInput) {
            let count = +(pengkajianCountInput.value ?? "0");
            if (count > 0) {
                for (let i = 1; i < count; i++) {

                    let tableId = 'table-pengkajian';
                    let table = document.getElementById(tableId);
                    let newTable = table.cloneNode(true);

                    newTable.id = tableId + "-copy-" + `${i + 1}`;

                    table.parentNode.insertBefore(newTable, table.nextSibling);
                }
            }
        }


        populateFormFields(data);
        // callMarkerManager();
        // fill image
    }

    function copyTable(tableId) {
        let table = document.getElementById(tableId);
        let newTable = table.cloneNode(true);

        // Hapus nilai dari input di tabel baru
        let inputs = newTable.querySelectorAll("input");
        inputs.forEach(input => input.value = '');

        let countInput = document.getElementById(tableId + "-count");
        let count = parseInt(countInput.value) + 1;
        countInput.value = count;

        newTable.id = tableId + "-copy-" + count;

        // Cari semua tabel dengan ID yang sama dan ambil yang terakhir
        let allTables = document.querySelectorAll(`table[id^='${tableId}']`);
        let lastTable = allTables[allTables.length - 1]; // Ambil yang terakhir

        // Masukkan tabel baru setelah semua tabel yang ada
        lastTable.parentNode.appendChild(newTable);
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