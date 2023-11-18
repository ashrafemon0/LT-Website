<?php

use App\Http\Controllers\AcademicController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\campusInfoController;
use App\Http\Controllers\ChildSafetyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\MesageFounderController;
use App\Http\Controllers\MissionVisionController;
use App\Http\Controllers\Page\CalenderController;
use App\Http\Controllers\Page\CareerController;
use App\Http\Controllers\Page\CourseDetailsController;
use App\Http\Controllers\Page\GalleryController;
use App\Http\Controllers\Page\HistoryController;
use App\Http\Controllers\Page\HolidayController;
use App\Http\Controllers\Page\InstructorController;
use App\Http\Controllers\Page\NoticeController;
use App\Http\Controllers\SenController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SummaryController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePass;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Models\User;
use App\Models\Multipic;
use Illuminate\Support\Facades\DB;

Route::get('/clear', function () {

    Artisan::call('optimize');

    return "okay";
});
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->get();
    $courses = DB::table('our_courses')->limit(6)->get();
    $campusInfo = DB::table('campus_information')->get();
    $summary = DB::table('summaries')->get();
    $blog = DB::table('blogs')->get();
    $events = DB::table('all_events')->get();
    $slider = DB::table('sliders')->first();
    $images = Multipic::all();
    return view('home', compact('brands','abouts','courses','campusInfo','summary','blog','events','slider','images'));
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/contactasd-asdf-asdfsad', [ContactController::class, 'index'])->name('ariyan');


// Category Controller
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('store.category');

