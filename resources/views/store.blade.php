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
            <p class="pagetitle">Do'kon</p>
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
                                <a href="">Arzoni Bizda</a>
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
                            <div class="rating-container">
                                <div class="hrating r45"></div>
                                <span class="rating-value">9.5</span>
                            </div>
                            <p class="catstore">Telefonlar</p>
                        </div>
                    </div>

                </div>
                <div class="rightserbox df">
                    <button id="subscribeButton" class="buttonsub" onclick="toggleSubscription()">
                        <span class="icon"><i class="icon-plus-1"></i></span>
                        <span>Obuna bo'lish</span>
                    </button>
                </div>
            </div>
            <div class="userdetitem df">
                <div class="stat-item">
                    <div class="counter-wrapper skeleton">
                        <div class="counter-container" data-value="367" data-duration="1500" data-delay="1700"
                            data-easing="ease-in-out"></div>
                    </div>
                    <div class="stat-label">E'lonlar</div>
                </div>
                <div class="stat-item">
                    <div class="counter-wrapper skeleton">
                        <div class="counter-container" data-value="34" data-duration="1500" data-delay="1700"
                            data-easing="ease-in-out"></div>
                    </div>
                    <div class="stat-label">Obunachi</div>
                </div>
                <div class="stat-item">
                    <div class="counter-wrapper skeleton">
                        <div class="counter-container" data-value="145" data-duration="1500" data-delay="1700"
                            data-easing="ease-in-out"></div>
                    </div>
                    <div class="stat-label">Obunalar</div>
                </div>

            </div>
            <fieldset class="shiorim">
                <legend>Haqida</legend>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae fugiat ad accusamus dolores
                    dolore asperiores dicta illum debitis eaque delectus rem nesciunt modi explicabo nisi corporis quia
                    totam, facere exercitationem.</p>
            </fieldset>
            <div class="sellersaddress">
                <i class="icon-map"></i>
                <div class="nopreq df">
                    <div class="country-s xwet">Uzbekistan,</div>
                    <div class="region-s xwet">Andijon viloyati,</div>
                    <div class="city-s xwet">Asaka tumani</div>
                </div>

            </div>
            <div class="qoshimpt df fdc">
                <div class="storesocial df">
                    <a href="" class="soclinks"><img src="img/viber.webp" alt="">Viber</a>
                    <a href="" class="soclinks"><img src="img/telegram.webp" alt="">Telegram</a>
                    <a href="" class="soclinks"><img src="img/whatsapp.webp" alt="">Whatsapp</a>
                    <a href="" class="soclinks"><img src="img/instagram.webp" alt="">Instagram</a>
                    <a href="" class="soclinks"><img src="img/youtube.webp" alt="">Youtube</a>
                </div>
            </div>
        </div>
        <div class="tabcontent uiwrap">
            <div class="category-lists-slider">
                <div class="swiper-container" id="tabs-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="category-button " data-id="data1">
                                Sale
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-button" data-id="data2">
                                Sold
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-button active" data-id="data3">
                                Fikrlar
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-button slider-prev"><i class="fa fa-chevron-left"></i></div>
                <div class="slider-button slider-next"><i class="fa fa-chevron-right"></i></div>
            </div>
            <div class="tabitems">
                <div class="data-text " id="data1">
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
                <div class="data-text active" id="data3">
                    <div class="ratingbox">
                        <div class="ratingtop">
                            <div class="totalratingnumber">4.5</div>
                            <div class="rating-container vaerty">
                                <div class="hrating r45"></div>
                                <!-- <span class="rating-value">9.5</span> -->
                            </div>
                            <div class="countvoices"><span>142</span>baho</div>
                            <a href="" class="addcommentbtn">Fikr bildirish</a>
                        </div>
                        <div class="ratingmiddle">
                            <div class="progress-bar--wrap df">
                                <span class="progress-bar__star">5<i class="fa-solid fa-star"></i></span>
                                <div class="progress-bar">
                                    <div class="progress-bar--inner" style="width: 80%;"></div>
                                </div>
                                <span class="progress-bar--counter">78</span>
                            </div>
                            <div class="progress-bar--wrap df">
                                <span class="progress-bar__star">4<i class="fa-solid fa-star"></i></span>
                                <div class="progress-bar">
                                    <div class="progress-bar--inner" style="width: 45%;"></div>
                                </div>
                                <span class="progress-bar--counter">45</span>
                            </div>
                            <div class="progress-bar--wrap df">
                                <span class="progress-bar__star">3<i class="fa-solid fa-star"></i></span>
                                <div class="progress-bar">
                                    <div class="progress-bar--inner" style="width: 23%;"></div>
                                </div>
                                <span class="progress-bar--counter">22</span>
                            </div>
                            <div class="progress-bar--wrap df">
                                <span class="progress-bar__star">2<i class="fa-solid fa-star"></i></span>
                                <div class="progress-bar">
                                    <div class="progress-bar--inner" style="width: 8%;"></div>
                                </div>
                                <span class="progress-bar--counter">2</span>
                            </div>
                            <div class="progress-bar--wrap df">
                                <span class="progress-bar__star">1<i class="fa-solid fa-star"></i></span>
                                <div class="progress-bar">
                                    <div class="progress-bar--inner" style="width: 1%;"></div>
                                </div>
                                <span class="progress-bar--counter">1</span>
                            </div>

                        </div>
                        <div class="ratingbottom"></div>
                    </div>
                    <hr class="hdivider-dark">
                    <div class="commenttitle">Fikrlar</div>
                    <div class="sortingcomment">
                        <a href="" class="bynewest sqtuy">Yangi</a>
                        <a href="" class="byoldest sqtuy">Eski</a>
                        <a href="" class="bytoprating sqtuy">Top</a>
                    </div>
                    <div class="commentcontainer">
                        <div class="commentitem">
                            <div class="commenthead">
                                <img src="https://i.postimg.cc/zfGLGPQH/uuik.jpg" alt="" class="useravatar">
                                <div class="commnetrw">
                                    <div class="commenttorname">Ivan Ivanov</div>
                                    <div class="commenttimestamp">Bugun, 14:32</div>
                                </div>
                            </div>
                            <div class="commentcontent df">
                                <div class="commenttext">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Officia ullam natus facilis dolorem! Reiciendis, molestiae consequuntur mollitia
                                    rerum nostrum temporibus.</div>
                                <div class="commentpanel df">
                                    <div class="commentspotw df">
                                        <a href="javascript:void(0)" class="commentreaktion"><i
                                                class="fa-regular fa-face-smile"></i></a>
                                        <div class="emodzibox df">
                                            <div class="emodzilari" data-emoji-id="1">&#x1F4A5</div>
                                            <div class="emodzilari heyurak" data-emoji-id="2">❤</div>
                                            <div class="emodzilari heyurak" data-emoji-id="3">&#128079</div>
                                            <div class="emodzilari" data-emoji-id="4"><i class="fa-solid fa-heart-crack heyurak"></i>
                                            </div>
                                            <div class="emodzilari" data-emoji-id="5">&#128077</div>
                                            <div class="emodzilari" data-emoji-id="6">&#129321</div>
                                            <div class="emodzilari" data-emoji-id="7">&#128544</div>
                                        </div>
                                        <div class="reaksion-output">
                                            <div class="reaction-item show" data-emoji-id="7"><img src="img/like2.webp" alt=""><span class="countbaho">3</span>
                                            </div>
                                        </div>

                                        <a href="" class="commentreplybtn">Javob berish</a>
                                    </div>
                                    <a href="" class="comment-report"><i class="icon-attention"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal sale ads  -->
    <div class="modal fade sheetmodal" id="profiladfunkModal" tabindex="-1" aria-labelledby="sheetModalLabel"
        aria-hidden="true">
        <div class="modal-dialog profilmodal cutsmodal">
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
        <div class="modal-dialog profilmodal cutsmodal">
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


    <script>


