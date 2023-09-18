<?php

foreach ($user as $key => $value) {
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
        <a href="#" class="flex items-center gap-4 p-2 hover:bg-gray-200 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
            </svg>
            Group Chat
        </a>
        <hr class="my-2" />
        <a href="/logout" class="flex items-center gap-4 text-red-600 p-2 hover:bg-gray-200 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fill-red-600" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
            </svg>
            Logout
        </a>
    </div>
    <div class="w-6/12 text-center">

        <h1 class="text-4xl font-normal">Personal info</h1>
        <span class="text-lg">Basic info, like your name and photo</span>

        <div class="w-full flex flex-col mt-8 bg-white">
            <div class="flex w-full justify-between items-center px-16 py-8 border rounded-t-3xl border-slate-300">
                <div class="text-left">
                    <h4 class="text-2xl">Profile</h4>
                    <p class="text-sm">Some info may be visible to other people</p>
                </div>
                <a href="/edit">
                    <button class="border border-slate-300 rounded-3xl px-7 py-2 text-base text-slate-400 hover:bg-gray-300 hover:text-white" type="button">Edit</button>
                </a>
            </div>

            <div class="flex items-center px-16 py-8 border border-slate-300">
                <div class="basis-1/4 text-left">
                    <h4 class="text-slate-300">PHOTO</h4>
                </div>
                <div class="basis-1/2 text-left">
                    <?php
                    if (true) {
                        $dataImg = base64_encode(stripslashes($photo));
                        echo "<img src='data:image/jpg;base64,$dataImg' alt='' height='72' width='72' class='rounded object-cover h-full'>";
                    } else {
                        echo "<img src='./../assets/images/blank-profile-picture-973460_1280.webp' alt='' height='72' width='72' class='rounded'>";
                    }
                    ?>
                </div>
            </div>

            <div class="flex items-center px-16 py-8 border border-slate-300 flex-row">
                <div class="basis-1/4 text-left">
                    <h4 class="text-slate-300">NAME</h4>
                </div>
                <p class="basis-1/2 text-left"><?php echo  $name ? $name : "John" ?></p>
            </div>

            <div class="flex items-center px-16 py-8 border border-slate-300">
                <div class="basis-1/4 text-left">
                    <h4 class="text-slate-300">BIO</h4>
                </div>
                <p class="basis-1/2 text-left"><?php echo  $bio ? $bio : "Write your bio here" ?></p>
            </div>

            <div class="flex items-center px-16 py-8 border border-slate-300">
                <div class="basis-1/4 text-left">
                    <h4 class="text-slate-300">PHONE</h4>
                </div>
                <p class="basis-1/2 text-left"><?php echo  $phone ? $phone : "12345678" ?></p>
            </div>

            <div class="flex items-center px-16 py-8 border border-slate-300">
                <div class="basis-1/4 text-left">
                    <h4 class="text-slate-300">EMAIL</h4>
                </div>
                <p class="basis-1/2 text-left"><?php echo  $email ?? "example@example.com" ?></p>
            </div>

            <div class="flex items-center rounded-b-3xl px-16 py-8 border border-slate-300">
                <div class="basis-1/4 text-left">
                    <h4 class="text-slate-300">PASSWORD</h4>
                </div>
                <p class="basis-1/2 text-left" text-left>************</p>
            </div>
        </div>
    </div>
</main>