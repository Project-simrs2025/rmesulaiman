<!-- RM 18a persiapan operasi -->

<div class="d-flex align-items-center gap-2 flex-column">
    <div class="d-flex gap-2 align-items-center w-100">
        <div class="col-md-3">No. Rekam Medis</div>
        <input type="text" class="form-control border-dark" name="no_rm">
    </div>

    <div class="d-flex gap-2 align-items-center w-100">
        <div class="col-md-3">Nama Pasien</div>
        <input type="text" class="form-control border-dark" name="nama_pasien">
    </div>

    <div class="d-flex gap-2 align-items-center w-100">
        <div class="col-md-3">Tgl Lahir</div>
        <input type="text" class="form-control border-dark" name="tanggal_lahir">
    </div>

    <?php
    $kelas = $kelas;
    $nama_ruangan = $nama_ruangan;
    $kelas_ruangan = $kelas . " / " . $nama_ruangan;
    ?>
    <div class="d-flex gap-2 align-items-center w-100">
        <div class="col-md-3">Kelas / Ruangan</div>
        <input type="text" class="form-control border-dark" name="kelas_ruangan" value="<?= $kelas_ruangan; ?>" disabled>
    </div>

    <div class="d-flex gap-2 align-items-center w-100">
        <div class="col-md-3">Dokter Yang Merawat</div>
        <select type="select" name="dokter_yang_merawat" id="dokter_yang_merawat" class="form-select dokter w-100"></select>
    </div>

    <div class="d-flex gap-2 align-items-center w-100">
        <div class="col-md-3">Ahli Anestesi</div>
        <select type="select" name="ahli_anestesi" id="ahli_anestesi" class="form-select dokter w-100"></select>
    </div>

    <div class="d-flex gap-2 align-items-center w-100">
        <div class="col-md-3">Tanggal Jam/Operasi</div>
        <input type="datetime-local" class="form-control border-dark" name="tanggal_operasi" value="<?= date('Y-m-d H:i') ?>">
    </div>

    <div class="d-flex gap-2 align-items-center w-100">
        <div class="col-md-3">Alergi</div>
        <textarea name="alergi" id="alergi" rows="3" class="form-control border-dark"></textarea>
    </div>

    <div class="d-flex gap-2 align-items-center w-100">
        <div class="col-md-3">Diagnosa Utama</div>
        <select type="select" name="diagnosa" id="diagnosa" class="w-100 diagnosa">
        </select>
    </div>


</div>


