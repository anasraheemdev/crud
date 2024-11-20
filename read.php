<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Read</title>
</head>

<body>






    <div class="p-5">
        <table class="table table-dark table-striped responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Update</th>
                    <th>Delate</th>
                    <th>Add New User</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $connection = mysqli_connect("localhost", "root", "", "crud_db") or die();
                $select = "SELECT * FROM users";
                $result = mysqli_query($connection, $select);



                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['age']}</td>
                        <td><a href='./update-form.php?id={$row['id']}&name={$row['name']}&phone={$row['phone']}&email={$row['email']}&age={$row['age']}' class='btn btn-primary'>Update</a></td>
                        <td><a href='./delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a></td>
                        <td><a href='./index.php' class='btn btn-success'>Add User</a></td>
                    </tr>
                    ";
                }


                ?>


            </tbody>
        </table>

    </div>



</body>

</html>