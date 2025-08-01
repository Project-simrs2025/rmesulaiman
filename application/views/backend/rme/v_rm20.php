<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark">
            <tr>
                <td colspan="6">
                    <p class="text-center">
                        <strong>PENGKAJIAN DAN INTERVENSI RESIKO JATUH PADA PASIEN RAWAT JALAN DAN
                            IGD</strong>
                    </p>
                    <p class="text-center"><strong>(GET UP AND GO TEST)</strong></p>
                </td>
                <td colspan="8">
                    <p>Nama : <input type="text" class="form-control border-dark" name="nama_pasien" placeholder="Nama" disabled></p>
                    <p>T. lahir : <input type="date" class="form-control border-dark" name="tanggal_lahir" disabled></p>
                    <p>No. RM : <input type="text" class="form-control border-dark" name="no_rm" placeholder="No. RM" disabled></p>
                </td>
            </tr>
            <tr class="text-center">
                <td colspan="6">
                    <p><strong>Komponen Penilaian</strong></p>
                </td>
                <td colspan="1">
                    <p><strong>Ya</strong></p>
                </td>
                <td colspan="7">
                    <p><strong>Tidak</strong></p>
                </td>
            </tr>
            <tr class="text-center">
                <td colspan="6">
                    <ol>
                        <li>
                            Perhatikan cara berjalan pasien saat akan duduk di kursi. Apakah
                            pasien tampak tidak seimbang (sempoyongan / limbung)
                        </li>
                    </ol>
                </td>
                <td colspan="1"><input type="radio" class="custom-checkbox-success" name="penilaian_sempoyongan" value="Ya"></td>
                <td colspan="7"><input type="radio" class="custom-checkbox-danger" name="penilaian_sempoyongan" value="Tidak"></td>
            </tr>
            <tr class="text-center">
                <td colspan="6">
                    <ol start="2">
                        <li>
                            Apakah pasien memegang pinggiran kursi / meja / benda lain sebagai
                            penopang saat akan duduk
                        </li>
                    </ol>
                </td>
                <td colspan="1"><input type="radio" name="penilaian_pinggiran" value="Ya" class="custom-checkbox-success"></td>
                <td colspan="7"><input type="radio" name="penilaian_pinggiran" value="Tidak" class="custom-checkbox-danger"></td>
            </tr>
            <tr>
                <td colspan="14">
                    <p>Hasil pengkajian resiko jatuh ( beri tanda ƴ )</p>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>Tidak beresiko : tidak ditemukan a dan b</p>
                </td>
                <td colspan="8"><input type="text" class="form-control border-dark" name="pengkajian_tidak_berisiko"></td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>Beresiko rendah : ditemukan a atau b</p>
                </td>
                <td colspan="8"><input type="text" class="form-control border-dark" name="pengkajian_rendah_berisiko"></td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>Beresiko tinggi : ditemukan a dan b</p>
                </td>
                <td colspan="8"><input type="text" class="form-control border-dark" name="pengkajian_tinggi_berisiko"></td>
            </tr>
            <tr>
                <td colspan="14">
                    <p>Intervensi pencegahan resiko jatuh ( beri tanda ƴ )</p>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>Tidak beresiko : tidak ada tindakan</p>
                </td>
                <td colspan="8"><input type="text" class="form-control border-dark" name="intervensi_tidak_berisiko"></td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>Beresiko rendah : edukasi</p>
                </td>
                <td colspan="8"><input type="text" class="form-control border-dark" name="intervensi_rendah_berisiko"></td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>Beresiko tinggi : pasang gelang kuning dan edukasi</p>
                </td>
                <td colspan="8"><input type="text" class="form-control border-dark" name="intervensi_tinggi_berisiko"></td>
            </tr>
            <tr>
                <td colspan="6" class="col-6">
                    <p>
                        Nama dan Paraf yang melakukan pengkajian dan intervensi pencegahan
                        resiko jatuh
                    </p>
                </td>
                <td colspan="8">
                    <div class="text-center">
                        <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat_list_test" />
                    </div>
                    <select type="select" name="perawat_list_test" id="perawat_list_test" class="form-select perawat" style="width: 100%;"></select>
                </td>
            </tr>
            <tr>
                <td colspan="14">
                    <p>Isi edukasi:</p>
                    <ol>
                        <li>
                            Beritahu pasien dan keluarga bahwa pasien beresiko jatuh sedang /
                            tinggi
                        </li>
                        <li>
                            Beritahu pasien agar mengurangi aktfitas ( misalnya : jalan), keluarga
                            selalu mendampingi
                        </li>
                        <li>Jika pasien membutuhkan bantuan, segera hubungi petugas</li>
                    </ol>
                </td>
            </tr>
        </table>
    </div>
</div>




<!-- JavaScript -->
<script>
    const mode = "<?= $mode; ?>";
    let dataDokter = [];

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
                url: '<?= site_url('backend/admission/getKaryawan/6'); ?>'
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