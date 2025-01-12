<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet</title>
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
    <div class="fixheadbox walletpanel">
        <div class="w70w df headbox">
            <a href="/" class="gobackbtn"><i class="icon-left-small"></i> </a>
            <p class="pagetitle">Wallet</p>
        </div>
        <div class="totalbalancebox">
            <div class="tbalance">
                <div class="walhead df fdc">
                    <p class="balancetitle">Total Balance</p>
                    <div class="totalbalace">400 000 <span class="valyuta">Uzs</span></div>
                </div>
                <div class="hcoinbox">
                    <div class="hcoininner">
                        <p class="balancetitle">Hancoin balance</p>
                        <div class="hancoinbalance">120</div>
                    </div>
                    <a href="" class="exchcoin" tooltip="Exchange" flow="left"><i class="icon-exchange-2"></i> </a>
                </div>
            </div>
            <div class="walletfunc">
                <a href="" class="topupwal" tooltip="Topup" flow="left"><i class="icon-plus"></i> Topup</a>
                <a href="" class="sendwal" tooltip="Send money in system" flow="left"><i
                        class="icon-down-left-arrow"></i> Send</a>
                <a href="" class="winthdrawwal" tooltip="Send money out system" flow="left"><i class="icon-minus-2"></i>
                    Withdraw</a>
                <a href="" class="rekvizitos" tooltip="Wallet details" flow="left"><i class="icon-indent-left"></i> </a>
            </div>

        </div>
    </div>
    
    <div class="prowrap w70w uiwrap">
        <div class="tabcontent">
            <div class="category-lists-slider vlarttt">
                <div class="swiper-container" id="tabs-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="category-button active" data-id="data1">
                                Toltal balance
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-button" data-id="data2">
                                Hancoin
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
                    <div class="walstory df">
                        <div class="detailitems ">
                            <div class="deropl df">
                                <div class="detailimg detailstatus">- <a href="javascript:void(0)"
                                        class="showdetails"><i class="icon-eye"></i> </a> </div>
                                <div class="detailtext df fdc">
                                    <div class="dettext">Snyatiye</div>
                                    <div class="detailata">21.03.2025</div>
                                </div>
                            </div>
                            <div class="detailsumma df fdc">
                                <div class="summasi">-230 000</div> <span class="currencybal">Uzs</span>
                            </div>
                        </div>
                    </div>
                    <div class="walstory df">
                        <div class="detailitems ">
                            <div class="deropl df">
                                <div class="detailimg detailstatusplus">+ <a href="javascript:void(0)"
                                        class="showdetails"><i class="icon-eye"></i> </a></div>
                                <div class="detailtext df fdc">
                                    <div class="dettext">Popolneniye</div>
                                    <div class="detailata">27.03.2025</div>
                                </div>
                            </div>
                            <div class="detailsumma df fdc">
                                <div class="summasi">40 000</div> <span class="currencybal">Uzs</span>
                            </div>
                        </div>
                    </div>
                    <div class="walstory df">
                        <div class="detailitems ">
                            <div class="deropl df">
                                <div class="detailimg detailstatuschange"><i class="icon-exchange-2"></i><a
                                        href="javascript:void(0)" class="showdetails"><i class="icon-eye"></i> </a>
                                </div>
                                <div class="detailtext df fdc">
                                    <div class="dettext">Exchange</div>
                                    <div class="detailata">27.03.2025</div>
                                </div>
                            </div>
                            <div class="detailsumma df fdc">
                                <div class="summasi">7 000</div> <span class="currencybal">Uzs</span>
                            </div>
                        </div>
                    </div>
                    <div class="walstory df">
                        <div class="detailitems ">
                            <div class="deropl df">
                                <div class="detailimg detailstatustransfer"><i
                                        class="icon-down-left-arrow myarrows"></i><a href="javascript:void(0)"
                                        class="showdetails"><i class="icon-eye"></i> </a></div>
                                <div class="detailtext df fdc">
                                    <div class="dettext">Transfer</div>
                                    <div class="detailata">02.04.2025</div>
                                </div>
                            </div>
                            <div class="detailsumma df fdc">
                                <div class="summasi">122 000</div> <span class="currencybal">Uzs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="data-text" id="data2">
                    GFGDGD
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
                                                1 <span>Платные тарифы поможет найти покупалеля гарозде бистрее.</span>
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