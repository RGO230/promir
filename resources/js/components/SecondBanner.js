import React from 'react';
import secondBannerImg from '../assets/images/banners/banner2.png';

const SecondBanner = () => {
    return (
        <div className='second-banner'>
            <img src={secondBannerImg} alt="secban"/>
            <div className='second-banner__butt'>
                <h1>Спокойствие через медитации</h1>
                <button className='main-button' >Начни прямо сейчас</button>

            </div>
        </div>
    );
};

export default SecondBanner;