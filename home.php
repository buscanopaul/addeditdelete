<?php include_once 'controllers/home.controller.php'; ?>
<?php include_once 'templates/header.php'; ?>

      <div class="wrapper " >
    <form class="form-signin">       
      <h2 class="form-signin-heading">TABLE</h2>
      
      <a href="add.php" class="btn btn-primary">ADD</a>
      <table class="table table-striped">

    <thead>
      <tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
      </tr>
    </thead>
    <tbody>

    <?php if(empty($user)): ?>
              <?php foreach ($users as $user): ?>
      

                <form action="" method="POST">
                
      
                    <tr class="active">
                
                    
                       <td><label for="id" name="id"><?php echo $user['id']; ?></label></td>
                        <td><input required type="text" class="form-control" name="firstname" value="<?php echo $user['firstname']; ?>"></td>
                      <td><input required type="text" class="form-control" name="lastname" value="<?php echo $user['lastname']; ?>"></td>
                      <td><input required type="text" class="form-control" name="age" value="<?php echo $user['age']; ?>"></td>
                      

                    
                      
                      <td><button type="submit" onclick="return confirm('Are you sure you want to update this record?')" name="update" class="btn btn-warning">Update</button><td>

                      <td><button type="submit" onclick="return confirm('Are you sure you want to delete this record?')" name="delete" class="btn btn-danger">Delete</button><td>
                      
                      
    
                      
                    </tr>

                  <input type="hidden" name="id" value="<?php echo $user['id'];?>">
                  
                  
              </form>

              <?php endforeach; ?>
            <?php endif; ?>
    </tbody>
  </table>
      
    </form>
  </div>
    
    
    
<?php include_once 'templates/footer.php'; ?>

