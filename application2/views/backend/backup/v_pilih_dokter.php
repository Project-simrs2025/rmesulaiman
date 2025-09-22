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
                                <th class="col-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                
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
            "url": "<?php echo site_url('backend/pilih_dokter/get_ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
               
              
            }
        },


        "columnDefs": [
        { 
            "targets": [ 0,1,2,3,4 ], 
            "orderable": false, 
        },
        ],

    });

    

});



function reload_table()
{
    table.ajax.reload(null,false); 
}
$(document).on("click", "#lock", function(e) {
        e.preventDefault();

        var user_id = $(this).attr("value");

        Swal.fire({
            title: "Apakah anda ingin memilih dokter ini ?",
            text: "Jika sudah yakin klik Ya, dan lakukan pembayaran pada menu konsultasi online!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Proses!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url : "<?php echo site_url('backend/pilih_dokter/lock')?>",
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
                                "Anda sudah memilih dokter ini, harap lakukan pembayaran pada menu konsultasi online!.",
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
