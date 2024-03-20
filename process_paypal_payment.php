<?php
// Include configuration file
include_once 'config.php';

// Include database connection file
include_once 'dbConnect.php';

?>

<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>&currency=<?php echo PAYPAL_CURRENCY; ?>&disable-funding=paylater"></script>
<script>

    var amount = document.querySelector('form input[name="amount"]').value;
    paypal.Buttons({
        style: {
            layout: 'vertical',
            color: 'gold',
            shape: 'rect',
            label: 'pay',
            height: 40,
        },
        createOrder: (data, actions) => {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        currencyCode: "USD",
                        value: amount
                    }
                }]
            });
        },
        onApprove: (data, actions) => {
            return actions.order.capture().then(function (orderData) {
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                const transaction = orderData.purchase_units[0].payments.captures[0];
                // const element = document.getElementById('paypal-button-container');
                // element.innerHTML = `<h3>Thank you for your payment! ${transaction.status} ${transaction.id} </h3>`;
                actions.redirect(`http://car-tech.test/success.php`);
                // actions.redirect(`http://car-tech.test/success.php?transactionid=${transaction.id}&transactionstatus=${transaction.status}`);
                // actions.redirect(`http://car-tech.test/success.php`);
            });
        },
        // onCancel(data, actions) {
        //     actions.redirect(`http://car-tech.test/cancel.php`);
        // },
        onError: function (err) {
            console.log('err', err)
            // alert(err);
        }
    }).render('#paypal-button-container');
</script>