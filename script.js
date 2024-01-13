function setX(value) {
    document.getElementById('inputX').value = value;
}

function setR(value) {
    document.getElementById('inputR').value = value;
}
function validateForm() {
    var inputX = document.getElementById('inputX').value;
    var inputY = document.getElementById('inputY').value;
    var inputR = document.getElementById('inputR').value;
    if(isNaN(inputX)) {
        alert('Координата X должна быть числом.');
        return false;
    }
    if(inputX < -3) {
        alert('Выберите координату X.');
        return false;
    }
    if (isNaN(inputY)) {
        alert('Координата Y должна быть числом.');
        return false;
    }
    if(inputY < -5 || inputY > 5) {
        alert('Координата Y должна быть в пределах от -5 до 5.');
        return false;
    }
    if (isNaN(inputR) || inputR <= 0) {
        alert('Радиус R должен быть положительным числом.');
        return false;
    }
    return true;
}