    'use strict';
$(document).ready(function() {
    // Accordion
    var all_panels = $('.store-accordion > li > ul').hide();

    $('.store-accordion > li > a').click(function() {
        var target = $(this).next();
        if (!target.hasClass('active')) {
            all_panels.removeClass('active').slideUp();
            target.addClass('active').slideDown();
        }
        return false;
    });
    // End accordion

    // Product detail
    $('.product-links-wap a').click(function() {
        var this_src = $(this).children('img').attr('src');
        $('#product-detail').attr('src', this_src);
        return false;
    });
    $('#btn-minus').click(function() {
        var val = $("#var-value").html();
        val = (val == '1') ? val : val - 1;
        $("#var-value").html(val);
        $("#product-quanity").val(val);
        return false;
    });
    $('#btn-plus').click(function() {
        var val = $("#var-value").html();
        val++;
        $("#var-value").html(val);
        $("#product-quanity").val(val);
        return false;
    });
    $('.btn-size').click(function() {
        var this_val = $(this).html();
        $("#product-size").val(this_val);
        $(".btn-size").removeClass('btn-secondary');
        $(".btn-size").addClass('btn-success');
        $(this).removeClass('btn-success');
        $(this).addClass('btn-secondary');
        return false;
    });
    // End roduct detail

    // Remove message error after focus
    $("input.form-control").focus(()=>{
        $("input.form-control").next().css("display", "none");
    });

    $("#infoProfile").click(()=>{
        console.log("ABC");
        $(".change-info").prop("disabled", false);
        $("#btn-Info").removeClass("d-none");
    });

    $("#changePass").click(()=>{
        $(".ch-pass").prop( "disabled", false );
        $("#btn-Pass").removeClass("d-none");
    });

    $("#editComment").click(()=>{
        $("#ratingComment").removeClass("d-none");
    });

    //Ajax
    //----------------------------------------------------------------------------------
    // Ajax Comment
    $("#postComment").click(()=>{
        if ($("#comment").val() !== "") {
            var commentData = $("#comment").val();
            var ratingData = $("#rating").val();
            var idData = $("#idProduct").val();
            var mailData = $("#mailData").val();
            $.ajax({
                type: "POST",
                url: "../controller/CommentAccess.php",
                data: {idD: idData, commentD: commentData, ratingD: ratingData, mailD: mailData},
                success: function (data) {
                    if (data == 'false') {
                        console.log("No data");
                    } else {
                        var res = JSON.parse(data);
                        $("#commentList").append('<div class="list-inline"><div class="float-left"> <img src="../images/user_01.jpg"/></div><div class="list-group pl-3 "><ul class="list-inline mb-auto"><li class="list-inline-item"><h6>' + res[0] + '</h6></li></ul><ul class="list-inline mb-auto"><li class="list-inline-item"> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-secondary"></i> <i class="fa fa-star text-secondary"></i></li><li class="list-inline-item mb-auto"><h6 class="text-muted font-weight-normal font-italic">'+ res[1] +'</h6></li></ul><ul class="list-inline"><li class="list-inline-item"><h6 class="font-weight-light">'+ res[2] +'</h6></li></ul></div></div>');
                    }
                }
            });
            var commentData = $("#comment").val("");
        }
    });

    //----------------------------------------------------------------------------------
    // All product Store
    $("#allProduct").click(()=>{
        $("#frameProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "allProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameProduct").html(data);
                }
            }
        });
    });
    // Popular product Store
    $("#popuProduct").click(()=>{
        $("#frameProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "popuProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameProduct").html(data);
                }
            }
        });
    });
    // New product Store
    $("#newProduct").click(()=>{
        $("#frameProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "newProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameProduct").html(data);
                }
            }
        });
    });


    // Store-App
    //----------------------------------------------------------------------------------
    // All product Store App
    $("#allAppProduct").click(()=>{
        $("#frameAppProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "allAppProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppProduct").html(data);
                }
            }
        });
    });
    // Popular product Store App
    $("#popuAppProduct").click(()=>{
        $("#frameAppProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "popuAppProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppProduct").html(data);
                }
            }
        });
    });
    // New product Store App
    $("#newAppProduct").click(()=>{
        $("#frameAppProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "newAppProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppProduct").html(data);
                }
            }
        });
    });


    // Store App Game
    //----------------------------------------------------------------------------------
    // All product Store App Game
    $("#allAppGameProduct").click(()=>{
        $("#frameAppGameProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "allAppGameProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppGameProduct").html(data);
                }
            }
        });
    });
    // Free product Store App Game
    $("#freeAppGameProduct").click(()=>{
        $("#frameAppGameProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "freeAppGameProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppGameProduct").html(data);
                }
            }
        });
    });
    // New product Store App Game
    $("#priceAppGameProduct").click(()=>{
        $("#frameAppGameProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "priceAppGameProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppGameProduct").html(data);
                }
            }
        });
    });
    // Popular product Store App Game
    $("#popuAppGameProduct").click(()=>{
        $("#frameAppGameProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "popuAppGameProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppGameProduct").html(data);
                }
            }
        });
    });
    // New product Store App Game
    $("#newAppGameProduct").click(()=>{
        $("#frameAppGameProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "newAppGameProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppGameProduct").html(data);
                }
            }
        });
    });

    // Store App Tool
    //----------------------------------------------------------------------------------
    // All product Store App Tool
    $("#allAppToolProduct").click(()=>{
        $("#frameAppToolProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "allAppToolProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppToolProduct").html(data);
                }
            }
        });
    });
    // Free product Store App Tool
    $("#freeAppToolProduct").click(()=>{
        $("#frameAppToolProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "freeAppToolProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppToolProduct").html(data);
                }
            }
        });
    });
    // New product Store App Tool
    $("#priceAppToolProduct").click(()=>{
        $("#frameAppToolProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "priceAppToolProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppToolProduct").html(data);
                }
            }
        });
    });
    // Popular product Store App Tool
    $("#popuAppToolProduct").click(()=>{
        $("#frameAppToolProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "popuAppToolProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppToolProduct").html(data);
                }
            }
        });
    });
    // New product Store App Tool
    $("#newAppToolProduct").click(()=>{
        $("#frameAppToolProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "newAppToolProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameAppToolProduct").html(data);
                }
            }
        });
    });

    // Store-Movie
    //----------------------------------------------------------------------------------
    // All product Store Movie
    $("#allMovieProduct").click(()=>{
        $("#frameMovieProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "allMovieProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieProduct").html(data);
                }
            }
        });
    });
    // Popular product Store Movie
    $("#popuMovieProduct").click(()=>{
        $("#frameMovieProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "popuMovieProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieProduct").html(data);
                }
            }
        });
    });
    // New product Store Movie
    $("#newMovieProduct").click(()=>{
        $("#frameMovieProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "newMovieProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieProduct").html(data);
                }
            }
        });
    });

    // Store Movie Action
    //----------------------------------------------------------------------------------
    // All product Store Movie Action
    $("#allMovieActionProduct").click(()=>{
        $("#frameMovieActionProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "allMovieActionProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieActionProduct").html(data);
                }
            }
        });
    });
    // Free product Store Movie Action
    $("#freeMovieActionProduct").click(()=>{
        $("#frameMovieActionProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "freeMovieActionProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieActionProduct").html(data);
                }
            }
        });
    });
    // New product Store Movie Action
    $("#priceMovieActionProduct").click(()=>{
        $("#frameMovieActionProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "priceMovieActionProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieActionProduct").html(data);
                }
            }
        });
    });
    // Popular product Store Movie Action
    $("#popuMovieActionProduct").click(()=>{
        $("#frameMovieActionProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "popuMovieActionProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieActionProduct").html(data);
                }
            }
        });
    });
    // New product Store Movie Action
    $("#newMovieActionProduct").click(()=>{
        $("#frameMovieActionProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "newMovieActionProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieActionProduct").html(data);
                }
            }
        });
    });

    // Store Movie Cartoon
    //----------------------------------------------------------------------------------
    // All product Store Movie Cartoon
    $("#allMovieCartoonProduct").click(()=>{
        $("#frameMovieCartoonProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "allMovieCartoonProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieCartoonProduct").html(data);
                }
            }
        });
    });
    // Free product Store Movie Cartoon
    $("#freeMovieCartoonProduct").click(()=>{
        $("#frameMovieCartoonProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "freeMovieCartoonProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieCartoonProduct").html(data);
                }
            }
        });
    });
    // New product Store Movie Cartoon
    $("#priceMovieCartoonProduct").click(()=>{
        $("#frameMovieCartoonProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "priceMovieCartoonProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieCartoonProduct").html(data);
                }
            }
        });
    });
    // Popular product Store Movie Cartoon
    $("#popuMovieCartoonProduct").click(()=>{
        $("#frameMovieCartoonProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "popuMovieCartoonProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieCartoonProduct").html(data);
                }
            }
        });
    });
    // New product Store Movie Cartoon
    $("#newMovieCartoonProduct").click(()=>{
        $("#frameMovieCartoonProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "newMovieCartoonProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieCartoonProduct").html(data);
                }
            }
        });
    });

    // Store Movie Comedy
    //----------------------------------------------------------------------------------
    // All product Store Movie Comedy
    $("#allMovieComedyProduct").click(()=>{
        $("#frameMovieComedyProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "allMovieComedyProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieComedyProduct").html(data);
                }
            }
        });
    });
    // Free product Store Movie Comedy
    $("#freeMovieComedyProduct").click(()=>{
        $("#frameMovieComedyProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "freeMovieComedyProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieComedyProduct").html(data);
                }
            }
        });
    });
    // New product Store Movie Comedy
    $("#priceMovieComedyProduct").click(()=>{
        $("#frameMovieComedyProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "priceMovieComedyProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieComedyProduct").html(data);
                }
            }
        });
    });
    // Popular product Store Movie Comedy
    $("#popuMovieComedyProduct").click(()=>{
        $("#frameMovieComedyProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "popuMovieComedyProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieComedyProduct").html(data);
                }
            }
        });
    });
    // New product Store Movie Comedy
    $("#newMovieComedyProduct").click(()=>{
        $("#frameMovieComedyProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "newMovieComedyProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameMovieComedyProduct").html(data);
                }
            }
        });
    });

    // Store-Book
    //----------------------------------------------------------------------------------
    // All product Store Book
    $("#allBookProduct").click(()=>{
        $("#frameBookProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "allBookProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookProduct").html(data);
                }
            }
        });
    });
    // Popular product Store Book
    $("#popuBookProduct").click(()=>{
        $("#frameBookProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "popuBookProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookProduct").html(data);
                }
            }
        });
    });
    // New product Store Book
    $("#newBookProduct").click(()=>{
        $("#frameBookProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "newBookProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookProduct").html(data);
                }
            }
        });
    });

    // Store Book Ebook
    //----------------------------------------------------------------------------------
    // All product Store Book Ebook
    $("#allBookEbookProduct").click(()=>{
        $("#frameBookEbookProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "allBookEbookProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookEbookProduct").html(data);
                }
            }
        });
    });
    // Free product Store Book Ebook
    $("#freeBookEbookProduct").click(()=>{
        $("#frameBookEbookProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "freeBookEbookProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookEbookProduct").html(data);
                }
            }
        });
    });
    // New product Store Book Ebook
    $("#priceBookEbookProduct").click(()=>{
        $("#frameBookEbookProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "priceBookEbookProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookEbookProduct").html(data);
                }
            }
        });
    });
    // Popular product Store Book Ebook
    $("#popuBookEbookProduct").click(()=>{
        $("#frameBookEbookProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "popuBookEbookProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookEbookProduct").html(data);
                }
            }
        });
    });
    // New product Store Book Ebook
    $("#newBookEbookProduct").click(()=>{
        $("#frameBookEbookProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "newBookEbookProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookEbookProduct").html(data);
                }
            }
        });
    });

    // Store Book Audio
    //----------------------------------------------------------------------------------
    // All product Store Book Audio
    $("#allBookAudioProduct").click(()=>{
        $("#frameBookAudioProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "allBookAudioProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookAudioProduct").html(data);
                }
            }
        });
    });
    // Free product Store Book Audio
    $("#freeBookAudioProduct").click(()=>{
        $("#frameBookAudioProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "freeBookAudioProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookAudioProduct").html(data);
                }
            }
        });
    });
    // New product Store Book Audio
    $("#priceBookAudioProduct").click(()=>{
        $("#frameBookAudioProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "priceBookAudioProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookAudioProduct").html(data);
                }
            }
        });
    });
    // Popular product Store Book Audio
    $("#popuBookAudioProduct").click(()=>{
        $("#frameBookAudioProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "popuBookAudioProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookAudioProduct").html(data);
                }
            }
        });
    });
    // New product Store Book Audio
    $("#newBookAudioProduct").click(()=>{
        $("#frameBookAudioProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "newBookAudioProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookAudioProduct").html(data);
                }
            }
        });
    });

    // Store Book Child
    //----------------------------------------------------------------------------------
    // All product Store Book Child
    $("#allBookChildProduct").click(()=>{
        $("#frameBookChildProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "allBookChildProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookChildProduct").html(data);
                }
            }
        });
    });
    // Free product Store Book Child
    $("#freeBookChildProduct").click(()=>{
        $("#frameBookChildProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "freeBookChildProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookChildProduct").html(data);
                }
            }
        });
    });
    // New product Store Book Child
    $("#priceBookChildProduct").click(()=>{
        $("#frameBookChildProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "priceBookChildProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookChildProduct").html(data);
                }
            }
        });
    });
    // Popular product Store Book Child
    $("#popuBookChildProduct").click(()=>{
        $("#frameBookChildProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "popuBookChildProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookChildProduct").html(data);
                }
            }
        });
    });
    // New product Store Book Child
    $("#newBookChildProduct").click(()=>{
        $("#frameBookChildProduct").empty();
        $.ajax({
            type: "POST",
            url: "../controller/QueryStoreProduct.php",
            data: {mess: "newBookChildProduct"},
            success: function (data) {
                if (data == 'false') {
                    console.log("No data");
                } else {
                    $("#frameBookChildProduct").html(data);
                }
            }
        });
    });
});

