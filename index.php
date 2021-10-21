<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Quan Ly Benh Vien</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">patientid</th>
                <th scope="col">firstname</th>
                <th scope="col">lastname</th>
                <th scope="col">dateofbirth</th>
                <th scope="col">gender</th>
                <th scope="col">mobie</th>
                <th scope="col">email</th>
                <th scope="col">height</th>
                <th scope="col">weight</th>
                <th scope="col">blood_type</th>
                <th scope="col">created_on</th>
                <th scope="col">modified_on</th>
                <th scope="col">Thêm</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <?php
                    include('connect.php');
                    $sql = "SELECT * FROM patient";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                           
                            echo '<tr>';
                            echo '<td>'.$row["patientid"].'</td>';
                            echo '<td>'.$row["firstname"].'</td>';
                            echo '<td>'.$row["lastname"].'</td>';
                            echo '<td>'.$row["dateofbirth"].'</td>';
                            echo '<td>'.$row["gender"].'</td>';
                            echo '<td>'.$row["mobie"].'</td>';
                            echo '<td>'.$row["email"].'</td>';
                            echo '<td>'.$row["height"].'</td>';
                            echo '<td>'.$row["weight"].'</td>';
                            echo '<td>'.$row["blood_type"].'</td>';
                            echo '<td>'.$row["created_on"].'</td>';
                            echo '<td>'.$row["modified_on"].'</td>';
                            echo '<td><a href="them.php?id='.$row["patientid"].'" ><i class="bi bi-emoji-heart-eyes"></i>Thêm</a></td>';
                            echo '<td><a href="sua.php?id='.$row["patientid"].'" ><i class="bi bi-emoji-heart-eyes"></i>Sửa</a></td>';
                            echo '<td><a href="process_xoa.php?id='.$row["patientid"].'" ><i class="bi bi-emoji-heart-eyes"></i>Xóa</a></td>';
                            echo '</tr>';
                            echo '<br>';
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>