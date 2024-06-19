<x-admin-layout>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <br>
<h2>List of complaints</h2>
<div class="table-responsive">
<table border="1" class="table table-striped table-hover table-condensed ">
    <thead>
      <tr>
        <th><strong>Firstname</strong></th>
        <th><strong>Lastname</strong></th>
        <th><strong>City</strong></th>
        <th><strong>Region</strong></th>
        <th><strong>Postal code</strong></th>
        <th><strong>Country</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Phone</strong></th>
        <th><strong>Date</strong></th>
        <th><strong>Problem type</strong></th>
        <th><strong>On behalf of</strong></th>

        <th><strong>complaint</strong></th>


        
      </tr>
    </thead>
    <tbody>
    @foreach($complaintforms as $key => $data)
    <tr>    
      <th>{{$data->fname}}</th>
      <th>{{$data->lname}}</th>
      <th>{{$data->cityname}}</th>
      <th>{{$data->regionname}}</th>
      <th>{{$data->postal}}</th>
      <th>{{$data->country}}</th>
      <th>{{$data->email}}</th>
      <th>{{$data->phone}}</th>
      <th>{{$data->date}}</th>
      <th>{{$data->typeOFproblem}}</th>
      <th>{{$data->onBehalfof}}</th>
      <th>{{$data->complain}}</th>

      
                    
    </tr>
    @endforeach
    </tbody>
</table>
</div>    
    </div>
</x-admin-layout>
