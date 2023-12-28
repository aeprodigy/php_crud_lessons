   <?php include('header.php'); ?>
   <?php include('db_connection.php'); ?>

   <div class="box1">
   <h2>All Employees</h2>
   <button class="btn btn-primary">Add Employee</button>
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
   <?php include('footer.php'); ?>