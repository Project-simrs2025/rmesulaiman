<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td class="col-2">
                    <div class="text-uppercase fw-bold text-center mt-4">DOKUMENTASI PEMBERIAN INFORMASI PEMBERIAN DARAH DAN PRODUK DARAH</div>
                </td>
                <td>
                    <div class="row">
                        <div class="col-4 d-flex flex-column gap-4 align-items-center">
                            <label for="">No. Rm</label>
                            <label for="">Nama</label>
                            <label for="">Tanggal Lahir</label>
                            <label for="">Jenis Kelamin</label>
                        </div>
                        <div class="col-8 d-flex flex-column gap-2 ">
                            <div class="d-flex align-items-center"> <span class="mx-2">:</span> <input type="text" class="border-dark form-control" name="no_rm" disabled></div>
                            <div class="d-flex align-items-center"> <span class="mx-2">:</span> <input type="text" class="border-dark form-control" name="nama_pasien" disabled></div>
                            <div class="d-flex align-items-center"> <span class="mx-2">:</span> <input type="text" class="border-dark form-control" name="tanggal_lahir" disabled></div>
                            <div class="d-flex align-items-center"> <span class="mx-2">:</span> <input type="text" class="border-dark form-control" name="jenkel" disabled></div>

                        </div>
                    </div>
                </td>
            </tr>
        </tbody>

    </table>
</div>


<!-- table 2 -->
<div class="row">

    <table class="table table-bordered border-dark mt-3">
        <thead>
            <th class="bg-secondary text-center" colspan="3">PEMBERIAN INFORMASI</th>
        </thead>
        <tbody>
            <tr>
                <td colspan="2" class="col-2"><label for="nama_dokter">Dokter Pelaksana Tindakan</label></td>
                <td class="d-flex gap-2 align-items-center">: <select type="select" name="dokter_pelaksana" id="dokter_pelaksana" class="form-select dokter_umum" style="width: 100%;"></select></td>
            </tr>
            <tr>
                <td colspan="2" class="col-2"><label for="pemberi_informasi">Pemberi Informasi</label></td>
                <td class="d-flex gap-2 align-items-center">:<input type="text" class="form-control border-dark" name="pemberi_informasi"></td>
            </tr>
            <tr>
                <td colspan="2" class="col-2"><label for="penerima_informasi">Penerima Informasi / Pemberi Persetujuan*</label></td>
                <td class="d-flex gap-2 align-items-center">:<input type="text" class="form-control border-dark" name="penerima_informasi"></td>
            </tr>
            <tr>
                <td colspan="2" class="col-2"><label for="hub_pasien">*Hubungan dengan pasien</label></td>
                <td class="d-flex gap-2 align-items-center">:<input type="text" class="form-control border-dark" name="hub_pasien"></td>
            </tr>
            <tr>
                <td colspan="2" class="col-2"><label for="diagnosa_pasien">Diagnosa Pasien</label></td>
                <td> <select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa ">
                    </select></td>
            </tr>

            <tr>
                <td>
                    <span>Jenis Transfusi yang dilakukan</span>
                </td>
                <td colspan="3">
                    <div class="d-flex gap-2">
                        <input type="radio" id="sewaktu" name="jenis_transfusi" value="sewaktu" class="custom-checkbox-success"><label for="sewaktu">Sewaktu</label>
                        <input type="radio" id="serial" name="jenis_transfusi" class="custom-checkbox-success" value="serial"><label for="serial">Serial</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Komponen darah yang dibagikan</span>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <input type="radio" name="komponen_darah" class="custom-checkbox-success" id="whole_blod" value="whole_blod"><label for="whole_blod">Whole blood</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="radio" name="komponen_darah" class="custom-checkbox-success" value="prc" id="prc"><label for="prc"> PRC</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="radio" name="komponen_darah" id="ffp" value="ffp" class="custom-checkbox-success"><label for="ffp"> FFP</label>
                        </div>
                    </div>
                </td>
                <td class="col-2">
                    <div class="col-6 d-flex align-items-center gap-2">
                        <input type="radio" class="custom-checkbox-success" name="komponen_darah" id="trombosit" value="trombosit"><label for="trombosit">Trombosit</label>
                    </div>
                    <div>
                        <input type="text" class="form-control border-dark my-2 w-50" name="trombosit_input1">
                        <input type="text" class="form-control border-dark my-2 w-50" name="trombosit_input2">
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="">Jumlah yang diberikan</label>
                </td>
                <td colspan="2">
                    <div class="d-flex align-items-center gap-2"><input type="text" class="form-control border-dark w-25" name="jumlah_diberikan"> cc</div>
                </td>
            </tr>


        </tbody>
    </table>
</div>

<!-- table 3 -->
<div class="row">
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
                ['label' => 'Indikasi dilakukannya transfusi darah', 'name' => 'indikasi_transfusi'],
                ['label' => 'Tujuan dilakukannya transfusi darah', 'name' => 'tujuan_transfusi'],
                ['label' => 'Resiko transfusi darah', 'name' => 'resiko_transfusi'],
                ['label' => 'Alternatif pengganti transfusi darah', 'name' => 'pengganti_transfusi'],
                ['label' => 'Prosedur transfusi darah', 'name' => 'prosedur_transfusi'],
                ['label' => 'Perkiraan biaya', 'name' => 'perkiraan_biaya'],

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
                        <label for="" class="text-center">Dengan ini menyatakan bahwa saya telah menerangkan hal-hal diatas secara benar dan jelas, dan memberikan kesempatan untuk bertanya dan berdiskusi.</label>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <label for="">Tanda Tangan</label>
                        <label for="">Dokter</label>
                        <div>
                            <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_umum" />
                        </div>
                        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select dokter_umum" style="width: 100%;"></select>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <div class="d-flex flex-column gap-2">
                        <label for="" class="text-center">Dengan ini menyatakan bahwa saya telah menerima informasi sebagaimana diatas yang saya berikan tanda paraf dan telah memahaminya.</label>
                    </div>
                </td>
                <td style="width: 300px;">
                    <div class="d-flex flex-column gap-2 align-items-center">
                        <label for="">Tanda Tangan</label>
                        <label for=""> Nama Pasien/ Keluarga</label>
                        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 350px; height:150px" data-input-name="image_drawer_state_image_11" />
                        <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                            value="" />
                        <input type="text" class="form-control border-dark mt-2" name="nama_tdd_keluarga">
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <div class="kop-persetujuan">
                        <span>*Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat.</span>
                    </div>
        </tbody>
    </table>
</div>


<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {

        let page = 1;
        listDokterUmumAPI();

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