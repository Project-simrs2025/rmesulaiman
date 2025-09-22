<div class="row">
    <?php
    // Daftar input field
    $dataform1 = array(
        array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Pasien", 'status' => "", 'name' => "nama_pasien"),
        array('nama' => "Tanggal Lahir", 'name' => "tanggal_lahir", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Tanggal", 'status' => ""),
        array('nama' => "No Rm", 'name' => "no_rm", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nomor Rm", 'status' => ""),
        array('nama' => "Ruang Tindakan", 'name' => "ruang_tindakan", 'tipe' => "text", 'values' => "", 'holder' => "", 'status' => ""),
        array('nama' => "Tanggal Tindakan", 'tipe' => "date", 'values' => "", 'holder' => "Masukkan Tanggal Tindakan", 'status' => "", 'name' => 'tgl_tindakan'),
        array('nama' => "Jenis Operasi", 'tipe' => "text", 'values' => "", 'holder' => "", 'status' => "", 'name' => 'jenis_operasi'),
        array('nama' => "Teknik Anasthesia", 'tipe' => "text", 'values' => "", 'holder' => "", 'status' => "", 'name' => 'teknik_anasthesi'),
    );
    foreach ($dataform1 as $a) {
        echo "<div class='form-group mt-2'>";
        echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
        echo "<input type='{$a['tipe']}' class='form-control {$a['name']} {$a['class']} border-dark' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' {$a['status']} >
        </div>";
    }
    ?>
</div>


<div class="row mb-5">
    <div class="my-3">Berikan checklist apabila sudah dilakukan persiapan pada pernyataan berikut :</div>

    <div class="col-6">
        <div class="fw-bold mb-3 text-center">Listrik</div>
        <div class="d-flex flex-column gap-3 ps-2">
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="mesin_anesthesi" id="mesin_anasthesi"><label for="mesin_anasthesi">Mesin anesthesia terhubung dengan sumber listrik, indikator (+) menyala</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="layar_pematau" id="layar_pemantau"><label for="layar_pemantau"> Layar pemantauan terhubung dengan sumber listrik</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="defibrilator" id="defibrilirator"><label for="defibrilirator">Defibrilator terhubung dengan sumber listrik</label>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="fw-bold text-center mb-3">Mesin Aneshtesia</div>
        <div class="d-flex flex-column gap-3 ps-2">
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="power_on" id="power_on"><label for="power_on">Power ON</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="self_calibration" id="self_calibration"><label for="self_calibration"> Self calibration</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="t_kebocoran" id="t_kebocoran"><label for="t_kebocoran"> Tidak ada kebocoran sirkuit nafas</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="zat_volatile" id="zat_polatile"><label for="zat_polatile"> Zat volatile terisi</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="absorber" id="absorber"><label for="absorber"> Absorber CO2 dalam kondisi baik</label>
            </div>
        </div>
    </div>
</div>



<div class="row mb-5">

    <div class="col-6">
        <div class="fw-bold mb-3 text-center">Gas Medis</div>
        <div class="d-flex flex-column gap-3 ps-2">
            <div class="d-flex gap-2 ">
                <input type="checkbox" class="custom-checkbox-success" name="selang_oksigen" id="selang_oksigen"><label for="selang_oksigen" class="col-10">Selang oksigen terhubung antara sumber gas dengan mesin anesthesia. Flow meter O2 mesin anesthesia berfungsi, aliran gas keluar dari mesin dapat dirasakan
                </label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="compressed" id="compressed"><label for="compressed"> Compressed air terhubung antara sumber gas dengan mesin anesthesia</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="flow_meter" id="flow_meter"><label for="flow_meter" class="col-11"> Flow meter “AIR” di mesin anesthesia berfungsi, aliran gas keluar mesin dapat dirasakan</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="n20" id="n20"><label for="n20"> N2O terhubung antara sumber gas dengan mesin anesthesia</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="aliran_gas" id="aliran_gas"><label for="aliran_gas" class="col-11"> Flow meter N2O di mesin anesthesia berfungsi, aliran gas keluar mesin dapat dirasakan</label>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="fw-bold text-center mb-3">Manajemen Jalan Nafas</div>
        <div class="d-flex flex-column gap-3 ps-2">
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="sungkup" id="sungkup"><label for="sungkup"> Sungkup muka dalam ukuran yang benar</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="orop" id="orop"><label for="orop"> Orophaygeal airway (Gudel) dalam ukuran yang benar</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="batang_larygos" id="batang_larygos"><label for="batang_larygos"> Batang laryngoskop berisi baterai</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="bilah_lary" id="bilah_lary"><label for="bilah_lary"> Bilah laryngoskop dalam ukuran yang benar</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="gagang_bilah" id="gagang_bilah"><label for="gagang_bilah"> Gagang dan bilah laringoskop berfungsi baik</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="ett" id="ett"><label for="ett"> ETT atau LMa dalam ukuran yang benar, tidak bocor</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="intro" id="intro"><label for="intro"> Introdusor</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="semprit" id="semprit"><label for="semprit"> Semprit untuk mengembangkan cuff</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="forceps" id="forceps"><label for="forceps"> Forceps magil</label>
            </div>
        </div>
    </div>
</div>


<div class="row mb-5">

    <div class="col-6">
        <div class="fw-bold mb-3 text-center">Pemantauan</div>
        <div class="d-flex flex-column gap-3 ps-2">
            <div class="d-flex gap-2 ">
                <input type="checkbox" class="custom-checkbox-success" name="kabel" id="kabel"><label for="kabel"> Kabel EKG terhubung dengan layar pemantau
                </label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="elektrode" id="elektrode"><label for="elektrode"> Elektroda EKG dalam jumlah dan ukuran sesuai</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="nibp" id="nibp"><label for="nibp"> NIBP terhubung dengan layar pantau, berfungsi baik</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="kapnografi" id="kapnografi"><label for="kapnografi"> Kapnografi terhubung dengan layar pantau, berfungsi baik</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="pemantau_suhu" id="pemantau_suhu"><label for="pemantau_suhu"> Pemantau suhu terhubung dengan layar pantau</label>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="fw-bold text-center mb-3">Lain - lain</div>
        <div class="d-flex flex-column gap-3 ps-2">
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="stestoskop" id="stestoskop"><label for="stestoskop"> Stestoskop tersedia</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="suction" id="suction"><label for="suction"> Suction berfungsi baik</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="selang_suction" id="selang_suction"><label for="selang_suction"> Selang suction terhubung, kateter suction dalam ukuran yang benar</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="plester" id="plester"><label for="plester"> Plester untuk fiksasi</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="blanker" id="blanker"><label for="blanker"> Blanker roll / hemotherm / radiant heater terhubung</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="listrik_b" id="listrik_b"><label for="listrik_b"> Listrik, berfungsi baik</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="lidocaine" id="lidocaine"><label for="lidocaine"> Lidocaine spray / jelly</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="jelly" id="jelly"><label for="jelly"> Defibrillator jelly</label>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">

    <div class="col-6">
        <div class="fw-bold mb-3 text-center">Obat - obat</div>
        <div class="d-flex flex-column gap-3 ps-2">
            <div class="d-flex gap-2 ">
                <input type="checkbox" class="custom-checkbox-success" name="epinefrin" id="epinefrin"><label for="epinefrin"> Epinefrin
                </label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="atropine" id="atropine"><label for="atropine"> Atropine</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="sedatif" id="sedatif"><label for="sedatif"> Sedatif (midazolam, propofol, etornidat / ketamine / tiopental)</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="opiate" id="opiate"><label for="opiate"> Opiate / opioid</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="pelumpuh" id="pelumpuh"><label for="pelumpuh"> Pelumpuh obat</label>
            </div>
            <div class="d-flex gap-2">
                <input type="checkbox" class="custom-checkbox-success" name="antibiotika" id="antibiotika"><label for="antibiotika"> Antibiotika</label>
            </div>
            <div class="d-flex gap-2 align-items-center">
                <label for="lain_obat" class="flex-shrink-0"> Lain - lain</label>
                <textarea name="lain_obat" id="lain_obat" rows="5" class="form-control border-dark"></textarea>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <table class="table table-borderless border-dark">
        <tr>
            <td class="col-6">
                <div class="form-group">
                    <label for="">Penata Anastesi</label>
                    <div class="d-flex flex-column align-items-center gap-2 mt-4">
                        <select type="select" name="penata_anestesi" id="penata_anestesi" class="form-select newperawat" style="width: 100%;"></select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <p class="text-center">Tandatangan</p>
                    <div class="text-center">
                        <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_penata_anestesi" />
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-group">
                    <label for="">DPJP Anastesi</label>
                    <div class="d-flex flex-column align-items-center gap-2 mt-4">
                        <select type="select" name="dpjp_anestesi" id="dpjp_anestesi" class="form-select dokter" style="width: 100%;"></select>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group text-center">
                    <p>Tandatangan</p>
                    <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_dpjp_anestesi" />
                </div>
            </td>
        </tr>
    </table>
</div>



<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawatNew = []
    let dataDokter = []

    function cbCommon() {
        $('#penata_anestesi').prop('disabled', false)
        $('#penata_anestesi').select2('open')
        $('#penata_anestesi').select2('close')
        if (mode === "lihat")
            $('#penata_anestesi').prop('disabled', true)

        setTimeout(() => {
            dataListPerawatNew?.map(v => {
                if (v.text === $('#penata_anestesi').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_penata_anestesi')
                }
            })
        }, 1000)


        $('#dpjp_anestesi').prop('disabled', false)
        $('#dpjp_anestesi').select2('open')
        $('#dpjp_anestesi').select2('close')
        if (mode === "lihat")
            $('#dpjp_anestesi').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#dpjp_anestesi').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dpjp_anestesi')
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
                selector: '.newperawat',
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

                        // Assign ke variabel tertentu jika perlu
                        if (selector === '.newperawat') {
                            dataListPerawatNew = items;
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


        $('#penata_anestesi').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_penata_anestesi')
        });

        $('#dpjp_anestesi').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dpjp_anestesi')
        });


        //================ new =====================//
    });
</script>