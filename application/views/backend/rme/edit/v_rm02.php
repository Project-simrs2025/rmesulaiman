<div class="content-wrapper container">
    <div class="page-content">
        <!------- breadcrumb --------->
        <!------- breadcrumb --------->
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
                            <!-- BATAS GANTI -->
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="text-center">Resume Rawat Jalan</h2>
                                    <div class="text-end" style="font-size: 24px;"><span class="text-info"><i>Form Edit </i></span><?php echo $namarm; ?></div>
                                </div>
                            </div>

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

                            <div class="row">
                                <div class="col-6">
                                    <?php
                                    // Daftar input field
                                    $dataform1 = array(
                                        array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "$nama_pasien", 'holder' => "Masukkan Nama Pasien", 'status' => "disabled"),
                                        array('nama' => "NO. RM", 'name' => "no_rm", 'tipe' => "number", 'values' => "$no_rm", 'holder' => "Masukkan Nomor Rm", 'status' => "disabled"),
                                        array('nama' => "NIK", 'name' => "nik", 'tipe' => "number", 'values' => "$nik", 'holder' => "Masukkan Nomor Rm", 'status' => "disabled"),
                                        array('nama' => "Tanggal Lahir", 'name' => "tgl_lahir", 'tipe' => "text", 'values' => "$tgl_lahir", 'holder' => "Masukkan Pendidikan Terakhir", 'status' => "disabled"),
                                        array('nama' => "Jenis Kelamin", 'tipe' => "text", 'values' => "$jenkel", 'holder' => "Masukkan Jenis Kelamin", 'status' => "disabled"),
                                    );
                                    foreach ($dataform1 as $a) {
                                        echo "<div class='form-group mt-3'>";
                                        echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
                                        echo "<input type='{$a['tipe']}' class='form-control {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>";
                                        echo "<span class='help-block text-danger'></span></div>";
                                    }
                                    ?>
                                </div>
                                <div class="col-6">
                                    <?php
                                    // Daftar input field
                                    $dataform2 = array(
                                        array('nama' => "Agama", 'tipe' => "text", 'values' => "$agama", 'holder' => "Masukkan nama Agama", 'status' => "disabled"),
                                        array('nama' => "Pekerjaan", 'name' => "pekerjaan", 'tipe' => "number", 'values' => "$pekerjaan", 'holder' => "Masukkan Nama Pekerjaan", 'status' => "disabled"),
                                        array('nama' => "Suku Bangsa", 'name' => "suku_bangsa", 'tipe' => "number", 'values' => "$suku_bangsa", 'holder' => "Masukkan Nama Suku Bangsa", 'status' => "disabled"),
                                        array('nama' => "Alamat", 'tipe' => "text", 'values' => "$alamatt", 'name' => 'alamat', 'holder' => "Masukkan Alamat", 'status' => "disabled"),
                                    );
                                    foreach ($dataform2 as $b) {
                                        echo "<div class='form-group mt-3'>";
                                        echo "<label for='{$b['nama']}'>{$b['nama']} :</label>";
                                        echo "<input type='{$b['tipe']}' class='form-control {$b['name']}' name='{$b['name']}' id='{$b['name']}' placeholder='{$b['holder']}' value='{$b['values']}' {$a['status']}>";
                                        echo "<span class='help-block text-danger'></span></div>";
                                    }
                                    ?>
                                </div>


                                <!-- tambah data table -->
                                <div class="my-4 text-end">
                                    <a class="btn icon btn-sm btn-success" id="add-form" href="javascript:void()"><i class="bi bi-plus"></i></a>
                                </div>

                                <!-- table -->
                                <table class="table table-bordered border-dark">
                                    <thead class="text-center">
                                        <tr>
                                            <th rowspan="2">Tanggal</th>
                                            <th rowspan="2">Poliklinik Yang Dituju</th>
                                            <th colspan="3" class="text-center">Diisi Oleh Dokter</th>
                                            <th rowspan="2">Nama & TT Dokter</th>
                                            <th rowspan="2">Kode Diagnosa</th>
                                        </tr>
                                        <tr>
                                            <th>Anamnese / Pemeriksaan</th>
                                            <th>Diagnosa</th>
                                            <th>Rencana Pelayanan & Therapi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="form-container">
                                        <tr class="form-row" id="row-template">
                                            <td> <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" disabled></td>
                                            <td>
                                                <textarea name="dpoli" id="dpoli" class="form-control dpoli" rows="3" placeholder="Masukkan Nama Poli"><?= $dpoli; ?></textarea>
                                                <span class='help-block text-danger'></span>
                                            </td>
                                            <td>
                                                <textarea name="danamnese" id="danamnese" class="form-control danamnese" rows="3" placeholder="Masukkan Nama Pemriksaan"><?= $danamnese; ?></textarea>
                                                <span class='help-block text-danger'></span>
                                            </td>
                                            <td>
                                                <textarea name="ddiagnosa" id="ddiagnosa" class="form-control ddiagnosa" rows="3" placeholder="Masukkan Nama Diagnosa"><?= $danamnese; ?></textarea>
                                                <span class='help-block text-danger'></span>
                                            </td>
                                            <td>
                                                <textarea name="drencanapelayanan" id="drencanapelayanan" class="form-control drencanapelayanan" rows="3" placeholder="Masukkan Nama Pelayanan"><?= $drencanapelayanan; ?></textarea>
                                                <span class='help-block text-danger'></span>
                                            </td>
                                            <td>
                                                <input type="text" name="dttdokter" id="dttdokter" placeholder="Masukkan poli yang dituju" class="form-control dttdokter" value="<?= $dttdokter; ?>"><span class='help-block text-danger'></span>
                                            </td>
                                            <td><textarea name="dkodediagnosa" id="dkodediagnosa" class="form-control dkodediagnosa" rows="3" placeholder="Masukkan Nama Kode Diagnosa"><?= $dkodediagnosa; ?></textarea>
                                                <span class='help-block text-danger'></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="text-end">
                                    <span>Tanda tangan Pasien/ Keluarga Pasien</span>
                                    <div class="mt-5">
                                        <input type="text" class="form-control w-25 ms-4 float-end">
                                    </div>
                                </div>
                            </div>
                            <!-- BATAS GANTI -->
                            <?php
                            echo form_close();
                            ?>


                            <div class="col-12 col-md-12 mt-2 mb-4">
                                <button type="submit" class="btn btn-info btn-block btn-lg shadow-lg mt-5 btnEdit" id="btnEdit" onclick="update()"><i class="bx bx-check d-sm-none"></i>Edit</button>
                            </div>
                        </div>

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
</div>


