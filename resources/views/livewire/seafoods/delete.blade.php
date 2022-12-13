<div>
    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-danger">Delete Order?</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>type of Cake</th>
                        <td>{{$this->seafood->main_dish}}</td>
                    </tr>
                    <tr>
                        <th>Dessert</th>
                        <td>{{$this->seafood->dessert}}</td>
                    </tr>
                    <tr>
                        <th>Flavors</th>
                        <td>{{$this->seafood->beverages}}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{$this->seafood->price}}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger" wire:click="delete()">Delete</button>
                    <button class="btn btn-success mx-2" wire:click="back">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
