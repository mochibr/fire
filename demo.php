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
