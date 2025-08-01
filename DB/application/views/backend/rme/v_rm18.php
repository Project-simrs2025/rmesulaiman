<!-- Rm 18 -->

<div class="row my-4">
    <div class="col-12">
        <div class="form-group">
            <label for="">NO. REKAM MEDIS :</label>
            <input type="text" class="form-control border-dark" value="<?= $no_rm; ?>" name="no_rm" disabled>
        </div>
        <div class="form-group">
            <label for="">NAMA PASIEN :</label>
            <input type="text" class="form-control border-dark" value="<?= $nama_pasien ?>" name="nama_pasien" disabled>
        </div>
        <div class="form-group">
            <label for="">TGL LAHIR :</label>
            <input type="text" class="form-control border-dark" value="<?= $tgl_lahir; ?>" name="tgl_lahir" disabled>
        </div>
        <div class="form-group">
            <label for="">RUANGAN :</label>
            <input type="text" class="form-control border-dark" value="<?= $nama_ruangan; ?>" name="nama_ruangan" disabled>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="d-block fst-italic">
            <span>Petunjuk Pengisian :</span>
            <span>Diisi oleh perawat ruangan dan perawat IBS</span>
            <span>Isi kolom dengan tulisan yang bisa dibaca dengan jelas</span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3">
            <tbody>
                <tr>
                    <td class="col-6">
                        <label for="">Diagnosa :</label>
                        <select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa">
                    </td>
                    <td colspan="2"><label for="">Rencana Operasi :</label>
                        <input type="text" class="form-control border-dark" name="rencana_operasi">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Nama Dokter Bedah :</label>
                        <input type="text" class="form-control border-dark" name="nama_dokter">
                    </td>
                    <td colspan="2"><label for="">Nama Dokter Anastesi :</label>
                        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select"
                            style="width: 100%;"></select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Tanggal Operasi :</label>
                        <input type="date" class="form-control border-dark" onclick="this.showPicker()" value="<?= date('Y-m-d') ?>" name="tanggal_ope1">
                    </td>
                    <td><label for="">Jam Operasi :</label>
                        <input type="time" class="form-control border-dark" value="<?= date('H:i') ?>" name="jam_ope1">
                    </td>
                    <td>
                        <label for="">Jenis Operasi (Emergency Efektif) :</label>
                        <input type="text" class="form-control border-dark" name="jenis_operasi">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Tanggal Penjadwalan :</label>
                        <input type="date" class="form-control border-dark" onclick="this.showPicker()" value="<?= date('Y-m-d') ?>" name="tanggal_ope1">
                    </td>
                    <td colspan="2"><label for="">Jam Penjadwalan :</label>
                        <input type="time" class="form-control border-dark" value="<?= date('H:i') ?>" name="jam_ope2">
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><label for="">Nama Dan Tanda Tangan Petugas Penjadwalan :</label>
                        <div class="my-2">
                            <img class="img-responsive center-block" style="width: 20%;" id="qr_perawat" />
                        </div>
                        <input type="text" name="nama_perawat_form" id="nama_perawat_form" class="form-control border-dark">
                        <input type="hidden" name="id_perawat_form" id="id_perawat_form">
                    </td>
                    <td colspan="2" class="text-center"><label for="">Nama dan tanda tangan petugas IBS yang menerima penjadwalan :</label>
                        <div class="my-2">
                            <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_list_perawat" />
                        </div>
                        <select type="select" name="list_perawat" id="list_perawat" class="form-select"
                            style="width: 100%;"></select>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {

        populateFormFields(data);

        $('#list_perawat').prop('disabled', false)
        $('#list_perawat').select2('open')
        $('#list_perawat').select2('close')
        if (mode === "lihat")
            $('#list_perawat').prop('disabled', true)

        setTimeout(() => {
            console.log(dataListPerawat)
            dataListPerawat?.map(v => {
                if (v.text === $('#list_perawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_list_perawat')
                }
            })
        }, 500)
        // batas list_perawat


        // dokter umum
        $('#dokter_umum').prop('disabled', false)
        $('#dokter_umum').select2('open')
        $('#dokter_umum').select2('close')
        if (mode === "lihat")
            $('#dokter_umum').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
                }
            })
        }, 500)
        // batas list dokter umum
    }



    // FUNCTION PERAWAT LIST
    function listPerawatAPI() {
        $('#list_perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
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
                    dataListPerawat = items
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
    // BATAS

    function listDokterUmumAPI() {
        $('#dokter_umum').select2({
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
    // batas

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

            });
            const $this = $(this);
            if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                page++; // Increment page
                $('#diagnosa').select2('data', null); // Trigger new data fetch
            }
        });

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

        // dokter list
        listDokterUmumAPI()

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });

        // perawat list
        listPerawatAPI()

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('#list_perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_list_perawat')
        });


    })
</script>