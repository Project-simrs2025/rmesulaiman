<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="">NO. RM :</label>
            <input type="text" class="form-control border-dark border-dark" value="<?= $no_rm; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="">Nama Pasien :</label>
            <input type="text" class="form-control border-dark border-dark" value="<?= $nama_pasien; ?>" disabled>
        </div>

        <div class="my-2">
            <div class="d-flex align-items-center">
                <div class="col-6">
                    <label for="" class="flex-shrink-0">Dirawat Di :</label>
                    <input type="text" class="form-control border-dark border-dark" name="rawat" value="<?= $nama_ruangan; ?>">
                </div>
                <div class="col-6 ms-2">
                    <label for="" class="flex-shrink-0">Kelas :</label>
                    <input type="text" class="form-control border-dark border-dark" value="<?= $kelas; ?>" name="kelas_rawat">
                </div>
            </div>
        </div>

        <div class="my-2">
            <div class="d-flex align-items-center">
                <div class="col-6">
                    <label for="" class="flex-shrink-0">Masuk Tanggal :</label>
                    <input type="date" class="form-control border-dark border-dark " onclick="this.showPicker()" name="masuk_tanggal">
                </div>
                <div class="col-6 ms-2">
                    <label for="" class="flex-shrink-0">Pukul</label>
                    <input type="time" class="form-control border-dark border-dark" name="jam_masuk">
                </div>
            </div>
        </div>

        <div class="my-2">
            <div class="d-flex align-items-center">
                <div class="col-6">
                    <label for="" class="flex-shrink-0">Pulang Tanggal :</label>
                    <input type="date" class="form-control border-dark border-dark " onclick="this.showPicker()" name="tanggal_pulang">
                </div>
                <div class="col-6 ms-2">
                    <label for="" class="flex-shrink-0">Pukul</label>
                    <input type="time" class="form-control border-dark border-dark" name="jam_pulang">
                </div>
            </div>
        </div>

    </div>

    <!-- side -->
    <div class="col-6">
        <div class="mb-4">
            <span>Status Keperawatan :</span>
        </div>
        <div class="d-flex gap-2">
            <div class="col-6 d-flex flex-column gap-4">
                <div>
                    <input type="radio" name="keperawatan" class="custom-checkbox-success" value="umum" id="umum">
                    <label for="umum">Umum</label>
                </div>
                <div>
                    <input type="radio" name="keperawatan" class="custom-checkbox-success" value="bpjs" id="">
                    <label for="bpjs">BPJS</label>
                </div>
                <div>
                    <input type="radio" name="keperawatan" class="custom-checkbox-success" value="jampersal" id="jampersal">
                    <label for="jampersal">Jampersal</label>
                </div>
            </div>

            <div class="col-6 d-flex flex-column gap-4">
                <div>
                    <input type="radio" name="keperawatan" class="custom-checkbox-success" value="bpjs_ketenagakerjaan" id="ketenagakerjaan">
                    <label for="ketenagakerjaan">BPJS Ketenagakerjaan</label>
                </div>
                <div>
                    <input type="radio" name="keperawatan" class="custom-checkbox-success" value="jasaraharja" id="jasaraharja">
                    <label for="jasaraharja">Jasaraharja</label>
                </div>
                <div>
                    <input type="radio" name="keperawatan" class="custom-checkbox-success" value="jampkesda" id="jampkesda">
                    <label for="jampkesda">Jampkesda</label>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered border-dark" id="VisiteProgramTable">
            <thead>
                <tr align="center">
                    <td>No</td>
                    <td>
                        <div>Tanggal / Jam</div>
                    </td>
                    <td>
                        <div style="width: 250px;">Nama Dokter</div>
                    </td>
                    <td>Waktu Visite(waktu)</td>
                    <td>
                        <div>Tanda Tangan</div>
                    </td>
                </tr>
            </thead>
            <tbody id="table-body">
                <tr>
                    <td>1</td>
                    <td>
                        <input type="datetime-local" class="form-control border-dark" name="tanggal_pemeriksaan[]">
                    </td>

                    <td>
                        <select type="select" name="perawat_pengkaji" id="perawat_pengkaji" class="form-select perawat" style="width: 250px;"></select>
                    </td>

                    <td>
                        <div>
                            <input type="text" name="waktu_visit[]" id="" class="form-control border-dark">
                        </div>
                    </td>

                    <td>
                        <div class="text-center my-2">
                            <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_perawat_pengkaji" />
                        </div>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
