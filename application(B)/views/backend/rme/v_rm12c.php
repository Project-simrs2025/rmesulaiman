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
                <td><input type="datetime-local" class="form-control border-dark" name="tanggal_pemeriksaan[]"></td>

                <td><input type="text" name="jenis_cairan[]" id="" class="form-control border-dark" style="width:180px"></td>

                <td><input type="text" name="jumlah[]" id="" class="form-control border-dark" style="width:180px"></td>

                <td><input type="text" name="total[]" id="" class="form-control border-dark" style="width:180px"></td>

                <td><input type="text" name="jenis_makanan[]" id="" class="form-control border-dark" style="width:250px"></td>

                <td><input type="text" name="jumlah_makanan[]" id="" class="form-control border-dark" style="width:80px"></td>

                <td><input type="text" name="total_makanan[]" id="" class="form-control border-dark" style="width:80px"></td>

                <td><input type="text" name="urine[]" id="" class="form-control border-dark" style="width:100px"></td>

                <td><input type="text" name="bab[]" id="" class="form-control border-dark" style="width:100px"></td>

                <td><input type="text" name="ngt[]" id="" class="form-control border-dark" style="width:100px"></td>

                <td>
                    <div class="text-center my-2">
                        <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_perawat_pengkaji" />
                    </div>
                    <select type="select" name="perawat_pengkaji" id="perawat_pengkaji" class="form-select perawat" style="width: 250px;"></select>
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
            <td><input type="datetime-local" class="form-control border-dark" name="tanggal_pemeriksaan[]"></td>
           
            <td><input type="text" name="jenis_cairan[]" id=""  class="form-control border-dark"></td>

            <td><input type="text" name="jumlah[]" id=""  class="form-control border-dark"></td>

            <td><input type="text" name="total[]" id="" class="form-control border-dark"></td>

            <td><input type="text" name="jenis_makanan[]" id="" class="form-control border-dark" style="width:250px"></td>

            <td><input type="text" name="jumlah_makanan[]" id="" class="form-control border-dark" style="width:80px"></td>

            <td><input type="text" name="total_makanan[]" id="" class="form-control border-dark" style="width:80px"></td>

            <td><input type="text" name="urine[]" id="" class="form-control border-dark" style="width:100px"></td>

            <td><input type="text" name="bab[]" id="" class="form-control border-dark" style="width:100px"></td>

            <td><input type="text" name="ngt[]" id="" class="form-control border-dark" style="width:100px"></td>

            <td>
                <div class="text-center my-2">
                    <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_perawat_pengkaji_${counter}" />
                </div>
                 <select name="dokter_pe[]" id="perawat_pengkaji_${counter}" class="form-select dokter" style="width: 250px;"></select>
            </td>
        `;

        tbody.appendChild(newRow);


        // Inisialisasi select2 untuk perawat yang baru ditambahkan
        $(`#perawat_pengkaji_${counter}`).select2({
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

        const DokterPengkajiData = data.get("dokter_pe") || [];
        const Penatalaksana = data.get("jenis_cairan") || [];
        const jumlah = data.get("jumlah") || [];
        const total = data.get("total") || [];
        const jenisMakanan = data.get("jenis_makanan") || [];
        const jumlahMakanan = data.get("jumlah_makanan") || [];
        const totalMakanan = data.get("total_makanan") || [];
        const urine = data.get("urine") || [];
        const bab = data.get("bab") || [];
        const ngt = data.get("ngt") || [];

        const maxLength = Math.max(
            tanggalPemeriksaan.length,
            DokterPengkajiData.length,
            Penatalaksana.length,
            jumlah.length,
            total.length,
            jenisMakanan.length,
            jumlahMakanan.length,
            totalMakanan.length,
            urine.length,
            bab.length,
            ngt.length,
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
            const dokterPengkajiInput = row.querySelector('select[name="dokter_pe[]"]');
            const PenatalaksanaInput = row.querySelector('input[name="jenis_cairan[]"]');
            const jumlahInput = row.querySelector('input[name="jumlah[]"]');
            const totalInput = row.querySelector('input[name="total[]"]');
            const jenisMakananInput = row.querySelector('input[name="jenis_makanan[]"]');
            const jumlahMakananInput = row.querySelector('input[name="jumlah_makanan[]"]');
            const totalMakananInput = row.querySelector('input[name="total_makanan[]"]');
            const urineInput = row.querySelector('input[name="urine[]"]');
            const babInput = row.querySelector('input[name="bab[]"]');
            const ngtInput = row.querySelector('input[name="ngt[]"]');

            if (tanggalInput && tanggalPemeriksaan[i]) tanggalInput.value = tanggalPemeriksaan[i];

            if (PenatalaksanaInput && Penatalaksana[i]) PenatalaksanaInput.value = Penatalaksana[i];

            if (jumlahInput && jumlah[i]) jumlahInput.value = jumlah[i];

            if (totalInput && total[i]) totalInput.value = total[i];

            if (jenisMakananInput && jenisMakanan[i]) jenisMakananInput.value = jenisMakanan[i];

            if (jumlahMakananInput && jumlahMakanan[i]) jumlahMakananInput.value = jumlahMakanan[i];

            if (totalMakananInput && totalMakanan[i]) totalMakananInput.value = totalMakanan[i];

            if (urineInput && urine[i]) urineInput.value = urine[i];
            if (babInput && bab[i]) babInput.value = bab[i];
            if (ngtInput && ngt[i]) ngtInput.value = ngt[i];

            if (dokterPengkajiInput && DokterPengkajiData[i - 1]) {
                const nama = DokterPengkajiData[i - 1];
                const option = new Option(nama, nama, true, true);
                $(dokterPengkajiInput).append(option).trigger('change');
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