<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document  </title>
    </head>
    <body>
            <?php

            foreach($tasks as $task){
                if($task->completed){
                    echo "<strike><li>";
                    echo $task->description;
                    echo "</strike></li>";
                }else{
                    echo '<li>';
                    echo $task->description;
                    echo '</li>';
                }
            };

                ?>
    </body>
    </html>
