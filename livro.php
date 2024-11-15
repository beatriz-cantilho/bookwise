<?php 

require 'dados.php';

$bookId = $_REQUEST['id'];

$filteredBook = array_filter($books, function($book) use($bookId) {
    return $book['id'] == $bookId;
});

//$filteredBook = array_filter($books, fn($book) => $book['id'] == $bookId); função mais simples php 7.4

$bookDetail = array_pop($filteredBook);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bookwise</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-stone-950 text-stone-200">
        <header class="bg-stone-900">
            <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
                <div class="font-bold text-xl tracking-wide">Book Wise</div>
                <ul class="flex space-x-4 font-bold">
                    <li class="text-lime-500">
                        <a href="/">Explorar</a>
                    </li>
                    <li class="hover:underline">
                        <a href="/meus-livros.php">Meus Livros</a>
                    </li>
                </ul>
                <ul>
                    <li class="hover:underline">
                        <a href="/login.php">Fazer Login</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="mx-auto max-w-screen-lg space-y-6">
            <?php echo $bookDetail ?>
        </main>
    </body>
</html>