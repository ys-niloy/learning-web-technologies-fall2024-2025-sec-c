<?php

    session_start();
    require_once('../model/userModel.php');

    // if (!isset($_COOKIE['status'])) {
    //     header('location: login.html');
    //     exit();
    // }

    
    $conn = getConnection();

    
    if (!$conn) {
        die("Connection failed: ");
    }

    $sql = "SELECT * FROM user_info";
    $result = mysqli_query($conn, $sql);
?>
<html>

<head>
    <title>View Users</title>
</head>

<body>
    <h2>User list</h2>
    <a href='home.php'>Back </a> |
    <a href='../controller/logout.php'>logout </a>
    <br><br>

    <table border=1>
        <tr>
            <th>Name</th>
            <th>Company Name</th>
            <th>Contact No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['company_name']; ?></td>
                    <td><?php echo $row['contact_no']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                        <a href="edit.php?username=<?php echo $row['username']; ?>">EDIT</a> |
                        <a href="../controller/delete.php?username=<?php echo $row['username']; ?>">DELETE</a> 
                    </td>
                </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='5'>No users found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>

</html>
