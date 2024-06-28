<script>
    export default {
        data(){
            return{
                nome: null,
                telefone: null
            }
        },
        props: {
           
        },
        mounted() {
            console.log('Component mounted.'+ this.user)
        },

        computed: {

        },

        methods: {
            emiteCortesia(){
                let self = this

                axios.post('emite-cortesia-usuario', {nome: self.nome, telefone: self.telefone})
                .then((response) => {
                    console.log('response: ', response)
                }).catch((error) => {
                    console.log('Error: ', error)
                })
            }
        }
    }
</script>

<template>
    <div class="container">
        <b-row class="m-2">
            <b-col class="text-center d-flex justify-content-center align-items-center">
                <div id="logo-educaterra">
                    <img class="img-fluid mx-auto rounded" :src="require('/xampp/htdocs/landing-page-pac-cortesia/public/images/logoRedonda.png')" alt="imagem">
                </div>
            </b-col>
        </b-row>

        <b-row class="m-2">
            <b-col>
                <div id="agradecimento">
                    <p class="text-center p-0 m-0 agradecimento">Obrigado pela participação.</p>
                    <p class="text-center p-0 mb-3 mt-0 mr-0 ml-0"><b>GRATIDÃO!</b></p>
                </div>
            </b-col>
        </b-row>

        <b-row class="m-2">
            <b-col>
                <div>
                    <small><p class="mb-0 pb-0"><b>Em breve...</b></p></small>
                </div>
            </b-col>
        </b-row>

        <b-row class="m-2">
            <b-col>
                <div id="call-action-app-pac" class="card">
                    <div class="card-header text-center rounded bg-white">
                        Aplicativo PAC <br>
                    </div>

                    <div class="card-body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque animi beatae culpa! Rem soluta blanditiis sapiente doloremque voluptatum pariatur ratione porro earum, at dignissimos reiciendis quas unde inventore obcaecati! Distinctio.</p>

                        <div id="app-pac" class="text-center">
                            <img class="img-fluid mx-auto rounded" :src="require('/xampp/htdocs/landing-page-pac-cortesia/public/images/1.jpg')" alt="imagem">
                        </div>
                    </div>

                    <div class="card-footer bg-white text-center">
                        <p class="bg-white">Uma nova experiência digital!</p>
                        <p class="bg-white">Aguarde.</p>
                    </div>
                </div>
            </b-col>
        </b-row>
        
        <b-row class="m-2">
            <b-col>
                <hr class="w-100 bg-secondary">
            </b-col>
        </b-row>

        <b-row class="m-2">
            <b-col class="d-flex justify-content-center text-center align-items-center">
                <p>Conclua esse informativo para ganhar a recompensa!</p>
            </b-col>
        </b-row>

        
        <b-row class="m-2">
            <b-col lg="4">
                <label for="nome"><b>Nome</b></label>
                <b-form-input id="nome" v-model="nome" class="form-control"></b-form-input>
            </b-col>
        </b-row>

        <b-row class="m-2">
            <b-col lg="4">
                <label for="telefone"><b>Telefone</b></label>
                <b-form-input id="telefone" v-model="telefone" class="form-control"></b-form-input>
            </b-col>
        </b-row>

        <b-row class="m-2">
            <b-col class="d-flex justify-content-end right">
                <b-button pill variant="primary">Concluir</b-button>
            </b-col>
        </b-row>
    </div>
</template>

<style>
*{
    margin: 0;
    padding: 0;
    font-family: 'JetBrains mono';
    background-color: #E5ECE6;
}
@keyframes myAnim {
	0% {
		transform: scale(0.5);
	}

	100% {
		transform: scale(1);
	}
}
.agradecimento{
    animation: myAnim 2s ease 0s 1 normal forwards;
}
</style>
