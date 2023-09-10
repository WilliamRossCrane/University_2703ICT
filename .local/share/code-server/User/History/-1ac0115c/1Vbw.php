use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

// Define the 'home' route and use the HomeController@index method
Route::get('/', [HomeController::class, 'index'])->name('home');

// Posts routes (Resourceful)
Route::resource('posts', PostController::class);

// Comments routes
Route::post('/comments/{post}', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{post}/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{post}/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{post}/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

// User routes
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

// Unique Users routes
Route::get('/unique-users', [UserController::class, 'index'])->name('unique-users.index');
Route::get('/unique-users/{user}', [UserController::class, 'show'])->name('unique-users.show');
