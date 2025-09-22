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
    <div class="table-responsive">
        <table class="table table-bordered border-dark" id="VisiteProgramTable">
            <thead>
                <tr align="center">
                    <td rowspan="3">Tanggal/Jam</td>
                    <td colspan="6">Intake/masuk</td>
                    <td colspan="4">output / keluar</td>
                </tr>
                <tr align="center">
                    <td colspan="3">Intravenus</td>
                    <td colspan="3">Mulut / NGT</td>
                    <td rowspan="2">urine</td>
                    <td rowspan="2">bab</td>
                    <td rowspan="2">ngt</td>
                    <td rowspan="2">Nama Perawat</td>
                </tr>
                <tr align="center">
                    <td>Jenis Cairan</td>
                    <td>Jumlah</td>
                    <td>Total</td>
                    <td>Jenis Makanan</td>
                    <td>Jumlah</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody id="table-body">
                <td>
                    <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="datetime-local" class="form-control border-dark" name="tanggal_pemeriksaan[]">


                        <div class="text-center">Siang</div>
                        <input type="datetime-local" class="form-control border-dark" name="tanggal_pemeriksaan_2[]">

                        <div class="text-center">Malam</div>
                        <input type="datetime-local" class="form-control border-dark" name="tanggal_pemeriksaan_3[]">
                    </div>

                </td>

                <td>
                    <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="jenis_cairan[]" id="" class="form-control border-dark" style="width:180px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="jenis_cairan_2[]" id="" class="form-control border-dark" style="width:180px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="jenis_cairan_3[]" id="" class="form-control border-dark" style="width:180px">
                    </div>
                </td>

                <td>
                    <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="jumlah[]" id="" class="form-control border-dark" style="width:180px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="jumlah_2[]" id="" class="form-control border-dark" style="width:180px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="jumlah_3[]" id="" class="form-control border-dark" style="width:180px">

                    </div>

                </td>

                <td>
                    <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="total[]" id="" class="form-control border-dark" style="width:180px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="total_2[]" id="" class="form-control border-dark" style="width:180px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="total_3[]" id="" class="form-control border-dark" style="width:180px">
                    </div>
                </td>

                <td>
                    <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="jenis_makanan[]" id="" class="form-control border-dark" style="width:250px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="jenis_makanan_2[]" id="" class="form-control border-dark" style="width:250px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="jenis_makanan_3[]" id="" class="form-control border-dark" style="width:250px">
                    </div>
                </td>

                <td>
                    <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="jumlah_makanan[]" id="" class="form-control border-dark" style="width:80px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="jumlah_makanan_2[]" id="" class="form-control border-dark" style="width:80px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="jumlah_makanan_3[]" id="" class="form-control border-dark" style="width:80px">
                    </div>
                </td>

                <td>
                    <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="total_makanan[]" id="" class="form-control border-dark" style="width:80px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="total_makanan_2[]" id="" class="form-control border-dark" style="width:80px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="total_makanan_3[]" id="" class="form-control border-dark" style="width:80px">
                    </div>
                </td>

                <td>
                    <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="urine[]" id="" class="form-control border-dark" style="width:100px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="urine_2[]" id="" class="form-control border-dark" style="width:100px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="urine_3[]" id="" class="form-control border-dark" style="width:100px">
                    </div>
                </td>

                <td>
                    <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="bab[]" id="" class="form-control border-dark" style="width:100px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="bab_2[]" id="" class="form-control border-dark" style="width:100px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="bab_3[]" id="" class="form-control border-dark" style="width:100px">
                    </div>
                </td>

                <td>
                    <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="ngt[]" id="" class="form-control border-dark" style="width:100px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="ngt_2[]" id="" class="form-control border-dark" style="width:100px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="ngt_3[]" id="" class="form-control border-dark" style="width:100px">
                    </div>
                </td>

                <td>
                    <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <select type="select" name="perawat_pengkaji" id="perawat_pengkaji" class="form-select perawat" style="width: 250px;"></select>

                        <div class="text-center">Siang</div>
                        <select type="select" name="perawat_pengkaji_2" id="perawat_pengkaji_2" class="form-select perawat" style="width: 250px;"></select>

                        <div class="text-center">Malam</div>
                        <select type="select" name="perawat_pengkaji_3" id="perawat_pengkaji_3" class="form-select perawat" style="width: 250px;"></select>

                    </div>


                </td>


                </tr>
            </tbody>
        </table>
    </div>
