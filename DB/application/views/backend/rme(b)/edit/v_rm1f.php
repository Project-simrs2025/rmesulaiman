<div class="content-wrapper container">
    <div class="page-content">
        <section id="input-validation">
            <div class="row">
                <div class="col-12 col-md-12 mb-2 float-end">
                    <div class="modal-footer" id="footer">
                        <button type="button" class="btn btn-light-secondary kembali"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-sm-none"></i>
                            << Kembali</button>

                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">

                            <div class="row align-items-center kop">
                                <div class="col-2 text-center">
                                    <img src="<?php echo base_url() . 'assets/images/logo/' . $images; ?>" alt="Logo" class="w-50">
                                </div>
                                <div class="col-10" style="margin-left: -72px;">
                                    <div class="kop-title text-center">
                                        PEMERINTAH KABUPATEN SERDANG BEDAGAI<br>
                                        <?php echo $site_deskripsi; ?>
                                    </div>
                                    <div class="kop-subtitle text-center">
                                        <?php $newtext = wordwrap($alamat, 70, "<br/>", false); ?>
                                        <?php echo $newtext; ?>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php
                            echo form_open('#', 'id="formedit" class="form-horizontal"');
                            ?>
                            <input type="hidden" id="id_berkas" class="id_berkas" value="<?php echo $id_berkas; ?>">
                            <span class='help-block text-danger'></span>
                            <input type="hidden" id="id_pasien" class="id_pasien" value="<?php echo $id_pasien; ?>">
                            <span class='help-block text-danger'></span>
                            <input type="hidden" id="id_kunjungan" class="id_kunjungan" value="<?php echo $id_kunjungan; ?>">
                            <span class='help-block text-danger'></span>
                            <input type="hidden" id="id_kunjungan_aktif" class="id_kunjungan_aktif" value="<?php echo $id_kunjungan_aktif; ?>">
                            <span class='help-block text-danger'></span>
                            <input type="hidden" id="namaberkas" class="namaberkas" value="<?php echo $link; ?>">
                            <span class='help-block text-danger'></span>

                            <!-- BATAS GANTI FORM -->
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-center text-uppercase"><?php echo $title; ?>
                                        <p>uji fungsi / Prosedur KFR</p>
                                    </h4>
                                    <div class="text-end" style="font-size: 24px;"><span class="text-info"><i>Form Edit </i></span><?php echo $namarm; ?></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered border-dark mt-3">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php
                                                    // Daftar input field
                                                    $dataform1 = array(
                                                        array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "$nama_pasien", 'holder' => "Masukkan Nama Pasien", 'status' => "disabled"),
                                                        array('nama' => "NIK", 'name' => "nik", 'tipe' => "number", 'values' => "$nik", 'holder' => "Masukkan NIK", 'status' => "disabled"),
                                                        array('nama' => "Pendidikan", 'name' => "pendidikan", 'tipe' => "text", 'values' => "$pendidikan_terakhir", 'status' => "disabled"),
                                                        array('nama' => "Pekerjaan", 'name' => "pekerjaan", 'tipe' => "text", 'status' => "disabled"),
                                                        array('nama' => "No. RM", 'tipe' => "number", 'values' => "$no_rm", 'holder' => "Masukkan No. RM", 'status' => "disabled"),
                                                    );
                                                    foreach ($dataform1 as $a) {
                                                        echo "<div class='form-group mt-3'>";
                                                        echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
                                                        echo "<input type='{$a['tipe']}' class='form-control {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>";
                                                        echo "<span class='help-block text-danger'></span></div>";
                                                    }
                                                    ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php
                                                    // Daftar input field
                                                    $dataform2 = array(
                                                        array('nama' => "Tanggal Lahir/Umur", 'name' => "tgl_lahir", 'tipe' => "text", 'values' => "$tgl_lahir / $umur", 'holder' => "Masukkan Tanggal Lahir/Umur", 'status' => "disabled"),
                                                        array('nama' => "Jenis Kelamin", 'tipe' => "text", 'values' => "$jenkel", 'holder' => "Masukkan Jenis Kelamin", 'status' => "disabled"),
                                                        array('nama' => "Tanggal Masuk", 'tipe' => "text", 'values' => "$tgl_admit2", 'holder' => "Masukkan Tanggal Masuk", 'status' => "disabled"),
                                                        array('nama' => "Nama DPJP", 'tipe' => "text", 'values' => "$nama_dokter", 'holder' => "Masukkan DPJP", 'status' => "disabled"),
                                                        array('nama' => "Nama PPJP", 'name' => "ppjp", 'tipe' => "text", 'values' => "$ppjp", 'holder' => "Masukkan PPJP"),
                                                        array('nama' => "Nilai Pribadi", 'name' => "np", 'tipe' => "text", 'values' => "$np", 'holder' => "Masukkan Nilai Pribadi"),
                                                    );

                                                    foreach ($dataform2 as $b) {

                                                        echo "<div class='form-group mt-3'>";
                                                        echo "<label for=''>{$b['nama']} :</label>";
                                                        echo "<input type='{$b['tipe']}' class='form-control {$b['name']}' name='{$a['name']}' id='{$b['name']}' placeholder='{$b['holder']}' value='{$b['values']}' {$b['status']}>";
                                                        echo "<span class='help-block text-danger'></span></div>";
                                                    }
                                                    ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span>( Tempelkan stiker identitas pasien jika tersedia )</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered border-dark mt-3">
                                        <tr>
                                            <td colspan="2">
                                                <label for="">Lembaran Hasil Tindakan Uji Fungsi / Prosedur KFR :</label>
                                                <div class="form-group">
                                                    <input type="text" name="lembarkfr" id="lembarkfr" value="<?php echo $lembarkfr; ?>" placeholder="Masukkan Hasil Tindakan Uji Fungsi / Prosedur KFR" class="form-control my-2 lembarkfr">
                                                    <span class='help-block text-danger'></span>
                                                </div>
                                                <span>(koding)</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column gap-4">
                                                    <label for="">Nama :</label>
                                                    <label for="">Tanggal Lahir / Usia :</label>
                                                    <label for="">Tanggal Pemeriksaan :</label>
                                                    <label for="">Diagnosa Fungsional : </label>
                                                    <label for="">Diagnosa Medis :</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column gap-2">
                                                    <input type="text" class="form-control" value="<?php echo $nama_pasien; ?>" disabled>
                                                    <div class="d-flex">
                                                        <input type="date" class="form-control me-2" value="<?php echo $tgl_lahir; ?>" disabled> /
                                                        <input type="text" class="form-control ms-2" value="<?php echo $umur; ?>" disabled>
                                                    </div>
                                                    <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" disabled>
                                                    <input type="text" name="dfungsional" id="dfungsional" value="<?php echo $dfungsional; ?>" placeholder="Masukkan Diagnosa Fungsional" class="form-control dfungsional"><span class='help-block text-danger'></span>
                                                    <input type="text" name="dmedis" id="dmedis" value="<?php echo $dmedis; ?>" placeholder="Masukkan Diagnosa Medis" class="form-control dmedis"><span class='help-block text-danger'></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column gap-4">
                                                    <label for="">Instrumen Uji Fungsi/ Prosedur KFR :</label>
                                                    <label for="">Hasil Yang Di Dapat :</label>
                                                    <label for="">Kesimpulan :</label>
                                                    <label for="">Rekomendasi : </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column gap-2">
                                                    <input type="text" class="form-control instrumentkfr" name="instrumentkfr" id="instrumentkfr" value="<?php echo $instrumentkfr; ?>" placeholder="Masukkan Instrumen Uji Fungsi/ Prosedur KFR"><span class='help-block text-danger'></span>
                                                    <input type="text" class="form-control hasilkfr" name="hasilkfr" id="hasilkfr" value="<?php echo $hasilkfr; ?>" placeholder="Masukkan Hasil KFR"><span class='help-block text-danger'></span>
                                                    <input type="text" class="form-control kesimpulan" name="kesimpulan" id="kesimpulan" value="<?php echo $kesimpulan; ?>" placeholder="Masukkan Kesimpulan"><span class='help-block text-danger'></span>
                                                    <input type="text" class="form-control rekomendasi" name="rekomendasi" id="rekomendasi" value="<?php echo $rekomendasi; ?>" placeholder="Masukkan Rekomendasi"><span class='help-block text-danger'></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="text-end">
                                    <span>Tanda Tangan, </span>
                                    <div class="mt-5">
                                        <input type="text" class="form-control w-25 ms-4 float-end" value="<?php echo $nama_dokter; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- BATAS GANTI FORM -->


                            <?php
                            echo form_close();
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 mt-2 mb-4">
                        <button type="submit" class="btn btn-info btn-block btn-lg shadow-lg mt-5 btnEdit" id="btnEdit" onclick="update()"><i class="bx bx-check d-sm-none"></i>Edit</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <button onclick="topFunction()" class="btn btn-success" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle-fill"></i> Scroll to Top</button>
    <!------- FOOTER --------->
    <?php $this->load->view("backend/_partials/footer.php") ?>
    <!------- FOOTER --------->
