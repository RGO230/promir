import React, {useEffect} from 'react';
import {Fullpage, FullpageContext, FullpageNavigation, FullpageSection, FullPageSections} from "@ap.cx/react-fullpage";
import FirstBanner from "../components/FirstBanner";
import SecondBanner from "../components/SecondBanner";
import ThirdBanner from "../components/ThirdBanner";
import FourthBanner from "../components/FourthBanner";
import FiveBanner from "../components/FiveBanner";
import MyHeader from "../components/MyHeader";
import MyFooter from "../components/MyFooter";

import Pusher from 'pusher-js';

const MainPage = () => {
    

    return (
        <div>
         <MyHeader/>
        <Fullpage transitionTiming={1500}>
            {
                window.innerWidth >= 860 &&
            <FullpageNavigation/>
            }

            <FullPageSections>
                <FullpageSection ><FirstBanner  /></FullpageSection>
                <FullpageSection><SecondBanner  /></FullpageSection>
                {/*<FullpageSection><ThirdBanner/></FullpageSection>*/}
                <FullpageSection><FourthBanner/></FullpageSection>
                <FullpageSection><FiveBanner/></FullpageSection>
            </FullPageSections>
        </Fullpage>
            <MyFooter/>
        </div>
    );
};

export default MainPage;