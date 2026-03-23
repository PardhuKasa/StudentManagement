const form=document.getElementById('form');
    const uname=document.getElementById('uname');
    const email=document.getElementById('email');
    const tandc=document.getElementById('tc');
    const mobile=document.getElementById('mobile');
    const idNo=document.getElementById('idno');
    var isValidId,isValidMobile,isValidName,isValidEmail,isTCChecked=false;
    form.addEventListener('submit',(e)=>{
        e.preventDefault();
        validate();
    });
        
    function validate(){
        isValidId = false;
        isValidMobile = false;
        isValidName = false;
        isValidEmail = false;
        isTCChecked = false;
        checkIdNo();
        checkUserName();
        checkMobile();
        checkEmail();
        checkTandC();
        if(isValidName && isValidEmail && isTCChecked && isValidId && isValidMobile){
            form.submit()
        }
    }

    function setError(input,message){
        let parent = input.parentElement;
        let small = parent.querySelector('small')
        small.innerText = message
        parent.classList.add('error')
        parent.classList.remove('success')
    }

    function setSuccess(input){
        let parent = input.parentElement;
        parent.classList.add('success')
        parent.classList.remove('error')
    }

    function idCheck(input){
        let idReg=/^([NSOR])[2][2][01][0-9]{3}$/i;
        let valid = idReg.test(input)       
        return valid;
    }

    function checkIdNo(){
        let idValue=idNo.value.trim();
        if(idValue===''){
            setError(idNo,'id Number cannot be empty')
        }
        else if(!idCheck(idValue)){
            setError(idNo,'Invalid ID Number');
        }
        else{        
            setSuccess(idNo);
            isValidId =true;
        }
    }

    function checkUserName(){
        let nameValue = uname.value.trim()
        if(nameValue===''){
            setError(uname,'user name cannot be empty')
        }
        else if(nameValue.length<3){
            setError(uname,'user name should be minimum 3 characters')
        }
        else{        
            setSuccess(uname)
            isValidName =true
        }
    }
    function mobileCheck(input){
        let mobileReg = /^(\+91[\-\s]?|91[\-\s]?|0)?[6-9]\d{9}$/;
        let valid = mobileReg.test(input);       
        return valid;
    }
    function checkMobile(){
        let mobileValue=mobile.value.trim();
        if(mobileValue===''){
            setError(mobile,'Mobile Number cannot be empty')
        }
        else if(!mobileCheck(mobileValue)){
            setError(mobile,'Enter Valid Indian Number');
        }
        else{        
            setSuccess(mobile);
            isValidMobile =true;
        }
    }
    function emailCheck(input){
        let emailReg = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
        let valid = emailReg.test(input)       
        return valid;
    }
    function checkEmail(){
        let emailValue= email.value.trim()
        if(emailValue===''){
            setError(email,'Eamil cannot be empty')
        }  
        else if(!emailCheck(emailValue)){
            setError(email,'Enter Valid Email Id')
        }
        else{        
            setSuccess(email)
            isValidEmail =true
        }
    }
    function checkTandC(){
        if(!tandc.checked){
            setError(tandc,'click on agree terms checkbox')        
        }
        else{
            setSuccess(tandc)
            isTCChecked = true
        }
    }