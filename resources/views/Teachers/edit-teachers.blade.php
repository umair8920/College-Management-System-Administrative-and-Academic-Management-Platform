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



<!-- Update Teacher Form -->
<div class="Update-teacher-form">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 offset-lg-2">
            <div class="form-wrap">
               <h2>Update Teacher</h2>
               <form method="post" action="{{ url('update-teacher', $teachers->id) }}" enctype="multipart/form-data">
                  @csrf

                  @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                  @endif

                  <div class="md-3">
                     <label class="form-label">Name</label>
                     <input type="text" class="form-control" name="Name" placeholder="Enter teacher name" value="{{ $teachers->Name }}">
                     @error('Name')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">Role</label>
                     <input type="text" class="form-control" name="Role" placeholder="Enter teacher role" value="{{ $teachers->Role }}">
                     @error('Role')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">Description</label>
                     <textarea class="form-control" name="Description" placeholder="Enter teacher description">{{ $teachers->Description }}</textarea>
                     @error('Description')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">Education</label>
                     <textarea class="form-control" name="Education" placeholder="Enter teacher education">{{ $teachers->Education }}</textarea>
                     @error('Education')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">Experiences</label>
                     <textarea class="form-control" name="Experiences" placeholder="Enter teacher experiences">{{ $teachers->Experiences }}</textarea>
                     @error('Experiences')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">Expertise</label>
                     <textarea class="form-control" name="Expertise" placeholder="Enter teacher expertise">{{ $teachers->Expertise }}</textarea>
                     @error('Expertise')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">Language</label>
                     <textarea class="form-control" name="language" placeholder="Enter teacher language">{{ $teachers->language }}</textarea>
                     @error('language')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">Position</label>
                     <textarea class="form-control" name="position" placeholder="Enter teacher position">{{ $teachers->position }}</textarea>
                     @error('position')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">Phone</label>
                     <input type="text" class="form-control" name="phone" placeholder="Enter teacher phone" value="{{ $teachers->phone }}">
                     @error('phone')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">Email</label>
                     <input type="text" class="form-control" name="mail" placeholder="Enter teacher email" value="{{ $teachers->mail }}">
                     @error('mail')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
                  <div class="md-3">
                     <label class="form-label">Experience Years</label>
                     <input type="text" class="form-control" name="exp_years" placeholder="Enter teacher experience years" value="{{ $teachers->exp_years }}">
                     @error('exp_years')
                     <div class="alert alert-danger" role="alert">
                        {{ $message }}
                     </div>
                     @enderror
                  </div>
            <!----- Image ---->
                     <div class="form-group">
                        <label class="form-label">Profile Image</label>
                        <input type="file" class="form-control-file" name="image"
                        style="max-width: 300px; max-height: 330px;" value="{{ $teachers->image }}">
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
<!-- Update Teacher Form Ends -->



</main>



@include('layouts.footer')