<?php

// pasitikrinti ar forma issiusta
if (isset($_POST['autoBtn'])) {
    // buvo paspausta issiusti forma
    // issisaugome formos irasus
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $engine = $_POST['engine'];
    $year = $_POST['year'];
    // irasome i db
    $conn->addCar($brand, $model, $engine, $year);
}
