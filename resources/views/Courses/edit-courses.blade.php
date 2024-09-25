@include('layouts.header')

@include('layouts.navigation')

<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    @include('layouts.side-bar')


                    <div id="layoutSidenav_content">
                <main>




@if(Session::has('Success'))
                <div class="alert alert-Success" role="alert">
                    {{Session::get('Success')}} 
                </div>
                @endif



<!-- Update Course Form -->
<div class="update-form">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 offset-lg-2">
            <div class="form-wrap">
               <h2>Add New Teacher</h2>
               <form method="post" action="{{ url('update-course', $courses->id) }}" enctype="multipart/form-data">
                  @csrf

                  @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                  @endif

                  <div class="md-3">
                     <label class="form-label">Name</label>
                     <input type="text" class="form-control" name="Name" placeholder="Enter course name" value="{{ $courses->Name }}">
                     @error('Name')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">Description</label>
                     <textarea class="form-control" name="Description" placeholder="Enter course description">{{ $courses->Description }}</textarea>
                     @error('Description')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">C1</label>
                     <input type="text" class="form-control" name="C1" placeholder="Enter course content" value="{{ $courses->C1 }}">
                     @error('C1')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">C2</label>
                     <input type="text" class="form-control" name="C2" placeholder="Enter course content" value="{{ $courses->C2 }}">
                     @error('C2')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">C3</label>
                     <input type="text" class="form-control" name="C3" placeholder="Enter course content" value="{{ $courses->C3 }}">
                     @error('C3')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">C4</label>
                     <input type="text" class="form-control" name="C4" placeholder="Enter course content" value="{{ $courses->C4 }}">
                     @error('C4')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">Name</label>
                     <input type="text" class="form-control" name="C5" placeholder="Enter course content" value="{{ $courses->C5 }}">
                     @error('C5')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">C6</label>
                     <input type="text" class="form-control" name="C6" placeholder="Enter course content" value="{{ $courses->C6 }}">
                     @error('C6')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
               <!---- Existing Image ---->
                     <div class="form-group">
                        <label class="form-label">Course Image</label>
                        <input type="file" class="form-control-file" name="image" style="max-width: 770px; max-height: 450px;">
                        @error('image')
                        <div class="alert alert-danger" role="alert">
                           {{ $message }}
                        </div>
                        @enderror
                     </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Update Course Form Ends -->

</main>

@include('layouts.footer')