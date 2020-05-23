<?php

/**
* Translation map for ru-RU
*/

return [
    //Page Title
    '[H]ome' => '[Г]лавная',
    'Home' => 'Главная',

    //Lables
    

    //Other texts
    //
    
    // main layout
    
    '[O]bjects' => '[О]бъекты',
    'Objects' => 'Объекты',
    'Object' => 'Объект',
    '[C]omparisons' => '[С]равнения',
    'Comparisons' => 'Сравнения',
    'Dashboard' => 'Панель управления',
    'Logout' => 'Выйти',
    '[A]dd' => '[Д]обавить',
    'Add' => 'Добавить',
    '[C]reate' => '[С]оздать',
    'What are you interested ?' => 'Что вас интересует ?',
    '[S]earch' => '[П]оиск',
    'Help' => 'Помощь',
    'Contact us' => 'Обратная связь',
    'Disclaimer' => 'Отказ от ответственности',
    'Developers' => 'Разработчики',
    'Donate' => 'Пожертвовать',
    'Statistics' => 'Статистика',
    'Guest' => 'Гость',
    'The requested page does not exist.' => 'Запрошенная страница не существует.',
    'contact us' => 'свяжитесь с нами',

    // site/index

    'Recently added' => 'Недавно добавили',
    'Recently searched' => 'Недавно искали',

    // site/developers
    'your profile' => 'своём профиле',

    //Object
    
    'Name' => 'Название',
    'Description' => 'Описание',
    'Language' => 'Язык',
    'Parent object' => 'Родительский объект',
    '{Parent Object ID} `{0, number}` is invalid' => '{Parent Object ID} `{0, number}` неверный',
    'You have just create a new object which is not belongs to any parent object. If it\'s not root object, please {0}' => 'Вы только что создали новый объект который не принадлежит ни к одному родительскому объекту, если это не корневой объект пожалуйста {0}',
    'select parent object' => 'выберите родительский объект',
    'Object «{value}» {n, plural,=0{without parent objects} =1{with this parent object} other{with this parent objects}} already exists' => 'Объект «{value}» {n, plural,=0{без родительских объектов} =1{с данным родительским объектом} other{с данными родительскими объектами}} уже существует',
    'There {versionsAmount, plural, =0{were no edits yet} =1{was one edit} other{were # edits}}, {versionsWaitingApproval, plural, =0{no edits} =1{one edit} other{# edits}} waiting approval. Last edited by {user}, {date} ({changes})'=>'{versionsAmount, plural, =0{Небыло редакций} =1{Была одна редакция} one{Была # редакция} few{Было # редакции} many{Было # редакций} other{Было # редакций}}, {versionsWaitingApproval, plural, =0{нет редакций} =1{одна редакция} one{одна редакция} few{# редакции} many{# редакций} other{# редакций}} на утверждении. Последний раз редактировал {user}, {date} ({changes})',
    '{diffCount, plural, =0{no fields were} =1{one field was} one{# field was} few{# fields were} many{# fields were} other{# fields were}} changed' => '{diffCount, plural, =0{Ни одного поля не} =1{одно поле}  one{# поле} few{# поля} many{# полей} other{# полей}} изменилось',
    'This object is waiting for approval'=>'Этот объект ещё не утверждён',
    'This object was declined' => 'Этот объект был откланён',
    'This object was deleted' => 'Этот объект был удалён',
    'Create' => 'Создайте',
    '{Create} first category' => '{Create} первую категорию',
    'Show empty attributes' => 'Показать пустые свойства',
    'Hide empty attributes' => 'Скрыть пустые свойства',


    // object/create
    
    'Adding object' => 'Добавление объекта',
    'Aliases' => 'Другие названия',
    '[E]dit' => '[И]зменить',
    'Edit' => 'Изменить',
    'Images' => 'Картинки',
    'Object attributes' => 'Свойства объекта',
    'Input values for suggested attributes or create new' => 'Введите значения для предложенных атрибутов или создайте новые',
    'Category' => 'Категория',
    'Value' => 'Значение',
    'Unit' => 'Единица измерения',
    'Input value' => 'Введите значение',
    'Adding new attribute' => 'Добавление нового артибута',
    'Value type' => 'Тип значения',
    'Numeric' => 'Числовой',
    'Range (from - to)' => 'Диапазон (от-до)',
    'Boolean (yes/no)' => 'Логический (да/нет)',
    'Textual' => 'Текстовый',
    'Link to another object' => 'Ссылка на другой объект',
    'Array of values' => 'Множество значений',
    'Array of links to another objects' => 'Множество ссылок на другие объекты',
    'Dynamic value' => 'Динамическое значение',
    'Add category' => 'Добавить категорию',
    'Add attribute' => 'Добавить атрибут',
    'Add object' => 'Добавить объект',
    'Link to the source' => 'Ссылка на источник',
    'inherited properties order can be changed only in parent objects' => 'порядок унаследованных свойств может быть изменён только в родительских объектах',
    '[R]eorder' => '[У]порядочить',
    'Submit' => 'Изменить',
    'Add more' => 'Добавить ещё',
    'Delete' => 'Удалить',
    'Yes' => 'Да',
    'No' => 'Нет',
    'Undefined' => 'Незнаю',
    'Fields with asterisk (*) are required' => 'Поля со звёздочкой (*) обязательны',
    'This object already has this attribute' => 'Объект уже имеет данное свойство',
    'This object already belongs to this parent' => 'Объект уже принадлежит к данному родителю',
    'Not required' => 'Не обязательно',
    'All the options are mandatory' => 'Все опции обязательны',
    'To many options' => 'Очень много опций',
    'Mimimum update period can be 12 hours' => 'Минимальный период обновления может быть 12 часов',
    'Options url and regexp can not be blank' => 'Опции url и regexp не могут быть пустными',
    'Options url is not valid' => 'Url в опция неверный',
    'Error fetching the url' => 'Ошибка запроса url',
    'Options "format" field is not valid' => 'Поле "format" в опциях неверное',
    'Regexp error' => 'Ошибка regexp',
    'Empty data parsed' => 'Парсер вернул пустое значение',
    'Maximum up to {0} images allowed' => 'Максимальное количество картинок не должно превышать {0}',
    'Maximum up to {0} parent allowed' => 'Максимальное количество родительских объектов не должно превышать {0}',
    'Maximum up to {0} aliases allowed' => 'Максимальное количество других названий не должно превышать {0}',
    'Image {name} already exists' => 'Картинка {name} уже присутствует',
    'Only .jpg, .jpeg or .png images are allowed to upload' => 'Только .jpg, .jpeg или .png картинки разрешено загружать',
    'No images chosen' => 'Картинки не выбраны',
    'Property `{name}`({id}) has errors ( {errors} )' => 'Свойство `{name}`({id}) имеет ошибки ( {errors} )',
    'Parent object `{name}`({id}) has errors ( {errors} )' => 'Родительский объект `{name}`({id}) имеет ошибки ( {errors} )',
    'One or more attributes has errors' => 'Один или более атрибутов имеют ошибки',
    'One or more of parent objects has errors' => 'Один или несколько родительских объектов имеют ошибки',

    //special symbols
    'Special symbols' => 'Специальные символы',
    'Superscript two' => 'Надстрочное два',
    'Superscript three' => 'Надстрочное три',
    'Degree' => 'Градус',
    'Per mille' => 'Промилле',
    'Per ten thousand' => 'Десятитысячная доля',
    'Greek small letter mu' => 'Греческая малая буква mu',
    'Not defined' => 'Не определенно',
    'New blank object "{object}" was created, don\'t forget to {edit} it' => 'Новый пустой объект "{object}" был создан, не забудьте его {edit}',

    // object/update
    'Updating object' => 'Редактирование объекта',
    'Updating children' => 'Редактирование детей',
    'Delete all' => 'Удалить все',
    'Are you sure want to delete all the children?' => 'Вы действительно хотите удалить всех детей?',
    'This object already have this children' => 'Этот объект уже имеет этого ребёнка',
    'Children objects' => 'Объекты детей',
    'Adding new children' => 'Добавление нового ребёнка',
    'Select all' => 'Выбрать все',
    'With selected' => 'С выбранными',
    'Delete objects forever' => 'Удалить объекты навсегда',
    'Move to new parent' => 'Перенести к новому родителю',
    'New parent' => 'Новый родитель',
    'Root' => 'Корень',
    'Main image' => 'Главная картинка',
    'Delete image' => 'Удалить картинку',
    'Error deleting file, please try again later' => 'Ошибка удаления файла, попробуйте позже',
    'Nothing was changed' => 'Ничего не изменилось',
    'Some new versions of this object waiting apploval: {versions} if some of this versions will be accepted you editings will be declined automaticaly. If you find that some of this versions is better than the current one, please edit it instead of current version.' => 'Некоторые новые версии этого объекта в стадии утверждения: {versions} если какая то из этих версий будет принята, ваша правка будет отклонена автоматически. Если вы находите какую то из этих версий более привлекательной чем текущую, пожалуйста вносите свои изменения в ту версию, вместо текущей.',
    'You are editing not approved version, if this version will be declined you version will be also declined automaticaly' => 'Вы редактируете неутверждённую версию, если эта версия будет откланена, то ваша версия тоже будет откланена автоматически',
    'You are editing as a guest user. You can {register} or {login}' => 'Вы редактируете как гость. Вы можете {register} или {login}',
    'login' => 'войти',
    'Are you sure you want to delete this item?' => 'Вы действительно хотите это удалить?',


    // object/view
    
    'Object «{value}» was created due to' => 'Объект «{value}» возник благодаря',
    'Object «{value}» has attributes' => 'Объект «{value}» имеет следующие атрибуты',
    'Attribute' => 'Атрибут',
    'Everyone can something to {0} or {1}' => 'Каждый может что-то {0} или {1}',
    '{add} new object to «{object}» or {move} existing objects here.' => '{add} новый объект в «{object}» или {move} существующие объекты сюда.',
    'move' => 'переместить',
    'Latest comparisons with the object «{value}»' => 'Последние сравнения с объектом «{value}»',
    '[H]istory' => '[И]стория',
    'History' => 'История',
    'Categories' => 'Категории',
    'You can compare up to {max} objects' => 'Вы можете сравнить до {max} объектов',
    'This object has already exists in comparison' => 'Этот объект уже присутствует в сравнении',
    'Delete all' => 'Удалить все',
    'Comparison of «{name1}» and «{name2}»'=>'Сравнение «{name1}» и «{name2}»',
    'Add to comparison'=>'Добавить в сравнение',
    'Most often compared with' => 'Чаще всего сравнивают с',
    '«{name}» in other languages' => '«{name}» на других языках',
    //versions
    
    'Editing history' => 'История изменений',
    'against' => 'против',
    'Compairing versions' => 'Сравнение версий',
    'Total' => 'Всего',
    'changes' => 'изменение',
    'This is approved version' => 'Это утверждённая версия',
    'This is approved and current version' => 'Эта утверждённая и текущая версия',
    'This is declined version' => 'Это откланённая версия',
    'This version is waiting for approval' => 'Эта версия ожидает утверждения',
    'The object was marked for deletion' => 'Объект был помечен на удаление',
    'The comparison was marked for deletion' => 'Сравнение было помечено на удаление',
    'Approved' => 'Утверждена',
    'Declined' => 'Отклонена',
    'Waiting approval' => 'Ожидает утверждения',
    'Version' => 'Версия',
    'Version {version} status was changed to: {status}' => 'Cтатус версии {version} изменился на: {status}',
    'by user' => 'пользователем',
    '{versions, plural, =0{No new versions jet} =1{one new version} other{# new versions}}' => '{versions, plural, =0{Пока нет новых версий} =1{одна новая версия} one{# новая версия} few{# новые версии} other{# новых версий}}',
    'status of {versions, plural, =0{0} =1{one version was} other{# versions were}} changed' => '{versions, plural, =0{Небыл изменён} =1{В одной версии} one{в # версии} few{в # версиях} other{в # версиях}} поменялся статус',
    'automaticaly' => 'автоматически',
    'Version total score' => 'Кол-во очков у данной версии',
    '[A]pprove' => '[П]ринять',
    '[D]ecline' => '[О]тклонить',
    '[C]omplain' => '[П]ожаловаться',
    '[R]ollback' => '[О]ткатить',
    'Rollback to this version' => 'Откатить к этой версии',
    'Complaint accepted' => 'Жалоба принята',

    //comments
    'Discussion' => 'Обсуждение',
    '{comments, plural, =0{No comments yet} =1{one comment} other{# comments}}' => '{comments, plural, =0{Пока нет коментариев} =1{Один коментарий} one{# коментарий} =2{# коментария} few{# коментария} other{# коментариев}}',
    'You can use Markdown syntax to style your comment' => 'Используйте синтаксис Markdown что бы стилизировать свой коментарий',
    'Add comment' => 'Добавить коментарий',
    '[S]ubscribe' => '[П]одписаться',
    'Subscribe to this thread' => 'Подписаться на эту ветку',
    'You have subscribed' => 'Вы подписаны',
    '[U]nsubscribe' => '[О]тписаться',
    'Unsubscribe' => 'Отписаться',
    'Comment' => 'Коментарий',
    'Load more' => 'Загрузить больше',
    '{register} or {login} to subscribe to this thread' => '{register} или {login} что бы подписаться на эту ветку',
    'Register' => 'Зарегистрируйтесь',
    'Sign in' => 'Войдите',
    'You have been unsubscribed' => 'Вы отписались',
    'Last' => '{gender, select, male{Последний} female{Последняя} other{Последниe}}',
    '[R]estore' => '[В]осстановить',
    '[D]elete' => '[У]далить', //comment

    //history
    '"{name}" history' => '"{name}" история',
    'History of objects you have subscribed' => 'История объектов на которые вы подписаны',
    'History of edits by user {user}' => 'История правок пользователя {user}',
    'History of comparisons you have subscribed' => 'История сравнений на которые вы подписаны',
    'Automatic' => 'Автоматически',
    'commented {name}{parentName} ({version}): {comment}' => 'прокоментировал  {name}{parentName} ({version}): {comment}',
    'New comparison was added {name}, version {version}' => 'Добавлено новое сравнение {name}, версия {version}',
    'These results are not complete. For a more complete result, select an object that has less than {number} children objects.' => 'Этот результат не полный. Для более полного результата выберите объект который имеет менее {number} вложенных объектов.',

    //ChildWidget.php
    'Due to «{value}» object, were created' => 'Благодаря объекту «{value}» возникли',
    'Added' => 'Добавлен',
    'Object was created by user {user}, on {date}, no edits were made yet.' => 'Объект был создан пользователем {user}, {date}, пока ещё небыло правок.',


    //ObjectsParents
    
    'The object already belongs to this parent' => 'Объект уже принадлежит к данному родителю',
    'Object ID' => 'Номер oбъекта',
    'Parent Object ID' => 'Номер родительского объекта',

    //ObjectsPropertiesValues
    
    'Invalid type' => 'Неверное значение',
    'Value must be integer' => 'Значение должно быть целым числом',
    'Minimum range value must be lower than maximum' => 'Минимальное значение диапазона должно быть меньше максимального',
    'Minimum range value' => 'Минимальное значение диапазона',
    'Maximum range value' => 'Максимальное значение диапазона',

    //comparisons/create
    'New comparison' => 'Новое сравнение',
    '[C]reate' => '[C]оздать',
    '[S]ave' => '[C]охранить',
    'Comparison' => 'Сравнение',
    'Compare' => 'Сравнить',
    '[C]ompare' => '[С]равнить',
    'Compared objects' => 'Cравниваемые объекты',
    'This object is already in this comparison' => 'Этот объект уже есть в этом сравнении',
    'Sorting order' => 'Порядок сортировки',
    'Specify how to sort objects, leave fields blank if you do not want to sort by some attributes' => 'Укажите как сортировать объекты, оставьте поля пустыми если не хотите сортировать по какому то атрибуту',
    'Order' => 'Порядок',
    'Direction' => 'Направление',
    'Ascending' => 'По возрастанию',
    'Descending' => 'По убыванию',
    'One or more objects has errors' => 'Один или несколько объектов неверны',
    'You can compare up to {0} objects at once' => 'Вы можете сравнить до {0} объектов',
    'Minimum of 2 objects are required' => 'Необходимо минимально 2 объекта',
    'No one of selected objects have any attributes values' => 'Ни один из объектов не имеет указаных аттрибутов',
    'Object `{name}` is probabaly very different from others, not enough mutual attributes' => 'Объект `{name}` вероятно сильно отличается от других, недостаточно взаимных атрибутов',
    'Editing comparison' => 'Редактирование сравнения',
    //comparisons/index
    'Latest added' => 'Последние добавленные',
    'Sorted by' => 'Порядок сортировки',
    'and {0} more' => 'и ещё {0}',
    'More' =>'Ещё',
    'and' => 'и',
    'Comparison of' => 'Сравнение',
    'Latest comparisons' => 'Последние сравнения',

    //comparisons/view
    'This comparison was declined' => 'Это сравнение было отклонено',
    'This comparison is waiting for approval' => 'Это сравнение ожидает подтверждения',
    'This comparison was deleted' => 'Это сравнение было удалено',

    //contributors
    'Contributors' => 'Авторы',
    'Settings' => 'Настройки',
    'Profile' => 'Профиль',
    'Update' => 'Редактирование',

    //dashboard
    
    '{name}{parentName}, version {version} was {status}' => '{name}{parentName}, версия {version} была {status}',
    '{name}{parentName} was {status}, new version {version}' => '{name}{parentName} {status}, новая версия {version}',
    '{name}{parentName} was maked for {status}, new version {version}' => '{name}{parentName} был помечен на {status}, новая версия {version}',
    '{name} was added to {parentName}, version {version}' => '{name} добавлен в {parentName}, версия {version}',
    'New category was added {name}, version {version}' => 'Добавлена новая категория {name}, версия {version}',
    'New comparison was added {name}, version {version}' => 'Добавлено новое сравнение {name}, версия {version}',
    '{name}{parentName} version {version} for {deletion} was {status}' => '{name}{parentName} версия {version} на {deletion} была {status}',
    'deletion' => 'удаление',
    'Edited' => 'Отредактирован',
    'Deleted' => 'Удалён',
    
    //index
    'If you want to become a contributor, please {register} or {login} if you have already registered. You can also edit {name} as an anonymous user.' => 'Если вы хотите стать автором, пожалуйста {register} или {login} если вы уже зарегистрировались. Вы так же можете редактировать и как анонимный пользователь.',
    'Contributors {begin}-{end} of {totalCount}' => 'Авторы {begin}-{end} из {totalCount}',

    //registation
    'New user registration' => 'Регистрация нового пользователя',
    'Registration' => 'Регистрация',
    'Full name' => 'Имя',
    'Country' => 'Страна',
    'Username' => 'Логин',
    'Profile image' => 'Картинка профиля',
    'User' => 'Пользователь',
    'Password' => 'Пароль',
    'Verify password' => 'Подтвердите пароль',
    'API token' => 'Ключь к API',
    'Subscription' => 'Подписка',
    'Status' => 'Статус',
    'Inactive' => 'Неактивный',
    'Active' => 'Активный',
    'Verification mail was sent' => 'Ожидает подтверждения',
    'Verification mail was resent' => 'Подтверждающее письмо было отправлено заново',
    'Verification mail sending problem' => 'Ошибка отправки подтверждающего письма',
    'Blocked' => 'Заблокирован',
    'Blocking user' => 'Блокировка пользователя',
    'Block user' => 'Заблокировать пользователя',
    'Unblock user' => 'Разблокировать пользователя',
    'Block until' => 'Заблокировать до',
    'You are not allowed to make this action until {date}' => 'Вам запрещено выполнять это действие до {date}',
    'Please try again a bit later.' => 'Пожалуйста попробуйте немного позже.',
    'You can {register} or {login} to increase limits.' => 'Вы можете {register} или {login} что бы увеличить лимиты',
    'Delete all user comments' => 'Удалить все коментарии пользователя',
    'Decline all edits by this user' => 'Отклонить все правки пользователя',
    'User was blocked until {date}' => 'Пользователь заблокирован до {date}',
    'Proceed' => 'Продолжить',
    'Subscribe to newsletter' => 'Подписаться на новости',
    'Email verification' => 'Подтверждение email',
    'We have sent you an email. Please check your inbox <b>{email}</b> and click the link to verify your account. In some cases an email can be found in Spam folder.' => 'Мы отправили вам письмо. Пожалуйста проверьте ваш <b>{email}</b> и нажмите на ссылку для подтверждения. В некоторых случая письмо может попасть в папку "Спам".',
    'Otherwise we can {resend_link}' => 'В противном случае мы можем {resend_link}',
    'resend email' => 'переслать email',
    'Confirm your registration' => 'Подтвердите вашу регистрацию',
    'Sincerely yours' => 'С искренним уважением',
    'Email was confirmed' => 'Email подтверждён',
    'Role' => 'Роль',
    'Author' => 'Aвтор',
    'Admin' => 'Администратор',
    'Registered' => 'Зарегистрирован',
    'Couldn\'t upload file to the server, please try again later' => 'Невозможно загрузить файл на сервер, попробуйте позже',
    'Languages' => 'Языки',
    'Level' => 'Уровень',
    'Select language' => 'Выберите язык',
    'Select level' => 'Укажите уровень',
    'Beginner' => 'Начинающий',
    'Elementary' => 'Элементарный',
    'Intermediate' => 'Средний',
    'Upper Intermediate' => 'Выше среднего',
    'Advanced' => 'Продвинутый',
    'Proficient' => 'Профессиональный',
    'Language select error' => 'Ошибка выбора языка',
    'Maximum file size is {size}Mb' => 'Максимальный размер файла {size}Мб',
    'Only lower case latin letters and numbers, and symbols "_."' => 'Только латинские буквы и цифры, а также символы "_."',

    //update user
    'Editing user profile' => 'Редактирование пользовательского профиля',
    'Password change' => 'Изменение пароля',
    'Fill only in case of password change' => 'Заполните только в случае изменения пароля',
    'Old password' => 'Старый пароль',
    'New password' => 'Новый пароль',
    'Verify new password' => 'Подтвердите новый пароль',
    'User subscriptions' => 'Подписки пользователя',

    //login
    'Login' => 'Вход',
    'Username or email' => 'Логин или email',
    'Remember me' => 'Запомнить',
    'is incorect' => 'неправильный', // ошибка {Username or email} is incorect 
    'can not be empty' => 'неможет быть пустно', //ошибка {Password} can not be empty 
    'Forget password ?' => 'Забыли пароль ?',
    'You was succesfully logged out' => 'Вы успешно вышли',

    //account suspended
    'Account was suspended' => 'Учётная запись заблокирована',
    'Your account was suspended due to some reasons. Please contact us if you think that this was made in error.' => 'По какой-то причине ваша учётная запись была заблокирована. Если вы думаете что это случилось по ошибке, пожалуйста свяжитесь с нами.',

    //password reset
    'Password reset' => 'Сброс пароля',
    'Please check your email for the link to the password reset form.' => 'Пожалуйста проверьте ваш Email. Мы вам отправили ссылку на форму сброса пароля.',
    'The link is not valid' => 'Ссылка неверная',
    'New password was sent on your email' => 'Новый пароль был отправлен на ваш email',
    'Something goes wrong, try again later' => 'Что то пошло не так, попробуйте позже',

    //users/dashboard
    'Subscribe to any objects or comparisons to get updates here' => 'Подпишитесь на какой небудь объект или сравнение что бы видеть здесь по ним обновления',

    //help
    //order yes - please register, no - you can register
    'register' => 'зарегистрироваться',
    'donation' => 'пожертвование',

    //contact us
    'Please fill in the following form to contact us.' => 'Пожалуйста заполните эту форму что бы связаться с нами.',
    'Thank you for contacting us. We will respond to you as soon as possible.' => 'Спасибо за сообщение. Мы ответим вам как только это будет возможным.',
    'Full name' => 'Полное имя',
    'Subject' => 'Тема',
    'Message' => 'Сообщение',
    'Verification code' => 'Проверочный код',
    'Send' => 'Отправить',

    //users/subscriptions
    '{unsubscribe}, if you do not want to receive this message anymore.' => '{unsubscribe}, если вы больше не хотите получать эти письма.',
    'The pages you have subscribed were updated' => 'Страницы на которые вы подписаны были обновлены',
    'Showing the last {0} of {1} items' => 'Показаны последние {0} из {1} записи',
    'No subscriptions' => 'Нету подписок',

    //emails
    'Thanks for contributing to {site}' => 'Спасибо за то что вносите свой вклад в {site}',
];

?>