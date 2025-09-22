<table class="table table-collapse table-bordered border-dark">
    <tr>
        <td colspan="2"><strong>CATATAN KAMAR PEMULIHAN</strong></td>
        <td>
            <label for="nama">NAMA :</label> <input type="text" class="form-control border-dark" name="nama_pasien"><br>
            <label for="umur">UMUR :</label> <input type="text" class="form-control border-dark" name="umur"><br>
            <label for="no_rm">No. RM :</label> <input type="text" class="form-control border-dark" name="no_rm">
        </td>
    </tr>
    <tr>
        <td><strong>Data masuk</strong></td>
        <td colspan="2">Jam : <input type="time" class="form-control border-dark" name="jam" value="<?= date('H:i') ?>"></td>
    </tr>
    <tr>
        <td>Jalan Nafas</td>
        <td colspan="2">
            <input type="checkbox" class="custom-checkbox-success" name="jalan_nafas" value="tidak_ada_kelainan"> Tidak ada kelainan
        </td>
    </tr>
    <tr>
        <td>Pernafasan</td>
        <td colspan="2">
            <input type="checkbox" class="custom-checkbox-success" name="pernafasan" value="spontan"> Spontan
            <input type="checkbox" class="custom-checkbox-success" name="pernafasan" value="dibantu"> Dibantu
        </td>
    </tr>
    <tr>
        <td>Bila spontan</td>
        <td colspan="2">
            <input type="checkbox" class="custom-checkbox-success" name="bila_spontan" value="adekuat_bersuara"> Adekuat bersuara
            <input type="checkbox" class="custom-checkbox-success" name="bila_spontan" value="penyumbatan"> Penyumbatan
            <input type="checkbox" class="custom-checkbox-success" name="bila_spontan" value="membutuhkan_alat"> Membutuhkan bantuan alat
        </td>
    </tr>
    <tr>
        <td>Kesadaran</td>
        <td colspan="2">
            <div class="d-flex gap-2 align-items-center">
                <input type="checkbox" class="custom-checkbox-success" name="kesadaran" value="sadar_betul" id="sadar_betul"> <label for="sadar_betul">Sadar betul</label>
                <input type="checkbox" class="custom-checkbox-success" name="kesadaran" value="belum_sadar_betul" id="belum_sadar_betul"> <label for="belum_sadar_betul">Belum Sadar Betul</label>
                <input type="checkbox" class="custom-checkbox-success" name="kesadaran" value="tidur_dalam" id="tidur_dalam"><label for="tidur_dalam">Tidur Dalam</label>
                <input type="checkbox" class="custom-checkbox-success" name="vas">
                <label for="vas">VAS </label>

            </div>
        </td>
    </tr>
    <tr>
        <td>Skor ALDRETTE</td>
        <td colspan="2">
            Aktivitas <input type="text" class="form-control border-dark" name="aktivitas_aldrette">
            Sirkulasi <input type="text" class="form-control border-dark" name="sirkulasi_aldrette">
            Pernafasan <input type="text" class="form-control border-dark" name="pernafasan_skor">
            Kesadaran <input type="text" class="form-control border-dark" name="kesadaran_skor">
            Warna kulit <input type="text" class="form-control border-dark" name="warna_kulit_aldrette">
            Total <input type="text" class="form-control border-dark" name="total">
        </td>
    </tr>
</table>
<table class="table table-bordered border-dark">
    <tbody>
        <tr>
            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/pemulihan.png') ?>"
                style="height:400px;" data-input-name="image_drawer_state_image_pemulihan" />
            <input type="hidden" id="image_drawer_state_image_pemulihan" name="image_drawer_state_image_pemulihan"
                value="" />
        </tr>
    </tbody>
</table>


