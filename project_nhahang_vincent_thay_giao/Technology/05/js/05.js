Vue.component( "feedback", {
	props: ["item"],
	data() {
		return {
			userList: [
				{src: "images/user-1.png", 
				alt: "user-1", 
				name: "ADAM JEFFERSON", 
				address: "Lawyer, New York",
				content: "Vincent was one of the first restaurants I discovered upon moving to New York last summer, and it remains a favorite. Despite its sizable menu full of pastas, sandwiches, and pizzas, I almost always get the same thing – the Vincent pizza. It’s made with Ricotta & Marinara sauces, spiced with oregano, and topped with eggplant, red onions, basil, Pecorino Romano & Mozzarella. It really is one of the best pizzas I’ve ever had – and I eat a lot of pizza."},
				
				{src: "images/user-2.png", 
				alt: "user-2", 
				name: "SAMANTHA GREENBERG", 
				address: "Artist, Boston",
				content: "The pizza is delicious! The crust is thin and crispy, great sauce, and awesome cheese blend. And it makes a cute cheap date!"}
			]
		};
	},
	template: `
		<ul class="ct_1_right">
		    <li v-for="item in userList">
		      <div class="box_ct_1">
		        <p>{{ item.content }}</p>
		      </div>
		      <div class="user">
		        <div class="img_user">
		          <img :src="item.url" alt="item.alt">
		        </div>
		        <div class="info_user">
		          <span>{{ item.name }}</span>
		          <span>{{ item.address }}</span>
		        </div>
		      </div>
		    </li>
		  </ul>` });
	new Vue({ el: "#box-05-right" });