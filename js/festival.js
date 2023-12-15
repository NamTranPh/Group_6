const filterId = new URL(document.location).searchParams.get('re_id'); // re_id là tên của giá trị truyền vầo

function getListDataByCategory(_id) {
	return window.listFestival.filter((item, index) => {
		return Array.isArray(item.religion) && item.religion.includes(_id);
	});
}

function renderListFestival(_listFestival) {
	const target = document.querySelector('#festivalWrapper'); // thay doi id theo code html
	let str = '';
	_listFestival.forEach((product, index) => {
		str += ` <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://statics.vinpearl.com/cac-le-hoi-am-nhac-tren-the-gioi-0_1667985261.jpg"
          class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">${product.name}</h5>
          <p class="card-text">${product.short_description}</p>
          <p class="card-text"><i class="fa-solid fa-location-dot"></i> <small class="text-body-secondary">${product.address}</small></p>
          <a href='/fschitiet.html?f_id=${product.id}'>Xem thêm</a>
        </div>
      </div>
    </div>
  </div>`;
	});
	// gán ngược html lại cho thẻ chứa danh sách sản phẩm
	target.innerHTML = str;
}

renderListFestival(getListDataByCategory(filterId));
