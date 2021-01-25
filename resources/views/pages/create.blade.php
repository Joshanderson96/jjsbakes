@extends('partials.layout')

@section('content')

    @extends('partials.navbar')
    
    
    <div class="create-container">
        <div class="create-title">
            <h1 class="main-heading">Create Your Post</h1>
        </div>

        <form action="" id="validate_form" class="create-form" data-parsley-validate="">
            <label class="create-form__title" for="title">Title</label>
            <input type="text" id="title" class="create-form__input "  >

            <label class="create-form__title" for="category">Category</label>
            <select name="category" class="create-form__select">
                <option value="" disabled selected>Select your category</option>
                <option value="Cake">Cake</option>
                <option value="Brownies">Brownies</option>
                <option value="Cookies">Cookies</option>
            </select>

            <label class="create-form__title" for="upload_image" required>Image</label>
            
            <input name="upload_image" type="file" />
            

            <label for="time" class="create-form__title">Time</label>
            <div class="create-form__time-container">
                <input type="text" class="create-form__time" data-parsley-type="digits" data-parsley-trigger="keyup">
                <p class="create-form__time-text">Hours</p>
                <input type="number" class="create-form__time" data-parsley-gt="6">
                <p class="create-form__time-text">Minutes</p>
            </div>
            <label for="recipe" class="create-form__title">Recipe</label>
            <textarea name="recipe" class="create-form__input" id="" cols="30" rows="10" required></textarea>

            <label for="post" class="create-form__title">Post</label>
            <textarea name="post" class="create-form__input" id="" cols="30" rows="10" required></textarea>

            <input type="submit" class="create-form__post" value="Post">

            
        </form>
    </div>
<script type="text/javascript">

var parsley_valiation_options = {
        errorTemplate: '<span class="error-msg"></span>',
        errorClass: 'error'
      }
      
      $("#title").parsley().on('field:success', function() {
          alert("Name validated!");
      }).on('field:validated', function() {
              //If Name is validated, then only fire more code
              if($("#title").parsley().isValid())
          {
              alert("Fire more code for Name!");
            }
      });
      
      $('.create-form').parsley(parsley_valiation_options)
</script>
    
@endsection