<?php
include 'db.php';

$result = $conn->query("SELECT * FROM users");
?>

<h2>User List</h2>
<a href="insert.php">Add New User</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Action</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><a href="update.php?id=<?= $row['id'] ?>">Edit</a></td>
    </tr>
    <?php endwhile; ?>
</table>
