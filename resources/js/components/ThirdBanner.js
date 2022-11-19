import React from 'react';


const ThirdBanner = () => {
    return (
        <div className='third-banner'>
            <div className='third-banner__about'>
                <div className='third-banner__about__image'>

                </div>
                <div className='third-banner__about__text'>
                    <h3>О проекте</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>

            </div>

            <div className='third-banner__ref'>
                <div className='third-banner__ref__text'>
                    <h3>Реферальная программа</h3>
                    <p>промокод для друга, после регистрации которого, на счет зачисляется 500 р на покупку следующего курса или медитации.
                    </p>
                      < p> Другу промокод дает доступ к бесплатной медитации.</p>

                    <button className='main-button'>Сгенерировать промокод</button>
                </div>
                <div className='third-banner__ref__image'>

                </div>

            </div>

        </div>
    );
};

export default ThirdBanner;