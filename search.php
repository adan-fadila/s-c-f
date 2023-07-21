<?php 
    include 'db.php';
    if (isset($_POST['search'])) {
        $searchQuery = $_POST['search'];
    
        // Step 5: Execute the search query
        $sql = "SELECT * FROM treatments WHERE id LIKE '%$searchQuery%'";
        $result = $conn->query($sql);
    
        // Step 6: Display the results
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Display the results, e.g., echo $row['product_name'];
            }
        } else {
            // No results found
        }
    
        $conn->close();
    }
?>