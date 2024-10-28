<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area</title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/tailwind_style.css" >

    <link rel="icon" type="image/x-icon" href="../images/bolt-lightning-solid.svg">

    <link rel="stylesheet" href="../css/custom_styles.css">

</head>
<body>
    <h1 class="p-5 text-5xl bold" >
        Admin Area
    </h1>

    <h2 class="p-5 text-2xl bold" >
      Users
    </h2>

    <div class="p-5" >
    <table class="table-auto" >

<thead>
  <tr>
    <th>id_user</th>
    <th>name</th>
    <th>email</th>
    <th>is_admin</th>
    <th>is_active</th>
  </tr>
</thead>

<tbody>


<?php foreach ( $users as $user ) { ?>

  <tr>
  
    <td>
      <?= $user["id_user"] ?>
    </td>
  
    <td>
      <?= $user["name"] ?>
    </td>

    <td>
      <?= $user["email"] ?>
    </td>


    <td>
      <?php
        if ( $user["is_admin"]  ) {
          echo '<i class="fa-solid fa-check"></i>';
        } else {
          echo '<i class="fa-solid fa-x"></i>';
        }
      ?>
    </td>

    <td>

    <?php
      if ( $user["is_active"]  ) {
          echo '<i class="fa-solid fa-check"></i>';
        } else {
          echo '<i class="fa-solid fa-x"></i>';
        }
    ?>
      
    </td>

  </tr>

<?php } ?>

</tbody>
</table>
    </div>

   

</body>
</html>