```php
// try this /download?file=../../../.env
Route::get('/download', function (Illuminate\Http\Request $request) {
    $file = $request->input('file');
    $path = public_path('assets/images/' . $file);

    if (file_exists($path)) {
        return response()->download($path);
    } else {
        abort(404, 'File not found');
    }
});
```