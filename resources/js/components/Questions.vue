<template>
  <section style="margin-top:20px">
    <div class="container">
      <div class="columns">
        <div class="column is-one-fifth is-hidden-mobile">
          <nav class="panel is-warning">
            <p class="panel-heading">Dashboard</p>
            <a class="panel-block">New</a>
            <a class="panel-block">Top</a>
            <a class="panel-block">Not Answered</a>
            <a class="panel-block">Ask New</a>
          </nav>
        </div>

        <div class="column is-three-fifths">
          <div class="field has-addons">
            <p class="control is-expanded">
              <input class="input is-primary" type="text" placeholder="Search questions..." />
            </p>
            <p class="control">
              <button class="button is-primary">
                <span class="icon">
                  <i class="material-icons">search</i>
                </span>
                <span>Search</span>
              </button>
            </p>
          </div>
          <br>
          <h1 v-if="readyquestions" class="title is-5">Showing <span class=" has-text-weight-bold has-text-primary">{{questions.length}}</span> Question</h1>

          <div class="box" v-if="!readyquestions">
            <facebook-loader></facebook-loader>
          </div>
          <div class="box" v-if="!readyquestions">
            <facebook-loader></facebook-loader>
          </div>
          <div class="box" v-if="!readyquestions">
            <facebook-loader></facebook-loader>
          </div>
          <div class="box" v-if="!readyquestions">
            <facebook-loader></facebook-loader>
          </div>
          <div class="box" v-if="!readyquestions">
            <facebook-loader></facebook-loader>
          </div>
          <div class="box" v-if="!readyquestions">
            <facebook-loader></facebook-loader>
          </div>
          <div class="box" v-if="!readyquestions">
            <facebook-loader></facebook-loader>
          </div>
          <div class="box" v-if="!readyquestions">
            <facebook-loader></facebook-loader>
          </div>
          <div class="box" v-if="!readyquestions">
            <facebook-loader></facebook-loader>
          </div>

          <div v-for="question in questions" :key="question.id" class="box">
            <article class="media">
              <figure class="media-left">
                <p class="image is-128x128">
                  <img src="https://bulma.io/images/placeholders/128x128.png" />
                </p>
                <br />
                <nav class="level" style="justify-content:center">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon">
                        <i class="material-icons has-text-primary">save</i>
                      </span>
                    </a>
                    <a class="level-item">
                      <span class="icon">
                        <i class="material-icons has-text-danger">favorite</i>
                      </span>
                    </a>
                    <a class="level-item">
                      <span class="icon">
                        <i class="material-icons">question_answer</i>
                      </span>
                    </a>
                  </div>
                </nav>
              </figure>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>{{question.user.name}}</strong>
                    <small>{{question.user.email}}</small>
                    <small>
                      <timeago :datetime="question.created_at" :auto-update="60"></timeago>
                    </small>
                  </p>
                  <h1 class="title is-5">{{question.title}}</h1>
                  <div class="subtitle is-6">{{question.body}}</div>
                </div>
              </div>
              <div class="media-right">
                <i class="material-icons has-text-warning">visibility</i>
              </div>
            </article>
          </div>
        </div>

        <div class="column is-one-fifth is-hidden-mobile">
          <nav class="panel is-danger">
            <p class="panel-heading">Chanels</p>
            <div class="panel-block">
              <p class="control has-icons-left">
                <input class="input" type="text" placeholder="Search" />
                <span class="icon is-left">
                  <i class="material-icons">search</i>
                </span>
              </p>
            </div>
            <div class="box" v-if="!readychanels">
              <facebook-loader></facebook-loader>
              <facebook-loader></facebook-loader>
              <facebook-loader></facebook-loader>

              <facebook-loader></facebook-loader>
              <facebook-loader></facebook-loader>
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
      chanels: [],
      readyquestions: false,
      readychanels: false
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
        this.readyquestions = true;
      });
    },
    getChanels() {
      this.axios.get(route("chanels.latest")).then(response => {
        console.log(response);
        this.chanels = response.data;
        this.readychanels = true;
      });
    }
  }
};
</script>