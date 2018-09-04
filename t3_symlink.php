<?php
    $newTypo3Source = 'typo3_src-8.7.19';
 
    /* check and delete existings symlinks */
    if(file_exists('typo3_src')) unlink('typo3_src');
    if(file_exists('typo3')) unlink('typo3');
    if(file_exists('index.php')) unlink('index.php');
 
    /* create symlinks */
    symlink($newTypo3Source, 'typo3_src');
    symlink('typo3_src/typo3', 'typo3');
    symlink('typo3_src/index.php', 'index.php');
 
    echo '<strong>Symlinks:</strong><br />';
    echo 'index.php ->'.readlink('index.php').'<br />';
    echo 'typo3 ->'.readlink('typo3').'<br />';
    echo 'typo3_src ->'.readlink('typo3_src').'<br />';
?>
