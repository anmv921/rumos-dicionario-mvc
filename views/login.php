<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/css/tailwind_style.css" >

    <link rel="icon" type="image/x-icon" href="../images/<?= ENV["ICON_FILENAME"] ?>">

    <link rel="stylesheet" href="/css/custom_styles.css" >

</head>
<body>
    <?php require ("views/templates/header.php"); ?>

    <main class="mt-20 h-screen" >
        <form method="POST" action="<?= ROOT ?>/login/" >

            <fieldset class="text-center bg-gray-100 py-10">

                <div>
                    <h1 class="text-5xl uppercase bold text-gray-700 my-5">
                        Login
                    </h1>
                </div>
               
                <div>
                    <a href="/" class="hover:border-b-2 hover:border-gray-500 
                    hover:border-dotted">
                        &larr; Go back
                    </a>
                </div>

                <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">

                <div>
                    <input 
                    class="border-solid px-2 border-gray-500 w-64 my-3
                    border-2 placeholder-gray-400"
                    type="email" id="email" name="email" required 
                    placeholder="Email..." >
                </div>

                <div>
                    <input 
                    class="border-solid px-2 border-gray-500 w-64 my-3
                    border-2 placeholder-gray-400" 
                    required
                    minlength="8" maxlength="1000"
                    type="password" id="password" name="password" placeholder="Password..." >
                </div>

                <div>
                    <button 
                    class="bg-sky-500 text-white 
                    uppercase font-semibold my-3
                    hover:bg-white
                    hover:border-solid hover:border-sky-500 hover:border-2
                    hover:text-sky-500 hover:underline
                    shadow-5xl p-2 w-64 h-12"
                    type="submit" name="submit-login" >
                        Login
                    </button>
                </div>


                <?php if( isset( $arr_errors ) ) { ?>
                        <div class="w-4/8 m-auto text-center">
                            <?php foreach($arr_errors as $error) { ?>
                                <li class="text-red-500 list list-none" >
                                    <?php echo $error ?> 
                                </li>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if ( $bool_success ) { ?>
                    <div class="text-green-500 w-4/8 m-auto text-center" >
                        "Login OK"
                    </div>
                <?php } ?> 
              
            </fieldset>

        </form>
    </main>



    <?php require ("views/templates/sidebar.php"); ?>

                        <?php require ("templates/footer.php"); ?>


    <script src="/js/scripts.js"></script>

</body>
</html>