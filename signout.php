<?php
@session_start();
session_destroy();
//echo"logout suceesfully";

echo "<script>location='index.php'</script>"
?>