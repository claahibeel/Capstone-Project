// scripts.js
function toggleAvailability(cell) {
    if (cell.classList.contains('open')) {
        cell.classList.remove('open');
        cell.classList.add('unavailable');
        cell.innerText = "Unavailable";
    } else if (cell.classList.contains('unavailable')) {
        cell.classList.remove('unavailable');
        cell.classList.add('open');
        cell.innerText = "Open";
    }
}
