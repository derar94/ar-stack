<template>
  <b-container>
          <b-card  v-for="question in questions" :key="question.id">
              <b-card-title>
                  {{question.title}}
              </b-card-title>
              <b-card-body>
                  {{question.body}} 
              </b-card-body>
              <b-card-footer>
                  <b-button variant="primary">
                      <b-icon font-scale="1.5" icon="book">
                      </b-icon>
                      Answers
                  </b-button>
              </b-card-footer>
          </b-card>

  </b-container>
</template>

<script>
    export default {
        data() {
            return {
                questions: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/questions')
                .then(response => {
                  console.log(response);
                    this.questions = response.data;
                });
        },
        methods: {
            
        }
    }
</script>