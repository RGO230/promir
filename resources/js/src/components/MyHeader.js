import React from 'react';
import logoImg from "../assets/images/logo/logo.png";
import logoText from "../assets/images/logo/logotext.png";
import {Link} from "react-router-dom";


const MyHeader = () => {
    return (
        <header>
            <div className='logo'>
                <img className='logo__icon' src={logoImg} alt="logo"/>
                <img className='logo__text' src={logoText} alt="logotext"/>
            </div>

            <div className='header-navbar'>
                <Link to='/'>Личный кабинет</Link>
                <Link to='/'>О проекте</Link>
                <Link to='/'>Контакты</Link>
            </div>



        </header>
    );
};

export default MyHeader;