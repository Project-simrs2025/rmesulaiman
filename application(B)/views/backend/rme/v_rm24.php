<div class="row">
    <div class="col-12">

        <table class="table border-dark">
            <tr>
                <td colspan="3" class="text-center">
                    <strong>SURAT PERNYATAN PENOLAKAN RESUSITASI (DO NOT RESUCITATE)/ DNR</strong>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Yang bertanda tangan dibawah ini saya,
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="text" name="nama_pasien" class="form-control border-dark" placeholder="Nama" />
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="date" name="tanggal_lahir" class="form-control border-dark" placeholder="Tanggal lahir" />
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="text" name="no_rm" class="form-control border-dark" placeholder="No. RM" />
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Dengan ini saya menyatakan bahwa saya membuat keputusan dan menyetujui
                    perintah do not resuscitate (jangan di resusitasi) terhadap saya/
                    <input type="text" name="pasien" class="form-control border-dark w-75 d-inline-block" placeholder="" /> saya
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Saya menyatakan bahwa Jika jantung berhenti berdetak atau jika berhenti
                    bernapas, tidak ada prosedur medis untuk mengembalikan bernapas atau berfungsi
                    kembali jantung akan dilakukan oleh staf Rumah sakit, termasuk tidak terbatas
                    pada staf layanan medis darurat.
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Saya memahami bahwa keputusan ini tidak akan mencegah saya/<input type="text" name="pernyataan" class="form-control border-dark w-25 d-inline-block" placeholder="" /> saya
                    menerima pelayanan kesehatan lainnya seperti pemberian maneuver Heimlich atau
                    pemberian oksigen dan langkah-langkah perawatan untuk meningkatkan kenyamanan
                    lainnya.
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Saya memberikan izin agar informasi ini diberikan kepada seluruh staf rumah
                    sakit, Saya memahami bahwa saya dapat mencabut pernyataan ini setiap saat.
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="d-flex justify-content-end gap-2 align-items-center">
                        <?= $city_sign; ?>, Tanggal <input type="datetime-local" class="form-control border-dark w-25" value="<?= date('Y-m-d H:i') ?>">

                    </div>
                </td>
            </tr>
            <tr>
                <td>Yang menyatakan</td>
                <td>Saksi 1</td>
                <td>Saksi 2</td>
            </tr>
            <tr>
                <td>
                    <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                        style="width:350px; height:180px;" data-input-name="image_drawer_state_image_1" />
                    <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                        value="" />
                </td>
                <td>
                    <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                        style="width:350px; height:180px;" data-input-name="image_drawer_state_image_2" />
                    <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
                        value="" />
                </td>
                <td>
                    <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                        style="width:350px; height:180px;" data-input-name="image_drawer_state_image_3" />
                    <input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3"
                        value="" />
                </td>
            </tr>


            <tr>
                <td colspan="4">
                    <h3 class="text-center mt-5 mb-3 fw-bold">FORMULIR DO NOT RESUCITATE (JANGAN DILAKUKAN RESUSITASI)</h3>
                    <p>Formulir ini adalah perintah dokter penanggung jawab pelayanan kepada seluruh staf klinis rumah sakit, agar tidak dilakukan resusitasi pada pasien ini bila terjadi henti jantung (bila tak ada denyut nadi) dan henti nafas (tak ada pernafasan spontan).
                        Formulir ini juga memberikan perintah kepada staf medis untuk tetap melakukan intervensi atau pengobatan, atau tata laksana lainnya sebelum terjadinya henti jantung atau henti nafas.
                    </p>
                </td>
            </tr>
            <tr>
                <td>Nama Pasien:</td>
                <td colspan="3"><input type="text" name="nama_pasien" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>Tanggal lahir:</td>
                <td colspan="3"><input type="text" name="tanggal_lahir" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td colspan="4">
                    <div>
                        <div class="fw-bold my-2 text-decoration-underline">Perintah/ Pernyataan Dokter Penanggung Jawab Pelayanan :</div>
                        <div>Saya dokter yang bertanda tangan dibawah ini menginstruksikan kepada seluruh staf medis dan staf klinis lainnya untuk melakukan hal-hal tertulis dibawah ini:</div>
                        <div class="m-3">
                            – Usaha komprehensif untuk mencegah henti jantung atau henti nafas tanpa melakukan intubasi. <span class="fw-bold"> DO NOT RESUCITATE/ TIDAK DILAKUKAN RESUSITASI JANTUNG PARU (RJP)</span>
                        </div>
                        <div class="m-3">
                            – Usaha suportif sebelum terjadi henti nafas atau henti jantung yang meliputi pembukaan jalan nafas non invasif, mengontrol perdarahan, memposisikan pasien dengan nyaman, pemberian oat-obatan anati nyeri. <span class="fw-bold"> TIDAK MELAKUKAN RJP (RESUSITASI JANTUNG PARU) bila henti nafas atau henti jantung terjadi.</span>
                        </div>
                        <div>
                            Saya dokter yang bertanda tangan dibawah ini menyatakan bahwa keputusan DNR diatas diambil setelah pasien diberikan penjelasan dan informed consent diperoleh dari salah satu:
                        </div>
                        <div class="d-flex flex-column my-3 gap-2">
                            <div>
                                <input type="radio" class="custom-checkbox-success" name="k_informed" id="pasien" value="pasien">
                                <label for="pasien">Pasien</label>
                            </div>
                            <div>
                                <input type="radio" class="custom-checkbox-success" name="k_informed" id="tenaga_kesehatan" value="tenaga_kesehatan">
                                <label for="tenaga_kesehatan">Tenaga kesehatan yang ditunjuk pasien </label>
                            </div>
                            <div>
                                <input type="radio" class="custom-checkbox-success" name="k_informed" id="wali_sah" value="wali_sah">
                                <label for="wali_sah">Wali yang sah atas pasien (termasuk yang ditunjuk oleh pengadilan) </label>
                            </div>
                            <div>
                                <input type="radio" class="custom-checkbox-success" name="k_informed" id="anggota" value="anggota">
                                <label for="anggota"> Anggota keluarga pasien </label>
                            </div>
                        </div>

                        <div>
                            Jika yang diatas tidak dimungkinkan maka dokter yang bertanda tangan dibawah ini memberikan perintah DNR berdasarkan pada :
                        </div>

                        <div class="m-3">
                            – Instruksi pasien sebelumnya atau
                        </div>
                        <div class="m-3">
                            – Keputusan dua orang dokter yang menyatakan bahwa Resusitasi Jantung Paru (RJP) akan mendatangkan hasil yang tidak efektif
                        </div>
                    </div>

                </td>
            </tr>


            <tr>
                <td colspan="4">
                    <div class="d-flex justify-content-end gap-2 align-items-center">
                        <?= $city_sign; ?>, Tanggal <input type="datetime-local" class="form-control border-dark w-25" value="<?= date('Y-m-d H:i') ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="text-end mb-2">Dokter Penanggung Jawab Pelayanan</div>
                    <div class="d-flex justify-content-end flex-column align-items-end">
                        <img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_dokter_umum" />
                        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select w-25"></select>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()

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
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    page++; // Increment page
                    $('#diagnosa').select2('data', null); // Trigger new data fetch
                }
            });
        });

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });
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
</script>