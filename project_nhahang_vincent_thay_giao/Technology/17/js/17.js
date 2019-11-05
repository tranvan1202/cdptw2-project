Vue.component('tabs', {
	template: `
	<div>
		<div class="tabs">
			<ul>
				<li v-for="tab in tabs" :class="{ 'is-active': tab.isActive }">
					<a :href="tab.href" @click="selectTab(tab)">{{ tab.name }}</a>
				</li>
			</ul>
		</div>

		<div class="tabs-details">
			<slot></slot>
		</div>
	</div>
	`,
	data() {
		return {tabs: [] };
	},
	created() {

		this.tabs = this.$children;
	},
	methods: {
		selectTab(selectedTab) {
			this.tabs.forEach(tab => {
				tab.isActive = (tab.name == selectedTab.name);
			});
		}
	}
});
Vue.component('tab', {
	template: `
	<div v-show="isActive"><slot></slot></div>
	`,
	props: {
		name: { required: true },
		selected: { default: false}
	},
	data() {
		return {
			isActive: false
		};
	},
	computed: {

		href() {
			return '#' + this.name.toLowerCase().replace(/ /g, '-');
		}
	},
	mounted() {

		this.isActive = this.selected;

	}
});
new Vue({
	el: '#type-17'
});
$(document).ready(function() {
	$('.stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10);

    $(this).parent().children('li.star').each(function(e){
    	if (e < onStar) {
    		$(this).addClass('hover');
    	}
    	else {
    		$(this).removeClass('hover');
    	}
    });
    
	}).on('mouseout', function(){
		$(this).parent().children('li.star').each(function(e){
			$(this).removeClass('hover');
		});
	});
	$('.stars li').on('click', function(){
	    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
	    var stars = $(this).parent().children('li.star');
	    
	    for (i = 0; i < stars.length; i++) {
	    	$(stars[i]).removeClass('selected');
	    }
	    
	    for (i = 0; i < onStar; i++) {
	    	$(stars[i]).addClass('selected');
	    }
	    
	});	
});