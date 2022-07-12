<!-- Modal uploadForm sign to Archive -->
<div class="modal fade" id="uploadForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="#" enctype='multipart/form-data' id="action-upload">@csrf
                <input type="hidden" name="id" id="contract-id-upload">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="">Upload</label>
                            <div class="border-upload mb-3">
                                <input type="file" name="file" id="file" required>
                                <div id='lbError' class='warning'></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btn-upload">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
