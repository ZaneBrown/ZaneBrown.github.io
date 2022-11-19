<?php

$targetedPath = "uploads/" . basename($_FILES["inpFile"]["name"]);
move_uploaded_file($_FILES["inpFile"]["name"], $targetPath);