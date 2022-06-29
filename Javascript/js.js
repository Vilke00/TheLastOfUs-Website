 function validate() {
     var x = document.myForm.subject.value;
     var y=document.myForm.phonenumber.value;
     var broj=/^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
      
         if(document.myForm.firstname.value == "") {
            alert( "Molim vas upisite svoje ime!" );
            document.myForm.firstname.focus() ;
            return false;
         }
     else if(!/^[a-zA-Z]+$/.test(document.myForm.firstname.value)) {
            alert( "Ime se moze sastojati iskljucivo od slova!" );
            document.myForm.firstname.focus() ;
            return false;
         }
         if(document.myForm.lastname.value == "") {
            alert( "Molim vas upisite svoje prezime!" );
            document.myForm.lastname.focus() ;
            return false;
         }
     else if(!/^[a-zA-Z]+$/.test(document.myForm.lastname.value)) {
            alert( "Prezime se moze sastojati iskljucivo od slova!" );
            document.myForm.lastname.focus() ;
            return false;
         }
         if(document.myForm.subject.value==""){
             alert( "Molim vas upisite tekst!" );
            document.myForm.subject.focus() ;
            return false;
         }
     else if(x.length<20){
            alert( "Tekst mora imati vise od 20 karaktera!" );
            document.myForm.subject.focus() ;
            return false;
         }
         return( true );
      }
function pokaziParagraf1(){
    var element1 = document.getElementById('paragraf1');
    if(element1.style.visibility == 'hidden'){
        element1.style.visibility = 'visible';
    }
    else{
        element1.style.visibility = 'hidden';
    }
}
function pokaziParagraf2(){
        var element2 = document.getElementById('paragraf2');
    if(element2.style.visibility == 'hidden'){
        element2.style.visibility = 'visible';
    }
    else{
        element2.style.visibility = 'hidden';
    }
}
function pokaziParagraf3(){
        var element3 = document.getElementById('paragraf3');
    if(element3.style.visibility == 'hidden'){
        element3.style.visibility = 'visible';
    }
    else{
        element3.style.visibility = 'hidden';
    }
}
function pokaziParagraf4(){
        var element4 = document.getElementById('paragraf4');
    if(element4.style.visibility == 'hidden'){
        element4.style.visibility = 'visible';
    }
    else{
        element4.style.visibility = 'hidden';
    }
}
function pokaziParagraf5(){
        var element5 = document.getElementById('paragraf5');
    if(element5.style.visibility == 'hidden'){
        element5.style.visibility = 'visible';
    }
    else{
        element5.style.visibility = 'hidden';
    }
}
