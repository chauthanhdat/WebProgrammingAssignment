function registervalidation(){
    let nameInput= document.forms["registerForm"]["username"].value;
    if(!havefilledout()) return false;
    let ch = ' ';
    let temp=nameInput;
    let countspace = temp.split(ch).length - 1;
    if(countspace===nameInput.length){
        document.getElementById("namewrongmessage").innerHTML="* Tài khoản không hợp lệ";
        return false;
    }

    for (let i = 0; i < nameInput.length; i++) {
        if( !(/[a-zA-Z]/).test(nameInput[i])||(nameInput[0]==' ')){
            document.getElementById("namewrongmessage").innerHTML="* Tài khoản chỉ được chứa a-z,in hoa và không có khoảng cách ở đầu";
            return false;
        }
    }

    let accInput =document.forms["registerForm"]["useraccount"].value;
    if(accInput.length<4){
        document.getElementById("accwrongmessage").innerHTML="* Tài khoản phải từ 4 ký tự trở lên";
        return false;
    }

    for (let i = 0; i < accInput.length; i++) {
        if( !(/[a-zA-Z]/).test(accInput[i])&&!(accInput[i] >= '0' && accInput[i] <= '9')){
            document.getElementById("accwrongmessage").innerHTML="* Tài khoản chỉ được chứa số 0-9 và a-z và A-Z";
            return false;
        }
    }

    let passInput =document.forms["registerForm"]["pwd"].value;
    passInput=passInput.toString();
    if(passInput.length<4){
        document.getElementById("passwrongmessage").innerHTML="* Mật khẩu chứa tối thiểu 4 ký tự";
        return false;
    }

    let re_passInput=document.forms["registerForm"]["re_pswd"].value;
    re_passInput=re_passInput.toString();
    if(passInput!=re_passInput){
        document.getElementById("passwrongmessage").innerHTML="* Mật khẩu không khớp";
        document.getElementById("repasswrongmessage").innerHTML="* Mật khẩu không khớp";
        return false;
    }


    let phoneInput=document.forms["registerForm"]["phone_number"].value;
    phoneInput=phoneInput.toString();
    phoneInput = phoneInput.replace(/\s+/g, '');    // loại bỏ dấu cách
    phoneInput = phoneInput.replace('(', ''); //loại bỏ dấu (
    phoneInput = phoneInput.replace(')', '');//loại bỏ dấu )
    phoneInput = phoneInput.replace('.', '');//loại bỏ dấu .
    if(phoneInput[0]=='+'){
        phoneInput=phoneInput.slice(0, 0) + phoneInput.slice(1);       
    }
    if(phoneInput.length>11||phoneInput.length<3){
        document.getElementById("phonewrongmessage").innerHTML="* số điện thoại phải từ 3 đến 11 số";
        return false;

    }
    if(phoneInput.match(/^[0-9]+$/) != null){

    }else{
        document.getElementById("phonewrongmessage").innerHTML="* Số điện thoại không được chứ ký tự là chữ hoặc các ký tự đặc biệt";
        return false;
    }


    return true;

}


function havefilledout(){
    let nameInput= document.forms["registerForm"]["username"].value;
    let istrue=true;
    if(nameInput.length<=0){
        document.getElementById("namewrongmessage").innerHTML="* Bạn vui lòng điền tên";
        istrue= false;
    }

    let accInput =document.forms["registerForm"]["useraccount"].value;
    if(accInput.length<=0){
        document.getElementById("accwrongmessage").innerHTML="* Bạn vui lòng điền tài khoản";
        istrue= false;
    }

    let passInput =document.forms["registerForm"]["pwd"].value;
    passInput=passInput.toString();
    if(passInput.length<=0){
        document.getElementById("passwrongmessage").innerHTML="*Bạn vui lòng điền mật khẩu";
        istrue= false;
    }

    let re_passInput=document.forms["registerForm"]["re_pswd"].value;
    re_passInput=re_passInput.toString();
    if(re_passInput.length<=0){
        document.getElementById("repasswrongmessage").innerHTML="* Vui lòng xác nhận mật khẩu";
        istrue= false;
    }
    let phoneInput=document.forms["registerForm"]["phone_number"].value;
    phoneInput=phoneInput.toString();
    if(phoneInput.length<=0){
        document.getElementById("phonewrongmessage").innerHTML="* Vui lòng nhập số điện thoại";
        istrue= false;
    }





    return istrue;
}