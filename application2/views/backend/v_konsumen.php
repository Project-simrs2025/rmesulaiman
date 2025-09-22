<div class="content-wrapper container">
<div class="row">
    <div class="page-content">
        <section class="row">
            
    <!------- breadcrumb --------->
        <?php $this->load->view("backend/_partials/breadcrumb.php") ?>
    <!------- breadcrumb --------->
                <div class="card">
                   
            <div class="card-body">
           
                <div class="btn-group mb-3  float-end" role="group" aria-label="Basic example">
                    <a class="btn icon btn-sm btn-success" id="btn-validate-import" onclick="add_konsumen()"><i class="bi bi-plus"></i></a>

                </div>
                <br/><br/>

                <div class="table-responsive">
                    <table id="mytable" class="table table-bordered mb-0 text-sm">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Post Datatables END -->

    
        <!------- FOOTER --------->
            <?php $this->load->view("backend/_partials/footer.php") ?>
        <!------- FOOTER --------->
    </div>
</div>
    <script language="JavaScript" type="application/javascript" src="<?php echo base_url().'assets/js/xlsx.full.min.js'?>"></script>
    <script language="JavaScript" type="application/javascript" src="<?php echo base_url().'assets/js/pages/convertxlsx.js'?>"></script>
<!------- TOASTIFY JS --------->
    <?php $this->load->view("backend/_partials/toastify.php") ?>
    
<!------- TOASTIFY JS --------->


<script type="application/javascript">

var save_method; 
var table;

$(document).ready(function() {
  

    table = $('#mytable').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo site_url('backend/konsumen/get_ajax_list'); ?>",
            "type": "POST"
        },
        "columnDefs": [
            {
                "targets": [0, 1, 2],
                "orderable": false,
            },
        ],
    });

    $("#nama").change(function(){
        $(this).parent().parent().removeClass('help-block text-danger');
        $(this).next().empty();
    });
  
    
});



function add_konsumen()
{
    save_method = 'add';
    $('#formkonsumen')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.show_record').empty(); 
    $('.help-block').empty(); 
    $('#modal_form_konsumen').modal('show'); 
    $('.modal-title').text('Masukkan Nama Rumah Sakit'); 
    
}
 
function reload_table()
{
    table.ajax.reload(null,false); 
}

function addkonsumen()
{
    
    

    $('#btnSave').text('saving...'); 
    $('#btnSave').attr('disabled',true); 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('backend/konsumen/generate_all_qrcode')?>";
    } else {
        url = "<?php echo site_url('backend/konsumen/generate_all_qrcode')?>";
    }

    
    $.ajax({
        url : url,
        type: "POST",
        data: $('#formkonsumen').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) 
            {
                toastify_success();
                $('#modal_form_konsumen').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); 
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); 
                    
                }
            }
            $('#btnSave').text('Save'); 
            $('#btnSave').attr('disabled',false); 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('Save'); 
            $('#btnSave').attr('disabled',false); 

        }
    });

}

</script>

</body>
</html>
