import React, {useEffect} from 'react';
import waterFive from "../assets/images/banners/firstbanner.png";

const FiveBanner = () => {

    const fiveBannerRef = React.useRef();

    const initBlock = () => {

        // const observer = new IntersectionObserver(secondBannerRef.current)
        const observerIn = new IntersectionObserver((entry, observer) => {

            if (entry[0].isIntersecting) {
                fiveBannerRef.current.classList.add('intoTheDark')
            }
        }, {threshold: 0.1})

        const observerOut = new IntersectionObserver((entry, observer) => {

            if (!entry[0].isIntersecting) {
                fiveBannerRef.current.classList.remove('intoTheDark')
            }
        }, {threshold: 0.9})
        observerIn.observe(fiveBannerRef.current)
        observerOut.observe(fiveBannerRef.current)

    }

    useEffect(() => {
        initBlock();
    }, [fiveBannerRef])

    return (
        <div className='banner five-banner' ref={fiveBannerRef}>
            <div className='five-banner__text'>
                <h3>Реферальная программа</h3>
                <p>промокод для друга, после регистрации которого, на счет зачисляется 500 р на покупку следующего курса
                    или медитации.
                </p>
                <p> Другу промокод дает доступ к бесплатной медитации.</p>

                <button className='main-button'>Сгенерировать промокод</button>
            </div>

        </div>
    );
};

export default FiveBanner;