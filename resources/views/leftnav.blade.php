<!-- <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar"> -->
<nav class="sidebar w3-bar-block collapsed w3-top" style="z-index:3;width:250px;" id="mySidebar">
    <div class="p-md-3">
        <!-- <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i> -->
        <!-- <h3 class="logo">VID-STReaming</h3> -->
        <img src="{{asset('public/images/logo.png')}}" alt="logo" class="logo-custom">
        <!-- asset de truy cap-> du an-> public -->
    </div>
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">

        <a href="{{route('category')}}" class="w3-bar-item w3-button">Movie</a>
        <a href="#" class="w3-bar-item w3-button">Series</a>
        <a href="#" class="w3-bar-item w3-button">Cartoon</a>
        <a href="#" class="w3-bar-item w3-button">Romantic</a>
        <a href="#" class="w3-bar-item w3-button">Comedy</a>
        <a href="#" class="w3-bar-item w3-button">TV Show</a>
        <a href="#" class="w3-bar-item w3-button">Drama</a>
        <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-left-align" id="myBtn">
            Country <i class="fa fa-caret-down"></i>
        </a>
        <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
            <a href="#" class="w3-bar-item w3-button">Korean</a>
            <a href="#" class="w3-bar-item w3-button">Vietnam</a>
            <a href="#" class="w3-bar-item w3-button">Japan</a>
            <a href="#" class="w3-bar-item w3-button">China</a>
            <a href="#" class="w3-bar-item w3-button">Thailand</a>
            <a href="#" class="w3-bar-item w3-button">America</a>
            <a href="#" class="w3-bar-item w3-button">England</a>
        </div>
        
    </div>
    <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding"
        onclick="document.getElementById('newsletter').style.display='block'">About us</a>
    <a href="#footer" class="w3-bar-item w3-button w3-padding">Subscribe</a>
</nav>
<!-- Top menu on small screens -->
<!-- <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i
            class="fa fa-bars"></i></a>
</header>