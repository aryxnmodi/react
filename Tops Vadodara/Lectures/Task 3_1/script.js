class animal{
    constructor(){
        console.log("this is default constructor");
    }
}

//const obj = new animal();

class animal{
    constructor(name, age, salary){
        console.log(`welcome ${name} your age is : ${age} salary  is : ${salary}`);

    }
    displayData(departmet, position){
        console.log(`department is : ${departmet} position is : ${position}`);
    }
}

const obj = new animal("ram, 25, 25000");
obj.displayData("r & d", "senior");
