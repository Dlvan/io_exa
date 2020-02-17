<h1>Page3</h1>
<h2>Variables</h2>
<?php
$fname="jim";
echo 'hello '.$fname;
?>
<h2>Arrays</h2>
<?php
$fnames=array('Jim', 'Lisa', 'Ann');
?>
<p><?php print_r($fnames); ?></p>
<p><?php echo 'First is '.$fnames[0]; ?></p>
<h2>Assosiative array</h2>
<?php
$assoc_fname=array('fin'=>'Ruotsi', 'swe'=>'Sverige', 'eng'=>'Sveden');
?>
<p><?php echo 'The Finnish name for '.$assoc_fname['eng'].' is '.$assoc_fname['fin']; ?></p>
<h2>Two dimensional array</h2>
<?php
$persons=array(
    array('fn' => 'Jim', 'ln' => 'Smith'),
    array('fn' => 'Lisa', 'ln' => 'Jones'),
    array('fn' => 'Ann', 'ln' => 'Simpson'),
);
?>
<ul>
    <?php
    foreach ($persons as $row) {
        echo '<li>'.$row['fn'].' '.$row['ln'].'</li>';
    }
    ?>
</ul>