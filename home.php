<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.7/flowbite.min.js"></script>
    <title>Home Page</title>
</head>

<body class="bg-gray-100">

    <!-- display navbar -->

    <?php include('navbar.php'); ?>

    <!-- display content below navbar -->

    <section class="bg-white dark:bg-gray-900 py-8 lg:py-16">
        <div class="grid max-w-screen-xl px-4 mx-auto lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Choose Delicacy The From <span style="color: #EC8305;">Best Healthy</span> Way To Life
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    If you want to enjoy your life with a healthy body & healthy mind, you are most welcome in our shopping zone. We serve quality groceries for you.
                </p>
                <div class="flex space-x-3"> <!-- Added flex and space for button separation -->
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-orange rounded-lg bg-green-500 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Start Shopping
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Order Process!
                    </a>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://png.pngtree.com/png-vector/20240314/ourmid/pngtree-grocery-basket-and-a-list-of-products-png-image_11952487.png" alt="mockup" class="object-cover">
            </div>
        </div>
    </section>


    <!-- hand display 3 container of free delivery, support and secure -->

    <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-3"> <!-- Added padding -->
        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-24 md:rounded-none md:rounded-s-lg" src="assets/images/delivery.png" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Free Shipping</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Free shipping on orders.</p>
            </div>
        </a>

        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-24 md:rounded-none md:rounded-s-lg" src="assets/images/service.png" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Support 24/7</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Support 24 hours a day.</p>
            </div>
        </a>

        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-24 md:rounded-none md:rounded-s-lg" src="assets/images/shield.png" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">100% Secured Payment</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Back Guarantee under 5 days.</p>
            </div>
        </a>
    </div>

    <br>

    <!-- handle Text Best selling Categories -->

    <div class="flex flex-col items-center mt-8"> <!-- Centering the text -->
        <p class="text-4xl font-semibold leading-normal text-gray-900 dark:text-white text-center">
            Top <span class="text-green-500">Best Selling</span> Categories
        </p>
        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 text-center">
            If you want to enjoy your life with a healthy body & healthy mind, you are most welcome in our shopping zone. We serve quality groceries for you.
        </p>
    </div>


    <!-- handle listview of Category container -->

    <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="assets/images/image1.jpg" alt="" />
        </a>
        <div class="p-2 flex justify-center">
            <a href="#">
                <h5 class="mb-0 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Vegetable</h5>
            </a>
        </div>
    </div>

    <br>

    <!-- <?php include 'footer.php'; ?> -->
</body>

</html>
