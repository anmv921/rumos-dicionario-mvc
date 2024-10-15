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

    <link rel="stylesheet" href="css/tailwind_style.css" >

    <link rel="icon" type="image/x-icon" href="images/bolt-lightning-solid.svg">

    <link rel="stylesheet" href="css/custom_styles.css">
</head>
<body>

    <form action="<?= ROOT ?>/register/" method="POST" class="form-register" >

        <div class="form-register">
            <label for="name">Enter your name: </label>
            <input type="text" name="name" id="name" required />
        </div>

        <div class="form-register">
            <label for="email">Enter your email: </label>
            <input type="email" name="email" id="email" required />
        </div>

        <div class="form-register">
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" required >
        </div>


        <div class="form-register">
            <button type="submit" name="register-user">Register</button>
        </div>

    </form>

</body>
</html>