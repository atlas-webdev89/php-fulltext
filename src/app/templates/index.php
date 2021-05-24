<!DOCTYPE html>
<html lang="ru">
<head>
        <title>{{title_page}}</title>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
                {% block content %} 
                    {{ main_section | raw }}
                {% endblock %}
                
        <script  src="/js/jquery-3.2.1.min.js"></script>
        <script  src="/js/bootstrap.min.js"></script>
        <script  src="/js/jquery-validation.min.js"></script>
        <script  src="/js/main.js"></script>      
</body>
</html>