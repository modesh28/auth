<?php
session_start();

session_unset();
session_destroy();

header("Location: /smart_note/auth/log.php");
exit;
