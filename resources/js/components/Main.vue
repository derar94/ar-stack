<template>
    <div>
  <b-navbar class="mb-4" toggleable="md" type="light" variant="warning">
    <b-navbar-brand href="#">ar-stack</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item href="#"><router-link class="nav-link" to="/">Home</router-link ></b-nav-item>
        <b-nav-item href="#"><router-link class="nav-link" to="/questions">Questions</router-link></b-nav-item>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
  <router-view></router-view>
</div>
</template>
<style>
  .nav-link
  {
    color:black;
    font-weight: bold;
  }
</style>