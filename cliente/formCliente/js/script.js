function buscarCep(cep) {
	const textArea = document.querySelector('.text-area')
	const url = `https://viacep.com.br/ws/${cep}/json/`

	fetch(url).then(async response => {
		if (response.ok) {
			await response.json().then(data => {
				if (data.logradouro != undefined) {
					textArea.innerHTML =
						`Rua: ${data.logradouro}<br>
						 Bairro: ${data.bairro}<br>
						 Cidade: ${data.localidade}`
				} else {
					textArea.innerHTML = `CEP não encontrado`
				}
			})
		} else {
			textArea.innerHTML = `Ocorreu algum erro com a API`
		}
	})
		.catch((e) => {
			textArea.innerHTML = `CEP não encontrado`
		})

	if (cep != "") {
		textArea.style.display = 'flex'
	} else {
		textArea.style.display = 'none'
	}
}