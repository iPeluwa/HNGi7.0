<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/dekillerj/image/upload/v1570648980/brand-logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="stylesheet" href="css/join-intern.css">

    <script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>

    <script>

      function signup() {
              
        var email = $('#email').val();
        var password = $('#password').val();
        
        $.post('backend/Admins.php?login=yes', {
            email: email,
            password: password
        },
        function(data){
            $('#result').html(data);
        });            
      }

    </script>

  </head>
  <body>
    <?php include('fragments/site_header.php'); ?>
    <section class="jumbo">
      
    
    </section>

    <div class="form-area">
        
      <form class="form-container">
        <h2>Login as an Admin</h2>

        <p id="result"></p>

        <input type="email" name="email" id="email" placeholder="enter your Email" />
        <input type="password" name="password" id="password" placeholder="enter your password">
        
        <button type="button" onclick="signup()">LOG IN</button>
        <a href="">Forgot Password?</a>
        
      </form>
    </div>
    

    <footer>
    <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722444/hng-brand-logo_gnplmq.svg">
    <nav>
      <section>
        <h2 class="skyblue-text">Quick Links</h2>
        <div id="link-list">
          <a href="join-intern.html" class="skyblue-text">Join HNG</a>
          <a href="index.html" class="skyblue-text">About HNG</a>
          <a href="MentorSetUpPage2.html" class="skyblue-text">Become a Sponsor</a>
          <a href="MentorSetUpPage2.html" class="skyblue-text">Sign up as Mentor</a>
          <a href="faq.html" class="skyblue-text">FAQ</a>
        </div>
      </section>
      <section id="contact-section">
        <h2 class="skyblue-text">Contact Us</h2>
        <div>
          <a href="tel:+2348123456789">
            <strong>
              Phone: <br />
            </strong>
            +234 812 345 6789           
          </a>
          <br />
          <a href="mailto:interns@hng.tech">
            <strong>
              Email: <br />
            </strong>
            interns@hng.tech
          </a>
        </div>
      </section>
      <section>
        <h2 class="skyblue-text">Office Address</h2>
        <p id="address">
          3 Birrel Avenue <br /> Sabo, Yaba, <br /> Lagos state
        </p>
      </section>
      <section>
        <h2 class="skyblue-text">Follow Us</h2>
        <div id="socials">
          <a href="https://twitter.com" title="Follow on Twitter!"><img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/twitter-logo_m1mgzi.svg"></a>
          <a href="https://facebook.com"><img title="Follow on Facebook!" src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/facebook-logo_bw1hal.svg"></a>
          <a href="https://dribble.com"><img title="Follow on Dribble!" src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/dribble-logo_w4vwuz.svg"></a>
        </div>
      </section>
    </nav>
    <p class="center-text darkblue-text">&copy 2019, HGN Internship. All rights reserved.</p>
  </footer>
  </body>
</html>
