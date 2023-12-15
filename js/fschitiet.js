const filterId = new URL(document.location).searchParams.get('f_id'); // re_id là tên của giá trị truyền vầo

function getListDataByCategory(_id) {
	return window.listFestival.filter((item, index) => {
		return item.id === +_id;
	});
}

function renderListFestival(_listFestival) {
	const target = document.querySelector('#chitiettong'); // thay doi id theo code html
	let str = '';
	_listFestival.forEach((product, index) => {
		str += `${product.long_description}`;
	});
	// gán ngược html lại cho thẻ chứa danh sách sản phẩm
	target.innerHTML = str;
}

renderListFestival(getListDataByCategory(filterId));
