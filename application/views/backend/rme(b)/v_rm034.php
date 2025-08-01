<div class="row">
    <div class="d-flex flex-column gap-1">
        <div class="d-flex align-items-center gap-2">
            <div class="col-2">Tanggal Masuk :</div>
            <input type="text" name="tgl_admit" id="" class="form-control border-dark">
        </div>
        <div class="d-flex align-items-center gap-2">
            <div class="col-2">Rencana tanggal pulang </div>
            <input type="date" name="rencana_tgl_pulang" id="" class="form-control border-dark" value="<?= date('Y-m-d') ?>">
        </div>
        <div class="d-flex align-items-center gap-2">
            <div class="col-2">Rencana Jam pulang </div>
            <input type="time" name="rencana_jam_pulang" id="" class="form-control border-dark" value="<?= date('H:i') ?>">
        </div>
    </div>
</div>

<div class="row mt-3">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td class="col-6" colspan="2">Usia Lanjut (60 tahun atau lebih)</td>
                <td class="col-3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="d-flex align-items-center gap-2 col-3">
                            <input type="checkbox" name="ya_usia" id="ya_usia" class="custom-checkbox-success">
                            <label for="ya_usia">Ya</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Tidak_usia" id="Tidak_usia" class="custom-checkbox-danger">
                            <label for="Tidak_usia">Tidak</label>
                        </div>
                    </div>
                </td>
                <td rowspan="4" colspan="2">
                    <div class="text-center">Jika satu saja terpenuhi, berarti pasien membutuhkan perencanaan pulang khusus</div>
                </td>
            </tr>
            <tr>
                <td colspan="2">Hambatan Mobilisasi</td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                        <div class="d-flex align-items-center gap-2 col-3">
                            <input type="checkbox" name="ya_mobilisasi" id="ya_mobilisasi" class="custom-checkbox-success">
                            <label for="ya_mobilisasi">Ya</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Tidak_mobilisasi" id="Tidak_mobilisasi" class="custom-checkbox-danger">
                            <label for="Tidak_mobilisasi">Tidak</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">Membutuhkan pelayanan medis dan perawatan berkelanjutan</td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                        <div class="d-flex align-items-center gap-2 col-3">
                            <input type="checkbox" name="ya_perawatan_kelanjutan" id="ya_perawatan_kelanjutan" class="custom-checkbox-success">
                            <label for="ya_perawatan_kelanjutan">Ya</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Tidak_perawatan_kelanjutan" id="Tidak_perawatan_kelanjutan" class="custom-checkbox-danger">
                            <label for="Tidak_perawatan_kelanjutan">Tidak</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">Tergantung dengan orang lain dan dalam aktifitas harian</td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                        <div class="d-flex align-items-center gap-2 col-3">
                            <input type="checkbox" name="ya_tergantung_org_lain" id="ya_tergantung_org_lain" class="custom-checkbox-success">
                            <label for="ya_tergantung_org_lain">Ya</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="Tidak_tergantung_org_lain" id="Tidak_tergantung_org_lain" class="custom-checkbox-danger">
                            <label for="Tidak_tergantung_org_lain">Tidak</label>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <div>Transportasi Pulang</div>
                    <textarea name="trans_pulang" id="" rows="4" class="form-control border-dark"></textarea>
                </td>
                <td colspan="3">
                    <div>Orang yang mendampingi & merawat</div>
                    <textarea name="org_pendamping" id="" rows="4" class="form-control border-dark"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="5">Pengobatan yang dilanjutkan dirumah</td>
            </tr>
            <tr>
                <td colspan="5">
                    <table class="table table-bordered border-dark">
                        <tr class="text-center">
                            <td>No</td>
                            <td class="col-5">Nama Obat</td>
                            <td>Jumlah/Dosis</td>
                            <td>Jam Pemberian</td>
                            <td class="col-4">Intruksi Khusus</td>
                        </tr>
                        <?php for ($i = 1; $i <= 15; $i++): ?>
                            <tr>
                                <td></td>
                                <td><input type="text" name="nama_obat_<?= $i; ?>" id="" class="form-control border-dark"></td>
                                <td><input type="text" name="jumlah_obat_<?= $i; ?>" id="" class="form-control border-dark"></td>
                                <td><input type="time" name="waktu_pemb_obat_<?= $i; ?>" id="" class="form-control border-dark"></td>
                                <td><input type="text" name="intruksi_khusus_<?= $i; ?>" id="" class="form-control border-dark"></td>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="fw-bold">Diet Khusus Pasien : </div>
                    <div><input type="text" name="diet_khusus_pasien" id="" class="form-control border-dark"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>Perawatan / peralatan medis yang dikanjutkan di rumah : </div>
                    <div>
                        <div><input type="text" name="perawatan_peralatan" id="" class="form-control border-dark"></div>
                    </div>
                </td>
                <td colspan="3">
                    <div>Alat Bantu yang dipakai di rumah : </div>
                    <div>
                        <div><input type="text" name="alat_bantu_rumah" id="" class="form-control border-dark"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <table class="table table-bordered border-dark">
                        <tbody>
                            <tr>
                                <td class="">no</td>
                                <td class="col-6">Nama alat Medis</td>
                                <td class="">no</td>
                                <td colspan="2" class="col-6">Nama alat Medis</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="checkbox" name="oxygen_portable" id="oxygen_portable" class="custom-checkbox-success">
                                    <label for="oxygen_portable">Oxygen Portable</label>
                                </td>
                                <td></td>
                                <td>
                                    <input type="checkbox" name="kursi_roda" id="kursi_roda" class="custom-checkbox-success">
                                    <label for="kursi_roda">Kursi Roda</label>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="checkbox" name="Tracheostomi" id="Tracheostomi" class="custom-checkbox-success">
                                    <label for="Tracheostomi">Tracheostomi</label>
                                </td>
                                <td></td>
                                <td>
                                    <input type="checkbox" name="Tongkat" id="Tongkat" class="custom-checkbox-success">
                                    <label for="Tongkat">Tongkat</label>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="checkbox" name="D_kateler" id="D_kateler" class="custom-checkbox-success">
                                    <label for="D_kateler">D-kateler</label>
                                </td>
                                <td></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="input_lain_check_cols2_1" id="input_lain_check_cols2_1" class="custom-checkbox-success">
                                        <input type="text" name="input_text_cols2_lain_1" id="" class="form-control border-dark">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="checkbox" name="NGT" id="NGT" class="custom-checkbox-success">
                                    <label for="NGT">NGT</label>
                                </td>
                                <td></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="input_lain_check_cols2_2" id="input_lain_check_cols2_2" class="custom-checkbox-success">
                                        <input type="text" name="input_text_cols2_lain_2" id="" class="form-control border-dark">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="input_lain_check_cols1_3" id="input_lain_check_cols1_3" class="custom-checkbox-success">
                                        <input type="text" name="input_text_cols1_lain_3" id="" class="form-control border-dark">
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="input_lain_check_cols2_3" id="input_lain_check_cols2_3" class="custom-checkbox-success">
                                        <input type="text" name="input_text_cols2_lain_3" id="" class="form-control border-dark">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="flex-shrink-0">Pendidikan kesehatan untuk di rumah : </label>
                        <input type="text" name="pendik_kesehatan" id="" class="form-control border-dark">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="Balutan_basah" id="Balutan_basah" class="custom-checkbox-success">
                    <label for="Balutan_basah">Balutan jangan basah / kotor</label>
                </td>
                <td colspan="3">
                    <input type="checkbox" name="menaiki_tangga" id="menaiki_tangga" class="custom-checkbox-success">
                    <label for="menaiki_tangga">Jangan menaiki tangga lebih dari dua atau tiga kali sehari </label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="hindari_beban" id="hindari_beban" class="custom-checkbox-success">
                    <label for="hindari_beban">Hindari mengangkat beban berat</label>
                </td>
                <td colspan="3">
                    <div class="d-flex align-items-start gap-2">
                        <input type="checkbox" name="batas_pekerjaan" id="batas_pekerjaan" class="custom-checkbox-success">
                        <label for="batas_pekerjaan" class="col-10"> Batasi pekerjaan rumah tangga dan kegiatan sosial. Melakukan aktivitas secara bertahap sampai kesehatan pulih kembali </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="mengendarai_kendaraan" id="mengendarai_kendaraan" class="custom-checkbox-success">
                    <label for="mengendarai_kendaraan">Jangan mengendarai kendaraan sendiri / menyupir</label>
                </td>
                <td colspan="3">
                    <div class="d-flex align-items-start gap-2">
                        <input type="checkbox" name="muncul_keluhan_nyeri" id="muncul_keluhan_nyeri" class="custom-checkbox-success">
                        <label for="muncul_keluhan_nyeri" class="col-10"> Jika muncul keluhan nyeri / rasa sakit tidak berkurang dengan obat anda atau menjadi lebih buruk, segera datang ke RS</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="cek_lab_kontrol" id="cek_lab_kontrol" class="custom-checkbox-success">
                    <label for="cek_lab_kontrol">Cek Laboratorium sebelum kontrol</label>
                </td>
                <td colspan="3">
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="checkbox" name="pendik_lain_check" id="pendik_lain_check" class="custom-checkbox-success">
                        <input type="text" name="input_pendik_lain" id="" class="form-control border-dark">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="fw-bold">Diberikan kepada Pasien / Keluarga :</div>
                    <input type="text" name="diberikan_ke_pasien" id="" class="form-control border-dark">
                </td>
                <td colspan="3">
                    <div class="fw-bold">Jadwal Kontrol berikutnya : </div>
                    <input type="text" name="jadwal_pasien_kembali" id="" class="form-control border-dark">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="obat_obatan" id="obat_obatan" class="custom-checkbox-success">
                    <label for="obat_obatan">obat-obatan</label>
                </td>
                <td colspan="3">
                    <div>Nama Dokter</div>
                    <div class="my-2">
                        <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_dokter_rawat" />
                    </div>
                    <select type="select" name="dokter_rawat" id="dokter_rawat" class="form-select dokter_umum" style="width: 450px;"></select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="peralatan_barang_pribadi" id="peralatan_barang_pribadi" class="custom-checkbox-success">
                    <label for="peralatan_barang_pribadi">Peralatan / barang pribadi</label>
                </td>
                <td colspan="3">
                    <div>Tanggal dan Jam appointment</div>
                    <div><input type="datetime-local" name="tgl_apointment" id="" class="form-control border-dark"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="resep_obat" id="resep_obat" class="custom-checkbox-success">
                    <label for="resep_obat">Resep Obat </label>
                </td>
                <td colspan="3">
                    <div class="form-group">
                        <div>Petugas Admission</div>
                        <input type="text" name="petugas_admission" class="form-control border-dark">
                    </div>
                    <div class="form-group">
                        <div>Perawat yang melakukan apointment</div>
                        <select type="select" name="perawat_apointment" id="perawat_apointment" class="form-select perawat" style="width: 450px;"></select>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div>Hasil Pemeriksaan penunjang</div>
                    <textarea name="hasil_pemeriksaan" id="" class="form-control border-dark" rows="3"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="1">
                    <div class="fw-bold">Instruksi diberikan kepada : </div>
                </td>
                <td colspan="4">
                    <div class="fw-bold">Saya dapat menerima dan mengerti tentang intruksi pulang</div>
                </td>
            </tr>
            <tr>
                <td colspan="1">
                    <div class="d-flex align-items-center gap-2">
                        <input type="checkbox" name="intruksi_ke_pasien" id="intruksi_ke_pasien" class="custom-checkbox-success">
                        <label for="intruksi_ke_pasien">Pasien</label>
                    </div>
                </td>
                <td colspan="2">
                    <div>Pihak Pasien</div>
                </td>
                <td colspan="2">
                    <div>Perawat yang menjelaskan</div>
                </td>
            </tr>
            <tr>
                <td colspan="1">
                    <div class="d-flex align-items-center gap-2">
                        <input type="checkbox" name="intruksi_ke_keluarga" id="intruksi_ke_keluarga" class="custom-checkbox-success">
                        <label for="intruksi_ke_keluarga">keluarga</label>
                    </div>
                </td>
                <td rowspan="3" colspan="2">
                    <div class="text-center">
                        <img class="marker-image border border-dark" id="example-image"
                            src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width:150px; height:100px;"
                            data-input-name="image_drawer_state_image_11" />
                        <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                            value="" />
                    </div>
                </td>
                <td rowspan="3" colspan="2">
                    <div class="text-center">
                        <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_petugas_perawat" />
                    </div>

                </td>
            </tr>
            <tr>
                <td colspan="1">
                    <div class="d-flex align-items-center gap-2">
                        <input type="checkbox" name="intruksi_ke_org_terdekat" id="intruksi_ke_org_terdekat" class="custom-checkbox-success">
                        <label for="intruksi_ke_org_terdekat">orang terdekat</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="1">
                    <div class="d-flex align-items-center gap-2">
                        <input type="checkbox" name="intruksi_lain_sebutkan" id="intruksi_lain_sebutkan" class="custom-checkbox-success">
                        <label for="intruksi_lain_sebutkan">lain-lain sebutkan</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="1"><input type="text" name="input_lain_intruksi_1" id="" class="form-control border-dark"></td>
                <td colspan="2" rowspan="3">
                    <div>(tanda tangan dan nama jelas)</div>
                    <div>hubungan dengan pasien</div>
                    <div><input type="text" name="hub_dngn_pasien" id="" class="form-control border-dark"></div>
                </td>
                <td colspan="2" rowspan="3">
                    <select type="select" name="petugas_perawat" id="petugas_perawat" class="form-select perawat"></select>
                </td>
            </tr>
            <tr>
                <td><input type="text" name="input_lain_intruksi_2" id="" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td><input type="text" name="input_lain_intruksi_3" id="" class="form-control border-dark"></td>
            </tr>
        </tbody>
    </table>
</div>


<script>
    let dataDokter = []
    let dataPerawat = []

    const mode = "<?= $mode; ?>"

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    $(document).ready(function() {
        let page = 1;

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;

        listDokterUmumAPI()
        listPerawatAPI()


        $('#dokter_rawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_rawat')
        });

        $('#petugas_perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_petugas_perawat')
        });

    });

    function cbCommon(data) {

        populateFormFields(data);

        $('#dokter_rawat').prop('disabled', false)
        $('#dokter_rawat').select2('open')
        $('#dokter_rawat').select2('close')
        if (mode === "lihat")
            $('#dokter_rawat').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_rawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_rawat')
                }
            })
        }, 1000)


        $('#petugas_perawat').prop('disabled', false)
        $('#petugas_perawat').select2('open')
        $('#petugas_perawat').select2('close')
        if (mode === "lihat")
            $('#petugas_perawat').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataPerawat?.map(v => {
                if (v.text === $('#petugas_perawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_petugas_perawat')
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

    function listPerawatAPI() {
        $('.perawat').select2({
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
                    dataPerawat = items
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