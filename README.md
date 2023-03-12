# DevWork Instruction

## Registered User 
**Admin Email & Password**
| Email & Password | Value |
| :-----------------: | :-----------------: |
| **Email    :** | rai010303@gmail.com |
| **Password :** | 123123 |

**User Email & Password**
| No | Email & Password | Value |
| :-----------------: | :-----------------: | :-------------------: |
| 1 | **Email    :** | ridwanh@gmail.com |
|   | **Password :** | 123123 |
| 2 | **Email    :** | ari123@gmail.com |
|   | **Password :** | 123123 |
| 3 | **Email    :** | adam123@gmail.com |
|   | **Password :** | 123123 |
| 4 | **Email    :** | asd123@gmail.com |
|   | **Password :** | 123123 |

**Notes**
- REFRESH IF THE STYLE IS ERROR (CTRL + SHIFT + R)
- Bootstrap v5.3
- PHP V8.1.6
- xampp v3.3.0

If You Using PHP v8.2.0 with XAMPP v3.3.0
and get this kind of error 
============================
A PHP Error was encountered
Severity: 8192
Message: Creation of dynamic property CI_URI::$config is deprecated
Filename: core/URI.php
Line Number: 101
Backtrace:
File: C:\xampp\htdocs\app-spp\index.php
Line: 315
Function: require_once

***SOLUTION***
1. Open File : C:\xampp\htdocs\app-spp\system\core\URI.php <br />
add : #[\AllowDynamicProperties]
before : class CI_URI {

2. Open File : C:\xampp\htdocs\app-spp\system\core\Router.php
add : #[\AllowDynamicProperties]
befores : class CI_Router {

3. Open File : C:\xampp\htdocs\app-spp\system\core\Controller.php
add : #[\AllowDynamicProperties]
before : class CI_Controller {

4. Open File : C:\xampp\htdocs\app-spp\system\database\DB_driver.php
add : #[\AllowDynamicProperties]
before : abstract class CI_DB_driver {

5. Open File : C:\xampp\htdocs\app-spp\system\core\Loader.php
add : #[\AllowDynamicProperties]
sbefore : class CI_Loader {



