<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Sender</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <STYLE>
        /* Custom CSS for Toastr */
        .toast-success {
            background-color: #28a745;
            /* Green background for success toasts */
            color: #fff;
            /* White text color */
            font-weight: bold;
        }

        .toast-error {
            background-color: #dc3545;
            /* Red background for error toasts */
            color: #fff;
            /* White text color */
            font-weight: bold;
        }

        .bg-img {
            background-color:#fff4f4;
        }
    </STYLE>
</head>

<body>
    <div class="container mt-5 ">
        <h1 class="mb-4">Compose Email</h1>
        <div class="contianer-fluid ">
            <div class="col-md-12 ">
                <div class="row ">
                    <div class="col-md-6 bg-img">
                        <form id="emailForm" class="form-group needs-validation" novalidate action="send_mail.php"
                            method="post">
                            <div class="form-group">
                                <label for="to">To:</label>
                                <input type="email" class="form-control" id="to" name="to" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject:</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                                <div class="invalid-feedback">Please enter a subject.</div>
                            </div>


                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
                                <div class="invalid-feedback">Please enter a message.</div>
                            </div>

                            <button type="button" id="sendEmail" class="btn btn-primary">Send Email</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="img/sri.png" alt="" srcset="">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="emailToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Mail Sender</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <!-- Toast message content will be displayed here -->
                <H3>MAIL SENT</H3>
            </div>
        </div>
    </div>

    <!-- Include jQuery, Bootstrap JS, and your custom JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include Toastr CSS and JavaScript from a CDN -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sendEmailButton = document.getElementById('sendEmail');

            sendEmailButton.addEventListener('click', function () {
                const form = document.getElementById('emailForm');

                if (form.checkValidity()) {
                    // Retrieve form data
                    const to = document.getElementById('to').value;
                    const subject = document.getElementById('subject').value;
                    const message = document.getElementById('message').value;

                    const data = {
                        to: to,
                        subject: subject,
                        message: message
                    };

                    $.ajax({
                        type: 'POST',
                        url: 'send_mail.php',
                        data: data,
                        success: function (response) {
                            // Show success toast using Toastr
                            toastr.success('Mail sent successfully!', 'Success');

                        },
                        error: function () {
                            // Show error toast using Toastr
                            toastr.error('An error occurred while sending the email.');
                        }
                    });
                } else {
                    form.classList.add('was-validated');
                }
            });
        });
    </script>

</body>

</html>