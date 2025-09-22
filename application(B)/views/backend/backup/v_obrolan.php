
<!------------------------------------------------------------------------------------------------------------------>
<div class="content-wrapper container">
<div class="row">
    <div class="page-content">
        

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                    
                <h3><a href="<?php echo site_url('backend/konsultasi');?>"><i class="bi bi-chevron-left"></i></a> <?php echo $title; ?></h3>
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
    


    <section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    
                    
                    <div class="card-header">
                        <div class="media d-flex align-items-center">
                            <div class="avatar me-3">

                                <img src="<?php echo base_url().'assets/images/profilusers/'.$user_photo;?>" alt="" srcset="">
                                <span class="avatar-status bg-success"></span>
                            </div>
                            <div class="name flex-grow-1">
                                <h6 class="mb-0"><?php echo $user_name;?></h6>
                                <span class="text-xs">Online</span>
                            </div>
                            <button class="btn btn-sm">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                    </div>
                   
                    <div class="card-body pt-4 bg-grey">
                        <div class="chat-content" id="refresh">
                            




                           
                        </div>
                    </div>
                    
                    <div class="card-footer">
                        <div class="message-form d-flex flex-direction-column align-items-center">
                            
                               
                                    <?php echo $form_nama; ?>
                                &nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success send_btn"><span> Kirim</span></button> 
                               
                                
                            
                        </div>
                        <br/>
                        <label for="formFileSm" class="form-label">Gambar *Jika diperlukan <b>(*jpg,*jpeg,*png,*webp,*mp4,maks 50mb)</b></label>
                        <input  type="file" class="form-control form-control-sm form_gambar" id="form_gambar" name="form_gambar" accept=".jpg,.jpeg,.png,.webp,.mp4" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- validations end -->

    
</div>

<!-------------------------------------------------------------------------------------------------------------------------->
        <!------- FOOTER --------->
            <?php $this->load->view("backend/_partials/footer.php") ?>
        <!------- FOOTER --------->
        </div>
    </div>

<!------- TOASTIFY JS --------->
    <?php $this->load->view("backend/_partials/toastify.php") ?>
   
<!------- TOASTIFY JS --------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

<?php if($this->session->flashdata('msg')=='success-komen'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Pesan Terkirim",
                        duration: 3000,
                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    }).showToast()
            </script>
    
    
    <?php elseif($this->session->flashdata('msg')=='alert-komen'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Mohon masukkan input yang Valid!",
                        duration: 3000,
                        backgroundColor: "linear-gradient(to right, #ff4343, #ff8a8a)",
                    }).showToast()
            </script>
    <?php elseif($this->session->flashdata('msg')=='failed-komen'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Gagal input!",
                        duration: 3000,
                        backgroundColor: "linear-gradient(to right, #ff4343, #ff8a8a)",
                    }).showToast()
            </script>
    <?php else:?>
    <?php endif;?>  
<script type="application/javascript">
    $(document).ready(function() {
    var csfrData = {};
csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo
$this->security->get_csrf_hash(); ?>';
$.ajaxSetup({
data: csfrData
});    

        pesan()

        function pesan() {
            var base_url = '<?php echo base_url(); ?>';
            var id_lawan = '<?= $kode_dokter ?>'
            $.ajax({
                type: "post",
                url: '<?php echo site_url("backend/konsultasi/loadChat");?>',
                data: {
                    id : '<?= $kode_pasien ?>',
                    id_lawan: id_lawan
                },
                dataType: "json",
                success: function(r) {
                    var html = "";
                    var d = r.data;
                    id = '<?= $kode_pasien ?>';
                    d.forEach(d => {
                        
                        // console.log(kapan)
                        if (parseInt(d.send_to) == id) {

                            if (d.gambar == null) {
                                html += '<div class="chat">'+
                                '<div class="chat-body">'+
                                    '<div class="chat-message">'+d.message+'</div>'+
                                '</div>'+
                                '</div>';
                            } else {
                                

                                html += '<div class="chat">'+
                                '<div class="chat-body">'+
                                    '<div class="chat-message">'+d.message+
                                    '<br/><img class="w-100" src="'+base_url+'/assets/images/konten/'+d.gambar+'"></div>'+
                                '</div>'+
                                '</div>';
                            }


                            



                        } else {
                            if (d.gambar == null) {
                                html += '<div class="chat chat-left">'+
                                '<div class="chat-body">'+
                                    '<div class="chat-message">'+d.message+'</div>'+
                                '</div>'+
                                '</div>';
                            } else {
                                

                                html += '<div class="chat chat-left">'+
                                '<div class="chat-body">'+
                                    '<div class="chat-message">'+d.message+
                                    '<br/><img class="w-100" src="'+base_url+'/assets/images/konten/'+d.gambar+'"></div>'+
                                '</div>'+
                                '</div>';
                            }


                        }

                    });
                    // console.log(html)
                    $('#refresh').html(html);

                }
            });
        }
        setInterval(() => {
            pesan()
        }, 1000);

        /////////////
        $('.send_btn').on('click', (e) =>{
                var name_cgtv_122021 = $('.type_msg').val();
                var id_dokter = '<?= $kode_dokter; ?>';
                var id_pasien = '<?= $kode_pasien; ?>';
                var form_gambar = $("#form_gambar")[0].files[0];
                var fd = new FormData();    
                fd.append("name_cgtv_122021", name_cgtv_122021);
                fd.append("id_dokter", id_dokter);
                fd.append("id_pasien", id_pasien);
                fd.append("form_gambar", form_gambar);
                fd.append("<?php echo $this->security->get_csrf_token_name(); ?>", '<?php echo
$this->security->get_csrf_hash(); ?>');

            // if (name_cgtv_122021 == "") {
            //                 Swal.fire({
            //                     icon: "warning",
            //                     title: "Alert",
            //                     text: 'Form tidak boleh kosong'
             //               })
            //} else {
                            
                $.ajax({
                    url: '<?php echo site_url("backend/konsultasi/KirimPesan");?>',
                    method : 'POST',
                    data   : fd,
                    type  : 'GET',
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(data) {
                        if (data.status) {
                            $('.type_msg').val('');
                            $('#form_gambar').val('');
                        }

                    },
                });  
            //}
        });
        scrollToBottom()

        function scrollToBottom() {
            $("#refresh").animate({
                scrollTop: 200000000000000000000000000000000
            }, "slow");
        }
       


    });
</script>

</body>
</html>
