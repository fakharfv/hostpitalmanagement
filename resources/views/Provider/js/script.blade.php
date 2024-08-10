<script>
$(document).ready(function() {
    $('#phone').on('input', function() {
        var phoneInput = this.value.replace(/\D/g, '');  // Remove non-digit characters
        var formattedInput = '';

        if (phoneInput.startsWith('03')) {
            if (phoneInput.length > 11) {
                phoneInput = phoneInput.slice(0, 11);  // Restrict to 11 digits for mobile numbers
            }
            if (phoneInput.length > 4) {
                formattedInput = phoneInput.slice(0, 4) + '-' + phoneInput.slice(4);
            } else {
                formattedInput = phoneInput;
            }
        } else {
            if (phoneInput.length > 10) {
                phoneInput = phoneInput.slice(0, 10);  // Restrict to 10 digits for landline numbers
            }
            if (phoneInput.length > 3) {
                formattedInput = phoneInput.slice(0, 3) + '-' + phoneInput.slice(3);
            } else {
                formattedInput = phoneInput;
            }
        }

        $(this).val(formattedInput);

        var phonePattern = /^(03\d{2}-\d{7})|(0\d{2}-\d{7})|(\(0\d{2}\) \d{7})$/;
        var phoneError = $('#phoneError');

        if (phonePattern.test($(this).val())) {
            $(this).removeClass('is-invalid').addClass('is-valid');
            phoneError.hide();
        } else {
            $(this).removeClass('is-valid').addClass('is-invalid');
            phoneError.show();
        }
    });
    $('#provider-add').on('submit', function(e) {
        var phoneInput = $('#phone').val();
        var phonePattern = /^(03\d{2}-\d{7})|(0\d{2}-\d{7})|(\(0\d{2}\) \d{7})$/;

        if (phoneInput !== '' && !phonePattern.test(phoneInput)) {
            event.preventDefault();
            $('#phone').addClass('is-invalid');
            alert('Please enter a valid Pakistani phone number in the format 03XX-XXXXXXX, 0XX-XXXXXXX, or (0XX) XXXXXXX.');
        } else {
            e.preventDefault(); // Prevent the default form submission

            var form = $(this);
            var url = form.attr('action');
            var data = form.serialize();

            $.ajax({
                type: "POST",
                url: url,
                data: data,
                success: function(response) {
                    // Check if the response contains a redirect URL
                    if (response.redirect_url) {
                        swal({
        title: "asffd",
        text: 'message',
        icon: "success",
        button: false,
        timer: 2000, // Duration in milliseconds (3000ms = 3 seconds)
            timerProgressBar: true, // Show a progress bar
            didOpen: () => {
                Swal.showLoading() // Show loading animation
            },
            willClose: () => {
                console.log('Alert closed after 3 seconds');
            }
        }).then(() => {
                                window.location.href = response.redirect_url;
                            });
                    } else {
                        alert('Form submitted successfully, but no redirect URL found.');
                    }
                },
                error: function(xhr) {
                        if (xhr.status === 422) {
                            // Extract validation errors from the response
                            var errors = xhr.responseJSON.errors;

                            // Display validation errors next to each form field
                            $.each(errors, function(key, value) {
                                console.log(value);
                                $('#' + key + 'Error').html(value[0]);
                                $('#' + key).addClass('is-invalid');
                            });

                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Errors',
                                text: 'Please correct the errors and try again.'
                            });
                        } else {
                            Swal.fire(
                                'Error!',
                                'An error occurred. Please try again.',
                                'error'
                            );
                        }
                    }
                });
        }
    });
});

$('#provider-update').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Clear previous error messages
        $('.text-danger').html('');

        var form = $(this);
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            type: "PUT",
            url: url,
            data: data,
            success: function(response) {
                console.log(response)
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Record updated successfully.'
                });
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    // Extract validation errors from the response
                    var errors = xhr.responseJSON.errors;

                    // Display validation errors next to each form field
                    $.each(errors, function(key, value) {
                        $('#' + key + 'Error').html(value[0]);
                    });

                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Errors',
                        text: 'Please correct the errors and try again.'
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'An error occurred. Please try again.'
                    });
                }
            }
        });
    });
</script>
