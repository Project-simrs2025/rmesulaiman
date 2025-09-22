<!-- rm 12b -->

<div class="row my-3">
    <div class="col-6">
        <?php
        // Daftar input field
        $dataform1 = array(
            array('nama' => "Nama Pasien", 'name' => "nama_pasien", 'tipe' => "text", 'holder' => "Masukkan Nama Pasien", 'status' => "disabled"),
            array('nama' => "Tanggal Lahir", 'tipe' => "text", 'holder' => "Tanggal Lahir", 'status' => "disabled", 'name' => 'tanggal_lahir'),
            array('nama' => "Jenis Kelamin", 'name' => "jenkel", 'tipe' => "text", 'holder' => "Jenis Kelamin", 'status' => "disabled", 'name' => 'jenkel'),
            array('nama' => "Nomor Rm", 'tipe' => "text", 'holder' => "Masukkan Nomor Rm", 'status' => "disabled", 'name' => 'no_rm'),
            
        );
        foreach ($dataform1 as $a) {

            echo "<div class='form-group'>";
            echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
            echo "<input type='{$a['tipe']}' class='form-control border-dark border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}></div>";
        }
        ?>
    </div>

    <div class="col-6">
        <?php
        // Daftar input field
        $dataform1 = array(
            array('nama' => "Agama", 'tipe' => "text", 'name' => 'nama_agama', 'holder' => "", 'status' => "disabled"),
            array('nama' => "Suku/ Bangsa", 'tipe' => "text", 'values' => "", 'name' => 'nama_suku', 'holder' => "Nama Suku", 'status' => "disabled"),
            array('nama' => "Alamat", 'tipe' => "text", 'name' => 'alamat', 'holder' => "", 'status' => "disabled"),
            array('nama' => "NIK", 'tipe' => "text", 'name' => 'nik', 'holder' => "", 'status' => "disabled"),
            
        );
        foreach ($dataform1 as $a) {

            echo "<div class='form-group'>";
            echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
            echo "<input type='{$a['tipe']}' class='form-control border-dark border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}></div>";
        }
        ?>
    </div>
</div>


<div class="row">

    <div class="col-12">
        <!-- Add Row Button -->
        <div class="my-3 float-end">
            <button type="button" class="btn btn-primary" onclick="addRow()">
                <span class="bi bi-plus"></span>
            </button>
        </div>

        <table class="table table-bordered mt-4 border-dark" id="VisiteProgramTable">
            <thead class="table-bordered border-dark">
                <th class="text-center">No</th>
                <th class="col-1 text-center">Tanggal/ Jam</th>
                <th class="col-3 text-center">Profesional Pemberi Asuhan</th>
                <th class="col-4 text-center">Hasil Asesmen Pasien dan Pemberian Pelayanan</th>
                <th class="col-2 text-center">Instruksi PPA</th>
                <th class="col-2 text-center">Review & Verifikasi DPJP</th>

            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
