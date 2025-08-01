<!-- BATAS GANTI -->
<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3">
            <tbody>
                <tr>
                    <td>
                        <?php

                        $dataform1 = array(
                            array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "$nama_pasien", 'holder' => "Masukkan Nama Pasien", 'status' => "disabled"),
                            array('nama' => "NIK", 'name' => "nik", 'tipe' => "text", 'values' => "$nik", 'holder' => "Masukkan NIK", 'status' => "disabled"),
                            array('nama' => "Pendidikan", 'name' => "pendidikan_terakhir", 'tipe' => "text", 'values' => "$pendidikan_terakhir", 'holder' => "Masukkan Nama Pendidikan", 'status' => "disabled"),
                            array('nama' => "Pekerjaan", 'name' => "nama_pekerjaan", 'tipe' => "text", 'values' => "$nama_pekerjaan", 'holder' => "Masukkan Nama Pekerjaan", 'status' => "disabled"),
                            array('nama' => "No. Rm", 'tipe' => "text", 'values' => "$no_rm", 'holder' => "Masukkan No Rm", 'status' => "disabled"),
                        );
                        foreach ($dataform1 as $a) {
                            echo "<div class='form-group mt-3'>";
                            echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
                            echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>";
                        }
                        ?>


                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group mt-3">
                            <label for="" class="flex-shrink-0">Tanggal lahir/Umur :</label>
                            <div class="d-flex gap-2 align-items-center">
                                <input type="text" class="form-control border-dark w-50" value="<?= $tgl_lahir; ?>" disabled> /
                                <input type="text" class="form-control border-dark w-50" value="<?= $umur; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control border-dark" value="<?= $jenkel; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Tgl Masuk</label>
                            <input type="text" class="form-control border-dark" value="<?= $tgl_admit; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Nama DPJP :</label>
                            <input type="text" class="form-control border-dark" name="nama_dokter">
                        </div>
                        <div class="form-group">
                            <label for="">Nilai Pribadi:</label>
                            <input type="text" class="form-control border-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span>( Tempelkan stiker identitas pasien jika tersedia )</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <p class="ms-4 my-3">I. Di isi oleh Pasien/Peserta</p>
        <table class="table table-bordered border-dark">
            <tr>
                <td><label for="">Nama Pasien :</label></td>
                <td><input type="text" class="form-control w-100 border-dark" value="<?= $nama_pasien; ?>" disabled></td>
            </tr>
            <tr>
                <td><label for="">Tanggal Lahir :</label></td>
                <td><input type="date" class="form-control w-100 border-dark" value="<?= $tgl_lahir; ?>" disabled></td>
            </tr>
            <tr>
                <td><label for="">Alamat :</label></td>
                <td><input type="text" class="form-control w-100 border-dark" name="alamat"></td>
            </tr>
            <tr>
                <td><label for="">Telp/Hp :</label></td>
                <td><input type="text" class="form-control w-100 border-dark" value="<?= $no_hp; ?>" disabled></td>
            </tr>
            <tr>
                <td><span>Hubungan dengan bertanggung :</span></td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <div>
                            <input type="radio" name="hubKeluarga" value="suami_istri" id="suamiIstri" class="custom-checkbox-success" onchange="toggleInput()">
                        </div>
                        <label for="suamiIstri" class="flex-shrink-0">Suami/Istri</label>

                        <div>
                            <input type="radio" name="hubKeluarga" value="anak" id="anak" class="custom-checkbox-success" onchange="toggleInput()">
                        </div>
                        <label for="anak">Anak</label>

                        <div>
                            <input type="radio" name="hubKeluarga" value="lainnya" id="lainnya" class="custom-checkbox-success" onchange="toggleInput()">
                        </div>
                        <label for="lainnya">Lainnya</label>

                        <!-- The 'Lainnya' input will be hidden by default -->
                        <input type="text" class="border-dark form-control" name="keluarga_lainnya" id="hubLainnya" readonly>
                    </div>
                </td>
            </tr>

        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <p class="ms-4 my-3">II. Diisi oleh Dokter Sp.KFR </p>
        <table class="table table-bordered border-dark">

            <tr>
                <td><label for="">Tanggal Pelayanan :</label></td>
                <td><input type="date" class="form-control w-100 border-dark" onclick="this.showPicker()" value="<?= date('Y-m-d'); ?>"></td>
            </tr>
            <tr>
                <td><label for="">Anamnesa :</label></td>
                <td><input type="text" class="form-control w-100 border-dark" name="dAnamnesa"></td>
            </tr>
            <tr>
                <td><label for="">Pemeriksaan Fisik dan Uji fungsi :</label></td>
                <td><input type="text" class="form-control w-100 border-dark" name="Pfisik"></td>
            </tr>
            <tr>
                <td><label for="">Diagnosis Medis (ICD 10) :</label></td>
                <td><select type="select" name="diagnosa1" class="form-select diagnosa" style="width: 100%;">
                    </select></td>
            </tr>
            <tr>
                <td><label for="">Diagnosis Fungsi (ICD 10) :</label></td>
                <td><select type="select" name="diagnosa" class="form-select diagnosa" style="width: 100%;">
                    </select></td>
            </tr>
            <tr>
                <td><label for="">Pemeriksaan Penunjang :</label></td>
                <td><input type="text" class="form-control w-100 border-dark" name="Ppenunjang"></td>
            </tr>
            <tr>
                <td><label for="">Tata Laksana KFR (ICD 10) :</label></td>
                <td><input type="text" class="form-control w-100 border-dark" name="tata_laksana"></td>
            </tr>
            <tr>
                <td><label for="">Anjuran :</label></td>
                <td><input type="text" class="form-control w-100 border-dark" name="anjuran"></td>
            </tr>
            <tr>
                <td><label for="">Evaluasi :</label></td>
                <td><input type="text" class="form-control w-100 border-dark" name="evaluasi"></td>
            </tr>
            <tr>
                <td><label for="">Suspek Penyakit Akibat Kerja :</label></td>
                <td>
                    <div class="d-flex gap-2 align-items-center">

                        <div>
                            <input type="radio" name="suspek" value="lainnya" id="Yasuspek" class="custom-checkbox-success" onchange="toggleSuspekInput()">
                        </div>
                        <label for="Yasuspek">Ya</label>

                        <input type="text" class="form-control border-dark" name="lainnya2" id="lainnya2" readonly>
                    </div>

                    <div class="d-flex gap-2 align-items-center mt-2">
                        <div>
                            <input type="radio" name="suspek" value="tidak" id="suspekTidak" class="custom-checkbox-danger" onchange="toggleSuspekInput()">
                        </div>
                        <label for="suspekTidak">Tidak</label>
                    </div>
                </td>
            </tr>

        </table>
    </div>
