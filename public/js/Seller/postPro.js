function periodPopulate() {
    for (i = 2; i <= 26; i++) {
        document.getElementsByName('period'+i)[0].value = document.getElementById('comPeriod').value;
    }
}

function pricePopulate(element) {
    for (i = 2; i <=26; i++) {
        document.getElementsByName('price'+i)[0].value = document.getElementById('comPrice').value;
    }
}