# Static Page Module
__Version:__ 1.0  
__Author:__ Loky  
__Author website:__ [Stellaris.Agency](http://stellaris.agency)  
__Module website:__ <https://github.com/StellarisAgency/humhub-modules-staticpage/>

## Description:
This module allows developers to easily create custom pages for the global view without using the database.

Links to pages are injected into the Top Menu _(second top bar on the original theme)_.

## Install: 
Clone as 'staticpage' in your 'humhub/protected/modules/' folder.

### Help:
As a __Dev.Module__, there is no online editor.
You just have to create a new php page in the 'views/page' folder and add a link in the 'Module.php' !!

If you want to use special css and js code, put your files in the 'assets' folder and update the 'Assets.php' !
In that case, if you change your 'assets files', you will have to clear the cache to see any change. _(go to 'Admin/Settings/Advanced' to flush the cache)_.

To write your page it will be more easy to put your special code 'inline' directly into your php page and when it's ready, creating your files into the 'assets' folder.
