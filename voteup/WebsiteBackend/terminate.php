<?php

require("database.php");

session_destroy();

header("location: ../index.php");