<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="JoJo">
    <meta name="publisher" content="JoJO">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://www.codeabschlussguide.at<?php echo $canonical; ?>">
    <meta property="og:url" content="https://www.codeabschlussguide.at<?php echo $canonical; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta property="og:site_name" content="CodeAbschlussGuide" />
    <meta property="og:image" content="/img/codeAschlussguide300.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "headline": "<?php echo addslashes($title); ?>",
          "image": "/img/codeAschlussguide300.png",
          "author": "<?php echo addslashes($authorName); ?>",
          "datePublished": "<?php echo $datePublished; ?>"
        }
    </script>
    <style>
        /* hahmlet-regular - latin */
        @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Hahmlet';
            font-style: normal;
            font-weight: 400;
            src: url('/fonts/hahmlet-v13-latin-regular.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
        }
        /* hahmlet-500 - latin */
        @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Hahmlet';
            font-style: normal;
            font-weight: 500;
            src: url('/fonts/hahmlet-v13-latin-500.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
        }
        /* hahmlet-600 - latin */
        @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Hahmlet';
            font-style: normal;
            font-weight: 600;
            src: url('/fonts/hahmlet-v13-latin-600.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
        }
        /* hahmlet-700 - latin */
        @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Hahmlet';
            font-style: normal;
            font-weight: 700;
            src: url('/fonts/hahmlet-v13-latin-700.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
        }
        /* hahmlet-800 - latin */
        @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Hahmlet';
            font-style: normal;
            font-weight: 800;
            src: url('/fonts/hahmlet-v13-latin-800.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
        }
        /* hahmlet-900 - latin */
        @font-face {
            font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
            font-family: 'Hahmlet';
            font-style: normal;
            font-weight: 900;
            src: url('/fonts/hahmlet-v13-latin-900.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
        }
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Hahmlet;

        }
        html{
            scroll-behavior: smooth;
        }
        :root {
            --primaryColor: #020b1a;
            --secondaryColor: #051a2b;
            --secondaryColorLight: #17233a;
            --secondaryColorDark: #020b1a;
            --background: #f3f1f1;
            --white: #fafafa;
            --primaryColorlight: #e14c0f;
            --primaryColorDarklight: #f0a431;
        }
        body{
            background-color: var(--background);

        }
        h1,h2{
            font-size: 24px;
            margin: 10px 0 20px 0;
        }
        h1{
            margin-left: 20px;
        }
        h3,h4{
            margin: 30px 0 10px 0;
        }
        p,a{
            font-size: 16px;
            margin: 20px 0 20px 0;
            line-height: 150%;
        }
        .responsive{
            position: relative;
            margin: 0 auto;
            max-width: 1200px;
            height: 100%;
            padding:5rem 10px 5rem 0;
        }
        img{
            display: flex;
            width: 100%;
        }
        a{
            text-decoration: none;
        }
        .event{
            color: var(--primaryColor);
        }
        .event:hover{
            color: var(--primaryColorlight);
        }
        .container{
            margin: 40px 30px 0px 20px;
        }
        .container ul li{
            margin: 10px 0;
        }
        .left{
            margin-left: 3%;
        }
        picture, img{
            width: 100%;
            max-width: 1000px;
        }
        .quelle{
            display: flex;
            flex-wrap: wrap;
        }
        .center{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-top:30px;
        }
        .bildQuelle {
            display: block;
            margin-top: 8px;
            font-size: 12px;
        }
        .bildQuelle a {
            font-size: 8px;
            color: var(--primaryColor);
        }
        a.btn{
            margin: 10px;
            padding: 8px 24px;
            outline: none;
            border: none;
            font-size: 1rem;
            color: var(--white);
            background-color: var(--secondaryColor);
            border-radius: 10px;
            cursor: pointer;
        }
        .btn:hover{
            background-color: var(--primaryColorlight);
            transition: .3s;
        }
        @media screen and (min-width: 768px) {
            .responsive {
                margin: 0 auto;
                padding:15px 10px;
            }
            h1,h2{
                font-size: 30px;
            }
            h1{
                margin: 60px 0 20px 20px;
            }
            p,a{
                font-size: 18px;
            }
            .container{
                margin: 100px 30px 0px 20px;
            }
        }
        @media screen and (min-width: 1024px) {
            .responsive {
                width: 1024px;
                margin: 0 auto;
            }
            h1,h2{
                font-size: 40px;
            }
            h1{
                margin: 100px 0 20px 20px;
            }
            p{
                font-size: 20px;
            }
        }
        @media screen and (min-width: 1280px) {
            .responsive {
                max-width: none;
                width: 1280px;
                margin: 0 auto;
            }
            h1,h2{
                font-size: 50px;
            }
        }
        @media screen and (min-width: 1600px) {
            .responsive {
                width: 1600px;
                margin: 0 auto;
            }
        }
        @media screen and (min-width: 1920px) {
            .responsive {
                width: 1920px;
                margin: 0 auto;
            }
        }
        /*-----------<<< Navbar >>>-------------*/
        .header {
            display: block;
            width: 100%;
            position: sticky;
            top: 0;
            z-index: 99;
            padding: 15px;
            background-color: var(--secondaryColor);
        }
        .header .itemLeft {
            flex: 0 0 27%;
        }
        header .logo img{
            width: 50px;
            height: auto;
        }
        .header .logo a {
            font-size: 30px;
            color: var(--white);
            font-weight: 700;
        }
        .header .itemCenter {
            flex: 0 0 69%;
        }
        .header .itemRight {
            flex: 0 0 7%;
            display: flex;
            justify-content: flex-end;
        }
        .header .itemRight a {
            text-decoration: none;
            font-size: 18px;
            color: var(--white);
            display: inline-block;
            margin-left: 10px;
            transition: color 0.3s ease;
        }

        .header .menu > ul > li {
            display: inline-block;
            line-height: 50px;
            margin-left: 25px;
        }

        .header .menu > ul > li > a {
            font-size: 20px;
            font-weight: 500;
            color: var(--white);
            position: relative;
            text-transform: capitalize;
            transition: color 0.3s ease;
        }
        .header .menu > ul > li .subMenu {
            position: absolute;
            z-index: 500;
            background-color: var(--secondaryColor);
            box-shadow: -2px 2px 70px -25px rgba(0, 0, 0, 0.3);
            padding: 20px 30px;
            transition: all 0.5s ease;
            margin-top: 25px;
            opacity: 0;
            visibility: hidden;
        }
        @media (min-width: 992px) {
            .header .menu > ul > li.menuItemHasChildren:hover .subMenu {
                margin-top: 0;
                visibility: visible;
                opacity: 1;
            }
        }
        .header .menu > ul > li .subMenu > ul > li {
            line-height: 1;
        }
        .header .menu > ul > li .subMenu > ul > li > a {
            display: inline-block;
            padding: 10px 0;
            font-size: 18px;
            color: var(--white);
            transition: color 0.3s ease;
            text-transform: capitalize;
        }

        .header .menu > ul > li .singleColumnMenu {
            min-width: 280px;
            max-width: 350px;
        }

        .header .menu > ul > li .subMenu.megaMenu > .listItem > ul > li {
            line-height: 1;
            display: block;
        }

        .header .menu > ul > li .subMenu.megaMenu > .listItem > ul > li > a {
            padding: 10px 0;
            display: inline-block;
            font-size: 18px;
            color: var(--white);
            transition: color 0.3s ease;
        }

        .header .menu > ul > li .subMenu.megaMenu {
            left: 50%;
            transform: translateX(-50%);
        }

        .header .menu > ul > li .subMenu.megaMenuColumn4 {
            max-width: 1100px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            padding: 20px 15px;
        }

        .header .menu > ul > li .subMenu.megaMenuColumn4 > .listItem {
            flex: 0 0 25%;
            padding: 0 15px;
        }

        .header .menu > ul > li .subMenu.megaMenuColumn4 > .listItem .title {
            font-size: 16px;
            color: var(--white);
            font-weight: 500;
            line-height: 1;
            padding: 10px 0;
        }

        .header .menu > ul > li .subMenu.megaMenu > .listItem > ul > li > a:hover,
        .header .menu > ul > li .subMenu > ul > li > a:hover,
        .header .itemRight a:hover,
        .header .menu > ul > li:hover > a {
            color: var(--primaryColorlight);
        }

        .mobileMenuHead,
        .mobileMenuTrigger {
            display: none;
        }

        /* responsive */
        @media (max-width: 991px) {
            .header .itemCenter {
                order: 3;
                flex: 0 0 100%;
            }
            header .logo img {
                width: 50px;
            }
            .header .itemLeft,
            .header .itemRight {
                flex: 0 0 auto;
            }
            .vCenter {
                justify-content: space-between;
            }
            .header .mobileMenuTrigger {
                display: flex;
                height: 30px;
                width: 30px;
                margin-left: 15px;
                cursor: pointer;
                align-items: center;
                justify-content: center;
            }
            .header .mobileMenuTrigger span {
                display: block;
                height: 2px;
                background-color: var(--white);
                width: 24px;
                position: relative;
            }
            .header .mobileMenuTrigger span:before,
            .header .mobileMenuTrigger span:after {
                content: '';
                position: absolute;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: var(--white);
            }
            .header .mobileMenuTrigger span:before {
                top: -6px;
            }
            .header .mobileMenuTrigger span:after {
                top: 6px;
            }
            .header .itemRight {
                align-items: center;
            }
            .header .menu {
                position: fixed;
                width: 320px;
                background-color: var(--secondaryColor);
                left: 0;
                top: 0;
                height: 100%;
                overflow: hidden;
                transform: translate(-100%);
                transition: all 0.5s ease;
                z-index: 1099;
            }
            .header .menu.active {
                transform: translate(0%);
            }
            .header .menu > ul > li {
                line-height: 1;
                margin: 0;
                display: block;
            }
            .header .menu > ul > li > a {
                line-height: 50px;
                height: 50px;
                padding: 0 50px 0 15px;
                display: block;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            }
            .header .menu .mobileMenuHead {
                display: flex;
                height: 50px;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                justify-content: space-between;
                align-items: center;
                position: relative;
                z-index: 501;
                position: sticky;
                background-color: var(--secondaryColor);
                top: 0;
            }
            .header .menu .mobileMenuHead .goBack {
                height: 50px;
                width: 50px;
                border-right: 1px solid rgba(0, 0, 0, 0.1);
                cursor: pointer;
                line-height: 50px;
                text-align: center;
                color: var(--white);
                font-size: 16px;
                display: none;
            }
            .header .menu .mobileMenuHead.active .goBack {
                display: block;
            }
            .header .menu .mobileMenuHead .currentMenuTitle {
                font-size: 15px;
                font-weight: 500;
                color: var(--white);
            }
            .header .menu .mobileMenuHead .mobileMenuClose {
                height: 50px;
                width: 50px;
                border-left: 1px solid rgba(0, 0, 0, 0.1);
                cursor: pointer;
                line-height: 50px;
                text-align: center;
                color: var(--white);
                font-size: 25px;
            }
            .header .menu .menuMain {
                height: 100%;
                overflow-x: hidden;
                overflow-y: auto;
            }
            .header .menu > ul > li .subMenu.megaMenu,
            .header .menu > ul > li .subMenu {
                visibility: visible;
                opacity: 1;
                position: absolute;
                box-shadow: none;
                margin: 0;
                padding: 15px;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                padding-top: 65px;
                max-width: none;
                min-width: auto;
                display: none;
                transform: translateX(0%);
                overflow-y: auto;
            }
            .header .menu > ul > li .subMenu.active {
                display: block;
            }
            @keyframes slideLeft {
                0% {
                    opacity: 0;
                    transform: translateX(100%);
                }
                100% {
                    opacity: 1;
                    transform: translateX(0%);
                }
            }
            @keyframes slideRight {
                0% {
                    opacity: 1;
                    transform: translateX(0%);
                }
                100% {
                    opacity: 0;
                    transform: translateX(100%);
                }
            }
            .menuOverlay {
                position: fixed;
                background-color: rgba(0, 0, 0, 0.5);
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                z-index: 1098;
                visibility: hidden;
                opacity: 0;
                transition: all 0.5s ease;
            }
            .menuOverlay.active {
                visibility: visible;
                opacity: 1;
            }
        }
        /*-----------<<< Footer >>>-------------*/
        footer{
            margin-top: 80px;
            align-items: center;
            background: var(--secondaryColorLight);
        }
        footer a.datenschutz,footer a.impressum{
            margin:  10px 15px 10px 15px;
            text-decoration: none ;
            font-size: 18px;
            color: var(--white);
        }
        footer a:hover{
            color: var(--primaryColorlight);
            transition: .3s;
        }
        .footerTop {
            padding: 20px 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .footerBottom{
            display: flex;
            justify-content: center;
            text-align: center;
            padding: 1px 0 8px 0;
            font-size: 13px;
        }
        .footerBottom a{
            font-size: 12px;

        }
        /*-----------<<< Tabelle >>>-------------*/
        .tableContainer {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            margin: 0 auto;
            max-width: 100%;
        }
        table {
            width: 100%;
            max-width: 1000px;
            border-collapse: collapse;
            margin-bottom: 20px;
            text-align: center;
            font-size: 16px;
        }
        .tableHead {
            background-color: #f2f2f2;
            color: #333;
        }
        .tableHead td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 10px;
        }
        .tableRow:nth-child(even) {
            background-color: var(--white);
        }
        .tableRow:nth-child(odd) {
            background-color: #c7c7c7;
        }
        @media screen and (min-width: 768px) {
            table {
                font-size: 18px;
            }
        }
        @media screen and (min-width: 1024px) {
            table {
                font-size: 20px;
            }
        }
        /*-----------<<< Floating Nav >>>-------------*/
        .floatingNav {
            position: fixed;
            right: 30px;
            top: 12%;
            transform: translatex(50%);
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 10;
        }
        .floatingDot {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: linear-gradient(to right, var(--white), var(--primaryColor));
            position: relative;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .active {
            background: var(--primaryColorlight);
        }
        .floatingText {
            z-index: 1000;
            position: absolute;
            white-space: nowrap;
            right: 100%;
            margin-left: 10px;
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.5s linear;
        }
        .floatingDot:hover .floatingText {
            visibility: visible;
            opacity: 1;
        }
        @media screen and (min-width: 768px) {
            .floatingNav {
                top: 15%;
            }
        }
        /*-----------<<< Service Card >>>-------------*/
        .serviceGrid{
            margin-top: 60px;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }
        .serviceCard{
            position: relative;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            text-align: center;
            background-color: var(--secondaryColorLight);
            border-bottom:2px solid transparent;
            border-radius: 5px;
            transition: 0.3s;
        }
        .serviceCard:hover{
            border-bottom:2px solid var(--primaryColorlight);
            transition: .3s;
        }
        .serviceCard span{
            position: absolute;
            top: 0;
            left: 50%;
            font-size: 30px;
            transform: translate(-50%, -50%);
            padding: 4px 10px;
            background-color: var(--white);
            color: var(--secondaryColorLight);
            border-radius: 20%;
            transition: 0.3s;
        }
        .serviceCard:hover span{
            color: var(--primaryColorlight);
            background-image: var(--white);
            transition: .3s;
        }
        .serviceCard h3{
            font-size: 24px;
            margin-bottom: 1px;
            font-weight:600;
            color: var(--white);
        }
        .serviceCard:hover h3 {
            color: var(--primaryColorlight);
            transition: .3s;
        }
        .serviceCard p{
            margin-bottom: 1px;
            font-size: 1rem;
            color: var(--white);
        }
        /*-----------<<< ListLegend >>>-------------*/
        .listLegend{
            max-width: 900px;
            margin: 30px 30px;
        }
        .listLegend ul{
            padding: 0;
            margin-bottom: 20px;
            list-style: none;
        }
        .listLegend a{
            position: relative;
            display: block;
            padding: 10px;
            padding-left:20px ;
            margin: 10px 0;
            background: var(--secondaryColorLight);
            color: var(--white);
            text-decoration: none;
            box-shadow:inset 1em 0 var(--primaryColorlight);
            -webkit-transition: box-shadow 3s;
            transition: box-shadow 3s;
        }
        .listLegend a:hover{
            box-shadow:inset 70em 0 var(--primaryColorlight);
        }
        /*-----------<<< Codeblock >>>-------------*/
        .codeContainer {
            position: relative;
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            padding: 10px;
        }
        .codeBlock {
            margin: 0;
            overflow-x: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .copyBtn {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            cursor: pointer;
        }
        .language-js { color: #d64; }
        .language-html { color: #07a; }
        .language-css { color: #e44; }
        .language-php { color: #899; }

        /*-----------<<< Quiz >>>-------------*/
        .quizContainer {
            width: 100%;
            max-width: 1000px;
            background: #001f3f;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            color: var(--white);
            margin: 50px auto;
            border: 3px solid var(--primaryColorlight);;
        }
        .quizOptions label {
            background: #002752;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s, border-color 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            border: 2px solid transparent;
            min-height: 60px;
            text-align: center;
            position: relative;
        }
        .quizOptions input:checked + label {
            border-color: var(--primaryColorlight);;
        }
        .quizOptions label:hover {
            background: #003a75;
        }

        .quizOptions label span {
            position: absolute;
            left: 10px;
            font-weight: bold;
            color: var(--primaryColorlight);;
        }
        .quizOptions label::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 8px;
            background-color: var(--primaryColorlight);;
            border-radius: 10px 0 0 10px;
        }
        .quizTitle {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .quizQuestion {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            background: #0056b3;
            padding: 15px;
            border-radius: 10px;
            border: 2px solid var(--primaryColorlight);;
        }
        #questionCount{
            margin: 0 auto;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s, border-color 0.3s, filter 0.3s;
            display: flex;
            align-items: center;
            font-size: 20px;
            border: 2px solid transparent;
            min-height: 60px;
            text-align: center;
            position: relative;
            margin-bottom: 10px;
        }

        #result {
            text-align: center;
        }
        #result a{
            color: var(--primaryColorlight);
        }
        #progressBar {
            width: 100%;
            background-color: var(--white);
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        #progress {
            height: 20px;
            background-color: #0056b3;
            width: 0;
            text-align: center;
            color: var(--white);
            line-height: 20px;
            border-radius: 5px 0 0 5px;
        }
        #chapterSelection label {
            background: #002752;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s, border-color 0.3s, filter 0.3s;
            display: flex;
            align-items: center;
            font-size: 20px;
            border: 2px solid transparent;
            min-height: 60px;
            text-align: center;
            position: relative;
            margin-bottom: 10px;
        }
        #chapterSelection label input {
            position: relative;
            margin-right: 10px;
            width: 20px;
            height: 20px;
        }
        #chapterSelection label input:checked + span::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 12px;
            height: 12px;
            background-color: var(--primaryColorlight);;
            border-radius: 3px;
        }
        #chapterSelection label:hover {
            background: #003a75;
        }
        #chapterSelection label:hover,
        #chapterSelection label input:checked + span {
            filter: brightness(90%);
        }
        #chapterSelection label span {
            font-weight: bold;
            color: var(--white);
        }
        #chapterSelection label::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 8px;
            background-color: var(--primaryColorlight);;
            border-radius: 10px 0 0 10px;
        }
        .quizOptionLabel {
            background: #002752;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s, border-color 0.3s, filter 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            border: 2px solid transparent;
            min-height: 60px;
            text-align: center;
            position: relative;
            margin-bottom: 10px;
        }
        .quizOptionLabel input {
            position: absolute;
            opacity: 0;
        }
        .quizOptionLabel input:checked + span {
            color: var(--primaryColorlight);;
        }
        .quizOptionLabel:hover {
            background: #003a75;
        }
        .quizOptionLabel input:checked + span {
            filter: brightness(90%);
        }
        .quizOptionLabel span {
            position: absolute;
            left: 10px;
            font-weight: bold;
            color: var(--white);
        }
        .quizOptionLabel::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 8px;
            background-color: var(--primaryColorlight);;
            border-radius: 10px 0 0 10px;
        }

    </style>
    <!-- Prism.js CSS -->
    <link href="../prism.css"  rel="stylesheet" />
