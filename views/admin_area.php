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

    <link rel="icon" type="image/x-icon" href="../images/moon-regular.svg">

    <link rel="stylesheet" href="../css/custom_styles.css">

</head>
<body>

  <?php require ("templates/header.php"); ?>

  <br>

  <main class="mt-20 h-screen">


        <h1 class="m-3 text-5xl bold" >
            Admin Area
        </h1>

        <h2 class="m-3 text-2xl bold" >
          Users
        </h2>

        <?php if($_SESSION["user_update_ok"] ?? false) {
          echo '<div class="text-green-500 m-3">User update ok</div>';
          $_SESSION["user_update_ok"] = false;
        } ?>

  <?php if($_SESSION["user_delete_ok"] ?? false) {
          echo '<div class="text-green-500 m-3">User deletion ok</div>';
          $_SESSION["user_delete_ok"] = false;
        } ?>

        <div class="m-3" >
        <table class="table-auto" >

    <thead>
      <tr>
        <th>id_user</th>
        <th>name</th>
        <th>email</th>
        <th>is_admin</th>
        <th>is_active</th>
        <th>delete</th>
        <th>activate/deactivate</th>
        <th>toggle admin rights</th>
      </tr>
    </thead>

    <tbody>


    <?php
      foreach ( $users as $user ) { 
      if ( isset($user["id_user"] ) &&
       $user["id_user"] != $_SESSION["id_user"] ) {  
    ?>

      <tr>
      
        <td>
          <?= $user["id_user"] ?>
        </td>
      
        <td>
          <?= $user["name"] ?> 
          <a href="<?= ROOT ?>/update_user_info/<?= $user["id_user"]; ?>" >
            <i class="fa-solid fa-pencil"></i>
          </a>
        </td>

        <td>
          <?= $user["email"] ?>

          <a href="<?= ROOT ?>/update_user_info/<?= $user["id_user"]; ?>" >
            <i class="fa-solid fa-pencil"></i>
          </a>
        </td>


        <td>
        <a href="<?= ROOT ?>/update_user_info/<?= $user["id_user"]; ?>" >
          <?php
            if ( $user["is_admin"]  ) {
              echo '<i class="fa-solid fa-check"></i>';
            } else {
              echo '<i class="fa-solid fa-x"></i>';
            }
          ?>
             </a>
        </td>

        <td>
        <a href="<?= ROOT ?>/update_user_info/<?= $user["id_user"]; ?>" >
        <?php
   
          if ( $user["is_active"]  ) {
              echo '<i class="fa-solid fa-check"></i>';
            } else {
              echo '<i class="fa-solid fa-x"></i>';
            }
        ?>
          </a>
        </td>

        <td>
          <a href="<?= ROOT ?>/delete_user/<?= $user["id_user"]; ?>">
            <i class="fa-solid fa-user-slash"></i>
          </a>
        </td>

        <td>
          <a href="<?= ROOT ?>/update_user_info/<?= $user["id_user"]; ?>" >
            <?php if ( $user["is_active"]  ) { ?>
                <i class="fa-solid fa-lock"></i>
            <?php } else { ?>
              <i class="fa-solid fa-lock-open"></i>
            <?php } ?>
          </a>
        </td>

        <td>
          <a href="<?= ROOT ?>/update_user_info/<?= $user["id_user"]; ?>" >
            <i class="fa-solid fa-user-gear"></i>
          </a>
        </td>

      </tr>

    <?php 
      } // End if
      } // End for
    ?>

    </tbody>
    </table>
        </div>

    </main>

    <?php require ("views/templates/sidebar.php"); ?>

    <?php require ("views/templates/footer.php"); ?>

    <script src="/js/scripts.js"></script>

</body>
</html>