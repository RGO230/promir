import React, {useEffect} from 'react';
import secondBannerImg from "../assets/images/banners/banner2.png";
import secondBannerBottleImg from "../assets/images/banners/banner2bottle.png";
import secondBannerGrassImg from "../assets/images/banners/banner2grass.png";

const SecondBanner = () => {
    const secondBannerRef=React.useRef();
    const bottleRef=React.useRef();


    const initBlock=()=>{

        // const observer = new IntersectionObserver(secondBannerRef.current)
        const observerIn = new IntersectionObserver((entry, observer)=>{

                if(entry[0].isIntersecting){
                    bottleRef.current.classList.add('seeBottle')
                }
        },{threshold:0.1})

        const observerOut = new IntersectionObserver((entry, observer)=>{

            if(!entry[0].isIntersecting){
                bottleRef.current.classList.remove('seeBottle')
            }
        },{threshold:0.9})
        observerIn.observe(secondBannerRef.current)
        observerOut.observe(secondBannerRef.current)

    }

    useEffect(()=>{

        initBlock();


    },[secondBannerRef])




    return (
        <div className='banner second-banner' ref={secondBannerRef}>

            <div className='second-banner__grass-earth'>
                <img src={secondBannerImg} className='second-banner__grass-earth__earth'/>
                <img src={secondBannerBottleImg} ref={bottleRef}  className='second-banner__grass-earth__bottle'/>
                <img src={secondBannerGrassImg} className='second-banner__grass-earth__grass'/>
            </div>
            <div className='third-banner' >
                <h1>Спокойствие через медитации</h1>
                <button className='main-button' >Начни прямо сейчас</button>
            </div>
        </div>
    );
};

export default SecondBanner;