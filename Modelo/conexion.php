<?PHP
    function conectar(){
        $user="root";
        $pass="";
        $server="localhost";
        $db="Aymuray";

        $con= mysql_connect($server, $user, $pass) or die ("Error al conectar a la base de datos");

        mysql_select_db($db, $con);

        return $con;
    }
?>