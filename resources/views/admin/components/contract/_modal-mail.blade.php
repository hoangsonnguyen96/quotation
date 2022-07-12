
<!-- Modal -->
<div class="modal fade" id="mail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="GET" action="#" id="action">
                <input type="hidden" name="id" id="contract-id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">{{__('contract.field.customer_name')}} <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" id="contract-customer" aria-describedby=""
                            placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="">CC </label>
                        <input type="text" name="cc" class="form-control"  id="contract-cc" placeholder="cc"
                         >
                    </div>
                    <div class="form-group">
                        <label for="">Subject <span class="text-danger">*</span></label>
                        <input type="text" name="subject" class="form-control" id=""
                            aria-describedby="" value="Thư đề nghị ký hợp đồng" required>
                    </div>
                    <div class="form-group">
                        <label for="">{{__('contract.field.message')}} </label>
                        <textarea name="message" id="contract-message" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Access Key<span class="text-danger">*</span></label>
                        <input type="text" name="accessKey" class="form-control"
                            placeholder="Access Key" id="contract-code" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('contract.button.close')}}</button>
                    <button type="submit" id="btn-submit" class="btn btn-primary">{{__('contract.button.save')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
