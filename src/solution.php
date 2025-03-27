<?php

function solution($N, $S) {
    // Initialize variables
    $history = ["/home"];  // Stack to store history
    $currentIndex = 0;     // Current position in history
    
    // Process each operation
    for ($i = 0; $i < $N; $i++) {
        $operation = $S[$i];
        
        // Handle "back" operation
        if ($operation === "back") {
            if ($currentIndex > 0) {
                $currentIndex--;
            }
            continue;
        }
        
        // Handle "forward" operation
        if ($operation === "forward") {
            if ($currentIndex < count($history) - 1) {
                $currentIndex++;
            }
            continue;
        }
        
        // Handle visiting a new page
        // Remove all forward history from current position
        $history = array_slice($history, 0, $currentIndex + 1);
        // Add new page to history
        $history[] = "/" . $operation;
        $currentIndex = count($history) - 1;
    }
    
    // Build the complete path by joining all segments up to current position
    $result = "";
    for ($i = 0; $i <= $currentIndex; $i++) {
        if ($i === 0) {
            $result = $history[$i];  // First element (always /home)
        } else {
            $result .= $history[$i];  // Append subsequent elements
        }
    }
    return $result;
}

$N = readline();
$S = readline();
$S = explode(" ", $S);

$out_ = solution($N, $S);
echo $out_;
echo "\n";
?> 