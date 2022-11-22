<?php include 'header.php';?>

    <div class="container mt-2 main">
      <h1 class="h1 border-bottom pb-2">Dashboard</h1>

      <div class="row mb-4">
        <div class="col">
        </div>
      </div>
 
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
            <tbody id="loadajaxdata">
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