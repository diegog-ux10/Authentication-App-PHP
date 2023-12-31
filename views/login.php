<?php

$this->title = "Login";

/**@var $model \models\User */

foreach ($model as $key => $value) {
    $$key = $value;
}


?>

<div class="flex h-screen flex-col justify-center px-6 py-12 lg:px-8">
    <div class="border-solid border-2 border-#DBDBDB p-16 max-w-lg mx-auto rounded-3xl w-6/12">
        <form action="" method="post" novalidate>

            <div>
                <img class="w-auto" src="../assets/images/devchallenges1.png" alt="Your Company">
                <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-gray-900">Login</h2>
            </div>

            <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
                <div>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" value="<?php echo $email ?>" class="w-full rounded border border-gray-300 bg-inherit p-3 shadow shadow-gray-100 mt-2 appearance-none outline-none text-neutral-800 <?php echo $model->hasError('email') ? 'border-red-500' : '' ?>">
                    </div>
                    <span class="mt-2 text-sm text-red-500">
                        <?php echo $model->getFirstError("email"); ?>
                    </span>
                </div>

                <div>
                    <div class="mt-2">
                        <input id="password" name="password" value="<?php echo $password ?>" type="password" class="w-full rounded border border-gray-300 bg-inherit p-3 shadow shadow-gray-100 mt-2 appearance-none outline-none text-neutral-800 <?php echo $model->hasError('password') ? 'border-red-500' : '' ?>">
                    </div>
                    <span class="mt-2 text-sm text-red-500">
                        <?php echo $model->getFirstError("password"); ?>
                    </span>
                </div>

                <div class="mt-4">
                    <button type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
                </div>
        </form>
        <p class="mt-10 text-center text-sm text-gray-500">
            or continue with these social profile
        </p>
        <div class="flex justify-center gap-2 mt-2 social-icons_container">
            <img src="../assets/images/Gihub.png" alt="">
            <img src="../assets/images/Facebook.png" alt="">
            <img src="../assets/images/Google.png" alt="">
            <img src="../assets/images/Twitter.png" alt="">
        </div>
        <p class="mt-10 text-center text-sm text-gray-500">
            Don’t have an account yet?
            <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register</a>
        </p>
    </div>
</div>
</div>