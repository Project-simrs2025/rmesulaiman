<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>

        </tbody>
    </table>

    <table class="table table-bordered mt-2" style="border:1px solid black">
        <tbody>
            <tr>
                <td colspan="2">
                    <div class="fw-bold text-center">LAPORAN OPERASI</div>
                </td>
                <td colspan="2">
                    <div class="form-group">
                        <label for="" class="mb-2">No Rekam Medis :</label>
                        <input type="text" class="form-control border-dark" name="no_rm">
                    </div>
                    <div class="form-group">
                        <label for="" class="mb-2">Nama Pasien :</label>
                        <input type="text" class="form-control border-dark" name="nama_pasien">
                    </div>
                    <div class="form-group">
                        <label for="" class="mb-2">Ruangan :</label>
                        <input type="text" class="form-control border-dark" name="nama_poli">
                    </div>
                    <div class="form-group">
                        <label for="" class="mb-2">Tanggal Lahir :</label>
                        <input type="date" class="form-control border-dark" name="tanggal_lahir">
                    </div>
                </td>
            </tr>
            <tr>
                <td class="col-3">
                    <label for="">Nama Ahli Bedah :</label>
                    <!-- <div class="my-2 text-center">
                        <img class="img-responsive center-block" style="width: 15%;" id="qr_dokter_ahli_bedah" />
                    </div> -->
                    <select type="select" name="dokter_ahli_bedah" id="dokter_ahli_bedah" class="form-select dokter_umum" style="width: 400px;"></select>
                </td>
                <td colspan="2">
                    <label for="">Nama Asistant :</label>
                    <!-- <div class="my-2 text-center">
                        <img class="img-responsive center-block" style="width: 15%;" id="qr_perawat_asistant" />
                    </div> -->
                    <select type="select" name="perawat_asistant" id="perawat_asistant" class="form-select perawat" style="width: 100%;"></select>
                </td>
                <td>
                    <label for="">Nama Perawat :</label>
                    <!-- <div class="my-2 text-center">
                        <img class="img-responsive center-block" style="width: 15%;" id="qr_perawat_jaga" />
                    </div> -->
                    <select type="select" name="perawat_jaga" id="perawat_jaga" class="form-select perawat" style="width: 100%;"></select>
                </td>
            </tr>
            <tr>
                <td colspan="" class="col-3">
                    <label for="">Nama Ahli Anasthesi :</label>
                    <!-- <div class="my-2 text-center">
                        <img class="img-responsive center-block" style="width: 15%;" id="qr_dokter_ahli_anasthesi" />
                    </div> -->
                    <select type="select" name="dokter_ahli_anasthesi" id="dokter_ahli_anasthesi" class="form-select dokter_umum" style="width: 400px;"></select>
                </td>
                <td colspan="3">
                    <div style="">
                        <label for="">Jenis Anasthesi</label>
                        <textarea class="form-control border-dark" name="jenis_anasthesi" rows="3"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="">Diagnosis pro- Operatif :</label>
                    <div>
                        <select type="select" name="diagnosa_pro_operatif" id="" class="form-select diagnosa " style="width: 100%;">
                        </select>
                    </div>
                </td>
                <!-- <td colspan="2">
                    <label for="">Macam Pembedahan</label>
                    <div class="form-group">
                        <input type="checkbox" name="bedah_besar" id="bedah_besar" class="custom-checkbox-success"> <label for="bedah_besar" class="col-2">Besar</label>
                        <input type="checkbox" name="bedah_elective" id="bedah_elective" class="custom-checkbox-success"> <label for="bedah_elective">Elective</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="bedah_sedang" id="bedah_sedang" class="custom-checkbox-success"> <label for="bedah_sedang" class="col-2">Sedang</label>
                        <input type="checkbox" name="bedah_emergency" id="bedah_emergency" class="custom-checkbox-success"> <label for="bedah_emergency">Emergency</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="bedah_kecil" id="bedah_kecil" class="custom-checkbox-success"> <label for="bedah_kecil">Kecil</label>
                    </div>
                </td> -->
            </tr>
            <tr>
                <td colspan="4">
                    <div class="d-flex flex-column gap-2">
                        <label for="" class="flex-shrink-0">Diagnosis post operatif :</label>
                        <select type="select" name="diagnosa2" id="diagnosa2" class="form-select diagnosa" style="width: 100%;">
                        </select>
                    </div>
                </td>
                <!-- <td colspan="2">
                    <div class="d-flex gap-2">
                        <input type="radio" class="custom-checkbox-success" name="diagnosis_post_op" value="ya_post" id="ya_post"> <label for="ya_post" class="col-2">Ya</label>
                        <input type="radio" class="custom-checkbox-danger" name="diagnosis_post_op" value="tidak_post" id="tidak_post"> <label for="tidak_post">Tidak</label>
                </td> -->
            </tr>
            <tr>
                <td colspan="4">
                    <div class="row">
                        <div class="col-8">
                            <label for="">Jaringan yang di – Eksisi / Insisi :</label>
                            <textarea name="jaringan_eksisis" id="" rows="4" class="w-100 form-control border-dark"></textarea>
                        </div>
                        <div class="col flex-column gap-2">
                            <div>Dikirim untuk pemeriksaan P. 4</div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="pemeriksa_ya" id="pemeriksa_ya" class="custom-checkbox-success">
                                <label for="pemeriksa_ya">Ya</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="pemeriksa_Tidak" id="pemeriksa_Tidak" class="custom-checkbox-success">
                                <label for="pemeriksa_Tidak">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="">Nama / Macam Operasi</label>
                        <textarea name="macam_operasi_eksisi" id="" rows="4" class="w-100 form-control border-dark"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tanggal Operasi</label>
                    <input type="date" class="w-100 form-control border-dark" name="tanggal_operasi" value="<?= date('Y-m-d') ?>">
                </td>
                <td>
                    <label for="">Jam Operasi Dimulai :</label>
                    <input type="time" class="w-100 form-control border-dark" value="<?= date('H:i') ?>" name="jam_operasi_mulai">
                </td>
                <td>
                    <label for="">Jam Operasi Selesai</label>
                    <input type="time" class="w-100 form-control border-dark" name="jam_operasi_selesai">
                </td>
                <td>
                    <label for="">Lama Operasi Berlangsung</label>
                    <input type="text" class="w-100 form-control border-dark" name="lama_operasi_berlangsung">
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="">Laporan</label>
                    <textarea name="laporan" id="" rows="4" class="w-100 form-control border-dark"></textarea>
            </tr>
            <!-- <tr>
                <td colspan="4" class="text-center">
                    <div class="d-flex gap-2 flex-column justify-content-end align-items-end">
                        <label for="">Dokter Penanggung Jawab Pasien,</label>
                        <img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_dokter_umum" />
                        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select w-25 dokter_umum"></select>
                    </div>
                </td>
            </tr> -->
        </tbody>
    </table>
