//parameter function
function displayData(name, age, salary){
    console.log(`Welcome ${name} your age is ${age} years with salary ${salary}`);
}
displayData("Aryan", 21, 30000);

// Default parameterized function

function displayData(name=ram, age=21, salary=30000){
    console.log(`Welcome ${name} your age is ${age} years with salary ${salary}`);
}
displayData("Aryan", 21, 30000);

function displayData(name=ram, age=21, salary=30000){
    console.log(`Welcome ${name} your age is ${age} years with salary ${salary}`);
}
displayData();

//annoynymous function


function displayData(name=ram, age=21, salary=30000){
    console.log(`Welcome ${name} your age is ${age} years with salary ${salary} with department ${department}`);
}
displayData("ram", 21, 30000, "HR");

const displayData=function(name=ram, age=21, salary=30000, department="IT"){
    console.log(`Welcome ${name} your age is ${age} years with salary ${salary} with department ${department}`);
}
displayData("ram", 21, 30000, "HR");


//const data =additionNumbers(2,3,4,);
console.log(`adition of numbers are : ${data}`);

function additionNumbers(x,y,z){
    return x+y+z;
    }

    const data = additionNumbers(2,3,4,5);
    console.log (`addtion of numbers are : ${data}`);