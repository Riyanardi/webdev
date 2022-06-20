import React,{ useState } from "react";

// const Input () => {
//     return (
//         <input 
//             type="text" 
//             placeholder= "Input Task Here..." 
//             value={newTaskValue}
//             onChange={() => setNewTaskValue(e.target.value)}
//         </input>
//     );   
// }; 

// export default Input;

export default function Input2({placeholder = 'input', value, ...props}) {
  return (
    <input
      className="border-2 border-slate-200 w-full mb-[10px] p-2"
      type="text"
      placeholder={placeholder}
      value={value}
      {...props}
    />
  );
}