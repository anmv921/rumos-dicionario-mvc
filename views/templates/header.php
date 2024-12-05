
<header class="w-screen bg-sky-600 ">
        <nav class="flex flex-row justify-between bg-sky-600 
        text-white font-semibold p-7" >
            <ul class="flex flex-row gap-4" >

                    <li class="cursor-pointer" onclick="openNav()" >
                        <i class="fa-solid fa-bars"></i>
                    </li>

                    <li class="hidden lg:block hover:underline">
                        <a href="<?= ROOT ?>/">
                        <i class="fa-solid fa-house"></i> Dictionary
                        </a>
                    </li>

                    <li class="hidden lg:block hover:underline">
                        <a href="#">
                        <i class="fa-solid fa-book"></i> Thesaurus
                        </a>
                    </li>

                    <li class="hidden lg:block hover:underline">
                        <a href="#">
                        <i class="fa-solid fa-globe"></i> Translate
                        </a>
                    </li>

                    <li class="hidden lg:block hover:underline">
                        <a href="#">
                        <i class="fa-solid fa-shop"></i> Shop<sup><i class="fa-solid fa-up-right-from-square"></i></sup>
                        </a>
                    </li>

                    <li class="hidden lg:block hover:underline">
                        <a href="#">
                        <i class="fa-solid fa-blog"></i> Blog
                        </a>
                    </li>

                    <li class="hidden lg:block hover:underline">
                        <a href="#">
                        <i class="fa-solid fa-puzzle-piece"></i> Word Games
                        </a>
                    </li>
            </ul>

            <ul class="hidden md:flex md:flex-row md:gap-4">

                <?php if(isset($_SESSION["id_user"])) { ?>

                    <?php 
                        require_once("models/user.php");
                        $modelUser = new User();
                        $logged_user = $modelUser->getUser($_SESSION["id_user"]);
                    ?>

                    <?php if ( $logged_user["is_admin"] ) { ?>

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
                            Welcome, <?= $logged_user["name"] ?>
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