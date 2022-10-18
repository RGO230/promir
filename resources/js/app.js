
import './style/style.css';
import './style/media.css';


export function App() {
  return (
    <div className="App">

    </div>
  );
}



import React from 'react';
import ReactDOM from 'react-dom/client';

import {RouterProvider} from "react-router";
import router from './router/index';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
    <React.StrictMode>
        <RouterProvider router={router} />
    </React.StrictMode>
);



