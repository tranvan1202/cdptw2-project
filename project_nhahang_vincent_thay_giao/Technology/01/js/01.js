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
              url: "#",
              name: "Menu 1",
              target: "_blank"
            },
            {
              url: "#",
              name: "Menu 2",
              target: "_blank"
            },
            {
              url: "#",
              name: "Menu 3",
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
                <div :class="{ isOpen }"  class="dropdown">
                    <ul :class="{ isOpen }" >
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
