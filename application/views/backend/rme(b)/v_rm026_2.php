<div class="row">

    <table class="table table-bordered border-dark">
        <tr>
            <td class="col-6">
                <h6 class="text-center">Asesment Pra Induksi</h6>
            </td>
            <td class="col-6">
                <div class="d-flex align-items-center">
                    <div class="col-3">No. Rm</div>
                    <input type="text" name="no_rm" id="" class="form-control border-dark">
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-3">Nama</div>
                    <input type="text" name="nama_pasien" id="" class="form-control border-dark">
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-3">Tanggal Lahir</div>
                    <input type="text" name="tanggal_lahir" id="" class="form-control border-dark">
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-3">Umur</div>
                    <input type="text" name="umur" id="" class="form-control border-dark">
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-3">Jenis Kelamin</div>
                    <input type="text" name="jenkel" id="" class="form-control border-dark">
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div>Ahli Bedah</div>
                <select type="select" name="ahliBedah" id="ahliBedah" class="form-select allKaryawan" style="width: 100%;"></select>
            </td>
            <td>
                <div>Ahli Anestesi</div>
                <select type="select" name="ahliAnestesi" id="ahliAnestesi" class="form-select allKaryawan" style="width: 100%;"></select>
            </td>
        </tr>
        <tr>
            <td>
                <div>Diagnosis Pra Bedah</div>
                <select type="select" name="diagnosisPraBedah" id="diagnosisPraBedah" class="form-select diagnosa" style="width: 100%;"></select>
            </td>
            <td>
                <div>Jenis Anestesi</div>
                <input type="text" name="jenis_anestesi" class="form-control border-dark">
            </td>
        </tr>
        <tr>
            <td>
                <div>Jenis Pembedahan</div>
                <input type="text" name="jenisPembedahan" class="form-control border-dark">
            </td>
            <td>
                <div>Teknik Anestesi</div>
                <input type="text" name="teknikAnestesi" class="form-control border-dark">
            </td>
        </tr>

        <tr>
            <td>
                <div class="d-flex flex-column gap-2">
                    <div class="">
                        <div>Riwayat Penyakit :</div>
                        <textarea name="riwayat_penyakit" id="" class="form-control border-dark" rows="2"></textarea>
                    </div>

                    <div class="">
                        <div>Riwayat Penyakit Keluarga dan Anestesi :</div>
                        <textarea name="riwayat_penyakit_keluarga" id="" class="form-control border-dark" rows="2"></textarea>
                    </div>

                    <div class="">
                        <div>Alergi :</div>
                        <textarea name="alergi_penyakit" id="" class="form-control border-dark" rows="2"></textarea>
                    </div>

                    <div>
                        <div>Perokok</div>
                        <input type="text" name="perokok" id="" class="form-control border-dark">
                    </div>

                    <!-- vital_Sign -->
                    <div>Vital Sign :</div>
                    <div class="row">
                        <div class="col-6 d-flex flex-column gap-2">
                            <div class="d-flex gap-2 align-items-center">
                                <div>Tensi</div>
                                <input type="text" name="tensi_vital_sign" class="form-control border-dark">
                                <span class="col-4">mmHg</span>
                            </div>

                            <div class="d-flex gap-2 align-items-center">
                                <div>Nadi</div>
                                <input type="text" name="nadi_vital_sign" class="form-control border-dark">
                                <span class="col-4">x/menit</span>
                            </div>

                            <div class="d-flex gap-2 align-items-center">
                                <div>SPo2</div>
                                <input type="text" name="spo2_vital_sign" class="form-control border-dark">
                                <span class="col-4">%</span>
                            </div>
                        </div>

                        <div class="col-6 d-flex flex-column gap-2">
                            <div class="d-flex gap-2 align-items-center">
                                <div>Suhu</div>
                                <input type="text" name="suhu_vital_sign" class="form-control border-dark">
                                <span class="col-4">&deg; C</span>
                            </div>

                            <div class="d-flex gap-2 align-items-center">
                                <div class="col-2">RR</div>
                                <input type="text" name="rr_vital_sign" class="form-control border-dark">
                                <span class="col-4">x/menit</span>
                            </div>

                            <div class="d-flex gap-2 align-items-center">
                                <div>Nyeri</div>
                                <input type="text" name="nyeri_vital_sign" class="form-control border-dark" placeholder="0 - 10">
                                <span class="col-4"></span>
                            </div>
                        </div>
                    </div>
                    <!-- vital sign -->

                    <!--======== pemeriksaan fisi ===========-->
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Pemeriksaan Fisik :</div>
                        <input type="text" name="pemeriksaan_fisik" id="" class="form-control border-dark">
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Berat :</div>
                        <input type="text" name="berat" id="" class="form-control border-dark w-25">
                        <span>Kg</span>
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Tinggi :</div>
                        <input type="text" name="Tinggi" id="" class="form-control border-dark w-25">
                        <span>cm</span>
                    </div>
                    <!--======== pemeriksaan fisi ===========-->


                    <!--======== kedaan umum ================-->
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Keadaan Umum :</div>
                        <input type="text" name="keadaan_umum" id="" class="form-control border-dark">
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Kepala:</div>
                        <input type="text" name="kepala" id="" class="form-control border-dark">
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Dada :</div>
                        <input type="text" name="dada" id="" class="form-control border-dark">
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Jantung :</div>
                        <input type="text" name="Jantung" id="" class="form-control border-dark">
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Paru :</div>
                        <input type="text" name="Paru" id="" class="form-control border-dark">
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Abdomen :</div>
                        <input type="text" name="Abdomen" id="" class="form-control border-dark">
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Ektremitas :</div>
                        <input type="text" name="Ektremitas" id="" class="form-control border-dark">
                    </div>

                    <div class="d-flex flex-column gap-2">
                        <div>Laboratorium dan Pemeriksaan Penunjang Lainnya :</div>
                        <textarea name="lab_penunjang" id="" class="form-control border-dark" rows="3"></textarea>
                    </div>
                    <!--======== kedaan umum ================-->
                </div>
            </td>

            <td>
                <div class="d-flex flex-column gap-2">
                    <div>Problem Dan Konsultasi Spesialis</div>
                    <textarea name="problem_konsultasi" id="" class="form-control border-dark" rows="4"></textarea>

                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3">Premedikasi :</div>
                        <textarea name="premedikasi" id="" class="form-control border-dark"></textarea>
                    </div>
                    <!-- Add Row Button -->
                    <div class="d-flex justify-content-between align-items-center my-1">
                        <div>Obat :</div>
                        <button type="button" class="btn btn-primary" onclick="addRow()">
                            <span class="bi bi-plus"></span>
                        </button>
                    </div>

                    <table class="table table-bordered mt-4 border-dark" id="VisiteProgramTable">
                        <thead class="table-bordered border-dark text-center">
                            <th>no</th>
                            <th>Obat</th>
                            <th>Tanggal</th>
                            <th>action</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                    <div>Intruksi Dokter Anestesi</div>
                    <textarea name="intruksi_dokter" id="" class="form-control border-dark" rows="5"></textarea>

                    <div class="d-flex align-items-center justify-content-end gap-2">
                        <?= $city_sign; ?>, <input type="datetime-local" class="form-control border-dark w-50" name="time_city" value="<?= date('Y-m-d H:i'); ?>">
                    </div>

                    <div class="text-end">
                        Dokter Anestesi
                    </div>

                    <div class="text-end my-2">
                        <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_dokter_anestesi" />
                    </div>
                    <select type="select" name="dokter_Anestesi" id="dokter_anestesi" class="form-select dokter"></select>
                </div>
            </td>
        </tr>
    </table>
