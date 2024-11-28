<form class="w-full flex space-x-2 mt-6">
    <input
        type="text"
        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"
        placeholder="Pesquisar..."
        name="pesquisar" />
    <button type="submit">Pesquisar</button>
</form>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

    <?php foreach ($books as $book): ?>
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3">Img</div>
                <div>
                    <a class="font-semibold hover:underline" href="/book?id=<?= $book->id ?>"><?= $book->title ?></a>
                    <div class="text-xs italic"><?= $book->author ?></div>
                    <div class="text-xs italic">⭐⭐⭐(3 Avaliações)</div>
                </div>
            </div>
            <div>
                <?= $book->description ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>