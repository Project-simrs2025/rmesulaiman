
<div class="content-wrapper container">
<div class="row">
    <div class="page-content">
        <section class="row">
            
    <!------- breadcrumb --------->
        <?php $this->load->view("backend/_partials/breadcrumb.php") ?>
    <!------- breadcrumb --------->
 
        
            <div class="card">
                <div class="card-body">
                     <p class="text-subtitle text-muted">Filter Data</p>
                        <form id="form-filter">
                            <div class="row">
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <input type="date" name="tanggalperiksa" id="tanggalperiksa" class="form-control flatpickr-range mb-3" placeholder="Pilih Tanggal..">
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                    <button type="button" id="btn-filter" class="btn btn-primary btn-sm"><i class="bi bi-search"></i> Filter Data</button>&nbsp;&nbsp;
                                    <button type="button" id="btn-reset" class="btn btn-success btn-sm"><i class="bi bi-bootstrap-reboot"></i> Refresh</button>
                                </div>
                            </div>
                            </div>
                        </form>
                    <hr>
                    
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordered mb-0 text-sm">
                        <thead>
                            <tr>
                                <th>Kode Booking</th>
                                <th>Nomor Kartu</th>
                                <th class="col-3">Tanggal Periksa</th>
                                <th class="col-4">Nama Dokter</th>
                                <th>Poli</th>
                                <th class="col-2">Aksi</th>
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
var table;
var csfrData = {};
csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo
$this->security->get_csrf_hash(); ?>';
$.ajaxSetup({
data: csfrData
});
$(document).ready(function() {
    flatpickr('.flatpickr-range', {
        dateFormat: "Y-m-d",
    });
    //datatables
    table = $('#mytable').DataTable({ 

        "processing": false,
        "serverSide": true,
        "order": [], 

        "ajax": {
            "url": "<?php echo site_url('backend/batal/get_ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
               data.tanggalperiksa = $('#tanggalperiksa').val();
              
            }
        },


        "columnDefs": [
        { 
            "targets": [ 0,1,2,3,4,5 ], 
            "orderable": false, 
        },
        ],

    });
    $('#btn-filter').click(function(){ 
        reload_table();
    });
    $('#btn-reset').click(function(){ 
        $('#form-filter')[0].reset();
        flatpickr('.flatpickr-range', {
            dateFormat: "Y-m-d",
        });
        reload_table();
    });
            
   
    

});
function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

$(document).on("click", "#cancel", function(e) {
        e.preventDefault();
        var id = $(this).attr("value");
        var kodebooking = $(this).attr("value2");
        Swal.fire({
            title: "Apakah kamu yakin ingin membatalkan Antrian ini?",
            text: " KodeBooking :"+kodebooking,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Batalkan!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url : "<?php echo site_url('backend/batal/cancel')?>",
                    data: {
                        id: id,
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.res == "success") {
                            Swal.fire(
                                "Canceled!",
                                "Antrian berhasil dibatalkan.",
                                "success"
                            );
                           
                            reload_table();
                        }
                    },
                });
            }
        });
    });
</script>

</body>
</html>
