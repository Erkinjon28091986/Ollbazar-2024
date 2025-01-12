//-----------------------change currency-----------------

document.getElementById("hcurrencySelected").onclick = function () {
    toggleDropdown();
};

function toggleDropdown() {
    var dropdown = document.getElementById("hcurrencyDropdown");
    dropdown.classList.toggle("hselect-show");
}

function updateCurrency(currency) {
    document.getElementById("hcurrencySelected").innerText = currency;
    var elements = document.getElementsByClassName("currencytype");
    for (var i = 0; i < elements.length; i++) {
        elements[i].innerText = currency;
    }
    toggleDropdown();
}




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
    const imgError = currentForm.querySelector('.upload__btn-box .errorimg');

    if (uploadWrap && uploadWrap.children.length === 0) {
        if (imgError) {
            imgError.style.display = 'block';
            imgError.classList.add('errorshow');
        }
        if (uploadBtn) {
            uploadBtn.classList.add('errorborder');
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

    const tagWrapper = currentForm.querySelector('.tag-input-wrapper');
    const tagsError = currentForm.querySelector('.tag-container .errorimg');
    const wrappertagses = document.getElementById('tagInputWrapper');

    if (tagWrapper) {
        const tagCount = tagWrapper.querySelectorAll('.tag').length;

        if (tagCount === 0) {
            if (tagsError) {
                tagsError.style.display = 'block';
                tagsError.classList.add('errorshow');
                wrappertagses.classList.add('max-tags');
            }
            isValid = false;
        } else {
            if (tagsError) {
                tagsError.style.display = 'none';
                tagsError.classList.remove('errorshow');
                wrappertagses.classList.remove('max-tags');
            }
        }
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

document.querySelector('.initialPayment').addEventListener('input', function () {
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


//-----------------------tag function--------------------------
class TagInput {
    constructor(maxTags = 5) {
        this.tags = [];
        this.maxTags = maxTags;
        this.input = document.getElementById('tagInput');
        this.wrapper = document.getElementById('tagInputWrapper');
        this.errorText = document.getElementById('errorTextss');
        this.tagsCounter = document.getElementById('tagsCounter');
        this.statusMessage = document.getElementById('statusMessage');
        this.firstTimeHint = document.getElementById('firstTimeHint');
        this.hasShownFirstTimeHint = false;
        this.setupEventListeners();
        this.updateCounter();
        this.showFirstTimeHint();
    }

    showFirstTimeHint() {
        if (!this.hasShownFirstTimeHint) {
            this.firstTimeHint.classList.add('visible');
            setTimeout(() => {
                this.firstTimeHint.classList.remove('visible');
                this.hasShownFirstTimeHint = true;
            }, 5000);
        }
    }

    showStatus(message, type = 'info') {
        this.statusMessage.textContent = message;
        this.statusMessage.className = 'status-message ' + type;
        setTimeout(() => {
            this.statusMessage.className = 'status-message';
        }, 3000);
    }

    setupEventListeners() {
        this.input.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                this.addTag();
            } else if (e.key === 'Backspace' && !this.input.value && this.tags.length > 0) {
                this.removeLastTag();
            }
        });

        this.input.addEventListener('focus', () => {
            if (this.tags.length === 0) {
                this.showFirstTimeHint();
            }
        });
    }

    updateCounter() {
        const count = this.tags.length;
        this.tagsCounter.textContent = `${count}/${this.maxTags} so'z`;

        this.tagsCounter.className = 'tags-counter';
        if (count >= this.maxTags - 1) {
            this.tagsCounter.classList.add('danger');
        } else if (count >= this.maxTags - 2) {
            this.tagsCounter.classList.add('warning');
        }

        if (count >= this.maxTags) {
            this.wrapper.classList.add('max-tags');
            this.input.classList.add('disabled');
            this.showStatus("Cheklov: eng ko'p kalit so'zlar soni", 'error');
        } else {
            this.wrapper.classList.remove('max-tags');
            this.input.classList.remove('disabled');
        }
    }

    addTag() {
        const value = this.input.value.trim();
        if (value) {
            if (this.tags.length >= this.maxTags) {
                this.wrapper.classList.add('shake');
                this.showStatus(`Eng ko'p kalit so'zlar soni: ${this.maxTags}`, 'error');
                setTimeout(() => {
                    this.wrapper.classList.remove('shake');
                }, 300);
                return;
            }

            if (!this.tags.includes(value)) {
                this.tags.push(value);
                this.createTagElement(value);
                this.input.value = '';
                this.updateCounter();
                //this.showStatus(`"${value}" kalit so'z qo'shildi`, 'info');
            } else {
                this.input.classList.add('shake');
                this.showStatus(`"${value}" bu kalit so'z mavjud`, 'warning');
                setTimeout(() => {
                    this.input.classList.remove('shake');
                }, 300);
            }
        }
    }

    createTagElement(text) {
        const tag = document.createElement('div');
        tag.className = 'tag';

        const tagText = document.createElement('span');
        tagText.className = 'tag-text';
        tagText.textContent = text;

        const tooltip = document.createElement('div');
        tooltip.className = 'tag-tooltip';
        tooltip.textContent = "O'chirish uchun × ga bosing";

        const closeButton = document.createElement('button');
        closeButton.className = 'tag-close';
        closeButton.innerHTML = '×';
        closeButton.onclick = () => this.removeTag(text, tag);

        tag.appendChild(tagText);
        tag.appendChild(closeButton);
        tag.appendChild(tooltip);
        this.wrapper.insertBefore(tag, this.input);
    }

    removeTag(text, element) {
        element.classList.add('removing');
        element.addEventListener('animationend', () => {
            this.tags = this.tags.filter(tag => tag !== text);
            element.remove();
            this.updateCounter();
            //this.showStatus(`Тег "${text}" o'chirildi`, 'info');
        });
    }

    removeLastTag() {
        if (this.tags.length > 0) {
            const lastTag = this.wrapper.querySelector('.tag:last-of-type');
            if (lastTag) {
                const text = lastTag.querySelector('.tag-text').textContent;
                this.removeTag(text, lastTag);
            }
        }
    }

    getTags() {
        return this.tags;
    }
}


const tagInput = new TagInput(10);

document.addEventListener('DOMContentLoaded', function () {
    const input = document.querySelector('.theihgt');
    const outputde = document.querySelector('.outputcount');

    if (input && outputde) {
        input.addEventListener('input', function () {
            if (this.value.length >= 2000) {
                outputde.style.backgroundColor = '#f8d7da';
                outputde.style.color = '#721c24';
            } else {
                outputde.style.backgroundColor = '';
                outputde.style.color = '';
            }
        });
    } else {
        console.error(' .teihgt yoki .outputcount topilmadi');
    }
});

//---------------------formation price numbers-----------------
const priceInput = document.querySelector('#priceInput');

// Функция для форматирования числа с пробелами
function formatNumber(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
}

// Функция для очистки строки от всех символов кроме цифр
function cleanNumber(str) {
    return str.replace(/\D/g, '');
}

priceInput.addEventListener('input', function (e) {
    // Получаем значение и удаляем все символы кроме цифр
    let value = cleanNumber(this.value);

    // Если значение не пустое, форматируем его
    if (value) {
        // Сохраняем позицию курсора
        const cursorPosition = this.selectionStart;
        const oldLength = this.value.length;

        // Форматируем число
        const formattedValue = formatNumber(value);
        this.value = formattedValue;

        // Вычисляем новую позицию курсора
        const newLength = this.value.length;
        const cursorOffset = newLength - oldLength;

        // Устанавливаем курсор в правильную позицию
        this.setSelectionRange(cursorPosition + cursorOffset, cursorPosition + cursorOffset);
    }
});

// Форматируем начальное значение, если оно есть
if (priceInput.value) {
    priceInput.value = formatNumber(cleanNumber(priceInput.value));
}

// Дополнительно: форматируем значение при потере фокуса 
// (на случай, если пользователь удалит все пробелы)
priceInput.addEventListener('blur', function () {
    if (this.value) {
        this.value = formatNumber(cleanNumber(this.value));
    }
});
