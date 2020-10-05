<?php
session_start();

session_unset();

session_destroy();

print <<<here
<script>
    window.history.go(-1);
</script>
here;
?>