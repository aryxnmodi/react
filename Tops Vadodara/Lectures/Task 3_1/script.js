//class animal{
  //  constructor(){
    //    console.log("this is default constructor");
    //}
//}

//const obj = new animal();

//class animal{
  //  constructor(name, age, salary){
    //    console.log(`welcome ${name} your age is : ${age} salary  is : ${salary}`);

    //}
    //displayData(departmet, position){
      //  console.log(`department is : ${departmet} position is : ${position}`);
 //   }
//}

//const obj = new animal("ram, 25, 25000");
//obj.displayData("r & d", "senior");

//const user = {
  //  name : aryan,
   // username : "aryanmodi",
    //password : "123456",

    //login : function(username, password){
      //  if(username === this.username && password === this.password){
        //    console.log("authentication successfull");
    //}else{("failed");
    //}
    
  //  },
//};

//user.login("aryanmodi", 123456);

class User {
    constructor(name, username, password) {
        this.name = name; 
        this.username = username; 
        this.password = password;  
    }

    
    login(username, password) {
        if (username === this.username && password === this.password) {
            console.log("Authentication successful");
        } else {
            console.log("Authentication failed");
        }
    }
}


const user = new User("aryan", "aryanmodi", "123456");


user.login("aryanmodi", "123456"); 

