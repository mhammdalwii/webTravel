   <div class="row justify-content-start">
       <div class="col-6 col-md-4 mb-3 mb-md-0">
           <select id="categoryDropdown" class="form-control" onchange="navigateToCategory(this.value)">
               <option value="{{ route('boats.index') }}" {{ request('category') == null ? 'selected' : '' }}>All
                   Categories</option>
               <option value="{{ route('boats.category', ['category' => 'Superior']) }}"
                   {{ request('category') == 'Superior' ? 'selected' : '' }}>Superior</option>
               <option value="{{ route('boats.category', ['category' => 'Deluxe']) }}"
                   {{ request('category') == 'Deluxe' ? 'selected' : '' }}>Deluxe</option>
               <option value="{{ route('boats.category', ['category' => 'Luxury']) }}"
                   {{ request('category') == 'Luxury' ? 'selected' : '' }}>Luxury</option>
           </select>
       </div>
       <div class="col-6 col-md-4">
           <select id="departuresDropdown" class="form-control" onchange="navigateToDeparture(this.value)">
               <option value="{{ route('boats.index') }}" {{ request('departure') == null ? 'selected' : '' }}>
                   All Departures
               </option>
               <option value="{{ route('boats.departure', ['departure' => 'Monday-Wednesday']) }}"
                   {{ request('departure') == 'Monday-Wednesday' ? 'selected' : '' }}>
                   Monday - Wednesday
               </option>
               <option value="{{ route('boats.departure', ['departure' => 'Friday-Sunday']) }}"
                   {{ request('departure') == 'Friday-Sunday' ? 'selected' : '' }}>
                   Friday - Sunday
               </option>
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

   <script>
       function navigateToDeparture(url) {
           if (url) {
               window.location.href = url;
           }
       }
   </script>
