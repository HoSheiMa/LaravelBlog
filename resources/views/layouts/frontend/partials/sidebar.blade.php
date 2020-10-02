<aside class="col-lg-3">

  <!-- LOGIN WIDGET -->
  <div class="widget"> 
    <div class="widget-header">
      <h4>Sign In</h4>
    </div> 
    
    <div class="widget-content">

      <form action="" method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control mt-3" placeholder="Password" aria-label="Password" name="password">
          </div>
          <button class="btn btn-primary btn-block mt-2 newsl-btn" type="submit" name="login">Log in</button>
      </form>

    </div>

  </div>
      
  <!-- SEARCH WIDGET -->
  <div class="widget mt-4"> 
    <div class="widget-header">
      <h4>Search</h4>
    </div> 
    
    <div class="widget-content">

      <form method="post" action="">
          <div class="input-group mb-3">
          <input type="text" name="search" class="form-control" placeholder="Search ..." aria-label="Search" aria-describedby="button-addon2">
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="submit">Search</button>
              
          </div>
      </form>

    </div>

  </div>


  <!-- CATEGORIES WIDGET -->
  <div class="widget mt-4">
    <div class="widget-header">
      <h4>Kategóriák</h4>
    </div>
    <div class="widget-content">
      <ol class="list-unstyled mb-0">
        @foreach($categories as $category)
            <li><a href="{{ route('category.posts', $category->slug) }}">{{ $category->name }}</a></li>
        @endforeach
      </ol>
    </div>
  </div>


</aside>