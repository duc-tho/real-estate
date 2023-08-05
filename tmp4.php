<?php

/**
 * Using the wrong loop type (for)
 * in this case we should you foreach instead
 */
$numbers = [3, -5, 7, 2, -8, 10];
$sum = 0;

// Bad
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > 0) {
        $sum += $numbers[$i];
    }
}

// Good
foreach ($numbers as $number) {
    if ($number < 0) {
        continue;
    }

    $sum += $number;
}

$numbers = [3, -5, 7, 2, -8, 10];
$sum = 0;

// Bad
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > 0) {
        $sum += $numbers[$i];
    }
}

//  Good
$numberLength = count($numbers);

for ($i = 0; $i < $numberLength; $i++) {
    if ($numbers[$i] > 0) {
        $sum += $numbers[$i];
    }
}



// Use while or do-while loops when the number of iterations is unknown
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

// while loop
while ($row = mysqli_fetch_assoc($result)) {
    // ...
}

// do-while loop
do {
    $row = mysqli_fetch_assoc($result);
    // ...
} while ($row);


// Sử dụng vòng lặp while khi số lần lặp đã biết trước
// Bad
$counter = 1;

while ($counter <= 5) {
    // ...

    $counter++;
}

// Good
for ($counter = 1; $counter <= 5; $counter++) {
    // ...
}
