import React, { useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import {RouterProvider} from "react-router";
import router from './router/index';
import store from './store/store'
import Provider from "react-redux/es/components/Provider";
import './style/style.css';
import './style/media.css';




window._ = require('lodash');

try {
    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

export function App() {

  return (
    <div className="App">

    </div>
  );
}






const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
    <Provider store={store}>
    <React.StrictMode>
        <RouterProvider router={router} />
    </React.StrictMode>
    </Provider>
);



