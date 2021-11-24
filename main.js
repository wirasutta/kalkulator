

function hitung() {
    document.getElementById('history').innerHTML = result.value + " =";
    result.value = eval(result.value);
}

function back() {
    result.value = result.value.substr(0, result.value.length - 1);
}

function reset() {
    result.value = "";
    document.getElementById('history').innerHTML = "";
}

function insert(a) {
    document.getElementById('result').value += a;
}