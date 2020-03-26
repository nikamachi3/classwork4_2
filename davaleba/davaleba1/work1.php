<?php
    function getRandomWord($len = 7) {
        $word = array_merge(range('a', 'z'));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }

    function generateRandomTable(){
        echo "<table border=1>";
            for($ch=1;$ch<=10; $ch++){
                echo "<tr>";
                for($hil=1; $hil<=10; $hil++){
                    echo "<td>";
                        echo getRandomWord();
                    echo "</td>";
                }
                echo "</tr>";
            }
        echo "</table>";

    }

?>
