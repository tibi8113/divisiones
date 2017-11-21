<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tibi</title>

    </head>
    <body>
    <div id="division">
        <form action="/permitido" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token	() }}"><br>
            Usuario:<br>
            <input type="text" name="usuario" value=""><br><br>
            <button type="submit">Enviar</button>
        </form>

        </form>
    </div>
    </form>

    </div>
    </body>
</html>
