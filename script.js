document.addEventListener('DOMContentLoaded', () => {
    // Theme Toggle Elements
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.documentElement;
    
    // Game Card Elements
    const gameCards = document.querySelectorAll('.game-card');
    const modal = document.getElementById('game-modal');
    const modalDetails = document.getElementById('modal-details');
    const closeModal = document.querySelector('.close-modal');
    const searchInput = document.getElementById('game-search');

    /**
     * Function to set the theme (light or dark)
     * @param {string} theme - 'dark' or 'light'
     */
    function setTheme(theme) {
        if (theme === 'dark') {
            body.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
            themeToggle.textContent = '🌞 Light Mode';
        } else {
            body.removeAttribute('data-theme');
            localStorage.setItem('theme', 'light');
            themeToggle.textContent = '🌙 Dark Mode';
        }
    }

    // Theme Toggle Event Listener
    themeToggle.addEventListener('click', () => {
        const currentTheme = body.getAttribute('data-theme');
        setTheme(currentTheme === 'dark' ? 'light' : 'dark');
    });

    // Load Saved Theme Preference
    const savedTheme = localStorage.getItem('theme');
    setTheme(savedTheme === 'dark' ? 'dark' : 'light');

    /**
     * Function to display game details in modal
     * @param {HTMLElement} card - The game card element clicked
     */
    function showGameModal(card) {
        const gameName = card.getAttribute('data-name');
        const gameImage = card.querySelector('img').src;
        const gameDesc = card.querySelector('p').textContent;

        modalDetails.innerHTML = `
            <h2>${gameName}</h2>
            <img src="${gameImage}" style="width: 100%; max-height: 300px; object-fit: cover;">
            <p>${gameDesc}</p>
        `;
        modal.classList.add('show-modal');
        modal.style.display = 'block';
    }

    // Add Click Event to Each Game Card
    gameCards.forEach(card => {
        card.addEventListener('click', () => showGameModal(card));
    });

    /**
     * Function to close the modal
     */
    function closeModalFunction() {
        modal.classList.remove('show-modal');
        setTimeout(() => { modal.style.display = 'none'; }, 500);
    }

    // Close Modal on Button Click
    closeModal.addEventListener('click', closeModalFunction);

    // Close Modal on Click Outside
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeModalFunction();
        }
    });

    // Close Modal on Escape Key Press
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeModalFunction();
        }
    });

    // Search Functionality for Filtering Games
    searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase();
        gameCards.forEach(card => {
            const gameName = card.getAttribute('data-name').toLowerCase();
            card.style.display = gameName.includes(query) ? 'block' : 'none';
        });
    });
});