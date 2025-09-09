import React from "react";
import { createRoot } from "react-dom/client";

const root = createRoot(document.getElementById("react_app"));
root.render(<h1>Hello world I am react_in_Drupal</h1>);
 
(function (Drupal) {
    Drupal.behaviors.reactApp = {
      attach: function (context, settings) {
        const container = context.querySelector("#react_app");
        if (container && !container.dataset.reactRendered) {
          const root = ReactDOM.createRoot(container);
          root.render(<App />);
          container.dataset.reactRendered = true; // prevent double-render
        }
      },
    };
  })(Drupal);