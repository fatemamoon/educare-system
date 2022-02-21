function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}
function seterror(id, error){
    
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
    var returnval = true;
    clearErrors();

    
    var name = document.forms['myForm']["fname"].value;
    if (name.length<3){
        seterror("name", "*Length of name is too short");
        returnval = false;
    }

    if (name.length == 0){
        seterror("name", "*Length of name cannot be zero!");
        returnval = false;
    }

    var password = document.forms['myForm']["fpass"].value;
    if (password.length < 3){

       
        seterror("pass", "*Password should be atleast 3 characters long!");
        returnval = false;
    }


    return returnval;
}