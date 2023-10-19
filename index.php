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
    session_start();

    if (isset($_SESSION["save-success"]) && $_SESSION["save-success"]) {
        echo '<div class="notification success">Successfully saved!</div>';
        unset($_SESSION["save-success"]);
    } else if (isset($_GET['delete-success'])) {
      echo '<div class="notification success">Deleted successfully!</div>';
    } else if (isset($_SESSION["updated-success"])) {
      $updatedUserId = $_SESSION["updated-success"];
      echo '<div class="notification success">User ID ' . $updatedUserId . ' - Updated Successfully!</div';
      unset($_SESSION["updated-success"]);
    }
    ?>
  </p>

  <h4>
    <a href="user/add-user.php">+ Add New User</a>
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
        <td class="capitalize"><?php echo $row['last_name']; ?>,
          <?php echo $row['first_name']; ?></td>
        <td class="capitalize"><?php echo $row['gender']; ?></td>
        <td>
          <a class="capitalize" href="user/edit-user.php?id=<?php echo $row['id']; ?>">edit</a>
          <a class="capitalize" href="user/delete-user.php?id=<?php echo $row['id']; ?>">delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

  <script>
  var notification = document.querySelector('.notification');

  if (notification) {
    setTimeout(function() {
      notification.classList.add('hidden');
    }, 3000);
  }
  </script>



</body>

</html>