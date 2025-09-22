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
                    <table id="mytable" class="table table-borderless mb-0">
                        <thead>
                            <tr>
                                
                                <th class="col-4">Nama Pasien</th>
                                <th class="col-4"></th>
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
            "url": "<?php echo site_url('backend/konsultasi/get_ajax_list_dokter')?>",
            "type": "POST",
            "data": function ( data ) {
               
              
            }
        },


        "columnDefs": [
        { 
            "targets": [ 0,1 ], 
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
        window.location.href = site_url+"backend/konsultasi/obrolan_dokter/"+id+"";
    });
    setInterval(() => {
            reload_table()
        }, 1000);
    

});
function reload_table()
{
    table.ajax.reload(null,false); 
}


</script>

</body>
</html>