// on Load Store
$(document).ready(()=>{
    $.ajax({
        type: "POST",
        url: "../controller/QueryStoreProduct.php",
        data: {mess: "allProduct"},
        success: function (data) {
            if (data == 'false') {
                console.log("No data");
            } else {
                $("#frameProduct").html(data);
            }
        }
    });
});

// on Load Store App
$(document).ready(()=>{
    $.ajax({
        type: "POST",
        url: "../controller/QueryStoreProduct.php",
        data: {mess: "allAppProduct"},
        success: function (data) {
            if (data == 'false') {
                console.log("No data");
            } else {
                $("#frameAppProduct").html(data);
            }
        }
    });
});

// on Load Store App Game
$(document).ready(()=>{
    $.ajax({
        type: "POST",
        url: "../controller/QueryStoreProduct.php",
        data: {mess: "allAppGameProduct"},
        success: function (data) {
            if (data == 'false') {
                console.log("No data");
            } else {
                $("#frameAppGameProduct").html(data);
            }
        }
    });
});

// on Load Store App Tool
$(document).ready(()=>{
    $.ajax({
        type: "POST",
        url: "../controller/QueryStoreProduct.php",
        data: {mess: "allAppToolProduct"},
        success: function (data) {
            if (data == 'false') {
                console.log("No data");
            } else {
                $("#frameAppToolProduct").html(data);
            }
        }
    });
});

