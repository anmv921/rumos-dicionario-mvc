
<header>
        <nav class="flex flex-row justify-between bg-sky-600 
        text-white font-semibold p-7" >
            <ul class="flex flex-row gap-4" >
                    <li class="cursor-pointer">
                        <i class="fa-solid fa-bars"></i>
                    </li>

                    <li class="hover:underline">
                        <a href="/">
                            Dictionary
                        </a>
                    </li>
            </ul>

            <ul class="flex flex-row gap-4">

                <?php if(isset($_SESSION["id_user"])) { ?>

                    <?php 
                        require("models/user.php");
                        $modelUser = new User();
                        $user = $modelUser->getUser($_SESSION["id_user"]);
                    ?>

                    <?php if ( $user["is_admin"] ) { ?>

                        <li>
                            <a class="hover:underline"
                            href="<?= ROOT ?>/admin_area/">
                                <i class="fa-solid fa-table"></i>
                                Admin. area
                            </a>
                        </li>

                       
                    <?php } ?>

                    <li>
                        <a class="hover:underline"
                        href="<?= ROOT ?>/profile/" >          
                            <i class="fa-solid fa-user"></i>
                            Welcome, <?= $user["name"] ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?= ROOT ?>/logout/" class="hover:underline" >
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                        </a>
                    </li>

                  

                <?php } else { ?>
                
                    <li>
                        <a href="/register/" class="hover:underline">
                            <i class="fa-solid fa-user-plus"></i> Register
                        </a>
                    </li>

                    <li>
                        <a href="/login/" class="hover:underline">
                            <i class="fa-solid fa-right-to-bracket"></i> Login
                        </a>
                    </li>

                <?php } ?>
                
            </ul>
        </nav>

    </header>