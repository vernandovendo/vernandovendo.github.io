document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

const animatedElements = document.querySelectorAll('.animated');

function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function handleScrollAnimation() {
    animatedElements.forEach((el) => {
        if (isElementInViewport(el)) {
            el.classList.add('animated-show');
        }
    });
}

document.addEventListener('scroll', handleScrollAnimation);
handleScrollAnimation();

function handleScrollBackground() {
    const sections = document.querySelectorAll('section');
    
    sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        const isSectionInViewport = (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
        
        if (isSectionInViewport) {
            section.classList.add('in-view');
        } else {
            section.classList.remove('in-view');
        }
    });
}

document.addEventListener('scroll', handleScrollBackground);
handleScrollBackground();

const backToTopButton = document.getElementById('back-to-top');

backToTopButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

function handleScroll() {
    const scrollPosition = window.scrollY;

    if (scrollPosition > 200) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
}

document.addEventListener('scroll', handleScroll);


function handleSectionActivation() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('nav a');

    sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        const isSectionInViewport = (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );

        if (isSectionInViewport) {
            sections.forEach(s => s.classList.remove('in-view'));

            section.classList.add('in-view');

            navLinks.forEach(link => link.classList.remove('active'));

            const correspondingNavLink = document.querySelector(`nav a[href="#${section.id}"]`);
            if (correspondingNavLink) {
                correspondingNavLink.classList.add('active');
            }
        }
    });
}

document.addEventListener('scroll', () => {
    handleScrollAnimation();
    handleScrollBackground();
    handleSectionActivation();
});

handleScrollAnimation();
handleScrollBackground();
handleSectionActivation(); 

