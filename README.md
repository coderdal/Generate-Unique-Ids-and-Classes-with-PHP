
## Generate Unique Ids and Classes with PHP

### Function Usage
```php
    unique($length=12); // Gives an unique string
```
You can optionally use the parameter. By default, a 12 letter long unique key will be returned.

Function:
```php
    $pureid = substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"),0,$length); // Generate a random key
    return wordwrap($pureid, 4, '-', true); // split the key
```
Example:
```php
    $uniqueClass = unique(); // Get a random class Name (Ex: blqw-nkpc-thos)

    $uniqueId = unique(); // Get a random id Name (Ex: qsoe-jmka-cdpg)
```
### Usage

Example Unique Class Usage:
```css
    // In CSS

    .<?php echo $uniqueClass; ?>{
        width: 90%;
        background-color: #f1f1f1;
        padding: 10px;
        margin: 10px;
        border: 1px solid #ccc;
        text-align: center;
        line-height: 25px;
    }
```
   
```html
    // In HTML
    <div class="<?php echo $uniqueClass; ?>">Example Content</div>
```
## 

Example Unique Id Usage:
```css
    // In CSS

    #<?php echo $uniqueId; ?>{
        width: 90%;
        background-color: #f1f1f1;
        padding: 10px;
        margin: 10px;
        border: 1px solid #ccc;
        text-align: center;
        line-height: 25px;
    }
```
```html
    // In HTML
    <div id="<?php echo $uniqueId; ?>">Example Content</div>
```
