import React from 'react';
import instaIcon from '../assets/images/social/Instagram.png';
import vkIcon from '../assets/images/social/vk.png';
import youtubeIcon from '../assets/images/social/youtube.png';
import skypeIcon from '../assets/images/social/skype.png';
import facebookIcon from '../assets/images/social/facebook.png';
import viberIcon from '../assets/images/social/viber.png';
import tgIcon from '../assets/images/social/tg.png';


const MyFooter = () => {
    return (
        <footer >
            <div className='myfooter__socials'>

               <h1>Контакты</h1>
                <div className='myfooter__socials__icons'>
                    <img src={instaIcon} alt="inst"/>
                    <img src={vkIcon} alt="inst"/>
                    <img src={youtubeIcon} alt="inst"/>
                   <img src={skypeIcon} alt="inst"/>
                    <img src={facebookIcon} alt="inst"/>
                    <img src={viberIcon} alt="inst"/>
                    <img src={tgIcon} alt="inst"/>
                </div>

            </div>
            <div className='myfooter__contacts'>
                <a href='tel:79876543210'>+7 (987) 654-32-10</a>
                <a href='tel:79876543210'>+7 (987) 654-32-10</a>
                <a href='mailto:promir@mail.com'>E-mail: promir@mail.com</a>
            </div>

        </footer>
    );
};

export default MyFooter;