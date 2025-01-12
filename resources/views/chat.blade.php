<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
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
    <x-rightmenu></x-rightmenu>
    <div class="fixheadbox">
        <div class="w70w df headbox">
            <a href="/" class="gobackbtn"><i class="icon-left-small"></i> </a>
            <p class="pagetitle">Chat</p>
        </div>
    </div>
    <div class="prowrap w70w mt100">        
        <div class="chatcontainer uiwrap">
            <div id="selection-panel" class="panelhidden">
                <div class="laredq df fdc">
                    <p class="laredtitle">Suhbatlar</p>
                    <span id="selected-info">Выбрано: 0</span>
                </div>
                <div class="leftwrte df">
                    <button id="pin-btn" style="display: none" class="pinbtn" title="ss" tooltip="Pin chat" flow="left"><p class="unpinbtn"></p> <i class="icon-pin34"></i>
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
                <div class="chat-block" data-id="4">
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
                <div class="chat-block" data-id="6">
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
                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                        </div>
                    </div>
                </div>
                <div class="chat-block" data-id="7">
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
                        <span class="pinningbutton"><i class="icon-pin34"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

  
    <!-- jQuery и JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/izitoast/dist/js/iziToast.min.js"></script>
    <script src="js/chatjs.js"></script>
</body>

</html>