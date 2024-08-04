<?php

include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>Hotel blue bird</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/roombook.css">
    <style>
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
    </style>
    <style >
        /* General styling */
body {
    font-family: 'Helvetica Neue', Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
    color: #333;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Title Styling */
.title-w3-agileits {
    font-size: 36px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 50px;
    color: #333;
}

.title-black-wthree {
    color: #000;
}

/* Team Section */
.team {
    background-color: #fff;
    padding: 60px 0;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Responsive Tabs List */
.resp-tabs-list {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    margin-bottom: 40px;
    gap: 20px;
}

.resp-tabs-list li {
    cursor: pointer;
    transition: transform 0.3s ease;
    position: relative;
}

.resp-tabs-list li img {
    border-radius: 50%;
    width: 120px;
    height: 120px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.resp-tabs-list li:hover img {
    transform: scale(1.1);
}

.resp-tabs-list li:hover .team-details {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.team-details {
    position: absolute;
    bottom: -200px;
    left: 50%;
    transform: translateX(-50%) translateY(10px);
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 1;
}

/* Team Info */
.team-Info-agileits h4 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #333;
}

.team-Info-agileits span {
    display: block;
    font-size: 16px;
    color: #777;
    margin-bottom: 20px;
}

.team-Info-agileits p {
    font-size: 14px;
    color: #666;
    margin-bottom: 20px;
    line-height: 1.6;
}

/* Social Icons */
.social-bnr-agileits {
    margin-top: 20px;
}

.social-icons3 {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 10px;
}

.social-icons3 li {
    margin: 0 5px;
}

.social-icons3 li a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    color: #fff;
    border-radius: 50%;
    transition: background-color 0.3s ease;
}

.social-icons3 li a.facebook {
    background-color: #3b5998;
}

.social-icons3 li a.twitter {
    background-color: #55acee;
}

.social-icons3 li a.googleplus {
    background-color: #dd4b39;
}

.social-icons3 li a.rss {
    background-color: #ff6f61;
}

.social-icons3 li a:hover {
    opacity: 0.8;
}

/* Media Queries */
@media (min-width: 768px) {
    .team-details {
        width: 350px;
    }

    .resp-tabs-list li img {
        width: 150px;
        height: 150px;
    }
}

    </style>
    <style>
        
        #contactus {
            text-align: center; 
        }

        
        .social {
            margin-bottom: 10px;
        }

        .social i {
            font-size: 14px; 
            margin: 0 10px;
            color: #7FFF00; 
        }

        
        #contactus p {
            font-size: 30px; 
            color: #7FFF00; 
            margin-bottom: 20px; 
        }
    </style>
    <style >
        /* General styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}

/* Title Styling */
.title-w3-agileits {
    font-size: 36px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 40px;
    color: #333;
}