</div>

<!-- table 3 -->
<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td class="col-6 text-center">
                    <label for="" class="mt-2 text-center">Tanda Tangan Pasien</label>
                    <div class="d-flex flex-column align-items-center">
                        <img class="marker-image my-2" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 350px; max-height:180px;" data-input-name="image_drawer_state_image_rm1" />
                        <input type="hidden" id="image_drawer_state_image_rm1" name="image_drawer_state_image_rm1"
                            value="" />
                        <input type="text" class="form-control w-100 border-dark" name="nama_pasien">
                    </div>
                </td>
                <td>
                    <div class="mb-4 text-end">
                        <div class="d-flex gap-2 align-items-center justify-content-end">
                            <div>
                                <label for="" class="text-center flex-shrink-0 me-2"><?= $city_sign; ?></label>
                            </div>
                            <input type="date" name="tanggal_p" class="form-control w-50 border-dark" value="<?= date('Y-m-d'); ?>">
                        </div>
                    </div>

                    <div class="d-flex flex-column align-items-center ">
                        <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_umum" />
                        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 70%;"></select>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</div>
<!-- BATAS GANTI -->


<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()

        $('.diagnosa').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
                dataType: 'json',
                delay: 250, // Delay in ms while typing
                data: function(params) {
                    // Send search term, limit, and offset
                    return {
                        q: params.term, // Search query
                        limit: 100, // Number of items per page
                        offset: (page - 1) * 100, // Calculate offset based on the page
                    };
                },
                processResults: function(data) {
                    console.log(data)
                    const {
                        items,
                        more
                    } = data.data;

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

        // Handle scroll to load more data
        $('.diagnosa').on('select2:open', function() {
            $('.select2-results__options').on('scroll', function() {
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    if (page > 0) { // Check if more pages are available
                        page++; // Increment page
                        $('.diagnosa').select2('open'); // Keep dropdown open
                        $('.diagnosa').select2('data', null); // Clear current data
                    }
                }
            });
        });


        // Menambahkan event listener untuk perubahan pada radio button "hubKeluarga"
        $('input[name="hubKeluarga"]').on('change', function() {
            // Jika radio button selain "Lainnya" dipilih, kosongkan input teks
            if (this.value !== 'lainnya') {
                $('#hubLainnya').val(''); // Mengosongkan input teks
            }
        });

        // Jika "Lainnya" dipilih, fokuskan ke input teks
        $('input[name="hubKeluarga"]').on('change', function() {
            if ($('#lainnya').is(':checked')) {
                $('#hubLainnya').focus(); // Fokuskan ke input teks
            }
        });

        // Menambahkan event listener untuk perubahan pada radio button "suspek"
        $('input[name="suspek"]').on('change', function() {
            // Jika radio button selain "Lainnya" dipilih
            if (this.value !== 'lainnya') {
                $('#lainnya2').val(''); // Mengosongkan input teks
                $('#lainnya2').prop('readonly', true); // Menjadikan input readonly
            } else {
                $('#lainnya2').prop('readonly', false); // Membuat input bisa diubah
                $('#lainnya2').focus(); // Fokuskan ke input teks
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



    function toggleInput() {
        // Get the 'lainnya' radio button and the 'hubLainnya' input field
        const lainnyaRadio = document.getElementById('lainnya');
        const hubLainnyaInput = document.getElementById('hubLainnya');

        // If 'lainnya' is checked, enable the text input and focus it
        if (lainnyaRadio.checked) {
            hubLainnyaInput.readOnly = false; // Make input editable
            hubLainnyaInput.focus(); // Optionally focus the input when selected
        } else {
            hubLainnyaInput.readOnly = true; // Make input read-only
        }
    }

    function toggleSuspekInput() {
        // Get the 'suspekLainnya' radio button and the 'lainnya2' input field
        const suspekLainnyaRadio = document.getElementById('suspekLainnya');
        const lainnyaInput = document.getElementById('lainnya2');

        // If 'suspekLainnya' is checked, enable the text input and focus it
        if (suspekLainnyaRadio.checked) {
            lainnyaInput.readOnly = false; // Make input editable
            lainnyaInput.focus(); // Optionally focus the input when selected
        } else {
            lainnyaInput.readOnly = true; // Make input read-only
        }
    }
</script>