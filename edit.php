<?php include 'header.php';?>

    <div class="container mt-2 main">
      <h1 class="h1 border-bottom pb-2">Edit Todo</h1>
      <?php 
      // update data
      $msg="";
      $err="";
      $nid = $_GET['eid'];
      $ref = $_GET['ref'];
        if (isset($_POST['updatebtn'])) {
          $nt_title = input_validation($_POST['notetitle']);
          $nt_desc = input_validation($_POST['notdesc']);
          $sql = "UPDATE $notes_tbl SET note_title = '$nt_title', note_description = '$nt_desc' WHERE ID= $nid AND user_ID = $current_uid";
          if($con->query($sql)==true){
            $msg = "Data Updated Successfull <a href='$ref.php'>Go to $ref page</a>";
          }else{
            $err = "Faild To Update Data: ".$con->error;
          }
        }


      // get data
      if (isset($_GET['eid'])) {
        $sql = "SELECT * FROM $notes_tbl WHERE ID=$nid AND user_ID = $current_uid LIMIT 1";
        $nres = $con->query($sql);
        if ($nres->num_rows >0) {
          while($row = $nres->fetch_assoc()){
            $ntitle = $row['note_title'];
            $ndesc = $row['note_description'];
          }
        }else{
          header('location:dashboard.php');
        }
      }else{
        header('location:dashboard.php');
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
              <input type="text" name="notetitle" class="form-control" id="notetitle" placeholder="Enter Title Here..." value="<?php echo $ntitle; ?>">
            </div>
            
            <div class="form-group mt-3">
              <label for="notedescription">Note Description</label>
              <textarea class="form-control" name="notdesc" id="notedescription" rows="3"><?php echo $ndesc; ?></textarea>
            </div>
            
            <div class="form-group mt-3">
              <input type="submit" name="updatebtn" class="btn btn-primary px-4" value="Update">
            </div>
          </form>
        </div>
      </div>


    </div>

<?php include 'footer.php';?>