// on Load Store Movie
$(document).ready(()=>{
    $.ajax({
        type: "POST",
        url: "../controller/QueryStoreProduct.php",
        data: {mess: "allMovieProduct"},
        success: function (data) {
            if (data == 'false') {
                console.log("No data");
            } else {
                $("#frameMovieProduct").html(data);
            }
        }
    });
});

// on Load Store Movie Action
$(document).ready(()=>{
    $.ajax({
        type: "POST",
        url: "../controller/QueryStoreProduct.php",
        data: {mess: "allMovieActionProduct"},
        success: function (data) {
            if (data == 'false') {
                console.log("No data");
            } else {
                $("#frameMovieActionProduct").html(data);
            }
        }
    });
});

// on Load Store Movie Cartoon
$(document).ready(()=>{
    $.ajax({
        type: "POST",
        url: "../controller/QueryStoreProduct.php",
        data: {mess: "allMovieCartoonProduct"},
        success: function (data) {
            if (data == 'false') {
                console.log("No data");
            } else {
                $("#frameMovieCartoonProduct").html(data);
            }
        }
    });
});

// on Load Store Movie Comedy
$(document).ready(()=>{
    $.ajax({
        type: "POST",
        url: "../controller/QueryStoreProduct.php",
        data: {mess: "allMovieComedyProduct"},
        success: function (data) {
            if (data == 'false') {
                console.log("No data");
            } else {
                $("#frameMovieComedyProduct").html(data);
            }
        }
    });
});

