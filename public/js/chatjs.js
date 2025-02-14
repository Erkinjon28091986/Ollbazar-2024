// document.addEventListener("DOMContentLoaded", () => {
//     const chatBlocks = Array.from(document.querySelectorAll(".chat-block"));
//     const selectionPanel = document.getElementById("selection-panel");
//     const selectedInfo = document.getElementById("selected-info");
//     const deleteBtn = document.getElementById("delete-btn");
//     const pinBtn = document.getElementById("pin-btn");
//     const searchBtn = document.getElementById("search-btn");
//     const searchInput = document.getElementById("search-input");
//     const laredQ = document.querySelector('.laredq');
//     const CloseSearch = document.getElementById('closesearchinput');
//     const noResultsMessage = document.getElementById("no-results-message"); // Добавлено для уведомления о отсутствии результатов
//     let selectedChats = new Set();
//     let pinnedChats = new Set();

//     // Search functionality
//     searchBtn.addEventListener("click", () => {
//         searchInput.classList.toggle("active");
//         const panelWidth = document.querySelector('.panelhidden').offsetWidth;
//         const newWidth = panelWidth - 0;
//         const searchInputtp = document.querySelector('.search-input.active');
//         searchInputtp.style.width = newWidth + 'px';

//         if (searchInput.classList.contains("active")) {
//             searchInput.focus();
//         }
//     });

//     searchInput.addEventListener("input", (e) => {
//         const searchText = e.target.value.toLowerCase();
//         let foundChats = false;

//         chatBlocks.forEach(chat => {
//             const userNameElement = chat.querySelector(".chat-name");
//             const originalName = userNameElement.getAttribute('data-original') || userNameElement.textContent;
//             const userName = originalName.toLowerCase();

//             if (searchText === "") {
//                 // Если поиск пустой, возвращаем оригинальный текст и показываем все чаты
//                 userNameElement.textContent = originalName;
//                 chat.classList.remove("hidden");
//                 chat.classList.remove("show");
//                 chat.style.display = "flex"; // Устанавливаем display: block
//                 foundChats = true;
//                 console.log(`Пустой поиск: Чат с ID ${chat.getAttribute("data-id")} показан`);
//             } else if (userName.includes(searchText)) {
//                 // Сохраняем оригинальный текст при первом поиске
//                 if (!userNameElement.getAttribute('data-original')) {
//                     userNameElement.setAttribute('data-original', originalName);
//                 }

//                 // Выделяем совпадающие буквы
//                 const highlightedText = originalName.replace(new RegExp(searchText, 'gi'), match =>
//                     `<span class="highlight">${match}</span>`
//                 );
//                 userNameElement.innerHTML = highlightedText;

//                 chat.classList.remove("hidden");
//                 chat.classList.add("show");
//                 setTimeout(() => {
//                     chat.classList.remove("show");
//                 }, 300);
//                 foundChats = true;
//                 console.log(`Поиск "${searchText}": Чат с ID ${chat.getAttribute("data-id")} показан`);
//             } else {
//                 // Возвращаем оригинальный текст если нет совпадения
//                 userNameElement.textContent = originalName;
//                 chat.classList.add("hidden");
//                 chat.style.display = "none"; // Устанавливаем display: none
//                 console.log(`Поиск "${searchText}": Чат с ID ${chat.getAttribute("data-id")} скрыт`);
//             }
//         });

//         // Показываем/скрываем сообщение о отсутствии результатов
//         if (!foundChats && searchText !== "") {
//             noResultsMessage.style.display = "block";
//         } else {
//             noResultsMessage.style.display = "none";
//         }
//     });

//     document.addEventListener("click", (e) => {
//         if (!e.target.closest(".search-container")) {
//             searchInput.classList.remove("active");
//         }
//     });

//     CloseSearch.addEventListener("click", (e) => {
//             searchInput.classList.remove("active");  
//     });

//     chatBlocks.forEach(chat => {
//         const avatar = chat.querySelector(".flipbox");
//         if (!avatar) {
//             console.error('Элемент .flipbox не найден');
//             return;
//         }

//         avatar.addEventListener("click", event => {
//             event.stopPropagation();

//             const searchContainer = document.querySelector('.search-input');
//             if (searchContainer && searchContainer.classList.contains('active')) {
//                 return;
//             }

