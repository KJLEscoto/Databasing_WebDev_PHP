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

          <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['edit-user'])) {
        header("location: user/edit-user.php");
        exit;
    }
}
?>
          <form method="post">
            <input type="submit" name="edit-user" value="Edit">
          </form>
          <a href="">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>