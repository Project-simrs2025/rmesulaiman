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
                        <select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa w-75">
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

<!-- table 2 -->
<br>
<table class="table table-bordered border-dark">
    <tbody class="text-center">
        <tr>
            <th rowspan="2">Tanggal</th>
            <th rowspan="2">Jam</th>
            <th rowspan="2">Tekanan Darah</th>
            <th rowspan="2">D.D.A</th>
            <th colspan="3" class="text-center">HIS</th>
            <th rowspan="2">Pemeriksaan Dokter & Tanda Tangan Dokter</th>
        </tr>
        <tr>
            <th>Jarak</th>
            <th>Lama</th>
            <th>Kuat</th>
        </tr>
    </tbody>
    <tbody id="form-container">
        <?php
        for ($i = 1; $i <= 10; $i++) {
        ?>
            <tr class="text-center">
                <td><input type="date" class="form-control border-dark" name="tanggal_hari_<?php echo $i; ?>"></td>
                <td><input type="time" class="form-control border-dark" name="tanggal_jam_<?php echo $i; ?>"></td>
                <td><input type="text" class="form-control border-dark" name="tekanan_darah_<?php echo $i; ?>"></td>
                <td><input type="text" class="form-control border-dark" name="dda_<?php echo $i; ?>"></td>
                <td><input type="text" class="form-control border-dark" name="jarak_<?php echo $i; ?>"></td>
                <td><input type="text" class="form-control border-dark" name="lama_<?php echo $i; ?>"></td>
                <td><input type="text" class="form-control border-dark" name="kuat_<?php echo $i; ?>"></td>
                <td class="col-3">
                    <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum<?php echo $i; ?>" />
                    <select type="select" name="dokter_umum<?php echo $i; ?>" id="dokter_umum<?php echo $i; ?>" class="form-select dokter_umum" style="width: 80%;"></select>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>



<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1; // Track the current page
        // let searchQuery = ''; // Track the search query

        // Initialize Select2
        $('#diagnosa').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
                dataType: 'json',
                delay: 250, // Delay in ms while typing
                data: function(params) {
                    console.log("params", params)
                    return {
                        q: params.term, // Search query
                        limit: 100, // Number of items per page
                        offset: (page - 1) * 100, // Calculate offset
                    };
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data
                    console.log(items, more)
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
            // minimumInputLength: 0,
        });

        $('#diagnosa').on('select2:open', function() {
            $('.select2-results__options').on('scroll', function() {
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    page++; // Increment page
                    $('#diagnosa').select2('data', null); // Trigger new data fetch
                }
            });
        });

        //global ambil tdd
        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;

        $('#id_perawat_form').val($('#id_perawat_form').val() || id_perawat)
        $('#nama_perawat_form').val($('#nama_perawat_form').val() || nama_perawat)
        $('#nama_perawat_form').attr('disabled', true)

        QRSignatureAPI($('#id_perawat_form').val(), 'qr_perawat')

        listDokterUmumAPI()

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('.dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });
        // batas tdd
    });





    function cbCommon(data) {

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
    })
</script>