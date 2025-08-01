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
            <div class="alert alert-light-warning color-warning alert-dismissible show fade clear-notif-warning">
                <h5>Download Data Sudah bisa melalui SIMRS menu Download pada <span class="text-warning">Tombol Kuning</span> terlebih dahulu lalu <span class="text-danger">Tombol Merah</span></h5>
                <button type="button btn-sm" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
            <div class="card">
                <div class="card-body">
                    <p class="text-subtitle text-muted">Filter Data</p>
                        <form id="form-filter">
                            <div class="row">
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <input type="date" name="tgl_awal" id="tgl_awal" class="form-control flatpickr-range mb-3" placeholder="Pilih Tanggal Awal.."> 
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control flatpickr-range mb-3" placeholder="Pilih Tanggal Akhir.."> 
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
                                <th class="col-4">Tanggal Kunjungan</th>
                                <th class="col-4">Nama Pasien</th>
                                <th>No RM</th>
                                <th>No SEP</th>
                                <th class="col-1">Status</th>
                                <th class="col-4">Gabung Berkas</th>
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
            "url": "<?php echo site_url('backend/data_klaim/get_ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
                data.tgl_awal = $('#tgl_awal').val();
                data.tgl_akhir = $('#tgl_akhir').val();
            }
        },


        "columnDefs": [
        { 
            "targets": [ 0,1,2,3,4,5 ], 
            "orderable": false, 
        },
        ],
       

    });

    flatpickr('.flatpickr-range', {
        dateFormat: "Y-m-d",
    });
    $('#btn-filter').click(function(){ 
        reload_table();
    });
    $('#btn-reset').click(function(){ 
        $('#form-filter')[0].reset();
        flatpickr('.flatpickr-range', {
            dateFormat: "Y-m-d",
            cache: false,
        });
        reload_table();
    });
  
    $('#mytable').on('click', '.download', function() {
        var id_kunjungan = $(this).data('id_kunjungan');
        var site_url = '<?php echo site_url(); ?>';
        var url = site_url + "backend/data_klaim/download_all/" + id_kunjungan;

        // Membuka di tab baru
        var a = document.createElement('a');
        a.href = url;
        a.target = '_blank';
        a.rel = 'noopener noreferrer'; // untuk keamanan
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    });
});



function reload_table()
{
    table.ajax.reload(null,false); 
}

</script>

</body>
</html>
