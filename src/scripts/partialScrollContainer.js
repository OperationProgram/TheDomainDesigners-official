function updateContainerHeight() {
    const rightColumn = document.querySelector('.img-container');
    const leftColumn = document.getElementById('ps-left-column');

    // Get the clientHeight of container1
    const leftClientHeight = leftColumn.clientHeight;

    // Set the height of rightColumn to match the clientHeight of container1
    rightColumn.style.height = `${leftClientHeight}px`;
}

document.addEventListener('DOMContentLoaded', () => {
    updateContainerHeight(); // Set initial height

    // Update height on window resize
    window.addEventListener('resize', updateContainerHeight);
});