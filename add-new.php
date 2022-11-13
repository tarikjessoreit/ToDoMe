<?php include 'header.php';?>

    <div class="container mt-2 main">
      <h1 class="h1 border-bottom pb-2">Add New Data</h1>

      <div class="row">
        <div class="col">
          <form>
            <div class="form-group mb-4">
              <label for="notetitle">Title</label>
              <input type="text" name="notetitle" class="form-control" id="notetitle" placeholder="Enter Title Here...">
            </div>
            
            <div class="form-group mt-3">
              <label for="notedescription">Note Description</label>
              <textarea class="form-control" name="notdesc" id="notedescription" rows="3"></textarea>
            </div>
            
            <div class="form-group mt-3">
              <input type="submit" class="btn btn-primary px-3" value="Add Todo">
            </div>
          </form>
        </div>
      </div>


    </div>

<?php include 'footer.php';?>