<html>
    <head>
       <title>Simple Table</title>
       <style>
           .warna-baris {
               background-color: silver
           }
       </style>
    </head>
    <body>

        <table border="1" cellpadding="10" cellspacing="0">

            <?php
            for($i = 1; $i <= 20; $i++) {
                if($i %2 == 1) {
                    echo "<tr class = warna-baris>";
                }
                for($j = 1; $j <= 5; $j++) {
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
            ?>

        </table>
    </body>
</html>