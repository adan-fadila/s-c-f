$(document).ready(function() {
    $(".multiselect-dropdown").select2({
        placeholder: "diagnosis",
        tags: true,
        tokenSeparators: [',']
    })
})