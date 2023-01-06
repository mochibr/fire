require_once("db_connect.php");
if (isset($_POST["export"])) {
    $output = fopen("php://output", "w");
    $sql = "SELECT * from users ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    $arr = array();
    foreach ($query as $data) {
        $arr[] = $data;
    }
    fwrite($output, json_encode($arr, JSON_PRETTY_PRINT));
    header('Content-Type: text/json; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.json');
    fclose($output);
}


<!DOCTYPE html>
<html lang="en">

<head>
    <title>preview and remove image before upload using jQuery, PHP and MySQL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        .preview_info {
            display: inline-grid;
            margin-top: 10px;
        }

        img.img-thumbnail {
            max-width: 150px;
            max-height: 150px;
        }

        span.btn.btn-danger.remove_preview {
            margin-top: 8px;
        }
    </style>
</head>

<body>

    <div class="container mt-3">
        <h2>Table Head Colors</h2>
        <p>You can use any of the contextual classes to only add a color to the table header:</p>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="image">
            <div class="preview_info"></div>
        </div>
    </div>

</body>

<script>
    jQuery(document).on("change", "#image", function() {
        var $input = $(this);
        var showImage = $(this).next(".preview_info");
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                showImage.html('<img src="' + e.target.result + '" class="img-thumbnail"/><span class="btn btn-danger remove_preview">Remove</span>');
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

    jQuery(document).on("click", ".remove_preview", function(e) {
        jQuery(this).parent(".preview_info").prev().val(null);
        jQuery(this).parent(".preview_info").html(null);
    });

    $.ajax({
      url: site_url + "admin/company/process/insert.php",
      method: "post",
      data: formData,
      contentType: false,
      processData: false,
      success: function (data) {
        if (data == "insert") {
          $("#add-company").trigger("reset");
          $("#success").html(
            `<div class="alert alert-success" role="alert">Successfully Inserted Data!</div>`
          );
          setTimeout(function () {
            $("#success").html(null);
          }, 2000);
        } else if (data == "codeExits") {
          $("#success").html(
            `<div class="alert alert-danger" role="alert">This code has been taken another company. Try again !</div>`
          );
          setTimeout(function () {
            $("#success").html(null);
          }, 4000);
        } else if (data == "emailExits") {
          $("#success").html(
            `<div class="alert alert-danger" role="alert">Sorry email already taken !</div>`
          );
          setTimeout(function () {
            $("#success").html(null);
          }, 4000);
        }
      },error:function(error){
        console(error);
      }
    });
</script>

</html>


<?php
if (isset($_POST)) {
    $target_path = $_FILES['logo_cmp']['name'];
    $source_path = $_FILES['logo_cmp']['tmp_name'];
    $file_name_cmp = "";
    if (!empty($target_path)) {
        $file_name_cmp = uniqid() . "-" . $target_path;
    }
    $target_folder = SITE_ROOT . "/uploads/company/" . $file_name_cmp;
    move_uploaded_file($source_path, $target_folder);
    $sql = "insert into company(cmp_name, admin_name, code)values('$cmp_name', '$admin_name', '$code')";
    $query = mysqli_query($conn, $sql);
    if ($query == true) {
        echo "insert";
    }
}    

?>
