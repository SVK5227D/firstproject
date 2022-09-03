<?php 

  //To connect database Server Name
      $servername = "localhost";
        
  //To connect database Server User Name
        $username = "root";

  //To connect database Server Password
        $password = "";

  //To connect database Server Database Name
        $dbname = "student";

  // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);


  // Check connection wherther connect or not
        if (!$conn)
        {
          
          die("Connection failed: " . mysqli_connect_error());
        
        }

    if(isset($_POST ['submit'])){
  //Getting value of student name
  $name= $_POST['name'];

//Getting value of student ID
  $student_id = $_POST['student_id'];

//Getting value of student Gender
  $gender = $_POST['gender'];

//Getting value of student email ID
  $email_id = $_POST['email_id'];

//Getting value of student phone number
  $phone_number= $_POST['phone_number'];

//Getting value of student address
  $address = $_POST['address']; 


//Insert value into database
  $sql = "INSERT INTO details (student_name,Student_Id,Gender,Email_Id,phone_number,Address) 

        VALUES('$name','$student_id','$gender','$email_id','$phone_number','$address')";      

//Checking value inserted or not
  if (mysqli_query($conn, $sql)) 
    {
    
     echo "New record created successfully".  "<br>";
    } 

  else 
    {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    


   }
//Closing connection to Database
  /* mysqli_close($conn); */  

?>