<?php


$spojeni = DB::pripojit();
$dotaz = "SELECT * FROM 4ep_sk2_mvc_prispevky";

$data = mysqli_query($spojeni, $dotaz);

$result = mysqli_num_rows($data);
if($result > 0) {
    while ($row = mysqli_fetch_array($data)) {
        $nazev = $row['nazev'];
        $text = $row['text'];
        echo "<div>
                <p style='font-weight: bold;'>".$nazev."</p>
                <p>".$text."</p>
            </div>";
    }
}
else {
    echo "<p>Nebyly nalezeny žádné příspěvky.</p>";
}