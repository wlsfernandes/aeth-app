<script src="https://js.stripe.com/v3/"></script> <!-- Load Stripe.js -->
<script>
    // Initialize Stripe with your publishable key
    const stripe = Stripe('{{ env('STRIPE_KEY') }}');

    // Create an instance of Elements
    const elements = stripe.elements();

    // Create an instance of the card Element
    const cardNumber = elements.create('cardNumber');
    cardNumber.mount('#card-number-element');

    // Create an instance of the CVC Element
    const cardCvc = elements.create('cardCvc');
    cardCvc.mount('#card-cvc-element');

    // Create an instance of the expiry date Element
    const cardExpiry = elements.create('cardExpiry');
    cardExpiry.mount('#card-expiry-element');

    // Handle form submission
    const form = document.getElementById('payment-form');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        // Disable the form to prevent multiple submissions
        form.querySelector('button').disabled = true;

        // Check if the donation is recurring
        // Check if the recurring checkbox exists
        const isRecurringCheckbox = document.getElementById('is_recurring');
        const isRecurring = isRecurringCheckbox ? isRecurringCheckbox.checked : false;

        // Create a PaymentMethod using the card elements
        const { error, paymentMethod } = await stripe.createPaymentMethod({
            type: 'card',
            card: cardNumber,
            billing_details: {
                name: document.getElementById('card-holder-name').value,
                address: {
                    line1: document.getElementById('address') ? document.getElementById('address').value : '',
                    city: document.getElementById('city') ? document.getElementById('city').value : '',
                    state: document.getElementById('state') ? document.getElementById('state').value : '',
                    postal_code: document.getElementById('zip') ? document.getElementById('zip').value : ''
                }
            }
        });

        if (error) {
            // Display error message in #card-errors
            document.getElementById('card-errors').textContent = error.message;
            form.querySelector('button').disabled = false;
        } else {
            // Clear previous errors
            document.getElementById('card-errors').textContent = '';

            // Add the PaymentMethod ID to the hidden input field
            document.getElementById('payment-method-id').value = paymentMethod.id;

            // Add recurring or one-time flag to the form
            const recurringInput = document.createElement('input');
            recurringInput.type = 'hidden';
            recurringInput.name = 'is_recurring';
            recurringInput.value = isRecurring ? '1' : '0';
            form.appendChild(recurringInput);

            // Submit the form
            form.submit();
        }
    });
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');

    body {
        font-family: "Poppins", sans-serif;
        font-weight: 300;
    }

    .container {
        height: 100vh;
    }

    .card {
        border: none;
    }

    .card-header {
        padding: 0.5rem 1rem;
        background-color: rgba(0, 0, 0, 0.03);
    }

    .form-control {
        height: 50px;
        border: 2px solid #eee;
        border-radius: 6px;
        font-size: 14px;
    }

    .form-control:focus {
        border-color: #039be5;
    }

    .stripe-element-container {
        border: 1px solid #d7d7d7;
        border-radius: 6px;
        padding: 10px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .pay-button {
        width: 100%;
        border-radius: 6px;
        background: #2ecc71;
        color: white;
        padding: 10px;
        border: none;
    }

    .pay-button:hover {
        background: #27ae60;
    }
</style>
