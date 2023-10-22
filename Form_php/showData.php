<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <a href="./index.php" class="btn btn-danger">
        <--
    </a>
    <form action="./search.php" method="POST">
        <input type="search" name="search" placeholder="Search" class="form-control w-25 my-2">
        <button class="btn btn-dark mb-3">Search</button>
    </form>
    <div class="container my-4">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $connection =mysqli_connect("localhost","root","","f-project");
                $select="SELECT * FROM student";
                $result=mysqli_query($connection,$select);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo" 
                        <tr>
                        <td>
                            {$row['id']}</td>
                            <td>
                            {$row['name']}
                            </td>
                            <td>{$row['age']}</td>
                            <td>{$row['address']}
                            </td>
                            <td>{$row['email']}</td>
                            <td><a href='./update-form.php?id={$row['id']}' class='btn btn-info'>Edit</a></td>
                            <td><a href='./delete.php?id={$row['id']}&name={$row['name']}' class='btn btn-danger'>Delete</a></td>
                        </tr>";
                    }
                    
                }
            ?>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>