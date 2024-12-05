<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Moonlight Dictionary<?php if ( isset(ENV["CURRENT_ENV"]) && ENV["CURRENT_ENV"] == "dev" ) {
        echo " | DEV";
    } ?></title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/tailwind_style.css" >

    <link rel="icon" type="image/x-icon" href="images/moon-regular.svg">

    <link rel="stylesheet" href="css/custom_styles.css" >
</head>

<body class="font-roboto overflow-x-hidden" >

    <?php require ("templates/header.php"); ?>
    
    <main>
        <section class="flex flex-row justify-start md:justify-between p-1 md:p-10
        bg-gradient-to-r from-cyan-500 to-blue-500 mb-20" >
            <div class="hidden md:flex md:flex-row md:items-center">
                <div class="hidden md:block">
                    <img class="hidden lg:block w-32"
                    src="images/Uster-Nänikon-blazon.svg.png" alt="">
                </div>
                <div class="hidden md:block p-1 md:p-7 text-white font-semibold">
                    <h1 class="p-1 text-2xl max-w-48">
                        Moonlight Dictionary
                    </h1>
                </div>
            </div>
            <!-- ****** -->
            <!-- SEARCH -->
            <!-- ****** -->
            <div class="p-7" >
                <?php require ("templates/search.php"); ?>
            </div>
        </section >
        <section>
            <h1 class="text-3xl my-3 p-6 bg-gray-100 w-screen ml-0" >
                Explore the Dictionary
            </h1>
            <!-- /*********** -->
            <!-- * EXPLORE * -->
            <!-- ***********/ -->
            <section class="mx-5 w-5/6" >
                <div class="grid grid-cols-1 lg:grid-rows-2 lg:grid-cols-2 gap-5 ">
                        <?php require ("templates/word_of_the_day.php"); ?>
                        <?php require ("templates/new_words.php"); ?>
                        <?php require ("templates/word_lists_link.php"); ?>
                </div>
            </section>
            <!-- /******************* -->
            <!-- * BROWSE BY LETTER * -->
            <!-- *******************/ -->
            <h2 class="text-3xl my-3 p-6 bg-gray-100 w-screen ml-0">
                Browse the English Dictionary
            </h2>
            <section class="bg-sky-600 w-5/6 md:w-2/3 lg:w-1/2 xl:w-1/3 p-10 my-5 mx-5 text-white font-semibold ">
                <div class="grid grid-cols-7 gap-4 mx-4 text-center place-items-center">
                    <div class="flex items-center hover:underline" >
                        <a class="bg-sky-300 px-2 py-1 rounded-full hover:bg-sky-400"
                        href="<?= ROOT ?>/browse/0-9">
                            0-9
                        </a>    
                    </div>
                    <?php for ($i = 97; $i <= 122; $i++) { ?>
                        <div class="flex items-center hover:underline" >
                            <a class="bg-sky-300 px-3 py-0.5 
                            rounded-full hover:bg-sky-400"
                            href=
                            "<?= ROOT ?>/browse/<?= chr($i); ?>">
                                <?= chr($i); ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </section>
    </main>

    <!-- <?php require ("templates/footer.php"); ?> -->

    <?php require ("views/templates/sidebar.php"); ?>
    <script src="js/scripts.js"></script>
</body>
</html>