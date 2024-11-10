<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lightning Dictionary</title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/tailwind_style.css" >

    <link rel="icon" type="image/x-icon" href="images/bolt-lightning-solid.svg">

    <link rel="stylesheet" href="css/custom_styles.css" >
</head>
<body class="font-roboto" >

    <?php require ("templates/header.php"); ?>
    
    <main>
        
        <section class="flex flex-row justify-between p-7
        bg-gradient-to-r from-cyan-500 to-blue-500 mb-20" >
            <div class="flex flex-row items-center">
                <div>
                    <img class="w-32"
                    src="images/Blason_Pont-de-Claix.svg.png" alt="">
                </div>
                <div class="p-7 text-white font-semibold">
                    <h1 class="p-1 text-2xl max-w-48">
                        Lightning Dictionary
                    </h1>
            
                </div>
            </div>

            <!-- ****** -->
            <!-- SEARCH -->
            <!-- ****** -->
            <div class="p-7" >
            <?php require ("templates/search.php"); ?>
            </div>


        </section>


            <!-- /*********** -->
            <!-- * EXPLORE * -->
            <!-- ***********/ -->
            <section class="mx-5 w-1/2" >

                <h1 class="text-3xl my-3" >
                    Explore the Dictionary
                </h1>

                <div class="grid grid-cols-1 gap-5">
                    <?php require ("templates/word_of_the_day.php"); ?>
                    <?php require ("templates/new_words.php"); ?>
                    <?php require ("templates/word_lists_link.php"); ?>
                </div>

                
            </section>

            <!-- /******************* -->
            <!-- * BROWSE BY LETTER * -->
            <!-- *******************/ -->
                   
            <section class="bg-sky-600 w-1/2 p-3 my-5 mx-5 text-white font-semibold">
                <h2 class="text-2xl m-5">
                    Browse the English Dictionary
                </h2>
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