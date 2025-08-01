<!-- rm 33 -->
<div class="row">
    <div class="col-6 mb-3">
        <label for="">Tanggal dan Jam Masuk :</label>
        <input type="datetime-local" name="tanggal_jam_masuk" class="form-control border-dark" value="<?= date('Y-m-d H:i') ?>" />
    </div>
    <div class="col-6 mb-3">
        <label for="">Tanggal dan Jam Keluar :</label>
        <input type="datetime-local" name="tanggal_jam_keluar" class="form-control border-dark " value="<?= date('Y-m-d H:i') ?>" />
    </div>
    <table class="table table-bordered border-dark" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="3">
                <h3 class="text-center"><strong>KRITERIA MASUK</strong></h3>
            </td>
        </tr>
        <tr>
            <td>
                <p>No.</p>
            </td>
            <td class="col-2">
                <p>Prioritas</p>
            </td>
            <td>
                <p>Kriteria</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>1</p>
            </td>
            <td>
                <p class="text-center">Prioritas I</p>
            </td>
            <td>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="pasien_sakit_berat" value="pasien_sakit_berat" class="custom-checkbox-success" id="pasien_sakit_berat" />
                    <label for="pasien_sakit_berat">Pasien sakit berat</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="pasien_ventilasi" value="pasien_ventilasi" class="custom-checkbox-success" id="pasien_ventilasi" />
                    <label for="pasien_ventilasi">Pasien ventilasi dan alat bantu supportif organ, sistem yang lain</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="infus_obat_vasoaktif" value="infus_obat_vasoaktif" class="custom-checkbox-success" id="infus_obat_vasoaktif" />
                    <label for="infus_obat_vasoaktif">Infus dan obat-obatan vasoaktif secara kontinu</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="pengobatan_kontinu" value="pengobatan_kontinu" class="custom-checkbox-success" id="pengobatan_kontinu" />
                    <label for="pengobatan_kontinu">Pengobatan kontinu titrasi</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="pasien_bedah_kardiotorasik" value="pasien_bedah_kardiotorasik" class="custom-checkbox-success" id="pasien_bedah_kardiotorasik" />
                    <label for="pasien_bedah_kardiotorasik">Pasien pasca bedah kardiotorasik</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="pasien_sepsis_berat" value="pasien_sepsis_berat" class="custom-checkbox-success" id="pasien_sepsis_berat" />
                    <label for="pasien_sepsis_berat">Pasien sepsis berat</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="gangguan_keseimbangan" value="gangguan_keseimbangan" class="custom-checkbox-success" id="gangguan_keseimbangan" />
                    <label for="gangguan_keseimbangan">Gangguan keseimbangan asam basa dan elektrolit yang mengancam nyawa</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>2</p>
            </td>
            <td>
                <p class="text-center">Prioritas II</p>
            </td>
            <td>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="pasien_gagal_jantung_paru" value="pasien_gagal_jantung_paru" class="custom-checkbox-success" id="pasien_gagal_jantung_paru" />
                    <label for="pasien_gagal_jantung_paru">Pasien gagal jantung paru</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="gagal_ginjal_akut_berat" value="gagal_ginjal_akut_berat" class="custom-checkbox-success" id="gagal_ginjal_akut_berat" />
                    <label for="gagal_ginjal_akut_berat">Gagal ginjal akut berat</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="pembedahan_mayor" value="pembedahan_mayor" class="custom-checkbox-success" id="pembedahan_mayor" />
                    <label for="pembedahan_mayor">Pembedahan mayor</label>
                </div>

            </td>
        </tr>
        <tr>
            <td>
                <p>3</p>
            </td>
            <td>
                <p class="text-center">Prioritas III</p>
            </td>
            <td>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="keganasan_metastase" value="keganasan_metastase" class="custom-checkbox-success" id="keganasan_metastase" />
                    <label for="keganasan_metastase">Pasien dengan keganasan metastase disertai penyulit infeksi</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="pericardial_tamponade" value="pericardial_tamponade" class="custom-checkbox-success" id="pericardial_tamponade" />
                    <label for="pericardial_tamponade">Pericardial tamponade</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="sumbatan_jalan_nafas" value="sumbatan_jalan_nafas" class="custom-checkbox-success" id="sumbatan_jalan_nafas" />
                    <label for="sumbatan_jalan_nafas">Sumbatan jalan nafas</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="penyakit_jantung" value="penyakit_jantung" class="custom-checkbox-success" id="penyakit_jantung" />
                    <label for="penyakit_jantung">Pasien penyakit jantung</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="penyakit_paru_terminal" value="penyakit_paru_terminal" class="custom-checkbox-success" id="penyakit_paru_terminal" />
                    <label for="penyakit_paru_terminal">Penyakit paru terminal</label>
                </div>

            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="d-flex flex-column align-items-end">
                    <div>Dokter</div>
                    <img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_dokter_umum2" />
                    <select type="select" name="dokter_umum2" id="dokter_umum2" class="form-select w-25"></select>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <h3 class="text-center"><strong>KRITERIA KELUAR</strong></h3>
            </td>
        </tr>
        <tr>
            <td>
                <p>No.</p>
            </td>
            <td>
                <p>Prioritas</p>
            </td>
            <td>
                <p>Kriteria</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>1</p>
            </td>
            <td>
                <p class="text-center">Prioritas I</p>
            </td>
            <td>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="tidak_ada_terapi_intensif" value="tidak_ada_terapi_intensif" class="custom-checkbox-success" id="keb_terapi" />
                    <label for="keb_terapi">Kebutuhan untuk terapi intensif tidak ada lagi/ tidak bermanfaat</label>
                </div>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="terapi_gagal" value="terapi_gagal" class="custom-checkbox-success" id="terapi_gagal" />
                    <label for="terapi_gagal">Terapi telah gagal, sehingga prognosik jangka pendek jelek</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>2</p>
            </td>
            <td>
                <p class="text-center">Prioritas II</p>
            </td>
            <td>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="tidak_memerlukan_terapi_intensif" value="tidak_memerlukan_terapi_intensif" class="custom-checkbox-success" id="p_pemantauan" />
                    <label for="p_pemantauan">Pada pemantauan, ternyata tidak memerlukan terapi intensif</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>3</p>
            </td>
            <td>
                <p class="text-center">Prioritas III</p>
            </td>
            <td>
                <div class="d-flex justify-content-start gap-2 my-3">
                    <input type="checkbox" name="penyakit_terminal" value="penyakit_terminal" class="custom-checkbox-success" id="keb_intens" />
                    <label class="d-flex justify-content-start gap-2 my-3-label col-11" for="keb_intens">Kebutuhan terapi intensif tidak ada lagi, kemungkinan sembuh atau manfaat dari terapi intensif kontinu kecil, maka mungkin dapat dikeluarkan lebih dahulu dari ICU. Misalnya: pasien dengan penyakit lanjut seperti paru kronik, penyakit jantung atau liver terminal, karsinoma yang telah menyebar luas, tidak ada terapi potensial untuk memperbaiki prognosinya.</label>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3" class="text-start ">
                <div class="d-flex flex-column align-items-end">
                    <div>Dokter</div>
                    <img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_dokter_umum" />
                    <select type="select" name="dokter_umum" id="dokter_umum" class="form-select w-25"></select>
                </div>
            </td>
        </tr>
    </table>
