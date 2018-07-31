
        <?php
        require_once 'bd_detalle.php';
        $conecta =new mysqli($hostname,$username,$password,$database);
        if ($conecta->connect_errno) {
            echo $error=$conecta->connect_errno;
            exit();
    
}
   
        ?>
 