// My js
function syncInputs() {
    // Obter os elementos do input
    const numberInputs = document.querySelectorAll('.input-range-number');
    const rangeInputs = document.querySelectorAll('.input-range-range');

    const value = this.value;

    // Atualizar os valores de todos os inputs do tipo number
    numberInputs.forEach(input => {
        input.value = value;
    });

    // Atualizar os valores de todos os inputs do tipo range
    rangeInputs.forEach(input => {
        input.value = value;
    });
}

document.querySelectorAll('.input-range-number').forEach((e) => {
    e.addEventListener('input', syncInputs)
})
document.querySelectorAll('.input-range-range').forEach((e) => {
    e.addEventListener('input', syncInputs)
})