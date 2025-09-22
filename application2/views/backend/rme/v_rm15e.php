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
                            <select type="select" name="dokter_umum" class="form-select perawat w-25" id="dokter_umum"></select>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawat = []
    let dataDokter = []

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);


        $('#dokter_umum').prop('disabled', false)
        $('#dokter_umum').select2('open')
        $('#dokter_umum').select2('close')
        if (mode === "lihat")
            $('#dokter_umum').prop('disabled', true)

        setTimeout(() => {
            dataListPerawat?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
                }
            })
        }, 1000)



    }

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

                        // Assign ke variabel tertentu jika perlu
                        if (selector === '.perawat') {
                            dataListPerawat = items;
                        } else if (selector === '.dokter') {
                            dataDokter = items;
                        }

                        const defaultOption = [{
                            id: '',
                            text: '--pilih--'
                        }];
                        const combinedItems = defaultOption.concat(items);

                        return {
                            results: combinedItems,
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

            // Infinite scroll handler
            $(selector).on('select2:open', function() {
                $('.select2-results__options').off('scroll').on('scroll', function() {
                    const $this = $(this);
                    if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                        page++;
                        $(selector).select2('data', null); // Optional
                    }
                });
            });
        });


        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });

        //================ new =====================//
    });
</script>