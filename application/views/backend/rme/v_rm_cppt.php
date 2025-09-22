<!-- Informasi Pasien -->
<div class="row my-3">
    <div class="col-6">
        <?php
        $dataform1 = [
            ['nama' => "Nama Pasien", 'name' => "nama_pasien", 'tipe' => "text", 'holder' => "Masukkan Nama Pasien", 'status' => "disabled"],
            ['nama' => "Tanggal Lahir", 'name' => "tanggal_lahir", 'tipe' => "text", 'holder' => "Tanggal Lahir", 'status' => "disabled"],
            ['nama' => "Jenis Kelamin", 'name' => "jenkel", 'tipe' => "text", 'holder' => "Jenis Kelamin", 'status' => "disabled"],
            ['nama' => "Nomor Rm", 'name' => "no_rm", 'tipe' => "text", 'holder' => "Masukkan Nomor RM", 'status' => "disabled"],
        ];
        foreach ($dataform1 as $a) {
            $val = isset($a['values']) ? $a['values'] : '';
            echo "<div class='form-group'>";
            echo "<label>{$a['nama']} :</label>";
            echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$val}' {$a['status']}>";
            echo "</div>";
        }
        ?>
    </div>

    <div class="col-6">
        <?php
        $dataform2 = [
            ['nama' => "Agama", 'name' => "nama_agama", 'tipe' => "text", 'holder' => "", 'status' => "disabled"],
            ['nama' => "Suku/ Bangsa", 'name' => "nama_suku", 'tipe' => "text", 'holder' => "Nama Suku", 'status' => "disabled"],
            ['nama' => "Alamat", 'name' => "alamat", 'tipe' => "text", 'holder' => "", 'status' => "disabled"],
            ['nama' => "NIK", 'name' => "nik", 'tipe' => "text", 'holder' => "", 'status' => "disabled"],
        ];
        foreach ($dataform2 as $a) {
            $val = isset($a['values']) ? $a['values'] : '';
            echo "<div class='form-group'>";
            echo "<label>{$a['nama']} :</label>";
            echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$val}' {$a['status']}>";
            echo "</div>";
        }
        ?>
    </div>
</div>


