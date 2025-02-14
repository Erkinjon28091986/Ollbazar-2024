<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация и Авторизация</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Добавляем IMask -->
    <script src="https://unpkg.com/imask"></script>
    <link href="/css/hanbazar-icons.css" rel="stylesheet">

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f5f5f5;
        }

        .container {
            position: relative;
            width: 800px;
            height: 600px;
            background: white;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border-radius: 15px;
        }

        .forms-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.1s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
            padding: 10px;

        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            position: relative;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #ff4b2b, #ff416c);
            border-radius: 10px;

            img {
                width: 100%;
                height: 100%;
                border-radius: 10px;
            }
        }

        form {
            background: #FFFFFF;
            display: flex;
            flex-direction: column;
            padding: 30px;
            height: 100%;
            overflow-y: auto;
            align-items: normal;

        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .form-group {
            position: relative;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-size: 14px;
        }

        input,
        select {
            width: 100%;
            padding: 15px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: all ease .3s;

            &:hover {
                border: 1px solid rgba(74, 144, 226, 0.54);
                transition: all ease .3s;
                outline: none;
            }

            &:focus {
                outline: none;
            }

            &:focus-within {
                border: 1px solid rgba(74, 144, 226, 0.54);
                transition: all ease 0.3s;
            }
        }

        .avatar-upload {
            position: relative;
            margin-bottom: 15px;
        }

        .avatar-preview {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 10px;
            border: 2px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f8f8;
        }

        .avatar-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        .avatar-preview-text {
            color: #999;
            font-size: 14px;
        }

        .custom-file-upload {
            display: inline-block;
            padding: 8px 16px;
            background: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .custom-file-upload:hover {
            background: #e0e0e0;
        }

        #avatarInput {
            display: none;
        }

        .error-message {
            color: #dc3545;
            font-size: 12px;
            margin-top: 4px;
            display: none;
        }

        .form-group.error input,
        .form-group.error select {
            border-color: #dc3545;
        }

        .form-group.error .error-message {
            display: block;
        }

        button {
            background: #6092d9;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        button:hover {
            background: rgb(70, 129, 211);
        }

        .switch-form {
            text-align: center;
            margin-top: 15px;
            color: #6092d9;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .switch-form:hover {
            color: rgb(70, 129, 211);
            transition: color 0.3s ease;
        }

        /* Добавить в существующий style блок */
        .gender-radio-group {
            display: flex;
            gap: 20px;
            margin-top: 5px;
        }

        .radio-container {
            display: flex;
            align-items: center;
            cursor: pointer;
            user-select: none;
        }

        .radio-container input[type="radio"] {
            display: none;
        }

        .radio-custom {
            width: 20px;
            height: 20px;
            border: 2px solid #ddd;
            border-radius: 50%;
            margin-right: 8px;
            position: relative;
            transition: all 0.3s ease;
        }

        .radio-custom::after {
            content: '';
            position: absolute;
            width: 12px;
            height: 12px;
            background: #6092d9;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.2s ease;
        }

        .radio-container input[type="radio"]:checked+.radio-custom {
            border-color: #6092d9;
        }

        .radio-container input[type="radio"]:checked+.radio-custom::after {
            transform: translate(-50%, -50%) scale(1);
        }

        .radio-label {
            font-size: 14px;
            color: #666;
        }

        .radio-container:hover .radio-custom {
            border-color: #6092d9;
        }

        .form-group.error .radio-custom {
            border-color: #dc3545;
        }

        /* Добавьте эти стили в существующий style блок */

        form {
            position: relative;
            /* Добавьте это свойство */
            padding-top: 70px;
            /* Увеличьте верхний отступ для заголовка */
        }

        h1 {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: white;
            padding: 15px;
            margin: 0;
            z-index: 10;
            border-bottom: 1px solid #eee;
            width: 50%;
            /* Ширина соответствует ширине формы */
        }

        /* Разные стили для заголовков входа и регистрации */
        .sign-in-container h1 {
            width: 100%;
        }





        .container.right-panel-active .sign-in-container h1 {
            transform: translateX(100%);
        }

        /* Замените существующие стили для h1 и добавьте новые */

        form {
            position: relative;
            padding-top: 70px;
            /* Отступ под фиксированный заголовок */
        }

        h1 {
            position: absolute;
            background: white;
            padding: 15px;
            margin: 0;
            z-index: 10;
            border-bottom: 1px solid #eee;
            width: 100%;
        }

        .sign-in-container h1 {
            left: 0;
            transition: transform 0.6s ease-in-out;
        }





        .container.right-panel-active .sign-in-container h1 {
            transform: translateX(-100%);
        }

        /* Обновите стили для контейнеров форм */
        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
            transition: transform 0.6s ease-in-out;
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
            transition: transform 0.6s ease-in-out;
        }

        /* Замените существующие стили для form и h1 */

        form {
            position: relative;
            padding-top: 70px;
            background: #FFFFFF;
            display: flex;
            flex-direction: column;
            height: 100%;
            overflow-y: auto;
            align-items: normal;
        }

        h1 {
            position: absolute;
            /* Изменено с fixed на absolute */
            top: 0;
            left: 0;
            right: 0;
            background: white;
            padding: 15px;
            margin: 0;
            z-index: 10;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        /* Обновленные стили для контейнеров форм */
        .sign-in-container {
            position: absolute;
            left: 0;
            width: 50%;
            height: 100%;
            transition: all 0.6s ease-in-out;
            z-index: 2;
        }

        .sign-up-container {
            position: absolute;
            left: 0;
            width: 50%;
            height: 100%;
            transition: all 0.6s ease-in-out;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
        }

        /* Замените существующие стили для form и h1 */

        form {
            position: relative;
            background: #FFFFFF;
            display: flex;
            flex-direction: column;
            height: 100%;
            overflow-y: auto;
            align-items: normal;
            padding: 0 30px 30px 30px;
            /* Обновленные отступы */
        }

        h1 {
            position: sticky;
            top: 0;
            background: white;
            padding: 15px;
            margin: 0;
            z-index: 10;
            text-align: center;
            border-bottom: 1px solid #eee;
            /* Тень для визуального отделения */
        }

        /* Обновленные стили для контейнеров форм */
        .sign-in-container {
            position: absolute;
            left: 0;
            width: 50%;
            height: 100%;
            transition: all 0.6s ease-in-out;
            z-index: 2;
        }

        .sign-up-container {
            position: absolute;
            left: 0;
            width: 50%;
            height: 100%;
            transition: all 0.6s ease-in-out;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
        }

        /* Добавьте стили для контента под заголовком */
        .form-content {
            margin-top: 20px;
            /* Отступ от заголовка */
        }


        /* Стили для центрирования формы авторизации */
        .sign-in-container form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Центрирование по вертикали */
            align-items: center;
            /* Центрирование по горизонтали */
        }

        .sign-in-container .form-group {
            width: 100%;
            max-width: 300px;
            /* Ограничение максимальной ширины полей */
        }

        .sign-in-container button {
            width: 100%;
            max-width: 300px;
        }

        /* Стили для формы регистрации остаются без изменений */
        .sign-up-container form {
            justify-content: flex-start;
            align-items: stretch;
        }

        .sign-up-container .form-group {
            width: 100%;
        }

        /* Стили для индикатора сложности пароля */
        .password-strength {
            margin-top: 5px;
        }

        .strength-bar {
            height: 4px;
            background-color: #ddd;
            margin-bottom: 5px;
            transition: all 0.3s ease;
        }

        .strength-bar.weak {
            width: 33.33%;
            background-color: #ff4444;
        }

        .strength-bar.medium {
            width: 66.66%;
            background-color: #ffbb33;
        }

        .strength-bar.strong {
            width: 100%;
            background-color: #00C851;
        }

        .strength-label {
            font-size: 12px;
            color: #666;
        }

        /* Стили для группы ввода пароля */
        .password-input-group {
            position: relative;
            display: flex;
            align-items: center;
        }

        .password-input-group .toggle-password {
            position: absolute;
            right: 10px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            font-size: 16px;
            width: auto;
            max-width: max-content;
            margin: 0;
        }

        .toggle-password:focus {
            outline: none;
        }

        /* Стили для индикатора сложности пароля */
        .password-strength {
            margin-top: 8px;
        }

        .strength-bars {
            display: flex;
            gap: 4px;
            margin-bottom: 5px;
        }

        .strength-bar {
            height: 4px;
            flex: 1;
            background-color: #ddd;
            transition: all 0.3s ease;
        }

        /* Состояния сложности пароля */
        .strength-bars.level-1 .strength-bar:nth-child(1) {
            background-color: #ff4444;
        }

        .strength-bars.level-2 .strength-bar:nth-child(-n+2) {
            background-color: #ffa000;
        }

        .strength-bars.level-3 .strength-bar:nth-child(-n+3) {
            background-color: #2196F3;
        }

        .strength-bars.level-4 .strength-bar {
            background-color: #00C851;
        }

        .strength-label {
            font-size: 12px;
            color: #666;
        }

        /* Обновленные стили для загрузки аватара */
        .avatar-upload {
            position: relative;
            margin-bottom: 15px;
        }

        .avatar-preview {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 10px;
            border: 2px dashed #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f8f8;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
        }

        .avatar-preview:hover {
            border-color: #ff416c;
            background: #fff5f7;
        }

        .avatar-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        .avatar-preview-text {
            color: #666;
            font-size: 13px;
            text-align: center;
            padding: 10px;
            transition: opacity 0.3s ease;
        }

        .avatar-hover-text {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .avatar-preview:hover .avatar-hover-text {
            opacity: 1;
        }

        /* Когда изображение загружено */
        .avatar-preview.has-image {
            border-style: solid;
        }

        .avatar-preview.has-image .avatar-preview-text {
            display: none;
        }

        .avatar-preview.has-image:hover img {
            opacity: 0.5;
        }

        /* Стили для ссылок в форме */
        .form-links {
            width: 100%;
            max-width: 300px;
            text-align: right;
            margin: 5px 0 15px;
        }

        .forgot-password {
            color: #6092d9;
            font-size: 14px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: rgb(70, 129, 211);
            text-decoration: underline;
            transition: color 0.3s ease;
        }

        /* Обновленные стили для контейнера формы входа */
        .sign-in-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .sign-in-container .form-group,
        .sign-in-container button,
        .sign-in-container .form-links {
            width: 100%;
            max-width: 300px;
        }

        .iti {
            width: 100%;
        }

        .eye-icon {
            color: #888;
        }

        .ftitle {
            margin-bottom: 10px;
            margin-bottom: 19px;
            padding: 16px 0 7px 0;
            color: #3893df;
            border: none !important;
            background: rgb(255 255 255 / 73%);
    backdrop-filter: blur(1px);
        }

        .uslovi {
            color: #777;
            font-size: 14px;

            a {
                color: #222;
            }
        }

        .select2-container .select2-selection--single {
            height: 49px;
            padding: 10px;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;

            &:hover {
                border: 1px solid rgba(74, 144, 226, 0.54)
            }
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 47px;
            position: absolute;
            top: 1px;
            right: 1px;
            width: 33px;
        }
        .sms-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 1000;
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: white;
    padding: 30px;
    border-radius: 10px;
    width: 90%;
    max-width: 400px;
    position: relative;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}

