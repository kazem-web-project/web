<?php
// edit account in line 120 and ..
session_start();

function insert_nav(){
    echo "inside insert_nav";
    if(isset($_SESSION["username"])){
        if(isset($_SESSION["is_admin"])){
            if($_SESSION["is_admin"]=="1"){
                insert_nav_admin();
            }else{
                insert_nav_user();
            }
        }
    }else{
        insert_nav_guest();
    }
}

function insert_nav_guest(){
    echo "inside insert_nav_guest";
    $first_name = "Guest";
    $last_name = "User";
    $username = "Guest";
    $element = "
    <nav class=\"navbar navbar-dark bg-dark fixed-top\">
      <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">Nirvana Hotel</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasDarkNavbar\" aria-controls=\"offcanvasDarkNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"offcanvas offcanvas-end text-bg-dark\" tabindex=\"-1\" id=\"offcanvasDarkNavbar\" aria-labelledby=\"offcanvasDarkNavbarLabel\">
          <div class=\"offcanvas-header\">
            <h5 class=\"offcanvas-title\" id=\"offcanvasDarkNavbarLabel\">$first_name $last_name</h5>
            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
          </div>
          <div class=\"offcanvas-body\">
            <ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Room Reservation</a>
              </li>
              <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">News</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">About</a>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Log In
                </a>
                <ul class=\"dropdown-menu dropdown-menu-dark\">
                  <li><a class=\"dropdown-item\" href=\"index.php\">Sign In</a></li>
                  <li><a class=\"dropdown-item\" href=\"register.php\">Sign Up</a></li>
                  
                    
                </ul>
              </li>
            </ul>
            <form class=\"d-flex mt-3\" role=\"search\">
              <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
              <button class=\"btn btn-success\" type=\"submit\">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- end of nav bar Code -->
    ";
    echo $element;

}
    
function insert_nav_user(){
    echo "inside insert_nav_guest";
    $first_name = $_SESSION["first_name"];
    $last_name = $_SESSION["last_name"];
    $username = $_SESSION["username"];
    $element = "
    <nav class=\"navbar navbar-dark bg-dark fixed-top\">
      <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">Nirvana Hotel</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasDarkNavbar\" aria-controls=\"offcanvasDarkNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"offcanvas offcanvas-end text-bg-dark\" tabindex=\"-1\" id=\"offcanvasDarkNavbar\" aria-labelledby=\"offcanvasDarkNavbarLabel\">
          <div class=\"offcanvas-header\">
            <h5 class=\"offcanvas-title\" id=\"offcanvasDarkNavbarLabel\">$first_name $last_name</h5>
            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
          </div>
          <div class=\"offcanvas-body\">
            <ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Room Reservation</a>
              </li>
              <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">News</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">About</a>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Account
                </a>
                <ul class=\"dropdown-menu dropdown-menu-dark\">
                  <li><a class=\"dropdown-item\" href=\"index.php\">Switch User</a></li>
                  <li><a class=\"dropdown-item\" href=\"inc/delete_session.php\">Log out</a></li>
                  <li>
                    <hr class=\"dropdown-divider\">
                    </li>
                    <li><a class=\"dropdown-item\" href=\"#\">Edit Account</a></li>
                                        
                </ul>
              </li>
            </ul>
            <form class=\"d-flex mt-3\" role=\"search\">
              <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
              <button class=\"btn btn-success\" type=\"submit\">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- end of nav bar Code -->
    ";
    echo $element;


}

function insert_nav_admin(){
    echo "inside insert_nav_admin";
    $first_name = $_SESSION["first_name"];
    $last_name = $_SESSION["last_name"];
    $username = $_SESSION["username"];
    $element = "
    <nav class=\"navbar navbar-dark bg-dark fixed-top\">
      <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">Nirvana Hotel</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasDarkNavbar\" aria-controls=\"offcanvasDarkNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"offcanvas offcanvas-end text-bg-dark\" tabindex=\"-1\" id=\"offcanvasDarkNavbar\" aria-labelledby=\"offcanvasDarkNavbarLabel\">
          <div class=\"offcanvas-header\">
            <h5 class=\"offcanvas-title\" id=\"offcanvasDarkNavbarLabel\">$first_name $last_name</h5>
            <h4 class=\"offcanvas-title\" id=\"offcanvasDarkNavbarLabel\" style=\"color:red;\">You're Admin!</h4>
            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
          </div>
          <div class=\"offcanvas-body\">
            <ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Room Reservation</a>
              </li>
              <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">News</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">About</a>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Account
                </a>
                <ul class=\"dropdown-menu dropdown-menu-dark\">
                  <li><a class=\"dropdown-item\" href=\"index.php\">Switch User</a></li>
                  <li><a class=\"dropdown-item\" href=\"inc/delete_session.php\">Log out</a></li>
                  <li>
                    <hr class=\"dropdown-divider\">
                    </li>
                    <li><a class=\"dropdown-item\" href=\"#\">Edit Account</a></li>
                                        
                </ul>
              </li>
            </ul>
            <form class=\"d-flex mt-3\" role=\"search\">
              <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
              <button class=\"btn btn-success\" type=\"submit\">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- end of nav bar Code -->
    ";
    echo $element;


}


?>