<!-- Tabel CPPT -->
<div class="row">
    <div class="col-12">
        <div class="table-responsive" style="overflow-x: auto;">
            <table class="table table-bordered mt-4 border-dark" id="VisiteProgramTable" style="min-width: 1500px; table-layout: fixed;">
                <thead class="table-bordered border-dark">
                    <tr>
                        <th class="text-center" style="width: 60px;">No</th>
                        <th class="text-center" style="width: 300px;">Tanggal/ Jam</th>
                        <th class="text-center" style="width: 300px;">Profesional Pemberi Asuhan</th>
                        <th class="text-center" style="width: 400px;">Hasil Asesmen Pasien dan Pemberian Pelayanan</th>
                        <th class="text-center" style="width: 300px;">Instruksi PPA</th>
                        <th class="text-center" style="width: 300px;">Review & Verifikasi DPJP</th>
                        <th class="text-center" style="width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <div class="my-3 text-start">
                <button type="button" class="btn btn-dark" onclick="addRow()">
                    <i class="bi bi-plus"></i> Tambah Baris
                </button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    const mode = "<?= $mode; ?>";

    $(document).ready(function() {
        // Inisialisasi awal jika sudah ada row
        reindexTable();
    });

    // ==============================
    // Select2 Init
    // ==============================
    function initPerawatSelect2($el) {
        $el.select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan'); ?>',
                dataType: 'json',
                delay: 250,
                data: params => ({ q: params.term }),
                processResults: data => ({
                    results: data.data.items,
                    pagination: { more: data.data.more }
                }),
                cache: true
            },
            placeholder: 'Cari perawat...'
        }).on('select2:select', function(e) {
            $(this).closest('td').find('.perawat_nama').val(e.params.data.text);
        });
    }

    function initDokterSelect2($el) {
        $el.select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
                dataType: 'json',
                delay: 250,
                data: params => ({ q: params.term }),
                processResults: data => ({
                    results: data.data.items,
                    pagination: { more: data.data.more }
                }),
                cache: true
            },
            placeholder: 'Cari dokter...'
        }).on('select2:select', function(e) {
            $(this).closest('td').find('.dokter_umum_nama').val(e.params.data.text);
        });
    }

    // ==============================
    // Tambah Row Baru
    // ==============================
    function addRow() {
        const table = document.querySelector("#VisiteProgramTable tbody");
        const rowCount = table.rows.length;
        const newRow = table.insertRow(rowCount);
        newRow.classList.add("text-center");

        const cells = [
            `<p class="row-num">${rowCount + 1}</p>`,
            `<div class="d-flex flex-column">
                <input type="datetime-local" name="tanggal_jam[]" class="form-control border-dark mb-2">
                <button type="button" class="btn btn-sm btn-secondary" onclick="copyRow(this)"><i class="fa fa-arrow-down"></i> Paste Seluruh Baris</button>
             </div>`,
            `<textarea name="ppa[]" rows="4" class="form-control border-dark"></textarea><br/>
             <span>Nama Pemberi profesional asuhan</span><br/>
             <select name="perawat[]" class="form-select perawat" style="width:250px;"></select>
             <input type="hidden" name="perawat_nama[]" class="perawat_nama">`,
            `<div class="d-flex flex-column gap-2">
                <div class="d-flex align-items-start">
                    <input type="text" class="form-control border-dark" value="S" name="soap_sKet[]" style="width:50px">
                    <textarea name="soap_s[]" rows="2" class="form-control border-dark"></textarea>
                </div>
                <div class="d-flex align-items-start">
                    <input type="text" class="form-control border-dark" value="O" name="soap_oKet[]" style="width:50px">
                    <textarea name="soap_o[]" rows="2" class="form-control border-dark"></textarea>
                </div>
                <div class="d-flex align-items-start">
                    <input type="text" class="form-control border-dark" value="A" name="soap_aKet[]" style="width:50px">
                    <textarea name="soap_a[]" rows="2" class="form-control border-dark"></textarea>
                </div>
                <div class="d-flex align-items-start">
                    <input type="text" class="form-control border-dark" value="P" name="soap_pKet[]" style="width:50px">
                    <textarea name="soap_p[]" rows="2" class="form-control border-dark"></textarea>
                </div>
             </div>`,
            `<textarea name="instruksi[]" rows="4" class="form-control border-dark"></textarea>`,
            `<select name="dokter_umum[]" class="form-select dokter_umum" style="width:250px;"></select>
             <input type="hidden" name="dokter_umum_nama[]" class="dokter_umum_nama">`
        ];


        cells.forEach((c, i) => newRow.insertCell(i).innerHTML = c);

        // init select2 langsung
        initPerawatSelect2($(newRow).find('.perawat'));
        initDokterSelect2($(newRow).find('.dokter_umum'));

        reindexTable();

        // Sanitize semua input/textarea real-time di row baru
        const inputs = newRow.querySelectorAll('input[type="text"], textarea');
        inputs.forEach(input => {
            input.addEventListener('input', function () {
                const original = this.value;
                const sanitized = sanitizeInput(original);
                if (original !== sanitized) {
                    this.value = sanitized;
                }
            });
        });
        // === AUTO SCROLL KE TABLE YANG DITAMBAHKAN ===
        newRow.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });

        return newRow;
    }

    // ==============================
    // Reindex Table (No urut & ID unik)
    // ==============================
    function reindexTable() {
        const rows = document.querySelectorAll("#VisiteProgramTable tbody tr");
        rows.forEach((tr, idx) => {
            tr.querySelector(".row-num").textContent = idx + 1;
        });
    }

    // ==============================
    // Copy Row tertentu → ke bawah
    // ==============================
    function copyRow(btn) {
        const tr = btn.closest("tr");
        const data = {};

        // whitelist field yang boleh dicopy
        const whitelist = [
            "tanggal_jam", "ppa", "soap_s", "soap_o", "soap_a", "soap_p",
            "instruksi", "perawat", "perawat_nama", "dokter_umum", "dokter_umum_nama"
        ];

        whitelist.forEach(name => {
            const el = tr.querySelector(`[name="${name}[]"]`);
            if (el) data[name] = el.value;
        });

        const newTr = addRow();

        if (data["tanggal_jam"]) newTr.querySelector('input[type="datetime-local"]').value = data["tanggal_jam"];
        if (data["ppa"]) newTr.querySelector('textarea[name="ppa[]"]').value = data["ppa"];
        if (data["soap_s"]) newTr.querySelector('textarea[name="soap_s[]"]').value = data["soap_s"];
        if (data["soap_o"]) newTr.querySelector('textarea[name="soap_o[]"]').value = data["soap_o"];
        if (data["soap_a"]) newTr.querySelector('textarea[name="soap_a[]"]').value = data["soap_a"];
        if (data["soap_p"]) newTr.querySelector('textarea[name="soap_p[]"]').value = data["soap_p"];
        if (data["instruksi"]) newTr.querySelector('textarea[name="instruksi[]"]').value = data["instruksi"];

        // select2 langsung inject
        const $perawat = $(newTr).find('.perawat');
        if (data["perawat_nama"]) {
            const opt = new Option(data["perawat_nama"], data["perawat"] || data["perawat_nama"], true, true);
            $perawat.append(opt).trigger('change');
            newTr.querySelector('.perawat_nama').value = data["perawat_nama"];
        }

        const $dokter = $(newTr).find('.dokter_umum');
        if (data["dokter_umum_nama"]) {
            const opt = new Option(data["dokter_umum_nama"], data["dokter_umum"] || data["dokter_umum_nama"], true, true);
            $dokter.append(opt).trigger('change');
            newTr.querySelector('.dokter_umum_nama').value = data["dokter_umum_nama"];
        }
        newTr.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });
        // pastikan select2 tetap jalan
        initPerawatSelect2($(newTr).find('.perawat'));
        initDokterSelect2($(newTr).find('.dokter_umum'));
        reindexTable(); // ⬅️ update nomor baris
    }
    function sanitizeInput(text) {
        return text
            // Buang tag HTML berbahaya
            .replace(/</g, "")
            .replace(/>/g, "")
            // Normalisasi newline & tab
            .replace(/\r\n/g, "\n")
            .replace(/\r/g, "\n")
            // Hapus karakter kontrol aneh (0x00–0x1F) KECUALI newline (\n) & tab (\t)
            .replace(/[\x00-\x08\x0B\x0C\x0E-\x1F]/g, "")
            // ⛔ tidak ada .trim() lagi
    }



    // ==============================
    // Populate dari JSON / FormData
    // ==============================
    function cbCommon(data) {
        const table = document.querySelector("#VisiteProgramTable tbody");
        table.innerHTML = "";

        let dataObj = {};
        if (typeof data.entries === "function") {
            for (const [key, value] of data.entries()) {
                if (key.endsWith("[]")) {
                    const cleanKey = key.replace("[]", "");
                    if (!dataObj[cleanKey]) dataObj[cleanKey] = [];
                    dataObj[cleanKey].push(value);
                } else {
                    dataObj[key] = value;
                }
            }
        } else {
            dataObj = data;
        }

        const rowCount = dataObj["ppa"]?.length || 0;

        for (let i = 0; i < rowCount; i++) {
            const tr = addRow();

            tr.querySelector('input[type="datetime-local"]').value = dataObj['tanggal_jam']?.[i] || '';
            tr.querySelector('textarea[name="ppa[]"]').value = dataObj['ppa']?.[i] || '';
            tr.querySelector('textarea[name="soap_s[]"]').value = dataObj['soap_s']?.[i] || '';
            tr.querySelector('textarea[name="soap_o[]"]').value = dataObj['soap_o']?.[i] || '';
            tr.querySelector('textarea[name="soap_a[]"]').value = dataObj['soap_a']?.[i] || '';
            tr.querySelector('textarea[name="soap_p[]"]').value = dataObj['soap_p']?.[i] || '';
            tr.querySelector('textarea[name="instruksi[]"]').value = dataObj['instruksi']?.[i] || '';

            const $perawat = $(tr).find('.perawat');
            if (dataObj['perawat_nama']?.[i]) {
                const opt = new Option(dataObj['perawat_nama'][i], dataObj['perawat']?.[i] || dataObj['perawat_nama'][i], true, true);
                $perawat.append(opt).trigger('change');
                tr.querySelector('.perawat_nama').value = dataObj['perawat_nama'][i];
            }

            const $dokter = $(tr).find('.dokter_umum');
            if (dataObj['dokter_umum_nama']?.[i]) {
                const opt = new Option(dataObj['dokter_umum_nama'][i], dataObj['dokter_umum']?.[i] || dataObj['dokter_umum_nama'][i], true, true);
                $dokter.append(opt).trigger('change');
                tr.querySelector('.dokter_umum_nama').value = dataObj['dokter_umum_nama'][i];
            }
        }

        reindexTable();
    }
</script>

