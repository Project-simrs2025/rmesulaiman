
<!-- MODAL -->
        <!-- Add Records Modal -->
        <div class="modal fade text-left" id="modal_form_konsumen" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title white" id="myModalLabel120">
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body formkonsumen">
                    
                    <?php
                        $attributes = array('class' => 'form-horizontal', 'id' => 'formkonsumen');
                        echo form_open($this->uri->uri_string(), $attributes);
                    ?>    
                        <div class="form-body">
                        <div class="row">
                            
                            <input type="hidden"  name="id" class="id"/> 
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="valid-state">Nama Rumah Sakit</label>
                                    <input type="text" name="rs" class="form-control rs" id="rs" placeholder="Nama RS">
                                    <span class="help-block text-danger"></span>
                                </div>
                            </div>
                           
                            
                        </div>
                        </div>
                    <?php
                        echo form_close();
                    ?>
                    </div>
                    <div class="modal-footer">
                        <div class="show_record"></div>
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-sm-none"></i>Cancel</button>
                        <button type="button" class="btn btn-success ml-1 btnSave" id="btnSave" onclick="addkonsumen()"> Generate QR

                    </div>
                </div>
            </div>
        </div>
        <!-- Add Records Modal -->

<!-- END MODAL -->