<?php
    $message = $_POST["mess"];

    include_once "ConnectData.php";
    $accept = 1;
    $data = "";
    $result = "";
    if ($message == "allProduct") {
        $result = QueryListProductSelect($accept);
    } else if ($message == "popuProduct") {
        $result = QueryListProductSelectPopular($accept);
    } else if ($message == "newProduct") {
        $result = QueryListProductSelectNew($accept);
    } else if ($message == "allAppProduct") {
        $class = "application";
        $result = QueryListProductSelectClass($accept, $class);
    } else if ($message == "popuAppProduct") {
        $class = "application";
        $result = QueryListProductSelectPopularClass($accept, $class);
    } else if ($message == "newAppProduct") {
        $class = "application";
        $result = QueryListProductSelectNewClass($accept, $class);
    } else if ($message == "allAppGameProduct") {
        $type = "game";
        $result = QueryListProductSelectType($accept, $type);
    } else if ($message == "freeAppGameProduct") {
        $type = "game";
        $result = QueryListProductSelectTypeFree($accept, $type);
    } else if ($message == "priceAppGameProduct") {
        $type = "game";
        $result = QueryListProductSelectTypePrice($accept, $type);
    } else if ($message == "popuAppGameProduct") {
        $type = "game";
        $result = QueryListProductSelectPopularType($accept, $type);
    } else if ($message == "newAppGameProduct") {
        $type = "game";
        $result = QueryListProductSelectNewType($accept, $type);
    } else if ($message == "allAppToolProduct") {
        $type = "tool";
        $result = QueryListProductSelectType($accept, $type);
    } else if ($message == "freeAppToolProduct") {
        $type = "tool";
        $result = QueryListProductSelectTypeFree($accept, $type);
    } else if ($message == "priceAppToolProduct") {
        $type = "tool";
        $result = QueryListProductSelectTypePrice($accept, $type);
    } else if ($message == "popuAppToolProduct") {
        $type = "tool";
        $result = QueryListProductSelectPopularType($accept, $type);
    } else if ($message == "newAppToolProduct") {
        $type = "tool";
        $result = QueryListProductSelectNewType($accept, $type);
    } else if ($message == "allMovieProduct") {
        $class = "film";
        $result = QueryListProductSelectClass($accept, $class);
    } else if ($message == "popuMovieProduct") {
        $class = "film";
        $result = QueryListProductSelectPopularClass($accept, $class);
    } else if ($message == "newMovieProduct") {
        $class = "film";
        $result = QueryListProductSelectNewClass($accept, $class);
    } else if ($message == "allMovieActionProduct") {
        $type = "action";
        $result = QueryListProductSelectType($accept, $type);
    } else if ($message == "freeMovieActionProduct") {
        $type = "action";
        $result = QueryListProductSelectTypeFree($accept, $type);
    } else if ($message == "priceMovieActionProduct") {
        $type = "action";
        $result = QueryListProductSelectTypePrice($accept, $type);
    } else if ($message == "popuMovieActionProduct") {
        $type = "action";
        $result = QueryListProductSelectPopularType($accept, $type);
    } else if ($message == "newMovieActionProduct") {
        $type = "action";
        $result = QueryListProductSelectNewType($accept, $type);
    } else if ($message == "allMovieCartoonProduct") {
        $type = "cartoon";
        $result = QueryListProductSelectType($accept, $type);
    } else if ($message == "freeMovieCartoonProduct") {
        $type = "cartoon";
        $result = QueryListProductSelectTypeFree($accept, $type);
    } else if ($message == "priceMovieCartoonProduct") {
        $type = "cartoon";
        $result = QueryListProductSelectTypePrice($accept, $type);
    } else if ($message == "popuMovieCartoonProduct") {
        $type = "cartoon";
        $result = QueryListProductSelectPopularType($accept, $type);
    } else if ($message == "newMovieCartoonProduct") {
        $type = "cartoon";
        $result = QueryListProductSelectNewType($accept, $type);
    } else if ($message == "allMovieComedyProduct") {
        $type = "comedy";
        $result = QueryListProductSelectType($accept, $type);
    } else if ($message == "freeMovieComedyProduct") {
        $type = "comedy";
        $result = QueryListProductSelectTypeFree($accept, $type);
    } else if ($message == "priceMovieComedyProduct") {
        $type = "comedy";
        $result = QueryListProductSelectTypePrice($accept, $type);
    } else if ($message == "popuMovieComedyProduct") {
        $type = "comedy";
        $result = QueryListProductSelectPopularType($accept, $type);
    } else if ($message == "newMovieComedyProduct") {
        $type = "comedy";
        $result = QueryListProductSelectNewType($accept, $type);
    } else if ($message == "allBookProduct") {
        $class = "book";
        $result = QueryListProductSelectClass($accept, $class);
    } else if ($message == "popuBookProduct") {
        $class = "book";
        $result = QueryListProductSelectPopularClass($accept, $class);
    } else if ($message == "newBookProduct") {
        $class = "book";
        $result = QueryListProductSelectNewClass($accept, $class);
    } else if ($message == "allBookEbookProduct") {
        $type = "ebook";
        $result = QueryListProductSelectType($accept, $type);
    } else if ($message == "freeBookEbookProduct") {
        $type = "ebook";
        $result = QueryListProductSelectTypeFree($accept, $type);
    } else if ($message == "priceBookEbookProduct") {
        $type = "ebook";
        $result = QueryListProductSelectTypePrice($accept, $type);
    } else if ($message == "popuBookEbookProduct") {
        $type = "ebook";
        $result = QueryListProductSelectPopularType($accept, $type);
    } else if ($message == "newBookEbookProduct") {
        $type = "ebook";
        $result = QueryListProductSelectNewType($accept, $type);
    } else if ($message == "allBookAudioProduct") {
        $type = "audio";
        $result = QueryListProductSelectType($accept, $type);
    } else if ($message == "freeBookAudioProduct") {
        $type = "audio";
        $result = QueryListProductSelectTypeFree($accept, $type);
    } else if ($message == "priceBookAudioProduct") {
        $type = "audio";
        $result = QueryListProductSelectTypePrice($accept, $type);
    } else if ($message == "popuBookAudioProduct") {
        $type = "audio";
        $result = QueryListProductSelectPopularType($accept, $type);
    } else if ($message == "newBookAudioProduct") {
        $type = "audio";
        $result = QueryListProductSelectNewType($accept, $type);
    } else if ($message == "allBookChildProduct") {
        $type = "child";
        $result = QueryListProductSelectType($accept, $type);
    } else if ($message == "freeBookChildProduct") {
        $type = "child";
        $result = QueryListProductSelectTypeFree($accept, $type);
    } else if ($message == "priceBookChildProduct") {
        $type = "child";
        $result = QueryListProductSelectTypePrice($accept, $type);
    } else if ($message == "popuBookChildProduct") {
        $type = "child";
        $result = QueryListProductSelectPopularType($accept, $type);
    } else if ($message == "newBookChildProduct") {
        $type = "child";
        $result = QueryListProductSelectNewType($accept, $type);
    }
    for ($i = 0; $i < $result->num_rows; $i++) {
        $row = $result->fetch_assoc();
        if ($row["PRICE"] == 0) {
            $price = "Free";
        } else {
            $price = $row["PRICE"] . "000VND";
        }
        $data .= '<div class="col-md-3">
                <div class="card mb-4 product-wap rounded-0">
                    <div class="card rounded-0">
                        <div class="image">
                            <img class="img img-responsive full-width card-img rounded-0 img-fluid" src="../data/products/' . $row["ID"] . '/images/' . $row["ID"] . '.jpg">
                        </div>
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success text-white mt-2" href="../view/store-detail.php?id=' . $row["ID"] . '"><i class="fab fa-fantasy-flight-games"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="../view/store-detail.php?id=' . $row["ID"] . '" class="h3 text-decoration-none"><b>' . $row["NAME"] . '</b></a>
                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <li></li>
                        </ul>
                        <ul class="list-unstyled d-flex justify-content-center mb-1">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                        </ul>
                        <p class="text-center mb-0">' . $price . '</p>
                    </div>
                </div>
            </div>';
    }
    echo $data;

