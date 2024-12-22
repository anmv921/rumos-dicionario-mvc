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
    <link rel="icon" type="image/x-icon" href="../images/<?= ENV["ICON_FILENAME"] ?>">
    <link rel="stylesheet" href="../css/custom_styles.css">
</head>
<body>

  <?php require ("templates/header.php"); ?>

  <br>

  <main class="mt-20 h-screen">


        <h1 class="m-6 text-5xl bold" >
            Admin Area
        </h1>

        <h2 class="m-6 text-2xl bold" >
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
        <table class="table-auto min-w-full divide-y divide-gray-300 mt-6" >

          <thead class="bg-gray-50">
            <tr>
              <th class="p-4 text-left text-sm font-semibold text-gray-900">id_user</th>
              <th class="p-4 text-left text-sm font-semibold text-gray-900">name</th>
              <th class="p-4 text-left text-sm font-semibold text-gray-900">email</th>
              <th class="p-4 text-left text-sm font-semibold text-gray-900">is_admin</th>
              <th class="p-4 text-left text-sm font-semibold text-gray-900">is_active</th>
              <th class="p-4 text-left text-sm font-semibold text-gray-900">delete</th>
              <th class="p-4 text-left text-sm font-semibold text-gray-900">activate/deactivate</th>
              <th class="p-4 text-left text-sm font-semibold text-gray-900">toggle admin rights</th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-200 bg-white" >


          <?php
            foreach ( $users as $user ) { 
            if ( isset($user["id_user"] ) &&
            $user["id_user"] != $_SESSION["id_user"] ) {  
          ?>

          <tr>
      
          <td class="p-4 text-sm text-gray-900">
            <?= $user["id_user"] ?>
          </td>
      
          <td class="p-4 text-sm text-gray-900">
            <?= $user["name"] ?> 
            <a href="<?= ROOT ?>/update_user_info/<?= $user["id_user"]; ?>" >
              <i class="fa-solid fa-pencil"></i>
            </a>
          </td>

          <td class="p-4 text-sm text-gray-900">
            <?= $user["email"] ?>

            <a href="<?= ROOT ?>/update_user_info/<?= $user["id_user"]; ?>" >
              <i class="fa-solid fa-pencil"></i>
            </a>
          </td>


          <td class="p-4 text-sm text-gray-900">
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

          <td class="p-4 text-sm text-gray-900">
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

          <td class="p-4 text-sm text-gray-900">
            <a href="<?= ROOT ?>/delete_user/<?= $user["id_user"]; ?>">
            <i class="fa-solid fa-trash"></i>
            </a>
          </td>

          <td class="p-4 text-sm text-gray-900">
            <a href="<?= ROOT ?>/update_user_info/<?= $user["id_user"]; ?>" >
              <?php if ( $user["is_active"]  ) { ?>
                  <i class="fa-solid fa-lock"></i>
              <?php } else { ?>
                <i class="fa-solid fa-lock-open"></i>
              <?php } ?>
            </a>
          </td>

          <td class="p-4 text-sm text-gray-900">
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