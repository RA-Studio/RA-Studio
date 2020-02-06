<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("subtitle", "Делегируйте работу профессионалам");
$APPLICATION->SetPageProperty("TITLE", "Разработка, поддержка и продвижение сайтов в СПб.");
$APPLICATION->SetPageProperty("description", "Создание сайтов на Битрикс, Joomla, UMI от сертифицированного разработчика. Раскрутка сайта с нуля в ТОП Яндекс и Гугл. Создание лендинга. Настройка контекстной рекламы в digital-агенстве RA-STUDIO.");
$APPLICATION->SetTitle("Разработка, поддержка и продвижение сайтов");
?><script>console.log('123dsa')</script>
            <div class="main">
                <div class="main-banner">
                    <div class="main-banner-wrap">
                        <div class="main-banner-left">
                            <div class="main-banner-left__text"><?$APPLICATION->ShowProperty('subtitle')?></div>
                            <h1 class="main-banner-left__title"><?$APPLICATION->ShowTitle(false)?></h1>
                            <div class="main-banner-left-items">
                                13
                                <div class="main-banner-left-items__item">Соблюдение сроков</div>
                                <div class="main-banner-left-items__item">Системный подход</div>
                                <div class="main-banner-left-items__item">Уникальные решения</div>
                            </div>
                            <div class="main-banner-left__btn-wrap" style="display: inline-block;" data-aos="zoom-in" data-aos-delay="1000">
                                <a data-nolink class="main-banner-left__btn fancybox-btn-init" title="Пишите, мы ответим" data-fancybox="" data-options="{&quot;src&quot;: &quot;#SendForm&quot;, &quot;touch&quot;: false}" href="javascript:;" >Узнать подробнее</a>
                            </div>
                        </div>
                        <div class="main-banner-right" id="lottie"></div>
                    </div>
                    <div class="main-banner-bot" data-aos="fade-up" data-aos-delay="1000" data-aos-anchor-placement="bottom-bottom">
                        <?/*<div class="main-banner-bot-mouse" data-div="second-screen"><svg width="21" height="33" viewBox="0 0 21 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="20" height="32" rx="10" stroke="black" stroke-opacity="0.5"/>
                                <path d="M10.5 6V13.5" stroke="black" stroke-opacity="0.5" stroke-linecap="round"/>
                            </svg>
                        </div>*/?>
                        <div class="main-banner-bot-item">
                        	<img src="/local/templates/rastudio/assets/images/prize1.png" alt=""><span>11 место разработчик интернет-магазинов 2019</span>
                        </div>
                        <div class="main-banner-bot-item">
                        	<img src="/local/templates/rastudio/assets/images/prize2.png" alt=""><span>32 место разработчик в Санкт-Петербурге 2018</span>
                        </div>
                        <div class="main-banner-bot-item">
                        	<img src="/local/templates/rastudio/assets/images/prize3.png" alt=""><span>Участник сообщества цифровых компаний Санкт-Петербурга</span>
                        </div>
                    </div>
                </div>
                <div class="main-about" id="second-screen">
                    <div class="main-about__subtitle">О нашей компании</div>
                    <h2 class="main-about__title">RA-Studio</h2>
                    <div class="main-about-items">
                        <div class="main-about-items-item">
                            <div class="main-about-items-item__title">7</div>
                            <div class="main-about-items-item__text">Лет мы занимаемся разработкой и поддержкой</div>
                        </div>
                        <div class="main-about-items-item">
                            <div class="main-about-items-item__title">70+</div>
                            <div class="main-about-items-item__text">Довольных клиентов, работающих с нами</div>
                        </div>
                        <div class="main-about-items-item">
                            <div class="main-about-items-item__title">28</div>
                            <div class="main-about-items-item__text">Топ разработчиков 1С-Битрикс в Санкт-Петербурге</div>
                        </div>
                        <div class="main-about-items-item">
                            <div class="main-about-items-item__title">5</div>
                            <div class="main-about-items-item__text">Средняя оценка нас клиентами по данным Рейтинга Рунета</div>
                        </div>
                        <div class="main-about-items-item">
                            <div class="main-about-items-item__title">15</div>
                            <div class="main-about-items-item__text">Топ разработчиков<br> интернет-магазинов по версии CMS Magazine</div>
                        </div>
                        <div class="main-about-items-item">
                            <div class="main-about-items-item__title">15+</div>
                            <div class="main-about-items-item__text">Сертифицированных специалистов в команде</div>
                        </div>
                    </div>
                    <div class="main-about__subtitle">Сотрудничаем и проводим семинары с 1С-Битрикс</div>
                    <div class="main-about-partners">
                        <div class="main-about-partners-item"><img src="/local/templates/rastudio/assets/images/partner1.png" alt=""></div>
                        <div class="main-about-partners-item">
                            <img src="/local/templates/rastudio/assets/images/partner2.png" alt="">
                            <img src="/local/templates/rastudio/assets/images/partner3.png" alt="">
                        </div>
                        <div class="main-about-partners-item"><img src="/local/templates/rastudio/assets/images/partner4.png" alt=""></div>
                    </div>
                </div>
                <div class="main-ways">
                    <div class="main-ways__subtitle">Что мы делаем</div>
                    <h2 class="main-ways__title">Направления разработки</h2>
                    <div class="main-ways-item" data-aos="fade-up">
                        <div class="main-ways-item-top">
                            <div class="main-ways-item-top-wrap">
                                <div class="main-ways-item-top-left"><svg width="44" height="36" viewBox="0 0 44 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.5 28.5H2.5V29.5H3.5V28.5ZM41 28.5V29.5H42V28.5H41ZM41 1.5H42C42 0.947715 41.5523 0.5 41 0.5V1.5ZM3.5 1.5V0.5C2.94772 0.5 2.5 0.947715 2.5 1.5L3.5 1.5ZM3.5 29.5H41V27.5H3.5V29.5ZM42 28.5V1.5H40V28.5H42ZM41 0.5H3.5V2.5H41V0.5ZM2.5 1.5V28.5H4.5V1.5H2.5ZM0 35.5H44V33.5H0V35.5Z" fill="white"/>
                                    </svg>
                                    <div class="main-ways-item-top-left-info">
                                        <h2 class="main-ways-item-top-left-info__title">Сайты</h2>
                                        <div class="main-ways-item-top-left-info-items">
                                            <h3 class="main-ways-item-top-left-info-items__item">Корпоративные сайты</h3>
                                            <h3 class="main-ways-item-top-left-info-items__item">Интернет-магазины</h3>
                                            <h3 class="main-ways-item-top-left-info-items__item">Промо-сайты</h3>
                                        </div>
                                    </div>
                                </div><svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L13 13L25 1" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="main-ways-item-main">
                            <div class="main-ways-item-main__title">С 2011 года мы создали более 100 сайтов</div>
                            <div class="main-ways-item-main-content">
                                <div class="main-ways-item-main-content-left"><svg width="99" height="1" viewBox="0 0 99 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="0.5" x2="99" y2="0.5" stroke="black"/>
                                    </svg>
                                    <div class="main-ways-item-main-content-left__title">20+</div>
                                    <div class="main-ways-item-main-content-left__text">Крупных компаний сотрудничают с нами в рамках годовых контрактов</div>
                                </div>
                                <div class="main-ways-item-main-content-right">
                                    <p>Это были корпоративные сайты, интернет-магазины, проекты для повышения лояльности и продвижения продуктов или услуг. Чаще всего с нами работают крупные компании из сферы услуг, промышленного сектора, недвижимости и финансов.</p>
                                    <p>За последний год мы сделали проекты для «Металлоинвест», YOTA, Capital Group и еще 20 крупных компаний.</p>
                                    <p>Обычно сайты мы собираем «под ключ», от проектирования и подготовки задания до сборки и публикации. Например, в 2016 году мы запустили сервис важного государственного голосования, который посетили более 10 млн человек.</p>
                                    <p>А сайт к юбилею компании «Металлоинвест» получил десяток премий на российских и международных конкурсах.</p>
                                    <p>Для решения подобных задач в нашей команде внедрены понятные системы управления процессами и существует внутренний аудит качества.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-ways-item" data-aos="fade-up">
                        <div class="main-ways-item-top">
                            <div class="main-ways-item-top-wrap">
                                <div class="main-ways-item-top-left"><svg width="36" height="40" viewBox="0 0 36 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 10V39H1V10M14 10L7.5 2L1 10M14 10H1M35 13.5V5H22V39H35V30.5M35 13.5H30M35 13.5V22M35 22H27.5M35 22V30.5M35 30.5H30" stroke="white" stroke-width="2"/>
                                    </svg>
                                    <div class="main-ways-item-top-left-info">
                                        <h2 class="main-ways-item-top-left-info__title">Дизайн</h2>
                                        <div class="main-ways-item-top-left-info-items">
                                            <h3 class="main-ways-item-top-left-info-items__item">UX / UI design</h3>
                                            <h3 class="main-ways-item-top-left-info-items__item">Прототипирование</h3>
                                            <h3 class="main-ways-item-top-left-info-items__item">User research</h3>
                                        </div>
                                    </div>
                                </div><svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L13 13L25 1" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="main-ways-item-main">
                            <div class="main-ways-item-main__title">С 2011 года мы создали более 100 сайтов</div>
                            <div class="main-ways-item-main-content">
                                <div class="main-ways-item-main-content-left"><svg width="99" height="1" viewBox="0 0 99 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="0.5" x2="99" y2="0.5" stroke="black"/>
                                    </svg>
                                    <div class="main-ways-item-main-content-left__title">20+</div>
                                    <div class="main-ways-item-main-content-left__text">Крупных компаний сотрудничают с нами в рамках годовых контрактов</div>
                                </div>
                                <div class="main-ways-item-main-content-right">
                                    <p>Это были корпоративные сайты, интернет-магазины, проекты для повышения лояльности и продвижения продуктов или услуг. Чаще всего с нами работают крупные компании из сферы услуг, промышленного сектора, недвижимости и финансов.</p>
                                    <p>За последний год мы сделали проекты для «Металлоинвест», YOTA, Capital Group и еще 20 крупных компаний.</p>
                                    <p>Обычно сайты мы собираем «под ключ», от проектирования и подготовки задания до сборки и публикации. Например, в 2016 году мы запустили сервис важного государственного голосования, который посетили более 10 млн человек.</p>
                                    <p>А сайт к юбилею компании «Металлоинвест» получил десяток премий на российских и международных конкурсах.</p>
                                    <p>Для решения подобных задач в нашей команде внедрены понятные системы управления процессами и существует внутренний аудит качества.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-ways-item" data-aos="fade-up">
                        <div class="main-ways-item-top">
                            <div class="main-ways-item-top-wrap">
                                <div class="main-ways-item-top-left"><svg width="41" height="27" viewBox="0 0 41 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.148 19.124L2.268 26H0L11.052 0.511963H13.104L23.94 26H21.672L18.792 19.124H5.148ZM12.024 2.67196L5.904 17.252H18.036L12.024 2.67196Z" fill="white"/>
                                        <path d="M32.2715 26.468C30.7835 26.468 29.4515 26.048 28.2755 25.208C27.0995 24.368 26.5115 23.12 26.5115 21.464C26.5115 20.312 26.7875 19.352 27.3395 18.584C27.9155 17.792 28.7195 17.216 29.7515 16.856C30.8075 16.472 31.8755 16.208 32.9555 16.064C34.0355 15.92 35.2835 15.848 36.6995 15.848H38.3915V15.092C38.3915 11.972 36.8075 10.412 33.6395 10.412C31.6715 10.412 30.0035 11.072 28.6355 12.392L27.5555 11.096C29.1395 9.55996 31.2275 8.79196 33.8195 8.79196C35.7635 8.79196 37.3235 9.30796 38.4995 10.34C39.6755 11.372 40.2635 12.884 40.2635 14.876V22.22C40.2635 23.732 40.3595 24.992 40.5515 26H38.7875C38.5955 24.848 38.4995 23.816 38.4995 22.904H38.4275C37.1075 25.28 35.0555 26.468 32.2715 26.468ZM32.7395 24.848C34.5635 24.848 35.9555 24.26 36.9155 23.084C37.8995 21.884 38.3915 20.444 38.3915 18.764V17.396H37.1315C31.3955 17.396 28.5275 18.716 28.5275 21.356C28.5275 22.556 28.9355 23.444 29.7515 24.02C30.5915 24.572 31.5875 24.848 32.7395 24.848Z" fill="white"/>
                                    </svg>
                                    <div class="main-ways-item-top-left-info">
                                        <h2 class="main-ways-item-top-left-info__title">Брендинг</h2>
                                        <div class="main-ways-item-top-left-info-items">
                                            <h3 class="main-ways-item-top-left-info-items__item">Логотипы</h3>
                                            <h3 class="main-ways-item-top-left-info-items__item">Фирменный стиль</h3>
                                            <h3 class="main-ways-item-top-left-info-items__item">Рекламные иллюстрации</h3>
                                        </div>
                                    </div>
                                </div><svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L13 13L25 1" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="main-ways-item-main">
                            <div class="main-ways-item-main__title">С 2011 года мы создали более 100 сайтов</div>
                            <div class="main-ways-item-main-content">
                                <div class="main-ways-item-main-content-left"><svg width="99" height="1" viewBox="0 0 99 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="0.5" x2="99" y2="0.5" stroke="black"/>
                                    </svg>
                                    <div class="main-ways-item-main-content-left__title">20+</div>
                                    <div class="main-ways-item-main-content-left__text">Крупных компаний сотрудничают с нами в рамках годовых контрактов</div>
                                </div>
                                <div class="main-ways-item-main-content-right">
                                    <p>Это были корпоративные сайты, интернет-магазины, проекты для повышения лояльности и продвижения продуктов или услуг. Чаще всего с нами работают крупные компании из сферы услуг, промышленного сектора, недвижимости и финансов.</p>
                                    <p>За последний год мы сделали проекты для «Металлоинвест», YOTA, Capital Group и еще 20 крупных компаний.</p>
                                    <p>Обычно сайты мы собираем «под ключ», от проектирования и подготовки задания до сборки и публикации. Например, в 2016 году мы запустили сервис важного государственного голосования, который посетили более 10 млн человек.</p>
                                    <p>А сайт к юбилею компании «Металлоинвест» получил десяток премий на российских и международных конкурсах.</p>
                                    <p>Для решения подобных задач в нашей команде внедрены понятные системы управления процессами и существует внутренний аудит качества.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-ways-item" data-aos="fade-up">
                        <div class="main-ways-item-top">
                            <div class="main-ways-item-top-wrap">
                                <div class="main-ways-item-top-left">
                                    <svg width="44" height="47" viewBox="0 0 44 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5 7.07983C6.64511 9.7778 1 17.2296 1 25.9999C1 37.0456 9.9543 45.9999 21 45.9999C29.8585 45.9999 37.3718 40.2406 40 32.2622" stroke="white" stroke-width="2"/>
                                        <path d="M37.237 16.877C39.0798 20.0688 39.8909 23.5707 39.775 26.9998L20.0001 26.9998L20.0001 7.389C26.8335 7.11339 33.5821 10.5466 37.237 16.877Z" stroke="white" stroke-width="2"/>
                                    </svg>
                                    <div class="main-ways-item-top-left-info">
                                        <h2 class="main-ways-item-top-left-info__title">Аналитика</h2>
                                        <div class="main-ways-item-top-left-info-items">
                                            <h3 class="main-ways-item-top-left-info-items__item">Работа с конверсией</h3>
                                            <h3 class="main-ways-item-top-left-info-items__item">SEO-оптимизация</h3>
                                            <h3 class="main-ways-item-top-left-info-items__item">Управление трафиком</h3>
                                        </div>
                                    </div>
                                </div>
                                <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L13 13L25 1" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="main-ways-item-main">
                            <div class="main-ways-item-main__title">С 2011 года мы создали более 100 сайтов</div>
                            <div class="main-ways-item-main-content">
                                <div class="main-ways-item-main-content-left">
                                    <svg width="99" height="1" viewBox="0 0 99 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="0.5" x2="99" y2="0.5" stroke="black"/>
                                    </svg>
                                    <div class="main-ways-item-main-content-left__title">20+</div>
                                    <div class="main-ways-item-main-content-left__text">Крупных компаний сотрудничают с нами в рамках годовых контрактов</div>
                                </div>
                                <div class="main-ways-item-main-content-right">
                                    <p>Это были корпоративные сайты, интернет-магазины, проекты для повышения лояльности и продвижения продуктов или услуг. Чаще всего с нами работают крупные компании из сферы услуг, промышленного сектора, недвижимости и финансов.</p>
                                    <p>За последний год мы сделали проекты для «Металлоинвест», YOTA, Capital Group и еще 20 крупных компаний.</p>
                                    <p>Обычно сайты мы собираем «под ключ», от проектирования и подготовки задания до сборки и публикации. Например, в 2016 году мы запустили сервис важного государственного голосования, который посетили более 10 млн человек.</p>
                                    <p>А сайт к юбилею компании «Металлоинвест» получил десяток премий на российских и международных конкурсах.</p>
                                    <p>Для решения подобных задач в нашей команде внедрены понятные системы управления процессами и существует внутренний аудит качества.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-ways-item" data-aos="fade-up">
                        <div class="main-ways-item-top">
                            <div class="main-ways-item-top-wrap">
                                <div class="main-ways-item-top-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                                        <path d="M15.625 23.9206C25.375 25.7302 31.4688 26.9365 40 31.1587V1C31.4688 4.61905 26.5938 7.63492 15.625 8.2381M15.625 23.9206V8.2381M15.625 23.9206V39H8.92188V23.9206M15.625 23.9206H8.92188M15.625 8.2381H5.26562V11H4C2.34315 11 1 12.3431 1 14V18.254C1 19.9108 2.34315 21.254 4 21.254H5.26562V23.9206H8.92188" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="main-ways-item-top-left-info">
                                        <h2 class="main-ways-item-top-left-info__title">Управление репутацией</h2>
                                        <div class="main-ways-item-top-left-info-items">
                                            <h3 class="main-ways-item-top-left-info-items__item">Устранение негатива</h3>
                                            <h3 class="main-ways-item-top-left-info-items__item">Формирование поисковой брендовой выдачи</h3>
                                            <h3 class="main-ways-item-top-left-info-items__item">Формирование спроса</h3>
                                        </div>
                                    </div>
                                </div>
                                <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L13 13L25 1" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="main-ways-item-main">
                            <div class="main-ways-item-main__title">С 2011 года мы создали более 100 сайтов</div>
                            <div class="main-ways-item-main-content">
                                <div class="main-ways-item-main-content-left">
                                    <svg width="99" height="1" viewBox="0 0 99 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="0.5" x2="99" y2="0.5" stroke="black"/>
                                    </svg>
                                    <div class="main-ways-item-main-content-left__title">20+</div>
                                    <div class="main-ways-item-main-content-left__text">Крупных компаний сотрудничают с нами в рамках годовых контрактов</div>
                                </div>
                                <div class="main-ways-item-main-content-right">
                                    <p>Это были корпоративные сайты, интернет-магазины, проекты для повышения лояльности и продвижения продуктов или услуг. Чаще всего с нами работают крупные компании из сферы услуг, промышленного сектора, недвижимости и финансов.</p>
                                    <p>За последний год мы сделали проекты для «Металлоинвест», YOTA, Capital Group и еще 20 крупных компаний.</p>
                                    <p>Обычно сайты мы собираем «под ключ», от проектирования и подготовки задания до сборки и публикации. Например, в 2016 году мы запустили сервис важного государственного голосования, который посетили более 10 млн человек.</p>
                                    <p>А сайт к юбилею компании «Металлоинвест» получил десяток премий на российских и международных конкурсах.</p>
                                    <p>Для решения подобных задач в нашей команде внедрены понятные системы управления процессами и существует внутренний аудит качества.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?/*
                <div class="main-clients">
                    <div class="main-clients__subtitle">Наши клиенты</div>
                    <h2 class="main-clients__title">От крупных застройщиков до малого бизнеса</h2>
                    <div class="main-clients-items" data-aos="fade">
                        <div class="main-clients-items-item"><img src="assets/images/client1.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client2.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client3.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client4.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client5.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client6.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client7.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client8.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client9.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client10.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client11.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client12.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client13.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client14.png" alt=""></div>
                        <div class="main-clients-items-item"><img src="assets/images/client15.png" alt=""></div>
                    </div>
                </div>
                */?>
                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"clients", 
	array(
		"COMPONENT_TEMPLATE" => "clients",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "200",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "UF_CASE_LINK",
			1 => "UF_LINK",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"FILE_404" => "",
		"TITLE" => "Наши клиенты",
		"SUB_TITLE" => "От крупных застройщиков до малого бизнеса"
	),
	false
);?>
                <?global $vacancyFilter;
                $vacancyFilter = array(
                "ACTIVE" => array("Y", "N")
                );?>
                <?/*$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"vacancyMain", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPONENT_TEMPLATE" => "vacancyMain",
		"DETAIL_URL" => "#SITE_DIR#/vacancy/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILE_404" => "",
		"FILTER_NAME" => "vacancyFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Вакансии",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "UF_TAGS",
			1 => "UF_PREVIEW_PICTURE",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TITLE" => "Открытые вакансии",
		"SUB_TITLE" => "Наша команда продолжает расти",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);*/?>
                <div class="main-adv">
                    <div class="main-adv__subtitle">Работа с нами</div>
                    <h2 class="main-adv__title">Преимущества</h2>
                    <div class="main-adv-wrap">
                        <ul class="main-adv-left" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                            <li class="main-adv-left-item-top__title">Профессиональные разработчики</li>
                            <li class="main-adv-left-item-top__title">Прозрачное ценообразование</li>
                            <li class="main-adv-left-item-top__title">Инициативность и отзывчивость</li>
                            <li class="main-adv-left-item-top__title">Выполнение в срок</li>
                        </ul>
                        <div class="main-adv-right" id="lottie2" data-aos="fade" data-aos-anchor-placement="top-bottom" data-aos-delay="150"></div>
                    </div>
                </div>
                <div class="main-project" data-aos="fade-down" data-aos-delay="300">
                    <div class="main-project-content">
                        <div class="main-project-content-left">
                            <svg width="436" height="508" viewBox="0 0 436 508" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M217.783 0.84082L0.0407715 205.824V507.668H435.519V205.824L217.783 0.84082Z" fill="url(#paint0_linear)"/>
                                <path d="M433.311 501.047H2.24792V205.333L217.783 4.51953L433.311 205.333V501.047Z" fill="white"/>
                                <path d="M367.84 45.7119H67.7195V398.797H367.84V45.7119Z" fill="url(#paint0_linear)"/>
                                <path d="M364.05 48.6562H71.5094V398.798H364.05V48.6562Z" fill="white"/>
                                <path d="M2.24792 205.334L217.783 353.191L2.24792 501.048V205.334Z" fill="#F5F5F5"/>
                                <path d="M433.311 205.334L217.783 353.191L433.311 501.048V205.334Z" fill="#F5F5F5"/>
                                <path d="M2.24792 501.04L209.319 339.933C211.728 338.036 214.706 337.005 217.772 337.005C220.839 337.005 223.816 338.036 226.226 339.933L433.311 501.04H2.24792Z" fill="url(#paint0_linear)"/>
                                <path d="M2.24792 501.04L209.319 346.971C211.762 345.153 214.727 344.172 217.772 344.172C220.818 344.172 223.782 345.153 226.226 346.971L433.311 501.04H2.24792Z" fill="white"/>
                                <path d="M176.955 116.326H115.898V126.626H176.955V116.326Z" fill="#47E6B1"/>
                                <path d="M319.662 143.548H115.898V153.848H319.662V143.548Z" fill="#F5F5F5"/>
                                <path d="M319.662 161.197H115.898V171.497H319.662V161.197Z" fill="#F5F5F5"/>
                                <path d="M319.662 178.854H115.898V189.155H319.662V178.854Z" fill="#F5F5F5"/>
                                <path d="M319.662 196.505H115.898V206.805H319.662V196.505Z" fill="#F5F5F5"/>
                                <path d="M208.583 214.163H115.898V224.463H208.583V214.163Z" fill="#F5F5F5"/>
                                <path d="M319.662 214.163H226.976V224.463H319.662V214.163Z" fill="#6E1866"/>
                                <defs>
                                <linearGradient id="paint0_linear" x1="189720" y1="350325" x2="189720" y2="4668.72" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#808080" stop-opacity="0.25"/>
                                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                                </linearGradient>
                                </defs>
                            </svg>
                            <svg width="216" height="172" viewBox="0 0 216 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M177.188 0.80211L0.92688 63.3232L39.3498 171.646L215.611 109.125L177.188 0.80211Z" fill="url(#paint0_linear)"/>
                                <path d="M174.333 4.85582L4.04639 65.2578L39.9055 166.353L210.192 105.951L174.333 4.85582Z" fill="white"/>
                                <g opacity="0.6">
                                <path opacity="0.6" d="M19.8321 86.3775L41.4952 78.6934L35.8086 62.6614L14.1454 70.3455L19.8321 86.3775Z" fill="#6E1866"/>
                                <path opacity="0.6" d="M48.6643 111.278L131.857 81.7686L130.014 76.5716L46.8209 106.081L48.6643 111.278Z" fill="#6E1866"/>
                                <path opacity="0.6" d="M75.1905 114.544L135.852 93.0273L134.622 89.5604L73.9608 111.077L75.1905 114.544Z" fill="#6E1866"/>
                                </g>
                                <defs>
                                <linearGradient id="paint0_linear" x1="-1912.05" y1="28380.1" x2="-7854.55" y2="11626.9" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#808080" stop-opacity="0.25"/>
                                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                                </linearGradient>
                                </defs>
                            </svg>
                            <svg width="207" height="149" viewBox="0 0 207 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.6">
                                <path d="M22.5164 -0.000646602L0.546265 112.815L184.119 148.565L206.089 35.7487L22.5164 -0.000646602Z" fill="url(#paint0_linear)"/>
                                <path d="M24.2189 3.24989L3.71484 108.538L181.065 143.076L201.569 37.7875L24.2189 3.24989Z" fill="white"/>
                                <path opacity="0.6" d="M27.0757 29.4539L49.6375 33.8477L52.8891 17.1506L30.3273 12.7569L27.0757 29.4539Z" fill="#F55F44"/>
                                <path opacity="0.6" d="M39.2545 65.5536L125.898 82.4268L126.952 77.0143L40.3085 60.1411L39.2545 65.5536Z" fill="#F55F44"/>
                                <path opacity="0.6" d="M60.4392 81.8608L123.616 94.1641L124.32 90.5533L61.1424 78.25L60.4392 81.8608Z" fill="#F55F44"/>
                                </g>
                                <defs>
                                <linearGradient id="paint0_linear" x1="13519.5" y1="32738.5" x2="19048.5" y2="4347.22" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#808080" stop-opacity="0.25"/>
                                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                                </linearGradient>
                                </defs>
                            </svg>
                            <svg width="213" height="164" viewBox="0 0 213 164" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M179.226 0.0341915L0 53.4639L32.8357 163.609L212.062 110.179L179.226 0.0341915Z" fill="url(#paint0_linear)"/>
                                <path d="M176.164 3.92135L3.01233 55.54L33.657 158.336L206.808 106.717L176.164 3.92135Z" fill="white"/>
                                <g opacity="0.6">
                                <path opacity="0.6" d="M17.7551 77.3997L39.7827 70.833L34.923 54.5313L12.8954 61.098L17.7551 77.3997Z" fill="#F55F44"/>
                                <path opacity="0.6" d="M45.2783 103.73L129.871 78.5117L128.295 73.2274L43.703 98.4454L45.2783 103.73Z" fill="#F55F44"/>
                                <path opacity="0.6" d="M71.605 108.348L133.287 89.96L132.236 86.4347L70.5541 104.823L71.605 108.348Z" fill="#F55F44"/>
                                </g>
                                <defs>
                                <linearGradient id="paint0_linear" x1="122.449" y1="136.894" x2="89.6131" y2="26.749" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#808080" stop-opacity="0.25"/>
                                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                                </linearGradient>
                                </defs>
                            </svg>
                            <svg width="181" height="219" viewBox="0 0 181 219" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M105.675 0.748932L0.232544 46.4873L74.6572 218.062L180.1 172.323L105.675 0.748932Z" fill="url(#paint0_linear)"/>
                                <path d="M103.954 3.99232L5.54761 46.6787L77.4497 212.438L175.856 169.751L103.954 3.99232Z" fill="white"/>
                                <g opacity="0.6">
                                <path opacity="0.6" d="M83.9487 21.2068L93.0958 42.2939L108.702 35.5246L99.5545 14.4374L83.9487 21.2068Z" fill="#47E6B1"/>
                                <path opacity="0.6" d="M61.0787 51.6717L96.2061 132.652L101.265 130.458L66.1374 49.4773L61.0787 51.6717Z" fill="#47E6B1"/>
                                <path opacity="0.6" d="M59.6288 78.3561L85.2424 137.404L88.6172 135.94L63.0036 76.8922L59.6288 78.3561Z" fill="#47E6B1"/>
                                </g>
                                <defs>
                                <linearGradient id="paint0_linear" x1="-67277.2" y1="59310.1" x2="-40741.5" y2="47799.5" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#808080" stop-opacity="0.25"/>
                                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                                </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="main-project-content-right">
                            <div class="main-project-content-right__title">Оставьте заявку</div>
                            <div class="main-project-content-right__subtitle">Или свяжитесь с нами по телефону<br> <a href="tel:<?$APPLICATION->IncludeFile(
                                    SITE_TEMPLATE_PATH."/include/phone.php",
                                    array(),
                                    array(
                                        "MODE" => "html",
                                        "SHOW_BORDER" => false
                                    )
                                );?>"><?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        ".default",
                                        array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => SITE_TEMPLATE_PATH."/include/phone.php",
                                            "EDIT_TEMPLATE" => ""
                                        ),
                                        false
                                    );?></a></div>
                            <?$APPLICATION->IncludeComponent(
	"slam:easyform", 
	"uniform", 
	array(
		"COMPONENT_TEMPLATE" => "uniform",
		"FORM_ID" => "FORM10",
		"FORM_NAME" => "",
		"WIDTH_FORM" => "main-project-content-form",
		"DISPLAY_FIELDS" => array(
			0 => "TITLE",
			1 => "EMAIL",
			2 => "PHONE",
			3 => "MESSAGE",
			4 => "COMPANY",
			5 => "DIRECTION",
			6 => "",
		),
		"REQUIRED_FIELDS" => array(
			0 => "TITLE",
			1 => "EMAIL",
			2 => "PHONE",
			3 => "MESSAGE",
			4 => "COMPANY",
			5 => "DIRECTION",
		),
		"FIELDS_ORDER" => "DIRECTION,TITLE,EMAIL,PHONE,COMPANY,MESSAGE",
		"FORM_AUTOCOMPLETE" => "Y",
		"HIDE_FIELD_NAME" => "N",
		"HIDE_ASTERISK" => "Y",
		"FORM_SUBMIT_VALUE" => "Отправить",
		"SEND_AJAX" => "Y",
		"SHOW_MODAL" => "N",
		"_CALLBACKS" => "success_FORM10",
		"OK_TEXT" => "Ваше сообщение отправлено. Мы свяжемся с вами в течение 2х часов",
		"ERROR_TEXT" => "Произошла ошибка. Сообщение не отправлено.",
		"ENABLE_SEND_MAIL" => "Y",
		"CREATE_SEND_MAIL" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "48",
		),
		"EMAIL_TO" => "",
		"EMAIL_BCC" => "",
		"MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
		"EMAIL_FILE" => "Y",
		"EMAIL_SEND_FROM" => "N",
		"USE_IBLOCK_WRITE" => "N",
		"CATEGORY_TITLE_TITLE" => "ФИО",
		"CATEGORY_TITLE_TYPE" => "text",
		"CATEGORY_TITLE_PLACEHOLDER" => "",
		"CATEGORY_TITLE_VALUE" => "",
		"CATEGORY_TITLE_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_TITLE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_EMAIL_TITLE" => "E-mail",
		"CATEGORY_EMAIL_TYPE" => "email",
		"CATEGORY_EMAIL_PLACEHOLDER" => "",
		"CATEGORY_EMAIL_VALUE" => "",
		"CATEGORY_EMAIL_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_EMAIL_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-emailaddress-message=\"E-mail введен некорректно\"",
		"CATEGORY_PHONE_TITLE" => "Телефон",
		"CATEGORY_PHONE_TYPE" => "tel",
		"CATEGORY_PHONE_PLACEHOLDER" => "",
		"CATEGORY_PHONE_VALUE" => "",
		"CATEGORY_PHONE_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_PHONE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_PHONE_INPUTMASK" => "N",
		"CATEGORY_PHONE_INPUTMASK_TEMP" => "+7 (999) 999-9999",
		"CATEGORY_MESSAGE_TITLE" => "Сообщение",
		"CATEGORY_MESSAGE_TYPE" => "textarea",
		"CATEGORY_MESSAGE_PLACEHOLDER" => "",
		"CATEGORY_MESSAGE_VALUE" => "",
		"CATEGORY_MESSAGE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_ADUCATION_TITLE" => "Образование",
		"CATEGORY_ADUCATION_TYPE" => "text",
		"CATEGORY_ADUCATION_PLACEHOLDER" => "Образование",
		"CATEGORY_ADUCATION_VALUE" => "",
		"CATEGORY_ADUCATION_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_EXPERIENCE_TITLE" => "Опыт работы",
		"CATEGORY_EXPERIENCE_TYPE" => "text",
		"CATEGORY_EXPERIENCE_PLACEHOLDER" => "Опыт работы",
		"CATEGORY_EXPERIENCE_VALUE" => "",
		"CATEGORY_EXPERIENCE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_PORTPHOLIO_TITLE" => "Ссылка на портфолио",
		"CATEGORY_PORTPHOLIO_TYPE" => "url",
		"CATEGORY_PORTPHOLIO_PLACEHOLDER" => "Ссылка на портфолио",
		"CATEGORY_PORTPHOLIO_VALUE" => "",
		"CATEGORY_PORTPHOLIO_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_FILE_TITLE" => "Прикрепить файл",
		"CATEGORY_FILE_TYPE" => "file",
		"CATEGORY_FILE_PLACEHOLDER" => "",
		"CATEGORY_FILE_VALUE" => "",
		"CATEGORY_FILE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_VACANCY_TITLE" => "VACANCY",
		"CATEGORY_VACANCY_TYPE" => "hidden",
		"CATEGORY_VACANCY_PLACEHOLDER" => "",
		"CATEGORY_VACANCY_VALUE" => "",
		"CATEGORY_VACANCY_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"USE_CAPTCHA" => "N",
		"USE_MODULE_VARNING" => "N",
		"USE_FORMVALIDATION_JS" => "N",
		"HIDE_FORMVALIDATION_TEXT" => "N",
		"INCLUDE_BOOTSRAP_JS" => "Y",
		"USE_JQUERY" => "N",
		"USE_BOOTSRAP_CSS" => "N",
		"USE_BOOTSRAP_JS" => "N",
		"FORM_SUBMIT_VARNING" => "Нажимая на кнопку \"#BUTTON#\", вы даете согласие на обработку <a target=\"_blank\" href=\"/privacy-policy/\">персональных данных</a>",
		"CATEGORY_FILE_FILE_EXTENSION" => "doc, docx, xls, xlsx, txt, rtf, pdf, png, jpeg, jpg, gif",
		"CATEGORY_FILE_FILE_MAX_SIZE" => "20971520",
		"CATEGORY_FILE_DROPZONE_INCLUDE" => "Y",
		"CATEGORY_COMPANY_TITLE" => "Компания",
		"CATEGORY_COMPANY_TYPE" => "text",
		"CATEGORY_COMPANY_PLACEHOLDER" => "",
		"CATEGORY_COMPANY_VALUE" => "",
		"CATEGORY_TITLE_WIDTH" => "",
		"CATEGORY_EMAIL_WIDTH" => "input-100",
		"CATEGORY_PHONE_WIDTH" => "",
		"CATEGORY_MESSAGE_WIDTH" => "",
		"CATEGORY_COMPANY_WIDTH" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CATEGORY_TITLE_CLASS" => "general-itemInput_half",
		"CATEGORY_EMAIL_CLASS" => "general-itemInput_half",
		"CATEGORY_PHONE_CLASS" => "general-itemInput_half",
		"CATEGORY_MESSAGE_CLASS" => "",
		"CATEGORY_COMPANY_CLASS" => "general-itemInput_half",
		"CLEAR_FORM" => "N",
		"CATEGORY_DIRECTION_TITLE" => "Направление разработки",
		"CATEGORY_DIRECTION_TYPE" => "radio",
		"CATEGORY_DIRECTION_CLASS" => "general-itemInput",
		"CATEGORY_DIRECTION_VALUE" => array(
			0 => "Интернет-магазин",
			1 => "Лендинг",
			2 => "Сервис",
			3 => "",
		),
		"CATEGORY_DIRECTION_SHOW_INLINE" => "Y"
	),
	false
);?>
                        </div>
                    </div>
                </div>
            </div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>