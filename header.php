<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="images/fabIcon.png">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <script src="js/home.js"></script>

<nav class="navbar">
        <div class="nav">
            <img src="./img/logo.png" class="logo" alt="">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="search brand, product">
                    <button class="search-btn">search</button>
                </div>
                <a href="#">
                        <button class="btn btn-secondary " type="button"   aria-haspopup="true" aria-expanded="false">
                        <img src="./img/coeur.png" alt="">
                        </button>
                        
                </a>
               <!-- <a href="#"><img src="img/user.png" alt=""></a>-->
                <a href="#">
                <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="./img/user.png" alt="">
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php if (isset($_SESSION['user'])) { ?>
            <a class="dropdown-item" href="logout.php" id="sign-out-option">
                <i class="fas fa-sign-out-alt"></i> Sign Out
            </a>
        <?php } else { ?>
            <a class="dropdown-item" href="./login.php" id="sign-in-option">
                <i class="fas fa-sign-in-alt"></i> Sign In
            </a>
            <br>
            <a class="dropdown-item" href="inscription.php" id="sign-up-option">
                <i class="fas fa-user-plus"></i> Sign Up
            </a>
        <?php } ?>
    </div>
</div>

                </a>
                <a href="./cart.php">
                        <button class="btn btn-secondary " type="button"   aria-haspopup="true" aria-expanded="false">
                        <img src="./img/cart.png" alt="">
                        </button>
                        
                </a>
        </div>
        </div>
        <ul class="links-container">
            <li class="link-item">
                <a href="index.html" class="link">Home</a>
            </li>
            <li class="link-item dropdown">
                <a href="#" class="link dropdown-toggle" id="categoryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                <a class="dropdown-item" href="category.html?type=men">Men</a>
                <a class="dropdown-item" href="category.html?type=women">Women</a>
                <a class="dropdown-item" href="category.html?type=kids">Kids</a>
                <a class="dropdown-item" href="category.html?type=accessories">Accessories</a>
                </div>
            </li>
            <li class="link-item"><a href="collection.html" class="link">Collection</a></li>
            <li class="link-item"><a href="contact.html" class="link">Contact</a></li>
        </ul>
 
</nav>



    <script>
        // Get the dropdown button element
var dropdownButton = document.querySelector(".dropdown-toggle");

// When the dropdown button is clicked
dropdownButton.addEventListener("click", function() {
    // Toggle the "show" class on the dropdown menu
    var dropdownMenu = document.querySelector(".dropdown-menu");
    dropdownMenu.classList.toggle("show");
});
// an array of categories
const categories = [
  { name: "Men", image: "../men.png" },
  { name: "Women", image: "women.jpg" },
  { name: "Kids", image: "kids.jpg" },
  { name: "Accessories", image: "accessories.jpg" }
];

// function to create the category items in the dropdown
const createCategoryDropdownItems = () => {
  let categoryItems = "";
  categories.forEach(category => {
    categoryItems += `
      <a class="dropdown-item" href="category.html?type=${category.name.toLowerCase()}">
        <img src="images/${category.image}" alt="${category.name}">
        <p>${category.name}</p>
      </a>
    `;
  });
  $("#category-dropdown-section").html(categoryItems);
};

// call the function to create the category items when the page loads
$(document).ready(() => {
  createCategoryDropdownItems();
});

</script>
<style>
    .dropdown-menu {
    display: none;
    flex-direction: column;

    
}

.dropdown-menu.show {
    display: block;
}
.dropdown-toggle::after {
    background-color: transparent !important;
}
.btn{
    background:transparent;
}

.dropdown-menu a {
    color: #805f64;
}
i {
    display: inline-block;
    vertical-align: middle;
}
.links-container .link-item.dropdown {
  position: relative;
}

.links-container .link-item.dropdown .dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1;
  background-color: #f5f5f5;
  min-width: 100%;
  padding: 10px 0;
}

.links-container .link-item.dropdown:hover .dropdown-menu {
  display: block;
}

.links-container .link-item.dropdown .dropdown-menu .dropdown-item {
  padding: 10px;
  color: #333;
  text-decoration: none;
  display: block;
}

.links-container .link-item.dropdown .dropdown-menu .dropdown-item:hover {
  background-color: #e5e5e5;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'roboto', sans-serif;
}

.navbar{
    position: sticky;
    top: 0;
    left: 0;
    width: 100%;
    background: #f7dfb5;
    z-index: 9;
}

.nav{
    padding: 10px 10vw;
    display: flex;
    justify-content: space-between;
}

.logo{
    height: 60px;
}
.nav-items{
    display: flex;
    align-items: center;
}

.search{
    width: 500px;
    display: flex;
}

.search-box{
    width: 50%;
    height: 40px;
    padding: 10px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    border: 1px solid  #723d46;
    text-transform: capitalize;
    background: none;
    color: #723d46;
    outline: none;
}

.search-btn{
    width: 20%;
    height: 40px;
    padding: 10px 20px;
    border: none;
    outline: none;
    cursor: pointer;
    background: #723d46;
    color: #fff;
    text-transform: capitalize;
    font-size: 18px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}

.search-box::placeholder{
    color: #7a5259;
}

.nav-items a{
    margin-left: 20px;
}

.nav-items a img{
    width: 30px;
}
.links-container{
    width: 100%;
    display: flex;
    padding: 10px 10vw;
    justify-content: center;
    list-style: none;
    border-top: 1px solid #d1d1d1;
}

.link{
    text-transform: capitalize;
    padding: 0 10px;
    margin: 0 5px;
    text-decoration: none;
    color: #383838;
    opacity: 0.5;
    transition: .5s;
}

.link:hover{
    opacity: 1;
}
/*contact us */
.contact .row{
    display: flex;
    flex-wrap: wrap-reverse;
    gap: 1%;
    align-items: center;
    
}

.contact .row form{
    flex:1 1 40rem;
    padding: 1rem 1rem;
    margin: 1%;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    border:.1rem solid #7a5259;
    background: #fff;
    border-radius: .5rem;
    

}

.contact .row .image{
    flex:1 1 40rem;
}

.contact .row .image img{
    width: 100%;
}

.contact .row form .box{
    padding:1rem;
    font-size: 1rem;
    color: #fff;
    text-transform: none;
    border:.1rem solid #7a5259;
    border-radius: .5rem;
    margin:.7rem 0;
    width: 90%;
}

.contact .row form .box:focus{
    border-color:#7a5259 ;
}

.contact .row form textarea{
    height: 10rem;
    resize: none;
}
.heading{
    text-align: center;
    font-size: 4rem;
    color:#f7dfb5;
    padding:1rem;
    margin:2rem 0;
    background:#f7dfb5;
}

.heading span{
    color:#805f64;
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    border-radius: 5rem;
    background:rgb(201, 141, 137);
    color:#583f43;
    padding: 0.3em;
    cursor: pointer;
    font-size: 1.7rem;
    border-color: #723d46;
}

.btn:hover{
    background:#7a5259;
}


</style>