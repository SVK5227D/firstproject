<?php
require_once ('../model/select.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            View page
            
        </title>
    </head>

    <body>
        <div>

           <a style="text-align: center"> <h2>Student Details</h2>  </a>

          <table align="center" border="1" cellspacing="0"cellpadding="2" width="50%">
            <head>
                <tr bgcolor="yellow">
                    <th>Name</th>
                    <th>ID</th>
                    <th>Gender</th>
                    <th>Email ID</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </tr>
                </thread>

                <tbody>
                    <?php
                    if($result->num_rows>0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                           
                    
                    ?>
                            <tr style="text-align:center ;">
                                <td><?php echo $row['student_name'];?></td>
                                <td><?php echo $row['Student_Id'];?></td>
                                <td><?php echo $row['Gender'];?></td>
                                <td><?php echo $row['Email_Id'];?></td>
                                <td><?php echo $row['phone_number'];?></td>
                                <td><?php echo $row['address'];?></td>
                            </tr>
                      <?php  }
                    }?>
                </tbody>
            </head>
        </table>
        </div>
    </body>
</html>