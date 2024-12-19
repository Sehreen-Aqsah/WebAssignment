$(document).ready(function() {
    $('#donationForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Collect form data
        const fullName = $('#fullName').val();
        const email = $('#email').val();
        const phone = $('#phone').val();
        const amount = $('#amount').val();
        const cause = $('#cause').val();
        const message = $('#message').val();

        // Display the collected data in a formatted way
        const output = `
            <h2>Thank You for Your Donation!</h2>
            <p><strong>Name:</strong> ${fullName}</p>
            <p><strong>Email:</strong> ${email}</p>
            <p><strong>Phone:</strong> ${phone}</p>
            <p><strong>Donation Amount:</strong> $${amount}</p>
            <p><strong>Cause:</strong> ${cause}</p>
            <p><strong>Message:</strong> ${message || 'No message provided'}</p>
        `;

        // Replace the form with the output message
        $('.form-container').html(output);
    });
});
