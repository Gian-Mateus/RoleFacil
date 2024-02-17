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