<?php
session_start();
$pageName = 'index';
$title = 'Mate';
?>

<?php include __DIR__ . '/parts/html-head.php' ?>
<style>
    /* *{
            outline: 1px solid red;} */

    .kk-phone {
        /* width: 80%; */
        /* margin: auto; */
        z-index: 997;
        position: absolute;
        left: 0;
        right: 0;
        position: relative;
        height: 800px;
    }

    .kk-phone-logo {
        width: 127px;
        margin: auto;
        margin-top: 60px;
    }



    .kk-phone-logo img {
        width: 100%;
    }

    .kk-nav-top {
        position: relative;
        width: 100%;
        height: 60px;
        left: 0px;
        top: 0px;
        background: #09005F;
        display: none;
        z-index: 998;
    }

    .kk-table-logo {
        position: absolute;
        top: 22px;
        left: 62px;
        width: 102px;
        height: 24px;
    }

    .kk-table-logo img {
        width: 100%;
    }

    .kk-right-botton {
        width: 107px;
        height: 38px;
        border-radius: 20px;
        background-color: #F4EDED;
        padding: 8px 10px;
        text-decoration: none;
        position: absolute;
        right: 62px;
        top: 12px;


    }

    .kk-bottonword {
        color: #240173;
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 2.5px;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
    }


    @media screen and (min-width: 1111px) {
        .kk-nav-top {
            display: block;
        }
    }




    /* <!-- ________________Herosection________________ --> */

    body {
        /* overflow: hidden; */
        margin: 0;
        padding: 0;
        background: #240173;
        font-family: 'Noto Sans', sans-serif;
        font-family: 'Noto Sans TC', sans-serif;
    }

    .herosection_all {
        width: 100%;
    }

    .wrap_all {
        width: 100%;
        margin: auto;
    }

    .kk-p-title {
        margin: auto;
    }

    .kk-p-word1 {
        font-weight: 700;
        font-size: 28px;
        line-height: 46px;
        text-align: center;
        letter-spacing: 2.5px;
        color: #F4EDED;
        margin-top: 108px;
    }

    .kk-p-word2 {
        font-weight: 700;
        font-size: 14px;
        line-height: 25px;
        text-align: center;
        letter-spacing: 2.5px;
        color: #F4EDED;
        margin-top: 50px;
    }

    .kk-yes-botton {
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        letter-spacing: 2.5px;
        width: max-content;
        padding: 7px 40px 10px 40px;
        border-radius: 20px;
        height: 36px;
        color: #240173;
        background: linear-gradient(226.02deg, #FFDA93 4.21%, #F56638 99.47%);
        margin: auto;
        margin-top: 50px;
    }

    .kk-yes-botton:hover,
    .kk-no-botton:hover,
    .kk-btn-pc:hover {
        /* color: #09005F; */
        background: linear-gradient(262.71deg, #FDBC44 -19.11%, #EA3A00 125.42%);

    }

    a {
        color: #09005F;
    }

    .kk-no-botton {
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        letter-spacing: 2.5px;
        width: max-content;
        padding: 7px 40px 10px 40px;
        border-radius: 20px;
        height: 36px;
        color: #240173;
        background: linear-gradient(226.02deg, #FFDA93 4.21%, #F56638 99.47%);
        margin: auto;
        margin-top: 15px;
    }

    .kk-p-login {
        margin-top: 65px;
        display: flex;
        text-align: center;
        position: relative;
    }


    .kk-left-line {
        border: 1px solid #F4EDED;
        border-left: none;
        border-right: none;
        border-top: none;
        width: 100%;
        margin: 8px 0px;
    }

    .kk-oryoucan {
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        text-align: center;
        letter-spacing: 2.5px;
        color: #F4EDED;
        padding: 0px 18px;
        background-color: #0A0A10;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }

    .kk-p-login-btn {
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        letter-spacing: 2.5px;
        width: max-content;
        padding: 7px 40px 10px 40px;
        border-radius: 20px;
        height: 36px;
        color: #240173;
        background: #F4EDED;
        margin: auto;
        margin-top: 35px;
    }

    .kk-p-login-btn:hover,
    .kk-right-botton:hover {
        background: #AFAFAF;
    }


    .kk-phone-logohero {
        position: absolute;
        /* top: 20%; */
        left: 50%;
        transform: translate(-50%, -10%);
        width: 70%;
        margin-top: 70px;
    }


    .kk-herosection {
        position: relative;
        display: none;
        height: 800px;
    }

    .kk-herobg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }

    canvas {
        width: 100%;
    }

    .kk-title-all {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        z-index: 999;
        width: 600px;
        height: 300px;

    }

    .kk-title {
        font-weight: 700;
        font-size: 48px;
        letter-spacing: 2px;
        line-height: 76px;
        color: #F4EDED;
    }

    .kk-content {
        font-weight: 700;
        font-size: 16px;
        line-height: 30px;
        letter-spacing: 2.5px;
        margin-top: 10px;
        color: #F4EDED;
    }

    #canv {
        z-index: 1;
    }

    .kk-two-btn {
        margin-top: 80px;
        padding: 0 13%;
    }

    .kk-btn-mr {
        margin-right: 50px;
    }

    .kk-btn-pc {
        width: max-content;
        padding: 13px 22px;
        border-radius: 100px;
        height: 51px;
        color: #240173;
        background: linear-gradient(226.02deg, #FFDA93 4.21%, #F56638 99.47%);
        font-size: 18px;
        letter-spacing: 2.5px;
        font-weight: 700;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
    }

    @media screen and (min-width: 1111px) {
        .kk-herosection {
            display: block;
            display: 998;
        }

        .kk-phone {
            display: none;
        }

    }

    /* <!-- ________________trainsection________________ --> */

    /* -phone- */

    .kk-trainsection {
        position: relative;
        display: none;

    }

    .kk-li-pic {
        width: 219px;
        margin: auto;
    }

    .kk-li-pic img {
        width: 100%;
    }

    .kk-ultrain-wrap {
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .kk-ultrain {
        width: 00%;
        transition: .5s;
    }

    .kk-ultrain li {
        width: 375px;
    }

    .kk-bar-all {
        position: absolute;
        right: 42px;
        left: 42px;
        top: 42px;
        width: 291px;
        height: 5px;
        background-color: #CBCBCB;
        margin: auto;
    }

    .kk-bar {
        width: 20%;
        height: 100%;
        background: linear-gradient(226.02deg, #FF67F9 4.21%, #5338F5 99.47%);
    }

    .kk-li-word {
        font-style: normal;
        font-weight: 500;
        font-size: 28px;
        letter-spacing: 2.5px;
        color: #F4EDED;
        padding: 42px 0px 0px 0px;
        /* margin: auto; */
        display: inline-block;
        margin-left: 42px;
        margin-right: 42px;


    }

    .kk-li-word1 {
        font-style: normal;
        font-weight: 500;
        font-size: 28px;
        line-height: 36px;
        letter-spacing: 2.5px;
        color: #F4EDED;
        margin-top: 46px;

    }

    .kk-li-word2 {
        font-weight: 700;
        font-size: 14px;
        line-height: 25px;
        letter-spacing: 2.5px;
        color: #F4EDED;
        margin-top: 30px;
        margin-bottom: 48px;

    }

    /* -phone- */

    .kk-p-ultrain-section {
        width: 100%;
        height: 400vh;
        display: none;
    }

    .p-ultrain {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .kk-p-ultrain-content {
        position: relative;
        width: 100vw;
        height: 400vh;
        overflow: hidden;

    }


    .kk-p-li {
        width: 100vw;
        /* margin: auto; */
        padding-top: 91px;

    }

    .kk-p-li-content {
        width: 70%;
        margin: auto;
    }

    .kk-p-li-word {
        width: 100%;
        margin-bottom: 52px;
        /* display: inline-block; */
    }

    .kk-p-li-word1 {

        letter-spacing: 2.5px;
        line-height: 36px;
        color: #F4EDED;

    }

    .kk-p-li-word2 {
        margin-top: 4px;
        line-height: 25px;
        letter-spacing: 2.5px;
        color: #F4EDED;
    }



    .kk-p-li-pic {
        width: 219px;
        margin-top: 52px;
        margin-right: auto;
    }

    .kk-p-li-pic img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .kk-p-bar-all {
        position: absolute;
        right: 20px;
        top: 40%;
        transform: translateX(-50%);
        width: 5px;
        height: 291px;
        background-color: #CBCBCB;
        z-index: 999;
    }

    .kk-p-bar {
        width: 100%;
        height: 20%;
        background: linear-gradient(226.02deg, #FF67F9 4.21%, #5338F5 99.47%);

    }


    /* -desktop- */


    .kk-pc-ultrain-section {
        width: 100%;
        height: 360vw;
        overflow: hidden;
    }

    .ultrain {
        width: 100%;
        height: 100vw;
        position: relative;
    }

    .kk-pc-ultrain-content {
        width: 100vw;
        height: 400vw;
        overflow: hidden;
        position: relative;
    }

    .kk-pc-train {
        width: 400%;
        transition: .5s;
    }

    .kk-pc-li {
        width: 100vw;
        /* margin: auto; */
        padding-top: 137px;

    }

    .gg-bottom {
        position: absolute;
        bottom: 120vh;
        padding-top: 0px;
    }

    .kk-pc-li-content {
        width: 80%;
        margin: auto;
        display: flex;
        justify-content: space-between;
    }

    .kk-pc-li-word {
        width: 30%;
        /* display: inline-block; */
    }

    .kk-pc-li-word1 {
        font-weight: 700;
        font-size: 48px;
        line-height: 76px;
        letter-spacing: 2.5px;
        color: #F4EDED;

    }

    .kk-pc-li-word2 {
        margin-top: 4px;
        line-height: 30px;
        letter-spacing: 2.5px;
        color: #F4EDED;
    }



    .kk-pc-li-pic {
        width: 680px;
        margin-top: 20px;
        z-index: 1;
    }

    .kk-pc-li-pic img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .kk-pc-bar-all {
        position: absolute;
        right: 54px;
        top: 25%;
        transform: translateY(-50%);
        width: 5px;
        height: 298px;
        background-color: #CBCBCB;
        z-index: 99;
    }

    .kk-pc-bar {
        width: 100%;
        height: 20%;
        background: linear-gradient(226.02deg, #FF67F9 4.21%, #5338F5 99.47%);

    }

    .kk-pc-li-word5 {
        position: absolute;
        top: 400px;
        transform: translateY(100px);
        opacity: 0;
        transition: 5s;
        width: 263px;
        margin: auto;

    }

    @media screen and (max-width:1111px) {
        .kk-pc-ultrain-section {
            display: none;
        }

        .kk-p-ultrain-section {

            display: block;
        }

    }

    /* <!-- ________________stepsection________________ --> */
    .kk-pc-li-word5 {
        top: 230px;
    }


    .kk-p-li {
        margin-top: 80px;
    }


    .kk-step-title1 {
        transition: 3s;
    }

    .kk-step-title2 {
        transition: 5s;
    }

    .kk-step-title3 {
        transition: 7s;
    }

    .kk-step-title {
        transition: 1s;
    }

    .kk-p-stepall {
        display: none;
    }

    .kk-desktop-stepall {
        background-color: #09005F;
        height: 856px;
    }

    .kk-p-step-content {
        width: 80%;
        margin: auto;
        padding-bottom: 66px;
    }

    .kk-p-lefttop-word,
    .kk-pc-li-word4,
    .kk-pc-li-word6 {
        color: #F4EDED;
    }


    .kk-pc-li-word8 {
        margin-top: 50px;
        color: #F4EDED;
    }

    .kk-pc-li-word5 {
        margin-top: 150px;
        color: #F4EDED;
    }

    .kk-p-arrow {
        width: 17px;
        height: 17px;
        padding-bottom: 8px;
        position: relative;
        margin-left: 8px;
    }

    .kk-p-arrow img {
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }

    .kk-p-stepcard-1 {
        position: relative;
        width: 263px;
        margin: auto;
    }

    .kk-p-lefttop {
        background: linear-gradient(245.08deg, #FF67F9 -15.11%, #5639F6 120.47%);
        border-radius: 20px;
        padding: 12px 12px 8px 12px;

        background-color: #fff;
        display: inline-block;
        position: absolute;
        top: -10px;
        left: 0;

    }

    .kk-p-img {
        width: 138px;
        margin: auto;
    }

    .kk-p-img img {
        width: 100%;
        margin-top: 60%;
    }

    .kk-p-circle {
        width: 263px;
        height: 263px;
        border: solid 5px transparent;
        border-radius: 50%;
        background-image: linear-gradient(#09005F, #09005F),
            linear-gradient(245.08deg, #FF67F9 -15.11%, #5639F6 120.47%);
        background-origin: border-box;
        background-clip: content-box, border-box;
        margin: auto;
    }

    .kk-p-circle-bottom {
        margin: auto;
        text-align: center;
        margin-top: 20px;
    }

    .kk-p-middle-title {
        font-size: 20px;
        line-height: 35px;
        font-weight: 700;
        letter-spacing: 2.5px;
    }

    .kk-p-circle-all {
        margin-top: 70px;
    }

    .kk-p-arrowdown {
        width: 41px;
        margin: auto;
        margin-top: 42px;
        transition: 2s;

    }

    .kk-p-arrowdown img {
        width: 100%;
        margin: auto;
    }

    .kk-p-arrowdown-all {
        width: 100%;

    }

    .kk-pc-li-word3 {
        padding-top: 66px;
        color: #F4EDED;
    }

    .kk-p-stepcard-all {
        position: relative;
    }

    /* <!-- _________________音軌動態＿＿＿＿＿＿＿＿＿＿＿ -->    */

    .kk-sound-wave {
        position: absolute;
        bottom: 23%;
        right: 0;
        width: 70px;
        height: 70px;
        background-color: #09005F;
        border-radius: 50%;
        border: 1px solid grey;
    }

    #bars {
        height: 10px;
        left: 0;
        right: 0;
        margin: auto;
        position: absolute;
        bottom: 30%;
        width: 45px;
    }

    .bar {
        background: white;
        height: 2px;
        position: absolute;
        bottom: 0;
        width: 3px;
        animation: sound 0ms -800ms linear infinite alternate;
    }

    @keyframes sound {
        0% {
            opacity: .35;
            height: 3px;
        }

        100% {
            opacity: 1;
            height: 28px;
        }
    }

    .bar:nth-child(1) {
        left: 1px;
        animation-duration: 774ms;
    }

    .bar:nth-child(2) {
        left: 5px;
        animation-duration: 733ms;
    }

    .bar:nth-child(3) {
        left: 9px;
        animation-duration: 707ms;
    }

    .bar:nth-child(4) {
        left: 13px;
        animation-duration: 758ms;
    }

    .bar:nth-child(5) {
        left: 17px;
        animation-duration: 700ms;
    }

    .bar:nth-child(6) {
        left: 21px;
        animation-duration: 727ms;
    }

    .bar:nth-child(7) {
        left: 25px;
        animation-duration: 441ms;
    }

    .bar:nth-child(8) {
        left: 29px;
        animation-duration: 419ms;
    }

    .bar:nth-child(9) {
        left: 33px;
        animation-duration: 487ms;
    }

    .bar:nth-child(10) {
        left: 37px;
        animation-duration: 742ms;
    }

    .bar:nth-child(11) {
        left: 41px;
        animation-duration: 774ms;
    }

    .bar:nth-child(12) {
        left: 45px;
        animation-duration: 733ms;
    }


    /* <!-- _________________＿＿＿＿＿＿＿＿＿＿ -->    */




    @media screen and (max-width:1111px) {
        .kk-p-arrowdown-all {
            margin-top: 150px;
        }

        .kk-sound-wave {
            position: absolute;
            bottom: 33%;
            right: 0;
            left: 0;
            margin: auto;
            width: 70px;
            height: 70px;
            background-color: #09005F;
            border-radius: 50%;
            border: 1px solid grey;
        }

        .kk-p-word2 {
            margin-top: 20px;
            margin-bottom: 120px;
        }

        .kk-p-login {
            margin-top: 40px;
        }

    }

    @media screen and (min-width:1111px) {
        .kk-p-stepcard-all {
            display: flex;
            padding-bottom: 100px;
        }

        .kk-p-lefttop {
            top: 50px;
        }

        .kk-p-arrowdown img {
            -moz-transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
            margin-top: 150px;
        }

        .kk-pc-li-word3 {
            font-weight: 700;
            font-size: 48px;
            line-height: 76px;
            letter-spacing: 2.5px;
            color: #F4EDED;
            margin-bottom: 90px;
            padding-top: 100px;
        }

        .kk-p-step-content {
            padding-bottom: 0px;
        }

        .kk-pc-li-word4 {
            font-size: 20px;
            line-height: 32px;
            font-weight: 700;
            letter-spacing: 2.5px;
            /* transition: 3s; */

        }
    }

    /* <!-- ________________endsection________________ --> */

    /* <!-- ----phone---- --> */



    .kk-p-endsection {
        height: 783px;
        position: relative;
        overflow: hidden;
    }

    .kk-circle-fill {
        width: 0px;
        height: 0px;
        background: linear-gradient(45deg, #F66F40, #FFD38D);
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        /* margin: auto; */
        transition: 1s;
        transform: translateY(700px);

    }

    .kk-p-circle-fill {
        width: 0px;
        height: 0px;
        background: linear-gradient(45deg, #F66F40, #FFD38D);
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        /* margin: auto; */
        transition: 1s;
        transform: translateY(700px);
        display: none;

    }

    .kk-p-endcontent {
        margin: auto;
        text-align: center;
        width: 80%;
        height: 856px;
        padding-top: 300px;
        z-index: 666;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;

    }

    .btn-pc-purple {
        margin: auto;
    }

    .kk-p-btn {
        margin-top: 62px;
    }

    .kk-p-btn a,
    a:hover {
        color: #F4EDED;
        text-decoration: none;
        outline: none;
    }

    @media screen and (max-width:1111px) {
        .kk-p-stepall {
            display: block;
            height: 1900px;
        }

        .kk-desktop-stepall {
            display: none;
        }

        .kk-p-circle-fill {
            display: block;
        }

        .kk-circle-fill {
            display: none;
        }

        .kk-p-li-word5 {
            margin-top: 50px;
            color: #F4EDED;
            transition: 2s;
        }


    }

    @media screen and (min-width: 1111px) {

        .kk-pc-li-word5 {
            font-size: 20px;
            line-height: 32px;
            font-weight: 700;
            letter-spacing: 2.5px;

        }

        .kk-pc-li-word6 {
            font-size: 36px;
            line-height: 48px;
            font-weight: 700;
            letter-spacing: 2.5px;

        }


    }

    @media screen and (max-height:700px) {
        .kk-p-ultrain-section {
            height: 480vh;
        }

        .kk-p-ultrain-content {
            height: 480vh;
        }
    }
</style>
<?php include __DIR__ . '/parts/no-bg.php' ?>



<div class="kk-nav-top">
    <div class="kk-table-logo">
        <a href=""><svg id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 434 98">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #fff;
                        }

                        .cls-2 {
                            fill: url(#未命名漸層_132);
                        }
                    </style>
                    <linearGradient id="未命名漸層_132" x1="394.48" y1="72.68" x2="319.23" y2="8.01" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#ff7f29" />
                        <stop offset="0.44" stop-color="#ffdc99" />
                        <stop offset="0.55" stop-color="#ffe3ad" />
                        <stop offset="0.76" stop-color="#fff4e0" />
                        <stop offset="0.88" stop-color="#fff" />
                    </linearGradient>
                </defs>
                <path class="cls-1" d="M135.1,93.69a27.94,27.94,0,0,1-21.52-9.53C107.89,77.87,105,69.75,105,60s2.88-17.76,8.55-23.83A28.37,28.37,0,0,1,135.1,27,25.73,25.73,0,0,1,149.3,31,26.67,26.67,0,0,1,155,35.84V30a1.92,1.92,0,0,1,1.9-1.95h9.9A1.91,1.91,0,0,1,168.64,30v60.8a1.92,1.92,0,0,1-1.89,2h-9.9a1.93,1.93,0,0,1-1.9-2v-6a26.36,26.36,0,0,1-5.64,5A25.45,25.45,0,0,1,135.1,93.69Zm1.78-54a17.1,17.1,0,0,0-12.77,5.41c-3.57,3.64-5.31,8.51-5.31,14.9s1.77,11.44,5.4,15.38a17,17,0,0,0,25.42.21c3.59-3.8,5.33-8.75,5.33-15.15s-1.74-11.35-5.33-15.14A16.76,16.76,0,0,0,136.88,39.65Z" />
                <path class="cls-1" d="M261.53,64.32H242c-2.83,0-3.11.48-2,3.17,2.75,7,8.37,11,16,11,6.26,0,11.71-1.5,16.57-5.42,2.16-1.74,3.17-1.51,4.95.69,1.42,1.76,2.87,3.5,4.26,5.29,1.16,1.49,1.27,2.86-.36,4.23a35.08,35.08,0,0,1-21.68,8.64c-5.57.21-11.1.31-16.52-1.92A30.46,30.46,0,0,1,227.8,77.14c-6.43-11-6.7-22.53-2-34,3.76-9.2,10.52-15.34,20.53-17.75a33.57,33.57,0,0,1,20.84,1.3,26.89,26.89,0,0,1,14.44,13.54c3,6.54,3.39,12.82,3.08,20.62,0,2.79-.75,3.5-3.58,3.51C274.58,64.33,268.06,64.32,261.53,64.32ZM254.06,52c4.11,0,9.83.05,13.94,0,1,0,1-1,1-2s-3-13-15-13c-11,.12-15,10-15,13,0,2,0,2,2,2Z" />
                <path class="cls-1" d="M47,72.48c2.25,0,4.51,0,6.76,0a3.12,3.12,0,0,0,2.92-1.85c1.45-2.66,2.93-5.3,4.36-8Q68.35,49,75.63,35.34c.31-.57.6-1.5,1.38-1.28s.54,1.17.54,1.82c0,4.65,0,9.3,0,13.95q0,19.38,0,38.74C77.57,91.64,78,92,81,92h7.86c3,0,3.68-.67,3.68-3.79q0-11.55,0-23.12,0-26.76,0-53.52c0-3.69-.47-4.17-4.1-4.17s-7.25,0-10.88,0a3.53,3.53,0,0,0-3.44,2.05q-9.18,17.1-18.34,34.21C54,47,52.33,50.43,50.58,53.79c-.36.7-.66,1.69-1.62,1.66" />
                <path class="cls-1" d="M53,56V72.48c-2.25,0-4.51,0-6.76,0a3.12,3.12,0,0,1-2.92-1.85c-1.45-2.66-2.93-5.3-4.36-8Q31.66,49,24.37,35.34c-.31-.57-.6-1.5-1.38-1.28s-.54,1.17-.54,1.82c0,4.65,0,9.3,0,13.95q0,19.38,0,38.74C22.43,91.64,22,92,19,92H11.17c-3,0-3.68-.67-3.68-3.79q0-11.55,0-23.12,0-26.76,0-53.52c0-3.69.47-4.17,4.1-4.17s7.25,0,10.88,0a3.53,3.53,0,0,1,3.44,2.05q9.18,17.1,18.34,34.21C46,47,47.67,50.43,49.42,53.79c.36.7.66,1.69,1.62,1.66" />
                <path class="cls-1" d="M51.34,52.32l-.89,1.74s-.35,1.06-.9,0-1.31-2.56-1.31-2.56L46,54l2.67,3.64L52,56V52.62Z" />
                <path class="cls-1" d="M200.41,46V38.7h12.14a2,2,0,0,0,2-2V28.3a2,2,0,0,0-2-2H200.41V10.84a2,2,0,0,0-2-2H188a2,2,0,0,0-2,2V26.3h-5.07a2,2,0,0,0-2,2v8.4a2,2,0,0,0,2,2H186V49h0c0,2.54,0,5.21,0,8.16.17,4.94-.34,10.82.39,16.68,1,7.74,3.84,14.07,11.27,17.4,4.33,1.94,8.81,1.84,13.33,1.6,1.46-.08,2.1-1.21,2.11-2.67,0-2.48,0-5,0-7.43s-.64-3.25-3.13-3.43c-5.67-.4-9.54-3.08-9.68-8.92" />
                <path class="cls-1" d="M428,41.06c-.14,1.4-.27,2.79-.41,4.19a73.22,73.22,0,0,1-5.4,21.11,51.3,51.3,0,0,1-7.77,13c-4.33,5.13-9.42,9-16,10.07a22.42,22.42,0,0,1-16-3.32,45.12,45.12,0,0,1-10.13-9.25c-1-1.14-1.89-2.34-2.81-3.52-.3-.39-.49-.5-.82,0a62.81,62.81,0,0,1-5.59,7.06c-4,4.34-8.44,7.95-14.26,9a19.48,19.48,0,0,1-12.43-1.94c-5.31-2.61-9.33-6.79-12.62-11.81a64.51,64.51,0,0,1-9.68-26.85,79.48,79.48,0,0,1-.84-13.08c.13-5.75,1-11.35,3.56-16.53,2.87-5.82,7.32-9.26,13.5-10.13a1.42,1.42,0,0,0,.35-.11h5c.22.05.43.11.65.14a17.8,17.8,0,0,1,6.3,2.08A28.71,28.71,0,0,1,351.07,19a118.38,118.38,0,0,1,9.54,14.85c3.19,5.69,6.42,11.35,9.63,17,.28.51.43.71.78,0q3.83-7.23,7.7-14.42c3.68-6.85,7.48-13.61,12.51-19.48a23.69,23.69,0,0,1,8.87-6.82A23.59,23.59,0,0,1,404.67,9h4.58l1.66.29a17.64,17.64,0,0,1,11.15,6.56,27.86,27.86,0,0,1,5.24,12.23c.33,1.71.44,3.45.7,5.16ZM324.37,37.27A66.5,66.5,0,0,0,325,46.7a61,61,0,0,0,5.61,19.57,28,28,0,0,0,7.87,10.09A12.4,12.4,0,0,0,348.55,79a14.07,14.07,0,0,0,7.2-4.22,53,53,0,0,0,7.31-9.68,1.11,1.11,0,0,0-.08-1.34c-1.64-2.72-3.31-5.43-4.89-8.19-4.44-7.75-8.75-15.59-13.52-23.12A44.54,44.54,0,0,0,339,25,8,8,0,0,0,332,22.24c-3.35.45-5.35,2.51-6.44,5.73A27.55,27.55,0,0,0,324.37,37.27Zm91.21.08a33.18,33.18,0,0,0-.46-5.9,13.86,13.86,0,0,0-2.63-6.54,8,8,0,0,0-10.94-1.11,27.9,27.9,0,0,0-6,6.65c-3.33,4.78-6.32,9.81-9.34,14.81s-6,10-9.08,14.91a1.47,1.47,0,0,0,0,1.93c1.33,1.83,2.58,3.74,4,5.5,2.21,2.7,4.48,5.38,7.52,7.06,4.57,2.52,9.07,2.53,13.33-.82a28.17,28.17,0,0,0,7.6-10.12A63.45,63.45,0,0,0,415.58,37.35Z" />
                <path class="cls-2" d="M325.53,28c1.09-3.22,3.09-5.28,6.44-5.73A8,8,0,0,1,339,25a44.54,44.54,0,0,1,5.53,7.5c4.77,7.53,9.08,15.37,13.52,23.12,1.58,2.76,3.25,5.47,4.89,8.19a3.27,3.27,0,0,1,.17.31l7.22,10.33c.53.69,1.08,1.37,1.63,2l1.63,1.88c.2.23.41.45.62.67h0l.38.39.6.65h0a36.92,36.92,0,0,0,7.24,6.08,22.42,22.42,0,0,0,16,3.32c6.56-1.1,11.65-4.94,16-10.07a46.44,46.44,0,0,0,5.79-8.84C408.45,81.07,398,78,391.72,76l-.19-.07a16.33,16.33,0,0,1-2.86-1.23,22.83,22.83,0,0,1-6.09-5.35c-.91-1-1.6-1.89-2-2.41l-.3-.41c-1.08-1.44-2.09-2.94-3.15-4.39a2.49,2.49,0,0,1-.23-.4l-7-11.2-.14-.42c-3.06-5.42-6.14-10.82-9.19-16.25A118.38,118.38,0,0,0,351.07,19a28.71,28.71,0,0,0-8.39-7.76,17.8,17.8,0,0,0-6.3-2.08c-.22,0-.43-.09-.65-.14h-5a1.42,1.42,0,0,1-.35.11c-6.18.87-10.63,4.31-13.5,10.13" />
            </svg></a>
    </div>

    <div class="kk-right-botton">
        <p class="kk-bottonword"><a href="Register_register-login.php">直接登入</a></p>
    </div>
</div>

<div class="wrap_all">
    <!-- ________________Herosection________________ -->
    <div class="herosection_all">
        <!-- ________________phone________________ -->
        <div class="kk-phone">
            <div class="kk-phone-logo">
                <a href=""><img src="imgs/matelogo-01.png" alt=""></a>
            </div>
            <div class="kk-phone-logohero">
                <div class="kk-loghero-top">

                    <div class="kk-p-title">
                        <h2 class="kk-p-word1">
                            你是工程師嗎？ <br>
                            還是想和工程師交朋友呢？</h2>

                        <h3 class="kk-p-word2">
                            Hi!我是人工智慧Eve， <br>
                            很高興能見到你！ <br>
                            <br>
                            在這裡，共有2537位工程師，期待能和你有一場浪漫的約會。
                        </h3>
                    </div>

                    <!-- _________________音軌動態＿＿＿＿＿＿＿＿＿＿＿ -->
                    <div class="kk-sound-wave">
                        <div id="bars">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>

                        </div>
                    </div>

                    <!-- _______________＿＿＿＿＿＿＿＿＿＿＿ -->

                    <div class="kk-all-bottom">
                        <div class="kk-yes-botton">
                            <a href="Register_register.php">
                                <p class="kk-bottonword" data-url="Register_register.php">我是工程師</p>
                            </a>

                        </div>

                        <div class="kk-no-botton">
                            <a href="Register_register.php">
                                <p class="kk-bottonword">我想來認識工程師</p>
                            </a>

                        </div>
                    </div>

                    <div class="kk-p-login">
                        <div class="kk-left-line"></div>
                        <h6 class="kk-oryoucan">或你可以</h6>
                        <div class="kk-right-line"></div>
                    </div>

                    <div class="kk-p-login-btn">
                        <p class="kk-bottonword"><a href="Register_register-login.php"> 直接登入</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ________________desktop_______________ -->

        <div class="kk-herosection">

            <div class="kk-title-all">
                <h2 class="kk-title">
                    你是工程師嗎？ <br>
                    還是想和工程師交朋友呢？</h2>

                <h3 class="kk-content">
                    Hi!我是人工智慧Eve，很高興能見到你！ <br>
                    在這裡，共有2537位工程師，期待能和你有一場浪漫的約會。
                </h3>

                <!-- _________________音軌動態＿＿＿＿＿＿＿＿＿＿＿ -->
                <div class="kk-sound-wave">
                    <div id="bars">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>

                    </div>
                </div>

                <!-- _______________＿＿＿＿＿＿＿＿＿＿＿ -->
                <div class="kk-two-btn d-flex">
                    <div class="kk-btn-pc kk-btn-mr"><a href="Register_register.php">我是工程師</a> </div>
                    <div class="kk-btn-pc"><a href="Register_register.php">我想來認識工程師</a></div>
                </div>
            </div>
        </div>


        <div class="kk-herobg">
            <canvas id='canv' style="width: 100%; height: 856px;"></canvas>
            <!-- <div id="waveform"></div> -->
        </div>
    </div>

    <!-- ________________ultrainsection________________ -->

    <!-- ----phone---- -->
    <section class="kk-p-ultrain-section">
        <div class="p-ultrain">
            <div class="kk-p-bar-all">
                <div class="kk-p-bar"></div>
            </div>
            <div class="kk-p-ultrain-content">
                <ul class="kk-p-train list-unstyled">
                    <li class="kk-p-li ">
                        <div class="kk-p-li-content ">
                            <div class="kk-p-li-word">
                                <h4 class="kk-p-li-word1 phone-title-28">想和理想對象 <br>
                                    約會吃飯?</h4>
                                <h6 class="kk-p-li-word2 phone-text-14">精準關鍵字配對，快速鎖定最適合你的對象。</h6>
                            </div>
                            <div class="kk-p-li-pic">
                                <img src="imgs/phone-01.png" alt="">
                            </div>

                        </div>
                    </li>
                    <li class="kk-p-li ">
                        <div class="kk-p-li-content ">
                            <div class="kk-p-li-word">
                                <h4 class="kk-p-li-word1 phone-title-28">今天晚餐不想 <br>
                                    一個人。</h4>
                                <h6 class="kk-p-li-word2 phone-text-14">建立聚會吸引相同頻率的對象，排除冗長的線上聊天，直接見面享受美食。</h6>
                            </div>
                            <div class="kk-p-li-pic">
                                <img src="imgs/phone-02.png" alt="">
                            </div>

                        </div>
                    </li>
                    <li class="kk-p-li ">
                        <div class="kk-p-li-content ">
                            <div class="kk-p-li-word">
                                <h4 class="kk-p-li-word1 phone-title-28">第一次見面 <br>
                                    會緊張？</h4>
                                <h6 class="kk-p-li-word2 phone-text-14">讓約會神助攻幫你一把，輕鬆和約會對象打開話匣子。</h6>
                            </div>
                            <div class="kk-p-li-pic">
                                <img src="imgs/phone-03.png" alt="">
                            </div>

                        </div>
                    </li>
                    <li class="kk-p-li ">
                        <div class="kk-p-li-content ">
                            <div class="kk-p-li-word">
                                <h4 class="kk-p-li-word1 phone-title-28">嗨。 <br>
                                    更好的我</h4>
                                <h6 class="kk-p-li-word2 phone-text-14">分析你的改變與熱門度，除了與理想對象相遇，同時也認識更好的自己。</h6>
                            </div>
                            <div class="kk-p-li-pic">
                                <img src="imgs/phone-03.png" alt="">
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
</div>
</section>

<!-- ----desktop---- -->
<section class="kk-pc-ultrain-section">
    <div class="ultrain1">
        <div class="ultrain">
            <div class="kk-pc-bar-all">
                <div class="kk-pc-bar"></div>
            </div>
            <div class="kk-pc-ultrain-content">

                <ul class="kk-pc-train list-unstyled d-flex">
                    <li class="kk-pc-li ">
                        <div class="kk-pc-li-content ">
                            <div class="kk-pc-li-word">
                                <h4 class="kk-pc-li-word1">想和理想對象約會吃飯?</h4>
                                <h6 class="kk-pc-li-word2 pc-sign-text-16">精準關鍵字配對，快速鎖定最適合你的對象。</h6>
                            </div>
                            <div class="kk-pc-li-pic">
                                <img src="imgs/dc-png-01.png" alt="">
                            </div>

                        </div>
                    </li>
                    <li class="kk-pc-li ">
                        <div class="kk-pc-li-content ">
                            <div class="kk-pc-li-word">
                                <h4 class="kk-pc-li-word1">今天晚餐不想一個人。</h4>
                                <h6 class="kk-pc-li-word2 pc-sign-text-16">建立聚會吸引相同頻率的對象，排除冗長的線上聊天，直接見面享受美食。</h6>
                            </div>
                            <div class="kk-pc-li-pic">
                                <img src="imgs/dc-png-02.png" alt="">
                            </div>

                        </div>
                    </li>
                    <li class="kk-pc-li ">
                        <div class="kk-pc-li-content ">
                            <div class="kk-pc-li-word">
                                <h4 class="kk-pc-li-word1">第一次見面會緊張？</h4>
                                <h6 class="kk-pc-li-word2 pc-sign-text-16">讓約會神助攻幫你一把，輕鬆和約會對象打開話匣子。</h6>
                            </div>
                            <div class="kk-pc-li-pic">
                                <img src="imgs/dc-png-04.png" alt="">
                            </div>

                        </div>
                    </li>
                    <li class="kk-pc-li ">
                        <div class="kk-pc-li-content ">
                            <div class="kk-pc-li-word">
                                <h4 class="kk-pc-li-word1">嗨。 <br>
                                    更好的我</h4>
                                <h6 class="kk-pc-li-word2 pc-sign-text-16">分析你的改變與熱門度，除了與理想對象相遇，同時也認識更好的自己。</h6>
                            </div>
                            <div class="kk-pc-li-pic">
                                <img src="imgs/dc-png-03.png" alt="">
                            </div>

                        </div>
                    </li>
                </ul>
                <li class="kk-pc-li gg-bottom">
                    <div class="kk-pc-li-content ">
                        <div class="kk-pc-li-word">
                            <h4 class="kk-pc-li-word1">嗨。 <br>
                                更好的我</h4>
                            <h6 class="kk-pc-li-word2 pc-sign-text-16">分析你的改變與熱門度，除了與理想對象相遇，同時也認識更好的自己。</h6>
                        </div>
                        <div class="kk-pc-li-pic">
                            <img src="imgs/dc-png-03.png" alt="">
                        </div>

                    </div>
                </li>
            </div>
        </div>
    </div>
</section>
<!-- ________________stepsection________________ -->

<!-- ----desktop---- -->

<section class="kk-desktop-stepall">

    <div class="kk-p-step-content">
        <h4 class="kk-pc-li-word3 phone-title-28">約會三步驟</h4>

        <div class="kk-p-stepcard-all">
            <div class="kk-p-stepcard-1">
                <div class="kk-p-lefttop ">
                    <div class="kk-p-lefttop-word1 d-flex">
                        <h5 class="kk-p-lefttop-word phone-small-tile-16">STEP1</h5>
                        <div class="kk-p-arrow">
                            <img src="imgs/change-btn-02.png" alt="">
                        </div>
                    </div>
                    <h5 class="kk-pc-li-word4 phone-middle-title-20 kk-step-title1">現在註冊</h5>
                </div>

                <div class="kk-p-circle-all">
                    <div class="kk-p-circle">
                        <div class="kk-p-img">
                            <img src="imgs/main-icon-01.png" alt="">
                        </div>
                    </div>

                    <div class="kk-p-circle-bottom">
                        <h5 class="kk-pc-li-word5 kk-p-middle-title kk-opacity-1">快速填寫資料 <br>
                            獲得個人戀愛分析</h5>
                    </div>
                </div>
            </div>

            <div class="kk-p-arrowdown-all">
                <div class="kk-p-arrowdown kk-p-arrowdown1">
                    <img src="imgs/bottomarrow-01.svg" alt="">
                </div>
            </div>

            <div class="kk-p-stepcard-1">
                <div class="kk-p-lefttop ">
                    <div class="kk-p-lefttop-word1 d-flex">
                        <h5 class="kk-p-lefttop-word phone-small-tile-16">STEP2</h5>
                        <div class="kk-p-arrow">
                            <img src="imgs/change-btn-02.png" alt="">
                        </div>
                    </div>
                    <h5 class="kk-pc-li-word4 phone-middle-title-20 kk-step-title2">寄送邀請卡</h5>
                </div>

                <div class="kk-p-circle-all">
                    <div class="kk-p-circle">
                        <div class="kk-p-img">
                            <img src="imgs/main-icon-02.png" alt="">
                        </div>
                    </div>

                    <div class="kk-p-circle-bottom">
                        <h5 class="kk-pc-li-word5 kk-p-middle-title kk-opacity-2">選擇時間與餐廳 <br>
                            邀約對方享受美好時光</h5>
                    </div>
                </div>
            </div>

            <div class="kk-p-arrowdown-all">
                <div class="kk-p-arrowdown kk-p-arrowdown2">
                    <img src="imgs/bottomarrow-01.svg" alt="">
                </div>
            </div>

            <div class="kk-p-stepcard-1">
                <div class="kk-p-lefttop ">
                    <div class="kk-p-lefttop-word1 d-flex">
                        <h5 class="kk-p-lefttop-word phone-small-tile-16">STEP3</h5>
                        <div class="kk-p-arrow">
                            <img src="imgs/change-btn-02.png" alt="">
                        </div>
                    </div>
                    <h5 class="kk-pc-li-word4 phone-middle-title-20 kk-step-title3">見面約會</h5>
                </div>

                <div class="kk-p-circle-all">
                    <div class="kk-p-circle">
                        <div class="kk-p-img">
                            <img src="imgs/main-icon-03.png" alt="">
                        </div>
                    </div>

                    <div class="kk-p-circle-bottom">
                        <h5 class="kk-pc-li-word5 kk-p-middle-title kk-opacity-3">配對成功後 <br>
                            與你的理想對象歡樂赴約</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>




</section>

<!-- ----phone---- -->

<section class="kk-p-stepall">

    <div class="kk-p-step-content">
        <h4 class="kk-pc-li-word3 phone-title-28">約會三步驟</h4>

        <div class="kk-p-stepcard-all">
            <div class="kk-p-stepcard-1">
                <div class="kk-p-lefttop ">
                    <div class="kk-p-lefttop-word1 d-flex">
                        <h5 class="kk-p-lefttop-word phone-small-tile-16">STEP1</h5>
                        <div class="kk-p-arrow">
                            <img src="imgs/change-btn-02.png" alt="">
                        </div>
                    </div>
                    <h5 class="kk-pc-li-word4 phone-middle-title-20 kk-step-title1">現在註冊</h5>
                </div>

                <div class="kk-p-circle-all">
                    <div class="kk-p-circle">
                        <div class="kk-p-img">
                            <img src="imgs/main-icon-01.png" alt="">
                        </div>
                    </div>

                    <div class="kk-p-circle-bottom">
                        <h5 class="kk-p-li-word5 kk-p-middle-title kk-p-opacity-1">快速填寫資料 <br>
                            獲得個人戀愛分析</h5>
                    </div>
                </div>
            </div>

            <div class="kk-p-arrowdown-all">
                <div class="kk-p-arrowdown kk-p-arrowdown1">
                    <img src="imgs/bottomarrow-01.svg" alt="">
                </div>
            </div>

            <div class="kk-p-stepcard-1">
                <div class="kk-p-lefttop ">
                    <div class="kk-p-lefttop-word1 d-flex">
                        <h5 class="kk-p-lefttop-word phone-small-tile-16">STEP2</h5>
                        <div class="kk-p-arrow">
                            <img src="imgs/change-btn-02.png" alt="">
                        </div>
                    </div>
                    <h5 class="kk-pc-li-word4 phone-middle-title-20 kk-step-title2">寄送邀請卡</h5>
                </div>

                <div class="kk-p-circle-all">
                    <div class="kk-p-circle">
                        <div class="kk-p-img">
                            <img src="imgs/main-icon-02.png" alt="">
                        </div>
                    </div>

                    <div class="kk-p-circle-bottom">
                        <h5 class="kk-p-li-word5 kk-p-middle-title kk-p-opacity-2">選擇時間與餐廳 <br>
                            邀約對方享受美好時光</h5>
                    </div>
                </div>
            </div>

            <div class="kk-p-arrowdown-all">
                <div class="kk-p-arrowdown kk-p-arrowdown2">
                    <img src="imgs/bottomarrow-01.svg" alt="">
                </div>
            </div>

            <div class="kk-p-stepcard-1">
                <div class="kk-p-lefttop ">
                    <div class="kk-p-lefttop-word1 d-flex">
                        <h5 class="kk-p-lefttop-word phone-small-tile-16">STEP3</h5>
                        <div class="kk-p-arrow">
                            <img src="imgs/change-btn-02.png" alt="">
                        </div>
                    </div>
                    <h5 class="kk-pc-li-word4 phone-middle-title-20 kk-step-title3">見面約會</h5>
                </div>

                <div class="kk-p-circle-all">
                    <div class="kk-p-circle">
                        <div class="kk-p-img">
                            <img src="imgs/main-icon-03.png" alt="">
                        </div>
                    </div>

                    <div class="kk-p-circle-bottom">
                        <h5 class="kk-p-li-word5 kk-p-middle-title kk-p-opacity-3">配對成功後 <br>
                            與你的理想對象歡樂赴約</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>




</section>

<!-- ________________endsection________________ -->

<!-- ----phone---- -->
<section class="kk-p-endsection">
    <div class="kk-circle-fill"></div>
    <div class="kk-p-circle-fill"></div>

    <div class="kk-p-endcontent">
        <h3 class="kk-pc-li-word6 phone-title-28">今晚一起吃頓飯?</h3>
        <h6 class="kk-pc-li-word8 pc-middle-title-20">現在就註冊 <br>
            與理想對象共進美好的一餐！</h6>
        <div class="kk-p-btn btn-pc-purple"><a href="Register_register.php">現在就註冊</a> </div>

    </div>


</section>




</div>


<!-- ________________ js_______________ -->
<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/scripts-lightbox.php' ?>
<script>
    const pctrain = $('.ultrain1').offset().top;
    const trainbottom = $('.ultrain1').offset().top + $('.kk-pc-ultrain-content').outerHeight() - ($('.kk-pc-li-content').outerWidth()) * 1.25;

    $(window).scroll(function() {
        if ($(window).scrollTop() >= pctrain) {
            $('.ultrain1').css('position', 'fixed');
            $('.ultrain1').addClass('ffix');
            $('.ultrain1').css('top', '0');

        } else {
            $('.ultrain1').css('position', 'relative');
            $('.ultrain1').removeClass('ffix');
            $('.ultrain1').css('top', '0');

        }
        if ($(window).scrollTop() >= trainbottom) {
            $('.ultrain1').css('position', 'relative');
            $('.ultrain1').removeClass('ffix');
            $('.ultrain1').css('top', '0');

        }
    })
</script>
<script>
    const ptraintop = $('.kk-p-ultrain-section').offset().top;
    const ptrainbottom = $('.kk-p-ultrain-section').offset().top + $('.kk-p-ultrain-section').outerHeight() - ($('.kk-p-li').outerHeight() * 1.1);
    const wmove = $('.kk-p-ultrain-section').outerHeight() - ($('.kk-p-li').outerHeight() * 1.2);

    $(window).scroll(function() {
        const nowsc = $(window).scrollTop() - $('.kk-p-ultrain-section').offset().top;

        $('.kk-p-bar').height(`${nowsc / wmove * 100}%`);
        if ($(window).scrollTop() >= ptraintop) {
            $('.kk-p-bar-all').css('position', 'fixed');
            console.log(ptrainbottom);
            $('.kk-p-bar-all').css('top', '45%');
        } else {
            $('.kk-p-bar-all').css('position', 'absolute');
            console.log(ptrainbottom);
            $('.kk-p-bar-all').css('top', '45%');
        }
        if ($(window).scrollTop() >= ptrainbottom) {
            $('.kk-p-bar-all').css('position', 'absolute');
            $('.kk-p-bar-all').css('top', '85%');

        }

    })
</script>
<script>
    $(window).scroll(function() {
        const nowscroll = $(window).scrollTop();
        if ($('.ultrain1').hasClass('ffix')) {

            const move = nowscroll - $('.kk-herobg').outerHeight();

            $('.kk-pc-bar').css('height', `${move / (trainbottom-pctrain) * 100}%`)
            $('.kk-pc-train').css('transform', `translateX(${-move}px)`);

        }

    })
</script>
<!-- _________________________________步驟伸縮＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿ -->
<script>
    $(window).scroll(function() {
        const nowscroll = $(window).scrollTop();
        const firstFunction = trainbottom * 1.12;
        const stepFunction = trainbottom * 1.15;
        const thirdFunction = trainbottom * 1.18;



        if (nowscroll > firstFunction) {
            $('.kk-step-title1').css('display', 'block')
            $('.kk-opacity-1').css('transform', 'translateY(0)').css('opacity', '1')
        } else {
            $('.kk-step-title1').css('display', 'none')
            $('.kk-opacity-1').css('transform', 'translateY(0)').css('opacity', '0')
        }

        if (nowscroll > stepFunction) {
            $('.kk-step-title2').css('display', 'block')
            $('.kk-opacity-2').css('transform', 'translateY(0)').css('opacity', '1')
            $('.kk-p-arrowdown1').css('display', 'block')
        } else {
            $('.kk-step-title2').css('display', 'none')
            $('.kk-opacity-2').css('transform', 'translateY(0)').css('opacity', '0')
            $('.kk-p-arrowdown1').css('display', 'none')
        }
        if (nowscroll > thirdFunction) {
            $('.kk-step-title3').css('display', 'block')
            $('.kk-opacity-3').css('transform', 'translateY(0)').css('opacity', '1')
            $('.kk-p-arrowdown2').css('display', 'block')
        } else {
            $('.kk-step-title3').css('display', 'none')
            $('.kk-opacity-3').css('transform', 'translateY(0)').css('opacity', '0')
            $('.kk-p-arrowdown2').css('display', 'none')
        }

        // <!-- _________________________________最後一張底色改變＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿ -->
        const endColor = trainbottom * 1.25;
        if (nowscroll > endColor) {
            $('.kk-circle-fill').css('width', '100%').css('height', '100%').css('transform', 'translateY(0)')

        } else {
            $('.kk-circle-fill').css('width', '0px').css('height', '0px')
        }

    })
</script>
<script>
    // <!-- _________________________________步驟伸縮-手機版＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿ -->

    $(window).scroll(function() {
        const nowscroll = $(window).scrollTop();
        const PfirstFunction = ptrainbottom * 1.2;
        const PstepFunction = ptrainbottom * 1.35;
        const PthirdFunction = ptrainbottom * 1.5;




        if (nowscroll > PfirstFunction) {
            $('.kk-step-title1').css('display', 'block')
            $('.kk-p-opacity-1').css('transform', 'translateY(0)').css('opacity', '1')
        } else {
            $('.kk-step-title1').css('display', 'none')
            $('.kk-p-opacity-1').css('transform', 'translateY(0)').css('opacity', '0')
        }

        if (nowscroll > PstepFunction) {
            $('.kk-step-title2').css('display', 'block')
            $('.kk-p-opacity-2').css('transform', 'translateY(0)').css('opacity', '1')

        } else {
            $('.kk-step-title2').css('display', 'none')
            $('.kk-p-opacity-2').css('transform', 'translateY(0)').css('opacity', '0')

        }
        if (nowscroll > PthirdFunction) {
            $('.kk-step-title3').css('display', 'block')
            $('.kk-p-opacity-3').css('transform', 'translateY(0)').css('opacity', '1')

        } else {
            $('.kk-step-title3').css('display', 'none')
            $('.kk-p-opacity-3').css('transform', 'translateY(0)').css('opacity', '0')

        }
        // <!-- _________________最後一張底色改變_手機版＿＿＿＿＿＿＿＿＿＿ -->
        const PendColor = ptrainbottom * 1.65;
        if (nowscroll > PendColor) {
            $('.kk-p-circle-fill').css('width', '100%').css('height', '100%').css('transform', 'translateY(0)')

        } else {
            $('.kk-p-circle-fill').css('width', '0px').css('height', '0px')
        }
    })
</script>
<script src="https://unpkg.com/wavesurfer.js"></script>
<script>
    var wavesurfer = WaveSurfer.create({
        container: '#waveform',
        waveColor: 'violet',
        progressColor: 'purple'
    });
    wavesurfer.load('audio.wav');
</script>
<script>
    window.requestAnimFrame = (function() {
        return window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            window.oRequestAnimationFrame ||
            window.msRequestAnimationFrame ||
            function(callback) {
                window.setTimeout(callback, 1000 / 60);
            };
    })();
    window.addEventListener('load', start, false);

    var c,
        b,
        w,
        h,
        msX,
        msY,
        midX,
        midY,
        num = 650,
        parts = [],
        begin = 50,
        repeat = 20,
        end = Math.PI * 2,
        force = null,
        msdn = false;


    function start() {
        c = document.getElementById('canv');
        b = c.getContext('2d');
        w = c.width = window.innerWidth;
        h = c.height = window.innerHeight;
        // h = document.querySelector('#canv');
        // h.style.height = window.innerHeight + 'px';
        // window.addEventListener('resize',function(){
        // h.style.height = this.window.innerHeight + 'px';
        // },false);
        // ________________ 哭拉______________ 
        midX = w / 2;
        midY = h / 2;
        force = Math.max(w, h) * 0.09;
        flow = begin;

        window.requestAnimFrame(create);
        run();
        console.log('hi')
    }

    function run() {
        window.requestAnimFrame(run);
        go();
    }

    function Part() {
        this.deg = 0;
        this.rad = 0;
        this.x = 0;
        this.y = 0;
        this.distX = 0;
        this.distY = 0;
        this.color = 'rgb(' + Math.floor(Math.random() * 130) + ',' + Math.floor(Math.random() * 50) + ',' + Math.floor(Math.random() * 100) + ')';
        this.size;
    }

    function create() {
        var n = num;
        while (n--) {
            var p = new Part();
            p.deg = Math.floor(Math.random() * 360);
            p.rad = Math.floor(Math.random() * w * 0.5);
            p.x = p.distX = Math.floor(Math.random() * w);
            p.y = p.distY = Math.floor(Math.random() * h);
            p.size = 1 + Math.floor(Math.random() * (p.rad * 0.055));
            parts[n] = p;
        }
        c.onmousemove = msmv;
        c.onmousedown = msdn;
        c.onmouseup = msup;

        var int = setInterval(function() {
            flow--;
            if (flow === repeat) clearInterval(int);
        }, 20);
    }

    function go() {
        b.globalCompositeOperation = 'source-over';
        b.fillStyle = 'hsla(242, 30%, 5%, .55)';
        b.fillRect(0, 0, w, h);
        b.globalCompositeOperation = 'lighter';
        var mx = msX;
        var my = msY;
        var bounds = force;
        if (msdn) {
            bounds = force * 2;
        }
        var n = num;
        while (n--) {
            var p = parts[n];
            var radi = Math.PI / 180 * p.deg;
            p.distX = midX + p.rad * Math.cos(radi);
            p.distY = midY + p.rad * Math.sin(radi) * 0.4;
            if (mx && my) {
                var react = Math.floor((bounds * 0.5) + Math.random() * (bounds * 0.9));
                if (p.distX - mx > 0 &&
                    p.distX - mx < bounds &&
                    p.distY - my > 0 &&
                    p.distY - my < bounds) {
                    p.distX += react;
                    p.distY += react;
                } else if (p.distX - mx > 0 &&
                    p.distX - mx < bounds &&
                    p.distY - my < 0 &&
                    p.distY - my > -bounds) {
                    p.distX += react;
                    p.distY -= react;
                } else if (p.distX - mx < 0 &&
                    p.distX - mx > -bounds &&
                    p.distY - my > 0 &&
                    p.distY - my < bounds) {
                    p.distX -= react;
                    p.distY += react;
                } else if (p.distX - mx < 0 &&
                    p.distX - mx > -bounds &&
                    p.distY - my < 0 &&
                    p.distY - my > -bounds) {
                    p.distY -= react;
                    p.distY -= react;
                }
            }
            p.x += ((p.distX - p.x) / flow);
            p.y += ((p.distY - p.y) / flow);
            var x = p.x;
            var y = p.y;
            var s = p.size * (p.y * 1.5 / h);
            if (s < 0.1) {
                s = 0;
            }
            b.beginPath();
            b.fillStyle = p.color;
            b.arc(x, y, s, 0, end, true);
            b.fill();
            b.closePath();
            var vary;
            if (p.size < 2) {
                vary = 4;
            } else if (p.size < 3) {
                vary = 3;
            } else if (p.size < 4) {
                vary = 2;
            } else {
                vary = 1;
            }
            vary *= (p.y / (h * 0.9));
            p.deg += vary;
            p.deg = p.deg % 360;
        }
    }

    function msmv(e) {
        var p = getPos(e.target);
        var sX = window.pageXOffset;
        var sY = window.pageYOffset;
        msX = e.clientX - p.x + sX;
        msY = e.clientY - p.y + sY;
    }

    function msdn(e) {
        msdn = true;
    }

    function msup(e) {
        msdn = false;
    }

    function getPos(el) {
        var cosmo = {};
        cosmo.x = el.offsetLeft;
        cosmo.y = el.offsetTop;
        while (el.offsetParent) {
            el = el.offsetParent;
            cosmo.x += el.offsetLeft;
            cosmo.y += el.offsetTop;
        }
        return cosmo;
    }
</script>
<script>
    $(function() {
        const keyRegisterEmail = 'registerEmail',
            registerEmail = 'needyandhorny+register@outlook.com',
            keyRegisterName = 'registerName',
            registerName = 'Register Love',
            keyPasswordEmail = 'passwordEmail',
            passwordEmail = 'needyandhorny+password@outlook.com',
            keyPasswordName = 'passwordName',
            passwordName = 'Lonely yet lost password',
            keyOrderEmail = 'passwordEmail',
            orderEmail = 'needyandhorny+order@outlook.com',
            keyOrderName = 'passwordName',
            orderName = 'Just Ordered Love',
            userName = 'Ava',
            userOccupation = '前端工程師',
            userHobby1 = '衝浪',
            userHobby2 = '下午茶',
            userHobby3 = '酒吧',
            userHobby4 = '游泳',
            userHobby5 = 'Netflix',
            userLocation = '台北市',
            userAge = '28',
            userInvitationDate = '2022/6/10',
            userInvitationTime = '18:00',
            userInvitationPlace = '10491台北市中山區林森北路119巷No.74號',
            userInvitationSubject = '道地日本居酒屋小酌',
            userInvitationDesc = '嗨！我是Ava，加班好幾個禮拜後，專案終於完成了！想約你一起去吃很道地的日式居酒屋，小酌慶祝一下~',
            userInvitationPic = '/mate/source/imgs/userInvitationPic.jpg',
            userMeetupSubject = '前端工程師咖啡廳小聚',
            userMeetupDate = '2022/6/12',
            userMeetupTime = '10:00',
            userMeetupType = '多人',
            userMeetupPeople = '6',
            userMeetupWhoPay = '我請客',
            userMeetupBudegt = '300',
            userMeetupDesc = '我的前端工程師朋友開新的咖啡廳了！聽說朋友沖的咖啡和做的蛋糕都是一絕，想邀請大家一起來品嚐。朋友開的咖啡廳是在小巷子裡，老屋改造非常復古，是讓人非常放鬆的空間，快來跟我一起去享受美好的咖啡與時光！',
            userMeetupLocation = '100台北市中正區新生南路一段60號',
            userMeetupPhone = '0223516425',
            userMeetupStartDate = ' 2022年06月12日, 10:00',
            userMeetupStartTime = '10:00',
            userMeetupEndDate = '2022年06月12日, 14:00',
            userMeetupEndTime = '14:00',
            userMeetupAuditDate = '2022年06月10日',
            userMeetupAuditTime = '20:00',
            userMeetupPic = '/mate/source/imgs/userMeetupPic.jpg',
            userInvitationCount = '8',
            userMeetupCount = '7';

        setCookie(keyRegisterEmail, registerEmail);
        setCookie(keyRegisterName, registerName);
        setCookie(keyPasswordEmail, passwordEmail);
        setCookie(keyPasswordName, passwordName);
        setCookie(keyOrderEmail, orderEmail);
        setCookie(keyOrderName, orderName);
        setCookie("userName", userName);
        setCookie("userOccupation", userOccupation);
        setCookie("userHobby1", userHobby1);
        setCookie("userHobby2", userHobby2);
        setCookie("userHobby3", userHobby3);
        setCookie("userHobby4", userHobby4);
        setCookie("userHobby5", userHobby5);
        setCookie("userLocation", userLocation);
        setCookie("userAge", userAge);
        setCookie("userInvitationDate", userInvitationDate);
        setCookie("userInvitationTime", userInvitationTime);
        setCookie("userInvitationPlace", userInvitationPlace);
        setCookie("userInvitationSubject", userInvitationSubject);
        setCookie("userInvitationDesc", userInvitationDesc);
        setCookie("userInvitationPic", userInvitationPic);
        setCookie("userMeetupSubject", userMeetupSubject);
        setCookie("userMeetupDate", userMeetupDate);
        setCookie("userMeetupTime", userMeetupTime);
        setCookie("userMeetupType", userMeetupType);
        setCookie("userMeetupPeople", userMeetupPeople);
        setCookie("userMeetupWhoPay", userMeetupWhoPay);
        setCookie("userMeetupBudegt", userMeetupBudegt);
        setCookie("userMeetupDesc", userMeetupDesc);
        setCookie("userMeetupLocation", userMeetupLocation);
        setCookie("userMeetupPhone", userMeetupPhone);
        setCookie("userMeetupStartDate", userMeetupStartDate);
        setCookie("userMeetupStartTime", userMeetupStartTime);
        setCookie("userMeetupEndDate", userMeetupEndDate);
        setCookie("userMeetupEndTime", userMeetupEndTime);
        setCookie("userMeetupAuditDate", userMeetupAuditDate);
        setCookie("userMeetupAuditTime", userMeetupAuditTime);
        setCookie("userMeetupPic", userMeetupPic);
        setCookie("userInvitationCount", userInvitationCount);
        setCookie("userMeetupCount", userMeetupCount);
    });

    function setCookie(key, value) {
        document.cookie = key + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        document.cookie = key + "=" + value.trim();
    }
</script>


<?php include __DIR__ . '/parts/html-foot.php' ?>