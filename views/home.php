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

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" type="image/x-icon" href="images/bolt-lightning-solid.svg">
</head>
<body class="font-roboto">
    
    <?php require ("templates/header.php"); ?>
        
    <main>
        <!-- ****** -->
        <!-- SEARCH -->
        <!-- ****** -->
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
                        Insert inspirational quote here
                    </h2>
                </div>
            </div>
            
            <div class="p-7" >
                <search>
                    <form action="search-word" >
                        
                        <div class="pt-1 pb-1 flex flex-row h-12 flex-nowrap">
                            <input class="w-96  rounded-l-2xl rounded-r-2xl 
                             px-4"
                            type="search" id="search-word" name="search-word" 
                            placeholder="Search English"/>

                            <button 
                            class="bg-yellow-300 flex items-center justify-center
                            rounded-3xl font-extrabold w-1.5 h-1.5 p-5 text-center ml-
                            hover:bg-yellow-400"
                                type="submit">
                                <i class=" fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>

                  

                    </form>
                </search>
            </div>
        </section>

       

            <section class="m-14" >

                <h1 class="text-3xl my-3" >
                    Explore the Dictionary
                </h1>

    
                <section class="border-solid border-2 border-neutral-100 w-1/2 p-3 my-5">

                    <div class="flex flex-row justify-between" >

                        <div class="w-1/2 bg-yellow-300 
                        flex flex-col justify-center text-center">

                                <div class="text-lg uppercase">
                                    Word of the day
                                </div>

                                <div class="text-3xl lowercase">
                                    Cheek
                                </div>
                        </div>

                        <div class="p-3 w-1/2" >
                            
                            <p class="py-2">
                                The soft part of your face that is below your eye
                                and between your mouth and ear
                            </p>
            
                            <button class="bg-sky-600 py-1 px-6 text-white
                            rounded-2xl 
                            hover:bg-sky-700
                            font-semibold"
                            
                            type="button" >
                                About this
                            </button>
                        </div>

                    </div>
    
                
                </section>
    
                <section class="border-solid border-2 border-neutral-100 w-1/2 p-3 my-5">

                    <div class="flex flex-row justify-between" >

                        <div class="w-1/2">
                            <img src="images/word-cloud-679936_1280.png" alt="">
                        </div>


                        <div class="p-3 w-1/2" >

                            <h2 class="text-lg font-medium uppercase font-thin" >
                                New words
                            </h2>
            
                            <h3 class="text-3xl py-2">
                                thinification
                            </h3>
            
                            <div class="text-xs text-slate-400 font-semibold py-2" >
                                September 30, 2024
                            </div>
            
                            <button type="button" 
                            class="bg-sky-600 py-1 px-6 text-white py-2
                            hover:bg-sky-700
                            rounded-2xl font-semibold" >
                                More new words
                            </button>
                        </div>
                    </div>

                  
                </section>


                <section class="bg-sky-600 w-1/2 p-3 my-5 text-white font-semibold">
                    <h2 class="text-2xl m-5">
                        Browse the English Dictionary
                    </h2>
    
                    <div class="grid grid-cols-7 gap-4 mx-4 text-center place-items-center">
                        <div class="flex items-center" >
                        <a class="bg-sky-300 px-2 py-1 rounded-full hover:bg-sky-400"
                        href="#">
                            0-9
                        </a>    
                        </div>
                        <div class="flex items-center" >
                            <a class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400"
                            href="#">
                                a
                        </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400"
                            >
                                b
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#" 
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                c
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                d
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                e
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                f
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                g
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                h
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                i
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                j
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                k
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                l
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                m
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                n
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                o
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                p
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                q
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                r
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                s
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                t
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                u
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                v
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                w
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                x
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                y
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                            class="bg-sky-300 px-3 py-0.5 rounded-full hover:bg-sky-400">
                                z
                            </a>
                        </div>
                    </div>
    
                </section>

            </section>
    </main>

    <?php require ("templates/footer.php"); ?>

    
</body>
</html>