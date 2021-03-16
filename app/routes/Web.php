<?php
$router= new AltoRouter();

$router->map('GET','/superFood/admin/register','App\Controllers\AdminRegistrationController@create','register');
$router->map('POST','/superFood/admin/registerCheck','App\Controllers\AdminRegistrationController@store','registerCheck');

$router->map('GET','/superFood/admin/login','App\Controllers\AdminLoginController@create','login');
$router->map('POST','/superFood/admin/loginCheck','App\Controllers\AdminLoginController@store','loginCheck');
$router->map('GET','/superFood/admin/logout','App\Controllers\AdminLoginController@logout','logout');

$router->map('GET','/superFood/admin/dashboard','App\Controllers\AdminDashboardController@index','dashboard');

$router->map('GET','/superFood/admin/news','App\Controllers\AdminNewsController@index','indexNews');
$router->map('GET','/superFood/admin/news/create','App\Controllers\AdminNewsController@create','createNews');
$router->map('POST','/superFood/admin/news/store','App\Controllers\AdminNewsController@store','storeNews');
$router->map('GET','/superFood/admin/news/edit/[i:id]','App\Controllers\AdminNewsController@edit','editNews');
$router->map('POST','/superFood/admin/news/update/[i:id]','App\Controllers\AdminNewsController@update','updateNews');
$router->map('GET','/superFood/admin/news/delete/[i:id]','App\Controllers\AdminNewsController@delete','deleteNews');

$router->map('GET','/superFood/admin/newsCategories','App\Controllers\AdminNewsCategoriesController@index','indexNewsCategories');
$router->map('GET','/superFood/admin/newsCategories/create','App\Controllers\AdminNewsCategoriesController@create','createNewsCategories');
$router->map('POST','/superFood/admin/newsCategories/store','App\Controllers\AdminNewsCategoriesController@store','storeNewsCategories');
$router->map('GET','/superFood/admin/newsCategories/edit/[i:id]','App\Controllers\AdminNewsCategoriesController@edit','editNewsCategories');
$router->map('POST','/superFood/admin/newsCategories/update/[i:id]','App\Controllers\AdminNewsCategoriesController@update','updateNewsCategories');
$router->map('GET','/superFood/admin/newsCategories/delete/[i:id]','App\Controllers\AdminNewsCategoriesController@delete','deleteNewsCategories');

$router->map('GET','/superFood/admin/newsTags','App\Controllers\AdminNewsTagsController@index','indexNewsTags');
$router->map('GET','/superFood/admin/newsTags/create','App\Controllers\AdminNewsTagsController@create','createNewsTags');
$router->map('POST','/superFood/admin/newsTags/store','App\Controllers\AdminNewsTagsController@store','storeNewsTags');
$router->map('GET','/superFood/admin/newsTags/edit/[i:id]','App\Controllers\AdminNewsTagsController@edit','editNewsTags');
$router->map('POST','/superFood/admin/newsTags/update/[i:id]','App\Controllers\AdminNewsTagsController@update','updateNewsTags');
$router->map('GET','/superFood/admin/newsTags/delete/[i:id]','App\Controllers\AdminNewsTagsController@delete','deleteNewsTags');

$router->map('GET','/superFood/admin/users','App\Controllers\AdminUserController@index','indexUsers');
$router->map('GET','/superFood/admin/users/create','App\Controllers\AdminUserController@create','createUsers');
$router->map('POST','/superFood/admin/users/store','App\Controllers\AdminUserController@store','storeUsers');
$router->map('GET','/superFood/admin/users/edit/[i:id]','App\Controllers\AdminUserController@edit','editUsers');
$router->map('POST','/superFood/admin/users/update/[i:id]','App\Controllers\AdminUserController@update','updateUsers');
$router->map('GET','/superFood/admin/users/delete/[i:id]','App\Controllers\AdminUserController@delete','deleteUsers');

$router->map('GET','/superFood/admin/roles','App\Controllers\AdminRoleController@index','indexRole');
$router->map('GET','/superFood/admin/roles/create','App\Controllers\AdminRoleController@create','createRole');
$router->map('POST','/superFood/admin/roles/store','App\Controllers\AdminRoleController@store','storeRole');
$router->map('GET','/superFood/admin/roles/edit/[i:id]','App\Controllers\AdminRoleController@edit','editRole');
$router->map('POST','/superFood/admin/roles/update/[i:id]','App\Controllers\AdminRoleController@update','updateRole');
$router->map('GET','/superFood/admin/roles/delete/[i:id]','App\Controllers\AdminRoleController@delete','deleteRole');

$router->map('GET','/superFood/admin/userProfile/edit/[i:id]','App\Controllers\AdminUserProfileController@edit','editUserProfile');
$router->map('POST','/superFood/admin/userProfile/update/[i:id]','App\Controllers\AdminUserProfileController@update','updateUserProfile');
$router->map('GET','/superFood/admin/userProfile/deleteImage/[i:id]','App\Controllers\AdminUserProfileController@delete','deleteUserProfileImage');


$router->map('GET','/superFood/admin/userProfile/passEdit/[i:id]','App\Controllers\AdminPasswordController@edit','editUserPass');
$router->map('POST','/superFood/admin/userProfile/passUpdate/[i:id]','App\Controllers\AdminPasswordController@update','updateUserPass');

$router->map('GET','/superFood/admin/forgotPassword/create','App\Controllers\AdminPasswordController@create','createForgotPass');
$router->map('POST','/superFood/admin/forgotPassword/store','App\Controllers\AdminPasswordController@store','storeForgotPass');

