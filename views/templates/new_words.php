<section class="border-solid border-2 border-neutral-100 bg-white">
<div class="flex flex-col xl:flex-row justify-between items-center" >

    <div class="w-2/3 p-3 m-5">
        <img src="images/word-cloud-679936_1280.png" alt="">
    </div>

    <div class="w-1/2 flex flex-col justify-center text-center" >
        <h2 class="text-lg uppercase font-thin" >
            New words
        </h2>
        <h3 class="text-3xl">
            <a 
            href="<?= ROOT ?>/word/?search-word=<?= $newest_word["Word"] ?? ''; ?>">
            <?= $newest_word["Word"] ?? ''; ?>
            </a>
        </h3>

        <div class="text-xs text-slate-400 font-semibold" >
            <?= $newest_word["date"]; ?>
        </div>        

    </div>
</div>
</section>