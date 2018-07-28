# Web Admin: Change Database Values with Permissions Using [Essentialmode](https://forum.fivem.net/t/release-essentialmode-base/3665).
**Zua's Web Panel / Web Admin** is a resource that allows users and admins to __easily__ changes specific persons' database values.

![alt-text](https://github.com/ThatZiv/webpanel/blob/master/img/ss1.PNG?raw=true)

## __Installation__
Watch the Youtube Video for Step-by-Step Setup https://www.youtube.com/watch?v=q--ATB9La2Y
1. Download [Here](https://github.com/ThatZiv/webpanel).
2. Deploy the files in your webserver *or put them in your `htdocs` folder if you are using apache*
3. Add a new column in your database called `'password' (varchar 50, default: 'password')` 
![alt-text](https://github.com/ThatZiv/webpanel/blob/master/img/column.PNG?raw=true)
I didn't make an SQL script for it because I didn't want to learn how to, (use https://www.heidisql.com)
## __Configuration__
`inc/config.php`
```php
<?php
/* Change the Database Values to your Database */
////////// CONFIG ////////////
$title = "Webpanel";
//DB CONFIG//
$dbServername= "localhost";
$dbUsername = "root";
$dbPassowrd = "";
$dbName = "essentialmode";
////////////
$ServerLogo = "img/logo.png";
// This is the permission level in the db where admins have to have a greater value to access admin.
$perm_levelForAdmin = 3;
```

## __Features__
- Anyone that has a permission level less than 3 can **only** see their own stats (user).
- Anyone that has a permission level greater than 3 can edit db values easily (admin).
- Toggleable `Users` Table (admin).
- Materialized Design (modern).
## __Support__
If you need any help/support, join my [discord](https://discordapp.com/invite/yWddFpQ) and ask in **#support**

## __Screenshots__
![alt-text](https://raw.githubusercontent.com/ThatZiv/webpanel/master/img/ss1.PNG)
![alt-text](https://raw.githubusercontent.com/ThatZiv/webpanel/master/img/ss2.PNG)
!![alt-text](https://raw.githubusercontent.com/ThatZiv/webpanel/master/img/ss3.PNG)
![alt-text](https://raw.githubusercontent.com/ThatZiv/webpanel/master/img/column.PNG)

-------
