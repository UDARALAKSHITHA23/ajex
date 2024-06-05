<?php
function insertCompany($companyName, $country, $phone, $email,$conn) {
    // Log data before insertion
    error_log("Inserting company with the following data: ");
    error_log("Company Name: $companyName");
    error_log("Country: $country");
    error_log("Phone: $phone");
    error_log("Email: $email");
    $stmt = $conn->prepare("INSERT INTO companys (company_name, country, phone, email) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $companyName, $country, $phone, $email);

    // Execute the statement
    if ($stmt->execute()) {
        // Return 1 if the insertion is successful
        $stmt->close();
        $conn->close();
        return 1;
    } else {
        // Handle errors
        echo "Error: " . $stmt->error;
        $stmt->close();
        $conn->close();
        return 0;
    }
}
?>
