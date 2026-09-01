<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background: #1b53c2;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    form {
        width: 100%;
        max-width: 420px;
        background: #c43030;
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
    }

    form::before {
        content: "Admin Login";
        display: block;
        font-size: 28px;
        font-weight: 700;
        text-align: center;
        color: #212529;
        margin-bottom: 25px;
    }

.form-control {
    padding: 12px 15px;
    border-radius: 8px;
    background-color: #bd0606 !important;
    color: #212529;
    border: 1px solid #0e64b9;
}

.form-control:focus {
    background-color: #8d1f1f !important;
    color: #212529;
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
}


    .btn-primary {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        font-weight: 600;
    }

    .form-check {
        font-size: 14px;
    }
</style>

<body>

<!-- <div class="container mt-3"> -->

  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<!-- </div> -->

</body>
</html>
