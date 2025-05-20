<?php

$companyName = 'Blue Ocean Docker';

$blurb = "Welcome to lesson 4. We're going to build a very simple Docker image. While there's not much to it, it should give you a very broad idea of what's possible.";

$menu = [
    [
        'content' => 'Product',
        'href' => '/product',
    ],
    [
        'content' => 'Features',
        'href' => '/features',
    ],
    [
        'content' => 'Resources',
        'href' => '/resources',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$companyName?></title>
        <link href="./style.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
        <div class="bg-white">
            <header class="absolute inset-x-0 top-0 z-50">
                <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
                    <div class="flex lg:flex-1">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only"><?=$companyName?></span>
                            <img class="h-10 w-auto" src="/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="flex gap-x-4 lg:gap-x-12">
                        <?php foreach ($menu as $menuItem): ?>
                            <a
                                href="<?=$menuItem['href']?>"
                                class="text-sm/6 font-semibold text-gray-900"
                            >
                                <?=$menuItem['content']?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </nav>
            </header>
            <main class="isolate">
                <div class="relative isolate -z-10">
                    <svg class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-gray-200 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]" aria-hidden="true">
                        <defs>
                            <pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                                <path d="M.5 200V.5H200" fill="none" />
                            </pattern>
                        </defs>
                        <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                            <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
                        </svg>
                        <rect width="100%" height="100%" stroke-width="0" fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)" />
                    </svg>
                    <div class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48" aria-hidden="true">
                        <div class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)"></div>
                    </div>
                    <div class="overflow-hidden">
                        <div class="mx-auto max-w-7xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32">
                            <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                                <div class="relative w-full lg:max-w-xl lg:shrink-0 xl:max-w-2xl">
                                    <h1 class="text-pretty text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                                        <?=$companyName?>
                                    </h1>
                                    <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:max-w-md sm:text-xl/8 lg:max-w-none">
                                        <?=$blurb?>
                                    </p>
                                </div>
                                <div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
                                    <div class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80">
                                        <div class="relative">
                                            <img src="https://images.unsplash.com/photo-1518837695005-2083093ee35b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                            <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                        </div>
                                    </div>
                                    <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
                                        <div class="relative">
                                            <img src="https://images.unsplash.com/photo-1505118380757-91f5f5632de0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                            <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                        </div>
                                        <div class="relative">
                                            <img src="https://images.unsplash.com/photo-1559962219-f52ccd86944e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=396&h=528&q=80" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                            <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                        </div>
                                    </div>
                                    <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
                                        <div class="relative">
                                            <img src="https://images.unsplash.com/photo-1476673160081-cf065607f449?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=left&w=400&h=528&q=80" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                            <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                        </div>
                                        <div class="relative">
                                            <img src="https://images.unsplash.com/photo-1584794171574-fe3f84b43838?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                            <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-20 xl:mx-auto xl:max-w-7xl xl:px-8">
                    <img src="https://images.unsplash.com/photo-1560260240-c6ef90a163a4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80" alt="" class="aspect-[5/2] w-full object-cover xl:rounded-3xl">
                </div>
            </main>
            <footer class="mt-6">
                <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
                    <nav class="-mb-6 flex flex-wrap justify-center gap-x-12 gap-y-3 text-sm/6" aria-label="Footer">
                        <?php foreach ($menu as $menuItem): ?>
                            <a
                                href="<?=$menuItem['href']?>"
                                class="text-gray-600 hover:text-gray-900"
                            >
                                <?=$menuItem['content']?>
                            </a>
                        <?php endforeach; ?>
                    </nav>
                    <p class="mt-10 text-center text-sm/6 text-gray-600">&copy; 2024 <?=$companyName?>. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
