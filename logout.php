<?php
$logConn = mysqli_connect('localhost','root','','testbaza');
                            $queryLog = "UPDATE users SET Logovan = 0 WHERE id = 2";
                            $execute = mysqli_query($logConn, $queryLog);
                            if ($logConn->connect_error) {
                                die("Connection failed: " . $logConn->connect_error);
                            } 
?>