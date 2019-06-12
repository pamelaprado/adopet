function SendDoacao(){
    var name = document.getElementById('name');
    var pet = document.getElementById('namePet');
    var email = document.getElementById('email');
    var type = document.getElementById('type');

    if(name.value == "" || pet.value == "" || email.value == "" || type == ""){
        alert("Preencha todas as informações, para que possamos entrar em contato!");
    }else{
        alert("Iremos entrar em contato com você em breve, aguarde!");
    }
}