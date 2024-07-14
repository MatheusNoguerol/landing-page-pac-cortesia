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

        },

        computed: {

        },

        methods: {
            emiteCortesia(){
                let self = this

                if(self.nome == null || self.nome == ''){
                    self.makeToast('warning')
                }else if(self.telefone == null || self.telefone == ''){
                    self.makeToast2('warning')
                }
                else if(self.telefone.length < 15){
                    self.makeToast4('warning')
                }else{
                    axios.post('emite-cortesia-usuario', {nome: self.nome, telefone: self.telefone})
                    .then((response) => {
                        console.log('response: ', response)
                        if(response.data.ref == 1){
                            self.makeToast3('danger')
                        }else{
                            this.$bvModal.show('modal-conclusao')
                            self.nome = null
                            self.telefone = null
                        }
                    }).catch((error) => {
                        console.log('Error: ', error)
                    })
                }

            },

            makeToast(variant = null) {
                this.$bvToast.toast('Informe o nome para concluir.', {
                title: `Atenção!`,
                variant: variant,
                solid: true
                })
            },

            makeToast2(variant = null) {
                this.$bvToast.toast('Informe o telefone para concluir.', {
                title: `Atenção!`,
                variant: variant,
                solid: true
                })
            },

            makeToast3(variant = null) {
                this.$bvToast.toast('Participante já concluiu a inscrição.', {
                title: `Atenção!`,
                variant: variant,
                solid: true
                })
            },

            makeToast4(variant = null) {
                this.$bvToast.toast('Número de telefone inválido.', {
                title: `Atenção!`,
                variant: variant,
                solid: true
                })
            },
        }
    }
</script>

<template>
    <div class="container">
        <b-row class="m-2">
            <b-col class="text-center d-flex justify-content-center align-items-center">
                <div id="logo-educaterra">
                    <img class="img-fluid mx-auto rounded" :src="require('/laragon/www/landing-page-pac-cortesia/public/images/logoEducaTerra.png')" alt="imagem">
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

                    <div class="card-body text-center">
                        <p>Um app que vai nos ajudar a tornar o mundo mais verde.</p>
                        <p>E para dar início a essa mudança retire a sua <b>recompensa</b> aqui conosco!</p>

                        <div id="app-pac" class="text-center">
                            <img class="img-fluid mx-auto rounded" :src="require('/laragon/www/landing-page-pac-cortesia/public/images/mockup1.png')" alt="imagem">
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
                <b-form-input v-mask="'(##) #####-####'" @change="validaTelefone()" id="telefone" v-model="telefone" class="form-control"></b-form-input>
            </b-col>
        </b-row>

        <b-row class="m-2">
            <b-col class="d-flex justify-content-end right">
                <b-button pill variant="primary" @click="emiteCortesia">Concluir</b-button>
            </b-col>
        </b-row>

        <b-modal id="modal-conclusao" size="sm" 
        header-bg-variant="light"
        body-bg-variant="light"
        footer-bg-variant="light"
        ok-only
        ok-title="Fechar">
            <h3 class="my-4" style="background-color: #f7f7f7;"><b style="background-color: #f7f7f7;">Obrigado por concluir a inscrição, compareça ao estande para retirar a recompensa.</b></h3>
        </b-modal>
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
