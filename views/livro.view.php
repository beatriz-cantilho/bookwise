<div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
    <div class="flex">
        <div class="w-1/3">Img</div>
        <div>
            <a class="font-semibold hover:underline" href="/livro?id=<?= $bookDetail['id'] ?>"><?= $bookDetail['title'] ?></a>
            <div class="text-xs italic"><?= $bookDetail['author'] ?></div>
            <div class="text-xs italic"><?= $bookDetail['rating'] ?></div>
        </div>
    </div>
    <div>
        <?= $bookDetail['description'] ?>
    </div>
</div>