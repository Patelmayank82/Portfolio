<?php
    include "Conn.php";
?>
<?php
        if (isset($_REQUEST['submit'])) {
            
            $ins="insert into information values('".$_REQUEST['Cname']."','".$_REQUEST['email_address']."','".$_REQUEST['message']."')";

            $ex=$conn->query($ins);

            if($ex)
            {
                echo "Inserted";
            }
            else
            {
                echo "Error";
            }
        }

    ?>