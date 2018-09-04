<?PHP

$filename = 'typo3_src-8.7.19.tar.gz';

$shellcommand = "tar -xzvf $filename";
$shellcommand = escapeshellcmd($shellcommand);

exec($shellcommand,$output);
print_r($output);

?>