<table class="table table-bordered border-dark">
    <tr>
        <td colspan="2"><strong>Keluar kamar pulih :</strong></td>
        <td>Jam: <input type="time" class="form-control border-dark" name="jam_keluar" value="<?= date('H:i') ?>"></td>
        <td>
            <div class="d-flex align-items-center gap-2">
                <input type="checkbox" class="custom-checkbox-success" class="custom-checkbox-success" name="vas_keluar"><label for="vas_keluar_kamar">VAS</label>
            </div>
        </td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"><strong>Skor ALDRETTE</strong></td>
        <td>Aktivitas <input type="text" class="form-control border-dark" name="aktivitas"></td>
        <td>Sirkulasi <input type="text" class="form-control border-dark" name="sirkulasi"></td>
        <td></td>
    </tr>
    <tr>
        <td>Pernafasan <input type="text" class="form-control border-dark" name="pernafasan"></td>
        <td>Kesadaran <input type="text" class="form-control border-dark" name="kesadaran"></td>
        <td>Warna kulit <input type="text" class="form-control border-dark" name="warna_kulit"></td>
        <td>Total <input type="text" class="form-control border-dark" name="total_skor"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2">Ke:</td>
        <td><input type="checkbox" class="custom-checkbox-success" name="ruang_rawat"> Ruang Rawat</td>
        <td><input type="checkbox" class="custom-checkbox-success" name="icu"> ICU</td>
        <td><input type="checkbox" class="custom-checkbox-success" name="langsung_pulang"> Langsung Pulang</td>
    </tr>
    <tr>
        <td colspan="5">Catatan Khusus Ruang Pemulihan:<br>
            <div class="row">
                <div class="col-6">
                    <textarea name="catatan_khusus" rows="3" cols="80" class="form-control border-dark"></textarea>
                </div>
                <div class="col-6 text-center">
                    <div>Perawat Kamar Pemulihan</div>
                    <div class="my-2 text-center">
                        <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_perawat" />
                    </div>
                    <select type="select" name="perawat" id="perawat" class="form-select w-50 perawat"></select>
                </div>
            </div>
        </td>
    </tr>
</table>

<h3>INSTRUKSI PASCA BEDAH</h3>
<table class="table table-bordered border-dark">
    <tr>
        <td>Bila kesakitan:</td>
        <td><input type="text" class="form-control border-dark" name="bila_kesakitan"></td>
    </tr>
    <tr>
        <td>Bila mual/muntah:</td>
        <td><input type="text" class="form-control border-dark" name="bila_mual_muntah"></td>
    </tr>
    <tr>
        <td>Antibiotika:</td>
        <td><input type="text" class="form-control border-dark" name="antibiotika"></td>
    </tr>
    <tr>
        <td>Obat-obatan lain:</td>
        <td><input type="text" class="form-control border-dark" name="obat_lain"></td>
    </tr>
    <tr>
        <td>Infus:</td>
        <td><input type="text" class="form-control border-dark" name="infus"></td>
    </tr>
    <tr>
        <td>Minum:</td>
        <td><input type="text" class="form-control border-dark" name="minum"></td>
    </tr>
    <tr>
        <td>Pemantauan Tensi Nadi, Nafas setiap:</td>
        <td>
            <div class="d-flex gap-2 align-items-center">
                <input type="text" class="form-control border-dark" name="pemantauan_nadi" style="width:50%"> Selama <input type="text" class="form-control border-dark" name="selama" style="width:50%">
        </td>
        </div>
    </tr>
    <tr>
        <td>Lain-lain:</td>
        <td><input type="text" class="form-control border-dark" name="lain_lain"></td>
    </tr>
</table>

<p class="text-end"><strong>Dr. Anestesi</strong></p>
<div class="d-flex flex-column justify align-items-end">
    <img class="img-responsive center-block my-3" style="width: 10%;" id="qr_dokter_umum" />
    <select type="select" name="dokter_umum" id="dokter_umum" class="form-select w-25"></select>
</div>


<script>
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
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
                }
            })
        }, 500)

        $('#perawat').prop('disabled', false)
        $('#perawat').select2('open')
        $('#perawat').select2('close')
        if (mode === "lihat")
            $('#perawat').prop('disabled', true)

        setTimeout(() => {
            dataperawat?.map(v => {
                if (v.text === $('#perawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat')
                }
            })
        }, 500)
    }

    let dataDokter = []
    let dataperawat = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
        } = globalData;

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });

        $('#perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat')
        });

    })


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

    function listPerawat() {
        $('.perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
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
                    dataperawat = items
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

    listDokterUmumAPI()
    listPerawat()
</script>