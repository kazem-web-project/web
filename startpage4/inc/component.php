<?php

function component($room_id, $price, $image){
    $url = "reserve_room.php?room_id=".$room_id."&price=".$price;
    $old_price = $price +10;
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"#\" method=\"get\">
        <div class=\"card shadow\">
            <div>
                <img src=\"res/img/$image\" alt=\"Room Image\" class=\"img-fluid card-img-top myimage\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Room $room_id</h5>
                <h6>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"far fa-star\"></i>
                </h6>
                <p class=\"card-text\">
                    Some quick example text to build on the card.                                
                </p>
                <h5>
                    <small><s class=\"text-secondary\">€$old_price</s></small>
                    <span class=\"price\">€$price</span>
                </h5>
                <a href=\"$url\" <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"room_id=room_$room_id\">Book  <i class=\"fa-solid fa-cart-shopping\"></i></button></a>
            </div>
        </div>
    </form>

</div>
    
    ";
    echo $element;
}


function news_component($news_id,$news_image,$news_title,$news_text,$news_date){
    // TODO: implement news divs!


    $element = "
    <div class=\"card shadow\">
    <form>
        <div>
            <img src=\"res/img/$news_image\" alt=\"$news_title\" class=\"img-fluid card-img-top myimage\">
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">$news_title</h5>
            <p class=\"card-text\">
                <small>{$news_text} created on: {$news_date}</small>
            </p>
        </div>
    </form>
    <br>
    </div>
    ";
    echo $element;

}

function news_component_admin($news_id,$news_image,$news_title,$news_text,$news_date){

    $element = "
    <div class=\"card shadow\">
    <form action=\"./inc/delete_news.php?news_id=$news_id\" method=\"post\">
        <div>
        <img src=\"res/img/$news_image\" alt=\"$news_title\" class=\"img-fluid card-img-top myimage\">
        </div>
            <div class=\"card-body\">
            <h5 class=\"card-title\">$news_title</h5>
            <p class=\"card-text\">
                <small>{$news_text} created on: {$news_date}</small>
            </p>
            <button type=\"submit\" class=\"btn btn-danger float-end\" name=\"news_$news_id\">Delete</button>
        </div>
    </form>
    <br>
    <div>
    ";

    echo $element;
}

function insert_upload_form(){
    $element = "
    <form action=\"./inc/upload.php\" method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"mb-3\">
            <label for=\"title\" class=\"form-label\">Title:</label>
            <input type=\"text\" class=\"form-control\" id=\"title\" placeholder=\"Title of the News\" name=\"title\">
        </div>
        <div class=\"mb-3\">
            <label for=\"textarea\" class=\"form-label\">input your text below:</label>
            <textarea class=\"form-control\"id=\"textarea\" rows=\"5\" name=\"text\"></textarea>
        </div>
        <div class=\"mb-3\">
            <label for=\"formFile\" class=\"form-label\">Default file input example</label>
            <input class=\"form-control\" type=\"file\" id=\"formFile\" name=\"file\">
        </div>
        <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">UPLOAD</button>
    </form>
    ";

    echo $element;
}

function reserveComponent($username,$room_id, $from_date, $to_date,$price,  $has_animal, $has_parking, $has_breakfast, $reserved_on, $is_approved){
        // TODO: IMPLEMENT
    
}