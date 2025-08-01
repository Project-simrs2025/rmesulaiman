
<div class="content-wrapper container">
<div class="row">
    <div class="page-content">
        <section class="row">
            
    <!------- breadcrumb --------->
        <?php $this->load->view("backend/_partials/breadcrumb.php") ?>
    <!------- breadcrumb --------->
 
        
            <div class="card">
                <div class="card-body">
                
                    
                    <a class="btn icon btn-sm btn-success float-end" onclick="add_menu()"><i class="bi bi-plus"></i></a></i></a>&nbsp;&nbsp;
                    <br/><br/>
                    <div class="table-responsive">
                        <table id="mytable" class="table table-borderless mb-0">
                        <thead>
                            <tr>
                                <th>No RM</th>
                                <th class="col-8">Nama Menu</th>
                                <th>Tipe Berkas</th>
                                <th>Aksi</th>
                                
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
        "serverSide": false,
        "lengthChange": false,
        "info": false,
        "order": [], 

        "ajax": {
            "url": "<?php echo site_url('backend/menu/get_ajax_list')?>",
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
    
    $("#norm").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });     
    $("#nama").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
   
    

});



function add_menu()
{
    save_method = 'add';
    $('#formmenu')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    $('#modal_form_menu').modal('show');
    $('.modal-title').text('Tambah Menu RME');
   
}
            
function edit_menu(id_menu)
{
    save_method = 'update';
    $('#formmenu')[0].reset();
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    $('#modal_form_menu').modal('show'); 
    $('.modal-title').text('Edit Menu'); 
    
    $.ajax({
        url : "<?php echo site_url('backend/menu/ajax_edit/')?>/" + id_menu,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

                
                $('[name="id_menu"]').val(data.id_menu);
                $('[name="norm"]').val(data.rm);
                $('[name="nama"]').val(data.isi);
				$('[name="link"]').val(data.link);


                var strtipe = data.tipe.split(","); 
            
                $("input[name='tipe[]']").each(function() {
                    var checkboxValue = $(this).val();
                    if (strtipe.indexOf(checkboxValue) !== -1) {
                        $(this).prop('checked', true); 
                    } else {
                        $(this).prop('checked', false); 
                    }
                });


                $('#modal_form_menu').modal('hide'); 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); 
}

function addmenu()
{
    

    $('#btnSave').text('saving...'); 
    $('#btnSave').attr('disabled',true); 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('backend/menu/add')?>";
    } else {
        url = "<?php echo site_url('backend/menu/edit')?>";
    }

    $.ajax({
        url : url,
        type: "POST",
        data: $('#formmenu').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) 
            {
                toastify_success();
                $('#modal_form_menu').modal('hide');
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

$(document).on("click", "#del", function(e) {
        e.preventDefault();
        var id_menu = $(this).attr("value");
        Swal.fire({
            title: "Apakah kamu yakin ingin menghapus Menu ini?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url : "<?php echo site_url('backend/menu/delete')?>",
                    data: {
                        id_menu: id_menu,
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.res == "success") {
                            Swal.fire(
                                "Deleted!",
                                "Data berhasil dihapus.",
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
