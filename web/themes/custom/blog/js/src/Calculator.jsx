import React, { useState } from "react";
 
const Calculator = () => {
  const [input, setInput] = useState("");
 
  const handleClick = (value) => {
    setInput((prev) => prev + value);
  };
 
  const calculate = () => {
    try {
      // eslint-disable-next-line no-eval
      setInput(eval(input).toString());
    } catch (e) {
      setInput("Error");
    }
  };
 
  const clear = () => {
    setInput("");
  };
 
  return (
<div style={{ width: "200px", margin: "20px auto", textAlign: "center" }}>
<input
        type="text"
        value={input}
        readOnly
        style={{ width: "100%", marginBottom: "10px", textAlign: "right" }}
      />
<div>
        {["7", "8", "9", "/"].map((val) => (
<button key={val} onClick={() => handleClick(val)}>
            {val}
</button>
        ))}
</div>
<div>
        {["4", "5", "6", "*"].map((val) => (
<button key={val} onClick={() => handleClick(val)}>
            {val}
</button>
        ))}
</div>
<div>
        {["1", "2", "3", "-"].map((val) => (
<button key={val} onClick={() => handleClick(val)}>
            {val}
</button>
        ))}
</div>
<div>
        {["0", ".", "+", "="].map((val) => (
<button
            key={val}
            onClick={val === "=" ? calculate : () => handleClick(val)}
>
            {val}
</button>
        ))}
</div>
<div>
<button onClick={clear}>C</button>
</div>
</div>
  );
};
 
export default Calculator;