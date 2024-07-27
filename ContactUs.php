<!DOCTYPE html>
<html>
<head>
<title>Project</title>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
</head>

<body>

<section class="my-3">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
        <form id="contactForm" action="userinfo.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control">
                <small id="usernameError" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
                <label for="email">Email Id</label>
                <input type="email" id="email" name="email" class="form-control">
                <small id="emailError" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="mobile" class="form-control">
                <small id="mobileError" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
                <label for="article">Article</label>
                <textarea id="article" name="article" class="form-control"></textarea>
                <small id="articleError" class="form-text text-danger"></small>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</section>

<script>
document.getElementById('contactForm').onsubmit = function(event) {
    // Clear previous errors
    document.getElementById('usernameError').textContent = '';
    document.getElementById('emailError').textContent = '';
    document.getElementById('mobileError').textContent = '';
    document.getElementById('articleError').textContent = '';

    // Validation flags
    let isValid = true;

    // Get form values
    const username = document.getElementById('username').value.trim();
    const email = document.getElementById('email').value.trim();
    const mobile = document.getElementById('mobile').value.trim();
    const article = document.getElementById('article').value.trim();

    // Validate username
    if (username === '') {
        document.getElementById('usernameError').textContent = 'Username is required';
        isValid = false;
    }

    // Validate email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === '' || !emailPattern.test(email)) {
        document.getElementById('emailError').textContent = 'Valid email is required';
        isValid = false;
    }

    // Validate mobile number (assuming a simple pattern for demonstration)
    const mobilePattern = /^[0-9]{10}$/;
    if (mobile === '' || !mobilePattern.test(mobile)) {
        document.getElementById('mobileError').textContent = 'Mobile number must be 10 digits';
        isValid = false;
    }

    // Validate article
    if (article === '') {
        document.getElementById('articleError').textContent = 'Article is required';
        isValid = false;
    }

    // Prevent form submission if invalid
    if (!isValid) {
        event.preventDefault();
    }
};
</script>

</body>
</html>