$router->map('GET','/superFood/admin/resetPassword/create','App\Controllers\AdminResetPasswordController@create','createResetPass');
$router->map('POST','/superFood/admin/resetPassword/store','App\Controllers\AdminResetPasswordController@store','storeResetPass');

$router->map('GET','/superFood/admin/activeAccount/update/[i:id]','App\Controllers\AdminAccountController@update','updateActiveAccount');

$router->map('GET','/superFood/admin/product','App\Controllers\AdminProductController@index','indexProduct');
$router->map('GET','/superFood/admin/product/create','App\Controllers\AdminProductController@create','createProduct');
$router->map('POST','/superFood/admin/product/store','App\Controllers\AdminProductController@store','storeProduct');
$router->map('GET','/superFood/admin/product/edit/[i:id]','App\Controllers\AdminProductController@edit','editProduct');
$router->map('POST','/superFood/admin/product/update/[i:id]','App\Controllers\AdminProductController@update','updateProduct');
$router->map('GET','/superFood/admin/product/delete/[i:id]','App\Controllers\AdminProductController@delete','deleteProduct');


$router->map('GET','/superFood/admin/productTags','App\Controllers\AdminProductTagsController@index','indexProductTags');
$router->map('GET','/superFood/admin/productTags/create','App\Controllers\AdminProductTagsController@create','createProductTags');
$router->map('POST','/superFood/admin/productTags/store','App\Controllers\AdminProductTagsController@store','storeProductTags');
$router->map('GET','/superFood/admin/productTags/edit/[i:id]','App\Controllers\AdminProductTagsController@edit','editProductTags');
$router->map('POST','/superFood/admin/productTags/update/[i:id]','App\Controllers\AdminProductTagsController@update','updateProductTags');
$router->map('GET','/superFood/admin/productTags/delete/[i:id]','App\Controllers\AdminProductTagsController@delete','deleteProductTags');

$router->map('GET','/superFood/admin/productCategories','App\Controllers\AdminProductCategoriesController@index','indexProductCategories');
$router->map('GET','/superFood/admin/productCategories/create','App\Controllers\AdminProductCategoriesController@create','createProductCategories');
$router->map('POST','/superFood/admin/productCategories/store','App\Controllers\AdminProductCategoriesController@store','storeProductCategories');
$router->map('GET','/superFood/admin/productCategories/edit/[i:id]','App\Controllers\AdminProductCategoriesController@edit','editProductCategories');
$router->map('POST','/superFood/admin/productCategories/update/[i:id]','App\Controllers\AdminProductCategoriesController@update','updateProductCategories');
$router->map('GET','/superFood/admin/productCategories/delete/[i:id]','App\Controllers\AdminProductCategoriesController@delete','deleteProductCategories');

$router->map('GET','/superFood/admin/animation','App\Controllers\AdminAnimationController@index','indexAnimation');
$router->map('GET','/superFood/admin/animation/create','App\Controllers\AdminAnimationController@create','createAnimation');
$router->map('POST','/superFood/admin/animation/store','App\Controllers\AdminAnimationController@store','storeAnimation');
$router->map('GET','/superFood/admin/animation/edit/[i:id]','App\Controllers\AdminAnimationController@edit','editAnimation');
$router->map('POST','/superFood/admin/animation/update/[i:id]','App\Controllers\AdminAnimationController@update','updateAnimation');
$router->map('GET','/superFood/admin/animation/delete/[i:id]','App\Controllers\AdminAnimationController@delete','deleteAnimation');

$router->map('GET','/superFood/admin/widget','App\Controllers\AdminWidgetController@index','indexWidget');
$router->map('GET','/superFood/admin/widget/create','App\Controllers\AdminWidgetController@create','createWidget');
$router->map('POST','/superFood/admin/widget/store','App\Controllers\AdminWidgetController@store','storeWidget');
$router->map('GET','/superFood/admin/widget/edit/[i:id]','App\Controllers\AdminWidgetController@edit','editWidget');
$router->map('POST','/superFood/admin/widget/update/[i:id]','App\Controllers\AdminWidgetController@update','updateWidget');
$router->map('GET','/superFood/admin/widget/delete/[i:id]','App\Controllers\AdminWidgetController@delete','deleteWidget');

$router->map('GET','/superFood/site/home','App\Controllers\SiteHomeController@index','indexHome');
$router->map('GET','/superFood/site/about','App\Controllers\SiteAboutController@index','indexAbout');
$router->map('GET','/superFood/site/contact','App\Controllers\SiteContactController@index','indexContact');
$router->map('GET','/superFood/site/service','App\Controllers\SiteServiceController@index','indexService');
$router->map('GET','/superFood/site/blog','App\Controllers\SiteBlogController@index','indexBlog');
$router->map('GET','/superFood/site/blog_details/[i:id]','App\Controllers\SiteBlogController@show','indexBlogDetails');
$router->map('GET','/superFood/site/blog_paginate','App\Controllers\SiteBlogController@create','indexBlogPaginate');

$router->map('GET','/superFood/site/blog_categories','App\Controllers\SiteBlogCategoriesController@index','indexBlogCategories');
$router->map('GET','/superFood/site/blog_categories_paginate','App\Controllers\SiteBlogCategoriesController@create','indexBlogCategoriesPaginate');

$router->map('GET','/superFood/site/blog_tags','App\Controllers\SiteBlogTagsController@index','indexBlogTags');
$router->map('GET','/superFood/site/blog_tags_paginate','App\Controllers\SiteBlogTagsController@create','indexBlogTagsPaginate');

$router->map('GET','/superFood/site/blog_search','App\Controllers\SiteBlogSearchController@index','indexBlogSearch');
$router->map('GET','/superFood/site/blog_search_paginate','App\Controllers\SiteBlogSearchController@create','indexBlogSearchPaginate');
