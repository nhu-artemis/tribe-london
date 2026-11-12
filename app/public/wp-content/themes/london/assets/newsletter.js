document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.custom-newsletter-form');

    forms.forEach(function(form) {
        form.addEventListener('submit', async function(e) {
            // prevent the form from submitting URLs
            e.preventDefault();
            
            const emailInput = form.querySelector('.newsletter-email').value;
            const submitBtn = form.querySelector('.newsletter-submit-btn');
            
            const wrapper = form.closest('.newsletter-wrapper') || form.parentElement;
            const responseMessage = wrapper.querySelector('.form-response-message');

            submitBtn.textContent = 'SENDING...';
            submitBtn.disabled = true;

            try {
                const response = await fetch('/wp-json/custom/v1/newsletter', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email: emailInput })
                });

                const data = await response.json();

                // Show the response message
                responseMessage.style.display = 'block';
                responseMessage.textContent = data.message;

                if (data.success) {
                    form.reset(); // clear the form
                    responseMessage.style.color = 'green';
                } else {
                    responseMessage.style.color = 'red';
                }
            } catch (error) {
                responseMessage.style.display = 'block';
                responseMessage.style.color = 'red';
                responseMessage.textContent = 'A network error occurred. Please try again.';
            } finally {
                // reset the button
                submitBtn.textContent = 'SUBSCRIBE';
                submitBtn.disabled = false;
            }
        });
    });
});