
var test1 = document.querySelector('test1');
var test2 = document.querySelector('test2');
var test3 = document.querySelector('test3');
var test4 = document.querySelector('test4');
var test5 = document.querySelector('test5');
var aa= document.getElementById("upe");
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

function nameValidation(e)
{

    if((nom.value).length >= 3 &&  test_num(nom.value)!=1) {
        test1.textContent = "correct";
        document.querySelector('test1').style.color = "green";

    }
    else {

        test1.textContent = "le nom doit compter au minimum 3 carateres et ne contiant pas des valeurs ";
        alert('aaaaaaaaa');

        document.querySelector('test1').style.color = "red";
        e.preventDefault();


    }

}


function numValidation(e)
{

    if((num2.value).length == 8 && test_num2(num2.value)!=0) {
        test2.textContent = "correct";
        document.querySelector('test2').style.color = "green";

    }
    else {

        test2.textContent = "le number doit compter  8 chifrs ";

        document.querySelector('test2').style.color = "red";
        e.preventDefault();
        
    }

}


function idValidation(e)
{

    if((id.value).length > 0 && test_num2(id.value)!=0) {
        test3.textContent = "correct";
        document.querySelector('test3').style.color = "green";

    }
    else {

        test3.textContent = "le number doit compter que des  chiffres ";

        document.querySelector('test3').style.color = "red";
        e.preventDefault();


    }

}
/*function codpValidation(e)
{

    if((codp.value).length > 0 &&test_num2(codp.value)!=0) {
        test4.textContent = "correct";
        document.querySelector('test4').style.color = "green";

    }
    else {

        test4.textContent = "le number doit compter que des  chiffres ";

        document.querySelector('test4').style.color = "red";
        e.preventDefault();


    }

}
function codaValidation(e)
{

    if((coda.value).length != 0 && test_num2(coda.value)!=0) {
        test5.textContent = "correct";
        document.querySelector('test5').style.color = "green";

    }
    else {

        test5.textContent = "le number doit compter que des  chiffres ";

        document.querySelector('test5').style.color = "red";
        e.preventDefault();
        


    }

}*/


aa.addEventListener('click', function (e){

    numValidation(e);
    nameValidation(e);
    idValidation(e);
   //codaValidation(e);
   // codpValidation(e);
 
   // var body= 'votre reclamation est bien reçu<br/>' +'ID:'+id+'<br/>Name: '+nom+'<br/>Phone: '+num2;
    Email.send({
        Host : "smtp.esprit.tn",
        Username : "mehdi.gongi@esprit.tn",
        Password : "211JMT4901",
        To : 'mehdi.gongi@esprit.tn',
        From :'mehdi.gongi@esprit.tn' ,
        Subject : "This",
        Body : "gdfgd"
    }).then(
      message => alert(message)
    );
   
    

});

const titre=document.querySelectorAll('h1 span');
//const logo=document.querySelectorAll('p');

window.addEventListener('load',() => {


const TL = gsap.timeline({paused: true});

TL
.from(titre, 1,{top:-50, opacity:0,ease:"power2.out"},0.7)
//.staggerFrom(titre, 1,{top:-50, opacity:0,ease:"power2.out"},0.3,'-=1')




TL.play();
})
