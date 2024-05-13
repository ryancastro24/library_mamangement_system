<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
</head>
<body>



<div class="container p-5">


    <a  href="{{ route('dashboard') }}">BACK TO DASHBOARD</a>
    <h2 style="margin-bottom:20px;">ADD NEW BOOKS</h2>


    <form action="{{ route('addBooks') }}" method="POST"enctype="multipart/form-data">

    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Book Title</label>
            <input type="text" class="form-control" id="title" name="title" >
        </div>
        

        <div class="mb-3">
            <label for="author" class="form-label">Book Author</label>
            <input type="text" class="form-control" id="author" name="author" >
        </div>


        <div class="mb-3">
            <label for="year" class="form-label">Year Published</label>
            <input type="number" class="form-control" id="year" name="year_published" >
        </div>


        <div class="mb-3">
            <label for="nuumber_of_pages" class="form-label">Number of Pages</label>
            <input type="number" class="form-control" id="number_of_pages" name="number_of_pages" >
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Desription</label>
            <input type="text" class="form-control" id="description" name="description" >
        </div>
        

        <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" name="image" id="formFile">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>


</div>
    
</body>
</html>