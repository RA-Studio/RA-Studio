<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="ie=edge" http-equiv="x-ua-compatible"><?
    $APPLICATION->ShowMeta("robots");
    $APPLICATION->ShowCSS();
    $APPLICATION->ShowHeadStrings();
    $APPLICATION->ShowHeadScripts();
    $APPLICATION->ShowMeta("description");
    $APPLICATION->ShowMeta("title");
    //$APPLICATION->ShowHead();
    ?>
    <link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <!--CSS-->
    <?
    //$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/scripts/slick/slick.css');
    //$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/scripts/slick/slick-theme.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/scripts/fancybox/jquery.fancybox.min.css');
    //$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/scripts/sumoselect/sumoselect.min.css');
    if(CSite::InDir('/index.php'))$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/scripts/aos-master/dist/aos.css');
    if(CSite::InDir('/projects/') && !CSite::InDir('/projects/index.php'))$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/scripts/tooltipster/tooltipster.bundle.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/styles/app.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/jivosite/jivosite.css');
    ?>

    <!--JS-->
    <?
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/jquery.min.js");
    //$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/slick/slick.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/jquery.inputmask.bundle.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/fancybox/jquery.fancybox.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/lottie/lottie.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/jquery.cookie.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/jivosite/jivosite-notmob.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/main.js");
    if(CSite::InDir('/contacts/')){
        $APPLICATION->AddHeadString('<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=0b3b5c7c-2a61-4ac5-a361-e8c4aaaf0dbf" type="text/javascript"></script>');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/script-map.js");
    }
    if(CSite::InDir('/index.php')){
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/aos-master/dist/aos.js");
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/scripts-index.js");
    }
    if(CSite::InDir('/projects/index.php')){
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/TweenMax.min.js");
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/scripts-cases.js");
    }
    if(CSite::InDir('/projects/') && !CSite::InDir('/cases/index.php')){
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/tooltipster/tooltipster.bundle.min.js");
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/script-progressbar.js");
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/script-tooltips-init.js");
    }
    global $USER;
    if(!$USER->IsAdmin()){
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/notAdmin.js");
    }
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/ajaxCallOrder.js");
    
    if(!$USER->IsAdmin()){
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH."/include/counters.php",
                "EDIT_TEMPLATE" => ""
            ),
            false
        );
    }
?></head>
<body>
<div id="panel"><?
    $APPLICATION->ShowPanel();
