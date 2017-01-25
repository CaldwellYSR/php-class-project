<?php

    $todos = array(
        "Cook dinner",
        "Feed the dog",
        "Gas the car",
        "Play video games"
    );

    /*
    foreach ($todos as $key => $todo) {
        echo $key . ": " . $todo . PHP_EOL;
    }
    */

    for ($index = 0; $index < count($todos); $index++) {
        if ($index == 0 || $index == 2) {
            echo "Completed -- " . $todos[$index] . PHP_EOL;
        } else {
            echo $todos[$index] . PHP_EOL;
        }
    }

    /*
    $index = 0;

    while ($index < count($todos)) {
        echo $todos[$index] . PHP_EOL;
        $index++;
    }
    */
    

?>
