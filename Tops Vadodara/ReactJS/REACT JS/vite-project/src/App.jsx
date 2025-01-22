import { useState } from 'react'
import UserData from './UserData'
function App() {
  const user = {
    name : "Aryan Modi",
    age : 24,
    email : "aryanmodi@gmail.com",
    salary : 25000
  }

  return (
    <>
      <div>
        <h1>Welcome to REACT JS</h1>

        <UserData
        name = {user.name}
        age = {user.age}
        email = {user.email}
        salary = {user.salary}
         />
      </div>
    </>
  )
}

export default App
