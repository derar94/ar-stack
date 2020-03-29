<template>
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-one-fifth">
          <aside class="menu">
            <p class="menu-label">Questions</p>
            <ul class="menu-list">
              <li>
                <a class="is-active">Latest</a>
              </li>
              <li>
                <a>Top</a>
              </li>
              <li>
                <a>Not Answered</a>
              </li>
              <li>
                <a>Ask</a>
              </li>
            </ul>
          </aside>
        </div>

        <div class="column is-three-fifths">
          <div class="hero">
            <div v-for="question in questions" :key="question.id" class="card">
              <header class="card-header">
                <p class="card-header-title">{{question.title}}</p>
              </header>
              <div class="card-content">
                <div class="content">{{question.body}}</div>
              </div>
            </div>
          </div>
        </div>

        <div class="column is-one-fifth">
          <p class="menu-label">Latest Chanels</p>
          <article class="message is-warning">
            <div class="message-body">
              Python
           </div>
          </article>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      questions: []
    };
  },
  created() {
    this.axios.get("http://localhost:8000/api/questions/all").then(response => {
      console.log(response);
      this.questions = response.data["data"];
    });
  },
  methods: {}
};
</script>