
<!-- MODAL -->

<!-- Add Update Modal -->
<?php 
    foreach ($data2->result() as $row):
?>
<div class="modal fade text-left" id="modal_form_detail" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full"
                role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        
                        <h3 class="modal-title white" id="myModalLabel120"></h3>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <div class="modal-body form">
                        
                        
                        <div class="row">
                               <input type="text" class="form-control kodebooking" name="kodebooking">
                               <input type="text" class="form-control wakturs" name="wakturs">
                               <input type="text" class="form-control waktu" name="waktu">
                               <input type="text" class="form-control taskname" name="taskname">
                               <input type="text" class="form-control taskid" name="taskid">

                                
                        </div>
                               
                            
                        
                    </div>
            
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-sm-none"></i>Cancel</button>
                       
                    </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- Add Update Modal -->
<!-- END MODAL -->