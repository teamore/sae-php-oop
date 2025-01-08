<html>
<head>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>

<?php
    $source = $_POST['source'] ?? false;
?>
<form action="selector.php" method="POST">
<select name='source' onchange="this.form.submit();">
<option value=''>Please select</option>
<?php
    $temp_files = glob('./lecture1/*');
    $temp_files = array_merge($temp_files, glob('./lecture2/*'));
    foreach($temp_files as $file) {
        echo "<option value='$file' ".($source === $file ? ' selected':'').">$file</option>";
    }
?>
</select>
</form>
<div id="code">
<?php 
if ($source) {
    show_source($source);
} 
?>
</div>
<pre id="output">
<?php 
if ($source) {
    require_once($source); 
} else { 
    echo "please select example";
} 
?>
</pre>
</body>
</html>