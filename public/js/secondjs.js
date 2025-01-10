function formatNumber(input) {
    // Получаем значение из поля ввода
    let value = input.value;

    // Удаляем все пробелы из значения
    value = value.replace(/\s+/g, '');

    // Проверяем, что значение является числом
    if (!isNaN(value) && value !== '') {
        // Преобразуем строку в число и форматируем его с пробелами
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
    }

    // Устанавливаем отформатированное значение обратно в поле ввода
    input.value = value;
}




let currentStep = 1;
let imgArray = []; // Объявляем imgArray глобально

function showStep(step) {
    const steps = document.querySelectorAll('.step');
    const indicators = document.querySelectorAll('.step-indicator');
    steps.forEach((stepElement, index) => {
        stepElement.classList.remove('active');
        if (index + 1 === step) {
            stepElement.classList.add('active');
        }
    });
    indicators.forEach((indicator, index) => {
        indicator.classList.remove('active');
        if (index + 1 === step) {
            indicator.classList.add('active');
        }
    });

    const progress = document.getElementById('progress');
    progress.style.width = (step - 1) * 33.33 + 33.33 + '%';
}

function changeStep(stepChange) {
    const stepsCount = document.querySelectorAll('.step').length;
    currentStep += stepChange;
    if (currentStep < 1) currentStep = 1;
    if (currentStep > stepsCount) currentStep = stepsCount;
    showStep(currentStep);
}

function nextStep() {
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

    // Проверка, пустое ли поле загрузки файлов
    const fileInput = currentForm.querySelector('.upload__inputfile');
    const errorElement = fileInput.nextElementSibling; // Предполагается, что элемент ошибки идет сразу после input
    const imgWrap = currentForm.querySelector('.upload__img-wrap');
    const uploadBtn = currentForm.querySelector('.upload__btn');
    const maxImgNote = currentForm.querySelector('.maximgnote');

    if (imgWrap.children.length === 0) {
        errorElement.classList.add('errorshow');
        uploadBtn.classList.add('errorred');
        isValid = false;
    } else {
        errorElement.classList.remove('errorshow');
        uploadBtn.classList.remove('errorred');
    }

    // Проверка количества загруженных изображений
    if (imgWrap.children.length >= 4) {
        maxImgNote.classList.add('errorshowxx');
    } else {
        maxImgNote.classList.remove('errorshowxx');
    }

    if (isValid) {
        changeStep(1);
    }
}

document.getElementById('prevBtn').addEventListener('click', function () {
    changeStep(-1);
});

document.getElementById('nextBtn').addEventListener('click', function () {
    nextStep();
});

showStep(currentStep);

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

            // Валидация входа файла
            var errorElement = $(this).siblings('.error');
            var uploadBtn = $(this).closest('.upload__box').find('.upload__btn')[0]; // Получаем нативный DOM-элемент кнопки
            var maxImgNote = $(this).closest('.upload__box').find('.maximgnote')[0]; // Получаем нативный DOM-элемент maximgnote

            if (files.length > 0) {
                errorElement.classList.remove('errorshow');
                if (uploadBtn) {
                    uploadBtn.classList.remove('errorred');
                }
            } else {
                errorElement.classList.add('errorshow');
                if (uploadBtn) {
                    uploadBtn.classList.add('errorred');
                }
            }

           

            // Проверка количества загруженных изображений
            if (imgWrap.children.length >= 4) {
                if (maxImgNote) {
                    maxImgNote.classList.remove('errorshowxx');
                }
            } else {
                if (maxImgNote) {
                    maxImgNote.classList.add('errorshowxx');
                }
            }

            console.log("Файлы выбраны: " + files.length);
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

        // Проверка, пустое ли поле загрузки файлов после удаления
        const fileInput = $(this).closest('.upload__box').find('.upload__inputfile')[0]; // Получаем нативный DOM-элемент
        const errorElement = $(this).closest('.upload__box').find('.error')[0]; // Получаем нативный DOM-элемент
        const uploadBtn = $(this).closest('.upload__box').find('.upload__btn')[0]; // Получаем нативный DOM-элемент кнопки
        const imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap')[0]; // Получаем нативный DOM-элемент imgWrap
        const maxImgNote = $(this).closest('.upload__box').find('.maximgnote')[0]; // Получаем нативный DOM-элемент maximgnote

        if (fileInput && errorElement && uploadBtn && imgWrap && maxImgNote) {
            if (imgArray.length === 0 && fileInput.files.length === 0) {
                // Сбрасываем состояние
                imgArray = [];
                fileInput.value = ''; // Очищаем значение input file
                $(this).closest('.upload__box').find('.upload__img-wrap').empty(); // Удаляем все добавленные изображения
                errorElement.classList.add('errorshow');
                uploadBtn.classList.add('errorred');
                maxImgNote.classList.add('errorshowxx');
            } else {
                errorElement.classList.remove('errorshow');
                uploadBtn.classList.remove('errorred');

                // Проверка количества загруженных изображений
                if (imgWrap.children.length >= 4) {
                    maxImgNote.classList.add('errorshowxx');
                } else {
                    maxImgNote.classList.remove('errorshowxx');
                }
            }
        } else {
            console.error('Элементы не найдены! Проверьте HTML.');
        }
    });

    $('body').on('click', ".set-primary-btn", function (e) {
        $('.img-bg').removeClass('primary-img');
        $(this).siblings('.img-bg').addClass('primary-img');
    });
}


