import React from "react";
import {createBrowserRouter,} from "react-router-dom";
import MainPage from "../pages/MainPage";
import StreamPage from "../pages/StreamPage";

const router = createBrowserRouter([
    {
        path: "/",
        element: <MainPage/>,
    },
    {
        path: "/stream",
        element: <StreamPage/>,
    },
    {
        path: "*",
        element: <MainPage/>,
    },
]);
export default router;