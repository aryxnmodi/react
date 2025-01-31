let rows = 5; 
let i = 1;

while (i <= rows) {
    let j = 1;
    let pattern = "";
    while (j <= i) {
        pattern += j + " ";
        j++;
    }
    console.log(pattern);
    i++;
}
