<?php 

unset($_SESSION["user"]);
session_destroy();
?>
<script>
    window.location.reload(1);
</script>
