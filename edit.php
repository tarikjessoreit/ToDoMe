<?php include 'header.php';?>

    <div class="container mt-2 main">
      <h1 class="h1 border-bottom pb-2">Edit Todo</h1>

      <div class="row">
        <div class="col">
          <form>
            <div class="form-group mb-4">
              <label for="notetitle">Title</label>
              <input type="text" name="notetitle" class="form-control" id="notetitle" placeholder="Enter Title Here..." value="note title">
            </div>
            
            <div class="form-group mt-3">
              <label for="notedescription">Note Description</label>
              <textarea class="form-control" name="notdesc" id="notedescription" rows="3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, harum similique praesentium nobis nisi, obcaecati ullam aspernatur magni impedit omnis, ipsa autem ut dicta cupiditate nihil neque, saepe. Iste, dolore!</textarea>
            </div>
            
            <div class="form-group mt-3">
              <input type="submit" class="btn btn-primary px-4" value="Update">
            </div>
          </form>
        </div>
      </div>


    </div>

<?php include 'footer.php';?>