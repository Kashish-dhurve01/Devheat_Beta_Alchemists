<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    // Now you can use the $name variable safely
    echo 'Hello, ' . $name;
} else {
    echo 'The "name" key is not set in the POST data.';
}
?>