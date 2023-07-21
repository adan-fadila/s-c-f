$(document).ready(function() {


    $('#search').submit(function(event) {


        event.preventDefault(); // Prevent default form submission

        // Serialize the form data
        var formData = $(this).serialize();
        console.log("test");
        // Make an AJAX POST request
        $.ajax({
            type: 'POST', // Use 'POST' method since you want to send data to the server
            url: './getForm.php',
            data: formData,
            success: function(response) {
                // Handle the server response here (if needed)
                console.log('Success:', response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Handle errors here (if needed)
                console.log('Error:', textStatus, errorThrown);
            }
        });
    });
});