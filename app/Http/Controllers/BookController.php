<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{



    public function getAddBooks(){

        return view('pages.add_books');

    }//end of getAddBooks function


    public function addBooks (Request $request) {

         
                    // Para maka store kag image
                    if ($request->hasFile('image')) {
                        // Upload image
                        $image = $request->file('image');
                        $imageName = time().'.'.$image->extension();
                        $image->storeAs('bookscontainer', $imageName, 'public'); // Adjust the storage path as needed
                    }



                // Validate the request data
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'author' => 'required',
                    'year_published' => 'required',
                    'number_of_pages' => 'required',
                    'description' => 'required',
                
                ]);


                Book::create([

                    'title' => $request->title,
                    'author' => $request->author,
                    'year_published' => $request->year_published,
                    'number_of_pages' => $request->number_of_pages,
                    'description' => $request->description,
                    'image' => $imageName,

                ]);

                return redirect()->route('add_books');


    } //end of addbooks function


    public function book_detail($id) {
        // Assuming your Book model is imported at the top of this class
        // Use find() instead of where() and get() since you're looking for a single book
        $book = Book::find($id);

        $latest_comment = Comment::where("book_id", "=", $id)
        ->orderBy('created_at', 'desc')
        ->join('users', 'comments.user_id', '=', 'users.id')
        ->select('comments.*', 'users.name as user_name')
        ->first();

     

    
        // Check if the book exists
        if (!$book) {
            // Handle the case where the book doesn't exist, maybe show a 404 page
            abort(404);
        }
    
        // Pass the book data to the view
        return view("pages.book_details", compact('book',"latest_comment"));
    }


    public function add_comment(Request $request){

        
                // Validate the request data
                $validator = Validator::make($request->all(), [
                    'description' => 'required',
                    'user_id' => 'required',
                    'book_id' => 'required',
                ]);


                Comment::create([

                    'description' => $request->description,
                    'user_id' => $request->user_id,
                    'book_id' => $request->book_id,
                ]);


                return redirect()->route('recommendations');

    }

    

    public function view_comments($id){

        $book = Book::find($id);
        $comments = Comment::where("book_id", "=", $id)
        ->orderBy('created_at', 'desc')
        ->join('users', 'comments.user_id', '=', 'users.id')
        ->select('comments.*', 'users.name as user_name')
        ->get();
        
        return view("pages.comments",compact("book","comments"));
    }


    public function rating_update(Request $request){

        $book  =  Book::find($request->book_id);
        if ($request->rating == 1) {
            $book->increment('one_star');
        }
        else if ($request->rating == 2) {
            $book->increment('two_star');
        }

        else if ($request->rating == 3) {
            $book->increment('three_star');
        }
        else if ($request->rating == 4) {
            $book->increment('four_star');
        }

        else if ($request->rating == 5) {
            $book->increment('five_star');
        }

        return redirect()->route('recommendations');

    }

}
