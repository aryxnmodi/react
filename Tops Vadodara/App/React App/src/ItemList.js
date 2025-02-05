import React, {useState} from "react";

function ItemList() {
    const [items, setItems] = useState([]);

    const addItem = () => {
        if (newItem.trim() === "")
            return;
        setItems([...items, {text: newItem, isDone: false}]);
        setNewItem("");
    };
    

    return (
        <div>
           
        </div>
    );
}