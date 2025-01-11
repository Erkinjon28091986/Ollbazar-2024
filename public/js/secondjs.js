let currentStep = 1;
let imgArray = []; // Объявляем imgArray глобально

function showStep(step) {
    const steps = document.querySelectorAll('.step');
    steps.forEach((stepElement, index) => {
        stepElement.classList.remove('active');
        if (index + 1 === step) {
            stepElement.classList.add('active');
        }
    });

    const progress = document.getElementById('progress');
    progress.style.width = (step - 1) * 33.33 + 33.33 + '%';
}

function changeStep(stepChange) {
    console.log(`Current Step: ${currentStep}, Step Change: ${stepChange}`);
    const stepsCount = document.querySelectorAll('.step').length;
    currentStep += stepChange;

    // Убедимся, что текущий шаг не выходит за пределы допустимого диапазона
    if (currentStep < 1) currentStep = 1;
    if (currentStep > stepsCount) currentStep = stepsCount;

    console.log(`New Step: ${currentStep}`);
    showStep(currentStep);
}

function nextStep() {
    console.log(`Next Step from Step: ${currentStep}`);
    const currentForm = document.querySelector(`#step-${currentStep} form`);
    const elements = currentForm.querySelectorAll('.validate');
    let isValid = true;

    

    elements.forEach(element => {
        if (!element.checkValidity()) {
            element.classList.add('invalid');
            isValid = false;
        } else {
            element.classList.remove('invalid');
        }
    });

    const uploadWrap = currentForm.querySelector('.upload__img-wrap');
    const uploadBtn = currentForm.querySelector('.upload__btn');
    const imgError = currentForm.querySelector('.errorimg');

    if (uploadWrap) { // Проверяем, что uploadWrap не равен null
        if (uploadWrap.children.length === 0) {
            if (imgError) {
                imgError.style.display = 'block';
                imgError.classList.add('errorshow');
            } else {

            }
            if (uploadBtn) {
                uploadBtn.classList.add('errorborder');
            } else {

            }
            isValid = false;
        } else {
            if (imgError) {
                imgError.classList.remove('errorshow');
            }
            if (uploadBtn) {
                uploadBtn.classList.remove('errorborder');
            }
        }
    } else {

    }



    if (isValid) {
        changeStep(1);
    }

}

document.getElementById('prevBtn').addEventListener('click', function (event) {
    event.preventDefault();
    changeStep(-1);
});

document.getElementById('nextBtn').addEventListener('click', function (event) {
    event.preventDefault();
    nextStep();
});

// Функция для анимации прогресс-бара при загрузке страницы
function animateProgressBar() {
    const progress = document.getElementById('progress');
    progress.classList.add('progress-animation');
    setTimeout(function () {
        progress.style.width = '33.33%';
    }, 10); // Небольшая задержка, чтобы класс был добавлен перед установкой ширины
}

// Вызываем функцию анимации прогресс-бара после загрузки страницы
document.addEventListener("DOMContentLoaded", function () {
    showStep(currentStep);
    animateProgressBar();
});

// Получаем элементы
const textarea = document.querySelector('.theihgt');
const output = document.querySelector('.outsrew');
const maxLength = 2000; // Максимальное количество символов

// Проверяем, чтобы элементы существовали
if (textarea && output) {
    textarea.addEventListener('input', () => {
        const charCount = textarea.value.length; // Подсчитываем количество символов
        if (charCount > maxLength) {
            textarea.value = textarea.value.substring(0, maxLength); // Обрезаем текст до максимального количества символов
        }
        output.textContent = `${textarea.value.length}`; // Обновляем текст
    });
} else {
    console.error('Элементы не найдены! Проверьте HTML.');
}

//---------------Загрузка изображений с предварительным просмотром---------------

$(document).ready(function () {
    ImgUpload();
});



function ImgUpload() {
    var imgWrap = "";

    $('.upload__inputfile').each(function () {
        $(this).on('change', function (e) {
            document.querySelector('.upload__img-wrap').classList.add('upload__img-wrap2');
            imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
            var maxLength = $(this).attr('data-max_length');
           

            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
            var iterator = 0;

            filesArr.forEach(function (f, index) {
                if (!f.type.match('image.*')) {
                    return;
                }

                if (imgArray.length >= maxLength) {
                    return false;
                } else {
                    imgArray.push(f);

                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var html = "<div class='upload__img-box'>" +
                            "<img src='" + e.target.result + "' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'>" +
                            "<div class='upload__img-close'></div>" +
                            "<a href='javascript:void(0)' class='set-primary-btn'>Set as Primary</a>" +
                            "</div>";
                        imgWrap.append(html);
                        iterator++;
                    }
                    reader.readAsDataURL(f);
                }
            });

        });
    });

    $('body').on('click', ".upload__img-close", function (e) {
        var file = $(this).siblings('.img-bg').data("file");
        
        for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i].name === file) {
                imgArray.splice(i, 1);
                break;
            }
        }
        
        $(this).parent().remove();
        
        var remainingCloseButtons = $('.upload__img-wrap .upload__img-close').length;
        
        if (remainingCloseButtons === 0) {
          $('.upload__img-wrap').removeClass('upload__img-wrap2');
        }
    });
    

    $('body').on('click', ".set-primary-btn", function (e) {
        $('.img-bg').removeClass('primary-img');
        $(this).siblings('.img-bg').addClass('primary-img');
    });


}

//--------------Кредит
document.querySelectorAll('input[name="paymentOption"]').forEach((radio) => {
    radio.addEventListener('change', function () {
        const yashiruElement = document.querySelector('.yashiru');
        if (this.value === 'Kredit' || this.value === "Bo'lib to'lash") {
            yashiruElement.style.display = 'block';
        } else {
            yashiruElement.style.display = 'none';
        }
    });
});

document.getElementById('initialPayment').addEventListener('input', function () {
    const price = parseFloat(document.getElementById('priceInput').value);
    const initialPayment = parseFloat(this.value);
    const resultSpan = document.getElementById('resultonpercent');
    const tooltip = document.getElementById('htooltip');

    if (!isNaN(price) && !isNaN(initialPayment) && price > 0) {
        const maxInitialPayment = Math.floor(price * 0.90);
        if (initialPayment > maxInitialPayment) {
            this.value = maxInitialPayment;
            resultSpan.textContent = `${(100 * maxInitialPayment / price).toFixed(0)}%`;
            tooltip.style.display = 'block';
        } else {
            tooltip.style.display = 'none';
            const percentage = (100 * initialPayment / price).toFixed(0);
            resultSpan.textContent = `${percentage}%`;
        }
    } else {
        resultSpan.textContent = "0%";
        tooltip.style.display = 'none';
    }
});

document.getElementById('priceInput').addEventListener('input', function () {
    document.getElementById('initialPayment').dispatchEvent(new Event('input'));
});
