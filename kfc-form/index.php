<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>
    KFC-form</title>
</head>

<body>
    <form action="./insert.php" method="POST" class="col-lg-6 m-auto border border-info p-3 rounded shadow mt-3">
    <h1 class="display-1 text-center">
        KFC-Form
    </h1>
    <label for="">Name</label>
    <input class="form-control" type="text" name="name" id="">
    <label for="">Description</label>
    <input class="form-control" type="text" name="desc" id="">
    <label for="">Price</label>
    <input class="form-control" type="number" name="price" id="">
    <button class="btn btn-info my-3 mx-5 w-25">
    Order
    </button>

    </form>
</body>

</html>