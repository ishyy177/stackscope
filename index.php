<?php
require_once "include/db.php";
require_once "Components/head.php";

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Stack Scope</a>

  <div class="navbar-nav ml-auto">
    <a href="post.php">Post A Job</a>
  </div>
</nav>

<?php

if(isset($_GET['success'])){
  if($_GET['success'] == "complete"){
    ?>
      <script>
      alert("Application Submitted");
      </script>
    <?php
  }
}

?>

<div class="container-fluid">
  <div class="row border border-dark">
    <div class="col-sm-5" style="margin: 0 auto">
      <?php
      $sql = "SELECT * FROM detail";
      $result = mysqli_query($conn, $sql);
      while ($rows = mysqli_fetch_array($result)) {
      ?>

        <div class="card" style="width: 100%; margin: 10px 0">
          <div class="card-body">
            <h5><?php echo $rows['title'] ?></h5>
            <p class="card-text"><?php echo $rows['company'] ?></p>
            <p class="card-text"><?php echo $rows['company_location'] ?></p>
            <p class="card-text"><?php echo $rows['salary'] ?></p>
            <p class="card-text"><?php echo $rows['requirement'] ?></p>
            <div>

              <a href="index.php?id=<?php echo $rows['id'] ?>"><button type="sub" class="btn-lg btn-primary" name="btn">view</button></a>

            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM detail WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($rows = mysqli_fetch_assoc($result)) {
    ?>
        <div class="col-sm-7" style="">
          <div class="card" style="width: 100%;">
            <div class="card-body">
              <h5 class="card-text text-dark"><?php echo $rows['title'] ?></h5>
              <p class="card-text"><?php echo $rows['company'] . ' - ' .$rows['company_location'] ?></p>
              <p class="card-text"><?php echo $rows['salary'] . ' - ' . $rows['jobtype'] ?></p>

             
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
              Apply With Stack Scope
             </button>

             <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form id="app-form" action="include/application.php" method="POST" style="border: 2px solid orange; width: 100%; height: 100%; background: lightgrey;">
                    <div class="input-field" style="display: flex; flex-direction: column; place-items: center">
                      <label for="" style="margin-right: 10px;">Name:</label>
                      <input type="text" name="name">
                    </div>
                    <div class="input-field" style="display: flex; flex-direction: column; place-items: center">
                      <label for="" style="margin-right: 10px;">Email:</label>
                      <input type="text" name="email">
                    </div>
                    <div class="input-field" style="display: flex; flex-direction: column; place-items: center">
                      <label for="" style="margin-right: 10px;">Phone:</label>
                      <input type="text" name="phone">
                    </div>
                    <div class="input-field" style="display: grid; place-items: center">
                      <label for="" style="margin-bottom: 10px;">CV File</label>
                      <input type="file" name="file">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;" name="submit">Apply</button>
                  </form>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div>
             </div>
              </div>
            </div>


              <p class="card-text"><?php echo nl2br($rows['summary']) ?></p>
              <p class="card-text"><?php echo nl2br($rows['expertise']) ?></p>
              <div style="margin-top: 10px;">
              <p class="card-text">Job Types: <?php echo nl2br($rows['jobtype']) ?></p>
              <p class="card-text">Salary: <?php echo nl2br($rows['salary']) ?> per year</p>
              <p class="card-text">Experience: <?php echo nl2br($rows['experience']) ?></p>
              </div>
            </div>
          </div>
        </div>
    <?php
      }
    }
    ?>



  </div>
</div>

</div>








<?php
require_once "Components/footer.php";
?>