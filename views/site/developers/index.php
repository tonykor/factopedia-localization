<?php 
use yii\helpers\Html;
?>

<h3>Developers</h3>

<p>
    We would like to express our deep gratitude to the following projects <?= Html::a('PHP', 'http://www.php.net/')?>, <?=Html::a('Yii Framework', 'https://www.yiiframework.com/')?>, <?=Html::a('MySQL', 'https://www.mysql.com')?>, <?=Html::a('Nginx', 'https://www.nginx.com/')?>, <?=Html::a('Memcached', 'https://memcached.org/')?>, <?=Html::a('Sphinx Search', 'https://http://sphinxsearch.com/')?> thanks to them <?=Yii::$app->params['name'];?> was created.
</p>

<p>
    If you like to make <?=Yii::$app->params['name'];?> better, then join us. Right now you can <b><?= Html::a('help us to translate', "#"); ?></b> <?=Yii::$app->params['name'];?> into your native language, or fill the encyclopedia with the necessary content. To create new objects, you can use our RESTful API, which is available by the url <?= Html::a(Yii::$app->params['protocol']."://api.".Yii::$app->params['domain'], Yii::$app->params['protocol']."://api.".Yii::$app->params['domain']);?>. If you want to participate in <?=Yii::$app->params['name'];?> development, please <?= Html::a('contact us', ['site/contact']); ?>.
</p>


<h3>Contents</h3>
<ol>
    <li><a href="#authorization">Authorization</a></li>
    <li><a href="#format">Data format</a></li>
    <li><a href="#endpoints">Endpoints</a></li>
        <ol>
            <li><a href="#general">General principles</a></li>
            <li><a href="#objects">/objects</a></li>
            <ol>
                <li><a href="#get-objects">GET /objects listing of objects</a></li>
                <li><a href="#post-object">POST /objects creating new object</a></li>
                <li><a href="#post-object">PUT /objects/123 updating object</a></li>
            </ol>
            <li><a href="#properties">/properties</a></li>
            <li><a href="#properties-categories">/properties-categories</a></li>
            <li><a href="#units">/units</a></li>
            <li><a href="#comparisons">/comparisons</a></li>
            <ol>
                <li><a href="#get-comparisons">GET /comparisons listing of comparisons</a></li>
                <li><a href="#post-comparison">POST /comparisons creating new comparison</a></li>
            </ol>
        </ol>
    <li>API realization on different languages</li>
        <ol>PHP <a href="#api-php">https://github.com/factopedia/api/php</a></ol>
</ol>

<h4 id="authorization">Authorization</h4>

Only registered users can use API<?=(Yii::$app->user->identity->isGuest() ? ' so '.Html::a('register', ['users/create']).' or '.Html::a('login', ['users/login']) : "");?>. User authorization occurs using <a href="https://en.wikipedia.org/wiki/Basic_access_authentication" target="_blank" rel="nofollow">HTTP Basic Access Authentication</a> as a username use your <i>API token</i> 

<?php 
//do no cache
echo $this->renderDynamic('return (!Yii::$app->user->identity->isGuest() ? "<pre class=\"code\"><code>".Yii::$app->user->identity->token."</code></pre>" : "which you will find in your profile.");');
?>
Password field leave blank.<br>
To automatically make API calls, add a header <i>Authorization</i> to the request headers with data <i>Basic {credentials}</i> where {credentials} - base64 encoded <i>{token}:</i>, a colon at the end is required.
<?php
echo $this->renderDynamic('return (!Yii::$app->user->identity->isGuest() ? "In your case, add the next line to the request header <pre class=\"code\"><code>Authorization: Basic ".base64_encode(Yii::$app->user->identity->token.":")."</code></pre>" : "");');
?>

<h4 id="format">Data format</h4>

If the request contains a header 

