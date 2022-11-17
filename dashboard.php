<?php include 'header.php';?>

    <div class="container mt-2 main">
      <h1 class="h1 border-bottom pb-2">Dashboard</h1>
 
      <div class="row">
        <div class="col">
          <table id="alldata" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Note Title</th>
                    <th>Note Description</th>
                    <th style="width: 150px;">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql ="SELECT * FROM $notes_tbl WHERE user_ID = ".$_SESSION['userID'];
            $res = $con->query($sql);
            if ($res->num_rows > 0) {
              while($row = $res->fetch_assoc()){?>
                <tr>
                    <td>#<?php echo $row['ID'] ?></td>
                    <td><?php echo $row['note_title']; ?></td>
                    <td><?php echo $row['note_description']; ?></td>
                    <td>
                      <a href="edit.php?eid=<?php echo $row['ID'] ?>" class="btn btn-sm btn-primary">Edit <i class="fas fa-edit"></i></a>
                      <a href="?did=<?php echo $row['ID'] ?>" class="btn btn-sm btn-danger">Delete <i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php  }
            }
           ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Note Title</th>
                    <th>Note Description</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
        </div>
      </div>


    </div>

<?php include 'footer.php';?>