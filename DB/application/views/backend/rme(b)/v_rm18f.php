<div class="row table-responsive">
    <table class="table table-bordered border-dark">
        <tr>
            <td class="text-center">
                <div class="d-block"><img src="<?= $images; ?>" alt="gambar" style="width: 80px;"></div>
                <div><?= $site_title; ?></div>
            </td>
            <td class="text-center">
                <div>Daftar Tilik Keselamatan bedah atau operasi</div>
            </td>
            <td>
                <div class="d-flex flex-column gap-3">
                    <div>
                        <label for="">Nama</label>
                        <input type="text" class="form-control border-dark" name="nama_pasien">
                    </div>
                    <div>
                        <label for="">Tanggal Lahir</label>
                        <input type="text" class="form-control border-dark" name="tanggal_lahir">
                    </div>
                    <div>
                        <label for="">No. Rm</label>
                        <input type="text" class="form-control border-dark" name="no_rm">
                    </div>
                </div>
            </td>
        </tr>

        <tr class="text-center">
            <td>sign in</td>
            <td>Time Out</td>
            <td>Sign out</td>
        </tr>

        <tr class="border-bottom-0 border-right-0">
            <td class="col-4 border-right-0">
                <div class="d-flex gap-2 align-items-center">
                    <label for="" class="col-4">Nama Operator :</label>
                    <input type="text" class="form-control border-dark" name="nama_op">
                </div>
            </td>
            <td class="border-bottom-0 border-right-0"></td>
            <td class="border-bottom-0 border-right-0"></td>
        </tr>

        <tr class="border-top-0 border-bottom-0 border-right-0">
            <td>
                <label for="">Sign in (Tgl/Pukul) :</label>
                <input type="datetime-local" class="form-control border-dark" name="signin_input">
            </td>
            <td>
                <label for="">TheTime out (Tgl/ Pukul) :</label>
                <input type="datetime-local" class="form-control border-dark" name="timeout_input">
            </td>
            <td>
                <label for="">The Sign Out (Tgl/ Pukul) :</label>
                <input type="datetime-local" class="form-control border-dark" name="signout_input">
            </td>
        </tr>

        <tr class="border-top-0 border-bottom-0 border-right-0">
            <td>Dilakukan sebelum induksi anastesi</td>
            <td>Dilakukan sebelum insisi kulit</td>
            <td>Dilakukan sebelum pasien meninggalkan kamar operasi, diisi oleh perawat, dokter anastesi dan operator.</td>
        </tr>

        <tr class="border-top-0  border-right-0">
            <td class="d-flex">
                <!-- <div class="row"> -->
                <table class="table table-bordered border-dark" style="width: 500px;">
                    <tr class="text-center">
                        <td>Konfirmasi Pasien</td>
                        <td>Sudah</td>
                        <td>Belum</td>
                    </tr>
                    <tr class="text-center">
                        <td>Identifikasi gelang pasien</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="identifikasi" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="identifikasi" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Lokasi Operasi</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="operasi" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="operasi" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Prosedur</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="prosedur" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="prosedur" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Surat Izin Operasi</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="izin_operasi" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="izin_operasi" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Penandaan izin operasi</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="penandaan_operasi" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="penandaan_operasi" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Pengecekan obat-obat anastesi lengkap</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="cek_obat" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="cek_obat" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Pulse okimetri terpasang dan berfungsi</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="pulse_okimetri" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="pulse_okimetri" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Riwayat alergi Kesulitan bernafas/resiko aspirasi
                            dan menggunakan peralatan dan bantuan
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="rw_alergi" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="rw_alergi" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Resiko kehilangan darah + 500 ml 7mg/kg BB pada anak </td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="r_kehilangan" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="r_kehilangan" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td> Akses intravena (IVFD) Rencana Terapi Cairan</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="akses_intravena" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="akses_intravena" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex flex-column gap-2 align-items-center">
                                <div class="mb-2">Perawat Dokter Anastesi</div>
                                <img class="img-responsive center-block" style="width: 50%;" id="qr_perawat1" />
                                <input type="text" name="nama_perawat_form1" id="nama_perawat_form2" class="form-control border-dark">
                                <input type="hidden" name="id_perawat_form1" id="id_perawat_form1">
                            </div>
                        </td>
                        <td colspan="2" class="col-6">
                            <div class="d-flex flex-column gap-2 align-items-center">
                                <div class="mb-1">Perawat Sirkuler</div>
                                <img class="img-responsive center-block mt-2" style="width: 50%;" id="qr_list_perawat1" />
                                <select type="select" name="list_perawat" class="form-select list_perawat" id="list_perawat1" style="width: 100%;"></select>
                            </div>

                        </td>
                    </tr>
                </table>
                <!-- </div> -->
            </td>


            <td>
                <table class="table table-bordered border-dark" style="width: 500px;">
                    <tr class="text-center">
                        <td>Konfirmasi Pasien</td>
                        <td class="col-3">Sudah</td>
                        <td class="col-3">Belum</td>
                    </tr>
                    <tr class="text-center">
                        <td>Konfirmasi seluruh anggota tim
                            memperkenalkan diri</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="konfirmasi_seluruh" id="sudah" value="sudah_konf">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="konfirmasi_seluruh" id="belum" value="belum_konf">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="3">Dokter bedah, dokter anastesi dan perawat melakukan konfirmasi secara verbal</td>
                    </tr>
                    <tr class="text-center">
                        <td> Nama pasien</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="nama_" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="nama_" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Prosedur</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="prosedur_2" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="prosedur_2" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Lokasi dimana insisi akan dibuat
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="lokasi_insisi" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="lokasi_insisi" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="3"> Apakah antibiotik profilaksis sudah diberikan 30 menit sblmnya:
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Nama antibiotik:</td>
                        <td colspan="2">
                            <input type="text" name="antibiotik" class="form-control border-dark">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Dosis antibiotik:</td>
                        <td colspan="2">
                            <input type="text" name="dosis_antibiotik" class="form-control border-dark">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="3">Antisipasi keadaan kritis</td>
                    </tr>
                    <tr class="text-center">
                        <td>Tim dokter bedah; prosedur kerja,lama operasi,
                            antisipasi kehilangan darah
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="tim_dokter" id="sudah" value="sudah_dok">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="tim_dokter" id="belum" value="belum_dok">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td> Tim anastesi; apakah ada hal khusus yang perlu
                            diperhatikan pada pasien
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="tim_anastesi" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="tim_anastesi" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> Tim Perawat</td>
                    </tr>
                    <tr class="text-center">
                        <td>Apakah peralatan sudah steril:</td>
                        <td colspan="2">
                            <input type="text" name="peralatan_steril" class="form-control border-dark">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Adakah alat khusus yg disiapkan:</td>
                        <td colspan="2">
                            <input type="text" name="alat_khusus" class="form-control border-dark">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Jumlah kasa :</td>
                        <td colspan="2">
                            <input type="text" name="jumlah_kasah" class="form-control border-dark">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Jumlah instrumen :</td>
                        <td colspan="2">
                            <input type="text" name="jumlah_instrumen" class="form-control border-dark">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Jumlah jarum :</td>
                        <td colspan="2">
                            <input type="text" name="jumlah_jarum" class="form-control border-dark">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Apakah foto rontgen/ CT Scan sd ditayangkan</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="rontgen" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="rontgen" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="d-flex flex-column gap-2">
                                <div class="mb-4">Perawat Sirkuler</div>
                                <img class="img-responsive center-block mt-2" style="width: 50%;" id="qr_list_perawat2" />
                                <select type="select" name="list_perawat" class="form-select list_perawat" id="list_perawat2" style="width: 100%;"></select>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>

            <td class="d-flex">
                <table class="table table-bordered border-dark">
                    <tr>
                        <td>Konfirmasi Pasien</td>
                        <td>Sudah</td>
                        <td>Belum</td>
                    </tr>
                    <tr class="text-center">
                        <td> Perawat mengkonfirmasi secara
                            Verbal dengan tim
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="perawat_konf" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="perawat_konf" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Prosedur Tindakan</td>
                        <td colspan="2"><input type="text" class="form-control border-dark" name="nama_prosedur_tindak"></td>
                    </tr>
                    <tr class="text-center">
                        <td>Alat insrumen, kasa dan jarum telah dihitung dengan benar </td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="alat_instrm" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="alat_instrm" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Jumlah kasa :</td>
                        <td colspan="2">
                            <input type="text" name="jumlah_kasah2" class="form-control border-dark">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Jumlah instrumen :</td>
                        <td colspan="2">
                            <input type="text" name="jumlah_instrumen2" class="form-control border-dark">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Jumlah jarum :</td>
                        <td colspan="2">
                            <input type="text" name="jumlah_jarum2" class="form-control border-dark">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td> Spesimen/jaringan telah diberi label sesuai nama pasien</td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="spesimen_jrngn" id="sudah" value="sudah">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="spesimen_jrngn" id="belum" value="belum">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td> Adakah masalah peralatan Selama operasi
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-success" name="spesimen_jrngn" id="ya" value="ya">
                        </td>
                        <td>
                            <input type="radio" class="custom-checkbox-danger" name="spesimen_jrngn" id="tidak" value="tidak">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">Operator/ Dokter bedah,
                            dokter anastesi dan perawat
                            melakukan review masalah utama
                            apa yg harus diperhatikan untuk penyembuhan
                            dan managemen pasien selanjutnya
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Hal Yang Harus Diperhatikan</td>
                        <td colspan="2"><input type="text" class="form-control border-dark" name="hal_diperhatikan"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="d-flex align-items-center justify-content-end gap-2">
                                <label for="">Tanggal Tindakan: <?= $city_sign ?></label> <input type="date" value="<?= date('Y-m-d') ?>" class="form-control border-dark w-25">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex flex-column gap-2" style="width: 250px;">
                                <div class="mb-4">Operator</div>
                                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="max-width: 300px" data-input-name="image_drawer_state_image_11" />
                                <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                                    value="" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column gap-2">
                                <div class="mb-4">Dokter Anastesi</div>
                                <div class="text-center">

                                    <img class="img-responsive center-block mt-2" style="width: 50%;" id="qr_dokter_umum" />
                                    <select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 300px;"></select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column gap-2" style="width: 200px;">
                                <div class="mb-4">Perawat</div>
                                <div class="text-center">
                                    <img class="img-responsive center-block" style="width: 80%;" id="qr_perawat2" />
                                    <input type="text" name="nama_perawat" id="nama_perawat_form2" class="form-control border-dark mt-1">
                                </div>
                                <input type="hidden" name="id_perawat_form2" id="id_perawat_form2">
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


    </table>
