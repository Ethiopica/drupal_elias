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

  const buttonRows = [
    ["7", "8", "9", "/"],
    ["4", "5", "6", "*"],
    ["1", "2", "3", "-"],
    ["0", ".", "+", "="],
  ];

  return (
    <div className="calculator-container">
      <h1 className="calculator-title">Our Calculator Application</h1>
      <input
        type="text"
        value={input}
        readOnly
        className="calculator-input"
      />
      {buttonRows.map((row, idx) => (
        <div key={idx} className="calculator-row">
          {row.map((val) => (
            <button
              key={val}
              className={`calculator-button ${val === "=" ? "equals" : ""}`}
              onClick={val === "=" ? calculate : () => handleClick(val)}
            >
              {val}
            </button>
          ))}
        </div>
      ))}
      <div className="calculator-row">
        <button className="calculator-button clear" onClick={clear}>
          C
        </button>
      </div>
    </div>
  );
};

export default Calculator;
