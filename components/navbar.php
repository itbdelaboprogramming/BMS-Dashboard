<h5 id="dateSection" class="dateSection" style="float:right;"></h5>
<script>
    var today = new Date();
    today = parseInt(today.getMonth() + 1) + '/' + today.getDate() + '/' + today.getFullYear() + " " + today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    document.getElementById("dateSection").innerHTML = today
</script>
<div class="sidebar">
    <div class="logo-details">
        <i class='bx bx-info-circle icon'></i>
        <div class="logo_name">ItbDeLabo</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li onclick="openTab(event, 'battery-status')">
            <a href="#">
                <i class="fa-solid fa-battery-empty  fa-2xl"></i>
                <span class="links_name">Battery Status</span>
            </a>
            <span class="tooltip">Battery Status</span>
        </li>
        <li onclick="openTab(event, 'daily-report')">
            <a href="#">
                <i class="fa-solid fa-calendar-day  fa-2xl"></i>
                <span class="links_name">Daily</span>
            </a>
            <span class="tooltip">Daily</span>
        </li>
        <li onclick="openTab(event, 'monthly-report')">
            <a href="#">
                <i class="fa-solid fa-calendar-days  fa-2xl"></i>
                <span class="links_name">Monthly</span>
            </a>
            <span class="tooltip">Monthly</span>
        </li>
        <li onclick="openTab(event, 'yearly-report')">
            <a href="#">
                <i class="fa-solid fa-calendar  fa-2xl"></i>
                <span class="links_name">Yearly</span>
            </a>
            <span class="tooltip">Yearly</span>
        </li>
        <li onclick="openTab(event, 'events')">
            <a href="#">
                <i class="fa-solid fa-calendar-check  fa-2xl"></i>
                <span class="links_name">Events</span>
            </a>
            <span class="tooltip">Events</span>
        </li>
    </ul>
</div>

<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    let navbar = document.querySelector(".dateSection")

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        navbar.classList.toggle("disappear");
        menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
    }
</script>