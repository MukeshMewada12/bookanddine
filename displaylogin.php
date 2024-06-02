<?php
session_start();


?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="./globalStyles.css">
        <link rel="stylesheet" href="./reset.css">
        <link rel="stylesheet" href="./components.css">
        <link rel="stylesheet" href="./menu.css"> 
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./home.css">
        <style>
table, th, td {
  border: 3px solid black;
  border-style: solid;
  border-collapse: collapse;
  
}
th, td {
  background-color: white;
  column-gap: 20px;

}

</style>
</head>
<body >
     <!-- Navigation Section-->
     <div class="nav">
    <div class="container">
        <div class ="nav__wrapper">
            <a href="./index.html" class="logo">
                <img src="./images/3333.png" alt="Book'n Dine">  
            </a>
            <nav>
                <div class="nav__icon">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                   width="24"
                   height="24"
                   viewBox="0 0 24 24"
                   fill="none"
                   stroke="currentColor"
                   stroke-width="2"
                   stroke-linecap="round"
                   stroke-linejoin="round"
                   >
                        <line x1="3" y1="12" x2="21" y2="12" />
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <line x1="3" y1="18" x2="21" y2="18" />
                        </svg>
                </div>
                <div class="nav__bgOverlay"></div>
                <ul class="nav__list">
                    <div class="nav__close">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        >
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </div>
                    <div class="nav__list__wrapper">
                        <li><a href="./index.php" class="nav__link">Home</a> </li> 
                        <li><a href="./booking2.html" class="btn primary-btn">Book Table</a> </li>
                        <li><a href="./displayfood.php" class="btn primary-btn">Order Placed</a> </li>
                        <li><a href="./logout.php" class="btn primary-btn">LogOut</a> </li>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
    <!--End Nav Section -->
    <div class="main-div">
       <center> <h1> </h1>
       
        <div class="container">
            <h2 class="page__title__text">
                <br>
            My Booked Tables  in BOOKNDINE
            <br><br>
            </h2>
        </div>
    
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th> id </th>
                            <th> First Name </th>
                            <th> Last Name </th>
                            <th> Email </th>
                            <th> Table Type </th>
                            <th> Guest Number </th>
                            <th> Placement </th>
                            <th> Date </th>
                            <th> Arrival Time </th>
                            <th> Departure Time </th>
                            <th> Mobile Number </th>
                            <th> Note </th>
                           
                        </tr>
                    </thead>

                    <tbody>

                         <?php

                        include 'connection.php';
                        
                     // $_SESSION['email'] = $email_pass['email'];
                       
                       
                        $selectquery = " select * from booktable " ;

                        $query = mysqli_query($con,$selectquery);

                        $nums = mysqli_num_rows($query);
                    
                        while($res = mysqli_fetch_assoc($query))
                        {
                        ?>  

                        <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['firstName']; ?></td>
                        <td><?php echo $res['lastName']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['tableType']; ?></td>
                        <td><?php echo $res['guestNumber']; ?></td>
                        <td><?php echo $res['placement']; ?></td>
                        <td><?php echo $res['date']; ?></td>
                        <td><?php echo $res['arrivaltime']; ?></td>
                        <td><?php echo $res['departuretime']; ?></td>
                        <td><?php echo $res['mobilenumber']; ?></td>
                        <td><?php echo $res['note']; ?></td>
                        <td>
                       
                    </tr>
                    <?php
                        }
                   
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </center>

<br><br><br><br><br>
<!--Footer-->
<footer>
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__col1">
                    <div class="footer__logo">
                        <img src="./images/3333.png" alt="Book'n Dine">  
                    </div>
                    <p class="footer__desc">
                        Fresh and delicious traditional 
                        Indian food to delight the 
                        whole family
                    </p>
                    <div class="footer__socials">
                        <h4 class="footer__socials__title">Follow us</h4>
                        <ol>
                            <li>
                                <a href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        >
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                     </svg>  
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                  </svg>
                                </a> 
                            </li>
                            <li>
                                <a href="#">
                                    <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                  </svg>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="footer__col2">
                    <h3 class="footer__text__title">
                        Links
                    </h3>
                    <ol class="footer__text">
                        <li>
                            <a href="./index.php">Home</a>
                        </li>
                        <li>
                            <a href="./menu.php">Menu</a>
                        </li>
                        <li>
                            <a href="booking2.html">Book Table</a>
                        </li>
                        <li>
                            <a href="./about.html">About Us</a>
                        </li>
                        <li>
                            <a href="./contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ol>
                </div>
                <div class="footer__col3">
                    <h3 class="footer__text__title">
                        Support
                    </h3>
                    <ol class="footer__text">
                        <li>
                            <a href="./contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="#">Support Center</a>
                        </li>
                        <li>
                            <a href="#">Feedback</a>
                        </li>
                    </ol>
                </div>
                <div class="footer__col4">
                    <h3 class="footer__text__title">
                        Contact
                    </h3>
                    <ol class="footer__text">
                        <li>
                            <a href="tel:+917417545740">+917417545740</a>
                        </li>
                        <li>
                            <a href="mailto:mca22.himanshuporwal@bvicam.in">mca22.himanshuporwal@bvicam.in</a>
                        </li>
                        <li>
                            <a href="#">GEC Circle, Delhi, Mumbai, Banglore, Chennai </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </footer>
   
    <!--End Footer-->









    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>