//             const chatId = chat.getAttribute("data-id");
//             const flipbox = chat.querySelector(".flipcheck");
//             if (!flipbox) {
//                 console.error('Элемент .flipcheck не найден');
//                 return;
//             }

//             if (chat.classList.contains("selected")) {
//                 chat.classList.remove("selected");
//                 flipbox.classList.remove("flipshow");
//                 selectedChats.delete(chatId);
//             } else {
//                 chat.classList.add("selected");
//                 flipbox.classList.add("flipshow");
//                 selectedChats.add(chatId);
//             }

//             // Обновляем видимость .leftwrte только если есть выбранные чаты
//             const leftwrte = document.querySelector('.leftwrte');
//             if (leftwrte) {
//                 if (selectedChats.size > 0) {
//                     leftwrte.classList.add("leftwrte-show");
//                 } else {
//                     leftwrte.classList.remove("leftwrte-show");
//                 }
//             } else {
//                 console.error('Элемент .leftwrte не найден');
//             }

//             updateSelectionPanel();
//             updatePinButtonVisibility();
//         });

//         const pinChatBtn = chat.querySelector(".pinningbutton");
//         if (!pinChatBtn) {
//             console.error('Элемент .pinningbutton не найден');
//             return;
//         }

//         pinChatBtn.addEventListener("click", () => {
//             event.stopPropagation();
//             const chatId = chat.getAttribute("data-id");
//             togglePinChat(chatId);
//         });
//     });

//     pinBtn.addEventListener("click", () => {
//         if (selectedChats.size === 1) {
//             const chatId = Array.from(selectedChats)[0];
//             togglePinChat(chatId);
//         }
//     });

//     function togglePinChat(chatId) {
//         const chat = document.querySelector(`.chat-block[data-id="${chatId}"]`);
//         if (!chat) return;

//         const pinChatBtn = chat.querySelector(".pinningbutton");

//         if (pinnedChats.has(chatId)) {
//             chat.classList.remove("pinned");
//             pinnedChats.delete(chatId);
//             chat.parentNode.appendChild(chat);
//             pinChatBtn.style.display = "none";
//             document.querySelector('.unpinbtn').style.display = 'none';
//             var elementbty = document.getElementById('pin-btn');
//             elementbty.setAttribute('tooltip', 'Pin chat');
//         } else {
//             if (pinnedChats.size < 5) {
//                 chat.classList.add("pinned");
//                 pinnedChats.add(chatId);
//                 chat.parentNode.insertBefore(chat, chat.parentNode.firstChild);
//                 pinChatBtn.style.display = "block";
//                 document.querySelector('.unpinbtn').style.display = 'block';
//                 var elementbty = document.getElementById('pin-btn');
//                 elementbty.setAttribute('tooltip', 'Unpin chat');
//             } else {
//                 alert("Максимальное количество закрепленных чатов - 5.");
//             }
//         }
//         updateSelectionPanel();
//         updatePinButtonClass();
//     }

//     function updateSelectionPanel() {
//         if (selectedChats.size > 0) {
//             selectionPanel.classList.remove("panelhidden");
//             selectedInfo.textContent = selectedChats.size === chatBlocks.length ? "Выбрано: Все" : `Выбрано: ${selectedChats.size}`;
//             //searchBtn.style.display = "none"; // Hide search button when chats are selected
//             searchBtn.classList.add("searchbtnshow");
//         } else {
//             selectionPanel.classList.add("panelhidden");
//             selectedInfo.textContent = "Выбрано: 0";
//             //searchBtn.style.display = "block"; // Show search button when no chats are selected
//             searchBtn.classList.remove("searchbtnshow");
//         }
//     }

//     function updatePinButtonClass() {
//         if (pinnedChats.size > 0) {
//             pinBtn.classList.add("pinnedbtn");
//         } else {
//             pinBtn.classList.remove("pinnedbtn");
//         }
//     }

//     function updatePinButtonVisibility() {
//         if (selectedChats.size === 1) {
//             pinBtn.style.display = "block";
//             const selectedChatId = Array.from(selectedChats)[0];
//             if (pinnedChats.has(selectedChatId)) {
//                 document.querySelector('.unpinbtn').style.display = 'block';
//                 pinBtn.setAttribute('tooltip', 'Unpin chat');
//             } else {
//                 document.querySelector('.unpinbtn').style.display = 'none';
//                 pinBtn.setAttribute('tooltip', 'Pin chat');
//             }
//         } else {
//             pinBtn.style.display = "none";
//             pinBtn.setAttribute('tooltip', 'Pin chat'); // Возвращаем исходное значение tooltip
//         }
//     }

