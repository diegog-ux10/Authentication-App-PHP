<?php

use core\Application;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../assets/base.css">
</head>

<body>
    <?php if (Application::$app->session->getFlash("success")) : ?>
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert"><?php echo Application::$app->session->getFlash("success") ?></p>
        </div>
    <?php endif ?>
    {{content}}
</body>

</html>