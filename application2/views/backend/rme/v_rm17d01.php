<div class="row overflow-auto">
    <div class="col-12">
        <table class="table table-bordered border-dark">

            <tr>
                <td><label for="name" class="form-label">Nama</label></td>
                <td colspan="3"><input type="text" id="name" name="nama_pasien" class="form-control border-dark" disabled></td>

            </tr>
            <tr>
                <td><label for="dob" class="form-label">Tgl. Lahir</label></td>
                <td colspan="3"><input type="date" id="dob" name="tanggal_lahir" class="form-control border-dark" disabled></td>

            </tr>
            <tr>
                <td><label class="form-label">Jenis Kelamin</label></td>
                <td colspan="3">
                    <input type="text" id="gender" name="jenkel" class="form-control border-dark" disabled>
                </td>

            </tr>
            <tr>
                <td><label for="no_rm" class="form-label">No RM</label></td>
                <td colspan="3"><input type="text" id="no_rm" name="no_rm" class="form-control border-dark" disabled></td>

            </tr>
            <tr>
                <td><label for="room" class="form-label">Ruangan</label></td>
                <td colspan="3"><input type="text" id="room" name="nama_ruangan" class="form-control border-dark"></td>

            </tr>
            <tr>
                <td colspan="3"><b>PRA INDUKSI</b></td>
                <td>Tgl: <input type="date" class="form-control border-dark" name="tanggal" value="<?= date('Y-m-d') ?>"></td>
            </tr>
            <tr>
                <td>Spesialis Anestesi:</td>
                <td> <select type="select" name="dokter_umum_anestesi" class="form-select dokter_umum"
                        style="width: 100%;"></select></td>
                <td>Spesialis Bedah:</td>
                <td><select type="select" name="dokter_umum_bedah" class="form-select dokter_umum"
                        style="width: 100%;"></select></td>
            </tr>
            <tr>
                <td>Perawat Anesthesi:</td>
                <td colspan="3"> <select type="select" name="perawat_anesthesi" id="list_perawat" class="form-select"
                        style="width: 100%;"></select></td>
            </tr>
            <tr>
                <td>Diagnosis prabedah:</td>
                <td><select type="select" name="diagnosa_prabedah" class="form-select diagnosa">
                    </select></td>
                <td>Jenis pembedahan:</td>
                <td><input type="text" class="form-control border-dark" name="jenis_pembedahan"></td>
            </tr>
            <tr>
                <td>Diagnosis pascabedah:</td>
                <td colspan="3"><textarea name="diagnosa_pascabedah" class="form-control border-dark">
                </textarea></td>
            </tr>
            <tr>
                <td colspan="4"><b>Keadaan prabedah:</b></td>
            </tr>
            <tr>
                <td>BB: <input type="number" class="form-control border-dark" name="bb"></td>
                <td>TB: <input type="number" class="form-control border-dark" name="tb"></td>
                <td>Gol darah: <input type="text" class="form-control border-dark" name="gol_darah"></td>
                <td>Rh: <input type="text" class="form-control border-dark" name="rh"></td>
            </tr>
            <tr>
                <td>TD: <input type="text" class="form-control border-dark" name="td"></td>
                <td>Nadi: <input type="text" class="form-control border-dark" name="nadi"></td>
                <td>Suhu: <input type="text" class="form-control border-dark" name="suhu"></td>
                <td>Hb: <input type="text" class="form-control border-dark" name="hb"></td>
            </tr>
            <tr>
                <td>Ht: <input type="text" class="form-control border-dark" name="ht"></td>
                <td colspan="3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="fw-bold"> ALERGI: </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="radio" class="custom-checkbox-success" value="alergi_ya" id="alergi_ya" name="alergi"><label for="alergi_ya">Ya</label>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <input type="radio" class="custom-checkbox-danger" value="alergi_tidak" id="alergi_tidak" name="alergi"><label for="alergi_tidak">Tidak</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5"><b>Pemeriksaan fisik</b></td>
            </tr>
            <tr>
                <td>Jalan nafas:</td>
                <td colspan="3">
                    <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" class="custom-checkbox-success" value="normal_normal" id="normal_normal" name="normal"><label for="normal_normal">Normal</label>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" class="custom-checkbox-success" value="buka_mulut" id="buka_mulut" name="buka_mulut"><label for="buka_mulut">Buka mulut > 2 jari<br>Jarak Thyromental > 3 jari<br> Mallampati I / II<br> Gerakan Leher Maksimal</label>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" class="custom-checkbox-success" value="abnormal" id="abnormal" name="abnormal"><label for="abnormal">Abnormal</label>
                        </div>
                </td>

            </tr>
            <tr>
                <td colspan=""><b>Anamnesis</b></td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                        <input type="radio" value="anamnesis_auto" id="anamnesis_auto" name="anamnesis_auto_1" class="custom-checkbox-success"><label for="anamnesis_auto">Auto </label>
                    </div>
                </td>
                <td colspan="2">
                    <div class="d-flex align-items-center gap-2">
                        <input type="radio" value="anamnesis_allo" id="anamnesis_allo" name="anamnesis_allo_1" class="custom-checkbox-success"><label for="anamnesis_allo">Allo </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4"><textarea name="anamnesis" id="anamnesis" rows="5" class="form-control border-dark"></textarea></td>
            </tr>
            <tr>
                <td colspan="5"><b>Pemeriksaan fisik & penunjang</b></td>
            </tr>
            <tr>
                <td colspan="4"><textarea name="pemeriksaan_fisik" rows="5" class="form-control border-dark"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><b>STATUS FISIK ASA</b></td>
                <td colspan="2">
                    <div class="form-check form-check-inline">
                        <input class="custom-checkbox-success" type="radio" name="status_fisik_asa" id="asa1" value="1">
                        <label class="form-check-label" for="asa1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="custom-checkbox-success" type="radio" name="status_fisik_asa" id="asa2" value="2">
                        <label class="form-check-label" for="asa2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="custom-checkbox-success" type="radio" name="status_fisik_asa" id="asa3" value="3">
                        <label class="form-check-label" for="asa3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="custom-checkbox-success" type="radio" name="status_fisik_asa" id="asa4" value="4">
                        <label class="form-check-label" for="asa4">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="custom-checkbox-success" type="radio" name="status_fisik_asa" id="asa5" value="5">
                        <label class="form-check-label" for="asa5">5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="custom-checkbox-success" type="radio" name="status_fisik_asa" id="asaE" value="E">
                        <label class="form-check-label" for="asaE">E</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    Penyulit praanestesi:
                    <input type="text" class="form-control border-dark mt-3" name="penyulit_praanestesi">
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <p>Checklist sebelum induksi</p>
                    <section class="d-flex" style="gap: 15px">
                        <div class="form-check">
                            <input type="checkbox" id="ijin_operasi" class="custom-checkbox-success" name="ijin_operasi">
                            <label for="ijin_operasi" class="form-check-label form-label">Ijin operasi</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="cek_mesin_anestesi" class="custom-checkbox-success" name="cek_mesin_anestesi">
                            <label for="cek_mesin_anestesi" class="form-check-label form-label">Cek mesin anestesi</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="cek_suction_unit" class="custom-checkbox-success" name="cek_suction_unit">
                            <label for="cek_suction_unit" class="form-check-label form-label">Cek suction unit</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="persiapan_obat_obatan" class="custom-checkbox-success" name="persiapan_obat_obatan">
                            <label for="persiapan_obat_obatan" class="form-check-label form-label">Persiapan Obat-obatan</label>
                        </div>
                    </section>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <p>Checklist sebelum induksi</p>
                    <section class="d-flex" style="gap: 15px">
                        <div class="form-check">
                            <input type="checkbox" id="ga" class="custom-checkbox-success" name="ga" onclick="toggleInputFocus(this)">
                            <label for="ga" class="form-check-label form-label">GA</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="spinal" class="custom-checkbox-success" name="spinal" onclick="toggleInputFocus(this)">
                            <label for="spinal" class="form-check-label form-label">Spinal</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="epidural" class="custom-checkbox-success" name="epidural" onclick="toggleInputFocus(this)">
                            <label for="epidural" class="form-check-label form-label">Epidural</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="kaudal" class="custom-checkbox-success" name="kaudal" onclick="toggleInputFocus(this)">
                            <label for="kaudal" class="form-check-label form-label">Kaudal</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="brachial" class="custom-checkbox-success" name="brachial" onclick="toggleInputFocus(this)">
                            <label for="brachial" class="form-check-label form-label">Brachial</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="checklist_sebelum_induksi_lain" class="custom-checkbox-success" name="checklist_sebelum_induksi_lain" onclick="toggleInputFocus(this)">
                            <label for="checklist_sebelum_induksi_lain" class="form-check-label form-label">Lain-lain</label>
                            <input type="text" class="form-control border-dark" name="input_teknik_anestesi_lain" id="lainInput1" />
                        </div>

                    </section>

                </td>
            </tr>
            <tr>
                <td colspan="4"><b>Teknik Khusus:</b>
                    <section class="d-flex" style="gap: 15px">
                        <div class="form-check">
                            <input type="checkbox" id="hipotensi" class="custom-checkbox-success" name="hipotensi" onclick="clearLainInput()">
                            <label for="hipotensi" class="form-check-label form-label">Hipotensi</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="ventilasi_satu_paru" class="custom-checkbox-success" name="ventilasi_satu_paru" onclick="clearLainInput()">
                            <label for="ventilasi_satu_paru" class="form-check-label form-label">Ventilasi satu paru</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="cpb" class="custom-checkbox-success" name="cpb" onclick="clearLainInput()">
                            <label for="cpb" class="form-check-label form-label">CPB</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="sirkulatory_arrest" class="custom-checkbox-success" name="sirkulatory_arrest" onclick="clearLainInput()">
                            <label for="sirkulatory_arrest" class="form-check-label form-label">Sirkulatory Arrest</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="teknik_khusus_lain" class="custom-checkbox-success" name="teknik_khusus_lain" onclick="toggleLainInput()">
                            <label for="teknik_khusus_lain" class="form-check-label form-label">Lain-lain</label>
                            <input type="text" class="form-control border-dark" name="input_teknik_khusus_lain" id="lainInput2">
                        </div>

                    </section>
                </td>
            </tr>
            <tr>
                <td colspan="4"><b>Monitoring:</b>
                    <section class="d-flex" style="gap: 15px">

                        <div class="form-check">
                            <input type="checkbox" id="spo2" class="custom-checkbox-success" name="spo2">
                            <label for="spo2" class="form-check-label form-label">SpO2</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="etco2" class="custom-checkbox-success" name="etco2">
                            <label for="etco2" class="form-check-label form-label">EtCO2</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="nibp" class="custom-checkbox-success" name="nibp">
                            <label for="nibp" class="form-check-label form-label">NIBP</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="temp" class="custom-checkbox-success" name="temp">
                            <label for="temp" class="form-check-label form-label">Temp</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="stetoskop" class="custom-checkbox-success" name="stetoskop">
                            <label for="stetoskop" class="form-check-label form-label">Stetoskop</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="pa_catheter" class="custom-checkbox-success" name="pa_catheter">
                            <label for="pa_catheter" class="form-check-label form-label">PA Catheter</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="urine_catheter" class="custom-checkbox-success" name="urine_catheter">
                            <label for="urine_catheter" class="form-check-label form-label">Urine Catheter</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="ngt" class="custom-checkbox-success" name="ngt">
                            <label for="ngt" class="form-check-label form-label">NGT</label>
                        </div>
                    </section>
                    <section class="d-flex">
                        <div class="form-check">
                            <input type="checkbox" id="ekg_lead" class="custom-checkbox-success" name="ekg_lead" onclick="toggleInput('ekg')">
                            <label for="ekg_lead" class="form-check-label form-label">EKG Lead</label>
                            <textarea class="form-control border-dark" name="input_ekg_lead" id="ekgInput"></textarea>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="cvp" class="custom-checkbox-success" name="cvp" onclick="toggleInput('cvp')">
                            <label for="cvp" class="form-check-label form-label">CVP</label>
                            <textarea class="form-control border-dark" name="input_cvp" id="cvpInput"></textarea>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="arteri" class="custom-checkbox-success" name="arteri" onclick="toggleInput('arteri')">
                            <label for="arteri" class="form-check-label form-label">Arteri Line</label>
                            <textarea class="form-control border-dark" name="input_arteri" id="arteriInput"></textarea>
                        </div>


                    </section>
                </td>
            </tr>
            <tr>
                <td colspan="4"><b>Penilaian Pra Induksi:</b> <textarea class="form-control border-dark" style="width: 100%;" name="penilaian_pra_induksi" rows="4"></textarea></td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="row">
                        <div class="text-end">Tanda Tangan Anestesi</div>
                        <div class="text-end my-2">
                            <img class="img-responsive center-block mt-2" style="width: 8%;" id="qr_tanda_tangan_dokter" />
                        </div>
                        <div class="d-flex justify-content-end">
                            <select type="select" name="tanda_tangan_dokter" id="tanda_tangan_dokter" class="form-select dokter_umum w-25"></select>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<script>
    const mode = "<?= $mode; ?>"
    let dataDokter = []

    document.addEventListener("DOMContentLoaded", () => {
        // new MarkerManager(".marker-image");
    });

    function cbCommon(data) {
        populateFormFields(data);

        // fill image
        $('#tanda_tangan_dokter').prop('disabled', false)
        $('#tanda_tangan_dokter').select2('open')
        $('#tanda_tangan_dokter').select2('close')
        if (mode === "lihat")
            $('#tanda_tangan_dokter').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#tanda_tangan_dokter').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_tanda_tangan_dokter')
                }
            })
        }, 1000)
    }


    // FUNCTION PERAWAT LIST
    function listPerawatAPI() {
        $('#list_perawat').select2({
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
                    dataListPerawat = items
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
    // BATAS

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
    // batas

    $(document).ready(function() {
        let page = 1; // Track the current page

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;


        // dokter list
        listDokterUmumAPI()

        // perawat list
        listPerawatAPI()


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
            // minimumInputLength: 0,
        });

        $('.diagnosa').on('select2:open', function() {
            $('.select2-results__options').on('scroll', function() {

            });
            const $this = $(this);
            if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                page++; // Increment page
                $('.diagnosa').select2('data', null); // Trigger new data fetch
            }
        });


        $('#tanda_tangan_dokter').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_tanda_tangan_dokter')
        });

    })




    // Function to handle enabling input field when "Lain-lain" checkbox is checked
    function toggleInputFocus(checkbox) {
        const lainInput = document.getElementById('lainInput1'); // Get the input field for "Lain-lain"

        // Check if "Lain-lain" checkbox is selected
        if (checkbox.id === "checklist_sebelum_induksi_lain" && checkbox.checked) {
            lainInput.focus(); // Focus the input field
        }

        // If another checkbox is selected, reset the input field
        if (checkbox.id !== "checklist_sebelum_induksi_lain") {
            lainInput.value = ''; // Clear the value of the "Lain-lain" input
            document.getElementById('checklist_sebelum_induksi_lain').checked = false; // Uncheck the "Lain-lain" checkbox
        }
    }

    // Function to clear the "Lain-lain" input field when another checkbox is clicked
    function clearLainInput() {
        document.getElementById('teknik_khusus_lain').checked = false; // Uncheck the "Lain-lain" checkbox
        document.getElementById('lainInput2').value = ''; // Clear the value of the "Lain-lain" input
    }

    // Function to focus the "Lain-lain" input field when the checkbox is checked
    function toggleLainInput() {
        const lainInput = document.getElementById('lainInput2'); // Get the input field for "Lain-lain"

        // If the "Lain-lain" checkbox is checked, focus the input field
        if (document.getElementById('teknik_khusus_lain').checked) {
            lainInput.focus();
        }
    }


    // Function to handle the focus and input clearing based on checkbox selection
    function toggleInput(inputType) {
        // List of input types we are handling (EKG, CVP, Arteri)
        const inputs = ['ekg', 'cvp', 'arteri'];

        // Loop through each input type and handle the focus and reset
        inputs.forEach(type => {
            const inputField = document.getElementById(type + 'Input'); // Find the corresponding input field (textarea)
            const checkbox = document.getElementById(type + '_lead') || document.getElementById(type); // Find the corresponding checkbox

            // If the current type is not the selected one, clear and uncheck it
            if (type !== inputType) {
                // inputField.value = ''; // Clear the value of the input field
                // checkbox.checked = false; // Uncheck the checkbox
            } else {
                // If the type matches, focus on the input field
                inputField.focus(); // Focus on the input field
            }
        });
    }
</script>