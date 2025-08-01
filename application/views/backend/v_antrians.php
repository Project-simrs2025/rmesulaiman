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
                        <li class="breadcrumb-item"><a href="<?php echo site_url('backend/antrian');?>">Antrian</a></li>
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
                                    
                                    <?php echo $form_filter_poli; ?>
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
                                <th class="col-3">Waktu Kunjungan</th>
                                <th class="col-1">No Antrian</th>
                                <th>No RM</th>
                                <th class="col-2">Nama Pasien</th>
                                <th>Penjamin</th>
                                <th class="col-3">Dokter</th>
                                <th class="col-1">Poliklinik</th>
                                <th class="col-3">Aksi</th>
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
            "url": "<?php echo site_url('backend/antrians/get_ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
                data.tgl = $('#tgl').val();
                data.dokter = $('#dokter').val();
            }
        },
        "columnDefs": [
            { 
                "targets": [ 0,1,2,3,4,5,6,7 ], 
                "orderable": false, 
            },
        ],
        "language": {
            "sInfo": "",
            "sInfoEmpty": "",
            "sInfoFiltered": ""
        },
        "paging": false,
        "searching": true,
        "scrollY": '70vh',
        "scrollCollapse": true,
        "dom": 'lfTrtip',
        "oLanguage": {
            "sSearch": "Cari : "
        },
        "drawCallback": function(settings) {
            var api = this.api();
            var rows = api.rows({ page: 'current' }).nodes();
            var last = null;
            var groupColumn = 6;
            var Poli = 6;
            var NamaPoli = '';

            api.column(groupColumn, { page: 'current' }).data().each(function(group, i) {
                if (last !== group) {
                    api.rows().data().each(function(item) {
                        if (item[groupColumn] === group) {
                            NamaPoli = item[Poli];
                        }
                    });
                    $(rows).eq(i).before(
                        '<tr class="group" style="background-color:#333 !important; color:#fff !important"><td colspan="9"><b>' + NamaPoli + '</b></td></tr>'
                    );
                    last = group;
                }
            });
        }
    });
    //datatables


    $("#dokter,#poli").select2({
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
        $("#dokter,#poli").select2({
                cache: false,
                theme: "bootstrap-5",
        });
        flatpickr('.flatpickr-range', {
            dateFormat: "Y-m-d",
            cache: false,
        });
        reload_table();
    });

    $('#mytable').on('click','.pilih',function(){
        var id = $(this).data('id');
        var site_url = '<?php echo site_url();?>';
        window.location.href = site_url+"backend/antrian/get_data/"+id+"";
    });

});
$(document).on("click", ".pulang", function(e) {
        e.preventDefault();
        var kunjungan = $(this).attr("kunjungan");
        var idpas = $(this).attr("idpas");
        var antrian = $(this).attr("antrian");
        
        Swal.fire({
            title: "Pulangkan?",
            text: "Cepat ko klik ini bok!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Pulangkan!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url : "<?php echo site_url('backend/antrians/pulang')?>",
                    data: {
                        kunjungan: kunjungan, idpas: idpas , antrian: antrian
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.res == "success") {
                            Swal.fire(
                                "Berhasil!",
                                "Dah pulang bok.",
                                "success"
                            );
                           
                            reload_table();
                        }
                    },
                });
            }
        });
    });


function reload_table()
{
    table.ajax.reload(null,false); 
}

</script>

</body>
</html>
