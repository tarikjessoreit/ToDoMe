<?php include 'header.php';?>

    <div class="container mt-2 main">
      <h1 class="h1 border-bottom pb-2">Add New Data</h1>

      <?php 
      $msg="";
      $err="";
        if (isset($_POST['addbtn'])) {
          $nt_date = date('Y-m-d h:i:s');
          $nt_title = input_validation($_POST['notetitle']);
          $nt_desc = input_validation($_POST['notdesc']);
          $nt_status = "active";



          $sql = "INSERT INTO $notes_tbl(user_ID, note_added_date, note_title, note_description, note_status) VALUES ($current_uid,'$nt_date','$nt_title', '$nt_desc', '$nt_status' )";

          if($con->query($sql)==true){
            $msg = "Data Added Successfull";
          }else{
            $err = "Faild To Insert Data: ".$con->error;
          }
        }

       ?>


      <div class="row">
        <div class="col">
          <?php if(!empty($err)){ ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?php echo $err; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php } ?>

          <?php if(!empty($msg)){ ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo $msg; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php } ?>
          <form action="" method="post">
            <div class="form-group mb-4">
              <label for="notetitle">Title</label>
              <input type="text" name="notetitle" class="form-control" id="notetitle" placeholder="Enter Title Here...">
            </div>
            
            <div class="form-group mt-3">
              <label for="notedescription">Note Description</label>
              <textarea class="form-control" name="notdesc" id="notedescription" rows="3"></textarea>
            </div>
            
            <div class="form-group mt-3">
              <input type="submit" name="addbtn" class="btn btn-primary px-3" value="Add Todo">
            </div>
          </form>
        </div>
      </div>


    </div>

<?php include 'footer.php';?>