<!------- TOASTIFY JS --------->
<?php $this->load->view("backend/_partials/toastify.php") ?>

<script language="JavaScript" type="application/javascript" src="<?php echo base_url() . 'assets/extensions/summernote/summernote-lite.min.js' ?>"></script>
<script>


</script>
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
        var id_kunjungan = '<?php echo $id_kunjungan; ?>';
        var site_url = '<?php echo site_url(); ?>';
        window.location.href = site_url + "backend/admission/get_data/" + id_kunjungan;
    });

    // added tr table
    document.addEventListener('DOMContentLoaded', function() {
        const addFormButton = document.getElementById('add-form'); // Tombol "Tambah Baris"
        const formContainer = document.getElementById('form-container'); // Kontainer <tbody>
        const rowTemplate = document.getElementById('row-template'); // Template baris pertama

        addFormButton.addEventListener('click', function(e) {
            e.preventDefault(); // Cegah submit form

            // Kloning template baris
            const newRow = rowTemplate.cloneNode(true);
            newRow.removeAttribute('id'); // Hapus ID agar tidak duplikat

            // Bersihkan nilai input dan textarea pada elemen baru
            newRow.querySelectorAll('input, textarea').forEach(function(input) {
                if (input.type === 'date') {
                    const currentDate = new Date();
                    input.value = currentDate.toISOString().split('T')[0]; // Reset tanggal ke hari ini
                } else {
                    input.value = ''; // Kosongkan input teks dan textarea
                }
            });

            // Tambahkan baris baru ke dalam <tbody>
            formContainer.appendChild(newRow);
        });
    });

    $(document).ready(function() {

        $("#dpoli").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });

        $("#danamnese").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });
        $("#ddiagnosa").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });
        $("#drencanapelayanan").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });
        $("#dttdokter").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });
        $("#dkodediagnosa").change(function() {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });

    });

    function update() {
        // Edit PROCESS
        var id_berkas = $("#id_berkas").val();
        var id_pasien = $("#id_pasien").val();
        var id_kunjungan = $("#id_kunjungan").val();
        var namaberkas = $("#namaberkas").val();
        var nik = $("#nik").val();
        var dpoli = $("#dpoli").val();
        var danamnese = $("#danamnese").val();
        var ddiagnosa = $("#ddiagnosa").val();
        var drencanapelayanan = $("#drencanapelayanan").val();
        var dttdokter = $("#dttdokter").val();
        var dkodediagnosa = $("#dkodediagnosa").val();


        var fd = new FormData();
        fd.append("id_berkas", id_berkas);
        fd.append("id_pasien", id_pasien);
        fd.append("id_kunjungan", id_kunjungan);
        fd.append("namaberkas", namaberkas);
        fd.append("nik", nik);
        fd.append("dpoli", dpoli);
        fd.append("danamnese", danamnese);
        fd.append("ddiagnosa", ddiagnosa);
        fd.append("drencanapelayanan", drencanapelayanan);
        fd.append("dttdokter", dttdokter);
        fd.append("dkodediagnosa", dkodediagnosa);
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