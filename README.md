# Factopedia localization

This repository was created for https://factopedia.org website localization.

### Information

Translate to another language from english. You can also make corrections to english text. Each line has format 

```
'English text' => 'Text in other language'
```

If you want to translate to another language, please open the file in the appropriate directory named with 2 letters language code, for example __en__ - for english, __ru__ - for russian (you can find a 2 letters language codes by this link: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes. If you can not find appropriate language directory, please create it, and name the file in it the same way like in other languages. Please leave the text inside braces {} as is, except the strings in braces that contain 'plural' construstion (see examples below).

### Examples

English to Russian translation

```
'Name' => 'Название',
'{Parent Object ID} `{0, number}` is invalid' => '{Parent Object ID} `{0, number}` неверный',
'{diffCount, plural, =0{no fields were} =1{one field was} one{# field was} few{# fields were} many{# fields were} other{# fields were}} changed' => '{diffCount, plural, =0{Ни одного поля не} =1{одно поле}  one{# поле} few{# поля} many{# полей} other{# полей}} изменилось',
```