/* Advantages Main Section */
.advantages-main {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Advantage Grid */
.advantage-grid {
    margin-bottom: 30px;
    width: 100%;
}

.left-w3ls,
.right-w3ls {
    padding: 20px;
    background-color: #f1f1f1;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px; /* Add space between blocks */
}

@media (max-width: 768px) {
    .left-w3ls,
    .right-w3ls {
        margin: 0 0 20px;
    }
}

/* Advantage Block */
.advantage-block {
    text-align: center;
}

.advantage-block i {
    font-size: 50px;
    color: #ff6f61;
    margin-bottom: 20px;
}

.advantage-block h4 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.advantage-block p {
    font-size: 16px;
    margin-bottom: 10px;
    color: #666;
}

.advantage-block p i {
    color: #ff6f61;
    margin-right: 10px;
}

/* Animation Classes (Optional) */
.wow {
    visibility: hidden;
}

.bounceInLeft,
.zoomIn {
    animation-duration: 1s;
    animation-fill-mode: both;
    visibility: visible;
}

.bounceInLeft {
    animation-name: bounceInLeft;
}

@keyframes bounceInLeft {
    0%, 60%, 75%, 90%, 100% {
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    0% {
        opacity: 0;
        transform: translate3d(-3000px, 0, 0);
    }
    60% {
        opacity: 1;
        transform: translate3d(25px, 0, 0);
    }
    75% {
        transform: translate3d(-10px, 0, 0);
    }
    90% {
        transform: translate3d(5px, 0, 0);
    }
    100% {
        transform: none;
    }
}

.zoomIn {
    animation-name: zoomIn;
}

@keyframes zoomIn {
    0% {
        opacity: 0;
        transform: scale3d(0.3, 0.3, 0.3);
    }
    50% {
        opacity: 1;
    }
}

    </style>
   <style>
        
        form {
            margin: 20px;
            padding: 20px;
            background-color: #8FBC8F;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: blueviolet;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

    <style>
        
        .image-container {
            display: flex;
          
            align-items: left;
            margin-top: 20px;
            margin-left: 5px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 50px;

             background-color: #C27BA0;
              transition: 2s;

        }
        .image-container img {
           
            width: calc(30% - 10px); 
            margin: 10px; 
            max-width: 100%;
        }

        .image-container .hhh img {
        width: 300px; 
        height: 200px;
        margin: 20px;  
        transition: transform 0.1s ease; 
        }
        .image-container .hhh img:hover {
        transform: scale(2.1);
    }

        
    </style>
    <style>
      /* Styles for selected stars */
.fa-star.selected {
    color: yellow;
}

/* Styles for unselected stars */
.fa-star {
    color: gray;
}

    </style>

</head>

<body>
  <nav>
    <div class="logo">
      <img class="bluebirdlogo" src="./image/bluebirdlogo.png" alt="logo">
      <p>BLUEBIRD</p>
    </div>
    <ul>
      <li><a href="#firstsection">Home</a></li>
      <li><a href="#secondsection">Rooms</a></li>
      <li><a href="#thirdsection">Facilites</a></li>
      <li><a href="#Gallery">Gallery</a></li>
      <li><a href="#contactus">contact us</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
    </ul>
  </nav>

  <section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="./image/hotel1.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/hotel2.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/hotel3.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/hotel4.jpg">
        </div>

        <div class="welcomeline">
          <h1 class="welcometag">Welcome to heaven on earth</h1>
        </div>

      <!-- bookbox -->
      <div id="guestdetailpanel">
           
        

        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest information</h4>
                    <input type="text" name="Name"  pattern="[A-Za-z]+" title="please enter alphabetic characters only"  placeholder="Enter Full name" required>
                    <input type="email" name="Email" placeholder="Enter Email" required>

                    <?php
                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    ?>

                    <select name="Country" class="selectinput">
						<option value selected >Select your country</option>
                        <?php
							foreach($countries as $key => $value):
							echo '<option value="'.$value.'">'.$value.'</option>';
                            //close your tags!!
							endforeach;
						?>
                    </select>
                    <input type="text" name="Phone" pattern="[0-9]+" title="please enter numeric only"  placeholder="Enter  phone" required>
                </div>

                <div class="line"></div>

                    <div class="reservationinfo">
        <h4>Reservation information</h4>
        <select name="RoomType" class="selectinput" id="roomType" required>
            <option value="" selected>Type Of Room</option>
            <option value="Superior Room">SUPERIOR ROOM</option>
            <option value="Deluxe Room">DELUXE ROOM</option>
            <option value="Guest House">GUEST HOUSE</option>
            <option value="Single Room">SINGLE ROOM</option>
        </select>
        <select name="Bed" class="selectinput" id="bedType" required>
            <option value="" selected>Bedding Type</option>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
            <option value="Quad">Quad</option>
            <option value="None">None</option>
        </select>
        <select name="NoofRoom" class="selectinput" id="noOfRoom" required>
            <option value="" selected>No of Room</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <select name="Meal" class="selectinput" id="mealType" required>
            <option value="" selected>Meal</option>
            <option value="Room only">Room only</option>
            <option value="Breakfast">Breakfast</option>
            <option value="Half Board">Half Board</option>
            <option value="Full Board">Full Board</option>
        </select>
        <div class="datesection">
            <span>
                <label for="cin"> Check-In</label>
                <input name="cin" type="date" id="checkIn" required>
            </span>
            <span>
                <label for="cout"> Check-Out</label>
                <input name="cout" type="date" id="checkOut" required>
            </span>
        </div>
    </div>
    <div class="paymentinfo">
        <h4>Payment Information</h4>
        <label for="totalPayment">Total Payment:</label>
        <input name="totalPayment" type="text" id="totalPayment" readonly>
    </div>
     <div class="paymentinfo">
        
    
        <select name="PaymentMethod" class="selectinput" id="paymentMethod">
            <option value="" selected>Select Payment Method</option>
            
            <option value="Card">Card</option>
        </select>

        

        <div id="cardDetails" class="payment-details">
            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" name="cardNumber" pattern="[0-9]+" title="please enter  numeric only"  placeholder="Enter  card cardNumber" required>
            <label for="expiryDate">Expiry Date:</label>
            <input type="month" id="expiryDate" name="expiryDate" required>
            <label for="cvv">CVV:</label >
            <input type="text" id="cvv" name="cvv" pattern="[0-9]+" title="please enter  numeric only"  placeholder="Enter cvv" required>
        </div>
    </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
            </div>
        </form>
       

        <!-- ==== room book php ====-->
        <?php       
            if (isset($_POST['guestdetailsubmit'])) {
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Country = $_POST['Country'];
                $Phone = $_POST['Phone'];
                $RoomType = $_POST['RoomType'];
                $Bed = $_POST['Bed'];
                $NoofRoom = $_POST['NoofRoom'];
                $Meal = $_POST['Meal'];
                $cin = $_POST['cin'];
                $cout = $_POST['cout'];

                if($Name == "" || $Email == "" || $Country == ""){
                    echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
                }
                else{
                    $sta = "NotConfirm";
                    $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
                    $result = mysqli_query($conn, $sql);

                    
                        if ($result) {
                            echo "<script>swal({
                                title: 'Reservation successful',
                                icon: 'success',
                            });
                        </script>";
                        } else {
                            echo "<script>swal({
                                    title: 'Something went wrong',
                                    icon: 'error',
                                });
                        </script>";
                        }
                }
            }
            ?>
          </div>

    </div>
  </section>
    
  <section id="secondsection"> 
    <img src="./image/homeanimatebg.svg">
    <div class="ourroom">
      <h1 class="head">≼ Our room ≽</h1>
      <div class="roomselect">
        <div class="roombox">
          <div class="hotelphoto h1"></div>
          <div class="roomdata">
            <h2>Superior Room</h2>
            <div class="services">
              <h2> RS-999/DAY</h2>
            </div>  
            <div class="rating-box">
    <div class="stars">
        <i class="fa-solid fa-star selected"></i>
        <i class="fa-solid fa-star selected"></i>
        <i class="fa-solid fa-star selected"></i>
        <i class="fa-star"></i>
        <i class="fa-star"></i>
    </div>
