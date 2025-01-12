<html lang="UTF-8">

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
    <div class="fixheadbox">
        <div class="w70w df headbox">
            <a href="/" class="gobackbtn"><i class="icon-left-small"></i> </a>
            <p class="pagetitle">E'lon joylash</p>
        </div>
    </div>
    <div class="mainwrap uiwrap">
        <div class="progress-bar">
            <div class="progress" id="progress"></div>
        </div>

        <div id="steps">
            <div class="step active" id="step-1">
                <div class="step-title">
                    <h5>E'lon haqida</h5>
                    <span>1/3 bosqich</span>
                </div>

                <form id="form-1" class="form-1 hform">
                    <div class="field df hinputgroup">
                        <label for="name">E'lon nomi</label>
                        <input class="hinput validate" placeholder="E'lon nomini kiriting" type="text" id="name"
                            name="name" required>
                        <span class="error">E'lon nomini kiriting</span>
                    </div>
                    <div class="field df hinputgroup">
                        <label for="aboutlot">Batafsil</label>
                        <div class="outputcount"><span class="outsrew">0</span>/2000</div>
                        <textarea class="hinput theihgt validate" maxlength="2000"
                            placeholder="Batafsil ma'lumot kiriting" name="aboutlot" id="aboutlot" required></textarea>
                        <span class="error">Batafsil ma'lumot</span>
                    </div>
                    <div class="field df hinputgroup">
                        <label for="priceInput">Narxi</label>

                        <div class="hradiot fdc">
                            <input class="hinput validate" placeholder="1 000 000" type="number" id="priceInput"
                                name="priceInput" required>
                            <span class="error">Narxini ko'rsating</span>
                            <div class="currencytype">Uzs</div>
                        </div>
                    </div>
                    <div class="field df precentprice">
                        <div class="zapt df">
                            <p class="laytitle">Nasiya savdo</p>
                        </div>
                        <div class="hradio-container">
                            <input type="radio" id="no" name="paymentOption" value="Нет" checked>
                            <label for="no">Yo'q</label>
                            <input type="radio" id="credit" name="paymentOption" value="Kredit">
                            <label for="credit">Kredit</label>
                            <input type="radio" id="installment" name="paymentOption" value="Bo'lib to'lash">
                            <label for="installment">Bo'lib to'lash</label>
                        </div>
                        <div class="hradiot df fdc yashiru">
                            <div class="hradiot">
                                <input type="number" id="initialPayment" class="hinput validate"
                                    placeholder="Boshlang'ich to'lov">
                                <div class="currencytype">Uzs</div>
                            </div>
                            <span id="resultonpercent" class="resultonpercent">0%</span>
                            <span class="htooltip" id="htooltip">Birinchi to'lov summasi ko'rsatilgan naxrning 90% dan
                                oshmasligi kerak.</span>
                        </div>
                    </div>
                    <div class="zapt df">
                        <p class="laytitle">Rasm yuklang</p>
                        <div class="maximgnote">Eng ko'p rasmlar soni: 15</div>
                    </div>
                    <div class="upload__box">
                        <div class="upload__btn-box field df hinputgroup">
                            <label for="imgload" class="upload__btn dertye" id="uploadBtn">+ Shu erga bosing</label>
                            <input type="file" multiple data-max_length="15"
                                class="hinput upload__inputfile dertye validate" id="imgload" name="imgload">
                            <span class="errorimg">Marhamat, rasm yuklang</span>
                            <p class="noticetitle">Eng ko'p 15 ta rasm, jpeg va png formatda qabul qilinadi. 1 dona rasm
                                hajmi 20mb dan oshmasligi kerak.</p>
                        </div>
                        <div class="upload__img-wrap"></div>
                    </div>
                    <div class="field df hinputgroup tagwrap">
                    <label for="taginput">Tezkor so'zlar</label>
                        <div class="tagcontainer df">
                            <input class="hinput validate" maxlength="20" type="text" required id="taginput" placeholder="Tezkor so'zlarni kiriting">
                            
                            <button id="add-btn">+</button>
                        </div>
                        <span class="errortag">tag kiriting</span>
                        <ul class="tagslist"></ul>
                    </div>
                </form>
            </div>
            <div class="step" id="step-2">
                <div class="step-title">
                    <h5>Qo'shimcha ma'lumotlar</h5>
                    <span>2/3 шаг</span>
                </div>
                <form id="form-2" class="hform">
                    <div class="field df precentprice">
                        <div class="zapt df">
                            <p class="laytitle">Внутренний отдел</p>
                        </div>
                        <div class="hradio-container ichkibolim">
                            <input class="hinput validate" type="radio" id="cars" name="bolimOption"
                                value="engilavtomobil" checked>
                            <label for="cars">Английский автомобиль</label>
                            <input class="hinput validate" type="radio" id="camion" name="bolimOption"
                                value="yuktashuvchi">
                            <label for="camion">Грузовик</label>
                            <input class="hinput validate" type="radio" id="bus" name="bolimOption"
                                value="yolovchitashuvchi">
                            <label for="bus">Пассажирский транспорт</label>
                            <input class="hinput validate" type="radio" id="special" name="bolimOption"
                                value="maxsustehnika">
                            <label for="special">Специальная техника</label>
                            <input class="hinput validate" type="radio" id="moto" name="bolimOption"
                                value="mototehnika">
                            <label for="moto">Мототехника</label>
                            <input class="hinput validate" type="radio" id="zapchasti" name="bolimOption"
                                value="extiyotqismlar">
                            <label for="zapchasti">Запчасти</label>
                            <input class="hinput validate" type="radio" id="othercars" name="bolimOption"
                                value="boshqalar">
                            <label for="othercars">Другое</label>
                            <span class="error">Введите значение</span>
                        </div>
                        <span class="error">Введите значение</span>
                    </div>
                    <div class="field df hinputgroup">
                        <label for="priceInput">Пробег</label>
                        <div class="hradiot fdc">
                            <input class="hinput validate" placeholder="1 000" type="number" id="priceInput"
                                name="priceInput" required>
                            <span class="error">Введите пробег</span>
                            <div class="currencytype">Км</div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="step" id="step-3">
                <div class="step-title">
                    <h5>О регионе</h5>
                    <span>3/3 шаг</span>
                </div>
                <form id="form-3" class="hform">
                    <div class="field">
                        <label for="city">Город:</label>
                        <input type="text" id="city" name="city" required>
                        <span class="error">Это поле обязательно для заполнения.</span>
                    </div>
                    <div class="field">
                        <label for="country">Страна:</label>
                        <input type="text" id="country" name="country" required>
                        <span class="error">Это поле обязательно для заполнения.</span>
                    </div>
                </form>
            </div>
        </div>

        <!-- <div class="step-buttons">
            <button type="button" id="prevBtn" onclick="changeStep(-1)">Назад</button>
            <button type="button" id="nextBtn" onclick="nextStep()">Вперед</button>
        </div> -->
        <div class="step-buttons">
            <button type="button" id="prevBtn">Назад</button>
            <button type="button" id="nextBtn">Вперед</button>
        </div>
    </div>

    <!-- jQuery и JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/izitoast/dist/js/izitoast.min.js"></script>
    <script src="js/secondjs.js"></script>
</body>

</html>