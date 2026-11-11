document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('custom-newsletter-form');
    const responseMessage = document.getElementById('form-response-message');

    if (form) {
        form.addEventListener('submit', async function(e) {
            e.preventDefault(); // Stops the page from refreshing
            
            const emailInput = document.getElementById('newsletter-email').value;
            const submitBtn = document.getElementById('newsletter-submit-btn');
            
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
                    form.reset(); // Clear the form
                    responseMessage.style.color = 'green';
                } else {
                    responseMessage.style.color = 'red';
                }
            } catch (error) {
                responseMessage.style.display = 'block';
                responseMessage.style.color = 'red';
                responseMessage.textContent = 'A network error occurred. Please try again.';
            } finally {
                // Reset the button
                submitBtn.textContent = 'SUBSCRIBE';
                submitBtn.disabled = false;
            }
        });
    }
});