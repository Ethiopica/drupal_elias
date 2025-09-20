import React from "react";
import { createRoot } from "react-dom/client";
import Calculator from "./Calculator";
 
const root = createRoot(document.getElementById("blog_app"));
root.render(<>
    <div>
    <h1 style={{ textAlign: "center" }}>Our Calculator Application</h1>
        <Calculator></Calculator>
    </div>

</>);
 