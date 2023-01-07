<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>hyprOSS - Employees</title>
</head>
<body>
    <div class="container">
        <h2>hyprOSS Employee Data</h2>
        <div class="centerize">
            <table border=1>
                <tr>
                    <th>NO</th>
                    <th>Name</th>
                    <th>NIK</th>
                    <th>Birth Place</th>
                    <th>Birth Date</th>
                    <th>Division</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <?php 
                include 'config/db_handler.php';
                $no = 1;
                $data = mysqli_query($db_handler,"select * from employee");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['name']; ?></td>
                        <td><?php echo $d['nik']; ?></td>
                        <td><?php echo $d['bplace']; ?></td>
                        <td><?php echo $d['bdate']; ?></td>
                        <td><?php echo $d['division']; ?></td>
                        <td><?php echo $d['address']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $d['id']; ?>">  <i class="material-icons link-icons">create</i>
</a>
                            <a href="src/php/delete_employee.php?id=<?php echo $d['id']; ?>">  <i class="material-icons link-icons">delete</i>
</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
            </table>
        </div>
    
        <a href="add.php">
            <button class="btn_solid-main">Add Data</button>
        </a>
    </div>
</body>
</html>