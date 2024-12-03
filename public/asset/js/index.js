// JavaScript for smooth scrolling
document.querySelectorAll('.navbar a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);

        // Scroll to the section smoothly
        window.scrollTo({
            top: targetSection.offsetTop - 50,  // adjust the offset for navbar height
            behavior: 'smooth'
        });
    });
});

const navbar = document.querySelectorAll('.navbar a');
navbar.forEach(article=> {
    article.addEventListener('mouseover', function() {
        this.style.backgroundColor = '#355E3B';
        this.style.padding = '10px';
        this.style.transition = 'all 0.3 ease';
        this.style.transition = 'smooth';
    });
    article.addEventListener('mouseout', function() {
        this.style.backgroundColor = '';
        this.style.padding = '';
    });
});
const sections = document.querySelectorAll('.demo'); // Ganti '.section' menjadi '.demo'

// Loop melalui setiap section
sections.forEach(section => {
    section.addEventListener('click', function() {
        // Hapus class 'active' dari semua section
        sections.forEach(sec => sec.classList.remove('active'));
        
        // Tambahkan class 'active' ke section yang di-klik
        this.classList.add('active');
    });
});
