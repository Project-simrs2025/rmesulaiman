<!-- Rm 3b -->

<div class="row">
    <?php
    $dataform1 = array(
        array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Pasien", 'status' => "disabled", 'name' => "nama_pasien"),
        array('nama' => "NIK", 'name' => "nik", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nik", 'status' => "disabled"),
        array('nama' => "Agama", 'name' => "nama_agama", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Agama", 'status' => "disabled"),
    );
    foreach ($dataform1 as $a) {
        echo "<div class='col-4 d-flex gap-2 align-items-center mt-4'>";
        echo "<label for='{$a['nama']}' class='flex-shrink-0'>{$a['nama']} :</label>";
        echo "<input type='{$a['tipe']}' name='{$a['name']}' value='{$a['values']}' placeholder='{$a['holder']}' class='form-control border-dark' {$a['status']}>";
        echo "</div>";
    }
    ?>
</div>


<div class="row">
    <?php
    $dataform2 = array(
        array('nama' => "Nomor Rm", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nomor Rm", 'status' => "disabled", 'name' => "no_rm"),
        array('nama' => "Tanggal Lahir", 'name' => "tanggal_lahir", 'tipe' => "date", 'values' => "", 'holder' => "Masukkan Tanggal Lahir", 'status' => "disabled"),
        array('nama' => "Suku Bangsa", 'name' => "nama_suku", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Suku", 'status' => "disabled"),
    );
    foreach ($dataform2 as $b) {
        echo "<div class='col-4 d-flex gap-2 align-items-center mt-4'>";
        echo "<label for='{$b['nama']}' class='flex-shrink-0'>{$b['nama']} :</label>";
        echo "<input type='{$b['tipe']}' name='{$b['name']}' value='{$b['values']}' placeholder='{$b['holder']}' class='form-control border-dark' {$b['status']}>";
        echo "</div>";
    }
    ?>
</div>


<div class="row mt-5">
    <!-- table 1 -->
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="col-4"><label for="">Dokter Pelaksana Tindakan</label></div>
                        <div class="col-8 d-flex align-items-center gap-2"> : <select type="select" name="dokter_pelaksana" id="dokter_pelaksana" class="form-select dokter" style="width: 100%;"></select></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="col-4"><label for="">Penerima Informasi ( Pemberi Persetujuan ) </label></div>
                        <div class="col-8 d-flex align-items-center gap-2"> : <input type="text" class="form-control border-dark" name="penerima_informasi_1"></div>
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
            <th class="col-5">Isi Informasi</th>
            <th>Tanda &check;</th>
        </tbody>
        <tbody class="text-center">
            <tr>
                <td></td>
                <td>Diagnosa</td>
                <td>
                    <select type="select" name="diagnosa" id="diagnosa" class="form-control w-100 diagnosa">
                    </select>
                </td>
                <td><input type="checkbox" class="custom-checkbox-success" id="checkDiagnosa" name="check_diagnosa"></td>
            </tr>
            <?php
            $inputs = [
                ['label' => 'Jenis Tambahan', 'name' => 'jenis_tambahan'],
                ['label' => 'Tujuan', 'name' => 'tujuan'],
                ['label' => 'Persiapan', 'name' => 'persiapan'],
                ['label' => 'Resiko', 'name' => 'resiko'],
                ['label' => 'Faktor Penyulit', 'name' => 'faktor'],
                ['label' => 'Kondisi Spesifik Pasien', 'name' => 'kondisi_spesifik'],
                ['label' => 'Efek Samping & Komplikasi', 'name' => 'efek_samping'],
                ['label' => 'Prognosis', 'name' => 'prognosis'],
                ['label' => 'Althernatif Dan Resiko', 'name' => 'althernatif'],
                ['label' => 'Lain - lain', 'name' => 'lain_lain'],
            ];

            foreach ($inputs as $index => $input) {
                echo "<tr>";
                echo "<td>" . ($index + 1) . "</td>";
                echo "<td><label for='{$input['name']}'>{$input['label']}</label></td>";
                echo "<td><input type='text' class='form-control border-dark' name='{$input['name']}'></td>";
                echo "<td><input type='checkbox' name='{$input['name']}_checkbox' class='custom-checkbox-success'></td>";
                echo "</tr>";
            }
            ?>

            <tr>
                <td colspan="3">
                    <div class="d-flex flex-column gap-2">
                        <label for="">Dengan ini menyatakan bahwa saya telah menerangkan hal-hal diatas secara benar dan jelas, dan memberikan kesempatan untuk bertanya dan berdiskusi.</label>
                    </div>
                </td>

                <td>
                    <div class="d-flex flex-column gap-2">
                        <label for="">TT & Nama Dokter</label>
                        <div>
                            <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_pengkaji" />
                        </div>
                        <select type="select" name="dokter_pengkaji" id="dokter_pengkaji" class="form-select dokter" style="width: 100%;"></select>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <div class="d-flex flex-column gap-2">
                        <label for="">Dengan ini menyatakan bahwa saya telah menerima informasi sebagaimana diatas yang saya berikan tanda paraf dan telah memahaminya.</label>
                    </div>
                </td>
                <td style="width: 350px;">
                    <div class="d-flex flex-column gap-2 align-items-center">
                        <label for="">TT & Nama Pasien/ Keluarga</label>
                        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 350px; height:150px" data-input-name="image_drawer_state_image_11" />
                        <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                            value="" />
                        <input type="text" class="form-control border-dark mt-2" name="tt_nama">
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <div class="kop-persetujuan">
                        <span>Bila pasien tidak kompeten atau tidak bisa menerima informasi, maka penerima informasiadalah wali atau keluarga terdekat.</span>
                    </div>
                    <div class="bg-dark text-white">
                        <h4 class="text-white">PERSETUJUAN TINDAKAN KEDOKTERAN</h4>
                    </div>

                    <div class="row mt-3">
                        <div class="main-persetujuan d-flex align-items-center flex-wrap">
                            <label for="" class="flex-shrink-0">Yang bertanda tangan dibawah ini, saya Nama</label>
                            <input type="text" class="border-dark form-control w-25 mx-2 " name="nama_pasien" disabled>,
                            <label for="">Umur</label><input type="text" class="form-control border-dark mx-2 w-25" name="umur" disabled>Tahun L/P
                            <label for="" class="mx-1">Alamat</label>
                            <input type="text" class="form-control border-dark w-25" name="alamat_pasien" value="<?= $alamat_pasien; ?>" disabled> <label for="" class="mx-1">Dengan ini saya sendiri/Istri/Anak/Ibu/Bapak/ saya menyatakan SETUJU dilakukan Tindakan Kedokteran berupa </label>
                            <input type="text" class="form-control border-dark my-1" name="setuju_tindakan_kedokteran">
                            <span class="text-start">Saya memahami perlunya dan manfaat tindakan tersebut sebagaimana telah dijelaskan seperti diatas kepada saya, termasuk resiko dan komplikasi yang timbul saat dilakukan Tindakan Kedokteran.<span>Saya menyadari bahwa oleh ilmu kedokteran bukanlah ilmu pasti, karena keberhasilan Tindakan Kedokteran bukan keniscayaan, melainkan sangat bergantung kepada Tuhan Yang Maha Esa.</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-2 align-items-center">
                        <label for=""><?= $city_sign ?>,</label> <input type="date" name="tanggal_2" class="form-control border-dark w-25" value="<?= date('Y-m-d'); ?>">
                    </div>


                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="">Disetujui Oleh Pasien :</label>
                                <div class="text-center my-2">
                                    <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                        style="width: 180px; height:100px" data-input-name="image_drawer_state_image_2" />
                                    <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
                                        value="" />
                                </div>
                                <input type="text" name="nama_pasien" class="form-control border-dark">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="">Saksi Wali/Keluarga:</label>
                                <div class="text-center my-2">
                                    <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                        style="width: 180px; height:100px" data-input-name="image_drawer_state_image_3" />
                                    <input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3"
                                        value="" />
                                </div>
                                <input type="text" name="ttd_hub_pasien" class="form-control border-dark" value="<?= $nama_hub_pasien ?>">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="">Saksi Rumah Sakit:</label>
                                <div>
                                    <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_saksi_pengkaji" />
                                </div>
                                <div class="mt-3">
                                    <select type="select" name="saksi_pengkaji" id="saksi_pengkaji" class="form-select perawat" style="width: 100%;"></select>
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

        $('#saksi_pengkaji').prop('disabled', false)
        $('#saksi_pengkaji').select2('open')
        $('#saksi_pengkaji').select2('close')
        if (mode === "lihat")
            $('#saksi_pengkaji').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#saksi_pengkaji').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_saksi_pengkaji')
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

        $('#saksi_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_saksi_pengkaji')
        });

        //================ new =====================//
    });
</script>