?></div>
<div class="wrapper">
    <header class="header" <?=(Csite::InDir('/index.php')) ? 'data-aos="fade-down" data-aos-delay="1000"' : '' ?> >
    	<?if(Csite::InDir('/index.php')){
            ?><span class="header-logo"><?
            $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH."/include/logo.php",
                array(),
                array(
                    "NAME"=>"Logo",
                    "MODE" => "html",
                )
            );?></span><?
        }else{
            ?><a class="header-logo" href="/"><?
            $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH."/include/logo.php",
                array(),
                array(
                    "NAME"=>"Logo",
                    "MODE" => "html",
                )
            );?></a><?
        }?><?$APPLICATION->IncludeComponent(
        	"bitrix:menu", 
        	"topDesctop", 
        	array(
        		"ALLOW_MULTI_SELECT" => "N",
        		"CHILD_MENU_TYPE" => "left",
        		"COMPONENT_TEMPLATE" => "topDesctop",
        		"COMPOSITE_FRAME_MODE" => "A",
        		"COMPOSITE_FRAME_TYPE" => "AUTO",
        		"DELAY" => "N",
        		"MAX_LEVEL" => "1",
        		"MENU_CACHE_GET_VARS" => array(
        		),
        		"MENU_CACHE_TIME" => "3600",
        		"MENU_CACHE_TYPE" => "N",
        		"MENU_CACHE_USE_GROUPS" => "Y",
        		"ROOT_MENU_TYPE" => "top",
        		"USE_EXT" => "Y"
        	),
        	false
        );?>
        <div class="header-menu-mobile">
            <div class="header-menu-mobile-wrap">
                <div class="header-menu-mobile-col">
                    <a data-nolink href="mailto:<?
                        $APPLICATION->IncludeFile(
                            SITE_TEMPLATE_PATH."/include/mail.php",
                            array(),
                            array(
                                "NAME"=>"E-mail",
                                "MODE" => "html",
                                "SHOW_BORDER" => false
                            )
                        );?>" class="header-menu-mobile-col__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                            <path d="M0.9 0H17.1C17.3387 0 17.5676 0.0936505 17.7364 0.260349C17.9052 0.427048 18 0.653141 18 0.888889V15.1111C18 15.3469 17.9052 15.573 17.7364 15.7397C17.5676 15.9064 17.3387 16 17.1 16H0.9C0.661305 16 0.432387 15.9064 0.263604 15.7397C0.0948211 15.573 0 15.3469 0 15.1111V0.888889C0 0.653141 0.0948211 0.427048 0.263604 0.260349C0.432387 0.0936505 0.661305 0 0.9 0ZM16.2 3.76711L9.0648 10.0782L1.8 3.74756V14.2222H16.2V3.76711ZM2.2599 1.77778L9.0549 7.69956L15.7518 1.77778H2.2599Z" fill="#6E1866"/>
                        </svg>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/include/mail.php",
                                "EDIT_TEMPLATE" => ""
                            ),
                            false
                        );?>
                    </a>
                    <a data-nolink href="tel:<?
                        $APPLICATION->IncludeFile(
                            SITE_TEMPLATE_PATH."/include/phone.php",
                            array(),
                            array(
                                "MODE" => "html",
                                "SHOW_BORDER" => false
                            )
                        );
                        ?>" class="header-menu-mobile-col__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M6.366 7.682C7.30434 9.33048 8.66952 10.6957 10.318 11.634L11.202 10.396C11.3442 10.1969 11.5543 10.0569 11.7928 10.0023C12.0313 9.94779 12.2814 9.98254 12.496 10.1C13.9103 10.8729 15.4722 11.3378 17.079 11.464C17.3298 11.4839 17.5638 11.5975 17.7345 11.7823C17.9052 11.9671 18 12.2094 18 12.461V16.923C18.0001 17.1706 17.9083 17.4094 17.7424 17.5932C17.5765 17.777 17.3483 17.8927 17.102 17.918C16.572 17.973 16.038 18 15.5 18C6.94 18 0 11.06 0 2.5C0 1.962 0.027 1.428 0.082 0.898C0.107255 0.651697 0.222984 0.423521 0.40679 0.257634C0.590595 0.0917472 0.829406 -5.33578e-05 1.077 2.32673e-08H5.539C5.79056 -3.15185e-05 6.0329 0.0947515 6.21768 0.265451C6.40247 0.43615 6.51613 0.670224 6.536 0.921C6.66222 2.52779 7.12708 4.08968 7.9 5.504C8.01746 5.71856 8.05221 5.96874 7.99767 6.2072C7.94312 6.44565 7.80306 6.65584 7.604 6.798L6.366 7.682ZM3.844 7.025L5.744 5.668C5.20478 4.50409 4.83535 3.26884 4.647 2H2.01C2.004 2.166 2.001 2.333 2.001 2.5C2 9.956 8.044 16 15.5 16C15.667 16 15.834 15.997 16 15.99V13.353C14.7312 13.1646 13.4959 12.7952 12.332 12.256L10.975 14.156C10.4287 13.9437 9.89801 13.6931 9.387 13.406L9.329 13.373C7.36758 12.2567 5.74328 10.6324 4.627 8.671L4.594 8.613C4.30691 8.10199 4.05628 7.57134 3.844 7.025Z" fill="#6E1866"/>
                        </svg>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/include/phone.php",
                                "EDIT_TEMPLATE" => ""
                            ),
                            false
                        );?>
                    </a>
                    <div class="header-menu-mobile-col__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="22" viewBox="0 0 18 22" fill="none">
                            <path d="M9 18.8999L13.95 13.9499C14.9289 12.9709 15.5955 11.7236 15.8656 10.3658C16.1356 9.00795 15.9969 7.60052 15.4671 6.32148C14.9373 5.04244 14.04 3.94923 12.8889 3.18009C11.7378 2.41095 10.3844 2.00043 9 2.00043C7.61557 2.00043 6.26222 2.41095 5.11109 3.18009C3.95996 3.94923 3.06275 5.04244 2.53292 6.32148C2.00308 7.60052 1.86442 9.00795 2.13445 10.3658C2.40449 11.7236 3.07111 12.9709 4.05 13.9499L9 18.8999ZM9 21.7279L2.636 15.3639C1.37734 14.1052 0.520187 12.5016 0.172928 10.7558C-0.17433 9.00995 0.00390685 7.20035 0.685099 5.55582C1.36629 3.91129 2.51984 2.50569 3.99988 1.51677C5.47992 0.527838 7.21998 0 9 0C10.78 0 12.5201 0.527838 14.0001 1.51677C15.4802 2.50569 16.6337 3.91129 17.3149 5.55582C17.9961 7.20035 18.1743 9.00995 17.8271 10.7558C17.4798 12.5016 16.6227 14.1052 15.364 15.3639L9 21.7279ZM9 10.9999C9.53044 10.9999 10.0391 10.7892 10.4142 10.4141C10.7893 10.0391 11 9.53035 11 8.99992C11 8.46949 10.7893 7.96078 10.4142 7.58571C10.0391 7.21064 9.53044 6.99992 9 6.99992C8.46957 6.99992 7.96086 7.21064 7.58579 7.58571C7.21072 7.96078 7 8.46949 7 8.99992C7 9.53035 7.21072 10.0391 7.58579 10.4141C7.96086 10.7892 8.46957 10.9999 9 10.9999ZM9 12.9999C7.93914 12.9999 6.92172 12.5785 6.17158 11.8283C5.42143 11.0782 5 10.0608 5 8.99992C5 7.93906 5.42143 6.92164 6.17158 6.17149C6.92172 5.42135 7.93914 4.99992 9 4.99992C10.0609 4.99992 11.0783 5.42135 11.8284 6.17149C12.5786 6.92164 13 7.93906 13 8.99992C13 10.0608 12.5786 11.0782 11.8284 11.8283C11.0783 12.5785 10.0609 12.9999 9 12.9999Z" fill="#6E1866"/>
                        </svg>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/include/address.php",
                                "EDIT_TEMPLATE" => ""
                            ),
                            false
                        );?>
                    </div>
                </div>
                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"topMobile", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "topMobile",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	),
	false
);?>
            </div>
        </div>
        <div class="header-info">
            <a data-nolink class="header-info__phone" href="tel:<?
            $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH."/include/phone.php",
                array(),
                array(
                    "MODE" => "html",
                    "SHOW_BORDER" => false
                )
            );
            ?>">
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/include/phone.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );
                ?>
            </a>
            <a data-nolink class="header-info__btn fancybox-btn-init" title="Пишите, мы ответим" data-fancybox="" data-options="{&quot;src&quot;: &quot;#SendForm&quot;, &quot;touch&quot;: false}" href="javascript:;">Связаться</a>
            <!--div class="header-info-lang">
                <div class="header-info-lang__cur">
                    Ru
                </div>
                <div class="header-info-lang-change">
                    <a href="#" class="header-info-lang-change-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="15" viewBox="0 0 23 15" fill="none">
                            <path d="M22.4996 0.000183105H0V15.0001H22.4996V0.000183105Z" fill="#F0F0F0"/>
                            <path d="M12.656 0H9.84359V6.09362H0V8.90608H9.84359V14.9997H12.656V8.90608H22.4996V6.09362H12.656V0Z" fill="#D80027"/>
                            <path d="M17.3047 10.1085L22.4996 12.9946V10.1085H17.3047Z" fill="#0052B4"/>
                            <path d="M13.6953 10.1085L22.4995 14.9997V13.6166L16.185 10.1085H13.6953Z" fill="#0052B4"/>
                            <path d="M20.1544 14.9997L13.6953 11.411V14.9997H20.1544Z" fill="#0052B4"/>
                            <path d="M13.6953 10.1085L22.4995 14.9997V13.6166L16.185 10.1085H13.6953Z" fill="#F0F0F0"/>
                            <path d="M13.6953 10.1085L22.4995 14.9997V13.6166L16.185 10.1085H13.6953Z" fill="#D80027"/>
                            <path d="M3.97 10.1084L0 12.314V10.1084H3.97Z" fill="#0052B4"/>
                            <path d="M8.80512 10.7304V14.9997H1.12109L8.80512 10.7304Z" fill="#0052B4"/>
                            <path d="M6.31453 10.1085L0 13.6166V14.9997L8.80422 10.1085H6.31453Z" fill="#D80027"/>
                            <path d="M5.19491 4.8912L0 2.0051V4.8912H5.19491Z" fill="#0052B4"/>
                            <path d="M8.80422 4.892L0 0.000793457V1.38391L6.31453 4.892H8.80422Z" fill="#0052B4"/>
                            <path d="M2.3457 0L8.80477 3.58869V0H2.3457Z" fill="#0052B4"/>
                            <path d="M8.80422 4.89121L0 0V1.38311L6.31453 4.89121H8.80422Z" fill="#F0F0F0"/>
                            <path d="M8.80422 4.89121L0 0V1.38311L6.31453 4.89121H8.80422Z" fill="#D80027"/>
                            <path d="M18.5312 4.89131L22.5013 2.68573V4.89131H18.5312Z" fill="#0052B4"/>
                            <path d="M13.6953 4.26932V6.10352e-05H21.3793L13.6953 4.26932Z" fill="#0052B4"/>
                            <path d="M16.185 4.89121L22.4995 1.38311V0L13.6953 4.89121H16.185Z" fill="#D80027"/>
                        </svg>
                        Eng
                    </a>
                    <a href="#" class="header-info-lang-change-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="15" viewBox="0 0 23 15" fill="none">
                            <path d="M22.4998 0H0V15H22.4998V0Z" fill="#D80027"/>
                            <path d="M22.4998 0H0V4.99982H22.4998V0Z" fill="black"/>
                            <path d="M22.4998 9.99969H0V14.9995H22.4998V9.99969Z" fill="#FFDA44"/>
                        </svg>
                        De
                    </a>
                </div>
            </div-->

            <div class="header-burger">
                <div class="header-burger-block"></div>
            </div>
        </div>
    </header><?
    global $USER; if($USER->IsAdmin()){
        $APPLICATION->IncludeComponent(
        	"bitrix:menu", 
        	"horizontal_multilevel", 
        	array(
        		"ALLOW_MULTI_SELECT" => "Y",
        		"CHILD_MENU_TYPE" => "left",
        		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
        		"DELAY" => "N",
        		"MAX_LEVEL" => "3",
        		"MENU_CACHE_GET_VARS" => array(
        		),
        		"MENU_CACHE_TIME" => "3600",
        		"MENU_CACHE_TYPE" => "N",
        		"MENU_CACHE_USE_GROUPS" => "Y",
        		"ROOT_MENU_TYPE" => "admin",
        		"USE_EXT" => "Y",
        		"COMPOSITE_FRAME_MODE" => "A",
        		"COMPOSITE_FRAME_TYPE" => "AUTO"
        	),
        	false
        );$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "",
            Array(
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
            )
        );
    }
    ?><div class="content">
	
						