Vue.component("navigation", {
  props: ["item"],
  data() {
    return {
      isOpen: false,
      active: false,
      navList: [
        { url: "#", name: "Home" },
        {
          url: "#",
          name: "About",
          children: [
            {
              url: "https://twitter.com/andrejsharapov",
              name: "Twitter",
              target: "_blank"
            },
            {
              url: "https://dribbble.com/andrejsharapov",
              name: "Dribbble",
              target: "_blank"
            },
            {
              url: "https://www.behance.net/andrejsharapov",
              name: "Behance",
              target: "_blank"
            },
            {
              url: "https://www.instagram.com/andrej.sharapov/",
              name: "Instagram",
              target: "_blank"
            }
          ]
        },
        { url: "#", name: "Bolg" },
        { url: "#", name: "Shop" },
      ]
    };
  },
  template: `
    <ul id="navigation" class="nav navbar-nav">
        <li v-for="item in navList">
            <template v-if="item.children">
                <a 
                  :href="item.url" 
                  :title="item.name" 
                  @click="isOpen = !isOpen, active = !active" 
                  :class="{ active }">{{ item.name }} </a>
                <div :class="{ isOpen }" class="dropdown">
                    <ul>
                        <li 
                          v-for="{ url, name, index, target } in item.children" 
                          :key="index">
                            <a :href="url" :title="name" :target="target">{{ name }}
                        </li>
                    </ul>
                </div>
            </template>
            <template v-else>
                <a 
                  :href="item.url" 
                  :title="item.name">{{ item.name }}</a>
            </template>
        </li>
    </ul>
    `







});

new Vue({ el: "#navbar" });