<script>
    // Fungsi sanitizeInput
    function sanitizeInput(text) {
        return text
        .replace(/\\n/g, '\n')     // Ganti \n (string literal) dengan newline asli
        .replace(/\\t/g, '\t')     // Ganti \t dengan tab
        .replace(/\\\//g, '/')     // Ganti \/ jadi /
        .replace(/\\u2013/g, '–')  // Ganti unicode en dash
        .replace(/[^\w\s.,()*%\/+=:\-\n\t]/g,'' ); // Hapus hanya karakter aneh, tapi pertahankan \n, \t, /, dll
    }
</script>

<script>
    let dataDokter = [];
    const mode = "<?= $mode; ?>";

    $(document).ready(function () {
        listDokterUmumAPI();
        listPerawatAPI();
        const globalData = <?= $global_data; ?>;
        const { id_dokter } = globalData;

        // QR untuk DPJP global
        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp');
    });

    $(document).delay(1000).queue(function () {
        callMarkerManager();
    });

    function listPerawatAPI() {
        $('.perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/'); ?>',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return { q: params.term };
                },
                processResults: function (data) {
                    const { items, more } = data.data;
                    dataDokter = items;
                    return {
                        results: items,
                        pagination: { more: more },
                    };
                },
                cache: true
            },
            placeholder: 'Search for items...',
        });
    }

    function listDokterUmumAPI() {
        $('.dokter_umum').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return { q: params.term };
                },
                processResults: function (data) {
                    const { items, more } = data.data;
                    dataDokter = items;
                    return {
                        results: items,
                        pagination: { more: more },
                    };
                },
                cache: true
            },
            placeholder: 'Search for items...',
        });
    }

    function addRow() {
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        const rowCount = table.rows.length;
        const newRow = table.insertRow(rowCount);
        newRow.classList.add("text-center");

        const selectId = `dokter_umum${rowCount}`;
        const selectIdPerawat = `perawat${rowCount}`;

        const cells = [
            `<p>${rowCount + 1}</p>`,
            `<input type="datetime-local" name="tanggal_jam[]" class="form-control border-dark">`,
            `<textarea name="ppa[]" rows="4" class="form-control border-dark"></textarea><br/>
            <span> Nama Pemberi profesional asuhan </span><br/>
            <select name="perawat[]" id="${selectIdPerawat}" class="form-select perawat" style="width: 100%;"></select>
            <input type="hidden" name="perawat_nama[]" class="perawat_nama" value="">`,
            `
            <div class="d-flex flex-column gap-2">
                <div class="d-flex align-items-start gap-2">
                    <label class="pt-2" style="width: 20px;">S:</label>
                    <textarea name="soap_s[]" rows="2" class="form-control border-dark"></textarea>
                </div>
                <div class="d-flex align-items-start gap-2">
                    <label class="pt-2" style="width: 20px;">O:</label>
                    <textarea name="soap_o[]" rows="2" class="form-control border-dark"></textarea>
                </div>
                <div class="d-flex align-items-start gap-2">
                    <label class="pt-2" style="width: 20px;">A:</label>
                    <textarea name="soap_a[]" rows="2" class="form-control border-dark"></textarea>
                </div>
                <div class="d-flex align-items-start gap-2">
                    <label class="pt-2" style="width: 20px;">P:</label>
                    <textarea name="soap_p[]" rows="2" class="form-control border-dark"></textarea>
                </div>
            </div>

            `,

            `<textarea name="instruksi[]" rows="4" class="form-control border-dark"></textarea>`,
            `<div>
                <select name="dokter_umum[]" id="${selectId}" class="form-select dokter_umum" style="width: 100%;"></select>
                <input type="hidden" name="dokter_umum_nama[]" class="dokter_umum_nama" value="">
            </div>`
        ];

        cells.forEach((cell, index) => {
            const newCell = newRow.insertCell(index);
            newCell.innerHTML = cell;
        });

        // 🔒 Tambahkan sanitasi input langsung saat user mengetik
        $(newRow).find('textarea').on('input', function () {
            const sanitized = sanitizeInput($(this).val());
            if ($(this).val() !== sanitized) {
                $(this).val(sanitized);
            }
        });
            
        // Inisialisasi select2 perawat
        $(`#${selectIdPerawat}`).select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return { q: params.term };
                },
                processResults: function (data) {
                    const { items, more } = data.data;
                    return {
                        results: items,
                        pagination: { more: more }
                    };
                },
                cache: true
            },
            placeholder: 'Search for items...'
        }).on('select2:select', function (e) {
            const selectedData = e.params.data;
            const selectedTextPerawat = selectedData.text;

            // Simpan nama perawat ke input hidden di kolom yang sama
            const hiddenInputPerawat = $(this).closest('td').find('.perawat_nama');
            hiddenInputPerawat.val(selectedTextPerawat);
        });

        // Inisialisasi select2 dokter umum
        $(`#${selectId}`).select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return { q: params.term };
                },
                processResults: function (data) {
                    const { items, more } = data.data;
                    return {
                        results: items,
                        pagination: { more: more }
                    };
                },
                cache: true
            },
            placeholder: 'Search for items...'
        }).on('select2:select', function (e) {
            const selectedData = e.params.data;
            const selectedText = selectedData.text;
            const id_original = selectedData.id_original || selectedData.id;

            const hiddenInput = $(this).closest('div').find('.dokter_umum_nama');
            hiddenInput.val(selectedText);

            QRSignatureAPI(id_original, this.id); // Tetap untuk dokter
        });

        return newRow;
    }

    function deleteRow(button) {
        const row = button.parentElement.parentElement;
        row.remove();
    }

    function cbCommon(data) {
        console.log(data);

        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        table.innerHTML = "";

        const dataLength = data.values().next().value.length;

        const params = Array.from({ length: dataLength }, (_, rowIndex) =>
            Array.from(data.keys(), (key) => data.get(key)[rowIndex])
        );

        for (let i = 0; i < params.length; i++) {
            const [tanggal_jam, ppa, id_perawat, nama_perawat, soap_s, soap_o, soap_a, soap_p, instruksi, id_dokter, nama_dokter] = params[i];

            const tr = addRow();

            // Tanggal
            const tanggalInput = tr.querySelector('input[type="datetime-local"]');
            if (tanggalInput) tanggalInput.value = tanggal_jam;

            // PPA
            const ppaTextarea = tr.querySelector('textarea[name="ppa[]"]');
            if (ppaTextarea) ppaTextarea.value = ppa;

            // SOAP S, O, A, P
            const textareaS = tr.querySelector('textarea[name="soap_s[]"]');
            const textareaO = tr.querySelector('textarea[name="soap_o[]"]');
            const textareaA = tr.querySelector('textarea[name="soap_a[]"]');
            const textareaP = tr.querySelector('textarea[name="soap_p[]"]');

            if (textareaS) textareaS.value = soap_s;
            if (textareaO) textareaO.value = soap_o;
            if (textareaA) textareaA.value = soap_a;
            if (textareaP) textareaP.value = soap_p;

            // Instruksi
            const instruksiTextarea = tr.querySelector('textarea[name="instruksi[]"]');
            if (instruksiTextarea) instruksiTextarea.value = instruksi;

            // Perawat
            const selectPerawat = tr.querySelector("select.perawat");
            const hiddenPerawatNama = tr.querySelector("input.perawat_nama");

            if (hiddenPerawatNama) hiddenPerawatNama.value = nama_perawat;
            if (selectPerawat && id_perawat && nama_perawat) {
                const intervalPerawat = setInterval(() => {
                    if ($(selectPerawat).hasClass("select2-hidden-accessible")) {
                        clearInterval(intervalPerawat);
                        const optionPerawat = new Option(nama_perawat, id_perawat, true, true);
                        $(selectPerawat).append(optionPerawat).trigger('change');
                    }
                }, 100);
            }


            // Dokter
            const selectDokter = tr.querySelector("select.dokter_umum");
            const hiddenDokterNama = tr.querySelector("input.dokter_umum_nama");

            if (hiddenDokterNama) hiddenDokterNama.value = nama_dokter;
            if (selectDokter && id_dokter && nama_dokter) {
                const intervalDokter = setInterval(() => {
                    if ($(selectDokter).hasClass("select2-hidden-accessible")) {
                        clearInterval(intervalDokter);
                        const optionDokter = new Option(nama_dokter, id_dokter, true, true);
                        $(selectDokter).append(optionDokter).trigger('change');
                        QRSignatureAPI(id_dokter, selectDokter.id);
                    }
                }, 100);
            }

        }
    }


</script>
