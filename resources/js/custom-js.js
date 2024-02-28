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


function validarCNPJ(cnpj) {
// Remover caracteres especiais
cnpj = cnpj.replace(/[^\d]+/g, '');

// Validar tamanho
if (cnpj.length !== 14) {
return false;
}

// Algoritmo de validação
// ... (implementar algoritmo de validação de CNPJ)

// Retornar resultado da validação
return true;
}

const cnpjInput = document.getElementById('cnpj');

cnpjInput.addEventListener('submit', function() {
  const cnpj = this.value;
  const isValid = validarCNPJ(cnpj);

  // Atualizar feedback visual
  if (isValid) {
    // CNPJ válido
    cnpjInput.classList.remove('invalid');
    cnpjInput.classList.add('valid');
  } else {
    // CNPJ inválido
    cnpjInput.classList.add('invalid');
    cnpjInput.classList.remove('valid');
  }
});

function calcularDigitoVerificador(digitos) {
    let soma = 0;
    let peso = 2;
    for (let i = digitos.length - 1; i >= 0; i--) {
      soma += digitos[i] * peso;
      peso = peso === 9 ? 2 : peso + 1;
    }
    const resto = soma % 11;
    return resto === 0 || resto === 1 ? 0 : 11 - resto;
  }
  
  function validarCNPJ(cnpj) {
    // ... (extrair dígitos verificadores)
  
    const digitoVerificador1 = calcularDigitoVerificador(digitos.slice(0, 12));
    const digitoVerificador2 = calcularDigitoVerificador(digitos.slice(0, 13));
  
    return digitoVerificador1 === digitos[12] && digitoVerificador2 === digitos[13];
  }

  /* Aqui inflencia no email de cadastro */
  function isEmailValid(email){

        const emailRegex = new RegExp(
            /^[a-zA-Z0-9._-]/
        )
  }