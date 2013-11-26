<?php
    $dirname = 'Images/';
    $dir = opendir($dirname);
    echo $dirname;

    echo '<select>';
                while (($file = readdir($dir)))
                {
                    echo $file;

                    if ($file != "." && $file != "..")
                    {
                        echo '<option value="'.$file.'">'.$file.'</option>';
                    }

                }
     echo '</select>';

    closedir($dir);
?>