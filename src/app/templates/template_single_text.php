<section class="mt-5">
            <div class="container">
                <div class="row no-gutters justify-content-center">
                    <h1>{{title_block}}</h1>
                </div>
                
                <div class="row justify-content-center content pr-3 pl-3">
                    {% if single_text %}
                        {% for texts in single_text %}
                            <div class="col-md-12 text-justify">Идентификатор: {{texts.id}} </div>
                            <div class="col-md-12 text-justify">Дата модификации: {{texts.add_date}} </div>
                            <div class="col-md-12 text-justify">Результат: {{texts.text}} </div>
                        {% endfor %}
                    {% else %}
                            <div class="col-md-12 text-center">Текст не найден</div>
                    {% endif %}
                </div>
            
            </div>
</section>

