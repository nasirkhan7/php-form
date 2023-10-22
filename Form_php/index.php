<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="insert.php"> -->
    <title>Form</title>
</head>

<body>
    <div class="container">
<a href="./showData.php" class=" w-25 btn btn-info d-block mx-auto my-3">
    Preview Data
</a>
    <form action="./insert.php" class="col-lg-6 m-auto border border-info p-3 rounded" method="POST">
        <h1 class="display-1 text-center">
            ADD Data
        </h1>
        <label for="">Name</label>
        <input class="form-control" type="text" name="name">
        <label for="">Age</label>
        <input class="form-control" type="number" name="age" id="">
        <label for="">Address</label>
        <input class="form-control" type="text" name="add" id="">
        <label for="">Email</label>
        <input class="form-control" type="email" name="email" id="">
        <button class="btn btn-info my-3 mx-5 w-25">
            Add data
        </button>
    </form>
    
    </div>
</body>

</html>