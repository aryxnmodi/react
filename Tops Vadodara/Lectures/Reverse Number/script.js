let i = 5;
while (i >= 1) {
    let j = i;
    let spaces = 5 - i;
    let row = " ".repeat(spaces * 2); 
    while (j >= 1) {
        row += j + " ";
        j--;
    }
    console.log(row);
    i--;
}
