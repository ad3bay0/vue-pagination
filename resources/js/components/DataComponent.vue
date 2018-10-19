<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Categories</div>

                    <div class="card-body">
                     <ul>

                         <li v-for="tag in categoryData.data" :key="tag.id">{{tag.name}}</li>
                     </ul>

                        <pagination :data="categoryData" @pagination-change-page="getResults"></pagination>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        mounted(){

            console.log('Component mounted');
        },

        data(){

            return{

                categoryData: {},
            }
        },


        created(){

            this.getResults();
        },

        methods:{

            getResults(page){


                if(typeof page == 'undefined'){

                    page = 1;

                }


                this.$http.get('/categories?page='+page).then(response=>{


                    return response.json();

                }).then(data=>{

                   this.categoryData = data;

                })

            }

        }
    }
</script>
