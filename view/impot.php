<?php
require_once ('../model/select.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Important Detail Page
            
        </title>
    </head>

    <body>
        <div>

           <a style="text-align: center"> <h2>Student Important Details</h2>  </a>

          <table align="center" border="1" cellspacing="0"cellpadding="2" width="40%">
            <head>
                <tr bgcolor="yellow">
                    <th>Name</th>
                    <th>ID</th>                   
                    <th>Email ID</th>
                    <th>Phone Number</th>
                    
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
                                <td><?php echo $row['Email_Id'];?></td>
                                <td><?php echo $row['phone_number'];?></td>
                                
                            </tr>
                      <?php  }
                    }?>
                </tbody>
            </head>
        </table>
        </div>
    </body>
</html>