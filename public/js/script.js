let crossRect = '../imgs/rectangle-cross.svg';
let circleRect = '../imgs/rectangle-circle.svg';

let emptyRects = document.getElementsByClassName("empty-rect-svg");

// for (let rect of emptyRects){
//     rect.addEventListener("click", (e) => {
//         rect.src = crossRect;
//     });
// }

let currentPlayer = 'X';

for (let rect of emptyRects){
    rect.addEventListener("click", (e) => {
        if (currentPlayer === 'X') {
            rect.src = crossRect;
            currentPlayer = 'O';
            console.log('Player O');
        } else {
            rect.src = circleRect;
            currentPlayer = 'X';
            console.log('Player X');
        }
    });
}