
<style>
    /* =========================================================
   BHAVI CREATIONS PREMIUM CHATBOT
========================================================= */

    :root {
        --chat-green: #006B4A;
        --chat-green-dark: #003A24;
        --chat-gold: #C89A3D;
        --chat-gold-dark: #986820;
        --chat-gold-light: #E8C978;
        --chat-white: #ffffff;
    }


    /* =========================================================
   MAIN
========================================================= */

    .chat-bot {
        position: fixed;
        right: 25px;
        bottom: 25px;
        z-index: 999999;
        font-family: Inter, Arial, sans-serif;
    }


    /* =========================================================
   FLOATING BUTTON
========================================================= */

    .chat-bot-toggle {
        position: relative;

        width: 66px;
        height: 66px;

        border: none;
        outline: none;

        border-radius: 22px;

        display: flex;
        align-items: center;
        justify-content: center;

        cursor: pointer;

        color: #fff;

        font-size: 26px;

        background:
            radial-gradient(circle at 30% 20%,
                rgba(232, 199, 120, .20),
                transparent 32%),
            linear-gradient(135deg,
                #006B4A,
                #003A24);

        border:
            1px solid rgba(232, 199, 120, .25);

        box-shadow:
            0 16px 40px rgba(0, 58, 36, .28),
            0 6px 18px rgba(200, 154, 61, .14);

        transition: .35s ease;

        animation:
            chat-bot-float 3s ease-in-out infinite;
    }


    .chat-bot-toggle:hover {
        transform:
            translateY(-5px) rotate(-3deg);

        box-shadow:
            0 22px 50px rgba(0, 58, 36, .36),
            0 8px 25px rgba(200, 154, 61, .20);
    }


    .chat-bot-toggle::before {
        content: "";

        position: absolute;

        inset: -5px;

        border-radius: 26px;

        border:
            1px solid rgba(232, 199, 120, .35);

        animation:
            chat-bot-pulse 2s infinite;

        pointer-events: none;
    }


    .chat-bot-chat-icon,
    .chat-bot-close-icon {
        position: absolute;

        transition:
            opacity .3s ease,
            transform .35s ease;
    }


    .chat-bot-close-icon {
        opacity: 0;

        transform:
            rotate(-90deg) scale(.6);
    }


    .chat-bot.active .chat-bot-chat-icon {
        opacity: 0;

        transform:
            rotate(90deg) scale(.6);
    }


    .chat-bot.active .chat-bot-close-icon {
        opacity: 1;

        transform:
            rotate(0) scale(1);
    }


    .chat-bot-notification {
        position: absolute;

        top: 2px;
        right: 2px;

        width: 14px;
        height: 14px;

        border-radius: 50%;

        background: #E8C978;

        border:
            3px solid #fff;

        pointer-events: none;

        animation:
            chat-bot-notify 1.6s infinite;
    }


    /* =========================================================
   CHAT BOX
========================================================= */

    .chat-bot-box {
        position: absolute;

        right: 0;
        bottom: 85px;

        width: 410px;
        height: 625px;

        border-radius: 28px;

        overflow: hidden;

        background:
            rgba(255, 255, 255, .98);

        border:
            1px solid rgba(200, 154, 61, .16);

        box-shadow:
            0 35px 90px rgba(0, 40, 24, .22),
            0 10px 30px rgba(200, 154, 61, .06);

        opacity: 0;
        visibility: hidden;

        transform:
            translateY(30px) scale(.93);

        transform-origin: right bottom;

        transition:
            .45s cubic-bezier(.16, 1, .3, 1);
    }


    .chat-bot.active .chat-bot-box {
        opacity: 1;
        visibility: visible;

        transform:
            translateY(0) scale(1);
    }


    /* =========================================================
   HEADER
========================================================= */

    .chat-bot-header {
        position: relative;

        min-height: 105px;

        padding:
            21px;

        overflow: hidden;

        color: #fff;

        background:

            radial-gradient(circle at 88% 5%,
                rgba(232, 199, 120, .24),
                transparent 34%),

            linear-gradient(135deg,
                #003A24,
                #006B4A 58%,
                #003A24);

        border-bottom:
            1px solid rgba(232, 199, 120, .15);
    }


    .chat-bot-header::before {
        content: "";

        position: absolute;

        width: 180px;
        height: 180px;

        top: -95px;
        right: -90px;

        border-radius: 50%;

        border:
            1px solid rgba(232, 199, 120, .15);
    }


    .chat-bot-header::after {
        content: "";

        position: absolute;

        left: 20px;
        right: 20px;
        bottom: 0;

        height: 1px;

        background:
            linear-gradient(90deg,
                transparent,
                rgba(232, 199, 120, .65),
                transparent);
    }


    .chat-bot-header-top {
        position: relative;

        z-index: 3;

        display: flex;
        align-items: center;

        gap: 13px;
    }


    .chat-bot-brand-icon {
        width: 53px;
        height: 53px;

        min-width: 53px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 16px;

        color: #E8C978;

        background:
            rgba(232, 199, 120, .10);

        border:
            1px solid rgba(232, 199, 120, .24);

        font-size: 22px;
    }


    .chat-bot-header-text h5 {
        margin:
            0 0 4px;

        color: #fff;

        font-size: 18px;

        font-weight: 700;
    }


    .chat-bot-header-text p {
        margin: 0;

        color:
            rgba(255, 255, 255, .75);

        font-size: 11.5px;
    }


    .chat-bot-status {
        display: inline-flex;

        align-items: center;

        gap: 5px;
    }


    .chat-bot-status-dot {
        width: 7px;
        height: 7px;

        border-radius: 50%;

        background: #E8C978;

        box-shadow:
            0 0 0 4px rgba(232, 199, 120, .13);
    }


    /* =========================================================
   BODY
========================================================= */

    .chat-bot-body {
        height: 440px;

        padding: 18px;

        overflow-y: auto;

        scroll-behavior: smooth;

        background:

            radial-gradient(circle at 100% 0%,
                rgba(232, 199, 120, .10),
                transparent 27%),

            linear-gradient(180deg,
                #fafcfb,
                #f3f8f5);
    }


    .chat-bot-body::-webkit-scrollbar {
        width: 4px;
    }


    .chat-bot-body::-webkit-scrollbar-thumb {
        background:
            linear-gradient(#E8C978,
                #C89A3D);

        border-radius: 20px;
    }


    /* =========================================================
   MESSAGE
========================================================= */

    .chat-bot-message {
        display: flex;

        margin-bottom: 14px;

        animation:
            chat-bot-message-in .45s ease both;
    }


    .chat-bot-message.bot {
        justify-content: flex-start;
    }


    .chat-bot-message.user {
        justify-content: flex-end;
    }


    .chat-bot-message-content {
        max-width: 92%;

        padding: 16px;

        border-radius: 18px;

        font-size: 12.5px;

        line-height: 1.65;
    }


    .chat-bot-message.bot .chat-bot-message-content {

        color: #45584e;

        background: #fff;

        border:
            1px solid rgba(0, 107, 74, .09);

        border-bottom-left-radius: 6px;

        box-shadow:
            0 10px 28px rgba(0, 58, 36, .05);
    }


    .chat-bot-message.user .chat-bot-message-content {

        color: #fff;

        background:
            linear-gradient(135deg,
                #006B4A,
                #003A24);

        border-bottom-right-radius: 6px;
    }


    /* =========================================================
   INTRO
========================================================= */

    .chat-bot-intro-label {
        display: inline-flex;

        align-items: center;

        gap: 5px;

        margin-bottom: 9px;

        padding:
            5px 9px;

        border-radius: 50px;

        color: #986820;

        background:
            rgba(232, 199, 120, .18);

        border:
            1px solid rgba(200, 154, 61, .18);

        font-size: 9.5px;

        font-weight: 700;

        letter-spacing: .7px;

        text-transform: uppercase;
    }


    .chat-bot-intro-title {
        display: block;

        margin-bottom: 6px;

        color: #003A24;

        font-size: 17px;

        font-weight: 750;
    }


    .chat-bot-intro-description {
        color: #607168;

        font-size: 12px;

        line-height: 1.7;
    }


    .chat-bot-question {
        display: block;

        margin-top: 16px;
        margin-bottom: 4px;

        color: #003A24;

        font-size: 12.5px;

        font-weight: 700;
    }


    /* =========================================================
   SERVICES
========================================================= */

    .chat-bot-services {
        display: grid;

        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 10px;

        margin-top: 12px;
    }


    .chat-bot-service-btn {
        position: relative;

        min-height: 62px;

        display: flex;

        align-items: center;

        gap: 9px;

        padding: 10px;

        border-radius: 15px;

        border:
            1px solid rgba(0, 107, 74, .10);

        background:
            linear-gradient(180deg,
                #fff,
                #f8fbf9);

        color: #33483e;

        cursor: pointer;

        overflow: hidden;

        text-align: left;

        transition: .28s ease;
    }


    .chat-bot-service-icon {
        width: 37px;
        height: 37px;

        min-width: 37px;

        border-radius: 11px;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #006B4A;

        background:
            rgba(232, 199, 120, .17);

        border:
            1px solid rgba(200, 154, 61, .13);

        transition: .3s ease;
    }


    .chat-bot-service-title {
        display: block;

        color: #003A24;

        font-size: 11.5px;

        font-weight: 700;
    }


    .chat-bot-service-small {
        display: block;

        margin-top: 2px;

        color: #829087;

        font-size: 8.8px;
    }


    .chat-bot-service-btn:hover {
        transform:
            translateY(-4px);

        border-color:
            rgba(232, 199, 120, .35);

        background:
            linear-gradient(135deg,
                #006B4A,
                #003A24);

        box-shadow:
            0 13px 28px rgba(0, 58, 36, .20);
    }


    .chat-bot-service-btn:hover .chat-bot-service-title,

    .chat-bot-service-btn:hover .chat-bot-service-small {
        color: #fff;
    }


    .chat-bot-service-btn:hover .chat-bot-service-icon {
        color: #003A24;

        background:
            linear-gradient(135deg,
                #E8C978,
                #C89A3D);
    }


    /* =========================================================
   ACTIONS
========================================================= */

    .chat-bot-actions {
        margin-top: 13px;

        display: flex;

        flex-direction: column;

        gap: 8px;
    }


    .chat-bot-contact-row {
        display: grid;

        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 8px;
    }


    .chat-bot-action-btn {
        min-height: 42px;

        width: 100%;

        display: flex;

        align-items: center;
        justify-content: center;

        gap: 7px;

        padding:
            9px 10px;

        border-radius: 12px;

        font-family: inherit;

        font-size: 11.5px;

        font-weight: 650;

        text-decoration: none;

        cursor: pointer;

        transition: .25s ease;

        appearance: none;

        -webkit-appearance: none;
    }


    /* more info */

    .chat-bot-more-btn {
        border: none;

        color: #fff;

        background:
            linear-gradient(135deg,
                #006B4A,
                #003A24);
    }


    .chat-bot-more-btn:hover {
        color: #003A24;

        background:
            linear-gradient(135deg,
                #E8C978,
                #C89A3D);

        transform:
            translateY(-2px);
    }


    /* call */

    .chat-bot-call-btn {
        color: #006B4A;

        background:
            rgba(0, 107, 74, .06);

        border:
            1px solid rgba(0, 107, 74, .18);
    }


    .chat-bot-call-btn:hover {
        color: #fff;

        background:
            linear-gradient(135deg,
                #006B4A,
                #003A24);

        transform:
            translateY(-2px);
    }


    /* mail */

    .chat-bot-mail-btn {
        color: #986820;

        background:
            rgba(232, 199, 120, .16);

        border:
            1px solid rgba(200, 154, 61, .24);
    }


    .chat-bot-mail-btn:hover {
        color: #003A24;

        background:
            linear-gradient(135deg,
                #E8C978,
                #C89A3D);

        transform:
            translateY(-2px);
    }


    /* =========================================================
   TYPING
========================================================= */

    .chat-bot-typing {
        display: flex;

        width: fit-content;

        gap: 4px;

        padding:
            11px 15px;

        margin-bottom: 13px;

        background: #fff;

        border:
            1px solid rgba(0, 107, 74, .10);

        border-radius:
            15px 15px 15px 5px;
    }


    .chat-bot-typing span {
        width: 6px;
        height: 6px;

        border-radius: 50%;

        animation:
            chat-bot-typing 1.1s infinite ease-in-out;
    }


    .chat-bot-typing span:nth-child(1) {
        background: #006B4A;
    }

    .chat-bot-typing span:nth-child(2) {
        background: #C89A3D;
        animation-delay: .15s;
    }

    .chat-bot-typing span:nth-child(3) {
        background: #986820;
        animation-delay: .30s;
    }


    /* =========================================================
   FOOTER
========================================================= */

    .chat-bot-footer {
        min-height: 80px;

        padding:
            10px 16px;

        background: #fff;

        border-top:
            1px solid rgba(0, 107, 74, .10);
    }


    .chat-bot-footer small {
        display: block;

        margin-top: 6px;

        text-align: center;

        color: #7d8b83;

        font-size: 9px;
    }


    /* =========================================================
   ANIMATIONS
========================================================= */

    @keyframes chat-bot-float {

        0%,
        100% {
            transform:
                translateY(0);
        }

        50% {
            transform:
                translateY(-6px);
        }
    }


    @keyframes chat-bot-pulse {

        0% {
            opacity: .65;
            transform: scale(.95);
        }

        100% {
            opacity: 0;
            transform: scale(1.35);
        }
    }


    @keyframes chat-bot-notify {

        0%,
        100% {
            box-shadow:
                0 0 0 0 rgba(232, 199, 120, .4);
        }

        50% {
            box-shadow:
                0 0 0 7px rgba(232, 199, 120, 0);
        }
    }


    @keyframes chat-bot-message-in {

        from {
            opacity: 0;

            transform:
                translateY(12px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }
    }


    @keyframes chat-bot-typing {

        0%,
        60%,
        100% {
            transform:
                translateY(0);

            opacity: .35;
        }

        30% {
            transform:
                translateY(-4px);

            opacity: 1;
        }
    }


    /* =========================================================
   MOBILE
========================================================= */

    @media(max-width:575.98px) {

        .chat-bot {
            right: 12px;
            bottom: 12px;
        }

        .chat-bot-toggle {
            width: 62px;
            height: 62px;

            border-radius: 20px;

            font-size: 24px;
        }

        .chat-bot-box {
            position: fixed;

            left: 10px;
            right: 10px;

            bottom: 82px;

            width: auto;

            height:
                calc(100dvh - 105px);

            max-height: 690px;

            min-height: 520px;

            border-radius: 22px;
        }

        .chat-bot-header {
            min-height: 105px;

            padding:
                18px 17px;
        }

        .chat-bot-body {
            height:
                calc(100% - 185px);

            padding:
                16px 14px;
        }

        .chat-bot-message-content {
            max-width: 100%;

            font-size: 13px;
        }

        .chat-bot-services {
            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 9px;
        }

        .chat-bot-service-btn {
            min-height: 68px;

            padding:
                10px 9px;
        }

        .chat-bot-service-icon {
            width: 38px;
            height: 38px;

            min-width: 38px;
        }

        .chat-bot-service-title {
            font-size: 11.5px;
        }

        .chat-bot-service-small {
            font-size: 8.8px;
        }

        .chat-bot-action-btn {
            min-height: 44px;

            font-size: 12px;
        }

    }


    @media(max-width:390px) {

        .chat-bot-box {
            left: 8px;
            right: 8px;

            bottom: 78px;
        }

        .chat-bot-services {
            gap: 7px;
        }

        .chat-bot-service-btn {
            min-height: 66px;

            padding:
                9px 7px;
        }

        .chat-bot-service-title {
            font-size: 10.8px;
        }

        .chat-bot-service-small {
            font-size: 8px;
        }

    }


    @media(max-width:340px) {

        .chat-bot-services {
            grid-template-columns: 1fr;
        }

    }
</style>


<!-- =========================================================
     HTML
========================================================= -->

<div class="chat-bot"
    id="chatBot">


    <div class="chat-bot-box">


        <!-- HEADER -->

        <div class="chat-bot-header">

            <div class="chat-bot-header-top">

                <div class="chat-bot-brand-icon">

                    <i class="bi bi-stars"></i>

                </div>


                <div class="chat-bot-header-text">

                    <h5>
                        Bhavi Creations PvtLtd
                    </h5>

                    <p>

                        <span class="chat-bot-status">

                            <span class="chat-bot-status-dot"></span>

                            Online

                        </span>

                        &nbsp;•&nbsp;

                        Creative & Digital Solutions

                    </p>

                </div>

            </div>

        </div>


        <!-- BODY -->

        <div class="chat-bot-body"
            id="chatBotBody">


            <div class="chat-bot-message bot">

                <div class="chat-bot-message-content">


                    <span class="chat-bot-intro-label">

                        <i class="bi bi-stars"></i>

                        Creative Digital Partner

                    </span>


                    <span class="chat-bot-intro-title">

                        Hello 👋

                    </span>


                    <div class="chat-bot-intro-description">

                        Welcome to
                        <strong>Bhavi Creations Pvt Ltd.</strong>

                        We build powerful digital experiences
                        that help brands look professional,
                        connect better and grow online.

                    </div>


                    <span class="chat-bot-question">

                        How can we help your brand today?

                    </span>


                    <div class="chat-bot-services">


                        <button
                            type="button"
                            class="chat-bot-service-btn"
                            onclick="chatBotService('Website')">

                            <span class="chat-bot-service-icon">
                                <i class="bi bi-window"></i>
                            </span>

                            <span>

                                <span class="chat-bot-service-title">
                                    Website
                                </span>

                                <span class="chat-bot-service-small">
                                    Design & Development
                                </span>

                            </span>

                        </button>


                        <button
                            type="button"
                            class="chat-bot-service-btn"
                            onclick="chatBotService('App')">

                            <span class="chat-bot-service-icon">
                                <i class="bi bi-phone"></i>
                            </span>

                            <span>

                                <span class="chat-bot-service-title">
                                    Mobile App
                                </span>

                                <span class="chat-bot-service-small">
                                    Modern Applications
                                </span>

                            </span>

                        </button>


                        <button
                            type="button"
                            class="chat-bot-service-btn"
                            onclick="chatBotService('Software')">

                            <span class="chat-bot-service-icon">
                                <i class="bi bi-code-square"></i>
                            </span>

                            <span>

                                <span class="chat-bot-service-title">
                                    Software
                                </span>

                                <span class="chat-bot-service-small">
                                    Custom Solutions
                                </span>

                            </span>

                        </button>


                        <button
                            type="button"
                            class="chat-bot-service-btn"
                            onclick="chatBotService('Social Media')">

                            <span class="chat-bot-service-icon">
                                <i class="bi bi-instagram"></i>
                            </span>

                            <span>

                                <span class="chat-bot-service-title">
                                    Social Media
                                </span>

                                <span class="chat-bot-service-small">
                                    Content & Growth
                                </span>

                            </span>

                        </button>


                        <button
                            type="button"
                            class="chat-bot-service-btn"
                            onclick="chatBotService('SEO')">

                            <span class="chat-bot-service-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </span>

                            <span>

                                <span class="chat-bot-service-title">
                                    SEO
                                </span>

                                <span class="chat-bot-service-small">
                                    Search Visibility
                                </span>

                            </span>

                        </button>


                        <button
                            type="button"
                            class="chat-bot-service-btn"
                            onclick="chatBotService('Graphic Design')">

                            <span class="chat-bot-service-icon">
                                <i class="bi bi-palette2"></i>
                            </span>

                            <span>

                                <span class="chat-bot-service-title">
                                    Graphic Design
                                </span>

                                <span class="chat-bot-service-small">
                                    Creative Visuals
                                </span>

                            </span>

                        </button>


                        <button
                            type="button"
                            class="chat-bot-service-btn"
                            onclick="chatBotService('Video Editing')">

                            <span class="chat-bot-service-icon">
                                <i class="bi bi-play-btn"></i>
                            </span>

                            <span>

                                <span class="chat-bot-service-title">
                                    Video Editing
                                </span>

                                <span class="chat-bot-service-small">
                                    Reels & Videos
                                </span>

                            </span>

                        </button>


                        <button
                            type="button"
                            class="chat-bot-service-btn"
                            onclick="chatBotService('Branding')">

                            <span class="chat-bot-service-icon">
                                <i class="bi bi-gem"></i>
                            </span>

                            <span>

                                <span class="chat-bot-service-title">
                                    Branding
                                </span>

                                <span class="chat-bot-service-small">
                                    Identity & Strategy
                                </span>

                            </span>

                        </button>


                    </div>

                </div>

            </div>

        </div>


        <!-- =================================================
             FOOTER - FIXED CALL & MAIL
        ================================================== -->

        <div class="chat-bot-footer">


            <div class="chat-bot-contact-row">


                <button
                    type="button"
                    class="chat-bot-action-btn chat-bot-call-btn"
                    onclick="chatBotCall(event)">

                    <i class="bi bi-telephone-fill"></i>

                    Call Us

                </button>


                <button
                    type="button"
                    class="chat-bot-action-btn chat-bot-mail-btn"
                    onclick="chatBotMail(event,'General Enquiry')">

                    <i class="bi bi-envelope-fill"></i>

                    Mail Us

                </button>


            </div>


            <small>

                Powered by Bhavi Creations Pvt Ltd

            </small>

        </div>


    </div>


    <!-- FLOATING BUTTON -->

    <button
        type="button"
        class="chat-bot-toggle"
        onclick="chatBotToggle(event)"
        aria-label="Open Bhavi Creations Chat">


        <i class="
            bi bi-chat-dots-fill
            chat-bot-chat-icon">
        </i>


        <i class="
            bi bi-x-lg
            chat-bot-close-icon">
        </i>


        <span class="chat-bot-notification"></span>


    </button>


</div>


<script>
    /* =========================================================
   ELEMENTS
========================================================= */

    const chatBot =
        document.getElementById("chatBot");

    const chatBotBody =
        document.getElementById("chatBotBody");


    /* =========================================================
       OPEN / CLOSE
    ========================================================= */

    function chatBotToggle(event) {

        if (event) {
            event.preventDefault();
            event.stopPropagation();
        }

        chatBot.classList.toggle("active");


        const notification =
            document.querySelector(
                ".chat-bot-notification"
            );


        if (
            notification &&
            chatBot.classList.contains("active")
        ) {

            notification.style.display =
                "none";

        }

    }


    /* =========================================================
       FIXED DIRECT CALL
    ========================================================= */

    function chatBotCall(event) {

        if (event) {

            event.preventDefault();

            event.stopPropagation();

        }


        const phoneNumber =
            "+919642343434";


        /* DIRECT PHONE DIALER */

        window.location.href =
            "tel:" + phoneNumber;

    }


    /* =========================================================
       FIXED DIRECT MAIL
    ========================================================= */

    function chatBotMail(event, subject) {

        if (event) {

            event.preventDefault();

            event.stopPropagation();

        }


        const email =
            "bhavicreations2022@gmail.com";


        const mailSubject =
            subject ?
            subject + " - Bhavi Creations" :
            "Enquiry - Bhavi Creations";


        const mailLink =

            "mailto:" +
            email +
            "?subject=" +
            encodeURIComponent(mailSubject);


        /* DIRECT EMAIL APPLICATION */

        window.open(mailLink, "_blank", "noopener,noreferrer");

    }


    /* =========================================================
       SERVICES
    ========================================================= */

    const chatBotServiceDetails = {


        Website: {

            icon: "🌐",

            title: "Website Design & Development",

            text: "We design professional, responsive and high-performing websites that give your brand a strong digital presence.",

            points: [
                "Business Websites",
                "E-commerce Websites",
                "Responsive UI/UX",
                "Custom Development"
            ]

        },


        App: {

            icon: "📱",

            title: "Mobile App Development",

            text: "We build modern mobile applications focused on performance, usability and your business requirements.",

            points: [
                "Android Applications",
                "Business Applications",
                "Custom App Solutions",
                "Modern UI/UX"
            ]

        },


        Software: {

            icon: "💻",

            title: "Custom Software Solutions",

            text: "We develop business-focused software solutions that improve operations, automation and productivity.",

            points: [
                "Custom Software",
                "CRM Solutions",
                "Business Dashboards",
                "Workflow Automation"
            ]

        },


        "Social Media": {

            icon: "📲",

            title: "Social Media Marketing",

            text: "We create strategies, content and campaigns that help your brand build visibility and connect with the right audience.",

            points: [
                "Social Media Management",
                "Creative Content",
                "Reels & Posts",
                "Digital Campaigns"
            ]

        },


        SEO: {

            icon: "📈",

            title: "Search Engine Optimization",

            text: "We improve your search visibility and organic presence through structured and performance-focused SEO strategies.",

            points: [
                "On-Page SEO",
                "Technical SEO",
                "Local SEO",
                "Keyword Strategy"
            ]

        },


        "Graphic Design": {

            icon: "🎨",

            title: "Creative Graphic Design",

            text: "We create premium visual content that communicates your brand professionally across digital platforms.",

            points: [
                "Social Media Creatives",
                "Brand Visuals",
                "Marketing Designs",
                "Promotional Creatives"
            ]

        },


        "Video Editing": {

            icon: "🎬",

            title: "Professional Video Editing",

            text: "We create engaging videos and reels designed for social media, promotions and brand communication.",

            points: [
                "Instagram Reels",
                "Corporate Videos",
                "Promotional Videos",
                "YouTube Content"
            ]

        },


        Branding: {

            icon: "✨",

            title: "Brand Identity & Strategy",

            text: "We create memorable and consistent brand identities through design, strategy and digital communication.",

            points: [
                "Brand Identity",
                "Logo & Visual System",
                "Creative Strategy",
                "Digital Branding"
            ]

        }

    };


    /* =========================================================
       SERVICE CLICK
    ========================================================= */

    function chatBotService(service) {

        const details =
            chatBotServiceDetails[service];


        const userMessage =
            document.createElement("div");


        userMessage.className =
            "chat-bot-message user";


        userMessage.innerHTML = `

        <div class="chat-bot-message-content">

            ${service}

        </div>

    `;


        chatBotBody.appendChild(
            userMessage
        );


        chatBotScroll();


        chatBotShowTyping();


        setTimeout(function() {


            chatBotRemoveTyping();


            let points = "";


            details.points.forEach(
                function(point) {

                    points += `

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:6px;
                        margin-top:5px;
                    ">

                        <i
                            class="bi bi-check-circle-fill"
                            style="
                                color:#006B4A;
                                font-size:10px;
                            ">
                        </i>

                        <span>

                            ${point}

                        </span>

                    </div>

                `;

                }
            );


            const reply =
                document.createElement("div");


            reply.className =
                "chat-bot-message bot";


            reply.innerHTML = `

            <div class="chat-bot-message-content">


                <strong style="
                    display:block;
                    color:#003A24;
                    font-size:14px;
                    margin-bottom:7px;
                ">

                    ${details.icon}
                    ${details.title}

                </strong>


                ${details.text}


                <div style="
                    margin-top:10px;
                ">

                    ${points}

                </div>


                <div class="chat-bot-actions">


                    <button
                        type="button"
                        class="
                            chat-bot-action-btn
                            chat-bot-more-btn
                        "
                        onclick="
                            chatBotMoreInfo('${service}')
                        ">

                        <i class="bi bi-arrow-right-circle-fill"></i>

                        More Information

                    </button>


                    <div class="chat-bot-contact-row">


                        <!-- CALL -->

                        <button
                            type="button"
                            class="
                                chat-bot-action-btn
                                chat-bot-call-btn
                            "
                            onclick="
                                chatBotCall(event)
                            ">

                            <i class="bi bi-telephone-fill"></i>

                            Call Us

                        </button>


                        <!-- MAIL -->

                        <button
                            type="button"
                            class="
                                chat-bot-action-btn
                                chat-bot-mail-btn
                            "
                            onclick="
                                chatBotMail(
                                    event,
                                    '${service} Service Enquiry'
                                )
                            ">

                            <i class="bi bi-envelope-fill"></i>

                            Mail Us

                        </button>


                    </div>


                </div>


            </div>

        `;


            chatBotBody.appendChild(
                reply
            );


            chatBotScroll();


        }, 850);

    }


    /* =========================================================
       MORE INFO
    ========================================================= */

    function chatBotMoreInfo(service) {

        chatBotShowTyping();


        setTimeout(function() {


            chatBotRemoveTyping();


            const message =
                document.createElement("div");


            message.className =
                "chat-bot-message bot";


            message.innerHTML = `

            <div class="chat-bot-message-content">


                <strong style="
                    display:block;
                    color:#003A24;
                    font-size:14px;
                    margin-bottom:7px;
                ">

                    Let's build your project 🚀

                </strong>


                Looking for more details about

                <strong style="
                    color:#006B4A;
                ">

                    ${service}

                </strong>?


                <br><br>


                Connect with our team and share
                your requirements. We'll help you
                with the right solution for your
                business.


                <div class="chat-bot-actions">


                    <button
                        type="button"
                        class="
                            chat-bot-action-btn
                            chat-bot-call-btn
                        "
                        onclick="
                            chatBotCall(event)
                        ">

                        <i class="bi bi-telephone-fill"></i>

                        Call 9642343434

                    </button>


                    <button
                        type="button"
                        class="
                            chat-bot-action-btn
                            chat-bot-mail-btn
                        "
                        onclick="
                            chatBotMail(
                                event,
                                '${service} Project Enquiry'
                            )
                        ">

                        <i class="bi bi-envelope-fill"></i>

                        Send Email

                    </button>


                </div>


            </div>

        `;


            chatBotBody.appendChild(
                message
            );


            chatBotScroll();


        }, 700);

    }


    /* =========================================================
       TYPING
    ========================================================= */

    function chatBotShowTyping() {

        chatBotRemoveTyping();


        const typing =
            document.createElement("div");


        typing.id =
            "chatBotTyping";


        typing.className =
            "chat-bot-typing";


        typing.innerHTML = `

        <span></span>

        <span></span>

        <span></span>

    `;


        chatBotBody.appendChild(
            typing
        );


        chatBotScroll();

    }


    function chatBotRemoveTyping() {

        const typing =
            document.getElementById(
                "chatBotTyping"
            );


        if (typing) {

            typing.remove();

        }

    }


    /* =========================================================
       SCROLL
    ========================================================= */

    function chatBotScroll() {

        setTimeout(function() {

            chatBotBody.scrollTop =
                chatBotBody.scrollHeight;

        }, 50);

    }


    /* =========================================================
       OUTSIDE CLICK
    ========================================================= */

    document.addEventListener(
        "click",
        function(event) {

            if (
                chatBot.classList.contains("active") &&
                !chatBot.contains(event.target)
            ) {

                chatBot.classList.remove(
                    "active"
                );

            }

        }
    );
</script>

