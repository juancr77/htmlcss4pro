var pattern_rfc=/^[a-zA-Z]{4}(\d{6})(([a-zA-Z0-9]){3})?$/;
//arrow function
let valida_curriculum = () => {
let js_nom=document.getElementById("f_nom").value.trim();
let js_ape=document.getElementById("f_ape").value.trim();
let js_con=document.getElementById("f_pwd").value.trim();
alert(js_nom);
return false;
}

if(js_nom.length ==0){
    alert("Error: el nombre no puede ir vacio");
    return false;
}//end if
else if (js_ape.length==0){
    alert("Error:El apellido no puede ir vacio");
    return false;
}
else if (js_con.length==0){
    alert("Error:La contraseña no puede ir vacia");
    return false;
}
else if (js_con.length<6 || js_con.length>12){
  alert("Error , la contraseña debe tener entre 6 y 12 caracteres")
}


function valida_curriculum2(){
    var js_nom=document.getElementById("f_nom").value();
}

// ecma script

//cllear cache