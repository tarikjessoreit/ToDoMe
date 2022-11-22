<?php include 'header.php';?>

    <div class="container mt-2 main">
      <h1 class="h1 border-bottom pb-2">All ToDo Data</h1>
      <div class="row">
        <div class="col">

          <?php 
            $sql ="SELECT * FROM $notes_tbl WHERE user_ID = ".$_SESSION['userID'];
            $res = $con->query($sql);
            if ($res->num_rows > 0) {
              while($row = $res->fetch_assoc()){?>
            <!-- item -->
            <div class="card mb-4">
              <div class="card-header bg-warning d-flex justify-content-between">
                <span class="h4"># <?php echo $row['ID'] ?> <?php echo $row['note_title']; ?></span>
                <span><?php echo date("d/m/Y h:i:s A",strtotime($row['note_added_date'])) ?></span>
              </div>
              <div class="card-body">
               <?php echo $row['note_description']; ?>
              </div>
              <div class="card-footer text-end">
                <a href="edit.php?eid=<?php echo $row['ID'] ?>&ref=all-todo" class="btn btn-sm btn-primary">Edit <i class="fas fa-edit"></i></a>
                <a href="delete.php?did=<?php echo $row['ID'] ?>&ref=all-todo" class="btn btn-sm btn-danger">Delete <i class="fas fa-trash"></i></a>
              </div>
            </div><!--/item-->

            <?php  }
            }else{
              echo "<h1> Data Not Found";
            }

           ?>

        </div>
      </div>
      
    </div>

<?php include 'footer.php';?>