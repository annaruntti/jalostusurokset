<!-- partials/menu.php -->
<div class="bg-white">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-toggleable-sm navbar-light sm-padding">
          <button class="navbar-toggler navbar-toggler-right mt-nega" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-md">
              <li class="nav-item active mr-3">
                <a class="nav-link font-family-third text-uppercase" href="?"><b>Etusivu</b><span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mr-3">
                <a class="nav-link font-family-third text-uppercase" href="?sivu=haku"><b>Uroshaku</b></a>
              </li>
              <li class="nav-item mr-3">
                <a class="nav-link font-family-third text-uppercase" href="?sivu=urosilmoitus"><b>Urosilmoitus</b></a>
              </li>
            </ul>
            <form action="?sivu=hakutulokset" class="form-inline my-2 my-lg-0 ml-lg-2">
            	<input class="form-control form-control-placeholder mr-0 rounded-0 border-top-1 border-bottom-1 border-left-1 border-right-0 p-2 box-shadow-inset h-40 w-183" name="q" type="text" placeholder="Etsi">
              <button class="btn btn-outline-success my-2 my-sm-0 rounded-0 border-top-1 border-bottom-1 border-right-1 border-left-0 text-dark p-2 box-shadow-inset h-40" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
