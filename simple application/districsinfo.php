<?php
    $province = $_GET['q'];
    $url_Json = "districts.json";
    $getData = json_decode(file_get_contents($url_Json),true);
    $district = $getData[$province];
?>

    <div> <h2>-----------------------------District List-----------------------------</h2>
        <ul>
            <?php foreach($district as $v){ ?>
                <li><?php echo $v; ?></li>
            <?php } ?>
         </ul>
    </div>

