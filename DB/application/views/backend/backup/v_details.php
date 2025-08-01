
<div class="content-wrapper container">
<div class="row">
    <div class="page-content">
        <section class="row">
        <!------- breadcrumb --------->
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Hasil Kirim Ulang</h3>
                        
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class='breadcrumb-header float-start float-lg-end'>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        <!------- breadcrumb --------->
                <div class="card">
                    <div class="card-body">
                            <h5>Kode Booking  <?php echo $kodebooking; ?></h5>
                            <p><?php echo $printR; ?></p>
                            <p><?php echo $respon_satu; ?></p>
                            <p><?php echo $respon_dua; ?></p>
                            <p><?php echo $respon_tiga; ?></p>
                            <p><?php echo $respon_empat; ?></p>
                            <p><?php echo $respon_lima; ?></p>
                            <p><?php echo $respon_enam; ?></p>
                            <p><?php echo $respon_tujuh; ?></p>
                            <p><?php echo $sumberdata2; ?></p>
                            
                            <a href="<?php echo site_url('backend/antrian/?tgl='.$tanggal_kembali);?>" class="btn btn-danger btn-sm" title="Kembali" onclick="window.close()">  <i class="bi bi-x"></i> Tutup</a>
                    </div>
                </div>
            </section>
            <!------- FOOTER --------->
                <?php $this->load->view("backend/_partials/footer.php") ?>
            <!------- FOOTER --------->
        </div>
    </div>
</div>



<!------- TOASTIFY JS --------->
    <?php if($this->session->flashdata('msg')=='success'):?>
            <script type="text/javascript">
                Swal.fire(
                    "Success!",
                    "Data berhasil terkirim.",
                    "success"
                );
            </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
            <script type="text/javascript">
                Swal.fire(
                    "Gagal!",
                    "Data belum terkirim.",
                    "warning"
                );
            </script>
    <?php else:?>

    <?php endif;?>

</body>
</html>
