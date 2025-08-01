<div class="row">
    <table class="table table-bordered border-dark">
        <tr>
            <td width="40%" class="text-center">DOKUMENTASI
                PEMBERIAN INFORMASI
                TINDAKAN KEDOKTERAN
            </td>
            <td width="60%">
                <div class="d-flex align-items-center gap-2">
                    <div class="col-3">No.rm</div>
                    <input type="text" name="no_rm" id="" class="form-control border-dark">
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-3">Nama</div>
                    <input type="text" name="nama_pasien" id="" class="form-control border-dark">
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-3">Tanggal Lahir</div>
                    <input type="text" name="tanggal_lahir" id="" class="form-control border-dark">
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-3">Umur</div>
                    <input type="text" name="umur" id="" class="form-control border-dark">
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-3">Jenis Kelamin</div>
                    <input type="text" name="jenkel" id="" class="form-control border-dark">
                </div>
            </td>
        </tr>
    </table>

    <table class="table table-bordered border-dark">
        <tr>
            <td align="center" colspan="4">PEMBERIAN INFORMASI</td>
        </tr>
        <tr>
            <td colspan="4">
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Dokter Pelaksana Tindakan</div>: 
                        <!-- <input type="text" class="form-control border-dark" name="nama_dokter"> -->
                         <select type="select" name="dokter_pelaksana" id="dokter_pelaksana" class="form-control w-100 dokter_umum">
                </select>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Pemberi Informasi</div>: <input type="text" class="form-control border-dark" name="nama_pemberi_informasi">
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Penerima Informasi / Pemberi Persetujuan*</div>: <input type="text" class="form-control border-dark" name="nama_penerima_informasi">
                    </div>
                </div>
            </td>
        </tr>
        <tr align="center">
            <td>No</td>
            <td class="col-5">Jenis Informasi</td>
            <td class="col-6">Isi Informasi</td>
            <td>Tanda &check;</td>
        </tr>
        <tr>
            <td align="center">1</td>
            <td>Diagnosis (WD & DD)</td>
            <td>
                <select type="select" name="diagnosa_wd" id="diagnosa_Wd" class="form-control w-100 diagnosa">
                </select>
            </td>
            <td align="center"><input type="checkbox" name="check_diagnosis" id="" class="custom-checkbox-success"></td>
        </tr>
        <tr>
            <td align="center">2</td>
            <td>Dasar Diagnosis</td>
            <td>
                <select type="select" name="diagnosa_dasar" id="diagnosa_dasar" class="form-control w-100 diagnosa">
                </select>
            </td>
            <td align="center"><input type="checkbox" name="check_dasar_diagnosis" id="" class="custom-checkbox-success"></td>
        </tr>
        <tr>
            <td align="center">3</td>
            <td>Tindakan Kedokteran</td>
            <td><input type="text" name="tindakan_kedokteran" id="" class="form-control border-dark"></td>
            <td align="center"><input type="checkbox" name="check_tindakan_kedokteran" id="" class="custom-checkbox-success"></td>
        </tr>
        <tr>
            <td align="center">4</td>
            <td>Indikasi Tindakan</td>
            <td><input type="text" name="indikasi_tindakan" id="" class="form-control border-dark"></td>
            <td align="center"><input type="checkbox" name="check_indikasi_tindakan" id="" class="custom-checkbox-success"></td>
        </tr>
        <tr>
            <td align="center">5</td>
            <td>
                <div>tata cara</div>
                <div class="d-flex align-item-center gap-2">
                    <input type="checkbox" name="tipe_sedasi" id="tipe_sedasi" class="custom-checkbox-success">
                    <label for="tipe_sedasi">Tipe sedasi / anestesi</label>
                </div>
                <div class="d-flex align-item-center gap-2">
                    <input type="checkbox" name="tipe_uraian" id="tipe_uraian" class="custom-checkbox-success">
                    <label for="tipe_uraian" class="col-10">Uraian singkat prosedur dan
                        tahapan yang penting</label>
                </div>
            </td>
            <td><input type="text" name="tata_cara" id="" class="form-control border-dark"></td>
            <td align="center"><input type="checkbox" name="check_tata_cara" id="" class="custom-checkbox-success"></td>
        </tr>
        <tr>
            <td align="center">6</td>
            <td>Tujuan </td>
            <td><input type="text" name="tujuan_informasi" id="" class="form-control border-dark"></td>
            <td align="center"><input type="checkbox" name="check_tujuan_informasi" id="" class="custom-checkbox-success"></td>
        </tr>
        <tr>
            <td align="center">7</td>
            <td>Resiko </td>
            <td><input type="text" name="resiko_informasi" id="" class="form-control border-dark"></td>
            <td align="center"><input type="checkbox" name="check_resiko_informasi" id="" class="custom-checkbox-success"></td>
        </tr>
        <tr>
            <td align="center">8</td>
            <td>komplikasi </td>
            <td><input type="text" name="komplikasi_informasi" id="" class="form-control border-dark"></td>
            <td align="center"><input type="checkbox" name="check_komplikasi_informasi" id="" class="custom-checkbox-success"></td>
        </tr>
        <tr>
            <td align="center">9</td>
            <td>
                <div>Prognosis</div>
                <div>Prognosis vital , prognosis fungsi
                    dan prognosis kesembuhan</div>
            </td>
            <td><input type="text" name="prognosis" id="" class="form-control border-dark"></td>
            <td align="center"><input type="checkbox" name="check_prognosis" id="" class="custom-checkbox-success"></td>
        </tr>
        <tr>
            <td align="center">10</td>
            <td>
                <div>Alternatif & Risiko :</div>
                <div class="d-flex align-item-center gap-2">
                    <input type="checkbox" name="pilihan_pengibatan" id="pilihan_pengibatan" class="custom-checkbox-success">
                    <label for="pilihan_pengibatan">Pilihan pengobatan /
                        penatalaksanaan </label>
                </div>
            </td>
            <td><input type="text" name="pilihan_pengobatan" id="" class="form-control border-dark"></td>
            <td align="center"><input type="checkbox" name="check_pilihan_pengobatan" id="" class="custom-checkbox-success"></td>
        </tr>
        <tr>
            <td align="center">11</td>
            <td>
                <div>Hal lain yang akan dilakukan untuk
                    menyelamatkan pasien</div>
                <div class="d-flex align-item-center gap-2">
                    <input type="checkbox" name="perluasan_tindakan" id="perluasan_tindakan" class="custom-checkbox-success">
                    <label for="perluasan_tindakan">Perluasan tindakan</label>
                </div>
                <div class="d-flex align-item-center gap-2">
                    <input type="checkbox" name="konsultasi_tindakan" id="konsultasi_tindakan" class="custom-checkbox-success">
                    <label for="konsultasi_tindakan">Konsultasi selama tindakan</label>
                </div>
                <div class="d-flex align-item-center gap-2">
                    <input type="checkbox" name="resusitasi" id="resusitasi" class="custom-checkbox-success">
                    <label for="resusitasi">Resusitasi</label>
                </div>
            </td>
            <td><input type="text" name="penyelamatan" id="" class="form-control border-dark"></td>
            <td align="center"><input type="checkbox" name="check_penyelamatan" id="" class="custom-checkbox-success"></td>
        </tr>
        <tr>
            <td colspan="3">Dengan ini menyatakan bahwa saya telah menerangkan hal-hal di atas secara benar dan jelas dan memberikan kesempatan untuk bertanya dan / atau berdiskusi
            </td>
            <td>
                <div class="text-center my-2">
                    <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_umum" />
                </div>
                <select type="select" name="dokter_umum" id="dokter_umum" class="form-select dokter_umum" style="width: 100%;"></select>
                <input type="datetime-local" name="tgl_prosedur_dokter" class="form-control border-dark" value="<?= date('Y-m-d H:i'); ?>">
            </td>

        </tr>
        <tr>
            <td colspan="3">Dengan ini menyatakan bahwa saya telah menerima informasi dari dokter sebagaimana di atas kemudian yang saya beri tanda/paraf di kolom kanannya, dan telah memahaminya</td>

            <td>
                <div class="text-center my-2">
                    <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                        style="width: 200px; height:120px" data-input-name="image_drawer_state_image_2" />
                    <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
                        value="" />
                </div>
                <input type="text" name="nama_hub_pasien" id="" class="form-control border-dark">
                <input type="datetime-local" name="tgl_prosedur" class="form-control border-dark" value="<?= date('Y-m-d H:i'); ?>">
            </td>
            
        </tr>
    </table>
</div>



<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()

        // Initialize Select2
        $('.diagnosa').select2({
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



        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });
    });

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
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
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
</script>