//     deleteBtn.addEventListener("click", () => {
//         selectedChats.forEach(chatId => {
//             const chat = document.querySelector(`.chat-block[data-id="${chatId}"]`);
//             chat.remove();
//         });
//         selectedChats.clear();
//         updateSelectionPanel();
//         updatePinButtonClass();
//         updatePinButtonVisibility();
//     });
// });

window.addEventListener('resize', () => {
    const panelWidth = document.querySelector('.panelhidden').offsetWidth;
    const newWidth = panelWidth - 60;
    document.querySelector('.search-input.active').style.width = newWidth + 'px';
});


function initChat(chatContainerSelector) {
    const chatContainer = document.querySelector(chatContainerSelector);
    if (!chatContainer) {
        console.error(`Chat container with selector ${chatContainerSelector} not found.`);
        return;
    }

    const chatBlocks = Array.from(chatContainer.querySelectorAll(".chat-block"));
    const selectionPanel = chatContainer.querySelector("#selection-panel");
    const selectedInfo = chatContainer.querySelector("#selected-info");
    const deleteBtn = chatContainer.querySelector("#delete-btn");
    const pinBtn = chatContainer.querySelector("#pin-btn");
    const searchBtn = chatContainer.querySelector("#search-btn");
    const searchInput = chatContainer.querySelector("#search-input");
    const CloseSearch = chatContainer.querySelector('#closesearchinput');
    const noResultsMessage = chatContainer.querySelector("#no-results-message");
    let selectedChats = new Set();
    let pinnedChats = new Set();

    // Search functionality
    searchBtn.addEventListener("click", () => {
        searchInput.classList.toggle("active");
        const panelWidth = chatContainer.querySelector('.panelhidden').offsetWidth;
        const newWidth = panelWidth - 0;
        const searchInputtp = chatContainer.querySelector('.search-input.active');
        searchInputtp.style.width = newWidth + 'px';

        if (searchInput.classList.contains("active")) {
            searchInput.focus();
        }
    });

    searchInput.addEventListener("input", (e) => {
        const searchText = e.target.value.toLowerCase();
        let foundChats = false;

        chatBlocks.forEach(chat => {
            const userNameElement = chat.querySelector(".chat-name");
            const originalName = userNameElement.getAttribute('data-original') || userNameElement.textContent;
            const userName = originalName.toLowerCase();

            if (searchText === "") {
                userNameElement.textContent = originalName;
                chat.classList.remove("hidden");
                chat.classList.remove("show");
                chat.style.display = "flex";
                foundChats = true;
            } else if (userName.includes(searchText)) {
                if (!userNameElement.getAttribute('data-original')) {
                    userNameElement.setAttribute('data-original', originalName);
                }

                const highlightedText = originalName.replace(new RegExp(searchText, 'gi'), match =>
                    `<span class="highlight">${match}</span>`
                );
                userNameElement.innerHTML = highlightedText;

                chat.classList.remove("hidden");
                chat.classList.add("show");
                setTimeout(() => {
                    chat.classList.remove("show");
                }, 300);
                foundChats = true;
            } else {
                userNameElement.textContent = originalName;
                chat.classList.add("hidden");
                chat.style.display = "none";
            }
        });

        if (!foundChats && searchText !== "") {
            noResultsMessage.style.display = "block";
        } else {
            noResultsMessage.style.display = "none";
        }
    });

    document.addEventListener("click", (e) => {
        if (!e.target.closest(".search-container")) {
            searchInput.classList.remove("active");
        }
    });

    CloseSearch.addEventListener("click", () => {
        searchInput.classList.remove("active");
    });

    chatBlocks.forEach(chat => {
        const avatar = chat.querySelector(".flipbox");
        if (!avatar) {
            console.error('Элемент .flipbox не найден');
            return;
        }

        avatar.addEventListener("click", event => {
            event.stopPropagation();

            const searchContainer = chatContainer.querySelector('.search-input');
            if (searchContainer && searchContainer.classList.contains('active')) {
                return;
            }

            const chatId = chat.getAttribute("data-id");
            const flipbox = chat.querySelector(".flipcheck");
            if (!flipbox) {
                console.error('Элемент .flipcheck не найден');
                return;
            }

            if (chat.classList.contains("selected")) {
                chat.classList.remove("selected");
                flipbox.classList.remove("flipshow");
                selectedChats.delete(chatId);
            } else {
                chat.classList.add("selected");
                flipbox.classList.add("flipshow");
                selectedChats.add(chatId);
            }

            const leftwrte = chatContainer.querySelector('.leftwrte');
            if (leftwrte) {
                if (selectedChats.size > 0) {
                    leftwrte.classList.add("leftwrte-show");
                } else {
                    leftwrte.classList.remove("leftwrte-show");
                }
            } else {
                console.error('Элемент .leftwrte не найден');
            }

            updateSelectionPanel();
            updatePinButtonVisibility();
        });

        const pinChatBtn = chat.querySelector(".pinningbutton");
        if (!pinChatBtn) {
            console.error('Элемент .pinningbutton не найден');
            return;
        }

        pinChatBtn.addEventListener("click", () => {
            event.stopPropagation();
            const chatId = chat.getAttribute("data-id");
            togglePinChat(chatId);
        });
    });

    pinBtn.addEventListener("click", () => {
        if (selectedChats.size === 1) {
            const chatId = Array.from(selectedChats)[0];
            togglePinChat(chatId);
        }
    });

    function togglePinChat(chatId) {
        const chat = chatContainer.querySelector(`.chat-block[data-id="${chatId}"]`);
        if (!chat) return;

        const pinChatBtn = chat.querySelector(".pinningbutton");

        if (pinnedChats.has(chatId)) {
            chat.classList.remove("pinned");
            pinnedChats.delete(chatId);
            chat.parentNode.appendChild(chat);
            pinChatBtn.style.display = "none";
            chatContainer.querySelector('.unpinbtn').style.display = 'none';
            pinBtn.setAttribute('tooltip', 'Pin chat');
        } else {
            if (pinnedChats.size < 5) {
                chat.classList.add("pinned");
                pinnedChats.add(chatId);
                chat.parentNode.insertBefore(chat, chat.parentNode.firstChild);
                pinChatBtn.style.display = "block";
                chatContainer.querySelector('.unpinbtn').style.display = 'block';
                pinBtn.setAttribute('tooltip', 'Unpin chat');
            } else {
                alert("Максимальное количество закрепленных чатов - 5.");
            }
        }
        updateSelectionPanel();
        updatePinButtonClass();
    }

    function updateSelectionPanel() {
        if (selectedChats.size > 0) {
            selectionPanel.classList.remove("panelhidden");
            selectedInfo.textContent = selectedChats.size === chatBlocks.length ? "Выбрано: Все" : `Выбрано: ${selectedChats.size}`;
            searchBtn.classList.add("searchbtnshow");
        } else {
            selectionPanel.classList.add("panelhidden");
            selectedInfo.textContent = "Выбрано: 0";
            searchBtn.classList.remove("searchbtnshow");
        }
    }

    function updatePinButtonClass() {
        if (pinnedChats.size > 0) {
            pinBtn.classList.add("pinnedbtn");
        } else {
            pinBtn.classList.remove("pinnedbtn");
        }
    }

    function updatePinButtonVisibility() {
        if (selectedChats.size === 1) {
            pinBtn.style.display = "block";
            const selectedChatId = Array.from(selectedChats)[0];
            if (pinnedChats.has(selectedChatId)) {
                chatContainer.querySelector('.unpinbtn').style.display = 'block';
                pinBtn.setAttribute('tooltip', 'Unpin chat');
            } else {
                chatContainer.querySelector('.unpinbtn').style.display = 'none';
                pinBtn.setAttribute('tooltip', 'Pin chat');
            }
        } else {
            pinBtn.style.display = "none";
            pinBtn.setAttribute('tooltip', 'Pin chat');
        }
    }

    deleteBtn.addEventListener("click", () => {
        selectedChats.forEach(chatId => {
            const chat = chatContainer.querySelector(`.chat-block[data-id="${chatId}"]`);
            chat.remove();
        });
        selectedChats.clear();
        updateSelectionPanel();
        updatePinButtonClass();
        updatePinButtonVisibility();
    });
}

document.addEventListener("DOMContentLoaded", () => {
    initChat("#chat-container-1");
    initChat("#chat-container-2");
    initChat("#chat-container-3");
    // Добавьте больше, если нужно
});