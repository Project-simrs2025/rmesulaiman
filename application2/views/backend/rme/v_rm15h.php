<!-- rm 15h -->

<div class="row mt-4">
    <div class="form-group">
        <label for="no_rm">No. Rekam Medis :</label>
        <input type="text" class="form-control border-dark no_rm" name="no_rm" id="no_rm" placeholder="Masukkan No Rekam Medis" value="">

    </div>
    <div class="form-group">
        <label for="nama_pasien">Nama Pasien :</label>
        <input type="text" class="form-control border-dark nama_pasien" name="nama_pasien" id="nama_pasien" placeholder="Masukkan Nama Pasien" value="">

    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir :</label>
        <input type="text" class="form-control border-dark tanggal_lahir" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Nama Dokter" value="">

    </div>
    <div class="form-group">
        <label for="jenkel">Jenis Kelamin :</label>
        <input type="text" class="form-control border-dark jenkel" name="jenkel" id="jenkel" placeholder="Masukkan Jenis Kelamin" value="[ISI NILAI $jenkel]">

    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control border-dark kelas" name="kelas" id="kelas" placeholder="Masukkan Nama Kelas / Ruang">
    </div>
    <div class="form-group">
        <label for="ruang">Ruangan</label>
        <input type="text" class="form-control border-dark ruang" name="ruang" id="ruang" placeholder="Masukkan Nama ruang / Ruang">
    </div>
</div>

<div class="row mt-2">
    <div class="form-group">
        <label for="">Tanggal Masuk :</label>
        <input type="text" name="tgl_admit" class="form-control border-dark">
    </div>
    <div class="form-group">
        <label for="">Tanggal Keluar :</label>
        <input type="text" name="tgl_discharge" class="form-control border-dark">
    </div>
</div>


<br>
<!-- table -->
<table class="table-bordered border-dark w-100">
    <tbody>
        <tr>
            <td>
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="form-group">
                            <label for="">Diagnosa Masuk</label>
                            <select type="select" name="diagnosa1" class="form-select diagnosa w-75">
                            </select>
                        </div>
                    </div>

                    <div class="row">

                        <div class="d-block my-2"> Pemeriksaan Penunjang ( yang mendukung diagnosis pasien ) :</div>

                        <div class="form-group">
                            <label for="" class="ms-3">a. Laboratorium</label>
                            <input type="text" class="form-control border-dark w-100" name="lab">
                        </div>
                        <div class="form-group">
                            <label for="" class="ms-3">b. Radiologi</label>
                            <input type="text" class="form-control border-dark w-100" name="radiologi">
                        </div>
                        <div class="form-group">
                            <label for="" class="ms-3">c. Lain-lain</label>
                            <input type="text" class="form-control border-dark w-100" name="lain-lain">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="">Tindakan / Operasi :</label>
                            <input type="text" class="form-control border-dark w-100" name="tindakan_operasi">
                        </div>
                    </div>

                    <div>
                        <div>Keadaan Pasien Pulang :</div>
                        <div class="row mt-3 ms-5">
                            <div class="col-md-6 d-flex flex-column gap-2">
                                <div>
                                    <input type="radio" class="custom-checkbox-success" value="sembuh" name="keadaan_pasien" id="sembuh">
                                    <label for="sembuh">Sembuh</label>
                                </div>
                                <div>
                                    <input type="radio" class="custom-checkbox-success" name="keadaan_pasien" value="meninggal_kcl" id="meninggal_kcl">
                                    <label for="meninggal_kcl">Meninggal < 48 jam</label>
                                </div>
                                <div>
                                    <input type="radio" class="custom-checkbox-success" name="keadaan_pasien" value="paps" id="paps">
                                    <label for="paps">PAPS</label>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex flex-column gap-2 m-auto">
                                <div>
                                    <input type="radio" class="custom-checkbox-success" name="keadaan_pasien" value="membaik" id="membaik">
                                    <label for="membaik">Membaik</label>
                                </div>
                                <div>
                                    <input type="radio" class="custom-checkbox-success" name="keadaan_pasien" value="meninggal_besar" id="meninggal_besar">
                                    <label for="meninggal_besar">Meninggal > 48 jam</label>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <label for="dirujuk" class="col-2">Dirujuk ke</label>
                                    <input type="text" class="form-control border-dark" name="dirujuk" id="dirujuk">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="form-group">
                            <label for="">Diagnosa Akhir</label>
                            <select type="select" name="diagnosa2" class="form-select diagnosa w-75">
                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <div class="text-end d-flex justify-content-end align-items-center">
                            <span class="mx-2"> <?= $city_sign ?>, </span> <input type="date" value="<?= date('Y-m-d'); ?>" name="tgl_city" class="form-control border-dark w-25">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-6 text-center">
                            <div>
                                <label for="">Pasien</label>
                            </div>
                            <div class="text-center my-2">
                                <img class="marker-image border-dark border" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 150px; height:100px" data-input-name="image_drawer_state_image_1" />
                                <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                                    value="" />
                            </div>
                            <input type="text" name="nama_hub_pasien_ttd" id="" class="form-control border-dark" value="<?= $nama_hub_pasienl  ?>">
                        </div>
                        <div class="col-6 text-center">
                            <div>
                                <label for="" class="text-center mb-2">Dokter</label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <img class="img-responsive center-block mt-2 my-2 " style="width: 20%;" id="qr_dokter_umum" />
                            </div>
                            <div class="d-flex justify-content-end">
                                <select type="select" name="dokter_umum" class="form-select perawat w-100" id="dokter_umum"></select>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

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