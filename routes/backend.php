<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ClientsMailController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/admin', [HomeController::class, 'index'])->name('admin');

// Backend Route
Route::middleware('auth')->group(function () {

    Route::controller(ProfileController::class)->group(function(){
        Route::get('/admin/profile', 'index')->name('admin.profile');
        Route::get('/admin/profile/add', 'addPage')->name('admin.profile.add');
        Route::post('/admin/user/update', 'userUpdate')->name('admin.user.update');
    });

    Route::controller(AddressController::class)->group(function(){
        Route::post('/admin/address/new', 'admin_address_new')->name('admin.address.new');
        Route::get('/admin/address/status/{id}', 'status')->name('admin.address.status');
        Route::get('/admin/address/delete/{id}', 'delete')->name('admin.address.delete');
    });

    Route::controller(SocialController::class)->group(function(){
        Route::post('/admin/social/new', 'admin_social_new')->name('admin.social.new');
        Route::get('/admin/social/status/{id}', 'status')->name('admin.social.status');
        Route::get('/admin/social/delete/{id}', 'delete')->name('admin.social.delete');
    });


    Route::controller(HomePageController::class)->group(function(){

        Route::get('/admin/homepage', 'index')->name('admin.homepage');
        Route::get('/admin/homepage/new', 'addPage')->name('admin.homepage.new');
        Route::get('/admin/homepage/trash', 'trashPage')->name('admin.homepage.trash');
        Route::post('/admin/homepage/data-insert', 'create')->name('admin.homepage.create');
        Route::post('/admin/homepage/status', 'status')->name('admin.homepage.status');
        Route::post('/admin/homepage/update', 'update')->name('admin.homepage.update');
        Route::get('/admin/homepage/edit/{id}', 'edit')->name('admin.homepage.edit');
        Route::get('/admin/homepage/softdelete/{id}', 'softdelete')->name('admin.homepage.softdelete');
        Route::get('/admin/homepage/restore/{id}', 'restore')->name('admin.homepage.restore');
        Route::get('/admin/homepage/forcedelete/{id}', 'forcedelete')->name('admin.homepage.forcedelete');
        Route::get('/admin/homepage/statusbg/{id}', 'statusbg')->name('admin.homepage.statusbg');
        Route::get('/admin/homepage/restoreBG/{id}', 'restoreBG')->name('admin.homepage.restoreBG');
        Route::get('/admin/homepage/softdeleteBG/{id}', 'softdeletebg')->name('admin.homepage.softdeleteBG');
        Route::get('/admin/homepage/forcedeleteBG/{id}', 'forcedeleteBG')->name('admin.homepage.forcedeleteBG');
        Route::post('/admin/homepage/bgdata-insert', 'createBg')->name('admin.homepage.bgcreate');

    });

    Route::controller(ClientsMailController::class)->group(function(){
        Route::get('/admin/email/inbox', 'inbox')->name('admin.email.inbox');
        Route::get('/admin/email/compose', 'compose')->name('admin.email.compose');
        Route::get('/admin/email/readpage/{id}', 'readpage')->name('admin.email.readpage');
        Route::get('/admin/email/markasread/{id}', 'markasread')->name('admin.email.markasread');
        Route::get('/admin/email/delete/{id}', 'single_delete')->name('admin.email.single_delete');
    });

    Route::controller(PortfolioController::class)->group(function(){
        Route::get('/admin/portfolio', 'index')->name('admin.portfolio.index');
        Route::get('/admin/portfolio/trash', 'trashPage')->name('admin.portfolio.trash');
        Route::get('/admin/portfolio/new', 'addPage')->name('admin.portfolio.new');
        Route::post('/admin/portfolio/create', 'create')->name('admin.portfolio.create');
        Route::get('/admin/portfolio/status/{id}', 'status')->name('admin.portfolio.status');
        Route::get('/admin/portfolio/softdelete/{id}', 'softdelete')->name('admin.portfolio.softdelete');
        Route::get('/admin/portfolio/forcedelete/{id}', 'forcedelete')->name('admin.portfolio.forcedelete');
        Route::get('/admin/portfolio/restore/{id}', 'restore')->name('admin.portfolio.restore');
    });

    Route::controller(BlogController::class)->group(function(){
        Route::get('/admin/blog', 'index')->name('admin.blog.index');
        Route::get('/admin/blog/trash', 'trashPage')->name('admin.blog.trash');
        Route::get('/admin/blog/new', 'addPage')->name('admin.blog.new');
        Route::post('/admin/blog/create', 'create')->name('admin.blog.create');
        Route::get('/admin/blog/status/{id}', 'status')->name('admin.blog.status');
        Route::get('/admin/blog/softdelete/{id}', 'softdelete')->name('admin.blog.softdelete');
        Route::get('/admin/blog/forcedelete/{id}', 'forcedelete')->name('admin.blog.forcedelete');
        Route::get('/admin/blog/restore/{id}', 'restore')->name('admin.blog.restore');
    });

    Route::controller(AboutController::class)->group(function(){
        Route::get('/admin/about', 'index')->name('admin.about.index');
        Route::post('/admin/about/new', 'aboutNew')->name('admin.about.new');
        Route::get('/admin/about/status/{id}', 'basicStatus')->name('admin.about.basic.status');
        Route::get('/admin/about/delete/{id}', 'basicDelete')->name('admin.about.basic.delete');
        Route::get('/admin/about/counter', 'counterPage')->name('admin.about.counter');
        Route::post('/admin/about/counter/new', 'counterNew')->name('admin.about.counter.new');
        Route::get('/admin/about/counter/status/{id}', 'counterStatus')->name('admin.about.counter.status');
        Route::get('/admin/about/counter/delete/{id}', 'counterDelete')->name('admin.about.counter.delete');
        Route::get('/admin/about/skills', 'skillPage')->name('admin.about.skills');
        Route::post('/admin/about/skills/new', 'skillNew')->name('admin.about.skills.new');
        Route::get('/admin/about/skills/delete/{id}', 'skillDelete')->name('admin.about.skills.delete');
        Route::get('/admin/about/skills/status/{id}', 'skillStatus')->name('admin.about.skills.status');
        Route::get('/admin/about/education', 'educationPage')->name('admin.about.education');
        Route::post('/admin/about/education/new', 'educationNew')->name('admin.about.education.new');
        Route::get('/admin/about/education/status/{id}', 'educationStatus')->name('admin.about.education.status');
        Route::get('/admin/about/education/delete/{id}', 'educationDelete')->name('admin.about.education.delete');
        Route::get('/admin/about/experience', 'experiencePage')->name('admin.about.experience');
        Route::post('/admin/about/experience/new', 'experienceNew')->name('admin.about.experience.new');
        Route::get('/admin/about/experience/status/{id}', 'experienceStatus')->name('admin.about.experience.status');
        Route::get('/admin/about/experience/delete/{id}', 'experienceDelete')->name('admin.about.experience.delete');
        Route::get('/admin/about/services', 'servicesPage')->name('admin.about.services');
        Route::post('/admin/about/services/new', 'servicesNew')->name('admin.about.services.new');
        Route::get('/admin/about/services/delete/{id}', 'servicesDelete')->name('admin.about.services.delete');
        Route::get('/admin/about/services/status/{id}', 'servicesStatus')->name('admin.about.services.status');
    });

    Route::controller(TestimonialController::class)->group(function(){
        Route::get('/admin/clients/testimonials', 'index')->name('admin.clients.index');
        Route::post('/admin/clients/testimonials/new', 'testimonial_new')->name('admin.clients.testimonial.new');
        Route::get('/admin/clients/testimonials/delete/{id}', 'testimonial_delete')->name('admin.clients.testimonial.delete');
        Route::get('/admin/clients/list', 'clientsList')->name('admin.clients.list');
    });

});

Route::get('/admin/downloadCVPdfFile', [ProfileController::class, 'downloadCVPdfFile'])->name('admin.downloadCVPdfFile');
