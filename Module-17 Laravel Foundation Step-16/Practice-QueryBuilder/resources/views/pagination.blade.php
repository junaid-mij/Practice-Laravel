<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination</title>
    <script defer src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-2xl mb-5 mt-10">All Books</h1>
        @foreach ($books as $book)
            {{$book->title}} <br/>
        @endforeach
        <div class="mt-10 mx-auto w-[900px]">
            {{$books->links('vendor.pagination.tailwind',['showText'=>$showText])}}
        </div>
    </div>
</body>
</html>
