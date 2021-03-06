<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-startup-image" href="assets/logo/logo.svg">
    <link rel="icon" type="image/x-icon" href="assets/logo/logo.svg">
    <meta name="description"
        content="Wepora is a best Graphics, software and Web Development company  and provides all IT solutions to their client. In india.." />
    <meta name="Keywords"
        content="website design | website development | website logo  |  website hosting  | logo design| logo design ideas  | SEO | android |  best software company in india | cheapest | graphic design | Shrikant Kushwaha">
    <meta name="author" content="contain by Wepora team">
    <meta name="copyright" content="Copyright © 2020 Wepora" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/verification.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Arcade Arena</title>
</head>

<body>
    <div class="bg-black w-100 text-center">
        <a class="nav-link link-light" href="index.php">Back Home</a>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card bg-black rounded px-5 py-5">
                    <h2 class="my-3 text-center text-white">Verification</h2> 
                    
                    <div class="mm-number">
                        <div class="mm-number-container">
                            <div class="mm-number-input">
                                <div class="mm-number-input-container animated">
                                    <div class="mm-number-input-item">
                                        <input type="number" pattern="\d*" class="animated" maxlength="1" placeholder="X">
                                    </div>
                                    <div class="mm-number-input-item">
                                        <input type="number" pattern="\d*" class="animated" maxlength="1" placeholder="X">
                                    </div>
                                    <div class="mm-number-input-item">
                                        <input type="number" pattern="\d*" class="animated" maxlength="1" placeholder="X">
                                    </div>
                                    <div class="mm-number-input-item">
                                        <input type="number" pattern="\d*" class="animated" maxlength="1" placeholder="X">
                                    </div>
                                    <div class="mm-number-input-item">
                                        <input type="number" pattern="\d*" class="animated" maxlength="1" placeholder="X">
                                    </div>
                                    <div class="mm-number-input-item">
                                        <input type="number" pattern="\d*" class="animated" maxlength="1" placeholder="X">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4"> <span>No code recieved?</span> <a href="register.php"
                            class="text-decoration-none">Send Again</a> 
                    </div>
                    <div class="text-center mt-4"> 
                            <a href="#"
                        class="text-decoration-none">Send code to mobile instead</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- JavaScript -->
<!-- Load the Twitch embed script -->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous">
</script>
<script>
    jQuery(document).ready(function() {

var password = 111111;
jQuery('.mm-number-input-item:nth-child(1) input').focus();

jQuery('.mm-number-input-item').each(function(index) {
    var item, id, input;
    item = jQuery(this);
    id = index + 1;
    input = item.children('input');
    item.addClass('mm-number-input-item-'+id);
    input.data('id',id);
});

jQuery('.mm-number-input-item input').on('keyup', function(e) {

    var item, value, id, count, pass = [];
    item = jQuery(this);
    value = item.val();
    id = item.data('id');
    count = jQuery('.mm-number-input-item').length;

    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        jQuery('.mm-number-input-item-'+(id)+' input').val('');
    }
    else {
        if(!value) {
            jQuery('.mm-number-input-item-'+id+' input').focus().select();
        }
        else {
            if(id < count) {
                jQuery('.mm-number-input-item-'+(id+1)+' input').focus().select();
            }
            else {
                //
            }
        }

        jQuery('.mm-number-input-item input').each(function() {
            var x;
            x = jQuery(this);
            pass.push(x.val());
        });

        var number = pass.join("");
    }

    if(id === count) {
        if(parseInt(number) === password) {
            window.location.href="./dashboard/index.php"
        }
        else {
            jQuery('.mm-number-input-item input').addClass('shake');
            setTimeout(function() {
                jQuery('.mm-number-input-item input').removeClass('shake');
                jQuery('.mm-number-input-item input').val('');
                jQuery('.mm-number-input-item-1 input').focus();
            },500);
        }
    }
    else {
        //
    }

});

});
</script>

</html>