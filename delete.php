<?php include 'header.php';?>

    <div class="container mt-2 main">
      <h1 class="h1 border-bottom pb-2">Delete Data</h1>
      <?php 
       if (isset($_GET['did'])) {
        $nid = $_GET['did'];
        $ref = $_GET['ref'];
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


      // Delete data
      if (isset($_POST['cinfirmbtn'])) {
        if ($_POST['confirmtext'] == 'DELETE') {
          $sql = "DELETE FROM $notes_tbl WHERE ID= $nid AND user_ID = $current_uid";
          if($con->query($sql)==true){
            $msg = "Data Deleted Successfull <a href='$ref.php'>Go to $ref page</a>";
            header("refresh:3s;url=$ref.php");
          }else{
            $err = "Faild To Delete Data: ".$con->error;
          }
        }else{
          $err="Try Again. Please type DLETE to delete your data";
        }
        
      }


      ?>
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
        <input type="text" name="confirmtext" placeholder="Type DELETE">
        <input type="submit" name="cinfirmbtn" value="Cofirm"> 
      </form>
      
    </div>

<?php include 'footer.php';?>