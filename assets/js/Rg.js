function MascaraRg(v0,errChar='?'){
    const valor = v0.toUpperCase().replace(/[^\dX]/g,'');
    return (valor.length==8 || valor.length==9)?
       valor.replace(/^(\d{1,2})(\d{3})(\d{3})([\dX])$/,'$1.$2.$3-$4'):
       (errChar+v0)
    ;
} 