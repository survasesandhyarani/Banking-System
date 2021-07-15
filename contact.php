<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body style="background-color:pink;">
<?php
  include 'navbar.php';
?>

  <!-- ==============contact starts here============== -->
  <section class="contact py-5 my-5" id="contact">
    <div class="container ">
    <div class="section_title text-center mb-5">
    <h1 class="text-capitalize">Contact Us</h1>
    </div>
    <div class="row mb-5">
    <div class="col-md-4 col-12">
    <div class="border border-dark rounded shadow text-center p-3">
    <div class="mb-4">
      <i class="fas fa-phone-alt fa-3x"></i>
    </div>
    <div>
    <h3>Let's Talk</h3>
    <p><b>Phone:</b> +91-9876543210</p>
    </div>
    </div>
    </div>
    <div class="col-md-4 col-12">
    <div class="border border-dark rounded shadow text-center p-3">
    <div class="mb-4">
      <i class="fas fa-envelope-open fa-3x"></i>
    </div>
    <div>
    <h3>Drop a Line</h3>
    <p><b>Email:</b> xyz@gmail.com</p>
    </div>
    </div>
    </div>
    <div class="col-md-4 col-12">
    <div class="border border-dark rounded shadow text-center p-3">
    <div class="mb-4">
      <i class="far fa-life-ring fa-3x"></i>
    </div>
    <div>
    <h3>24x7 Support</h3>
    <p><b>Customer:</b> 1800 101 303</p>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-8 col-10 mx-auto mb-3 my-5 py-5 border shadow">
    <h3 class="text-center mb-3">Form</h3>
    <form action="contact.html" method="POST" id="form">
    <div class="form-group">
    <label>Name</label>
    <input name="name" id="name" type="text" placeholder="Name"
    class="form-control">
    </div>
    <div class="form-group">
    <label>Email address</label>
    <input name="email" id="email" type="email" placeholder="Email"
    class="form-control">
    </div>
    <div class="form-group">
    <label>Message</label>
    <textarea name="msg" id="msg" class="form-control"
    placeholder="Message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary
    btn-block">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </section>
    <!-- ==============contact ends here============== -->

    <!-- Footer -->
<section>
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color:black; color:white;position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;height:auto;">© 2021 made by Sandhyarani Survase
  </div>
  <!-- Copyright -->

</footer>
</section>
<!-- Footer -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>