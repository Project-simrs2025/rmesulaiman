<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td>
                    <div class="fw-bold text-center">CHECKLIST KESELAMATAN PASIEN OPERASI</div>
                </td>
                <td class="col-6">
                    <div class="d-flex align-items-center gap-2 my-2">
                        <label for="" class="flex-srhink-0 col-3">No. RM</label>
                        <input type="text" name="no_rm" class="form-control border-dark">
                    </div>
                    <div class="d-flex align-items-center gap-2 my-2">
                        <label for="" class="flex-srhink-0 col-3">Nama</label>
                        <input type="text" name="nama_pasien" class="form-control border-dark">
                    </div>
                    <div class="d-flex align-items-center gap-2 my-2">
                        <label for="" class="flex-srhink-0 col-3">Tanggal Lahir</label>
                        <input type="text" name="tanggal_lahir" class="form-control border-dark">
                    </div>
                    <div class="d-flex align-items-center gap-2 my-2">
                        <label for="" class="flex-srhink-0 col-3">Umur</label>
                        <input type="text" name="umur" class="form-control border-dark">
                    </div>
                    <div class="d-flex align-items-center gap-2 my-2">
                        <label for="" class="flex-srhink-0 col-3">Jenis Kelamin</label>
                        <input type="text" name="jenkel" class="form-control border-dark">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td class="col-4 text-center">
                    <div class="fw-bold">Sebelum Induksi Anestesi / Sign In </div>
                    <div class="fw-bold d-flex align-items-center justify-content-center gap-2">
                        <label for="">Waktu</label>
                        <input type="time" name="waktu_signin" id="" class="form-control border-dark w-50">
                    </div>
                </td>
                <td class=" text-center" style="width: 40px;">&#8594;</td>
                <td class="col-3 text-center">
                    <div class="fw-bold">Sebelum Insisi / Time Out </div>
                    <div class="fw-bold d-flex align-items-center justify-content-center gap-2">
                        <label for="">Waktu</label>
                        <input type="time" name="waktu_timeout" id="" class="form-control border-dark w-50">
                    </div>
                </td>
                <td class="text-center" style="width: 40px;">&#8594;</td>
                <td class="col-4 text-center">
                    <div class="fw-bold">Sebelum Pasien Meninggalkan Kamar Operasi / Sign Out </div>
                    <div class="fw-bold d-flex align-items-center justify-content-center gap-2">
                        <label for="">Waktu</label>
                        <input type="time" name="waktu_kamarOpe" id="" class="form-control border-dark w-50">
                    </div>
                </td>
            </tr>
            <tr class="border-bottom-0">
                <td>
                    <div class="d-flex flex-column gap-2 align-items-start" style="margin-top: -650px;">
                        <div class="fw-bold">Minimal ada Perawat, Perawat Anestesi dan Dokter Anestesi </div>
                        <div>Apakah identitas pasien sudah benar, rencana tindakan sudah jelas, dan ada persetujuan tindakan medis yang akan dilakukan ( informed consent)?</div>
                        <div class="d-flex align-items-start gap-2">
                            <input type="checkbox" name="iden_rencana" class="custom-checkbox-success" id="iden_rencana">
                            <label for="iden_rencana">Ya</label>
                        </div>
                        <div>Apakah area yang akan dioperasi sudah diberi tanda ?</div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="ya_tanda" class="custom-checkbox-success" id="ya_tanda">
                                <label for="ya_tanda">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_tanda" class="custom-checkbox-success" id="Tidak_tanda">
                                <label for="Tidak_tanda" class="flex-shrink-0">Tidak Diperlukan</label>
                            </div>
                        </div>


                        <div>Apakah mesin anestesi dan obat-obatan sudah lengkap?</div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-start gap-2 col-11">
                                    <input type="checkbox" name="ya_mesin_obat" class="custom-checkbox-success" id="ya_mesin_obat">
                                    <label for="ya_mesin_obat">Ya</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="Tidak_mesin_obat" class="custom-checkbox-success" id="Tidak_mesin_obat">
                                    <label for="Tidak_mesin_obat">Tidak </label>
                                </div>
                            </div>
                        </div>

                        <div>Apakah sudah terpasang ‘pulse oksimetri’ pada pasien, dan sudah berfungsi baik ?</div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-start gap-2 col-11">
                                    <input type="checkbox" name="ya_pulse" class="custom-checkbox-success" id="ya_pulse">
                                    <label for="ya_pulse">Ya</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="Tidak_pulse" class="custom-checkbox-success" id="Tidak_pulse">
                                    <label for="Tidak_pulse">Tidak </label>
                                </div>
                            </div>
                        </div>


                        <div>Apakah pasien memiliki riwayat alergi ?</div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-11">
                                <input type="checkbox" name="ya_rw_alergi" class="custom-checkbox-success" id="ya_rw_alergi">
                                <label for="ya_rw_alergi">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_rw_alergi" class="custom-checkbox-success" id="Tidak_rw_alergi">
                                <label for="Tidak_rw_alergi">Tidak </label>
                            </div>
                        </div>

                        <div>Apakah pasien memiliki gangguan pernafasan ?</div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="d-flex align-items-start gap-2 ">
                                <input type="checkbox" name="ya_pernapasan" class="custom-checkbox-success" id="ya_pernapasan">
                                <label for="ya_pernapasan">Ya, dan alat/ bantuan sudah tersedia</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_pernapasan" class="custom-checkbox-success" id="Tidak_pernapasan">
                                <label for="Tidak_pernapasan">Tidak </label>
                            </div>
                        </div>

                        <div>Resiko perdarahan > 500ml (7ml/ kg bagi anak-anak)</div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="d-flex align-items-start gap-2 ">
                                <input type="checkbox" name="ya_pendarahan" class="custom-checkbox-success" id="ya_pendarahan">
                                <label for="ya_pendarahan" class="col-11">Ya, dan sudah direncanakan pemasangan infus 2 line dan tersedia cairan-cairan yang akan diberikan</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_pendarahan" class="custom-checkbox-success" id="Tidak_pendarahan">
                                <label for="Tidak_pendarahan">Tidak </label>
                            </div>
                        </div>
                    </div>
                </td>
                <td></td>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <div class="fw-bold">Dengan Perawat, Perawat Anestesi, Dokter Anestesi dan Dokter Bedah</div>

                        <div>Memastikan bahwa semua anggota tim medis sudah memperkenalkan diri (nama dan peran masing-masing)</div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-4">
                                <input type="checkbox" name="ya_anggota_medis" class="custom-checkbox-success" id="ya_anggota_medis">
                                <label for="ya_anggota_medis">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_anggota_medis" class="custom-checkbox-success" id="Tidak_anggota_medis">
                                <label for="Tidak_anggota_medis">Tidak </label>
                            </div>
                        </div>


                        <div>Memastikan dan baca ulang nama pasien, tindakan medis dan area yang akan diinsisi.</div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-4">
                                <input type="checkbox" name="ya_baca" class="custom-checkbox-success" id="ya_baca">
                                <label for="ya_baca">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_baca" class="custom-checkbox-success" id="Tidak_baca">
                                <label for="Tidak_baca">Tidak </label>
                            </div>
                        </div>


                        <div>Apakah profilaksis antibiotik sudah diberikan 1 jam sebelumnya ?</div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-4">
                                <input type="checkbox" name="ya_antibiotik" class="custom-checkbox-success" id="ya_antibiotik">
                                <label for="ya_antibiotik">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_antibiotik" class="custom-checkbox-success" id="Tidak_antibiotik">
                                <label for="Tidak_antibiotik">Tidak </label>
                            </div>
                        </div>


                        <div class="fw-bold my-3">Kejadian beresiko yang perlu diantisipasi untuk Dokter Bedah :</div>

                        <div class="mt-3">Apakah tindakan beresiko atau tindakan tidak rutin yang akan dilakukan?
                            <textarea name="tindakan_resiko" id="" rows="3" class="form-control border-dark"></textarea>
                        </div>

                        <div class="mt-3"> Berapa lama tindakan ini akan dikerjakan?
                            <textarea name="lama_tindakan" id="" rows="2" class="form-control border-dark"></textarea>
                        </div>

                        <div>Apakah sudah antisipasi pendarahan ? </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-4">
                                <input type="checkbox" name="ya_antisipasi_pendarahan" class="custom-checkbox-success" id="ya_antisipasi_pendarahan">
                                <label for="ya_antisipasi_pendarahan">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_antisipasi_pendarahan" class="custom-checkbox-success" id="Tidak_antisipasi_pendarahan">
                                <label for="Tidak_antisipasi_pendarahan">Tidak </label>
                            </div>
                        </div>

                        <div class="fw-bold my-3">Untuk Dokter Anestesi</div>
                        <div>Apakah ada hal khusus untuk pasien ini ? </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-4">
                                <input type="checkbox" name="ya_khusus" class="custom-checkbox-success" id="ya_khusus">
                                <label for="ya_khusus">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_khusus" class="custom-checkbox-success" id="Tidak_khusus">
                                <label for="Tidak_khusus">Tidak </label>
                            </div>
                        </div>


                        <div class="fw-bold my-3">Untuk Tim Perawat</div>
                        <div>Apakah sudah dipastikan kesterilan peralatan ? </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-4">
                                <input type="checkbox" name="ya_p_peralatan" class="custom-checkbox-success" id="ya_p_peralatan">
                                <label for="ya_p_peralatan">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_p_peralatan" class="custom-checkbox-success" id="Tidak_p_peralatan">
                                <label for="Tidak_p_peralatan">Tidak </label>
                            </div>
                        </div>

                        <div class="mt-3"> Apakah ada masalah dengan peralatan atau masalah alat yang dikhawatirkan
                            <textarea name="masalah_peralatan" id="" rows="2" class="form-control border-dark"></textarea>
                        </div>

                        <div>Apakah hasil radiologi yang diperlukan sudah ada ?</div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-4">
                                <input type="checkbox" name="ya_h_radiologi" class="custom-checkbox-success" id="ya_h_radiologi">
                                <label for="ya_h_radiologi">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_h_radiologi" class="custom-checkbox-success" id="Tidak_h_radiologi">
                                <label for="Tidak_h_radiologi">Tidak </label>
                            </div>
                        </div>

                    </div>
                </td>
                <td></td>
                <td>
                    <div class="d-flex flex-column gap-2 " style="margin-top: -720px;">
                        <div class="fw-bold">Dengan Perawat, Perawat Anestesi, Dokter Anestesi dan Dokter Bedah</div>


                        <div class="my-2">Secara verbal perawat memastikan nama tindakan
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-4">
                                <input type="checkbox" name="ya_v_perawat" class="custom-checkbox-success" id="ya_v_perawat">
                                <label for="ya_v_perawat">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_v_perawat" class="custom-checkbox-success" id="Tidak_v_perawat">
                                <label for="Tidak_v_perawat">Tidak </label>
                            </div>
                        </div>


                        <div class="my-2">Kelengkapan alat, jumlah kasa dan jarum
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-4">
                                <input type="checkbox" name="ya_kelengkapan_alat" class="custom-checkbox-success" id="ya_kelengkapan_alat">
                                <label for="ya_kelengkapan_alat">Lengkap</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_kelengkapan_alat" class="custom-checkbox-success" id="Tidak_kelengkapan_alat">
                                <label for="Tidak_kelengkapan_alat">Tidak </label>
                            </div>
                        </div>


                        <div class="my-2">Pelabelan specimen (baca label specimen dan nama pasien dengan keras)
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-4">
                                <input type="checkbox" name="ya_pelebahan_specimen" class="custom-checkbox-success" id="ya_pelebahan_specimen">
                                <label for="ya_pelebahan_specimen">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_pelebahan_specimen" class="custom-checkbox-success" id="Tidak_pelebahan_specimen">
                                <label for="Tidak_pelebahan_specimen">Tidak </label>
                            </div>
                        </div>

                        <div class="my-2">Apakah ada masalah peralatan yang perlu disampaikan ?
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-4">
                                <input type="checkbox" name="ya_masalah_peralatan" class="custom-checkbox-success" id="ya_masalah_peralatan">
                                <label for="ya_masalah_peralatan">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_masalah_peralatan" class="custom-checkbox-success" id="Tidak_masalah_peralatan">
                                <label for="Tidak_masalah_peralatan">Tidak </label>
                            </div>
                        </div>

                        <div class="fw-bold mt-3">Untuk dokter Bedah, Dokter Anestesi dan perawat</div>
                        <div>Apakah ada catatan khusus untuk proses recovery dan penanganan perawatan pasien ini? </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-start gap-2 col-4">
                                <input type="checkbox" name="ya_recovery" class="custom-checkbox-success" id="ya_recovery">
                                <label for="ya_recovery">Ya</label>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <input type="checkbox" name="Tidak_recovery" class="custom-checkbox-success" id="Tidak_recovery">
                                <label for="Tidak_recovery">Tidak </label>
                            </div>
                        </div>


                        <div class="d-flex align-items-center justify-content-end gap-2 mt-5">Medan, <input type="date" name="tanggal_input" id="tgl_input" class="form-control border-dark w-50" value="<?= date('Y-m-d'); ?>"></div>
                    </div>

                </td>
            </tr>
            <tr class="border-top-0">
                <td>
                    <div class="fw-bold mt-4 mb-3">Tanda Tangan Dan Nama</div>
                    <div>Dokter Anestesi</div>
                    <div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_dokter_umum_1" />
                        </div>
                        <select type="select" name="dokter_umum_1" id="dokter_umum_1" class="form-select dokter_umum" style="width: 100%;"></select>
                    </div>
                    <div>Perawat Anestesi</div>
                    <div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_anestesi_1" />
                        </div>
                        <select type="select" name="perawat_anestesi_1" id="perawat_anestesi_1" class="form-select perawat_anestesi" style="width: 100%;"></select>
                    </div>
                    <div>Perawat</div>
                    <div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_sirkuler_1" />
                        </div>
                        <select type="select" name="perawat_sirkuler_1" id="perawat_sirkuler_1" class="form-select perawat_sirkuler" style="width: 100%;"></select>
                    </div>
                </td>
                <td></td>
                <td>
                    <div class="fw-bold mt-4 mb-3">Tanda Tangan Dan Nama</div>
                    <div>Dokter Anestesi</div>
                    <div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_dokter_umum_2" />
                        </div>
                        <select type="select" name="dokter_umum_2" id="dokter_umum_2" class="form-select dokter_umum" style="width: 100%;"></select>
                    </div>
                    <div>Perawat Anestesi</div>
                    <div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_perawat_anestesi_2" />
                        </div>
                        <select type="select" name="perawat_anestesi_2" id="perawat_anestesi_2" class="form-select perawat_anestesi" style="width: 100%;"></select>
                    </div>
                    <div>Perawat Sirkuler</div>
                    <div class="my-2 text-center">
                        <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_perawat_sirkuler_2" />
                    </div>
                    <select type="select" name="perawat_sirkuler_2" id="perawat_sirkuler_2" class="form-select perawat_sirkuler" style="width: 100%;"></select>

                </td>
                <td></td>
                <td>
                    <div class="fw-bold mt-4 mb-3">Tanda Tangan Dan Nama</div>
                    <div>Dr Bedah</div>
                    <div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_dokter_umum_3" />
                        </div>
                        <select type="select" name="dokter_umum_3" id="dokter_umum_3" class="form-select dokter_umum" style="width: 100%;"></select>
                    </div>
                    <div>Dokter Anestesi</div>
                    <div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_dokter_anestesi_2" />
                        </div>
                        <select type="select" name="dokter_anestesi_2" id="dokter_anestesi_2" class="form-select dokter_umum" style="width: 100%;"></select>
                    </div>
                    <div>Perawat Anestesi</div>
                    <div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_anestesi_3" />
                        </div>
                        <select type="select" name="perawat_anestesi_3" id="perawat_anestesi_3" class="form-select perawat_anestesi" style="width: 100%;"></select>
                    </div>
                    <div>Perawat Instrument</div>
                    <div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_instrument_3" />
                        </div>
                        <select type="select" name="perawat_instrument_3" id="perawat_instrument_3" class="form-select perawat_anestesi" style="width: 100%;"></select>
                    </div>
                    <div>Perawat Sirkuler</div>
                    <div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_sirkuler_3" />
                        </div>
                        <select type="select" name="perawat_sirkuler_3" id="perawat_sirkuler_3" class="form-select perawat_sirkuler" style="width: 100%;"></select>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<script>
    let dataDokter = []
    let dataPerawatAnestesi = []
    let dataPerawatSirkuler = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {

        let page = 1;
        listDokterUmumAPI();
        listPerawatAnestesi();
        listPerawatSirkuler();

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

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat
        } = globalData;

        $('#dokter_umum_1').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum_1')
        });

        $('#dokter_umum_2').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum_2')
        });

        $('#dokter_umum_3').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum_3')
        });

        $('#dokter_anestesi_2').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_anestesi_2')
        });




        // perawat anestesi
        $('#perawat_anestesi_1').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_anestesi_1')
        });
        $('#perawat_anestesi_2').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_anestesi_2')
        });
        $('#perawat_anestesi_3').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_anestesi_3')
        });


        //perawat sirkuler
        $('#perawat_sirkuler_1').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_sirkuler_1')
        });


        $('#perawat_sirkuler_2').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_sirkuler_2')
        });
        $('#perawat_sirkuler_3').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_sirkuler_3')
        });

        // perawat instrument 
        $('#perawat_instrument_3').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_instrument_3')
        });

    });


    function cbCommon(data) {


        $('#dokter_umum_1').prop('disabled', false)
        $('#dokter_umum_1').select2('open')
        $('#dokter_umum_1').select2('close')
        if (mode === "lihat")
            $('#dokter_umum_1').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum_1').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum_1')
                }
            })
        }, 1000)

        $('#dokter_umum_2').prop('disabled', false)
        $('#dokter_umum_2').select2('open')
        $('#dokter_umum_2').select2('close')
        if (mode === "lihat")
            $('#dokter_umum_2').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum_2').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum_2')
                }
            })
        }, 1000)

        $('#dokter_umum_3').prop('disabled', false)
        $('#dokter_umum_3').select2('open')
        $('#dokter_umum_3').select2('close')
        if (mode === "lihat")
            $('#dokter_umum_3').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum_3').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum_3')
                }
            })
        }, 1000)

        $('#dokter_anestesi_2').prop('disabled', false)
        $('#dokter_anestesi_2').select2('open')
        $('#dokter_anestesi_2').select2('close')
        if (mode === "lihat")
            $('#dokter_anestesi_2').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_anestesi_2').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_anestesi_2')
                }
            })
        }, 1000)



        // perawat anestesi
        $('#perawat_anestesi_1').prop('disabled', false)
        $('#perawat_anestesi_1').select2('open')
        $('#perawat_anestesi_1').select2('close')
        if (mode === "lihat")
            $('#perawat_anestesi_1').prop('disabled', true)

        setTimeout(() => {
            console.log(dataPerawatAnestesi)
            dataPerawatAnestesi?.map(v => {
                if (v.text === $('#perawat_anestesi_1').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_anestesi_1')
                }
            })
        }, 1000)

        $('#perawat_anestesi_2').prop('disabled', false)
        $('#perawat_anestesi_2').select2('open')
        $('#perawat_anestesi_2').select2('close')
        if (mode === "lihat")
            $('#perawat_anestesi_2').prop('disabled', true)

        setTimeout(() => {
            console.log(dataPerawatAnestesi)
            dataPerawatAnestesi?.map(v => {
                if (v.text === $('#perawat_anestesi_2').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_anestesi_2')
                }
            })
        }, 1000)

        $('#perawat_anestesi_3').prop('disabled', false)
        $('#perawat_anestesi_3').select2('open')
        $('#perawat_anestesi_3').select2('close')
        if (mode === "lihat")
            $('#perawat_anestesi_3').prop('disabled', true)

        setTimeout(() => {
            console.log(dataPerawatAnestesi)
            dataPerawatAnestesi?.map(v => {
                if (v.text === $('#perawat_anestesi_3').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_anestesi_3')
                }
            })
        }, 1000)


        //perawat sirkuler
        $('#perawat_sirkuler_1').prop('disabled', false)
        $('#perawat_sirkuler_1').select2('open')
        $('#perawat_sirkuler_1').select2('close')
        if (mode === "lihat")
            $('#perawat_sirkuler_1').prop('disabled', true)

        setTimeout(() => {
            console.log(dataPerawatSirkuler)
            dataPerawatSirkuler?.map(v => {
                if (v.text === $('#perawat_sirkuler_1').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_sirkuler_1')
                }
            })
        }, 1000)

        $('#perawat_sirkuler_2').prop('disabled', false)
        $('#perawat_sirkuler_2').select2('open')
        $('#perawat_sirkuler_2').select2('close')
        if (mode === "lihat")
            $('#perawat_sirkuler_2').prop('disabled', true)

        setTimeout(() => {
            console.log(dataPerawatSirkuler)
            dataPerawatSirkuler?.map(v => {
                if (v.text === $('#perawat_sirkuler_2').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_sirkuler_2')
                }
            })
        }, 1000)

        $('#perawat_sirkuler_3').prop('disabled', false)
        $('#perawat_sirkuler_3').select2('open')
        $('#perawat_sirkuler_3').select2('close')
        if (mode === "lihat")
            $('#perawat_sirkuler_3').prop('disabled', true)

        setTimeout(() => {
            console.log(dataPerawatSirkuler)
            dataPerawatSirkuler?.map(v => {
                if (v.text === $('#perawat_sirkuler_3').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_sirkuler_3')
                }
            })
        }, 1000)

        // perawat instrument
        $('#perawat_instrument_3').prop('disabled', false)
        $('#perawat_instrument_3').select2('open')
        $('#perawat_instrument_3').select2('close')
        if (mode === "lihat")
            $('#perawat_instrument_3').prop('disabled', true)

        setTimeout(() => {
            console.log(dataPerawatSirkuler)
            dataPerawatSirkuler?.map(v => {
                if (v.text === $('#perawat_instrument_3').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_instrument_3')
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


    function listPerawatAnestesi() {
        $('.perawat_anestesi').select2({
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
                    dataPerawatAnestesi = items
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



    function listPerawatSirkuler() {
        $('.perawat_sirkuler').select2({
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
                    dataPerawatSirkuler = items
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