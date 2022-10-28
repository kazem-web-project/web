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