</div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h2"></div>
          <div class="roomdata">
            <h2>Delux Room</h2>
            <div class="services">
              <h2> RS-899/DAY</h2>
            </div>
            <div class="rating-box">
    <div class="stars">
        <i class="fa-solid fa-star selected"></i>
        <i class="fa-solid fa-star selected"></i>
        <i class="fa-solid fa-star selected"></i>
        <i class="fa-star"></i>
        <i class="fa-star"></i>
    </div>
</div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h3"></div>
          <div class="roomdata">
            <h2>Guest Room</h2>
            <div class="services">
              <h2> RS-1099/DAY</h2>
            </div>
            <div class="rating-box">
    <div class="stars">
        <i class="fa-solid fa-star selected"></i>
        <i class="fa-solid fa-star selected"></i>
        <i class="fa-solid fa-star selected"></i>
        <i class="fa-star"></i>
        <i class="fa-star"></i>
    </div>
</div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h4"></div>
          <div class="roomdata">
            <h2>Single Room</h2>
            <div class="services">
              <h2> RS-599/DAY</h2>
            </div>
             <div class="rating-box">
    <div class="stars">
        <i class="fa-solid fa-star selected"></i>
        <i class="fa-solid fa-star selected"></i>
        <i class="fa-solid fa-star selected"></i>
        <i class="fa-star"></i>
        <i class="fa-star"></i>
    </div>
