//calculating the gross price

function sumValue() {
    var vatS, vatN;
    vatS = document.getElementById(`vatProduct`).value;
    switch(vatS) {
        case "23":
        case "8":
        case "5":
        case "0":
            vatN = parseInt(vatS);
            break;
        case "ZW":
            vatN = 0;
            break;
        default:
            vatN = 0;
    }
var cenaLok = document.getElementById(`productPriceNet`).value;
document.getElementById(`productPriceGross`).value = (Math.round(cenaLok * vatN) / 100)+parseInt(cenaLok);
}
document.getElementById(`productPriceNet`).addEventListener('change',sumValue);
document.getElementById(`vatProduct`).addEventListener('change',sumValue);