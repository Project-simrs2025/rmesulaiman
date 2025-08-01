<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <h5 class="text-end">RM 1c</h5>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-bordered border-dark mt-3">
                    <tr>
                        <td>
                            <div class=" d-flex align-items-center flex-column mt-5">
                                <img src="img/sulaiman.jpg" alt="" style="width: 120px;">
                                <h4>RSUD SULTAN SULAIMAN</h4>
                            </div>
                        </td>

                        <td style="width: 500px;">
                            <div style="margin-top:20%;" class="text-center">
                                <h4>CHEKLIST KESELAMATAN POLIKLINIK GIGI DAN MULUT</h4>
                            </div>
                        </td>

                        <td>
                            <div class="form-group">
                                <label for="">Nama :</label>
                                <input type="text" class="form-control border-dark">
                            </div>
                            <div class="form-group">
                                <label for="">NIK :</label>
                                <input type="text" class="form-control border-dark">
                            </div>
                            <div class="form-group">
                                <label for="">Tgl. Lahir :</label>
                                <input type="date" class="form-control border-dark" onclick="this.showPicker()">
                            </div>
                            <div class="form-group">
                                <label for="">Agama :</label>
                                <input type="text" class="form-control border-dark">
                            </div>
                            <div class="form-group">
                                <label for="">Diagnosa :</label>
                                <input type="text" class="form-control border-dark">
                            </div>
                            <div class="form-group">
                                <label for="">NO. RM :</label>
                                <input type="text" class="form-control border-dark">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <span class="fw-bold">Sign in </span>( Dilakukan Sebelum tindakan, oleh perawat dan dokter gigi )</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- table 2  -->
        <div class="row">
            <table class="table table-bordered border-dark mt-2">
                <thead class="text-center">
                    <th colspan="2"></th>
                    <th>Ya</th>
                    <th>Tidak</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Pasien Telah dikonfirmasikan</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="mx-3">a.
                                <label for="" class="mx-2">identitas pasien :</label>
                            </div>
                        </td>
                        <td class="text-center"><input type="radio"></td>
                        <td class="text-center"><input type="radio"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="mx-3">b.
                                <label for="" class="mx-2">Lokasi operasi/tindakan :</label>
                            </div>
                        </td>
                        <td class="text-center"><input type="radio"></td>
                        <td class="text-center"><input type="radio"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="mx-3">c.
                                <label for="" class="mx-2">Prosedur operasi/tindakan :</label>
                            </div>
                        </td>
                        <td class="text-center"><input type="radio"></td>
                        <td class="text-center"><input type="radio"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="mx-3">d.
                                <label for="" class="mx-2">Formulir persetujuan tindakan kedokteran :</label>
                            </div>
                        </td>
                        <td class="text-center"><input type="radio"></td>
                        <td class="text-center"><input type="radio"></td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Lokasi gigi sudah di identifikasi</td>
                        <td class="text-center"><input type="radio"></td>
                        <td class="text-center"><input type="radio"></td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Alat dan obat-obatan sudah di cek lengkap</td>
                        <td class="text-center"><input type="radio"></td>
                        <td class="text-center"><input type="radio"></td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Apakah pasien memiliki riwayat alergi</td>
                        <td class="text-center"><input type="radio"></td>
                        <td class="text-center"><input type="radio"></td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>Kesulitan Bernafas</td>
                        <td class="text-center"><input type="radio"></td>
                        <td class="text-center"><input type="radio"></td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td>Resiko Kehilangan darah</td>
                        <td class="text-center"><input type="radio"></td>
                        <td class="text-center"><input type="radio"></td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td>Hasil Rontgen</td>
                        <td class="text-center"><input type="radio"></td>
                        <td class="text-center"><input type="radio"></td>
                    </tr>
                </tbody>
            </table>
        </div>