</div>
</table>



<button type="button" class="btn btn-primary mt-3" onclick="tambahBaris()">Tambah Berkas Lainnya</button>





<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawat = []
    let dataDokter = []

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

                        if (selector === '.perawat') dataListPerawat = items;
                        else if (selector === '.dokter') dataDokter = items;

                        const defaultOption = [{
                            id: '',
                            text: '--pilih--'
                        }];
                        return {
                            results: defaultOption.concat(items),
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

            $(selector).on('select2:open', function() {
                $('.select2-results__options').off('scroll').on('scroll', function() {
                    const $this = $(this);
                    if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                        page++;
                        $(selector).select2('data', null);
                    }
                });
            });
        });

        // Event handler perawat_pengkaji utama
        $('#perawat_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_pengkaji');
        });

        // Event handler perawat_pengkaji kedua
        $('#perawat_pengkaji_2').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_pengkaji_2');
        });

        // Event handler perawat_pengkaji kedua
        $('#perawat_pengkaji_3').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_pengkaji_3');
        });

        // Event handler dokter_pengkaji
        $('#dokter_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_pengkaji');
        });

    });

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    let counter = 1;

    // Fungsi untuk daftarkan event handler select2:select perawat_pengkaji dinamis
    function registerPerawatSelectHandlers(maxIndex) {
        for (let i = 1; i <= maxIndex; i++) {
            const selector = `#perawat_pengkaji_${i}`;
            if ($(selector).length) {
                $(selector).off('select2:select').on('select2:select', function(e) {
                    const {
                        id_original
                    } = e.params.data;
                    QRSignatureAPI(id_original, `qr_perawat_pengkaji_${i}`);
                });
            }
        }
    }


    // Fungsi untuk daftarkan event handler select2:select perawat_pengkaji dinamis
    function registerPerawatSelectHandlersOne(maxIndex) {
        for (let i = 1; i <= maxIndex; i++) {
            const selector = `#perawat_pengkaji_1_${i}`;
            if ($(selector).length) {
                $(selector).off('select2:select').on('select2:select', function(e) {
                    const {
                        id_original
                    } = e.params.data;
                    QRSignatureAPI(id_original, `qr_perawat_pengkaji_1_${i}`);
                });
            }
        }
    }


    // Fungsi untuk daftarkan event handler select2:select perawat_pengkaji dinamis
    function registerPerawatSelectHandlersThree(maxIndex) {
        for (let i = 1; i <= maxIndex; i++) {
            const selector = `#perawat_pengkaji_3_${i}`;
            if ($(selector).length) {
                $(selector).off('select2:select').on('select2:select', function(e) {
                    const {
                        id_original
                    } = e.params.data;
                    QRSignatureAPI(id_original, `qr_perawat_pengkaji_3_${i}`);
                });
            }
        }
    }

    // Fungsi untuk daftarkan event handler select2:select dokter_pengkaji dinamis
    function registerDokterSelectHandlers(maxIndex) {
        for (let i = 1; i <= maxIndex; i++) {
            const selector = `#dokter_pengkaji_${i}`;
            if ($(selector).length) {
                $(selector).off('select2:select').on('select2:select', function(e) {
                    const {
                        id_original
                    } = e.params.data;
                    QRSignatureAPI(id_original, `qr_dokter_pengkaji_${i}`);
                });
            }
        }
    }

    function tambahBaris() {
        let tbody = document.getElementById("VisiteProgramTable");
        let newRow = document.createElement("tbody");



        newRow.innerHTML = `
            <td>${counter + 1}</td>
            <td>
                 <input type="datetime-local" class="form-control border-dark" name="tanggal_pemeriksaan[]">
            </td>
            <td>
                <select name="perawat_pe[]" id="perawat_pengkaji_1_${counter}" class="form-select perawat" style="width: 250px;"></select>
            </td>

        
            <td>
              <input type="text" name="waktu_visit[]" class="form-control border-dark">
            </td>

            <td>
                <div class="text-center my-2">
                    <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_perawat_pengkaji_1_${counter}" />
                </div>
            </td>
           
                
        </tr>
    `;

        tbody.appendChild(newRow);




        // Inisialisasi select2 untuk perawat yang baru ditambahkan
        $(`#perawat_pengkaji_1_${counter}`).select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                        limit: 100,
                        offset: 0,
                    };
                },
                processResults: function(data) {
                    const defaultOption = [{
                        id: '',
                        text: '--pilih--'
                    }];
                    const combinedItems = defaultOption.concat(data.data.items);
                    return {
                        results: combinedItems,
                        pagination: {
                            more: data.data.more
                        },
                    };
                },
                cache: true,
            },
            placeholder: '--pilih--',
            allowClear: true,
        });



        // Daftarkan event handler dinamis sesuai counter
        registerPerawatSelectHandlers(counter);

        counter++;
        callMarkerManager(); // update tanda tangan
    }



    // function hapusBaris(button) {
    //     if (counter > 2) counter--;
    //     let row = button.parentNode.parentNode;
    //     row.remove();
    // }

    function cbCommon(data) {
        const tableBody = document.getElementById("VisiteProgramTable");
        let rows = tableBody.getElementsByTagName("tbody");


        const tanggalPemeriksaan1 = data.get("tanggal_pemeriksaan") || [];

        //batas

        const namaPemeriksa = data.get("nama_pemeriksa") || [];
        const catatanPemberi = data.get("catatan_asuhan_pemberi") || [];
        // soap/soar
        const waktu_visit = data.get("waktu_visit") || [];


        const perawatPengkajiData = data.get("perawat_pe") || [];
        const arrays = [
            tanggalPemeriksaan1,
            waktu_visit,
            perawatPengkajiData
        ];

        const maxLength = Math.max(...arrays.map(arr => arr.length));


        // Tambah baris jika kurang dari maxLength
        while (rows.length < maxLength) {
            tambahBaris();
            rows = tableBody.getElementsByTagName("tbody");
        }

        populateFormFields(data, false);

        for (let i = 0; i < maxLength; i++) {
            const row = rows[i];
            const tanggalPemeriksaan1Input = row.querySelector('input[name="tanggal_pemeriksaan[]"]');
            const waktu_visitInput = row.querySelector('input[name="waktu_visit[]"]');
            const perawatPengkajiInput = row.querySelector('select[name="perawat_pe[]"]');

            if (tanggalPemeriksaan1Input && tanggalPemeriksaan1[i]) tanggalPemeriksaan1Input.value = tanggalPemeriksaan1[i];

            if (waktu_visitInput && waktu_visit[i]) waktu_visitInput.value = waktu_visit[i];

            if (perawatPengkajiInput && perawatPengkajiData[i - 1]) {
                const nama = perawatPengkajiData[i - 1];
                const option = new Option(nama, nama, true, true);
                $(perawatPengkajiInput).append(option).trigger('change');
            }


        }

        // Setup perawat_pengkaji utama
        $('#perawat_pengkaji').prop('disabled', false).select2('open').select2('close');
        if (mode === "lihat") $('#perawat_pengkaji').prop('disabled', true);

        setTimeout(() => {
            dataListPerawat?.forEach(v => {
                if (v.text === $('#perawat_pengkaji').select2('data')[0]?.text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_pengkaji');
                }
            });
        }, 1000);



        setTimeout(() => {
            dataDokter?.forEach(v => {
                if (v.text === $('#perawat_pengkaji_2').select2('data')[0]?.text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_pengkaji_2');
                }
            });
        }, 1000);






        // Setup perawat_pengkaji dinamis
        for (let i = 1; i <= maxLength; i++) {
            const selector = `#perawat_pengkaji_1_${i}`;
            $(selector).prop('disabled', false).select2('open').select2('close');
            if (mode === "lihat") $(selector).prop('disabled', true);

            setTimeout(() => {
                dataListPerawat?.forEach(v => {
                    const selectedData = $(selector).select2('data')[0];
                    if (v.text === selectedData?.text) {
                        QRSignatureAPI(v.id_original, `qr_perawat_pengkaji_1_${i}`);
                    }
                });
            }, 1000);
        }




        // Daftarkan event handler dinamis sesuai jumlah baris
        registerPerawatSelectHandlers(maxLength);
    }
</script>