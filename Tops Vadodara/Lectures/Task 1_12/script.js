//const mydata = [3,5,4,8,7,9,15];
//console.log(typeof(mydata));

//mydata.map((x)=>{
//    console.log(x);
//});

//const result = mydata.map((x)=> x>20);
//console.log(result);

//mydata.filter((x)=>{
//    console.log(x);
//});

//const result = mydata.filter((x)=> x>10);
//console.log(result);

//const mydata = [3,5,4,8,7,9,15];
//const result = mydata.filter((x)=> x*10);
//console.log(result);

//const myMap = new Map([
// ["name", "aryan"],
//    ["age", 22],
//    ["salary", 35000]    
///]);
//console.log(myMap);

//const myMap = new Map();
//myMap. set("Name", "Ram");
//console.log(myMap);

//myMap. set("Name", "aryan");
//console.log(myMap);

const myMap = new Map();
myMap. set("Name", "Ram");
//console.log(myMap);

myMap. set("myname", "aryan");
console.log(myMap);

myMap. delete("myname", "aryan");
console.log(myMap);

myMap. clear();
console.log(myMap);


console.log (myMap.has(myname));
console.log (myMap.has(Name));

console.log (myMap.get(Name));