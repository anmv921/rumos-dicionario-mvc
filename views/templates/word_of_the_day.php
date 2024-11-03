<section class="border-solid border-2 border-neutral-100">

    <div class="flex flex-row justify-between" >

        <div class="w-1/2 bg-yellow-300 p-10 m-5
                flex flex-col justify-center text-center">

            <div class="text-lg uppercase ">
                Word of the day
            </div>

            <div class="text-3xl lowercase ">
                <?= $word_of_the_day["Word"] ?? ''; ?>
            </div>
        </div>

        <div class="w-1/2 flex flex-col justify-center text-center
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