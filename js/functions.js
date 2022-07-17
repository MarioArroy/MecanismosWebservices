function newPswd() {
    var texto_1 = document.forms[0].elements[0].value;
    var texto_2 = document.forms[0].elements[1].value;
    var tam_txt_1 = texto_1.length;
    var tam_txt_2 = texto_2.length;
    if (tam_txt_1 != tam_txt_2) 
    {
        alert('Las contraseñas no coinciden');
    } 
    else 
    {
        for (n = 0; n < tam_txt_1; n++) 
        {
            if (texto_1.charAt(n) != texto_2.charAt(n)) 
            {
                alert('Las contraseñas no coinciden');
                return;
            }
            else if (texto_1.charAt(n) == texto_2.charAt(n)) 
            {
                location.replace('../login.php');
            }
        }
    }
} 