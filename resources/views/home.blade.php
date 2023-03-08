@extends('layout.app')

@section('content')
{{-- <div id="carouselExampleSlidesOnly" class="carousel slide m-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('home/images/home.jpg') }}" class="d-block w-75 " alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('home/images/home1.jpg') }}" class="d-block w-75" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('home/images/home2.jpg') }}" class="d-block w-75" alt="...">
      </div>
    </div>
</div> --}}

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Web-APP QuanLiLuaGiong</b></h1>
        <hr style="width:200px; height:10px; color:green;" class="w3-round">
    </div>

    <!-- Photo grid (modal) -->
    <div class="w3-row-padding">
        <div class="w3-half">
            <img src="{{url('public/home/images/home2.jpg')}}" alt="QuanLyLuaGiong Group" style="width: 100%" onclick="onClick(this)">
            <img src="{{url('public/home/images/home.jpg')}}" alt="QuanLyLuaGiong Group" style="width: 100%" onclick="onClick(this)">
    </div>

        <div class="w3-half">
            <img src="{{url('public/home/images/home1.jpg')}}" alt="QuanLyLuaGiong Group" style="width: 100%" onclick="onClick(this)">
            <img src="{{url('public/home/images/home2.jpg')}}" alt="QuanLyLuaGiong Group" style="width: 100%" onclick="onClick(this)">
        </div>
    </div>
    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
        <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption"></p>
        </div>
    </div>
    <!-- Services -->
    <div class="w3-container" id="services" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-green"><b>Viện biến đổi khí hậu.</b></h1>
        <hr style="width:200px; height:10px; color:green;" class="w3-round">
        <p>Nghiên cứu, bảo tồn và phất triển các giống lúa mùa cho vùng lũ đồng bằng Sông Cửu Long</p>
        <p>Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>



      <!-- Contact -->
      <div class="w3-container" id="contact" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-green"><b>Contact.</b></h1>

        <form action="/action_page.php" target="_blank">
          <div class="w3-section">
            <label>Name</label>
            <input class="w3-input w3-border" type="text" name="Name" required>
          </div>
          <div class="w3-section">
            <label>Email</label>
            <input class="w3-input w3-border" type="text" name="Email" required>
          </div>
          <div class="w3-section">
            <label>Message</label>
            <input class="w3-input w3-border" type="text" name="Message" required>
          </div>
          <button type="submit" class="w3-button w3-block w3-padding-large w3-green w3-margin-bottom">Send Message</button>
        </form>
      </div>

@endsection
