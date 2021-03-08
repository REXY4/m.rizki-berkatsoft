<?php

            $a="berkatsoft";
           
            $c = "Berkatsoft";

            if (preg_match('/[b\r\s]/', $a)) {
                echo "berkatsoft => true";
            }

            $b = "berkatco";
            if (preg_match('/[b\r\s]/', $b)) {
                echo "<br>";
                echo "berkatco => false";
            }

            $c = "Berkatsoft";
            if (preg_match('/[B\r\s]/', $c)) {
                echo "<br>";
                echo "Berkasoft => true";
            }
?>          
            