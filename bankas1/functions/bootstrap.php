<?php
session_start();
define('DB', DIR.'db/db.json');

define('URL', 'http://miskobankas.pz/');

require DIR.'functions/common.php';
require DIR.'functions/msg.php';
require DIR.'functions/helper.php';
require DIR.'functions/validator.php';
require DIR.'functions/auth.php';