</div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--sevices-->
<div class="advantages">
    <div class="container">
        <div class="advantages-main">
                <h3 class="title-w3-agileits">Our Services</h3>
           <div class="advantage-bottom">
             <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
                <div class="advantage-block ">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                    <h4>Stay First, Pay After! </h4>
                    <p>Our fully air conditioned and sound proofed function room/hall is available on prior booking arrangements.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>
                    
                </div>
             </div>
             <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
                <div class="advantage-block">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <h4>24 Hour Restaurant</h4>
                    <p>Great food and memorable experience and Amazing food and atmosphere and Your Best Nyama.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>24 hours room service</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>24-hour Concierge service</p>
                </div>
             </div>
            <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--//sevices-->

  <section id="thirdsection">
    <h1 class="head">≼ Facilities ≽</h1>
    <div class="facility">
      <div class="box">
        <h2>Swiming pool</h2>
      </div>
      <div class="box">
        <h2>Spa</h2>
      </div>
      <div class="box">
        <h2>24*7 Restaurants</h2>
      </div>
      <div class="box">
        <h2>24*7 Gym</h2>
      </div>
      <div class="box">
        <h2>Heli service</h2>
      </div>
    </div>
  </section>
  <section id="Gallery">
    <h1 class="head">≼ Gallery ≽</h1>

    <section class="image-container">
        <div class="hhh">
    <img src="./image/hotel1.jpg" alt="Image 1">
    <img src="./image/swimingpool.jpg" alt="Image 2">
    <img src="./image/hotel3.jpg" alt="Image 3">
    <img src="./image/hotel2.jpg" alt="Image 4">
    <img src="./image/adminhotel2.jpg" alt="Image 4">

    <img src="./image/swimingpool1.jpg" alt="Image 4">
    <img src="./image/slider1.jpg" alt="Image 4">
    <img src="./image/contact2.jpg" alt="Image 4">
    <img src="./image/bookhall2.png" alt="Image 4">
    <img src="./image/bookhall.jpg" alt="Image 4">
    <img src="./image/partyhall2.jpg" alt="Image 4">
    <img src="./image/hotel3.jpg" alt="Image 1">
    </div>
    <!-- Add more images as needed -->
     </section>

   </section> 

 

<!-- visitors -->
    <div class="w3l-visitors-agile" >
        <div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">What other visitors experienced</h3> 
        </div>
        <div class="w3layouts_work_grids">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="w3layouts_work_grid_left">
                                <img src="image/Allu.jpeg" alt=" " class="img-responsive" />
                                
                            </div>
                            <div class="w3layouts_work_grid_right">
                                <h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                Worth to come again
                                </h4>
                                <p>Lovely hotel. Very comfortable. View from the largest Wildlife Park in Africa. Breakfast was really good. Would definitely stay again.I also The Wildlife park. </p>
                                <h5>Allu Arjun</h5>
                                <p>INDIA</p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                        <li>
                            <div class="w3layouts_work_grid_left">
                                <img src="image/Amitab.jpeg" alt=" " class="img-responsive" />
                                
                            </div>
                            <div class="w3layouts_work_grid_right">
                                <h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                Worth to come again
                                </h4>
                                <p>he staff were very approachable and helpful. The breakfast was good. They arranged for a taxi to pick us up from the airport and then back again at the end of our stay. The suite was very good with comfortable furniture and the bed was comfortable too. We would definitely stay here again. </p>
                                <h5>Amitabh Bachchan</h5>
                                <p>INDIA</p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                        <li>
                            <div class="w3layouts_work_grid_left">
                            <img src="image/nirajchipra.jpeg" alt=" " class="img-responsive" />
                                
                            </div>
                            <div class="w3layouts_work_grid_right">
                                <h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                Worth to come again
                                </h4>
                                <p>I enjoyed my stay at your hotel. The breakfast was excellent. I must comment on your director of rooms -Romana. I had a small problem and she handled it with grace, charm and professionalism.. She is a credit to your organization. </p>
                                <h5>Neeraj Chopra </h5>
                                <p>INDIA</p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                        <li>
                            <div class="w3layouts_work_grid_left">
                                <img src="image/barak.jpeg" alt=" " class="img-responsive" />
                                
                            </div>
                            <div class="w3layouts_work_grid_right">
                                <h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                Worth to come again
                                </h4>
                                <p>he hotel stay was very pleasant and comfortable. The staff was very polite and helpful, the location was very convenient for getting around and many activities and being in the Safari jeep,seeing the Wildlifes. If we were to travel to Kenya again, we would definitely stay there again! </p>
                                <h5>Barak Obama</h5>
                                <p>United States Of America</p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>  
    </div>
  <!-- visitors -->

  <h1 class="head">≼ Contact US ≽</h1>

  

