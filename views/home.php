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
                    <h2 class="p-1 text-lg">
                        Words and such
                    </h2>
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
            <section class="m-14 mx-5" >

                <h1 class="text-3xl my-3" >
                    Explore the Dictionary
                </h1>

                <div class="flex flex-row gap-5 shrink-0" >

                    <div class="w-11/12">
                        <?php require ("templates/word_of_the_day.php"); ?>
                        <?php require ("templates/new_words.php"); ?>
                    </div>

                    <div>
                        <?php require ("templates/word_lists_link.php"); ?>
                    </div>
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
                        href="#">
                            0-9
                        </a>    
                    </div>
                    <div class="flex items-center hover:underline" >
                        <a class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400"
                        href="#">
                            a
                    </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400"
                        >
                            b
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#" 
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            c
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            d
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            e
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            f
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            g
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            h
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            i
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            j
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            k
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            l
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            m
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            n
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            o
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            p
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            q
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            r
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            s
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            t
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            u
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            v
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            w
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            x
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            y
                        </a>
                    </div>
                    <div class="flex items-center hover:underline">
                        <a href="#"
                        class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                            z
                        </a>
                    </div>
                </div>

            </section>

        </section>
        
    </main>

    <!-- <?php require ("templates/footer.php"); ?> -->

    
</body>
</html>