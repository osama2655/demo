<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/hello':
        echo json_encode(["msg" => "Hello World!"]);
        break;
    case '/time':
        echo json_encode(["time" => date("H:i:s")]);
        break;
    default:
        http_response_code(404);
        echo json_encode(["error" => "Not Found"]);
        break;
}
?>
