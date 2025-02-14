// Movimiento del botón "No" en index.html
const noBtn = document.getElementById('no');
const siBtn = document.getElementById('si');

noBtn.addEventListener('click', function() {
    const maxX = window.innerWidth - noBtn.offsetWidth;
    const maxY = window.innerHeight - noBtn.offsetHeight;
    
    const randomX = Math.random() * maxX;
    const randomY = Math.random() * maxY;
    
    noBtn.style.position = 'absolute';
    noBtn.style.left = randomX + 'px';
    noBtn.style.top = randomY + 'px';
});

// Redirigir al hacer clic en "Sí"
siBtn.addEventListener('click', function() {
    window.location.href = "news.html"; // Redirige a la página de noticias
});

// Función para seleccionar y aumentar el tamaño de la película
function selectItem(item) {
    // Reemplaza el tamaño de la imagen y el texto al hacer clic en ella
    let selectedItem = item.querySelector('p');
    let selectedImage = item.querySelector('img');

    // Cambia el tamaño de la imagen
    selectedImage.style.width = '100px'; // Aumenta el tamaño al seleccionar
    selectedItem.style.fontSize = '1.4em'; // Aumenta el tamaño del texto

    // Cambia el estilo para darle un toque especial
    selectedItem.style.color = '#990033';
    selectedItem.style.fontWeight = 'bold';
}