// on Load Store Book
$(document).ready(()=>{
    $.ajax({
        type: "POST",
        url: "../controller/QueryStoreProduct.php",
        data: {mess: "allBookProduct"},
        success: function (data) {
            if (data == 'false') {
                console.log("No data");
            } else {
                $("#frameBookProduct").html(data);
            }
        }
    });
});

// on Load Store Book Ebook
$(document).ready(()=>{
    $.ajax({
        type: "POST",
        url: "../controller/QueryStoreProduct.php",
        data: {mess: "allBookEbookProduct"},
        success: function (data) {
            if (data == 'false') {
                console.log("No data");
            } else {
                $("#frameBookEbookProduct").html(data);
            }
        }
    });
});

// on Load Store Book Audio
$(document).ready(()=>{
    $.ajax({
        type: "POST",
        url: "../controller/QueryStoreProduct.php",
        data: {mess: "allBookAudioProduct"},
        success: function (data) {
            if (data == 'false') {
                console.log("No data");
            } else {
                $("#frameBookAudioProduct").html(data);
            }
        }
    });
});

// on Load Store Book Child
$(document).ready(()=>{
    $.ajax({
        type: "POST",
        url: "../controller/QueryStoreProduct.php",
        data: {mess: "allBookChildProduct"},
        success: function (data) {
            if (data == 'false') {
                console.log("No data");
            } else {
                $("#frameBookChildProduct").html(data);
            }
        }
    });
});
//Chart
var xValues = [100,200,300,400,500,600,700,800,900,1000];

new Chart("myChart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
            data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
            borderColor: "red",
            fill: false
        }, {
            data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
            borderColor: "green",
            fill: false
        }, {
            data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
            borderColor: "blue",
            fill: false
        }]
    },
    options: {
        legend: {display: false}
    }
});

    $('#carousel-related-product').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 3,
    dots: true,
    responsive: [{
    breakpoint: 1024,
    settings: {
    slidesToShow: 3,
    slidesToScroll: 3
}
},
{
    breakpoint: 600,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 3
}
},
{
    breakpoint: 480,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 3
}
}
    ]
});
