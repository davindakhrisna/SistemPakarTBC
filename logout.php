<?php

session_start();

session_destroy();

header('Location: login_admin.php?pesan=logout');
