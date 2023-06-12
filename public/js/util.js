var Util = ( function () {
    function mensaje($element, $class, $message)
    {
        $($element).html('<div class="alert '+ $class +'"><span class="close" data-dismiss="alert" aria-label="close">×</span>'+ $message +'</div>');
    }

    function notify (tipo, mensaje) {
        Lobibox.notify(tipo, {
            size: 'mini',
            rounded: true,
            sound: false,
            delayIndicator: false,
            msg: mensaje
        });
    }

    function formato_numero(numero, decimales, punto_decimal, separador_miles)
    {
        numero = (numero + '')
                .replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+numero) ? 0 : +numero,
                prec = !isFinite(+decimales) ? 0 : Math.abs(decimales),
                sep = (typeof separador_miles === 'undefined') ? ',' : separador_miles,
                dec = (typeof punto_decimal === 'undefined') ? '.' : punto_decimal,
                s = '',
                toFixedFix = function (n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + (Math.round(n * k) / k)
                            .toFixed(prec);
                };

        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
                .split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '')
                .length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1)
                    .join('0');
        }
        return s.join(dec);
    }

    function leftZero(canti, number){
        let vLen = number.toString();
        let nLen = vLen.length;
        let zeros = '';
        for(var i=0; i<(canti-nLen); i++){
            zeros = zeros+'0';
        }
        return zeros+number;
    }

    return {
        formato_numero: formato_numero,
        leftZero: leftZero,
        mensaje: mensaje,
        notify: notify
    };
})();