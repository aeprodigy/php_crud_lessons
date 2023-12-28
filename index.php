   <?php include('header.php'); ?>
   <?php include('db_connection.php'); ?>

   <div class="box1">
       <h2>All Employees</h2>
       <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Employee</button>
   </div>
   <table class="table table-hover table-bordered table-str">
       <thead>
           <tr>
               <th>ID</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Age</th>
           </tr>
       </thead>
       <tbody>

           <?php
            $query = 'SELECT * FROM `employees`';
            $check = mysqli_query($connection, $query);

            if (!$check) {
                die("not connected");
            } else {
                // echo "Fetched!";
                // print_r($check);
                while ($row = mysqli_fetch_assoc($check)) {
            ?>
                   <tr>
                       <td><?php echo $row['id'] ?></td>
                       <td><?php echo $row['first_name'] ?></td>
                       <td><?php echo $row['last_name'] ?></td>
                       <td><?php echo $row['age'] ?></td>
                   </tr>
           <?php
                }
            }
            ?>

       </tbody>
   </table>
   <?php 
    if(isset($_GET['message'])){
        echo "<h6>".$_GET['message']. "</h6>";
    }
   
   ?>

   <!-- Modal -->
   <form action="insert.php" method="post">
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">

                       <div class="form-group">
                           <label for="fname">First Name</label>
                           <input type="text" name='fname' class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="lname">Last Name</label>
                           <input type="text" name='lname' class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="age">Age</label>
                           <input type="text" name='age' class="form-control">
                       </div>


                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                       <input type="submit" class="btn btn-success" name="add_employee" value="Add">
                   </div>
               </div>
           </div>
       </div>
   </form>
   <?php include('footer.php'); ?>