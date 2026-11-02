use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [
        CourseController::class, 'index',
    ])->name('dashboard');
    Route::post('/courses', [
        CourseController::class, 'store',
    ])->name('courses.store');

    Route::get('/courses/{course}/edit', [
        CourseController::class, 'edit',
    ])->whereNumber('course')->name('courses.edit');
    Route::get('/courses/{course}', [
        CourseController::class, 'show',
    ])->whereNumber('course')->name('courses.show');
    Route::put('/courses/{course}', [
        CourseController::class, 'update',
    ])->whereNumber('course')->name('courses.update');
    Route::delete('/courses/{course}', [
        CourseController::class, 'destroy',
    ])->whereNumber('course')->name('courses.destroy');
});
