<div class="modal fade" id="Message">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b><?= isset($_SESSION["DialogMess"]) ? $_SESSION["DialogMess"]["title"] : "" ?></b></h4>
            </div>

            <div class="modal-body">
                <p style="text-align: center; font-size: 20px; padding-top: 8px;"><?= isset($_SESSION["DialogMess"]) ? $_SESSION["DialogMess"]["message"] : "" ?></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>