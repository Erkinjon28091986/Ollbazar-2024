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
    <div class="fixheadbox responsivewidth">
        <div class="w70w df headbox">
            <a href="/" class="gobackbtn"><i class="icon-left-small"></i> </a>
            <p class="pagetitle">My profile</p>
        </div>
    </div>
    <x-rightmenu></x-rightmenu>
    <div class="prowrap w70w mt100 responsivewidth ">
        <div class="uiwrap">
            <div class="userbox df">
                <div class="leftuserbox df fdc">
                    <div class="lyutr df">
                        <div class="useravabox user-img-box">
                            <img src="https://i.postimg.cc/qv0h97XL/kjl.jpg" alt="user" class="useravatar">
                        </div>
                        <div class="userinn df fdc">
                            <div class="sellername">
                                <a href="">Richard McCardy</a>
                                <div class="sellerstatus">
                                    <img src="https://i.postimg.cc/cL2b71bR/goldbadge.webp" alt="">
                                    <div class="showloyalbox showloyalbox__bottom">
                                        <div class="range-container stsishonch">
                                            <div class="confetibox">
                                                <div class="confetiss"></div>
                                                <div class="confetiss"></div>
                                                <div class="confetiss"></div>
                                                <div class="confetiss"></div>
                                                <div class="confetiss"></div>
                                                <div class="confetiss"></div>
                                            </div>
                                            <img id="rangeImage" class="rangeimage"
                                                src=" https://i.postimg.cc/dQZ7ZWpJ/gold-badge.png" alt="Ommamop Image">
                                            <output id="rangeValue">Ommamop</output>
                                            <input type="range" class="custom-range" id="customRange" min="0" max="100"
                                                step="1" value="0" style="--thumb-color: #e3b500;">
                                            <div id="outsubtext">Eng ko`p haridorlarga ega va 200 dan ortiq e`lonlari
                                                mavjud.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="sellertime">Kirdi: <span class="lasttime">21:45</span></p>
                        </div>
                    </div>

                </div>
                <div class="rightserbox df">
                    <a href="" class="settinglink"> <i class="icon-settings"></i> </a>
                    <!-- <button id="subscribeButton" class="buttonsub" onclick="toggleSubscription()">
                    <span class="icon"><i class="icon-plus-1"></i></span>
                    <span>Subscribe</span>
                </button> -->
                </div>
            </div>
            <div class="userdetitem df">
                <div class="adscount strew df">
                    <p id="mycounter" class="mycounter">23</p>
                    <p>ads</p>
                </div>
                <div class="favscount strew df">
                    <p id="mycounter" class="mycounter">4</p>
                    <p>follows</p>
                </div>
                <div class="fallowscount strew df">
                    <p id="mycounter" class="mycounter">8</p>
                    <p>followers</p>
                </div>
            </div>
        </div>
        <div class="tabcontent uiwrap">
            <div class="category-lists-slider">
                <div class="swiper-container" id="tabs-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="category-button active" data-id="data1">
                                Sale
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-button" data-id="data2">
                                Sold
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-button" data-id="data3">
                                Address
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-button slider-prev"><i class="fa fa-chevron-left"></i></div>
                <div class="slider-button slider-next"><i class="fa fa-chevron-right"></i></div>
            </div>
            <div class="tabitems">
                <div class="data-text active" id="data1">
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
                                        data-bs-target="#profiladfunkModal"><i
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
                                        data-bs-target="#profiladfunkModal"><i
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
                                        data-bs-target="#profiladfunkModal"><i
                                            class="fa-solid fa-ellipsis-vertical"></i></a>
                                </div>
                            </div>
                            <div>
                                <a href="" id="elon-id" class="overlay-elon-items"></a>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="data-text" id="data2">
                    <!-- if content is empty show .emptypage, else hide -->
                    <!-- <div class="emptypage">
                        <img src="img\no-content2.webp" alt="" class="nocontent">
                        <p class="ptfer">Empty content</p>
                    </div> -->
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
                                        data-bs-target="#profiladfunkModal-sold"><i
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
                                        data-bs-target="#profiladfunkModal-sold"><i
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
                                        data-bs-target="#profiladfunkModal-sold"><i
                                            class="fa-solid fa-ellipsis-vertical"></i></a>
                                </div>
                            </div>
                            <div>
                                <a href="" id="elon-id" class="overlay-elon-items"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="data-text" id="data3">
                    <div class="sellersaddress">
                        <i class="icon-map"></i>
                        <div class="nopreq df">
                            <div class="country-s xwet">Uzbekistan,</div>
                            <div class="region-s xwet">Andijon viloyati,</div>
                            <div class="city-s xwet">Asaka tumani</div>
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