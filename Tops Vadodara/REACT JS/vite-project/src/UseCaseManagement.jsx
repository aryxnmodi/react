import { useState } from "react";

const UseCaseManagement = props => {
    const [state, setState] = useState("initial state");

    // setState("new state");
    console.log(state);

    return(
        <>
        <h2>useState use case</h2>
        <h3>State Management</h3>

        <hr />
        <p>{state}</p>
        </>
    );
}

export default UseCaseManagement;