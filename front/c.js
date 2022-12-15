
var test1 = document.querySelector('test1');
var test2 = document.querySelector('test2');
var test3 = document.querySelector('test3');
var test4 = document.querySelector('test4');
var test5 = document.querySelector('test5');
var a = document.getElementById('upe');

var nom = document.getElementById("inputName4");
var coda =document.getElementById("inputNumber7");                                         
var codp=document.getElementById("inputNumber8"); 
var num2= document.getElementById("inputNumber5");
var id = document.getElementById("inputEmail6");

function test_num(num) {
    var a = num.length;
    var test = 0;
    var i = 0;
    while ((i != a) && (test != 1)) {

        if (isNaN(num[i]) === false) {
            test=1;
        }
        




        i++;
    }
    return test;

}
function test_num2(num) {
    var a = num.length;
    var testt = 0;
    var i = 0;
    while ((i != a)) {

        if (isNaN(num[i]) === false) {
            testt=testt+1;
        }
       




        i++;
    }
    if(testt==a)
    {
        testt=1;
    }
    else
    {
        testt=0;
    }
    return testt;

}

function nameValidation()
{

    if((nom.value).length >= 3 &&  test_num(nom.value)!=1) {
        test1.textContent = "correct";
        document.querySelector('test1').style.color = "green";

    }
    else {

        test1.textContent = "le nom doit compter au minimum 3 carateres et ne contiant pas des valeurs ";

        document.querySelector('test1').style.color = "red";


    }

}


function numValidation()
{

    if((num2.value).length == 8 && test_num2(num2.value)!=0) {
        test2.textContent = "correct";
        document.querySelector('test2').style.color = "green";

    }
    else {

        test2.textContent = "le number doit compter  8 chifrs ";

        document.querySelector('test2').style.color = "red";
        
    }

}


function idValidation()
{

    if((id.value).length > 0 && test_num2(id.value)!=0) {
        test3.textContent = "correct";
        document.querySelector('test3').style.color = "green";

    }
    else {

        test3.textContent = "le number doit compter que des  chiffres ";

        document.querySelector('test3').style.color = "red";


    }

}
function codpValidation()
{

    if((codp.value).length > 0 &&test_num2(codp.value)!=0) {
        test4.textContent = "correct";
        document.querySelector('test4').style.color = "green";

    }
    else {

        test4.textContent = "le number doit compter que des  chiffres ";

        document.querySelector('test4').style.color = "red";


    }

}
function codaValidation()
{

    if((coda.value).length != 0 && test_num2(coda.value)!=0) {
        test5.textContent = "correct";
        document.querySelector('test5').style.color = "green";

    }
    else {

        test5.textContent = "le number doit compter que des  chiffres ";

        document.querySelector('test5').style.color = "red";
        alert('ffffffffffff');


    }

}


a.ddEventListener("click", function (e) {

//a.
alert("dscfzfeaf");

    numValidation();
    nameValidation();
    idValidation();
    codaValidation();
    codpValidation();
    

});