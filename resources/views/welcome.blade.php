<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Position</title>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css"
          type="text/css"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">Position - Consultar web</h3>
    </div>

    <div class="jumbotron col-md-12">
        <form class="form-horizontal" id="form">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <label for="inputEmail3" class="col-sm-2 control-label">Url</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control url" data-validation="url" placeholder="Ingrese una url válida">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2  col-sm-10">
                            <textarea class="form-control alert-info" id="message" name="message"
                                      rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Consultar</button>
                </div>
            </div>
        </form>
    </div>
</div> <!-- /container -->

</body>

<script src="http://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script src="{{asset('js/myapp.js')}}" type="text/javascript"></script>

</html>