/* Стили для полей ввода кода */
.verification-code-container {
    display: flex;
    gap: 10px;
    justify-content: center;
    margin: 20px 0;
}

.code-input {
    width: 50px;
    height: 50px;
    text-align: center;
    font-size: 24px;
    border: 2px solid #ddd;
    border-radius: 8px;
    background: #f8f8f8;
}

/* Стили для кнопок */
.verify-button {
    width: 100%;
    background: #6092d9;
    margin-top: 15px;
}

.resend-code {
    background: none;
    border: none;
    color: #333;
    margin: 10px 0;
    cursor: pointer;
    transition: all 0.3s ease;

}
.resend-code:hover {
    background:  #e5e5e5;
    transition: all 0.3s ease;
}

.resend-code:disabled {
    color: #999;
    cursor: not-allowed;
}
.phone-input-group {
    display: flex;
    gap: 10px;
}

.verify-phone-btn {
    padding: 10px 20px;
    white-space: nowrap;
    margin: 0;
}
.verify-phone-btn {
    padding: 10px 20px;
    white-space: nowrap;
    margin: 0;
    transition: all 0.3s ease;
}

.verify-phone-btn.verified {
    background-color: #4CAF50;
    pointer-events: none;
}

.verification-error {
    color: #f44336;
    font-size: 14px;
    margin-top: 10px;
    display: none;
}
.mclose-modal {
    position: absolute;
    top: -4px;
    right: 10px;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #a29c9c;
    padding: 5px 8px;
    line-height: 1;
    z-index: 1001;
    height: 32px;
    transition: color 0.3s ease;
    width: 32px;
    border-radius: 50%;
    background: transparent;
}