</head>
<body>
<header class="header">
    <div class="headerContainer">
        <div class="row vCenter">
            <div class="headerItem itemLeft">
                <div class="logo">

                </div>
            </div>
            <section class="headerItem itemCenter">
                <div class="menuOverlay"></div>
                <nav class="menu">
                    <div class="mobileMenuHead">
                        <div class="goBack">&larr;</div>
                        <div class="currentMenuTitle"></div>
                        <div class="mobileMenuClose">&times;</div>
                    </div>
                    <ul class="menuMain">
                        <li class="menuItemHasChildren">
                            <a href="/index.php">Themenkatalog &darr;</a>
                            <div class="subMenu megaMenu megaMenuColumn4">
                                <div class="listItem">
                                    <ul>
                                        <li><a href="/themenkatalog/grundlagenInformationstechnologie.php">1) Grundlagen in der Informationstechnik</a></li>
                                        <li><a href="/themenkatalog/betriebssystemeUndSoftware.php">2) Betriebssysteme und Software</a></li>
                                        <li><a href="/themenkatalog/betreuungVonMobilerHardware.php">3) Betreuung von mobiler Hardware</a></li>
                                        <li><a href="/themenkatalog/technischeDokumentationenProjektarbeitSchulungen.php">4) Technische Dokumentationen / Projektarbeit / Schulungen</a></li>
                                        <li><a href="/themenkatalog/gesetzlicheBestimmungenimZusammenhangMitApplikationsentwicklung.php">5) Gesetzliche Bestimmungen im Zusammenhang mit Applikationsentwicklung – Coding</a></li>
                                        <li><a href="/themenkatalog/netzwerkdienste.php">6) Netzwerkdienste</a></li>
                                    </ul>
                                </div>
                                <div class="listItem">
                                    <ul>
                                        <li><a href="/themenkatalog/itSecurityundBetriebssicherheit.php">7) IT-Security und Betriebssicherheit</a></li>
                                        <li><a href="/themenkatalog/informatikUndGesellschaft.php">8) Informatik und Gesellschaft</a></li>
                                        <li><a href="/themenkatalog/ergonomischeGestaltungEinesArbeitsplatzes.php">9) Ergonomische Gestaltung eines Arbeitsplatzes</a></li>
                                        <li><a href="/themenkatalog/fachberatungPlanung.php">10) Fachberatung, Planung</a></li>
                                        <li><a href="/themenkatalog/InformatikTeil1.php">11) Informatik Teil 1</a></li>
                                        <li><a href="/themenkatalog/InformatikTeil2.php">11) Informatik Teil 2</a></li>
                                    </ul>
                                </div>
                                <div class="listItem">
                                    <ul>
                                        <li><a href="/themenkatalog/Projektmanagement.php">12) Projektmanagement</a></li>
                                        <li><a href="/themenkatalog/ProjektmethodenTools.php">13) Projektmethoden, Tools</a></li>
                                        <li><a href="/themenkatalog/qualitätssicherung.php">14) Qualitätssicherung</a></li>
                                        <li><a href="/themenkatalog/grundkenntnisseDesProgrammierens.php">15) Grundkenntnisse des Programmierens</a></li>
                                        <li><a href="/themenkatalog/kenntnisundVerwendungvonDatenbankenDatenmodellenUndDatenstrukturen.php">16) Kenntnis und Verwendung von Datenbanken, Datenmodellen und Datenstrukturen</a></li>
                                        <li><a href="/themenkatalog/systementwicklungTestkonzepte.php">17) Systementwicklung / Testkonzepte</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="menuItemHasChildren">
                            <a href="../theoretischePruefung/uebersicht.php">Theoretische Prüfung &darr;</a>
                            <div class="subMenu singleColumnMenu">
                                <ul>
                                    <li><a href="/theoretischePruefung/datentechnikUndSystemmanagement.php">1) Datentechnik und Systemmanagement</a></li>
                                    <li><a href="/theoretischePruefung/angewandteMathematik.php">2) Angewandte Mathematik</a></li>
                                    <li><a href="/theoretischePruefung/applikationsentwicklung.php">3) Applikationsentwicklung</a></li>
                                </ul>
                            </div>
                        </li>
                        <li> <a href="../Quiz/multipleChoiceQuiz.php">Quiz</a></li>
                        <li class="menuItemHasChildren">
                            <a href="../beispiele/beispieleUebersicht.php">Beispiele &darr;</a>
                            <div class="subMenu megaMenu megaMenuColumn4">
                                <div class="listItem">
                                    <ul>
                                        <li><a href="/beispiele/checkboxRechnung.php">Waren auswählen und Rechnung erstellen</a></li>
                                        <li><a href="/beispiele/datatable.php">Rechnungen Übersicht</a></li>
                                        <li><a href="/beispiele/insertAngestellte.php">Code Angestellte hinzufügen</a></li>
                                        <li><a href="/beispiele/navbarBeispiel.php">Navbar Example</a></li>
                                        <li><a href="/beispiele/sqlAngestellte.php">SQL Code Beispiel Angestellte</a></li>
                                    </ul>
                                </div>
                                <div class="listItem">
                                    <ul>
                                        <li><a href="/beispiele/sqlRechnung.php">SQL Code Beispiel Rechnung</a></li>
                                        <li><a href="/beispiele/sqlVerleih.php">SQL Code Beispiel Verleih</a></li>
                                        <li><a href="/beispiele/tableDump.php">Code Table Dump</a></li>
                                        <li><a href="/beispiele/editKunden.php">Kundendaten bearbeiten</a></li>
                                        <li><a href="/beispiele/bilderHochladen.php">Bild hochladen </a></li>
                                        <li><a href="/beispiele/configBeispiel.php">Config Beispiel</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="../kontakt.php">Kontakt</a>
                        </li>

                    </ul>
                </nav>
            </section>
            <div class="headerItem itemRight">
                <div class="mobileMenuTrigger">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
