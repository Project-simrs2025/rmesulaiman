<table class="table table-borderless mb-5 border-dark">
    <tbody>
        <tr>
            <td width="20%">Nama Pasien</td>
            <td width="30%">
                <input name="nama_pasien" type="text" class="form-control border-dark ">
            </td>
            <td width="20%">Agama</td>
            <td width="30%">
                <input type="text" name="nama_agama" class="form-control border-dark ">
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>
                <input type="date" name="tanggal_lahir" class="form-control border-dark ">
            </td>
            <td>Jenis Kelamin</td>
            <td>
                <input type="text" name="jenkel" class="form-control border-dark ">
            </td>
        </tr>
        <tr>
            <td>No. Rm</td>
            <td>
                <input type="text" name="no_rm" class="form-control border-dark "">
		</td>
		<td>Suku / Bangsa</td>
		<td>
			<input type=" text" class="form-control border-dark " name="nama_suku">
            </td>
        </tr>

    </tbody>
</table>


<div class="row">

    <input type="hidden" name="table-resiko-count" id="table-resiko-count" value="1">
    <div class="table-responsive">
        <table class="table table-bordered border-dark" id="table-resiko">
            <tbody>
                <tr class="text-center">
                    <td rowspan="3" class="col-3">Tanggal/Jam</td>
                    <td colspan="6">Intake Masuk </td>
                    <td colspan="4">Output/Keluar</td>
                </tr>
                <tr class="text-center">
                    <td colspan="3">INTRAVENUS</td>
                    <td colspan="3">MULUT/NGT</td>
                    <td rowspan="2">URINE</td>
                    <td rowspan="2">BAB</td>
                    <td rowspan="2">NGT</td>
                    <td rowspan="2">NAMA PERAWAT</td>

                </tr>
                <tr class="text-center">
                    <td>Jenis Cairan</td>
                    <td>Jumlah</td>
                    <td>Total</td>
                    <td>Jenis Makanan</td>
                    <td>Jumlah</td>
                    <td>Total</td>
                </tr>
                <tr>
                    <td><input type="date" class="form-control border-dark  border-dark" name="tanggal"></td>
                    <td><input type="text" class="form-control border-dark  border-dark" style="width: 200px;" name="jenis_cairan"></td>
                    <td><input type="text" class="form-control border-dark  border-dark" style="width: 200px;" name="jumlah"></td>
                    <td><input type="text" class="form-control border-dark  border-dark" style="width: 200px;" name="total"></td>
                    <td><input type="text" class="form-control border-dark  border-dark" style="width: 200px;" name="jenis_makanan"></td>
                    <td><input type="text" class="form-control border-dark  border-dark" style="width: 200px;" name="jumlah"></td>
                    <td><input type="text" class="form-control border-dark  border-dark" style="width: 200px;" name="total"></td>
                    <td><input type="text" class="form-control border-dark  border-dark" style="width: 200px;" name="urine"></td>
                    <td><input type="text" class="form-control border-dark  border-dark" style="width: 200px;" name="bab"></td>
                    <td><input type="text" class="form-control border-dark  border-dark" style="width: 200px;" name="ngt"></td>
                    <td><input type="text" class="form-control border-dark  border-dark" style="width: 200px;" name="perawat"></td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-resiko')">Add</button>
        <button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-resiko')">Delete</button>
    </div>
</div>


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

    // ready
    function copyTable(tableId) {
        let table = document.getElementById(tableId);
        let newTable = table.cloneNode(true);

        // Reset the values of all input fields inside the new table
        let inputs = newTable.querySelectorAll('input');
        inputs.forEach(function(input) {
            input.value = ''; // Set the value to an empty string
        });

        let countInput = document.querySelector("input[name='" + tableId + "-count']");
        let count = +(countInput.value ?? "1") + 1;

        countInput.value = count;

        newTable.id = tableId + "-copy-" + count;

        // Find the container where the buttons are located
        let container = table.parentNode;

        // Find the "Add" button
        let addButton = container.querySelector("button.btn-primary");
        // Insert the new table right before the "Add" button
        container.insertBefore(newTable, addButton);
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