</div>
</div>




<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    function cbCommon(data) {
        populateFormFields(data);

        $('#dokter_umum').prop('disabled', false)
        $('#dokter_umum').select2('open')
        $('#dokter_umum').select2('close')
        if (mode === "lihat")
            $('#dokter_umum').prop('disabled', true)

        setTimeout(() => {
            console.log({
                dataDokter
            })
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
                }
            })
        }, 1250)
        $('#dokter_umum2').prop('disabled', false)
        $('#dokter_umum2').select2('open')
        $('#dokter_umum2').select2('close')
        if (mode === "lihat")
            $('#dokter_umum2').prop('disabled', true)

        setTimeout(() => {
            console.log({
                dataDokter
            })
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum2').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum2')
                }
            })
        }, 1250)
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
        $('#dokter_umum2').select2({
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

    $(document).ready(function() {
        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;

        listDokterUmumAPI()

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });

        $('#dokter_umum2').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum2')
        });
    })


    $('#dokter_umum').on('select2:select', function(e) {
        const {
            id
        } = e.params.data;
        QRSignatureAPI(id, 'qr_dokter_umum')
    });
    $('#dokter_umum2').on('select2:select', function(e) {
        const {
            id
        } = e.params.data;
        QRSignatureAPI(id, 'qr_dokter_umum2')
    });
</script>