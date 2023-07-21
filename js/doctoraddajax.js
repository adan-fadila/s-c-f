$(document).ready(function() {
    $('#plan-form').submit(function(event) {
        event.preventDefault();
        var form = $(this).serialize();
        formData = form.split('&')
        console.log(formData)
        const mealData = {};
        const meals = formData.filter(key => key.includes('-meal'));
        console.log(meals);
        meals.forEach(meal => {
            const row = meal.split('=');
           const mealName = row[1];
           console.log(mealName);
           const mealMoreInputs = formData.filter(input => input.slice(0, 2) === row[0].slice(0, 2) && input.includes('-more'));
           const values = mealMoreInputs.map(v => {
               const moreValue = v.split('=');
               return moreValue[1]
           });
           mealData[mealName] = values;
        })
        const patientId = formData.find(v => v.includes('patient_id'))?.split('=');
        const diagnosis = formData.find(v => v.includes('diagnosis'))?.split('=');

        const data = {
            patientId: patientId[1], diagnosis: diagnosis[1], mealData
        }
        $.ajax({
            type: 'POST',
            url: 'db/getForm2.php',
            data: form + "&treatment=" + JSON.stringify(mealData) ,
            success: function(data) {
                // window.location.href = 'try.php';
                // This function executes if the AJAX request is successful
                console.log('Success:', data);
            },
            error: function(xhr, status, error) {
                // This function executes if there's an error with the AJAX request
                console.error('Error:', status, error);
            }
        });
    });
});