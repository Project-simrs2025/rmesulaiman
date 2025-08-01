<!-- rm 15d -->

<!-- table 1 -->
<table class="table-bordered border-dark col-12">
    <tbody class="text-center">
        <th>No</th>
        <th>Kualitas</th>
        <th>Nilai = 0</th>
        <th>Nilai = 1</th>
        <th>Nilai = 2</th>
    </tbody>
    <tbody>
        <?php
        $data = [
            [1, "Tipisnya Cervix", "Tabular 2 cm", "1 – 2 cm", "1 Tipisnya Cervix Tabular 2"],
            [2, "Pembukaan Cervix", "Tertutup", "1 cm", "2 cm"],
            [3, "Konsistensi Cervix", "Ketat", "Lembek, tidak dapat dilebarkan", "Lembek, dapat dilebarkan"],
            [4, "Arah Cervix", "Sacral", "Axial", "Anterior"],
            [5, "Turunnya bagian bawah t/h Spin", "2 cm diatas", "1 – 2 cm", "< 0 – 1 cm"],
        ];
        ?>
        <?php foreach ($data as $row): ?>
            <tr>
                <?php foreach ($row as $cell): ?>
                    <td class="text-center"><?= htmlspecialchars($cell) ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="5">
                <div class="my-2 px-4">
                    <label for="">Jumlah Score :</label> <input type="text" name="jumlah_score" class="form-control border-dark">
                </div>
                <div class="mb-3 px-4">
                    <label for="">Diagnosa Sementara :</label>

                    <div>
                        <select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa w-100">
                        </select>

                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<br>
<div class="row">
    <h4 class="fw-bold text-uppercase">PENGAWASAN / PEMERIKSAAN INTRAPARTUM</h4>
</div>


<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered border-dark" id="VisiteProgramTable">
            <thead>
                <tr align="center">
                    <td rowspan="2">Tanggal/Jam</td>
                    <td rowspan="2">Tekanan Darah</td>
                    <td rowspan="2">D.D.A</td>
                    <td colspan="3">HIS</td>
                    <td rowspan="2">PEMERIKSAAN DOKTER & TANDA TANGAN</td>
                </tr>
                <tr align="center">
                    <td>jarak</td>
                    <td>lama</td>
                    <td>kuat</td>
                </tr>
            </thead>
            <tbody id="table-body">
                <td><input type="datetime-local" class="form-control border-dark" name="tanggal_pemeriksaan[]"></td>

                <td><input type="text" name="tekanan_darah[]" id="" class="form-control border-dark" style="width:100px"></td>

                <td><input type="text" name="dda[]" id="" class="form-control border-dark" style="width:100px"></td>

                <td><input type="text" name="his_jarak[]" id="" class="form-control border-dark" style="width:100px"></td>

                <td><input type="text" name="his_lama[]" id="" class="form-control border-dark" style="width:100px"></td>

                <td><input type="text" name="his_kuat[]" id="" class="form-control border-dark" style="width:100px"></td>

                <td>
                    <div class="text-center my-2">
                        <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_pengkaji" />
                    </div>
                    <select type="select" name="dokter_pengkaji" id="dokter_pengkaji" class="form-select dokter" style="width: 250px;"></select>
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
            const selector = `#dokter_pengkaji_${i}`;
            if ($(selector).length) {
                $(selector).off('select2:select').on('select2:select', function(e) {
                    const {
                        id_original
                    } = e.params.data;
                    QRSignatureAPI(id_original, `qr_dokter_pengkaji_${i}`);
                });
            }
        }
    }

    function tambahBaris() {
        let tbody = document.getElementById("table-body");
        let newRow = document.createElement("tr");

        newRow.innerHTML = `
            <td><input type="datetime-local" class="form-control border-dark" name="tanggal_pemeriksaan[]"></td>
           
            <td><input type="text" name="tekanan_darah[]" id="" class="form-control border-dark" style="width:100px"></td>

            <td><input type="text" name="dda[]" id="" class="form-control border-dark" style="width:100px"></td>

            <td><input type="text" name="his_jarak[]" id="" class="form-control border-dark" style="width:100px"></td>

            <td><input type="text" name="his_lama[]" id="" class="form-control border-dark" style="width:100px"></td>

            <td><input type="text" name="his_kuat[]" id="" class="form-control border-dark" style="width:100px"></td>

            <td>
                <div class="text-center my-2">
                    <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_pengkaji_${counter}" />
                </div>
                 <select name="dokter_pe[]" id="dokter_pengkaji_${counter}" class="form-select dokter" style="width: 250px;"></select>
            </td>
        `;

        tbody.appendChild(newRow);


        // Inisialisasi select2 untuk perawat yang baru ditambahkan
        $(`#dokter_pengkaji_${counter}`).select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
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
        const tekanandarah = data.get("tekanan_darah") || [];
        const dda = data.get("dda") || [];
        const jarak = data.get("his_jarak") || [];
        const lama = data.get("his_lama") || [];
        const kuat = data.get("his_kuat") || [];

        const maxLength = Math.max(
            tanggalPemeriksaan.length,
            DokterPengkajiData.length,
            tekanandarah.length,
            dda.length,
            jarak.length,
            lama.length,
            kuat.length,

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
            const tekanandarahInput = row.querySelector('input[name="tekanan_darah[]"]');
            const ddaInput = row.querySelector('input[name="dda[]"]');
            const jarakInput = row.querySelector('input[name="his_jarak[]"]');
            const lamaInput = row.querySelector('input[name="his_lama[]"]');
            const kuatInput = row.querySelector('input[name="his_kuat[]"]');


            if (tanggalInput && tanggalPemeriksaan[i]) tanggalInput.value = tanggalPemeriksaan[i];

            if (tekanandarahInput && tekanandarah[i]) tekanandarahInput.value = tekanandarah[i];

            if (ddaInput && dda[i]) ddaInput.value = dda[i];

            if (jarakInput && jarak[i]) jarakInput.value = jarak[i];
            if (lamaInput && lama[i]) lamaInput.value = lama[i];
            if (kuatInput && kuat[i]) kuatInput.value = kuat[i];


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