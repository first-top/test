(function () {
	window.addEventListener("DOMContentLoaded", () => {
		const formBox = document.querySelector(".k1-form-slides")
		// const sendButton = formBox.querySelector(".form-send-final")
		const nextButton = formBox.querySelectorAll(".slide-item__next")
		const finalButton = formBox.querySelector(".form-send-final")
		const introPicture = document.querySelector(".intro__picture")
		const introList = document.querySelector(".intro__list")
		const introText = document.querySelector(".intro__text")
		const staticColumnRows = document.querySelectorAll(".skills-block__static-column .skills-block__row[data-name]")
		const scrollBlock = document.querySelector(".skills-block__scroll-column")
		// const questionToggleButtons = document.querySelectorAll(".k1-toggle-question")
		// const questionToggleRows = document.querySelectorAll(".questions-block__rows")
		
		

		
		const errorEmptyField = "Это обязательный вопрос."
		const errorInvalidField = "Неверно заполнено поле."
		
		let primarySocial = null
		let currentSocial
		
		let formData = {}
		
		// function setRowsHeight(choose) {
		// 	console.log(choose)
		// 	if (choose ) {
		// 		questionToggleButtons.forEach(button => {
		// 			button.classList.add("hide")
		// 		})
		// 	}
		// 	questionToggleRows.forEach(row => {
		// 		const height = row.clientHeight
		// 		if (row.closest(".questions-block__rows-wrapper")) {
		// 			row.closest(".questions-block__rows-wrapper").style.transition = "max-height .0s linear"
		// 		}
		// 		row.setAttribute("data-max-height", height)
				// console.log(row)
				// console.log(height)
				// if (row.closest(".questions-block__rows-wrapper")) {
				// 	row.closest(".questions-block__rows-wrapper").style.maxHeight = `${0}px`
				// 	row.closest(".questions-block__rows-wrapper").style.overflow = `hidden`
				// }
				//
				// setTimeout(()=> {
					// console.log("after: ", height)
				// }, 100)
				// row.style.maxHeight = `${height}px`
		// 	})
		// }
		
		// function toggleQuestion(e) {
		// 	const target = e.target
		// 	const row = target.closest(".questions-block__row").querySelector(".questions-block__rows-wrapper")
		// 	console.log(row)
		// 	target.classList.toggle("hide")
		//
		// 	if (target.classList.contains("hide")) {
		// 		row.style.maxHeight = `0px`
		// 		row.style.overflow = "hidden"
		// 		row.style.transition = "max-height .5s linear"
		// 	} else {
		// 		row.style.maxHeight = `${row.querySelector(".questions-block__rows").getAttribute("data-max-height")}px`
		// 		row.style.overflow = "hidden"
		// 		row.style.transition = "max-height .5s linear"
		// 	}
		// }
		
		function showTestContent(input, content) {
			const block = document.querySelector(`.questions-block__content[data-content="${content}"]`)
			if (input.checked) {
				block.style.display = "block"
				input.closest(".questions-block__title").style.paddingBottom = "20px"
			} else {
				block.style.display = "none"
				input.closest(".questions-block__title").style.paddingBottom = "6px"
			}
			
		}

		
		function setScrollRowsHeight() {
			staticColumnRows.forEach(row => {
				const rowHeight = row.clientHeight
				const attribute = row.getAttribute("data-name")
				scrollBlock.querySelector(`.skills-block__row[data-name=${attribute}]`).style.height = `${rowHeight}px`
			})
		}
		
		function dropIntroPicture() {
			if (window.innerWidth <= 480) {
				introList.before(introPicture)
			} else {
				introText.after(introPicture)
			}
		}
		
		// function chooseCategory() {
		// 	formBox.querySelectorAll(".slide-check-item").forEach(elem => {
		// 		elem.addEventListener("click", function () {
		// 			if (this.getAttribute("data-value") === "vk" ){
		// 				formBox.querySelector(".slides__item--vk").classList.add("active")
		// 				currentSocial = "slides__item--vk"
		// 			} else {
		// 				formBox.querySelector(".slides__item--fb").classList.add("active")
		// 				currentSocial = "slides__item--fb"
		// 			}
		// 			formBox.querySelector(".slides__item--intro").classList.remove("active")
		// 		})
		// 	})
		// }
		
		function putThanksMessage() {
			const main =  document.querySelector(".main")
			main.style.padding = "0"
			main.innerHTML = `
    <div class="thanks" >
      Спасибо! Ваши результаты переданы, мы с Вами свяжемся
    </div>
  `
			// document.write()
		}
		
		// function setPrimary(e) {
		// 	primarySocial = e.target.closest(".slide-check-item").querySelector("input").getAttribute("id")
		// 	console.log(primarySocial)
		// }
		
		function chooseSocial() {
			let id
			// let id = [...formBox.querySelectorAll("input[name=\"chose-social\"]")].filter(input => input.checked)[0].getAttribute("id")
			formBox.querySelectorAll("input[name=\"chose-social\"]").forEach(elem => {
				elem.addEventListener("change", function () {
					// console.log("change")
					
					id = this.getAttribute("id")
					this.checked
						? formBox.querySelector(`.social-item--${id}`).classList.add("chosen-soc")
						: formBox.querySelector(`.social-item--${id}`).classList.remove("chosen-soc")
					if (primarySocial === null) primarySocial = id
					// formBox.querySelector(".slide-check__choose").classList.remove("error-soc")
					!getChosenSocial().length
						? formBox.querySelector(".slide-check__choose").classList.add("error-soc", "global-has-error")
						: formBox.querySelector(".slide-check__choose").classList.remove("error-soc", "global-has-error")
					
					if (!elem.checked) {
						console.log("no-check")
						const input = document.querySelector(`input[name=show-${id}]`)
						input.checked = false
						console.log(document.querySelectorAll(`[data-content=${id}] .global-has-error`))
						document.querySelectorAll(`[data-content=${id}] .global-has-error`).forEach(error => {
							error.classList.remove("global-has-error")
						})
						showTestContent(input, id)
						// document.querySelector(`.questions-block__content[data-content=${id}]`).style.display = "none"
					}
					
					// removeError(false, formBox.querySelector(".slide-check__choose"))
					// if (this.checked) {
					// 	formBox.querySelector(`.social-item--${id}`).classList.add("chosen-soc")
					// } else {}
					// id = [...formBox.querySelectorAll("input[name=\"chose-social\"]")].filter(input => input.checked)[0].getAttribute("id")
					//
					// formBox.querySelectorAll(".social-item").forEach(item => {
					// 	item.classList.remove("chosen-soc")
					//
					// })
					
					// formBox.querySelector(`.social-item--${id}`).classList.add("chosen-soc")
					// setTimeout(()=> {
					// 	setRowsHeight(true)
					// }, 300)
					
				})
				if (elem.checked) {
					
					id = elem.getAttribute("id")
					formBox.querySelector(`.social-item--${id}`).classList.add("chosen-soc")
				}
				// elem.addEventListener("change", setPrimary, {once: true})
			})
			// currentSocial = id
		}
		
		function getChosenSocial() {
			return [...formBox.querySelectorAll("input[name=\"chose-social\"]")].filter(input => input.checked)
		}
		
		function setError(input, row, type) {
			if (type === "socials" ) {
				// console.log(row)
				row.classList.add("error-soc", "global-has-error")
				// console.log("no soc")
				return false
			}
			if (type === "radio-skills" ) {
				row.classList.add("error-skill", "global-has-error")
				return false
			}
			const errorField = row.querySelector(".slide-item__error-field")
			errorField.style.display = "block"
			row.classList.add("global-has-error")
			if (type === "email") {
				!input.value || !input.value.length
					? errorField.textContent = errorEmptyField
					: errorField.textContent = errorInvalidField
			}
			if (type === "checkbox") {
				errorField.textContent = errorEmptyField
			}
			if (type === "radio") {
				errorField.textContent = errorEmptyField
			}

		}
		
		function removeError(input, row) {
			row.classList.remove("global-has-error")
			if (row.querySelector(".slide-item__error-field")) row.querySelector(".slide-item__error-field").style.display = "none"
		}
		
		function checkError() {
			// console.log(formBox.querySelectorAll(".global-has-error"))
			return formBox.querySelector(".global-has-error")
		}
		
		function scrollToError() {
			const blockContent = checkError().closest(".questions-block__content")
			console.log(checkError())
			if (blockContent ) {
				const errorSocial =  blockContent.getAttribute("data-content")
				console.log(errorSocial)
				const attr = blockContent.getAttribute("data-content")
				console.log(attr)
				if (!document.querySelector(`input[name=show-${attr}]`).checked) {
					document.querySelector(`input[name=show-${attr}]`).click()
				}
				// document.querySelector(`input[name=show-${attr}]`).classList.
				// checkError().closest(".questions-block__content").style.display = "none"
			}
			checkError().scrollIntoView({behavior: 'smooth'});
		}
		
		function validateInputText(input, row, type) {
			
			if (type === "email") {
				const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/
				if (emailPattern.test(row.querySelector("input").value.toLowerCase())) {
					if (row.classList.contains("global-has-error")) removeError(input, row)
					return row.querySelector("input").value
				} else {
					setError(input, row, type)
				}
			}
			if (type === "text") {
				if (!row.querySelector("input").value) {
					setError(false, row, "text")
				} else {
					removeError(false, row)
					return row.querySelector("input").value
				}
			}
			
			return false
		}
		
		function getFormDataSocial(currentSocial) {
			
			let data = {}
			
			formBox.querySelectorAll(`.social-item--${currentSocial} \[data-type]`).forEach(row => {
				const typeName = row.getAttribute("data-type")
				const arrFields = document.getElementsByName(typeName)
				if (arrFields[0].getAttribute("type") === "checkbox" ) {
					if ([...arrFields].filter(input => input.checked).length) {
						data[typeName] = [...arrFields].filter(input => input.checked).map(elem => elem.getAttribute("id"))
					} else {
						setError(false, row, arrFields[0].getAttribute("type"))
					}
					
				}
				if (arrFields[0].getAttribute("type") === "radio") {
					if ([...arrFields].filter(input => input.checked).length) {
						data[typeName] = [...arrFields].filter(input => input.checked)[0].getAttribute("id")
						
					} else {
						setError(false, row, arrFields[0].getAttribute("type"))
					}
				}
				// if (typeName === "email") data[typeName] = validateInputText(false, row, typeName)
				// if (typeName === "telegram-nickname") data[typeName] = validateInputText(false, row, "text")
				
			})
			return data
		}
		
		function resetShowSocialInput() {
			document.querySelector("input[name='show-vk']").checked = false
			document.querySelector("input[name='show-fb']").checked = false
		}
		
		function getFormDataSkills() {
			let data = {}
			formBox.querySelectorAll(`.skills-block__static-column [data-name]`).forEach(row => {
				const typeName = row.getAttribute("data-name")
				const arrFields = document.getElementsByName(typeName)
				data[typeName] = {
					title: row.querySelector(".skills-block__name").textContent.trim(),
					// score: [...arrFields].filter(elem => elem.checked)[0].value
				}
				if ([...arrFields].filter(elem => elem.checked)[0]) {
					data[typeName].score = [...arrFields].filter(elem => elem.checked)[0].value
				} else {
					setError(false, row, "radio-skills")
				}
			})
			return data
		}
		
		function getTelegramNickname() {
			return formBox.querySelector("#user-telegram-nickname").value
		}
		
		function getEmail() {
			return formBox.querySelector("#user-email").value
		}
		
		function getPhone() {
			return formBox.querySelector("#user-phone").value
		}
		
		function getSenderId() {
			return formBox.querySelector("#sender-id").value
		}
		
		function sendRequest(e) {
			// e.preventDefault()
			// validateInputText(false, formBox.querySelector("[data-type=\"email\"]"), "email")
			validateInputText(false, formBox.querySelector("[data-type=\"telegram-nickname\"]"), "text")
			validateInputText(false, formBox.querySelector("[data-type=\"sender-id\"]"), "text")
			const socials = getChosenSocial()
			console.log(socials)
			if (!socials || !socials.length) {
				setError(false, formBox.querySelector(".slide-check__choose"), "socials")
				// return false
			}
			if (formData["social_vk"]) delete formData["social_vk"]
			if (formData["social_fb"]) delete formData["social_fb"]
			socials.forEach(elem => {
				formData[`social_${elem.getAttribute("id")}`] = getFormDataSocial(elem.getAttribute("id"))
			})
			formData.skills = getFormDataSkills()
			formData.currentSocial = currentSocial
			formData.phone = getPhone()
			formData.telegram = getTelegramNickname()
			formData.senderId = getSenderId()
			// const formData = Object.assign(getFormDataSocial(), getFormDataSkills() )
			// return false
			// console.log("send")
			console.log(formData)
			if (checkError()) {
				// console.log(checkError())
				scrollToError()
				// console.log("check errors")
				return false
			}
			let sendError = false, count = 0, score = 0
			// return false
			// const url = "http://e92821av.beget.tech/test.php"
			const url = "https://secretkadr.site/test.php"
			// return false
			fetch(url, {
				method: "post",
				body: JSON.stringify(formData),
				headers: {
					"fast-quiz": "new-action",
					// "access-control-allow-origin" : "https://first-top.github.io/test/"
				}
			})
				.then(data => data.text())
				.then(test => {
					console.log(test)
					putThanksMessage()
				})
		}
		// test-k1
		function nextForm() {
			formData = getFormDataSocial()
			if (checkError()) {
				// console.log("ошибка")
				return false
			} else {
				// console.log("ok")
			}
			formBox.querySelectorAll(".slides__item").forEach(elem => elem.classList.remove("active"))
			formBox.querySelector(".slides__item--skills").classList.add("active")
			// sendRequest()
		}
		
		function init() {
			formBox.querySelectorAll("input[type='text'], input[type='email']").forEach(input => {
				input.addEventListener("blur", function() {
					const type = this.getAttribute("type")
					switch (type) {
						case "email":
						case "text":
							validateInputText(this, this.closest(".slide-item__row"), type)
							break
						
					}
				})
			})
			formBox.querySelectorAll("input[type='checkbox']").forEach(input => {
				input.addEventListener("change", function() {
					if (input.getAttribute("name") === "chose-social") return false
					if (input.getAttribute("name") === "show-vk" || input.getAttribute("name") === "show-fb") {
						showTestContent(input, input.getAttribute("name").replace("show-", ""))
						return false
					}
					if (![...document.getElementsByName(this.getAttribute("name"))].filter(input => input.checked).length) {
						setError(false, input.closest(".slide-item__row"), "checkbox")
					} else {
						removeError(false, input.closest(".slide-item__row"))
					}
				})
			})
			formBox.querySelectorAll("input[type='radio']").forEach(input => {
				input.addEventListener("change", function() {
					if (input.closest(".slide-item__row")) removeError(false, input.closest(".slide-item__row"))
					if (input.closest(".skills-block__row")) {
						const name = input.getAttribute("name")
						document.querySelector(`.skills-block__row[data-name=${name}]`).classList.remove("error-skill", "global-has-error")
						// input.closest(".slides-table__row").classList.remove("error-skill", "global-has-error")
					}
					//
				})
			})
			chooseSocial()
			dropIntroPicture()
			setScrollRowsHeight()
			resetShowSocialInput()
			// setRowsHeight()
			// chooseCategory()
			// sendRequest()
			// sendButton.addEventListener("click", sendRequest)
			nextButton.forEach(button => button.addEventListener("click", nextForm))
			finalButton.addEventListener("click", sendRequest)
			window.addEventListener("resize", dropIntroPicture)
			window.addEventListener("resize", setScrollRowsHeight)
			// window.addEventListener("resize", setRowsHeight)
		}
		
		init()
		
	})
})()
