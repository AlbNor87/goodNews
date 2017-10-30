const sort = document.querySelector('#sort');

sort.addEventListener('change', function() {
const value = sort.options[sort.selectedIndex].value;
console.log(value);

//1. redirect the user with the sort by value
window.location = "index.php?sortBy=" + value;

});
