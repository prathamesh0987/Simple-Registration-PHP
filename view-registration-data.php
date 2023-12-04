<?php

include 'dbconnection.php';
$sql ="SELECT * FROM `demoo` ORDER BY id desc";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.cssdescntegrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Registration Form Using Bootstrap 4</title>
    
</head>
<body>


<div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
 

      <thead class="thead-dark">
                     <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Image</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Action</th>
                        
                     </tr>
                  </thead>
                  <tbody>
                       <?php
                       $count=1;
                       if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {

                        ?>
                     <tr>
                        
                        <td> <?php echo $count;  ?></td>
                        <td> <?php echo $row['name']; ?></td>
                         <td> <?php echo $row['email']; ?></td>
                          <td> <?php echo $row['phone']; ?></td>
                           <td> <?php echo $row['image']; ?></td>
                            <td> <?php echo $row['gender']; ?></td>
                            <td>
                       <a href="edit.php?editid=<?=$row['id'];?>" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span>            
    </a>
                        <a href="delete.php?deleteid=<?=$row['id'];?>" class="btn btn-primary a-btn-slide-text" >
       <span class="glyphicon glyphicon-remove" aria-hidden="true" name="delete"></span>
        <span><strong>Delete</strong></span>            
    </a>
                     </td>
                        </td>
                      <?php $count++; } } ?>
                     </tr>
                  </tbody>
     
    
  
</table>
</div>

</body>
</html>
