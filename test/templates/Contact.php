<?php
    $Title = 'Contact';
    require_once __DIR__.'../file-inclusion/layout/head.php';
    require_once __DIR__.'../file-inclusion/layout/header.php';
?>
<main class="d-flex align-items-center">
    <div class="container">
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputFirstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="inputFirstName">
            </div>
            <div class="col-md-6">
                <label for="inputLastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="inputLastName">
            </div>
            <div class="col-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail">
            </div>
            <div class="col-12">
                <label for="inputMessage" class="form-label">Message</label>
                <textarea class="form-control" id="inputMessage" rows="3"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
</main>
<?php
    require_once __DIR__.'../file-inclusion/layout/footer.php';
?>