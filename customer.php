<?php 

include ('includes/config.php');

// check if id is set and if its greater than 0
if (isset($_GET['id']) && (int)$_GET['id'] > 0) {

  $sql = 'SELECT * FROM customer WHERE id = ' . $_GET['id'];

  $result = mysqli_query($conn, $sql);

  $customer = mysqli_fetch_row($result);


} else {
  global $error_message;
  $error_message = 'Id not valid, try again';
}

// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@500&family=Roboto+Condensed&display=swap"
    rel="stylesheet">
  <!-- 
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    -->
  <title>Customer Page</title>
</head>
<body>

  <header>
    <h1>Customer Info</h1>
  </header>
  

  <!-- SINGLE CUSTOMER -->
  <main>

  <!-- Start of table -->
  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>DOB</th>
      <th>Driver License Number</th>
      <th>Phone Number</th>
      <th>Email</th>
    </tr>

    <!-- Table contents -->
    <tr>
      <td>
        <p><?php echo $customer[1]; ?></p>
      </td>
      <td>
      <p><?php echo $customer[2]; ?></p>
      </td>
      <td>
        <p><?php echo $customer[3]; ?></p>
      </td>
      <td>
        <p><?php echo $customer[4]; ?></p>
      </td>
      <td>
        <p><?php echo $customer[6]; ?></p>
      </td>
      <td>
        <p><?php echo $customer[5]; ?></p>
      </td>
    </tr>
  </table>
  
  <!-- Back button to customer list page -->
  <a href="index.php" class="btn">Back</a>

  </main>

</body>
</html>