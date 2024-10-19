<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Lightning Dictionary</title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/css/tailwind_style.css" >

    <link rel="icon" type="image/x-icon" href="/images/bolt-lightning-solid.svg">

</head>

<body >

    <?php require ("templates/header.php"); ?>

    <main>
    <form action="<?= ROOT ?>/register/" method="POST" >

    <fieldset class="flex flex-col items-center py-10 gap-5 bg-gray-100">

        <div>
            <h1 class="text-5xl uppercase bold text-gray-700" >
                Register
            </h1>
        </div>

        <div>
            <a href="/" class="hover:border-b-2 hover:border-gray-500 hover:border-dotted">
                &larr; Go back
            </a>
        </div>

        <div>
            <input 
            class="border-solid px-2 border-gray-500 w-64
            border-2 placeholder-gray-400"
            type="text" name="name" id="name"
            placeholder="Name..."
            required 
            minlength="3" maxlength="60"
            />
        </div>

        <div>
            <input 
            class="border-solid px-2 border-gray-500 w-64
            border-2 placeholder-gray-400"
            placeholder="Email..."
            type="email" name="email" id="email" required />
        </div>

        <div>
            <input
            class="border-solid px-2 border-gray-500 w-64
            border-2 placeholder-gray-400"
            placeholder="Password..."
            type="password" name="password" id="password" required 
            minlength="8" maxlength="1000"
            >
        </div>

        <div>
            <input
            class="border-solid px-2 border-gray-500 w-64
            border-2 placeholder-gray-400"
            placeholder="Confirm password..."
            type="password" name="confirm-password" 
            id="confirm-password" 
            minlength="8" maxlength="1000"
            required >
        </div>

        <div>
            <button class="bg-sky-500 text-white 
            uppercase font-semibold 
            hover:bg-white
            hover:border-solid hover:border-sky-500 hover:border-2
            hover:text-sky-500 hover:underline
            shadow-5xl p-2 w-64 h-12"
            type="submit" name="register-user">
                Register
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
                "User creation OK"
            </div>
        <?php } ?> 


    </fieldset>

</form>
    </main>


    <?php require ("templates/footer.php"); ?>

   


</body>
</html>