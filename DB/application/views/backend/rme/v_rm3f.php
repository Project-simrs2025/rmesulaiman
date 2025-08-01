<!-- Rm 3f -->

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
                        <div class="col-8 d-flex align-items-center gap-2"> : <input type="text" class="form-control border-dark" name="nama_dokter"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="col-4"><label for="">Pemberi Informasi</label></div>
                        <div class="col-8 d-flex align-items-center gap-2"> : <input type="text" class="form-control border-dark" name="pemberi_informasi"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="col-4"><label for="">Penerima Informasi/Pemberi Persetujuan*</label></div>
                        <div class="col-8 d-flex align-items-center gap-2"> : <input type="text" class="form-control border-dark" name="penerima_informasi"></div>
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
                            <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_umum" />
                        </div>
                        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 100%;"></select>
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
                        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 350px; height:150px" data-input-name="image_drawer_state_image_11" />
                        <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                            value="" />
                        <input type="text" class="form-control border-dark mt-2" name="nama_keluarga_pasien" placeholder="nama dan tanda tangan pasien atau keluarga">
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <div class="kop-persetujuan">
                        <span>* Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat</span>
                    </div>
                    <div class="bg-dark text-white">
                        <h3 class="text-white">PERSETUJUAN TINDAKAN TRANSFUSI DARAH</h3>
                    </div>

                    <div class="row mt-3">
                        <div class="main-persetujuan d-flex align-items-center flex-wrap gap-2">

                            <label for="">Yang bertanda tangan di bawah ini, saya, nama </label><input type="text" class="form-control border-dark w-25 my-1" name="nama_pasien" disabled>
                            <label for="">umur </label>
                            <input type="text" class="form-control border-dark w-25 my-1" name="umur" disabled>
                            <label for=""><input type="text" class="form-control border-dark" name="jenkel" disabled></label>
                            <label for="" class="">alamat </label>
                            <input type="text" class="form-control border-dark w-25 my-1" name="alamat" disabled> <label for="" class="mx-1">dengan ini menyatakan <span class="fw-bold"> persetujuan </span>untuk dilakukannya tindakan</label><input type="text" class="form-control border-dark w-50 my-1" name="persetujuan_tindakan"> <label for="" class="mx-1">terhadap saya / </label>
                            <label for="" class="mx-1">saya* bernama </label><input type="text" class="form-control border-dark w-25 my-1" name="nama_pasien" disabled>, umur <input type="text" class="form-control border-dark w-25 my-1" name="umur" disabled> <input type="text" class="form-control border-dark w-25" name="jenkel" disabled>
                            <label for="">Alamat</label>
                            <input type="text" class="form-control border-dark w-25 my-1" name="alamat" disabled>

                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-2 align-items-center">
                        <label for=""><?= $city_sign ?>,</label> <input type="datetime-local" name="tanggal_2" class="form-control border-dark w-25" value="<?= date('Y-m-d H:i'); ?>">
                    </div>


                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="">Disetujui Oleh Pasien :</label>
                                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 350px; height:200px" data-input-name="image_drawer_state_image_2" />
                                <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
                                    value="" />
                                     <input type="text" class="form-control border-dark mt-2" name="nama_tdd_pasien" placeholder="nama dan tanda tangan pasien">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="">Saksi Wali/Keluarga:</label>
                                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 350px; height:200px" data-input-name="image_drawer_state_image_3" />
                                <input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3"
                                    value="" />
                                    <input type="text" class="form-control border-dark mt-2" name="nama_tdd_keluarga" placeholder="nama dan tanda tangan keluarga">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="">Saksi Rumah Sakit:</label>
                                <!-- <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 350px; height:200px" data-input-name="image_drawer_state_image_4" />
                                <input type="hidden" id="image_drawer_state_image_4" name="image_drawer_state_image_4"
                                    value="" /> -->

                                <div>
                                    <div class="my-2 text-center">
                                        <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_nama_perawat_form" />
                                    </div>
                                    <select type="select" name="nama_perawat_form" id="nama_perawat_form" class="form-select allkaryawan" style="width: 100%;"></select>
                                </div>
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
    let dataDokter = []
    let dataAllKaryawan = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI();
        listAllKaryawanAPI();

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

        $('#nama_perawat_form').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_nama_perawat_form')
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

        $('#nama_perawat_form').prop('disabled', false)
        $('#nama_perawat_form').select2('open')
        $('#nama_perawat_form').select2('close')
        if (mode === "lihat")
            $('#nama_perawat_form').prop('disabled', true)

        setTimeout(() => {
            console.log(dataAllKaryawan)
            dataAllKaryawan?.map(v => {
                if (v.text === $('#nama_perawat_form').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_nama_perawat_form')
                }
            })
        }, 1000)
    }


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

    function listAllKaryawanAPI() {
        $('.allkaryawan').select2({
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
                    dataAllKaryawan = items
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