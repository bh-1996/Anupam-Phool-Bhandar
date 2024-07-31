
@extends("Website.layouts.main")
@section('content')
  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container justify-content-center">
        <h2 class="">
          User Log In
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="">
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="password" placeholder="Enter your password" />
            </div>
            <div class="d-flex  mt-4 ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
@endsection
