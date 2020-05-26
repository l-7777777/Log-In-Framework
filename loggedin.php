<?php
    if(session_status() !== 2) {
        header("header('HTTP/1.0 403 Forbidden');");
    }
?>