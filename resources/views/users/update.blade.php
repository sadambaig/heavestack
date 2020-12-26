@extends('partials.default')
@section('content')
<!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

 <div class="page-header">
                    <div class="page-title">
                        <h3>Create Users</h3>
                    </div>
                    
                </div>

                <div class="row layout-top-spacing">



                   
                        {{-- 2nd coloum --}}
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                           <form action="{{ route('user.update') }}"  method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                              <div class="form-group">
                                <label>Name</label>
                                 <input type="text" name=name placeholder="Name" value="{{ $user->name }}" class="form-control"> <span class="text-danger">{{ $errors->first('name') }}</span>
                              </div>
                              <div class="form-group">
                                <label>Username</label>
                                 <input type="text" name=username  placeholder="Username" value="{{ $user->username }}" class="form-control" readonly> <span class="text-danger" >{{ $errors->first('username') }}</span>
                              </div>
                              <div class="form-group">
                                <label>Email</label>
                                 <input type="email" name=email  placeholder="E-Mail" value="{{ $user->email}}"  class="form-control" readonly> <span class="text-danger">{{ $errors->first('email') }}</span>
                              </div>
                              <div class="form-group">
                                  <label>Image</label>
                                  <input type="file"  name="icon" class="form-control icon">
                                  <span class="icon-image"  >
                                      <img src="{{ asset('public/images/user_images/'.$user->image) }}" alt="" class="show-image img img-responsive" style="height: 100px; width: 100px;">
                                  </span>
                                  <span class="text-danger">{{ $errors->first('icon') }}</span>

                              </div>
                              <div class="form-group">
                                <label>Role</label>
                                  <select name="role" class="form-control">
                                    @foreach($roles as $role)
                                      <option value="{{ $role->id }}" {{ (in_array( $role->id,$user->role->pluck('id')->toArray()))?"selected":'' }}>{{ $role->roleName }}</option>
                                      @endforeach
                                      
                                  </select>
                                  <span class="text-danger">{{ $errors->first('type') }}</span>
                              </div>
                              
                             
                             
                              
                              <div class="form-group">

                                  <label class="switch s-icons s-outline  s-outline-primary  mb-4 mr-2">

                                        <input type="checkbox" name="status" {{ ($user->status=='active')?'checked':'' }}>
                                        <span class="slider"></span>
                                    </label>
                                    
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                           </form>
                        </div>
                    </div>

                    

                </div>
                </div>
        </div>
        <!--  END CONTENT PART  -->
                
@endsection
@section('styles')

 <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/forms/switches.css')}}">


    
@endsection
@section('scripts')
 
<script>
     $(function() {
       
        $('.icon').on('change',function(){
            var input=this;

            if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
               
                $('.show-image').attr('src','');
              
                $('.show-image').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
            
        });
    });
</script>

@endsection