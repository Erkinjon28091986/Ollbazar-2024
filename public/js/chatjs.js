document.addEventListener("DOMContentLoaded", () => {
    const chatBlocks = document.querySelectorAll(".chat-block");
    const selectionPanel = document.getElementById("selection-panel");
    const selectedInfo = document.getElementById("selected-info");
    const deleteBtn = document.getElementById("delete-btn");
    const pinBtn = document.getElementById("pin-btn");
    let selectedChats = new Set();
    let pinnedChats = new Set();

    chatBlocks.forEach(chat => {
        // Обработка клика на аватар
        const avatar = chat.querySelector(".flipbox");
        avatar.addEventListener("click", event => {
            event.stopPropagation(); // Остановить всплытие события
            const chatId = chat.getAttribute("data-id");
            const flipbox = chat.querySelector(".flipcheck"); // Найти flipbox внутри текущего chat-block
            if (chat.classList.contains("selected")) {
                chat.classList.remove("selected");
                flipbox.classList.remove("flipshow");
                selectedChats.delete(chatId);
            } else {
                chat.classList.add("selected");
                flipbox.classList.add("flipshow");
                selectedChats.add(chatId);
            }
            updateSelectionPanel();
            updatePinButtonVisibility();
        });

        // Обработка клика на кнопку Pin внутри чата
        const pinChatBtn = chat.querySelector(".pinningbutton");
        pinChatBtn.addEventListener("click", () => {
            event.stopPropagation(); // Остановить всплытие события
            const chatId = chat.getAttribute("data-id");
            togglePinChat(chatId);
        });
    });

    // Обработка клика на кнопку Pin в верхней панели
    pinBtn.addEventListener("click", () => {
        if (selectedChats.size === 1) {
            const chatId = Array.from(selectedChats)[0];
            togglePinChat(chatId);
        }
    });

    // chatni pin qilish va pindan olish
    function togglePinChat(chatId) {
        const chat = document.querySelector(`.chat-block[data-id="${chatId}"]`);
        if (!chat) return;

        const pinChatBtn = chat.querySelector(".pinningbutton");

        if (pinnedChats.has(chatId)) {
            // chat allaqachon pin bolsa uni echamiz
            chat.classList.remove("pinned");
            pinnedChats.delete(chatId);
            // chatni eski holatiga qaytaramiz
            chat.parentNode.appendChild(chat);
            // pin tugmani yashiramiz
            pinChatBtn.style.display = "none";
            document.querySelector('.unpinbtn').style.display = 'none';
            var elementbty = document.getElementById('pin-btn');
                elementbty.setAttribute('tooltip', 'Pin chat');
        } else {
            // chat pin bolmagan bolsa pin qilamiz
            if (pinnedChats.size < 5) {
                chat.classList.add("pinned");
                pinnedChats.add(chatId);
                // chatni eng yuqoriga chiqaramiz
                chat.parentNode.insertBefore(chat, chat.parentNode.firstChild);
                // pin tugmani
                pinChatBtn.style.display = "block";
                document.querySelector('.unpinbtn').style.display = 'block';

                
                var elementbty = document.getElementById('pin-btn');
                elementbty.setAttribute('tooltip', 'Unpin chat');



            } else {
                alert("Максимальное количество закрепленных чатов - 5.");
            }
        }
        updateSelectionPanel();
        updatePinButtonClass();
    }

    // tepa panel
    function updateSelectionPanel() {
        if (selectedChats.size > 0) {
            selectionPanel.classList.remove("panelhidden");
            selectedInfo.textContent = selectedChats.size === chatBlocks.length ?
                "Выбрано: Все" :
                `Выбрано: ${selectedChats.size}`;
        } else {
            selectionPanel.classList.add("panelhidden");
            selectedInfo.textContent = "Выбрано: 0";
        }
    }


    // pin tugmani yangilash
    function updatePinButtonClass() {
        if (pinnedChats.size > 0) {
            pinBtn.classList.add("pinnedbtn");
        } else {
            pinBtn.classList.remove("pinnedbtn");
        }
    }

    // pin tugma holati
    function updatePinButtonVisibility() {
        if (selectedChats.size === 1) {
            pinBtn.style.display = "block";
            const selectedChatId = Array.from(selectedChats)[0];
            if (pinnedChats.has(selectedChatId)) {
                document.querySelector('.unpinbtn').style.display = 'block';
                //pinBtn.innerHTML = '<i class="icon-unpin"></i>'; // Иконка для открепления
            } else {
                document.querySelector('.unpinbtn').style.display = 'none';
                //pinBtn.innerHTML = '<i class="icon-pin34"></i>'; // Иконка для закрепления
            }
        } else {
            pinBtn.style.display = "none";
        }
    }


    // Chatni ochirish
    deleteBtn.addEventListener("click", () => {
        selectedChats.forEach(chatId => {
            const chat = document.querySelector(`.chat-block[data-id="${chatId}"]`);
            chat.remove();
        });
        selectedChats.clear();
        updateSelectionPanel();
        updatePinButtonClass();
        updatePinButtonVisibility();
    });
});
