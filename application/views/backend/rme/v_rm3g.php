<!-- Rm 3g -->
<div class="row mt-2">
    <!-- table 1 -->
    <table class="table table-bordered border-dark">
        <tbody class="text-center">
            <th>Pemberian Informasi</th>
        </tbody>
        <tbody>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="col-4"><label for="">Dokter Penanggung Jawab</label></div>
                        <div class="col-8 d-flex align-items-center gap-2"> : <select type="select" name="dokter_penanggung_jawab" id="dokter_penanggung_jawab" class="form-select dokter" style="width: 100%;"></select></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="col-4"><label for="">Pemberi Informasi</label></div>
                        <div class="col-8 d-flex align-items-center gap-2"> : <select type="select" name="pemberi_informasi" id="pemberi_informasi" class="form-select perawat" style="width: 100%;"></select></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="col-4"><label for="">Penerima Informasi/Pemberi Persetujuan*</label></div>
                        <div class="col-8 d-flex align-items-center gap-2"> : <input type="text" class="form-control border-dark" name="penerima_inforamasi"></div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<div class="row">
    <!-- table 2 -->
    <table class="table table-bordered border-dark">
        <tbody class="text-center">
            <th class="col-1">No.</th>
            <th>Jenis Informasi</th>
            <th>Isi Informasi</th>
            <th>Tanda &check;</th>
        </tbody>
        <tbody class="text-center">
            <?php
            $inputs = [
                ['label' => 'Tujuan Pemberian Darah', 'name' => 'pemeberian_darah'],
                ['label' => 'Manfaat Pemberian Darah', 'name' => 'manfaat_pemberian_darah'],
                ['label' => 'Jumlah Darah yang Diberikan', 'name' => 'jumlah_darah_diberikan'],
                ['label' => 'Risiko dan Komplikasi yang Mungkin Terjadi', 'name' => 'komplikasi'],
                ['label' => 'Alternatif Lain yang Bisa Dilakukan Tanpa Transfusi Darah', 'name' => 'alternatif'],
                ['label' => 'Lain - lain', 'name' => 'lain_lain'],
            ];

            foreach ($inputs as $index => $input) {
                echo "<tr>";
                echo "<td>" . ($index + 1) . "</td>";
                echo "<td><label for='{$input['name']}'>{$input['label']}</label></td>";
                echo "<td class='col-4'><input type='text' class='form-control border-dark' name='{$input['name']}'></td>";
                echo "<td><input type='checkbox' name='{$input['name']}_checkbox' class='custom-checkbox-success'></td>";
                echo "</tr>";
            }
            ?>

            <tr>
                <td colspan="3">
                    <div class="d-flex flex-column gap-2">
                        <label for="" class="text-center">Dengan ini menyatakan bahwa saya telah menerangkan hal-hal di atas secara benar dan jelas dan memberikan kesempatan untuk bertanya dan/atau berdiskusi</label>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <label for="">Tanda Tangan</label>
                        <label for="">Dokter</label>
                        <div>
                            <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_pengkaji" />
                        </div>
                        <select type="select" name="dokter_pengkaji" id="dokter_pengkaji" class="form-select dokter" style="width: 100%;"></select>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3" style="width: 300px;">
                    <div class="d-flex flex-column gap-2">
                        <label for="" class="text-center">Dengan ini menyatakan bahwa saya telah menerima informasi dari dokter sebagaimana di atas kemudian yang saya beri tanda/paraf di kolom kanannya, dan telah memahaminya</label>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2 align-items-center">
                        <label for="">Tanda Tangan</label>
                        <label for=""> Nama Pasien/ Keluarga</label>
                        <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 180px; height:100px" data-input-name="image_drawer_state_image_11" />
                        <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                            value="" />
                        <input type="text" class="form-control border-dark mt-2" name="nama_keluarga_pasien" placeholder="nama dan tanda tangan pasien atau keluarga" value="<?= $nama_hub_pasien ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <div class="kop-persetujuan">
                        <span>* Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat</span>
                    </div>
                    <div class="bg-dark text-white">
                        <h4 class="text-white">PENOLAKAN TINDAKAN TRANSFUSI DARAH</h4>
                    </div>

                    <div class="row mt-3">
                        <div class="main-persetujuan d-flex align-items-center flex-wrap gap-2">

                            <label for="">Yang bertanda tangan di bawah ini, saya, nama </label><input type="text" class="form-control border-dark w-25 my-1" name="nama_pasien" disabled>
                            <label for="">umur </label>
                            <input type="text" class="form-control border-dark w-25 my-1" name="umur" disabled>
                            <label for=""><input type="text" class="form-control border-dark" name="jenkel" disabled></label>
                            <label for="" class="">alamat </label>
                            <input type="text" class="form-control border-dark w-25 my-1" name="alamat" disabled> <label for="" class="mx-1">dengan ini menyatakan <span class="fw-bold"> persetujuan </span>untuk dilakukannya tindakan</label><input type="text" class="form-control border-dark w-50 my-1" name="persetujuan_tindakan"> <label for="" class="mx-1">terhadap saya / </label>
                            <label for="" class="mx-1">saya* bernama </label><input type="text" class="form-control border-dark w-25 my-1" name="nama_pasien_yang_menemani" value="<?= $nama_hub_pasien; ?>">, umur <input type="text" class="form-control border-dark w-25 my-1" name="umur_yang_menemani"> <input type="text" class="form-control border-dark w-25" name="jenkel_yang_menemani">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control border-dark w-25 my-1" name="alamat_yang_menemani" value="<?= $alamat_hub_pasien; ?>">

                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-2 align-items-center">
                        <label for=""><?= $city_sign ?>,</label> <input type="datetime-local" name="tanggal_2" class="form-control border-dark w-25" value="<?= date('Y-m-d H:i'); ?>">
                    </div>


                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="" class="text-center">Disetujui Oleh Pasien :</label>
                                <div class="text-center">
                                    <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                        style="width: 180px; height:100px" data-input-name="image_drawer_state_image_2" />
                                    <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
                                        value="" />
                                </div>
                                <input type="text" class="form-control border-dark mt-2" name="nama_tdd_pasien" placeholder="nama dan tanda tangan pasien" value="<?= $nama_pasien; ?>">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="" class="text-center">Saksi Wali/Keluarga:</label>
                                <div class="text-center">
                                    <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                        style="width: 180px; height:100px" data-input-name="image_drawer_state_image_3" />
                                    <input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3"
                                        value="" />
                                </div>
                                <input type="text" class="form-control border-dark mt-2" name="nama_tdd_pasien" placeholder="nama dan tanda tangan" value="<?= $nama_hub_pasien; ?>">

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="" class="text-center">Saksi Rumah Sakit:</label>
                                <div class="my-2 text-center">
                                    <img class="img-responsive center-block" style="width: 30%;" id="qr_perawat_pengkaji" />
                                </div>
                                <select type="select" name="perawat_pengkaji" id="perawat_pengkaji" class="form-select perawat" style="width: 100%;"></select>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </td>
            </tr>

        </tbody>
    </table>
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


        $('#dokter_pengkaji').prop('disabled', false)
        $('#dokter_pengkaji').select2('open')
        $('#dokter_pengkaji').select2('close')
        if (mode === "lihat")
            $('#dokter_pengkaji').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#dokter_pengkaji').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_pengkaji')
                }
            })
        }, 1000)

        $('#perawat_pengkaji').prop('disabled', false)
        $('#perawat_pengkaji').select2('open')
        $('#perawat_pengkaji').select2('close')
        if (mode === "lihat")
            $('#perawat_pengkaji').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#perawat_pengkaji').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_pengkaji')
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


        $('#dokter_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_pengkaji')
        });

        $('#perawat_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_pengkaji')
        });

        //================ new =====================//
    });
</script>