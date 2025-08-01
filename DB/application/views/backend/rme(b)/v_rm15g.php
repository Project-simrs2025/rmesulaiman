<style>
    /* Styling container agar tidak terlalu lebar */
    .slider-container {
        position: relative;
        max-width: 80%;
        /* Batasi lebar slider agar tidak terlalu panjang */
        margin: 0 auto;
        /* Pusatkan slider */
    }

    /* Custom styling slider */
    input[type="range"] {
        -webkit-appearance: none;
        width: 100%;
        height: 8px;
        border-radius: 5px;
        outline: none;
        transition: opacity .2s;
        /* Pastikan warna latar belakang slider terlihat jelas */
        background: linear-gradient(to right, red, yellow, green);
    }

    /* Styling untuk thumb slider */
    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        cursor: pointer;
    }

    /* Label angka sejajar */
    .slider-labels {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-top: 5px;
        font-weight: bold;
        font-size: 14px;
    }

    /* Styling untuk mode terang */
    @media (prefers-color-scheme: light) {
        input[type="range"] {
            background: linear-gradient(to right, red, yellow, green);
            /* Warna slider untuk mode terang */
        }

        input[type="range"]::-webkit-slider-thumb {
            background: #007bff;
            /* Warna thumb slider untuk mode terang */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            /* Menambahkan bayangan untuk kontras */
        }
    }

    /* Styling untuk mode gelap */
    @media (prefers-color-scheme: dark) {
        input[type="range"] {
            background: linear-gradient(to right, #ff4c4c, #ffb400, #4caf50);
            /* Warna slider untuk mode gelap */
        }

        input[type="range"]::-webkit-slider-thumb {
            background: #fff;
            /* Thumb slider untuk mode gelap */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.7);
            /* Bayangan yang lebih kuat untuk mode gelap */
        }
    }
</style>


<div class="table-responsive mb-3">
    <div class="row">

        <table class="table table-borderless border-dark ms-3 mb-3">
            <tr>
                <td>
                    <div class="d-flex gap-2 align-items-center" style="width:300px">
                        <label for="" class="col-3">No Rm</label>
                        <input type="text" class="form-control border-dark" name="no_rm">
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-center" style="width:300px">
                        <label for="" class="col-3">Nama Ibu</label>
                        <input type="text" class="form-control border-dark" name="nama_ibu">
                    </div>
                </td>

                <td>
                    <div class="d-flex gap-2 align-items-center" style="width:300px">
                        <label for="">Umur</label>
                        <input type="text" class="form-control border-dark" name="umur">
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-center" style="width:300px">
                        <label for="">G</label>
                        <input type="text" class="form-control border-dark w-75" name="g">
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-center" style="width:300px">
                        <label for="">P</label>
                        <input type="text" class="form-control border-dark w-75" name="p">
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-center" style="width:300px">
                        <label for="">A</label>
                        <input type="text" class="form-control border-dark w-75" name="a">
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="d-flex gap-2 align-items-center" style="width:300px">
                        <label for="">Tanggal</label>
                        <input type="date" class="form-control border-dark w-75" name="tanggal">
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-center" style="width:300px">
                        <label for="" class="col-2">Jam</label>
                        <input type="time" class="form-control border-dark w-75" name="jam">
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="d-flex gap-2 align-items-center" style="width:300px">
                        <label for="" class="col-3">Sejak Jam</label>
                        <input type="time" class="form-control border-dark w-75" name="sejak_jam">
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-center" style="width:300px">
                        <label for="" class="col-4">Mules Sejak Jam</label>
                        <input type="time" class="form-control border-dark w-75" name="mules_jam">
                    </div>
                </td>
            </tr>

        </table>
    </div>
</div>


<div class="row">
    <table class="table table-bordered border-dark">
        <label for="customRange" class="form-label">Skala Nyeri: <span id="rangeValue"></span></label>

        <!-- Container untuk slider -->
        <div class="slider-container">
            <!-- Slider Input -->
            <input type="range" name="skala_nyeri" class="form-range" id="customRange" min="1" max="13" value="1" step="1"
                oninput="updateRange()">

            <!-- Label angka sejajar -->
            <div class="slider-labels">
                <span>200</span>
                <span>190</span>
                <span>180</span>
                <span>170</span>
                <span>160</span>
                <span>150</span>
                <span>140</span>
                <span>130</span>
                <span>120</span>
                <span>110</span>
                <span>100</span>
                <span>90</span>
                <span>80</span>
            </div>
        </div>
    </table>
