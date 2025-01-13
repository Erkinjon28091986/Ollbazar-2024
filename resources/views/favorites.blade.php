<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites</title>
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
    <div class="fixheadbox responsivewidth">
        <div class="w70w df headbox">
            <a href="/" class="gobackbtn"><i class="icon-left-small"></i> </a>
            <p class="pagetitle">Favorites</p>
        </div>
    </div>
    <div class="mainwrap uiwrap responsivewidth">
        <div class="prowrap ">
            <div class="tabcontent">
                <div class="category-lists-slider vlart">
                    <div class="swiper-container" id="tabs-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="category-button active" data-id="data1">
                                    Sellers
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-button" data-id="data2">
                                    Ads
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-button slider-prev"><i class="fa fa-chevron-left"></i></div>
                    <div class="slider-button slider-next"><i class="fa fa-chevron-right"></i></div>
                </div>
                <div class="tabitems">
                    <div class="data-text active" id="data1">
                        <div class="chatcontainer chatcontt">
                            <div id="selection-panel" class="panelhidden">
                                <span id="selected-info">Выбрано: 0</span>
                                <div class="leftwrte df">
                                    <button id="pin-btn" class="pinbtn" tooltip="Pin chat" flow="left"><i
                                            class="icon-pin34"></i>
                                    </button>
                                    <button id="delete-btn" class="deletebtn" tooltip="Remove chat" flow="left"><i
                                            class="icon-deletese"></i> </button>
                                </div>
                            </div>
                            <div id="chat-list">
                                <div class="chat-block" data-id="1">
                                    <div class="flipbox df user-img-box">
                                        <div class="flipcheck"><i class="icon-ok"></i></div>
                                        <img src="https://i.postimg.cc/gcC6Hsx1/kiuy.jpg" alt="Avatar"
                                            class="chatavatar">
                                        <span class="status-user user-online"></span>
                                    </div>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Иван Иванов</span>
                                        <p class="last-userregion"> Andijan region</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                        <div class="amountads" tooltip="Quantity ads" flow="left">2</div>
                                        <div class="amountfallowers" tooltip="Quantity fallowers" flow="left">125</div>
                                    </div>
                                </div>
                                <div class="chat-block" data-id="2">
                                    <div class="flipbox df user-img-box">
                                        <div class="flipcheck"><i class="icon-ok"></i></div>
                                        <img src="https://i.postimg.cc/gcC6Hsx1/kiuy.jpg" alt="Avatar"
                                            class="chatavatar">
                                        <span class="status-user user-online"></span>
                                    </div>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Inaci Williams</span>
                                        <p class="last-userregion"> Andijan region</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                        <div class="amountads" tooltip="Quantity ads" flow="left">23</div>
                                        <div class="amountfallowers" tooltip="Quantity fallowers" flow="left">6</div>
                                    </div>
                                </div>
                                <div class="chat-block" data-id="3">
                                    <div class="flipbox df user-img-box">
                                        <div class="flipcheck"><i class="icon-ok"></i></div>
                                        <img src="https://i.postimg.cc/gcC6Hsx1/kiuy.jpg" alt="Avatar"
                                            class="chatavatar">
                                        <span class="status-user user-online"></span>
                                    </div>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Roberto Mancini</span>
                                        <p class="last-userregion"> Andijan region</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                        <div class="amountads" tooltip="Quantity ads" flow="left">45</div>
                                        <div class="amountfallowers" tooltip="Quantity fallowers" flow="left">56</div>
                                    </div>
                                </div>
                                <div class="chat-block" data-id="4">
                                    <div class="flipbox df user-img-box">
                                        <div class="flipcheck"><i class="icon-ok"></i></div>
                                        <img src="https://i.postimg.cc/gcC6Hsx1/kiuy.jpg" alt="Avatar"
                                            class="chatavatar">
                                        <span class="status-user user-online"></span>
                                    </div>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Gulruh Latipova</span>
                                        <p class="last-userregion"> Andijan region</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                        <div class="amountads" tooltip="Quantity ads" flow="left">258</div>
                                        <div class="amountfallowers" tooltip="Quantity fallowers" flow="left">123</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="data-text" id="data2">
                    <div class="masonry">
                        <div class="item-elon">
                            <div class="infobagde df">
                                <div class="vipbadge">
                                    <svg id="fi_7921539" enable-background="new 0 0 512 512" height="512"
                                        viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m291.245 12.902-35.245-12.902h-68.6l-118.8 68.6-68.6 118.81v137.18l68.6 118.81 118.8 68.6h68.6l35.245-12.902z"
                                                fill="#ffe32d"></path>
                                            <path
                                                d="m512 187.41v137.18l-68.6 118.81-118.8 68.6h-68.6v-512h68.6l118.8 68.6z"
                                                fill="#ffad49"></path>
                                            <path
                                                d="m284.403 74.446-28.403-10.396h-51.43l-89.09 51.43-51.43 89.09v102.86l51.43 89.09 89.09 51.43h51.43l28.403-10.396z"
                                                fill="#ffad49"></path>
                                            <path
                                                d="m447.95 204.57v102.86l-51.43 89.09-89.09 51.43h-51.43v-383.9h51.43l89.09 51.43z"
                                                fill="#ed7756"></path>
                                            <path
                                                d="m271.697 175.496-15.697-22.986h-12.25l-36.98 72.09-60.34-25.29-17.57 16.93 33.27 135.25h93.87l15.697-16.699z"
                                                fill="#ffe32d"></path>
                                            <path
                                                d="m383.14 216.24-33.27 135.25h-93.87v-198.98h12.25l36.98 72.09 60.34-25.29z"
                                                fill="#ffad49"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="korildibadge">Ko'rildi</div>
                            </div>
                            <a href="{{ route('details') }}" class="elonimglink adtofavdouble lot-image-vipelon">
                                <img src="placeholder.jpg" data-src="https://i.postimg.cc/JzhKWzsD/s24-ultra4.jpg"
                                    class="lot-image lazy" alt="Damas">
                            </a>
                            <div class="lot-nav df">
                                <div class="user-img-box">
                                    <img src="https://i.postimg.cc/CLbnP8D5/kugo.jpg" alt="Admin 2"
                                        class="seller-avatar">
                                </div>
                                <div class="elonfoot df faveffect__parent adtofavdouble" data-item-id="unique-id-8">
                                    <div>
                                        <div class="lot-title">Samsung Galaxy S 24 Ultra, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Quo deserunt, recusandae sapiente velit nesciunt laudantium?</div>
                                        <div class="elonNarh">2 000 000 Uzs</div>
                                    </div>
                                    <a href="javascript:void(0)" class="yanafunk" data-bs-toggle="modal"
                                        data-bs-target="#favoriteadfunkModal"><i
                                            class="fa-solid fa-ellipsis-vertical"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-elon">
                            <div class="infobagde df">
                                <div class="korildibadge">Ko'rildi</div>
                            </div>
                            <a href="" class="elonimglink">
                                <img alt="Damas" src="placeholder.jpg"
                                    data-src="https://i.postimg.cc/QCGZMQw8/yamaha-motosiklet.jpg"
                                    class="lot-image lazy">
                            </a>
                            <div class="lot-nav df">
                                <div class="user-img-box">
                                    <img src="https://i.postimg.cc/nLSXjG8R/fjuyj.jpg" alt="Admin 2"
                                        class="seller-avatar">
                                </div>
                                <div class="elonfoot df faveffect__parent" data-item-id="unique-id-9">
                                    <div>
                                        <div class="lot-title">Damas 2 Lorem ipsum dolor sit amet. </div>
                                        <div class="elonNarh">100 700 000 Uzs</div>
                                    </div>
                                    <a href="javascript:void(0)" class="yanafunk" data-bs-toggle="modal"
                                        data-bs-target="#favoriteadfunkModal"><i
                                            class="fa-solid fa-ellipsis-vertical"></i></a>
                                </div>
                            </div>
                            <div>
                                <a href="" id="elon-id" class="overlay-elon-items"></a>
                            </div>
                        </div>
                        <div class="item-elon">
                            <div class="infobagde df">
                                <div class="flashbadge">Tezkor</div>
                                <div class="korildibadge">Ko'rildi</div>
                            </div>
                            <a href="" class="elonimglink lot-image-flashelon">
                                <img alt="Damas" src="placeholder.jpg" data-src="https://i.postimg.cc/HWF8QWyM/kuhn.jpg"
                                    class="lot-image  lazy">
                            </a>
                            <div class="lot-nav df">
                                <div class="user-img-box">
                                    <img src="https://i.postimg.cc/nLSXjG8R/fjuyj.jpg" alt="Admin 2"
                                        class="seller-avatar">
                                </div>
                                <div class="elonfoot df faveffect__parent" data-item-id="unique-id-10">
                                    <div>
                                        <div class="lot-title">Oshxona mebeli 3</div>
                                        <div class="elonNarh">56 000 Uzs</div>
                                    </div>
                                    <a href="javascript:void(0)" class="yanafunk" data-bs-toggle="modal"
                                        data-bs-target="#favoriteadfunkModal"><i
                                            class="fa-solid fa-ellipsis-vertical"></i></a>
                                </div>
                            </div>
                            <div>
                                <a href="" id="elon-id" class="overlay-elon-items"></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <div class="modal fade sheetmodal" id="favoriteadfunkModal" tabindex="-1" aria-labelledby="sheetModalLabel"
        aria-hidden="true">
        <div class="modal-dialog profilmodal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Additional functions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="moltr df">
                        <a href="" class="removead moltra" data-bs-toggle="modal"
                            data-bs-target="#noteRemovefavoritesModal"><i class="fa-solid fa-trash"></i> Remove from favorites</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Modal note remove ads-->
    <div class="modal fade" id="noteRemovefavoritesModal" tabindex="-1" aria-labelledby="sheetModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered custommodals">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Remove from favorites</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custombody df fdc">
                    <div class="toastad">
                        <img src="img\warning.webp" alt="notice">
                        <div class="toastadbody df">
                            <p>E'lonni sevimli ro'yhatidan o'chimoqchimisiz?</p>
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
    <div class="main__overlay"></div>




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