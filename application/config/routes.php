<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register'] = 'Register';
$route['dashboard'] = 'Dashboard';

$route['login-faculty'] = 'Login/login_faculty';
$route['register-faculty'] = 'Register/register_faculty';

$route['easy'] = 'Easy';
$route['activities'] = 'Activities';
$route['scoreboard'] = 'Scoreboard';
$route['instruction'] = 'Activities/instruction';
$route['level-two'] = 'Easy/level_two';
$route['level-three'] = 'Easy/level_three';
$route['level-four'] = 'Easy/level_four';
$route['profile'] = 'Profile';
$route['settings'] = 'Settings';
$route['category'] = 'Category';
$route['image-category'] = 'Imagecategory';
$route['image-level-1'] = 'Imagecategory/image_level1';
$route['image-level-2'] = 'Imagecategory/image_level2';
$route['image-level-3'] = 'Imagecategory/image_level3';
$route['image-level-4'] = 'Imagecategory/image_level4';

$route['true-false-category']= 'Trueorfalse';
$route['true-false-level-1'] = 'Trueorfalse/level1';
$route['true-false-level-2'] = 'Trueorfalse/level2';
$route['true-false-level-3'] = 'Trueorfalse/level3';
$route['true-false-level-4'] = 'Trueorfalse/level4';

$route['update-quiz'] = 'Teacherquiz';
$route['update-quiz-1'] = 'Teacherquiz/update_quiz_1';

$route['word-search-category'] = 'Wordsearch';
$route['word-search-level-1'] = 'Wordsearch/word_search_level_1';
