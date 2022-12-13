<div>
   <div class="card">
        <div class="card-header bg-warning">
            <h3>Add Menu</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model="main_dish">
                <label for="main_dish">Cakes </label>
                @error('main_dish')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model="dessert">
                <label for="dessert">Dessert</label>
                @error('dessert')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="beverages" class="form-select" wire:model="beverages">
                    <option hidden="true">Select Flavor</option>
                    <option value="Chocolate">Chocolate</option>
                    <option value="Mocha">Mocha</option>
                    <option value="Red Velvet">Red Velvet</option>
                </select>
                <label for="beverages">Flavors</label>
                @error('beverages')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" wire:model="price">
                <label for="price">Price</label>
                @error('price')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-success" type="submit" wire:click="addMenu()">
                    Add Order
                </button>
            </div>
        </div>
   </div>
</div>
