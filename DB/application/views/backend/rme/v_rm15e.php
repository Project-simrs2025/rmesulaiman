<!-- BATAS GANTI -->

<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark">
            <tbody>
                <tr>
                    <td>
                        <div class="signature mb-4">
                            <label for="" class="fw-bold mb-3">Laporan :</label>
                            <textarea name="laporan" id="" rows="4" class="form-control border-dark w-100"></textarea>
                        </div>

                        <div class="signature mb-3">
                            <div class="text-decoration-underline fw-bold">PLACENTA & KETUBAN :</div>
                            <div class="d-flex align-items-center mt-3">
                                <div class="col-2">

                                    <label for="" class="ms-2">Lahir Spontan :</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" class="form-control w-100 border-dark" name="spontan">
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <div class="col-2">

                                    <label for="" class="ms-2">Crede :</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" class="form-control w-100 border-dark" name="crede">
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <div class="col-2">

                                    <label for="" class="ms-2">Manual :</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" class="form-control w-100 border-dark" name="manual">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="col-2 w-100">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="radio" class="custom-checkbox-success" name="placenta_ketuban" id="lengkap" value="lengkap" onclick="toggleInput(true)">
                                        <label for="lengkap">Lengkap</label>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="radio" class="custom-checkbox-danger" name="placenta_ketuban" id="tidak" value="tidak" onclick="toggleInput(false)">
                                        <label for="tidak">Tidak</label>
                                    </div>
                                    <div class="w-100">
                                        <input type="text" class="form-control border-dark" name="input_placenta" id="input_placenta" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- placenta items -->
                        <div class="row mt-4">
                            <div class="col-2 d-flex flex-column gap-4 align-items-center">
                                <label for="">Berat Placenta :</label>
                                <label for="">Diameter Placenta :</label>
                                <label for="">Tebal Placenta :</label>
                            </div>
                            <div class="col-10 d-flex flex-column gap-2">
                                <div class="d-flex">
                                    <input type="text" class="form-control border-dark w-25" name="berat_placenta"><span class="ms-1">gram</span>
                                </div>
                                <div class="d-flex">
                                    <input type="text" class="form-control border-dark w-25" name="diameter_placenta"><span class="ms-1">cm</span>
                                </div>
                                <div class="d-flex">
                                    <input type="text" class="form-control border-dark w-25" name="tebal_placenta"><span class="ms-1">cm</span>
                                </div>

                            </div>
                        </div>


                        <!-- tdd items -->
                        <div class="mb-2 text-end">Yang Menolong, </div>
                        <div class="d-flex justify-content-end gap-3 mb-2">
                            <div class="d-flex align-items-center gap-2">
                                <input type="radio" class="custom-checkbox-success" name="yg_menolong" id="dokter" value="dokter">
                                <label for="dokter">Dokter</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="radio" class="custom-checkbox-success" name="yg_menolong" id="bidan" value="bidan">
                                <label for="bidan">Bidan</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <img class="img-responsive center-block mt-2 my-2 " style="width: 10%;" id="qr_dokter_umum" />
                        </div>
                        <div class="d-flex justify-content-end">

                            <select type="select" name="dokter_umum" class="form-select dokter_umum w-25"></select>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    function toggleInput(isLengkap) {
        const inputField = document.getElementById('input_placenta');

        if (isLengkap) {
            // Enable the input and focus it if "Lengkap" is clicked
            inputField.removeAttribute('readonly');
            inputField.focus();
        } else {
            // Set the input as readonly if "Tidak" is clicked
            inputField.setAttribute('readonly', true);
            inputField.value = ''; // Optionally clear the value when "Tidak" is selected
        }
    }

    // ambil tdd dokter
    let dataDokter = []
    const mode = "<?= $mode; ?>"


    function cbCommon(data) {

        $('.dokter_umum').prop('disabled', false)
        $('.dokter_umum').select2('open')
        $('.dokter_umum').select2('close')
        if (mode === "lihat")
            $('.dokter_umum').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('.dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
                }
            })
        }, 500)
        // callMarkerManager();
        // fill image
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

    $(document).ready(function() {
        // ambil diagnosa
        let page = 1; // Track the current page
        // let searchQuery = ''; // Track the search query

        // Initialize Select2
        $('.diagnosa').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
                dataType: 'json',
                delay: 250, // Delay in ms while typing
                data: function(params) {
                    console.log(" params", params)
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

        $('.diagnosa').on('select2:open', function() {
            $('.select2-results__options').on('scroll', function() {
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    page++; // Increment page
                    $('.diagnosa').select2('data', null); // Trigger new data fetch
                }
            });
        });
        // batas diagnosa

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

    })
</script>