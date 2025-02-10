<?php

$students = [
    ["name" => "Kamal", "marks" => [85, 78, 90, 88, 76]],
    ["name" => "Vansh", "marks" => [75, 68, 80, 70, 66]],
    ["name" => "Shyam", "marks" => [95, 88, 85, 92, 89]]
];

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Name</th>
        <th>Computing</th>
        <th>Data Structure</th>
        <th>DBMS</th>
        <th>Statistics</th>
        <th>Algorithm</th>
        <th>Total</th>
        <th>Percentage</th>
      </tr>";

foreach ($students as $student) {
    $total = array_sum($student["marks"]);
    $percentage = $total / 5;

    echo "<tr>
            <td>{$student['name']}</td>
            <td>{$student['marks'][0]}</td>
            <td>{$student['marks'][1]}</td>
            <td>{$student['marks'][2]}</td>
            <td>{$student['marks'][3]}</td>
            <td>{$student['marks'][4]}</td>
            <td>$total</td>
            <td>$percentage%</td>
          </tr>";
}

echo "</table>";
echo "This code is executed by Sanyam Bansal!";
?>