<html>
    <head>
        <title>Web Technology </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <style>
            td{
                padding:20px;
            }
        </style>
    </head>

    <body>

    <!--Navbar -->
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Web Technology</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link text-grey" href="./insert.php">Create Entry </a>
                <a class="nav-link text-grey" href="./viewlist.php">View List</a>
            </div>
        </div>
    </div>
    </nav>

    <h1>View list</h1>

    <?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM STDFORM";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0){

    ?>
        <table>
            <tr>
                <th>Roll no</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Faculty</th>
                <th>Passed </th>
            </tr>
        
    <?php

    while($result = mysqli_fetch_assoc($data)){
        echo "
        <tr>
        <td>".$result['rollno']."</td>
        <td>".$result['name']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['faculty']."</td>
        <td>".$result['passed']."</td>
        <td><a href=update.php?rn=",urlencode($result['rollno']),"&fn=",urlencode($result['name']),"&gn=",urlencode($result['gender']),"&fa=",urlencode($result['faculty']),"&po=",urlencode($result['passed']),">Edit</a></td>
        <td><a href=delete.php?rn=",urlencode($result['rollno']),">Delete</a></td>
    </tr>
        "
        ;
    }
}
else{
    echo "Table has no records";
}

?>
    </table>
        
    </body>
</html>