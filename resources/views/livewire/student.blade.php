<div>
		 <div class="row mb-2">
		 	<div class="col-auto ml-auto" style="display: block; float: right;">
		 		<select wire:model.lazy='paginate' class="custom-select w-auto">
				  <option value="5">5</option>
				  <option value="10">10</option>
				  <option value="15">15</option>
				  <option value="20">20</option>
				  <option value="25">25</option>
				</select>
		 	</div>
		 	
		 </div>
        <table class="table table-ligth">
        	

		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nom et prénoms</th>
		      <th scope="col">Email</th>
		      <th scope="col">Adult?</th>
		      <th scope="col">City</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($students as $student)
		    <tr>
		      <th scope="row">{{$student->id}}</th>
		      <td>{{$student->name}}</td>
		      <td>{{$student->email}}</td>
		      <td><img src="{{ $student->old > 18 ? asset('yes.svg') : asset('no.svg') }}"></td>
		      <td>{{$student->city}}</td>
		    </tr>

		    @endforeach
		  </tbody>
		 
     </table>
      <div class="container">
		  	{{$students->links()}}
	</div>
</div>
