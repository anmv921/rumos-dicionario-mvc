

<section class="bg-sky-600 
                w-5/6 lg:w-1/2 p-10 my-5 mx-0 text-white font-semibold ">

                    <div class="grid grid-cols-7  text-center place-items-center gap-1 mx-4">

                        <div class="flex items-center hover:underline" >

                            <a class="bg-sky-300 px-2 py-1 rounded-full hover:bg-sky-400"
                            href="<?= ROOT ?>/browse/0-9">
                                0-9
                            </a>    
                            
                        </div>
                        
                        <?php for ($i = 97; $i <= 122; $i++) { ?>
                            <div class="flex items-center hover:underline" >
                                <a class="bg-sky-300 px-3 py-0.5 
                                rounded-full hover:bg-sky-400"
                                href=
                                "<?= ROOT ?>/browse/<?= chr($i); ?>">
                                    <?= chr($i); ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </section>
