<?php
if(isset($_GET['x'])){
    switch($_GET['x']){
        case 'keluar':
            include('keluar.php');
            break;
            case 'admin':
                include("admin.php");
                break;
                case 'tadmin':
                    include("tadmin.php");
                    break;
    }
}
else {
    echo "<h3>Halaman Dalam Proses Pembangunan !!!</h3>";
}