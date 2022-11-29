(function () {
	window.addEventListener("DOMContentLoaded", () => {
		const formBox = document.querySelector(".k1-form-slides")
		const nextButton = formBox.querySelectorAll(".slide-item__next")
		const finalButton = formBox.querySelector(".form-send-final")
		const introPicture = document.querySelector(".intro__picture")
		const introList = document.querySelector(".intro__list")
		const introText = document.querySelector(".intro__text")
		const staticColumnRows = document.querySelectorAll(".skills-block__static-column .skills-block__row[data-name]")
		const scrollBlock = document.querySelector(".skills-block__scroll-column")
		
		const contactsBlock = document.querySelector(".contacts-block")
		const contactsBlockCircles = document.querySelector(".contacts-block__circles")
		
		const stickyHeads = document.querySelectorAll(".skills-block__head")
		const stickyHeadsWrapper = document.querySelector(".skills-block__wrapper")
		
		const codeInput = document.querySelector("#sender-id")
		const header = document.querySelector("header.header")
		const footer = document.querySelector("footer.footer")
		const headerGetCode = document.querySelector(".get-code-js")
		const footerCloseButton = document.querySelector(".footer__close")

		const errorEmptyField = "Это обязательный вопрос."
		const errorInvalidField = "Неверно заполнено поле."
		
		let primarySocial = null
		let currentSocial
		
		let formData = {}
		let sticky = false
		let scrollRowsLeftPosition = 0
		let scroll = null
		let isCode = false
		
		let mail = null
		let code = null
		
		let isShowFooter = true
		
		if (location.search === "?q") {
			document.querySelector("#content-anchor").style.display = "block"
		}
		
		function hideHeader() {
			header.style.cssText = `
							padding: 0;
							height: 0px;
							overflow: hidden;
							transition: height .3s linear, padding .3s linear
							`
			
		}
		
		function showFooter() {
			footer.classList.remove("hide")
			
		}
		
		function hideFooter() {
			footer.classList.add("hide")
		}
		
		function getCodeFromGetCourse() {
			const introForm = document.querySelector(".intro__form-get-code")
			hideHeader()
			setTimeout(() => {
				introForm.style.maxHeight = "695px"
			}, 600)
		}
		
		function checkCode(e) {
			const target = e.target
			if(target.value.length > 6) {
				target.value = target.value.slice(0, -1)
			}
			if (target.value.length == 6 ) {
				fetch(`https://zarhrcxema.site/test.php?code=${target.value}`)
					.then(response => response.json())
					.then(data => {
						if (data.mail && data.mail.length > 0) {
							mail = data.mail
							code = data.code
							hideHeader()
							showFooter()
							setTimeout(() => {
								isCode = true
								document.querySelectorAll(".content-code-js").forEach(block => {
									block.style.display = "block"
									block.classList.remove("content-code-js")
								})
								setOnloadSocialError()
								setContactsBlockCircles()
								window.scrollTo({
									top: document.querySelector("#content-anchor").getBoundingClientRect().top,
									behavior: "smooth"
								})
								
							}, 600)
						}
					})
			}
		}
		
		function moveArrows(num, e) {
			const arLeft = document.querySelector(".skills-block__arrow-left")
			const arRight = document.querySelector(".skills-block__arrow-right")
			if (num === null ) {
				arLeft.style.left = `10px`
				arRight.style.right = `20px`
			}
			if (num === false) {
				arLeft.style.left = `${10 + e.target.scrollLeft}px`
				arRight.style.right = `${20 - e.target.scrollLeft}px`
			}
			if (sticky) {
				arLeft.style.left = `${10 + num}px`
				arRight.style.right = `${20 - num}px`
			} else {
			}
		}
		
		function scrollFixedBlock(check = false) {
			const wrapperRect = scrollBlock.getBoundingClientRect()
			const row = scrollBlock.querySelector(".skills-block__head")
			const rowRect = scrollBlock.querySelector(".skills-block__head-inner").getBoundingClientRect()
			scrollBlock.scrollLeft = row.scrollLeft
			scroll = row.scrollLeft
		}
		
		function hideSkillsArrows(cord, refer = false) {
			const wrapperRect = scrollBlock.getBoundingClientRect()
			const rowRect = scrollBlock.querySelector(".skills-block__row").getBoundingClientRect()
			const rows = scrollBlock.querySelectorAll(".skills-block__row")
			const row = scrollBlock.querySelector(".skills-block__head")
			row.scrollLeft = scrollBlock.scrollLeft
			scroll = scrollBlock.scrollLeft
			// moveArrows(scroll)
			// if (sticky) moveArrows(scrollBlock.scrollLeft)
			// else {
			// moveArrows(row.scrollLeft)
			// }
			// moveArrows(scrollBlock.scrollLeft)
			// console.log(scrollBlock.scrollLeft)
			// rightEl.scrollTop = leftEl.scrollTop * (rightWr.clientHeight - rightEl.clientHeight) / (leftWr.clientHeight - leftEl.clientHeight);
			
			
			// if (cord) {
			// 	// console.log("cord: ", cord)
			// 	scrollRowsLeftPosition = cord && typeof cord !== 'object' ? cord : rowRect.x
			// 	rows.forEach(row => {
			// 		row.style.transform = `translateX(-${wrapperRect.left -  cord}px)`
			// 	})
			// 	// console.log(wrapperRect.left)
			// } else {
			// 	rows.forEach(row => {
			// 		row.style.transform = `translateX(0px)`
			// 	})
			// }
			// // console.log(rowRect.x)
			// if (!refer) scrollFixedBlock(rowRect.x, true)
			// console.log(Math.round(rowRect.x))
			// console.log(Math.round(wrapperRect.x))
			if (Math.round(rowRect.x) === Math.round(wrapperRect.x)) {
				document.querySelector(".skills-block__arrow-left").classList.add("hide")
				document.querySelector(".skills-block__static-column").classList.remove("shadow")
			} else if (Math.abs(Math.round(wrapperRect.right) - Math.round(rowRect.x)) > 20){
				document.querySelector(".skills-block__arrow-left").classList.remove("hide")
				document.querySelector(".skills-block__static-column").classList.add("shadow")
			}

			if (Math.round(rowRect.right) === Math.round(wrapperRect.right)) {
				document.querySelector(".skills-block__arrow-right").classList.add("hide")
			} else if (Math.abs(Math.round(rowRect.right) - Math.round(wrapperRect.right)) > 20) {
				document.querySelector(".skills-block__arrow-right").classList.remove("hide")
			}
		}
		
		function makeStickyBlock() {
			// console.log(123123)
			const a = stickyHeadsWrapper.getBoundingClientRect()
			const rect = stickyHeads[0].getBoundingClientRect()
			const windowRect = document.querySelector("body").getBoundingClientRect()
			// console.log(a.y)
			if (a.y <= 0 && !sticky) {
				stickyHeads.forEach(head => {
					if (!head.closest(".content-code-js")) {
						head.classList.add("sticky")
					}
					
				})
				if (document.querySelector(".skills-block__head.sticky")) {
					document
						.querySelector(".skills-block__scroll-column .skills-block__head.sticky")
						.addEventListener("scroll", scrollFixedBlock)
				}
			
				sticky = true
			}
			if (a.y > 0 && sticky) {
				if (document.querySelector(".skills-block__head.sticky")) {
					document
						.querySelector(".skills-block__scroll-column .skills-block__head.sticky")
						.removeEventListener("scroll", scrollFixedBlock)
				}
				// moveArrows(null)
				// document
				// 	.querySelector(".skills-block__scroll-column .skills-block__head-inner")
				// 	.style.transform = "translate(0px)"
				stickyHeads.forEach(head => {
					head.classList.remove("sticky")
				})
				
				sticky = false
			}
			
			if (isShowFooter && windowRect.top < -1000) {
				hideFooter()
				isShowFooter = false
			}
		}
		

		
		
		
		/**
		 * make position circle block because positions in css destroy this block design
		 */
		
		function setContactsBlockCircles() {
			const blockHeight = contactsBlock.clientHeight
			const blockPosition = contactsBlock.offsetTop
			// console.log(contactsBlock.offsetLeft)
			contactsBlockCircles.style.cssText = `
				position: absolute;
				top: ${blockHeight + blockPosition}px;
				left: ${contactsBlock.offsetLeft}px;
				display: block;
			`
		}
		
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
      Спасибо! Ваши результаты переданы.
    </div>
  `
			document.querySelector(".contacts-block__circles").remove()
			// document.write()
		}

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
						// console.log("no-check")
						const input = document.querySelector(`input[name=show-${id}]`)
						input.checked = false
						// console.log(document.querySelectorAll(`[data-content=${id}] .global-has-error`))
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
		
		function setOnloadSocialError() {
			// console.log("onload")
			console.log(getChosenSocial())
			// formBox.querySelectorAll("input[name=\"chose-social\"]").forEach(elem => {
				!getChosenSocial().length
					? formBox.querySelector(".slide-check__choose").classList.add("error-soc", "global-has-error")
					: formBox.querySelector(".slide-check__choose").classList.remove("error-soc", "global-has-error")
			// })
		}
		
		function getChosenSocial() {
			return [...formBox.querySelectorAll("input[name=\"chose-social\"]")].filter(input => input.checked)
		}
		
		function setError(input, row, type) {
			if (type === "socials" ) {
				row.classList.add("error-soc", "global-has-error")
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
		
		function scrollToTest() {
			document.querySelector("#content-anchor").scrollIntoView({behavior: 'smooth'});
			hideFooter()
		}
		
		function scrollToError() {
			const blockContent = checkError().closest(".questions-block__content")
			// console.log(checkError())
			if (blockContent ) {
				const errorSocial =  blockContent.getAttribute("data-content")
				// console.log(errorSocial)
				const attr = blockContent.getAttribute("data-content")
				// console.log(attr)
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
			// document.querySelector("input[name='show-fb']").checked = false
			document.querySelector("input[name='show-ya']").checked = false
		}
		
		function getFormDataSkills() {
			let data = {}
			formBox.querySelectorAll(`.skills-block__static-column [data-name]`).forEach(row => {
				const typeName = row.getAttribute("data-name")
				const arrFields = document.getElementsByName(typeName)
				data[typeName] = {
					title: row.querySelector(".skills-block__name").textContent.trim(),
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
		
		function getName() {
			return formBox.querySelector("#user-name").value
		}
		
		function getPhone() {
			return formBox.querySelector("#user-phone").value
		}
		
		// function getSenderId() {
		// 	return formBox.querySelector("#sender-id").value
		// }
		
		function getSuccessProjects() {
			if (
				[...formBox.querySelectorAll("input[name='success-projects']")]
					.filter(elem => elem.checked)[0]
			) {
				return [...formBox.querySelectorAll("input[name='success-projects']")]
					.filter(elem => elem.checked)[0]
					.getAttribute("id")
			} else {
				setError(false, document.querySelector(".skills-block__row.success-projects"), "radio")
			}
		}
		
		function sendRequest(e) {
			validateInputText(false, formBox.querySelector("[data-type=\"telegram-nickname\"]"), "text")
			const socials = getChosenSocial()
			console.log(socials)
			if (!socials || !socials.length) {
				setError(false, formBox.querySelector(".slide-check__choose"), "socials")
			}
			if (formData["social_vk"]) delete formData["social_vk"]
			if (formData["social_fb"]) delete formData["social_fb"]
			if (formData["social_ya"]) delete formData["social_ya"]
			socials.forEach(elem => {
				formData[`social_${elem.getAttribute("id")}`] = getFormDataSocial(elem.getAttribute("id"))
			})
			formData.skills = getFormDataSkills()
			formData.currentSocial = currentSocial
			formData.phone = getPhone()
			formData.name = getName()
			formData.telegram = getTelegramNickname()
			formData.mail = mail
			formData.code = code
			formData.successProjects = getSuccessProjects()
			console.log(formData)
			if (checkError()) {
				scrollToError()
				return false
			}
			let sendError = false, count = 0, score = 0
			const url = "https://zarhrcxema.site/test.php"
			fetch(url, {
				method: "post",
				body: JSON.stringify(formData),
				headers: {
					"fast-quiz": "new-action",
				}
			})
				.then(data => data.text())
				.then(test => {
					console.log(test)
					putThanksMessage()
				})
		}

		function nextForm() {
			formData = getFormDataSocial()
			if (checkError()) {
				return false
			} else {
			}
			formBox.querySelectorAll(".slides__item").forEach(elem => elem.classList.remove("active"))
			formBox.querySelector(".slides__item--skills").classList.add("active")
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
					if (input.getAttribute("name") === "show-vk"
						|| input.getAttribute("name") === "show-fb"
						|| input.getAttribute("name") === "show-ya"
					) {
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
					if (input.closest(".skills-block__row") && !input.closest(".success-projects")) {
						const name = input.getAttribute("name")
						document.querySelector(`.skills-block__row[data-name=${name}]`).classList.remove("error-skill", "global-has-error")
						// input.closest(".slides-table__row").classList.remove("error-skill", "global-has-error")
					}
					if (input.closest(".success-projects")) {
						removeError(false, input.closest(".success-projects"))
					}
					//
				})
			})
			chooseSocial()
			dropIntroPicture()
			setScrollRowsHeight()
			resetShowSocialInput()
			
			// setContactsBlockCircles()
			hideSkillsArrows()
			makeStickyBlock()
			// setRowsHeight()
			// chooseCategory()
			// sendRequest()
			// sendButton.addEventListener("click", sendRequest)
			nextButton.forEach(button => button.addEventListener("click", nextForm))
			finalButton.addEventListener("click", sendRequest)
			window.addEventListener("resize", dropIntroPicture)
			window.addEventListener("resize", setScrollRowsHeight)
			window.addEventListener("resize", setContactsBlockCircles)
		
			scrollBlock.addEventListener("scroll", 	function (e) {
				hideSkillsArrows(false, false)
			})
			codeInput.addEventListener("input", checkCode)
			headerGetCode.addEventListener("click", getCodeFromGetCourse)
			footerCloseButton.addEventListener("click", hideFooter)
			// scrollBlock.addEventListener("scroll", scrollFixedBlock)
			document.addEventListener("scroll", makeStickyBlock)
			
			document.querySelector(".footer__anchor").addEventListener("click", scrollToTest)
		}
		
		init()

		
	})
})()
