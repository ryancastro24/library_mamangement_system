<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('assets/styles.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/fafa53201f.js" crossorigin="anonymous" defer></script>
    
</head>
<body>



    <section class="book-detail-section">



        <a id="back-recommendations" href="{{ route('recommendations') }}">BACK TO RECOMMENDATIONS</a>

            <div class="image-container">
                <img src="{{ asset('storage/bookscontainer/' . $book->image) }}"  alt="">


                <div id="ratings-container">

                <form action="{{ route('rating.update') }}" method="POST">
                    @csrf
                    @method('PUT') <!-- or 'PATCH' -->

                    <input type="hidden" name="book_id" value="{{$book->book_id}}">
                    @for ($i = 1; $i <= 5; $i++)
                        <input type="radio" name="rating" id="rating{{ $i }}" value="{{ $i }}" style="display: none;">
                        <label for="rating{{ $i }}" class="star"><i class="fa fa-star"></i></label>
                    @endfor

                    <button type="submit">RATE</button>
                </form>

                
                </div>
            </div>
            

            <div class="book-details-container">

                <div class="book-details-content">

                    <h1>{{ $book->title }}</h1>

                    <div class="sub-details">
                    <span> <strong>Author:</strong> {{ $book->author }}</span>
                    <span> <strong>Year Published:</strong> {{ $book->year_published }}</span>
                    <span> <strong>Number of Pages:</strong> {{ $book->number_of_pages }}</span>
                    <span id="description"> <strong>Description:</strong> {{ $book->description }}</span>
                    </div>
                </div>


                <a href="{{ route('view_comments',['id' => $book->book_id]) }}" >
                @if($latest_comment)
                <div class="latest-comment-container">
                   
                        <h3>{{ $latest_comment->user_name }}</h3>
                        <h5> <strong> posted on:</strong> {{ strftime('%x', strtotime($latest_comment->created_at)) }}</h6>
                        <div>
                            <p>{{$latest_comment->description}}</p>
                        </div>
                  
           
                </div>

                @endif
                </a>









                <div class="text-area-container">
                     
                <form  action="{{ route('add_comment') }}" method="POST">
                     @csrf

                     
                    

                    <input type="hidden" value="{{$book->book_id}}" name="book_id">
                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                     
                    <textarea name="description" id="" placeholder="Enter Comment..."></textarea>

                    <button class="submit-btn">SUBMIT</button>

                </form>
                </div>

                
            </div>


          
   </section>



   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.star').click(function() {
                // Reset color for all stars
                $('.star').removeClass('checked');
                
                // Set color to yellow for clicked star and all previous stars
                $(this).addClass('checked');
                $(this).prevAll('.star').addClass('checked');
                
                // Update the corresponding radio button value
                var rating = $(this).prevAll('.star').length + 1;
                $('input[name="rating"]').val(rating);
            });
        });
    </script>

    
</body>
</html>