<form action="https://formspree.io/f/meqyroaz"
  method="POST"  id="contactForm">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" pattern="[A-Za-z]+" title="Please enter alphabetic characters only" required>
    <label for="phone">Phone NO..:</label>
    <input type="text" id="phone" name="phone"  pattern="[0-9]+" title="Please enter numeric  value only"required>
    

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <input type="submit" value="Submit">
</form>

 

  <section id="contactus">
    <div class="social">
       <a href="https://www.facebook.com/yourpage" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="https://www.instagram.com/yourpage" target="_blank"><i class="fab fa-instagram"></i></a>
    <a class="contact-link" href="mailto:youremail@example.com"><i class="fas fa-envelope"></i></a>
      
 
    </div>
    <div class="rating-box">
    <header>How was your experience</header>
    <div class="stars">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
    </div>
</div>

<script>
    // Get all the stars
    const stars = document.querySelectorAll('.fa-star');

    // Add click event listener to each star
    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            // Remove 'fa-solid' class from all stars
            stars.forEach(s => s.classList.remove('fa-solid'));

            // Add 'fa-solid' class to stars up to the clicked star
            for (let i = 0; i <= index; i++) {
                stars[i].classList.add('fa-solid');
            }

            // Show the popup message
            alert("Thank you for rating!");
        });
    });
</script>

 <script>
        const roomPrices = {
            "Superior Room": 999,
            "Deluxe Room": 899,
            "Guest House": 1099,
            "Single Room": 550
        };

        const bedPrices = {
            "Single": 200,
            "Double": 400,
            "Triple": 600,
            "Quad": 800,
            "None": 0
        };

        const mealPrices = {
            "Room only": 0,
            "Breakfast": 100,
            "Half Board": 200,
            "Full Board": 400
        };

        function calculateTotalPayment() {
            const roomType = document.getElementById('roomType').value;
            const bedType = document.getElementById('bedType').value;
            const noOfRoom = parseInt(document.getElementById('noOfRoom').value) || 0;
            const mealType = document.getElementById('mealType').value;

            const roomPrice = roomPrices[roomType] || 0;
            const bedPrice = bedPrices[bedType] || 0;
            const mealPrice = mealPrices[mealType] || 0;

            const totalPrice = (roomPrice + bedPrice + mealPrice) * noOfRoom;
            document.getElementById('totalPayment').value = `${totalPrice.toFixed(2)}`;
        }

        document.querySelectorAll('.selectinput').forEach(select => {
            select.addEventListener('change', calculateTotalPayment);
        });

        document.getElementById('checkIn').addEventListener('change', calculateTotalPayment);
        document.getElementById('checkOut').addEventListener('change', calculateTotalPayment);
    </script>


    <p>bluebird@gmail.com </p>
    <p>6203003619 </p>
    <iframe
    width="60"
    height="45"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/place?q=ADDRESS_HERE&key=YOUR_API_KEY_HERE" allowfullscreen>
</iframe>
    
  </section>
</body>

<script>

    var bookbox = document.getElementById("guestdetailpanel");

    openbookbox = () =>{
      bookbox.style.display = "flex";
    }
    closebox = () =>{
      bookbox.style.display = "none";
    }
</script>
</html>
