<div class="list-inline">
    <div class="float-left">
        <img src="../images/user_03.jpg"/>
    </div>
    <div class="list-group pl-3 ">
        <ul class="list-inline mb-auto">
            <li class="list-inline-item">
                <input id="mailData" value="<?=$_SESSION["mail"]?>" class="d-none">
                <h6>You</h6>
            </li>
        </ul>

        <ul class="list-inline">
                <div class="form-group">
                    <label for="">Bình luận</label>
                    <textarea name="comment" class="form-control" id="comment" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Đánh giá sao</label>
                    <select name="rating" class="form-control" id="rating">
                        <option value="5">5 star</option>
                        <option value="4">4 star</option>
                        <option value="3">3 star</option>
                        <option value="2">2 star</option>
                        <option value="1">1 star</option>
                    </select>
                </div>
                <div class="form-group">
                    <ul class="list-inline mb-auto">
                        <li class="list-inline-item">
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                        </li>
                    </ul>
                </div>
                <div class="form-group">
<!--                    <button type="submit" name="postComment" class="btn btn-success">Gửi đánh giá</button>-->
                    <button id="postComment" class="btn btn-success">Gửi đánh giá</button>
                </div>
        </ul>
    </div>
</div>
