<!-- BATAS GANTI -->
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="">NO. RM :</label>
            <input type="text" class="form-control border-dark border-dark" value="<?= $no_rm; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="">Nama Pasien :</label>
            <input type="text" class="form-control border-dark border-dark" value="<?= $nama_pasien; ?>" disabled>
        </div>

        <div class="my-2">
            <div class="d-flex align-items-center">
                <div class="col-6">
                    <label for="" class="flex-shrink-0">Dirawat Di :</label>
                    <input type="text" class="form-control border-dark border-dark" name="rawat" value="<?= $nama_ruangan; ?>" disabled>
                </div>
                <div class="col-6 ms-2">
                    <label for="" class="flex-shrink-0">Kelas :</label>
                    <input type="text" class="form-control border-dark border-dark" value="<?= $kelas; ?>" disabled name="kelas">
                </div>
            </div>
        </div>

        <div class="my-2">
            <div class="d-flex align-items-center">
                <div class="col-6">
                    <label for="" class="flex-shrink-0">Masuk Tanggal :</label>
                    <input type="date" class="form-control border-dark border-dark " onclick="this.showPicker()" name="masuk_tanggal">
                </div>
                <div class="col-6 ms-2">
                    <label for="" class="flex-shrink-0">Pukul</label>
                    <input type="time" class="form-control border-dark border-dark" name="jam_masuk">
                </div>
            </div>
        </div>

        <div class="my-2">
            <div class="d-flex align-items-center">
                <div class="col-6">
                    <label for="" class="flex-shrink-0">Pulang Tanggal :</label>
                    <input type="date" class="form-control border-dark border-dark " onclick="this.showPicker()" name="tanggal_pulang">
                </div>
                <div class="col-6 ms-2">
                    <label for="" class="flex-shrink-0">Pukul</label>
                    <input type="time" class="form-control border-dark border-dark" name="jam_pulang">
                </div>
            </div>
        </div>

    </div>

    <!-- side -->
    <div class="col-6">
        <div class="mb-4">
            <span>Status Keperawatan :</span>
        </div>
        <div class="d-flex gap-2">
            <div class="col-6 d-flex flex-column gap-4">
                <div>
                    <input type="radio" name="keperawatan" class="custom-checkbox-success" value="umum" id="umum">
                    <label for="umum">Umum</label>
                </div>
                <div>
                    <input type="radio" name="keperawatan" class="custom-checkbox-success" value="bpjs" id="">
                    <label for="bpjs">BPJS</label>
                </div>
                <div>
                    <input type="radio" name="keperawatan" class="custom-checkbox-success" value="jampersal" id="jampersal">
                    <label for="jampersal">Jampersal</label>
                </div>
            </div>

            <div class="col-6 d-flex flex-column gap-4">
                <div>
                    <input type="radio" name="keperawatan" class="custom-checkbox-success" value="bpjs_ketenagakerjaan" id="ketenagakerjaan">
                    <label for="ketenagakerjaan">BPJS Ketenagakerjaan</label>
                </div>
                <div>
                    <input type="radio" name="keperawatan" class="custom-checkbox-success" value="jasaraharja" id="jasaraharja">
                    <label for="jasaraharja">Jasaraharja</label>
                </div>
                <div>
                    <input type="radio" name="keperawatan" class="custom-checkbox-success" value="jampkesda" id="jampkesda">
                    <label for="jampkesda">Jampkesda</label>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Add Row Button -->
<!-- <div class="my-3 float-end">
    <button type="button" class="btn btn-primary" onclick="addRow()">
        <span class="bi bi-plus"></span>
    </button>
</div> -->


