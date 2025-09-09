import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App.jsx";

const container = document.getElementById("react_app");
if (container) {
  const root = ReactDOM.createRoot(container);
  root.render(<App />);
}




