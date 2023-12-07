<?php
$selExmneeData = $conn->query("SELECT * FROM admin_acc WHERE ='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
?>