<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.11.1/css/flag-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="css/hanbazar-icons.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
    <x-second-menu></x-second-menu>
    <x-rightmenu></x-rightmenu>
    <div class="prowrap w70w mt100">
        <div class="breadcrumswrap df">
            <a href="" class="breads">Home</a>
            <a href="" class="breads">Chat</a>
        </div>
        <div class="chatcontainer">
            <div id="selection-panel" class="panelhidden">
                <span id="selected-info">Выбрано: 0</span>
                <div class="leftwrte df">
                    <button id="pin-btn" class="pinbtn" tooltip="Pin chat" flow="left"><i class="icon-pin34"></i>
                    </button>
                    <button id="delete-btn" class="deletebtn" tooltip="Remove chat" flow="left"><i
                            class="icon-deletese"></i> </button>
                </div>

            </div>
            <div id="chat-list">
                <div class="chat-block" data-id="1">
                    <div class="flipbox df user-img-box">
                        <div class="flipcheck"><i class="icon-ok"></i></div>
                        <img src="https://i.postimg.cc/gcC6Hsx1/kiuy.jpg" alt="Avatar" class="chatavatar">
                        <span class="status-user user-online"></span>
                    </div>
                    <div class="chat-info">
                        <span class="chat-name">Иван Иванов</span>
                        <a href="" class="last-message"> Привет! Как дела?</a>
                    </div>
                    <div class="chat-status df">
                        <div class="chatsthead">
                            <div class="chatdata">14:32, today</div>
                        </div>
                        <div class="chatstfoot df">
                            <span class="chatbadge">3</span>
                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                        </div>
                    </div>
                </div>
                <div class="chat-block" data-id="2">
                    <div class="flipbox df user-img-box">
                        <div class="flipcheck"><i class="icon-ok"></i></div>
                        <img src="https://i.postimg.cc/gcC6Hsx1/kiuy.jpg" alt="Avatar" class="chatavatar">
                        <span class="status-user user-online"></span>
                    </div>
                    <div class="chat-info">
                        <span class="chat-name">Иван Иванов</span>
                        <a href="" class="last-message"><span class="read-status"><i class="icon-read"></i> </span> Vstretimsya
                            vecherom</a>
                    </div>
                    <div class="chat-status df">
                        <div class="chatsthead">
                            <div class="chatdata">14:32, today</div>
                        </div>
                        <div class="chatstfoot df">
                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                        </div>
                    </div>
                </div>
                <div class="chat-block" data-id="3">
                    <div class="flipbox df user-img-box">
                        <div class="flipcheck"><i class="icon-ok"></i></div>
                        <img src="https://i.postimg.cc/gcC6Hsx1/kiuy.jpg" alt="Avatar" class="chatavatar">
                        <span class="status-user user-online"></span>
                    </div>
                    <div class="chat-info">
                        <span class="chat-name">Иван Иванов</span>
                        <a href="" class="last-message"><span class="read-status unread-status"><i class="icon-read"></i>
                            </span> Привет! Как дела?</a>
                    </div>
                    <div class="chat-status df">
                        <div class="chatsthead">
                            <div class="chatdata">14:32, today</div>
                        </div>
                        <div class="chatstfoot df">
                            <span class="chatbadge">1</span>

                        </div>
                    </div>
                </div>
                <div class="chat-block" data-id="4">
                    <div class="flipbox df user-img-box">
                        <div class="flipcheck"><i class="icon-ok"></i></div>
                        <img src="https://i.postimg.cc/gcC6Hsx1/kiuy.jpg" alt="Avatar" class="chatavatar">
                        <span class="status-user user-online"></span>
                    </div>
                    <div class="chat-info">
                        <span class="chat-name">Иван Иванов</span>
                        <a href="" class="last-message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur
                            dolorem nesciunt perspiciatis cumque itaque repellat vel inventore repudiandae aut
                            asperiores!</a>
                    </div>
                    <div class="chat-status df">
                        <div class="chatsthead">
                            <div class="chatdata">14:32, today</div>
                        </div>
                        <div class="chatstfoot df">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <hr class="hdivider" style="margin-bottom: 0">

    </div>

    <!-- Modal sale ads  -->
    <div class="modal fade sheetmodal" id="profiladfunkModal" tabindex="-1" aria-labelledby="sheetModalLabel"
        aria-hidden="true">
        <div class="modal-dialog profilmodal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Additional functions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="moltr df">
                        <a href="javascript:void(0)" class="raiseupad moltra" data-bs-toggle="modal"
                            data-bs-target="#vipfastModal"><i class="fa-solid fa-arrow-trend-up"></i> Raise up</a>
                        <a href="" class="editad moltra"><i class="icon-pencil-black-gross-tool"></i> Edit</a>
                        <a href="" class="removead moltra" data-bs-toggle="modal"
                            data-bs-target="#noteRemovefromSaleModal"><i class="fa-solid fa-trash"></i> Withdrawn</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade sheetmodal" id="profiladfunkModal-sold" tabindex="-1" aria-labelledby="sheetModalLabel"
        aria-hidden="true">
        <div class="modal-dialog profilmodal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Additional functions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="moltr df">
                        <a href="" class="raiseupad moltra fgr"><i class="icon-right"></i> Return to sale</a>
                        <a href="" class="editad moltra"><i class="icon-pencil-black-gross-tool"></i> Edit</a>
                        <a href="" class="removead moltra" data-bs-toggle="modal"
                            data-bs-target="#noteRemovefromSaleModal2"><i class="fa-solid fa-trash"></i> Remove</a>
                    </div>

                </div>
            </div>
        </div>
    </div>





    <!-- Modal vip fast tarif -->
    <div class="modal fade" id="vipfastModal" tabindex="-1" aria-labelledby="sheetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered custommodals">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Additional functions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custombody df fdc">
                    <div class="wrapperfix">
                        <form class="form-wrapper" action="">
                            <div class="section swt is-active">
                                <div class=" row cf df fdc">
                                    <div class="four col">
                                        <input type="radio" name="r1" id="r1" checked="">
                                        <label for="r1" class="df ilp">
                                            <div class="r-icon riconvip">
                                                <img src="https://i.postimg.cc/9M8yjyZy/crown2.png" alt="vip">
                                            </div>
                                            <div class="df fdc byt">
                                                <div class="bytes">VIP <span class="vipnarhi">7 euro</span></div>
                                                <span>Все пользователы увидет ваша обявление.</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="four col">
                                        <input type="radio" name="r1" id="r2"><label for="r2" class="df ilp">
                                            <div class="r-icon">
                                                <img src="https://i.postimg.cc/ZnX3WZfR/rocket.png" alt="fast">
                                            </div>
                                            <div class="df fdc byt">
                                                <div class="bytes">FAST <span class="vipnarhi">3 euro</span></div>
                                                <span>Будут стоить в самом верху на главном странице и в
                                                    категориях.</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="four col">
                                        <input type="radio" name="r1" id="r4"><label for="r4" class="df ilp">
                                            <div class="r-icon">
                                                <img src="https://i.postimg.cc/brZkYd9W/diamond.png" alt="simple">
                                            </div>
                                            <div class="df fdc byt">
                                                <div class="bytes">SIMPLE <span class="vipnarhi">Free</span></div>
                                                <span>Платные тарифы поможет найти покупалеля гарозде бистрее.</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="formfoot df">
                                <a href="" class="nextstepbtn">Next</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal note wiyhdraw from sale-->
    <div class="modal fade" id="noteRemovefromSaleModal" tabindex="-1" aria-labelledby="sheetModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered custommodals">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sotuvdan olish sababini ko'rsating</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custombody df fdc">
                    <div class="toastad">

                        <form action="" class="cancelsale">
                            <div class="customradiobox">
                                <div class="customradioitem">
                                    <input type="radio" class="custom-radio-button" id="heresold" checked="checked"
                                        name="gender"></input>
                                    <label for="heresold" class="custom-radio-button-label">Hanbazarda sotildi
                                        <span class="bavt"></span>
                                    </label>
                                </div>
                                <div class="customradioitem">
                                    <input type="radio" class="custom-radio-button" id="cancelsold"
                                        name="gender"></input>
                                    <label for="cancelsold" class="custom-radio-button-label">Sotish fikridan
                                        qaytdim <span class="bavt"></span>
                                    </label>
                                </div>
                                <div class="customradioitem">
                                    <input type="radio" class="custom-radio-button" id="Othersd" name="gender"></input>
                                    <label for="Othersd" class="custom-radio-button-label">Boshqa erda sotildi <span
                                            class="bavt"></span></label>
                                </div>
                                <div class="customradioitem">
                                    <input type="radio" class="custom-radio-button" id="Othersold"
                                        name="gender"></input>
                                    <label for="Othersold" class="custom-radio-button-label">Other <span
                                            class="bavt"></span></label>
                                </div>

                            </div>
                            <div class="toastadfoot df">
                                <a href="" class="cancelbtn">Cancel</a>
                                <a href="" class="cancelsalebtn">Withdrawn from sale</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal note remove ads-->
    <div class="modal fade" id="noteRemovefromSaleModal2" tabindex="-1" aria-labelledby="sheetModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered custommodals">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Remove ad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custombody df fdc">
                    <div class="toastad">
                        <img src="img\warning.webp" alt="notice">
                        <div class="toastadbody df">
                            <p>Siz haqiqatdan e'lonni tizimdan o'chiqmoqchimisiz? Unutmang, keyin qayta tiklash imkoni
                                bo'lmaydi.</p>
                        </div>
                        <div class="toastadfoot df">
                            <a href="" class="cancelbtn">Cancel</a>
                            <a href="" class="submitbtn">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- jQuery и JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/izitoast/dist/js/iziToast.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>