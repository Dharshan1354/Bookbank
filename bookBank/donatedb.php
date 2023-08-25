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
        $bookname =  $_REQUEST['bookname'];
        $authorname = $_REQUEST['authorname'];
        $publisher =  $_REQUEST['publisher'];
        $booklanguage = $_REQUEST['booklanguage'];
        $bookedition = $_REQUEST['bookedition'];
        $numberofpages =  $_REQUEST['numberofpages'];
        $description = $_REQUEST['description'];
        $dob =  $_REQUEST['dob'];
        $bookcondition =  $_REQUEST['bookcondition'];
        $bookusedfor =  $_REQUEST['bookusedfor'];
        $booksavailable =  $_REQUEST['booksavailable'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO donate (bookname,authorname,publisher,booklanguage,bookedition,numberofpages,description,dob,bookcondition,bookusedfor,booksavailable)
        VALUES('$bookname','$authorname','$publisher','$booklanguage','$bookedition','$numberofpages','$description','$dob','$bookcondition','$bookusedfor','$booksavailable')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$bookname\n $authorname\n "
                . "$publisher\n $booklanguage\n $bookedition\n $numberofpages\n $description\n "
                . "$dob\n"$bookcondition\n"$bookusedfor\n"$booksavailable\n");
                header('location: dashboard.php');
        
        } 
        else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
        ?>