<?php
$jumlah_dokter = 3;
?>
<!-- visiteTable Program Table -->
<table class="table table-bordered mt-4 border-dark" id="VisiteProgramTable">
    <tbody>
        <tr>
            <th class="col-1 text-center">No</th>
            <th class="col-2 text-center">Tanggal</th>
            <th class="col-2 text-center">Nama Dokter</th>
            <th class="col-2 text-center">Waktu Visite ( waktu )</th>
            <th class="col-2 text-center">Tanda Tangan</th>
        </tr>
    </tbody>
    <tbody>
        <!-- Initial Row -->
        <tr class="text-center">
            <td>1</td>
            <td><input type="date" name="tanggal[]" class="form-control border-dark"></td>
            <td> <select type="select" name="dokter_umum1" id="dokter_umum1" class="form-select dokter_umum"
                    style="width: 100%;"></select></td>
            <td><input type="time" name="waktu_visit[]" class="form-control border-dark"></td>
            <td> <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum1" />
            </td>
        </tr>
        <tr class="text-center">
            <td>2</td>
            <td><input type="date" name="tanggal[]" class="form-control border-dark"></td>
            <td> <select type="select" name="dokter_umum2" id="dokter_umum2" class="form-select dokter_umum"
                    style="width: 100%;"></select></td>
            <td><input type="time" name="waktu_visit[]" class="form-control border-dark"></td>
            <td> <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum2" />
            </td>
        </tr>
        <tr class="text-center">
            <td>3</td>
            <td><input type="date" name="tanggal[]" class="form-control border-dark"></td>
            <td> <select type="select" name="dokter_umum3" id="dokter_umum3" class="form-select dokter_umum"
                    style="width: 100%;"></select></td>
            <td><input type="time" name="waktu_visit[]" class="form-control border-dark"></td>
            <td> <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum3" />
            </td>
        </tr>
        <tr class="text-center">
            <td>4</td>
            <td><input type="date" name="tanggal[]" class="form-control border-dark"></td>
            <td> <select type="select" name="dokter_umum4" id="dokter_umum4" class="form-select dokter_umum"
                    style="width: 100%;"></select></td>
            <td><input type="time" name="waktu_visit[]" class="form-control border-dark"></td>
            <td> <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum4" />
            </td>
        </tr>
        <tr class="text-center">
            <td>5</td>
            <td><input type="date" name="tanggal[]" class="form-control border-dark"></td>
            <td> <select type="select" name="dokter_umum5" id="dokter_umum5" class="form-select dokter_umum"
                    style="width: 100%;"></select></td>
            <td><input type="time" name="waktu_visit[]" class="form-control border-dark"></td>
            <td> <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum5" />
            </td>
        </tr>
        <tr class="text-center">
            <td>6</td>
            <td><input type="date" name="tanggal[]" class="form-control border-dark"></td>
            <td> <select type="select" name="dokter_umum6" id="dokter_umum6" class="form-select dokter_umum"
                    style="width: 100%;"></select></td>
            <td><input type="time" name="waktu_visit[]" class="form-control border-dark"></td>
            <td> <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum6" />
            </td>
        </tr>
        <tr class="text-center">
            <td>7</td>
            <td><input type="date" name="tanggal[]" class="form-control border-dark"></td>
            <td> <select type="select" name="dokter_umum7" id="dokter_umum7" class="form-select dokter_umum"
                    style="width: 100%;"></select></td>
            <td><input type="time" name="waktu_visit[]" class="form-control border-dark"></td>
            <td> <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum7" />
            </td>
        </tr>
        <tr class="text-center">
            <td>8</td>
            <td><input type="date" name="tanggal[]" class="form-control border-dark"></td>
            <td> <select type="select" name="dokter_umum8" id="dokter_umum8" class="form-select dokter_umum"
                    style="width: 100%;"></select></td>
            <td><input type="time" name="waktu_visit[]" class="form-control border-dark"></td>
            <td> <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum8" />
            </td>
        </tr>
        <tr class="text-center">
            <td>9</td>
            <td><input type="date" name="tanggal[]" class="form-control border-dark"></td>
            <td> <select type="select" name="dokter_umum9" id="dokter_umum9" class="form-select dokter_umum"
                    style="width: 100%;"></select></td>
            <td><input type="time" name="waktu_visit[]" class="form-control border-dark"></td>
            <td> <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum9" />
            </td>
        </tr>
        <tr class="text-center">
            <td>10</td>
            <td><input type="date" name="tanggal[]" class="form-control border-dark"></td>
            <td> <select type="select" name="dokter_umum10" id="dokter_umum10" class="form-select dokter_umum"
                    style="width: 100%;"></select></td>
            <td><input type="time" name="waktu_visit[]" class="form-control border-dark"></td>
            <td> <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum10" />
            </td>
        </tr>
        <!-- Initial Row -->
    </tbody>