</div>

<div class="row">
    <div class="d-flex gap-3 align-items-center">
        <div class="col-1">Air Ketuban</div>
        <table class="table table-bordered border-dark">
            <?php for ($row = 1; $row <= 2; $row++): ?>
                <tr>
                    <?php for ($col = 1; $col <= 8; $col++): ?>
                        <td>
                            <input
                                type="text"
                                name="air_ketuban_input_<?= (($row - 1) * 8) + $col ?>"
                                class="form-control border-dark"
                                style="width: 100px;">
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </div>
</div>

<div class="row">
    <table class="table table-bordered border-dark">

        <tbody>
            <tr>
                <td rowspan="13">Sentimeter (cm)</td>
            </tr>
            <?php for ($cm = 10; $cm >= 1; $cm--): ?>
                <tr>
                    <td><?= $cm ?></td>
                    <?php for ($i = 1; $i <= 6; $i++): ?>
                        <td><input type="text" name="cm_<?= $cm ?>_<?= $i ?>" class="form-control border-dark" style="width: 125px;"></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>

            <tr>
                <td>0</td>
                <td colspan="2" class="text-end">1</td>
                <td colspan="2">2</td>
                <td colspan="2">3</td>
            </tr>

            <tr>
                <td>Tanggal</td>
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <td colspan="2"><input type="date" name="tanggal_<?= $i ?>" class="form-control border-dark" style="width: 250px;"></td>
                <?php endfor; ?>
            </tr>
        </tbody>
    </table>
</div>

<div class="row">
    <table class="table table-bordered border-dark">
        <label for="customRange_contraction" class="form-label">Contraction: <span id="rangeValue_contraction"></span></label>

        <!-- Container untuk slider -->
        <div class="slider-container">
            <!-- Slider Input -->
            <input type="range" name="contraction" class="form-range" id="customRange_contraction" min="1" max="5" value="1" step="1"
                oninput="updateRangeContraction()">

            <!-- Label angka sejajar -->
            <div class="slider-labels">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>5</span>
            </div>
    </table>
</div>

<div class="row">
    <div class="d-flex gap-3 align-items-center">
        <div class="flex-shrink-0">Oksitosin U/L</div>
        <table class="table table-bordered border-dark">
            <?php for ($row = 1; $row <= 2; $row++): ?>
                <tr>
                    <?php for ($col = 1; $col <= 8; $col++): ?>
                        <td>
                            <input
                                type="text"
                                name="oksitosin_<?= (($row - 1) * 8) + $col ?>"
                                class="form-control border-dark"
                                style="width: 100px;">
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </div>
</div>


<div class="row">
    <table class="table table-bordered border-dark">
        <label for="customRange_Nadi" class="form-label">Nadi: <span id="rangeValue_Nadi"></span></label>

        <!-- Container untuk slider -->
        <div class="slider-container">
            <!-- Slider Input -->
            <input type="range" name="skala_Nadi" class="form-range" id="customRange_Nadi" min="1" max="13" value="1" step="1"
                oninput="updateRangeNadi()">

            <!-- Label angka sejajar -->
            <div class="slider-labels">

                <span>180</span>
                <span>170</span>
                <span>160</span>
                <span>150</span>
                <span>140</span>
                <span>130</span>
                <span>120</span>
                <span>110</span>
                <span>100</span>
                <span>90</span>
                <span>80</span>
                <span>70</span>
                <span>60</span>
            </div>
        </div>
    </table>
</div>


<div class="row mb-3">
    <div class="d-flex gap-2 align-items-center">
        <label for="">Suhu</label>
        <input type="text" name="suhu" class="form-control border-dark w-25"><span>&deg;C</span>
    </div>
</div>



