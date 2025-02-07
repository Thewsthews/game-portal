document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.documentElement;
    const gameCards = document.querySelectorAll('.game-card');
    const modal = document.getElementById('game-modal');
    const modalDetails = document.getElementById('modal-details'); 
   const closeModal = document.querySelector('.close-modal');
   const searchInput = document.getElementById('game-search');


    function setTheme(theme) {
        if (theme === 'dark') {
            body.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
            themeToggle.textContent = '🌞Light Mode';
        } else {
            body.removeAttribute('data-theme');
            localStorage.setItem('theme', 'light');
            themeToggle.textContent = '🌙 Dark Mode';
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
            modal.classList.add('show-modal'); 
        });
    });
    closeModal.addEventListener('click', () => closeModal());
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.classList.remove('show-modal');
        }
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                modal.classList.remove('show-modal');
            }
        });
        function closeModal() {
            modal.classList.remove('show-modal');
            setTimeout(()=> {modal.style.dsplay = 'none';}, 500);
        }

        searchInput.addEventListener('input', ()=>{
            const query = searchInput.value.toLowerCase();
            gameCards.forEach(carf => {
                const gameName = card.getAttribute('data-name').toLowerCase();
                card.style.display = gameName.includes(query) ? 'block' : 'none';
        })
        })
    });  
});