</table>


<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"



    function cbCommon(data) {

        populateFormFields(data);


        // dokter img
        const jumlahDokter = 10;

        for (let i = 1; i <= jumlahDokter; i++) {
            const dokterSelect = `#dokter_umum${i}`;
            const qrId = `qr_dokter_umum${i}`;

            $(dokterSelect).prop('disabled', false).select2('open').select2('close');

            if (mode === "lihat") {
                $(dokterSelect).prop('disabled', true);
            }

            setTimeout(() => {
                console.log(dataDokter);
                dataDokter?.forEach(v => {
                    if (v.text === $(dokterSelect).select2('data')[0]?.text) {
                        QRSignatureAPI(v.id_original, qrId);
                    }
                });
            }, 500);
        }




    }

    function listDokterUmumAPI() {
        $('.dokter_umum').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                    }
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data;
                    dataDokter = items
                    return {
                        results: items, // Data from PHP
                        pagination: {
                            more: more, // Check if more data is available
                        },
                    };
                },
                cache: true,

            },
            placeholder: 'Search for items...',
        })
    }

    // mulai
    $(document).ready(function() {
        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;

        listDokterUmumAPI()


        // mulai aktif jumlah dokter
        const jumlahDokter = 10;

        for (let i = 1; i <= jumlahDokter; i++) {
            $(`#dokter_umum${i}`).on('select2:select', function(e) {
                const {
                    id_original
                } = e.params.data;
                QRSignatureAPI(id_original, `qr_dokter_umum${i}`);
            });
        }
        // batas jumlah



        // batas

        console.log(data);
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        table.innerHTML = "";

        const dataLength = data.values().next().value.length;

        const params = Array.from({
                length: dataLength
            }, (_, rowIndex) =>
            Array.from(data.keys(), (key) => data.get(key)[rowIndex])
        );
        // batas qrcode


        console.log(params);

        const rowLength = params.length;
        const colLength = params[0].length;

        for (let i = 0; i < rowLength; i++) {
            const tr = addRow();
            const inputs = tr.getElementsByTagName("input");

            for (let j = 0; j < colLength; j++) {
                inputs[j].value = params[i][j];
            }
        }
    })




    // function addRow() {
    //     const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
    //     const rowCount = table.rows.length;
    //     const newRow = table.insertRow(rowCount);

    //     newRow.classList.add("text-center");

    //     // Create the HTML for the new row
    //     const cells = [
    //         `<p>${rowCount + 1}</p>`,
    //         `<input type="date" name="tanggal[]" class="form-control border-dark">`,
    //         `<select type="select" name="dokter_umum[]" class="form-select" style="width: 100%;"></select>`, // Ensure name is unique (array syntax)
    //         `<input type="text" name="waktu_visit[]" class="form-control border-dark">`,
    //         `<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum" />`,
    //     ];

    //     // Insert each cell in the row
    //     cells.forEach((cell, index) => {
    //         const newCell = newRow.insertCell(index);
    //         newCell.innerHTML = cell;
    //     });

    //     // Reinitialize select2 for the new select element
    //     initializeSelect2ForNewRow(newRow);

    //     return newRow;
    // }
</script>