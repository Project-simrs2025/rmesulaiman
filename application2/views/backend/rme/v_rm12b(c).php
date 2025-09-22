<!-- rm 12b -->

<div class="row my-3">
    <div class="col-6">
        <?php
        // Daftar input field
        $dataform1 = array(
            array('nama' => "Nomor Rm", 'tipe' => "text", 'holder' => "Masukkan Nomor Rm", 'status' => "disabled", 'name' => 'no_rm'),
            array('nama' => "Nama Pasien", 'name' => "nama_pasien", 'tipe' => "text", 'holder' => "Masukkan Nama Pasien", 'status' => "disabled"),
            array('nama' => "Ruang", 'tipe' => "text", 'name' => 'nama_ruangan', 'holder' => "Ruangan Pasien", 'status' => "disabled"),
            array('nama' => "Kelas", 'tipe' => "text", 'name' => 'kelas', 'holder' => "Kelas Pasien", 'status' => "disabled"),
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
            array('nama' => "Tanggal Lahir", 'tipe' => "text", 'holder' => "Tanggal Lahir", 'status' => "disabled", 'name' => 'tanggal_lahir'),
            array('nama' => "Jenis Kelamin", 'name' => "jenkel", 'tipe' => "text", 'holder' => "Jenis Kelamin", 'status' => "disabled", 'name' => 'jenkel'),
            array('nama' => "Agama", 'tipe' => "text", 'name' => 'nama_agama', 'holder' => "", 'status' => "disabled"),
            array('nama' => "Suku", 'tipe' => "text", 'values' => "", 'name' => 'nama_suku', 'holder' => "Nama Suku", 'status' => "disabled"),
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
                <th class="col-1 text-center">No</th>
                <th class="col-2 text-center">Tanggal</th>
                <th class="col-2 text-center">Jam</th>
                <th class="col-2 text-center">Catatan Perawat</th>
                <th class="col-2 text-center">Paraf/Nama Perawat</th>
                <th class="col-1 text-center">Action</th>

            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>


<script>
    let dataDokter = [];
    const mode = "<?= $mode; ?>";

    // 🔒 Fungsi sanitasi input
    function sanitizeInput(text) {
        return text
            .replace(/\\n/g, '\n')
            .replace(/\\t/g, '\t')
            .replace(/\\\//g, '/')
            .replace(/\\u2013/g, '–')
            .replace(/[^\w\s.,()*?%\/+=':><\-\n\t]/g, ''); // Hapus karakter aneh tapi pertahankan karakter penting
    }

    // 🔐 Sanitize sebelum form submit
    $('form').on('submit', function() {
        $('textarea[name="catatan_perawat[]"]').each(function() {
            $(this).val(sanitizeInput($(this).val()));
        });

        $('input[type="text"]').each(function() {
            $(this).val(sanitizeInput($(this).val()));
        });
    });

    // 🔁 Inisialisasi dokters
    function listDokterUmumAPI() {
        $('.dokter_umum').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term
                    };
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data;
                    dataDokter = items;
                    return {
                        results: items,
                        pagination: {
                            more: more
                        }
                    };
                },
                cache: true
            },
            placeholder: 'Search for items...',
        });
    }

    // 📦 Buat QR dokter
    function QRSignatureAPI(id, imgElementId) {
        const imgElement = document.getElementById(imgElementId);
        if (!imgElement) return;
        const qrUrl = `https://api.qrserver.com/v1/create-qr-code/?data=${id}&size=100x100`;
        imgElement.src = qrUrl;
        const hiddenInput = imgElement.closest('td')?.querySelector('input.dokter_umum_qr');
        if (hiddenInput) hiddenInput.value = qrUrl;
    }

    $(document).ready(function() {
        listDokterUmumAPI();
        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;
        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp');
    });

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    // ➕ Fungsi tambah baris
    function addRow() {
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        const rowCount = table.rows.length;
        const newRow = table.insertRow(rowCount);
        newRow.classList.add("text-center");

        const qrId = `qr_dokter_umum_${rowCount}`;
        const selectId = `dokter_umum${rowCount}`;

        const cells = [
            `<p>${rowCount + 1}</p>`,
            `<input type="date" name="tanggal[]" class="form-control border-dark">`,
            `<input type="time" name="jam[]" class="form-control border-dark">`,
            `<textarea name="catatan_perawat[]" rows="4" class="form-control border-dark"></textarea>`,
            `
            <div>
                <img class="img-responsive center-block mt-2" style="width: 30%;" id="${qrId}" />
                <select name="dokter_umum[]" id="${selectId}" class="form-select dokter_umum" style="width: 100%;"></select>
                <input type="hidden" name="dokter_umum_nama[]" class="dokter_umum_nama" value="">
                <input type="hidden" name="dokter_umum_qr[]" class="dokter_umum_qr" value="">
            </div>
            `,
            `<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(this)" id="btn_delete"><span class="bi bi-trash"></span></button>`
        ];

        cells.forEach((cell, index) => {
            const newCell = newRow.insertCell(index);
            newCell.innerHTML = cell;
        });

        // 🔽 Inisialisasi select2 baru
        $(`#${selectId}`).select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term
                    };
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data;
                    return {
                        results: items,
                        pagination: {
                            more: more
                        }
                    };
                },
                cache: true
            },
            placeholder: 'Search for items...'
        });

        // 🔄 QR saat pilih dokter
        $(`#${selectId}`).on('select2:select', function(e) {
            const selectedData = e.params.data;
            const selectedText = selectedData.text;
            const id_original = selectedData.id_original || selectedData.id;
            const hiddenInput = $(this).closest('div').find('.dokter_umum_nama');
            hiddenInput.val(selectedText);
            QRSignatureAPI(id_original, qrId);
        });

        // 🔐 Sanitize saat blur
        const textarea = newRow.querySelector('textarea');
        if (textarea) {
            textarea.addEventListener('blur', function() {
                this.value = sanitizeInput(this.value);
            });
        }

        const inputs = newRow.querySelectorAll('input[type="text"]');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                this.value = sanitizeInput(this.value);
            });
        });

        return newRow;
    }

    // 🗑️ Fungsi hapus baris
    function deleteRow(button) {
        const row = button.parentElement.parentElement;
        row.remove();
    }

    // 🔁 Fungsi render ulang dari data backend
    function cbCommon(data) {
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        table.innerHTML = "";

        const dataLength = data.values().next().value.length;

        const params = Array.from({
                length: dataLength
            }, (_, rowIndex) =>
            Array.from(data.keys(), (key) => data.get(key)[rowIndex])
        );

        for (let i = 0; i < params.length; i++) {
            const [tanggal, jam, catatan, id_dokter, nama_dokter] = params[i];
            const tr = addRow();

            const inputs = tr.getElementsByTagName("input");
            const textarea = tr.querySelector("textarea");
            const select = tr.querySelector("select.dokter_umum");
            const qrImg = tr.querySelector("img");

            if (inputs.length >= 3) {
                inputs[0].value = tanggal;
                inputs[1].value = jam;
            }

            if (textarea) {
                textarea.value = catatan;
            }

            const optionInterval = setInterval(() => {
                if ($(select).hasClass("select2-hidden-accessible")) {
                    clearInterval(optionInterval);
                    const newOption = new Option(nama_dokter, id_dokter, true, true);
                    $(select).append(newOption).trigger('change');

                    const hidden = tr.querySelector("input.dokter_umum_nama");
                    if (hidden) hidden.value = nama_dokter;

                    if (qrImg) {
                        const qrUrl = `https://api.qrserver.com/v1/create-qr-code/?data=${id_dokter}&size=100x100`;
                        qrImg.src = qrUrl;
                        const hiddenQR = tr.querySelector("input.dokter_umum_qr");
                        if (hiddenQR) hiddenQR.value = qrUrl;
                    }
                }
            }, 100);
        }
    }
</script>