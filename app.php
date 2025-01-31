<?php
    const VERSION = 400;
?><!DOCTYPE HTML>
<html lang="ru">
<head>
    <title>GLD COIN</title>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <link rel="stylesheet" href="/core/styles/bootstrap.css">
    <link rel="stylesheet" href="/core/styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/core/fonts/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/sweetalert2/sweetalert2.css">
    <link rel="stylesheet" href="/app.css?<?= VERSION; ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body ><br>
   <!-- <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>  -->

    <div id="page" style="margin-top: -10px;">
        <div id="footer-bar" class="footer-bar-6">
            <a href="#" class="btn-leaders">
                <i class="fa fa-trophy"></i>
                <span>Лидеры</span>
            </a>
            <a href="#" class="btn-boost">
                <i class="fa fa-puzzle-piece"></i>
                <span>Улучшения</span>
            </a>
            <a href="#" class="btn-main circle-nav active-nav mactive">
                <i class="fa fa-coins"></i>
                <span>Майнить</span>
            </a>
            <a href="#" class="btn-friends">
                <i class="fa fa-user-friends"></i>
                <span>Друзья</span>
            </a>
            <a href="#" class="btn-about">
                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                <span>Донат</span>
            </a>
            <!-- <a href="#" class="btn-donat">
                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                <span>Донат</span>
            </a> -->
        </div>
        <div class="page-content">
            <br>
            <div class="page-game" style="display: none;">
                <div class="scoreboard">
                    <b>Кошельки:</b>
                    <span id="score">0</span>
                    <br>
                    <b>Время:</b>
                    <span id="time">30</span> сек.
                </div>
                <div id="game-area">
                    <div class="overlay" id="overlay"></div>
                    <div class="freeze-overlay" id="freeze-overlay"></div>
                </div>
                <audio id="glass-break-sound" src="/assets/audio/minigame_glass.mp3"></audio>
                <audio id="clocks-sound" src="/assets/audio/minigame_clock.mp3"></audio>
                <audio id="bomb-sound" src="/assets/audio/minigame_bomb.mp3"></audio>
            </div>

            <div class="page-leaders" style="display: none;">
                <div class="card card-style shadow-xl">
                    <div class="content">
                        <p class="color-highlight font-600 mb-n1">ТОП-5 лучших</p>
                        <h1 class="font-24 font-700 mb-2">Лидеры
                            <i class="fa fa-star mt-n2 font-30 color-yellow-dark float-end me-2 scale-box"></i>
                        </h1>
                        <div id="leaderboard-list" style="margin:0; padding:0; width: 100%; margin-bottom:-10px;"></div>
                    </div>
                </div>
            </div>

            <div class="page-main">
                <div class="content card card-style shadow-xl bg-dark-light" style="margin-bottom: 10px; background-color: #B5B7BA !important; border-radius: 10px; margin-left: 17px; margin-right: 17px;">
                    <div class="">
                        <div class="container">
                            <center>
                                <div id="balance" style="font-size:14px; margin-bottom: 10px; padding-top: 16px;">БАЛАНС <br>
                                    <span id="balance_num" style="font-weight: 600; font-size:24px;">0</span> GLD
                                </div>
                                <div id="click-area" class="click-area"></div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0" style="width: 50%; padding-bottom: 30px;">
                        <div class="card-game card card-style shadow-xl ">
                            <div class="content">
                                <div class="row" style="margin: 0; cursor: pointer;">
                                    <div class="col-9">Лови монетки</div>
                                    <div class="col-3" style="text-align: right;">
                                        <i class="fa fa-ticket" style="color: white"></i> <span id="ticket_num">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
        
                </div><br>
                    <div class="card-gift card card-style shadow-xl">
                        <div class="content" onclick="getTicket()">
                            <div class="row" style="margin: 0; cursor: pointer;">
                                <div class="col-8">Получить билеты</div>
                                <div class="col-4 gift-remaining" style="text-align: right;">00:00:00</span></div>
                            </div>
                        </div>
                    </div>
                    
                
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>У вас не хватает билетов, приходите завтра</p>
                    </div>
                </div>

                

                <!-- Button trigger modal -->
                <div class="btn-modal">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width:100%">
                О проекте
                </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="font-24 font-700 mb-2">О проекте</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       
						<p class="mb-1">Автор проекта: <a href="#" target="_blank">Автор проекта: Фаррух.</a>.Игра начиналась как эксперимент, продемонстрированный в прямом эфире, чтобы показать возможности блокчейна TON. С момента своего появления проект быстро привлек внимание сообщества и стал активно развиваться.</p>
						<p class="mb-1">GLADOS COIN – это уникальная игра, в которой каждый пользователь может окунуться в мир виртуальных возможностей и стремиться стать настоящим криптовалютным магнатом. На старте вы начинаете как простой новичок, но с каждой заработанной монетой приближаетесь к вершине славы и богатства. Проект предлагает множество увлекательных активностей: зарабатывайте монеты, улучшайте свои навыки и оборудование, получайте БОНУСЫ и участвуйте в игровых событиях. Каждое ваше действие в игре приближает вас к новым уровням и достижениям. Испытайте дух соревнования, взлетите в лидеры и докажите всем свою уникальность!</p>
						<p class="mb-1">Следите за обновлениями и новостями проекта в Telegram-канале: <a href="#" target="_blank"> GLADOS coin</a>. Узнавайте первыми о новых функциях, акциях и событиях, а также делитесь своими успехами и впечатлениями с другими участниками сообщества.</p>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                
                <audio id="click-sound" src="/assets/audio/main_mine.mp3"></audio>
                <audio id="scream-sound" src="/assets/audio/main_scream.mp3"></audio>
            </div><br>

            <div class="page-friends" style="display: none;">
                <div class="card card-style shadow-xl">
                    <div class="content">
                        <p class="color-highlight font-600 mb-n1">Пусть работают другие</p>
                        <h1 class="font-24 font-700 mb-2">Реферальная <br>программа
                            <button class="copy-btn mt-n2 font-30 color-yellow-dark float-end me-2 scale-box">
                                <img src="https://img.icons8.com/ios-glyphs/30/4CAF50/copy.png" alt="Copy">
                            </button>
                        </h1>
                        <p>Привлекай друзей и ежедневно получай 15% от их заработка в GLADOS Coin. Чем больше друзей присоединяются к нашей платформе через твою ссылку, тем выше твой ежедневный доход. Убедись, что они используют твою реферальную ссылку при регистрации.</p>
                        <div class="card card-style bg-green-light">
                            <div class="content">
                                <p class="mb-n1 font-600 color-white">Твоя уникальная реферальная ссылка</p>
                                <div class="referral-link" id="referral-link-text" style="cursor: pointer; background: white; border-radius: 10px; padding: 10px; font-size: 18px; font-weight: 600; color: #69c3e0;" onclick="copyReferralLink()"></div>
                                <p class="opacity-60 color-white">Кроме ежедневного дохода, за каждого привлеченного друга ты сразу получишь по 2 000 000 GLADOS, а твой друг — 1 000 000 GLADOS.</p>
                            </div>
                        </div>
                        <p>Также, за каждого приведенного друга ты получаешь дополнительно 5 билетов для участия в бонусных играх.</p>
                    </div>
                </div>
                <div class="card card-style bg-dark-light ms-0 me-0 rounded-0">
                    <div class="content">
                        <h1 class="color-white">Твой доход за сутки</h1>
                        <p class="color-white opacity-60">
                            <strong id="referral-income" style="font-size: 28px;">0 GLD</strong>
                        </p>
                    </div>
                </div>
                <div class="card card-style shadow-xl">
                    <div class="content">
                        <p class="color-highlight font-600 mb-n1">Уже работают на тебя</p>
                        <h1 class="font-24 font-700 mb-2">Друзья</h1>
                        <div class="referral-list" id="referral-list">
                            <p>Загрузка друзей...</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-about" style="display: none;">
            <div class="row" style="padding-left: 10px; padding-right: 10px;">
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0" style="width: 50%;">
                            <div class="card" >
                            <img style="height: 100px !important; width: 100px; margin-left: 28px;" src="/assets/img/donat.png" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">100, 000 GLD</h5>
                                <p class="card-text">Укажите username-TG при оплате</p>
                                <a href="https://www.donationalerts.com/r/alibayev" class="btn btn-primary">10 USD</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="width: 50%;">
                            <div class="card">
                            <img style="height: 100px !important; width: 100px; margin-left: 28px;" src="/assets/img/donat.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                 <h5 class="card-title">200, 000 GLD</h5>
                                <p class="card-text">Укажите username-TG при оплате</p>
                                <a href="https://www.donationalerts.com/r/alibayev" class="btn btn-primary">20 USD</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0" style="width: 50%;">
                            <div class="card" >
                            <img style="height: 100px !important; width: 100px; margin-left: 28px;" src="/assets/img/donat.png" alt="...">
                            <div class="card-body">
                                 <h5 class="card-title">300, 000 GLD</h5>
                                <p class="card-text">Укажите username-TG при оплате</p>
                                <a href="https://www.donationalerts.com/r/alibayev" class="btn btn-primary">30 USD</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="width: 50%;">
                            <div class="card">
                            <img style="height: 100px !important; width: 100px; margin-left: 28px;" src="/assets/img/donat.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                 <h5 class="card-title">400, 000 GLD</h5>
                                <p class="card-text">Укажите username-TG при оплате</p>
                                <a href="https://www.donationalerts.com/r/alibayev" class="btn btn-primary">40 USD</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-boost" style="display: none;">
                <div class="row" style="padding-left: 10px; padding-right: 10px;">
                </div>
            </div>

            <!-- <div class="page-donat" style="display: none;">
                <div class="row" style="padding-left: 10px; padding-right: 10px;">
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0" style="width: 50%;">
                            <div class="card" >
                            <img style="height: 100px !important; width: 100px;" src="/assets/img/minigame_bomb.png" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="width: 50%;">
                            <div class="card">
                            <img style="height: 100px !important; width: 100px;" src="/assets/img/minigame_bomb.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0" style="width: 50%;">
                            <div class="card" >
                            <img style="height: 100px !important; width: 100px;" src="/assets/img/minigame_bomb.png" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="width: 50%;">
                            <div class="card">
                            <img style="height: 100px !important; width: 100px;" src="/assets/img/minigame_bomb.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    

    <audio id="coins-sound" src="/assets/audio/minigame_win.mp3"></audio>
    <audio id="gift-sound" src="/assets/audio/main_tickets.mp3"></audio>

    <script src="/core/scripts/bootstrap.min.js"></script>
    <script src="/core/scripts/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/assets/sweetalert2/sweetalert2.js"></script>
    <script src="/app.js?<?= VERSION; ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>