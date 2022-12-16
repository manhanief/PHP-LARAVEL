<?php

///create array for names
$task = [
    'title: ' => 'Play ball',
    'due: ' => 'Today',
    'assigned_to: ' => 'Esman',
    'Completed: ' => true
];

foreach ($task as $sub => $contain) {
    echo "<li><strong> $sub</strong>$contain</li>";
}

if ($contain = "completed") {

    if ($contain = true ? "Completed" : "Incompleted") {
        echo $sub . $contain;
    };
};