Route::get('/category/edit/{id}', [CategoryController::class, 'Edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'Update']);
Route::get('/softdelete/category/{id}', [CategoryController::class, 'SoftDelete']);

Route::get('/category/restore/{id}', [CategoryController::class, 'Restore']);
Route::get('/pdelete/category/{id}', [CategoryController::class, 'Pdelete']);

/// For Brand Route
Route::get('/brand/all', [BrandController::class, 'AllBrand'])->name('all.brand');
Route::post('/brand/add', [BrandController::class, 'StoreBrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [BrandController::class, 'Edit']);
Route::post('/brand/update/{id}', [BrandController::class, 'Update']);
Route::get('/brand/delete/{id}', [BrandController::class, 'Delete']);

/// Course Route For Admin
Route::get('/course/all', [CourseController::class, 'AllCourse'])->name('all.course');
Route::post('/course/add', [CourseController::class, 'StoreCourse'])->name('store.course');
Route::get('/course/edit/{id}', [CourseController::class, 'Edit']);
Route::post('/course/update/{id}', [CourseController::class, 'Update']);
Route::get('/course/delete/{id}', [CourseController::class, 'Delete']);


/// For CourseDetails Route
//Route::get('/courseDetails', [CourseDetailsController::class, 'CourseDetails'])->name('courseDetails');
//Route::post('/course/add', [CourseController::class, 'StoreCourse'])->name('store.course');
//Route::get('/course/edit/{id}', [CourseController::class, 'Edit']);
//Route::post('/course/update/{id}', [CourseController::class, 'Update']);
//Route::get('/course/delete/{id}', [CourseController::class, 'Delete']);


/// For Academic Route
Route::get('/academic/all', [AcademicController::class, 'AllAcademic'])->name('all.academic');
Route::post('/academic/add', [AcademicController::class, 'StoreAcademic'])->name('store.academic');
Route::get('/academic/edit/{id}', [AcademicController::class, 'Edit']);
Route::post('/academic/update/{id}', [AcademicController::class, 'Update']);
Route::get('/academic/delete/{id}', [AcademicController::class, 'Delete']);

/// For Campus Info Route
Route::get('/campusInfo/all', [campusInfoController::class, 'AllCampusInfo'])->name('all.campusInfo');
Route::post('/campusInfo/add', [campusInfoController::class, 'StoreCampusInfo'])->name('store.campusInfo');
Route::get('/campusInfo/edit/{id}', [campusInfoController::class, 'Edit']);
Route::post('/campusInfo/update/{id}', [campusInfoController::class, 'Update']);
Route::get('/campusInfo/delete/{id}', [campusInfoController::class, 'Delete']);

/// For Event Route
Route::get('/event/all', [EventController::class, 'AllEvent'])->name('all.event');
Route::post('/event/add', [EventController::class, 'StoreEvent'])->name('store.event');
Route::get('/campusInfo/edit/{id}', [campusInfoController::class, 'Edit']);
Route::post('/campusInfo/update/{id}', [campusInfoController::class, 'Update']);
Route::get('/allevents/delete/{id}', [EventController::class, 'Delete']);

/// For All Footer Route
Route::get('/footer/all', [FooterController::class, 'AllFooter'])->name('admin.footer');
Route::get('/footerAddress/edit/{id}', [FooterController::class, 'Edit']);
Route::post('/footerAddress/update/{id}', [FooterController::class, 'Update']);

/// For All Summary Route
Route::get('/summary/all', [SummaryController::class, 'AllSummary'])->name('all.summary');
Route::get('/summary/edit/{id}', [SummaryController::class, 'Edit']);
Route::post('/summary/update/{id}', [SummaryController::class, 'Update']);

/// For All Blog Route
Route::get('/blog/all', [BlogController::class, 'AllBlog'])->name('all.blog');
Route::post('/blog/add', [BlogController::class, 'StoreBlog'])->name('store.blogs');
Route::get('/blog/edit/{id}', [BlogController::class, 'Edit']);
Route::post('/blog/update/{id}', [BlogController::class, 'Update']);
Route::get('/blog/delete/{id}', [BlogController::class, 'Delete']);

// Multi Image Route
Route::get('/multi/image', [GalleryController::class, 'Multpic'])->name('multi.image');
Route::post('/multi/add', [GalleryController::class, 'StoreImg'])->name('store.image');

// Admin ALL Route
Route::get('/home/slider', [HomeController::class, 'HomeSlider'])->name('home.slider');
Route::get('/add/slider', [HomeController::class, 'AddSlider'])->name('add.slider');
Route::post('/store/slider', [HomeController::class, 'StoreSlider'])->name('store.slider');
Route::get('/slider/delete/{id}', [HomeController::class, 'Delete']);



// Home About All Route
Route::get('/home/About', [AboutController::class, 'HomeAbout'])->name('home.about');
Route::get('/add/About', [AboutController::class, 'AddAbout'])->name('add.about');
Route::post('/store/About', [AboutController::class, 'StoreAbout'])->name('store.about');
Route::get('/about/edit/{id}', [AboutController::class, 'EditAbout']);
Route::post('/update/homeabout/{id}', [AboutController::class, 'UpdateAbout']);
Route::get('/about/delete/{id}', [AboutController::class, 'DeleteAbout']);


//facility Route
Route::get('/facility', [FacilityController::class, 'ViewFacility'])->name('facility');

//facility Route
Route::get('/childsafety', [ChildSafetyController::class, 'ChildSafety'])->name('childSafety');

//Mission Route
Route::get('/mission', [MissionVisionController::class, 'missionVision'])->name('mission');

//Sen Route
Route::get('/sen', [SenController::class, 'SenView'])->name('sen');

//alumni Route
Route::get('/alumni', [AlumniController::class, 'AlumniView'])->name('alumni');

//alumni Route
Route::get('/admission', [AdmissionController::class, 'AdmissionView'])->name('admission');

// Home Message Founder All Route
Route::get('/message', [MesageFounderController::class, 'MessageFounder'])->name('message');
Route::get('/add/About', [AboutController::class, 'AddAbout'])->name('add.about');
Route::post('/store/About', [AboutController::class, 'StoreAbout'])->name('store.about');
Route::get('/about/edit/{id}', [AboutController::class, 'EditAbout']);
Route::post('/update/homeabout/{id}', [AboutController::class, 'UpdateAbout']);
Route::get('/about/delete/{id}', [AboutController::class, 'DeleteAbout']);


//Portfolio Page Route
Route::get('/portfolio', [AboutController::class, 'Portfolio'])->name('portfolio');




// Admin Contact Page Route
Route::get('/admin/contact', [ContactController::class, 'AdminContact'])->name('admin.contact');
Route::get('/admin/message', [ContactController::class, 'AdminMessage'])->name('admin.message');
Route::get('/message/delete/{id}', [ContactController::class, 'AdminMessageDelete']);
Route::get('/contact/edit/{id}', [ContactController::class, 'AdminContactEdit']);
Route::post('/contact/update/{id}', [ContactController::class, 'Update']);

// Admin Notice Page Route
Route::get('/admin/notice', [NoticeController::class, 'AdminNotice'])->name('admin.notice');
Route::post('/admin/notice/store', [NoticeController::class, 'AdminNoticeStore'])->name('store.notice');
Route::get('/notice/delete/{id}', [NoticeController::class, 'Delete']);
Route::get('/notice/edit/{id}', [NoticeController::class, 'AdminNoticeEdit']);
Route::post('/notice/update/{id}', [NoticeController::class, 'Update']);

// Admin Gallery Page Route
Route::get('/admin/gallery', [GalleryController::class, 'AdminGallery'])->name('admin.gallery');
Route::post('/admin/notice/store', [NoticeController::class, 'AdminNoticeStore'])->name('store.notice');
Route::get('/notice/delete/{id}', [NoticeController::class, 'Delete']);
Route::get('/notice/edit/{id}', [NoticeController::class, 'AdminNoticeEdit']);
Route::post('/notice/update/{id}', [NoticeController::class, 'Update']);



/// Home Contact Page Route
Route::get('/contact', [ContactController::class, 'Contact'])->name('contact');
Route::post('/contact/form', [ContactController::class, 'ContactForm'])->name('contact.form');
Route::get('/notice', [NoticeController::class, 'noticeView'])->name('notice-board');
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');


/// Home Career Page Route
Route::get('/career', [CareerController::class, 'career'])->name('career');
Route::get('/admin/career', [CareerController::class, 'AllCareer'])->name('admin.career');
Route::post('/admin/job/store', [CareerController::class, 'AdminJobStore'])->name('store.career');
Route::get('/career/delete/{id}', [CareerController::class, 'Delete']);
Route::get('/career/edit/{id}', [CareerController::class, 'Edit']);
Route::post('/career/update/{id}', [CareerController::class, 'Update']);

/// Home Career Apply Page Route
Route::post('/Apply/job', [CareerController::class, 'ApplyPost'])->name('Apply.post');
Route::get('/admin/Apply', [CareerController::class, 'AdminApply'])->name('admin.Apply');
Route::get('/admin/pdf/download/{pdf}', [CareerController::class, 'downloadPdf'])->name('admin.pdf.download');
Route::get('/ApplyJob/delete{id}', [CareerController::class, 'JobDelete']);

/// Home Instructor Page Route
Route::get('/instructor', [InstructorController::class, 'instructor'])->name('instructor');
Route::get('/admin/instructor', [InstructorController::class, 'AllInstructor'])->name('admin.instructor');
Route::post('/admin/instructor/store', [InstructorController::class, 'AdminInstructorStore'])->name('store.instructor');
Route::get('/instructor/delete/{id}', [InstructorController::class, 'Delete']);
Route::get('/instructor/edit/{id}', [InstructorController::class, 'Edit']);
Route::post('/instructor/update/{id}', [InstructorController::class, 'Update']);


/// Home Calender Page Route
Route::get('/holiday', [CalenderController::class, 'holiday'])->name('holiday');
Route::get('/admin/Calender', [CalenderController::class, 'Calender'])->name('admin.calender');
Route::get('/calender/edit/{id}', [CalenderController::class, 'Edit']);
Route::post('/calender/update/{id}', [CalenderController::class, 'Update']);

/// Home Calender Page Route
Route::get('/course', [CourseController::class, 'AllCoursePage'])->name('courseList');
Route::get('/admin/Calender', [CalenderController::class, 'Calender'])->name('admin.calender');
Route::get('/calender/edit/{id}', [CalenderController::class, 'Edit']);
Route::post('/calender/update/{id}', [CalenderController::class, 'Update']);
Route::get('/AllIdCourseDetails/{id}', [CourseDetailsController::class, 'AllIdCourseDetails'])->name('SpecificCourseDetails');

//about
Route::get('/about', [HistoryController::class, 'AllAbout'])->name('about');//controller use history controller

/// Home History Page Route
Route::get('/history', [HistoryController::class, 'History'])->name('history');
Route::get('/admin/Calender', [CalenderController::class, 'Calender'])->name('admin.calender');
Route::get('/calender/edit/{id}', [CalenderController::class, 'Edit']);
Route::post('/calender/update/{id}', [CalenderController::class, 'Update']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');
Route::get('/user/logout', [BrandController::class, 'Logout'])->name('user.logout');


/// Chanage Password and user Profile Route
Route::get('/user/password', [ChangePass::class, 'CPassword'])->name('change.password');
Route::post('/password/update', [ChangePass::class, 'UpdatePassword'])->name('password.update');

// User Profile
Route::get('/user/profile', [ChangePass::class, 'PUpdate'])->name('profile.update');
Route::post('/user/profile/update', [ChangePass::class, 'UpdateProfile'])->name('update.user.profile');
