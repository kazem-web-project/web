<?php

use function PHPSTORM_META\elementType;

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
    //echo $username,$room_id, $from_date, $to_date,$price,  $has_animal, $has_parking, $has_breakfast, $reserved_on, $is_approved;
    
    $approved_label = ($is_approved) ? 'Approved' : '';
    $breakfast_label = ($has_breakfast) ? 'checked' : '';
    $animal_label = ($has_animal) ? 'checked' : '';
    $parking_label = ($has_parking) ? 'checked' : '';
    $approved_switch_label = ($is_approved) ? 'checked' : '';
    $from_date_label = substr($from_date, 0, 10);
    $to_date_label = substr($to_date, 0, 10);


    $element = "
<div class=\"row text-center py-2\">
    <div class=\"col-md-12 col-sm-12 my-12 my-md-12\">
    <form action=\"./inc/approve.php\" method=\"get\">
        <div class=\"card shadow\">
            <div>

            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Room $room_id</h5>
                <h6>


                    <ol class=\"list-group list-group\">
                        <li class=\"list-group-item  justify-content-between align-items-start\">
                            <span id=\"blue-approved\" class=\"badge bg-primary rounded-pill position-absolute top-0 end-0\">$approved_label</span>
                            <div class=\"ms-2 me-auto\">

                                <ul class=\"list-group list-group-horizontal\">
                                    <li class=\"list-group-item flex-fill \">
                                        <p class=\"card-text\">
                                        <div>Username: $username</div>
                                        <input type=\"hidden\" id=\"custId\" name=\"username\" value=\"$username\">
                                        <div>Room Number: $room_id</div>

                                        <div>Reserved On: $reserved_on</div>
                                        <input type=\"hidden\" id=\"custId\" name=\"reserved_on\" value=\"$reserved_on\">

                                        </p>
                                    </li>
                                    <li class=\"list-group-item flex-fill \">
                                        <p>
                                        <div><input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\" $breakfast_label>
                                            <!--checked-->
                                            Breakfast
                                        </div>
                                        <div><input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\" $animal_label>
                                            Animal</div>
                                        <div><input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\" $parking_label>
                                            Parking</div>
                                        </p>
                                    </li>
                                    <li class=\"list-group-item flex-fill \">
                                        <p>
                                        <div>From Date: $from_date_label </div>
                                        <div>To Date: $to_date_label</div>
                                        <div>Price: $price €</div>
                                        </p>
                                    </li>
                                </ul>



                                <div class=\"row justify-content-evenly\">
                                    <div class=\"col-4\">
                                        <div class=\"form-check form-switch approved\">
                                            <span id=\"approvedText\">Approve</span>
                                            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"flexSwitchCheckChecked\" name=\"approve\" $approved_switch_label>
                                            <!--checked-->
                                        </div>
                                    </div>
                                    <div class=\"col-4\">
                                        <button type=\"submit\" class=\"btn btn-danger my-3\" >Save <i class=\"fa-solid fa-cart-shopping\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>
            </div>
        </div>
    </form>

    </div>   
</div> 
    ";

    echo $element;
}