
    var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    // variable para el tamaño del pixel
    var cellSize = 10;
    // Dibujar la cuadricula/malla
    for (var x = 0; x <= canvas.width; x += cellSize) {
        ctx.moveTo(x, 0);
        ctx.lineTo(x, canvas.height);
    }
    for (var y = 0; y <= canvas.height; y += cellSize) {
        ctx.moveTo(0, y);
        ctx.lineTo(canvas.width, y);
    }
    ctx.strokeStyle = '#ddd';
    ctx.stroke();
    // Tomador de colores
    var colorElements = document.getElementsByClassName('color');
    var selectedColor = null;

    function pickColor(event) {
        selectedColor = event.target.style.backgroundColor;
    }
    for (var i = 0; i < colorElements.length; i++) {
        colorElements[i].addEventListener('click', pickColor);
    }
    // Poder pintar los pixeles
    function paintPixel(event) {
        if (selectedColor) {
            var x = event.offsetX;
            var y = event.offsetY;
            x = Math.floor(x / cellSize) * cellSize;
            y = Math.floor(y / cellSize) * cellSize;
            ctx.fillStyle = selectedColor;
            ctx.fillRect(x, y, cellSize, cellSize);
            // mostrar en consola las coordenadas asi como el color
            console.log("x: " + x + " y: " + y + " color: " + selectedColor);
            savePixelData(x, y, selectedColor);
        }
    }
    loadAndDrawPixels();
    function loadAndDrawPixels() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'php/get_pixels.php', true);

        xhr.onload = function () {
            if (xhr.status == 200) {
                var pixelsData = JSON.parse(xhr.responseText);
                pixelsData.forEach(function (pixel) {
                    ctx.fillStyle = pixel.color;
                    ctx.fillRect(pixel.x, pixel.y, cellSize, cellSize);
                });
            }
        };
        xhr.send();
    }
    function savePixelData(x, y, color) {
        // Crear una nueva instancia de XMLHttpRequest
        var xhr = new XMLHttpRequest();
        // Definir la URL del archivo PHP que manejará la solicitud y enviar los datos mediante el método POST
        xhr.open('POST', 'php/save_pixel.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        // Manejar el evento onload, que se ejecuta cuando la solicitud se completa
        xhr.onload = function () {
            if (xhr.status == 200) {
                console.log(xhr.responseText); // Puedes imprimir en la consola la respuesta del servidor
            }
        };
        // Construir los datos que se enviarán al servidor
        var data = 'x=' + encodeURIComponent(x) + '&y=' + encodeURIComponent(y) + '&color=' + encodeURIComponent(color);
        // Enviar soli al servidor
        xhr.send(data);
    }
    canvas.addEventListener('click', paintPixel);
    // Recargar la pagina cada 5 minutos
    setInterval(function () {
        location.reload();
    }, 300000);