<?php
$select_setting = mysqli_query($conn,"SELECT * FROM gtpress_settings");
$show_settings = mysqli_fetch_array($select);

?>