document.addEventListener('DOMContentLoaded', function () {
    // Получаем необходимые элементы
    const emodziBox = document.querySelector('.emodzibox');
    const commentReaction = document.querySelector('.commentreaktion');
    const reactionOutput = document.querySelector('.reaksion-output');
    const emodzilari = document.querySelectorAll('.emodzilari');

    // Флаг для отслеживания состояния бокса
    let isBoxVisible = false;

    // Функция для показа emoji box
    function toggleEmodziBox(event) {
        event.stopPropagation();
        console.log('Toggle emoji box');

        if (!isBoxVisible) {
            emodziBox.classList.add('show');
            isBoxVisible = true;
        } else {
            emodziBox.classList.remove('show');
            isBoxVisible = false;
        }
    }

    // Функция для скрытия emoji box
    function hideEmodziBox() {
        emodziBox.classList.remove('show');
        isBoxVisible = false;
        console.log('Hide emoji box');
    }

    // Функция для обработки клика по emoji
    function handleEmojiClick(event) {
        event.stopPropagation();
        console.log('Emoji clicked');

        // Получаем идентификатор эмодзи
        const emojiId = event.currentTarget.getAttribute('data-emoji-id');

        // Проверяем, существует ли уже такой reaction-item в reactionOutput
        const existingReaction = Array.from(reactionOutput.children).find(child => {
            return child.getAttribute('data-emoji-id') === emojiId;
        });

        if (existingReaction) {
            // Если существует, увеличиваем счетчик
            const countElement = existingReaction.querySelector('.countbaho');
            let count = parseInt(countElement.textContent, 10);
            countElement.textContent = count + 1;
            console.log('Existing reaction found, count incremented');
        } else {
            // Если не существует, создаем новый элемент
            const newReaction = document.createElement('div');
            newReaction.className = 'reaction-item';
            newReaction.setAttribute('data-emoji-id', emojiId);
            newReaction.innerHTML = `${event.currentTarget.innerHTML}<span class="countbaho">1</span>`;

            // Добавляем в output
            reactionOutput.appendChild(newReaction);

            // Добавляем класс show для запуска анимации
            setTimeout(() => {
                newReaction.classList.add('show');
            }, 10); // небольшая задержка для уверенности, что элемент добавлен в DOM
            console.log('New reaction added');
        }

        // Скрываем бокс
        hideEmodziBox();
    }

    // Функция для увеличения счетчика при клике на reaction-item
    function handleReactionItemClick(event) {
        console.log('Reaction item clicked');
        const reactionItem = event.target.closest('.reaction-item');
        if (reactionItem) {
            const countElement = reactionItem.querySelector('.countbaho');
            if (countElement) {
                let count = parseInt(countElement.textContent, 10);
                countElement.textContent = count + 1;
                console.log('Count incremented');
            } else {
                console.log('Count element not found');
            }
        } else {
            console.log('Reaction item not found');
        }
    }

    // Добавляем обработчики событий
    commentReaction.addEventListener('click', toggleEmodziBox);

    // Добавляем обработчики для каждого emoji
    emodzilari.forEach(emoji => {
        emoji.addEventListener('click', handleEmojiClick);
    });

    // Добавляем обработчики для увеличения счетчика при клике на reaction-item
    reactionOutput.addEventListener('click', function (event) {
        handleReactionItemClick(event);
    });

    // Закрываем бокс при клике вне его
    document.addEventListener('click', (event) => {
        if (!emodziBox.contains(event.target) &&
            !event.target.classList.contains('commentreaktion')) {
            hideEmodziBox();
        }
    });
});












        class DigitScroller {

            constructor(targetDigit, options = {}) {

                this.container = document.createElement('div');

                this.container.className = 'digit-container';

                this.targetDigit = parseInt(targetDigit);

                this.options = {

                    duration: options.duration || 1500,

                    delay: options.delay || 0,

                    easing: options.easing || 'ease-out'

                };

                this.digitStrip = document.createElement('div');

                this.digitStrip.className = 'digit-strip';

                this.init();

            }

            init() {

                for (let i = 0; i <= 9; i++) {

                    const digitElement = document.createElement('div');

                    digitElement.className = 'digit';

                    digitElement.textContent = i;

                    this.digitStrip.appendChild(digitElement);

                }

                this.container.appendChild(this.digitStrip);

                const startDigit = Math.floor(Math.random() * 10);

                this.digitStrip.style.transform = `translateY(${-startDigit * 30}px)`;

            }

            animate() {

                return new Promise(resolve => {

                    setTimeout(() => {

                        this.digitStrip.style.transition =
                            `transform ${this.options.duration}ms ${this.options.easing}`;

                        this.digitStrip.style.transform = `translateY(${-this.targetDigit * 30}px)`;

                        setTimeout(resolve, this.options.duration);

                    }, this.options.delay);

                });

            }

        }

        function createSeparator() {

            const separator = document.createElement('div');

            separator.className = 'separator';

            separator.textContent = ' ';

            return separator;

        }

        async function initializeCounter(container, number, options) {

            container.innerHTML = '';

            const numberStr = number.toString();

            const scrollers = [];



            const groups = [];

            for (let i = numberStr.length; i > 0; i -= 3) {

                groups.unshift(numberStr.slice(Math.max(0, i - 3), i));

            }

            groups.forEach((group, groupIndex) => {

                if (groupIndex > 0) {

                    container.appendChild(createSeparator());

                }

                for (let i = 0; i < group.length; i++) {

                    const scroller = new DigitScroller(group[i], options);

                    scrollers.push(scroller);

                    container.appendChild(scroller.container);

                }

            });

            await Promise.all(scrollers.map(scroller => scroller.animate()));

        }

        // Инициализация всех счетчиков на странице

        function initializeAllCounters() {

            const counters = document.querySelectorAll('.counter-container[data-value]');

            counters.forEach(counter => {

                const options = {

                    duration: parseInt(counter.dataset.duration) || 1500,

                    delay: parseInt(counter.dataset.delay) || 0,

                    easing: counter.dataset.easing || 'ease-out'

                };

                const value = parseInt(counter.dataset.value);

                initializeCounter(counter, value, options);

            });

        }

        // Запуск анимации при загрузке страницы

        window.addEventListener('load', initializeAllCounters);








    </script>


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