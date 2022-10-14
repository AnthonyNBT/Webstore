<div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body" id="commentList">
            <input id="idProduct" class="d-none" value="<?=$_GET["id"]?>">
            <div class="list-inline">
                <div class="list-group">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h3>Đánh giá</h3>
                        </li>
                        <li class="list-inline-item">
                            <a id="editComment"><i class="far fa-edit text-success"></i></a>
                        </li>
                    </ul>

                </div>
            </div>
            <?php include_once "../controller/ShowCommentAccess.php" ?>
        </div>
    </div>
</div>