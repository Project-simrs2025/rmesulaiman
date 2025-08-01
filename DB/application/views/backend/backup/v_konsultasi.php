<div class="content-wrapper container">
<div class="row">
    <div class="page-content">
        <section class="row">
    <!------- breadcrumb --------->
        <?php $this->load->view("backend/_partials/breadcrumb.php") ?>
    <!------- breadcrumb --------->
            <div class="card">
                <div class="card-body">
                
               
                    
                <div class="table-responsive">
                    <table id="mytable" class="table table-borderless mb-0 text-sm">
                        <thead>
                            <tr>
                                <th class="col-2"></th>
                                <th class="col-2">Dokter</th>
                                <th class="col-2">Poliklinik</th>
                                <th class="col-2">Tarif Konsultasi</th>
                                <th class="col-2">Status Pembayaran</th>
                                <th>QR Code</th>
                                <th class="col-10"></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                
                </div>
            </div>
        </section>
 <?php 
    $no=0;
    foreach ($dataimage->result() as $row):
    $no++;
?>   
 <div class="modal fade" id="galleryModal<?php echo $row->id; ?>" tabindex="-1" role="dialog"
aria-labelledby="galleryModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered"
role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-bukti" id="galleryModalTitle">Detail Gambar</h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">

                <div id="Gallerycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                   
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url().'assets/images/qrcode/qrcode.png' ?>">
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>   
<?php endforeach; ?>

        <!------- FOOTER --------->
            <?php $this->load->view("backend/_partials/footer.php") ?>
        <!------- FOOTER --------->
    </div>
</div>
</div>
<!------- TOASTIFY JS --------->
    <?php $this->load->view("backend/_partials/toastify.php") ?>
   
<!------- TOASTIFY JS --------->
<script type="application/javascript">
var save_method; 
var table;
var csfrData = {};
csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo
$this->security->get_csrf_hash(); ?>';
$.ajaxSetup({
data: csfrData
});
$(document).ready(function() {
    
    //datatables
    table = $('#mytable').DataTable({ 

        "processing": false,
        "serverSide": true,
        "bLengthChange": false,
        "searching": false,
        "bInfo" : false,
        "bPaginate": false,
        "language": {                
            "infoFiltered": ""
        },
        "order": [], 

        "ajax": {
            "url": "<?php echo site_url('backend/konsultasi/get_ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
               
              
            }
        },


        "columnDefs": [
        { 
            "targets": [ 0,1,2,3,4,5,6 ], 
            "orderable": false, 
        },
        ],

    });
    $("#nama").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $('#mytable').on('click','#detail',function(){
        var id = $(this).data('id');
        var site_url = '<?php echo site_url();?>';
        window.location.href = site_url+"backend/konsultasi/obrolan/"+id+"";
    });

    setInterval(() => {
            reload_table()
        }, 1000);

});



function reload_table()
{
    table.ajax.reload(null,false); 
}
$(document).on("click", "#lock", function(e) {
        e.preventDefault();

        var user_id = $(this).attr("value");

        Swal.fire({
            title: "Apakah anda sudah melakukan pembayaran ?",
            text: "Jika sudah klik Ya, maka tunggu sampai admin melakukan validasi!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Proses!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url : "<?php echo site_url('backend/konsultasi/lock')?>",
                    data: {
                        user_id: user_id,
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.res == "success") {
                            Swal.fire(
                                "Success!",
                                "Terima kasih telah melakukan pembayaran, harap tunggu admin melakukan validasi!.",
                                "success"
                            );
                           
                            reload_table();
                        } else {
                            Swal.fire(
                                "Gagal!",
                                "Anda sudah melakukan verifikasi, harap tunggu admin melakukan validasi!.",
                                "warning"
                            );
                        }
                    },
                });
            }
        });
    });

</script>

</body>
</html>
