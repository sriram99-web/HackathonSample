<?php
            $conn = new mysqli('localhost','root','','test');
              if($conn->connect_error){
                echo "$conn->connect_error";
                die("Connection Failed : ". $conn->connect_error);
              } else {
                    $query="SELECT * FROM EMPLOYEE";
                    $result =  mysqli_query($conn, $query);
                }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="empId">Employee Id</label>
                <input
                  type="text"
                  class="form-control"
                  id="empId"
                  name="empId"
                />
              </div>
              <div class="form-group">
                <label for="empName">Employee Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="empName"
                  name="empName"
                />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
         <div>
         <table class="table table-striped table-hover">
            <tr>
                <th>Employee Id</th>
                <th>Employee Name</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Id'];?></td>
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['Email'];?></td>
                <td><?php echo $rows['Pno'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        </div>
          <div class="panel-footer text-right">
            <small>&copy; Trimble Inc.</small>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
