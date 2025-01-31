<?php
// Get the ID from the URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Load the JSON data from file
$jsonData = file_get_contents('data.json');
$data = json_decode($jsonData, true);

// Find the carousel with the given ID
$carousel = null;
foreach ($data['carousels'] as $item) {
    if ($item['id'] == $id) {
        $carousel = $item;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Animated on Scroll -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">


    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        .bg {
            background-color: #212529;
            /* background-color: rgb(32, 33, 36); */
        }

        .bg1 {
            /* background-color: red; */
            background-color: rgb(32, 33, 36);
        }

        .dm-sans {
            font-family: "DM Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 200;
            font-style: normal;
        }

        .cg-light {
            font-family: "Cormorant Garamond", serif;
            font-weight: 700;
            font-style: normal;
        }

        .raleway {
            font-family: "Raleway", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }

        .color {
            color: #FFC107;
        }

        /* Ensure the modal image is centered and covers the screen */
        #modal img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body class="bg">
    <!-- Navbar -->
    <nav class="bg1 border-gray-200 md:mt-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-10 py-4  ">
            <a href="index.html" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="text-white self-center text-2xl font-semibold whitespace-nowrap">Satrio Bagas P</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border  rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 raleway">
                    <!-- <li>
                            <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-600  md:bg-transparent 
                            md:p-0 md:hover:text-blue-700 ">Home</a> <!-- md:text-blue-700 --> <!-- Untuk active -->
                    </li>

                    <li>
                        <a href="index.html" class="block py-2 px-3 text-white rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:py-5 ">HOME</a>
                    </li>
                    <li>
                        <a href="index.html#about" class="block py-2 px-3 text-white rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:py-5 ">ABOUT</a>
                    </li>
                    <li>
                        <a href="index.html#projects" class="block py-2 px-3 text-white rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:py-5 ">PROYEK</a>
                    </li>
                    <li>
                        <a href="index.html#contact" class="block py-2 px-3 text-white rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:py-5 ">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Content -->
    <div class="h max-w-screen-xl grid grid-cols-1 md:mx-auto  mb-10 ">
        <?php if ($carousel != NULL) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 px-10 gap-4 mt-10 flex items-center">
                <div class="image">
                    <div id="default-carousel" class="relative h-full w-full z-10" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <?php foreach ($carousel['items'] as $index => $item) : ?>
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="<?= $item['src'] ?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 cursor-pointer" alt="..." onclick="openModal(this)">
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <?php foreach ($carousel['items'] as $index => $item) : ?>
                                <button type="button" class="w-3 h-3 rounded-full dark:bg-white" aria-current="<?= ($index === 0) ? 'true' : 'false' ?>" aria-label="Slide '. <?= $index + 1; ?>.'" data-carousel-slide-to="<?= $index ?>"></button>
                            <?php endforeach; ?>

                        </div>

                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-6 h-6 md:w-10 md:h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-6 h-6 md:w-10 md:h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>

                </div>
                <div class="desc">
                    <div class=" p-6 bg1 border border-gray-600 rounded-lg shadow">
                        <div class="heading">
                            <h1 class="text-white font-bold mb-2 flex">
                                Project info <svg class="w-4 h-4 color" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </h1>
                            <h1 class="text-white font-bold mb-1">
                                Project Name : <span class="text-white max-w-2xl dm-sans"><?= $carousel['title'] ?></span>
                            </h1>
                            <h1 class="text-white font-bold mb-1">
                                Project Client : <span class="text-white max-w-2xl dm-sans"><?= $carousel['client'] ?></span>
                            </h1>
                            <h1 class="text-white font-bold mb-1">
                                Project Build : <span class="text-white max-w-2xl dm-sans"><?= $carousel['build'] ?></span>
                            </h1>
                            <h1 class="text-white font-bold">
                                Project Desc : <span class="text-white max-w-2xl dm-sans"><?= $carousel['desc'] ?></span>
                            </h1>
                        </div>
                        <div class="links flex mt-4 mb-5">
                            <?php if ($carousel['category'] == "wordpress") : ?>
                                <a href="<?= $carousel['link'] ?>" target="_blank">
                                    <span class="flex items-center bg-gray-700 text-gray-300 text-xs font-medium me-2 px-2.5 py-0.5 rounded hover:bg-gray-600 transition duration-300 ease-in-out ">
                                        <svg class="mr-2 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
                                        </svg>
                                        Link Demo
                                    </span>
                                </a>
                            <?php endif; ?>
                            <?php if ($carousel['category'] == "ownproject") : ?>
                                <a href="<?= $carousel['link'] ?>" target="_blank">
                                    <span class="flex items-center bg-gray-700 text-gray-300 text-xs font-medium me-2 px-2.5 py-0.5 rounded">
                                        <svg class="mr-2 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z" clip-rule="evenodd" />
                                        </svg>
                                        Link GitHub
                                    </span>
                                </a>
                            <?php endif ?>
                        </div>
                        <a href="index.html"> <span class="color">Back to Home</span></a>

                    </div>

                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 hidden z-20">
        <button id="prevBtn" class="absolute left-4 p-4 text-white">
            <span class="inline-flex items-center justify-center w-6 h-6 md:w-10 md:h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <img src="" alt="Zoomed Image" id="modalImage" class="max-w-full max-h-full">
        <button id="nextBtn" class="absolute right-4 p-4 text-white">
            <span class="inline-flex items-center justify-center w-6 h-6 md:w-10 md:h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!-- Footer -->
    <div class="">
        <footer class="bg">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="index.html" class="hover:underline">Satrio Bagas™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 sm:justify-center sm:mt-0">
                        <a href="https://github.com/SatrioBagasPangestu" target="_blank" class="color hover:text-gray-200 ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=6281336180467&text=Halo+Satrio+%21" target="_blank" class="color hover:text-gray-200 ms-5">
                            <svg class="h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd" />
                                <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/satriobagas.p/" target="_blank" class="color hover:text-gray-200 ms-5">
                            <svg class="h-4  transition duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Instagram account</span>
                        </a>

                        <a href="https://www.linkedin.com/in/satrio-bagas-7994882b7/" target="_blank" class="color hover:text-gray-200 ms-5">
                            <svg class="h-4 transition duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd" />
                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                            </svg>
                            <span class="sr-only">Linkin account</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script>
    const modal = document.getElementById('modal');
    const modalImage = document.getElementById('modalImage');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex;
    let currentCarouselImages;

    function openModal(element, index) {
        currentIndex = index;
        currentCarouselImages = Array.from(element.parentElement.parentElement.querySelectorAll('img'));
        modalImage.src = element.src;
        modal.classList.remove('hidden');
    }

    function updateModalImage(index) {
        modalImage.src = currentCarouselImages[index].src;
    }

    prevBtn.addEventListener('click', (event) => {
        event.stopPropagation();
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : currentCarouselImages.length - 1;
        updateModalImage(currentIndex);
    });

    nextBtn.addEventListener('click', (event) => {
        event.stopPropagation();
        currentIndex = (currentIndex < currentCarouselImages.length - 1) ? currentIndex + 1 : 0;
        updateModalImage(currentIndex);
    });

    // Hide modal on click outside of image
    modal.addEventListener('click', (e) => {
        if (e.target !== modalImage && e.target !== prevBtn && e.target !== nextBtn) {
            modal.classList.add('hidden');
        }
    });
</script>

</html>