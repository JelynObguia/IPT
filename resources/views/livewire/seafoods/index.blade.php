<div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-3">
                <select class="form-select" wire:model.lazy="beverages">
                    <option value="all">All</option>
                    <option value="Chocolate">Chocolate</option>
                    <option value="Mocha">Mocha</option>
                    <option value="Red Velvet">Red Velvet</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Search" wire:model.lazy="search">
            </div>
        </div>
    </div>
    <table class="table table-striped">
        <thead class="bg-warning">
            <tr>
                <th>Orderu ID</th>
                <th>Cake</th>
                <th>Dessert</th>
                <th>Flavor</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{$menu->id}}</td>
                    <td>{{$menu->main_dish}}</td>
                    <td>{{$menu->dessert}}</td>
                    <td>{{$menu->beverages}}</td>
                    <td>{{$menu->price}}</td>
                    <td>
                        <a href="{{url('edit', ['seafood' => $menu->id])}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td><a href={{url('delete', ['seafood' => $menu->id])}}" class= "btn btn-danger">Delete</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {{$menus->links()}}
</div>
