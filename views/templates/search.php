<search>
    <form method="GET" 
    action="<?= ROOT ?>/word/" >
        <div class="pt-1 pb-1 flex flex-row h-12 flex-nowrap">
            <input 
            minlength="1" maxlength="255"
            class="w-96 rounded-l-2xl rounded-r-2xl px-4 mx-2"
            type="search" id="search-word" name="search-word" 
            placeholder="Search English"/>
            <button 
            class="bg-yellow-300 flex items-center justify-center
            rounded-3xl font-extrabold w-1.5 h-1.5 p-5 text-center ml-
            hover:bg-yellow-400"
                type="submit">
                <i class=" fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </form>
</search>
