//JQuery




$('#btn').click(function (){
    // alert('test');
    var firstNameValue = $('#firstName').val();
    var lastNameValue = $('#lastName').val();
    var fullName = firstNameValue+' '+lastNameValue;
    // alert(fullName);
    $('#fullName').val(fullName);
});






// alert ($ ('#h1').text() );
// alert ($ ('#h1').html('Hello World') );

// alert(document.getElementById('h1').innerHTML);



//Javascript
var redBtnElement = document.getElementById('redBtn');
    redBtnElement.onmouseover = function() {
        var divOneElement = document.getElementById('divOne');
        // divOneElement.style.backgroundColor = 'red';
        divOneElement.className = 'class-one';
    };
var greenBtnElement = document.getElementById('greenBtn');
greenBtnElement.onmouseover = function() {
    var divOneElement = document.getElementById('divOne');
    // divOneElement.style.backgroundColor = 'green';
    divOneElement.className = 'class-two';
};

var blueBtnElement = document.getElementById('blueBtn');
    blueBtnElement.onmouseover = function() {
        var divOneElement = document.getElementById('divOne')
        // divOneElement.style.backgroundColor = 'blue';
        divOneElement.className = 'class-three';
    };

var defaultBtnElement = document.getElementById('defaultBtn');
defaultBtnElement.onmouseover = function() {
    var divOneElement = document.getElementById('divOne')
    divOneElement.style.backgroundColor = 'black';
};






var btnElement = document.getElementById('btn');
btnElement.onclick = function() {
    var startingNumberValue = document.getElementById('startingNumber').value;
    var endingNumberValue = document.getElementById('endingNumber').value;


    var res=' ';
    for (var x=startingNumberValue; x<=endingNumberValue; x++) {
        res+= x;    //res = res(string) + x(string)
        // document.getElementById('result').value = x;
    }
    document.getElementById('result').value = res;
};