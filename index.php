<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Поисковая система</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css" rel="stylesheet" />
</head>
<body>
<section>
    <form action="search.php" method="post">
        <div class="row">
            <div class="col-md-2 m-5">
                <div class="form-gruup mb-3">
                    <label for="address">Поиск</label>
                    <input type="text" id="address" class="form-control address" name="address" required>
                </div>
                <button type="submit" class="btn btn-primary">Поиск</button>
            </div>
        </div>
    </form>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>