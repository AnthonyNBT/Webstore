<div class="col-lg-5 mt-5">
    <div class="card mb-3">
        <img class="card-img img-fluid" src="../data/products/<?=$id?>/images/<?=$id?>.jpg" alt="CARD GAME" id="">
    </div>
    <div class="row">
        <!--Start Controls-->
        <div class="col-1 align-self-center">
            <a href="#" role="button" data-bs-slide="prev">
                <i class="text-dark fas fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
            </a>
        </div>
        <!--End Controls-->
        <!--Start Carousel Wrapper-->
        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
            <!--Start Slides-->
            <div class="carousel-inner product-links-wap" role="listbox">

                <!--Start Screenshot-->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4">
                            <a href="#">
                                <img class="card-img img-fluid" src="../images/screenshot_01.jpg" alt="Product Image 1">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#">
                                <img class="card-img img-fluid" src="../images/screenshot_02.jpg" alt="Product Image 2">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#">
                                <img class="card-img img-fluid" src="../images/screenshot_03.jpg" alt="Product Image 3">
                            </a>
                        </div>
                    </div>
                </div>
                <!--/ End Screenshot-->
            </div>
            <!--End Slides-->
        </div>
        <!--End Carousel Wrapper-->
        <!--Start Controls-->
        <div class="col-1 align-self-center">
            <a href="#" role="button" data-bs-slide="next">
                <i class="text-dark fas fa-chevron-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--End Controls-->
    </div>
</div>

<div class="col-lg-7 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="h4"><?=$row["NAME"]?></h4>
            <p class="h3 font-italic text-warning py-2"><?=$row["PRICE"] == 0 ? "Free" : $row["PRICE"].".000VND"?></p>
            <p class="py-2">
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-secondary"></i>
                <span class="list-inline-item text-dark">????nh gi?? <strong><?= $rate ?></strong> | <strong><?= $down ?></strong> l?????t t???i</span>
            </p>

            <!--Start Ng??y ????ng t???i-->
            <ul class="list-inline">
                <li class="list-inline-item">
                    <h6>Ng??y ????ng t???i:</h6>
                </li>
                <li class="list-inline-item">
                    <p class="text-muted"><strong><?=$row["UPLOAD_DATE"]?></strong></p>
                </li>
            </ul>
            <!--/End Ng??y ????ng t???i-->

            <!--Start Dung l?????ng-->
            <ul class="list-inline">
                <li class="list-inline-item">
                    <h6>Dung l?????ng:</h6>
                </li>
                <li class="list-inline-item">
                    <p class="text-muted"><strong>12 MB</strong></p>
                </li>
            </ul>
            <!--/End Dung l?????ng-->

            <!--Nh?? ph??t tri???n-->
            <ul class="list-inline">
                <li class="list-inline-item">
                    <h6>Nh?? ph??t tri???n:</h6>
                </li>
                <li class="list-inline-item">
                    <a href="./store-studio.php" target="_blank"><p class="text-muted"><strong><?=$row["DEVELOPER_NAME"]?></strong></p></a>
                </li>
            </ul>
            <!--/End Nh?? ph??t tri???n-->

            <!--Th??ng tin li??n h??? Nh?? ph??t tri???n-->
            <ul class="list-inline">
                <li class="list-inline-item">
                    <h6>Th??ng tin li??n h???:</h6>
                </li>
                <li class="list-inline-item">
                    <a href="./contact-studio.php" target="_blank"><p class="text-muted"><strong>Li??n h??? ngay</strong></p></a>
                </li>
            </ul>
            <!--/End Th??ng tin li??n h??? Nh?? ph??t tri???n-->

            <!--Start M?? t???-->
            <h6>M?? t???:</h6>
            <p>
                <?=$row["DESCRIBE"]?>
            </p>
            <!--/End M?? t???-->
            <!--Start Button t???i xu???ng-->
            <form action="../controller/DownloadAccess.php" method="POST">
                <div class="row pb-3">
                    <div class="col d-grid">
                        <button type="submit" class="btn btn-success btn-lg" name="download" value="<?= $id ?>"><?=$numRowHis > 0 ? "T???i xu???ng" : ($row["PRICE"] == 0 ? "T???i xu???ng" : "Mua S???n Ph???m")?></button>
                    </div>
                </div>
            </form>
            <!--/End Button t???i xu???ng-->
        </div>
    </div>
</div>