</div>

<script>
    let dataDokter = []
    let dataPerawat = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1; // Track the current page
        listDokterUmumAPI()
        listPerawatAPI()

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')



        const fields = [{
                id: 'dokter_umum',
                qrId: 'qr_dokter_umum'
            },
            {
                id: 'dokter_ahli_bedah',
                qrId: 'qr_dokter_ahli_bedah'
            },
            {
                id: 'dokter_ahli_anasthesi',
                qrId: 'qr_dokter_ahli_anasthesi'
            },
            {
                id: 'perawat_jaga',
                qrId: 'qr_perawat_jaga'
            },
            {
                id: 'perawat_asistant',
                qrId: 'qr_perawat_asistant'
            }
        ];

        fields.forEach(({
            id,
            qrId
        }) => {
            $(`#${id}`).on('select2:select', function(e) {
                const {
                    id_original
                } = e.params.data;
                QRSignatureAPI(id_original, qrId);
            });
        });




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

    });


    function cbCommon(data) {
        populateFormFields(data);

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
        }, 1000)

        $('#dokter_ahli_bedah').prop('disabled', false)
        $('#dokter_ahli_bedah').select2('open')
        $('#dokter_ahli_bedah').select2('close')
        if (mode === "lihat")
            $('#dokter_ahli_bedah').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_ahli_bedah').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_ahli_bedah')
                }
            })
        }, 1000)

        $('#dokter_ahli_anasthesi').prop('disabled', false)
        $('#dokter_ahli_anasthesi').select2('open')
        $('#dokter_ahli_anasthesi').select2('close')
        if (mode === "lihat")
            $('#dokter_ahli_anasthesi').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_ahli_anasthesi').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_ahli_anasthesi')
                }
            })
        }, 1000)

        $('#perawat_jaga').prop('disabled', false)
        $('#perawat_jaga').select2('open')
        $('#perawat_jaga').select2('close')
        if (mode === "lihat")
            $('#perawat_jaga').prop('disabled', true)

        setTimeout(() => {
            // console.log(dataDokter)
            dataPerawat?.map(v => {
                if (v.text === $('#perawat_jaga').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_jaga')
                }
            })
        }, 1000)

        $('#perawat_asistant').prop('disabled', false)
        $('#perawat_asistant').select2('open')
        $('#perawat_asistant').select2('close')
        if (mode === "lihat")
            $('#perawat_asistant').prop('disabled', true)

        setTimeout(() => {
            // console.log(dataDokter)
            dataPerawat?.map(v => {
                if (v.text === $('#perawat_asistant').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_asistant')
                }
            })
        }, 1000)
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
    // batas

    function listPerawatAPI() {
        $('.perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan'); ?>',
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
                    dataPerawat = items
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
</script>