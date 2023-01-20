<?php
require_once("db_connect.php");
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
extract($_POST);

if (isset($submit)) {
$sql = "SELECT * from users ORDER BY id DESC";
$query = mysqli_query($conn, $sql);
$html = "";
if (mysqli_num_rows($query) > 0) {
    $html .= '
    <table class="table" style="width: 100%; border-collapse: collapse;">
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">First Name</th>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Last Name</th>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">City</th>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Country</th>
        </tr>
    ';
    while ($row = mysqli_fetch_array($query)) {
        $html .= '
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px; text-align: left;">' . $row["full_name"] . '</td>
            <td style="border: 1px solid #ddd; padding: 8px; text-align: left;">' . $row["full_name"] . '</td>
            <td style="border: 1px solid #ddd; padding: 8px; text-align: left;">' . $row["full_name"] . '</td>
            <td style="border: 1px solid #ddd; padding: 8px; text-align: left;">' . $row["full_name"] . '</td>
        </tr>';
    }

    $html .= '</table>';
    // echo $html;
    $dompdf = new DOMPDF();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("data.pdf");
}

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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container-fluid">
      <h2>Bordered Table</h2>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Pick 1-4 Wicket Keeper</th>
            <th>Pick 1-6 Bastmen</th>
            <th>Pick 1-6 All Rounders</th>
            <th>Pick 1-6 Bowlers</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Fina Allen (NZ)</td>
            <td>Henry Nicholls (NZ)</td>
            <td>Michael Bracewell (NZ)</td>
            <td>Henry Shipley (NZ)</td>
          </tr>
          <tr>
            <td>Tom Latham</td>
            <td>Devon Conway (NZ)</td>
            <td>Mitchell Santner (NZ)</td>
            <td>Lockie Ferguson (NZ)</td>
          </tr>
          <tr>
            <td>Ishan Kishan</td>
            <td>Mark Chapman(NZ)</td>
            <td>Daryl Mitchell (NZ)</td>
            <td>Blair Tickner (NZ)</td>
          </tr>
          <tr>
            <td></td>
            <td>Shubman Gill (IND)</td>
            <td>Glenn Phillips (NZ)</td>
            <td>Ish Sodhi (NZ)</td>
          </tr>
          <tr>
            <td></td>
            <td>Rohit Sharma (IND)</td>
            <td>Doug Bracewell (NZ)</td>
            <td>Jacob Duffy (NZ)</td>
          </tr>
          <tr>
            <td></td>
            <td>Virat Kohli (IND)</td>
            <td>Hardik Pandya (IND)</td>
            <td>Mohammed Shami (IND)</td>
          </tr>
          <tr>
            <td></td>
            <td>Suryakumar Yadav (IND)</td>
            <td>Washington Sundar (IND)</td>
            <td>Mohammed Siraj (IND)</td>
          </tr>
          <tr>
            <td></td>
            <td>Rajat Patidar (IND)</td>
            <td>Shahbaz Ahmed (IND)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <h2>Teams</h2>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Team 1</th>
            <th>Team 2</th>
            <th>Team 3</th>
            <th>Team 4</th>
            <th>Team 5</th>
            <th>Team 6</th>
            <th>Team 7</th>
            <th>Team 8</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Rohit Sharma (IND) C</td>
            <td>Shubman Gill (IND) C</td>
            <td>Virat Kohli (IND) C</td>
            <td>Virat Kohli (IND) C</td>
            <td>Ishan Kishan (IND) C</td>
            <td>Fina Allen (NZ) C</td>
            <td>Glenn Phillips (NZ) C</td>
            <td>Henry Nicholls C</td>
          </tr>
          <tr>
            <td>Shubman Gill (IND) V</td>
            <td>Rohit Sharma (IND) V</td>
            <td>Rohit Sharma (IND) V</td>
            <td>Shubman Gill (IND) V</td>
            <td>Virat Kohli (IND) V</td>
            <td>Devon Conway (NZ) V</td>
            <td>Michael Bracewell (NZ) V</td>
            <td>Tom Latham V</td>
          </tr>
          <tr>
            <td>Virat Kohli (IND)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Ishan Kishan (IND)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Michael Bracewell (NZ)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Mitchell Santner (NZ)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Glenn Phillips (NZ)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Hardik Pandya (IND)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Mohammed Siraj (IND)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Devon Conway (NZ)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Lockie Ferguson (NZ)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>

