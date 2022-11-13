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
                <tr>
                    <td>#61</td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-primary">Edit <i class="fas fa-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-danger">Delete <i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>#62</td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-primary">Edit <i class="fas fa-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-danger">Delete <i class="fas fa-trash"></i></a>
                    </td>
                </tr>
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