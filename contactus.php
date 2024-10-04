<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.7/flowbite.min.js"></script>
    <title>ContactUs</title>
</head>

<body>
    <?php include('navbar.php'); ?>


    <div class="mt-10 max-w-7xl mx-auto ">
        <div class="mt-4 flex space-x-4 gap-8 justify-center">
            <a :href="mailto:${email}" class="text-gray-900 hover:text-gray-900">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </a>
            <a :href="https://www.facebook.com/${facebook}" class="text-gray-900 hover:text-gray-900">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                </svg>
            </a>
            <a :href="https://www.instagram.com/${instagram}" class="text-gray-900 hover:text-gray-900">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 50 50" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z">
                    </path>
                </svg>
            </a>
        </div>

        <div class="flex flex-col space-y-4">
            <div class="mt-11">
                <!-- <label for="name" class="block text-sm font-medium text-gray-700">
          Name
        </label> -->
                <input type="text" id="name"
                    class="mt-1 focus:ring-gray-900 focus:border-gray-900 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    placeholder="Enter your name" />
            </div>
            <div>
                <!-- <label for="email" class="block text-sm font-medium text-gray-700">
          Email
        </label> -->
                <input type="email" id="email"
                    class="mt-1 focus:ring-gray-900 focus:border-gray-900 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    placeholder="Enter your email" />
            </div>
            <div class="mt-11">
                <!-- <label for="message" class="block text-sm font-medium text-gray-700">
          Message
        </label> -->
                <textarea id="message" rows="12"
                    class="mt-1 focus:ring-gray-900 focus:border-gray-900 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    placeholder="Enter your message"></textarea>
            </div>
            <div class="flex justify-center mt-11">
                <button class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-8 rounded w-full max-w-7xl">
                    Send
                </button>
            </div>
        </div>
    </div>


    <?php include 'footer.php'; ?>

</body>

</html>