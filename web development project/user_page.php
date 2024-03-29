<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>AwwIndia</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="shortcut icon" href="media/image/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  
<body>
    <!-- header -->
  <nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo">
      <img src="media/image/logo.png" alt="Logo" height="60" width="60"></div>
      <!-- <h1>AwwIndia</h1> -->
    <ul class="links">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#blog">Blog</a></li>
      <li><a href="logout.php">Logout</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
    <!-- call icon -->
    <a class="contact" href="tel:1111111111" target="_blank">
      <!-- https://api.whatsapp.com/send?phone=911111111111&text= -->
      <i class="fas fa-phone-alt"></i>
    </a>
  </nav>

  <!-- top and bottom scroll button -->
  <!-- <a href="#" class="scroll_but top"><i class="fas fa-chevron-up"></i></i></a> -->
  <a href="#finish" class="scroll_but bottom"><i class="fas fa-chevron-down"></i></a>

  <div id="selectbox">
    
    <!-- <div id="selectboxarea"> -->
    <!-- <div class="style-box" id="select-state"> -->
    <!-- <label for="state-name">Choose a State:</label> -->
    


<form>
  <div class="form-group col-md-4">
    <label for="inputState">State</label>
    <select class="form-control" id="inputState">
                        <option value="SelectState">Select State</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                      </select>
  </div>
  <div class="form-group col-md-4">
    <label for="inputDistrict">District</label>
    <select class="form-control" id="inputDistrict">
        <option value="">-- select one -- </option>
    </select>
  </div>

</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <div id="google_translate_element"></div>
</div>
  <!-- Photo Grid -->
  <div class="container-pic"> 
    <div class="box-pic">
      <img src="media/image/taj mahal.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Taj Mahal <br>
            Agra
          </h2>
          <p>
            ₹20
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a> 
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/Ajanta caves.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Ajanta Caves <br>
            Aurangabad
          </h2>
          <p>
            ₹25
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>  
    <div class="box-pic">
      <img src="media/image/ellora caves.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Ellora Caves <br>
            Aurangabad
          </h2>
          <p>
            ₹30
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/jantar Mantar.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Jantar Mantar <br>
            New Delhi
          </h2>
          <p>
            ₹20
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/kajuraho.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Khajuraho <br>
            Chatarpur
          </h2>
          <p>
            ₹30
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/qutub minar1.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Qutub Minar <br>
            New Delhi
          </h2>
          <p>
            ₹25
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/Red fort.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Red Fort <br>
            New Delhi
          </h2>
          <p>
            ₹25
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/statue of unity.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Statue of Unity <br>
            Kevadia
          </h2>
          <p>
            ₹35
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>  
    <div class="box-pic">
      <img src="media/image/sun temple konark.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Sun Temple <br>
            Konark
          </h2>
          <p>
            ₹30
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/taj mahal.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Taj Mahal <br>
            Agra
          </h2>
          <p>
            ₹20
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a> 
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/Ajanta caves.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Ajanta Caves <br>
            Aurangabad
          </h2>
          <p>
            ₹25
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>  
    <div class="box-pic">
      <img src="media/image/ellora caves.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Ellora Caves <br>
            Aurangabad
          </h2>
          <p>
            ₹30
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/jantar Mantar.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Jantar Mantar <br>
            New Delhi
          </h2>
          <p>
            ₹20
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/kajuraho.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Khajuraho <br>
            Chatarpur
          </h2>
          <p>
            ₹30
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/qutub minar1.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Qutub Minar <br>
            New Delhi
          </h2>
          <p>
            ₹25
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/Red fort.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Red Fort <br>
            New Delhi
          </h2>
          <p>
            ₹25
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>
    <div class="box-pic">
      <img src="media/image/statue of unity.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Statue of Unity <br>
            Kevadia
          </h2>
          <p>
            ₹35
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>  
    <div class="box-pic">
      <img src="media/image/sun temple konark.jpg" style="height: 100%; width:100%">
      <div class="overlay-pic">
        <div class="text-pic">
          <h2>
            Sun Temple <br>
            Konark
          </h2>
          <p>
            ₹30
          </p>
        </div>
      </div>
      <div class="book">
        <a href="monument_info/monumentInfo.html"><button type="submit" value="submit">View Information</button></a>
        <!-- change type to submit -->
      </div>
    </div>
  </div>


  <!-- Footer -->
  <div class="content" id="contact">
  </div>
  <footer>
    <div class="main-content">
      <div class="left box">
        <h2>About us</h2>
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde impedit similique magnam aut enim? Molestiae unde eos excepturi nam quo.</p>
          <div class="social">
            <a href="#"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="#"><span class="fab fa-instagram"></span></a>
            <a href="#"><span class="fab fa-youtube"></span></a>
          </div>
        </div>
      </div>

      <div class="center box">
        <h2>Address</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">Delhi</span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+1111111111</span>
          </div>
          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">abc@example.com</span>
          </div>
        </div>
      </div>

      <div class="right box">
        <h2>Contact us</h2>
        <div class="content">
          <form action="./index.html">
            <div class="email">
              <div class="text">Email *</div>
              <input type="email" id="email-id" required>
            </div>
            <div class="msg">
              <div class="text">Message *</div>
              <textarea rows="2" cols="25" id="message" required></textarea>
            </div>
            <div class="btn">
              <button type="submit" value="submit">Send</button> 
              <!-- change type to submit -->
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="bottom">
      <center>
        <span class="credit">Created By <a href="#">Tech Army</a> | </span>
        <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
      </center>
    </div>
  </footer>

  <div id="finish"></div>

  <script>
    let i = 0;
      let placeholder = "";
	    let msgholder = "";
	    const txt = "email@domain.com";
	    const pss = "Type any message"
	    const speed = 100;

	    function type(){
    	  placeholder += txt.charAt(i);
		    msgholder += pss.charAt(i);
    	  document.getElementById("email-id").setAttribute("placeholder",placeholder);
		    document.getElementById("message").setAttribute("placeholder",msgholder);
    	  i++;
    	  setTimeout(type,speed);
	    }

	    setTimeout(type, speed*10);
</script>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
  </script>
  
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="script.js"></script>
</body>
</html>