.mclose-modal:hover {
    background: #e5e5e5;
    
    transition: color 0.3s ease;
}
.pghit{
    flex-direction: column;
}
.hnotification {
    position: fixed;
    right: 5px;
    top: 5px;
    z-index: 9999;
    padding: 15px 20px;
    color: #fff;
    border-radius: 5px;
    opacity: 0; /* Начальное состояние прозрачности */
    transform: translateY(-20px); /* Начальное состояние позиции */
    transition: opacity 0.3s ease, transform 0.3s ease; /* Анимация для прозрачности и позиции */
}

.hnotification.show {
    opacity: 1; /* Конечное состояние прозрачности */
    transform: translateY(0); /* Конечное состояние позиции */
}

.hnotification.success {
    background: rgb(27, 208, 100);
}

.hnotification.info {
    background: #26c767;
}
.sign-up-container form {
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: #b9b9b9 #ffffff;
}

.sign-up-container form::-webkit-scrollbar {
    width: 10px;
}

.sign-up-container form::-webkit-scrollbar-track {
    background:rgb(163, 37, 37);
    border-radius: 5px;
}

.sign-up-container form::-webkit-scrollbar-thumb {
    background:rgb(36, 193, 49);
    border-radius: 0;
}

.sign-up-container form::-webkit-scrollbar-thumb:hover {
    background:rgb(146, 212, 21);
}
.mtnote{
    color: #999;
    font-size: 14px;
}
.mcontent h2{
    color: #444;
    margin-bottom: 21px;
}


    </style>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="sign-in-container form-container">
                <form id="signInForm">
                    <h1 class="ftitle">Kirish</h1>
                    <div class="form-group">
                        <label>Telefon</label>
                        <input type="tel" id="signInPhone" name="phone" required>
                        <div class="error-message">Telefon raqamni to'g'ri kiriting</div>
                    </div>
                    <div class="form-group">
                        <label>Mahfiy so'z</label>
                        <div class="password-input-group">
                            <input type="password" name="password" required>
                            <button type="button" class="toggle-password">
                                <span class="eye-icon">
                                    <i class="icon-eye"></i>
                                </span>
                            </button>
                        </div>
                        <div class="error-message">Mahfiy so'zni kiriting</div>
                    </div>
                    <div class="form-links">
                        <a href="#" class="forgot-password">Mahfiy so'zni tiklash.</a>
                    </div>
                    <button type="submit">Kirish</button>
                    <p class="switch-form" onclick="switchToSignUp()">A'zo bo'lmaganmisiz? A'zo bo'lish</p>
                </form>
            </div>
            <div class="sign-up-container form-container">
                <form id="signUpForm">
                    <h1 class="ftitle">A'zo bo'lish</h1>
                    <!-- <div class="form-group">
                        <label>Фото профиля</label>
                        <div class="avatar-upload">
                            <input type="file" id="avatarInput" name="avatar" accept="image/*" hidden>
                            <div class="avatar-preview" onclick="document.getElementById('avatarInput').click()">
                                <span class="avatar-preview-text">Нажмите для загрузки фото</span>
                                <img id="avatarPreview" alt="avatar">
                                <div class="avatar-hover-text">Изменить фото</div>
                            </div>
                        </div>
                        <div class="error-message">Загрузите фото профиля</div>
                    </div> -->
                    <div class="form-group">
                        <label>Ism</label>
                        <input type="text" name="first_name" required>
                        <div class="error-message">Ismingizni yozing</div>
                    </div>
                    <div class="form-group">
                        <label>Sharif</label>
                        <input type="text" name="last_name" required>
                        <div class="error-message">Sharifingizni yozing</div>
                    </div>

                    <div class="form-group">
                        <label>Davlat</label>
                        <select name="country" required id="countrieshan">
                            <option value="">Davlatni tanlang</option>
                            <option value="Узбекистан">Узбекистан</option>
                            <option value="Россия">Россия</option>
                            <option value="Казахстан">Казахстан</option>
                            <!-- Добавьте другие страны по необходимости -->
                        </select>
                        <div class="error-message">Davlatni tanlang</div>
                    </div>
                    <div class="form-group">
                        <label>Viloyat/shaxar</label>
                        <select name="city" required>
                            <option value="">Viloyat/shaxarni tanlang</option>
                            <!-- Пример для Ташкентской области -->
                            <option value="Ташкент">Ташкент</option>
                            <option value="Чиназ">Чиназ</option>
                            <!-- Добавьте другие города по необходимости -->
                        </select>
                        <div class="error-message">Vilyat yoki shaxarni tanlang</div>
                    </div>

                    <div class="form-group">
                        <label>Tuman</label>
                        <select name="city" required>
                            <option value="">Tumanni tanlang</option>
                            <option value="Ташкент">Bektemir</option>
                            <option value="Чиназ">Sirgeli</option>
                        </select>
                        <div class="error-message">Tumanni tanlang</div>
                    </div>
                    <div class="form-group">
                        <label>Jinsingiz</label>
                        <div class="gender-radio-group">
                            <label class="radio-container">
                                <input type="radio" name="gender" value="male" required checked>
                                <span class="radio-custom"></span>
                                <span class="radio-label">Erkak</span>
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="gender" value="female" required>
                                <span class="radio-custom"></span>
                                <span class="radio-label">Ayol</span>
                            </label>
                        </div>
                        <div class="error-message">Jinsingizni tanlang</div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required>
                        <div class="error-message">Emailni to'g'ri kiriting</div>
                    </div>
                    <div class="form-group">
    <label>Телефон</label>
    <div class="phone-input-group pghit">
        <input type="tel" id="signUpPhone" name="phone" required>
        <div class="error-message">Telefon raqam noto'g'ri</div>
        <button type="button" class="verify-phone-btn">Tasdiqlash</button>
    </div>
    
