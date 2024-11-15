<div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
    <div class="flex">
        <div class="w-1/3">Img</div>
        <div>
            <a class="font-semibold hover:underline" href="/livro.php?id=<?= $book['id'] ?>"><?= $book['title'] ?></a>
            <div class="text-xs italic"><?= $book['author'] ?></div>
            <div class="text-xs italic"><?= $book['rating'] ?></div>
        </div>
    </div>
    <div>
        <?= $book['description'] ?>
    </div>
</div>