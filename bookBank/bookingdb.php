<?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "bookbank");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $mobilenumber = $_REQUEST['mobilenumber'];
        $email =  $_REQUEST['email'];
        $city = $_REQUEST['city'];
        $district = $_REQUEST['district'];
        $state =  $_REQUEST['state'];
        $country = $_REQUEST['country'];
        $pincode =  $_REQUEST['pincode'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO booking (name,mobilenumber,email,city,district,state,country,pincode)
        VALUES('$name','$mobilenumber','$email','$city','$district','$state','$country','$pincode')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$name\n $mobile_number\n "
                . "$email\n $city\n $district\n $state\n $country\n "
                . "$pincode\n");
                header('location: booking-success.php');
        
        } 
        else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
        ?>