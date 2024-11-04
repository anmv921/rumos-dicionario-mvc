<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email confirmed | Lightning Dictionary</title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/css/tailwind_style.css" >

    <link rel="icon" type="image/x-icon" href="/images/bolt-lightning-solid.svg">

    <link rel="stylesheet" href="/css/custom_styles.css" >

</head>
<body>

    <?php require ("templates/header.php"); ?>
    
    <main>

        <section class="text-center bg-gray-100 py-10" >

            <?php if($bool_success) { ?>
            <h1 class="text-xl uppercase bold text-gray-700 my-5" >
                Email confirmed
            </h1>
            <?php } else { ?>
                <div class="w-4/8 m-auto text-center">
                    <div class="text-red-500" >
                        Activation error
                    </div>
                </div>
            <?php } ?>

            <div>
                <button type="button"
                class="bg-sky-500 text-white 
                    uppercase font-semibold my-3
                    hover:bg-white
                    hover:border-solid hover:border-sky-500 hover:border-2
                    hover:text-sky-500 hover:underline
                    shadow-5xl p-2 w-64 h-12" >
                    <a href="/">Back to Home</a>
                </button>
            </div>


        </section>

    
    </main>

    <!-- <?php require ("templates/footer.php"); ?> -->


    <?php require ("views/templates/sidebar.php"); ?>
    <script src="/js/scripts.js"></script>

</body>
</html>