<?php
    function getRandomWord($len = 7) {
        $word = array_merge(range('a', 'z'));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }

    function generateRandomTable(){
        echo "<table border=1>";
            for($ch=1;$ch<=$_POST["N"]; $ch++){
                echo "<tr>";
                for($hil=1; $hil<=$_POST["M"]; $hil++){
                    echo "<td>";
                        echo getRandomWord();
                    echo "</td>";
                }
                echo "</tr>";
            }
        echo "</table>";

    }

?>
