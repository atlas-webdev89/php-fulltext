<!DOCTYPE html>
<html lang="ru">
<head>
        <title>{{title_page}}</title>
        <meta charset="UTF-8">
        
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
        <section class="mt-5">
            <div class="container">
                <div class="row no-gutters justify-content-center">
                    <h1>{{title_block}}</h1>
                </div>
                <div class="row justify-content-center content pr-3 pl-3">
                    <form id="main-form" class="">
                            <div class="form-group ">
                                <label for="search_text">Введите текст для поиска</label>
                                <input type="search" class="form-control" id="search_text" name="search_text" placeholder="Поисковой по базе...">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </div>
                        </form>
                </div>
            </div>
        </section>

        <script  src="js/jquery-3.2.1.min.js"></script>
        <script  src="js/bootstrap.min.js"></script>
        <script  src="/js/jquery-validation.min.js"></script>
        <script  src="/js/main.js"></script>      
</body>
</html>