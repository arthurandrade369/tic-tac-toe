import './bootstrap';
const crossRect = 'imgs/rectangle-cross.svg';
const circleRect = 'imgs/rectangle-circle.svg';
const rects = handleRects();
let gameTurn = 'X';
const winCombinations = [
    ['11', '12', '13'], ['21', '22', '23'], ['31', '32', '33'],
    ['11', '22', '33'], ['13', '22', '31'], ['11', '21', '31'],
    ['12', '22', '32'], ['13', '23', '33']
];

function handleRects() {
    let rects = document.getElementsByClassName("rect-svg");
    let initedRect = [];

    for (let rect of rects) {
        fillRects(initedRect, rect)
    }

    createRectsEvents(initedRect);
    return initedRect;
}

function fillRects(obj, rect) {
    obj.push({
        id: rect.id,
        element: rect,
        src: rect.src,
        filledSrc: null,
        isFilled: false
    });
}

function createRectsEvents(rects) {
    rects.forEach(rect => {
        rect.element.addEventListener("click", rectClick);
    });
}

function rectClick(e) {
    let rect = rects.find(rect => rect.id === e.target.id);
    handleGameTurn(rect);
}

function handleGameTurn(rect) {
    if (rect.isFilled) {
        return;
    }

    let img = gameTurn === 'X' ? crossRect : circleRect;
    rect.element.src = img;
    rect.filledSrc = gameTurn;
    rect.isFilled = true;
    checkWinner();
    checkDraw();
    gameTurn = gameTurn === 'X' ? 'O' : 'X';
}

function checkWinner() {
    winCombinations.forEach(combination => {
        let firstRect = rects.find(rect => rect.id === combination[0]);
        let secondRect = rects.find(rect => rect.id === combination[1]);
        let thirdRect = rects.find(rect => rect.id === combination[2]);

        if (firstRect.isFilled && secondRect.isFilled && thirdRect.isFilled) {
            if (firstRect.filledSrc === secondRect.filledSrc && firstRect.filledSrc === thirdRect.filledSrc) {
                alert("Winner is " + gameTurn);
                location.reload();
            }
        }
    });
}

function checkDraw() {
    if (rects.every(rect => rect.isFilled)) {
        alert("It's a draw!");
        location.reload();
    }
}