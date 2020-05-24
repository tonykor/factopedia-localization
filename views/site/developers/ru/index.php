<?php 
use yii\helpers\Html;
?>

<h3>Разработчики</h3>

<p>
    Хотим выразить большую благодарность таким проектам как <?= Html::a('PHP', 'http://www.php.net/')?>, <?=Html::a('Yii Framework', 'https://www.yiiframework.com/')?>, <?=Html::a('MySQL', 'https://www.mysql.com')?>, <?=Html::a('Memcached', 'https://memcached.org/')?>, <?=Html::a('Sphinx Search', 'https://http://sphinxsearch.com/')?> благодаря им появилась <?=Yii::$app->params['name'];?>.
</p>

<p>
    Если вы как и мы хотите сделать <?=Yii::$app->params['name'];?> лучше тогда присоединяйтесь к нам. Прямо сейчас вы можете <b><?= Html::a('помочь нам перевести', "https://github.com/tonykor/factopedia-localization"); ?></b> <?=Yii::$app->params['name'];?> на ваш родной язык, или наполнить энциклопедию необходимым контентом. Для того что бы добавлять объекты в базу из вашего скрипта, используйте наше RESTful API, которое доступно по адресу <?= Html::a(Yii::$app->params['protocol']."://api.".Yii::$app->params['domain'], Yii::$app->params['protocol']."://api.".Yii::$app->params['domain']);?>. Если вы хотите участвовать в разработке <?=Yii::$app->params['name'];?>, пожалуйста <?= Html::a('свяжитесь с нами', ['site/contact']); ?>.
</p>


<h3>Содержание</h3>
<ol>
    <li><a href="#authorization">Авторизация</a></li>
    <li><a href="#format">Формат данных</a></li>
    <li><a href="#endpoints">Конечные точки (endpoints)</a></li>
        <ol>
            <li><a href="#general">Общие принципы</a></li>
            <li><a href="#objects">/objects</a></li>
            <ol>
                <li><a href="#get-objects">GET /objects вывод перечня объектов</a></li>
                <li><a href="#post-object">POST /objects добавление нового объекта</a></li>
                <li><a href="#post-object">PUT /objects/123 редактирование объекта</a></li>
            </ol>
            <li><a href="#properties">/properties</a></li>
            <li><a href="#properties-categories">/properties-categories</a></li>
            <li><a href="#units">/units</a></li>
            <li><a href="#comparisons">/comparisons</a></li>
            <ol>
                <li><a href="#get-comparisons">GET /comparisons вывод перечня сравнений.</a></li>
                <li><a href="#post-comparison">POST /comparisons добавление нового сравнения</a></li>
            </ol>
        </ol>
    <li>Реализация API на разных языках</li>
        <ol>PHP <a href="#api-php">https://github.com/factopedia/api/php</a></ol>
</ol>

<h4 id="authorization">Авторизация</h4>

Только зарегистрированные пользователи могут использовать API<?=(Yii::$app->user->identity->isGuest() ? ' поэтому '.Html::a('зарегистрируйтесь', ['users/create']).' или '.Html::a('войдите', ['users/login']) : "");?>. Авторизация пользователя происходит с помощью <a href="https://en.wikipedia.org/wiki/Basic_access_authentication" target="_blank" rel="nofollow">HTTP Basic Access Authentication</a> в качестве имя пользователя используйте свой <i>API token</i> 

<?php 
//do no cache
echo $this->renderDynamic('return (!Yii::$app->user->identity->isGuest() ? "<pre class=\"code\"><code>".Yii::$app->user->identity->token."</code></pre>" : "который найдёте у себя в профиле.");');
?>
Пароль оставьте пустым.<br>
Что бы автоматически делать запросы на API добавьте в заголовки запроса заголовок <i>Authorization</i> с данными <i>Basic {credentials}</i> где {credentials} - закодированный в base64 <i>{token}:</i>, двоеточие на конце обязательно.
<?php
echo $this->renderDynamic('return (!Yii::$app->user->identity->isGuest() ? "В вашем случае необходимо добавить в заголовок запроса строку<pre class=\"code\"><code>Authorization: Basic ".base64_encode(Yii::$app->user->identity->token.":")."</code></pre>" : "");');
?>

