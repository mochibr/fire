<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <title>jQuery click not working on ajax loaded content</title> -->
    <!-- <title>Add active class to li onclick jQuery</title> -->
    <title>jQuery add active class to li on click </title>
</head>
<style>

    ul.nav li {
        display: inline-block;
        color: #000;
        padding: 10px;
        border: 1px solid #000;
        border-radius: 5px;
        font-family: 'Circular-Loom';
        cursor: pointer;
    }

    ul.nav li.active {
        background: #000;
        color: #fff;
    }

</style>
<body>
    <ul class="nav">
        <li class="active">Home</li>
        <li>About</li>
        <li>Blog</li>
        <li>Contact Us</li>
    </ul>
</body>
<script>
$(".nav li").on('click', function(){
    $(".nav li").removeClass('active');
    $(this).addClass('active');
});
</script>

</html>

<?php
include("db_connect.php");
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Table Head Colors</h2>
        <p>You can use any of the contextual classes to only add a color to the table header:</p>
        <?php

        $cureent_url =  strtok($_SERVER["REQUEST_URI"], '?');

        $page = 0;
        $limit = 5;

        if (isset($_GET['page']) && !empty($_GET['page'])) {
            $page = $_GET['page'];
            $start_from = ($page - 1) * $limit;
        } else {
            header("location:$cureent_url?page=1");
        }

        $sql = "select * from disruptions order by id asc LIMIT $start_from,$limit";
        $result =  mysqli_query($conn, $sql);

        ?>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["id"]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php
        $query = mysqli_query($conn, "SELECT * FROM disruptions");
        $total_records = mysqli_num_rows($query);
        $total_pages = ceil($total_records / $limit);
        ?>
        <ul class="pagination justify-content-center">
            <?php
            if ($page > 1) {
                $previous = $page - 1;
            ?>
                <li class="page-item"><a class="page-link" href="demo.php?page=1">First Page</a></li>
                <li class="page-item"><a class="page-link" href="demo.php?page=<?= $previous; ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
            <?php
            }
            ?>

            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
                $active_class = "";
                if ($i == $page) {
                    $active_class = "active";
                }
            ?>
                <li class="page-item <?= $active_class; ?>"><a class="page-link" href="demo.php?page=<?= $i; ?>"><?= $i; ?></a></li>
            <?php
            }
            ?>

            <?php
            if ($page < $total_pages) {
                $page++;
            ?>
                <li class="page-item"><a class="page-link" href="demo.php?page=<?= $page; ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                <li class="page-item"><a class="page-link" href="demo.php?page=<?= $total_pages; ?>">Last Page</a></li>
            <?php
            }
            ?>
        </ul>
    </div>

</body>

</html>
