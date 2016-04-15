<?php include_once 'controllers/add.controller.php'; ?>
<?php include_once 'templates/header.php'; ?>

      <div class="wrapper">
     <form action=" " method="POST" class="form-signin">       
      <h2 class="form-signin-heading">Add</h2>
      <input type="text" class="form-control" name="firstname" placeholder="Firstname" required="" autofocus="" />
      <br>
      <input type="text" class="form-control" name="lastname" placeholder="Lastname" required="" autofocus="" />
      <br>
      <input type="text" class="form-control" name="age" placeholder="age" required="" autofocus="" />
      <br>
    
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Save!</button>   
    </form>
  </div>
    
    
    
<?php include_once 'templates/footer.php'; ?>

