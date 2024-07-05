<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $package = $_POST["package"];

  $order_details = "Name: $name\n";
  $order_details.= "Email: $email\n";
  $order_details.= "Phone: $phone\n";
  $order_details.= "Package: $package\n";

  $file = fopen("orders.txt", "a");

  fwrite($file, $order_details);

  fclose($file);

  echo 'Order placed successfully!';
?>