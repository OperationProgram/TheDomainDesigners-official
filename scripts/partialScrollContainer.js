document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('partial-scroll');
    const rightColumn = document.querySelector('.img-container');
    
    
    container.addEventListener('wheel', (e) => {
        // var rect = container.getBoundingClientRect();
        // var atTop = rect.top <= 1 && rect.top >= -1;
        var scrollBottom = rightColumn.scrollHeight - (rightColumn.scrollTop + rightColumn.clientHeight);
        if ((rightColumn.scrollTop <= 0 && e.deltaY < 0 )|| (scrollBottom <= 2 && e.deltaY > 0)) {
            return;
        }
        // console.log(rect.top);
        // if (atTop) {
        //     console.log("top");
        // }

        if (e.deltaY !== 0) {
            e.preventDefault();
            rightColumn.scrollTop += e.deltaY;
        }
    });
});