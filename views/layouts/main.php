<?php

/**
 * @var $this \core\View 
 * */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $this->title; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../../assets/base.css">
</head>

<body class="bg-slate-50">
  {{content}}
  <script src="./../../assets/js/main.js"></script>
</body>

</html>