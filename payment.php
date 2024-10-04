<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.7/flowbite.min.js"></script>
    <title>Payment</title>
</head>

<body>
    <?php include('navbar.php'); ?>


    <!-- Text -->

    <div class="flex justify-center items-start">
        <p class="max-w-lg text-3xl font-semibold leading-loose text-gray-900 dark:text-white text-center">Payment</p>
    </div>

    <div class="min-h-screen flex items-start justify-center px-40">
        <ul class="w-full h-full divide-y divide-gray-200 dark:divide-gray-700">
            <li class="pb-3 sm:pb-4">
                <div class="flex items-center space-x-20 rtl:space-x-reverse w-full">
                    <div class="flex-shrink-0">
                        <img class="w-10 h-10 rounded-full" src="assets/images/fruit.png" alt="Apple image">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Apple
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        $320
                    </div>
                </div>
            </li>
            <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-20 rtl:space-x-reverse w-full">
                    <div class="flex-shrink-0">
                        <img class="w-10 h-10 rounded-full" src="assets/images/fruit.png" alt="Bonnie Green image">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Bonnie Green
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        $3467
                    </div>
                </div>
            </li>





            <!-- Total -->
            <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-20 rtl:space-x-reverse w-full">
                    <div class="flex-shrink-0">
                    <p class="max-w-lg text-3xl font-semibold leading-loose text-gray-900 dark:text-white text-center">TOTAL</p>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        $3467
                    </div>
                </div>
            </li>
        </ul>
    </div>



    <?php include 'footer.php'; ?>

</body>

</html>