var select = document.getElementById('language');
var option = select.options[select.selectedIndex];
document.getElementById('text').value = option.text;
