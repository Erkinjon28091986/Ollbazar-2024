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
    <div class="mainwrap">
        <h4 class="addtitle">Place an ad </h4>
        <div class="progress-bar">
            <div class="progress" id="progress"></div>
        </div>

        <div id="steps">
            <div class="step active" id="step-1">
                <div class="step-title">
                    <h5>Details</h5>
                    <span>1/3 шаг</span>
                </div>
                <form id="form-1">
                    <div class="field df hinputgroup">
                        <label for="name">Lot name</label>
                        <input class="hinput validate" placeholder="Lot name" type="text" id="name" name="name" required>
                        <span class="error">Это поле обязательно для заполнения.</span>
                    </div>
                    <div class="field df hinputgroup">
                        <label for="aboutlot">About</label>
                        <div class="outputcount"><span class="outsrew">0</span>/2000</div>
                        <textarea class="hinput theihgt validate" maxlength="2000" placeholder="About lot" name="aboutlot" id="aboutlot" required></textarea>
                        <span class="error">Введите about lot</span>
                    </div>
                    <div class="field df hinputgroup">
                        <label for="priceInput">Price</label>
                        <input oninput="formatNumber(this)" class="hinput validate" placeholder="1 000 000" type="number" id="priceInput" name="priceInput" required>
                        <span class="error">Введите stenu</span>
                        <div class="currencytype">Uzs</div>
                    </div>
                    <div class="zapt df"><p class="laytitle">Upload images</p><div class="maximgnote">Max images: 4</div> </div>
                    <div class="upload__box">
                        <div class="upload__btn-box field df hinputgroup">
                            <label for="imgload" class="upload__btn dertye">+ Push Push</label>
                            <input type="file" multiple data-max_length="4" class="hinput upload__inputfile dertye validate" id="imgload" name="imgload">
                            <span class="error">Please loading images</span>
                        </div>
                        <div class="upload__img-wrap"></div>
                    </div>
                </form>
            </div>
            <div class="step" id="step-2">
                <div class="step-title">
                    <h2>О работе</h2>
                    <span>2/3 шаг</span>
                </div>
                <form id="form-2">
                    <div class="field">
                        <label for="job-title">Должность:</label>
                        <input type="text" id="job-title" name="job-title" required>
                        <span class="error">Это поле обязательно для заполнения.</span>
                    </div>
                    <div class="field">
                        <label for="company">Компания:</label>
                        <input type="text" id="company" name="company" required>
                        <span class="error">Это поле обязательно для заполнения.</span>
                    </div>
                </form>
            </div>
            <div class="step" id="step-3">
                <div class="step-title">
                    <h2>О регионе</h2>
                    <span>3/3 шаг</span>
                </div>
                <form id="form-3">
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

        <div class="step-buttons">
            <button type="button" id="prevBtn" onclick="changeStep(-1)">Назад</button>
            <button type="button" id="nextBtn" onclick="nextStep()">Вперед</button>
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