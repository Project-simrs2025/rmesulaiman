<!-- rm 16a -->
<style>
    .kembarRadio {
        display: none;
    }

    .kembarRadio+.radio-label::before {
        content: '\f096';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        color: #ccc;
        margin-right: 8px;
        font-size: 20px;
    }

    /* Menampilkan ikon ceklis ketika radio button terpilih */
    .kembarRadio:checked+.radio-label::before {
        content: '\f00c';
        color: green;
    }

    .hidden {
        display: none;
    }
</style>

<div class="row mt-4">
    <span class="fw-bold">Keadaan Bayi</span>

    <div class="col-12 my-3">
        <div class="d-flex gap-3 align-items-center">
            <div class="d-flex align-items-center gap-2">
                <input type="radio" name="radio_lahir" class="kembarRadio" id="kembarRadio1" value="kembar" onclick="handleKembarTunggal('kembar')">
                <label for="kembarRadio1" class="radio-label col-4">Kembar : </label>
                <input type="text" class="kembarInput form-control border-dark w-50" id="kembarInput1" name="kembar" readonly>
            </div>
            <div class="d-flex align-items-center gap-2 my-3">
                <input type="radio" name="radio_lahir" class="kembarRadio" id="kembarRadio2" value="tunggal" onclick="handleKembarTunggal('tunggal')">
                <label for="kembarRadio2" class="radio-label">Tunggal</label>
            </div>
        </div>

        <div class="d-flex gap-2 align-items-center">
            <label for="">Lahir di :</label>
            <input type="text" class="ms-4 w-50 form-control border-dark" name="lahir">
        </div>
    </div>

    <!-- Bagian Kondisi Saat Ini -->
    <div class="col-6 my-3">
        <div class="d-flex gap-3 align-items-center">
            <span class="col-4">Kondisi Saat Ini :</span>
            <input type="radio" name="kondisi" value="hidup" onclick="toggleSebabKematian()" id="hidup" class="custom-checkbox-success">
            <label for="hidup">Hidup</label>
            <input type="radio" name="kondisi" value="mati" class="kembarRadio" id="kembarRadioMati" onclick="toggleSebabKematian()">
            <label for="kembarRadioMati" class="radio-label">Mati</label>
        </div>
    </div>

    <!-- Input "Sebab Kematian" yang akan selalu terlihat -->
    <div class="col-12">
        <label for="" class="mb-2">Sebab Kematian :</label>
        <textarea name="sebab_kematian" id="sebab_kematian" rows="6" class="w-100 form-control border-dark"></textarea>
    </div>
</div>



