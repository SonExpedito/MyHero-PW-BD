function blockletras(keypress) {
    if (keypress >= 48 && keypress <= 57) {
        return true;
    } else {
        return false;
    }
}

function MascaraTelefone(keypress) {
    if (keypress >= 48 && keypress <= 57) {
        separador1 = '(';
        separador2 = ')';
        separador3 = '-';
        conjunto1 = 0;
        conjunto2 = 3;
        conjunto3 = 9;
        if (eval(document.alterar.telefone.value.length) == conjunto1) {
            document.alterar.telefone.value = document.alterar.telefone.value + separador1;
        }

        if (eval(document.alterar.telefone.value.length) == conjunto2) {
            document.alterar.telefone.value.length = document.alterar.telefone.value.length + separador2;
        }

        if (eval(document.alterar.telefone.value.length) == conjunto2) {
            document.alterar.telefone.value.length = document.alterar.telefone.value.length + separador2;
        }

        return true;
    } else {
        return false;
    }
}