</div>


<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

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
            console.log(dataListPerawat)
            dataListPerawat?.map(v => {
                if (v.text === $('#list_perawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_list_perawat')
                }
            })
        }, 500)
        // batas list_perawat


        // dokter umum
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
        }, 500)
        // batas list dokter umum
    }



    // FUNCTION PERAWAT LIST
    function listPerawatAPI() {
        $('.list_perawat').select2({
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
    // batas

    $(document).ready(function() {
        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;


        $('[id^="id_perawat_form"]').each(function() {
            const id = $(this).attr('id').replace('id_perawat_form', '');

            const idField = $(`#id_perawat_form${id}`);
            const nameField = $(`#nama_perawat_form${id}`);
            const imgField = $(`#qr_perawat${id}`);

            idField.val(idField.val() || id_perawat);
            nameField.val(nameField.val() || nama_perawat);
            nameField.attr('disabled', true);

            QRSignatureAPI(idField.val(), imgField.attr('id'));
        });

        // dokter list
        listDokterUmumAPI()

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });

        // perawat list
        listPerawatAPI()

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        // Event listener for select2:select event
        $('.list_perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;

            const selectId = $(this).attr('id');

            let qrImageId;
            if (selectId === 'list_perawat1') {
                qrImageId = 'qr_list_perawat1';
            } else if (selectId === 'list_perawat2') {
                qrImageId = 'qr_list_perawat2';
            }

            // Call QRSignatureAPI with the correct image ID
            QRSignatureAPI(id_original, qrImageId);
        });



    })
</script>