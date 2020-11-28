$('#img1').click(function (){
    var imgSrcValue = $(this).attr('src');
    // alert(img1SrcValue);
    $('#mainImage').attr('src', imgSrcValue);
});
$('#img2').click(function (){
    var imgSrcValue = $(this).attr('src');
    $('#mainImage').attr('src', imgSrcValue);
});
$('#img3').click(function (){
    var imgSrcValue = $(this).attr('src');
    $('#mainImage').attr('src', imgSrcValue);
});
$('#img4').click(function (){
    var imgSrcValue = $(this).attr('src');
    $('#mainImage').attr('src', imgSrcValue);
});



// function createHeadingParagraphElement(){
//
//     var newHeadingElement = document.createElement('h1');
//     var newParagraphElement = document.createElement('p');
//
//         newHeadingElement.innerHTML = "This is a heading.";
//         newParagraphElement.innerHTML = "This is a paragraph.";
//
//             document.getElementById('div').appendChild(newHeadingElement);
//             document.getElementById('div').appendChild(newParagraphElement);
//
// };
//
// document.getElementById('btn').onclick = function (){
//     createHeadingParagraphElement();
// };



// $('#firstName').keyup(function (){
//     var firstNameValue = $('#firstName').val();
//     $('#res1').text(firstNameValue);
// });
//
// $('#lastName').keyup(function (){
//     var lastNameValue = $('#lastName').val();
//     $('#res2').text(lastNameValue);
// });
//
// $('#fullName').blur(function (){
//     var firstNameValue = $('#firstName').val();
//     var lastNameValue = $('#lastName').val();
//     $('#res3').text(firstNameValue+' '+lastNameValue);
// });