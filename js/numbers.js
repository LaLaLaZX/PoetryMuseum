const counters = document.querySelectorAll('[data-counter]');

//условие при нажатии
if (counters) {
	counters.forEach(counter => {
		counter.addEventListener('click', e => {
			const target = e.target;

			if (target.closest('.counter__button')) {
				if (target.closest('.counter').querySelector('input').value == '' && (target.classList.contains('counter__button_minus') || target.classList.contains('counter__button_plus'))) {
					target.closest('.counter').querySelector('input').value = 0;
				}
//если нажат + прибавлять
				let value = parseInt(target.closest('.counter').querySelector('input').value);

				if (target.classList.contains('counter__button_plus')) {
					value++;
				} 
                //если нажат - вычитать
                else {
					--value;
				}
//если значение меньше или равно 0 - добавление
				if (value <= 0) {
					value = 0;
					target.closest('.counter').querySelector('.counter__button_minus').classList.add('disabled')
				} 
//иначе удаление
               else 
                {
					target.closest('.counter').querySelector('.counter__button_minus').classList.remove('disabled')
				}

				target.closest('.counter').querySelector('input').value = value;
			}
		})
	})	
}