<div class="row">
    <div class="d-flex gap-3 align-items-center">
        <div class="flex-shrink-0">
            <div class="d-flex gap-3 align-items-center">
                <div>Urin</div>
                <div>
                    <div class="d-flex flex-column gap-2">
                        <div>Protein</div>
                        <div>Aseton</div>
                        <div>Volume</div>
                    </div>
                </div>
            </div>

        </div>
        <table class="table table-bordered border-dark">
            <?php for ($row = 1; $row <= 3; $row++): ?>
                <tr>
                    <?php for ($col = 1; $col <= 8; $col++): ?>
                        <td>
                            <input
                                type="text"
                                name="oksitosin_<?= (($row - 1) * 8) + $col ?>"
                                class="form-control border-dark"
                                style="width: 100px;">
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </div>
</div>

<div class="row mt-3">
    <table class="table table-bordered border-dark">
        <tbody>
            <th>Catatan Persalinan</th>
            <th></th>
        </tbody>
        <tbody>
            <tr>
                <td class="col-5">
                    <div class="d-flex gap-2 align-items-center">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control border-dark" name="tanggal" id="tanggal">
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center gap-3">
                        <label for="" class="flex-shirnk-0 col-3">Masase Fundus Uteri</label>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="radio" class="custom-checkbox-success" name="masase" value="ya" id="ya_masase"><label for=""><label for="ya_masase">Ya</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center w-100">
                            <input type="radio" class="custom-checkbox-danger" name="masase" value="tidak" id="tidak_masase">
                            <div class="d-flex gap-2 w-100 align-items-center">
                                <label for="tidak_masase" class="flex-shrink-0">Tidak, alasan</label>
                                <input type="text" class="form-control border-dark">

                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="col-5">
                    <div class="d-flex gap-2 align-items-center">
                        <label for="bidan" class="flex-shrink-0">Nama Bidan</label>
                        <input type="text" class="form-control border-dark" name="bidan" id="bidan">
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center gap-3">
                        <label for="" class="flex-shirnk-0 col-3">Plasenta Lahir Lengkap</label>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="radio" class="custom-checkbox-success" name="plasenta" value="ya" id="ya_plasenta"><label for=""><label for="ya_plasenta">Ya</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center w-100">
                            <input type="radio" class="custom-checkbox-danger" name="plasenta" value="tidak" id="tidak_plasenta">
                            <div class="d-flex gap-2 w-100  flex-column">
                                <label for="tidak_plasenta" class="flex-shrink-0">Tidak, jika tidak lengkap alasan</label>
                                <input type="text" class="form-control border-dark">

                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>Tempat Persalinan</div>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex gap-2 ">
                                <input type="radio" class="custom-checkbox-success" name="persalinan" value="rumah_ibu" id="rumah_ibu">
                                <label for="rumah_ibu" class="flex-shrink-0">Rumah Ibu</label>
                            </div>
                            <div class="d-flex gap-2 ">
                                <input type="radio" class="custom-checkbox-success" name="persalinan" value="polindes" id="polindes">
                                <label for="polindes" class="flex-shrink-0">Polindes</label>
                            </div>
                            <div class="d-flex gap-2 ">
                                <input type="radio" class="custom-checkbox-success" name="persalinan" value="klinik" id="klinik">
                                <label for="klinik" class="flex-shrink-0">Klinik Swasta</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex gap-2 ">
                                <input type="radio" class="custom-checkbox-success" name="persalinan" value="puskesmas" id="puskesmas">
                                <label for="puskesmas" class="flex-shrink-0">Puskesmas</label>
                            </div>
                            <div class="d-flex gap-2 ">
                                <input type="radio" class="custom-checkbox-success" name="persalinan" value="rumah_sakit" id="rumah_sakit">
                                <label for="rumah_sakit" class="flex-shrink-0">Rumah sakit</label>
                            </div>
                            <div class="d-flex gap-2 w-100">
                                <input type="radio" class="custom-checkbox-success" name="persalinan" value="lainnya" id="lainnya">
                                <div>
                                    <label for="lainnya" class="flex-shrink-0">Lainnya</label>
                                    <input type="text" class="form-control border-dark">
                                </div>

                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center gap-3">
                        <label for="" class="flex-shirnk-0 col-5">Plasenta tidak lahir > 30 menit</label>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="radio" class="custom-checkbox-success" name="tidak_lahir" value="ya" id="ya_tidak_lahir"><label for=""><label for="ya_tidak_lahir">Ya</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center w-100">
                            <input type="radio" class="custom-checkbox-danger" name="tidak_lahir" value="tidak" id="tidak_tidak_lahir">
                            <label for="tidak_tidak_lahir">Tidak</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="alamat">Alamat tempat Persalinan</label>
                    <input type="text" class="form-control border-dark" name="alamat">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="d-flex align-items-center gap-3">
                        <label for="" class="flex-shirnk-0 col-2">catatan</label>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="radio" class="custom-checkbox-success" name="catatan" value="ya" id="ya_catatan"><label for="ya_catatan">Rujuk</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center w-100">
                            <input type="radio" class="custom-checkbox-success" name="catatan" value="tidak" id="tidak_catatan">
                            <label for="tidak_catatan">kala I/II/III/IV</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="">Alasan Merujuk</label>
                    <input type="text" class="form-control border-dark" name="alasan">
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    function updateRangeContraction() {
        const rangeInput = document.getElementById('customRange_contraction');
        // const rangeValue = document.getElementById('rangeValue_contraction');

        // Update teks nilai slider
        // rangeValue.textContent = rangeInput.value;

        // Array warna dari hijau ke merah
        const colors = ['#00cc00', '#00ff00', '#ffee00', '#ffaa00', '#ff0000'];

        let index = rangeInput.value - 1;

        // Update warna slider agar berubah sesuai nilai
        rangeInput.style.background = colors[index];
    }

    // Jalankan fungsi pertama kali saat halaman dimuat
    document.addEventListener('DOMContentLoaded', updateRangeContraction);


    function updateRange() {
        const rangeInput = document.getElementById('customRange');
        // const rangeValue = document.getElementById('rangeValue');

        // Mapping nilai slider ke angka skala nyeri (200 ke 80)
        const scaleValues = {
            1: 200,
            2: 190,
            3: 180,
            4: 170,
            5: 160,
            6: 150,
            7: 140,
            8: 130,
            9: 120,
            10: 110,
            11: 100,
            12: 90,
            13: 80
        };
        // rangeValue.textContent = scaleValues[rangeInput.value];

        // Update warna slider berdasarkan nilai
        const colors = ['#ff0000', '#ff3300', '#ff6600', '#ff9900', '#ffcc00',
            '#ffff00', '#ccff00', '#99ff00', '#66ff00', '#33ff00',
            '#00ff00', '#00cc00', '#009900'
        ];
        let index = rangeInput.value - 1;
        rangeInput.style.background = colors[index];
    }

    document.addEventListener('DOMContentLoaded', updateRange);



    function updateRangeNadi() {
        const rangeInput = document.getElementById('customRange_Nadi');
        // const rangeValue = document.getElementById('rangeValue_Nadi');

        // Update teks nilai slider
        // rangeValue.textContent = rangeInput.value;

        // Mapping nilai slider ke angka skala nyeri (200 ke 80)
        const scaleValues = {
            1: 180,
            2: 170,
            3: 160,
            4: 150,
            5: 140,
            6: 130,
            7: 120,
            8: 110,
            9: 100,
            10: 90,
            11: 80,
            12: 70,
            13: 60
        };
        rangeValue.textContent = scaleValues[rangeInput.value];

        // Update warna slider berdasarkan nilai
        const colors = ['#ff0000', '#ff3300', '#ff6600', '#ff9900', '#ffcc00',
            '#ffff00', '#ccff00', '#99ff00', '#66ff00', '#33ff00',
            '#00ff00', '#00cc00', '#009900'
        ];
        let index = rangeInput.value - 1;
        rangeInput.style.background = colors[index];
    }

    // Jalankan fungsi pertama kali saat halaman dimuat
    document.addEventListener('DOMContentLoaded', updateRangeNadi);
</script>