// Get Year Code
// Retrieves year for footer

const date = new Date();
let year = date.getFullYear();
document.getElementById("footeryear").innerHTML = year;