<h4 id="format">Формат данных</h4>

Если в запросе присутствует заголовок 

<pre class="code"><code>Accept: application/json; q=1.0, */*; q=0.1</code></pre>

Данные будут возвращены в JSON формате, иначе в XML

<h1 id="endpoints">Конечные точки (endpoints)</h1>

<ol>
    <li><a href="#objects">/objects</a></li>
        Получение информации по объектам, добавление, правка объектов
    <li><a href="#properties">/properties</a></li>
        Получение информации по свойствам, добавление новый свойств
    <li><a href="#units">/units</a></li>
        Получение информации по единицам измерения, добавление новых единиц измерения
    <li><a href="#comparisons">/comparisons</a></li>
        Сравнение объектов, добавление, правка сравнений
</ol>

<h4 id="general">Общие принципы</h4>

Все запросы выборки <i>GET</i> можно расширять дополнительными параметрами 
<pre class="code">
<code>
    expand: получить дополнительную информацию;
    filter: отфильтровать, сделать поиск *;
    sort: отсортировать объекты в определённом порядке *;
</code>
</pre>

<small>* работает только на конечных точках которые возвращают перечень объектов</small>
<p>возможные значения параметра <i>expand</i> для каждой конечной точки будут свои, они будут указываться в описании к конечно точке.</p>

<p><b>filter</b> в общем имеет следующий формат</p>
<pre class="code">
<code>
filter[name]{[operator]}=value

{} operator необязательная часть
</code>
</pre>

<p><b>sort</b> в общем имеет следующий формат</p>
<pre class="code">
<code>
sort=name
</code>
</pre>

<i>name</i> - это название поля. По умолчанию сортировка ASC, от меньшего к большему, если вы хотите отсортировать в обратном порядке используйте знак "-" перед полем,то есть <i>sort=-name</i>

<h3 id="objects">/objects</h3>

Конечные точки (endpoints)
<pre class="code">
<code>
<a href="#get-objects">GET /objects</a>: перечень всех объектов страница за страницей;
<a href="#post-object">POST /objects</a>: добавление нового объекта;
<a href="#get-object">GET /objects/123</a>: информация об объекте 123;
<a href="#put-object">PATCH /objects/123 или PUT /objects/123</a>: редактировать объект 123;
</code>
</pre>

<h4 id="get-objects">GET /objects перечень всех объектов страница за страницей</h4>

Ознакомьтесь с <a href="#general">общими принципами</a> команд возвращающих перечень. Данная команда не принимает значение <i>filter</i>, вместо этого можно фильтровать данные по нескольких параметрам, а именно:

<pre class="code">
<code>
name
parentId
lang
</code>
</pre>

Это позволяет искать объекты по имени и в определённых категориях.

Возможные значения дополнительных параметров

<p><b>expand</b></p>
<pre class="code">
<code>
properties
suggestedProperties
parents
children
</code>
</pre>

Пример использования

<pre class="code">
<code>
GET /objects?expand=properties,suggestedProperties,parents,children&sort=id&name=example&parentId=123&lang=ru
</code>
</pre>

<h4 id="post-object">POST /objects добавление нового объекта</h4>

Вначале ознакомьтесь с соответствующим разделом помощи, который описывает <?= Html::a('добавление новых объектов', ['site/help', '#'=>'object-create']); ?>. Данные могут отправляться в формате www-url-form-encode если вы не отправляете изображения, и в формате multipart/form-data если вы отправляете или не отправляете изображения

<pre class="code">
<code>
name: название объекта (*);
lang: языковая версия сайта в двухбуквенном формате (*);
descriptions: описание;
main_image: md5 checksum файла картинки;
aliases[]: другие названия объекта;
parents[][Objects][id]:  родительский объект (категория);
children[][Objects][id]:  объекты детей, объекты произошедшие от данного объекта;
imageFiles[]: файлы фотографий;

objectsPropertiesValues[n][ObjectsPropertiesValues][name]: данные по каждому свойству, n - ID свойства, возможные значения поля <i>name</i> смотрите в выводе конечной точки <a href="#properties">/properties</a>
    <b>обязательные поля</b>:
    objectsPropertiesValues[n][ObjectsPropertiesValues][property_id]: ID названия свойства, название свойства должно быть предварительно добавлено если такого названия ещё не присутствует в базе, проверить наличие или добавить можно на конечной точке <a href="#properties">/properties</a>
    <b>возможные значения поля <i>type</i></b>:
    int, dec, range_int, range_dec, bool, text, object, array, array_of_objects, dynamic
Links[n][url]: ссылка на свойство, n - ID свойства;


Например:
POST /objects

?name=foo
&lang=ru
&description=bar
&aliases[]=foobar
&aliases[]=barfoo
&parents[][Objects][id]=123
&children[][Objects][id]=234
&objectsPropertiesValues[12][ObjectsPropertiesValues][property_id]=12
&objectsPropertiesValues[12][ObjectsPropertiesValues][category_id]=11
&objectsPropertiesValues[12][ObjectsPropertiesValues][unit_id]=21
&objectsPropertiesValues[12][ObjectsPropertiesValues][type]=int
&objectsPropertiesValues[12][ObjectsPropertiesValues][value]=4321
&objectsPropertiesValues[12][ObjectsPropertiesValues][order_by]=1
&objectsPropertiesValues[13][ObjectsPropertiesValues][property_id]=13
&objectsPropertiesValues[12][ObjectsPropertiesValues][category_id]=11
&objectsPropertiesValues[13][ObjectsPropertiesValues][unit_id]=31
&objectsPropertiesValues[13][ObjectsPropertiesValues][type]=bool
&objectsPropertiesValues[13][ObjectsPropertiesValues][value]=1
&objectsPropertiesValues[13][ObjectsPropertiesValues][order_by]=2
&Links[12][url]=http://www.example.com
&Links[13][url]=http://www.example1.com
</code>
</pre>

<small>* Обязательные данные</small>

<h4 id="get-object">GET /objects/123 получение данных по объекту</h4>

Смотрите описание команды <a href="#get-objects">GET /objects</a>, данная команда принимает такие же параметры. Дополнительные параметры:

<pre class="code">
<code>
format: формат возвращаемых данных. Используется что бы сразу сгенерировать данные для команды редактирования объекта <a href="#put-object">PUT /objects/123</a>. Возможные значения: api
</code>
</pre>

Пример использования

<pre class="code">
<code>
GET /objects/123
GET /objects/123?format=api
</code>
</pre>

<h4 id="put-object">PUT /objects/123 редактирование объекта</h4>

Смотрите описание команды <a href="#post-object">POST /objects</a>, данная команда принимает такие же параметры. Внимание когда редактируете хотя бы одно поле, необходимо отправить и все остальные поля только в неизменном виде. Что бы получить POST данные для какого либо объекта, добавьте параметр <b>format=api</b> в запрос <a href="#get-object">GET /object/123</a>


<h3 id="properties">/properties</h3>

Получение и добавление в базу данных названий свойств которые могут присутствовать у объектов. Ознакомьтесь с <a href="#general">общими принципами</a> команд возвращающих перечень. 

<p>Конечные точки (endpoints)</p>
<pre class="code">
<code>
GET /properties: перечень всех свойств страница за страницей;
POST /properties: добавление нового свойства;
GET /properties/123: информация о свойстве 123;
</code>
</pre>

Примеры использования:

<pre class="code">
<code>
GET /properties?filter[name]=foo&lang=ru
GET /properties?filter[name][like]=bar&lang=ru&sort=name
POST /properties&name=foo&lang=ru
</code>
</pre>

<h3 id="properties-categories">/properties-categories</h3>

Получение и добавление в базу данных названий категорий свойств которые могут присутствовать у объектов. Ознакомьтесь с <a href="#general">общими принципами</a> команд возвращающих перечень. 

<p>Конечные точки (endpoints)</p>
<pre class="code">
<code>
GET /properties-categories: перечень всех категорий свойств страница за страницей;
POST /properties-categories: добавление новой категории;
GET /properties-categories/123: информация о категории  номер 123;
</code>
</pre>

Примеры использования:

<pre class="code">
<code>
GET /properties-categories?filter[name]=foo&lang=ru
GET /properties-categories?filter[name][like]=bar&lang=ru&sort=name
POST /properties-categories&name=foo&lang=ru
</code>
</pre>

<h3 id="units">/units</h3>

Получение и добавление в базу данных названий единиц изменения которые могут присутствовать у свойств объекта. Ознакомьтесь с <a href="#general">общими принципами</a> команд возвращающих перечень. 

<p>Конечные точки (endpoints)</p>
<pre class="code">
<code>
GET /units: перечень всех единиц измерения страница за страницей;
POST /units: добавление новой единицы измерения;
GET /units/123: информация о единице измерения 123;
</code>
</pre>

Примеры использования:

<pre class="code">
<code>
GET /units?filter[name]=foo&lang=ru
GET /units?filter[name][like]=bar&lang=ru&sort=-name
POST /units&name=foo&lang=ru
</code>
</pre>


<h3 id="comparisons">/comparisons</h3>

Конечные точки (endpoints)
<pre class="code">
<code>
<a href="#get-comparisons">GET /comparisons</a>: перечень всех сравнений страница за страницей;
<a href="#post-comparison">POST /comparisons</a>: добавление нового сравнения;
GET /comparisons/123: информация о сравнении 123;
PATCH /comparisons/123 или PUT /comparisons/123: редактировать сравнение 123;
</code>
</pre>

<h4 id="get-comparisons">GET /comparisons перечень всех сравнений страница за страницей</h4>

Ознакомьтесь с <a href="#general">общими принципами</a> команд возвращающих перечень. Возможные значения дополнительных параметров

<p><b>expand</b></p>
<pre class="code">
<code>
sortings
sortings.property
objects
</code>
</pre>

Пример использования

<pre class="code">
<code>
GET /comparisons?expand=sortings.property,objects&filter[name][like]=Foobar&filter[lang]=ru&sort=-id
</code>
</pre>

<h4 id="post-comparison">POST /comparisons добавление нового сравнения</h4>

Вначале ознакомьтесь с соответствующим разделом помощи, который описывает <?= Html::a('сравнение объектов', ['site/help', '#'=>'comparisons']); ?>. Данные могут отправляться в формате www-url-form-encode

<pre class="code">
<code>
name: название сравнения;
lang: языковая версия сайта в двухбуквенном формате (*);
descriptions: описание;

comparisonsSortings[n][ComparisonsSortings][name]: данные по каждому свойству, n - ID свойства, возможные значения поля <i>name</i>:
    comparisonsSortings[n][ComparisonsSortings][property_id] *: ID свойства
    comparisonsSortings[n][ComparisonsSortings][order] *: номер сортировки (1-10)
    comparisonsSortings[n][ComparisonsSortings][direction]: направление сортировки (asc, desc)


Например:
POST /comparisons

?objects[][Objects][id]=123
&objects[][Objects][id]=456
&name=Foo bar
&lang=ru
&comparisonsSortings[34][ComparisonsSortings][property_id]=34
&comparisonsSortings[34][ComparisonsSortings][order]=1
&comparisonsSortings[34][ComparisonsSortings][direction]=asc
&comparisonsSortings[35][ComparisonsSortings][property_id]=35
&comparisonsSortings[35][ComparisonsSortings][order]=1
&comparisonsSortings[35][ComparisonsSortings][direction]=desc
</code>
</pre>

<small>* Обязательные данные</small>


