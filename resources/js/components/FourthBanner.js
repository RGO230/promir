import React, {useEffect} from 'react';


const FourthBanner = () => {

    const fourthBannerRef=React.useRef();

    const initBlock=()=>{

        // const observer = new IntersectionObserver(secondBannerRef.current)
        const observerIn = new IntersectionObserver((entry, observer)=>{

            if(entry[0].isIntersecting){

                if(entry[0].boundingClientRect.y>0){
                    console.log('inUpLight')
                        fourthBannerRef.current.classList.add('toSee')

                }
                else{
                    console.log('inUpDark')
                    fourthBannerRef.current.classList.remove('intoTheDark')


                    setTimeout(()=>{
                        fourthBannerRef.current.classList.add('toSee')
                    },200)



                }
            }
        },{threshold:0.1})

        const observerOut = new IntersectionObserver((entry, observer)=>{

            if(!entry[0].isIntersecting){

                if(entry[0].boundingClientRect.y>0){
                    console.log('OutLight')
                    fourthBannerRef.current.classList.remove('intoTheDark')
                    fourthBannerRef.current.classList.remove('toSee')
                }
                else{
                    console.log('OutDark')
                    fourthBannerRef.current.classList.add('intoTheDark')
                    fourthBannerRef.current.classList.remove('toSee')
                }



            }
        },{threshold:0.9})
        observerIn.observe(fourthBannerRef.current)
        observerOut.observe(fourthBannerRef.current)

    }

    useEffect(()=>{

        initBlock();


    },[fourthBannerRef])

    return (
        <div className='banner fourth-banner' ref={fourthBannerRef}>
            <div className='fourth-banner__text'>
                <h3>О проекте</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>

        </div>
    );
};

export default FourthBanner;