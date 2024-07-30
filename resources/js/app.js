import './bootstrap';
const crossRect = 'imgs/rectangle-cross.svg';
const circleRect = 'imgs/rectangle-circle.svg';
const rects = handleRects();

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
        rect.element.addEventListener("click", handleRectClick(rect));
    });
}

function handleRectClick(rect) {
    
}