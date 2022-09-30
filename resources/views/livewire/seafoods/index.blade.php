<div>
    <table class="table table-striped">
        <thead class="bg-warning">
            <tr>
                <th>Menu ID</th>
                <th>Main Dish</th>
                <th>Dessert</th>
                <th>Beverages</th>
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
</div>