</div>

<script>
    let dataDokter = []
    let dataAllKaryawan = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listGetAllKaryawan()
        listDokterUmum()

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


        $('#dokter_anestesi').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_anestesi')
        });
    });

    function addRow() {
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        const rowCount = table.rows.length;
        const newRow = table.insertRow(rowCount);

        newRow.classList.add("text-center");

        const cells = [
            `<p>${rowCount + 1}</p>`,
            `<textarea name="nama_obat[]" rows="4" class="form-control border-dark"></textarea>`,
            `<input type="datetime-local" name="jam[]" class="form-control border-dark" value="<?= date('Y-m-d'); ?> ">`,
            `<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(this)" id="btn_delete"><span class="bi bi-trash"></span></button>`
        ];

        cells.forEach((cell, index) => {
            const newCell = newRow.insertCell(index);
            newCell.innerHTML = cell;
        });

        return newRow;
    }

    function deleteRow(button) {
        const row = button.parentElement.parentElement;
        row.remove();

        // Re-number rows after deletion
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        for (let i = 0; i < table.rows.length; i++) {
            table.rows[i].cells[0].innerHTML = `<p>${i + 1}</p>`;
        }
    }

    function cbCommon(data) {


        console.log("Data from server:", data);

        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        table.innerHTML = ""; // Clear table

        const dataLength = data.values().next().value.length;

        // Create params array: each row is [jam, nama_obat]
        const params = Array.from({
                length: dataLength
            }, (_, rowIndex) =>
            Array.from(data.keys(), (key) => data.get(key)[rowIndex])
        );

        console.log("Parsed Params:", params);

        for (let i = 0; i < params.length; i++) {
            const [nama_obat, jam] = params[i];

            const tr = addRow();

            const inputs = tr.querySelectorAll("input"); // includes datetime-local
            const textarea = tr.querySelector("textarea");


            if (textarea) {
                textarea.value = nama_obat;
            }
            if (inputs.length > 0) {
                inputs[0].value = jam;
            }
        }

        $('#dokter_anestesi').prop('disabled', false)
        $('#dokter_anestesi').select2('open')
        $('#dokter_anestesi').select2('close')
        if (mode === "lihat")
            $('#dokter_anestesi').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_anestesi').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_anestesi')
                }
            })
        }, 1000)
    }



    function listDokterUmum() {
        $('.dokter').select2({
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


    function listGetAllKaryawan() {
        $('.allKaryawan').select2({
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