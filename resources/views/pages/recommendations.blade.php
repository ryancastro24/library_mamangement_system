
@extends('layout.app')

@section('contents')


<section class="recommendations-content">





    <div class="top-books-container">



            <h2>Top Borrowed Books</h2>


            <div class="top-books-inner-container">
            @foreach($topbooks as $topbook)

                <a href="{{ route('book_detail',['id' => $topbook->book_id]) }}" >
                <div class="books-card">

                    <img width="100%" height="100%" src="{{ asset('storage/bookscontainer/' . $topbook->image) }}" alt="" class="img-a img-fluid" />



                    <div class="book-details">
                        <h3><strong>Title:</strong> {{$topbook->title}}</h3>
                        <span><Strong>Author:</Strong> {{$topbook->author}}</span>
                    </div>
                </div>
                </a>

@endforeach
            </div>



    </div>


    <h2 id="available-books">Available Books</h2>

    <div class="books-container">



            @foreach($books as $book)

            <a href="{{ route('book_detail',['id' => $book->book_id]) }}" >
             <div class="books-card">

                <img width="100%" height="100%" src="{{ asset('storage/bookscontainer/' . $book->image) }}" alt="" class="img-a img-fluid" />
            


                <div class="book-details">
                    <h3><strong>Title:</strong> {{$book->title}}</h3>
                    <span><Strong>Author:</Strong> {{$book->author}}</span>
                </div>
             </div>
             </a>

            @endforeach
             

    </div>


</section>


@endsection