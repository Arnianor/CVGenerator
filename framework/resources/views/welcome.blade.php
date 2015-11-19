<!DOCTYPE html>
<html>
    <head>
        <title>CVGenerator</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 3em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
					CVGeneartor vous souhaite la bienvenue<br/>
					Crééz votre CV en 5 minutes
				</div>
				<a href="{{ Html::link('formulaire') }}" > C'est parti</a>
            </div>
        </div>
    </body>
</html>
