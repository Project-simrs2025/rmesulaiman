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
            echo "<div class='form-group'>";
            echo "<label>{$a['nama']} :</label>";
            echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>";
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
            echo "<div class='form-group'>";
            echo "<label>{$a['nama']} :</label>";
            echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>";
            echo "</div>";
        }
        ?>
    </div>
</div>

<!-- Tabel CPPT -->
<div class="row">
    <div class="col-12">
        <div class="my-3 text-end">
            <button type="button" class="btn btn-dark" onclick="addRow()">
                <i class="bi bi-plus"></i> Tambah Baris
            </button>
        </div>

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
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
const mode = "<?= $mode; ?>";
let dataDokter = [];

$(document).ready(function () {
    listDokterUmumAPI();
    listPerawatAPI();
});

function listPerawatAPI() {
    $('.perawat').select2({
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
        placeholder: 'Cari ',
    });
}

function listDokterUmumAPI() {
    $('.dokter_umum').select2({
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
        placeholder: 'Cari dokter...',
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
        `<input type="datetime-local" name="tanggal_jam[]" class="form-control border-dark" style="width:250px;">`,
        `<textarea name="ppa[]" rows="4" class="form-control border-dark" style="width:250px;"></textarea><br/>
         <span>Nama Pemberi profesional asuhan</span><br/>
         <select name="perawat[]" id="${selectIdPerawat}" class="form-select perawat" style="width:250px;"></select>
         <input type="hidden" name="perawat_nama[]" class="perawat_nama">`,
        `<div class="d-flex flex-column gap-2">
            <div class="d-flex align-items-start gap-2">
            <label class="pt-2" style="width:20px">S:</label>
            <textarea name="soap_s[]" rows="2" class="form-control border-dark" style="width:250px;"></textarea></div>
            <div class="d-flex align-items-start gap-2"><label class="pt-2" style="width:20px">O:</label><textarea name="soap_o[]" rows="2" class="form-control border-dark"></textarea></div>
            <div class="d-flex align-items-start gap-2"><label class="pt-2" style="width:20px">A:</label><textarea name="soap_a[]" rows="2" class="form-control border-dark"></textarea></div>
            <div class="d-flex align-items-start gap-2"><label class="pt-2" style="width:20px">P:</label><textarea name="soap_p[]" rows="2" class="form-control border-dark"></textarea></div>
         </div>`,
        `<div class="kolom-instruksi">
            <textarea name="instruksi[]" rows="4" class="form-control border-dark" style="width:250px;"></textarea>
        </div>`,
        `<div class="kolom-dpjp">
            <select name="dokter_umum[]" id="${selectId}" class="form-select dokter_umum" style="width:250px;"></select>
            <input type="hidden" name="dokter_umum_nama[]" class="dokter_umum_nama">
        </div>`

    ];

    cells.forEach((cell, i) => {
        const newCell = newRow.insertCell(i);
        newCell.innerHTML = cell;
    });

    $(`#${selectIdPerawat}`).select2({
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
    }).on('select2:select', function (e) {
        $(this).closest('td').find('.perawat_nama').val(e.params.data.text);
    });

    $(`#${selectId}`).select2({
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
    }).on('select2:select', function (e) {
        $(this).closest('td').find('.dokter_umum_nama').val(e.params.data.text);
    });

    return newRow;
}

function cbCommon(data) {
    const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
    table.innerHTML = "";

    const dataObj = Object.fromEntries(data.entries());
    const rowCount = dataObj["ppa"]?.length || 0;

    for (let i = 0; i < rowCount; i++) {
        const tr = addRow(); // Tambah baris baru
        const tanggal_jam = dataObj['tanggal_jam']?.[i] || '';
        const ppa = dataObj['ppa']?.[i] || '';
        const perawat_nama = dataObj['perawat_nama']?.[i] || '';
        const perawat_id = dataObj['perawat']?.[i] || '';
        const soap_s = dataObj['soap_s']?.[i] || '';
        const soap_o = dataObj['soap_o']?.[i] || '';
        const soap_a = dataObj['soap_a']?.[i] || '';
        const soap_p = dataObj['soap_p']?.[i] || '';
        const instruksi = dataObj['instruksi']?.[i] || '';
        const dokter_nama = dataObj['dokter_umum_nama']?.[i] || '';
        const dokter_id = dataObj['dokter_umum']?.[i] || '';

        // Set nilai field dasar
        tr.querySelector('input[type="datetime-local"]').value = tanggal_jam;
        tr.querySelector('textarea[name="ppa[]"]').value = ppa;
        tr.querySelector('textarea[name="soap_s[]"]').value = soap_s;
        tr.querySelector('textarea[name="soap_o[]"]').value = soap_o;
        tr.querySelector('textarea[name="soap_a[]"]').value = soap_a;
        tr.querySelector('textarea[name="soap_p[]"]').value = soap_p;
        tr.querySelector('textarea[name="instruksi[]"]').value = instruksi;

        setTimeout(() => {
            // === Perawat ===
            const $perawat = $(tr).find('.perawat');
            const perawatHidden = tr.querySelector('.perawat_nama');
            if (perawat_nama) {
                const opt = new Option(perawat_nama, perawat_id || perawat_nama, true, true);
                $perawat.append(opt).trigger('change');
                if (perawatHidden) perawatHidden.value = perawat_nama;
            }

            // === Dokter ===
            const $dokter = $(tr).find('.dokter_umum');
            const dokterHidden = tr.querySelector('.dokter_umum_nama');
            if (dokter_nama) {
                const opt = new Option(dokter_nama, dokter_id || dokter_nama, true, true);
                $dokter.append(opt).trigger('change');
                if (dokterHidden) dokterHidden.value = dokter_nama;
            }
        }, 200);
    }
}


</script>
