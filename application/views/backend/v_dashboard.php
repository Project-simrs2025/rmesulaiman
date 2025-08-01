<div class="content-wrapper container">
<div class="row">
    <div class="page-content">
        <section class="row">
            <div class="page-heading" id="page-heading">
                <h3><?php echo $title; ?> <?php echo $this->session->userdata('name');?></h3>
            </div>


        <div class="col-12 col-lg-12">
            <div class="row">
                
                <div class="col-12 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-body px-1 py-4-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h6 class="text-muted font-semibold">Total Pasien</h6>
                                    <h6 class='font-extrabold mb-0'><?php echo $jumlah_pasien;?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-body px-1 py-4-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h6 class="text-muted font-semibold">Antrian Selesai dilayani</h6>
                                    <h6 class='font-extrabold mb-0'><?php echo $jumlah_selesai.' ('.$persentase.'%)';?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-body px-1 py-4-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h6 class="text-muted font-semibold">Antrian Sedang dilayani</h6>
                                    <h6 class='font-extrabold mb-0'><?php echo $jumlah_sedang;?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-body px-1 py-4-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h6 class="text-muted font-semibold">Antrian Belum dilayani</h6>
                                    <h6 class='font-extrabold mb-0'><?php echo $jumlah_belum;?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
           
           
        </div>
        
    </section>

        
        <!------- FOOTER --------->
            <?php $this->load->view("backend/_partials/footer.php") ?>
        <!------- FOOTER --------->
            
        </div>
    </div>
<!------- TEMPLATE JS --------->
    
    <script src="<?php echo base_url().'assets/extensions/apexcharts/apexcharts.min.js'?>"></script>
<!------- TEMPLATE JS --------->
 
    
</body>

</html>
