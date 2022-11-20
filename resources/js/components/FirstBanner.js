import React, {useEffect} from 'react';
import firstBannerBack from "../assets/images/banners/firstbanner.png";

const FirstBanner = () => {

    const firstBannerRef=React.useRef();

    const initBlock=()=> {

        // const observer = new IntersectionObserver(secondBannerRef.current)
        const observer = new IntersectionObserver((entry, observer) => {
            if (!entry[0].isIntersecting) {
                firstBannerRef.current.classList.add('upBack')
            }
        }, {threshold: 1})
        observer.observe(firstBannerRef.current)

        const observer2 = new IntersectionObserver((entry, observer)=>{
            if(entry[0].isIntersecting){
                firstBannerRef.current.classList.remove('upBack')
            }
        },{threshold:0})
        observer2.observe(firstBannerRef.current)
    }

    useEffect(()=>{

        initBlock();


    },[firstBannerRef])



    return (
        <div className="banner first-banner" ref={firstBannerRef}>

           <div className='first-banner__background__block'/>


            <h1 className="first-banner__title">PROMIR</h1>
            <div  className="first-banner__blur" >

                <h2>Вода - как источник твоего внутреннего состояния, спокойствия и гармонии.</h2>
                <button>Начать диагностику твоего состояния</button>
            </div>
            <img className="first-banner__background" src={firstBannerBack}/>

            <div className="first-banner__mob-button"><button>Начать диагностику своего состояния</button></div>




        </div>
    );
};

export default FirstBanner;