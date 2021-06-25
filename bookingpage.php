<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="stylebooking.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Molengo&family=Tangerine:wght@700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top contain">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-item nav-link active" href="home.html">Home <span class="sr-only">(current)</span></a>
                 <!--     <a class="nav-item nav-link active" href="#">Portfolio</a> -->
                    <a class="nav-item nav-link active" href="menu.html">Menu</a>
                    <a class="nav-item nav-link active" href="about2.html">About</a>
                  <!--    <a class="nav-item nav-link active" href="#">Blog</a> -->
                    <a class="nav-item nav-link active" href="contact.html">Contact us</a>
                    <a class="nav-item nav-link active booking" href="bookingpage.php">Book Table</a>
                </div>
            </div>
        </nav><hr style="border-top: 1px solid gray">
    <h1>Reservation</h1><p><a href="home.html">Home &#10136;</a> <a href="contact.html">Contact</a></p>
    </div>
    <div class="reservation">
        <h1>Make Reservation</h1>
        <form action="booking.php" method="POST">
            <label for=""><b> Name :</b></label>
            <input type="text" name="cname" placeholder="Enter Your Name" required> <br>
            <label for=""><b> Email :</b></label>
            <input type="email" name="email" placeholder="XYZ@gmail.com" required><br>
            <label for="mob"><b> Phone No. :</b></label>
            <input type="tel" name="mob" placeholder="0000011111" required ><br>
            <label for=""><b> Date :</b></label>
            <input type="date" name="date" placeholder="10-06-2020" required><br>
            <label for=""><b> Persons :</b></label>
            <select name="person" id="person" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br>
            <label for=""><b> Time :</b></label>
            <select name="timing" id="timing" required>
                <option value="10">10:00 AM</option>
                <option value="11">11:00 AM</option>
                <option value="12">12:00 AM</option>
                <option value="13">1:00 Pm</option>
                <option value="14">2:00 PM</option>
                <option value="15">3:00 Pm</option>
                <option value="16">4:00 PM</option>
                <option value="17">5:00 Pm</option>
                <option value="18">6:00 PM</option>
                <option value="19">7:00 Pm</option>
                <option value="20">8:00 PM</option>
                <option value="21">9:00 Pm</option>
            </select><br>
            <label for=""><b> Preference (Optinal) :</b></label>
            <select name="Preference" id="Preference">
                <option value="couple">Couple</option>
                <option value="family">Family</option>
            </select><br>
            <label for=""><b> Child (optional) :</b></label>
            <select name="child" id="child">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br>
            <button value="submit" name="submit" >Make A Reservation</button>
        </form>
    </div>



    <div class="container-fluid bottom">
        <div class="bottom2">
          <div class="bottomitems">
            <h1>MadhuBan</h1>
            <p class="text-muted">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
              there live the blind texts.</p>
              <p><i class="fa fa-instagram" aria-hidden="true" style="font-size:40px; padding: 10px;"></i>
                <i class="fa fa-twitter" aria-hidden="true" style="font-size:40px; padding: 10px;"></i>
                <i class="fa fa-facebook" aria-hidden="true" style="font-size:40px; padding: 10px;"></i>
            <a href="whatsapp://send?text=Hi i want to tell you that the SAKA Restaurant is amazing and food service is also so good so u can book your meal on ythis link http://travller.in">
                <i class="fa fa-whatsapp" aria-hidden="true" style="font-size:40px; padding: 10px;"></i></a></p>
          </div>
          <div class="bottomitems text-muted">
            <h1 style="color: white;">Open Hours</h1>
            <p>Monday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 AM - 10 PM</p>
            <p>Tuesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 AM - 10 PM</p>
            <p>Wednesday&nbsp; 10 AM - 10 PM</p>
            <p>Thursday &nbsp;&nbsp;&nbsp;&nbsp;10 AM - 10 PM</p>
            <p>Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 AM - 10 PM</p>
            <p>Saturday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 AM - 11 PM</p>
            <p>Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 AM - 11 PM</p>
          </div>
          <div class="bottomitems ">
            <h1>Instagram</h1>
            <div class="collage">
              <div class="row">
                <div class="col-sm-6 mb-4" style="width: 100%"><img src="https://1.bp.blogspot.com/-bWkQyiNrYUY/XvXKPXI8C-I/AAAAAAAAAfA/VsU2UPrH7T48ySVcHgGJ7p8GgklhPr4EQCLcBGAsYHQ/s320/insta-4.jpg" alt=""></div>
                <div class="col-sm-6 mb-4" style="width: 100%"><img src="https://1.bp.blogspot.com/-HL9-hr60kSw/XvXKOhOcDSI/AAAAAAAAAe0/IHA14yAuEekTr9NdSWHACdzO4orVy8sNgCLcBGAsYHQ/s320/insta-3.jpg" alt=""></div>
              </div>
              <div class="row">
                <div class="col-sm-6 mb-4"><img src="https://1.bp.blogspot.com/-ByR8ujX9xhk/XvXKOj3-8WI/AAAAAAAAAe4/aAolLJvllN0Zhj0SeRBzleGr4goLkWiPgCLcBGAsYHQ/s320/insta-2.jpg" alt=""></div>
                <div class="col-sm-6 mb-4"><img src="https://1.bp.blogspot.com/-Up7M0O-UqVg/XvXKOgaKmmI/AAAAAAAAAe8/wYUIGtAuhhUCn3g0CibcekeK7qF4AFSZACLcBGAsYHQ/s320/insta-1.jpg" alt=""></div>
              </div>
            </div>
          </div>
          <div class="bottomitems">
            <h1>Newsletter</h1>
            <p>Submit your email we contact you as soon as possible .</p>
            <p><input type="email" placeholder="Enter Your Email" style="background: transparent"></p>
            <p><Button type="submit">Submit</Button></p>
          </div>
        </div>
        <h2 style="color: white; text-align: center; padding-bottom: 70px; padding-top: 70px;
         font-family: 'Caveat', cursive;"> &copy; Copyright 2020 All rights reserved | This Project is made with &#x2764; by MadhuBan<sup>&trade;</sup>.</h2>
       </div>
      <hr>
      <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>