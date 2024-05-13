<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('assets/styles.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/fafa53201f.js" crossorigin="anonymous" defer></script>
    
</head>
<body>


    <section id="comments-section">

    <a style="color:white;margin-bottom:20px;" href="{{ route('recommendations') }}">BACK TO RECOMMENDATIONS</a>


        <div id="comment-book-details">
                <h1>{{$book->title}}</h1>
                <h4><strong>Author:</strong> {{$book->author}}</h4>
                <h4><strong>Year Published:</strong> {{$book->year_published}}</h4>
        </div>



        <h2 style="color: white;margin-top:40px;">Comments</h2>



        @foreach($comments as $comment)
                <div class="all-comments-container">
                   
                        <h3>{{ $comment->user_name }}</h3>
                        <h5>posted on: {{ strftime('%c', strtotime($comment->created_at)) }}</posted>
                        <div>
                            <p>{{$comment->description}}</p>
                        </div>
                  
           
                </div>

        @endforeach
        
       


    <h1></h1>




    </section>




    
</body>
</html>