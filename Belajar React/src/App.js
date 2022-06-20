import React, { useState } from "react";
import Button from "./components/Button";
import Input from "./components/Input2";


const App = () => {
//Function App() {
  const [tasklist, setTaskList] = useState({
    rand: Math.random(),
    data: [],
  });
  const [newTaskValue, setNewTaskValue] = useState("");

  const actionAddTask = ()=> {
    if (newTaskValue.trim() === "") {
      return false;
    }
    const newData = tasklist.data;
    newData.push(newTaskValue);
    setTaskList({data: newData});
    setNewTaskValue("");
    //newData.push("Task Baru");
    //setTaskList({rand:Math.random(),data: newData });
    //alert(JSON.stringify(newData));
  };

  return (
    <div>
      <br />  
      <div>

      <Input
          placeholder="Masukan Nama"
          value={newTaskValue}
          onChange={(event) => setNewTaskValue(event.target.value)}
        />
        <Button text="Add Task" onClick={actionAddTask} />
      <br/>
        <Input
          placeholder="Masukan Tanggal Lahir"
          value={newTaskValue}
          onChange={(event) => setNewTaskValue(event.target.value)}
        />
       <Button text="Add Task" onClick={actionAddTask} />
      </div>

     
      <div>
        <ul>
          {tasklist.data.map((item) => (
            <li>{item}</li>
          ))}
        </ul>
      </div>
      <Button 
        backgroundColor="#c0392b" 
        text="Clear"
        onClick={() => setTaskList({ data: [] })} 
      />
      <Button  
        text="Rekomendasi"
        onClick={() => setNewTaskValue("Task Rekomendasi")} 
      />
  </div>
 
    
  );
};

export default App;
