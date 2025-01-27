// function UserData() {
//     return(
//         <div>
//             <h1> This is UserData component</h1>
//         </div>
//     );
// }
// export default UserData;

import { Component } from "react";

function UserData({name, age, email, salary}){
    return(
        <div style={{
            border : "1px solid black",
            padding : "10px",
            borderRadius : "10px",
            maxWidth : "300px"
        }}>
            <h4> Name: {name}</h4>
            <p>Age: {age}</p>
            <p>email: {email}</p>
            <p>salary: {salary}</p>
        </div>
    )
}
export default UserData;
