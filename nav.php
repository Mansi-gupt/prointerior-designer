

    <!-- Navbar -->
    <nav class="navbar">
        <a href="#" class="logo link-color">
            <!-- <img src="./fixlogo.jpg" alt="" /> -->
            logo
        </a>

        <ul class="ul">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <span href="#" class="service-nav-click " onclick="showServices()">
                <div href="#" class="link-color">Services</div>
                <ul>
                    <a href="#">Electrical Work Services</a>
                    <a href="#">Pest Control</a>
                    <a href="#">Plumbing</a>
                    <a href="#">House Keeping</a>
                    <a href="#">Partition</a>
                    <a href="#">Furniture</a>
                    <a href="#">Printing</a>
                    <a href="#">Painting</a>
                    <a href="#">Interior</a>
                    <a href="#">Electronic Accessories</a>
                    <a href="#">Security Equipments</a>
                </ul>
            </span>
            <a href="#">Contact Us</a>
            <a href="#">
                <button class="nav-button-color">Login</button>
            </a>
        </ul>
        <i class="bi bi-list toggle-icon" onclick="openCloseButton()"></i>
    </nav>
    <!-- Navbar -->


    <script>

        const showServices = () => {
            const ul = document.querySelector(".service-nav-click ul");
            ul.classList.toggle("show");

        }


        const openCloseButton = () => {
            const i = document.querySelector("nav.navbar i.toggle-icon");
            const ul = document.querySelector("nav.navbar ul");

            ul.classList.toggle("show");
            i.classList.toggle("bi-x-lg");
        };
    </script>
