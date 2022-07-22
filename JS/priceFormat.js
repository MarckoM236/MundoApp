//Modulo pagos
function priceFormat(val){
    var num=new Intl.NumberFormat('es-CO', { style: 'currency', currency: 'COP' }).format(val);
    return num;
}

