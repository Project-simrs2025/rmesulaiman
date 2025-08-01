<!-- 18 d -->
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
            <h5 class="text-end">RM 18d</h5>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-bordered border-dark mt-3 text-center">
                    <tbody>
                        <tr>
                            <td class="d-flex align-items-center mt-4">
                                <div class="col-3">
                                    <img src="img/sulaiman.jpg" alt="" style="width: 120px;">
                                </div>
                                <div class="text-center d-flex flex-column">
                                    <h3>Rumah Sakit Umum Sultan Sulaiman</h3>
                                    <span>Jln. Negara KM. 58 No. 315 Sei Rampah</span>
                                    <span>Sumatera Utara 20695</span>
                                    <span>Telp. (061) 442100 Fax. (061) 442022</span>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="">Nama Pasien :</label>
                                    <input type="text" class="form-control border-dark">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin :</label>
                                    <select name="" id="" class="form-control border-dark">
                                        <option value="">Jenkel</option>
                                        <option value="">Laki-laki</option>
                                        <option value="">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Umur :</label>
                                    <input type="text" class="form-control border-dark">
                                </div>
                                <div class="form-group">
                                    <label for="">NO. RM :</label>
                                    <input type="text" class="form-control border-dark">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <h2 class="text-decoration-underline text-center">Pengkajian Operasi</h2>

            <table class="table table-bordered border-dark mt-3">
                <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="">Ruangan :</label>
                                <input type="text" class="form-control border-dark">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="" style="flex:0 0 80px;">Tgl :</label>
                                <input type="date" onclick="this.showPicker()" class="form-control border-dark w-50">
                                <label for="" style="flex:0 0 80px;" class="text-center">Jam</label>
                                <input type="time" class="form-control border-dark w-50">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="">Diagnosis Pra Operasi :</label>
                                <input type="text" class="form-control border-dark">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="">Timing Tindakan :</label>
                                <input type="text" class="form-control border-dark">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group">
                                <label for="">Indikasi Tindakan :</label>
                                <input type="text" class="form-control border-dark">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group">
                                <label for="">Prosedur :</label>
                                <input type="text" class="form-control border-dark">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group">
                                <label for="">Alternatif Lain :</label>
                                <input type="text" class="form-control border-dark">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label for="">Resiko/komplikasi dan kemungkinan perdarahan intra operasi :</label>
                            <textarea name="" id="" rows="5" class="form-control border-dark"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label for="">Pemantauan khusus pasca tindakan :</label>
                            <textarea name="" id="" rows="5" class="form-control border-dark"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="float-end">
                                <label for="" class="mb-5">Dokter Penanggung Jawab Pasien,</label>
                                <input type="text" class="form-control border-dark">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>