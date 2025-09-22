<div class="content-wrapper container">
<div class="page-content">
    <!------- breadcrumb --------->
        <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?php echo $title; ?></h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header float-start float-lg-end'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('backend/admission');?>">Admission</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    <!------- breadcrumb --------->
    <section id="input-validation">
        <div class="row">
            <div class="col-12 col-xl-12">
        
            <div class="card">
                <div class="card-body">
                    <p class="text-subtitle text-muted">Filter Data</p>
                        <form id="form-filter">
                            <div class="row">
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <input type="date" name="tgl" id="tgl" class="form-control flatpickr-range mb-3" placeholder="Pilih Tanggal.."> 
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    
                                    <?php echo $form_filter; ?>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    
                                    <?php echo $form_filter_ruang; ?>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                    <button type="button" id="btn-filter" class="btn btn-primary"><i class="bi bi-search"></i> Filter Data</button>&nbsp;&nbsp;
                                    <button type="button" id="btn-reset" class="btn btn-success"><i class="bi bi-bootstrap-reboot"></i> Refresh</button>
                                </div>
                            </div>
                            </div>
                        </form>
                    <hr>
                    
                    
                    <div class="table-responsive">
                        <table id="mytable" class="table table-borderless mb-0 text-sm">
                        <thead>
                            <tr class="table-primary">
                                <th>Waktu Admit</th>
                                <th>Nama Pasien</th>
                                <th>No RM</th>
                                <th class="col-1">Lantai</th>
                                <th>Asal</th>
                                <th>Ruangan</th>
                                <th>No Bed</th>
                                <th class="col-2">Dokter Rawat Inap</th>
                                <th>Penjamin</th>
                                <th class="col-1">Kelas</th>
                                <th>Lama Rawat</th>
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
            "url": "<?php echo site_url('backend/admission/get_ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
                data.tgl = $('#tgl').val();
                data.dokter = $('#dokter').val();
				data.ruang = $('#ruang').val();
            }
        },


        "columnDefs": [
        { 
            "targets": [ 0,1,2,3,4,5,6,7,8,9,10 ], 
            "orderable": false, 
        },
        ],
       

    });
    $("#dokter,#ruang").select2({
        cache: false,
        theme: "bootstrap-5",
    });
    $("#menus").select2({
        cache: false,
        theme: "bootstrap-5",
    });
    flatpickr('.flatpickr-range', {
        dateFormat: "Y-m-d",
    });
    $('#btn-filter').click(function(){ 
        reload_table();
    });
    $('#btn-reset').click(function(){ 
        $('#form-filter')[0].reset();
        $("#dokter,#ruang").select2({
                cache: false,
                theme: "bootstrap-5",
        });
        flatpickr('.flatpickr-range', {
            dateFormat: "Y-m-d",
            cache: false,
        });
        reload_table();
    });
         
    $("#nama").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $('#mytable').on('click','.pilih',function(){
        var id = $(this).data('id');
        var site_url = '<?php echo site_url();?>';
        window.location.href = site_url+"backend/admission/get_data/"+id+"";
    });

});



function reload_table()
{
    table.ajax.reload(null,false); 
}

</script>

</body>
</html>
