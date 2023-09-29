
if(document.getElementById("form")) {
    let form = document.getElementById("form");
    let    serverResponse = document.querySelector('.response');
    let responseBtn = document.querySelector('.response__btn');

      
    const sendBtn = document.querySelector('.contact__btn');
   
    const NAME_REGEXP = /[a-zA-Zа-яА-я]/g;
    const inputName = document.querySelector('input[name="name"]');
    const inputLastName = document.querySelector('input[name="last-name"]');

    const inputPhoneNumber = document.querySelector('input[name="mobile-number"]')
    
    const inputEmail = document.querySelector('input[name="email"]');
    const inputCompany = document.querySelector('input[name="company-name"]');
    const inputTitle = document.querySelector('input[name="title"]');

    const EMAIL_REGEXP = /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;

    let getInputNumbersValue = function (input) {
        // Return stripped input value — just numbers
        return input.value.replace(/\D/g, '');
    }

    let onPhonePaste = function (e) {
        let input = e.target,
            inputNumbersValue = getInputNumbersValue(input);
        let pasted = e.clipboardData || window.clipboardData;
        if (pasted) {
            let pastedText = pasted.getData('Text');
            if (/\D/g.test(pastedText)) {
                // Attempt to paste non-numeric symbol — remove all non-numeric symbols,
                // formatting will be in onPhoneInput handler
                input.value = inputNumbersValue;
                return;
            }
        }
    }

    let onPhoneInput = function (e) {
        let input = e.target,
            inputNumbersValue = getInputNumbersValue(input),
            selectionStart = input.selectionStart,
            formattedInputValue = "";

        if (!inputNumbersValue) {
            return input.value = "";
        }

        if (input.value.length != selectionStart) {
            // Editing in the middle of input, not last symbol
            if (e.data && /\D/g.test(e.data)) {
                // Attempt to input non-numeric symbol
                input.value = inputNumbersValue;
            }
            return;
        }

        // if (["7", "8", "9"].indexOf(inputNumbersValue[0]) > -1) {
        //     if (inputNumbersValue[0] == "9") inputNumbersValue = "7" + inputNumbersValue;
        //     let firstSymbols = (inputNumbersValue[0] == "8") ? "8" : "+7";
        //     formattedInputValue = input.value = firstSymbols + " ";
        //     if (inputNumbersValue.length > 1) {
        //         formattedInputValue += '(' + inputNumbersValue.substring(1, 4);
        //     }
        //     if (inputNumbersValue.length >= 5) {
        //         formattedInputValue += ') ' + inputNumbersValue.substring(4, 7);
        //     }
        //     if (inputNumbersValue.length >= 8) {
        //         formattedInputValue += '-' + inputNumbersValue.substring(7, 9);
        //     }
        //     if (inputNumbersValue.length >= 10) {
        //         formattedInputValue += '-' + inputNumbersValue.substring(9, 11);
        //     }
        // } else {
        //     formattedInputValue = '+' + inputNumbersValue.substring(0, 16);
        // }
        formattedInputValue = '+' + inputNumbersValue.substring(0, 16);

        input.value = formattedInputValue;
    }
    let onPhoneKeyDown = function (e) {
        // Clear input after remove last symbol
        let inputValue = e.target.value.replace(/\D/g, '');
        if (e.keyCode == 8 && inputValue.length == 1) {
            e.target.value = "";
        }
    }
    inputPhoneNumber.addEventListener('keydown', onPhoneKeyDown);
    inputPhoneNumber.addEventListener('input', onPhoneInput, false);
    inputPhoneNumber.addEventListener('paste', onPhonePaste, false);
    


    function isInputNameValid(value) {
        const NAME_REGEXP = /[a-zA-Zа-яА-я]/g;

        return (NAME_REGEXP.test(value) && value.length > 2);
    }

    function isInputTextValid(value) {
        return (value.length > 2 && value.length < 30);
    }

    function isInputEmailValid(value) {
        const EMAIL_REGEXP = /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;

        return (EMAIL_REGEXP.test(value) && value.length > 8);
    }

    function validateInputs(nameOfInput, validTest) {
        function disableBtn() {
            const inputName = document.querySelector('input[name="name"]');
            const inputLastName = document.querySelector('input[name="last-name"]');

            const inputPhoneNumber = document.querySelector('input[name="mobile-number"]')
            
            const inputEmail = document.querySelector('input[name="email"]');
            const inputCompany = document.querySelector('input[name="company-name"]');
            const inputTitle = document.querySelector('input[name="title"]');
            const sendBtn = document.querySelector('.contact__btn');

            if(isInputEmailValid(inputEmail.value) && isInputNameValid(inputName.value) && isInputTextValid(inputLastName.value)  &&  isInputTextValid(inputCompany.value) && isInputTextValid(inputTitle.value)) {
                sendBtn.removeAttribute('disabled');
                sendBtn.classList.remove('disable');
            } else {
                sendBtn.setAttribute('disabled', 'true');
                sendBtn.classList.add('disable');
            }
        }
        function onInput() {
            if(validTest(nameOfInput.value)) {
               nameOfInput.classList.remove('error');
            } else {
                nameOfInput.classList.add('error');
            }
        }
        nameOfInput.addEventListener('change', onInput);
        nameOfInput.addEventListener('change', disableBtn);
    }

    validateInputs(inputName, isInputNameValid);
    validateInputs(inputEmail, isInputEmailValid);
    validateInputs(inputLastName, isInputTextValid);
    validateInputs(inputPhoneNumber, isInputTextValid);
    validateInputs(inputCompany, isInputTextValid);
    validateInputs(inputTitle, isInputTextValid);

    form.addEventListener("submit", async function (event) {
        event.preventDefault();
    
        let response = await fetch('https://cx-world.creativecom.org/wp-content/themes/world-forum/assets/mailer/mail.php', {
            method: 'POST',
            body: new FormData(form)
          });
    
        if (response.ok) {
            console.log("send");
            serverResponse.classList.remove('hidden')
        } else {
            console.log("error: " + response.status);
        }
    
        form.reset();
    
        responseBtn.addEventListener('click', function () {
          serverResponse.classList.add('hidden')
      })
    })

}
