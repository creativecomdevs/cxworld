if(document.querySelector("form[name='checkout']")) {

    const sendBtn = document.querySelector('.woocommerce-checkout-review-order');
    const inputPhoneNumber = document.querySelector('input[name="billing_phone"]')
    
    const inputEmail = document.querySelector('input[name="billing_email"]');
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
    // sendBtn.setAttribute('disabled', 'true');
 
    // sendBtn.setAttribute('disabled', 'true');
    sendBtn.classList.add('disable');
    function validateInputs(nameOfInput, validTest) {
        function disableBtn() {
            const sendBtn = document.querySelector('.woocommerce-checkout-review-order');
            if(validTest(nameOfInput.value) ) {
                // sendBtn.removeAttribute('disabled');
                sendBtn.classList.remove('disable');
                // document.onkeydown = () => {
                //     if(e.keyCode === 13) {
                //         return false;
                //     }
                // }
            } else {
                // sendBtn.setAttribute('disabled', 'true');
                sendBtn.classList.add('disable');
                document.onkeydown = (e) => {
                    if(e.keyCode === 13) {
                        return false;
                    }
                }
            }
        }
        function onInput() {
            if(validTest(nameOfInput.value)) {
               nameOfInput.classList.remove('error');
            } else {
                nameOfInput.classList.add('error');
            }
        }
        nameOfInput.addEventListener('input', onInput);
        nameOfInput.addEventListener('input', disableBtn);
    }

    validateInputs(inputEmail, isInputEmailValid);
    // validateInputs(inputPhoneNumber, isInputTextValid);

}
