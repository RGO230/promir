import React from 'react';
import FirstBanner from "../components/FirstBanner";
import SecondBanner from "../components/SecondBanner";
import ThirdBanner from "../components/ThirdBanner";
import MyFooter from "../components/MyFooter";



const MainPage = () => {
    return (
        <div>
        <FirstBanner/>
        <SecondBanner/>

        <ThirdBanner/>
            <MyFooter/>


        </div>
    );
};

export default MainPage;