// My js
function syncInputs() {
    // Obter os elementos do input
    const numberInput = document.getElementById('input-range-distance');
    const rangeInput = document.getElementById('range-distance');

    const value = this.value;
    numberInput.value = value;
    rangeInput.value = value;
}

document.getElementById('input-range-distance').addEventListener('input', syncInputs)
document.getElementById('range-distance').addEventListener('input', syncInputs)


/* document.getElementById('form_test').addEventListener('submit', function(event) {
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('repeatpassword').value;
        var cnpj = document.getElementById('cnpj').value;
        
        // Validação do e-mail
        var email = document.getElementById('email').value;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            event.preventDefault();
            alert('Por favor, insira um endereço de e-mail válido.');
            return false;
        }

        // Validação da senha
        if (password.length < 6) {
            event.preventDefault();
            alert('A senha deve ter pelo menos 6 caracteres.');
            return false;
        }

        // Confirmação de senha
        if (password !== repeatpassword) {
            event.preventDefault();
            alert('As senhas não coincidem.');
            return false;
        }

        // Validação do CNPJ
        if (!validarCNPJ(cnpj)) {
            event.preventDefault();
            alert('Por favor, insira um CNPJ válido.');
            return false;
        }

        return true;
    });

    // Função para validar CNPJ
    function validarCNPJ(cnpj) {
        // Implemente aqui a lógica de validação do CNPJ
        return true; // Por enquanto, retornamos true para fins de exemplo
    } */