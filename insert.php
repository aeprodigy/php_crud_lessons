<?php 
    if(isset($_POST['add_employee'])){
    echo "insert successful";

    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $age = $_POST['age'];
    if($first_name == "" || empty($first_name)){
        header('location:index.php?message= please fill in the first name');
    }
    }else{
        echo "Error!!";
    }

?>