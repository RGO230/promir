import React, {useState} from 'react';
import logoImg from "../assets/images/logo/logo.png";
import logoText from "../assets/images/logo/logotext.png";
import {Link} from "react-router-dom";
import {useDispatch, useSelector} from "react-redux";



const MyHeader = () => {

    const dispatch=useDispatch();
    const isOpenModal=useSelector(state=>state.isOpenModal)
    const [burger, setBurger] = useState(true);

    const openModal=()=>{
        dispatch({type:'OPEN_MODAL'})
        console.log(isOpenModal)
    }

    return (
        <header>
                <div className='logo' onClick={()=>openModal()}>
                    <img className='logo__icon' src={logoImg} alt="logo"/>
                    <img className='logo__text' src={logoText} alt="logotext"/>
                </div>

                   <div className={`burger ${burger ? 'active' : ''}`} onClick={()=>setBurger(pr=>!pr)}>
                       <span></span>
                   </div>


                <div className={`header-navbar ${burger? 'active':''}`}>
                    <Link to='/stream'>Личный кабинет</Link>
                    <Link to='/'>О проекте</Link>
                    <Link to='/'>Контакты</Link>
                </div>



            
        </header>
    );
};

export default MyHeader;