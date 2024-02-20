// dashboard.js

var zonasVisible = false;

document.getElementById('zonas-link').addEventListener('click', function() {
    zonasVisible = !zonasVisible;
    mostrarZonas();
});

function mostrarZonas() {
    var zonasSection = document.getElementById('zonas-section');
    zonasSection.style.display = zonasVisible ? 'block' : 'none';
    var zonas=['SAPALLANGA','QUILCA','PILCOMAYO']
    if (zonasVisible) {
        var zonasList = document.getElementById('zonas-list');
        zonasList.innerHTML = ''; // Limpiar la lista

        for (var i = 0; i <= 2; i++) {
            var zonaItem = document.createElement('li');
            var zonaLink = document.createElement('a');
            zonaLink.href = 'zona'+(i+1)+'.php';
            zonaLink.textContent = zonas[i];

            zonaItem.appendChild(zonaLink);
            zonasList.appendChild(zonaItem);
        }
    }
}
