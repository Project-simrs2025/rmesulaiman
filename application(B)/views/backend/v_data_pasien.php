<div class="content-wrapper container">
<div class="page-content">

    <section id="input-validation">
        <div class="row">
            <div class="col-12 col-xl-12">
        
            <div class="card">
                <div class="card-body">
                 
                    
                    <div class="table-responsive">
                        <table id="mytable" class="table table-borderless mb-0 text-sm">
                            <thead>
                                <tr class="table-primary">
                                    <th class="col-4">Nama</th>
                                    <th class="col-1">No RM</th>
                                    <th>Tanggal Lahir</th>
                                    <th class="col-4">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>
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
        "processing": true,
        "serverSide": true,
        "order": [], 
        "ajax": {
            "url": "<?php echo site_url('backend/data_pasien/get_ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
            }
        },
        "columnDefs": [
            { 
                "targets": [ 0,1,2,3 ], 
                "orderable": false, 
            },
        ],
       
      
    });
    //datatables


    $('#mytable').on('click','.pilih',function(){
        var id = $(this).data('id');
        var site_url = '<?php echo site_url();?>';
        window.location.href = site_url+"backend/data_pasien/get_data_pasien/"+id+"";
    });

});



function reload_table()
{
    table.ajax.reload(null,false); 
}

</script>

</body>
</html>
