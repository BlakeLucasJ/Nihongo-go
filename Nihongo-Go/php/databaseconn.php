<?php

define("USER", "root");
define("PASSWORD", "");
define("SERVER", "localhost");
define("BD", "nihongo-go");

$connect = mysqli_connect(SERVER, USER, PASSWORD, BD);
if (mysqli_connect_errno()) {
    die("Ha Sucedido un error" . mysqli_connect_errno());
}

function query($connection, $query)
{

    $res = mysqli_query($connection, $query);
    if (!$res) {
        die(mysqli_error($connection));
    } else {
        return ($res);
    };
}
function onlyupdatequery($connection, $query)
{
    $res = mysqli_query($connection, $query);
    if (!$res) {
        die(mysqli_error($connection));
    }
}

function newday($connect)
{
    $sql = "SELECT * FROM dias ORDER BY dia ASC;";
    $res = query($connect, $sql);
    $numofdays = mysqli_num_rows($res);
    $date = date('Y-m-d');
    $datetime = new DateTime(date('Y-m-d'));
    for ($i = 0; $i < $numofdays; $i++) {
        $changed =
        $sql = "UPDATE dias SET fecha =".$datetime." WHERE dia = ".$i+1.;


            $datetime->modify('+1 day');
        echo $datetime->format('Y-m-d H:i:s');
    }
};
?>
<html>
<?php
echo $date;
$datetime = new DateTime(date('Y-m-d'));
for ($i = 0; $i < 100; $i++) {
    //$changed =
    //$sql = "UPDATE dias SET fecha =".$datetime." WHERE dia = ".$i+1."";


    $datetime->modify('+1 day');
?><h1><?php echo $datetime->format('Y-m-d'); ?></h1> <?php

                                                        }

                                                            ?>

</html>