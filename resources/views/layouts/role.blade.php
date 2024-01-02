use App\Http\Controllers\CabangController; 

Route::middleware('auth')->group(funtion (){
    Route::get('/cabang', [CabangController::class, 'index']) ->name('cabang');
});