<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contact form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <div class="container text-center fs-3">CONTACT</div>
  <div class="container text-center">
  <form action="action.php" method="POST" autocomplete="off">
  <!-- <form class="row G-3  needs-validation" novalidate> -->
    <div class="row">
  <div class="col-md-1 id">
    <label for="id">ID</label>
    <input type="text" class="form-control" name="id" id="id" value="" required>
</div>
<div class="col-md-6 fname">
    <label for="fname">First name</label>
    <input type="text" class="form-control" name="fname" id="fname" value="neha" required>
</DIV>
<div class="col-md-5 lname">
    <label for="lname" >last name</label>
    <input type="text" class="form-control"name="lname" id=lname" required>
</DIV>
</div>
<!--  -->
<div class="row">
<div class="col-md-4 g-3 class">
    <label for="class">Select class</label>
    <select class="form-select" name="class" id="class" required>
      <option selected disabled value="">Choose...</option>
      <option>First year</option>
      <option>Second year</option>
      <option>Third year</option>
    </select>
</div>

<div class="col-md-4 g-3 divi">
    <label for="divi">Select div</label>
    <select class="form-select"name="divi" id="divi" required>
      <option selected disabled value="">Choose...</option>
      <option>A</option>
      <option>B</option>
      <option>C</option>
      <option>D</option>
    </select>
</div>
</div>
<!--  -->
<div class="row">
<div class="col-md-7 adde">
    <label for="adde">Student address</label>
    <input type="text" class="form-control" name="adde" id="adde" value="goreaon" required>
</div>
</div>
<!--  -->
<div class="row">
<div class= "col-md-7 blood">
<label for="blood">blood group</label>
    <select class="form-select" name="blood" id="blood" required>
      <option selected disabled value="">Choose...</option>
      <option>A+</option>
      <option>AB+</option>
      <option>AB-</option>
      <option>A-</option>
      <option>B-</option>
    </select>
</div>
<div class="col-md-5 dob">
    <label for="dob">DOB</label>
    <input type="text" class="form-control" name="dob" id="dob" value="1998-11-19" required>
</DIV>
</div>
<div class="row">
<div class="col-12 md-4 fs-5 text-start text-primary">Parent Details</div>
</div>

<div class="row">
    <div class="col-md-6 father">
    <label for="father">Father name</label>
    <input type="text" class="form-control" name="father" id="father" value="sandesh" required>
</div>
     
        <div class="col-md-6 faqu">
    <label for="faqu">Father qualification</label>
    <input type="text" class="form-control" name="faqu" id="faqu" value="10th pass" required>  
</div> 
</div>

<div class="row">
<div class="col-md-6 mother">
    <label for="mother">Mother name</label>
    <input type="text" class="form-control" name="mother" id="mother" value="meena" required>
</div>
     
        <div class="col-md-6">
    <label for="moqu">mother qualification</label>
    <input type="text" class="form-control" name="moqu" id="moqu" value="bachelor"required>   
</div>

</div>
<div class="col-12">
    <button class="btn btn-success mt-4" type="submit">Submit form</button>
  </div>
</form>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
