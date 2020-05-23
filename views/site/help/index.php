<?php
use yii\helpers\Html;

$this->title = Yii::t('app', 'Help');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::style('
li { font-weight:bold; }
ul.not-bold li { font-weight: normal; }
ol { counter-reset: item }
ol li { display: block }
ol li:before { content: counters(item, ".") " "; counter-increment: item }
') ?>
<h3>Contents</h3>
<ol>
    <li><a href="#contribution">Contributing to the project</a>
        <ol>
            <li><a href="#contribution-about">How does it work?</a></li>
            <li><a href="#contribution-voting">Voting</a></li>
            <li><a href="#contribution-blocks">Blocks</a></li>
        </ol>
    </li>
    <li><a href="#object">What do we mean by "Object" definition</a></li>
    <li><a href="#object-properties">Object attributes</a></li>
        <ol>
            <li><a href="#object-properties-inheritance">Attributes inheritance</a></li>
            <li><a href="#object-properties-restrictions">Limitations</a></li>
        </ol>
    <li><a href="#object-create">Creating new object</a></li>
    <li><a href="#comparisons">Objects comparison</a></li>
        <ol>
            <li><a href="#comparisons-sortings">Sorting objects</a></li>
            <li><a href="#attributes-comparisons">Comparing some data types</a></li>
        </ol>
</ol>

<h3 id="contribution">Contributing to the project</h3>

<?=Yii::$app->params['name'];?> in an open databse with a classified information about the objects around us. This database, website and even this text was created and supported by the people from all around the world, as you are. Thanks to them many people getting fast and free access to the information they are interested in. Many peoples can compare objects between each other to quickly make the right decision. We spend a lot of time daily to choose something, we don't know what to choose and need to see comparison table to make the right decision without doubt. We often wonder why does two same things assessed differently. We want to "expand" each object into the smallest "details", to solve this problems faster. This database is also very important to save and transfer knowledge for the future generations. Sometimes it's hard or impossible to obtain information about some objects, therefore we encourage people who have access to such information to share it with society, for the common good. Scientists and researchers all over the world, will be able to get fast and free access to this information and continue their researches.
<br><br>
If you like what we do you can contribute like a volunteer, you can <?= Html::a(Yii::t('app', 'register'), ['users/create']); ?> and start to edit  <?=Yii::$app->params['name'];?> or make a <?= Html::a(Yii::t('app', 'donation'), ['site/donate']); ?>. You can also edit as guest, without registration.

<h4 id="contribution-about">How does it work?</h4>

Guests and registered users can edit any <a href="#object">object</a> or <a href="#comparisons">comparison</a>, they can also discuss changes. Each user can vote for approving or declining changes. Members can subscribe to updates, to see whats happening in the categories they are interested.

<h4 id="contribution-voting">Voting</h4>
To approve or decline changes all the participants decide by voting. Participant vote weight is different and depending on the contribution made to the project. The more benefits a user has made to the project, the more weight his vote has. When a certain version scored a critical number of votes, version getting approved or declined. Changes can not be approved or declined by the large number of "small" votes, or by the small number of "big" votes. All is very simple.

<h4 id="contribution-blocks">Blocks</h4>
We take some measures to protect against vandals. Participants who harm the project are blocked, the blocking time is different and depending on the degree of damage caused. To prevent vandalism, there are some restrictions on some actions, such as making edits or adding new posts. If you edit <?=Yii::$app->params['name'];?> as a guest and getting a message to try later, you can <?= Html::a(Yii::t('app', 'register'), ['users/create']); ?> to increase limits. Our limits are set such way that ordinary users do not feel discomfort from this, if you are a fair participant and have problems with limits, please <?= Html::a(Yii::t('app', 'contact us'), ['site/contact']); ?>. 

<h3 id="object">What do we mean by "Object" definition</h3>

Almost all the objects belongs to some category or as we call it "<b>parent</b>". Parents are the same objects which can have their parents. And so on untill the object will not have parent. This process we call inheritance. Object without parent - <b>Primary object</b> or primary category, all the other objects created from them. If the object is a parent object at least for one other object and itself refers to another parent object, we call this object a <b>category</b> or <b>intermediate object</b>. For example, ordinary carrot "family tree" can looks like:
<p></p>

<em>Plantae / Tracheophytes / Angiosperms / Eudicots / Asterids / Apiales / Apiaceae / Daucus / D. carota / Carrot</em>

<p></p>
Do not afraid to identify "family tree" incorrectly, later we will decide together where is the right place of the object in the objects hierarchy.
<p></p>
If the object is not a parent of any other object, this is <b>final object</b>. Most of work on our website is going with this type of objects. Parent objects is used for final objects classification. Primary, intermediate and final objects, thats are objects of the same type, but with different place in "family tree". So let's repeat:
<ul>
    <li>Primary object</li> do not has parent
    <li>Intermediate object</li> has parent and is a parent for any other object (has children)
    <li>Final object</li> has parent, but is not a parent for any other object (do not has children)
</ul> 

<h3 id="object-properties">Object attributes</h3>

Each object consists of many attributes (properties), for exampleo object "Carrot" can have attributes "Calories" and/or "Fat", "Transport" object can have "Avarage speed".
The object can inherit an attributes of it's parents or have it's own attributes. Attributes can be with values or without values(undefined). Undefined attributes will be inherited by children objects and defined there. We collect only objective and important attributes about objects. When we compare objects we campare their attributes. A few world about how we hold and process some attributes:
<p>
    &#9900; <b>Dynamic value</b><br><b>Attention!</b> Setting this attribute requires special knowledge. <br>Sometimes attribute value changes, so as not to constantly update attribute value, you can specify source and parse rules and actual value will be always in our database. When you select attribute type <b>Dynamic value</b> you will see a skeleton of JSON object that you will need to fill. 
    <pre>
    {
        "url": "",
        "regexp": "",
        "format": "",
        "update_every_h": 24
    }  
    </pre>
    where:
    <ul>
        <li>url</li>
        URL address from which the value will be parsed
        <li>regexp</li>
        Regular expression that will be used for parsing value from the URL
        <li>format</li>
        Additional final value formating. 
        <br>
        Math expression, where <i>a</i>, <i>b</i>, <i>c</i> etc., can be regular expression result values. For example if you want the first value of regular expression multiply by 100, you need to put to this field: <i>a*100</i><br>
        Symbol replacement, for example: <i>replace|,|.</i>
        You can also change any symbol in resulting value to another, for example: <i>replace|,|.</i> which will lead to a replacement of all the commas(,) to dots(.)<br>
        
        It's possible to use two or more formats at once: <i>{"0":"replace|,|", "1":"a*100"}</i> which will lead to a deleting of all the commas(,) in the first find value `a`, and then the result will be multiplied by 100.
        <li>update_every_h</li>
        How often to update the value, in hours
    </ul> 
    in the values of these settings all signs <b>"</b> or <b>\</b> must be additionally escaped with a sign <b>\</b>, for example:
    <pre>
    {
        "url": "https://<?= Yii::$app->params['domain'];?>",
        "regexp": "/class=\"population\" data-count=\"([\\d]+).*\"/i",
        "format": "a*1000",
        "update_every_h": 24
    }      
    </pre>
    It should also be noted that our parser does not yet process javascript.
</p>
<p>
    &#9900; <b>Cost</b> Cost is a biased, unstable value. So we currently do not hold object cost in our database.
</p>

<h4 id='object-properties-inheritance'>Attributes inheritance</h4>

Objects inherited attributes of their parents. As a rule, objects which belongs to one parent, have similar attributes. By specifying correctly known object attributes you will simplify the work of everyone else who will create object from your parent. So when adding attributes make sure that they are assigned to the correct object in the hierarchy.
Primary and intermediate objects (categories), as a rule, have attributes with undefined values, and this attributes are defined in final objects.


<h4 id='object-properties-restrictions'>Limitations</h4>
Attributes
<ul>
    <li>Numeric</li> from -2147483648 to 2147483647 and from -99999.999999999999999 to 99999.999999999999999
    <li>Range</li> from -2147483648 to 2147483647 and from -99999.999999999999999 to 99999.999999999999999
    <li>Textual, Dynamic</li> 150 chars
    <li>A set of values</li> number of elements * 3 + character length of all the values, need to be lower or equal to 999 chars
    <li>A set of links to another objects</li> number of elements * 3 + character length of all the objects IDs, need to be lower or equal to 50 chars
</ul>

<small>If this limits is not enough for you, please <?=Html::a('contact us', ['site/contact']);?>.</small>


<h3 id="object-create">Creating new object</h3>

Creating new <a href="#object">object</a> make sure that it is not already in our database. To do this, you need to make a search using our <?=Html::a('API', ['site/developers']);?> or search form on the top of each page. Creating a category, make sure that it will hold more than one final object. For example a car, can have a name equal to generation, and the part of his "family tree" can looks like:
<p>
<em>... / Make / Model / Modification / Generation </em>
</p>
<ul>
    <li>Parent objects (Categories)</li>
    If you could not find necessary category, a good practice is to create this category first. Don't forget that category is the same object as any other, so follow the same rules.
    <li>Name</li>
    Final object need to have a full name, intermediate object preferably need to have only category name, for exaple a car object can have the following categories "Cars", "BMW", "E36", "320i sedan", but the final object is better to name "BMW E36 320i sedan, automatic". Final object name can be only singular in nominative case. Categories may be called in plural, for example "Cars", "Planes", "Countries".
    <li id="object-description">Description</li>
    You can use <?= Html::a('Markdown', 'https://en.wikipedia.org/wiki/Markdown#Example', ['rel'=>'nofollow']);?> syntax for text formating. You can also use the folllowing tags to link other objects:
    <ul>
        <li>{object}</li>
            Extended format: {{object:<i>Object name or object ID</i>:<i>Link text</i>}}
            <br>
                <i>Object name or object ID</i> is optional if <i>Link text</i> the same as object name, but if object name will be changed, the link will not working. So we recommend to link by object ID.
            <br>
            Example: {{object:United States:USA}}, {{object:United States}}, {{object:246:United States of America}}
    </ul>
    <li>Attributes</li>
    Specify all the known object <a href="#object-properties">attributes</a>, if you know the values of the attributes, fill them and select unit of measure, if needed.
</ul>

Categories with many objects needs to be named in plural, for example: Planes, Vegetables, Fruits, Cars, etc.

<h3 id="comparisons">Objects comparison</h3>

<a href="#object">Objects</a> can be compared with each other. Comparisons helps us better understand the difference between objects.

<h4>Limitations</h4>
<ul class="not-bold">
    <li>Maximum up to 20 objects in one comparison</li>
    <li>Maximum sorting up to 10 attributes</li>
    <li>Compared objects should have more than half common <a href="#object-properties"">Attributes</a></li>
</ul>
<b>Comparison name</b> is optional, if not specified will be generated from the objects used in the comparison.

<h4 id="comparisons-sortings">Objects sorting</h4>
Objects can be sorted by specified attributes, in a certain <i>sequence</i> and <i>direction</i>.
<br><br>
<i>Sequence</i> specified sorting priority. Objects will be sorted by specified attributes, in a certain sequence from smaller to larger. So in the beginning objects will be sorted by attribute 1 in a sequence, then by attribute 2 and so on.
<br><br>
<i>Direction</i> can be 
<ul>
    <li>Ascending (↑)</li>
    from smaller to larger
    <li>Descending (↓)</li>
    from larger to smaller
</ul>
<h4 id="attributes-comparisons">Comparing some data types</h4>
While it's clear with how we compare some data types like numeric or textual, other data types are not so simple in understanding how we compare them.
<ul class='not-bold'>
    <li><b>Range.</b> Two chunks of the range joins to one number and final number compares. For example range 20-30, will looks like 2030 when compairing</li>
    <li><b>Boolean</b> false is lower that true</li>
    <li><b>Set of values</b> all the values sorted ascending and then joins in one string before comparing, for example: "one, two, three", transforms to "onethreetwo"</li>
    <li><b>Objects</b> compared by object names</li>
    <li><b>Set of objects</b> compares the same as <i>Set of values</i>, just using object names in set</li>
</ul>