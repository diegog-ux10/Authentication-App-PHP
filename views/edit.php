<?php

foreach ($data as $key => $value) {
    $$key = $value;
}

?>

<header class="w-screen px-24 py-12">
    <nav class="w-full flex flex-row justify-between">
        <div>
            <img src="./assets/images/devchallenges1.png" alt="" />
        </div>
        <span id="dropdown-menu-toggle">
            <div class="flex items-center cursor-pointer gap-4">
                <?php
                if ($photo) {
                    $dataImg = base64_encode(stripslashes($photo));
                    echo "<img src='data:image/jpg;base64,$dataImg' alt='' height='32' width='32' class='rounded'>";
                } else {
                    echo "<img src='./../assets/images/blank-profile-picture-973460_1280.webp' alt='' height='32' width='32' class='rounded'>";
                }
                ?>
                <span><?php echo  $name ? $name : "John" ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg>
            </div>
        </span>
    </nav>
</header>
<main class="w-screen flex justify-center mt-8 mb-16 relative">

    <div id="dropdown-menu" class="hide-toggle absolute right-24 bg-white flex flex-col p-4 drop-shadow-md border border rounded-lg border-slate-300" style="top: -68px">
        <a href="#" class="flex items-center gap-4 p-2 hover:bg-gray-200 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            My Profile
        </a>
        <a href="" class="flex items-center gap-4 p-2 hover:bg-gray-200 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
            </svg>
            Group Chat
        </a>
        <hr class="my-2" />
        <a href="" class="flex items-center gap-4 text-red-600 p-2 hover:bg-gray-200 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fill-red-600" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
            </svg>
            Logout
        </a>
    </div>

    <div class="w-6/12 text-center">
        <div class="flex text-left items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-blue-600" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
            </svg>
            <a href="/" class="text-blue-600">Back</a>
        </div>
        <div class="w-full flex flex-col mt-8 rounded-3xl border border-slate-300 bg-white">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="flex w-full justify-between items-center px-16 py-8">
                    <div class="text-left">
                        <h4 class="text-2xl">Change Info</h4>
                        <p class="text-sm">
                            Changes will be reflected to every services
                        </p>
                    </div>
                </div>

                <div class="flex gap-20 items-center px-16 py-8">
                    <label for="photo" class="w-20 h-20 relative rounded-md overflow-hidden cursor-pointer">
                        <?php
                        if ($photo) {
                            $dataImg = base64_encode(stripslashes($photo));
                            echo "<img src='data:image/jpg;base64,$dataImg' alt=''  class='brightness-50 hover:brightness-100 object-cover h-full'>";
                        } else {
                            echo "<img src='./../assets/images/blank-profile-picture-973460_1280.webp' alt=''  class='brightness-50 hover:brightness-100 object-cover'>";
                        }
                        ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="absolute inset-0 m-auto" viewBox="0 0 16 16">
                            <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                            <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
                        </svg>
                    </label>
                    <label for="photo" class="cursor-pointer">
                        <p class="text-slate-300 font-medium hover:text-slate-500">CHANGE PHOTO</p>
                    </label>
                    <input id="photo" name="photo" type="file" hidden />
                </div>

                <div class="flex px-16 py-8 flex-col text-left">
                    <label for="name" class="text-left w-fit text-xs font-medium text-slate-500">Name</label>
                    <input id="name" name="name" type="text" class="caret-pink-500 w-full rounded-2xl border border-gray-300 bg-inherit p-3 mt-2 text-neutral-800 <?php echo $model->hasError('name') ? 'border-red-500' : '' ?>" />
                    <span class="mt-2 text-sm text-red-500">
                        <?php echo $model->getFirstError("name"); ?>
                    </span>
                </div>

                <div class="flex px-16 py-8 flex-col text-left">
                    <label for="bio" class="text-left w-fit text-xs font-medium text-slate-500">Bio</label>
                    <textarea id="bio" name="bio" class="w-full rounded-2xl border border-gray-300 bg-inherit p-3 shadow shadow-gray-100 mt-2 appearance-none outline-none text-neutral-800 <?php echo $model->hasError('name') ? 'border-red-500' : '' ?>"></textarea>
                    <span class="mt-2 text-sm text-red-500">
                        <?php echo $model->getFirstError("bio"); ?>
                    </span>
                </div>

                <div class="flex px-16 py-8 flex-col text-left">
                    <label for="phone" class="text-left w-fit text-xs font-medium text-slate-500">Phone</label>
                    <input id="phone" name="phone" type="text" class="w-full rounded-2xl border border-gray-300 bg-inherit p-3 shadow shadow-gray-100 mt-2 appearance-none outline-none text-neutral-800 <?php echo $model->hasError('name') ? 'border-red-500' : '' ?>" />
                    <span class="mt-2 text-sm text-red-500">
                        <?php echo $model->getFirstError("phone"); ?>
                    </span>
                </div>

                <div class="flex px-16 py-8 flex-col text-left">
                    <label for="email" class="text-left w-fit text-xs font-medium text-slate-500">Email</label>
                    <input id="email" name="email" type="email" class="w-full rounded-2xl border border-gray-300 bg-inherit p-3 shadow shadow-gray-100 mt-2 appearance-none outline-none text-neutral-800 <?php echo $model->hasError('name') ? 'border-red-500' : '' ?>" />
                    <span class="mt-2 text-sm text-red-500">
                        <?php echo $model->getFirstError("email"); ?>
                    </span>
                </div>

                <div class="flex px-16 py-8 flex-col text-left">
                    <label for="password" class="text-left w-fit text-xs font-medium text-slate-500">Password</label>
                    <input id="password" name="password" type="password" class="w-full rounded-2xl border border-gray-300 bg-inherit p-3 shadow shadow-gray-100 mt-2 appearance-none outline-none text-neutral-800 <?php echo $model->hasError('name') ? 'border-red-500' : '' ?>" />
                    <span class="mt-2 text-sm text-red-500">
                        <?php echo $model->getFirstError("password"); ?>
                    </span>
                </div>

                <div class="flex px-16 py-8 flex-col text-left">
                    <button type="submit" class="w-24 rounded-lg bg-blue-600 mb-5 text-base text-white py-2.5 hover:bg-blue-800 transition-colors">
                        Save
                    </button>
                </div>
        </div>
        </form>
    </div>
</main>