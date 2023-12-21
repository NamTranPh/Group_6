// B1: truy cập vào mảng phần tử .nav-item

// B2: gán hàm xảy ra khi phần tử được click thông qua method: addEventListener

// trong đó hàm xử lý:
// 1) truy cập vào mảng phần tử đang được active và xóa class active (.nav-active)
// 2) thêm class active (.nav-active) vào phần tử được click
// xử lý thông qua classList của element

const listNavItem = document.querySelectorAll('.nav-item');

listNavItem.forEach(function (item) {
	// item chính là 1 element trong mảng (chính là 1 thẻ li.nav-item)
	item.addEventListener('click', function (e) {
		// e là đại diện cho 1 object event
		console.log(e);
		// truy cập vào mảng các phần tử đang được active
		const listActiveNav = document.querySelectorAll('.nav-active');
		// truy cập vào từng phần tử đang active và xóa class active đi
		listActiveNav.forEach(function (itemActive) {
			itemActive.classList.remove('nav-active');
		});

		// currentTarget sẽ luôn trỏ đến phần tử được khai báo addEventListener
		e.currentTarget.classList.add('nav-active');
	});
});

function toggleNavbar() {
	const navbar = document.querySelector('#mainNavbar');
	navbar.classList.toggle('sidebar-small');
}

let productcard = document.querySelectorAll('.product-cart');
productcard.forEach(function(item){
	const buttonpreview = item.querySelector('.icon');
	const img = item.querySelector('.main-img');
	const url = img.getAttribute('src');
	buttonpreview.addEventListener('click',function(){
		document.querySelector('#fullimg').getAttribute('src',url);
	});
});
