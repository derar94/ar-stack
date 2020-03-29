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
          <div class="field has-addons">
            <p class="control is-expanded">
              <input class="input is-primary is-rounded" type="text" placeholder="Search questions" />
            </p>
            <p class="control">
              <button class="button is-primary is-rounded">
                <span class="icon">
                  <i class="material-icons">search</i>
                </span>
                <span>Search</span>
              </button>
            </p>
          </div>

          <div v-for="question in questions" :key="question.id" class="level">
            <div class="card">
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
          <nav class="panel is-danger">
            <p class="panel-heading">Chanels</p>
            <div class="panel-block">
              <p class="control has-icons-left">
                <input class="input is-rounded" type="text" placeholder="Search" />
                <span class="icon is-left">
                  <i class="material-icons">search</i>
                </span>
              </p>
            </div>

            <a v-for="chanel in chanels" :key="chanel.key" class="panel-block">{{chanel.name}}</a>
          </nav>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      questions: [],
      chanels: []
    };
  },
  created() {
    this.getQuestions();
    this.getChanels();
  },
  methods: {
    getQuestions() {
      this.axios.get(route("questions.index")).then(response => {
        console.log(response);
        this.questions = response.data["data"];
      });
    },
    getChanels() {
      this.axios.get(route("chanels.latest")).then(response => {
        console.log(response);
        this.chanels = response.data;
      });
    }
  }
};
</script>