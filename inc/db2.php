<?php

    $conn = mysqli_connect('localhost', 'root', '7082310785', 'redblog');

    if (!$conn) {
        die("Error connecting to database!".mysqli_connect_errno());
    }