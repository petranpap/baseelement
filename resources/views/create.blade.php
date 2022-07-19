<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<style>
    .form-group label,.card-header{
        color: black;
    }
    select{
        color: black !important;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{--            {{ __('Dashboard') }}--}}
        </h2>
    </x-slot>
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1" style="color: white">
            <div class="container mt-4">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header text-center font-weight-bold">
                        Add User Form
                    </div>
                    <div class="card-body">
                        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input  maxlength="100" type="text" id="name" name="name" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="surname">Surname</label>
                                <input maxlength="100" type="text" id="surname" name="surname" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label for="surname">Email</label>
                                <input maxlength="100" type="email" id="email" name="email" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label for="workphone">workphone</label>
                                <input type="text" maxlength="8" id="workphone" name="workphone" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="mobilephone">mobilephone</label>
                                <input type="text" maxlength="8"  id="mobilephone" name="mobilephone" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="address">address</label>
                                <input type="text" maxlength="150" id="address" name="address" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label for="postcode">postcode</label>
                                <input type="text" id="postcode" maxlength="4" name="postcode" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label for="country">country</label>
                                <input type="text" id="country" maxlength="50" name="country" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label for="postcode">birthday</label>
                                <input type="text" id="birthday" maxlength="10" name="birthday" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label for="services">Services:</label>
                                <select id="services" name="services">
                                    <option value="Audit & Accountancy">Audit & Accountancy</option>
                                    <option value="Building & Construction">Building & Construction</option>
                                    <option value="Education">Education</option>
                                    <option value="Distribution">Distribution</option>
                                    <option value="Travel & Tourism">Travel & Tourism</option>
                                    <option value="Hotel & Leisure Services">Hotel & Leisure Services</option>

                                </select>
                            </div>

                            <button id="submit" type="submit" class="btn btn-outline-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                $("#submit").hover( function () {
                    if(($("#workphone").val()=='')&&($("#mobilephone").val()=='')){
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'The Work Phone and the Mobile Phone Cannot be both Empty'
                        })
                    }
                    return;

                })
            </script>



        </div>
    </div>



</x-app-layout>
