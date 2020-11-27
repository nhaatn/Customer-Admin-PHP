<?php

include('includes/config.php');


// *******************
// Fetch all
// GET '/customers/'
//********************

// write query for all customer
$sql = 'SELECT * FROM customer';

// get the result set (set of rows)
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);


// *******************
// Cleanup
//********************

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
  <title>Home Page</title>
</head>
<body>
 
<main class="customers">
  <h1 class="title">Customers</h1>

  <!-- Loop through customers -->
  <?php foreach($customers as $customer) { ?>
    <section class="customer-info">
      <a href="customer.php?id=<?php echo $customer['id']; ?>">
        <h2>
          <?php echo $customer['last_name']; ?>
          <?php echo $customer['first_name']; ?>
        </h2>
      </a>
  
        <p>Phone number: <?php echo $customer['phone']; ?></p>
        <p>Email: <?php echo $customer['email']; ?></p>
  
      </section>
    <?php } ?>

</main>


</body>
</html>