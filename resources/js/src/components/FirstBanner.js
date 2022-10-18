import React from 'react';
import logoImg from "../assets/images/logo/logo.png";
import logoText from "../assets/images/logo/logotext.png";
import {Link} from "react-router-dom";

const FirstBanner = () => {
    return (
        <div className='first-banner'>
            <div className='logo'>
                <img className='logo__icon' src={logoImg} alt="logo"/>
                <img className='logo__text' src={logoText} alt="logotext"/>
            </div>

            <div className='first-banner-header'>
                <div className='first-banner-header-navbar'>
                    <Link to='/'>Личный кабинет</Link>
                    <Link to='/'>О проекте</Link>
                    <Link to='/'>Контакты</Link>
                </div>

                <div>
                <h3>Вода - как источник твоего внутреннего состояния, спокойствия и гармонии.</h3>

                <button>Начать диагностику твоего состояния</button>
                </div>



            </div>

        </div>
    );
};

export default FirstBanner;