</div>

<button type="button" class="btn btn-secondary" onclick="tambahBaris()">Tambah Berkas</button>
</table>



<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawat = []
    let dataDokter = []

    $(document).ready(function() {
        let page = 1;

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;

        const select2Configs = [{
                selector: '.diagnosa',
                url: '<?= site_url('backend/admission/getDiagnosa'); ?>'
            },
            {
                selector: '.poli',
                url: '<?= site_url('backend/admission/getPoli'); ?>'
            },
            {
                selector: '.ruangan',
                url: '<?= site_url('backend/admission/getRuangan'); ?>'
            },
            {
                selector: '.perawat',
                url: '<?= site_url('backend/admission/getKaryawan'); ?>'
            },
            {
                selector: '.dokter',
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>'
            },
        ];

        select2Configs.forEach(({
            selector,
            url
        }) => {
            $(selector).select2({
                ajax: {
                    url: url,
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            limit: 100,
                            offset: (page - 1) * 100,
                        };
                    },
                    processResults: function(data) {
                        const {
                            items,
                            more
                        } = data.data;

                        if (selector === '.perawat') dataListPerawat = items;
                        else if (selector === '.dokter') dataDokter = items;

                        const defaultOption = [{
                            id: '',
                            text: '--pilih--'
                        }];
                        return {
                            results: defaultOption.concat(items),
                            pagination: {
                                more: more
                            },
                        };
                    },
                    cache: true,
                },
                placeholder: '--pilih--',
                allowClear: true,
            });

            $(selector).val(null).trigger('change');

            $(selector).on('select2:open', function() {
                $('.select2-results__options').off('scroll').on('scroll', function() {
                    const $this = $(this);
                    if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                        page++;
                        $(selector).select2('data', null);
                    }
                });
            });
        });

        // Event handler perawat_pengkaji utama
        $('#perawat_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_pengkaji');
        });

        // Event handler dokter_pengkaji
        $('#dokter_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_pengkaji');
        });

    });

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    let counter = 2;



    // Fungsi untuk daftarkan event handler select2:select dokter_pengkaji dinamis
    function registerDokterSelectHandlers(maxIndex) {
        for (let i = 2; i <= maxIndex; i++) {
            const selector = `#perawat_pengkaji${i}`;
            if ($(selector).length) {
                $(selector).off('select2:select').on('select2:select', function(e) {
                    const {
                        id_original
                    } = e.params.data;
                    QRSignatureAPI(id_original, `qr_perawat_pengkaji${i}`);
                });
            }
        }
    }

    function tambahBaris() {
        let tbody = document.getElementById("table-body");
        let newRow = document.createElement("tr");

        newRow.innerHTML = `
            <td>
                <div class="d-flex flex-column gap-1">
                <div class="text-center">Pagi</div>
                    <input type="datetime-local" class="form-control border-dark" name="tanggal_pemeriksaan[]">

                    <div class="text-center">Siang</div>
                    <input type="datetime-local" class="form-control border-dark" name="tanggal_pemeriksaan_2[]">

                    <div class="text-center">Malam</div>
                    <input type="datetime-local" class="form-control border-dark" name="tanggal_pemeriksaan_3[]">
                </div>
            </td>
           
            <td>
                <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="jenis_cairan[]" id="" class="form-control border-dark" style="width:180px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="jenis_cairan_2[]" id="" class="form-control border-dark" style="width:180px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="jenis_cairan_3[]" id="" class="form-control border-dark" style="width:180px">
                    </div>
            </td>

            <td>
                <div class="d-flex flex-column gap-1">
                    <div class="text-center">Pagi</div>
                    <input type="text" name="jumlah[]" id=""  class="form-control border-dark">

                    <div class="text-center">Siang</div>
                    <input type="text" name="jumlah_2[]" id=""  class="form-control border-dark">

                    <div class="text-center">Malam</div>
                    <input type="text" name="jumlah_3[]" id=""  class="form-control border-dark">
                
                </div>
            </td>

            <td>
                <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="total[]" id="" class="form-control border-dark" style="width:180px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="total_2[]" id="" class="form-control border-dark" style="width:180px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="total_3[]" id="" class="form-control border-dark" style="width:180px">
                    </div>
            </td>

            <td>
                <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="jenis_makanan[]" id="" class="form-control border-dark" style="width:250px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="jenis_makanan_2[]" id="" class="form-control border-dark" style="width:250px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="jenis_makanan_3[]" id="" class="form-control border-dark" style="width:250px">
                    </div>
            </td>

            <td>
                    <div class="d-flex flex-column gap-1">
                    <div class="text-center">Pagi</div>
                        <input type="text" name="jumlah_makanan[]" id="" class="form-control border-dark" style="width:80px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="jumlah_makanan_2[]" id="" class="form-control border-dark" style="width:80px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="jumlah_makanan_3[]" id="" class="form-control border-dark" style="width:80px">
                    </div>
            </td>

            <td>
                <div class="d-flex flex-column gap-1">
                    <div class="text-center">Pagi</div>
                        <input type="text" name="total_makanan[]" id="" class="form-control border-dark" style="width:80px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="total_makanan_2[]" id="" class="form-control border-dark" style="width:80px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="total_makanan_3[]" id="" class="form-control border-dark" style="width:80px">
                    </div>
            </td>

            <td>
                <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="urine[]" id="" class="form-control border-dark" style="width:100px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="urine_2[]" id="" class="form-control border-dark" style="width:100px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="urine_3[]" id="" class="form-control border-dark" style="width:100px">
                    </div>
            </td>

            <td>
                <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="bab[]" id="" class="form-control border-dark" style="width:100px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="bab_2[]" id="" class="form-control border-dark" style="width:100px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="bab_3[]" id="" class="form-control border-dark" style="width:100px">
                    </div>
            </td>

            <td>
                <div class="d-flex flex-column gap-1">
                        <div class="text-center">Pagi</div>
                        <input type="text" name="ngt[]" id="" class="form-control border-dark" style="width:100px">

                        <div class="text-center">Siang</div>
                        <input type="text" name="ngt_2[]" id="" class="form-control border-dark" style="width:100px">

                        <div class="text-center">Malam</div>
                        <input type="text" name="ngt_3[]" id="" class="form-control border-dark" style="width:100px">
                    </div>
            </td>

            <td>
                <div class="d-flex flex-column gap-1">
                    <div class="text-center">Pagi</div>
                    <select name="dokter_pe[]" id="perawat_pengkaji_pertama_${counter}" class="form-select dokter" style="width: 250px;"></select>

                    <div class="text-center">Siang</div>
                    <select name="dokter_pe_2[]" id="perawat_pengkaji_kedua_${counter}" class="form-select dokter" style="width: 250px;"></select>
                    
                    <div class="text-center">Malam</div>
                    <select name="dokter_pe_3[]" id="perawat_pengkaji_ketiga_${counter}" class="form-select dokter" style="width: 250px;"></select>
                
                </div>

            </td>
        `;

        tbody.appendChild(newRow);


        // Inisialisasi select2 untuk perawat yang baru ditambahkan
        $(`#perawat_pengkaji_pertama_${counter}`).select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                        limit: 100,
                        offset: 0,
                    };
                },
                processResults: function(data) {
                    const defaultOption = [{
                        id: '',
                        text: '--pilih--'
                    }];
                    const combinedItems = defaultOption.concat(data.data.items);
                    return {
                        results: combinedItems,
                        pagination: {
                            more: data.data.more
                        },
                    };
                },
                cache: true,
            },
            placeholder: '--pilih--',
            allowClear: true,
        });


        // Inisialisasi select2 untuk perawat yang baru ditambahkan
        $(`#perawat_pengkaji_kedua_${counter}`).select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                        limit: 100,
                        offset: 0,
                    };
                },
                processResults: function(data) {
                    const defaultOption = [{
                        id: '',
                        text: '--pilih--'
                    }];
                    const combinedItems = defaultOption.concat(data.data.items);
                    return {
                        results: combinedItems,
                        pagination: {
                            more: data.data.more
                        },
                    };
                },
                cache: true,
            },
            placeholder: '--pilih--',
            allowClear: true,
        });

        // Inisialisasi select2 untuk perawat yang baru ditambahkan
        $(`#perawat_pengkaji_ketiga_${counter}`).select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                        limit: 100,
                        offset: 0,
                    };
                },
                processResults: function(data) {
                    const defaultOption = [{
                        id: '',
                        text: '--pilih--'
                    }];
                    const combinedItems = defaultOption.concat(data.data.items);
                    return {
                        results: combinedItems,
                        pagination: {
                            more: data.data.more
                        },
                    };
                },
                cache: true,
            },
            placeholder: '--pilih--',
            allowClear: true,
        });


        // Daftarkan event handler dinamis sesuai counter
        // registerPerawatSelectHandlers(counter);
        registerDokterSelectHandlers(counter);

        counter++;
    }


    function cbCommon(data) {
        const tableBody = document.getElementById("table-body");
        let rows = tableBody.getElementsByTagName("tr");

        const tanggalPemeriksaan = data.get("tanggal_pemeriksaan") || [];
        const tanggalPemeriksaanKedua = data.get("tanggal_pemeriksaan_2") || [];
        const tanggalPemeriksaanKetiga = data.get("tanggal_pemeriksaan_3") || [];

        const DokterPengkajiData = data.get("dokter_pe") || [];
        const DokterPengkajiKeduaData = data.get("dokter_pe_2") || [];
        const DokterPengkajiKetigaData = data.get("dokter_pe_3") || [];

        const Penatalaksana = data.get("jenis_cairan") || [];
        const JenisCairanKedua = data.get("jenis_cairan_2") || [];
        const JenisCairanKetiga = data.get("jenis_cairan_3") || [];

        const jumlah = data.get("jumlah") || [];
        const jumlahKedua = data.get("jumlah_2") || [];
        const jumlahKetiga = data.get("jumlah_3") || [];
        const total = data.get("total") || [];
        const totalKedua = data.get("total_2") || [];
        const totalKetiga = data.get("total_3") || [];

        const jenisMakanan = data.get("jenis_makanan") || [];
        const jenisMakananKedua = data.get("jenis_makanan_2") || [];
        const jenisMakananKetiga = data.get("jenis_makanan_3") || [];

        const jumlahMakanan = data.get("jumlah_makanan") || [];
        const jumlahMakananKedua = data.get("jumlah_makanan_2") || [];
        const jumlahMakananKetiga = data.get("jumlah_makanan_3") || [];

        const totalMakanan = data.get("total_makanan") || [];
        const totalMakananKedua = data.get("total_makanan_2") || [];
        const totalMakananKetiga = data.get("total_makanan_3") || [];

        const urine = data.get("urine") || [];
        const urineKedua = data.get("urine_2") || [];
        const urineKetiga = data.get("urine_3") || [];

        const bab = data.get("bab") || [];
        const babKedua = data.get("bab_2") || [];
        const babKetiga = data.get("bab_3") || [];

        const ngt = data.get("ngt") || [];
        const ngtKedua = data.get("ngt_2") || [];
        const ngtKetiga = data.get("ngt_3") || [];

        const maxLength = Math.max(
            tanggalPemeriksaan.length,
            tanggalPemeriksaanKedua.length,
            tanggalPemeriksaanKetiga.length,
            DokterPengkajiData.length,
            DokterPengkajiKeduaData.length,
            DokterPengkajiKetigaData.length,

            Penatalaksana.length,
            JenisCairanKedua.length,
            JenisCairanKetiga.length,
            jumlah.length,
            jumlahKedua.length,
            jumlahKetiga.length,
            total.length,
            totalKedua.length,
            totalKetiga.length,
            jenisMakanan.length,
            jenisMakananKedua.length,
            jenisMakananKetiga.length,
            jumlahMakanan.length,
            jumlahMakananKedua.length,
            jumlahMakananKetiga.length,
            totalMakanan.length,
            totalMakananKedua.length,
            totalMakananKetiga.length,
            urine.length,
            urineKedua.length,
            urineKetiga.length,
            bab.length,
            babKedua.length,
            babKetiga.length,
            ngt.length,
            ngtKedua.length,
            ngtKetiga.length,
        );

        // Tambah baris jika kurang dari maxLength
        while (rows.length < maxLength) {
            tambahBaris();
            rows = tableBody.getElementsByTagName("tr");
        }

        populateFormFields(data, false);

        for (let i = 0; i < maxLength; i++) {
            const row = rows[i];

            const tanggalInput = row.querySelector('input[name="tanggal_pemeriksaan[]"]');

            const tanggalInputKedua = row.querySelector('input[name="tanggal_pemeriksaan_2[]"]');

            const tanggalInputKetiga = row.querySelector('input[name="tanggal_pemeriksaan_3[]"]');

            const dokterPengkajiInput = row.querySelector('select[name="dokter_pe[]"]');
            const dokterPengkajiKeduaInput = row.querySelector('select[name="dokter_pe_2[]"]');
            const dokterPengkajiKetigaInput = row.querySelector('select[name="dokter_pe_3[]"]');


            const PenatalaksanaInput = row.querySelector('input[name="jenis_cairan[]"]');
            const JenisCairanKeduaInput = row.querySelector('input[name="jenis_cairan_2[]"]');
            const JenisCairanKetigaInput = row.querySelector('input[name="jenis_cairan_3[]"]');

            const jumlahInput = row.querySelector('input[name="jumlah[]"]');
            const jumlahKeduaInput = row.querySelector('input[name="jumlah_2[]"]');
            const jumlahKetigaInput = row.querySelector('input[name="jumlah_3[]"]');

            const totalInput = row.querySelector('input[name="total[]"]');
            const totalKeduaInput = row.querySelector('input[name="total_2[]"]');
            const totalKetigaInput = row.querySelector('input[name="total_3[]"]');
            const jenisMakananInput = row.querySelector('input[name="jenis_makanan[]"]');
            const jenisMakananKeduaInput = row.querySelector('input[name="jenis_makanan_2[]"]');
            const jenisMakananKetigaInput = row.querySelector('input[name="jenis_makanan_3[]"]');

            const jumlahMakananInput = row.querySelector('input[name="jumlah_makanan[]"]');
            const jumlahMakananKeduaInput = row.querySelector('input[name="jumlah_makanan_2[]"]');
            const jumlahMakananKetigaInput = row.querySelector('input[name="jumlah_makanan_3[]"]');

            const totalMakananInput = row.querySelector('input[name="total_makanan[]"]');
            const totalMakananKeduaInput = row.querySelector('input[name="total_makanan_2[]"]');
            const totalMakananKetigaInput = row.querySelector('input[name="total_makanan_3[]"]');

            const urineInput = row.querySelector('input[name="urine[]"]');
            const urineKeduaInput = row.querySelector('input[name="urine_2[]"]');
            const urineKetigaInput = row.querySelector('input[name="urine_3[]"]');

            const babInput = row.querySelector('input[name="bab[]"]');
            const babKeduaInput = row.querySelector('input[name="bab_2[]"]');
            const babKetigaInput = row.querySelector('input[name="bab_3[]"]');

            const ngtInput = row.querySelector('input[name="ngt[]"]');
            const ngtKeduaInput = row.querySelector('input[name="ngt_2[]"]');
            const ngtKetigaInput = row.querySelector('input[name="ngt_3[]"]');

            if (tanggalInput && tanggalPemeriksaan[i]) tanggalInput.value = tanggalPemeriksaan[i];

            if (tanggalInputKedua && tanggalPemeriksaanKedua[i]) tanggalInputKedua.value = tanggalPemeriksaanKedua[i];

            if (tanggalInputKetiga && tanggalPemeriksaanKetiga[i]) tanggalInputKetiga.value = tanggalPemeriksaanKetiga[i];

            if (PenatalaksanaInput && Penatalaksana[i]) PenatalaksanaInput.value = Penatalaksana[i];

            if (JenisCairanKeduaInput && JenisCairanKedua[i]) JenisCairanKeduaInput.value = JenisCairanKedua[i];

            if (JenisCairanKetigaInput && JenisCairanKetiga[i]) JenisCairanKetigaInput.value = JenisCairanKetiga[i];


            if (jumlahInput && jumlah[i]) jumlahInput.value = jumlah[i];
            if (jumlahKeduaInput && jumlahKedua[i]) jumlahKeduaInput.value = jumlahKedua[i];
            if (jumlahKetigaInput && jumlahKetiga[i]) jumlahKetigaInput.value = jumlahKetiga[i];

            if (totalInput && total[i]) totalInput.value = total[i];
            if (totalKeduaInput && totalKedua[i]) totalKeduaInput.value = totalKedua[i];
            if (totalKetigaInput && totalKetiga[i]) totalKetigaInput.value = totalKetiga[i];

            if (jenisMakananInput && jenisMakanan[i]) jenisMakananInput.value = jenisMakanan[i];
            if (jenisMakananKeduaInput && jenisMakananKedua[i]) jenisMakananKeduaInput.value = jenisMakananKedua[i];
            if (jenisMakananKetigaInput && jenisMakananKetiga[i]) jenisMakananKetigaInput.value = jenisMakananKetiga[i];

            if (jumlahMakananInput && jumlahMakanan[i]) jumlahMakananInput.value = jumlahMakanan[i];
            if (jumlahMakananKeduaInput && jumlahMakananKedua[i]) jumlahMakananKeduaInput.value = jumlahMakananKedua[i];
            if (jumlahMakananKetigaInput && jumlahMakananKetiga[i]) jumlahMakananKetigaInput.value = jumlahMakananKetiga[i];

            if (totalMakananInput && totalMakanan[i]) totalMakananInput.value = totalMakanan[i];
            if (totalMakananKeduaInput && totalMakananKedua[i]) totalMakananKeduaInput.value = totalMakananKedua[i];
            if (totalMakananKetigaInput && totalMakananKetiga[i]) totalMakananKetigaInput.value = totalMakananKetiga[i];

            if (urineInput && urine[i]) urineInput.value = urine[i];
            if (urineKeduaInput && urineKedua[i]) urineKeduaInput.value = urineKedua[i];
            if (urineKetigaInput && urineKetiga[i]) urineKetigaInput.value = urineKetiga[i];


            if (babInput && bab[i]) babInput.value = bab[i];
            if (babKeduaInput && babKedua[i]) babKeduaInput.value = babKedua[i];
            if (babKetigaInput && babKetiga[i]) babKetigaInput.value = babKetiga[i];

            if (ngtInput && ngt[i]) ngtInput.value = ngt[i];
            if (ngtKeduaInput && ngtKedua[i]) ngtKeduaInput.value = ngtKedua[i];
            if (ngtKetigaInput && ngtKetiga[i]) ngtKetigaInput.value = ngtKetiga[i];

            if (dokterPengkajiInput && DokterPengkajiData[i - 1]) {
                const nama = DokterPengkajiData[i - 1];
                const option = new Option(nama, nama, true, true);
                $(dokterPengkajiInput).append(option).trigger('change');
            }

            if (dokterPengkajiKeduaInput && DokterPengkajiKeduaData[i - 1]) {
                const nama = DokterPengkajiKeduaData[i - 1];
                const option = new Option(nama, nama, true, true);
                $(dokterPengkajiKeduaInput).append(option).trigger('change');
            }

            if (dokterPengkajiKetigaInput && DokterPengkajiKetigaData[i - 1]) {
                const nama = DokterPengkajiKetigaData[i - 1];
                const option = new Option(nama, nama, true, true);
                $(dokterPengkajiKetigaInput).append(option).trigger('change');
            }



        }

        // Setup perawat_pengkaji utama
        $('#perawat_pengkaji').prop('disabled', false).select2('open').select2('close');
        if (mode === "lihat") $('#perawat_pengkaji').prop('disabled', true);

        setTimeout(() => {
            dataListPerawat?.forEach(v => {
                if (v.text === $('#perawat_pengkaji').select2('data')[0]?.text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_pengkaji');
                }
            });
        }, 1000);


        // Setup perawat_pengkaji dinamis
        for (let i = 2; i <= maxLength; i++) {
            const selector = `#perawat_pengkaji_${i}`;
            $(selector).prop('disabled', false).select2('open').select2('close');
            if (mode === "lihat") $(selector).prop('disabled', true);

            setTimeout(() => {
                dataListPerawat?.forEach(v => {
                    const selectedData = $(selector).select2('data')[0];
                    if (v.text === selectedData?.text) {
                        QRSignatureAPI(v.id_original, `qr_perawat_pengkaji_${i}`);
                    }
                });
            }, 1000);
        }

        // Setup perawat_pengkaji dinamis
        for (let i = 2; i <= maxLength; i++) {
            const selector = `#dokter_pengkaji_${i}`;
            $(selector).prop('disabled', false).select2('open').select2('close');
            if (mode === "lihat") $(selector).prop('disabled', true);

            setTimeout(() => {
                dataDokter?.forEach(v => {
                    const selectedData = $(selector).select2('data')[0];
                    if (v.text === selectedData?.text) {
                        QRSignatureAPI(v.id_original, `qr_dokter_pengkaji_${i}`);
                    }
                });
            }, 1000);
        }

        // Setup dokter_pengkaji
        $('#dokter_pengkaji').prop('disabled', false).select2('open').select2('close');
        if (mode === "lihat") $('#dokter_pengkaji').prop('disabled', true);

        setTimeout(() => {
            dataDokter?.forEach(v => {
                if (v.text === $('#dokter_pengkaji').select2('data')[0]?.text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_pengkaji');
                }
            });
        }, 1000);

        // Daftarkan event handler dinamis sesuai jumlah baris
        registerPerawatSelectHandlers(maxLength);
    }
</script>