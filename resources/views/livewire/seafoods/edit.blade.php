<div>
   <div class="container col-md-6 offset-md-3 mt-5">
    <div>
        <div class="card">
             <div class="card-header bg-info">
                 <h3>Edit Menu</h3>
             </div>
             <div class="card-body">
                 <div class="form-floating mb-3">
                     <input type="text" class="form-control" wire:model.defer="main_dish">
                     <label for="main_dish">Main Dish</label>
                     @error('main_dish')
                         <p class="text-danger">{{$message}}</p>
                     @enderror
                 </div>
                 <div class="form-floating mb-3">
                     <input type="text" class="form-control" wire:model.defer="dessert">
                     <label for="dessert">Dessert</label>
                     @error('dessert')
                         <p class="text-danger">{{$message}}</p>
                     @enderror
                 </div>
                 <div class="form-floating mb-3">
                     <select name="beverages" class="form-select" wire:model.defer="beverages">
                         <option hidden="true">Select Beverages</option>
                         <option selected disabled>"Select Beverages"></option>
                         <option value="Soda">Soda</option>
                         <option value="Bottled Water">Bottled Water</option>
                         <option value="Wine">Wine</option>
                         <option value="Beer">Beer</option>
                         <option value="Shake">Shake</option>
                         <option value="Tea">Tea</option>
                     </select>
                     <label for="beverages">Beverages</label>
                     @error('beverages')
                         <p class="text-danger">{{$message}}</p>
                     @enderror
                 </div>
                 <div class="form-floating mb-3">
                     <input type="text" class="form-control" wire:model="price">
                     <label for="price">Price</label>
                     @error('price')
                         <p class="text-danger">{{$message}}</p>
                     @enderror
                 </div>
                 <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                     <button class="btn btn-success" type="submit" wire:click="editmenu()",>
                         Save Changes
                     </button>
                 </div>
             </div>
        </div>
     </div>
     
   </div>
</div>