</div>
<!------- TOASTIFY JS --------->
<?php $this->load->view("backend/_partials/toastify.php") ?>
<!------- TOASTIFY JS --------->

<script type="application/javascript">
    var table;
    var csfrData = {};
    csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo
                                                                            $this->security->get_csrf_hash(); ?>';
    $.ajaxSetup({
        data: csfrData
    });

    // SCROLL TO TOP
    let mybutton = document.getElementById("myBtn");
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    // SCROLL TO TOP        

    $('#footer').on('click', '.kembali', function() {
        var id_kunjungan_aktif = '<?php echo $id_kunjungan_aktif; ?>';
        var site_url = '<?php echo site_url(); ?>';
        window.location.href = site_url + "backend/admission/get_data/" + id_kunjungan_aktif;
    });

    $(document).ready(function() {

        $("#tgl_lahir").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });

        $("#lembarkfr").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });
        $("#dfungsional").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });
        $("#dmedis").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });
        $("#instrumentkfr").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });
        $("#hasilkfr").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });
        $("#kesimpulan").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });
        $("#rekomendasi").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });

    });

    function update() {
        // ADD PROCESS

        var id_berkas = $("#id_berkas").val();
        var id_pasien = $("#id_pasien").val();
        var id_kunjungan = $("#id_kunjungan").val();
        var namaberkas = $("#namaberkas").val();
        var nik = $("#nik").val();
        var pendidikan = $("#pendidikan").val();
        var pekerjaan = $("#pekerjaan").val();
        var tgl_lahir = $("#tgl_lahir").val();
        var ppjp = $("#ppjp").val();
        var np = $("#np").val();
        var lembarkfr = $("#lembarkfr").val();
        var dfungsional = $("#dfungsional").val();
        var dmedis = $("#dmedis").val();
        var instrumentkfr = $("#instrumentkfr").val();
        var hasilkfr = $("#hasilkfr").val();
        var kesimpulan = $("#kesimpulan").val();
        var rekomendasi = $("#rekomendasi").val();

        var fd = new FormData();
        fd.append("id_berkas", id_berkas);
        fd.append("id_pasien", id_pasien);
        fd.append("id_kunjungan", id_kunjungan);
        fd.append("namaberkas", namaberkas);
        fd.append("nik", nik);
        fd.append("pendidikan", pendidikan);
        fd.append("pekerjaan", pekerjaan);
        fd.append("tgl_lahir", tgl_lahir);
        fd.append("ppjp", ppjp);
        fd.append("np", np);
        fd.append("lembarkfr", lembarkfr);
        fd.append("dfungsional", dfungsional);
        fd.append("dmedis", dmedis);
        fd.append("instrumentkfr", instrumentkfr);
        fd.append("hasilkfr", hasilkfr);
        fd.append("kesimpulan", kesimpulan);
        fd.append("rekomendasi", rekomendasi);
        fd.append("<?php echo $this->security->get_csrf_token_name(); ?>", '<?php echo
                                                                            $this->security->get_csrf_hash(); ?>');
        // ADD PROCESS

        $('#btnEdit').text('Simpan...');
        $('#btnEdit').attr('disabled', true);
        var url;
        url = "<?php echo site_url('backend/admission/submitedit') ?>";


        $.ajax({
            type: "POST",
            url: url,
            data: fd,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(data) {
                if (data.status) {
                    $('#formedit')[0].reset();
                    var site_url = '<?php echo site_url(); ?>';
                    var id_kunjungan_aktif = '<?php echo $id_kunjungan_aktif; ?>';
                    window.location.href = site_url + "backend/admission/get_data/" + id_kunjungan_aktif;
                } else {
                    for (var i = 0; i < data.inputerror.length; i++) {
                        $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error');
                        $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]);
                    }
                }
                $('#btnEdit').text('Perbaharui');
                $('#btnEdit').attr('disabled', false);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                $('#btnEdit').text('Perbaharui');
                $('#btnEdit').attr('disabled', false);
            }
        });
    }
</script>
</body>

</html>