</div>
                    <!-- Добавьте перед кнопкой "Зарегистрироваться" -->
                    <div class="form-group">
                        <label>Mahfiy so'z</label>
                        <div class="password-input-group">
                            <input type="password" name="password" id="password" required>
                            <button type="button" class="toggle-password">
                                <i class="eye-icon">👁️</i>
                            </button>
                        </div>
                        <div class="password-strength">
                            <div class="strength-bars">
                                <div class="strength-bar"></div>
                                <div class="strength-bar"></div>
                                <div class="strength-bar"></div>
                                <div class="strength-bar"></div>
                            </div>
                            <div class="strength-label">Mahfiy so'z murakkabligi: <span>mavjud emas</span></div>
                        </div>
                        <div class="error-message">Mahfiy so'zni kiriting</div>
                    </div>

                    <div class="form-group">
                        <label>Mahfiy so'z (takroran)</label>
                        <div class="password-input-group">
                            <input type="password" name="password_confirmation" id="passwordConfirm" required>
                            <button type="button" class="toggle-password">
                                <i class="eye-icon">👁️</i>
                            </button>
                        </div>
                        <div class="error-message">Mahfiy so'zlar bir hil emas</div>
                    </div>
                    <div class="form-group">
                        <div class="uslovi">
                            A'zo bo'lar ekansiz tizim <a href="" class="opre">Shart va qoidalari</a> bilan tanishib
                            chiqqan va rozilik bildirgan hisoblanasiz.
                        </div>
                    </div>
                    <button type="submit">A'zo bo'lish</button>
                    <p class="switch-form" onclick="switchToSignIn()">A'zo bo'lganmisiz? Kirish</p>
                </form>
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <img src="https://i.postimg.cc/sXfN7n1x/8336929c08f9bd6e85eb24ff9261a64b.jpg" alt="Banner">
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script>

        $(document).ready(function () {
            $('select[id="countrieshan"], select[name="region"], select[name="city"]').select2();
        });


        // Инициализация intl-tel-input
        const signInPhoneInput = document.querySelector("#signInPhone");
        const signUpPhoneInput = document.querySelector("#signUpPhone");

        const phoneInputConfig = {
            initialCountry: "uz",
            onlyCountries: ["uz", "ru", "kz", "kg", "tj", "tm"],
            separateDialCode: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        };

        const itiSignIn = window.intlTelInput(signInPhoneInput, phoneInputConfig);
        const itiSignUp = window.intlTelInput(signUpPhoneInput, phoneInputConfig);

        // Конфигурация масок для разных стран
        const maskConfigs = {
            'uz': {
                mask: '(00) 000-00-00',
                placeholder: '(90) 123-45-67'
            },
            'ru': {
                mask: '(000) 000-00-00',
                placeholder: '(912) 345-67-89'
            },
            'kz': {
                mask: '(000) 000-00-00',
                placeholder: '(701) 234-56-78'
            },
            'kg': {
                mask: '(000) 000-000',
                placeholder: '(312) 123-456'
            },
            'tj': {
                mask: '(00) 000-00-00',
                placeholder: '(92) 777-77-77'
            },
            'tm': {
                mask: '(00)-00-00-00',
                placeholder: '(12)-34-56-78'
            }
        };

        // Создание маски для телефона
        function createPhoneMask(input, iti) {
            let currentMask = null;

            function updateMask(countryCode) {
                const config = maskConfigs[countryCode] || maskConfigs['uz'];

                if (currentMask) {
                    currentMask.destroy();
                }

                currentMask = IMask(input, {
                    mask: config.mask,
                    lazy: false,
                    placeholderChar: '_',
                    definitions: {
                        '0': /[0-9]/
                    }
                });

                input.placeholder = config.placeholder;
            }

            // Обработчик изменения страны
            input.addEventListener('countrychange', function () {
                const countryData = iti.getSelectedCountryData();
                updateMask(countryData.iso2);
            });

            // Инициализация начальной маски
            updateMask(iti.getSelectedCountryData().iso2);

            return {
                getCurrentMask: () => currentMask,
                updateMask: updateMask
            };
        }

        // Применяем маски к обоим полям
        const signInMask = createPhoneMask(signInPhoneInput, itiSignIn);
        const signUpMask = createPhoneMask(signUpPhoneInput, itiSignUp);

        // Валидация телефона
        function validatePhone(input) {
            let iti = input.id === 'signInPhone' ? itiSignIn : itiSignUp;
            const currentMask = input.id === 'signInPhone' ? signInMask.getCurrentMask() : signUpMask.getCurrentMask();

            const isComplete = currentMask.masked.isComplete;
            const formGroup = input.closest('.form-group');
            const errorMessage = formGroup.querySelector('.error-message');

            if (!isComplete) {
                formGroup.classList.add('error');
                errorMessage.textContent = "Raqamni to'liq kiriting";
                return false;
            }

            formGroup.classList.remove('error');
            return true;
        }

        // Обработчики события потери фокуса для валидации
        signInPhoneInput.addEventListener('blur', () => validatePhone(signInPhoneInput));
        signUpPhoneInput.addEventListener('blur', () => validatePhone(signUpPhoneInput));

        // Обработка форм
        document.getElementById('signUpForm').addEventListener('submit', function (e) {
            e.preventDefault();
            if (validatePhone(signUpPhoneInput)) {
                // Здесь код отправки формы
                console.log('Форма регистрации валидна');
            }
        });

        document.getElementById('signInForm').addEventListener('submit', function (e) {
            e.preventDefault();
            if (validatePhone(signInPhoneInput)) {
                // Здесь код отправки формы
                console.log('Форма входа валидна');
            }
        });

        // Остальной код для форм остается без изменений...
        // (код для аватара, переключения форм, общей валидации и обработки форм)

        // Превью аватара
        // const avatarInput = document.getElementById('avatarInput');
        // const avatarPreview = document.getElementById('avatarPreview');
        // const previewText = document.querySelector('.avatar-preview-text');

        // avatarInput.addEventListener('change', function (e) {
        //     const file = e.target.files[0];
        //     const formGroup = this.closest('.form-group');

        //     if (file) {
        //         const reader = new FileReader();
        //         reader.onload = function (e) {
        //             avatarPreview.src = e.target.result;
        //             avatarPreview.style.display = 'block';
        //             previewText.style.display = 'none';
        //             formGroup.classList.remove('error');
        //         }
        //         reader.readAsDataURL(file);
        //     } else {
        //         avatarPreview.style.display = 'none';
        //         previewText.style.display = 'block';
        //         formGroup.classList.add('error');
        //     }
        // });

        // Переключение форм
        function switchToSignUp() {
            document.querySelector('.container').classList.add('right-panel-active');
        }

        function switchToSignIn() {
            document.querySelector('.container').classList.remove('right-panel-active');
        }

        // Валидация полей
        // Обновите функцию validateField
        function validateField(field) {
            const formGroup = field.closest('.form-group');
            const errorMessage = formGroup.querySelector('.error-message');
            let isValid = true;

            formGroup.classList.remove('error');

            if (field.required && !field.value) {
                isValid = false;
            }

            // Специальная проверка для файла аватара
            if (field.type === 'file' && field.name === 'avatar') {
                const avatarPreview = document.getElementById('avatarPreview');
                if (!avatarPreview.src || avatarPreview.style.display === 'none') {
                    isValid = false;
                    formGroup.classList.add('error');
                    errorMessage.textContent = "Загрузите фото профиля";
                }
            }

            if (field.type === 'email' && field.value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(field.value)) {
                    isValid = false;
                }
            }

            if (field.type === 'tel' && field.value) {
                if (!validatePhone(field)) {
                    isValid = false;
                }
            }

            if (!isValid) {
                formGroup.classList.add('error');
            }

            return isValid;
        }

        // Обновите обработчик формы регистрации
        document.getElementById('signUpForm').addEventListener('submit', function (e) {
            e.preventDefault();

            let isValid = true;

            // Проверяем все поля формы
            this.querySelectorAll('input, select').forEach(field => {
                if (!validateField(field)) {
                    isValid = false;
                }
            });

            // Дополнительная проверка аватара
            // Обработка загрузки аватара
            const avatarInput = document.getElementById('avatarInput');
            const avatarPreview = document.getElementById('avatarPreview');
            const avatarContainer = document.querySelector('.avatar-preview');
            const previewText = document.querySelector('.avatar-preview-text');

            avatarInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                const formGroup = this.closest('.form-group');

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        avatarPreview.src = e.target.result;
                        avatarPreview.style.display = 'block';
                        avatarContainer.classList.add('has-image');
                        formGroup.classList.remove('error');
                    }
                    reader.readAsDataURL(file);
                } else {
                    avatarPreview.style.display = 'none';
                    avatarContainer.classList.remove('has-image');
                    formGroup.classList.add('error');
                }
            });

            // Добавляем эффект при перетаскивании файла
            avatarContainer.addEventListener('dragover', function (e) {
                e.preventDefault();
                this.style.borderColor = '#ff416c';
                this.style.background = '#fff5f7';
            });

            avatarContainer.addEventListener('dragleave', function (e) {
                e.preventDefault();
                if (!this.classList.contains('has-image')) {
                    this.style.borderColor = '#ddd';
                    this.style.background = '#f8f8f8';
                }
            });

            avatarContainer.addEventListener('drop', function (e) {
                e.preventDefault();
                const file = e.dataTransfer.files[0];
                if (file && file.type.startsWith('image/')) {
                    avatarInput.files = e.dataTransfer.files;
                    const event = new Event('change');
                    avatarInput.dispatchEvent(event);
                }
            });
        });




        // Валидация при потере фокуса
        document.querySelectorAll('input, select').forEach(input => {
            input.addEventListener('blur', () => validateField(input));
            input.addEventListener('input', function () {
                if (this.closest('.form-group').classList.contains('error')) {
                    validateField(this);
                }
            });
        });

        // Обработка форм
        document.getElementById('signUpForm').addEventListener('submit', function (e) {
            e.preventDefault();

            let isValid = true;
            this.querySelectorAll('input, select').forEach(field => {
                if (!validateField(field)) {
                    isValid = false;
                }
            });

            if (isValid) {
                console.log('Регистрация успешна');
                // Добавьте здесь логику отправки формы
            }
        });

        document.getElementById('signInForm').addEventListener('submit', function (e) {
            e.preventDefault();

            let isValid = true;
            this.querySelectorAll('input').forEach(field => {
                if (!validateField(field)) {
                    isValid = false;
                }
            });

            if (isValid) {
                console.log('Авторизация успешна');
                // Добавьте здесь логику отправки формы
            }
        });


        // Функция проверки сложности пароля
        function checkPasswordStrength(password) {
            let strength = 0;

            // Проверка длины
            if (password.length >= 8) strength += 1;

            // Проверка на наличие букв и цифр
            if (password.match(/[a-zA-Z]+/) && password.match(/[0-9]+/)) strength += 1;

            // Проверка на специальные символы
            if (password.match(/[!@#$%^&*(),.?":{}|<>]/)) strength += 1;

            return strength;
        }

        // Обработчик ввода пароля
        document.getElementById('password').addEventListener('input', function () {
            const password = this.value;
            const strengthBar = document.querySelector('.strength-bar');
            const strengthLabel = document.querySelector('.strength-label span');

            strengthBar.className = 'strength-bar';

            if (password.length > 0) {
                const strength = checkPasswordStrength(password);

                if (strength === 1) {
                    strengthBar.classList.add('weak');
                    strengthLabel.textContent = 'oson';
                } else if (strength === 2) {
                    strengthBar.classList.add('medium');
                    strengthLabel.textContent = "o'rtacha";
                } else if (strength === 3) {
                    strengthBar.classList.add('strong');
                    strengthLabel.textContent = 'murakkab';
                }
            } else {
                strengthLabel.textContent = "yo'q";
            }
        });

        // Проверка совпадения паролей
        document.getElementById('passwordConfirm').addEventListener('input', function () {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            const formGroup = this.closest('.form-group');

            if (password !== confirmPassword) {
                formGroup.classList.add('error');
            } else {
                formGroup.classList.remove('error');
            }
        });

        // Добавьте в существующую функцию validateField проверку паролей
        const originalValidateField = validateField;
        validateField = function (field) {
            let isValid = originalValidateField(field);

            if (field.name === 'password_confirmation') {
                const password = document.getElementById('password').value;
                if (field.value !== password) {
                    isValid = false;
                    field.closest('.form-group').classList.add('error');
                }
            }

            if (field.name === 'password') {
                const strength = checkPasswordStrength(field.value);
                if (strength < 2) { // Требуем как минимум средний уровень сложности
                    isValid = false;
                    field.closest('.form-group').classList.add('error');
                    field.closest('.form-group').querySelector('.error-message').textContent =
                        "Mahfiy so'z umumiy 8 ta harf, raqam va mahsus belgidan iborat bo'lishi kerak";
                }
            }

            return isValid;
        };
        // Функция проверки сложности пароля
        function checkPasswordStrength(password) {
            let strength = 0;

            // Проверка длины
            if (password.length >= 8) strength += 1;

            // Проверка на строчные буквы
            if (password.match(/[a-z]+/)) strength += 1;

            // Проверка на заглавные буквы и цифры
            if (password.match(/[A-Z]+/) && password.match(/[0-9]+/)) strength += 1;

            // Проверка на специальные символы
            if (password.match(/[!@#$%^&*(),.?":{}|<>]/)) strength += 1;

            return strength;
        }

        // Обработчик ввода пароля
        document.getElementById('password').addEventListener('input', function () {
            const password = this.value;
            const strengthBars = document.querySelector('.strength-bars');
            const strengthLabel = document.querySelector('.strength-label span');

            strengthBars.className = 'strength-bars';

            if (password.length > 0) {
                const strength = checkPasswordStrength(password);

                strengthBars.classList.add(`level-${strength}`);

                switch (strength) {
                    case 1:
                        strengthLabel.textContent = 'ishonchsiz';
                        break;
                    case 2:
                        strengthLabel.textContent = "o'rta";
                        break;
                    case 3:
                        strengthLabel.textContent = 'yaxshi';
                        break;
                    case 4:
                        strengthLabel.textContent = 'murakkab';
                        break;
                    default:
                        strengthLabel.textContent = 'mavjud emas';
                }
            } else {
                strengthLabel.textContent = 'mavjud emas';
            }
        });

        // Обработчик кнопок показать/скрыть пароль
        // document.querySelectorAll('.toggle-password').forEach(button => {
        //     button.addEventListener('click', function() {
        //         const input = this.parentElement.querySelector('input');
        //         const icon = this.querySelector('.eye-icon');

        //         if (input.type === 'password') {
        //             input.type = 'text';
        //             icon.textContent = '👁️‍🗨️';
        //         } else {
        //             input.type = 'password';
        //             icon.textContent = '👁️';
        //         }
        //     });
        // });



        // $(document).ready(function() {
        //         $('select[name="country"], select[name="region"], select[name="city"]').select2();
        //     });

        // ... существующий код ...

        document.addEventListener('DOMContentLoaded', function () {
            // Проверяем текущий путь
            const path = window.location.pathname;

            // Если путь просто /registration или корневой,
            // перенаправляем на /registration/signin
            if (path === '/registration' || path === '/') {
                window.history.replaceState(null, '', '/registration/signin');
            }

            // Устанавливаем правильное состояние формы в зависимости от URL
            if (path.includes('signup')) {
                document.querySelector('.container').classList.add('right-panel-active');
            } else {
                document.querySelector('.container').classList.remove('right-panel-active');
            }

            // Обработчик кнопки "назад" в браузере
            window.addEventListener('popstate', function (event) {
                const newPath = window.location.pathname;
                if (newPath.includes('signup')) {
                    document.querySelector('.container').classList.add('right-panel-active');
                } else {
                    document.querySelector('.container').classList.remove('right-panel-active');
                }
            });
        });

        function switchToSignUp() {
            document.querySelector('.container').classList.add('right-panel-active');
            history.pushState({ page: 'signup' }, '', '/registration/signup');
        }

        function switchToSignIn() {
            document.querySelector('.container').classList.remove('right-panel-active');
            history.pushState({ page: 'signin' }, '', '/registration/signin');
        }

        // ... существующий код ...
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function () {
                const input = this.parentElement.querySelector('input');
                const eyeIcon = this.querySelector('.eye-icon');

                if (input.type === 'password') {
                    input.type = 'text';
                    eyeIcon.innerHTML = `<i class="icon-eye"></i>`;
                } else {
                    input.type = 'password';
                    eyeIcon.innerHTML = `<i class="icon-eye-off"></i>`;
                }
            });
        });

    





        document.addEventListener('DOMContentLoaded', function() {
    // Получаем все необходимые элементы
    const smsModal = document.getElementById('smsModal');
    const verifyPhoneBtn = document.querySelector('.verify-phone-btn');
    const closeModalBtn = document.querySelector('.mclose-modal');
    const codeInputs = document.querySelectorAll('.code-input');
    const resendButton = document.querySelector('.resend-code');
    const phoneDisplay = document.querySelector('.phone-number-display');
    const verifyButton = document.querySelector('.verify-button');
    const verificationError = document.querySelector('.verification-error');
    
    let timer;
    const DEMO_CODE = '1234';
    let isVerified = false;

    // Функция запуска таймера
    function startTimer() {
        let timeLeft = 30;
        resendButton.disabled = true;
        resendButton.textContent = `Yangi kod yuborish (${timeLeft})`;
        
        clearInterval(timer);
        timer = setInterval(() => {
            timeLeft--;
            resendButton.textContent = `Yangi kod yuborish (${timeLeft})`;
            
            if (timeLeft <= 0) {
                clearInterval(timer);
                resendButton.disabled = false;
                resendButton.textContent = 'Yangi kod yuborish';
            }
        }, 1000);
    }

    // Функция проверки кода
    function checkCode() {
        const enteredCode = Array.from(codeInputs).map(input => input.value).join('');
        return enteredCode === DEMO_CODE;
    }

    // Функция очистки полей кода
    function clearCodeInputs() {
        codeInputs.forEach(input => {
            input.value = '';
        });
        if (codeInputs.length > 0) {
            codeInputs[0].focus();
        }
    }

    // Функция закрытия модального окна
    function closeModalWindow() {
        smsModal.style.display = 'none';
        clearInterval(timer);
        clearCodeInputs();
        if (verificationError) {
            verificationError.style.display = 'none';
        }
    }

    // Функция успешной верификации
    function handleSuccessfulVerification() {
        isVerified = true;
        verifyPhoneBtn.classList.add('verified');
        verifyPhoneBtn.innerHTML = '<i class="icon-check"></i> TASDIQLANDI';
        verifyPhoneBtn.disabled = true;
        
        const verificationInput = document.createElement('input');
        verificationInput.type = 'hidden';
        verificationInput.name = 'phone_verified';
        verificationInput.value = 'true';
        document.getElementById('signUpForm').appendChild(verificationInput);
        
        closeModalWindow();
        showNotification('Muvaffaqqiyatli tasdiqlandi!', 'success');
    }

    // Функция показа уведомлений
    function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `hnotification ${type}`;
    notification.textContent = message;
    document.body.appendChild(notification);

    // Добавляем класс show для анимации появления
    setTimeout(() => {
        notification.classList.add('show');
    }, 10);

    // Удаляем уведомление через 3 секунды с анимацией исчезновения
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => {
            notification.remove();
        }, 300); // Время анимации исчезновения
    }, 3000);
}

    // Обработчики событий
    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', function(e) {
            e.preventDefault();
            closeModalWindow();
        });
    }

    if (verifyButton) {
        verifyButton.addEventListener('click', function() {
            if (checkCode()) {
                handleSuccessfulVerification();
            } else {
                verificationError.textContent = "Noto'g'ri kod. Qayta urinib ko'ring";
                verificationError.style.display = 'block';
                clearCodeInputs();
            }
        });
    }

    if (verifyPhoneBtn) {
        verifyPhoneBtn.addEventListener('click', function() {
            const phoneInput = document.getElementById('signUpPhone');
            if (validatePhone(phoneInput)) {
                smsModal.style.display = 'flex';
                phoneDisplay.textContent = phoneInput.value;
                startTimer();
                clearCodeInputs();
                verificationError.style.display = 'none';
                console.log('Demo SMS code:', DEMO_CODE);
                showNotification('Telefon raqamingizga sms tarzida kod yuborildi', 'info');
            }
        });
    }

    // Обработка ввода кода
    codeInputs.forEach((input, index) => {
        input.addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
            
            if (this.value.length === 1) {
                if (index < codeInputs.length - 1) {
                    codeInputs[index + 1].focus();
                }
                if (index === codeInputs.length - 1) {
                    verifyButton.click();
                }
            }
        });

        input.addEventListener('keydown', function(e) {
            if (e.key === 'Backspace' && !this.value && index > 0) {
                codeInputs[index - 1].focus();
            }
        });
    });

    // Закрытие по клику вне модального окна
    smsModal.addEventListener('click', function(e) {
        if (e.target === smsModal) {
            closeModalWindow();
        }
    });

    // Закрытие по Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && smsModal.style.display === 'flex') {
            closeModalWindow();
        }
    });

    // Обработчик повторной отправки кода
    if (resendButton) {
        resendButton.addEventListener('click', function() {
            if (!resendButton.disabled) {
                startTimer();
                clearCodeInputs();
                console.log('Demo SMS code:', DEMO_CODE);
                showNotification('Yangi kod yuborildi', 'info');
            }
        });
    }
});






    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <div class="sms-modal" id="smsModal">
    <div class="modal-content mcontent">
        <h2>Telefon raqamni tasdiqlash</h2>
        <p class="modal-text mtnote">Quyudagi raqamga sms tarzida kod yuborildi:</p>
        <p class="phone-number-display">+998 ** *** ** **</p>
        <div class="verification-code-container">
            <input type="text" maxlength="1" class="code-input" inputmode="numeric" autocomplete="none">
            <input type="text" maxlength="1" class="code-input" inputmode="numeric" autocomplete="none">
            <input type="text" maxlength="1" class="code-input" inputmode="numeric" autocomplete="none">
            <input type="text" maxlength="1" class="code-input" inputmode="numeric" autocomplete="none">
        </div>
        <div class="error-message verification-error"></div>
        <button class="resend-code" disabled>
           Kodni yangidan yuborish (<span class="timer">30</span>)
        </button>
        <button class="verify-button">Tasdiqlash</button>
        <button class="mclose-modal" type="button">&times;</button>
    </div>
</div>
</body>

</html>