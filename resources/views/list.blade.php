<?php
$url_withid = 0;
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url,'list/') !== false) {
    $url_withid =1;
}

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    tr{
        color: white;
    }
     input{
        color: black !important;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{--            {{ __('Dashboard') }}--}}
        </h2>
    </x-slot>

    <div class="w-96 mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        </div>

        <div class="mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1" style="color: white">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <td>Work Phone</td>
                        <td>Mobile Phone</td>
                        <td>Address</td>
                        <td>Post Code</td>
                        <td>Country</td>
                        <th>Birthday</th>
                        <th>Services</th>
                    </tr>
                    @foreach ($users as $user)
                        @if($url_withid ==0)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->workphone }}</td>
                            <td>{{ $user->mobilephone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->postcode }}</td>
                            <td>{{ $user->country }}</td>
                            <td>{{ $user->birthday }}</td>
                            <td>{{ $user->services }}</td>

                            <td style=" background: white; "><a href="/list/{{ $user->id }}"> <img width="20" height="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Edit_icon_%28the_Noun_Project_30184%29.svg/1024px-Edit_icon_%28the_Noun_Project_30184%29.svg.png"></a></td>
                            <td id="delete_{{ $user->id }}" style=" background: white; "> <img width="20" height="20" src="https://toppng.com/uploads/preview/edit-delete-icon-delete-icon-11553444925vxge0bju5o.png"></td>
                            <script>
                                $("#delete_{{ $user->id }}").click( function () {

                                    Swal.fire({
                                        title: 'Are you sure?',
                                        html:
                                            'You want to delete: <b>{{ $user->name }} {{ $user->surname }}</b>  <br>' +
                                            'You will not be able to revert this! ',
                                        text: "You won't be able to revert this!",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, delete it!'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            var settings = {
                                                "url": "http://127.0.0.1:8000/delete/{{ $user->id }}",
                                                "method": "GET",
                                                "timeout": 0,
                                            };

                                            $.ajax(settings).done(function (response) {
                                                location.reload();
                                            });
                                        }
                                    })



                                });

                            </script>
                        @else
                                <script>
                                    document.getElementsByTagName('tbody')[0].getElementsByTagName('tr')[0].style.display='none';

                                </script>
                                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                                <style>
                            label{
                                color: #111111;
                            }
                            select{
                                color: black !important;
                            }
                        </style>
                            <tr>
                            </tr>

                            <div class="card">
                            <div class="card-header text-center font-weight-bold">
                                Add User Form
                            </div>
                            <div class="card-body">
                                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('update')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name"  name="name" class="form-control" required="" value="{{ $user->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="surname">Surname</label>
                                        <input type="text" id="surname"  name="surname" class="form-control" required="" value="{{ $user->surname }}">

                                    </div>

                                    <div class="form-group">
                                        <label for="surname">Email</label>
                                        <input type="text" id="email"  name="email" class="form-control" required="" value="{{ $user->email }}">

                                    </div>

                                    <div class="form-group">
                                        <label for="workphone">workphone</label>
                                        <input type="text" id="workphone"  name="workphone" class="form-control"  value="{{ $user->workphone }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="mobilephone">mobilephone</label>
                                        <input type="text" id="mobilephone"  name="mobilephone" class="form-control"  value="{{ $user->mobilephone }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="address">address</label>
                                        <input type="text" id="address"  name="address" class="form-control" required="" value="{{ $user->address }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="postcode">postcode</label>
                                        <input type="text" id="postcode"  name="postcode" class="form-control" required="" value="{{ $user->postcode }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="country">country</label>
                                        <input type="text" id="country" maxlength="50" name="country" class="form-control" required=""value="{{ $user->country }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="postcode">birthday</label>
                                        <input type="text" id="birthday"  name="birthday" class="form-control" required="" value="{{ $user->birthday }}">
                                    </div>
                                    <div class="form-group" style="display: none">
                                        <label for="postcode">id</label>
                                        <input type="text" id="id"  name="id" class="form-control" required="" value="{{ $user->id }}">
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
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function(event) {
                                            let services = "{{ $user->services }}";
                                            let result = services.replace("&amp;", "&");
                                            document.getElementById("services").value=result;
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
                                        });

                                    </script>

                                    <button id="submit" type="submit" class="btn btn-outline-success">Submit</button>
                                </form>
                            </div>
            </div>


                        @endif
                    @endforeach
                </table>



            </div>
        </div>



    </div>

</x-app-layout>
