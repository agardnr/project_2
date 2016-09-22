<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"><!-- CSS -->
    <link href="p2.css" rel="stylesheet"><!-- Bootstrap -->
    <link crossorigin="anonymous" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity=
    "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    rel="stylesheet"><!-- Optional theme -->
    <link crossorigin="anonymous" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity=
    "sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
    rel="stylesheet"><!-- Latest compiled and minified JavaScript -->

    <script src=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <link href="p1.css" rel="stylesheet" type="text/css">
    <title>Password Generator</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <?php require 'validate.php'; ?>
    <?php require 'password.php'; ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h2>Password Generator</h2>
                <form class="form-horizontal" action="index.php" method="post">
                    <div class="form-group">
                        <label class="control-label col-xs-10" for=
                        "word_count">How many words would you like?<br>
                        (maximum is 20)</label>
                        <div class="col-sm-2">
                            <input class="form-control" id="word_count" max=
                            "20" min="1" type="text" name="word_count" pattern="[1-9]" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-10" for=
                        "number_count">How many numbers would you like?<br>
                        (maximum is 20)</label>
                        <div class="col-sm-2">
                            <input class="form-control" id="number_count" max=
                            "20" min="1" name="number_count" type="text" pattern="[1-9]" required="">
                        </div>
                    </div>
                    <div class="checkbox">
                        <label class="control-label col-xs-10" for="symbol_opt"
                        id="symbol"><input id="symbol_opt" name="symbol_opt"
                        type="checkbox" value="yes"> Include Symbols</label>
                    </div>
                    <div class="submit">
                        <button class="btn btn-default" id="submit" type=
                        "submit">Create my password</button>
                    </div>
                        <?php if(isset($error)): ?>
                            <div class='error'><?php echo $error; ?></div>
                        <?php endif ?>
                </form>
                <div class="pw_output">
                    <p class="pw">password goes here</p>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>
