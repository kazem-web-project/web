<?php

function component($room_id, $price, $image){
    $old_price = $price +10;
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"index.php\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img src=\"res/img/$image\" alt=\"Room Image\" class=\"img-fluid card-img-top\">
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
                <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Book  <i class=\"fa-solid fa-cart-shopping\"></i></button>
            </div>
        </div>
    </form>

</div>
    
    ";
    echo $element;
}