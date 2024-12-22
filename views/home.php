<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ENV["APP_TITLE"] ?><?php if ( isset(ENV["CURRENT_ENV"]) && ENV["CURRENT_ENV"] == "dev" ) {
        echo " | DEV";
    } ?></title>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/tailwind_style.css" >
    <link rel="icon" type="image/x-icon" href="images/spell-check-solid.svg">
    <link rel="stylesheet" href="css/custom_styles.css" >
</head>

<body class="font-roboto overflow-x-hidden" >

    <?php require ("templates/header.php"); ?>
    
    <main class="mt-20">
        <section class="flex flex-row justify-start md:justify-between p-1 md:p-10
        bg-gradient-to-r from-cyan-500 to-blue-500 mb-20" >
            <div class="hidden md:flex md:flex-row md:items-center">
                <div class="hidden md:block p-1 md:p-7 text-white font-semibold">
                    <h1 class="p-1 text-2xl">
                    <?= ENV["APP_TITLE"] ?>
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

                
                <div class="grid grid-cols-1 gap-5 ">
                <div>
                    <!-- /****************** -->
                    <!-- * WORD OF THE DAY * -->
                    <!-- ******************/ -->
                    <?php require ("templates/word_of_the_day.php"); ?>
                    <!-- /******************* -->
                    <!-- * BROWSE BY LETTER * -->
                    <!-- *******************/ -->
                    <?php require ("templates/browse_by_letter.php"); ?>
            </div>
            </section>
            </div>
        </section>
    </main>

    <?php require ("views/templates/sidebar.php"); ?>

    
    <?php require ("views/templates/footer.php"); ?>

    <script src="js/scripts.js"></script>
</body>
</html>