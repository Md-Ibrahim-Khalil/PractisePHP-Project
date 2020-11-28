
/* Last Name*/
function checkFirstName(){
    var firstNameLength = $('#firstname').val().length;
    if (firstNameLength >= 6 &&  firstNameLength <=15){
        $('#firstNameError').text(' ');
    } else {
        $('#firstNameError').text('First name should be between 6 to 15 charectar');
    }
};
$('#firstname').click(function(){
    checkFirstName();
});

$('#firstname').blur(function(){
    checkFirstName();
});

$('#firstname').keyup(function(){
    checkFirstName();
});


/* Last Name*/
function checkLastName(){
    var lastNameLength = $('#lastname').val().length;
    if (lastNameLength >= 6 &&  lastNameLength <=15){
        $('#lastNameError').text(' ');
    } else {
        $('#lastNameError').text('Last name should be between 6 to 15 charectar');
    }
};
$('#lastname').click(function(){
    checkLastName();
});

$('#lastname').blur(function(){
    checkLastName();
});

$('#lastname').keyup(function(){
    checkLastName();
});

/* Email Address validation */
function checkEmailAddress(){
  var pattern = new RegExp(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/);
    if (pattern.test($('#emailAddress').val()))
    {
        $('#emailAddressError').text(' ');
    } else {
        $('#emailAddressError').text('Email address is invalid');
    }
};

$('#emailAddress').click(function(){
    checkEmailAddress();
});

$('#emailAddress').blur(function(){
    checkEmailAddress();
});

$('#emailAddress').keyup(function(){
    checkEmailAddress();
});

/* Email Address validation */


/* Password validation */

function checkPassword(){
   var passwordLength = $('#password').val().length;
    var passwordLength = $('#firstname').val().length;
    if (passwordLength >= 6 &&  passwordLength <=15){
        $('#passwordError').text(' ');
    } else {
        $('#passwordError').text('Password length at least 8 character');
    }
};

/* Password validation */






$('#registrationForm').submit(function(){
    return true;
});