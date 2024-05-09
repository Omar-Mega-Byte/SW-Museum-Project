<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Data/BookVisit.css">
    <link rel="icon" href="../Data/Untitled (1).png">
    <title>Document</title>
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Book a Visit</h3>
                        <p>Fill in the data below.</p>
                        <form method="post" action="../Controllers/BookVisit1.php" class="requires-validation" novalidate>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                <div class="valid-feedback">Username field is valid!</div>
                                <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                <div class="valid-feedback">Email field is valid!</div>
                                <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>
                            <div class="col-md-12">
                                <select class="form-select mt-3" required>
                                    <option selected disabled value="">Visit Type</option>
                                    <option value="jweb">Educational</option>
                                    <option value="sweb">Familt</option>
                                    <option value="pmanager">Non-Arabic Speakers</option>
                                </select>
                                <div class="valid-feedback">You selected a position!</div>
                                <div class="invalid-feedback">Please select a position!</div>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="visitname" placeholder="Visit Name" required>
                                <div class="valid-feedback">Password field is valid!</div>
                                <div class="invalid-feedback">Password field cannot be blank!</div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <input class="form-control" type="tel" name="phone" placeholder="Phone Number" required>
                                <div class="valid-feedback">Phone Number field is valid!</div>
                                <div class="invalid-feedback">Phone Number field cannot be blank!</div>
                            </div>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label">I confirm that all data are correct</label>
                                <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                            </div>
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Book visit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../Data/BookVisit.js"></script>
</body>

</html>