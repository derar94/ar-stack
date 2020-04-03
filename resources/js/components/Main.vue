<template>
  <div>
    <nav class="navbar is-white" role="navigation" aria-label="main navigation">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io">
            <img src="https://s.gravatar.com/avatar/9280e280f9f1960f5d15798230a8f22f?size=100&default=retro"  />
          </a>

          <a
            role="button"
            class="navbar-burger burger"
            aria-label="menu"
            aria-expanded="false"
            data-target="navbarBasicExample"
            @click="showNav = !showNav"
            :class="{ 'is-active': showNav }"
          >
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu" :class="{ 'is-active': showNav }">
          <div class="navbar-start">
            <router-link class="navbar-item" to="/">Home</router-link>
            <router-link class="navbar-item" to="/questions">Questions</router-link>
            <router-link class="navbar-item" to="/posts">Posts</router-link>
            <router-link class="navbar-item" to="/projects">Projects</router-link>
            <router-link class="navbar-item" to="/chanels">Chanels</router-link>
            <router-link class="navbar-item" to="/offers">Offers</router-link>
            <router-link class="navbar-item" to="/users">Users</router-link>
          </div>
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-bold is-link is-rounded">
                  <strong>Sign up</strong>
                </a>
                <a class="button is-link is-rounded">Log in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <vue-page-transition name="zoom">
            <router-view></router-view>
        </vue-page-transition>
  </div>
</template>
<script>
export default {
  data() {
    return {
      showNav: false
    };
  },
  computed: {}
};
</script>
<style>
.navbar {
  border-bottom: 1px solid #eee;
}
</style>