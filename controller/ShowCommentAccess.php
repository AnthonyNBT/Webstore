<?php
    $idProduct = $_GET["id"];
    $resultComment = QueryCommentSelect($idProduct);
// ??? i variable ???
    for ($i = 0; $i < $resultComment->num_rows; $i++) {
        $row = $resultComment->fetch_assoc();
        ?>
            <div class="list-inline">
                    <div class="float-left">
                        <img src="../images/user_01.jpg"/>
                    </div>
                    <div class="list-group pl-3 ">
                        <ul class="list-inline mb-auto">
                            <li class="list-inline-item">
                                <h6><?= $row["NAME"] ?></h6>
                            </li>
                        </ul>
                        <ul class="list-inline mb-auto">
                            <li class="list-inline-item">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                            </li>
                            <li class="list-inline-item mb-auto">
                                <h6 class="text-muted font-weight-normal font-italic"><?= $row["DATECOMMENT"] ?></h6>
                            </li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6 class="font-weight-light">
                                    <?= $row["COMMENT"] ?>
                                </h6>
                            </li>
                        </ul>
                    </div>
                </div>
        <?php
    }
