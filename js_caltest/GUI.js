function clickExpression(addString, inputId){
    // the getElementById or class or anything really
    // can both store the current value, as well as edit
    // and update the current vale... cool stuff!!
    // get current text input value
    // var currentInput = document.getElementById(inputId).value;
    // alert(currentInput);
    document.getElementById(inputId).value += addString;
    // alert(currentInput + addString);
    document.getElementById(inputId).focus();
};