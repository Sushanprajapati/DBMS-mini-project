<!DOCTYPE html>
<html>
    <head>
        <title>Booking Table</title>
        
    </head>
<style>
    .btn-success{
        padding: 10px;
        border-radius: 10px;
        color:#fff;
        background-color:#5cb85c;
        border-color:#4cae4c;
        text-decoration: none;
        font-size: 18px;
    }
    .btn-success:hover
    {
        color:#fff;
        background-color:#449d44;
        border-color:#398439;
    }
    table{
        width:70%;
        text-align: center;
        
        font-size: 19px;
        font-family: sans-serif;
    }
    table th{
        background-color: beige;
        padding: 10px;
        color: #8f8c83;
    }
    table tr:nth-child(even){
        background-color:#b8e0c1;
        padding: 10px;
        font-size: 16px;
    }
    table tr:nth-child(odd){
        background-color:floralwhite;
        padding: 10px;
        font-size: 16px;
    }
    </style>
<body>
<center>
     <table>
        <tr>
            <th>Booking ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Phone no:</th>
            <th>Pickup Address</th>
            <th>Pickup Date</th>
            <th>Pickup Time</th>
            <th>Driver Name</th>
            <th>Vehicle Number</th>
        <?php    
         $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "minidatabase";
    
    //create connection
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if(mysqli_connect_error())
    {
        die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    }
    else
    { 
        if(isset($_POST['sub'])){
            $location = $_POST['location'];
        }
        $sql = "SELECT r.bookingid, r.firstname, r.lastname, r.phone, r1.location,  r.departuredate ,r1.time, r1.name, r1.vehicleno FROM  kathmandubooking r,  driverdetail r1 where r.location=r1.location and r1.departuredate=r.departuredate";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0)
        {
            while($row = $result-> fetch_assoc())
            {
                 echo "<tr><td>" .$row["bookingid"] ."</td><td>". $row["firstname"] ."</td><td>". $row["lastname"] ."</td><td>". $row["phone"] ."</td><td>" .$row["location"] ."</td><td>".$row["departuredate"] ."</td><td>".$row["time"] ."</td><td>" .$row["name"] ."</td><td>" .$row["vehicleno"] ."</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "No records!!";
        }}
            ?>
        </tr>
        </table>
     <br><br>
        <a href="booking.php" class="btn btn-success">Go Back</a>
     </center>
    
    </body>
</html>