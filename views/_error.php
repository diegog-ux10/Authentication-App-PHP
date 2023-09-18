<?php

/**
 * @var $exception \Exception 
 */
?>

<main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="text-center">
    <p class="text-base font-semibold text-indigo-600"><?php echo $exception->getCode() ?></p>
    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Error</h1>
    <p class="mt-6 text-base leading-7 text-gray-600"><?php echo $exception->getMessage() ?></p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="/register" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</a>
      <a href="#" class="text-sm font-semibold text-gray-900">Contact support <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</main>