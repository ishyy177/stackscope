<?php
require_once "Components/head.php";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="index.php">Stack Scope</a>

   <div class="navbar-nav ml-auto">
      <a href="post.php">Post A Job</a>
   </div>
</nav>

<div class="container-fluid">

   <div class="row justify-content-center">
      <div class="col-sm-10 form-area">
         <?php if (isset($_GET['error']) || isset($_GET['success'])) {
            if ($_GET['error'] == "emptyfield") {
               echo "please fill out the fields";
            } else {
               if ($_GET['success'] == "complete") {
                  echo "success";
               }
            }
         } ?>
         <form action="include/detail.php" method="POST">
            <h1>Job Description</h1>
            <div class="input-field">
               <h5>Company:</h5>
               <textarea name="company" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <h5>Job Title:</h5>
               <textarea name="title" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <h5>Address:</h5>
               <textarea name="address" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <h5>Summary:</h5>
               <textarea name="summary" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <h5>Salary:</h5>
               <textarea name="salary" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <h5>Requirements:</h5>
               <textarea name="requirement" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <h5>Expertise:</h5>
               <textarea name="expertise" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <h5>Advantageous:</h5>
               <textarea name="advantageous" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <h5>Application deadline:</h5>
               <textarea name="deadline" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <h5>Job Types:</h5>
               <textarea name="job-type" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <h5>Experience:</h5>
               <textarea name="experience" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <h5>Education:</h5>
               <textarea name="education" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <h5>Work remotely: Yes/No</h5>
               <textarea name="remotely" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="input-field">
               <button type="submit" class="btn btn-lg btn-primary" name="submit">Post</button>
            </div>

         </form>

      </div>
   </div>
</div>

<div class="container">
   <div class="row justify-content-center" style="height: 300px;">
      <div class="col-sm-6 text-center">
         <div style="margin-top: 70px; margin-bottom: 40px">
            <h4>We're here to help</h4>
            <p>Visit our Help Centre for answers to common questions or contact us directly.</p>
         </div>
         <div class="">
            <a href="" class="btn btn-sm btn-light text-primary">Help centre</a>
            <a href="" class="btn btn-sm btn-light text-primary">Contact support</a>
         </div>
      </div>
   </div>
   <div class="row justify-content-center">
      <div class="col-sm text-center">
         <p style="margin-top: 15px"> &copy; 2020 Indeed · Indeed UK Operations Ltd., 20 Farringdon Road, 3rd floor, London, EC1M 3HE, United Kingdom</p>
      </div>
   </div>
</div>

<?php
require_once "Components/footer.php";
?>