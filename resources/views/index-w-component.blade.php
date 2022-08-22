@foreach($books as $book)
    <x-book :book="$book" />
@endforeach
