<div class="row">
    <div class="col-12">
        <table class="table table-bordered mt-3 border border-dark">
            <tbody>
                <?php
                $fields = [
                    ['label' => 'Nama Pasien', 'id' => 'name', 'name' => 'nama_pasien', 'value' => "$nama_pasien", 'status' => 'disabled'],
                    ['label' => 'No Rekam Medis', 'id' => 'no_rm', 'name' => 'no_rm', 'value' => "$no_rm", 'status' => 'disabled']
                ];
                ?>
                <tr>
                    <?php foreach ($fields as $field): ?>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <label for="<?= $field['id'] ?>"><?= $field['label'] ?> :</label>
                                <input type="text" class="w-50 form-control border-dark" id="<?= $field['id'] ?>" name="<?= $field['name'] ?> " value="<?= $field['value']; ?>" <?= $field['status']; ?>>
                            </div>
                        </td>
                    <?php endforeach; ?>
                    <td class="text-center">
                        <span class="fw-bold">Rahasia</span>
                    </td>
                </tr>

                <tr>
                    <td rowspan="2">
                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <textarea name="alamat_pasien" id="" class="form-control border-dark" rows="2"><?= $alamat ?></textarea>
                        </div>
                    </td>
                    <td>
                        <label for="no_bpjs">No. Kartu :</label>
                        <input type="text" id="no_bpjs" name="no_bpjs" class="form-control border border-dark">
                    </td>
                    <td>
                        <label for="jenkel">Jenis Kelamin</label>
                        <input type="text" class="form-control border-dark" name="jenkel" value="<?= $jenkel; ?>" disabled>
                    </td>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir :</label>
                            <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control border border-dark" value="<?= $tgl_lahir; ?>" disabled>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="kelas_rwt">Kelas Rawatan :</label>
                            <input type="text" id="kls_rwt" name="kls_rwt" class="form-control border border-dark" value="<?= $kelas; ?>" disabled>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="form-group">
                            <label for="">Tgl Masuk :</label>
                            <input type="text" class="form-control border border-dark" onclick="this.showPicker()" value="<?= $tgl_admit; ?>" disabled>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="">Umur :</label>
                            <input type="text" class="form-control border border-dark" value="<?= $umur; ?>" disabled>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="">Ruang Rawatan :</label>
                            <input type="text" class="form-control border border-dark" value="<?= $nama_ruangan ?>" disabled>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="">Penanggung kepesertaan :</label>
                            <input type="text" class="form-control border border-dark" name="nama_jenis_pasien">
                        </div>
                    </td>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="">Tanggal Keluar/ Meninggal/ Rujuk :</label>
                            <input type="text" class="form-control border border-dark" name="tgl_discharge">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="">Jenis Kepsertaan :</label>
                            <input type="text" class="form-control border border-dark" name="jenis_kepesertaan">
                        </div>
                    </td>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="">Dirujuk Ke :</label>
                            <input type="text" class="form-control border border-dark" name="dirujuk_ke">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="form-group d-block">
                            <label for="">Diagnosa awal/ Masalah Waktu Masuk :</label>
                            <select type="select" name="diagnosa1" class="form-select diagnosa w-75">
                            </select>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- table 2 -->
        <div class="row">
            <div class="col-12">
            </div>
            <table class="table table-bordered mt-3 border border-dark mt-4">
                <tr>
                    <td colspan="2">
                        <div class="d-block">
                            <label for="">Diagnosa Anamnesa :</label>
                            <select type="select" name="diagnosa_anamnesa_1" class="form-select diagnosa">
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="d-block">
                            <label for="">Pemeriksaan fisik :</label>
                            <textarea name="pemeriksaa_fisik_1" id="" rows="5" class="w-100 border border-dark form-control"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="d-block">
                            <label for="">Pemeriksaan Penunjang :</label>
                            <textarea name="pemeriksaan_penunjang_1" id="" rows="5" class="w-100 form-control border border-dark"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="d-block">
                            <label for="">Terapi :</label>
                            <textarea name="terapi_area_1" id="" rows="5" class="w-100 form-control border border-dark"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="">Diagnosa Utama :</label>
                            <select type="select" name="diagnosa_utama" class="form-select diagnosa">
                            </select>
                        </div>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="">Diagnosa Sekunder :</label>
                            <select type="select" name="diagnosa_sekunder" class="form-select diagnosa">
                            </select>
                        </div>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="">Diagnosa Tindakan :</label>
                            <select type="select" name="diagnosa_tindakan" class="form-select diagnosa">
                            </select>
                        </div>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="d-block">
                            <span>Keadaan waktu keluar</span>
                            <div class="my-2 mx-2">
                                <input type="radio" class="custom-checkbox-success" name="keadaan_waktu" value="sembuh" id="sembuh">
                                <label for="sembuh" class="mx-2">Sembuh</label>
                                <input type="radio" class="custom-checkbox-success" name="keadaan_waktu" value="rujuk" id="rujuk">
                                <label for="rujuk" class="mx-2">Rujuk</label>
                                <input type="radio" class="custom-checkbox-success" name="keadaan_waktu" value="paps" id="paps">
                                <label for="paps" class="mx-2">PAPS</label>
                                <input type="radio" class="custom-checkbox-success" name="keadaan_waktu" value="meinggal_dunia" id="meninggal">
                                <label for="meninggal" class="mx-2">Meninggal dunia</label>
                            </div>
                            <div class="col-11 mx-2">
                                <input type="radio" class="custom-checkbox-success" name="keadaan_waktu" value="lain-lain" id="lain-lain">
                                <label for="lain-lain">Lain-lain :</label>
                                <input type="text" class="form-control border-dark" name="lain_lain_keluar">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="d-block">
                            <span>Pengobatan di lanjutkan di :</span>
                            <div class="col-11 mx-2">
                                <input type="radio" class="custom-checkbox-success" name="pengobatan_dilanjutka" value="pulang" id="pulang">
                                <label for="pulang" class="mx-2">Pulang berobat jalan</label>
                                <input type="radio" class="custom-checkbox-success" name="pengobatan_dilanjutka" value="rujuk" id="rujuk_balik_puskesmas">
                                <label for="rujuk_balik_puskesmas" class="mx-2">Rujuk Balik Puskesmas/klinik</label>
                                <input type="radio" class="custom-checkbox-success" name="pengobatan_dilanjutka" value="rs_lain" id="rs_lain">
                                <label for="rs_lain" class="mx-2">RS LAIN</label>
                            </div>
                            <div class="col-11 my-2 mx-2">
                                <input type="radio" class="custom-checkbox-success" name="pengobatan_dilanjutka" value="lain_rujuk" id="lain_rujuk">
                                <label for="lain_rujuk">Lain-lain :</label>
                                <input type="text" class="form-control border-dark" name="lain_lain_pengobatan">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-2">
            <span>Dengan ini saya menyetujui penggunaan informasi tentang pelayanan kesehatan yang saya terima dari <?= $site_title ?> untuk kepentingann administrasi pembayaran pelayanan kesehatan oleh BPJS Kesehatan.</span>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-6 text-center">
            <label for="" class="mb-4 ">Nama & Tanda Tangan Dokter Yang Merawat</label>
            <div>
                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum" />

            </div>
            <div class="form-group">
                <select type="select" name="dokter_umum" id="dokter_umum" class="form-select perawat" style="width: 100%;"></select>
            </div>
        </div>
        <div class="col-6 text-center">
            <label for="" class="mb-4">Tanda Tangan Pasien / Keluarga Pasien</label>
            <div class="text-center my-2">
                <img class="marker-image border-dark border" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                    style="width: 150px; height:100px" data-input-name="image_drawer_state_image_1" />
                <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                    value="" />
            </div>
            <input type="text" name="nama_hub_pasien_ttd" id="" class="form-control border-dark" value="<?= $nama_hub_pasien;  ?>">
        </div>
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