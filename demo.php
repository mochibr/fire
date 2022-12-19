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