<pre class="code"><code>Accept: application/json; q=1.0, */*; q=0.1</code></pre>

Data will be returned in JSON format, otherwise in XML

<h1 id="endpoints">Endpoints</h1>

<ol>
    <li><a href="#objects">/objects</a></li>
        Getting objects data, creating and updating objects
    <li><a href="#properties">/properties</a></li>
        Getting properties data, creating properties
    <li><a href="#units">/units</a></li>
        Getting units data, creating units
    <li><a href="#comparisons">/comparisons</a></li>
        Objects comparisons, creating and updating comparisons
</ol>

<h4 id="general">General principles</h4>
All the listing calls <i>GET</i> can be extended with additional parameters 
<pre class="code">
<code>
    expand: getting additional data;
    filter: filter results, searching *;
    sort: sorting listing *;
</code>
</pre>

<small>* available only on endpoints which returns collections</small>
<p>each endpoint has its own values of <i>expand</i> parameter, see possible values in the endpoint description.</p>

<p><b>filter</b> has the following format</p>
<pre class="code">
<code>
filter[name]{[operator]}=value

{} operator is optional
</code>
</pre>

<p><b>sort</b> has the following format</p>
<pre class="code">
<code>
sort=name
</code>
</pre>

<i>name</i> - field name. Default sort is ASC, from smaller to larger, if you want to sort in reverse order use "-" before field name, for example <i>sort=-name</i>

<h3 id="objects">/objects</h3>

Endpoints
<pre class="code">
<code>
<a href="#get-objects">GET /objects</a>: listing of objects, by pages;
<a href="#post-object">POST /objects</a>: creating new object;
<a href="#get-object">GET /objects/123</a>: object 123 data;
<a href="#put-object">PATCH /objects/123 or PUT /objects/123</a>: updating object 123;
</code>
</pre>

<h4 id="get-objects">GET /objects listing of objects, by pages</h4>

Please read <a href="#general">general principles</a> of listing commands. This command do not support <i>filter</i> parameter, instead you can filter objects with additional parameteres:

<pre class="code">
<code>
name
parentId
lang
</code>
</pre>

This allows you to search objects by name and in certain categories.

Possible values for additional parameters

<p><b>expand</b></p>
<pre class="code">
<code>
properties
suggestedProperties
parents
children
</code>
</pre>

Usage example

<pre class="code">
<code>
GET /objects?expand=properties,suggestedProperties,parents,children&sort=id&name=example&parentId=123&lang=en
</code>
</pre>

<h4 id="post-object">POST /objects creating new object</h4>

First check out the related help section that describes <?= Html::a('objects creation', ['site/help', '#'=>'object-create']); ?>. Data can be sent in www-url-form-encode format if you are not sending images, and in multipart/form-data format if you are sending or not sending images

<pre class="code">
<code>
name: object name (*);
lang: language, two-letter format (*);
descriptions: object description;
main_image: md5 checksum of image file;
aliases[]: other object names;
parents[][Objects][id]:  parent object (category);
children[][Objects][id]:  children objects, objects descended from this object;
imageFiles[]: image files;

objectsPropertiesValues[n][ObjectsPropertiesValues][name]: each property data, n - property ID, possible values of <i>name</i> field see in <a href="#properties">/properties</a> endpoint description
    <b>required fields</b>:
    objectsPropertiesValues[n][ObjectsPropertiesValues][property_id]: property ID, property need to be added to the data base before linking the property with any object. To check is property already exists or create a new property you can with <a href="#properties">/properties</a> endpoint
    <b>possible field values <i>type</i></b>:
    int, dec, range_int, range_dec, bool, text, object, array, array_of_objects, dynamic
Links[n][url]: link for the property, n - property ID;


For example:
POST /objects

?name=foo
&lang=en
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

<small>* Mandatory data</small>

<h4 id="get-object">GET /objects/123 getting object data</h4>

Check out <a href="#get-objects">GET /objects</a> command description, this command accept the same parameters. Additional parameters:

<pre class="code">
<code>
format: format of returned data. It is used to immediately generate data for an object editing command <a href="#put-object">PUT /objects/123</a>. Possible values: api
</code>
</pre>

Usage example

<pre class="code">
<code>
GET /objects/123
GET /objects/123?format=api
</code>
</pre>

<h4 id="put-object">PUT /objects/123 updating object</h4>

See <a href="#post-object">POST /objects</a> command description, this command accept the same parameters. Attention when editing at least one field, you must send all other unchanged fields as well. To get POST data for any object, add parameter <b>format=api</b> to the request <a href="#get-object">GET /object/123</a>


<h3 id="properties">/properties</h3>

Getting and adding properties to the database. Check out <a href="#general">general principles</a> chapter, for general information about commands returning collections. 

<p>Endpoints</p>
<pre class="code">
<code>
GET /properties: listing of properties, by pages;
POST /properties: creating new property;
GET /properties/123: information about property 123;
</code>
</pre>

Usage example:

<pre class="code">
<code>
GET /properties?filter[name]=foo&lang=en
GET /properties?filter[name][like]=bar&lang=en&sort=name
POST /properties&name=foo&lang=en
</code>
</pre>

<h3 id="properties-categories">/properties-categories</h3>

Getting and adding categories of properties to the database. Check out <a href="#general">general principles</a> chapter, for general information about commands returning collections. 

<p>Endpoints</p>
<pre class="code">
<code>
GET /properties-categories: listing of properties categories, by pages;
POST /properties-categories: creating new category;
GET /properties-categories/123: information about category 123;
</code>
</pre>

Usage example:

<pre class="code">
<code>
GET /properties-categories?filter[name]=foo&lang=en
GET /properties-categories?filter[name][like]=bar&lang=en&sort=name
POST /properties-categories&name=foo&lang=en
</code>
</pre>

<h3 id="units">/units</h3>

Getting and adding units to the database. Check out <a href="#general">general principles</a> chapter, for general information about commands returning collections. 

<p>Endpoints</p>
<pre class="code">
<code>
GET /units: listing of units, by pages;
POST /units: creating new unit;
GET /units/123: information about unit 123;
</code>
</pre>

Usage example:

<pre class="code">
<code>
GET /units?filter[name]=foo&lang=en
GET /units?filter[name][like]=bar&lang=en&sort=-name
POST /units&name=foo&lang=en
</code>
</pre>


<h3 id="comparisons">/comparisons</h3>

Endpoints
<pre class="code">
<code>
<a href="#get-comparisons">GET /comparisons</a>: listing of comparisons, by pages;
<a href="#post-comparison">POST /comparisons</a>: creating new comparison;
GET /comparisons/123: information about comparison 123;
PATCH /comparisons/123 or PUT /comparisons/123: updating comparison 123;
</code>
</pre>

<h4 id="get-comparisons">GET /comparisons listing of comparisons, by pages</h4>

Check out <a href="#general">general principles</a> chapter, for general information about commands returning collections. Possible values for additional parameters

<p><b>expand</b></p>
<pre class="code">
<code>
sortings
sortings.property
objects
</code>
</pre>

Usage example

<pre class="code">
<code>
GET /comparisons?expand=sortings.property,objects&filter[name][like]=Foobar&filter[lang]=en&sort=-id
</code>
</pre>

<h4 id="post-comparison">POST /comparisons adding new comparison</h4>

First check out the relevant help section which describes <?= Html::a('objects comparison', ['site/help', '#'=>'comparisons']); ?>. Data can be sent in www-url-form-encode format.

<pre class="code">
<code>
name: comparison name;
lang: language, two-letter format (*);
descriptions: description;

comparisonsSortings[n][ComparisonsSortings][name]: data for each property, n - property ID, possible field values <i>name</i>:
    comparisonsSortings[n][ComparisonsSortings][property_id] *: property ID
    comparisonsSortings[n][ComparisonsSortings][order] *: sorting order (1-10)
    comparisonsSortings[n][ComparisonsSortings][direction]: sorting direction (asc, desc)


For example:
POST /comparisons

?objects[][Objects][id]=123
&objects[][Objects][id]=456
&name=Foo bar
&lang=en
&comparisonsSortings[34][ComparisonsSortings][property_id]=34
&comparisonsSortings[34][ComparisonsSortings][order]=1
&comparisonsSortings[34][ComparisonsSortings][direction]=asc
&comparisonsSortings[35][ComparisonsSortings][property_id]=35
&comparisonsSortings[35][ComparisonsSortings][order]=1
&comparisonsSortings[35][ComparisonsSortings][direction]=desc
</code>
</pre>

<small>* Mandatory data</small>