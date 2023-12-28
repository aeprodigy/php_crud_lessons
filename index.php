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

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   ...
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary">Save changes</button>
               </div>
           </div>
       </div>
   </div>
   <?php include('footer.php'); ?>