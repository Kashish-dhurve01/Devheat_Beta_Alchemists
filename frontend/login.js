const logregBox = document.querySelector('.logreg-box');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', ()  => { logregBox.classList.add('active');});

loginLink.addEventListener('click', ()  => { logregBox.classList.remove('active');});

document.addEventListener("DOMContentLoaded", function() {
    var heightInput = document.getElementById('height');
    var weightInput = document.getElementById('weight');

    heightInput.addEventListener('input', calculateBMI);
    weightInput.addEventListener('input', calculateBMI);
});

function calculateBMI() {
    var height = document.getElementById('height').value;
    var weight = document.getElementById('weight').value;

   
    height = height / 100;

    var bmi = weight / (height * height);
    
    let greeting;

    if (bmi < 18.5) {
     greeting ="Underweight";
    } 
    else if(25<bmi<29.9){
        greeting = "Overweight";
    }
    else {
  greeting = "Obesity";
   }
    const result=document.getElementById("result");
    const output = document.getElementById("output");
    result.style.display="block";
    output.style.display = 'block';
    output.innerHTML = "Your BMI is: " + bmi.toFixed(2);
    result.innerHTML="You are: "+greeting;
    
}