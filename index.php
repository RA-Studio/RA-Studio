<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("subtitle", "Делегируйте работу профессионалам");
$APPLICATION->SetPageProperty("TITLE", "Разработка, поддержка и продвижение сайтов в СПб.");
$APPLICATION->SetPageProperty("description", "Создание сайтов на Битрикс, Joomla, UMI от сертифицированного разработчика. Раскрутка сайта с нуля в ТОП Яндекс и Гугл. Создание лендинга. Настройка контекстной рекламы в digital-агенстве RA-STUDIO.");
$APPLICATION->SetTitle("Разработка, поддержка и продвижение сайтов");
?>
            <div class="main">
                <div class="main-banner">
                    <div class="main-banner-wrap">
                        <div class="main-banner-left">
                            <div class="main-banner-left__text"><?$APPLICATION->ShowProperty('subtitle')?></div>
                            <h1 class="main-banner-left__title"><?$APPLICATION->ShowTitle(false)?></h1>
                            <div class="main-banner-left-items">
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
                        	<img src="/local/templates/rastudio/assets/images/prize1.png" alt=""><span>29 место разработчик интернет-магазинов</span>
                        </div>
                        <div class="main-banner-bot-item">
                        	<img src="/local/templates/rastudio/assets/images/prize2.png" alt=""><span>32 место разработчик в Санкт&nbsp;-&nbsp;Петербурге</span>
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
                            <div class="main-about-items-item__title">30</div>
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
                <?$APPLICATION->IncludeComponent(
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
);?>
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
                    <div class="main-project__title">Начать проект</div>
                    <div class="main-project-content">
                        <div class="main-project-content-left"><svg width="464" height="368" viewBox="0 0 464 368" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M128.285 186.841L0 225.084L23.5028 303.923L151.788 265.679L128.285 186.841Z" fill="url(#paint0_linear)"/>
                                <path d="M126.093 189.624L2.15625 226.571L24.0908 300.149L148.027 263.202L126.093 189.624Z" fill="white"/>
                                <g opacity="0.6">
                                    <path opacity="0.6" d="M12.7084 242.218L28.4751 237.518L24.9966 225.849L9.22992 230.55L12.7084 242.218Z" fill="#F55F44"/>
                                    <path opacity="0.6" d="M32.4084 261.064L92.957 243.013L91.8295 239.231L31.2808 257.281L32.4084 261.064Z" fill="#F55F44"/>
                                    <path opacity="0.6" d="M51.2525 264.369L95.4023 251.208L94.6501 248.684L50.5003 261.846L51.2525 264.369Z" fill="#F55F44"/>
                                </g>
                                <path d="M328.192 9.80094e-05L312.467 80.7505L443.862 106.339L459.588 25.5884L328.192 9.80094e-05Z" fill="url(#paint1_linear)"/>
                                <path d="M329.411 2.32632L314.734 77.6885L441.676 102.409L456.353 27.0473L329.411 2.32632Z" fill="white"/>
                                <g opacity="0.6">
                                    <path opacity="0.6" d="M331.456 21.0821L347.605 24.2271L349.933 12.2758L333.784 9.13092L331.456 21.0821Z" fill="#F55F44"/>
                                    <path opacity="0.6" d="M340.174 46.9212L402.19 58.9985L402.945 55.1244L340.928 43.0471L340.174 46.9212Z" fill="#F55F44"/>
                                    <path opacity="0.6" d="M355.337 58.5931L400.558 67.3994L401.061 64.8149L355.841 56.0086L355.337 58.5931Z" fill="#F55F44"/>
                                </g>
                                <path d="M409.903 159.438L334.431 192.176L387.702 314.984L463.174 282.245L409.903 159.438Z" fill="url(#paint2_linear)"/>
                                <path d="M408.672 161.758L338.235 192.312L389.701 310.957L460.137 280.404L408.672 161.758Z" fill="white"/>
                                <g opacity="0.6">
                                    <path opacity="0.6" d="M394.353 174.081L400.9 189.174L412.071 184.329L405.523 169.235L394.353 174.081Z" fill="#47E6B1"/>
                                    <path opacity="0.6" d="M377.983 195.886L403.126 253.85L406.747 252.279L381.604 194.315L377.983 195.886Z" fill="#47E6B1"/>
                                    <path opacity="0.6" d="M376.945 214.987L395.278 257.251L397.694 256.204L379.36 213.939L376.945 214.987Z" fill="#47E6B1"/>
                                </g>
                                <path d="M161.899 0.57492L35.7363 45.3257L63.2383 122.86L189.401 78.1091L161.899 0.57492Z" fill="url(#paint3_linear)"/>
                                <path d="M159.855 3.47553L37.9688 46.7095L63.6356 119.07L185.522 75.8361L159.855 3.47553Z" fill="white"/>
                                <g opacity="0.6">
                                    <path opacity="0.6" d="M49.2681 61.8257L64.7739 56.3257L60.7036 44.8505L45.1977 50.3505L49.2681 61.8257Z" fill="#6E1866"/>
                                    <path opacity="0.6" d="M69.9053 79.6486L129.452 58.5269L128.133 54.8071L68.5859 75.9288L69.9053 79.6486Z" fill="#6E1866"/>
                                    <path opacity="0.6" d="M88.8922 81.9871L132.312 66.5859L131.431 64.1044L88.012 79.5056L88.8922 81.9871Z" fill="#6E1866"/>
                                </g>
                                <path d="M231.755 4.89697L75.9009 151.618V367.669H387.603V151.618L231.755 4.89697Z" fill="url(#paint4_linear)"/>
                                <path d="M386.023 362.929H77.481V151.266L231.755 7.52979L386.023 151.266V362.929Z" fill="white"/>
                                <path d="M339.16 37.0142H124.343V289.742H339.16V37.0142Z" fill="url(#paint5_linear)"/>
                                <path d="M336.447 39.1206H127.056V289.742H336.447V39.1206Z" fill="white"/>
                                <path d="M77.481 151.266L231.755 257.098L77.481 362.929V151.266Z" fill="#F5F5F5"/>
                                <path d="M386.023 151.266L231.755 257.098L386.023 362.929V151.266Z" fill="#F5F5F5"/>
                                <path d="M77.481 362.924L225.696 247.608C227.421 246.25 229.552 245.512 231.747 245.512C233.942 245.512 236.073 246.25 237.797 247.608L386.023 362.924H77.481Z" fill="url(#paint6_linear)"/>
                                <path d="M77.481 362.924L225.696 252.646C227.445 251.345 229.567 250.642 231.747 250.642C233.927 250.642 236.048 251.345 237.797 252.646L386.023 362.924H77.481Z" fill="white"/>
                                <path d="M202.531 87.5576H158.828V94.9301H202.531V87.5576Z" fill="#47E6B1"/>
                                <path d="M304.676 107.042H158.828V114.414H304.676V107.042Z" fill="#F5F5F5"/>
                                <path d="M304.676 119.675H158.828V127.048H304.676V119.675Z" fill="#F5F5F5"/>
                                <path d="M304.676 132.314H158.828V139.686H304.676V132.314Z" fill="#F5F5F5"/>
                                <path d="M304.676 144.947H158.828V152.319H304.676V144.947Z" fill="#F5F5F5"/>
                                <path d="M225.17 157.585H158.828V164.958H225.17V157.585Z" fill="#F5F5F5"/>
                                <path d="M304.676 157.585H238.335V164.958H304.676V157.585Z" fill="#6E1866"/>
                                <defs>
                                    <linearGradient id="paint0_linear" x1="87.6452" y1="284.801" x2="64.1424" y2="205.962" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#808080" stop-opacity="0.25"/>
                                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear" x1="9988.91" y1="23433.3" x2="13946.4" y2="3111.61" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#808080" stop-opacity="0.25"/>
                                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear" x1="-47820.7" y1="42611.3" x2="-28827.3" y2="34372.4" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#808080" stop-opacity="0.25"/>
                                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                                    </linearGradient>
                                    <linearGradient id="paint3_linear" x1="-1333.52" y1="20313.7" x2="-5586.98" y2="8322.22" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#808080" stop-opacity="0.25"/>
                                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                                    </linearGradient>
                                    <linearGradient id="paint4_linear" x1="135872" y1="250757" x2="135872" y2="3346.02" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#808080" stop-opacity="0.25"/>
                                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                                    </linearGradient>
                                    <linearGradient id="paint5_linear" x1="93711.7" y1="137700" x2="93711.7" y2="17624.3" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#808080" stop-opacity="0.25"/>
                                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                                    </linearGradient>
                                    <linearGradient id="paint6_linear" x1="185295" y1="92612" x2="185295" y2="66695.8" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#808080" stop-opacity="0.25"/>
                                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <?$APPLICATION->IncludeComponent(
	"slam:easyform", 
	"uniform", 
	array(
		"COMPONENT_TEMPLATE" => "uniform",
		"FORM_ID" => "FORM10",
		"FORM_NAME" => "Заполните короткий бриф",
		"WIDTH_FORM" => "main-project-content-form",
		"DISPLAY_FIELDS" => array(
			0 => "TITLE",
			1 => "EMAIL",
			2 => "PHONE",
			3 => "MESSAGE",
			4 => "COMPANY",
			5 => "",
		),
		"REQUIRED_FIELDS" => array(
			0 => "TITLE",
			1 => "EMAIL",
			2 => "PHONE",
			3 => "MESSAGE",
			4 => "COMPANY",
		),
		"FIELDS_ORDER" => "TITLE,EMAIL,PHONE,COMPANY,MESSAGE",
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
		"CLEAR_FORM" => "N"
	),
	false
);?>
                    </div>
                </div>
            </div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>