<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <a class="back" href="../index.php">
    < Back</a>
      <h3>Edit User</h3>
      <?php
  require('../php/user/user.php');
  while($row = $result->fetch_assoc()) {
  ?>
      <form action="../php/user/update-user.php" method="POST">
        <div>
          <label>First Name:</label><br>
          <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>">
        </div>
        <br>
        <div>
          <label>Last Name:</label><br>
          <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>">
        </div>
        <br>
        <div>
          <label>Gender:</label><br>
          <input id="red" type="radio" name="gender" value="male" <?php if($row['gender'] == 'male') echo 'checked'; ?>>
          Male
          <br>
          <input id="red" type="radio" name="gender" value="female" value="male"
            <?php if($row['gender'] == 'female') echo 'checked'; ?>> Female
          <br>
          <input id="red" type="radio" name="gender" value="other" value="male"
            <?php if($row['gender'] == 'other') echo 'checked'; ?>> Other
        </div>
        <br>
        <div>
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <button class="save" type="submit">Update</button>
        </div>
      </form>
      <?php } ?>
</body>

</html>