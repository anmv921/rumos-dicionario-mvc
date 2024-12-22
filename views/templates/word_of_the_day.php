<section class="border-solid border-2 border-neutral-100 bg-white w-11/12 md:w-2/3 lg:w-1/2">

    <div class="flex flex-col justify-between p-0 items-center" >

        <div class="w-11/12 md:w-2/3 bg-yellow-300 p-20 m-5
                flex flex-col justify-center text-center items-center">

            <div class="text-lg uppercase ">
                Word of the day
            </div>

            <div class="text-3xl lowercase ">
                <?= $word_of_the_day["Word"] ?? ''; ?>
            </div>
        </div>

        <div class="w-1/2 flex flex-col justify-center text-center items-center
        m-5" >

            <p class="">
                <?= $word_of_the_day["Definition"] ?? ''; ?>
            </p>

            <div>
            <button class="bg-sky-600 text-white
            rounded-2xl px-3 m-3 py-1
            hover:bg-sky-700
            font-semibold"
            type="button" >

                <a 
                href="<?= ROOT ?>/word/?search-word=<?= $word_of_the_day["Word"] ?? ''; ?>">
                    About this
                </a>

            </button>
            </div>
            

        </div>

    </div>

</section>