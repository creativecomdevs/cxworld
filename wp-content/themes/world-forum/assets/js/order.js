document.addEventListener('DOMContentLoaded', () => {
    const formWoo = document.querySelector('.woocommerce-checkout'); // форма чекаута вукомерс
    const emailWoo = document.querySelector('#billing_email');
    const phoneWoo = document.querySelector('#billing_phone');


    // const couponToggle = document.querySelector('.woocommerce-form-coupon-toggle');
    // if (formWoo) {
    //     formWoo.setAttribute( "autocomplete", "off" );
    // }

    if (emailWoo) {
        emailWoo.value = '';
    }

    if (phoneWoo) {
        phoneWoo.value = '';
    }

    // nameWoo.addEventListener('blur', function(){
    //     console.log(nameWoo.value);
    //     nameAttend.value = this.value;
    //     // nameAttend.value = nameWoo.value;
    //     // console.log(nameAttend)
    // });

    // companyWoo.addEventListener('blur', function(){
    //     companyAttend.value = this.value;
    // });

    // positionWoo.addEventListener('blur', function(){
    //     positionAttend.value = this.value;
    // });

    // const formAttend = document.querySelector('#tribe-tickets__registration-form'); // форма регистрации участников

    const footer = document.querySelector('.tribe-tickets__registration-footer');
    const submitWoo = document.querySelector('#place_order'); //кнопка вукоммерс
    const submitRegistr = document.querySelector('.tribe-tickets__registration-submit'); // кнопка регистрации участника

    submitRegistr.innerHTML = "Place order";

    const priceElem = document.querySelector('.tribe-amount');
    if (priceElem && parseInt(priceElem.textContent) == 0) {
        const parent = document.querySelector('.checkout.woocommerce-checkout');
        const coupon = document.querySelector('.woocommerce-form-coupon-toggle');
        parent ? parent.style.paddingTop = '30px' : null;
        coupon ? coupon.style.display = 'none' : null;

    }

    // setTimeout(() => {
    //     const ticketInputs = document.querySelectorAll('.woocommerce-input-wrapper .input-text');
    //     if (ticketInputs) {
    //         inputValid(ticketInputs);
    //     }
    // }, 500)


    // function inputValid(inputs) {
    //     const btn = document.querySelector('.tribe-tickets__registration-submit');
    //     btn.disabled = true;
    //     inputs.forEach((input, i, arr) => {

    //         input.addEventListener('input', (e) => {
    //             if (Array.from(inputs).every((item) => item.value.length > 1)) {
    //                 btn.disabled = false;
    //             }
    //         })
    //     });

    // }

    if (window.location.href === 'https://cx-world.creativecom.org/checkout/') {
        emailWoo.value = localStorage.getItem('email');
        phoneWoo.value = localStorage.getItem('phone');

        const div = document.createElement('div');
        const innerDiv = document.createElement('div');
        div.classList.add('loader')
        innerDiv.classList.add('loader_inner')
        div.appendChild(innerDiv);
        document.body.appendChild(div);

        formWoo.style.opacity = '0';
        footer.style.display = 'none';
        submitWoo.click();
        localStorage.removeItem('email');
        localStorage.removeItem('phone');
    };

    if (window.location.href === 'https://cx-world.creativecom.org/checkout/?tickets_provider=tribe_wooticket') {
        footer.style.display = 'block';
        const wooBtn = document.querySelector('#place_order');
         wooBtn.setAttribute("disabled", "true")
        emailWoo.addEventListener('input', function () {
            localStorage.setItem('email', emailWoo.value);
        });
        phoneWoo.addEventListener('input', function () {
            localStorage.setItem('phone', phoneWoo.value);
        });

        const container = document.getElementsByClassName('tribe-tickets__attendee-tickets-container');
        if (container) {
            const idTicket = container[0].attributes[1].value; // получаем id товара
            if (idTicket === '133') {
                submitRegistr.innerHTML = "Submit";
            };
        }
    };

    const parent = document.querySelector('.woocommerce-table.woocommerce-table--order-details.shop_table.order_details > thead > tr');
    const count = document.createElement('th');
    count.classList.add('woocommerce-table__product-name');
    count.classList.add('product-name');
    count.classList.add('count');
    count.innerHTML = `Quantity`;
    if (parent) {
        parent.appendChild(count);
    }


    const parentTbody = document.querySelector('.woocommerce-table__line-item.order_item');
    const orderCount = document.createElement('td');
    orderCount.classList.add('woocommerce-table__product-name');
    orderCount.classList.add('product-name');
    orderCount.classList.add('order-count');
    orderCount.innerHTML = `x1`;
    if (parentTbody) {
        parentTbody.appendChild(orderCount);
    }


    const link = document.querySelector('.tribe-event-details a');
    if (link) {
        link.setAttribute('href', 'https://cx-world.creativecom.org/');
    }
    console.log('hi')
});

