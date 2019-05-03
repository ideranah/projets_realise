<ul>
<?php
    $csv = array_map('str_getcsv', file('report.csv'));
    array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
    });
    
    array_shift($csv); # remove column header
    /* var_dump($csv); */
    for ($i =0, $size = count($csv); $i<$size;$i++){?>
        <li><?php echo $csv[$i]['Client'] ?></li>
        <li><?php echo $csv[$i]['PrimarySmtpAddress'] ?></li>
        <li><?php echo $csv[$i]['TotalItemSize'] ?></li>
    <?php } ?>
</ul>