<div class="row my-3">
    <table class="table table-bordered mt-2 border-dark">
        <tbody class="text-center">
            <th>No</th>
            <th>TINDAKAN YANG HARUS DILAKUKAN</th>
            <th>SUDAH</th>
            <th>TIDAK</th>
            <th>KETERANGAN</th>
        </tbody>
        <tbody>
            <?php
            $rows = [
                ['label' => 'I', 'text' => 'Melapor ke :', 'name' => 'lapor_ke'],
                ['label' => '', 'text' => '- Dokter Bedah', 'name' => 'dokter_bedah'],
                ['label' => '', 'text' => '- Dokter Aneshtesi', 'name' => 'dokter_aneshtesi'],
                ['label' => '', 'text' => '- Instalasi Bedah Sentral', 'name' => 'instalasi_bedah']
            ];

            foreach ($rows as $a) {
                echo "<tr>";

                // For the first row, add 'text-center' to the 'Melapor ke :' text
                if ($a['label'] == 'I') {
                    echo "<td>{$a['label']}</td>";
                    echo "<td>{$a['text']}</td>";
                } else {
                    echo "<td class='text-center'>{$a['label']}</td>";
                    echo "<td class='text-center'>{$a['text']}</td>";
                }

                // Generate radio buttons and text input for each row
                echo "<td class='text-center'><input type='radio' class=' custom-checkbox-success {$a['name']}' name='{$a['name']}' id='{$a['name']}' value='sudah'></td>";
                echo "<td class='text-center'><input type='radio' class='custom-checkbox-danger {$a['name']}' name='{$a['name']}' id='{$a['name']}' value='tidak'></td>";
                echo "<td><input type='text' class='form-control border-dark' name='{$a['name']}_input'></td>";
                echo "</tr>";
            }
            ?>

            <tr>
                <td class="text-center">II</td>
                <td>Persiapan :</td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="persiapan" value="sudah1"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" value="tidak1" name="persiapan"></td>
                <td class="text-center"><input type="text" class="form-control border-dark" name="persiapan_input1"></td>
            </tr>
            <tr>
                <td></td>
                <td>1. Mengisi lembar informed concent</td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" name="isi_informed" value="sudah2"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" name="isi_informed" value="tidak2"></td>
                <td class="text-center"><input type="text" class="form-control border-dark" name="persiapan_input2"></td>
            </tr>
            <tr>
                <td></td>
                <td>2. Mengingatkan, Menuntun Doa sebelum operasi</td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" value="sudah3" name="doa_operasi"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" value="tidak3" name="doa_operasi"></td>
                <td class="text-center"><input type="text" class="form-control border-dark" name="persiapan_input3"></td>
            </tr>
            <tr>
                <td></td>
                <td>3. Jasmani</td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" value="sudah4" name="jasmani"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" value="tidak4" name="jasmani"></td>
                <td class="text-center"><input type="text" class="form-control border-dark" name="persiapan_input4"></td>
            </tr>


            <tr>
                <td></td>
                <td style="padding-left:24px">3.1 . Mencukur rambut daerah yang akan dioperasi</td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-success" value="sudah" name="cukur_rambut" id="cukur_rambut_sudah">
                </td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-danger" value="tidak" name="cukur_rambut" id="cukur_rambut_tidak">
                </td>
                <td class="text-center">
                    <input type="text" class="form-control border-dark" name="cukur_rambut_other">
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left:24px">3.2 . Puasa</td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-success" value="sudah" name="puasa" id="puasa_sudah">
                </td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-danger" value="tidak" name="puasa" id="puasa_tidak">
                </td>
                <td class="text-center">
                    <input type="text" class="form-control border-dark" name="puasa_other">
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left:24px">3.3 . Melakukan klisma</td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-success" value="sudah" name="klisma" id="klisma_sudah">
                </td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-danger" value="tidak" name="klisma" id="klisma_tidak">
                </td>
                <td class="text-center">
                    <input type="text" class="form-control border-dark" name="klisma_other">
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left:24px">3.4 . Memeriksa gigi palsu yg bisa lepas</td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-success" value="sudah" name="gigi_palsu" id="gigi_palsu_sudah">
                </td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-danger" value="tidak" name="gigi_palsu" id="gigi_palsu_tidak">
                </td>
                <td class="text-center">
                    <input type="text" class="form-control border-dark" name="gigi_palsu_other">
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left:24px">3.6 . Melepas perhiasan</td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-success" value="sudah" name="perhiasan" id="perhiasan_sudah">
                </td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-danger" value="tidak" name="perhiasan" id="perhiasan_tidak">
                </td>
                <td class="text-center">
                    <input type="text" class="form-control border-dark" name="perhiasan_other">
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left:24px">3.7 . Menghapus lipstik</td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-success" value="sudah" name="lipstik" id="lipstik_sudah">
                </td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-danger" value="tidak" name="lipstik" id="lipstik_tidak">
                </td>
                <td class="text-center">
                    <input type="text" class="form-control border-dark" name="lipstik_other">
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left:24px">3.8 . Memakai baju operasi dengan rapi</td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-success" value="sudah" name="baju_operasi" id="baju_operasi_sudah">
                </td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-danger" value="tidak" name="baju_operasi" id="baju_operasi_tidak">
                </td>
                <td class="text-center">
                    <input type="text" class="form-control border-dark" name="baju_operasi_other">
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left:24px">3.9. Memberikan premedikasi</td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-success" value="sudah" name="premidikasi" id="premidikasi_sudah">
                </td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-danger" value="tidak" name="premidikasi" id="premidikasi_tidak">
                </td>
                <td class="text-center">
                    <input type="text" class="form-control border-dark" name="premidikasi_other">
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left:24px">3.10 . T.N.P dan Suhu</td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-success" value="sudah" name="tnp_suhu" id="tnp_suhu_sudah">
                </td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-danger" value="tidak" name="tnp_suhu" id="tnp_suhu_tidak">
                </td>
                <td>
                    <div class="d-flex gap-2">
                        <div>
                            <label for="">T :</label>
                            <input type="text" class="form-control border-dark" name="tnp_suhu_other_T">
                        </div>
                        <div>
                            <label for="">N :</label>
                            <input type="text" class="form-control border-dark" name="tnp_suhu_other_N">
                        </div>
                        <div>
                            <label for="">P :</label>
                            <input type="text" class="form-control border-dark" name="tnp_suhu_other_P">
                        </div>
                        <div>
                            <label for="">S :</label>
                            <input type="text" class="form-control border-dark" name="tnp_suhu_other_S">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left:24px">3.11. Pemasangan Katheter</td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-success" value="sudah" name="karakther" id="karakther_sudah">
                </td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-danger" value="tidak" name="karakther" id="karakther_tidak">
                </td>
                <td class="text-center">
                    <input type="text" class="form-control border-dark" name="karakther_other">
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left:24px">3.12. Pemeriksaan Laboratorium</td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-success" value="sudah" name="laboratorium" id="laboratorium_sudah">
                </td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-danger" value="tidak" name="laboratorium" id="laboratorium_tidak">
                </td>
                <td class="text-center">
                    <input type="text" class="form-control border-dark" name="laboratorium_other">
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left:24px">3.13. Thorax, EKG</td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-success" value="sudah" name="thorax" id="thorax_sudah">
                </td>
                <td class="text-center">
                    <input type="radio" class="custom-checkbox-danger" value="tidak" name="thorax" id="thorax_tidak">
                </td>
                <td class="text-center">
                    <input type="text" class="form-control border-dark" name="thorax_other">
                </td>
            </tr>

            <tr>
                <td></td>
                <td style="padding-left: 12px;">
                    <div class="d-flex flex-column">
                        <label for="" class="flex-shrink-0">lain-lain,</label>
                        <textarea name="lain_lain_tindakan" id="lain_tindakan" rows="5" class="form-control border-dark" style="width: 400px;"></textarea>

                    </div>
                </td>
                <td class="text-center"><input type="radio" class="custom-checkbox-success" value="sudah_lain" name="lain_lain"></td>
                <td class="text-center"><input type="radio" class="custom-checkbox-danger" value="tidak_lain" name="lain_lain"></td>
                <td class="text-center">
                    <textarea name="lain_ket_tindakan" id="" rows="5" class="form-control border-dark"></textarea>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="row">
        <div class="col-6 text-center">
            <label for="">Yang, Menyerahkan
                <p>Perawat Ruangan</p>
            </label>

            <div class="my-2">
                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat_ruangan" />
            </div>
            <select type="select" name="perawat_ruangan" id="perawat_ruangan" class="form-select perawat" style="width: 100%;"></select>

        </div>

        <div class="col-6 text-center">
            <label for="">Yang, Menerima
                <p>Perawat Kamar Bedah</p>
            </label>
            <div class="my-2">
                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_list_perawat" />
            </div>
            <select type="select" name="list_perawat" id="list_perawat" class="form-select perawat" style="width: 100%;"></select>
        </div>
    </div>
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
        $('#list_perawat').prop('disabled', false)
        $('#list_perawat').select2('open')
        $('#list_perawat').select2('close')
        if (mode === "lihat")
            $('#list_perawat').prop('disabled', true)

        setTimeout(() => {
            dataListPerawat?.map(v => {
                if (v.text === $('#list_perawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_list_perawat')
                }
            })
        }, 1000)

        $('#perawat_ruangan').prop('disabled', false)
        $('#perawat_ruangan').select2('open')
        $('#perawat_ruangan').select2('close')
        if (mode === "lihat")
            $('#perawat_ruangan').prop('disabled', true)

        setTimeout(() => {
            dataListPerawat?.map(v => {
                if (v.text === $('#perawat_ruangan').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_ruangan')
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
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>'
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


        $('#list_perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_list_perawat')
        });


        $('#perawat_ruangan').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_ruangan')
        });


        //================ new =====================//
    });
</script>