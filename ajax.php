<?php 
include "config.php";



 ?>

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
            <a href="edit.php?eid=<?php echo $row['ID'] ?>&ref=dashboard" class="btn btn-sm btn-primary">Edit <i class="fas fa-edit"></i></a>
            <a href="delete.php?did=<?php echo $row['ID'] ?>&ref=dashboard" class="btn btn-sm btn-danger">Delete <i class="fas fa-trash"></i></a>
          </td>
      </tr>
  <?php  }
  }
 ?>