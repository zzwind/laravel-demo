### Table of Contents

- [Laravel PHP Framework](#laravel-php-framework)
- [Composer](#composer)
- [路由](#路由)
- [中间件](#中间件)
- [Contribution Guidelines](#contribution-guidelines)
- [Maintainers](#maintainers)
- [License](#license)



## Laravel PHP Framework
Laravel 是一套富有表达性且具有简洁语法的网页应用程序框架。我们认为开发过程应该是愉悦且有创造性的体验。Laravel 努力减少开发过程中的不便，因此我们提供了验证(authentication)、路由(routing)、sessions、缓存(caching)等开发过程中经常用到的工具或功能。

Laravel 目标是给开发者创造一个愉快的开发过程，并且不牺牲应用程序的功能性。快乐的开发者才能创造最棒的代码。为了这个目的，我们竭取了各框架的优点集中到 Laravel 中，这些框架包括并不局限于 Ruby on Rails、ASP.NET MVC 和 Sinatra 等。

Laravel 是易于理解且强大的，它提供了强大的工具来开发大型、稳健的应用程序。杰出的 IoC、数据库迁移工具和紧密集成的单元测试，这些工具赋予您构建任何大小规模的应用程序的能力。



![2013年PHP框架排行](http://pic1.zhimg.com/83ab0ffd8f7c28cb32e3747b1b228dec_b.jpg)
![2015年PHP框架排行](http://pic1.zhimg.com/4fa4f2003a2d089f0ad61db02033daec_r.jpg)

## Composer
PHP 用来管理依赖（dependency）关系的工具
[Composer中文站](http://www.phpcomposer.com/)

使用Composer安装Laravel

`composer create-project laravel/laravel --prefer-dist`

## 路由

- 基础路由
- 路由参数
- 正则路由
- 命名路由
- 路由组


## 中间件

定义中间件
`php artisan make:middleware OldMiddleware`


## 控制器

## 辅助函数
- 数组
- 路径
- 字符串

## 验证

## null false
```php
$a == null  <== return true
$a === null < == return false
is_null($a) <== return false

var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)
```
