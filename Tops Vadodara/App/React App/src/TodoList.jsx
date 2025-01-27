import React, { useState } from "react";

function TodoList() {
  const [tasks, setTasks] = useState([]); 
  const [newTask, setNewTask] = useState(""); 
  const [isEditing, setIsEditing] = useState(null); 
  const [editText, setEditText] = useState(""); 

  const addTask = () => {
    if (newTask.trim() === "") 
        return; 
    setTasks([...tasks, { text: newTask, isDone: false }]);
    setNewTask(""); 
  };

  const deleteTask = (index) => {
    setTasks(tasks.filter((_, i) => i !== index));
  };

  const toggleDone = (index) => {
    setTasks(
      tasks.map((task, i) =>
        i === index ? { ...task, isDone: !task.isDone } : task
      )
    );
  };
 
  const startEditing = (index) => {
    setIsEditing(index);
    setEditText(tasks[index].text);
  };

  const updateTask = (index) => {
    setTasks(
      tasks.map((task, i) =>
        i === index ? { ...task, text: editText } : task
      )
    );
    setIsEditing(null); 
    setEditText(""); 
  };

  return (
    <div style={{ padding: "20px", maxWidth: "600px", margin: "0 auto" }}>
      <h1 style={{ textAlign: "center" }}>To-Do List</h1>

      {/* Input for new task */}
      <div style={{ marginBottom: "20px", display: "flex", gap: "10px" }}>
        <input
          type="text"
          value={newTask}
          onChange={(e) => setNewTask(e.target.value)}
          placeholder="Add a new task..."
          style={{
            flex: 1,
            padding: "10px",
            fontSize: "16px",
            borderRadius: "5px",
            border: "1px solid #ccc",
          }}
        />
        <button
          onClick={addTask}
          style={{
            padding: "10px 20px",
            fontSize: "16px",
            backgroundColor: "#4CAF50",
            color: "white",
            border: "none",
            borderRadius: "5px",
            cursor: "pointer",
          }}
        >
          Add
        </button>
      </div>

      {/* Task List */}
      <ul style={{ listStyleType: "none", padding: "0" }}>
        {tasks.map((task, index) => (
          <li
            key={index}
            style={{
              display: "flex",
              justifyContent: "space-between",
              alignItems: "center",
              marginBottom: "10px",
              padding: "10px",
              borderRadius: "5px",
              backgroundColor: task.isDone ? "#d4edda" : "#f8d7da",
              border: "1px solid #ddd",
            }}
          >
            {isEditing === index ? (
              <>
                <input
                  type="text"
                  value={editText}
                  onChange={(e) => setEditText(e.target.value)}
                  style={{
                    flex: 1,
                    padding: "5px",
                    fontSize: "16px",
                    marginRight: "10px",
                  }}
                />
                <button
                  onClick={() => updateTask(index)}
                  style={{
                    padding: "5px 10px",
                    fontSize: "14px",
                    backgroundColor: "#007bff",
                    color: "white",
                    border: "none",
                    borderRadius: "5px",
                    cursor: "pointer",
                  }}
                >
                  Save
                </button>
              </>
            ) : (
              <>
                <span
                  style={{
                    textDecoration: task.isDone ? "line-through" : "none",
                    flex: 1,
                  }}
                >
                  {task.text}
                </span>
                <button
                  onClick={() => toggleDone(index)}
                  style={{
                    padding: "5px 10px",
                    fontSize: "14px",
                    backgroundColor: "#28a745",
                    color: "white",
                    border: "none",
                    borderRadius: "5px",
                    cursor: "pointer",
                    marginRight: "5px",
                  }}
                >
                  {task.isDone ? "Undo" : "Done"}
                </button>
                <button
                  onClick={() => startEditing(index)}
                  style={{
                    padding: "5px 10px",
                    fontSize: "14px",
                    backgroundColor: "#ffc107",
                    color: "white",
                    border: "none",
                    borderRadius: "5px",
                    cursor: "pointer",
                    marginRight: "5px",
                  }}
                >
                  Edit
                </button>
                <button
                  onClick={() => deleteTask(index)}
                  style={{
                    padding: "5px 10px",
                    fontSize: "14px",
                    backgroundColor: "#dc3545",
                    color: "white",
                    border: "none",
                    borderRadius: "5px",
                    cursor: "pointer",
                  }}
                >
                  Delete
                </button>
              </>
            )}
          </li>
        ))}
      </ul>

      {/* Message if no tasks */}
      {tasks.length === 0 && (
        <p style={{ textAlign: "center", color: "#777" }}>No tasks yet!</p>
      )}
    </div>
  );
}

export default TodoList;
