$(document).ready(function(){
    $('.fa-bars').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $(window).on('load scroll',function(){
        $('fa-bars').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        if($(window).scrollTop() > 30){
            $('header').addClass('header-active');
        }else{
            $('header').removeClass('header-active');
        }
    });
    
});


// const createHeader = () => {
//     let header = document.querySelector('header');

//     header.innerHTML = `
//     <a  href="#" 
//                 class="logo"><img src="images/Logo OB Web small.jpg" alt="logo"></a>
            
//             <div class="search-bar">
//                 <form action="search">
//                     <button type="submit" class="search-icons"><i class="fas fa-search"></i></button>  
//                     <input type="text" placeholder="Tìm kiếm..." class="search-input"></i>
//                 </form>
//             </div> 
//             <nav class="navbar">
//                 <ul class="navbar-list">
//                     <li><a href="#home" class="active"><i class="fas fa-home" id="home-btn"></i>Trang chủ</a></li>
                    
//                     <li><a href="#feature"><i class="fas fa-umbrella-beach" id="feature-btn"></i>Khám Phá</a></li>

//                     <li><a href="#hotel"><i class="fas fa-hotel" id="hotel-btn"></i>Khách sạn</a></li>

//                     <li><a href="#transport"><i class="fas fa-bus" id="bus-btn"></i>Phương tiện</a></li>

//                     <li><a href="#food"><i class="fas fa-utensils" id="restaurant-btn"></i>Ẩm thực</a></li>

//                     <li><a href="#contact"><i class="fas fa-phone" id="phone-btn"></i>Liên hệ</a></li>

//                     <li><a href="#cart" class="default-icons"><i class="fas fa-shopping-cart" id="cart-btn"></i><span>Giỏ hàng</span></a> </li>

//                     <li><a href="#user" class="default-icons"><i class="fas fa-user" id="login-btn"></i><span>Đăng nhập</span></a></li>
                        
//                     <li><a href="#setting" class="default-icons"><i class="fas fa-cog" id="setting-btn"></i><span>Cài đặt</span></a></li>  
//                 </ul>
//             </nav>
            
//             <div><i class="fas fa-bars"></i></div>
//     `;
// }

// createHeader();