<div class="row">
    <div class="col-12 my-4">
        <table class="table table-bordered border-dark mt-3">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    Nilai Apgar
                </div>
                <div class="card-body ">
                    <table class="table table-bordered border-dark">
                        <thead>
                            <tr>
                                <th>Tanda-tanda</th>
                                <th>0</th>
                                <th>1</th>
                                <th>2</th>
                                <th colspan="3">NILAI ANGKA PADA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DJJ</td>
                                <td>
                                    <div class="form-check">

                                        <label class="form-check-label" for="djj_0">Neg</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="djj_1">
                                            < 100</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="djj_2"> > 100</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="djj_nilai_1">
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="djj_nilai_2">
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="djj_nilai_3">
                                </td>
                            </tr>
                            <tr>
                                <td>Pernafasan</td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="pernafasan_0">Neg</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="pernafasan_1">Tidak teratur</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="pernafasan_2">Segera Menangis</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="pernafasan_nilai_1">
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="pernafasan_nilai_2">
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="pernafasan_nilai_3">
                                </td>
                            </tr>
                            <tr>
                                <td>Tonus Otot</td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="tonun_otot_0">Lemah</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="tonun_otot_1">Fleksi</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="tonun_otot_2">Aktif</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="tonun_otot_nilai_1">
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="tonun_otot_nilai_2">
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="tonun_otot_nilai_3">
                                </td>
                            </tr>
                            <tr>
                                <td>Refleks</td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="refleks_0">Neg</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="refleks_1">Merengek / Merintih</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="refleks_2">Menangis Kuat</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="refleks_nilai_1">
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="refleks_nilai_2">
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="refleks_nilai_3">
                                </td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="warna_0">Biru Seluruhnya</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="warna_1">Anggota Gerak Biru</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label" for="warna_2">Merah Seluruhnya</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="warna_nilai_1">
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="warna_nilai_2">
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="warna_nilai_3">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-end fw-bold">Jumlah Angka</td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="sum_1" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="sum_2" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control border-dark" name="sum_3" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="" class="fw-bold text-decoration-underline mb-2 ">KISAH RESUSITASI</label>
                    <textarea name="" id="" rows="7" class="w-100 form-control border-dark"></textarea>
                </div>
            </div>
    </div>

    <script>
        // Fungsi untuk menangani perubahan antara "Kembar" dan "Tunggal"
        function handleKembarTunggal(type) {
            const kembarInput = document.getElementById("kembarInput1");

            // Jika "Kembar" dipilih, aktifkan input
            if (type === 'kembar') {
                kembarInput.removeAttribute("readonly"); // Menghilangkan readonly agar bisa diubah
                kembarInput.focus(); // Fokus pada input "Kembar"
            } else {
                // Jika "Tunggal" dipilih, kosongkan nilai dan set readonly
                kembarInput.value = "";
                kembarInput.setAttribute("readonly", true);
            }
        }

        // Fungsi untuk mengubah status input "Sebab Kematian"
        function toggleSebabKematian() {
            const radioMati = document.querySelector('input[name="kondisi"][value="mati"]');
            const sebabKematianInput = document.getElementById('sebab_kematian'); // Mengambil input "Sebab Kematian"

            // Jika "Mati" dipilih, aktifkan input "Sebab Kematian"
            if (radioMati.checked) {
                sebabKematianInput.removeAttribute("readonly");
                sebabKematianInput.focus(); // Fokuskan cursor ke input setelah ditampilkan
            } else {
                // Jika "Hidup" dipilih, kosongkan nilai "Sebab Kematian" dan set readonly
                document.getElementById('sebab_kematian').value = '';
                sebabKematianInput.setAttribute("readonly", true);
            }
        }

        // Inisialisasi untuk memastikan tampilan benar saat halaman dimuat
        document.addEventListener('DOMContentLoaded', () => {
            // Menyesuaikan tampilan berdasarkan kondisi yang dipilih
            toggleSebabKematian();
        });


        function calculateSums() {
            // Arrays to store the field names for each column
            const column1Fields = [
                'djj_nilai_1',
                'pernafasan_nilai_1',
                'tonun_otot_nilai_1',
                'refleks_nilai_1',
                'warna_nilai_1'
            ];

            const column2Fields = [
                'djj_nilai_2',
                'pernafasan_nilai_2',
                'tonun_otot_nilai_2',
                'refleks_nilai_2',
                'warna_nilai_2'
            ];

            const column3Fields = [
                'djj_nilai_3',
                'pernafasan_nilai_3',
                'tonun_otot_nilai_3',
                'refleks_nilai_3',
                'warna_nilai_3'
            ];

            // Calculate sum for each column
            let sum1 = calculateColumnSum(column1Fields);
            let sum2 = calculateColumnSum(column2Fields);
            let sum3 = calculateColumnSum(column3Fields);

            // Update the sum fields
            document.querySelector('input[name="sum_1"]').value = sum1;
            document.querySelector('input[name="sum_2"]').value = sum2;
            document.querySelector('input[name="sum_3"]').value = sum3;
        }

        // Helper function to calculate sum for a column
        function calculateColumnSum(fieldNames) {
            let sum = 0;

            fieldNames.forEach(fieldName => {
                const input = document.querySelector(`input[name="${fieldName}"]`);
                if (input && input.value) {
                    // Convert to number and add to sum
                    const value = parseFloat(input.value) || 0;
                    sum += value;
                }
            });

            return sum;
        }



        // Add event listeners to all number inputs
        function setupInputListeners() {
            const allInputs = document.querySelectorAll('input[type="number"]:not([readonly])');

            allInputs.forEach(input => {
                input.addEventListener('input', calculateSums);
            });
        }

        // Initialize the calculation when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            setupInputListeners();
            calculateSums(); // Calculate initial sums
        });
    </script>