<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edite Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Edite Category
                </div>
                
                <div class="card-body">
                <form action="{{ url('category/update/'.$category_item->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="categoryname">Editable Category Name</label>
                      <input type="text" class="form-control" name="category_name" value="{{ $category_item->category_name }}">
                    </div>
                    
                    <button type="submit" class="btn btn-outline-primary">Submit </button>
                  </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
    
    
</x-app-layout>




