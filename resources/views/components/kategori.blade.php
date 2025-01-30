   <div class="row justify-content-start">
       <div class="col-6 col-md-4 mb-3 mb-md-0">
           <select id="categoryDropdown" class="form-control" onchange="navigateToCategory(this.value)">
               <option value="{{ route('boats.index') }}" selected>All Categories</option>
               <option value="{{ route('boats.category', ['category' => 'Superior']) }}">Superior</option>
               <option value="{{ route('boats.category', ['category' => 'Deluxe']) }}">Deluxe</option>
               <option value="{{ route('boats.category', ['category' => 'Luxury']) }}">Luxury</option>
           </select>
       </div>
       <div class="col-6 col-md-4">
           <select id="departuresDropdown" class="form-control" onchange="navigateToCategory(this.value)">
               <option value="{{ route('boats.index') }}" selected>All Departures</option>
               <option>Monday to Tuesday</option>
               <option value="{{ route('boats.category', ['category' => 'Deluxe']) }}">Deluxe</option>
               <option value="{{ route('boats.category', ['category' => 'Luxury']) }}">Luxury</option>
           </select>
       </div>
   </div>

   <script>
       function navigateToCategory(url) {
           if (url) {
               window.location.href = url;
           }
       }
   </script>
