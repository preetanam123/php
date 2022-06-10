<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "preet";

      // Create a connection
      $conn = new mysqli($servername, $username, $password, $database);
      // Die if connection was not successful
      if ($conn->connect_error){
          die("Sorry we failed to connect: ". $conn->connect_error);
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `preet` (`firstname`, `lastname`, `email`) VALUES ('$fname', '$lname', '$email')";
        $result = $conn->query($sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>
    <h1>Submit form</h1>
    <form action="/preet/valid.php" onsubmit="return validateForm()" class="bg-light" method="post">
        

        <label for="fname">    First Name*:  </label><br> <input type="text" name="fname" id="fname" autocomplete="off">
        <br>
            <label for="lname">    Last Name*:  </label><br> <input type="text" name="lname" id="lname" autocomplete="off">
        <br>
        <label for="email">    Email*:  </label><br> <input type="text" name="email" id="email" autocomplete="off">
        <br>
        <input
        type="submit"
        name="sub"
        value="submit form"
        class="btn btn-success"/>
    </form>

    <script>


        function validateForm()
        {
            var user= document.getElementById("user").value;
            var pass= document.getElementById("pass").value;
            var age= document.getElementById("age").value;
            var mob= document.getElementById("mob").value;
            var email= document.getElementById("email").value;
            

            if(user=" ")
            {
                alert("*Enter Username*");
                return false;
            }

 

        }





    </script>
    
</body>
</html>