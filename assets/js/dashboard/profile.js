$(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div class="my-3 input-group"><div class="input-group-text">Link</div> <input type="text" class="form-control" name="mytext[]"><select name="account" id="account"><option value="">PSN</option><option value="x">XBOX</option></select><a href="#" class="delete btn btn-outline-danger">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});