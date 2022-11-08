<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url() ?>/assests/css/style.css">

    <title>Exam Portal-login</title>
  </head>
  <body>
    


<section>
  
<div class="container mt-5 pt-5">

    <?php 
           if(session()->getFlashdata('status'))
           {
                ?> 
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey</strong> <?php echo session()->getFlashdata('status');?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

 <?php 

           }
 
  ?>

 
  <center><h1>SIPM&R Exam Portal</h1></center><br><br>
  <center><h2>Login Here</h2></center>

  <div class="row">

    <div class="col-12 col-sm-8 col-md-6 m-auto">
      
            <div class="card"> 

            <div class="card-body">
              <center>

                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></center>
                 
                 <form action="<?= base_url('/user/studentLogin') ?>" method="POST">
 

                   <input type="text" title="CNIC should be like this 12345-1234567-1"name="loginCnic" id="" class="form-control my-3 py-2" placeholder="CNIC" required autofocus>
                     
                   <input type="password" name="studentLoginPass" id="" class="form-control my-3 py-2" placeholder="Password" required>

                   <div class="text-left">
                     
                     <input type="submit" value="Login" class="btn btn-primary">

                       </form> 

                        

                     <br>
                       
                     <a href="<?= site_url('/signup'); ?>" class="nav-link"> Don't have account please registere here </a>
                   </div>


                

            </div>

             </div>
    </div>




  </div>


</div>

</section>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>