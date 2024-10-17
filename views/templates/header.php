
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