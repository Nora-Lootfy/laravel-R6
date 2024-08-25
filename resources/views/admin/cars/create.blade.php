<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Car</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <style>
    * {
      font-family: "Lato", sans-serif;
    }
  </style>
  <!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/52zcxpdcmp1xgmdt4home7diqxaffdt3y445gwj8gkf4nfut/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>
</head>

<body>
  <main>
    <div class="container my-5">
      <div class="bg-light p-5 rounded">
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
        <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">Arabic</a>
        <h2 class="fw-bold fs-2 mb-5 pb-2">{{ __('cars.addHeading') }}</h2>
        <form action="{{route('cars.store')}}" method="POST" class="px-md-5" enctype="multipart/form-data">
        @csrf
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Car Title:</label>
            <div class="col-md-10">
              <input type="text" placeholder="BMW" class="form-control py-2" name="carTitle" value="{{old('carTitle')}}" />
              @error('carTitle')
                <div class="alert alert-warning">{{$message}}</div>
             @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Price:</label>
            <div class="col-md-10">
              <input type="text" step="0.1" placeholder="Enter price" class="form-control py-2" name="price" value="{{old('price')}}" />
             @error('price')
                <div class="alert alert-warning">{{$message}}</div>
             @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Category:</label>
            <div class="col-md-10">
              <select name="category_id" id="" class="form-control">
                <option value="">Select Category</option>
              @foreach($categories as $category)
                <option value="{{$category->id}}" @selected(old('category_id') == $category->id)>{{$category->category_name}}</option>
              @endforeach
              </select>
              @error('category_id')
                <div class="alert alert-warning">{{$message}}</div>
             @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Description:</label>
            <div class="col-md-10">
              <textarea id="" cols="30" rows="5" class="form-control py-2" name="description">{{old('description')}}</textarea>
             @error('description')
                <div class="alert alert-warning">{{$message}}</div>
             @enderror
            </div>
          </div>
          <hr>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
            <div class="col-md-10">
              <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" name="published" value="1" @checked(old('published')) />
            
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
            <div class="col-md-10">
              <input type="file" class="form-input" style="padding: 0.7rem;" name="image" />
             @error('image')
                <div class="alert alert-warning">{{$message}}</div>
             @enderror
            </div>
          </div>
          <div class="text-md-end">
            <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
              Add Car
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>