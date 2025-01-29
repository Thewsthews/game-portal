document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.documentElement;
    const gameCards = document.querySelectorAll('.game-card');
    const modal = document.getElementById('game-modal');
    const modalDetails = document.getElementById('modal-details'); 
    const closeModal = document.querySelector('.close-modal');


    function setTheme(theme) {
        if (theme === 'dark') {
            body.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
        } else {
            body.removeAttribute('data-theme');
            localStorage.setItem('theme', 'light');
        }
    }

    themeToggle.addEventListener('click', () => {
        const currentTheme = body.getAttribute('data-theme');
        
        if (currentTheme === 'dark') {
            setTheme('light');
        } else {
            setTheme('dark');
        }
    });

    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        setTheme('dark');
    } else {
        setTheme('light');
    }

    gameCards.forEach(card => {
        card.addEventListener('click', () => {
            const gameName = card.getAttribute('data-name');
            const gameImage = card.querySelector('img').src;
            const gameDesc = card.querySelector('p').textContent;

            modalDetails.innerHTML = `
                <h2>${gameName}</h2>
                <img src="${gameImage}" style="width: 100%; max-height: 300px; object-fit: cover;">
                <p>${gameDesc}</p>
            `;
            modal.style.display = 'block';
        });
    });
    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});