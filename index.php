<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List of Users</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h3>Users</h3>
  <p>
    <?php
    if(isset($_GET['save-success'])) {
      echo "Successfully saved!";
    }
    ?>
  </p>
  <h4>
    <a href="user/add-user.php">Add New User</a>
  </h4>
  <table>
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Gender</th>
      <th>Action</th>
    </thead>
    <tbody>
      <?php
      require('php/user/users.php');
      while ($row = $result->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['first_name']; ?>
          <?php echo $row['last_name']; ?></td>
        <td class="capitalize"><?php echo $row['gender']; ?></td>
        <td>
          <a href="user/edit-user.php?id=<?php echo $row['id']; ?>">Edit</a>
          <a href="user/delete-user.php?id=<?php echo $row['id']; ?>">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>