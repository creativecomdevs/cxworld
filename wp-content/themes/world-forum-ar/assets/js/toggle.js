document.addEventListener('DOMContentLoaded', () => {
    if(document.querySelectorAll('.schedule__list')) {
        const list = document.querySelectorAll('.schedule__list');
        const firstDay = list[0];
        const secondDay = list[1];
        const firstWrapper = document.createElement('div');
        firstWrapper.id = "first-content";
        firstWrapper.classList.add('mobile');
        const secondWrapper = document.createElement('div');
        secondWrapper.classList.add('mobile');
        secondWrapper.id = "second-content";
        const firstItemsArr = firstDay.querySelectorAll('.schedule__item');
        firstDay.append(firstWrapper);
        secondDay.append(secondWrapper);
        const secondItemsArr = secondDay.querySelectorAll('.schedule__item');
        const firstArray = Array.from(firstItemsArr);
        const secondArray = Array.from(secondItemsArr);
        const firstSlice = firstArray.slice(3);
        const secondSlice = secondArray.slice(3);
        firstSlice.forEach(item => {
            item.remove()
            firstWrapper.append(item)
        });
        secondSlice.forEach(item => {
            item.remove()
            secondWrapper.append(item)
        })
    }
    
});