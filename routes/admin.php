<?php

use App\Models\BottomBanner;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\BottomBannerController;
use App\Http\Controllers\Backend\AboutController;

use App\Http\Controllers\Backend\StudyController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\TenderController;
use App\Http\Controllers\Backend\VisionController;

use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\MissionController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\RelivingController;
use App\Http\Controllers\Backend\TrainingController;
use App\Http\Controllers\Backend\UpcomingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ManagementController;
use App\Http\Controllers\Backend\TeammemberController;
use App\Http\Controllers\Backend\PageManagerController;
use App\Http\Controllers\Backend\HostelserviceController;
use App\Http\Controllers\Backend\InfastructureController;
use App\Http\Controllers\Backend\OurServicesController;
use App\Http\Controllers\Backend\Trainingeventcontroller;

// Dashboard routes
Route::middleware(['auth'])->group(function () {
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('business-info', 'businessSettings')->name('business-setting');
    Route::post('business-info', 'businessSettingsUpdate')->name('business-setting-update');
    Route::get('profile', 'profile')->name('profile');
    Route::post('profile', 'profileUpdate')->name('profile.update');
});
});
// Slider routes
Route::controller(SliderController::class)->group(function () {
    Route::group(['prefix' => 'sliders', 'as' => 'sliders.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::controller(PageController::class)->group(function () {
        Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('{id}/edit', 'edit')->name('edit');
            Route::post('{id}/edit', 'update')->name('update');
            Route::get('{id}/delete', 'destroy')->name('delete');
            Route::post('featured-unfeatured', 'featuredUnfeatured')->name('featured-unfeatured');
        });
    });
});

// Board routes
Route::controller(OurServicesController::class)->group(function () {
    Route::group(['prefix' => 'ourservices', 'as' => 'ourservices.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

// Teammember routes
Route::controller(TeammemberController::class)->group(function () {
    Route::group(['prefix' => 'teammembers', 'as' => 'teammembers.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});


// Teammember routes
Route::controller(TrainingController::class)->group(function () {
    Route::group(['prefix' => 'training', 'as' => 'training.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

// Teammember routes
Route::controller(NewsController::class)->group(function () {
    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});




// Teammember routes
Route::controller(UpcomingController::class)->group(function () {
    Route::group(['prefix' => 'upcoming', 'as' => 'upcoming.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});



Route::controller(CategoryController::class)->group(function () {
    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
      Route::post('{id}/update', 'update')->name('update');
       Route::get('{id}/delete', 'destroy')->name('destroy');
        Route::post('{id}/toggle', 'toggle')->name('toggle');
       Route::get('{id}/subcategories', 'subcategories')->name('subcategories');
       Route::post('{category}/subcategories', 'storeSubcategory')->name('subcategories.store');

       Route::get('/categories/{category}/subcategories/{subcategory}/edit', 'editSubcategory')->name('subcategories.edit');
       Route::post('categories/{category}/subcategories/{subcategory}', 'updateSubcategory')->name('subcategories.update');
       Route::get('/subcategory/{id}/download', 'downloadPdf')->name('subcategory.download');

       Route::get('{category}/subcategories/{subcategory}/delete', 'destroySubcategory')->name('subcategories.destroy');
    });
});


// placement routes
Route::controller(PageManagerController::class)->group(function () {
    Route::group(['prefix' => 'pagemanager', 'as' => 'pagemanager.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});


// Hotelservice routes
Route::controller(HostelserviceController::class)->group(function () {
    Route::group(['prefix' => 'hostelfacility', 'as' => 'hostelfacility.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});


// Banner routes

Route::controller(BannerController::class)->group(function () {
    Route::group(['prefix' => 'banenr', 'as' => 'banner.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});


// Upcomimg routes
Route::controller(BottomBannerController::class)->group(function () {
    Route::group(['prefix' => 'bottombanner', 'as' => 'bottombanner.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});


Route::controller(Trainingeventcontroller::class)->group(function () {
    Route::group(['prefix' => 'trainingevent', 'as' => 'trainingevent.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(VisionController::class)->group(function () {
    Route::group(['prefix' => 'visions', 'as' => 'visions.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(MissionController::class)->group(function () {
    Route::group(['prefix' => 'missions', 'as' => 'missions.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});
Route::controller(AboutController::class)->group(function () {
    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(RoomController::class)->group(function () {
    Route::group(['prefix' => 'rooms', 'as' => 'rooms.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(InfastructureController::class)->group(function () {
    Route::group(['prefix' => 'infa', 'as' => 'infa.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(GalleryController::class)->group(function () {
    Route::group(['prefix' => 'galleries', 'as' => 'galleries.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});
Route::controller(RelivingController::class)->group(function () {
    Route::group(['prefix' => 'relieve', 'as' => 'relieve.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(StudyController::class)->group(function () {
    Route::group(['prefix' => 'study', 'as' => 'study.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(FeedbackController::class)->group(function () {
    Route::group(['prefix' => 'feedbacking', 'as' => 'feedbacking.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});



Route::controller(ManagementController::class)->group(function () {
    Route::group(['prefix' => 'management', 'as' => 'management.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(TenderController::class)->group(function () {
    Route::group(['prefix' => 'tenderservice', 'as' => 'tenderservice.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});




// Contact routes
Route::controller(ContactController::class)->group(function () {
    Route::get('/contacts', 'index')->name('contact.index');
    Route::delete('contacts/{id}/delete', 'delete')->name('contacts.delete');
});
