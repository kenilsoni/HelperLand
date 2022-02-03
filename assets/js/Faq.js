// Navbar Toggle
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));

const tgle_nav = document.querySelector(".tgle_class");
const navmenu = document.querySelector(".navmenu");

tgle_nav.addEventListener("click", () => {
	tgle_nav.classList.toggle("open");
	navmenu.classList.toggle("open");
});


// Select Button forCustomer

const forCustomer = document.querySelector(".forCustomer");
const forServiceProvider = document.querySelector(".forServiceProvider");

forCustomer.addEventListener("click", () => {
	forServiceProvider.classList.remove("active");
	forCustomer.classList.add("active");
	fetchFaqs("forCustomer");
});
forServiceProvider.addEventListener("click", () => {
	forServiceProvider.classList.add("active");
	forCustomer.classList.remove("active");
	fetchFaqs("forServiceProvider");
});

// For data

const accordion = document.querySelector(".accordion");

window.addEventListener("load", () => {
	fetchFaqs("forCustomer");
});
const fetchFaqs = (data) => {
	accordion.innerHTML = "";
	for (let j = 0; j < 9; j++) {
		accordion.innerHTML += `
	<div class="accordion-item">
					<div class="accordion-header" id="faq${j}">
						<div
							class="accordion-btn collapsed"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#collapse${j}"
							aria-expanded="false"
							aria-controls="collapse${j}"
						>
							<img src="./assets/Images/right_arrow.png" alt="expandImage" />
							<span class="question">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisl nunc, iaculis mattis tellus ac ut non
								imperdiet velit?
							</span>
						</div>
					</div>
					<div id="collapse${j}" class="accordion-collapse collapse" aria-labelledby="faq${j}" data-bs-parent="#faqAccordion">
						<div class="accordion-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id diam tincidunt, fringilla ante vitae, dapibus velit.
							Vivamus id tortor rhoncus, efficitur quam at, suscipit tortor. Integer fermentum convallis eros vel semper. Ut non
							imperdiet velit. Praesent eu dui vel lacus porta eleifend eget quis dui. Integer tempus massa in gravida tincidunt. Fusce
							in libero tristique, euismod nisi vel, luctus urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec et
							placerat arcu. Suspendisse lacinia tristique massa. Etiam risus justo, scelerisque id arcu eu, sodales tempor eros.
							Aliquam efficitur pretium urna, sit amet congue risus malesuada rutrum. Donec id massa vel velit ullamcorper accumsan ut
							eget nisl. Fusce viverra commodo lacus, sit amet facilisis leo luctus dictum.
						</div>
					</div>
	</div>`;
	}
};

