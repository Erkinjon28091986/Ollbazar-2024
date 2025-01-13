<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
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
            <p class="pagetitle">Notification</p>
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
                <div class="tabitems vdery">
                    <div class="data-text active" id="data1">
                        <div class="chatcontainer chatcontt">
                            <div id="chat-list">
                                <div class="chat-block" data-id="1">
                                    <div class="flipbox df user-img-box">
                                        <img src="https://i.postimg.cc/gcC6Hsx1/kiuy.jpg" alt="Avatar"
                                            class="chatavatar">
                                        <span class="status-user user-online"></span>
                                    </div>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Иван Иванов</span>
                                        <p class="last-userregion"> Added a new ad</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                        <a href="" class="newadbox">
                                            <p class="addedbadge">+</p>
                                            <img src="https://i.postimg.cc/MKkXnsCb/viper.jpg" class="newadimg" alt="">
                                        </a>

                                    </div>
                                </div>
                                <div class="chat-block" data-id="2">
                                    <div class="flipbox df user-img-box">
                                        <img src="https://i.postimg.cc/ydJkF3sV/ydo.jpg" alt="Avatar"
                                            class="chatavatar">
                                        <span class="status-user user-online"></span>
                                    </div>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Inaci Williams</span>
                                        <p class="last-userregion"> Removed the ad</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                        <a href="" class="newadbox">
                                            <p class="deletebadge">-</p>
                                            <img src="https://i.postimg.cc/s2nv13zv/palma.jpg" class="newadimg" alt="">
                                        </a>

                                    </div>
                                </div>
                                <div class="chat-block" data-id="3">
                                    <div class="flipbox df user-img-box">
                                        <img src="https://i.postimg.cc/1Xh5wWvH/lih.png" alt="Avatar"
                                            class="chatavatar">
                                        <span class="status-user user-online"></span>
                                    </div>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Roberto Mancini</span>
                                        <p class="last-userregion"> Added the new ad</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                        <a href="" class="newadbox">
                                            <p class="addedbadge">+</p>
                                            <img src="https://i.postimg.cc/gj1z80t2/Malibu.jpg" class="newadimg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="chat-block" data-id="4">
                                    <div class="flipbox df user-img-box">
                                        <img src="https://i.postimg.cc/gcC6Hsx1/kiuy.jpg" alt="Avatar"
                                            class="chatavatar">
                                        <span class="status-user user-online"></span>
                                    </div>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Gulruh Latipova</span>
                                        <p class="last-userregion"> Changed the ad</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                        <a href="" class="newadbox">
                                            <p class="editebadge"><i class="icon-pencil-black-gross-tool"></i> </p>
                                            <img src="https://i.postimg.cc/3RRYqGPw/bil.jpg" class="newadimg" alt="">
                                        </a>

                                    </div>
                                </div>
                                <div class="chat-block" data-id="5">
                                    <div class="flipbox df user-img-box">
                                        <img src="https://i.postimg.cc/gcC6Hsx1/kiuy.jpg" alt="Avatar"
                                            class="chatavatar">
                                        <span class="status-user user-online"></span>
                                    </div>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Gulruh Latipova</span>
                                        <p class="last-userregion"> Sold in the Hanbazar</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                        <a href="" class="newadbox">
                                            <p class="soldbadge"><i class="icon-ok-2"></i> </p>
                                            <img src="https://i.postimg.cc/3RRYqGPw/bil.jpg" class="newadimg" alt="">
                                        </a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="data-text" id="data2">
                        <div class="chatcontainer chatcontt">
                            <div id="chat-list">
                                <div class="chat-block" data-id="1">
                                    <a href="" class="newadbox">
                                        <img src="https://i.postimg.cc/MKkXnsCb/viper.jpg" class="newadimg" alt="">
                                    </a>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Moto Skuteri</span>
                                        <p class="last-userregion"> Sold</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                        <p class="soldad" tooltip="Sotildi" flow="left"><i class="icon-ok-2"></i></p>

                                    </div>
                                </div>
                                <div class="chat-block" data-id="2">
                                    <a href="" class="newadbox">
                                            <img src="https://i.postimg.cc/s2nv13zv/palma.jpg" class="newadimg" alt="">
                                        </a>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Palma guli</span>
                                        <p class="last-userregion"> Date expired</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                        <p class="dataexpired" tooltip="Muddati tugadi" flow="left"><i class="fas fa-exclamation"></i></p>

                                    </div>
                                </div>
                                <div class="chat-block" data-id="3">
                                        <a href="" class="newadbox">
                                            <img src="https://i.postimg.cc/gj1z80t2/Malibu.jpg" class="newadimg" alt="">
                                        </a>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Malibu yangi</span>
                                        <p class="last-userregion"> Withdrawn</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                        <p class="withdrawnad" tooltip="Sotuvdan olindi" flow="left">-</p>
                                    </div>
                                </div>
                                <div class="chat-block" data-id="4">
                                        <a href="" class="newadbox">
                                            <img src="https://i.postimg.cc/3RRYqGPw/bil.jpg" class="newadimg" alt="">
                                        </a>
                                    <a href="" class="chat-info">
                                        <span class="chat-name">Gulruh Latipova</span>
                                        <p class="last-userregion"> Changed</p>
                                    </a>
                                    <div class="ads-status df">
                                        <div class="chatstfoot df">
                                            <span class="pinningbutton"><i class="icon-pin34"></i></span>
                                        </div>
                                       <p class="stschangednad" tooltip="O'zgartirildi" flow="left"><i class="icon-pencil-black-gross-tool"></i></p>

                                    </div>
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
                            data-bs-target="#noteRemovefavoritesModal"><i class="fa-solid fa-trash"></i> Remove from
                            favorites</a>
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