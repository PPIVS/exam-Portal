<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url() ?>/assests/css/style.css">

    <title>Exam Portal-Reg</title>
  </head>
  <body>
    


<section>
  
<div class="container mt-5 pt-5">
  <center><h1>SIPM&R Exam Portal</h1></center><br><br>
  <center><h2>Register Here</h2></center>

<div class="row">

    <div class="col-12 col-sm-8 col-md-6 m-auto">
      
            <div class="card"> 

            <div class="card-body">

              <form action="<?= base_url('user/insert-student') ?>" method="POST">

  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Enrol No" id="" name="enrolNo" required autofocus>
    </div>

    <div class="col">
      <input type="text" class="form-control" placeholder="Students Name" id="" name="studentName"required>
    </div>
</div>


 <br>
    <div class="form-row">
    <div class="col">

      <select id=" " name="selectGen" class="form-control">

    <option disabled selected value>Select Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
  </select>

    </div>

<div class="col">

  <input type="text" class="form-control" placeholder="Father's Name" id="" name="fathersName" required>

    </div> </div>


<br>
    <div class="form-row">
    <div class="col">

  <input type="text"  title="" name="Students-CNIC" id="" class="form-control" placeholder="Student's CNIC" required>

    </div>

<div class="col">

  <input type="date" class="form-control" placeholder="Student's Date Of birth" id="" name="studentsBirth" required>

    </div> </div>

<br>
    <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Address" name="studentAddress" required>
    </div>

<div class="col">
       <input type="email" class="form-control" placeholder="Email" name="studentsEmail" required>
    </div> </div>


<br>
    <div class="form-row">
    <div class="col-6">
      <input type="text"  class="form-control" name="phoneNo" placeholder="Phone no"required title="Phone number should be like this: 1234-1234567">
    </div>
 </div>

    <br>

Upload Photo<input type="file" id="imgInp" name="stdnt" class="form-control">

<br>
    <div class="form-row">
    <div class="col-6">
      <input type="password"  class="form-control" name="studentPass" placeholder="Password" required title="">
    </div>
     </div>
 <br>

     <div class="text-left">
                     
                     <input type="submit" value="Register" class="btn btn-primary">

                     <br>
                       
                     <a href="<?= site_url('/'); ?>" class="nav-link"> already have an account please login here </a>
                   </div>

</form>
  </div>

  </div>
  </div>
  </div>
  </div>

</section>

<br>
<br>
<br>
<br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>